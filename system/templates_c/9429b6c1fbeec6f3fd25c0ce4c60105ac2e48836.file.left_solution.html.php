<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 21:41:42
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/default/left_solution.html" */ ?>
<?php /*%%SmartyHeaderCode:10203500ea6167b13f8-68867552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9429b6c1fbeec6f3fd25c0ce4c60105ac2e48836' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/default/left_solution.html',
      1 => 1343136775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10203500ea6167b13f8-68867552',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\block.loop.php';
if (!is_callable('smarty_modifier_truncate_cn')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\modifier.truncate_cn.php';
?><ul class="mainNav1">

<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('left_menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
<li class="mainNav1_0" ><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['catname'];?>
</a></li>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."content where catid=".($_smarty_tpl->tpl_vars['value']->value['catid'])."  order by sort asc")); $_block_repeat=true; smarty_block_loop(array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."content where catid=".($_smarty_tpl->tpl_vars['value']->value['catid'])."  order by sort asc"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<li  <?php if ($_smarty_tpl->getVariable('r')->value['title']==$_smarty_tpl->getVariable('rs')->value['title']){?>class="mainNav1_on"<?php }else{ ?> class="mainNav1_1"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"><?php echo smarty_modifier_truncate_cn($_smarty_tpl->getVariable('r')->value['title'],9);?>
</a></li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."content where catid=".($_smarty_tpl->tpl_vars['value']->value['catid'])."  order by sort asc"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
</ul>
	
<?php $_template = new Smarty_Internal_Template("default/left_bottom.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>