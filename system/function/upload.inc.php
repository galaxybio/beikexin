<?php
session_start();
if(empty($_SESSION['admin'])){
	echo'not administrator';
	exit;
}
require_once('../libs/upload.class.php');
$filename = $_GET["filename"];

//�ж��ϴ����ļ�����ͼƬ
$type=isset($_GET['type'])?(int)$_GET['type']:0;
if($type==1){
	$size=2048000;
	$folder='file';
	$allowed=array( 'rar', 'zip', 'doc');
}else{
	$size=500000;
	$folder='image';
	$allowed=array( 'gif', 'jpg', 'jpeg', 'png' );
}

//��ʼ�ϴ�
if (isset($_GET["action"])){
	$goback = " <a href=javascript:history.back(-1)>�� ��</a>";
	$upload = new upload($size,$folder);
    $upload->allowed_file_ext = $allowed;
    $upload->upload_process();
    if ( $upload->error_no ){
        switch( $upload->error_no ){
            case 1:
                print "<center>û���ļ����ϴ�".$goback."</center>"; 
				exit();
            case 2:
            case 5:
                 print "<center>��֧�ִ��ļ���ʽ".$goback."</center>"; 
				 exit();
            case 3:
                 print "<center>�ļ������ϴ���С".$goback."</center>"; 
				 exit();
            case 4:
                 print "<center>�ϴ�Ŀ¼���ô���".$goback."</center>"; 
				 exit();
        }
     }
	echo("<script>window.top.main.document.getElementById('{$filename}').value='{$upload->saved_upload_name1}'</script>");
	echo("<script>window.top.main.document.getElementById('dialogCase').style.display='none'; </script>");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
<title>�ϴ��ļ�</title> 
<LINK href="../../admin/css/css.css" type=text/css rel=stylesheet>
</head> 
<body> 
<table width="100%" border="0" align="center" style="padding-top:8px;padding-bottom:8px;">
 <form id="form1" name="upload" enctype="multipart/form-data" method="post" action="?action=upload&type=<?php echo $type?>&filename=<?php echo $filename?>">  
 <tr>
    <td align="center">��ѡ���ļ���
      <input type="file" name="FILE_UPLOAD[]" class="input"/></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input type="submit" name="Submit" value="�� ��" class="button"/></td>
  </tr></form> 
</table>

</body> 
</html> 
