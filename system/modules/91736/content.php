<?php
class content extends Checklogin{
	function __construct(){
		parent::check_admin();
		$this->ob_url=base::load_class("url");
		$this->html=base::load_class("html");
		$this->mysql=$this->html->mysql;
	}

	public function init(){
		$catid=isset($_GET['catid'])?intval($_GET['catid']):0;
		assign("catid",$catid);
		assign("catname",catname($catid));
		$model=modelname($catid);
		if($model=='single'){
			$num=$this->mysql->db_num("content","`catid`=".$catid);
			if(empty($num)){
				$this->add();
			}else{
				$rs=$this->mysql->get_one("select * from ".DB_PRE."content where `catid`=".$catid);
				header("Location:index.php?m=91736&c=content&f=edit&id=".$rs['contentid']);
			}
		}else{
			template('content_list','admin');
		}
	}
	
	public function add(){
		$input=base::load_class('input');
		$catid=isset($_GET['catid'])?intval($_GET['catid']):0;
		$model=modelname($catid);
		
		$field=base::load_cache("cache_field_".$model,"_field");
		$fields="";
		foreach($field as $value){
			$fields.="<tr>\n";
			$fields.="<td align=\"right\">".$value['name']."��</td>\n";
			$fields.="<td colspan=\"3\">".$input->$value['formtype']($value['field'],'',$value['width'],$value['height'],$value['initial'])." ".$value['explain']."</td>\n";
			$fields.="</tr>\n";
		}
		
		assign("catid",$catid);
		assign("catname",catname($catid));
		assign("fields",$fields);
		
		if($model=='single'){
			template('single_add','admin');  //�����Ŀ����ģ��Ϊ��ҳģ�ͣ����غ�̨��ҳ���ģ��
		}else{
			template('content_add','admin');
		}
	}
	
	public function edit(){
		$input=base::load_class('input');
		$id=isset($_GET['id'])?intval($_GET['id']):0;
		
		$rs=$this->mysql->get_one("select * from ".DB_PRE."content where `contentid`=".$id);
		$model=modelname($rs['catid']);
		$rs2=$this->mysql->get_one("select * from ".DB_PRE.$model." where `contentid`=".$id);
		
		$field=base::load_cache("cache_field_".$model,"_field");
		$fields="";
		foreach($field as $value){
			$fields.="<tr>\n";
			$fields.="<td align=\"right\">".$value['name']."��</td>\n";
			$fields.="<td colspan=\"3\">".$input->$value['formtype']($value['field'],$rs2[$value['field']],$value['width'],$value['height'],$value['initial'])." ".$value['explain']."</td>\n";
			$fields.="</tr>\n";
		}
		
		if(!empty($rs['style'])){//�жϱ�����ʽ��תΪ����
			$style=explode(" ",$rs['style']);
		}else{
			$style=array();
		}

		assign("rs",$rs);
		assign("style",$style);
		assign("catid",$rs['catid']);
		assign("catname",catname($rs['catid']));
		assign("fields",$fields);
		
		
		if($model=='single'){
			template('single_edit','admin');  //�����Ŀ����ģ��Ϊ��ҳģ�ͣ����غ�̨��ҳ���ģ��
		}else{
			template('content_edit','admin');
		}
	}
	
