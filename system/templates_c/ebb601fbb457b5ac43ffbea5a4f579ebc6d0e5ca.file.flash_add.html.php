<?php /* Smarty version Smarty-3.0.8, created on 2012-07-22 08:50:02
         compiled from "D:/www/bk/system/templates/admin/flash/flash_add.html" */ ?>
<?php /*%%SmartyHeaderCode:30160500b4e3a74f707-61739366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebb601fbb457b5ac43ffbea5a4f579ebc6d0e5ca' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/flash/flash_add.html',
      1 => 1342918051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30160500b4e3a74f707-61739366',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">幻灯片管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=flash&c=flash">管理首页</a> | <a href="index.php?m=flash&c=flash&f=add">添加幻灯片</a>&nbsp;|&nbsp;[<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
<form name="addform" action="index.php?m=flash&c=flash&f=addsave" method="post">
    <tr>
    <th colspan="4">添加幻灯片</th>
  </tr>
  <tr>
    <td width="24%" align="right">名称：</td>
    <td width="76%" colspan="3"><input type="text" name="title" class="txt" size="30"></td>
  </tr>
  <tr>
    <td align="right">链接地址：</td>
    <td colspan="3"><input type="text" name="url" class="txt" size="30"></td>
  </tr>
  <tr>
    <td align="right">图片：</td>
    <td colspan="3"><input type="text" name="thumb" id="thumb" class="txt" size="30"> <a href="#" onclick="javascript:ShowIframe('上传幻灯片','system/function/upload.inc.php?filename=thumb','340','80')">上 传</a></td>
  </tr>
  <tr>
    <td colspan="4" align="right" class="tdpage">
      <input type="submit" name="submit" value=" 保 存 " class="inputs" /></td>
    </tr>
  </form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
