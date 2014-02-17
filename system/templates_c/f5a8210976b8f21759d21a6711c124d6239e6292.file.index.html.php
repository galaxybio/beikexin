<?php /* Smarty version Smarty-3.0.8, created on 2012-07-23 22:35:10
         compiled from "D:/www/bk/system/templates/default/index.html" */ ?>
<?php /*%%SmartyHeaderCode:4166500d611edecd13-95014644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5a8210976b8f21759d21a6711c124d6239e6292' => 
    array (
      0 => 'D:/www/bk/system/templates/default/index.html',
      1 => 1343054106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4166500d611edecd13-95014644',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\www\bk\system\Smarty\plugins\block.loop.php';
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
<?php $_template = new Smarty_Internal_Template("default/header_js.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

</head>
<body>
<center>

<div id="wraper">
<?php $_template = new Smarty_Internal_Template("default/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<!--首页焦点广告图-->
<div id="homeFlash">
<div class="longBg">
	<div class="longBg2" id="slider">
	
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="test" width="886" height="334"codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
	<param name="movie" value="uploadfile/flash.swf?bcastr_xml_url=uploadfile/flash.xml" />
    <param name="quality" value="high" /><param name="bgcolor" value="#869ca7" />
    <param name="wmode" value="transparent" /><param name="allowScriptAccess" value="sameDomain" />
    <embed src="uploadfile/flash.swf?bcastr_xml_url=uploadfile/flash.xml" quality="high" bgcolor="#869ca7"width="886" height="334" name="test" align="middle"play="true"loop="false"quality="high"allowScriptAccess="sameDomain"type="application/x-shockwave-flash"pluginspage="http://www.adobe.com/go/getflashplayer"></embed>
</object>

	</div>
</div>

</div>

<div class="homeCon">
<div class="news">
     <span style="top: -3px; left: 0px; position: relative;">
	 <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."content where 	commend=1 and catid=10 order by sort desc",'rows'=>"1")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."content where 	commend=1 and catid=10 order by sort desc",'rows'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	 <a class="red" href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
"><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</a>
	 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."content where 	commend=1 and catid=10 order by sort desc",'rows'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	 </span><!--<span style="top: 3px; left: 180px; position: relative;"><a href="/"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
share.jpg" border="0"></a></span>-->
</div>

</div>
<!--首页中间内容-->
<div class="homeCon">
  <div class="homeCon0">
  
    <!--公司新闻-->
 <div class="homeCon1" style="margin: 0px 8px;">
      <div class="homeCon2">
        <div class="homeCon2In" style="top: 0px; left: 7px; position: relative;">
          <div class="tittle1">公司新闻</div>
          <div style="width: 400px; height: 1px; float: left;"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
linehome3.png" border="0"></div>
          <div class="homeCon2In" style="margin-top: 7px;">
            <ul class="ulHome">  


				<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('catid'=>"10",'rows'=>"6")); $_block_repeat=true; smarty_block_loop(array('catid'=>"10",'rows'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				
					<li class="liCase liHome1" ><a class="aHome" href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
" title="<?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
"><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</a></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('catid'=>"10",'rows'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
          	
            	
								
                       	            	
            </ul>
          </div>
          <div class="homeCon2In" style="margin-top: 5px; text-align: right;"><a href="index.php?m=content&c=index&f=lists&catid=10"><!--<img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
more.png" border="0">--> 了解更多...</a></div>
        </div>
      </div>
    </div>
	
    <!--Tab内容-->
    <div class="homeCon3">
      <div class="tabHome">
        <ul id="tabHomeMenu">
          <li class="hover" onmouseover="setTab(0)">热销产品</li>
        <!--  <li onmouseover="setTab(1)">签约新闻</li>
         
          <li onmouseover="setTab(2)">最新动态</li>
		 -->
        </ul>
        <div class="tabHomeMain" id="tabHomeCon" style="height: 172px;">
		<span class="block">
		
		
          <div class="homeMedia">
		  
            <div class="homeMedia_L" style="width: 160px;">
           		
           		<div class="homeMedia_Pic"><a href="/"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
media_anybackup.jpg" border="0"></a></div>
              <div class="homeMedia_Con" style="width: 110px;"><a class="red" href="/">北信备份容灾家族<br>谁说容灾难普及</a></div>
            </div>
			
            <div class="homeMedia_R">
            	<div class="homeMedia_Pic"><a href="/"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
newconference.jpg" border="0"></a></div>
              <div class="homeMedia_Con"><a class="red" href="/">拥抱智能数据管理解决方案——北信2012新品发布会</a></div>
            </div>
          </div>
		 
		  
          <div class="homeMedia">
            <div class="homeMedia_L" style="margin-top: 15px;">
              <div class="homeMedia_Pic"><a href="/"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
media_2011exhi.jpg" border="0"></a></div>
              <div class="homeMedia_Con"><a href="/">北信 2011 <br>百城巡展</a></div>
            </div>              
            <div class="homeMedia_R" style="margin-top: 15px;">
              <div class="homeMedia_Pic"><a href="/"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
media_cloud.jpg" border="0"></a></div><a href="/">
              </a><div class="homeMedia_Con"><a href="/"></a><a href="/">北信云落地战略</a></div>
            </div>
          </div>
          <div class="homeMedia">
            <div class="homeMedia_L" style="margin-top: 15px;">
           		<div class="homeMedia_Pic"><a href="/"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
media_80.jpg" border="0"></a></div>
              <div class="homeMedia_Con"><a href="/">80后北信<br>以人为本</a></div>
            </div>
            <div class="homeMedia_R" style="margin-top: 15px;">
              <div class="homeMedia_Pic"><a href="/"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
media_fenghui.png" border="0"></a></div>
              <div class="homeMedia_Con"><a href="/">2011中国<br>存储峰会</a></div>
            </div>
          </div>
       
          </span>
		 
            <!--签约新闻-->
          <!--   <span>
            <div class="homeMedia">
              <ul class="ulHome">
              	<li class="liMedia liHome1"><a class="aHome" href="http://www.eisoo.com/article/contract/20120717/808.html" target="_top">爱数一体化容灾助力克拉玛依公安局信息化安全</a></li>
              	<li class="liMedia liHome1"><a class="aHome" href="http://www.eisoo.com/article/contract/20120717/807.html" target="_top">爱数助新疆维吾尔自治区人民检察院构建备份容灾云</a></li>
              	<li class="liMedia liHome1"><a class="aHome" href="http://www.eisoo.com/article/contract/20120620/799.html" target="_top">爱数AnyShare闪耀伊利实业集团</a></li>
              	<li class="liMedia liHome1"><a class="aHome" href="http://www.eisoo.com/article/contract/20120524/795.html" target="_top">分享之路——爱数AnyShare为苏州二建打造......</a></li>
              	<li class="liMedia liHome1"><a class="aHome" href="http://www.eisoo.com/article/contract/20120524/794.html" target="_top">爱数助力永州市国土资源局备份容灾系统建设</a></li>
            </ul></div>
              <div class="homeMedia" style="margin-top: 22px; text-align: right; float: left;"><a href="http://www.eisoo.com/article/plus/list.php?tid=11"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
more.png" border="0"> 了解更多</a></div>
            </span>
            -->
            <!--最新动态-->
         <!--  <span>
            <div class="homeMedia">
              <ul class="ulHome">
              	<li style="width: 360px;" class="liMedia liHome1"><a class="aHome" href="http://www.eisoo.com/article/news/20120620/802.html" target="_top" title="拥抱智能文档管理（三）——谁在关心企业文档管理">拥抱智能文档管理（三）——谁在关心企业文档管理</a></li>
              	<li style="width: 360px;" class="liMedia liHome1"><a class="aHome" href="http://www.eisoo.com/article/news/20120620/801.html" target="_top" title="拥抱智能文档管理（二）——文档管理的挑战">拥抱智能文档管理（二）——文档管理的挑战</a></li>
              	<li style="width: 360px;" class="liMedia liHome1"><a class="aHome" href="http://www.eisoo.com/article/news/20120620/800.html" target="_top" title="深入爱数一体化容灾技术体系——重复数据删除">深入爱数一体化容灾技术体系——重复数据删除</a></li>
              	<li style="width: 360px;" class="liMedia liHome1"><a class="aHome" href="http://www.eisoo.com/article/news/20120522/793.html" target="_top" title="拥抱爱数 拥抱智能数据管理——爱数2012新品发布会拉开帷幕">拥抱爱数 拥抱智能数据管理——爱数2012新品发布会拉开帷幕</a></li>
              	<li class="liMedia liHome1"><a class="aHome" href="http://www.eisoo.com/article/news/20120405/789.html" target="_top" title="文档管理的基石——文档组织">文档管理的基石——文档组织</a></li>
              
              	</ul>
            </div>
              <div class="homeMedia" style="margin-top: 21px; text-align: right; float: left;"><a href="http://www.eisoo.com/article/plus/list.php?tid=1"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
more.png" border="0"> 了解更多</a></div>
            </span>

		-->

     </div>
        <div style="width: 431px; height: 3px; line-height: 3px; margin-bottom: 10px; float: left;"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
tabhomeb.png"></div>
      </div>
    </div>
  </div>  


</div>

<?php $_template = new Smarty_Internal_Template("default/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>  
</div>

</center>

</body>
</html>
