<?php
error_reporting(E_ALL & ~E_NOTICE);
date_default_timezone_set('Asia/Shanghai');
define('IN_CMS','true');
require dirname(__FILE__).'/91736.inc.php';

//ϵͳĿ¼
define('SYS_DIR','system');
define('TP_DIR','templates');
define('CMS_PATH',str_replace(SYS_DIR,'',str_replace('\\','/',dirname(__FILE__))));
define('SYS_PATH',CMS_PATH.SYS_DIR."/");
define('DATA_PATH',CMS_PATH.'data/');
define('LIB_PATH',SYS_PATH.'libs/');
define('MOD_PATH',SYS_PATH.'modules/');
define('FUN_PATH',SYS_PATH.'function/');
define('TP_PATH',SYS_PATH.TP_DIR."/");

//����Ŀ¼
define('CACHE_PATH',CMS_PATH.'cache/');
define('CACHE_TP_PATH',CACHE_PATH.'cache_template/');
define('CACHE_SYS_PATH',CACHE_PATH.'cache_sys/');
//����Ŀ¼
define('UPLOAD_PATH', CMS_PATH.'uploadfile/'); //������������·��

//Smarty����
include_once(SYS_PATH."Smarty/Smarty.class.php"); //����smarty���ļ�
$smarty = new Smarty(); //����smartyʵ������$smarty
$smarty->caching=TP_CACHE; //�Ƿ�ʹ�û���
$smarty->template_dir = TP_PATH; //����ģ��Ŀ¼
$smarty->compile_dir = SYS_PATH."templates_c"; //���ñ���Ŀ¼
$smarty->cache_dir = CACHE_TP_PATH; //�����ļ���
$smarty->cache_lifetime = 300;  //����ʱ��
$smarty->left_delimiter = "{";
$smarty->right_delimiter = "}";

include(DATA_PATH."config.inc.php");
include(FUN_PATH."fun.inc.php");
?>