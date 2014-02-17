<?php
class category extends Checklogin{
	
	function __construct(){
		parent::check_admin();
		$this->ob_tree=base::load_class("catetree");
		$this->mysql=$this->ob_tree->mysql;
	}
	
	function init(){
		$this->ob_tree->tree(0);
		template('category_list','admin');
	}
	
	public function add(){
		$parentid=isset($_GET['p'])?intval($_GET['p']):0;
		$model_arr=base::load_cache('cache_model','_model');
		$this->ob_tree->tree(1);
		assign("model",$model_arr);
		assign("parentid",$parentid);
		assign("parentname",catname($parentid));
		assign("template_cate",get_tem_file("cate"));
		assign("template_list",get_tem_file("list"));
		assign("template_show",get_tem_file("show"));
		template('category_add','admin');
	}
	
	public function add_save(){
		$config=base::load_cache("cache_set_config","_config");
		$catname=$_POST['catname'];
		$catdir=$_POST['catdir'];
		$thumb=$_POST['thumb'];
		$is_link=intval($_POST['is_link']);
		$url=safe_replace($_POST['url']);
		$model=$_POST['model'];
		$sort=intval($_POST['sort']);
		$is_show=intval($_POST['is_show']);
		$parentid=intval($_POST['parentid']);
		$is_target=intval($_POST['is_target']);
		$is_html=intval($_POST['is_html']);
		$template_cate=$_POST['template_cate'];
		$template_list=$_POST['template_list'];
		$template_show=$_POST['template_show'];
		$seo_title=$_POST['seo_title'];
		$seo_key=$_POST['seo_key'];
		$seo_des=$_POST['seo_des'];
		$modelid=modelid($model);
		
		if(empty($catname)||empty($catdir)||empty($model)){
			showmsg(C('material_not_complete'),'-1');
		}
		
		if(!check_str($catdir,'/^[a-z0-9][a-z0-9]*$/')){
			showmsg(C('catdir').C('numbers_and_letters'),'-1');
		}
		
		if($is_html==1){
			if($config['createhtml']!=1){
				showmsg(C('config_html_error'),'index.php?m=91736&c=setting');
			}
		}
		
		$nums=$this->mysql->db_num("category","catdir='".$catdir."'");
		if($nums>0){
			showmsg(C('catdir_exist'),'-1');
		}
		
		$sql="insert into ".DB_PRE."category (catname,catdir,thumb,is_link,url,model,modelid,sort,is_show,is_target,is_html,template_cate,template_list,parentid,template_show,seo_title,seo_key,seo_des) values ('".$catname."','".$catdir."','".$thumb."','".$is_link."','".$url."','".$model."','".$modelid."','".$sort."','".$is_show."','".$is_target."','".$is_html."','".$template_cate."','".$template_list."','".$parentid."','".$template_show."','".$seo_title."','".$seo_key."','".$seo_des."')";
		$this->mysql->query($sql);
		$catid=$this->mysql->insert_id();
		
		if($is_link==0){//生成url
			$ob_url=base::load_class("url");
			$url=$ob_url->caturl($catid,$catdir,$is_html);
			$this->mysql->db_update("category","`url`='".$url."'","`catid`=".$catid);
		}
		
		$this->category_cache();
		showmsg(C('add_success'),'-1');
	}
	
	public function edit(){
		$id=isset($_GET['id'])?intval($_GET['id']):0;
		$category=base::load_cache('cache_category','_category');
		$array=get_category($id);
		$this->ob_tree->tree(1);
		assign("rs",$array);
		assign("catname",catname($array['parentid']));
		assign("template_cate",get_tem_file("cate"));
		assign("template_list",get_tem_file("list"));
		assign("template_show",get_tem_file("show"));
		unset($rs);
		template('category_edit','admin');
	}
	
