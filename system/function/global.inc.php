<?php
session_start();
if(!defined('IN_CMS')) die('Illegal link');

$config_arr=base::load_cache('cache_set_config','_config');
$contact_arr=base::load_cache('cache_set_contact','_contact');

assign("config",$config_arr);   //������վ����
assign("pre",DB_PRE);  //�������ݿ�ǰ�
assign("adminuser",$_SESSION['admin']);  //���ع���Ա�û���
assign("contact",$contact_arr);   //������ϵ��ʽ

assign('css_path',SYS_DIR.'/'.TP_DIR.'/'.TP_FOLDER.'/css/');   //ǰ̨css·��
assign('image_path',SYS_DIR.'/'.TP_DIR.'/'.TP_FOLDER.'/images/');   //ǰ̨image·��

$page=isset($_GET['page'])?(int)$_GET['page']:0;
$page=$page==0?1:$page;

//���ղ���
$m=safe_replace(isset($_GET["m"])) ? safe_replace($_GET["m"]) : "content";
$c=safe_replace(isset($_GET["c"])) ? safe_replace($_GET["c"]) : "index";
$f=safe_replace(isset($_GET["f"])) ? safe_replace($_GET["f"]) : "init";

include MOD_PATH.$m."/".$c.".php";   //������
$p=new $c();  //ʵ����
$p->$f();   //���÷���
?>