<?php /* Smarty version Smarty-3.0.8, created on 2012-07-23 20:45:47
         compiled from "D:/www/bk/system/templates/default/left_product.html" */ ?>
<?php /*%%SmartyHeaderCode:24320500d477b360682-80372426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dcaed130bf42aade4713feb36762b8784bb91bb' => 
    array (
      0 => 'D:/www/bk/system/templates/default/left_product.html',
      1 => 1343047533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24320500d477b360682-80372426',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\www\bk\system\Smarty\plugins\block.loop.php';
if (!is_callable('smarty_modifier_truncate_cn')) include 'D:\www\bk\system\Smarty\plugins\modifier.truncate_cn.php';
?><ul class="mainNav1">


<li class="mainNav1_0" ><a href="<?php echo $_smarty_tpl->getVariable('cat')->value['url'];?>
"><?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</a></li>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."content where catid=".($_smarty_tpl->getVariable('cat')->value['catid'])."  order by sort asc")); $_block_repeat=true; smarty_block_loop(array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."content where catid=".($_smarty_tpl->getVariable('cat')->value['catid'])."  order by sort asc"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<li  <?php if ($_smarty_tpl->getVariable('r')->value['title']==$_smarty_tpl->getVariable('rs')->value['title']){?>class="mainNav1_on"<?php }else{ ?> class="mainNav1_1"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"><?php echo smarty_modifier_truncate_cn($_smarty_tpl->getVariable('r')->value['title'],9);?>
</a></li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."content where catid=".($_smarty_tpl->getVariable('cat')->value['catid'])."  order by sort asc"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</ul>
	
<?php $_template = new Smarty_Internal_Template("default/left_bottom.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>