<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * 静态类及统一构造函数
 * 网站地址: http://www.91736.com
 * 更多PHP开发请登录：http://bbs.91736.com
 * ============================================================================
*/
class base{
	/*
	*读取文件
	*return array  $file--缓存文件 $arr-返回数组名
	*/
	public static function load_file($file,$arr){
		if(file_exists($file)){
			include($file);
		}
		return $$arr;
	}
	
	//读取cache_sys里缓存文件
	public static function load_cache($file,$arr){
		return self::load_file(CACHE_SYS_PATH.$file.'.php',$arr);
	}
	
	/*
	*读取类文件
	*return object  $file--类文件名称 $name-类名
	*/
	public static function _auto_load($file,$name){
		if(file_exists($file)){
			include($file);
			$object=new $name();
			return $object;
		}
	}
	
	//读取libs里类文件
	public static function load_class($name){
		return self::_auto_load(LIB_PATH.$name.'.class.php',$name);
	}

}


//统一构造函数----------前台页面继承
class db{
	function __construct(){
		$this->mysql=base::load_class('mysql');
	}
}


//继承db类，并重载及访问原构造函数，增加访问权限的判断-----------后台页面继承
class Checklogin extends db{

	function __construct(){
		parent::__construct();
		$this->check_admin();
	}

	public function check_admin(){
		//判断是否已登录
		if(empty($_SESSION['admin'])||empty($_SESSION['admin_id'])){
			showmsg(C("admin_not_exist"),"index.php?m=91736&c=login");
		}
		
		//判断管理权限
		$check_purview=base::load_cache('cache_purview_'.$_SESSION['admin_id'],'_purview');   //加载权限缓存
		$check_admin=base::load_file(FUN_PATH.'admin.inc.php','_admin');    //加载后台栏目权限配置
		$c=safe_replace(isset($_GET["c"])) ? safe_replace($_GET["c"]) : "index";    //获取当前类文件名称
		foreach($check_admin as $key=>$value){
			$admin_category[]=$key;
		}
		if(is_array($check_purview)&&is_array($admin_category)){
			if(in_array($c,$admin_category)&&!in_array($c,$check_purview)){
				showmsg(C("admin_not_purview"),"-1");
			}
		}else{
			showmsg(C("admin_not_purview"),"-1");
		}
	}
}
?>