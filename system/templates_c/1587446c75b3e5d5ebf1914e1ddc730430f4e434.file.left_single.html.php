<?php /* Smarty version Smarty-3.0.8, created on 2012-07-22 10:00:54
         compiled from "D:/www/bk/system/templates/default/left_single.html" */ ?>
<?php /*%%SmartyHeaderCode:8105500b5ed686f776-30489028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1587446c75b3e5d5ebf1914e1ddc730430f4e434' => 
    array (
      0 => 'D:/www/bk/system/templates/default/left_single.html',
      1 => 1342922445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8105500b5ed686f776-30489028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\www\bk\system\Smarty\plugins\block.loop.php';
?><ul class="mainNav1">
<?php $_smarty_tpl->tpl_vars['temcatid'] = new Smarty_variable(1, null, null);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."category where catname='".($_smarty_tpl->getVariable('cat')->value['catname'])."'",'rows'=>"1")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."category where catname='".($_smarty_tpl->getVariable('cat')->value['catname'])."'",'rows'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->tpl_vars['temcatid'] = new Smarty_variable($_smarty_tpl->getVariable('r')->value['parentid'], null, null);?>
	<?php if ($_smarty_tpl->getVariable('r')->value['parentid']=='0'){?> <li class="mainNav1_0"><?php echo $_smarty_tpl->getVariable('r')->value['catname'];?>
</li> 
	<?php }else{ ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."category where catid='".($_smarty_tpl->getVariable('temcatid')->value)."'",'rows'=>"1")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."category where catid='".($_smarty_tpl->getVariable('temcatid')->value)."'",'rows'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<li class="mainNav1_0"><?php echo $_smarty_tpl->getVariable('r')->value['catname'];?>
</li>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."category where catid='".($_smarty_tpl->getVariable('temcatid')->value)."'",'rows'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	
	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."category where catname='".($_smarty_tpl->getVariable('cat')->value['catname'])."'",'rows'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('left_menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
<li  <?php if ($_smarty_tpl->tpl_vars['value']->value['catname']==$_smarty_tpl->getVariable('cat')->value['catname']){?>class="mainNav1_on"<?php }else{ ?> class="mainNav1_1"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['catname'];?>
</a></li>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."category where parentid='".($_smarty_tpl->tpl_vars['value']->value['catid'])."'")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."category where parentid='".($_smarty_tpl->tpl_vars['value']->value['catid'])."'"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<li  <?php if ($_smarty_tpl->getVariable('r')->value['catname']==$_smarty_tpl->getVariable('cat')->value['catname']){?>class="mainNav1_on"<?php }else{ ?> class="mainNav1_1"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"><?php echo $_smarty_tpl->getVariable('r')->value['catname'];?>
</a></li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."category where parentid='".($_smarty_tpl->tpl_vars['value']->value['catid'])."'"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
</ul>

<?php $_template = new Smarty_Internal_Template("default/left_bottom.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>