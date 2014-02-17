<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * ��̬ҳ������
 * ��վ��ַ: http://www.91736.com
 * ����PHP�������¼��http://bbs.91736.com
 * ============================================================================
*/ 
class cache extends db{
	
	//ϵͳ���û���
	public function setting_cache(){
		$sql="select * from ".DB_PRE."config";
		$rs=$this->mysql->fetch_asc($sql);
		for($i = 0; $i < count ( $rs ); $i ++){
			$s="<?php\n\$_{$rs[$i]['config_tag']}=".stripslashes($rs[$i]['config_array']).";\n?>";
			$file=CACHE_SYS_PATH.'cache_set_'.$rs[$i]['config_tag'].'.php';
			creat_inc($file,$s);
		}
		unset($rs);
	}
	
	//��Ŀ����
	public function category_cache(){
		$rs=$this->mysql->fetch_asc("select * from ".DB_PRE."category order by sort asc,catid asc");
		$s="<?php\n\$_category=".var_export($rs,true).";\n?>";
		$file=CACHE_SYS_PATH.'cache_category.php';
		creat_inc($file,$s);
	}
	
	//����ģ�ͻ���
	public function model_cache(){
		$rs=$this->mysql->fetch_asc("select * from ".DB_PRE."model");
		$s="<?php\n\$_model=".var_export($rs,true).";\n?>";
		$file=CACHE_SYS_PATH.'cache_model.php';
		creat_inc($file,$s);
	}
	
	//�ֶλ���
	public function field_cache($model){
		$array=$this->mysql->get_one("select id,model_table from ".DB_PRE."model where `model_table`='".$model."'");
		$rs=$this->mysql->fetch_asc("select * from ".DB_PRE."model_field where modelid='".$array['id']."' order by sort asc,fieldid asc");
		$s="<?php\n\$_field=".var_export($rs,true).";\n?>";
		$file=CACHE_SYS_PATH.'cache_field_'.$model.'.php';
		creat_inc($file,$s);
	}
	
	//����Ա����Ȩ�޻���
	public function admin_cache(){
		$query=$this->mysql->query("select * from ".DB_PRE."admin");
		while ($rs=$this->mysql->fetch_rows($query)){
			$file=CACHE_SYS_PATH."cache_purview_".$rs['id'].".php";
			if(!empty($rs['purview'])){
				$purview=explode(",",$rs['purview']);
				$s="<?php\n\$_purview=".var_export($purview,true).";\n?>";
				creat_inc($file,$s);
			}
		}
	}
	
	//�����ؼ��ʻ���
	public function keywords_cache(){
		$rs=$this->mysql->fetch_asc("select * from ".DB_PRE."keywords order by id asc");
		$s="<?php\n\$_keywords=".var_export($rs,true).";\n?>";
		$file=CACHE_SYS_PATH.'cache_keywords.php';
		creat_inc($file,$s);
	}
	
	//��̨�˵�����
	public function menu_cache(){
		$rs=$this->mysql->fetch_asc("select * from ".DB_PRE."menu order by sort asc,menuid asc");
		$s="<?php\n\$_menu=".var_export($rs,true).";\n?>";
		$file=CACHE_SYS_PATH.'cache_menu.php';
		creat_inc($file,$s);
	}
}
?>