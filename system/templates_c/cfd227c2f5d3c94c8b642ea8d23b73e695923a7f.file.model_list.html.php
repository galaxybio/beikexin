<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 09:16:56
         compiled from "D:/www/bk/system/templates/admin/model_list.html" */ ?>
<?php /*%%SmartyHeaderCode:16228500a030830ac36-74506816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfd227c2f5d3c94c8b642ea8d23b73e695923a7f' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/model_list.html',
      1 => 1336576688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16228500a030830ac36-74506816',
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
    <th height="25">ģ�͹���</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>����ѡ�</b><a href="index.php?m=91736&c=model">������ҳ</a> | <a href="index.php?m=91736&c=model&f=model_add">���ģ��</a> | <a href="index.php?m=91736&c=model&f=cache">����ģ�ͻ���</a> | [<a href="javascript:location.reload()">ˢ��ҳ��</a>]</td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableBorder">
<tr>
    <th colspan=5 height=25>ģ���б�</th>
</tr>
<tr align="center"> 
    <td width="5%" height=25>���</td>
    <td width="20%">ģ������</td>
    <td width="10%">���ݱ�</td>
    <td width="10%">״̬</td>
    <td width="10%">����</td>
</tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."model order by id desc")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."model order by id desc"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr align="center"> 
    <td height=25><?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['model_name'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('pre')->value;?>
<?php echo $_smarty_tpl->getVariable('r')->value['model_table'];?>
</td>
    <td><?php if ($_smarty_tpl->getVariable('r')->value['is_lock']==0){?><a href="index.php?m=91736&c=model&f=lock&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
&lockid=1"><font color='#FF0000'>������</font></a><?php }else{ ?><a href="index.php?m=91736&c=model&f=lock&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
&lockid=0">����</a><?php }?></td>
    <td><a href="index.php?m=91736&c=model&f=field&modelid=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">�����ֶ�</a> | <a href="index.php?m=91736&c=model&f=model_edit&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">�༭</a> | <?php if ($_smarty_tpl->getVariable('r')->value['is_fixed']==0){?><a href="###" onclick="ShowConfirm('ȷ��ɾ��','���Ҫɾ����ģ����?','index.php?m=91736&c=model&f=model_delete&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
')">ɾ��</a><?php }else{ ?><font color='#FF0000'>ɾ��</font><?php }?></td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."model order by id desc"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>