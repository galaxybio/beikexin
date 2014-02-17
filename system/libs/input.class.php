<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * ���ֶ���
 * ��վ��ַ: http://www.91736.com
 * ����PHP�������¼��http://bbs.91736.com
 * ============================================================================
*/
class input{
	
	//�����ı�
	public function text($f_name,$f_value,$f_width){
		if($f_width==0) $f_width=25;
		$str="<input name=fields[{$f_name}] id=\"{$f_name}\" size=\"{$f_width}\" value=\"{$f_value}\" />";
		return $str;
	}
	
	//�����ı�	
	public function textarea($f_name,$f_value='',$f_width,$f_height,$f_option){
		if($f_width==0) $f_width=45;
		if($f_height==0) $f_height=4;
		$str="<textarea name=\"fields[{$f_name}]\" id=\"{$f_name}\" cols=\"{$f_width}\" rows=\"{$f_height}\">{$f_value}</textarea>";
		return $str;
	}
	
	//�༭��	
	public function editor($f_name,$f_value='',$f_width,$f_height,$f_option){
		$str="<textarea name=\"fields[{$f_name}]\" id=\"editor\" style=\"width:670px;height:300px;\">{$f_value}</textarea>";
		return $str;
	}
	
	//ͼƬ�ϴ�	
	public function image($f_name,$f_value,$f_width,$f_height,$f_option){
		$str="<input type=\"text\" name=\"fields[{$f_name}]\" id=\"fields[{$f_name}]\" class=\"txt\" size=\"25\" value=\"{$f_value}\"> <a href=\"#\" onclick=\"javascript:ShowIframe('�ϴ�ͼƬ','system/function/upload.inc.php?filename=fields[{$f_name}]','340','80')\">�� ��</a>";
		return $str;
	}
	
	//��ͼ�ϴ�
	public function moreimage($f_name,$f_value,$f_width,$f_height,$f_option){
		$str = "";
		$str .= "<script>
		var attachfiles=1;
		function delrows()
		{
			//ɾ�������е���
			if(attachfiles>1)
			{
				attachfiles--;
				attfile.deleteRow();
			}
		}
		  function addrows()
		{
			//�����������
			attachfiles++;
			var mynewrow=attfile.insertRow();
			col1=mynewrow.insertCell(0);
			col2=mynewrow.insertCell(1);
			col3=mynewrow.insertCell(2);
		
			if(attachfiles<=20){
				col1.innerHTML=\"<td></td>\";
				col2.innerHTML=\"<td colspan=3><input type=file name=morefile[] size=35></td>\";
			}
			if(attachfiles>20)
			{        alert(\"���ֻ���ϴ�20��ͼƬ��\"); }
		}";
		$str .= "</script>";
		$str .= "<table id=\"attfile\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
		if(!empty($f_value)){
			$value_arr=unserialize($f_value);
			if(is_array($value_arr)&&!empty($value_arr)){
				foreach($value_arr as $v){
					$str .= "<tr>
						<td colspan=4><input type=\"text\" name=\"fields[{$f_name}][]\" id=\"fields[{$f_name}][]\" size=\"45\" value=\"{$v}\"></td>
					  </tr>";
				}
			}
		}
		$str .= "<tr>
            <td><input type=\"hidden\" name=\"uploadtype\" id=\"uploadtype\" value=\"{$f_name}\" /></td>
            <td align=\"left\"><input type=\"file\" name=\"morefile[]\" size=\"35\"></td>
            <td align=\"left\">&nbsp;&nbsp;[<a href=\"javascript:delrows();\">ɾ��</a>] [<a href=\"javascript:addrows();\">��������</a>]</td>
          </tr>";
        $str .= "</table>";
		return $str;
	}
	
	//�����ϴ�	
	public function files($f_name,$f_value,$f_width,$f_height,$f_option){
		$str="<input type=\"text\" name=\"fields[{$f_name}]\" id=\"fields[{$f_name}]\" class=\"txt\" size=\"25\" value=\"{$f_value}\"> <a href=\"#\" onclick=\"javascript:ShowIframe('�ϴ��ļ�','system/function/upload.inc.php?type=1&filename=fields[{$f_name}]','340','80')\">�� ��</a>";
		return $str;
	}
	
	//�����б�	
	public function option($f_name,$f_value='',$f_width,$f_height,$f_option){
		if(!empty($f_option)){
			$value=preg_split('/,/',$f_option);
		
			$str="<select id=\"{$f_name}\" name=\"fields[{$f_name}]\">";
			foreach($value as $key=>$val){
				$ck='';
				if($f_value==$val){$ck="selected=\"selected\"";}
				$str.="<option value=\"{$val}\" {$ck}>{$val}</option>";
			}
			$str.="</select>";
		}
		return $str;
	}
	
	//��ѡ	
	public function radio($f_name,$f_value='',$f_width,$f_height,$f_option){
		$str='';
		if(!empty($f_option)){
			$value=preg_split('/,/',$f_option);
			foreach($value as $key=>$val){
				$ck="";
				if($key==0){$ck="checked=\"checked\"";}
				if($f_value==$val){$ck="checked=\"checked\"";}
				$str.="<input type=\"radio\" value=\"{$val}\" name=\"fields[{$f_name}]\" {$ck}/> {$val} ";
			}
		}
		return $str;
	}
	
	//��ѡ	
	public function checkbox($f_name,$f_value='',$f_width,$f_height,$f_option){
		if(!empty($f_option)){
			$value=preg_split('/,/',$f_option);
			$e=preg_split('/,/',$f_value);
			foreach($value as $key=>$val){
				$ck="";
				if(in_array($val,$e)){$ck="checked=\"checked\"";}
				$str.="<input type=\"checkbox\" value=\"{$val}\" name=\"fields[{$f_name}][]\" {$ck}/> {$val} ";
			}
		}
		return $str;
	}
}
?>