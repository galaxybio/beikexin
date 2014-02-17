<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * 静态页生成类
 * 网站地址: http://www.91736.com
 * 更多PHP开发请登录：http://bbs.91736.com
 * ============================================================================
*/ 
class html{
	function __construct(){
		$this->contents=base::_auto_load(MOD_PATH."content/index.php","index");
		$this->mysql=$this->contents->mysql;
	}
	
	public function creat_index(){
		ob_start();
		$this->contents->init();
		$url="index.html";
		creat_html($url);
	}
	
	public function creat_list($catid,$_page,$url){
		ob_start();
		$this->contents->lists($catid,$_page);
		creat_html($url);
	}
	
	public function creat_show($catid,$contentid,$url){
		ob_start();
		$this->contents->show($catid,$contentid);
		creat_html($url);
	}
}
?>