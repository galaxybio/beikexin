<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 09:01:47
         compiled from "D:/www/bk/system/templates/default12/left.html" */ ?>
<?php /*%%SmartyHeaderCode:296235009ff7ba22fb1-42911438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6928652855c7c20395177fa9da18125ea3ca53b' => 
    array (
      0 => 'D:/www/bk/system/templates/default12/left.html',
      1 => 1333763020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296235009ff7ba22fb1-42911438',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<div class="left">
    	<h2><?php echo $_smarty_tpl->getVariable('left_title')->value;?>
</h2>
        <ul>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('left_menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['catname'];?>
</a></li>
        <?php }} ?>
        </ul>
    </div>