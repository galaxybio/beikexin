<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 09:27:22
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/admin/single_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:31512500df9fa2fcc52-92610542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5252d5c88ea13117850070ccef1378391dc03e92' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/admin/single_edit.html',
      1 => 1343057655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31512500df9fa2fcc52-92610542',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<script charset="utf-8" src="admin/editor/kindeditor.js"></script>
<script charset="utf-8" src="admin/editor/lang/zh_CN.js"></script>
<script charset="utf-8" src="admin/editor/plugins/code/prettify.js"></script>
<script charset="utf-8" src="admin/editor/editor.js"></script>
<form name="addform" action="index.php?m=91736&c=content&f=edit_save" method="post">
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
    <tr>
    <th colspan="4">���ݱ༭</th>
  </tr>
  <tr>
    <td width="17%" align="right">��Ŀ���ƣ�</td>
    <td width="83%" colspan="3"><?php echo $_smarty_tpl->getVariable('catname')->value;?>
</td>
  </tr>
  <tr>
    <td align="right">���⣺</td>
    <td colspan="3"><input type="text" name="title" class="txt" size="45" id="title" value="<?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
"></td>
  </tr>
  <tr>
    <td align="right">����ͼ��</td>
    <td colspan="3"><input type="text" name="thumb" id="thumb" class="txt" size="25" value="<?php echo $_smarty_tpl->getVariable('rs')->value['thumb'];?>
"> <a href="#" onclick="javascript:ShowIframe('�ϴ�����ͼ','system/function/upload.inc.php?filename=thumb','340','80')">�� ��</a></td>
  </tr>
<!--  <tr>
    <td align="right">�ؼ���:</td>
    <td colspan="3"><input type="text" name="keywords" class="txt" size="40" id="keywords" value="<?php echo $_smarty_tpl->getVariable('rs')->value['keywords'];?>
"></td>
  </tr>
  <tr>
    <td align="right">ժҪ:</td>
    <td colspan="3"><textarea name="description" id="description" cols="50" rows="4"><?php echo $_smarty_tpl->getVariable('rs')->value['description'];?>
</textarea></td>
  </tr>-->
  <?php echo $_smarty_tpl->getVariable('fields')->value;?>

  <tr>
    <td align="right">����ʱ�䣺</td>
    <td colspan="3"><input type="text" name="updatetime" class="txt" size="20" id="updatetime" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
"></td>
  </tr>
  <tr>
    <td colspan="4" align="right" class="tdpage"><input type="hidden" name="inputtime" id="inputtime" value="<?php echo $_smarty_tpl->getVariable('rs')->value['inputtime'];?>
" />
      <input type="hidden" name="url" id="url" value="<?php echo $_smarty_tpl->getVariable('rs')->value['url'];?>
" /><input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('rs')->value['contentid'];?>
" /><input type="hidden" name="catid" id="catid" value="<?php echo $_smarty_tpl->getVariable('catid')->value;?>
" />
      <input type="submit" name="submit" value=" �� �� " class="inputs" /></td>
    </tr>
</table>
</form>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
