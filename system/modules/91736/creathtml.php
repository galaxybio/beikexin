<?php
class creathtml extends Checklogin{
	
	public $is_html;
	
	function __construct(){
		parent::check_admin();
		$this->html=base::load_class("html");
		$this->ob_url=base::load_class("url");
		$this->mysql=$this->html->mysql;
		$config=base::load_cache("cache_set_config","_config");
		$this->is_html=$config['createhtml'];
		$this->info=intval($_POST['infonumber']);
	}
	
	public function init(){
		template('main','admin');
	}
	
	public function update_index(){
		if($this->is_html==1){
			$this->html->creat_index();
			showmsg(C('update_success'),'-1');
		}else{
			showmsg(C('config_html_error'),'index.php?m=91736&c=setting');
		}
	}
	
	//show为更新内容页,lists为更新栏目页,else为更新url
	public function update_save(){
		if($_POST['tag']!=''){
			$_SESSION["category_array"]=="";
			$category=$_POST['category'];
			$tag=$_POST['tag'];
		}elseif(!empty($_SESSION["category_array"])){
			$category=$_SESSION["category_array"];
			$this->info=$_SESSION["info"];
			$tag="lists";
		}else{
			$category=$_POST['category'];
			$tag=$_POST['tag'];
		}

		if(empty($category)){
			showmsg(C('error'),'-1');
		}
		foreach ($category as $value){
			$child=get_catids($value);
			if(empty($child)){          //如果没有子栏目
				if($tag=='show'){
					$this->update_con_url($value);
					$this->update_show_html($value);
				}elseif ($tag=='lists'){
					if($this->info < 1){
						showmsg(C('error'),'-1');
					}
					$_SESSION["info"]=$this->info;
					$cate=get_category($value);
					$this->ob_url->caturl($value,$cate['catdir'],$cate['is_html']);
					$this->update_category_html($value,0);
					if($this->is_html==1 && $cate['is_html']==1){
						$nums=$this->mysql->db_num("content","`catid`=".$value);
						$total=ceil($nums/$this->info);
						$this->set_array($category,$value);
						html_location($value,1,$total);
					}
				}else{
					$this->update_con_url($value);
				}
			}else{
				$child_arr=explode(",",$child);
				foreach ($child_arr as $childid){
					if($tag=='show'){
						$this->update_con_url($childid);
						$this->update_show_html($childid);
					}elseif ($tag=='lists'){
						$this->update_category_html($childid,0);
					}else{
						$this->update_con_url($childid);
					}
				}
				if ($tag=='lists'){
					/*
					 *如果大栏目需生成静态，请注释这两问，开启下面一段
					 */
					 
					$this->set_array($category,$value);
					$this->update_category_html($value,1);
					
					
					/*
					 *如果大栏目需生成静态，请开启下面一段
					 
					if($this->info < 1){
						showmsg(C('error'),'-1');
					}
					$_SESSION["info"]=$this->info;
					$cate=get_category($value);
					$this->ob_url->caturl($value,$cate['catdir'],$cate['is_html']);
					$this->update_category_html($value,0);
					if($this->is_html==1 && $cate['is_html']==1){
						$nums=$this->mysql->db_num("content","`catid` in(".$child.")");
						$total=ceil($nums/$this->info);
						$this->set_array($category,$value);
						html_location($value,1,$total);
					}*/
				}
			}
		}
		showmsg(C('update_success'),'-1');
	}
	
	private function update_con_url($catid){       //根据栏目ID更新栏目下所有内容url
		$cate=get_category($catid);
		$this->ob_url->caturl($catid,$cate['catdir'],$cate['is_html']);
		$query=$this->mysql->query("select * from ".DB_PRE."content where `catid`=".$catid);
		while ($rs=$this->mysql->fetch_rows($query)){
			if(substr($rs['url'],0,7)!="http://"){   //判断url是否为外链,如不是则更新url
				$url=$this->ob_url->conurl($catid,$rs['contentid'],$cate['is_html'],$rs['inputtime']);
				$this->mysql->db_update("content","`url`='".$url."'","`contentid`=".$rs['contentid']);
			}
		}
	}
	
	private function update_show_html($catid){       //根据栏目ID更新栏目下所有内容html
		$cate=get_category($catid);
		if($this->is_html==1 && $cate['is_html']==1){
			$query=$this->mysql->query("select * from ".DB_PRE."content where `catid`=".$catid);
			while ($rs=$this->mysql->fetch_rows($query)){
				if(substr($rs['url'],0,7)!="http://"){   //判断url是否为外链,如不是则更新html
					$this->html->creat_show($catid,$rs['contentid'],$rs['url']);
				}
			}
		}
	}
	
	private function update_category_html($catid,$parent){    //根据栏目ID更新栏目首页html
		if($this->info < 1){
			showmsg(C('error'),'-1');
		}
		$cate=get_category($catid);
		$this->ob_url->caturl($catid,$cate['catdir'],$cate['is_html']);
		if($this->is_html==1 && $cate['is_html']==1 && $cate['is_link']==0){
			$this->html->creat_list($catid,1,$cate["url"]."index.html");
		}
		if($parent==1&&!empty($_SESSION["category_array"])){
			header_location("index.php?m=91736&c=creathtml&f=update_save");
		}
	}
	
	public function cate_html(){
		$catid=intval(safe_html($_GET['catid']));
		$ipage=intval(safe_html($_GET['ipage']));
		$countpage=intval(safe_html($_GET['countpage']));
		$cate=get_category($catid);
		$this->html->creat_list($catid,$ipage,$cate["url"].$ipage.".html");
		
		if($ipage < $countpage){
			$ipage++;
			html_location($catid,$ipage,$countpage);
			exit;
		}
		if(empty($_SESSION["category_array"])){
			$_SESSION["category_array"]="";
			$_SESSION["info"]="";
			showmsg(C('success'),'index.php?m=91736&c=categorytree&f=category_tree');
		}else{
			header_location("index.php?m=91736&c=creathtml&f=update_save");
		}
	}
	
	private function set_array($array,$text){
		$array_key=array_keys($array,$text,true);
		unset($array[$array_key[0]]);
		sort($array);
		$_SESSION["category_array"]=$array;
	}
}

?>