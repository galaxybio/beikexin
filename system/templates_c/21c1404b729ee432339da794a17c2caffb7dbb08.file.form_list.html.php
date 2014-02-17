<?php /* Smarty version Smarty-3.0.8, created on 2012-07-21 20:43:49
         compiled from "D:/www/bk/system/templates/default/form_list.html" */ ?>
<?php /*%%SmartyHeaderCode:9814500aa405e450d9-50025378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21c1404b729ee432339da794a17c2caffb7dbb08' => 
    array (
      0 => 'D:/www/bk/system/templates/default/form_list.html',
      1 => 1342874628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9814500aa405e450d9-50025378',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $_smarty_tpl->getVariable('form')->value['form_name'];?>
</title>
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
		<div class="mainRoute">当前位置：<a href="http://www.eisoo.com/cn/">首页</a>  &gt; <a href="http://www.eisoo.com/cn/partner/index.php?id=intro"><?php echo $_smarty_tpl->getVariable('form')->value['form_name'];?>
</a>
			 </div>
		<!--mainNav-->
		<div class="mainNav">
			  
			   <ul class="mainNav1">


<li class="mainNav1_0"><?php echo $_smarty_tpl->getVariable('form')->value['form_name'];?>
</li>


<li  class="mainNav1_1"><a href="#"><?php echo $_smarty_tpl->getVariable('form')->value['form_name'];?>
</a></li>


</ul>
		</div>
		
<div class="mainCon">	
	<!--mainThird starts here-->	
	<div class="mainThird">
		<div style="width: 720px; height: 115px; background: url('<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
tobe.png') repeat scroll 0% 0% transparent;"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
eisoos.gif" border="0"></div>
		<div class="mainConHr3_0"></div>
		<div class="main3Tl_0"><?php echo $_smarty_tpl->getVariable('form')->value['form_name'];?>
</div>
		<div class="main3Con" style="margin-top: 10px;">
			<table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#ffffff">
          <form name="addform" action="index.php?m=form&c=lists&f=add_save&formid=<?php echo $_smarty_tpl->getVariable('form')->value['id'];?>
" method="post">
          <tr>
            <td colspan="2"><b><?php echo $_smarty_tpl->getVariable('form')->value['form_name'];?>
<br></td>
          </tr>
          <tr>
            <td width="21%" align="right">标题：</td>
            <td width="79%"><label>
              <input name="fields[title]" type="text" id="fields[title]" size="35" />
            </label></td>
          </tr>
          <?php echo $_smarty_tpl->getVariable('fields')->value;?>

          <tr>
            <td>&nbsp;</td>
            <td>
            <input type="submit" name="submit" value=" 提 交 " /></td>
          </tr>
          </form>
        </table>
			
			
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