<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 21:42:03
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/admin/content_list.html" */ ?>
<?php /*%%SmartyHeaderCode:30205500ea62b376253-37747250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '230ad8144f46880444e2d4f90c5cb5d44702c3c0' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/admin/content_list.html',
      1 => 1343137187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30205500ea62b376253-37747250',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\block.loop.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">���ݹ���</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>����ѡ�</b><a href="index.php?m=91736&c=content&catid=<?php echo $_smarty_tpl->getVariable('catid')->value;?>
">������ҳ</a> | <a href="index.php?m=91736&c=content&f=add&catid=<?php echo $_smarty_tpl->getVariable('catid')->value;?>
"><span class="f00">������Ϣ</span></a> | <a href="index.php?m=91736&c=transfer&catid=<?php echo $_smarty_tpl->getVariable('catid')->value;?>
">����ת��</a> | [<a href="javascript:location.reload()">ˢ��ҳ��</a>]</td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableBorder">
<tr>
    <th colspan=8 height=25><?php echo $_smarty_tpl->getVariable('catname')->value;?>
 �����б�</th>
</tr>
<form name="form"  id="form" action="" method="post">
<tr align="center"> 
    <td width="5%" height=25><input name="checkSelect" type="checkbox" class="checkbox" onClick="javascript: checkAll(this)" value="checkbox"></td>
    <td width="6%">ID</td>
    <td width="41%">����</td>
    <td width="8%">�����</td>
	<td width="5%">����</td>
	
    <td width="10%">����ʱ��</td>
	 <td width="10%">������ʱ��</td>
    <td width="15%">����</td>
</tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('catid'=>$_smarty_tpl->getVariable('catid')->value,'pages'=>"page",'urlrule'=>"index.php")); $_block_repeat=true; smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('catid')->value,'pages'=>"page",'urlrule'=>"index.php"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr align="center"> 
    <td height=25><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->getVariable('r')->value['contentid'];?>
" class="checkbox" /></td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['contentid'];?>
</td>
    <td align="left" <?php if ($_smarty_tpl->getVariable('r')->value['style']!=''){?>class="<?php echo $_smarty_tpl->getVariable('r')->value['style'];?>
"<?php }?>> &nbsp;<?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['hits'];?>
</td>
	<td><?php echo $_smarty_tpl->getVariable('r')->value['sort'];?>
</td>
	
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('r')->value['inputtime'],'%Y-%m-%d');?>
</td>
	<td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('r')->value['updatetime'],'%Y-%m-%d');?>
</td>
    <td><a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
" target="_blank">�鿴</a> | <a href="index.php?m=91736&c=content&f=edit&id=<?php echo $_smarty_tpl->getVariable('r')->value['contentid'];?>
">�༭</a> | <a href="#" onclick="ShowConfirm('ȷ��ɾ��','���Ҫɾ������Ϣ��?','index.php?m=91736&c=content&f=delete&id=<?php echo $_smarty_tpl->getVariable('r')->value['contentid'];?>
')">ɾ��</a></td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('catid')->value,'pages'=>"page",'urlrule'=>"index.php"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<tr>
	<td height="25" align="right">
&nbsp;	  &nbsp;</td>
	<td height="25" colspan="7"><input name="submit" type="submit" class="inputs" value=" ɾ�� " onclick="form.action='index.php?m=91736&c=content&f=delete';" />&nbsp;	  &nbsp;<input name="submit2" type="submit" class="inputs" value=" �����ƶ� " onclick="form.action='index.php?m=91736&c=transfer&f=transfer_content';" /></td>
  </tr>
<tr>
<td height="25" align="center" colspan="8" class="tdpage"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</td></tr>
</form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>