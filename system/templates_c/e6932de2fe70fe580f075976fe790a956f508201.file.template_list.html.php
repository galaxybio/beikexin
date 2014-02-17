<?php /* Smarty version Smarty-3.0.8, created on 2012-07-19 22:00:52
         compiled from "D:/www/bk/system/templates/admin/template_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2386350081314a7cfc0-18553264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6932de2fe70fe580f075976fe790a956f508201' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/template_list.html',
      1 => 1322800066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2386350081314a7cfc0-18553264',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">模板管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=91736&c=template">管理首页</a> | <a href="index.php?m=91736&c=template&f=calls">模板调用说明</a>&nbsp;|&nbsp;[<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableBorder">
<tr>
    <th colspan=3 height=25>模板列表</th>
</tr>
<tr align="center"> 
    <td width="5%" height=25>编号</td>
    <td width="20%">模板名称</td>
    <td width="10%">操作</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('template_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
<tr align="center"> 
    <td height=25 align="center"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
    <td align="left"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
    <td align="center"><a href="index.php?m=91736&c=template&f=edit&file=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">编辑</a></td>
</tr>
<?php }} ?>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>