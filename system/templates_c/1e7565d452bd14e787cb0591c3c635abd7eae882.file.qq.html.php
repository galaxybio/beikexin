<?php /* Smarty version Smarty-3.0.8, created on 2012-07-19 21:55:28
         compiled from "D:/www/bk/system/templates/default12/qq.html" */ ?>
<?php /*%%SmartyHeaderCode:10244500811d0abf128-97283371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e7565d452bd14e787cb0591c3c635abd7eae882' => 
    array (
      0 => 'D:/www/bk/system/templates/default12/qq.html',
      1 => 1335099229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10244500811d0abf128-97283371',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\www\bk\system\Smarty\plugins\block.loop.php';
?><DIV id=xixi onmouseover=toBig() onmouseout=toSmall()>
<TABLE style="FLOAT: left" border=0 cellSpacing=0 cellPadding=0 width=157>
  <TBODY>
  <TR>
    <TD class=main_head height=39 vAlign=top>&nbsp;</TD></TR>
  <TR>
    <TD class=info vAlign=top>
      <TABLE class=qqtable border=0 cellSpacing=0 cellPadding=0 width=120 
      align=center>
        <TBODY>
        
        <TR>
          <TD height=5></TD></TR>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."qq where is_lock=0")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."qq where is_lock=0"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <TR>
          <TD height=30 align=middle><SPAN><a href=' http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $_smarty_tpl->getVariable('r')->value['qq'];?>
&amp;Site=91736.com&amp;Menu=yes' target='_blank'><img src=' http://wpa.qq.com/pa?p=1:<?php echo $_smarty_tpl->getVariable('r')->value['qq'];?>
:4'  border='0' alt='QQ' /> <?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</a></SPAN></TD></TR>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."qq where is_lock=0"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <TR>
          <TD height=5></TD></TR>
        <TR>
          <TD height=35 vAlign=top align=middle><A href="http://www.91736.cn/products/" target="_blank"><IMG border=0 src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
img3-5-btn1.gif" width=90 height=25></A></TD>
        </TR>
        <TR>
          <TD height=38 vAlign=top align=middle><A href="http://www.91736.cn/products/" target="_blank"><IMG border=0 src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
img3-5-btn2.gif" width=90 height=25></A></TD>
        </TR>
        
        <TR>
        <TD align=middle>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD class=down_kefu vAlign=top></TD></TR></TBODY></TABLE>
<DIV class=Obtn></DIV></DIV>
<script language=javascript src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
js.js"></script>