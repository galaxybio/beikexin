<?php /* Smarty version Smarty-3.0.8, created on 2013-02-25 18:42:34
         compiled from "D:/www/beikexin/system/templates/default/show_product.html" */ ?>
<?php /*%%SmartyHeaderCode:1294512b401abfa5e3-13407949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c76865e540e32c0b696e255c053f309ee047ff65' => 
    array (
      0 => 'D:/www/beikexin/system/templates/default/show_product.html',
      1 => 1353937075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1294512b401abfa5e3-13407949',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\www\beikexin\system\Smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('rs')->value['keywords'];?>
" />
<meta name="Description" content="<?php echo $_smarty_tpl->getVariable('rs')->value['description'];?>
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
		> <?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
		 </div>
		<!--mainNav-->
		<div class="mainNav">
			   <?php $_template = new Smarty_Internal_Template("default/left_product.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		</div>
		
<div class="mainCon">	
	<!--mainThird starts here-->	
	<div class="mainThird">
		<div style="width: 720px; height: 115px; background: url('<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
core.gif') repeat scroll 0% 0% transparent;"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
core.gif" border="0"></div>
		<div class="mainConHr3_0"></div>
		<div class="main3Tl_0"><?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
</div>
		<div class="main3Con" style="margin-top: 10px;">
			
            <!--<h5>发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('rs')->value['inputtime'],'%Y-%m-%d %H:%M:%S');?>
 点击浏览：<script src="index.php?m=content&c=index&f=hits&contentid=<?php echo $_smarty_tpl->getVariable('rs')->value['contentid'];?>
"></script>次</h5>-->
            <div><?php echo addlink($_smarty_tpl->getVariable('rs')->value['content']);?>
</div>
			
			
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