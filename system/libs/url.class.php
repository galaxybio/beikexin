<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * url������
 * ��վ��ַ: http://www.91736.com
 * ����PHP�������¼��http://bbs.91736.com
 * ============================================================================
*/ 
class url{
	/*
	 *������ĿUrl
	 *catid��ĿID  catdir��ĿĿ¼  ishtml�Ƿ����ɾ�̬   check_parent_html�Ƿ��жϸ���html
	 */
	public function caturl($catid,$catdir,$ishtml,$check_parent_html='0'){
		$config=base::load_cache("cache_set_config","_config");
		$html=$config['createhtml'];
		if($html==1&&$ishtml==1){
			$parent=is_parent($catid);
			if(!empty($parent)){
				//�жϸ����Ƿ�����������html
				if($check_parent_html==0){
					$last_id=array_pop(explode(",",ltrim($parent,",")));  //ȡ���������һ����Ա                   
					$cathtml=get_category($last_id);
					if($cathtml['is_html']==0){    
						showmsg(C('parent_not_html'),'-1');
					}
				}
				//end
		
				$array=array_reverse(explode(",",ltrim($parent,",")));   //�����ݵ���
				$dir="";
				foreach($array as $v){
					$category=get_category($v);
					$dir.=$category['catdir']."/";
					if (!file_exists($dir)) {
						mkdir($dir);
					}
				}
				$url=$dir.$catdir."/";
				if (!file_exists($url)) {
					mkdir($url);
				}
			}else{
				$url=$catdir."/";
				if (!file_exists($url)) {
					mkdir($url);
				}
			}
		}elseif($ishtml==2||$html==2){
			$url="list/".$catid."/";
		}else{
			$url="index.php?m=content&c=index&f=lists&catid=".$catid;
		}
		return $url;
	}
	
	//��������Url
	public function conurl($catid,$contentid,$ishtml,$inputtime){
		$config=base::load_cache("cache_set_config","_config");
		$html=$config['createhtml'];
		if($html==1 && $ishtml==1){
			$y=date("Y",$inputtime);
			$ymd=$y."/".date("nj",$inputtime)."/";
			if (!file_exists($y)) {
				mkdir($y);
			}
			if (!file_exists($ymd)) {
				mkdir($ymd);
			}
			$url=$ymd.$contentid.".html";
		}elseif($html==2||$ishtml==2){
			$url="show_".$catid."_".$contentid.".html";
		}else{
			$url="index.php?m=content&c=index&f=show&catid=".$catid."&contentid=".$contentid;
		}
		return $url;
	}
}
?>