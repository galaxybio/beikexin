<?php /* Smarty version Smarty-3.0.8, created on 2012-07-19 21:56:39
         compiled from "D:/www/bk/system/templates/admin/password.html" */ ?>
<?php /*%%SmartyHeaderCode:814550081217481a80-64428284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71f5d73350f3e761ff17ad78737739ddd11532e3' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/password.html',
      1 => 1322800064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '814550081217481a80-64428284',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">个人信息管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=91736&c=index&f=edit">修改密码</a> | [<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
<form name="addform" action="index.php?m=91736&c=index&f=editsave" method="post">
    <tr>
    <th colspan="4">修改密码</th>
  </tr>
  <tr>
    <td width="22%" align="right">用户名：</td>
    <td width="78%" colspan="3"><?php echo $_smarty_tpl->getVariable('adminuser')->value;?>
</td>
  </tr>
  <tr>
    <td align="right">旧密码:</td>
    <td colspan="3"><input type="password" name="oldpassword" class="txt" size="30"> 必须正确填写旧密码才能修改</td>
  </tr>
  <tr>
    <td align="right">新密码:</td>
    <td colspan="3"><input type="password" name="password" class="txt" size="30"></td>
  </tr>
  <tr>
    <td align="right">确认新密码:</td>
    <td colspan="3"><input type="password" name="password2" class="txt" size="30"></td>
  </tr>
  <tr>
    <td colspan="4" align="right" class="tdpage">
      <input type="submit" name="submit" value=" 保 存 " class="inputs" /></td>
    </tr>
  </form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
