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
	
	//栏目数据转移
	public function transfer_save(){
		$fromcate=$_POST['fromcate'];
		$tocate=$_POST['tocate'];
		
		if($fromcate == $tocate){ //判断提交的是否属于同一栏目
			showmsg(C('category_same'),'-1');
		}
		
		if(empty($fromcate) || empty($tocate)){ //判断是否提交有ID
			showmsg(C('material_not_complete'),'-1');
		}
		
		$from_son=get_catids($fromcate); //获取下属分类，判断是否有子栏目，如果有子栏目则不予转移数据
		$to_son=get_catids($tocate);
		if(!empty($from_son) || !empty($to_son)){
			showmsg(C('category_error'),'-1');
		}
		
		$from_table=modelname($fromcate);//获取模型表名，如果不是同一模型，不予转移数据
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
	
	//内容数据转移
	public function transfer_content_save(){
		$tocate=$_POST['tocate'];
		$contentid=$_POST['contentid'];
		
		if(empty($contentid) || empty($tocate)){ //判断是否提交有ID
			showmsg(C('material_not_complete'),'-1');
		}
		
		$to_son=get_catids($tocate); //获取下属分类，判断是否有子栏目，如果有子栏目则不予转移数据
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