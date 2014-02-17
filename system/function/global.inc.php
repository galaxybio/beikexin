<?php
session_start();
if(!defined('IN_CMS')) die('Illegal link');

$config_arr=base::load_cache('cache_set_config','_config');
$contact_arr=base::load_cache('cache_set_contact','_contact');

assign("config",$config_arr);   //加载网站配置
assign("pre",DB_PRE);  //加载数据库前辍
assign("adminuser",$_SESSION['admin']);  //加载管理员用户名
assign("contact",$contact_arr);   //加载联系方式

assign('css_path',SYS_DIR.'/'.TP_DIR.'/'.TP_FOLDER.'/css/');   //前台css路径
assign('image_path',SYS_DIR.'/'.TP_DIR.'/'.TP_FOLDER.'/images/');   //前台image路径

$page=isset($_GET['page'])?(int)$_GET['page']:0;
$page=$page==0?1:$page;

//接收参数
$m=safe_replace(isset($_GET["m"])) ? safe_replace($_GET["m"]) : "content";
$c=safe_replace(isset($_GET["c"])) ? safe_replace($_GET["c"]) : "index";
$f=safe_replace(isset($_GET["f"])) ? safe_replace($_GET["f"]) : "init";

include MOD_PATH.$m."/".$c.".php";   //调用类
$p=new $c();  //实例化
$p->$f();   //调用方法
?>