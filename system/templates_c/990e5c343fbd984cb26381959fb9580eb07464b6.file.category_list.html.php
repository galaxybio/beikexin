<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 10:38:10
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/admin/category_list.html" */ ?>
<?php /*%%SmartyHeaderCode:30959500e0a92b9aa99-85492796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '990e5c343fbd984cb26381959fb9580eb07464b6' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/admin/category_list.html',
      1 => 1343057632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30959500e0a92b9aa99-85492796',
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
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableBorder">
<form id="form1" name="form1" method="post" action="index.php?m=91736&c=category&f=sort_save">
<tr>
    <th colspan=6 height=25>��Ŀ�б�</th>
</tr>
<tr align="center"> 
    <td width="11%" height=25>ID</td>
    <td width="11%">����</td>
    <td width="22%">��Ŀ����</td>
    <td width="13%">��ģ��</td>
    <td width="9%">������</td>
    <td width="34%">����</td>
</tr>
<?php echo $_smarty_tpl->getVariable('categorylist')->value;?>

<tr>
    <td width="11%" height=25>&nbsp;</td>
    <td colspan=5>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="button" id="button" value="����" class="inputs" /></td>
</tr>
</form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>