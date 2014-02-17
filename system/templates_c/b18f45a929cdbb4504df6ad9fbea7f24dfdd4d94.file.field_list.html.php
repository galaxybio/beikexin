<?php /* Smarty version Smarty-3.0.8, created on 2012-08-14 23:03:27
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/admin/form/field_list.html" */ ?>
<?php /*%%SmartyHeaderCode:26429502a68bf3f8da1-10128154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b18f45a929cdbb4504df6ad9fbea7f24dfdd4d94' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/admin/form/field_list.html',
      1 => 1343057724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26429502a68bf3f8da1-10128154',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">字段管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=form&c=form&f=field&formid=<?php echo $_smarty_tpl->getVariable('formid')->value;?>
">管理首页</a> | <a href="index.php?m=form&c=form&f=field_add&formid=<?php echo $_smarty_tpl->getVariable('formid')->value;?>
">添加字段</a> | <a href="index.php?m=form&c=form&f=update_field_cache&formid=<?php echo $_smarty_tpl->getVariable('formid')->value;?>
">更新字段缓存</a> | [<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableBorder">
<tr>
    <th colspan=5 height=25>字段列表</th>
</tr>
<tr align="center"> 
    <td width="5%" height=25>排序</td>
    <td width="20%">文字</td>
    <td width="10%">字段名称</td>
    <td width="10%">类型</td>
    <td width="10%">操作</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fields')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
<tr align="center"> 
    <td height=25><?php echo $_smarty_tpl->tpl_vars['value']->value['sort'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['formtype'];?>
</td>
    <td><a href="index.php?m=form&c=form&f=field_edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['fieldid'];?>
&formid=<?php echo $_smarty_tpl->getVariable('formid')->value;?>
">编辑</a> | <?php if ($_smarty_tpl->tpl_vars['value']->value['is_fixed']==0){?><a href="index.php?m=form&c=form&f=field_delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['fieldid'];?>
&formid=<?php echo $_smarty_tpl->getVariable('formid')->value;?>
">删除</a><?php }else{ ?><font color='#FF0000'>删除</font><?php }?></td>
</tr>
<?php }} ?>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>