<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 12:26:26
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/admin/form/form_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2249500e23f20f6175-69214251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88bd0992544853fe07ba975f7481316c42435756' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/admin/form/form_list.html',
      1 => 1343057728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2249500e23f20f6175-69214251',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\block.loop.php';
?><?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">�Զ��������</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>����ѡ�</b><a href="index.php?m=form&c=form">������ҳ</a> | <a href="index.php?m=form&c=form&f=form_add">��ӱ�</a> | <a href="index.php?m=form&c=form&f=cache">���±�����</a> | [<a href="javascript:location.reload()">ˢ��ҳ��</a>]</td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableBorder">
<tr>
    <th colspan=5 height=25>���б�</th>
</tr>
<tr align="center"> 
    <td width="11%" height=25>���</td>
    <td width="28%">������</td>
    <td width="20%">���ݱ�</td>
    <td width="11%">״̬</td>
    <td width="30%">����</td>
</tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."form order by id desc")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."form order by id desc"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr align="center"> 
    <td height=25><?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['form_name'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('pre')->value;?>
<?php echo $_smarty_tpl->getVariable('r')->value['form_table'];?>
</td>
    <td><?php if ($_smarty_tpl->getVariable('r')->value['is_lock']==0){?><a href="index.php?m=form&c=form&f=lock&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
&lockid=1"><font color='#FF0000'>������</font></a><?php }else{ ?><a href="index.php?m=form&c=form&f=lock&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
&lockid=0">����</a><?php }?></td>
    <td><a href="index.php?m=form&c=content&formid=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">���ݹ���</a> | <a href="index.php?m=form&c=form&f=field&formid=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">�����ֶ�</a> | <a href="index.php?m=form&c=form&f=form_edit&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">�༭</a> | <?php if ($_smarty_tpl->getVariable('r')->value['is_fixed']==0){?><a href="index.php?m=form&c=form&f=form_delete&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">ɾ��</a><?php }else{ ?><font color='#FF0000'>ɾ��</font><?php }?></td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."form order by id desc"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>