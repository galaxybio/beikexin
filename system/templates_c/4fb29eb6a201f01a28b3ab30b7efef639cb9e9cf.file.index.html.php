<?php /* Smarty version Smarty-3.0.8, created on 2012-07-19 21:55:28
         compiled from "D:/www/bk/system/templates/default12/index.html" */ ?>
<?php /*%%SmartyHeaderCode:19377500811d0531f43-83029631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb29eb6a201f01a28b3ab30b7efef639cb9e9cf' => 
    array (
      0 => 'D:/www/bk/system/templates/default12/index.html',
      1 => 1337522614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19377500811d0531f43-83029631',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\www\bk\system\Smarty\plugins\block.loop.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\www\bk\system\Smarty\plugins\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate_cn')) include 'D:\www\bk\system\Smarty\plugins\modifier.truncate_cn.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $_smarty_tpl->getVariable('config')->value['title'];?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('config')->value['keywords'];?>
" />
<meta name="Description" content="<?php echo $_smarty_tpl->getVariable('config')->value['description'];?>
" />
<link href="<?php echo $_smarty_tpl->getVariable('css_path')->value;?>
css.css" type=text/css rel=stylesheet>
</head>

<body>
<?php $_template = new Smarty_Internal_Template("default12/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div id="index_news" class="main">
	<div class="news">
    	<h1><span><a href="/index.php?m=content&c=index&f=lists&catid=2"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
more.gif" /></a></span><div><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
tit_list.gif" /></div></h1>
        <div class="news_common_pic"><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('catid'=>2,'rows'=>1,'commend'=>1,'thumb'=>1)); $_block_repeat=true; smarty_block_loop(array('catid'=>2,'rows'=>1,'commend'=>1,'thumb'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"><img src="<?php echo thumb($_smarty_tpl->getVariable('r')->value['thumb'],211,147);?>
" /></a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('catid'=>2,'rows'=>1,'commend'=>1,'thumb'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
        <ul>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('catid'=>"2",'rows'=>"6")); $_block_repeat=true; smarty_block_loop(array('catid'=>"2",'rows'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        	<li><span><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('r')->value['inputtime'],"%Y/%m/%d");?>
</span><a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
" <?php if ($_smarty_tpl->getVariable('r')->value['style']!=''){?>class="<?php echo $_smarty_tpl->getVariable('r')->value['style'];?>
"<?php }?>><?php echo smarty_modifier_truncate_cn($_smarty_tpl->getVariable('r')->value['title'],28);?>
</a></li>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('catid'=>"2",'rows'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </div>
    <div class="commmon_products">
    	<h2><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
tit_commend1.gif" /></h2>
        <div>
<SCRIPT type=text/javascript>
var img=new Array();
var txt=new Array();
var lnk=new Array();

<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('catid'=>3,'rows'=>5,'commend'=>1,'thumb'=>1)); $_block_repeat=true; smarty_block_loop(array('catid'=>3,'rows'=>5,'commend'=>1,'thumb'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

img[<?php echo $_smarty_tpl->getVariable('r')->value['_index'];?>
]='<?php echo $_smarty_tpl->getVariable('r')->value['thumb'];?>
'
lnk[<?php echo $_smarty_tpl->getVariable('r')->value['_index'];?>
]=escape('<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
');
txt[<?php echo $_smarty_tpl->getVariable('r')->value['_index'];?>
]='';
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('catid'=>3,'rows'=>5,'commend'=>1,'thumb'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


var focus_width=261;
var focus_height=193;
var text_height=0;

var swf_height = focus_height+text_height;

var pics=img.join("|");
var links=lnk.join("|");
var texts=txt.join("|");
 
 document.write('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="[url]http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6[/url],0,0,0" width=261 height=193>');
document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
pixviewer.swf"><param name="quality" value="high"><param name="bgcolor" value="#ffffff">');
document.write('<param name="menu" value="false"/><param name="wmode" value="transparent"/>');
document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'">');
document.write('<embed src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
pixviewer.swf" wmode="transparent" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="#ffffff" quality="high" width="'+ focus_width +'" height="'+ focus_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash"  pluginspage="[url]http://www.macromedia.com/go/getflashplayer[/url]" />');
document.write('</object>');    </SCRIPT>
        </div>
    </div>
</div>
<div id="index_product" class="main">
	<div class="index_product_l">
    	<div class="index_product_l_l">
        	<h2><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
tit_log.gif" /></h2>
            <div class="login">
            	<script src="index.php?m=member&c=login"></script>
            </div>
            <h2><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
tit_class.gif" /></h2>
            <ul>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."category where parentid=3",'rows'=>"5")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."category where parentid=3",'rows'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            	<li><a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"><?php echo $_smarty_tpl->getVariable('r')->value['catname'];?>
</a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."category where parentid=3",'rows'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="index_product_l_r">
        	<h1><span><a href="/index.php?m=content&c=index&f=lists&catid=3"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
more.gif" /></a></span><div><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
tit_pro.gif" /></div></h1>
            <ul>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('catid'=>"3",'rows'=>"6")); $_block_repeat=true; smarty_block_loop(array('catid'=>"3",'rows'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            	<li><a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"><img src="<?php echo thumb($_smarty_tpl->getVariable('r')->value['thumb'],130,110);?>
" /><br><?php echo smarty_modifier_truncate_cn($_smarty_tpl->getVariable('r')->value['title'],10);?>
</a></li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('catid'=>"3",'rows'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </div>
    <div class="index_product_r">
    	<h2><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
tit_search.gif" /></h2>
        <div class="search">
          <form id="search" name="search" method="get" action="index.php">
            <label>
            <input type="text" name="key" id="key" class="key" />
            </label>
            <label>
            <input type="submit" name="button" id="button" value="À—À˜" class="submit" />
            <input name="m" type="hidden" id="m" value="content" />
            <input name="c" type="hidden" id="c" value="index" />
            <input name="f" type="hidden" id="f" value="search" />
            <input name="catid" type="hidden" id="catid" value="3" />
            </label>
          </form>
        </div>
        <h3 class="t10"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
tit_sev.gif" /></h3>
        <h2><a href="http://bbs.91736.com" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
tit_vv.gif" /></a></h2>
        <h3><a href="http://bbs.91736.com" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
video.jpg" /></a></h3>
    </div>
</div>
<div id="links" class="main t10"><b>”—«È¡¥Ω”£∫</b>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."link order by id desc")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."link order by id desc"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</a> | 
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."link order by id desc"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php $_template = new Smarty_Internal_Template("default12/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>