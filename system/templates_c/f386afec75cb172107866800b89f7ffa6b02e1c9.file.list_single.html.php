<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 22:44:42
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/default/list_single.html" */ ?>
<?php /*%%SmartyHeaderCode:23199500eb4da918352-50123285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f386afec75cb172107866800b89f7ffa6b02e1c9' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/default/list_single.html',
      1 => 1343136781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23199500eb4da918352-50123285',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\block.loop.php';
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
<?php $_template = new Smarty_Internal_Template("default/header_js.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</head>

<body>
<center>

<div id="wraper">
<?php $_template = new Smarty_Internal_Template("default/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<!--页面中间内开始容-->
<div class="homeCon">
	<!--mainBox starts here-->
	<div class="mainBox">
		<!--mainRoute-->
		<div class="mainRoute">当前位置：<a href="/">首页</a>  
		&gt; <?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
		 </div>
		<!--mainNav-->
		<div class="mainNav">
			   <?php $_template = new Smarty_Internal_Template("default/left_single.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		</div>
		
<div class="mainCon">	
	<!--mainThird starts here-->	
	<div class="mainThird">
		<div style="width: 720px; height: 115px; background: url('<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
tobe.png') repeat scroll 0% 0% transparent;"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
eisoos.gif" border="0"></div>
		<div class="mainConHr3_0"></div>
		<div class="main3Tl_0"><?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</div>
		<div class="main3Con" style="margin-top: 10px;">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'rows'=>1,'order'=>'catid asc')); $_block_repeat=true; smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'rows'=>1,'order'=>'catid asc'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('catid'=>$_smarty_tpl->getVariable('r')->value['catid'],'more'=>1,'rows'=>1)); $_block_repeat=true; smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('r')->value['catid'],'more'=>1,'rows'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php echo $_smarty_tpl->getVariable('r')->value['content'];?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('r')->value['catid'],'more'=>1,'rows'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'rows'=>1,'order'=>'catid asc'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			
			
		</div>
		
	</div><!--mainThird ends here-->
</div><!--mainCon ends here-->




		<div class="footLine"></div>
	</div>
  	<!--mainBox ends here-->
</div>
<!--页面中间内容结束-->

<?php $_template = new Smarty_Internal_Template("default/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

</div></center>
</body>
</html>