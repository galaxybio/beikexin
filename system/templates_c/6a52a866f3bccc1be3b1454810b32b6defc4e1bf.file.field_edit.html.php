<?php /* Smarty version Smarty-3.0.8, created on 2012-08-14 23:03:30
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/admin/form/field_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:25326502a68c25efd27-47761003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a52a866f3bccc1be3b1454810b32b6defc4e1bf' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/admin/form/field_edit.html',
      1 => 1343057736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25326502a68c25efd27-47761003',
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
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=form&c=form&f=field&formid=<?php echo $_smarty_tpl->getVariable('rs')->value['formid'];?>
">管理首页</a> | <a href="index.php?m=form&c=form&f=field_add&formid=<?php echo $_smarty_tpl->getVariable('rs')->value['formid'];?>
">添加字段</a> | <a href="index.php?m=form&c=form&f=update_field_cache&formid=<?php echo $_smarty_tpl->getVariable('rs')->value['formid'];?>
">更新字段缓存</a> | [<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
<form name="addform" action="index.php?m=form&c=form&f=field_edit_save" method="post">
    <tr>
    <th colspan="4">字段编辑</th>
  </tr>
  <tr>
    <td align="right">文字名称:</td>
    <td colspan="3"><input type="text" name="name" class="txt" size="30" id="name" value="<?php echo $_smarty_tpl->getVariable('rs')->value['name'];?>
"></td>
  </tr>
  <tr>
    <td align="right">字段名称:</td>
    <td colspan="3"><input type="text" name="field" class="txt" size="30" id="field" value="<?php echo $_smarty_tpl->getVariable('rs')->value['field'];?>
" disabled></td>
  </tr>
  <tr>
    <td align="right">字段类型:</td>
    <td colspan="3"><select name="formtype" id="formtype" class="formtype" onChange="fieldtype(this.value)">
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fields')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->getVariable('rs')->value['formtype']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
    <?php }} ?>
      </select> <div id="text_show" style="display:none;">宽：<input type="text" name="width" class="txt" size="4" id="width" value="<?php echo $_smarty_tpl->getVariable('rs')->value['width'];?>
"></div><div id="textarea_show" style="display:none;"> 高：<input type="text" name="height" class="txt" size="4" id="height" value="<?php echo $_smarty_tpl->getVariable('rs')->value['height'];?>
"></div></td>
  </tr>
  
  <tr>
    <td align="right">排序:</td>
    <td colspan="3"><input type="text" name="sort" class="txt" size="10" id="sort" value="<?php echo $_smarty_tpl->getVariable('rs')->value['sort'];?>
"></td>
  </tr>
  <tr>
    <td align="right">字段说明:</td>
    <td colspan="3"><input type="text" name="explain" class="txt" size="30" id="explain" value="<?php echo $_smarty_tpl->getVariable('rs')->value['explain'];?>
"></td>
  </tr>
  <tr>
    <td align="right">是否固定:</td>
    <td colspan="3">
      <input name="is_fixed" type="radio" id="is_fixed" value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_fixed']==1){?>checked="checked"<?php }?> <?php if ($_smarty_tpl->getVariable('rs')->value['is_fixed']==1){?>disabled<?php }?>/>
      是 
      <input name="is_fixed" type="radio" id="is_fixed" value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_fixed']==0){?>checked="checked"<?php }?> <?php if ($_smarty_tpl->getVariable('rs')->value['is_fixed']==1){?>disabled<?php }?>/>
      否</td>
  </tr>
  <tr>
    <td align="right">默认值:</td>
    <td colspan="3"><font color="#ff0000">当选择为选项时,此即选项列表内容,列表值之间用英文逗号(,)分隔</font><br><textarea name="initial" id="initial" cols="45" rows="5"><?php echo $_smarty_tpl->getVariable('rs')->value['initial'];?>
</textarea></td>
  </tr>
  <tr>
    <td colspan="4" align="right" class="tdpage">
      <input type="hidden" name="fieldid" id="fieldid" value="<?php echo $_smarty_tpl->getVariable('rs')->value['fieldid'];?>
" />
      <input type="hidden" name="formid" id="formid" value="<?php echo $_smarty_tpl->getVariable('rs')->value['formid'];?>
" />
      <input type="submit" name="submit" value=" 保 存 " class="inputs" /></td>
    </tr>
  </form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