	public function add_save(){
		$title=safe_html($_POST['title']);
		$commend=intval($_POST['commend']);
		$username=safe_html($_POST['username']);
		$thumb=$_POST['thumb'];
		$keywords=safe_html($_POST['keywords']);
		$description=$_POST['description'];
		$inputtime=datetime();
		$updatetime=strtotime($_POST['updatetime']);
		
		$sort=$_POST['sort'];
		
		$url=$_POST['url'];
		$catid=intval($_POST['catid']);
		$userid=$_SESSION['admin_id'];
		$fields=$_POST['fields'];
		
		$style=$_POST['title_color']." ".$_POST['title_weight'];
		
		if(empty($title)||empty($catid)||empty($userid)||empty($updatetime)){
			showmsg(C('material_not_complete'),'-1');
		}
		
		$model=modelname($catid);
		if(empty($model)){
			showmsg(C('error'),'-1');
		}
		
		$table=$this->mysql->show_table();   //�ж����ݱ��Ƿ����
		if(!in_array(DB_PRE.$model,$table)){
			showmsg(C('table_not_exist'),'-1');
		}
		
		
		//���content
		$sql="insert into ".DB_PRE."content(title,commend,username,thumb,keywords,description,inputtime,updatetime,url,catid,userid,sort,style) values('{$title}','{$commend}','{$username}','{$thumb}','{$keywords}','{$description}','{$inputtime}','{$updatetime}','{$url}','{$catid}','{$userid}','{$sort}','{$style}')";
		$this->mysql->query($sql);
		$last_id=$this->mysql->insert_id();

		
		//��Ӹ��ӱ�
		$sql_fields='`contentid`';
		$sql_value=$last_id;
		
		if(!empty($_POST['uploadtype'])){ //�ж��Ƿ��ж�ͼ�ϴ�
			$upload_array=$this->upload_more('morefile');
			$uploadtype=$_POST['uploadtype'];
			$fields[$uploadtype]=serialize(array_clear($upload_array));
		}
		
		foreach($fields as $key=>$value){
			$sql_fields.=",`".$key."`";
			if(is_array($value)){
				$value_arr='';
				foreach($value as $k=>$v){
					$value_arr.=$v.',';
				}
				$value=$value_arr;
			}
			$sql_value.=",'".$value."'";
		}
		
		$query=$this->mysql->query("insert into ".DB_PRE.$model."({$sql_fields}) values ({$sql_value})");
		if(!$query){
			$this->mysql->db_delete("content","`contentid`=".$last_id);
			showmsg(C('insert_table_error'),'-1');
		}
		
		//���ɾ�̬
		$config=base::load_cache("cache_set_config","_config");
		$config_html=$config['createhtml'];    //ȡ��ϵͳ���û���
		$array=get_category($catid);
		$ishtml=$array['is_html'];   //ȡ����Ŀ�Ƿ���������html
		
		if(substr($url,0,7)!="http://"){   //�ж�url�Ƿ�Ϊ����,�粻�������url����������html
			
			if($model=='single'){
				$url=$array['url'];    //����ǵ�ҳģ��,urlֱ�ӵ�����Ŀurl
			}else{
				$url=$this->ob_url->conurl($catid,$last_id,$ishtml,$inputtime);
			}
			$this->mysql->db_update("content","`url`='".$url."'","`contentid`=".$last_id);                     //����url������
			
			if($config_html==1&&$ishtml==1){
				if($model=='single'){
					$url=$url."index.html";
				}
				$this->html->creat_show($catid,$last_id,$url);   //��������html
			}
		}
		
		if($config_html==1&&$ishtml==1){
				$parent=is_parent($catid);
				$parent_id=explode(",",ltrim($parent,","));
				if(count(array_filter($parent_id))!=0){    //�ж��Ƿ��и���
					foreach($parent_id as $value){
						$parent_cat=get_category($value);   //ȡ��������Ŀ��url
						$this->html->creat_list($value,"",$parent_cat['url']."index.html");   //���ɸ���Ŀҳ
						$this->html->creat_list($catid,"",$array['url']."index.html");     //���ɵ�ǰ��Ŀҳ
					}
				}else{
					$this->html->creat_list($catid,"",$array['url']."index.html");   //��û�и���,�����б�ҳ,���Ḻ��,Ĭ��ֻ���ɵ�ǰ��Ŀ��һҳ
				}
		}
		
		if($config_html==1){     //���ϵͳ��������html��������ҳ
			$this->html->creat_index();
		}

		showmsg(C('add_success'),'-1');
	}
	
	//��ͼ�ϴ�����
	private function upload_more($uploadfile){
		require_once(LIB_PATH.'upload.class.php');
		$upload = new upload(500000,'image');
		$upload->allowed_file_ext = array( 'gif', 'jpg', 'jpeg', 'png' );
		$upload->upload_form_field = $uploadfile;
		$upload->out_save_dir = "";
		$upload->upload_process();
		$upload_array=explode(',',$upload->save_array);
		return $upload_array;
	}
	
