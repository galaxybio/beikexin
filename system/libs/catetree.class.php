<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * 栏目生成树形类
 * 网站地址: http://www.91736.com
 * 更多PHP开发请登录：http://bbs.91736.com
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
				$categorylist.="<td><a href=\"index.php?m=91736&c=category&f=add&p=".$v['catid']."\">添加子栏目</a> | 		
				<a href=\"###\" onclick=\"ShowConfirm('确认清空','真的要清空此栏目内容吗?','index.php?m=91736&c=category&f=clear_data&id=".$v['catid']."')\">清空</a> | <a href=\"index.php?m=91736&c=category&f=edit&id=".$v['catid']."\">编辑</a> | <a href=\"###\" onclick=\"ShowConfirm('确认删除','真的要删除此栏目吗?','index.php?m=91736&c=category&f=delete&id=".$v['catid']."')\">删除</a></td>";
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

	//后台循环输出栏目列表	
	public function drawTree($arr,$tree,$level,$type){
		$level++;
		$ii=0;
		$prefix = str_pad("├",$level+2,'-',STR_PAD_RIGHT);
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
			$categorylist.="<td><a href=\"index.php?m=91736&c=category&f=add&p=".$v2['catid']."\">添加子栏目</a> | 			
			<a href=\"###\" onclick=\"ShowConfirm('确认清空','真的要清空此栏目内容吗?','index.php?m=91736&c=category&f=clear_data&id=".$v2['catid']."')\">清空</a> | <a href=\"index.php?m=91736&c=category&f=edit&id=".$v2['catid']."\">编辑</a> | <a href=\"###\" onclick=\"ShowConfirm('确认删除','真的要删除此栏目吗?','index.php?m=91736&c=category&f=delete&id=".$v2['catid']."')\">删除</a></td>";
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