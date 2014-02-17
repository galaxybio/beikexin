<?php
class flash extends Checklogin{

	public function init(){
		template('flash_list','admin/flash');
	}
	
	public function lock(){
		$id=isset($_GET['id'])?intval($_GET['id']):0;
		$lockid=isset($_GET['lockid'])?intval($_GET['lockid']):0;
		$this->mysql->db_update('flash','`is_lock`='.$lockid,'`id`='.$id);
		showmsg(C('update_success'),'-1');
	}
	
	public function edit(){
		$id=isset($_GET['id'])?intval($_GET['id']):0;
		$rs=$this->mysql->get_one('select * from '.DB_PRE.'flash where `id`='.$id);
		assign('rs',$rs);
		template('flash_edit','admin/flash');
	}
	
	public function editsave(){
		$id=isset($_POST['id'])?intval($_POST['id']):0;
		$title=safe_html($_POST['title']);
		$url=safe_html($_POST['url']);
		$thumb=safe_html($_POST['thumb']);
		if(empty($title)||empty($url)||empty($id)||empty($thumb)){
			showmsg(C('material_not_complete'),'-1');
		}
		$this->mysql->db_update('flash',"`title`='".$title."',`url`='".$url."',`thumb`='".$thumb."'",'`id`='.$id);
		$this->creat_xml();
		showmsg(C('update_success'),'index.php?m=flash&c=flash');
	}
	
	public function add(){
		template('flash_add','admin/flash');
	}
	
	public function addsave(){
		$title=safe_html($_POST['title']);
		$url=safe_html($_POST['url']);
		$thumb=safe_html($_POST['thumb']);
		if(empty($title)||empty($url)||empty($thumb)){
			showmsg(C('material_not_complete'),'-1');
		}
		$this->mysql->db_insert('flash',"`title`='".$title."',`url`='".$url."',`thumb`='".$thumb."',`inputtime`='".datetime()."',`is_lock`=0");
		$this->creat_xml();
		showmsg(C('add_success'),'index.php?m=flash&c=flash');
	}
	
	public function delete(){
		$id=isset($_GET['id'])?intval($_GET['id']):0;
		$rs=$this->mysql->get_one("select * from ".DB_PRE."flash where `id`=".$id);
		if(file_exists($rs['thumb'])){   //É¾³ýËõÂÔÍ¼
			unlink($rs['thumb']);
		}
		unset($rs);
		$this->mysql->db_delete('flash','`id`='.$id);
		$this->creat_xml();
		showmsg(C('delete_success'),'-1');
	}
	
	public function creat_xml(){
		$content="<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
		$content.="<bcaster autoPlayTime=\"3\">\n";
		$query=$this->mysql->query("select * from ".DB_PRE."flash");
		while ($rs=$this->mysql->fetch_rows($query)){
			$content.="<item id=\"".$rs["id"]."\" item_url=\"".$rs["thumb"]."\" link=\"".$rs["url"]."\" />\n";
		}
		$content.="</bcaster>";
		$file="uploadfile/flash.xml";
		creat_inc($file,$content);
	}
}

?>