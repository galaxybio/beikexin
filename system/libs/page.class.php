<?php
/**
 * $Author: 91736 $
 * ============================================================================
 * page��ҳ��
 * ��վ��ַ: http://www.91736.com
 * ����PHP�������¼��http://bbs.91736.com
 * ============================================================================
*/
class pages {
	private $num; //������
	private $perpage = 20; //ÿҳ��ʾ����
	private $urlrule0; //url����,Ĭ�ϵĶ�̬���ʷ�ʽ
	private $urlrule; //url����
	private $page = 1; //��ǰҳ��
	private $pages; //��ҳ��
	private $anotherPage; //��Ĭ�Ϸ�ҳ�����������ʾ������ҳ������ʾ������ת��
	private $currentNum; //��ǰ��ʾ�ڼ������ڼ�����¼,��:1-20
	private $strcount; //��ҳǰͳ��,��: �ܼƣ�47�� ÿҳ��ʾ11��
	private $strbefore; //��ҳ���븸�ڵ���ʽ��ʼ
	private $strafter; //��ҳ���븸�ڵ���ʽ����
	private $isStatic; //�Ƿ�Ϊ��̬��ҳ
	private $indexname; //��̬��ҳ��һҳ�ļ���
	

	function __construct($num,$perpage,$pagevar,$page,$urlrule ='',$mkdir=''){
		$url = 'http://'.$_SERVER ["HTTP_HOST"].$_SERVER ["PHP_SELF"];
		$aqs = $_SERVER ["QUERY_STRING"]; //��ַ��ѯ����
		
		$this->num = $num;
		$this->perpage = $perpage;
		$this->page = $page;
		$this->pages = ceil ( $num / $perpage );
		$iCount = ($page * $perpage) > $num ? $num : $page * $perpage;
		$this->currentNum = ($page - 1) * $perpage + 1 . '-' . $iCount;
		$this->strcount = "<div class=\"pages\"><span class=\"pagecount\">�ܼ�:{$this->num}�� ÿҳ{$this->perpage}��</span> ��ǰ��:{$this->page}ҳ";
		$this->strbefore = ' ';
		$this->strafter = '</div>';
		$this->urlrule0 = !empty ( $aqs ) ? (preg_match ( '/' . $pagevar . '=/i', $aqs ) ? $url . '?' . preg_replace ( '/' . $pagevar . '=(\d+)/i', "$pagevar=", $aqs ) : $url . '?' . $aqs . '&' . $pagevar . '=') : $url . '?' . $pagevar . '=';
		
		if (! empty ( $urlrule ) && preg_match ( '/(\w+)\/(\d+)\.(\w*)/i', $urlrule )){//��̬��ҳ��ʽ
			
			$this->isStatic = true;
			$this->urlrule = preg_replace ( '/(\w+)\/(\d+)\.(\w*)/i', "\$1/%d.\$3", $urlrule );
			$this->indexname = preg_replace ( '/(\w+)\/(\d+)\.(\w*)/i', "\$1/index.\$3", $urlrule );
			
			global $isMakeHtml, $mkdir;
			if ($isMakeHtml){				
				$pageto = $page + 1;
				if ($pageto <= $this->pages){
					makelist ( $this->urlrule0 . $pageto, sprintf ( $this->urlrule, $pageto ), $mkdir );
				}			
			}
		}else{
			$this->urlrule = $this->urlrule0;
		}
	}
	
	//���ɷ�ҳ����URL
	private function setUrl($cur_page) {
		$cur_page = $cur_page == 0 ? 1 : ($cur_page >= $this->pages ? $this->pages : $cur_page);
		$pageHref = '';
		
		if ($this->isStatic) {
			if ($cur_page == 1)
				$pageHref = $this->indexname;
			else
				$pageHref = sprintf ( $this->urlrule, $cur_page );
		} else
			$pageHref = $this->urlrule . $cur_page;
		return $pageHref;
	}
	
	//���ɷ�ҳ��ʽ ��ʾģʽ
	public function show($mode = 1) {
		$showmode = 'show_mode' . $mode;
		
		if (method_exists ( $this, $showmode ))
			return $this->$showmode ();
		else
			return $this->show_mode1 ();
	}
	
