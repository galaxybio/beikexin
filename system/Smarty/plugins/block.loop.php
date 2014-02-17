<?php
 /**
 * $Author: 91736 $
 * ============================================================================
 * 91736����loop��������
 * ��վ��ַ: http://www.91736.com
 * ����PHP�������¼��http://bbs.91736.com
 * ============================================================================
*/
function smarty_block_loop($params,$content,$template,&$repeat){
	global $smarty;
	$mysql=new mysql();
	extract( $params );
	if(!isset($return))
		$return = 'r'; //���صı���������
	if(!isset($sql)&&!isset($catid))
		return '';
	$rows=isset($rows)?(int)$rows:20;
	$limits=isset($limits)?(int)$limits:0;
	!isset($where)&&$where='';
	
	$more=isset($more)?(int)$more:0; //�Ƿ��ѯ����,Ĭ��Ϊ0����ѯ
	
	$commend=isset($commend)?(int)$commend:''; //�Ƿ��ѯ�Ƽ�����
	$iscommend =$commend==''?'':(empty($more)?"commend=".$commend:"c.commend=".$commend);
	
	$order=isset($order)?' order by '.$order:' order by c.contentid desc'; //����
	if (isset ( $sql )) //$order��$sql����ͬ��
		$order = '';
	$thumb=isset($thumb)?(int)$thumb:0;
	$hasThumb =$thumb==1?(empty($more)?"thumb!=''":"c.thumb!=''"):($thumb==2?(empty($more)? " thumb=='' " : " c.thumb==''"):'');
	$showchild=isset($showchild)?(bool)$showchild:true; //�Ƿ���������Ŀ,Ĭ������
	if(!isset($urlrule))
		$urlrule = ''; //url����

	if(isset($pages)){ //�Ƿ��ҳ
		$pagestr = $pages;
		global $$pages; //���ݷ�ҳ����,��:page=2�е�page
		$page=$$pages;
		$page=(int)$page==0?1:(int)$page;
		$page_num = ($page - 1) * $rows;
	}
	if(isset($catid)){
		$fields = $fields ? $fields : '*';
		$table = $table ? $table : DB_PRE . 'content'; //����
		$catid = $catid ? $catid : 0;
	}
	
	#�ڶ���$smarty��ע��һ�������Թ�blockʹ��  
	if (! isset ( $smarty->blocksdata ))
		$smarty->blocksdata = array ();
	
		#���һ���������ר�����ݴ洢�ռ�  
	$dataindex = md5 ( __FUNCTION__ . md5 ( serialize ( $params ) ) );
	$dataindex = substr ( $dataindex, 0, 16 );
	#��ʹ��$smarty->blocksdata[$dataindex]���洢  
	#�������
	if (! $smarty->blocksdata [$dataindex]) {
		#��Ҫ���������  
		if($catid>0){
			if($more==1){
				$cate=catname($catid);
				$channel=modelname($catid);
				$othertable=DB_PRE.$channel; //��ȡ����
				$sql = "select $fields from $table c left join $othertable  o on c.contentid=o.contentid where c.catid=$catid";
			}else{
				if($showchild){
					$childid=get_catids($catid);
					if(empty($childid))
						$sql="select $fields from $table c where c.catid = $catid";
					else
						$sql="select $fields from $table c where c.catid in ($childid)";
				}else
					$sql="select $fields from $table c where c.catid = $catid";
			}
		} elseif ($catid == 0 && empty ( $sql ))
			return;
		if (! empty ( $where ))
			$where = strpos ( $sql, ' where ' ) ? ' and ' . $where : ' where ' . $where;
		if (! empty ( $iscommend ))
			$where = strpos ( $sql, ' where ' ) ? $where . ' and ' . $iscommend : ' where ' . $iscommend;
		if (! empty ( $hasThumb ))
			//��whereͬ��
			$where = strpos ( $sql, ' where ' ) ? $where . ' and ' . $hasThumb : ' where ' . $hasThumb;
		$sql .= $where;
		//�Ƿ��ҳ
		if (isset ( $pages )) {
			include_once (LIB_PATH.'page.class.php');
			
			if(!empty($catid) && empty($urlrule)){           //����url����
				$cate=get_category($catid);
				$config=base::load_cache("cache_set_config","_config");
				if($config['createhtml']!=0){
					$urlrule=$cate['url']."0.html";
				}
			}
			
			$total_num = $mysql->num_rows ( $sql );
			$total_page = ceil ( $total_num / $rows );
			$total_page = (! $total_page) ? 1 : $total_page;
//			$page="3";
			$pagesset = new pages ( $total_num, $rows, $pagestr, $page, $urlrule );
			
			$pagesstr = $pagesset->show (2);
			$smarty->assign ( $pagestr . 's', $pagesstr );
			
			//ҳ��������ҳ���Զ���ת��βҳ
			if ($page > $total_page && $total_page > 0) {
				if(!empty($aqs))
					@header ( 'location:' . $url . '?' . preg_replace ( '/page=(\d+)/i', "page={$total_page}", $aqs ) );
			}
			$rs = $mysql->fetch_asc ( $sql . $order . ' limit ' . $page_num . ',' . $rows );
		} else
			$rs = $mysql->fetch_asc ( $sql . $order . ' limit '.$limits.',' . $rows );
		
		//�����������
		for($i = 0; $i < count ( $rs ); $i ++) {
			
			$rs [$i] ['_index'] = $i;
			$rs [$i] ['iteration'] = $i + 1;
			$rs [$i] ['first'] = $i === 0;
			$rs [$i] ['last'] = $i === count ( $rs ) - 1;
			
			if (isset ( $rs [$i] ['url'] )) {
				$rs [$i] ['url'] = strpos ( $rs [$i] ['url'], 'http://' )!==false ? $rs [$i] ['url'] : CMS_URL . $rs [$i] ['url'];
			}
		}
		
		$smarty->blocksdata [$dataindex] = $rs;
	
		#��������  
	#************************************************************************  
	}
	#���û�����ݣ�ֱ�ӷ���null,������ִ����  
	if (! $smarty->blocksdata [$dataindex]) {
		$repeat = false;
		return '';
	}
	#ȡһ�����ݳ�ջ��������ָ�ɸ�$return���ظ�ִ�п�����λ1     
	if (list ( $key, $item ) = each ( $smarty->blocksdata [$dataindex] )) {
		$smarty->assign ( $return, $item );
		$repeat = true;
	}
	#����Ѿ����������������ָ�룬�ظ�ִ�п�����λ0  
	if (! $item) {
		reset ( $smarty->blocksdata [$dataindex] );
		$repeat = false;
	}

	#��ӡ����  
	print $content;
}
?>