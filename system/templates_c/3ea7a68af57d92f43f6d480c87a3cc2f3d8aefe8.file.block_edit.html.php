<?php /* Smarty version Smarty-3.0.8, created on 2012-07-19 22:01:30
         compiled from "D:/www/bk/system/templates/admin/block_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:307295008133a3c20e8-83666162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ea7a68af57d92f43f6d480c87a3cc2f3d8aefe8' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/block_edit.html',
      1 => 1336982152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307295008133a3c20e8-83666162',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<script charset="utf-8" src="admin/editor/kindeditor.js"></script>
<script charset="utf-8" src="admin/editor/lang/zh_CN.js"></script>
<script charset="utf-8" src="admin/editor/plugins/code/prettify.js"></script>
<script charset="utf-8" src="admin/editor/editor.js"></script>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">碎片管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=91736&c=block">管理首页</a> | <a href="index.php?m=91736&c=block&f=add">添加碎片</a> | [<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
<form name="addform" action="index.php?m=91736&c=block&f=editsave" method="post">
  <tr>
    <th colspan="4">更新碎片</th>
  </tr>
  <tr>
    <td width="24%" align="right">名称：</td>
    <td width="76%" colspan="3"><input type="text" name="title" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
"></td>
  </tr>
  <tr>
    <td align="right">标签：</td>
    <td colspan="3"><input type="text" name="tag" class="txt" size="16" value="<?php echo $_smarty_tpl->getVariable('rs')->value['tag'];?>
"> 注：必须为字母、数字或下划线组成</td>
  </tr>
  <tr>
    <td align="right">详细内容：</td>
    <td colspan="3"><textarea name="content" id="editor" style="width:670px;height:300px;"><?php echo $_smarty_tpl->getVariable('rs')->value['content'];?>
</textarea></td>
  </tr>
  <tr>
    <td colspan="4" align="right" class="tdpage"><input name="id" type="hidden" id="id" value="<?php echo $_smarty_tpl->getVariable('rs')->value['id'];?>
" />
      <input type="submit" name="submit" value=" 保 存 " class="inputs" /></td>
    </tr>
  </form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
