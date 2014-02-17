<?php /* Smarty version Smarty-3.0.8, created on 2012-07-19 21:57:24
         compiled from "D:/www/bk/system/templates/admin/main.html" */ ?>
<?php /*%%SmartyHeaderCode:228750081244903602-49803855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0df0d0fee3e2a7952fa6659fd2c855b5547314ad' => 
    array (
      0 => 'D:/www/bk/system/templates/admin/main.html',
      1 => 1342706242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228750081244903602-49803855',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\www\bk\system\Smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table cellpadding="2" cellspacing="1" border="0" class="tableBorder" align=center>
  <tr>
    <th colspan=2 height=25>系统信息</th>
  </tr>
  <tr>
   <td width="50%" height=23>PHP程式版本：<?php echo $_smarty_tpl->getVariable('server')->value["version"];?>
</td>
   <td width="50%" height=23>Mysql版本：<?php echo $_smarty_tpl->getVariable('server')->value["mysql_version"];?>
</td>
  </tr>
  <tr>
   <td width="50%" height=23>最大上传限制：<?php echo $_smarty_tpl->getVariable('server')->value["upload"];?>
</td>
   <td width="50%" height=23>最大执行时间：<?php echo $_smarty_tpl->getVariable('server')->value["execution"];?>
 seconds </td>
  </tr>
  <tr>
   <td width="50%" height=23>服务器所在时间：<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('server')->value["time"],'%Y-%m-%d %H:%M:%S');?>
</td>
   <td width="50%" height=23>&nbsp;</td>
  </tr>
  <tr>
   <td width="50%" height=23>系统所在目录：<?php echo $_smarty_tpl->getVariable('server')->value["root"];?>
</td>
   <td width="50%" height=23>网站版本：<?php echo $_smarty_tpl->getVariable('server')->value["cms_version"];?>
 </td>
  </tr>
  <tr>
   <td height=23 colspan="2">服务器端信息：<?php echo $_smarty_tpl->getVariable('server')->value["software"];?>
</td>
  </tr>
  <tr>
    <td height=23 colspan="2"><a href="index.php?m=91736&c=data"><font color=red>数据定期备份</font></a>：请注意做好定期数据备份，数据的定期备份可最大限度的保障您站点数据的安全	</td>
  </tr>
</table>

</body>
</html>