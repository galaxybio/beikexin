<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 09:05:01
         compiled from "D:/www/bk/system/templates/admin/category_add.html" */ ?>
<?php /*%%SmartyHeaderCode:8845500a003ddf68d4-78011365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '472dd49e4952a8366c142ca8bb778aa071d228ff' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/category_add.html',
      1 => 1336574907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8845500a003ddf68d4-78011365',
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
</table><form name="addform" action="index.php?m=91736&c=category&f=add_save" method="post">
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">

    <tr>
    <th colspan="4">�����Ŀ</th>
  </tr>
  <tr>
    <td width="14%" align="right">�ϼ���Ŀ:</td>
    <td width="86%" colspan="3"><label>
      <select name="parentid" id="parentid">
        <option value="<?php echo $_smarty_tpl->getVariable('parentid')->value;?>
"><?php if ($_smarty_tpl->getVariable('parentname')->value==''){?>��(��Ϊһ����Ŀ)<?php }else{ ?><?php echo $_smarty_tpl->getVariable('parentname')->value;?>
<?php }?></option>
        <?php echo $_smarty_tpl->getVariable('categorylist')->value;?>

      </select>
    </label></td>
  </tr>
  <tr>
    <td align="right">��Ŀ����:</td>
    <td colspan="3"><input type="text" name="catname" class="txt" size="30" id="catname"></td>
  </tr>
  <tr>
    <td align="right">��ĿĿ¼:</td>
    <td colspan="3"><input type="text" name="catdir" class="txt" size="15" id="catdir"> ע:����Ϊ��ĸ����ĸ+����</td>
  </tr>
  <tr>
    <td align="right">��ĿͼƬ:</td>
    <td colspan="3"><input type="text" name="thumb" class="txt" size="30"> <a href="#" onclick="javascript:ShowIframe('�ϴ�ͼƬ','system/function/upload.inc.php?filename=thumb','340','80')">�� ��</a></td>
  </tr>
  <tr>
    <td align="right">����ģ��:</td>
    <td colspan="3"><select name="model" id="model" onChange="get_model(this.value)">
    <option value="">��ѡ��ģ��</option>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('model')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['model_table'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['model_name'];?>
</option>
    <?php }} ?>
      </select></td>
  </tr>
  
  <tr>
    <th colspan="4">����ѡ��[<a href="###" onclick="openShutManager(this,'box4',false,'�ر�','չ��')" >չ��</a>]</th>
  </tr>
  </table>
  
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" id="box4" style="display:none" class="tableBorder mt6">
  <tr>
    <td align="right">�ⲿ����:</td>
    <td colspan="3">
      <select name="is_link" id="is_link" onChange="islink(this.value)" class="fl">
        <option value="0">��</option>
        <option value="1">��</option>
      </select> <div id="text_show" style="display:none;">���ӵ�ַ��<input type="text" name="url" class="txt" size="20" id="url"> * ����д����·�����磺http://www.91736.com</div></td>
  </tr>
  <tr>
    <td width="14%" align="right">��Ŀ����:</td>
    <td width="84%" colspan="3"><input type="text" name="sort" class="txt" size="6" id="sort" value="0"></td>
  </tr>
  <tr>
    <td align="right">�Ƿ񵼺���ʾ:</td>
    <td colspan="3">
      <input name="is_show" type="radio" id="is_show" value="1" checked="checked" class="checkbox" />
      �� 
      <input name="is_show" type="radio" id="is_show" value="0" class="checkbox" />
      ��</td>
  </tr>
  
  <tr>
    <td align="right">�Ƿ��´��ڴ�:</td>
    <td colspan="3">
      <input name="is_target" type="radio" id="is_target" value="1" class="checkbox" />
      �� 
      <input name="is_target" type="radio" id="is_target" value="0" checked="checked" class="checkbox" />
      ��</td>
  </tr>
  <tr>
    <td align="right">��Ŀ��̬����:</td>
    <td colspan="3">
      <input name="is_html" type="radio" id="is_html" value="0" checked="checked" class="checkbox" />
      ��̬
      <input name="is_html" type="radio" id="is_html" value="1" class="checkbox" />
      ��̬
      <input name="is_html" type="radio" id="is_html" value="2" class="checkbox" />
      α��̬      </td>
  </tr>
  <tr>
    <td align="right">��Ŀҳģ��:</td>
    <td colspan="3">
      <select name="template_cate">
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('template_cate')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
        <?php }} ?>
      </select> ע��ѡ����ģ���������Ӧ��ģ�壬������(news)��ѡ��category_news.html</td>
  </tr>
  <tr>
    <td align="right">�б�ҳģ��:</td>
    <td colspan="3">
      <select name="template_list">
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
    <td colspan="3"><input type="text" name="seo_title" class="txt" size="30"></td>
  </tr>
  <tr>
    <td align="right">SEO�ؼ���:</td>
    <td colspan="3"><input type="text" name="seo_key" class="txt" size="45"></td>
  </tr>
  <tr>
    <td align="right">SEO����:</td>
    <td colspan="3"><textarea name="seo_des" cols="45" rows="5"></textarea></td>
  </tr>
  </table>
  

<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder mt6">
  <tr>
    <td colspan="4" align="right" class="tdpage">
      <input type="submit" name="submit" value=" �� �� " class="inputs" /></td>
    </tr></table>
  </form>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
