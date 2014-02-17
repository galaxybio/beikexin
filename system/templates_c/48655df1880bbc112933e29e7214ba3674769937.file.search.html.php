<?php /* Smarty version Smarty-3.0.8, created on 2012-08-10 20:32:44
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/default/search.html" */ ?>
<?php /*%%SmartyHeaderCode:243585024ff6c745bb5-70480096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48655df1880bbc112933e29e7214ba3674769937' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/default/search.html',
      1 => 1343136787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243585024ff6c745bb5-70480096',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\block.loop.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $_smarty_tpl->getVariable('key')->value;?>
_产品搜索</title>
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
		<div class="mainRoute">当前位置：<a href="/">首页</a> &gt; <?php echo $_smarty_tpl->getVariable('key')->value;?>
 &gt; 搜索</div>
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
				<div class="main3Tl_0" style="width: 510px;">搜索结果</div>
				<div class="main3Con">
					
				
<div class="newslist">
   <ul>
   <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."content where title like '%".($_smarty_tpl->getVariable('key')->value)."%' or description like '%".($_smarty_tpl->getVariable('key')->value)."%' or keywords like '%".($_smarty_tpl->getVariable('key')->value)."%' order by contentid desc",'pages'=>'page')); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."content where title like '%".($_smarty_tpl->getVariable('key')->value)."%' or description like '%".($_smarty_tpl->getVariable('key')->value)."%' or keywords like '%".($_smarty_tpl->getVariable('key')->value)."%' order by contentid desc",'pages'=>'page'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

   
    <li><span><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('r')->value['inputtime'],'%Y-%m-%d');?>
</span><a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."content where title like '%".($_smarty_tpl->getVariable('key')->value)."%' or description like '%".($_smarty_tpl->getVariable('key')->value)."%' or keywords like '%".($_smarty_tpl->getVariable('key')->value)."%' order by contentid desc",'pages'=>'page'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   
   
	
       
   </ul>
   <?php echo $_smarty_tpl->getVariable('pages')->value;?>

   </div>
  <!-- <div class="fenye">
      <ul>
        <li><a href="#"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
fenye_l.gif"></a></li>
        <li><a href="http://www.bjxyzk.com/xyzkNews.aspx?t=1&amp;p=1">1</a></li><li><a href="http://www.bjxyzk.com/xyzkNews.aspx?t=1&amp;p=2">2</a></li>
        <li><a href="#"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
fenye_r.gif"></a></li>
		
      </ul>
   </div> 
-->
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