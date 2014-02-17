<?php
class template extends Checklogin{

	public function init(){
		assign("template_list",get_tem_file(""));
		template('template_list','admin');
	}
	
	public function edit(){
		$filename=$_GET['file'];
		$file=TP_PATH.TP_FOLDER."/".$filename;
		if(!$fp=@fopen($file,'r+')){
			showmsg(C('open_template_error'),'-1');
		}
		flock($fp,LOCK_EX);
		$str=@fread($fp,filesize($file));
		flock($fp,LOCK_UN);
		fclose($fp);
		assign('filename',$filename);
		assign('content',$str);
		template('template_edit','admin');
	}
	
	public function edit_save(){
		$file = $_POST['file'];
		$content=stripslashes($_POST['content']);
		
		$file_array=explode(".",$file);
		if(is_array($file_array)){
			$filename=array_pop($file_array);
			if($filename!='html'){
				showmsg(C('error'),'-1');
			}
		}else{
			showmsg(C('error'),'-1');
		}
		
		$file=TP_PATH.TP_FOLDER."/".$file;
		//判断文件是否存在
		if(!file_exists($file)){
			showmsg(C('file_not_exist'),'-1');
		}
		if(!$fp=@fopen($file,'w+')){
			showmsg(C('open_template_error'),'-1');
		}
		flock($fp,LOCK_EX);
		fwrite($fp,$content);
		flock($fp,LOCK_UN);
		fclose($fp);
		showmsg(C('update_success'),'-1');
	}
	
	public function calls(){
		template('template_calls','admin');
	}
}

?>