	public function edit_save(){
		$config=base::load_cache("cache_set_config","_config");
		$catid=intval($_POST['catid']);
		$catname=$_POST['catname'];
		$catdir=$_POST['catdir'];
		$thumb=$_POST['thumb'];
		$is_link=intval($_POST['is_link']);
		$url=safe_replace($_POST['url']);
		$sort=intval($_POST['sort']);
		$is_show=intval($_POST['is_show']);
		$parentid=intval($_POST['parentid']);
		$is_target=intval($_POST['is_target']);
		$is_html=intval($_POST['is_html']);
		$template_cate=$_POST['template_cate'];
		$template_list=$_POST['template_list'];
		$template_show=$_POST['template_show'];
		$seo_title=$_POST['seo_title'];
		$seo_key=$_POST['seo_key'];
		$seo_des=$_POST['seo_des'];
		
		if(empty($catname)||empty($catdir)||empty($catid)){
			showmsg(C('material_not_complete'),'-1');
		}
		
		if(!check_str($catdir,'/^[a-z0-9][a-z0-9]*$/')){
			showmsg(C('catdir').C('numbers_and_letters'),'-1');
		}
		
		if($is_html==1){
			if($config['createhtml']!=1){
				showmsg(C('config_html_error'),'index.php?m=91736&c=setting');
			}
		}
		
		$nums=$this->mysql->db_num("category","catdir='".$catdir."' and catid!=".$catid);
		if($nums>0){
			showmsg(C('catdir_exist'),'-1');
		}
		
		if($is_link==0){   //生成url
			$ob_url=base::load_class("url");
			$url=$ob_url->caturl($catid,$catdir,$is_html);
		}
		
		$this->mysql->db_update("category","`catname`='".$catname."',`catdir`='".$catdir."',`thumb`='".$thumb."',`is_link`='".$is_link."',`url`='".$url."',`sort`='".$sort."',`is_show`='".$is_show."',`is_target`='".$is_target."',`is_html`='".$is_html."',`parentid`='".$parentid."',`template_cate`='".$template_cate."',`template_list`='".$template_list."',`template_show`='".$template_show."',`seo_title`='".$seo_title."',`seo_key`='".$seo_key."',`seo_des`='".$seo_des."'","`catid`=".$catid);
		$this->category_cache();
		showmsg(C('update_success'),'index.php?m=91736&c=category');
	}
	
	public function sort_save(){
		$catid=$_POST['catid'];
		foreach($catid as $val){
			$sort=$_POST["sort{$val}"];
			if(is_numeric($sort)){
				$this->mysql->db_update("category","`sort`='".$sort."'","`catid`=".$val);
			}
		}
		$this->category_cache();
		showmsg(C('update_success'),'index.php?m=91736&c=category');
	}
	
	public function delete(){
		$id=isset($_GET['id'])?intval($_GET['id']):0;
		
		$num=$this->mysql->db_num("content","`catid`=".$id);
		if($num>0){
			showmsg(C('clear_data'),'-1');
		}
		unset($num);
		
		$num=$this->mysql->db_num("category","`parentid`=".$id);
		if($num>0){
			showmsg(C('delete_next_category'),'-1');
		}
		unset($num);
		
		$this->mysql->db_delete("category","`catid`=".$id);
		$this->category_cache();
		showmsg(C('delete_success'),'-1');
	}
	
	public function clear_data(){
		$id=isset($_GET['id'])?intval($_GET['id']):0;
		$num=$this->mysql->db_num("category","`parentid`=".$id);
		if($num>0){
			showmsg(C('clear_next_category'),'-1');
		}
		$rs=$this->mysql->get_one("select catid,model from ".DB_PRE."category where `catid`=".$id);
		$model=$rs['model'];
		unset($rs);
		$query=$this->mysql->query("select catid,contentid from ".DB_PRE."content where `catid`=".$id);
		while($rs=$this->mysql->fetch_rows($query)){
			$this->mysql->db_delete($model,"`contentid`=".$rs['contentid']);
		}
		$this->mysql->db_delete('content',"`catid`=".$id);
		showmsg(C('success'),'-1');
	}
	
	public function cache(){
		$this->category_cache();
		showmsg(C('update_success'),'-1');
	}
	
	public function category_cache(){
		$rs=$this->mysql->fetch_asc("select * from ".DB_PRE."category order by sort asc,catid asc");
		$s="<?php\n\$_category=".var_export($rs,true).";\n?>";
		$file=CACHE_SYS_PATH.'cache_category.php';
		creat_inc($file,$s);
	}
}

?>