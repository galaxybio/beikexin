<?php /* Smarty version Smarty-3.0.8, created on 2012-07-23 21:12:19
         compiled from "D:/www/bk/system/templates/default/category_case.html" */ ?>
<?php /*%%SmartyHeaderCode:21577500d4db3ea7179-06499742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a65a89df272ab0c280e4567db06959c5dcd338ab' => 
    array (
      0 => 'D:/www/bk/system/templates/default/category_case.html',
      1 => 1343048169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21577500d4db3ea7179-06499742',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\www\bk\system\Smarty\plugins\block.loop.php';
if (!is_callable('smarty_modifier_truncate_cn')) include 'D:\www\bk\system\Smarty\plugins\modifier.truncate_cn.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><title><?php if ($_smarty_tpl->getVariable('cat')->value['seo_title']==''){?><?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('cat')->value['seo_title'];?>
<?php }?></title><meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('cat')->value['seo_key'];?>
" /><meta name="Description" content="<?php echo $_smarty_tpl->getVariable('cat')->value['seo_des'];?>
" /><?php $_template = new Smarty_Internal_Template("default/header_js.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?></head><body><center><div id="wraper" style="margin-top: 18px;"><?php $_template = new Smarty_Internal_Template("default/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>  <!--页面中间内开始容--><div class="homeCon">	<!--mainBox starts here-->	<div class="mainBox">		<!--mainRoute-->		<div class="mainRoute">当前位置：<a href="/">首页</a> &gt;<?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</div>		<!--mainNav-->		<div class="mainNav">		<?php $_template = new Smarty_Internal_Template("default/left_solution.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?> 		</div>		<div class="mainCon">			<div class="mainThird">				<div style="width: 720px; height: 115px; background: url('<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
solve.gif') repeat scroll 0% 0% transparent;"></div>				<div class="mainConHr3_0"></div>								<div class="main1Con">			<div class="main1Tl_0"><?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</div>			<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'pages'=>'page')); $_block_repeat=true; smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'pages'=>'page'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
            					<div class="main1Tl"><a class="mainTl" href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
more.png" border="0"> <?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</a></div>				<div class="main1Con">					<p class="p1"><?php echo $_smarty_tpl->getVariable('r')->value['description'];?>
</p>						</div>				<ul class="main1ConUl">					<!--<li><a class="red" href="http://www.eisoo.com/cn/products/ab/"><span class="">AnyBackup Family</span></a>——适用于中型用户备份容灾需求</li>					<li><a class="red" href="http://www.ebackup.cn/">EBackup.cn</a>——适用于中小型用户备份容灾需求</li>					<li><a class="red" href="http://www.eisoo.com/cn/products/tx3/yg/">TxCloud</a>——适用于中大型用户备份容灾需求</li>					-->					<?php echo smarty_modifier_truncate_cn($_smarty_tpl->getVariable('r')->value['content'],60);?>
				</ul>				<div class="mainConHr1"></div>				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('catid'=>$_smarty_tpl->getVariable('cat')->value['catid'],'pages'=>'page'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
					<?php echo $_smarty_tpl->getVariable('pages')->value;?>
		</div>		<div class="mainSecond"><script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('css_path')->value;?>
mainnav_centertest.js"></script></div>			</div>		</div>		<div class="footLine"></div>	</div>  	<!--mainBox ends here--></div><!--页面中间内容结束--><?php $_template = new Smarty_Internal_Template("default/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>  </div></center></body></html>