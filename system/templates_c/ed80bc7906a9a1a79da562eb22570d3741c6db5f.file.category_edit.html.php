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
    <th height="25">��Ŀ����</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>����ѡ�</b><a href="index.php?m=91736&c=category">������ҳ</a> | <a href="index.php?m=91736&c=category&f=add">�����Ŀ</a> | <a href="index.php?m=91736&c=category&f=cache">������Ŀ����</a> | [<a href="javascript:location.reload()">ˢ��ҳ��</a>]</td>
  </tr>
</table>
<form name="addform" action="index.php?m=91736&c=category&f=edit_save" method="post">
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">

    <tr>
    <th colspan="4">��Ŀ�༭</th>
  </tr>
  <tr>
    <td align="right">�ϼ���Ŀ:</td>
    <td width="86%" colspan="3"><label>
      <select name="parentid" id="parentid">
        <option value="<?php echo $_smarty_tpl->getVariable('rs')->value['parentid'];?>
"><?php if ($_smarty_tpl->getVariable('catname')->value==''){?>��(��Ϊһ����Ŀ)<?php }else{ ?><?php echo $_smarty_tpl->getVariable('catname')->value;?>
<?php }?></option>
        <?php echo $_smarty_tpl->getVariable('categorylist')->value;?>

      </select>
    </label></td>
  </tr>
  <tr>
    <td align="right">��Ŀ����:</td>
    <td colspan="3"><input type="text" name="catname" class="txt" size="30" id="catname" value="<?php echo $_smarty_tpl->getVariable('rs')->value['catname'];?>
"></td>
  </tr>
  <tr>
    <td align="right">��ĿĿ¼:</td>
    <td colspan="3"><input type="text" name="catdir" class="txt" size="15" id="catdir" value="<?php echo $_smarty_tpl->getVariable('rs')->value['catdir'];?>
"></td>
  </tr>
  <tr>
    <td align="right">��ĿͼƬ��</td>
    <td colspan="3"><input type="text" name="thumb" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['thumb'];?>
"> <a href="#" onclick="javascript:ShowIframe('�ϴ�ͼƬ','system/function/upload.inc.php?filename=thumb','340','80')">�� ��</a></td>
  </tr>
  <tr>
    <th colspan="4">����ѡ��[<a href="###" onclick="openShutManager(this,'box4',false,'�ر�','չ��')" >չ��</a>]</th>
  </tr>
  </table>
  
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" id="box4" style="display:none" class="tableBorder mt6">
  <tr>
    <td align="right">�Ƿ��ⲿ����:</td>
    <td colspan="3">
      <select name="is_link" id="is_link" onChange="islink(this.value)" class="fl">
        <option value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_link']==0){?>selected="selected"<?php }?>>��</option>
        <option value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_link']==1){?>selected="selected"<?php }?>>��</option>
      </select> <div id="text_show" style="display:none;">���ӵ�ַ��<input type="text" name="url" class="txt" size="20" id="url" value="<?php echo $_smarty_tpl->getVariable('rs')->value['url'];?>
"> * ���޸�Ϊ�ⲿ���ӣ�����д����·�����磺http://www.91736.com</div></td>
  </tr>
  
  
  <tr>
    <td align="right">����:</td>
    <td colspan="3"><input type="text" name="sort" class="txt" size="6" id="sort" value="<?php echo $_smarty_tpl->getVariable('rs')->value['sort'];?>
"></td>
  </tr>
  <tr>
    <td align="right">�Ƿ񵼺���ʾ:</td>
    <td colspan="3">
      <input name="is_show" type="radio" id="is_show" value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_show']==1){?>checked="checked"<?php }?> class="checkbox" />
      �� 
      <input name="is_show" type="radio" id="is_show" value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_show']==0){?>checked="checked"<?php }?> class="checkbox"/>
      ��</td>
  </tr>
  <tr>
    <td align="right">�Ƿ��´��ڴ�:</td>
    <td colspan="3">
      <input name="is_target" type="radio" id="is_target" value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_target']==1){?>checked="checked"<?php }?> class="checkbox"/>
      �� 
      <input name="is_target" type="radio" id="is_target" value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_target']==0){?>checked="checked"<?php }?> class="checkbox" />
      ��</td>
  </tr>
  <tr>
    <td align="right">��Ŀ��̬����:</td>
    <td colspan="3">
      <input name="is_html" type="radio" id="is_html" value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_html']==0){?>checked="checked"<?php }?> class="checkbox" />
      ��̬
      <input name="is_html" type="radio" id="is_html" value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_html']==1){?>checked="checked"<?php }?> class="checkbox" />
      ��̬
      <input name="is_html" type="radio" id="is_html" value="2" <?php if ($_smarty_tpl->getVariable('rs')->value['is_html']==2){?>checked="checked"<?php }?> class="checkbox" />
      α��̬ </td>
  </tr>
    <td align="right">��Ŀҳģ��:</td>
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
      </select> ע��ѡ����ģ���������Ӧ��ģ�壬������(news)��ѡ��list_news.html</td>
  </tr>
  <tr>
    <td align="right">�б�ҳģ��:</td>
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
      </select> ע��ѡ����ģ���������Ӧ��ģ�壬������(news)��ѡ��list_news.html</td>
  </tr>
  <tr>
    <td align="right">����ҳģ��:</td>
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
      </select> ע��ѡ��������(news)��ѡ��show_news.html</td>
  </tr>
  <tr>
    <td align="right">SEO����:</td>
    <td colspan="3"><input type="text" name="seo_title" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['seo_title'];?>
"></td>
  </tr>
  <tr>
    <td align="right">SEO�ؼ���:</td>
    <td colspan="3"><input type="text" name="seo_key" class="txt" size="45" value="<?php echo $_smarty_tpl->getVariable('rs')->value['seo_key'];?>
"></td>
  </tr>
  <tr>
    <td align="right">SEO����:</td>
    <td colspan="3"><textarea name="seo_des" cols="45" rows="5"><?php echo $_smarty_tpl->getVariable('rs')->value['seo_des'];?>
</textarea></td>
  </tr>
  </table>
  

<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder mt6">
  <tr>
    <td colspan="4" align="right" class="tdpage"><input type="hidden" name="catid" id="catid" value="<?php echo $_smarty_tpl->getVariable('rs')->value['catid'];?>
" />
      <input type="submit" name="submit" value=" �� �� " class="inputs" /></td>
    </tr></table>
 </form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
