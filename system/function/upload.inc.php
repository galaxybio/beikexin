<?php
session_start();
if(empty($_SESSION['admin'])){
	echo'not administrator';
	exit;
}
require_once('../libs/upload.class.php');
$filename = $_GET["filename"];

//判断上传是文件还是图片
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

//开始上传
if (isset($_GET["action"])){
	$goback = " <a href=javascript:history.back(-1)>返 回</a>";
	$upload = new upload($size,$folder);
    $upload->allowed_file_ext = $allowed;
    $upload->upload_process();
    if ( $upload->error_no ){
        switch( $upload->error_no ){
            case 1:
                print "<center>没有文件被上传".$goback."</center>"; 
				exit();
            case 2:
            case 5:
                 print "<center>不支持此文件格式".$goback."</center>"; 
				 exit();
            case 3:
                 print "<center>文件超过上传大小".$goback."</center>"; 
				 exit();
            case 4:
                 print "<center>上传目录设置错误".$goback."</center>"; 
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
<title>上传文件</title> 
<LINK href="../../admin/css/css.css" type=text/css rel=stylesheet>
</head> 
<body> 
<table width="100%" border="0" align="center" style="padding-top:8px;padding-bottom:8px;">
 <form id="form1" name="upload" enctype="multipart/form-data" method="post" action="?action=upload&type=<?php echo $type?>&filename=<?php echo $filename?>">  
 <tr>
    <td align="center">请选择文件：
      <input type="file" name="FILE_UPLOAD[]" class="input"/></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input type="submit" name="Submit" value="上 传" class="button"/></td>
  </tr></form> 
</table>

</body> 
</html> 
