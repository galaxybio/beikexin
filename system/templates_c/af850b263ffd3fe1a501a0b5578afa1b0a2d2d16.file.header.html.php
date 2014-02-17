<?php /* Smarty version Smarty-3.0.8, created on 2012-07-19 21:55:28
         compiled from "D:/www/bk/system/templates/default12/header.html" */ ?>
<?php /*%%SmartyHeaderCode:22678500811d0944ed9-44667033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af850b263ffd3fe1a501a0b5578afa1b0a2d2d16' => 
    array (
      0 => 'D:/www/bk/system/templates/default12/header.html',
      1 => 1333765423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22678500811d0944ed9-44667033',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="header" class="main">
	<div><a href="/index.php?m=content&c=index&f=lists&catid=7">联系我们</a></div>
    <a href="/" id="logo"><img src="<?php echo $_smarty_tpl->getVariable('config')->value['logourl'];?>
" /></a>
</div>
<div id="nav" class="main">
	<ul>
    	<li class="home"><a href="/">首页</a></li>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value['is_target']==1){?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['catname'];?>
</a></li>
        <?php }} ?>
    </ul>
</div>
<div class="main"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="test" width="968" height="245"codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
	<param name="movie" value="uploadfile/flash.swf?bcastr_xml_url=uploadfile/flash.xml" />
    <param name="quality" value="high" /><param name="bgcolor" value="#869ca7" />
    <param name="wmode" value="transparent" /><param name="allowScriptAccess" value="sameDomain" />
    <embed src="uploadfile/flash.swf?bcastr_xml_url=uploadfile/flash.xml" quality="high" bgcolor="#869ca7"width="990" height="280" name="test" align="middle"play="true"loop="false"quality="high"allowScriptAccess="sameDomain"type="application/x-shockwave-flash"pluginspage="http://www.adobe.com/go/getflashplayer"></embed>
</object></div>