<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * ��Ŀ����������
 * ��վ��ַ: http://www.91736.com
 * ����PHP�������¼��http://bbs.91736.com
 * ============================================================================
*/  
class catetree extends db{
	public function tree($type){
		$array=base::load_cache('cache_category','_category');
		$tree = array();
		$categorylist="";
		if( $array ){
			foreach ( $array as $v ){
				$pt = $v['parentid'];
				$list = @$tree[$pt] ? $tree[$pt] : array();
				array_push( $list, $v );
				$tree[$pt] = $list;
			}
		}
		if(is_array($tree[0])){ 
			$i = 0;
			foreach($tree[0] as $k=>$v){
				$i++;
				if($type==0){
				$categorylist.="<tr align=\"center\">";
				$categorylist.="<td height=25>".$v['catid']."<input type=\"hidden\" name=\"catid[]\" id=\"catid[]\" value=\"".$v['catid']."\" /></td>";
				$categorylist.="<td><input type=\"text\" name=\"sort".$v['catid']."\" id=\"sort".$v['catid']."\" value=\"".$v['sort']."\" size=\"4\" /></td>";
				$categorylist.="<td align=\"left\">".$v["catname"]."</td>";
				$categorylist.="<td>".$v['model']."</td>";
				$num=$this->mysql->db_num("content","`catid`=".$v['catid']);
				$categorylist.="<td>".$num."</td>";
				$categorylist.="<td><a href=\"index.php?m=91736&c=category&f=add&p=".$v['catid']."\">�������Ŀ</a> | 		
				<a href=\"###\" onclick=\"ShowConfirm('ȷ�����','���Ҫ��մ���Ŀ������?','index.php?m=91736&c=category&f=clear_data&id=".$v['catid']."')\">���</a> | <a href=\"index.php?m=91736&c=category&f=edit&id=".$v['catid']."\">�༭</a> | <a href=\"###\" onclick=\"ShowConfirm('ȷ��ɾ��','���Ҫɾ������Ŀ��?','index.php?m=91736&c=category&f=delete&id=".$v['catid']."')\">ɾ��</a></td>";
				$categorylist.="</tr>";
				}else{
					$categorylist.="<option value=\"".$v['catid']."\">".$v["catname"]."</option>\n";
				}
				
				if($tree[$v["catid"]]){
					$categorylist.=$this->drawTree($tree[$v["catid"]],$tree,0,$type);
				}
			}
		}
		assign("categorylist",$categorylist);
	}

	//��̨ѭ�������Ŀ�б�	
	public function drawTree($arr,$tree,$level,$type){
		$level++;
		$ii=0;
		$prefix = str_pad("��",$level+2,'-',STR_PAD_RIGHT);
		foreach($arr as $k2=>$v2){
			$ii++;
			if($type==0){
			$categorylist.="<tr align=\"center\">";
			$categorylist.="<td height=25>".$v2['catid']."<input type=\"hidden\" name=\"catid[]\" id=\"catid[]\" value=\"".$v2['catid']."\" /></td>";
			$categorylist.="<td><input type=\"text\" name=\"sort".$v2['catid']."\" id=\"sort".$v2['catid']."\" value=\"".$v2['sort']."\" size=\"4\" /></td>";
			$categorylist.="<td align=\"left\">".$prefix.$v2["catname"]."</td>";
			$categorylist.="<td>".$v2['model']."</td>";
			$num=$this->mysql->db_num("content","`catid`=".$v2['catid']);
			$categorylist.="<td>".$num."</td>";
			$categorylist.="<td><a href=\"index.php?m=91736&c=category&f=add&p=".$v2['catid']."\">�������Ŀ</a> | 			
			<a href=\"###\" onclick=\"ShowConfirm('ȷ�����','���Ҫ��մ���Ŀ������?','index.php?m=91736&c=category&f=clear_data&id=".$v2['catid']."')\">���</a> | <a href=\"index.php?m=91736&c=category&f=edit&id=".$v2['catid']."\">�༭</a> | <a href=\"###\" onclick=\"ShowConfirm('ȷ��ɾ��','���Ҫɾ������Ŀ��?','index.php?m=91736&c=category&f=delete&id=".$v2['catid']."')\">ɾ��</a></td>";
			$categorylist.="</tr>";
			}else{
				$categorylist.="<option value=\"".$v2['catid']."\">".$prefix.$v2["catname"]."</option>\n";
			}
					
			if($tree[$v2["catid"]]){
				$categorylist.=$this->drawTree($tree[$v2["catid"]],$tree,$level,$type);
			}
		}
		return $categorylist;
	}
}
?>