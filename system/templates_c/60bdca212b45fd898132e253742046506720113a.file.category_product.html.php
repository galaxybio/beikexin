<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 22:11:33
         compiled from "D:/www/bk/system/templates/default/category_product.html" */ ?>
<?php /*%%SmartyHeaderCode:5572500ab8957cd2d8-03905095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60bdca212b45fd898132e253742046506720113a' => 
    array (
      0 => 'D:/www/bk/system/templates/default/category_product.html',
      1 => 1342879886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5572500ab8957cd2d8-03905095',
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
		<div class="mainRoute">当前位置：<a href="/">首页</a> &gt; <a href="http://www.eisoo.com/cn/eisoo/"><?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</a> &gt; <?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</div>
		<!--mainNav-->
		<div class="mainNav">
		<?php $_template = new Smarty_Internal_Template("default/left_single.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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
                    <ul class="pro_list"><h3>Hyperstor</h3> <a href="http://www.bjxyzk.com/product1.aspx?t=1"> <img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
proli_tu1.jpg"></a> <p>目前很多企业在面对快速增长的数据和紧缩的开支同时，还要满足数据保护、保留和访问方面的苛刻要求。这导致企业采用大量的单点产品，..</p> <h4><a href="http://www.bjxyzk.com/product1.aspx?t=1">More&gt;&gt;</a></h4></ul> 
					<ul class="pro_list"><h3>99云存储</h3> <a href="http://www.bjxyzk.com/product1.aspx?t=2"> <img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
proli_tu2.jpg"></a> <p>99云存储是指一个构建在高速分布式存储网络上的数据中心，它将网络中大量不同类型的存储设备通过应用软件集合起来协同工作，形成一个安全的数系..</p> <h4><a href="http://www.bjxyzk.com/product1.aspx?t=2">More&gt;&gt;</a></h4></ul>
					<ul class="pro_list"><h3>虚拟化数据中心</h3> <a href="http://www.bjxyzk.com/product1.aspx?t=4"> <img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
6771619421.png"></a> <p>虚拟化数据中心解决方案以超高的资源利用率打造动态IT基础架构的服务器，有效实现数据中心虚拟化，并简化数据中。</p> <h4><a href="http://www.bjxyzk.com/product1.aspx?t=4">More&gt;&gt;</a></h4></ul>
					<ul class="pro_list"><h3>企业文档管理系统</h3> <a href="http://www.bjxyzk.com/product1.aspx?t=6"> <img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
-19531297682.png"></a> <p>兴宇中科企业文档管理是一套基于网络的企业文档管理及知识管理的软件，帮助企业全面提升团队工作效率，降低成本，实现更准确的决策，..</p> <h4><a href="http://www.bjxyzk.com/product1.aspx?t=6">More&gt;&gt;</a></h4></ul>
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