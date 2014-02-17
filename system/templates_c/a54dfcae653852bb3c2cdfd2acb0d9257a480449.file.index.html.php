<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 09:22:52
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/admin/index.html" */ ?>
<?php /*%%SmartyHeaderCode:15702500df8ec55a230-97206665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a54dfcae653852bb3c2cdfd2acb0d9257a480449' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/admin/index.html',
      1 => 1343057644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15702500df8ec55a230-97206665',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title><?php echo $_smarty_tpl->getVariable('config')->value["sitename"];?>
后台管理系统</title>
<link href="admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="admin/js/admin.js"></script>
<base target="main">
</head>
<body style="MARGIN: 0px">
<div class="top">
	<div><div class="logo">后台管理系统</div>
	<div class="topdl"><li>友情提醒：</li><li><marquee scrollamount=3 width="200px" onMouseOver="this.stop();" onMouseOut="this.start();">操作前请注意先备份数据库,以免数据丢失!</marquee></li><li>&nbsp;&nbsp;&nbsp;&nbsp;
    欢迎<?php echo $_smarty_tpl->getVariable('adminuser')->value;?>
｜<a href="index.php" target="_blank"><span class="fff">网站首页</span></a>｜<a href="index.php?m=91736&c=login&f=out" target="_parent"><span class="fff">退出</span></a></li></div>
    </div>
<div class="tabm">
<ul>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('top_menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<li class="tabms" id="menu_0<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onClick="getleftbar(this,0,6,<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
);"><a href="index.php?m=91736&c=index&f=main" target="main" onClick="parent.left.location='<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
';"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</span></a></li>
<?php }} ?>
</ul>
</div>
</div>
<table width="100%" height="85%" border="0" cellpadding="0" cellspacing="0" class="mindex">
  <tr>
    <td width="150" valign="top" id="frmleft" name="frmleft"><table width="150" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="28" id="leftmenu_title" class="leftmenu_title"><span>常用快捷操作</span></td>
      </tr>
    </table>
	<iframe  style="margin:0; padding:0; width:100%; height:772px!important;height:100%; background-color:#081250; visibility:inherit;" src="index.php?m=91736&c=index&f=left" frameborder="0" id="left" name="left"  scrolling="auto" align="middle" class="leftiframe"></iframe></td>
    <td width="10"><table height="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td style="HEIGHT: 100%" onClick="switchSysBar()"><span id="switchPoint" title="关闭/打开左栏"><img src="admin/images/lere.gif" width="10" height="20" /></span> </td>
        </tr>
      </tbody>
    </table></td>
    <td valign="top"><iframe style="margin:0; padding:0; width:100%; height:800px!important;height:100%; background-color:#081250; visibility:inherit;" src="index.php?m=91736&c=index&f=main" frameborder="0" scrolling="yes" id="main" name="main"></iframe></td>
  </tr>
</table>
<table width="100%" height="30" border="0" cellpadding="4" cellspacing="0" class="mindex">
  <tr>
    <td width="75%">&nbsp;</td>
    <td width="25%"></td>
  </tr>
</table>
</body>
</html>