<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * 函数库
 * 网站地址: http://www.91736.com
 * 更多PHP开发请登录：http://bbs.91736.com
 * ============================================================================
*/

include(FUN_PATH."clue.inc.php");
include(LIB_PATH."base.class.php");
include(FUN_PATH."global.inc.php");

//模板加载函数
function template($name,$path=""){
	global $smarty;
	if(empty($path)){
		$path=TP_FOLDER;
	}
	if(!file_exists(TP_PATH.$path."/".$name.".html"))die($path."/".$name.".html模版文件不存在"); //检查模版文件是否存在
	$smarty->display($path."/".$name.".html");
}

//变量加载函数
function assign($var,$value){
	global $smarty;
	$smarty->assign($var,$value);
}

//安全过滤函数
function safe_replace($string) {
	$string = str_replace('%20','',$string);
	$string = str_replace('%27','',$string);
	$string = str_replace('%2527','',$string);
	$string = str_replace('*','',$string);
	$string = str_replace('"','&quot;',$string);
	$string = str_replace("'",'',$string);
	$string = str_replace('"','',$string);
	$string = str_replace(';','',$string);
	$string = str_replace('<','&lt;',$string);
	$string = str_replace('>','&gt;',$string);
	$string = str_replace("{",'',$string);
	$string = str_replace('}','',$string);
	$string = str_replace('\\','',$string);
	return $string;
}

