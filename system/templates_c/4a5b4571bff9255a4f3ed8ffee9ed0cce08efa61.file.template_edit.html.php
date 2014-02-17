<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 10:36:26
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/admin/template_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:26296500e0a2a718146-97435040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a5b4571bff9255a4f3ed8ffee9ed0cce08efa61' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/admin/template_edit.html',
      1 => 1343057656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26296500e0a2a718146-97435040',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">模板管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=91736&c=template">管理首页</a> | <a href="index.php?m=91736&c=template&f=calls">模板调用说明</a>&nbsp;|&nbsp;[<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
<form name="addform" action="index.php?m=91736&c=template&f=edit_save" method="post">
    <tr>
    <th colspan="4">模板编辑</th>
  </tr>
  <tr>
    <td width="19%" align="right">模板地址：</td>
    <td width="81%" colspan="3"><?php echo $_smarty_tpl->getVariable('filename')->value;?>
</td>
  </tr>
  
  <tr>
    <td align="right">源代码:</td>
    <td colspan="3"><label>
      <textarea name="content" id="content" cols="85" rows="35"><?php echo $_smarty_tpl->getVariable('content')->value;?>
</textarea>
    </label></td>
  </tr>
  <tr>
    <td colspan="4" class="tdpage">
      <input type="submit" name="submit" value=" 保 存 " class="inputs" />
      <input name="file" type="hidden" id="file" value="<?php echo $_smarty_tpl->getVariable('filename')->value;?>
" /></td>
    </tr>
  </form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
