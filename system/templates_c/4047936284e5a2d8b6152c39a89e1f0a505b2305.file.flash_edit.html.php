<?php /* Smarty version Smarty-3.0.8, created on 2012-07-22 08:50:27
         compiled from "D:/www/bk/system/templates/admin/flash/flash_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:14793500b4e5353e4a8-59064622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4047936284e5a2d8b6152c39a89e1f0a505b2305' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/flash/flash_edit.html',
      1 => 1342918221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14793500b4e5353e4a8-59064622',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">�õ�Ƭ����</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>����ѡ�</b><a href="index.php?m=flash&c=flash">������ҳ</a> | <a href="index.php?m=flash&c=flash&f=add">��ӻõ�Ƭ</a>&nbsp;|&nbsp;[<a href="javascript:location.reload()">ˢ��ҳ��</a>]</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
<form name="addform" action="index.php?m=flash&c=flash&f=editsave" method="post">
    <tr>
    <th colspan="4">�õ�Ƭ�༭</th>
  </tr>
  <tr>
    <td align="right">���ƣ�</td>
    <td colspan="3"><input type="text" name="title" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
"></td>
  </tr>
  <tr>
    <td align="right">���ӵ�ַ��</td>
    <td colspan="3"><input type="text" name="url" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['url'];?>
"></td>
  </tr>
  <tr>
    <td align="right">ͼƬ��</td>
    <td colspan="3"><input type="text" name="thumb"  id="thumb" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['thumb'];?>
"> <a href="#" onclick="javascript:ShowIframe('�ϴ��õ�Ƭ','system/function/upload.inc.php?filename=thumb','340','80')">�� ��</a></td>
  </tr>
  <tr>
    <td colspan="4" align="right" class="tdpage"><input name="id" type="hidden" id="id" value="<?php echo $_smarty_tpl->getVariable('rs')->value['id'];?>
" />
      <input type="submit" name="submit" value=" �� �� " class="inputs" /></td>
    </tr>
  </form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
