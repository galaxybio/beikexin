<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 21:45:33
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/admin/flash/flash_list.html" */ ?>
<?php /*%%SmartyHeaderCode:25208500ea6fdc14f25-45981480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '691e96e67bf15a2832561fd69783cfef9e965455' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/admin/flash/flash_list.html',
      1 => 1343057718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25208500ea6fdc14f25-45981480',
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
    <th height="25">幻灯片管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=flash&c=flash">管理首页</a> | <a href="index.php?m=flash&c=flash&f=add">添加幻灯片</a>&nbsp;|&nbsp;[<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableBorder">
<tr>
    <th colspan=5 height=25>幻灯片列表</th>
</tr>
<tr align="center"> 
    <td width="5%" height=25>编号</td>
    <td width="31%">名称</td>
    <td width="40%">链接地址</td>
    <td width="12%">是否显示</td>
    <td width="12%">操作</td>
</tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."flash")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."flash"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr align="center"> 
    <td height=25><?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
</td>
    <td><?php if ($_smarty_tpl->getVariable('r')->value['is_lock']==1){?><a href="index.php?m=flash&c=flash&f=lock&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
&lockid=0"><font color='#FF0000'>已锁定</font></a><?php }else{ ?><a href="index.php?m=flash&c=flash&f=lock&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
&lockid=1">正常</a><?php }?></td>
    <td><a href="index.php?m=flash&c=flash&f=edit&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">编辑</a> | <a href="index.php?m=flash&c=flash&f=delete&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">删除</a></td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."flash"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>