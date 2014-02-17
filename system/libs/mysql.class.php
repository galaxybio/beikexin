<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * mysql���ݿ�������
 * ��վ��ַ: http://www.91736.com
 * ����PHP�������¼��http://bbs.91736.com
 * ============================================================================
*/

//���ݿ�������
class mysql
{
	var $ConnStr;
	
	function __construct(){
		$this->connect();
		$this->selectdb();
	}
	
	//����
	function connect(){
		$this->ConnStr=(DB_PCONNECT)?@mysql_pconnect(DB_HOST,DB_USER,DB_PW):@mysql_connect(DB_HOST,DB_USER,DB_PW);
		if(!$this->ConnStr){
			echo '���ݿ����Ӵ���'.mysql_error();
		}
	}
	
	//�������ݿ�
	function selectdb(){
		if(!@mysql_select_db(DB_NAME,$this->ConnStr)){
			echo '���ݿ�'.DB_NAME.'������';
		}
		@mysql_unbuffered_query("set names ".DB_CHARSET);
	}
	
	//ִ�в�ѯ
	function query($sql){
		if(!$res=@mysql_query($sql,$this->ConnStr)){
			echo '�������ݿ�ʧ��'.mysql_error()."<br>sql:{$sql}";
		}
		return $res;
	}
	
	//sql������Ϣ
	function get_error(){
		$err=mysql_error($this->ConnStr);
		return $err;
	}
	
	//ȡ��������Ϊ�������������ݼ���
	function fetch_array($sql){
		$result=$this->query($sql);
		while($rows=mysql_fetch_array($result)){
			$array[]=$rows;
		}
		mysql_free_result($result);
		return $array;
	}
	
	function fetch_rows($query){
        return mysql_fetch_array($query);
    }
	
	function get_one($sql){
		$result=$this->query($sql);
		return mysql_fetch_assoc($result);
	}
	
	//ȡ���ֶ���Ϊ�������������ݼ���
	function fetch_asc($sql){
		$result=$this->query($sql);
		$arr=array();
		while($rows=mysql_fetch_assoc($result)){
			$arr[]=$rows;
		}
		mysql_free_result($result);
		return $arr;
	}
	
	//���һ�β����id
	function insert_id(){
		return mysql_insert_id($this->ConnStr);
	}
	
	//����������Ŀ
	function num_rows($sql){
		$result=$this->query($sql);
		$num=@mysql_num_rows($result);
		mysql_free_result($result);
		return $num;
	}
	
	//ȡ�ý�������ֶε���Ŀ
	function num_fields($query){
        return mysql_num_fields($query);
    }
	
	//�����ֶ�������
	function fetch_field($sql){
		$result=$this->query($sql);
		$num=$this->num_fields($result);
		for($i=0;$i<$num;$i++){
			$arr[]=mysql_field_name($result,$i);
		}
		return $arr;
	}
	
	//��ð汾��Ϣ
	function server_info(){
		return mysql_get_server_info($this->ConnStr);
	}
	
	//��ѯ��������
	function db_num($table,$where){
		$num=$this->num_rows("select * from ".DB_PRE.$table." where $where");
		return $num;
	}
	
	//�����Ϣ�����ݱ�
	function db_insert($table, $field) {
		$SQL = "INSERT INTO `".DB_PRE.$table."` SET $field";
		$this->query($SQL);
		return $this->insert_id();
	}
	
	//�������ݱ���Ϣ
	function db_update($table,$field,$where){
		$SQL = "UPDATE `".DB_PRE.$table."` SET $field WHERE $where";
		return $this->query($SQL);
	}
	
	//ɾ��������Ϣ
	function db_delete($table, $where) {
		$SQL = "DELETE FROM `".DB_PRE.$table."` WHERE $where";
		return $this->query($SQL);
	}
	
	
	/*
	*
	*���ݿ����
	*�������޸ġ�ɾ�����ݱ�
	*��ӡ��޸ġ�ɾ���ֶ�
	*
	*/
	
	//�������ݱ�
	function create_table($table,$field){
		$sql="create table ".DB_PRE.$table." (".$field.") ENGINE = MYISAM CHARACTER SET gbk COLLATE gbk_chinese_ci";
		return $this->query($sql);
	}
	
	//����ֶ�
	function add_field($table,$field){
		$sql="alter table ".DB_PRE.$table." add ".$field." CHARACTER SET gbk COLLATE gbk_chinese_ci NULL";
		return $this->query($sql);
	}
	
	//�޸��ֶ�
	function edit_field($table,$field){
		$sql="alter table ".DB_PRE.$table." CHANGE ".$field." CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL";
		return $this->query($sql);
	}
	
	//ɾ���ֶ�
	function del_field($table,$field){
		$sql="alter table ".DB_PRE.$table." drop column ".$field;
		return $this->query($sql);
	}
	
	//��ʾ���ݱ�
	function show_table(){
		$rel=$this->fetch_array('show tables');
		foreach($rel as $key=>$value){
			$arr[]=$value[0];
		}
		return $arr;
	}
	
	//�޸����ݱ���,$table-��ǰ����  $table_now-�ĺ����
	function rename_table($table,$table_now){
		$sql="RENAME TABLE ".$table." TO ".$table_now;
		return $this->query($sql);
	}
	
	//ɾ�����ݱ�
	function del_table($table){
		$sql="drop table ".DB_PRE.$table;
		return $this->query($sql);
	}
}
?>