<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 08:54:32
         compiled from "D:/www/bk/system/templates/admin/menu_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:234165009fdc8c1a062-24683562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7f6c4fba927515858ed8c988bc8615b9275b6bd' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/menu_edit.html',
      1 => 1338205893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234165009fdc8c1a062-24683562',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">后台菜单管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=91736&c=menu">管理首页</a> | <a href="index.php?m=91736&c=menu&f=add">添加菜单</a> | <a href="index.php?m=91736&c=menu&f=cache">更新缓存</a> | [<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<form name="addform" action="index.php?m=91736&c=menu&f=edit_save" method="post">
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">

    <tr>
    <th colspan="4">编辑菜单</th>
  </tr>
  <tr>
    <td width="14%" align="right">上级菜单:</td>
    <td width="86%" colspan="3"><label>
      <select name="parentid" id="parentid">
        <option value="0">无(作为一级菜单)</option>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['menuid'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['menuid']==$_smarty_tpl->getVariable('rs')->value['parentid']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</option>
        <?php }} ?>
      </select>
    </label></td>
  </tr>
  <tr>
    <td align="right">菜单名称:</td>
    <td colspan="3"><input type="text" name="title" class="txt" size="20" id="title" value="<?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
"></td>
  </tr>
  <tr>
    <td align="right">链接地址:</td>
    <td colspan="3"><input type="text" name="url" class="txt" size="40" id="url" value="<?php echo $_smarty_tpl->getVariable('rs')->value['url'];?>
"></td>
  </tr>
  <tr>
    <td colspan="4" align="right" class="tdpage">
      <input type="submit" name="submit" value=" 保 存 " class="inputs" /><input name="menuid" type="hidden" value="<?php echo $_smarty_tpl->getVariable('rs')->value['menuid'];?>
" /></td>
    </tr></table>
  </form>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
