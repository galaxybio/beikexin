<?php /* Smarty version Smarty-3.0.8, created on 2012-07-24 22:26:38
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/default/show_case.html" */ ?>
<?php /*%%SmartyHeaderCode:25165500eb09e95edb8-49864063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '189c59e8578869b44ffb1b08c3efca222c7c689a' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/default/show_case.html',
      1 => 1343136786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25165500eb09e95edb8-49864063',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\modifier.date_format.php';
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
<!--ҳ���м��ڿ�ʼ��-->
<div class="homeCon">
	<!--mainBox starts here-->
	<div class="mainBox">
		<!--mainRoute-->
		<div class="mainRoute">��ǰλ�ã�<a href="/">��ҳ</a>  
		&gt; <?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
		 </div>
		<!--mainNav-->
		<div class="mainNav">
			   <?php $_template = new Smarty_Internal_Template("default/left_solution.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		</div>
		
<div class="mainCon">	
	<!--mainThird starts here-->	
	<div class="mainThird">
		<div style="width: 720px; height: 115px; background: url('<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
tobe.png') repeat scroll 0% 0% transparent;"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
eisoos.gif" border="0"></div>
		<div class="mainConHr3_0"></div>
		<div class="main3Tl_0"><?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
</div>
		<div class="main3Con" style="margin-top: 10px;">
			
            <!--<h5>����ʱ�䣺<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('rs')->value['inputtime'],'%Y-%m-%d %H:%M:%S');?>
 ��������<script src="index.php?m=content&c=index&f=hits&contentid=<?php echo $_smarty_tpl->getVariable('rs')->value['contentid'];?>
"></script>��</h5>-->
            <div><?php echo addlink($_smarty_tpl->getVariable('rs')->value['content']);?>
</div>
			
			
		</div>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	</div><!--mainThird ends here-->
</div><!--mainCon ends here-->




		<div class="footLine"></div>
	</div>
  	<!--mainBox ends here-->
</div>
<!--ҳ���м����ݽ���-->

<?php $_template = new Smarty_Internal_Template("default/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

</div></center>


</body>
</html>