//安全过滤函数
function safe_html($str){
	if(empty($str)){return;}
	$str=preg_replace('/select|insert | update | and | in | on | left | joins | delete |\%|\=|\/\*|\*|\.\.\/|\.\/| union | from | where | group | into |load_file
|outfile/','',$str);
	return htmlspecialchars($str);
}

//提示信息内容
function C($clue){
	global $CLUE;
	return $CLUE[$clue];
}

//提示信息对话框
function showmsg($msg,$gourl,$onlymsg=0,$limittime=0){
	$htmlhead  = "<html>\r\n<head>\r\n<title>提示信息</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=gbk}\" />\r\n";
	$htmlhead .= "<base target='_self'/>\r\n<style>";
	$htmlhead .= "*{font-size:12px;color:#2B61BA;}\r\n";
	$htmlhead .= "body{font-family:\"微软雅黑\",\"宋体\", Verdana, Arial, Helvetica, sans-serif;background:#FFFFFF;margin:0;}\r\n";
	$htmlhead .= "a:link,a:visited,a:active {color:#ABBBD6;text-decoration:none;}\r\n";
	$htmlhead .= ".msg{width:400px;text-align:left;background:#FFFFFF url('admin/images/msgbg.gif') repeat-x;margin:auto;}\r\n";
    $htmlhead .= ".head{letter-spacing:2px;line-height:29px;height:26px;overflow:hidden;font-weight:bold;}\r\n";
    $htmlhead .= ".content{padding:10px 20px 5px 20px;line-height:200%;word-break:break-all;border:#7998B7 1px solid;border-top:none;}\r\n";
    $htmlhead .= ".ml{color:#FFFFFF;background:url('admin/images/msg.gif') no-repeat 0 0;padding-left:10px;}\r\n";
    $htmlhead .= ".mr{float:right;background:url('admin/images/msg.gif') no-repeat 0 -34px;width:4px;font-size:1px;}\r\n";
    $htmlhead .= "</style></head>\r\n<body leftmargin='0' topmargin='0'><center>\r\n<script>\r\n";
	$htmlfoot  = "</script>\r\n</center>\r\n</body>\r\n</html>\r\n";
	$litime = ($limittime==0 ? 1000 : $limittime);
	$func = '';
	if($gourl=='-1'){
		if($limittime==0) $litime = 3000;
		$gourl = "javascript:history.go(-1);";
	}
	if($gourl=='0'){
		if($limittime==0) $litime = 3000;
		$gourl = "javascript:history.back();";
	}
	if($gourl=='' || $onlymsg==1){
		$msg = "<script>alert(\"".str_replace("\"","“",$msg)."\");</script>";
	}else{
		if(preg_match('/close::/i',$gourl)){
			$tgobj = trim(eregi_replace('close::', '', $gourl));
			$gourl = 'javascript:;';
			$func .= "window.parent.document.getElementById('{$tgobj}').style.display='none';\r\n";
		}
		
		$func .= "      var pgo=0;
      function JumpUrl(){
        if(pgo==0){ location='$gourl'; pgo=1; }
      }\r\n";
		$rmsg = $func;
		$rmsg .= "document.write(\"<br /><br /><br /><div class='msg'>";
		$rmsg .= "<div class='head'><div class='mr'> </div><div class='ml'>".C("message_title")."</div></div>\");\r\n";
		$rmsg .= "document.write(\"<div class='content'>\");\r\n";
		$rmsg .= "document.write(\"".str_replace("\"","“",$msg)."\");\r\n";
		$rmsg .= "document.write(\"";
		
		if($onlymsg==0){
			if( $gourl != 'javascript:;' && $gourl != ''){
				$rmsg .= "<br /><a href='{$gourl}'>".C("browser_not_reaction")."</a>";
				$rmsg .= "</div>\");\r\n";
				$rmsg .= "setTimeout('JumpUrl()',$litime);";
			}else{
				$rmsg .= "</div>\");\r\n";
			}
		}else{
			$rmsg .= "<br/></div>\");\r\n";
		}
		$msg  = $htmlhead.$rmsg.$htmlfoot;
	}
	echo $msg;
	exit;
}

function header_location($url){
	header("Location:".$url);
}

function html_location($catid,$ipage,$countpage){
	header_location("index.php?m=91736&c=creathtml&f=cate_html&catid=".$catid."&ipage=".$ipage."&countpage=".$countpage);
}

//根据模型ID返回表名
function modeltable($id){
	$model=base::load_cache("cache_model","_model");
	$array=get_array($model,"id",$id);
	return $array[0]['model_table'];
	unset($array);
}

//根据模型表名返回ID
function modelid($table){
	$model=base::load_cache("cache_model","_model");
	$array=get_array($model,"model_table",$table);
	return $array[0]['id'];
	unset($array);
}

//根据表单ID返回表名
function formtable($id){
	$form=base::load_cache("cache_form","_form");
	$array=get_array($form,"id",$id);
	return $array[0]['form_table'];
	unset($array);
}

//获取IP
function getip() {  
	if (getenv ( "HTTP_CLIENT_IP" )) {
		$httpip = getenv ( "HTTP_CLIENT_IP" );
		return $httpip;
	}
	if (getenv ( "HTTP_X_FORWARDED_FOR" )) {
		$httpip = getenv ( "HTTP_X_FORWARDED_FOR" );
		return $httpip;
	}
	if (getenv ( "HTTP_X_FORWARDED" )) {
		$httpip = getenv ( "HTTP_X_FORWARDED" );
		return $httpip;
	}
	if (getenv ( "HTTP_FORWARDED_FOR" )) {
		$httpip = getenv ( "HTTP_FORWARDED_FOR" );
		return $httpip;
	}
	if (getenv ( "HTTP_FORWARDED" )) {
		$httpip = getenv ( "HTTP_FORWARDED" );
		return $httpip;
	}
	$httpip = $_SERVER ['REMOTE_ADDR'];
	
	if (!preg_match("/^(\d+)\.(\d+)\.(\d+)\.(\d+)$/", $httpip)) { 
		$httpip = "127.0.0.1";
	}
	
	return $httpip;
}

//获取当前时间
function datetime(){
	return strtotime("now");
	//echo date("Y-n-j H:i:s",strtotime("now"));
}

//获取当前CMS版本
function cmsversion(){
	include(FUN_PATH."version.inc.php");
	return CMS_VERSION." ".CMS_RELEASE;
}

//生成配置文件
function creat_inc($fl,$str){
	if(file_exists($fl)){@unlink($fl);}
	if(!$fp=@fopen($fl,'w')){
		showmsg(C("file_open_error"),"-1");
	}
	flock($fp,LOCK_EX);
	if(!fwrite($fp,$str)){
		showmsg(C("file_write_error"),"-1");
	}
	flock($fp,LOCK_UN);
	unset($fp);
}

//检查字符串长度
function strlength($str,$len){
	if(strlen($str)<$len){
		return false;
	}else{
		return $str;
	}
}

//判断是否为数字
function is_num($str){
	if(strlen($str)>0){
		return preg_match('/[\d]/',$str);
	}
}

//正则检查字符串
function check_str($str,$ereg){
	if(empty($str)){
		return false;
	}else{
		return preg_match($ereg,$str);
	}
}

//取出模板文件列表
function get_tem_file($file=''){
	$dir="";
	$i=0;
	$folder=TP_PATH.TP_FOLDER."/";
	$fp=opendir($folder);
	while($files=readdir($fp)){
		if ($files!="." && $files!=".." && is_file($folder.$files)){
			if(!empty($file)){
				if(substr($files,0,4)==$file){
					$i++;
					$dir[$i]=$files;
				}
			}else{
				$i++;
				$dir[$i]=$files;
			}
		}
	}
	closedir($fp);
	return $dir;
}

//取得模板风格列表
function get_tem_dir(){
	$dir="";
	$i=0;
	$fp=opendir(TP_PATH);
	while($files=readdir($fp)){
		if ($files!="." && $files!=".." && is_dir(TP_PATH.$files) && $files!="admin"){   //列出模板文件夹admin除外
			$i++;
			$dir[$i]=$files;
		}
	}
	closedir($fp);
	return $dir;
}

//从数据库读取下属频道
function get_sort($id,$level) {
	$row=get_menu($id,1);
	if(is_array($row)){
		foreach($row as $value){
			if ($level>=1){
				$prefix = str_pad("|",$level+1,'-',STR_PAD_RIGHT);
			}else{
				$prefix = "";
			}
			$left_menu[] = array('catname'=>$prefix.$value["catname"],'url' => $value["url"],'catid' => $value["catid"]);
			
			/*$sort = get_sort($value["catid"], $level+1);  //如果有子类即循环
			if(is_array($sort)){
				foreach($sort as $v){
					$left_menu[] = array('catname'=>$v["catname"],'url' => $v["url"],'catid' => $v["catid"]);
				}
			}
			*/
			
		} 
	}
	return $left_menu;
}

//获取当前栏目id下所有子栏目数组
function get_menu($parentid=0,$show=0){
	$category=base::load_cache("cache_category","_category");
	$array=get_array($category,'parentid',$parentid,$show);
	return $array;
}

//根据栏目ID取得栏目数组
function get_category($id){
	$category=base::load_cache("cache_category","_category");
	$array=get_array($category,'catid',$id,0);
	return $array[0];
}

//根据栏目ID取得栏目名称
function catname($id){
	$array=get_category($id);
	return $array['catname'];
}

//根据栏目ID取得模型表名称
function modelname($id){
	$array=get_category($id);
	return $array['model'];
}

//获取当前栏目下所有子栏目ID   形式如：1,2,3
function get_catids($parentid=0){
	$array=get_menu($parentid,0);
	$catid="";
	if(!empty($array)){
		foreach($array as $k=>$v){
			$catid.=",".$v['catid'];
		}
	}
	return ltrim($catid,",");
}

/*
 * 条件取出缓存中数组
 * name数组名称   field条件字段   value条件值  show显示条件(1为只显示只在导航显示的栏目,0为不限)
 * 
 */
function get_array($name,$field,$value,$show=0){
	for($row = 0;$row <sizeof($name);$row++){
		if($show==1){
			if($name[$row][$field] == $value&&$name[$row]['is_show'] == 1){
				$new[] = $name[$row];
			}
		}else{
			if($name[$row][$field] == $value){
				$new[] = $name[$row];
			}
		}
  
	}  
	for($row = 0;$row <sizeof($new);$row++){  
		$array[]=$new[$row];
	} 
	return $array;
}

//判断栏目是否有父栏目并返回ID   tid形式如：,1,2,3
function is_parent($catid){
	$tid="";
	$array=get_category($catid);
	$parentid=$array['parentid'];
	if(empty($parentid)){
		$tid="";
	}else{
		$tid.=",".$parentid;
		$tid.=is_parent($parentid);
	}
	return $tid;
}

//关键词关连链接
function addlink($content){
	$keywords=base::load_cache("cache_keywords","_keywords");
	if(!empty($keywords)){
		foreach($keywords as $link){
			$keyword="<a href='".$link['url']."'>".$link['title']."</a>";
			$content=str_replace($link['title'],$keyword,$content);
		}
	}
	return $content;
}

//清除数组中空元素
function array_clear($arr){
	if(is_array($arr)){
		function odd($var){
			return($var<>'');
		}
		return (array_filter($arr, "odd"));
	}else{
		return $arr;
	}
}

function array_merger($a,$b) { 
	foreach ($b as $k => $v) { 
		if(!is_array($v) && !empty($v)) { 
			array_push($a,$v);
		} 
	} 
	return $a;
}


//公告
function notice(){
	include(FUN_PATH."version.inc.php");
	$url=base64_decode("aHR0cDovL3d3dy45MTczNi5jb20vdXBkYXRlLnBocD92PQ==").CMS_RELEASE;
	return $url;
}

//生成缩略图
function thumb($f,$w,$h){
	if(file_exists($f)){
		$image=getimagesize($f);
		if($image[0]<=$w){
			$file=$f;
		}else{
			$filename=array_pop(explode("/",$f));
			$filepath=str_replace($filename,"",$f);
			$filename=explode(".",$filename);
			$file=$filepath."thumb_".$filename[0]."_".$w."_".$h.".".$filename[1];
			if(!file_exists($file)){
				switch($image[2]){
					case 1 :
						$im = imagecreatefromgif($f);
						break;
					case 2 :
						$im = imagecreatefromjpeg($f);
						break;
					case 3 :
						$im = imagecreatefrompng($f);
						break;
				}
				$new = imagecreatetruecolor($w,$h);
				imagecopyresampled($new,$im, 0, 0, 0, 0,$w, $h, $image[0], $image[1]);
				imagejpeg($new,$file);
				imagedestroy($im);
				imagedestroy($new);
			}
		}
	}else{
		$file=CMS_URL.'uploadfile/nopic.gif';
	}
	
	return $file;
}

//生成html
function creat_html($file){
	$data=ob_get_contents();   //返回缓冲区的内容
	ob_clean();
	$fp=fopen($file,'w');
	flock($fp,LOCK_EX);
//	if(!fwrite($fp,$data)){
//		showmsg(C('file_write_error'),'-1');
//	}
	fwrite($fp,$data);
	flock($fp,LOCK_UN);
	fclose($fp);
}

//发送邮件
function sendmail($title,$text){
	$email=base::load_cache("cache_set_email","_email");
	$contact=base::load_cache("cache_set_contact","_contact");
	$smtpserver =$email['mailserver'];//SMTP服务器
	$smtpserverport =$email['mailport'];//SMTP服务器端口
	$smtpusermail = $email['mailadd'];//SMTP服务器的用户邮箱
	$smtpemailto =$contact["email"];//发送给谁
	$smtpuser =$email['username'];//SMTP服务器的用户帐号
	$smtppass =$email['password'];//SMTP服务器的用户密码
	$mailsubject =$title;//邮件主题
	$mailbody =$text;//邮件内容
	$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	
	include LIB_PATH.'email.class.php';
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = FALSE;//是否显示发送的调试信息
	$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
}
?>