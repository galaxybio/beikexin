<?php
class login extends db{	
	
	public function init(){ 
		if(empty($_COOKIE['member_user'])||empty($_COOKIE['member_userid'])){
            echo "document.write(\"<form id='login' name='login' method='post' action='index.php?m=member&f=login_save'>\");";
			echo "document.write(\"<dl>\");";
			echo "document.write(\"<dd>�û�����<input type='text' name='username' id='username' class='login_input' /></dd>\");";
            echo "document.write(\"<dd>��&nbsp;&nbsp;�룺<input type='password' name='password' id='password' class='login_input' /></dd>\");";
			echo "document.write(\"<dd class=p10><input type='submit' name='button' id='button' value=' ��¼ ' class='submit' />&nbsp;&nbsp;<a href='index.php?m=member&f=register'>����ע���Ա</a></dd>\");";
			echo "document.write(\"</dl>\");";
            echo "document.write(\"</form>\");";
		}else{
			$user=$_COOKIE['member_user'];
			echo "document.write(\"<div class=login_text>����,".$user.",��ӭ������!<br><a href=index.php?m=member>���Ͻ����Ա����</a><br><a href=index.php?m=member&f=logout>�˳���Ա��¼</a></div>\")";
		}
	}
}
?>