<?php /* Smarty version Smarty-3.0.8, created on 2012-07-19 21:55:28
         compiled from "D:/www/bk/system/templates/default12/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:7191500811d0a73144-85590993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a43fe87a2684098b49e32bc3fd7f6050fa8216af' => 
    array (
      0 => 'D:/www/bk/system/templates/default12/footer.html',
      1 => 1335098706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7191500811d0a73144-85590993',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="footer" class="main t10">
	<div><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
bg_footl.gif" /></div>
    <div class="footer_c"><?php echo $_smarty_tpl->getVariable('config')->value['copyright'];?>
</div>
    <div><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
bg_footr.gif" /></div>
</div>
<?php $_template = new Smarty_Internal_Template("default12/qq.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>