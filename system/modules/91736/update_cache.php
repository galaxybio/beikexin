<?php
class update_cache extends Checklogin{
	
	function __construct(){
		parent::check_admin();
		$this->cache=base::load_class("cache");
		$this->mysql=$this->cache->mysql;
	} 
	
	public function init(){
		$this->cache->setting_cache();
		$this->cache->admin_cache();
		$this->cache->category_cache();
		$this->cache->model_cache();
		$this->cache->keywords_cache();
		$this->cache->menu_cache();
		
		$model=base::load_cache("cache_model","_model");   //����ģ�ͻ��棬����ģ�͵��ֶλ���
		foreach ($model as $value){
			$this->cache->field_cache($value['model_table']);
		}
		
		global $smarty;          //���ģ�建��
		$smarty->clearAllCache();
		
		//����������
		showmsg(C('update_cache_success'),'-1');
	}
}
?>