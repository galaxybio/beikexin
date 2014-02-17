<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * upload上传类
 * 网站地址: http://www.91736.com
 * 更多PHP开发请登录：http://bbs.91736.com
 * ============================================================================
*/
class upload
{
	var $upload_form_field = 'FILE_UPLOAD';
	var $out_file_name    = '';
	var $out_file_dir     = './';
	var $out_save_dir     = '../../';
	var $max_file_size    = 0;
	var $make_script_safe = 1;
	var $force_data_ext   = '';
	var $allowed_file_ext = array();
	var $image_ext        = array( 'gif', 'jpeg', 'jpg', 'jpe', 'png' );
	var $image_check      = 1;
	var $file_extension   = '';
	var $real_file_extension = '';
	var $error_no         = 0;
	var $is_image         = 0;
	var $original_file_name = "";
	var $parsed_file_name = "";
	var $saved_upload_name = "";
	var $upload_folder    = "";
	var $save_array       = "";
	
	function __construct($size,$folder){
		$this->max_file_size  = $size;
		$this->upload_folder  = $folder;
	}
	
	public function upload_process(){
		$num=count($_FILES[ $this->upload_form_field ]['name']);
		for($key=0;$key<$num;$key++){
			$this->_clean_paths();
			//创建存储路径
			$save_path=$this->out_save_dir."uploadfile/".$this->upload_folder."/";
			if (!file_exists($save_path)) {
				mkdir($save_path);
			}
			$ymd = date("Ymd");
			$save_path .= $ymd;
			if (!file_exists($save_path)) {
				mkdir($save_path);
			}
			$this->out_file_dir = $save_path;
	
			//开始获取上传的文件
			if ( ! function_exists( 'getimagesize' ) ){
				$this->image_check = 0;
			}
	
			$FILE_NAME = isset($_FILES[ $this->upload_form_field ]['name'][$key]) ? $_FILES[ $this->upload_form_field ]['name'][$key] : '';
			$FILE_SIZE = isset($_FILES[ $this->upload_form_field ]['size'][$key]) ? $_FILES[ $this->upload_form_field ]['size'][$key] : '';
			$FILE_TYPE = isset($_FILES[ $this->upload_form_field ]['type'][$key]) ? $_FILES[ $this->upload_form_field ]['type'][$key] : '';
			$FILE_TYPE = preg_replace( "/^(.+?);.*$/", "\\1", $FILE_TYPE );
			
			//判断错误类型
			if ( !isset($_FILES[ $this->upload_form_field ]['name'][$key])
			or $_FILES[ $this->upload_form_field ]['name'][$key] == ""
			or !$_FILES[ $this->upload_form_field ]['name'][$key]
			or !$_FILES[ $this->upload_form_field ]['size'][$key]
			or ($_FILES[ $this->upload_form_field ]['name'][$key] == "none") )
			{
				$this->error_no = 1;
				return;
			}
			
			if( !is_uploaded_file($_FILES[ $this->upload_form_field ]['tmp_name'][$key]) ){
				$this->error_no = 1;
				return;
			}
	
			if ( ! is_array( $this->allowed_file_ext ) or ! count( $this->allowed_file_ext ) ){
				$this->error_no = 2;
				return;
			}
	
			$this->file_extension = $this->_get_file_extension($FILE_NAME );
			
			if ( ! $this->file_extension ){
				$this->error_no = 2;
				return;
			}
			
			$this->real_file_extension = $this->file_extension;
			
			if ( ! in_array( $this->file_extension, $this->allowed_file_ext ) ){
				$this->error_no = 2;
				return;
			}
			
			if ( ( $this->max_file_size ) and ( $FILE_SIZE > $this->max_file_size ) ){
				$this->error_no = 3;
				return;
			}
			
			//文件改名
			$this->sj = date("Ymdhis");
			$this->namenn =$this->sj.substr($_FILES[ $this->upload_form_field ]['name'][$key],strrpos($_FILES[ $this->upload_form_field ]['name'][$key],".")); 
			$FILE_NAME = preg_replace( "/[^\w\.]/", "_", $this->namenn);
		
			$this->original_file_name = $FILE_NAME;
	
			if ( $this->out_file_name ){
				$this->parsed_file_name = $this->out_file_name;
			}
			else{
				$this->parsed_file_name = str_replace( '.'.$this->file_extension, "", $FILE_NAME );
			}
	
			$renamed = 0;
			
			if ( $this->make_script_safe ){
				if ( preg_match( "/\.(cgi|pl|js|asp|php|html|htm|jsp|jar)(\.|$)/i", $FILE_NAME ) ){
					$FILE_TYPE                 = 'text/plain';
					$this->file_extension      = 'txt';
					$this->parsed_file_name	   = preg_replace( "/\.(cgi|pl|js|asp|php|html|htm|jsp|jar)(\.|$)/i", "$2", $this->parsed_file_name );
					
					$renamed = 1;
				}
			}
	
			if ( is_array( $this->image_ext ) and count( $this->image_ext ) ){
				if ( in_array( $this->file_extension, $this->image_ext ) ){
					$this->is_image = 1;
				}
			}
			
			if ( $this->force_data_ext and ! $this->is_image ){
				$this->file_extension = str_replace( ".", "", $this->force_data_ext ); 
			}
			
			$this->parsed_file_name .= $key.'.'.$this->file_extension;
	
			$this->saved_upload_name = $this->out_file_dir.'/'.$this->parsed_file_name;
			$this->save_array .= $this->out_file_dir.'/'.$this->parsed_file_name.",";
			if($this->out_save_dir=="../../"){
				$this->saved_upload_name1 =$this->replace_url($this->out_file_dir).'/'.$this->parsed_file_name;
			}
			if ( ! @move_uploaded_file( $_FILES[ $this->upload_form_field ]['tmp_name'][$key], $this->saved_upload_name) ){
				$this->error_no = 4;
				return;
			}
			else{
				@chmod( $this->saved_upload_name, 0777 );
			}
			
			if( !$renamed ){
				$this->check_xss_infile();
				
				if( $this->error_no ){
					return;
				}
			}
	
			if ( $this->is_image ){
				if ( $this->image_check ){
					$img_attributes = @getimagesize( $this->saved_upload_name );
					
					if ( ! is_array( $img_attributes ) or ! count( $img_attributes ) ){
						@unlink( $this->saved_upload_name );
						$this->error_no = 5;
						return;
					}
					else if ( ! $img_attributes[2] ){
						@unlink( $this->saved_upload_name );
						$this->error_no = 5;
						return;
					}
					else if ( $img_attributes[2] == 1 AND ( $this->file_extension == 'jpg' OR $this->file_extension == 'jpeg' ) ){
						@unlink( $this->saved_upload_name );
						$this->error_no = 5;
						return;
					}
				}
			}
			
			if( filesize($this->saved_upload_name) != $_FILES[ $this->upload_form_field ]['size'][$key] ){
				@unlink( $this->saved_upload_name );
				$this->error_no = 1;
				return;
			}
		}
	}
	
	private function replace_url($str){
		$str = str_replace( "../", "",$str);
		return $str;  
	}

	private function check_xss_infile(){
		$fh = fopen( $this->saved_upload_name, 'rb' );
		$file_check = fread( $fh, 512 );
		fclose( $fh );
		if( !$file_check ){
			@unlink( $this->saved_upload_name );
			$this->error_no = 5;
			return;
		}
		else if( preg_match( "#<script|<html|<head|<title|<body|<pre|<table|<a\s+href|<img|<plaintext#si", $file_check ) ){
			@unlink( $this->saved_upload_name );
			$this->error_no = 5;
			return;
		}
	}
	
	function _get_file_extension($file){
		return strtolower( str_replace( ".", "", substr( $file, strrpos( $file, '.' ) ) ) );
	}
	
	function _clean_paths(){
		$this->out_file_dir = preg_replace( "#/$#", "", $this->out_file_dir );
	}
}
?>