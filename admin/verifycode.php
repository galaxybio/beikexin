<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * ��վ��ַ: http://www.91736.com
 * ����PHP�������¼��http://bbs.91736.com
 * ============================================================================
*/

require "../system/libs/code.class.php";
$code=new code(60,22);
$code->image();
for($i=1;$i<=4;$i++){
	$checkcode.=$code->checkcode[$i];
}
session_start();
$_SESSION['code']=$checkcode;
?>
