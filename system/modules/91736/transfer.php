<?php 
class transfer extends Checklogin{
	
	function __construct(){
		parent::check_admin();
		$this->ob_tree=base::load_class("catetree");
		$this->mysql=$this->ob_tree->mysql;
		$catid=$_GET['catid'];
		assign('catid',$catid);
	}
	
	public function init(){
		$this->ob_tree->tree(1);
		template('transfer_category','admin');
	}
	
	//��Ŀ����ת��
	public function transfer_save(){
		$fromcate=$_POST['fromcate'];
		$tocate=$_POST['tocate'];
		
		if($fromcate == $tocate){ //�ж��ύ���Ƿ�����ͬһ��Ŀ
			showmsg(C('category_same'),'-1');
		}
		
		if(empty($fromcate) || empty($tocate)){ //�ж��Ƿ��ύ��ID
			showmsg(C('material_not_complete'),'-1');
		}
		
		$from_son=get_catids($fromcate); //��ȡ�������࣬�ж��Ƿ�������Ŀ�����������Ŀ����ת������
		$to_son=get_catids($tocate);
		if(!empty($from_son) || !empty($to_son)){
			showmsg(C('category_error'),'-1');
		}
		
		$from_table=modelname($fromcate);//��ȡģ�ͱ������������ͬһģ�ͣ�����ת������
		$to_table=modelname($tocate);
		if($from_table != $to_table){
			showmsg(C('model_error'),'-1');
		}
		
		$this->mysql->db_update("content","`catid`='".$tocate."'","`catid`=".$fromcate);
		
		showmsg(C('config_success_url'),'index.php?m=91736&c=categorytree');
	}
	
	public function transfer_content(){
		if(isset($_POST['id'])){
			$contentid=$_POST['id'];
			$contentid=implode(",",$contentid);
			assign('contentid',$contentid);
			$this->ob_tree->tree(1);
		}else{
			showmsg(C('error'),'-1');
		}
		template('transfer_content','admin');
	}
	
	//��������ת��
	public function transfer_content_save(){
		$tocate=$_POST['tocate'];
		$contentid=$_POST['contentid'];
		
		if(empty($contentid) || empty($tocate)){ //�ж��Ƿ��ύ��ID
			showmsg(C('material_not_complete'),'-1');
		}
		
		$to_son=get_catids($tocate); //��ȡ�������࣬�ж��Ƿ�������Ŀ�����������Ŀ����ת������
		if(!empty($to_son)){
			showmsg(C('category_error'),'-1');
		}
		
		$contentid=explode(",",$contentid);
		$to_table=modelname($tocate);
		foreach($contentid as $id){
			$rs=$this->mysql->get_one("select * from ".DB_PRE."content where `contentid`=".$id);
			$catid=$rs['catid'];
			$modeltable=modelname($catid);
			if(($tocate != $catid) && ($to_table == $modeltable)){
				$this->mysql->db_update("content","`catid`='".$tocate."'","`contentid`=".$id);
			}
		}
		showmsg(C('config_success_url'),'index.php?m=91736&c=categorytree');
	}
}
?>