<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 15:01:28
         compiled from "D:/www/bk/system/templates/admin/content_add.html" */ ?>
<?php /*%%SmartyHeaderCode:19850500a53c8440b71-05162429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a48c940aeb692e471d1d020b7cbc106b186b68df' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/content_add.html',
      1 => 1339661607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19850500a53c8440b71-05162429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\www\bk\system\Smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<script charset="utf-8" src="admin/editor/kindeditor.js"></script>
<script charset="utf-8" src="admin/editor/lang/zh_CN.js"></script>
<script charset="utf-8" src="admin/editor/plugins/code/prettify.js"></script>
<script charset="utf-8" src="admin/editor/editor.js"></script>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">���ݹ���</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>����ѡ�</b><a href="index.php?m=91736&c=content&catid=<?php echo $_smarty_tpl->getVariable('catid')->value;?>
">������ҳ</a> | <a href="index.php?m=91736&c=content&f=add&catid=<?php echo $_smarty_tpl->getVariable('catid')->value;?>
"><span class="f00">������Ϣ</span></a> | <a href="index.php?m=91736&c=transfer&catid=<?php echo $_smarty_tpl->getVariable('catid')->value;?>
">����ת��</a> | [<a href="javascript:location.reload()">ˢ��ҳ��</a>]</td>
  </tr>
</table>
<form name="addform" action="index.php?m=91736&c=content&f=add_save" method="post" enctype="multipart/form-data">
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
    <tr>
    <th colspan="4">��������</th>
  </tr>
  <tr>
    <td width="17%" align="right">��Ŀ���ƣ�</td>
    <td width="83%" colspan="3"><?php echo $_smarty_tpl->getVariable('catname')->value;?>
</td>
  </tr>
  <tr>
    <td align="right">���⣺</td>
    <td colspan="3"><input type="text" name="title" class="txt" size="35" id="title"> 
      <select name="title_color" id="title_color">
        <option value="">��ɫ</option>
        <option value="c1" class="bg1"></option>
        <option value="c2" class="bg2"></option>
        <option value="c3" class="bg3"></option>
        <option value="c4" class="bg4"></option>
        <option value="c5" class="bg5"></option>
        <option value="c6" class="bg6"></option>
        <option value="c7" class="bg7"></option>
        <option value="c8" class="bg8"></option>
        <option value="c9" class="bg9"></option>
      </select>
      <input name="title_weight" type="checkbox" id="title_weight" value="tb" />�Ӵ�(��ע����ⲻҪ����30�֣�����ϵͳ�����ܽ�ȡ)</td>
  </tr>
  <tr>
    <td align="right">�Ƿ��Ƽ���</td>
    <td colspan="3"><input name="commend" type="radio" id="commend" value="1"/> �� <input name="commend" type="radio" id="commend" value="0" checked="checked" /> 
      ��</td>
  </tr>
  <tr>
    <td align="right">���ߣ�</td>
    <td colspan="3"><input type="text" name="username" class="txt" size="10" id="username" value="<?php echo $_smarty_tpl->getVariable('adminuser')->value;?>
"></td>
  </tr>
  <tr>
    <td align="right">����ͼ��</td>
    <td colspan="3"><input type="text" name="thumb" id="thumb" class="txt" size="25" value=""> <a href="#" onclick="javascript:ShowIframe('�ϴ�����ͼ','system/function/upload.inc.php?filename=thumb','340','80')">�� ��</a></td>
  </tr>
  <tr>
    <td align="right">�ؼ��ʣ�</td>
    <td colspan="3"><input type="text" name="keywords" class="txt" size="40" id="keywords"></td>
  </tr>
  <tr>
    <td align="right">ժҪ��</td>
    <td colspan="3"><textarea name="description" id="description" cols="50" rows="4"></textarea></td>
  </tr>
  <?php echo $_smarty_tpl->getVariable('fields')->value;?>

  <tr>
    <td align="right">����ʱ�䣺</td>
    <td colspan="3"><input type="text" name="updatetime" class="txt" size="20" id="updatetime" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
"></td>
  </tr>
  <tr>
    <td align="right">�ⲿ���ӣ�</td>
    <td colspan="3"><input type="text" name="url" class="txt" size="30" id="url" value=""> *�����ⲿ����������</td>
  </tr>
  <tr>
    <td colspan="4" align="right" class="tdpage">
      <input type="hidden" name="catid" id="catid" value="<?php echo $_smarty_tpl->getVariable('catid')->value;?>
" />
      <input type="submit" name="submit" value=" �� �� " class="inputs" /></td>
    </tr>
</table>
</form>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