	//����ҳ��һҳ��һҳβҳ����ʾģʽ
	private function show_mode1() {
		if ($this->num > $this->perpage) {
			switch ($this->page) {
				case 1 :
					$firstpage = '��ҳ';
					$prepage = '��һҳ';
					$nextpage = '<a href="' . $this->setUrl ( $this->page + 1 ) . '">��һҳ</a>';
					$lastpage = '<a href="' . $this->setUrl ( $this->pages ) . '">βҳ</a>';
					break;
				case $this->pages :
					$firstpage = '<a href="' . $this->setUrl ( 1 ) . '">��ҳ</a>';
					$prepage = '<a href="' . $this->setUrl ( $this->page - 1 ) . '">��һҳ</a>';
					$nextpage = '��һҳ';
					$lastpage = 'βҳ';
					break;
				default :
					$firstpage = '<a href="' . $this->setUrl ( 1 ) . '">��ҳ</a>';
					$prepage = '<a href="' . $this->setUrl ( $this->page - 1 ) . '">��һҳ</a>';
					$nextpage = '<a href="' . $this->setUrl ( $this->page + 1 ) . '">��һҳ</a>';
					$lastpage = '<a href="' . $this->setUrl ( $this->pages ) . '">βҳ</a>';
					break;
			}
			$content = $this->strcount . $this->strbefore . " $firstpage $prepage $nextpage $lastpage " . $this->anotherPage . " " . $this->strafter;
		} else {
			$content="{$this->strcount} {$this->strbefore} ��ҳ ��һҳ ��һҳ βҳ {$this->strafter}";
		}
		return $content;
	}
	
	//����ҳ��һҳ��һҳβҳ���ֵ���ʾģʽ
	private function show_mode2() {
		
		if ($this->num > $this->perpage) {
			
			switch ($this->page) {
				case 1 :
					$firstpage = '��ҳ';
					$prepage = '��һҳ';
					$nextpage = '<a href="' . $this->setUrl ( $this->page + 1 ) . '">��һҳ</a>';
					$lastpage = '<a href="' . $this->setUrl ( $this->pages ) . '">βҳ</a>';
					break;
				case $this->pages :
					$firstpage = '<a href="' . $this->setUrl ( 1 ) . '">��ҳ</a>';
					$prepage = '<a href="' . $this->setUrl ( $this->page - 1 ) . '">��һҳ</a>';
					$nextpage = '��һҳ';
					$lastpage = 'βҳ';
					break;
				
				default :
					$firstpage = '<a href="' . $this->setUrl ( 1 ) . '">��ҳ</a>';
					$prepage = '<a href="' . $this->setUrl ( $this->page - 1 ) . '">��һҳ</a>';
					$nextpage = '<a href="' . $this->setUrl ( $this->page + 1 ) . '">��һҳ</a>';
					$lastpage = '<a href="' . $this->setUrl ( $this->pages ) . '">βҳ</a>';
					break;
			}
			$pagebar = '';
			$init = 1;
			$page_len = 10; //������������ʾ���ٸ����ַ�ҳ������
			$max_p = $this->pages;
			$pages = $this->pages;
			
			$page_len = $page_len % 2 == 0 ? $page_len : $page_len + 1; //ҳ�����
			
			$pageoffset = $page_len % 2 == 0 ? $page_len / 2 : ($page_len - 1) / 2; //ҳ���������ƫ����
			$pageoffset_l = $page_len % 2 == 0 ? $pageoffset - 1 : $pageoffset;
			$pageoffset_r = $pageoffset;
			$page = $this->page;
			
			if ($pages > $page_len) {
				//�����ǰҳС�ڵ�����ƫ��
				if ($page <= $pageoffset) {
					$init = 1;
					$max_p = $page_len;
				} else { //�����ǰҳ������ƫ��
					//�����ǰҳ����ƫ�Ƴ�������ҳ��
					if ($page + $pageoffset_r >= $pages + 1) {
						$init = $pages + 1 - 10;
					} else {
						//����ƫ�ƶ�����ʱ�ļ���
						$init = $page - $pageoffset_l;
						$max_p = $page + $pageoffset_r;
					}
				}
			}
			for($i = $init; $i <= $max_p; $i ++) {
				$pageStyle = $i == $this->page ? "class=\"current\"" : '';
				if (empty ( $pageStyle ))
					$pagebar .= "<a href=\"" . $this->setUrl ( $i ) . "\" $pageStyle>$i</a>&nbsp;";
				else
					$pagebar .= "<span $pageStyle><u>$i</u></span> ";
			}
			
			$content = $this->strcount . $this->strbefore . " $firstpage $prepage $pagebar $nextpage $lastpage " . $this->anotherPage . " " . $this->strafter;
		} else {
			$content="{$this->strcount} {$this->strbefore} ��ҳ ��һҳ ��һҳ βҳ {$this->strafter}";
		}
		return $content;
	}
}
?>