	public function edit_save(){
		$title=safe_html($_POST['title']);
		$commend=intval($_POST['commend']);
		$username=safe_html($_POST['username']);
		$thumb=$_POST['thumb'];
		$keywords=$_POST['keywords'];
		$description=$_POST['description'];
		$inputtime=$_POST['inputtime'];
		$updatetime=strtotime($_POST['updatetime']);
		
		$sort=$_POST['sort'];
		
		$url=$_POST['url'];
		$catid=intval($_POST['catid']);
		$id=intval($_POST['id']);
		$fields=$_POST['fields'];
		$style=$_POST['title_color']." ".$_POST['title_weight'];
		
		if(empty($title)||empty($catid)||empty($inputtime)){
			showmsg(C('material_not_complete'),'-1');
		}
		
		$model=modelname($catid);
		if(empty($model)){
			showmsg(C('error'),'-1');
		}
		
		$table=$this->mysql->show_table();   //�ж����ݱ��Ƿ����
		if(!in_array(DB_PRE.$model,$table)){
			showmsg(C('table_not_exist'),'-1');
		}
		
		
		//����content
		$sql="update ".DB_PRE."content set title='{$title}',commend='{$commend}',username='{$username}',thumb='{$thumb}',keywords='{$keywords}',description='{$description}',updatetime='{$updatetime}',url='{$url}',sort='{$sort}',style='{$style}' where contentid='{$id}'";
		$this->mysql->query($sql);
		
		//���¸��ӱ�
		$field_sql='';
	
		if(!empty($_POST['uploadtype'])){ //�ж��Ƿ��ж�ͼ�ϴ�
			$upload_array=$this->upload_more('morefile');
			$uploadtype=$_POST['uploadtype'];
			$old_img=array_clear($_POST["fields"][$uploadtype]);
			if(!empty($old_img)){
				$array=array_merger($old_img,$upload_array);
			}else{
				array_pop($upload_array);
				$array=$upload_array;
			}
			$fields[$uploadtype]=serialize($array);
		}
		
		foreach($fields as $k=>$v){
			$f_value=$v;
			if(is_array($v)){
				$f_value=implode(',',$v);
			}
			$field_sql.=",`{$k}`='{$f_value}'";
		}
		$field_sql=substr($field_sql,1);
		$field_sql="update ".DB_PRE.$model." set {$field_sql} where contentid={$id}";
		$query=$this->mysql->query($field_sql);
		if(!$query){
			showmsg(C('update_table_error'),'-1');
		}
		
		//���ɾ�̬
		$config=base::load_cache("cache_set_config","_config");
		$config_html=$config['createhtml'];    //ȡ��ϵͳ���û���
		$array=get_category($catid);
		$ishtml=$array['is_html'];   //ȡ����Ŀ�Ƿ���������html
		
		if(substr($url,0,7)!="http://"){   //�ж�url�Ƿ�Ϊ����,�粻�������url����������html
			
			if($model=='single'){
				$url=$array['url'];    //����ǵ�ҳģ��,urlֱ�ӵ�����Ŀurl
			}else{
				$url=$this->ob_url->conurl($catid,$id,$ishtml,$inputtime);
			}
			$this->mysql->db_update("content","`url`='".$url."'","`contentid`=".$id);                     //����url������
			
			if($config_html==1&&$ishtml==1){
				if($model=='single'){
					$url=$url."index.html";
				}
				$this->html->creat_show($catid,$id,$url);   //��������html
			}
		}
		
		if($config_html==1&&$ishtml==1){
				$parent=is_parent($catid);
				$parent_id=explode(",",ltrim($parent,","));
				if(count(array_filter($parent_id))!=0){    //�ж��Ƿ��и���
					foreach($parent_id as $value){
						$parent_cat=get_category($value);   //ȡ��������Ŀ��url
						$this->html->creat_list($value,"",$parent_cat['url']."index.html");   //���ɸ���Ŀҳ
						$this->html->creat_list($catid,"",$array['url']."index.html");     //���ɵ�ǰ��Ŀҳ
					}
				}else{
					$this->html->creat_list($catid,"",$array['url']."index.html");   //��û�и���,�����б�ҳ,���Ḻ��,Ĭ��ֻ���ɵ�ǰ��Ŀ��һҳ
				}
		}
		
		if($config_html==1){     //���ϵͳ��������html��������ҳ
			$this->html->creat_index();
		}
		
		showmsg(C('update_success'),'index.php?m=91736&c=content&catid='.$catid);
	}
	
	public function delete(){
		if(isset($_POST['id'])){
			foreach($_POST['id'] as $id){
				$this->del_data($id);
			}
		}elseif(isset($_GET['id'])){
			$id=$_GET['id'];
			$this->del_data($id);
		}else{
			showmsg(C('error'),'-1');
		}
		showmsg(C('delete_success'),'-1');
	}
	
	//��������ɾ������
	private function del_data($id){
		$rs=$this->mysql->get_one("select * from ".DB_PRE."content where `contentid`=".$id);
		if(file_exists($rs['url'])){   //ɾ�����ɵ��ļ�
			unlink($rs['url']);
		}
		
		//ȡ��ͼƬ���ɵ�����ͼ��ɾ��
		$photo=explode("/",$rs['thumb']);
		if(count($photo)==4){
			$folder=str_replace($photo[3],'',$rs['thumb']);
			$fp=opendir($folder);
			$photoname=explode(".",$photo[3]);
			while($files=readdir($fp)){
				if ($files!="." && $files!=".." && is_file($folder.$files)){
					if(strstr($files,$photoname[0])!=""){
						unlink($folder.$files);
					}
				}
			}
			
		}

		if(file_exists($rs['thumb'])){   //ɾ������ͼ
			unlink($rs['thumb']);
		}
		$model=modelname($rs['catid']);
		unset($rs);
		$field=base::load_cache('cache_field_product','_field');
		foreach($field as $key=>$value){
			if($value['formtype']=='image'){
				$image=$value['field'];
				$rs=$this->mysql->get_one("select * from ".DB_PRE.$model." where `contentid`=".$id);
				if(file_exists($rs[$image])){   //ɾ����������ͼƬ
					unlink($rs[$image]);
				}
			}
		}
		$this->mysql->db_delete('content','`contentid`='.$id);
		$this->mysql->db_delete($model,'`contentid`='.$id);
	}
}
?>