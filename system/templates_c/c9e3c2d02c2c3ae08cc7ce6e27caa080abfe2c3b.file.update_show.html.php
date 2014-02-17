<?php /* Smarty version Smarty-3.0.8, created on 2012-07-19 22:00:43
         compiled from "D:/www/bk/system/templates/admin/update_show.html" */ ?>
<?php /*%%SmartyHeaderCode:304795008130bad2c57-53710952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9e3c2d02c2c3ae08cc7ce6e27caa080abfe2c3b' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/update_show.html',
      1 => 1322800066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304795008130bad2c57-53710952',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">静态生成管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=91736&c=creathtml&f=update_index">更新首页</a> | <a href="index.php?m=91736&c=categorytree&f=category_tree">更新栏目页</a> | <a href="index.php?m=91736&c=categorytree&f=show_tree">更新内容页</a> | <a href="index.php?m=91736&c=categorytree">更新URL</a> | [<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
<form name="addform" action="index.php?m=91736&c=creathtml&f=update_save" method="post">
    <tr>
    <th colspan="2">更新内容页Html</th>
  </tr>
  <tr>
    <td width="20%" align="right">选择栏目范围:<br>(可多选)</td>
    <td><select name="category[]" size="15" multiple="multiple" id="category[]" style="width:160px;">
        <?php echo $_smarty_tpl->getVariable('categorylist')->value;?>

    </select></td>
    </tr>
  <tr>
    <td width="20%" align="right">&nbsp;</td>
    <td>每轮更新信息：
      <input name="infonumber" type="text" id="infonumber" value="100" size="4" /> 条  <input type="submit" name="submit" value=" 开始更新 " class="inputs" /><input name="tag" type="hidden" id="tag" value="show" /></td>
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
