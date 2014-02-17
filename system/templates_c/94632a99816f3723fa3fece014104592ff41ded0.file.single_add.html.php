<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 21:59:47
         compiled from "D:/www/bk/system/templates/admin/single_add.html" */ ?>
<?php /*%%SmartyHeaderCode:3280500ab5d3de90d9-80361352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94632a99816f3723fa3fece014104592ff41ded0' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/single_add.html',
      1 => 1337513433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3280500ab5d3de90d9-80361352',
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
<form name="addform" action="index.php?m=91736&c=content&f=add_save" method="post">
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
    <tr>
    <th colspan="4">发布内容</th>
  </tr>
  <tr>
    <td width="17%" align="right">栏目名称：</td>
    <td width="83%" colspan="3"><?php echo $_smarty_tpl->getVariable('catname')->value;?>
</td>
  </tr>
  <tr>
    <td align="right">标题：</td>
    <td colspan="3"><input type="text" name="title" class="txt" size="45" id="title"></td>
  </tr>
  <tr>
    <td align="right">缩略图：</td>
    <td colspan="3"><input type="text" name="thumb" id="thumb" class="txt" size="25" value=""> <a href="#" onclick="javascript:ShowIframe('上传缩略图','system/function/upload.inc.php?filename=thumb','340','80')">上 传</a></td>
  </tr>
<!--  <tr>
    <td align="right">关键词:</td>
    <td colspan="3"><input type="text" name="keywords" class="txt" size="40" id="keywords"></td>
  </tr>
  <tr>
    <td align="right">摘要:</td>
    <td colspan="3"><textarea name="description" id="description" cols="50" rows="4"></textarea></td>
  </tr>-->
  <?php echo $_smarty_tpl->getVariable('fields')->value;?>

  <tr>
    <td align="right">发布时间：</td>
    <td colspan="3"><input type="text" name="updatetime" class="txt" size="20" id="updatetime" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
"></td>
  </tr>
  <tr>
    <td colspan="4" align="right" class="tdpage">
      <input type="hidden" name="catid" id="catid" value="<?php echo $_smarty_tpl->getVariable('catid')->value;?>
" />
      <input type="submit" name="submit" value=" 保 存 " class="inputs" /></td>
    </tr>
</table>
</form>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
