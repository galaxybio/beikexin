<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 08:56:17
         compiled from "D:/www/bk/system/templates/admin/category_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:128815009fe31055367-90172494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed80bc7906a9a1a79da562eb22570d3741c6db5f' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/category_edit.html',
      1 => 1336645081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128815009fe31055367-90172494',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">栏目管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=91736&c=category">管理首页</a> | <a href="index.php?m=91736&c=category&f=add">添加栏目</a> | <a href="index.php?m=91736&c=category&f=cache">更新栏目缓存</a> | [<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<form name="addform" action="index.php?m=91736&c=category&f=edit_save" method="post">
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">

    <tr>
    <th colspan="4">栏目编辑</th>
  </tr>
  <tr>
    <td align="right">上级栏目:</td>
    <td width="86%" colspan="3"><label>
      <select name="parentid" id="parentid">
        <option value="<?php echo $_smarty_tpl->getVariable('rs')->value['parentid'];?>
"><?php if ($_smarty_tpl->getVariable('catname')->value==''){?>无(作为一级栏目)<?php }else{ ?><?php echo $_smarty_tpl->getVariable('catname')->value;?>
<?php }?></option>
        <?php echo $_smarty_tpl->getVariable('categorylist')->value;?>

      </select>
    </label></td>
  </tr>
  <tr>
    <td align="right">栏目名称:</td>
    <td colspan="3"><input type="text" name="catname" class="txt" size="30" id="catname" value="<?php echo $_smarty_tpl->getVariable('rs')->value['catname'];?>
"></td>
  </tr>
  <tr>
    <td align="right">栏目目录:</td>
    <td colspan="3"><input type="text" name="catdir" class="txt" size="15" id="catdir" value="<?php echo $_smarty_tpl->getVariable('rs')->value['catdir'];?>
"></td>
  </tr>
  <tr>
    <td align="right">栏目图片：</td>
    <td colspan="3"><input type="text" name="thumb" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['thumb'];?>
"> <a href="#" onclick="javascript:ShowIframe('上传图片','system/function/upload.inc.php?filename=thumb','340','80')">上 传</a></td>
  </tr>
  <tr>
    <th colspan="4">更多选项[<a href="###" onclick="openShutManager(this,'box4',false,'关闭','展开')" >展开</a>]</th>
  </tr>
  </table>
  
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" id="box4" style="display:none" class="tableBorder mt6">
  <tr>
    <td align="right">是否外部链接:</td>
    <td colspan="3">
      <select name="is_link" id="is_link" onChange="islink(this.value)" class="fl">
        <option value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_link']==0){?>selected="selected"<?php }?>>否</option>
        <option value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_link']==1){?>selected="selected"<?php }?>>是</option>
      </select> <div id="text_show" style="display:none;">链接地址：<input type="text" name="url" class="txt" size="20" id="url" value="<?php echo $_smarty_tpl->getVariable('rs')->value['url'];?>
"> * 如修改为外部链接，请填写完整路径，如：http://www.91736.com</div></td>
  </tr>
  
  
  <tr>
    <td align="right">排序:</td>
    <td colspan="3"><input type="text" name="sort" class="txt" size="6" id="sort" value="<?php echo $_smarty_tpl->getVariable('rs')->value['sort'];?>
"></td>
  </tr>
  <tr>
    <td align="right">是否导航显示:</td>
    <td colspan="3">
      <input name="is_show" type="radio" id="is_show" value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_show']==1){?>checked="checked"<?php }?> class="checkbox" />
      是 
      <input name="is_show" type="radio" id="is_show" value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_show']==0){?>checked="checked"<?php }?> class="checkbox"/>
      否</td>
  </tr>
  <tr>
    <td align="right">是否新窗口打开:</td>
    <td colspan="3">
      <input name="is_target" type="radio" id="is_target" value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_target']==1){?>checked="checked"<?php }?> class="checkbox"/>
      是 
      <input name="is_target" type="radio" id="is_target" value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_target']==0){?>checked="checked"<?php }?> class="checkbox" />
      否</td>
  </tr>
  <tr>
    <td align="right">栏目静态设置:</td>
    <td colspan="3">
      <input name="is_html" type="radio" id="is_html" value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_html']==0){?>checked="checked"<?php }?> class="checkbox" />
      动态
      <input name="is_html" type="radio" id="is_html" value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_html']==1){?>checked="checked"<?php }?> class="checkbox" />
      静态
      <input name="is_html" type="radio" id="is_html" value="2" <?php if ($_smarty_tpl->getVariable('rs')->value['is_html']==2){?>checked="checked"<?php }?> class="checkbox" />
      伪静态 </td>
  </tr>
    <td align="right">栏目页模板:</td>
    <td colspan="3">
      <select name="template_cate">
      	  <option value="<?php echo $_smarty_tpl->getVariable('rs')->value['template_cate'];?>
"><?php echo $_smarty_tpl->getVariable('rs')->value['template_cate'];?>
</option>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('template_cate')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
        <?php }} ?>
      </select> 注：选择与模型名称相对应的模板，如新闻(news)则选择list_news.html</td>
  </tr>
  <tr>
    <td align="right">列表页模板:</td>
    <td colspan="3">
      <select name="template_list">
      	  <option value="<?php echo $_smarty_tpl->getVariable('rs')->value['template_list'];?>
"><?php echo $_smarty_tpl->getVariable('rs')->value['template_list'];?>
</option>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('template_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
        <?php }} ?>
      </select> 注：选择与模型名称相对应的模板，如新闻(news)则选择list_news.html</td>
  </tr>
  <tr>
    <td align="right">内容页模板:</td>
    <td colspan="3">
      <select name="template_show">
      	  <option value="<?php echo $_smarty_tpl->getVariable('rs')->value['template_show'];?>
"><?php echo $_smarty_tpl->getVariable('rs')->value['template_show'];?>
</option>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('template_show')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
        <?php }} ?>
      </select> 注：选择如新闻(news)则选择show_news.html</td>
  </tr>
  <tr>
    <td align="right">SEO标题:</td>
    <td colspan="3"><input type="text" name="seo_title" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['seo_title'];?>
"></td>
  </tr>
  <tr>
    <td align="right">SEO关键字:</td>
    <td colspan="3"><input type="text" name="seo_key" class="txt" size="45" value="<?php echo $_smarty_tpl->getVariable('rs')->value['seo_key'];?>
"></td>
  </tr>
  <tr>
    <td align="right">SEO描述:</td>
    <td colspan="3"><textarea name="seo_des" cols="45" rows="5"><?php echo $_smarty_tpl->getVariable('rs')->value['seo_des'];?>
</textarea></td>
  </tr>
  </table>
  

<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder mt6">
  <tr>
    <td colspan="4" align="right" class="tdpage"><input type="hidden" name="catid" id="catid" value="<?php echo $_smarty_tpl->getVariable('rs')->value['catid'];?>
" />
      <input type="submit" name="submit" value=" 保 存 " class="inputs" /></td>
    </tr></table>
 </form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
