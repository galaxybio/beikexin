<?php /* Smarty version Smarty-3.0.8, created on 2012-07-25 19:28:18
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/default/header.html" */ ?>
<?php /*%%SmartyHeaderCode:20786500fd852425967-68628219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3ff524db60873b9abe3602deb0cdaa1dbfa1d9a' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/default/header.html',
      1 => 1343215694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20786500fd852425967-68628219',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'E:\py163\qn200m\quanyuelong\web\system\Smarty\plugins\block.loop.php';
?><div id="header">
	<div id="top" style="width: 946px; height: 8px; background: url('<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
topm.png') repeat-x scroll center top transparent; float: left;">
		<div style="width: 8px; height: 8px; background: url('<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
topl.png') no-repeat scroll left top transparent; float: left;"></div>
		<div style="width: 8px; height: 8px; background: url('<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
topr.png') no-repeat scroll left top transparent; float: right;"></div>
	</div>
	<div style="width: 190px; height: 48px; top: 10px; left: 31px; position: relative; float: left;">
		<a href="/" title="<?php echo $_smarty_tpl->getVariable('config')->value['title'];?>
">
			<img alt="<?php echo $_smarty_tpl->getVariable('config')->value['title'];?>
" src="<?php echo $_smarty_tpl->getVariable('config')->value['logourl'];?>
" border="0">
		</a>
	</div>
	<!--<div style="width: 176px; height: 46px; top: 10px; left: 321px; position: relative; float: left;padding-left:-25px">
		<img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
service_tel.jpg" border="0">
	</div>
-->
	<div style="width: 250px; margin-top: 10px; float: right;">
		<div style="width: 210px; height: 23px; text-align: left; margin-bottom: 8px; float: left;">
		<a href="index.php?m=content&c=index&f=lists&catid=35">加入北信</a> | <a href="index.php?m=content&c=index&f=lists&catid=33">联系我们</a></div>
		<div id="searchBox">
		
		
		 <form id="search" name="search" method="get" action="index.php">
            <label>
            <input type="text" name="key" id="key" class="key" />
            </label>
            <label>
			
            <!--<input type="submit" name="button" id="button" value="搜索" class="submit" />-->
			<input src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
search2.png" align="bottom" name="button" id="button" class="submit" type="image">
            <input name="m" type="hidden" id="m" value="content" />
            <input name="c" type="hidden" id="c" value="index" />
            <input name="f" type="hidden" id="f" value="search" />
            <input name="catid" type="hidden" id="catid" value="3" />
            </label>
          </form>
		  
		  
		
		</div>
	</div>
	
<ul id="topNav">
	<li class="topNav_li1"><a class="tag1" href="/">首页</a></li>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
			
			
        
		<?php if ($_smarty_tpl->tpl_vars['value']->value['catname']!='新闻资讯'){?>
		<li <?php if ($_smarty_tpl->tpl_vars['value']->value['catname']=='关于北信'){?> class="topNav_li3"<?php }else{ ?> class="topNav_li2" <?php }?>><a <?php if ($_smarty_tpl->tpl_vars['value']->value['catname']=='关于北信'){?>class="tag3"<?php }else{ ?>class="tag2"<?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value['catname']=='解决方案'){?> href="index.php?m=content&c=index&f=lists&catid=38"<?php }elseif($_smarty_tpl->tpl_vars['value']->value['catname']=='关于北信'){?>href="index.php?m=content&c=index&f=lists&catid=8" <?php }else{ ?> href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value['is_target']==1){?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['catname'];?>
</a>
		<div class="menuDiv1" >
			<div style="width: 168px;  background: none repeat scroll 0% 0% rgb(227, 228, 229); padding-left: 10px; float: left;">
				<ul class="menuUl">
				<?php if ($_smarty_tpl->tpl_vars['value']->value['catname']=='产品中心'){?>
				
				
					<li class="menuUl_li2"><a href="index.php?m=content&c=index&f=show&catid=3&contentid=51">云存储系统</a></li>
<li class="menuUl_li2"><a href="index.php?m=content&c=index&f=show&catid=3&contentid=52">数据挖掘云平台</a></li>					
           	
							
						
				
				<?php }else{ ?>

				 <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."category where parentid=".($_smarty_tpl->tpl_vars['value']->value['catid'])." and is_show =1 order by sort asc")); $_block_repeat=true; smarty_block_loop(array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."category where parentid=".($_smarty_tpl->tpl_vars['value']->value['catid'])." and is_show =1 order by sort asc"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li class="menuUl_li2"><a  href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"><?php echo $_smarty_tpl->getVariable('r')->value['catname'];?>
</a></li>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."category where parentid=".($_smarty_tpl->getVariable('r')->value['catid'])." and is_show =1 order by sort asc")); $_block_repeat=true; smarty_block_loop(array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."category where parentid=".($_smarty_tpl->getVariable('r')->value['catid'])." and is_show =1 order by sort asc"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li class="menuUl_li3"><a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"><?php echo $_smarty_tpl->getVariable('r')->value['catname'];?>
 </a></li>
		           	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."category where parentid=".($_smarty_tpl->getVariable('r')->value['catid'])." and is_show =1 order by sort asc"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

           	
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"SELECT *  from ".($_smarty_tpl->getVariable('pre')->value)."category where parentid=".($_smarty_tpl->tpl_vars['value']->value['catid'])." and is_show =1 order by sort asc"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
		
				     <?php }?>   
				</ul>
			</div>
		
		</div>
	</li>
	<?php }?>
   
	<?php }} ?>
	
	
</ul>
</div>