<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 15:05:14
         compiled from "D:/www/bk/system/templates/admin/content_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:16185500a54aa49a5a8-75313992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4739d3fe4174007ebc20b6a9999f8b1acfd1e41' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/content_edit.html',
      1 => 1339667283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16185500a54aa49a5a8-75313992',
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
    <th height="25">内容管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=91736&c=content&catid=<?php echo $_smarty_tpl->getVariable('catid')->value;?>
">管理首页</a> | <a href="index.php?m=91736&c=content&f=add&catid=<?php echo $_smarty_tpl->getVariable('catid')->value;?>
"><span class="f00">发布信息</span></a> | <a href="index.php?m=91736&c=transfer&catid=<?php echo $_smarty_tpl->getVariable('catid')->value;?>
">数据转移</a> | [<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<form name="addform" action="index.php?m=91736&c=content&f=edit_save" method="post" enctype="multipart/form-data">
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
    <tr>
    <th colspan="4">编辑内容</th>
  </tr>
  <tr>
    <td width="17%" align="right">栏目名称：</td>
    <td width="83%" colspan="3"><?php echo $_smarty_tpl->getVariable('catname')->value;?>
</td>
  </tr>
  <tr>
    <td align="right">标题：</td>
    <td colspan="3"><input type="text" name="title" class="txt" size="35" id="title" value="<?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
"> 
      <select name="title_color" id="title_color">
        <option value="">颜色</option>
        <option value="c1" class="bg1" <?php if ($_smarty_tpl->getVariable('style')->value[0]=='c1'){?>selected="selected"<?php }?>></option>
        <option value="c2" class="bg2" <?php if ($_smarty_tpl->getVariable('style')->value[0]=='c2'){?>selected="selected"<?php }?>></option>
        <option value="c3" class="bg3" <?php if ($_smarty_tpl->getVariable('style')->value[0]=='c3'){?>selected="selected"<?php }?>></option>
        <option value="c4" class="bg4" <?php if ($_smarty_tpl->getVariable('style')->value[0]=='c4'){?>selected="selected"<?php }?>></option>
        <option value="c5" class="bg5" <?php if ($_smarty_tpl->getVariable('style')->value[0]=='c5'){?>selected="selected"<?php }?>></option>
        <option value="c6" class="bg6" <?php if ($_smarty_tpl->getVariable('style')->value[0]=='c6'){?>selected="selected"<?php }?>></option>
        <option value="c7" class="bg7" <?php if ($_smarty_tpl->getVariable('style')->value[0]=='c7'){?>selected="selected"<?php }?>></option>
        <option value="c8" class="bg8" <?php if ($_smarty_tpl->getVariable('style')->value[0]=='c8'){?>selected="selected"<?php }?>></option>
        <option value="c9" class="bg9" <?php if ($_smarty_tpl->getVariable('style')->value[0]=='c9'){?>selected="selected"<?php }?>></option>
      </select>
      <input name="title_weight" type="checkbox" id="title_weight" value="tb" <?php if ($_smarty_tpl->getVariable('style')->value[1]=='tb'){?>checked="checked"<?php }?> />
      加粗(请注意标题不要超过30字，否则系统将智能截取)</td>
  </tr>
  <tr>
    <td align="right">是否推荐：</td>
    <td colspan="3"><input name="commend" type="radio" id="commend" value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['commend']==1){?>checked="checked"<?php }?>/> 是 <input name="commend" type="radio" id="commend" value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['commend']==0){?>checked="checked"<?php }?> /> 
      否</td>
  </tr>
  <tr>
    <td align="right">作者：</td>
    <td colspan="3"><input type="text" name="username" class="txt" size="10" id="username" value="<?php echo $_smarty_tpl->getVariable('rs')->value['username'];?>
"></td>
  </tr>
  <tr>
    <td align="right">缩略图：</td>
    <td colspan="3"><input type="text" name="thumb" id="thumb" class="txt" size="25" value="<?php echo $_smarty_tpl->getVariable('rs')->value['thumb'];?>
"> <a href="#" onclick="javascript:ShowIframe('上传缩略图','system/function/upload.inc.php?filename=thumb','340','80')">上 传</a></td>
  </tr>
  <tr>
    <td align="right">关键词:</td>
    <td colspan="3"><input type="text" name="keywords" class="txt" size="40" id="keywords" value="<?php echo $_smarty_tpl->getVariable('rs')->value['keywords'];?>
"></td>
  </tr>
  <tr>
    <td align="right">摘要:</td>
    <td colspan="3"><textarea name="description" id="description" cols="50" rows="4"><?php echo $_smarty_tpl->getVariable('rs')->value['description'];?>
</textarea></td>
  </tr>
  <?php echo $_smarty_tpl->getVariable('fields')->value;?>

  <tr>
    <td align="right">更新时间：</td>
    <!--<td colspan="3"><input type="text" name="updatetime" class="txt" size="20" id="updatetime" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
"></td>-->
	<td colspan="3"><input type="text" name="updatetime" class="txt" size="20" id="updatetime" value="<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('rs')->value['updatetime'],'%Y-%m-%d %H:%M:%S');?>
"></td>
  </tr>
  <tr>
    <td align="right">链接地址：</td>
    <td colspan="3"><input type="text" name="url" class="txt" size="30" id="url" value="<?php echo $_smarty_tpl->getVariable('rs')->value['url'];?>
"> </td>
  </tr>
  <tr>
    <td colspan="4" align="right" class="tdpage"><input type="hidden" name="inputtime" id="inputtime" value="<?php echo $_smarty_tpl->getVariable('rs')->value['inputtime'];?>
" />
      <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('rs')->value['contentid'];?>
" /><input type="hidden" name="catid" id="catid" value="<?php echo $_smarty_tpl->getVariable('catid')->value;?>
" />
      <input type="submit" name="submit" value=" 保 存 " class="inputs" /></td>
    </tr>
</table>
</form>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
