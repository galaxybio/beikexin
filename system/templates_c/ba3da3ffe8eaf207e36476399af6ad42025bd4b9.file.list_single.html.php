<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 09:01:49
         compiled from "D:/www/bk/system/templates/default12/list_single.html" */ ?>
<?php /*%%SmartyHeaderCode:141165009ff7dbe31d3-00723953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba3da3ffe8eaf207e36476399af6ad42025bd4b9' => 
    array (
      0 => 'D:/www/bk/system/templates/default12/list_single.html',
      1 => 1333763385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141165009ff7dbe31d3-00723953',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\www\bk\system\Smarty\plugins\block.loop.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php if ($_smarty_tpl->getVariable('cat')->value['seo_title']==''){?><?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('cat')->value['seo_title'];?>
<?php }?></title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('cat')->value['seo_key'];?>
" />
<meta name="Description" content="<?php echo $_smarty_tpl->getVariable('cat')->value['seo_des'];?>
" />
<base href="<?php echo $_smarty_tpl->getVariable('config')->value['siteurl'];?>
">
<link href="<?php echo $_smarty_tpl->getVariable('css_path')->value;?>
css.css" type=text/css rel=stylesheet>
</head>

<body>
<?php $_template = new Smarty_Internal_Template("default12/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div class="main t5">
<?php $_template = new Smarty_Internal_Template("default12/left.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <div class="right">
    	<h1><span><a href="/">首页</a> > <?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</span><div><?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</div></h1>
        <div class="content">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'more'=>1,'rows'=>1)); $_block_repeat=true; smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'more'=>1,'rows'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->getVariable('r')->value['content'];?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'more'=>1,'rows'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template("default12/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>