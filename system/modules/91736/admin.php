<?php
class admin extends Checklogin{

	function init(){
		template('admin_list','admin');
	}
	
	public function lock(){
		$id=isset($_GET['id'])?intval($_GET['id']):0;
		$lockid=isset($_GET['lockid'])?intval($_GET['lockid']):0;
		$this->mysql->db_update('admin','`is_lock`='.$lockid,'`id`='.$id);
		showmsg(C('update_success'),'-1');
	}
	
	public function edit(){
		$id=isset($_GET['id'])?intval($_GET['id']):0;
		$rs=$this->mysql->get_one('select * from '.DB_PRE.'admin where `id`='.$id);
		$admin_arr=base::load_file(FUN_PATH.'admin.inc.php','_admin');
		assign("admin",$admin_arr);
		assign('rs',$rs);
		template('admin_edit','admin');
	}
	
	public function editsave(){
		$id=isset($_POST['id'])?intval($_POST['id']):0;
		$password=$_POST['password'];
		$password2=$_POST['password2'];
		$purview=$_POST['purview'];
		if(is_array($purview)){
			$purview_str=implode(',',$purview);
		}
		if(!empty($password)){
			if(!strlength($password,5)){
				showmsg(C('password').C('str_len_error').'5','-1');
			}
			if($password!=$password2){
				showmsg(C('password_different'),'-1');
			}
			$password=md5(md5($password));
			$this->mysql->db_update('admin',"`password`='".$password."',`purview`='".$purview_str."'",'`id`='.$id);
		}else{
			$this->mysql->db_update('admin',"`purview`='".$purview_str."'",'`id`='.$id);
		}
		
		//生成管理权限缓存文件
		$file=CACHE_SYS_PATH.'cache_purview_'.$id.'.php';
		if(!empty($purview)){
			$s="<?php\n\$_purview=".var_export($purview,true).";\n?>";
		}
		creat_inc($file,$s);
		
		showmsg(C('update_success'),'-1');
	}
	
	public function add(){
		$admin_arr=base::load_file(FUN_PATH.'admin.inc.php','_admin');
		assign("admin",$admin_arr);
		template('admin_add','admin');
	}
	
	public function addsave(){
		$username=safe_html($_POST['username']);
		$password=$_POST['password'];
		$password2=$_POST['password2'];
		$purview=$_POST['purview'];
		if(empty($username)||empty($password2)||empty($password)){
			showmsg(C('material_not_complete'),'-1');
		}
		if(!strlength($username,5)){
			showmsg(C('username').C('str_len_error').'5','-1');
		}
		if(!strlength($password,5)){
			showmsg(C('password').C('str_len_error').'5','-1');
		}
		if($password!=$password2){
			showmsg(C('password_different'),'-1');
		}
		if(is_array($purview)){
			$purview_str=implode(',',$purview);
		}
		$password=md5(md5($password));
		$ip=safe_replace(safe_html(getip()));
		$this->mysql->db_insert('admin',"`username`='".$username."',`password`='".$password."',`creat_time`='".datetime()."',`last_ip`='".$ip."',`purview`='".$purview_str."'");
		
		//生成管理权限缓存文件
		$last_id=$this->mysql->insert_id();
		$file=CACHE_SYS_PATH.'cache_purview_'.$last_id.'.php';
		if(!empty($purview)){
			$s="<?php\n\$_purview=".var_export($purview,true).";\n?>";
		}
		creat_inc($file,$s);
		
		showmsg(C('add_success'),'index.php?m=91736&c=admin');
	}
	
	public function delete(){
		$id=isset($_GET['id'])?intval($_GET['id']):0;
		
		$cache_file=CACHE_SYS_PATH.'cache_purview_'.$id.'.php';    //删除管理员缓存文件
		if(file_exists($cache_file)){
			unlink($cache_file);
		}
		
		$this->mysql->db_delete('admin','`id`='.$id);
		showmsg(C('delete_success'),'-1');
	}
}

?>