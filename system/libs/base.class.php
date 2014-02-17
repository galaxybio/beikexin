<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * ��̬�༰ͳһ���캯��
 * ��վ��ַ: http://www.91736.com
 * ����PHP�������¼��http://bbs.91736.com
 * ============================================================================
*/
class base{
	/*
	*��ȡ�ļ�
	*return array  $file--�����ļ� $arr-����������
	*/
	public static function load_file($file,$arr){
		if(file_exists($file)){
			include($file);
		}
		return $$arr;
	}
	
	//��ȡcache_sys�ﻺ���ļ�
	public static function load_cache($file,$arr){
		return self::load_file(CACHE_SYS_PATH.$file.'.php',$arr);
	}
	
	/*
	*��ȡ���ļ�
	*return object  $file--���ļ����� $name-����
	*/
	public static function _auto_load($file,$name){
		if(file_exists($file)){
			include($file);
			$object=new $name();
			return $object;
		}
	}
	
	//��ȡlibs�����ļ�
	public static function load_class($name){
		return self::_auto_load(LIB_PATH.$name.'.class.php',$name);
	}

}


//ͳһ���캯��----------ǰ̨ҳ��̳�
class db{
	function __construct(){
		$this->mysql=base::load_class('mysql');
	}
}


//�̳�db�࣬�����ؼ�����ԭ���캯�������ӷ���Ȩ�޵��ж�-----------��̨ҳ��̳�
class Checklogin extends db{

	function __construct(){
		parent::__construct();
		$this->check_admin();
	}

	public function check_admin(){
		//�ж��Ƿ��ѵ�¼
		if(empty($_SESSION['admin'])||empty($_SESSION['admin_id'])){
			showmsg(C("admin_not_exist"),"index.php?m=91736&c=login");
		}
		
		//�жϹ���Ȩ��
		$check_purview=base::load_cache('cache_purview_'.$_SESSION['admin_id'],'_purview');   //����Ȩ�޻���
		$check_admin=base::load_file(FUN_PATH.'admin.inc.php','_admin');    //���غ�̨��ĿȨ������
		$c=safe_replace(isset($_GET["c"])) ? safe_replace($_GET["c"]) : "index";    //��ȡ��ǰ���ļ�����
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