<?php
class login extends db{
	
	public function init(){
		if($_SESSION['admin']){
			showmsg(C('admin_exist'),'index.php?m=91736&c=index');
		}
		template('login','admin');
	}
	
	public function check(){
		
		$username = safe_html($_POST['username']);
		$password = safe_html($_POST['password']);
		$verifycode = safe_html($_POST['verifycode']);

		if(empty($username)||empty($password)){
			showmsg(C('user_pass_empty'),'-1');
		}
		
		if($verifycode!=$_SESSION['code']){
			showmsg(C('verifycode_error'),'-1');
		}
		
		$sql="select * from ".DB_PRE."admin where `username`='$username'";
		if($this->mysql->num_rows($sql)==0){
			showmsg(C('user_not_exist'),'-1');
		}
		
		$password=md5(md5($password));
		$rs=$this->mysql->get_one($sql);
		if($password!=$rs['password']){
			showmsg(C('password_error'),'-1');
		}
		
		if($rs['is_lock']==1){
			showmsg(C('user_lock'),'-1');
		}
		
		$logins=$rs["logins"]+1;
		$ip=safe_replace(safe_html(getip()));
		$this->mysql->db_update("admin","`last_ip`='".$ip."',`last_time`=".datetime().",`logins`=".$logins,"`username`='$username'");
		
		$_SESSION['admin']=$rs['username'];
		$_SESSION['admin_id']=$rs['id'];
		unset($rs);
		showmsg(C("login_success"),"index.php?m=91736&c=index");
	}
	
	public function out(){
		$_SESSION['admin']="";
		$_SESSION['admin_id']="";
		showmsg(C("login_out_success"),"index.php?m=91736&c=login");
	}
}

?>