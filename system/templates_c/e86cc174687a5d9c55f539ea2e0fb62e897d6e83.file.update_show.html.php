<?php /* Smarty version Smarty-3.0.8, created on 2013-02-25 18:39:56
         compiled from "D:/www/beikexin/system/templates/admin/update_show.html" */ ?>
<?php /*%%SmartyHeaderCode:26458512b3f7c54d8e9-70548415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e86cc174687a5d9c55f539ea2e0fb62e897d6e83' => 
    array (
      0 => 'D:/www/beikexin/system/templates/admin/update_show.html',
      1 => 1353936857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26458512b3f7c54d8e9-70548415',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">��̬���ɹ���</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>����ѡ�</b><a href="index.php?m=91736&c=creathtml&f=update_index">������ҳ</a> | <a href="index.php?m=91736&c=categorytree&f=category_tree">������Ŀҳ</a> | <a href="index.php?m=91736&c=categorytree&f=show_tree">��������ҳ</a> | <a href="index.php?m=91736&c=categorytree">����URL</a> | [<a href="javascript:location.reload()">ˢ��ҳ��</a>]</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
<form name="addform" action="index.php?m=91736&c=creathtml&f=update_save" method="post">
    <tr>
    <th colspan="2">��������ҳHtml</th>
  </tr>
  <tr>
    <td width="20%" align="right">ѡ����Ŀ��Χ:<br>(�ɶ�ѡ)</td>
    <td><select name="category[]" size="15" multiple="multiple" id="category[]" style="width:160px;">
        <?php echo $_smarty_tpl->getVariable('categorylist')->value;?>

    </select></td>
    </tr>
  <tr>
    <td width="20%" align="right">&nbsp;</td>
    <td>ÿ�ָ�����Ϣ��
      <input name="infonumber" type="text" id="infonumber" value="100" size="4" /> ��  <input type="submit" name="submit" value=" ��ʼ���� " class="inputs" /><input name="tag" type="hidden" id="tag" value="show" /></td>
  </tr>
  
  <tr>
    <td colspan="2" align="right" class="tdpage">      </td>
    </tr>
  </form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
