<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 12:26:29
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/admin/form/content_list.html" */ ?>
<?php /*%%SmartyHeaderCode:4723500e23f5a01534-59276071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d1536dbb8c83c51208464ffb8a890a54861a87b' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/admin/form/content_list.html',
      1 => 1343057720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4723500e23f5a01534-59276071',
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
    <td height=25 class="pl20"><b>����ѡ�</b><a href="index.php?m=form&c=content&formid=<?php echo $_smarty_tpl->getVariable('form')->value['id'];?>
">������ҳ</a> | [<a href="javascript:location.reload()">ˢ��ҳ��</a>]</td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableBorder">
<tr>
    <th colspan=5 height=25><?php echo $_smarty_tpl->getVariable('form')->value['form_name'];?>
 �����б�</th>
</tr>
<form name="form" action="index.php?m=form&c=content&f=delete" method="post">
<tr align="center"> 
    <td width="6%" height=25><input name="checkSelect" type="checkbox" class="checkbox" onClick="javascript: checkAll(this)" value="checkbox"></td>
    <td width="9%">ID</td>
    <td width="41%">����</td>
    <td width="17%">����ʱ��</td>
    <td width="11%">����</td>
</tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value).($_smarty_tpl->getVariable('form')->value['form_table'])." order by id desc",'pages'=>"page")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value).($_smarty_tpl->getVariable('form')->value['form_table'])." order by id desc",'pages'=>"page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr align="center"> 
    <td height=25><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
" class="checkbox" /></td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
</td>
    <td align="left"><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('r')->value['inputtime'],'%Y-%m-%d');?>
</td>
    <td><a href="index.php?m=form&c=content&f=show&formid=<?php echo $_smarty_tpl->getVariable('form')->value['id'];?>
&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">��ϸ</a> | <a href="index.php?m=form&c=content&f=delete&formid=<?php echo $_smarty_tpl->getVariable('form')->value['id'];?>
&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">ɾ��</a></td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value).($_smarty_tpl->getVariable('form')->value['form_table'])." order by id desc",'pages'=>"page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<tr>
	<td height="25" align="center"><input name="formid" type="hidden" id="formid" value="<?php echo $_smarty_tpl->getVariable('form')->value['id'];?>
" /><input name="submit" type="submit" class="inputs" value=" ɾ�� " /></td>
    <td height="25" colspan="4">&nbsp;</td>
  </tr>
<tr>
<td height="25" align="center" colspan="7" class="tdpage"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</td></tr>
</form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>