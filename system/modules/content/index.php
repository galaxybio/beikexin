<?php
class index extends db{	
	function __construct(){
		parent::__construct();
		assign('menu',get_menu(0,1));
	}
	
	public function init(){ 
		template("index");
	}
	
	public function lists($catid='',$_page=""){
		global $page;
		if(empty($catid)){
			$catid=intval(safe_html($_GET['catid']));
		}
		
		if(empty($_page)){
			$page=isset($_GET['page'])?(int)$_GET['page']:0;
			$page=$page==0?1:$page;
		}else{
			$page=$_page;
		}
		
		$array=get_category($catid);
		$catids=get_catids($catid);  //判断是否有子类
		if(empty($catids)){
			$name=str_replace('.html','',$array['template_list']);   //如果没有小类取出列表页模板名称
		}else{
			$child=explode(",",$catids); 
			assign('child',$child);
			$name=str_replace('.html','',$array['template_cate']);   //如果有小类取出栏目页模板名称
		}
		
		$this->left($catid);

		template($name);
	}
	
	public function show($catid='',$contentid=''){
		if(empty($catid)){
			$catid=intval(safe_html($_GET['catid']));
		}
		if(empty($contentid)){
			$contentid=intval(safe_html($_GET['contentid']));
		}
		
		$array=get_category($catid);
		$name=str_replace('.html','',$array['template_show']);
		$model=modelname($catid);
		$sql="select * from ".DB_PRE."content as c,".DB_PRE.$model." as b where c.contentid=b.contentid and c.contentid=".$contentid;
		$rs=$this->mysql->get_one($sql);

		$this->left($catid);
		assign('rs',$rs);
		template($name);
	}
	
	public function left($catid=''){
		$array=get_category($catid);
		//取出左侧最高级栏目
		$parent=is_parent($catid);
		if(!empty($parent)){
			$last_id=array_pop(explode(",",ltrim($parent,",")));  //栏目ID
			$left_title=catname($last_id);   //栏目名称
			$parentid=$last_id;   //赋值给父类ID
		}else{
			$left_title=$array['catname'];
			$parentid=$catid;
		}
		//end
		
		assign('cat',$array);  //加载栏目数组
		assign('left_title',$left_title);
		assign('left_menu',get_sort($parentid,0));
	}
	
	public function hits(){
		$contentid=intval(safe_html($_GET['contentid']));
		$rs=$this->mysql->get_one("select * from ".DB_PRE."content where contentid=".$contentid);
		$count_hits=$rs['hits']+1;
		$this->mysql->db_update("content","hits=".$count_hits,"contentid=".$contentid);
		echo "document.write(\"".$count_hits."\")";
	}
	
	public function search(){ 
		$catid=intval(safe_html($_GET['catid']));
		$key=safe_replace(safe_html($_GET['key']));
		if(empty($key)){
			showmsg(C('error'),'-1');
		}
		$array=get_category($catid);
		
		$this->left($catid);
		assign("key",$key);
		assign('cat',$array);  //加载栏目数组
		template("search");
	}
}
?>