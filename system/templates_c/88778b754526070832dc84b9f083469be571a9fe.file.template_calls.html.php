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
    <th height="25">ģ�����</th>
  </tr>
  <tr>
    <td height=25 class="pl20"><b>����ѡ�</b><a href="index.php?m=91736&c=template">������ҳ</a> | <a href="index.php?m=91736&c=template&f=calls">ģ�����˵��</a>&nbsp;|&nbsp;[<a href="javascript:location.reload()">ˢ��ҳ��</a>]</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellspacing="1" cellpadding="2" class="tableBorder mt6">
    <tr>
    <th colspan="2">���ݵ���˵��</th>
  </tr>
  <tr>
    <td width="19%">ǰ̨��������</td>
    <td width="81%">1��PHP�����м��أ�assign('menu',get_menu(0,1))<br>
    2��smartyѭ����<br />
    foreach from=$menu item=value<br />
    &lt;a href=&quot;$value['url']&quot;&gt;$value['catname']&lt;/a&gt;<br />
    /foreach</td>
  </tr>
  <tr>
    <td width="19%">loop��ǩʹ��˵��</td>
    <td width="81%"><p>sql		sql���<br />
      rows		��������,Ĭ��20��<br />
      pages		��ҳ,�����÷�ҳ����<br />
      catid		��ĿID<br />
      more 	�Ƿ��ѯ����, 1��ѯ,Ĭ��Ϊ0����ѯ<br />
      where		sql��ѯ����<br />
      order		����<br />
      return		���ر���������,Ĭ��Ϊr<br />
    thumb		1Ϊ��ʾ��ͼƬ������,Ĭ��Ϊ0��ȡȫ��, 2Ϊ��ʾû��ͼƬ��</p>
    <p>ע������:<br />
      1��sql��catid�������Ա�����һ������,catid����ʱ����sql���</p>
    <p>2��catid��more=&quot;1&quot;һ����ʱֻ��ѯ��ǰ��Ŀ, ֻ��catidʱ��ѯ���ڸ�catid��������Ŀ����Ϣ</p>
    <p>3��pages���ã�pages=&quot;page&quot;��ʾ���ݵ�ǰҳ��ķ�ҳ����Ϊ$page,����ģ����ʾ��ҳ��ʽʱ�ͱ���дΪ<?php echo $_smarty_tpl->getVariable('pages')->value;?>
<br />
      ����<br />
      loop catid=&quot;6&quot; rows=&quot;5&quot; pages=&quot;page&quot;<br />
  &lt;p&gt;$r._index|$r.title&lt;/p&gt;<br />
/loop   <br />
      ��ҳ��$pages</p>
    <p>4��returnֵ�����Զ��壬����<br />
      loop catid=&quot;6&quot; rows=&quot;5&quot; pages=&quot;page&quot; return=&quot;r1&quot;<br />
  &lt;p&gt;$r1._index|$r1.title&lt;/p&gt;<br />
/loop   <br />
      $r1._index �˴� _indexΪ��ǰ����ֵ</p>
    <p>5��û��ʹ��sql���ʱ��Ĭ�ϲ�ѯcontent�������ѯ��������ʹ��sql��䣬�磺<br />
      loop sql='select * from c_link order by idc desc'<br />
      ���ƣ�$r.title<br />
    /loop</p></td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
</html>
