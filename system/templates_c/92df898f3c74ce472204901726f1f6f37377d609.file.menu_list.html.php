<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 08:54:28
         compiled from "D:/www/bk/system/templates/admin/menu_list.html" */ ?>
<?php /*%%SmartyHeaderCode:312105009fdc40515a9-14417321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92df898f3c74ce472204901726f1f6f37377d609' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/menu_list.html',
      1 => 1338205733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312105009fdc40515a9-14417321',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\www\bk\system\Smarty\plugins\block.loop.php';
?><?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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
    <th colspan=6 height=25>��Ŀ�б�</th>
</tr>
<tr align="center"> 
    <td width="11%" height=25>ID</td>
    <td>�˵�����</td>
    <td width="34%">����</td>
</tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."menu where parentid=0")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."menu where parentid=0"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr align="center"> 
    <td width="11%" height=25><?php echo $_smarty_tpl->getVariable('r')->value['menuid'];?>
</td>
    <td align="left">&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</td>
    <td width="34%"><a href="index.php?m=91736&c=menu&f=add&p=<?php echo $_smarty_tpl->getVariable('r')->value['menuid'];?>
">����Ӳ˵�</a> | <a href="index.php?m=91736&c=menu&f=lists&id=<?php echo $_smarty_tpl->getVariable('r')->value['menuid'];?>
">�鿴�Ӳ˵�</a> | <a href="index.php?m=91736&c=menu&f=edit&id=<?php echo $_smarty_tpl->getVariable('r')->value['menuid'];?>
">�༭</a> | <a href="#" onclick="ShowConfirm('ȷ��ɾ��','���Ҫɾ���˲˵���?','index.php?m=91736&c=menu&f=delete&id=<?php echo $_smarty_tpl->getVariable('r')->value['menuid'];?>
')">ɾ��</a></td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."menu where parentid=0"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<tr>
    <td width="11%" height=25>&nbsp;</td>
    <td colspan=2>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="button" id="button" value="����" class="inputs" /></td>
</tr>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>