<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 22:53:16
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/default/left_product.html" */ ?>
<?php /*%%SmartyHeaderCode:14786500eb6dc3fafb2-70809678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd169262b760f0b164dacc8093c1038882f32a940' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/default/left_product.html',
      1 => 1343141593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14786500eb6dc3fafb2-70809678',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\block.loop.php';
if (!is_callable('smarty_modifier_truncate_cn')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\modifier.truncate_cn.php';
?><ul class="mainNav1">


<li class="mainNav1_0" ><a href="<?php echo $_smarty_tpl->getVariable('cat')->value['url'];?>
"><?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</a></li>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."content where catid=".($_smarty_tpl->getVariable('cat')->value['catid'])."  order by sort asc")); $_block_repeat=true; smarty_block_loop(array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."content where catid=".($_smarty_tpl->getVariable('cat')->value['catid'])."  order by sort asc"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<li  <?php if ($_smarty_tpl->getVariable('r')->value['title']==$_smarty_tpl->getVariable('rs')->value['title']){?>class="mainNav1_on"<?php }else{ ?> class="mainNav1_1"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"><?php if ($_smarty_tpl->getVariable('r')->value['title']=='云存储系统AllWeb'){?>云存储系统<?php }elseif($_smarty_tpl->getVariable('r')->value['title']=='数据挖掘云平台PDMiner'){?>数据挖掘云平台<?php }else{ ?><?php echo smarty_modifier_truncate_cn($_smarty_tpl->getVariable('r')->value['title'],9);?>
<?php }?></a></li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."content where catid=".($_smarty_tpl->getVariable('cat')->value['catid'])."  order by sort asc"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</ul>

