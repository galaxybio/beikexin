<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 08:54:30
         compiled from "D:/www/bk/system/templates/admin/menu_son_list.html" */ ?>
<?php /*%%SmartyHeaderCode:258195009fdc6453080-82913754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe4184f12e2a39cb1756894234ee278ffcca685' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/menu_son_list.html',
      1 => 1338205889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258195009fdc6453080-82913754',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">��̨�˵�����</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>����ѡ�</b><a href="index.php?m=91736&c=menu">������ҳ</a> | <a href="index.php?m=91736&c=menu&f=add">��Ӳ˵�</a> | <a href="index.php?m=91736&c=menu&f=cache">���»���</a> | [<a href="javascript:location.reload()">ˢ��ҳ��</a>]</td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableBorder">
<tr>
    <th colspan=6 height=25>�˵��б�</th>
</tr>
<tr align="center"> 
    <td width="11%" height=25>ID</td>
    <td>�˵�����</td>
    <td width="34%">����</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
?>
<tr align="center"> 
    <td width="11%" height=25><?php echo $_smarty_tpl->tpl_vars['r']->value['menuid'];?>
</td>
    <td align="left">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</td>
    <td width="34%"><a href="index.php?m=91736&c=menu&f=add&p=<?php echo $_smarty_tpl->tpl_vars['r']->value['menuid'];?>
">����Ӳ˵�</a> | <a href="index.php?m=91736&c=menu&f=edit&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['menuid'];?>
">�༭</a> | <a href="#" onclick="ShowConfirm('ȷ��ɾ��','���Ҫɾ���˲˵���?','index.php?m=91736&c=menu&f=delete&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['menuid'];?>
')">ɾ��</a></td>
</tr>
<?php }} ?>
<tr>
    <td width="11%" height=25>&nbsp;</td>
    <td colspan=2>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="button" id="button" value="����" class="inputs" /></td>
</tr>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>