<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 09:17:08
         compiled from "D:/www/bk/system/templates/admin/model_add.html" */ ?>
<?php /*%%SmartyHeaderCode:9677500a0314e8bbd7-04559483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '040f5c691d3c653a03896d503c5104d8157cdf40' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/model_add.html',
      1 => 1322800064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9677500a0314e8bbd7-04559483',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">ģ�͹���</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>����ѡ�</b><a href="index.php?m=91736&c=model">������ҳ</a> | <a href="index.php?m=91736&c=model&f=model_add">����ģ��</a> | <a href="index.php?m=91736&c=model&f=cache">����ģ�ͻ���</a> | [<a href="javascript:location.reload()">ˢ��ҳ��</a>]</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
<form name="addform" action="index.php?m=91736&c=model&f=model_add_save" method="post">
    <tr>
    <th colspan="4">����ģ��</th>
  </tr>
  <tr>
    <td align="right">ģ�����ƣ�</td>
    <td colspan="3"><input type="text" name="modelname" class="txt" size="30" id="modelname"></td>
  </tr>
  <tr>
    <td align="right">ģ�����ݱ�:</td>
    <td colspan="3"><input type="text" name="modeltable" class="txt" size="30" id="modeltable"></td>
  </tr>
  <tr>
    <td align="right">�Ƿ���:</td>
    <td colspan="3">
      <input name="is_lock" type="radio" id="is_lock" value="1" checked="checked" />
      �� 
      <input type="radio" name="is_lock" id="is_lock" value="0" />
      ��</td>
  </tr>
  <tr>
    <td align="right">�Ƿ�̶�:</td>
    <td colspan="3">
      <input name="is_fixed" type="radio" id="is_fixed" value="1" />
      �� 
      <input name="is_fixed" type="radio" id="is_fixed" value="0" checked="checked" />
      ��</td>
  </tr>
  <tr>
    <td colspan="4" align="right" class="tdpage">
      <input type="submit" name="submit" value=" �� �� " class="inputs" /></td>
    </tr>
  </form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>