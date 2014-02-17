<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 09:12:55
         compiled from "D:/www/bk/system/templates/admin/transfer_category.html" */ ?>
<?php /*%%SmartyHeaderCode:2294500a0217ebf549-63623507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1c5831f7cdb6e42ee8631c4cb918eb551b21e7e' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/transfer_category.html',
      1 => 1337004810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2294500a0217ebf549-63623507',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">内容管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=91736&c=content&catid=<?php echo $_smarty_tpl->getVariable('catid')->value;?>
">管理首页</a> | <a href="index.php?m=91736&c=content&f=add&catid=<?php echo $_smarty_tpl->getVariable('catid')->value;?>
"><span class="f00">发布信息</span></a> | <a href="index.php?m=91736&c=transfer&catid=<?php echo $_smarty_tpl->getVariable('catid')->value;?>
">数据转移</a> | [<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
<form name="addform" action="index.php?m=91736&c=transfer&f=transfer_save" method="post">
    <tr>
    <th colspan="4">栏目内容转移</th>
  </tr>
  <tr>
    <td width="17%" align="right">转移栏目下属内容：</td>
    <td width="83%" colspan="3">
      <select name="fromcate" size="15" id="fromcate" style="width:160px;">
      <?php echo $_smarty_tpl->getVariable('categorylist')->value;?>

      </select> 
      转移至
      <select name="tocate" size="15" id="tocate" style="width:160px;">
      <?php echo $_smarty_tpl->getVariable('categorylist')->value;?>

      </select> 
    </td>
  </tr>
  <tr>
    <td colspan="4" align="right" class="tdpage">
      <input type="submit" name="submit" value=" 确认转移 " class="inputs" /></td>
    </tr>
  </form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
