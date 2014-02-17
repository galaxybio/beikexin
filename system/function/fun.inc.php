<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * ������
 * ��վ��ַ: http://www.91736.com
 * ����PHP�������¼��http://bbs.91736.com
 * ============================================================================
*/

include(FUN_PATH."clue.inc.php");
include(LIB_PATH."base.class.php");
include(FUN_PATH."global.inc.php");

//ģ����غ���
function template($name,$path=""){
	global $smarty;
	if(empty($path)){
		$path=TP_FOLDER;
	}
	if(!file_exists(TP_PATH.$path."/".$name.".html"))die($path."/".$name.".htmlģ���ļ�������"); //���ģ���ļ��Ƿ����
	$smarty->display($path."/".$name.".html");
}

//�������غ���
function assign($var,$value){
	global $smarty;
	$smarty->assign($var,$value);
}

//��ȫ���˺���
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

//��ȫ���˺���
function safe_html($str){
	if(empty($str)){return;}
	$str=preg_replace('/select|insert | update | and | in | on | left | joins | delete |\%|\=|\/\*|\*|\.\.\/|\.\/| union | from | where | group | into |load_file
|outfile/','',$str);
	return htmlspecialchars($str);
}

//��ʾ��Ϣ����
function C($clue){
	global $CLUE;
	return $CLUE[$clue];
}

//��ʾ��Ϣ�Ի���
function showmsg($msg,$gourl,$onlymsg=0,$limittime=0){
	$htmlhead  = "<html>\r\n<head>\r\n<title>��ʾ��Ϣ</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=gbk}\" />\r\n";
	$htmlhead .= "<base target='_self'/>\r\n<style>";
	$htmlhead .= "*{font-size:12px;color:#2B61BA;}\r\n";
	$htmlhead .= "body{font-family:\"΢���ź�\",\"����\", Verdana, Arial, Helvetica, sans-serif;background:#FFFFFF;margin:0;}\r\n";
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
		$msg = "<script>alert(\"".str_replace("\"","��",$msg)."\");</script>";
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
		$rmsg .= "document.write(\"".str_replace("\"","��",$msg)."\");\r\n";
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

//����ģ��ID���ر���
function modeltable($id){
	$model=base::load_cache("cache_model","_model");
	$array=get_array($model,"id",$id);
	return $array[0]['model_table'];
	unset($array);
}

//����ģ�ͱ�������ID
function modelid($table){
	$model=base::load_cache("cache_model","_model");
	$array=get_array($model,"model_table",$table);
	return $array[0]['id'];
	unset($array);
}

//���ݱ�ID���ر���
function formtable($id){
	$form=base::load_cache("cache_form","_form");
	$array=get_array($form,"id",$id);
	return $array[0]['form_table'];
	unset($array);
}

//��ȡIP
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

//��ȡ��ǰʱ��
function datetime(){
	return strtotime("now");
	//echo date("Y-n-j H:i:s",strtotime("now"));
}

//��ȡ��ǰCMS�汾
function cmsversion(){
	include(FUN_PATH."version.inc.php");
	return CMS_VERSION." ".CMS_RELEASE;
}

//���������ļ�
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

//����ַ�������
function strlength($str,$len){
	if(strlen($str)<$len){
		return false;
	}else{
		return $str;
	}
}

//�ж��Ƿ�Ϊ����
function is_num($str){
	if(strlen($str)>0){
		return preg_match('/[\d]/',$str);
	}
}

//�������ַ���
function check_str($str,$ereg){
	if(empty($str)){
		return false;
	}else{
		return preg_match($ereg,$str);
	}
}

//ȡ��ģ���ļ��б�
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

//ȡ��ģ�����б�
function get_tem_dir(){
	$dir="";
	$i=0;
	$fp=opendir(TP_PATH);
	while($files=readdir($fp)){
		if ($files!="." && $files!=".." && is_dir(TP_PATH.$files) && $files!="admin"){   //�г�ģ���ļ���admin����
			$i++;
			$dir[$i]=$files;
		}
	}
	closedir($fp);
	return $dir;
}

//�����ݿ��ȡ����Ƶ��
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
			
			/*$sort = get_sort($value["catid"], $level+1);  //��������༴ѭ��
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

//��ȡ��ǰ��Ŀid����������Ŀ����
function get_menu($parentid=0,$show=0){
	$category=base::load_cache("cache_category","_category");
	$array=get_array($category,'parentid',$parentid,$show);
	return $array;
}

//������ĿIDȡ����Ŀ����
function get_category($id){
	$category=base::load_cache("cache_category","_category");
	$array=get_array($category,'catid',$id,0);
	return $array[0];
}

//������ĿIDȡ����Ŀ����
function catname($id){
	$array=get_category($id);
	return $array['catname'];
}

//������ĿIDȡ��ģ�ͱ�����
function modelname($id){
	$array=get_category($id);
	return $array['model'];
}

//��ȡ��ǰ��Ŀ����������ĿID   ��ʽ�磺1,2,3
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
 * ����ȡ������������
 * name��������   field�����ֶ�   value����ֵ  show��ʾ����(1Ϊֻ��ʾֻ�ڵ�����ʾ����Ŀ,0Ϊ����)
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

//�ж���Ŀ�Ƿ��и���Ŀ������ID   tid��ʽ�磺,1,2,3
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

//�ؼ��ʹ�������
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

//��������п�Ԫ��
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


//����
function notice(){
	include(FUN_PATH."version.inc.php");
	$url=base64_decode("aHR0cDovL3d3dy45MTczNi5jb20vdXBkYXRlLnBocD92PQ==").CMS_RELEASE;
	return $url;
}

//��������ͼ
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

//����html
function creat_html($file){
	$data=ob_get_contents();   //���ػ�����������
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

//�����ʼ�
function sendmail($title,$text){
	$email=base::load_cache("cache_set_email","_email");
	$contact=base::load_cache("cache_set_contact","_contact");
	$smtpserver =$email['mailserver'];//SMTP������
	$smtpserverport =$email['mailport'];//SMTP�������˿�
	$smtpusermail = $email['mailadd'];//SMTP���������û�����
	$smtpemailto =$contact["email"];//���͸�˭
	$smtpuser =$email['username'];//SMTP���������û��ʺ�
	$smtppass =$email['password'];//SMTP���������û�����
	$mailsubject =$title;//�ʼ�����
	$mailbody =$text;//�ʼ�����
	$mailtype = "HTML";//�ʼ���ʽ��HTML/TXT��,TXTΪ�ı��ʼ�
	
	include LIB_PATH.'email.class.php';
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤.
	$smtp->debug = FALSE;//�Ƿ���ʾ���͵ĵ�����Ϣ
	$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
}
?>