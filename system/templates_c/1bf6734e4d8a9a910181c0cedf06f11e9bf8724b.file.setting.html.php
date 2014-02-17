<?php /* Smarty version Smarty-3.0.8, created on 2013-02-25 18:39:31
         compiled from "D:/www/beikexin/system/templates/admin/setting.html" */ ?>
<?php /*%%SmartyHeaderCode:21582512b3f639f75c9-27843847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bf6734e4d8a9a910181c0cedf06f11e9bf8724b' => 
    array (
      0 => 'D:/www/beikexin/system/templates/admin/setting.html',
      1 => 1353936940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21582512b3f639f75c9-27843847',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">网站信息配置</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><strong>提示信息：</strong>在些设置网站的基本信息，系统配置方面请谨慎设置！</td>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=91736&c=setting">基本设置</a>&nbsp;|&nbsp;<a href="index.php?m=91736&c=setting&f=contact">联系方式</a>&nbsp;|&nbsp;<a href="index.php?m=91736&c=setting&f=email">邮件设置</a>&nbsp;|&nbsp;<a href="index.php?m=91736&c=setting&f=cache">更新缓存</a>&nbsp;|&nbsp;[<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
<form name="addform" action="index.php?m=91736&c=setting&f=save" method="post">
  <tr>
    <th colspan="4">网站信息</th>
  </tr>
  <tr>
    <td width="20%" align="right">网站名称：</td>
    <td colspan="3"><input name="sitename" type="text" class="txt" value="<?php echo $_smarty_tpl->getVariable('config')->value['sitename'];?>
" size="30"></td>
  </tr>
  <tr>
    <td align="right">网站地址：</td>
    <td colspan="3"><input type="text" name="siteurl" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('config')->value['siteurl'];?>
">
    如http://www.chinabang.net/，<font color="#FF0000">（注:必须带"/"）</font></td>
  </tr>
  <tr>
    <td align="right">网站LOGO地址：</td>
    <td colspan="3"><input type="text" name="logourl" id="logourl" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('config')->value['logourl'];?>
"> <a href="#" onclick="javascript:ShowIframe('上传Logo','system/function/upload.inc.php?filename=logourl','340','80')">上 传</a></td>
  </tr>
  
  <tr>
    <td align="right"><font color=red>关闭网站访问：</font></td>
    <td colspan="3"><input name="webstate0" type="checkbox" class=radio value="1" <?php if ($_smarty_tpl->getVariable('config')->value['webstate0']==1){?>checked="checked"<?php }?>>
           是 （选择为关闭）关闭后请编辑下边的关闭原因，将在网站关闭后友情提醒用户。</td>
  </tr>
  <tr>
    <td align="right">默认模板：</td>
    <td colspan="3"><select name="template" id="template">
    	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('template')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->getVariable('config')->value['template']==$_smarty_tpl->tpl_vars['value']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
        <?php }} ?>
            </select></td>
  </tr>
  <tr>
    <td align="right">开启模板缓存：</td>
    <td colspan="3">
      <input type="radio" name="caching" id="caching" value="true" <?php if ($_smarty_tpl->getVariable('config')->value['caching']=='true'){?>checked="checked"<?php }?> class="checkbox"/>
      是 
      <input name="caching" type="radio" id="caching" value="false" <?php if ($_smarty_tpl->getVariable('config')->value['caching']=='false'){?>checked="checked"<?php }?> class="checkbox" />
      否</td>
  </tr>
  <tr>
    <td align="right">关闭原因：</td>
    <td colspan="3"><input name="webstate1" type="text" class="txt" size="50" value="<?php echo $_smarty_tpl->getVariable('config')->value['webstate1'];?>
" /></td>
  </tr>
  <tr>
    <td align="right">版权信息：</td>
    <td colspan="3"><textarea name="copyright" cols="60" rows="4" class="textarea"><?php echo $_smarty_tpl->getVariable('config')->value['copyright'];?>
</textarea>
    支持HTML语法，常用代码：版权&copy; &amp;copy; 空格 &amp;nbsp; 换行  &lt;br/&gt;</td>
  </tr>
  <tr>
    <th colspan="4">SEO选项</th>
  </tr>
  <tr>
    <td align="right">是否静态优化：</td>
    <td colspan="3"><input name="createhtml" type=radio class="checkbox" value="0" <?php if ($_smarty_tpl->getVariable('config')->value['createhtml']==0){?>checked<?php }?>> 
          不启用模拟静态及生成
<br>
            <input name="createhtml" type=radio class="checkbox"   value="1" <?php if ($_smarty_tpl->getVariable('config')->value['createhtml']==1){?>checked<?php }?>>
开启生成HTML静态页面<br>
<input name="createhtml" type=radio class="checkbox"   value="2" <?php if ($_smarty_tpl->getVariable('config')->value['createhtml']==2){?>checked<?php }?>>
开启模拟静态化</span></td>
  </tr>
  <tr>
    <td align="right">将静态化配置应用到所有栏目：</td>
    <td colspan="3">
      <input name="apply" type="checkbox" class="checkbox" id="apply" value="1" />
    是</td>
  </tr>
  <tr>
    <td align="right">网站标题：</td>
    <td colspan="3"><textarea name="title" cols="50" class="txt"><?php echo $_smarty_tpl->getVariable('config')->value['title'];?>
</textarea></td>
  </tr>
  <tr>
    <td align="right">网站META关键词：</td>
    <td colspan="3"><textarea name="keywords" cols="60" rows="4" class="textarea"><?php echo $_smarty_tpl->getVariable('config')->value['keywords'];?>
</textarea>
    针对搜索引擎设置的关键词</td>
  </tr>
  <tr>
    <td align="right">网站META网页描述：</td>
    <td colspan="3"><textarea name="description" cols="60" rows="4" class="textarea"><?php echo $_smarty_tpl->getVariable('config')->value['description'];?>
</textarea>
    针对搜索引擎设置的网页描述</td>
  </tr>
  <tr>
    <td colspan="4" align="right" class="tdpage"><input name="tag" type="hidden" id="tag" value="config" />
      <input type="submit" name="submit" value=" 保 存 " class="inputs" /></td>
    </tr>
  </form>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
