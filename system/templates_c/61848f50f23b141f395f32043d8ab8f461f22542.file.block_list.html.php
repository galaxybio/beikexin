<?php /* Smarty version Smarty-3.0.8, created on 2012-07-19 22:01:02
         compiled from "D:/www/bk/system/templates/admin/block_list.html" */ ?>
<?php /*%%SmartyHeaderCode:266375008131e014797-62303554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61848f50f23b141f395f32043d8ab8f461f22542' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/block_list.html',
      1 => 1336981865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266375008131e014797-62303554',
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
    <th height="25">碎片管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=91736&c=block">管理首页</a> | <a href="index.php?m=91736&c=block&f=add">添加碎片</a> | [<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableBorder">
<tr>
    <th colspan=6 height=25>碎片列表</th>
</tr>
<tr align="center"> 
    <td width="5%" height=25>编号</td>
    <td width="25%">名称</td>
    <td width="26%">标签</td>
    <td width="32%">数据调用</td>
    <td width="12%">操作</td>
</tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."block order by id desc",'pages'=>"page",'urlrule'=>"index.php")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."block order by id desc",'pages'=>"page",'urlrule'=>"index.php"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr align="center"> 
    <td height=25><?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['tag'];?>
</td>
    <td><input name="textfield" type="text" id="textfield" value="{get_block tag='<?php echo $_smarty_tpl->getVariable('r')->value['tag'];?>
'}" size="25" /></td>
    <td><a href="index.php?m=91736&c=block&f=edit&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">编辑</a> | <a href="index.php?m=91736&c=block&f=delete&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">删除</a></td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."block order by id desc",'pages'=>"page",'urlrule'=>"index.php"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<tr>
	<td height="25" align="center" colspan="8" class="tdpage"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</td>
</tr>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>