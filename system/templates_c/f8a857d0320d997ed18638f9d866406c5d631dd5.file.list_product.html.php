<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 21:41:37
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/default/list_product.html" */ ?>
<?php /*%%SmartyHeaderCode:26214500ea611e9e768-14074700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8a857d0320d997ed18638f9d866406c5d631dd5' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/default/list_product.html',
      1 => 1343136784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26214500ea611e9e768-14074700',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\block.loop.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate_cn')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\modifier.truncate_cn.php';
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
		<div class="mainRoute">当前位置：<a href="/">首页</a> > <?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</div>
		<!--mainNav-->
		<div class="mainNav">
		<?php $_template = new Smarty_Internal_Template("default/left_product.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?> 
		</div>
		<div class="mainCon">
			<div class="mainThird">
				
				
				<div style="width: 720px; height: 115px; background: url('<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
core.gif') repeat scroll 0% 0% transparent;"></div>
			<!--	<div class="mainConHr3_0"></div>
				<div class="main3Tl_0" style="width: 510px;"><?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</div>
				<div class="main3Con">
					
					
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'pages'=>'page')); $_block_repeat=true; smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'pages'=>'page'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            	
				
				<ul class="ulHome">
					 <a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
" class="aHome mainTl"><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</a> 日期：<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('r')->value['inputtime'],'%Y-%m-%d');?>

				</ul>


				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'pages'=>'page'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					 
					 
					<br>
              	    <table border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="font-size: 10pt;" align="center">
<form name="pagelist" action="http://www.eisoo.com/article/plus/list.php"></form><input name="typeid" value="1" type="hidden">
<input name="TotalResult" value="200" type="hidden">
<?php echo $_smarty_tpl->getVariable('pages')->value;?>


</tr>
</tbody></table>

				</div>
				-->
				
				<div class="pro_erji">
                <!-- 右侧列表-->
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'order'=>"sort",'pages'=>'page','rows'=>"4")); $_block_repeat=true; smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'order'=>"sort",'pages'=>'page','rows'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <ul class="pro_list"><h3><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</h3> <a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"> <img src="<?php echo thumb($_smarty_tpl->getVariable('r')->value['thumb'],135,97);?>
" /></a> <p><?php echo smarty_modifier_truncate_cn($_smarty_tpl->getVariable('r')->value['description'],160);?>
..</p> <h4><a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
">More>></a></h4></ul> 
					
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'order'=>"sort",'pages'=>'page','rows'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					
                </div>
				
				
				<!--<?php echo $_smarty_tpl->getVariable('pages')->value;?>
-->
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