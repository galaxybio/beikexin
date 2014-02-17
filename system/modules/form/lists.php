<?php
class lists extends db{

	public function init(){
		$input=base::load_class('input');
		$formid=isset($_GET['formid'])?intval($_GET['formid']):0;
		$form_arr=base::load_cache("cache_form","_form");
		$form=get_array($form_arr,'id',$formid,0);

		$field=base::load_cache("cache_form_".$form[0]['form_table'],"_field");
		$fields="";
		if(is_array($field)){
			foreach($field as $value){
				$fields.="<tr>\n";
				$fields.="<td align=\"right\">".$value['name']."：</td>\n";
				$fields.="<td>".$input->$value['formtype']($value['field'],'',$value['width'],$value['height'],$value['initial'])." ".$value['explain']."</td>\n";
				$fields.="</tr>\n";
			}
		}
		
		assign("form",$form[0]);
		assign("fields",$fields);
		assign('menu',get_menu(0,1));
		template("form_list");
	}
	
	public function add_save(){
		$formid=safe_html($_GET['formid']);
		$fields=$_POST['fields'];
		
		if(empty($fields['title'])||empty($formid)){
			showmsg(C('material_not_complete'),'-1');
		}

		$form=formtable($formid);
		if(empty($form)){
			showmsg(C('error'),'-1');
		}
		
		$table=$this->mysql->show_table();   //判断数据表是否存在
		if(!in_array(DB_PRE.$form,$table)){
			showmsg(C('table_not_exist'),'-1');
		}

		//添加附加表
		$sql_fields='`inputtime`';
		$sql_value=datetime();
		$send_text='留言内容：<br>';
		
		foreach($fields as $key=>$value){
			$sql_fields.=",`".$key."`";
			if(is_array($value)){
				$value_arr='';
				foreach($value as $k=>$v){
					$value_arr.=$v.',';
				}
				$value=$value_arr;
			}
			$sql_value.=",\"".safe_replace(safe_html($value))."\"";
			$send_text.=safe_replace(safe_html($value))."<br>";
		}
		
		$this->mysql->query("insert into ".DB_PRE.$form."({$sql_fields}) values ({$sql_value})");
		$rs=$this->mysql->get_one("select * from ".DB_PRE."form where id=".$formid);
		if($rs['is_email']==1){
			sendmail('有人给您留言了！',$send_text);
		}
		showmsg(C('add_success'),'-1');
	}
}
?>