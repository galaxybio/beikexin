<?php
class setting extends Checklogin{
	
	function __construct(){
		parent::check_admin();
		$this->cache=base::load_class("cache");
		$this->mysql=$this->cache->mysql;
	} 
	
	public function init(){
		assign("template",get_tem_dir());
		template("setting","admin");
	}
	
	public function save(){
		$tag=$_POST["tag"];
		$apply=$_POST["apply"];
		unset($_POST['submit'],$_POST['tag'],$_POST["apply"]);
		foreach($_POST as $k=>$v){
			if(is_array($v)){
				$info[$k]=$v[0];
			}else{
				$info[$k]=$v;
			}
		}
		
		$infonum=$this->mysql->db_num("config","`config_tag`='$tag'");
		if($infonum==0){
			$sql="insert into ".DB_PRE."config (config_array,config_tag) values ('".addslashes(var_export($info,true))."','".$tag."')";
		}else{
			$sql="update ".DB_PRE."config set `config_array`='".addslashes(var_export($info,true))."' where `config_tag`='".$tag."'";
		}
		$this->mysql->query($sql);
		if(!empty($info)){
			$s="<?php\n\$_{$tag}=".var_export($info,true).";\n?>";
		}
		$file=CACHE_SYS_PATH.'cache_set_'.$tag.'.php';
		creat_inc($file,$s);
		if($tag=='config'){
			//判断url是否以/结尾
			$urlnum=strlen($info['siteurl'])-1;
			if(substr($info['siteurl'],$urlnum,1)!="/"){
				showmsg(C("update_url_error"),"-1");
			}//end
			
			$cms=SYS_PATH.'91736.inc.php';   //生成91736配置文件
			$cmsurl="<?php\n define('CMS_URL','".$info['siteurl']."');\n define('TP_FOLDER','".$info['template']."');\n define('TP_CACHE',".$info['caching'].");\n?>";
			creat_inc($cms,$cmsurl);
			
			if($apply){    //更新所有栏目的html配置
				$category=base::load_cache("cache_category","_category");
				$updateurl=base::load_class("url");
				if($info['createhtml']==1){
					$ishtml=1;
				}else{
					$ishtml=0;
				}
				foreach($category as $value){
					if($value['is_link']==0){   //外部链接不更新
						$url=$updateurl->caturl($value['catid'],$value['catdir'],$ishtml,1);
						$this->mysql->db_update("category","`url`='{$url}',`is_html`={$ishtml}","`catid`={$value['catid']}");
					}
				}
				$rs=$this->mysql->fetch_asc("select * from ".DB_PRE."category order by sort asc,catid asc");  //更新栏目缓存
				$s="<?php\n\$_category=".var_export($rs,true).";\n?>";
				$file=CACHE_SYS_PATH.'cache_category.php';
				creat_inc($file,$s);
			}
		}
		if($apply){
			showmsg(C("config_success_url"),"index.php?m=91736&c=categorytree");
		}else{
			showmsg(C("config_success"),"-1");
		}
		unset($sql);
	}
	
	public function contact(){
		template("contact","admin");
	}
	
	public function email(){
		$email_arr=base::load_cache('cache_set_email','_email');
		assign("email",$email_arr);
		template("email","admin");
	}
	
	public function cache(){
		$this->cache->setting_cache();
		showmsg(C("update_cache_success"),"-1");
	}
}
?>