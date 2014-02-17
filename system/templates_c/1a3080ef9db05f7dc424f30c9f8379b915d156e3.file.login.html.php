<?php /* Smarty version Smarty-3.0.8, created on 2013-02-25 18:38:52
         compiled from "D:/www/beikexin/system/templates/admin/login.html" */ ?>
<?php /*%%SmartyHeaderCode:17303512b3f3c00a3b7-49095462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a3080ef9db05f7dc424f30c9f8379b915d156e3' => 
    array (
      0 => 'D:/www/beikexin/system/templates/admin/login.html',
      1 => 1353936979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17303512b3f3c00a3b7-49095462',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>管理登陆</title>
<link href="admin/css/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="admin/js/check.js"></script>
</head>
<body>
  <table width="685" height="424" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px; background:url(admin/images/login.png) no-repeat">
  <form  name="form" method="post"  action="index.php?m=91736&c=login&f=check" onSubmit="return checksignup()">
    <tr>
      <td valign="top"><table width="590" height="69" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="590" height="115" align="right" valign="bottom"></td>
          </tr>
      </table>
      <table width="590" height="153" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="304" height="153" align="center"></td>
          <td width="286" valign="middle"><table width="259" border="0" align="center" cellpadding="0" cellspacing="6">
          <tr align="center">
          <td width="92" height="5" align="right"></td>
          <td align="left"></td>
        </tr>
        <tr align="center">
          <td height="25" align="right"><span class="f">用户名:</span></td>
          <td align="left"><input name="username" type="text" id="username" class="input"></td>
        </tr>
        <tr align="center">
          <td height="25" align="right"><span class="f">密　码:</span></td>
		  <td align="left"><input type="password" name="password" id="password" class="input"></td>
        </tr>
        <tr align="center">
          <td height="25" align="right"><span class="f">验证码:</span></td>
          <td align="left"><input type="text" name="verifycode" class="veri"><img src="admin/verifycode.php" border="0" alt="验证码,看不清楚?请点击刷新验证码" onClick="this.src=this.src+'?'+Math.random();" class="codeimage"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="submit" value=" 确 认 " class="button" ><input type="button" name="button" value=" 取 消 " class="button"></td>
        </tr>
      </table></td>
        </tr>
      </table></td>
    </tr>
	</form>
</table>
  <p class="style1">&nbsp;</p>
</body>
</html>