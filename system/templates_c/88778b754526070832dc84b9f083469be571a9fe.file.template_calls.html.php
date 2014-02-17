<?php /* Smarty version Smarty-3.0.8, created on 2012-07-26 09:31:03
         compiled from "E:/py163/qn200m/quanyuelong/web/system/templates/admin/template_calls.html" */ ?>
<?php /*%%SmartyHeaderCode:2304450109dd7e9f223-99505244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88778b754526070832dc84b9f083469be571a9fe' => 
    array (
      0 => 'E:/py163/qn200m/quanyuelong/web/system/templates/admin/template_calls.html',
      1 => 1343057656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2304450109dd7e9f223-99505244',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="tableBorder">
  <tr>
    <th height="25">模板管理</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>管理选项：</b><a href="index.php?m=91736&c=template">管理首页</a> | <a href="index.php?m=91736&c=template&f=calls">模板调用说明</a>&nbsp;|&nbsp;[<a href="javascript:location.reload()">刷新页面</a>]</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
    <tr>
    <th colspan="2">数据调用说明</th>
  </tr>
  <tr>
    <td width="19%">前台导航调用</td>
    <td width="81%">1、PHP代码中加载：assign('menu',get_menu(0,1))<br>
    2、smarty循环：<br />
    foreach from=$menu item=value<br />
    &lt;a href=&quot;$value['url']&quot;&gt;$value['catname']&lt;/a&gt;<br />
    /foreach</td>
  </tr>
  <tr>
    <td width="19%">loop标签使用说明</td>
    <td width="81%"><p>sql		sql语句<br />
      rows		返回条数,默认20条<br />
      pages		分页,并设置分页变量<br />
      catid		栏目ID<br />
      more 	是否查询附表, 1查询,默认为0不查询<br />
      where		sql查询条件<br />
      order		排序<br />
      return		返回变量数组名,默认为r<br />
    thumb		1为显示有图片的新闻,默认为0读取全部, 2为显示没有图片的</p>
    <p>注意事项:<br />
      1、sql和catid两个属性必须有一个存在,catid存在时忽略sql语句</p>
    <p>2、catid与more=&quot;1&quot;一起用时只查询当前栏目, 只有catid时查询属于该catid所有子栏目的信息</p>
    <p>3、pages设置，pages=&quot;page&quot;表示传递当前页面的分页变量为$page,下面模板显示分页样式时就必须写为<?php echo $_smarty_tpl->getVariable('pages')->value;?>
<br />
      例：<br />
      loop catid=&quot;6&quot; rows=&quot;5&quot; pages=&quot;page&quot;<br />
  &lt;p&gt;$r._index|$r.title&lt;/p&gt;<br />
/loop   <br />
      分页：$pages</p>
    <p>4、return值可以自定义，例：<br />
      loop catid=&quot;6&quot; rows=&quot;5&quot; pages=&quot;page&quot; return=&quot;r1&quot;<br />
  &lt;p&gt;$r1._index|$r1.title&lt;/p&gt;<br />
/loop   <br />
      $r1._index 此处 _index为当前索引值</p>
    <p>5、没有使用sql语句时，默认查询content表，如需查询其它表，请使用sql语句，如：<br />
      loop sql='select * from c_link order by idc desc'<br />
      名称：$r.title<br />
    /loop</p></td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
