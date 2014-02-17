<?php /* Smarty version Smarty-3.0.8, created on 2012-07-23 21:13:58
         compiled from "D:/www/bk/system/templates/default/list_news.html" */ ?>
<?php /*%%SmartyHeaderCode:1825500d4e166c7f32-19975184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5793abee9a79777bd4ff272df50326ea9a549699' => 
    array (
      0 => 'D:/www/bk/system/templates/default/list_news.html',
      1 => 1343049231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1825500d4e166c7f32-19975184',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\www\bk\system\Smarty\plugins\block.loop.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\www\bk\system\Smarty\plugins\modifier.date_format.php';
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
<?php $_template = new Smarty_Internal_Template("default/header_js.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</head>

<body>

<center>

<div id="wraper" style="margin-top: 18px;">
<?php $_template = new Smarty_Internal_Template("default/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?> 
 
<!--页面中间内开始容-->
<div class="homeCon">
	<!--mainBox starts here-->
	<div class="mainBox">
		<!--mainRoute-->
		<div class="mainRoute">当前位置：<a href="/">首页</a>  &gt; <?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</div>
		<!--mainNav-->
		<div class="mainNav">
		<?php $_template = new Smarty_Internal_Template("default/left_single.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?> 
		</div>
		<div class="mainCon">
			<div class="mainThird">
				<div style="width: 720px; height: 115px; background: url('<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
eisoos.gif') repeat scroll 0% 0% transparent;"></div>
				<div class="mainConHr3_0"></div>
				<div class="main3Tl_0" style="width: 510px;"><?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</div>
				<div class="main3Con">
					
				
<div class="newslist">
   <ul>
   <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'pages'=>'page')); $_block_repeat=true; smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'pages'=>'page'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li><span><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('r')->value['inputtime'],'%Y-%m-%d');?>
</span><a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</a></li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'pages'=>'page'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	
       
   </ul>
   
   </div>
  <?php echo $_smarty_tpl->getVariable('pages')->value;?>


				</div>
			</div>
		</div>
		<div class="footLine"></div>
	</div>
  	<!--mainBox ends here-->
</div>
<!--页面中间内容结束-->
<?php $_template = new Smarty_Internal_Template("default/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>  
</div>

</center>



</body>
</html>