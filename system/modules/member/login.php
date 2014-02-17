<?php
class login extends db{	
	
	public function init(){ 
		if(empty($_COOKIE['member_user'])||empty($_COOKIE['member_userid'])){
            echo "document.write(\"<form id='login' name='login' method='post' action='index.php?m=member&f=login_save'>\");";
			echo "document.write(\"<dl>\");";
			echo "document.write(\"<dd>用户名：<input type='text' name='username' id='username' class='login_input' /></dd>\");";
            echo "document.write(\"<dd>密&nbsp;&nbsp;码：<input type='password' name='password' id='password' class='login_input' /></dd>\");";
			echo "document.write(\"<dd class=p10><input type='submit' name='button' id='button' value=' 登录 ' class='submit' />&nbsp;&nbsp;<a href='index.php?m=member&f=register'>马上注册会员</a></dd>\");";
			echo "document.write(\"</dl>\");";
            echo "document.write(\"</form>\");";
		}else{
			$user=$_COOKIE['member_user'];
			echo "document.write(\"<div class=login_text>您好,".$user.",欢迎您回来!<br><a href=index.php?m=member>马上进入会员中心</a><br><a href=index.php?m=member&f=logout>退出会员登录</a></div>\")";
		}
	}
}
?>