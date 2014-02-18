-- phpMyAdmin SQL Dump
-- version 3.4.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 02 月 17 日 10:44
-- 服务器版本: 5.5.17
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `beikexin`
--

-- --------------------------------------------------------

--
-- 表的结构 `bk_admin`
--

CREATE TABLE IF NOT EXISTS `bk_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_time` int(10) NOT NULL DEFAULT '0',
  `creat_time` int(10) NOT NULL,
  `is_lock` smallint(2) NOT NULL DEFAULT '0',
  `last_ip` varchar(50) NOT NULL,
  `logins` int(10) NOT NULL DEFAULT '0',
  `purview` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `bk_admin`
--

INSERT INTO `bk_admin` (`id`, `username`, `password`, `last_time`, `creat_time`, `is_lock`, `last_ip`, `logins`, `purview`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 1344956591, 1342706125, 0, '114.255.122.15', 24, 'admin,data,template,setting,model,category,content');

-- --------------------------------------------------------

--
-- 表的结构 `bk_block`
--

CREATE TABLE IF NOT EXISTS `bk_block` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(40) NOT NULL,
  `tag` char(40) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `bk_block`
--

INSERT INTO `bk_block` (`id`, `title`, `tag`, `content`) VALUES
(1, 'asdfasdf', 'asdfasdfasd', 'asdf<br />');

-- --------------------------------------------------------

--
-- 表的结构 `bk_category`
--

CREATE TABLE IF NOT EXISTS `bk_category` (
  `catid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `model` char(15) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `modelid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `parentid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `catname` char(30) NOT NULL,
  `catdir` char(30) NOT NULL,
  `thumb` char(100) DEFAULT NULL,
  `url` char(100) NOT NULL,
  `sort` int(8) unsigned NOT NULL DEFAULT '0',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_target` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_html` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_link` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `template_cate` char(30) NOT NULL,
  `template_list` char(30) NOT NULL,
  `template_show` char(30) NOT NULL,
  `seo_title` char(80) NOT NULL,
  `seo_key` text NOT NULL,
  `seo_des` text NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=47 ;

--
-- 转存表中的数据 `bk_category`
--

INSERT INTO `bk_category` (`catid`, `model`, `type`, `modelid`, `parentid`, `catname`, `catdir`, `thumb`, `url`, `sort`, `is_show`, `is_target`, `is_html`, `is_link`, `template_cate`, `template_list`, `template_show`, `seo_title`, `seo_key`, `seo_des`) VALUES
(1, 'single', 0, 1, 0, '关于北信', 'abouts', '', 'index.php?m=content&c=index&f=lists&catid=1', 5, 1, 0, 0, 0, 'category_single.html', 'list_single.html', 'show_news.html', '', '', ''),
(2, 'news', 0, 2, 0, '新闻资讯', 'news', NULL, 'index.php?m=content&c=index&f=lists&catid=2', 1, 1, 0, 0, 0, 'category_news.html', 'list_news.html', 'show_news.html', '', '', ''),
(3, 'product', 0, 3, 0, '产品中心', 'products', '', 'index.php?m=content&c=index&f=lists&catid=3', 2, 1, 0, 0, 0, 'category_product.html', 'list_product.html', 'show_product.html', '', '', ''),
(40, 'single', 0, 1, 7, '合作伙伴', 'subpartners', '', 'index.php?m=content&c=index&f=lists&catid=40', 1, 1, 0, 0, 0, 'category_single_par.html', 'list_single_par.html', 'show_single_par.html', '', '', ''),
(37, 'product', 0, 3, 36, '成功案例', 'successcase', '', 'index.php?m=content&c=index&f=lists&catid=37', 1, 1, 0, 0, 0, 'category_case.html', 'list_case.html', 'show_case.html', '', '', ''),
(6, 'single', 0, 1, 0, '在线留言', 'message', '', 'index.php?m=form&c=lists&formid=7', 99, 0, 0, 0, 1, '', 'list_news.html', 'show_news.html', '', '', ''),
(7, 'single', 0, 1, 0, '合作伙伴', 'partners', '', 'index.php?m=content&c=index&f=lists&catid=7', 4, 1, 0, 0, 0, 'category_single_par.html', 'list_single_par.html', 'show_single_par.html', '', '', ''),
(8, 'single', 0, 1, 1, '北信简介', 'introduction', '', 'index.php?m=content&c=index&f=lists&catid=8', 0, 1, 0, 0, 0, 'category_single.html', 'list_single.html', 'show_news.html', '', '', ''),
(9, 'single', 0, 1, 1, '总经理致辞', 'managersay', '', 'index.php?m=content&c=index&f=lists&catid=9', 1, 1, 0, 0, 0, 'category_single.html', 'list_single.html', 'show_news.html', '', '', ''),
(10, 'news', 0, 2, 2, '公司新闻', 'company', NULL, 'index.php?m=content&c=index&f=lists&catid=10', 0, 1, 0, 0, 0, 'category_news.html', 'list_news.html', 'show_news.html', '', '', ''),
(11, 'news', 0, 2, 2, '行业新闻', 'industry', NULL, 'index.php?m=content&c=index&f=lists&catid=11', 1, 1, 0, 0, 0, 'category_news.html', 'list_news.html', 'show_news.html', '', '', ''),
(34, 'single', 0, 1, 1, '促销活动', 'salesactivities', '', 'index.php?m=content&c=index&f=lists&catid=34', 3, 1, 0, 0, 0, 'category_single.html', 'list_single.html', 'show_single.html', '', '', ''),
(38, 'product', 0, 3, 36, 'IT解决方案', 'solutions', '', 'index.php?m=content&c=index&f=lists&catid=38', 0, 1, 0, 0, 0, 'category_case.html', 'list_case.html', 'show_case.html', '', '', ''),
(44, 'single', 0, 1, 40, '大学', 'university', '', 'index.php?m=content&c=index&f=lists&catid=44', 2, 1, 0, 0, 0, 'category_single_par.html', 'list_single_par.html', 'show_single_par.html', '', '', ''),
(41, 'single', 0, 1, 40, '政府', 'government', '', 'index.php?m=content&c=index&f=lists&catid=41', 0, 1, 0, 0, 0, 'category_single_par.html', 'list_single_par.html', 'show_single_par.html', '', '', ''),
(32, 'single', 0, 1, 7, '软件合作伙伴计划', 'cooperativeplan', '', 'index.php?m=content&c=index&f=lists&catid=32', 0, 1, 0, 0, 0, 'category_single_par.html', 'list_single_par.html', 'show_single_par.html', '', '', ''),
(33, 'single', 0, 1, 1, '联系我们', 'contactus', '', 'index.php?m=content&c=index&f=lists&catid=33', 2, 1, 0, 0, 0, 'category_single.html', 'list_single.html', 'show_single.html', '', '', ''),
(28, 'download', 0, 5, 0, '资料下载', 'download', '', 'index.php?m=content&c=index&f=lists&catid=28', 99, 0, 0, 0, 0, 'category_news.html', 'list_news.html', 'show_down.html', '', '', ''),
(29, 'download', 0, 5, 28, '产品资料', 'productinfo', NULL, 'index.php?m=content&c=index&f=lists&catid=29', 99, 1, 0, 0, 0, 'category_news.html', 'list_news.html', 'show_down.html', '', '', ''),
(30, 'download', 0, 5, 28, '其它资料', 'otherinfo', NULL, 'index.php?m=content&c=index&f=lists&catid=30', 99, 1, 0, 0, 0, 'category_news.html', 'list_news.html', 'show_down.html', '', '', ''),
(36, 'product', 0, 3, 0, '解决方案', 'cases', '', 'index.php?m=content&c=index&f=lists&catid=36', 3, 1, 0, 0, 0, 'category_case.html', 'list_case.html', 'show_case.html', '', '', ''),
(42, 'single', 0, 1, 40, '企业', 'enterprise', '', 'index.php?m=content&c=index&f=lists&catid=42', 1, 1, 0, 0, 0, 'category_single_par.html', 'list_single_par.html', 'show_single_par.html', '', '', ''),
(35, 'job', 0, 4, 1, '招聘信息', 'jobinfos', '', 'index.php?m=content&c=index&f=lists&catid=35', 4, 1, 0, 0, 0, 'category_job.html', 'list_job.html', 'show_job.html', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `bk_config`
--

CREATE TABLE IF NOT EXISTS `bk_config` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `config_array` text NOT NULL,
  `config_tag` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `bk_config`
--

INSERT INTO `bk_config` (`id`, `config_array`, `config_tag`) VALUES
(1, 'array (\n  ''sitename'' => ''北京市北科信息处理公司'',\n  ''siteurl'' => ''http://115.28.108.177/'',\n  ''logourl'' => ''uploadfile/image/20120724/201207240239490.gif'',\n  ''template'' => ''default'',\n  ''caching'' => ''false'',\n  ''webstate1'' => ''网站维护中...'',\n  ''copyright'' => ''北京市北科信息处理公司 2012 版权所有 京ICP备03023960号 '',\n  ''createhtml'' => ''1'',\n  ''title'' => ''北京市北科信息处理公司'',\n  ''keywords'' => ''北京市北科信息处理公司'',\n  ''description'' => ''北京市北科信息处理公司'',\n)', 'config'),
(2, 'array (\n  ''master'' => ''管理员'',\n  ''email'' => ''service@91736.com'',\n  ''contact'' => ''管理员'',\n  ''telephone'' => ''0771-1234567'',\n  ''fax'' => ''0771-1234567'',\n  ''mobilephone'' => ''13333333333'',\n  ''address'' => ''广西南宁市东葛路'',\n)', 'contact'),
(3, 'array (\n  ''mailobject'' => ''1'',\n  ''mailserver'' => ''smtp.163.com'',\n  ''mailport'' => ''25'',\n  ''password'' => ''123456'',\n  ''mailadd'' => ''admin@163.com'',\n  ''username'' => ''admin@163.com'',\n)', 'email');

-- --------------------------------------------------------

--
-- 表的结构 `bk_content`
--

CREATE TABLE IF NOT EXISTS `bk_content` (
  `contentid` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `catid` tinyint(5) unsigned NOT NULL DEFAULT '0',
  `title` char(80) NOT NULL,
  `thumb` char(100) NOT NULL,
  `keywords` char(40) NOT NULL,
  `description` char(255) NOT NULL,
  `commend` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `url` char(100) NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL,
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(8) unsigned NOT NULL DEFAULT '0',
  `sort` int(8) unsigned NOT NULL DEFAULT '0',
  `style` char(20) DEFAULT NULL,
  PRIMARY KEY (`contentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=57 ;

--
-- 转存表中的数据 `bk_content`
--

INSERT INTO `bk_content` (`contentid`, `catid`, `title`, `thumb`, `keywords`, `description`, `commend`, `url`, `userid`, `username`, `inputtime`, `updatetime`, `hits`, `sort`, `style`) VALUES
(19, 8, '公司简介', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=8&contentid=19', 1, '', 1322223465, 1343048768, 0, 0, ''),
(2, 10, '热烈祝贺91736cms开发完成并上线', 'uploadfile/image/20120407/20120407013811.jpg', '', '', 1, 'index.php?m=content&c=index&f=show&catid=10&contentid=2', 1, 'admin', 1321862027, 0, 0, 0, NULL),
(3, 10, '修复smarty字符串截取功能', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=10&contentid=3', 1, 'admin', 1321863102, 0, 0, 0, NULL),
(4, 10, '优化调用缓存函数', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=10&contentid=4', 1, 'admin', 1321863748, 1322461839, 0, 0, NULL),
(5, 10, '优化分页函数', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=10&contentid=5', 1, 'admin', 1321863770, 0, 0, 0, NULL),
(6, 10, 'loop循环使用方法详细介绍', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=10&contentid=6', 1, 'admin', 1321863812, 0, 8, 0, NULL),
(54, 38, '虚拟化', '', '', '提供基于弹性资源管理的解决方案，秉承了“海纳百川，融会贯通”的理念，旨在面向企业的个性化需求，量身定制低成本、高性能的虚拟化和云安全解决方案', 0, 'index.php?m=content&c=index&f=show&catid=38&contentid=54', 1, 'admin', 1343049542, 1343049520, 0, 2, ''),
(50, 33, '联系我们', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=33&contentid=50', 1, '', 1342881802, 1343103488, 0, 0, ''),
(48, 42, '企业合作伙伴', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=42&contentid=48', 1, '', 1342881113, 1343093277, 0, 0, ''),
(47, 41, '政府', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=41&contentid=47', 1, '', 1342880793, 1343093242, 0, 0, ''),
(51, 3, '云存储系统AllWeb', 'uploadfile/image/20120723/201207230828190.png', '', 'AllWeb是一款基于浏览器使用的以网络存储为核心的云操作系统，系统基于分布式环境设计，可应用于跨物理区域的基础设施，保证在不同集群之间的数据一致性。用户无需关心底层基础设施的运营和管理，只要根据自己的业务需求，在核心数据的基础上，选择或者定制应用即可轻松拓展业务。', 0, 'index.php?m=content&c=index&f=show&catid=3&contentid=51', 1, 'admin', 1343046505, 1343046410, 0, 1, ''),
(39, 38, '数据恢复', '', '数据恢复', '北信数据恢复中心以标准化的数据恢复流程及配套设施为基础，以基础技术人员为主体，便携性好、支持范围广，可以及时、全方位、全天候地对用户硬盘及其他存储设备的数据进行恢复处理', 0, 'index.php?m=content&c=index&f=show&catid=38&contentid=39', 1, 'admin', 1342854287, 1342854226, 0, 4, ''),
(40, 37, '北京市科学技术研究院云存储平台', '', '北京市科学技术研究院云存储平台', '北科院云存储平台是在大规模数据存储及处理等云计算技术基础上，建立一个开放的科研知识共享与管理平台，以便更好的组织、传播市科研院内部研究人员的研究成果（例如论文、专利等）。同时，该平台提供综合性的科研、办公服务，例如邮件系统、数据搜索、应用软件、消息发布等功能，能够进一步降低市科研院内部信息传递成本，促进内部的信息共享，从而提升市科研院的科研能力。统一的数据、信息共享及管理平台能够体现一个现代企业品牌和形象，促进北科院与外部的业务联系，全面提升院信息化的综合管理水平', 0, 'index.php?m=content&c=index&f=show&catid=37&contentid=40', 1, 'admin', 1342854804, 1342854793, 0, 5, ''),
(15, 35, '项目经理', '', '', '岗位要求：\r\n\r\n1) 本科以上学历，计算机或相关专业毕业，28周岁以上\r\n\r\n2) 五年以上J2EE应用开发经验，精通Java语言，Oracle10及以上、B/S结构开发，精通J2EE架构\r\n\r\n3) 熟悉SSH等框架工具和实际应用，熟悉多种设计模式；熟悉UML、XML、JSP、JavaScript、Servlet、Ajax、jqurey等技术\r\n\r\n4) 具有团队开发经验，具有独立完成中、大型web项目设计开发工作的能力，至少担任过一个大型J2EE应用项目(半年以上)的系统分析任务\r\n\r\n5) 有较强', 0, 'index.php?m=content&c=index&f=show&catid=35&contentid=15', 1, 'admin', 1321949198, 1343141216, 0, 0, ''),
(16, 35, '软件开发工程师', '', '', '岗位要求：\r\n\r\n1) 三年以上软件开发经验\r\n\r\n2) 熟练使用java等编程语言，熟悉struts2框架编程技术\r\n\r\n3) 熟练掌握面向对象设计\r\n\r\n4) 熟练掌握MVC开发模式设计\r\n\r\n5) 熟悉分布式系统开发\r\n\r\n6) 熟悉SqlServer、Oracle等数据库编程技术\r\n\r\n7) 计算机或相关专业本科及以上学历\r\n\r\n8) 富有团队精神,较强的责任感和沟通能力\r\n\r\n9) 具备较强的逻辑分析和独立解决问题的能力', 0, 'index.php?m=content&c=index&f=show&catid=35&contentid=16', 1, 'admin', 1321950421, 1343141194, 0, 0, ''),
(37, 38, '私有云', '', '北京云设计了非常简洁的用户UI，用户通过简单的鼠标操作就可以完成复杂的计算任务。', '围绕用户的核心数据，搭建面向企业内部的应用软件私有云服务平台，集数据安全、备份容灾、软件开发部署、基础设施运维于一体的综合解决方案服务。', 0, 'index.php?m=content&c=index&f=show&catid=38&contentid=37', 1, 'admin', 1342854201, 1342854088, 0, 1, ''),
(38, 38, '数据备份', '', '面对急剧膨胀的数据量，越来越复杂的数据类型、二十四小时不停运转的关键任务数据库，', '面对急剧膨胀的数据量，越来越复杂的数据类型、二十四小时不停运转的关键任务数据库，对企事业单位而言，不论是天灾或是人为疏忽所造成数据损失，对企事业单位造成的冲击及财务损失就是一场可怕的灾难。防止这些灾难，最佳的解决之道便是事先做好数据备份，并做好灾难恢复计划。', 0, 'index.php?m=content&c=index&f=show&catid=38&contentid=38', 1, 'admin', 1342854223, 1342854204, 0, 3, ''),
(24, 35, '软件开发工程师（UI）', '', '', '岗位要求：\r\n\r\n1) 计算机相关专业，本科及以上学历\r\n\r\n2) 精通Javascript/JQuery皮肤开发，从事UI开发三年以上\r\n\r\n3) 熟悉Java语言，熟悉MVC模式设计、SSH框架者优先\r\n\r\n4) 了解面向对象设计，掌握常用设计模式\r\n\r\n5) 掌握较全面的系统架构、服务器、网络架构、运维等知识\r\n\r\n6) 思路清晰，良好的沟通能力和理解能力，抗压力强\r\n\r\n7) 较强的学习能力，较强的问题分析、解决能力', 0, 'index.php?m=content&c=index&f=show&catid=35&contentid=24', 9, 'admin', 1322296402, 1343141109, 0, 0, ''),
(25, 10, '配置了前台模板缓存', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=10&contentid=25', 1, 'admin', 1322361818, 1322460365, 0, 0, NULL),
(32, 10, '完善页面静态生成,减轻系统负担', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=10&contentid=32', 1, 'admin', 1322448435, 0, 0, 0, NULL),
(33, 10, '优化静态保存目录 更好结合seo', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=10&contentid=33', 1, 'admin', 1322449544, 0, 0, 0, NULL),
(34, 10, '优化文章静态生成路径', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=10&contentid=34', 1, 'admin', 1322449571, 1322460078, 0, 0, NULL),
(35, 10, '完善列表页生成静态 操作更便捷', '', '', '', 1, 'index.php?m=content&c=index&f=show&catid=10&contentid=35', 1, 'admin', 1322452266, 1343047857, 3, 0, ''),
(36, 9, '企业文化', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=9&contentid=36', 1, '', 1322455404, 0, 0, 0, NULL),
(41, 37, '北京市计算中心生物信息云平台', '', '北京市计算中心生物信息云平台', '生物计算平台（BioCloud.org.cn）是由北京市计算中心、北京市科学技术研究院资助开发的面向生命科学及相关应用领域的云计算平台，生物计算平台采用网格计算（Grid Computing）、分布式计算（Distributed Computing）、并行计算（Parallel Computing）、效用计算（Utility Computing）、网络存储（Network Storage Technologies）、虚拟化（Virtualization）、负载均衡（Load Balance）、远程访问（R', 0, 'index.php?m=content&c=index&f=show&catid=37&contentid=41', 1, 'admin', 1342854821, 1342854807, 0, 6, ''),
(42, 37, '传染病预防控制国家重点实验室软件分析服务平台', '', '传染病预防控制国家重点实验室软件分析服务平台', '“微生物生物信息软件分析服务平台”1.0版旨在现有统计分析工具和数据库的基础上，进行集成开发，以便为用户提供界面简洁、使用方便的软件工具平台，该平台能够为用户提供最常用的分析服务，能够切实帮助用户解决在实际工作所遇到的问题，提高工作效率。平台功能主要分为在线软件服务、文件管理系统、Blast比对功能、数据库下载等4个部分内容。', 0, 'index.php?m=content&c=index&f=show&catid=37&contentid=42', 1, 'admin', 1342854836, 1342854824, 0, 7, ''),
(49, 32, '合作伙伴计划', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=32&contentid=49', 1, '', 1342881755, 1342882344, 0, 0, ''),
(52, 3, '数据挖掘云平台PDMiner', 'uploadfile/image/20120723/201207230842470.jpg', '', 'PDMiner是一个基于分布式系统的高可靠、高容错大规模数据分析云平台，其核心包括三大类数据挖掘工具，包括关联规则分析、分类分析、聚类分析，其中每一类都集成了各种丰富算法。通过PDMiner，用户能够方便的使用由北信提供的集软件、硬件、网络、算法等资源于一体的互联网服务，来完成对海量数据的存储、分析等各种操作，从而进一步实现自己的商业应用。', 0, 'index.php?m=content&c=index&f=show&catid=3&contentid=52', 1, 'admin', 1343046578, 1343046508, 0, 2, ''),
(55, 34, '促销活动', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=34&contentid=55', 1, '', 1343103968, 1343103958, 0, 0, ''),
(56, 44, '大学合作伙伴', '', '', '', 0, 'index.php?m=content&c=index&f=show&catid=44&contentid=56', 1, '', 1343104526, 1343104513, 0, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `bk_download`
--

CREATE TABLE IF NOT EXISTS `bk_download` (
  `contentid` int(8) NOT NULL,
  `files` char(80) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- --------------------------------------------------------

--
-- 表的结构 `bk_flash`
--

CREATE TABLE IF NOT EXISTS `bk_flash` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` char(80) NOT NULL,
  `url` char(100) NOT NULL,
  `thumb` char(100) NOT NULL,
  `is_lock` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `inputtime` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `bk_flash`
--

INSERT INTO `bk_flash` (`id`, `title`, `url`, `thumb`, `is_lock`, `inputtime`) VALUES
(1, '首页幻灯图片', 'http://www.bcc.ac.cn', 'uploadfile/image/20120724/201207240147310.png', 0, 1322017704),
(2, '首页幻灯图片', 'http://www.bcc.ac.cn', 'uploadfile/image/20120724/201207240148180.jpg', 0, 1322017941),
(3, '首页幻灯图片', 'http://www.bcc.ac.cn', 'uploadfile/image/20120724/201207240148510.jpg', 0, 1322017956);

-- --------------------------------------------------------

--
-- 表的结构 `bk_form`
--

CREATE TABLE IF NOT EXISTS `bk_form` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `form_name` char(20) NOT NULL,
  `form_table` char(20) NOT NULL,
  `is_lock` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_fixed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_email` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `bk_form`
--

INSERT INTO `bk_form` (`id`, `form_name`, `form_table`, `is_lock`, `is_fixed`, `is_email`) VALUES
(7, '在线留言', 'message', 1, 0, 0),
(8, '投递简历', 'resume', 1, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `bk_form_field`
--

CREATE TABLE IF NOT EXISTS `bk_form_field` (
  `fieldid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `formid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `field` char(20) NOT NULL,
  `name` char(20) NOT NULL,
  `formtype` char(20) NOT NULL,
  `width` tinyint(4) NOT NULL DEFAULT '0',
  `height` tinyint(4) NOT NULL DEFAULT '0',
  `initial` text,
  `explain` char(20) DEFAULT NULL,
  `sort` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_fixed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fieldid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `bk_form_field`
--

INSERT INTO `bk_form_field` (`fieldid`, `formid`, `field`, `name`, `formtype`, `width`, `height`, `initial`, `explain`, `sort`, `is_fixed`) VALUES
(18, 7, 'address', '地址', 'text', 35, 0, '', '', 0, 0),
(16, 7, 'truename', '姓名', 'text', 15, 0, '', '', 0, 0),
(17, 7, 'telephone', '电话', 'text', 20, 0, '', '', 0, 0),
(19, 7, 'content', '详细内容', 'textarea', 45, 6, '', '', 0, 0),
(20, 8, 'truename', '姓名', 'text', 10, 0, '', '', 0, 0),
(21, 8, 'age', '年龄', 'text', 8, 0, '', '岁', 0, 0),
(22, 8, 'telephone', '联系电话', 'text', 15, 0, '', '', 0, 0),
(23, 8, 'degree', '学历', 'option', 0, 0, '小学,初中,高中,中专,大专,本科及以上', '', 0, 0),
(24, 8, 'address', '目前所在地', 'text', 8, 0, '', '', 0, 0),
(25, 8, 'school', '学习经历', 'textarea', 60, 6, '', '', 0, 0),
(26, 8, 'work', '工作经历', 'textarea', 60, 8, '', '', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `bk_job`
--

CREATE TABLE IF NOT EXISTS `bk_job` (
  `contentid` int(8) NOT NULL,
  `type` char(80) NOT NULL,
  `experience` char(80) NOT NULL,
  `degree` char(80) NOT NULL,
  `sex` char(80) NOT NULL,
  `numbers` char(80) NOT NULL,
  `wage` char(80) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `bk_job`
--

INSERT INTO `bk_job` (`contentid`, `type`, `experience`, `degree`, `sex`, `numbers`, `wage`, `content`) VALUES
(15, '全职', '2年', '本科', '男性', '1', '面议', '<p style="margin-left:18.0pt;text-align:left;text-indent:-18.0pt;" align="left">\r\n	<span style="font-family:宋体;"><span>1)<span> </span></span></span><span style="font-family:宋体;">负责业务需求分析，软件系统各重要模块的设计和分析，核心模块的开发</span><span style="font-family:宋体;"></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-align:left;text-indent:-18.0pt;" align="left">\r\n	<span style="font-family:宋体;"><span>2)<span> </span></span></span><span style="font-family:宋体;">负责带领团队完成系统开发、实施、技术支持任务</span><span style="font-family:宋体;"></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-align:left;text-indent:-18.0pt;" align="left">\r\n	<span style="font-family:宋体;"><span>3)<span> </span></span></span><span style="font-family:宋体;">参与软件开发技术和规范及标准流程的改进</span><span style="font-family:宋体;"></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-align:left;text-indent:-18.0pt;" align="left">\r\n	<span style="font-family:宋体;"><span>4)<span> </span></span></span><span style="font-family:宋体;">负责团队建设、项目组工作协调及项目日常管理工作</span> \r\n</p>\r\n<span style="font-size:14px;font-family:宋体;">有意者请将简历投至</span><span style="font-size:14px;font-family:宋体;">bkxx.contact@gmail.com</span><br />'),
(16, '全职', '2年', '本科', '不限', '2', '面议', '<p style="margin-left:18.0pt;text-indent:-18.0pt;">\r\n	<span style="font-family:宋体;"><span>1)<span> </span></span></span><span style="font-family:宋体;">从事面向工业行业的基于<span>SaaS</span>、<span>PaaS</span>的云平台开发</span><span style="font-family:宋体;"></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-indent:-18.0pt;">\r\n	<span style="font-family:宋体;"><span>2)<span> </span></span></span><span style="font-family:宋体;">与业务部门配合，协助进行产品的需求分析、平台逻辑功能、平台业务功能设计等</span><span style="font-family:宋体;"></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-indent:-18.0pt;">\r\n	<span style="font-family:宋体;"><span>3)<span> </span></span></span><span style="font-family:宋体;">负责数据结构设计和<span>MySQL</span>数据库开发</span><span style="font-family:宋体;"></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-indent:-18.0pt;">\r\n	<span style="font-family:宋体;"><span>4)<span> </span></span></span><span style="font-family:宋体;">基于<span>J2EE+STRUTS2</span>，负责后台<span>web service</span>开发</span><span style="font-family:宋体;"></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-indent:-18.0pt;">\r\n	<span style="font-family:宋体;"><span>5)<span> </span></span></span><span style="font-family:宋体;">撰写云平台相关文档，包括专利、论文</span><span style="font-family:宋体;"></span> \r\n</p>\r\n<p style="margin-left:18pt;text-indent:-18pt;">\r\n	<span style="font-family:宋体;"><span>6)<span> </span></span></span><span style="font-family:宋体;">在<span>SaaS</span>云平台基础上，设计开发基于<span>PaaS</span>的<span>APP ENGINE</span></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-indent:-18.0pt;">\r\n	<span style="font-family:宋体;"><span><span style="font-size:10.5pt;font-family:宋体;">有意者请将简历投至</span><span style="font-size:10.5pt;font-family:宋体;">bkxx.contact@gmail.com</span><br />\r\n</span></span> \r\n</p>\r\n<span style="font-family:宋体;"></span><span style="font-family:宋体;"></span> <br />'),
(24, '全职', '不限', '本科', '不限', '2', '面议', '<p style="margin-left:18.0pt;text-indent:-18.0pt;">\r\n	<span style="font-family:宋体;"><span>1)<span> </span></span></span><span style="font-family:宋体;">从功能架构、前端界面、后台开发等方面参与云平台设计<span></span></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-indent:-18.0pt;">\r\n	<span style="font-family:宋体;"><span>2)<span> </span></span></span><span style="font-family:宋体;">与业务部门配合，协助进行产品的需求分析、平台逻辑功能、平台业务功能设计<span></span></span> \r\n</p>\r\n<p style="margin-left:18pt;text-indent:-18pt;">\r\n	<span style="font-family:宋体;"><span>3)<span> </span></span></span><span style="font-family:宋体;">与美工设计配合，完成产品的界面、客户端设计与开发工作</span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-indent:-18.0pt;">\r\n	<span style="font-family:宋体;"><span style="font-size:14px;font-family:宋体;">有意者请将简历投至</span><span style="font-size:14px;font-family:宋体;">bkxx.contact@gmail.com</span><br />\r\n</span> \r\n</p>\r\n<br />');

-- --------------------------------------------------------

--
-- 表的结构 `bk_keywords`
--

CREATE TABLE IF NOT EXISTS `bk_keywords` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(20) NOT NULL,
  `url` char(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bk_link`
--

CREATE TABLE IF NOT EXISTS `bk_link` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(20) NOT NULL,
  `url` char(80) NOT NULL,
  `is_lock` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `bk_link`
--

INSERT INTO `bk_link` (`id`, `title`, `url`, `is_lock`, `inputtime`) VALUES
(1, '91736', 'http://www.91736.com', 0, 1322016402),
(2, '南宁时空网', 'http://bbs.gxdgw.com', 0, 1322017014),
(3, '91736cms', 'http://www.91736.cn', 0, 1322017014),
(4, 'php论坛', 'http://bbs.91736.com', 0, 1322017029),
(5, 'php视频教程', 'http://www.91736.com', 0, 1322017029),
(6, '南宁商铺转让', 'http://nn.pupuyi.com', 0, 1322017029),
(7, '南宁网站建设', 'http://www.nnxd.net', 0, 1322017029),
(8, '南宁商铺网', 'http://www.nnspw.com', 0, 1322017029);

-- --------------------------------------------------------

--
-- 表的结构 `bk_member`
--

CREATE TABLE IF NOT EXISTS `bk_member` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `groupid` tinyint(4) unsigned NOT NULL DEFAULT '1',
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_time` int(10) NOT NULL DEFAULT '0',
  `creat_time` int(10) NOT NULL,
  `is_lock` smallint(2) NOT NULL DEFAULT '0',
  `last_ip` varchar(50) NOT NULL,
  `logins` int(10) NOT NULL DEFAULT '0',
  `sex` char(80) DEFAULT NULL,
  `truename` char(80) DEFAULT NULL,
  `phone` char(80) DEFAULT NULL,
  `address` char(80) DEFAULT NULL,
  `email` char(80) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bk_member_field`
--

CREATE TABLE IF NOT EXISTS `bk_member_field` (
  `fieldid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `field` char(20) NOT NULL,
  `name` char(20) NOT NULL,
  `formtype` char(20) NOT NULL,
  `width` tinyint(4) NOT NULL DEFAULT '0',
  `height` tinyint(4) NOT NULL DEFAULT '0',
  `initial` text,
  `explain` char(20) DEFAULT NULL,
  `sort` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_fixed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_register` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fieldid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `bk_member_field`
--

INSERT INTO `bk_member_field` (`fieldid`, `field`, `name`, `formtype`, `width`, `height`, `initial`, `explain`, `sort`, `is_fixed`, `is_register`) VALUES
(3, 'truename', '姓名', 'text', 12, 0, '', '', 1, 0, 1),
(2, 'sex', '性别', 'radio', 0, 0, '男,女,保密', '', 2, 0, 0),
(4, 'phone', '联系电话', 'text', 15, 0, '', '', 3, 0, 0),
(5, 'address', '联系地址', 'text', 40, 0, '', '', 5, 0, 0),
(6, 'email', '安全邮箱', 'text', 30, 0, '', '', 4, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `bk_member_group`
--

CREATE TABLE IF NOT EXISTS `bk_member_group` (
  `groupid` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`groupid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `bk_member_group`
--

INSERT INTO `bk_member_group` (`groupid`, `name`) VALUES
(1, '普通会员');

-- --------------------------------------------------------

--
-- 表的结构 `bk_menu`
--

CREATE TABLE IF NOT EXISTS `bk_menu` (
  `menuid` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` int(8) unsigned NOT NULL,
  `title` char(20) NOT NULL,
  `url` text NOT NULL,
  `sort` int(8) DEFAULT '0',
  PRIMARY KEY (`menuid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=66 ;

--
-- 转存表中的数据 `bk_menu`
--

INSERT INTO `bk_menu` (`menuid`, `parentid`, `title`, `url`, `sort`) VALUES
(1, 0, '后台首页', 'index.php?m=91736&c=index&f=left&id=1', 0),
(2, 0, '系统设置', 'index.php?m=91736&c=index&f=left&id=2', 0),
(3, 0, '内容管理', 'index.php?m=91736&c=index&f=left&id=3', 0),
(4, 0, '模块管理', 'index.php?m=91736&c=index&f=left&id=4', 0),
(5, 0, '模板管理', 'index.php?m=91736&c=index&f=left&id=5', 0),
(6, 0, '文件管理', 'index.php?m=91736&c=index&f=left&id=6', 0),
(7, 1, '常用操作', '###', 0),
(8, 7, '后台首页', 'index.php?m=91736&c=index&f=main', 0),
(9, 7, '更新首页', 'index.php?m=91736&c=creathtml&f=update_index', 0),
(10, 7, '添加栏目', 'index.php?m=91736&c=category&f=add', 0),
(11, 7, '管理栏目', 'index.php?m=91736&c=category', 0),
(12, 7, '内容模型管理', 'index.php?m=91736&c=model', 0),
(13, 7, '更新全站缓存', 'index.php?m=91736&c=update_cache', 0),
(14, 1, '个人信息', '###', 0),
(15, 14, '修改密码', 'index.php?m=91736&c=index&f=edit', 0),
(16, 2, '栏目管理', '###', 0),
(17, 2, '模型管理', '###', 0),
(18, 2, '管理员设置', '###', 0),
(19, 2, '数据库管理', '###', 0),
(20, 2, '关键词链接', '###', 0),
(21, 2, '网站配置', '###', 0),
(22, 2, '后台菜单管理', '###', 0),
(23, 16, '添加栏目', 'index.php?m=91736&c=category&f=add', 0),
(24, 16, '管理栏目', 'index.php?m=91736&c=category', 0),
(25, 17, '添加模型', 'index.php?m=91736&c=model&f=model_add', 0),
(26, 17, '管理模型', 'index.php?m=91736&c=model', 0),
(27, 18, '添加管理员', 'index.php?m=91736&c=admin&f=add', 0),
(28, 18, '管理员列表', 'index.php?m=91736&c=admin', 0),
(29, 19, '数据库备份', 'index.php?m=91736&c=data', 0),
(30, 19, '数据库恢复', 'index.php?m=91736&c=data&f=data_file', 0),
(31, 20, '添加关键词', 'index.php?m=91736&c=keywords&f=add', 0),
(32, 20, '管理关键词', 'index.php?m=91736&c=keywords', 0),
(33, 21, '基本信息', 'index.php?m=91736&c=setting', 0),
(34, 21, '联系方式', 'index.php?m=91736&c=setting&f=contact', 0),
(35, 21, '邮件设置', 'index.php?m=91736&c=setting&f=email', 0),
(36, 22, '添加菜单', 'index.php?m=91736&c=menu&f=add', 0),
(37, 22, '管理菜单', 'index.php?m=91736&c=menu', 0),
(38, 4, '碎片管理', '###', 0),
(39, 38, '添加碎片', 'index.php?m=91736&c=block&f=add', 0),
(40, 38, '管理碎片', 'index.php?m=91736&c=block', 0),
(41, 4, '幻灯片管理', '###', 0),
(42, 4, '客服QQ管理', '###', 0),
(43, 4, '友情链接管理', '###', 0),
(44, 4, '会员管理', '###', 0),
(45, 41, '添加幻灯', 'index.php?m=flash&c=flash&f=add', 0),
(46, 41, '管理幻灯', 'index.php?m=flash&c=flash', 0),
(47, 42, '添加客服', 'index.php?m=qq&c=qq&f=add', 0),
(48, 42, '管理客服', 'index.php?m=qq&c=qq', 0),
(49, 43, '添加链接', 'index.php?m=link&c=link&f=add', 0),
(50, 43, '管理链接', 'index.php?m=link&c=link', 0),
(51, 44, '会员管理', 'index.php?m=member&c=admin', 0),
(52, 44, '模型配置', 'index.php?m=member&c=admin&f=field', 0),
(53, 44, '会员组管理', 'index.php?m=member&c=group', 0),
(54, 5, '模板管理', '###', 0),
(55, 54, '模板列表', 'index.php?m=91736&c=template', 0),
(56, 5, '数据调用', '###', 0),
(57, 56, '调用说明', 'index.php?m=91736&c=template&f=calls', 0),
(58, 6, '生成html', '###', 0),
(59, 6, '更新URL', '###', 0),
(60, 58, '更新首页', 'index.php?m=91736&c=creathtml&f=update_index', 0),
(61, 58, '更新栏目页', 'index.php?m=91736&c=categorytree&f=category_tree', 0),
(62, 58, '更新内容页', 'index.php?m=91736&c=categorytree&f=show_tree', 0),
(63, 59, '更新URL', 'index.php?m=91736&c=categorytree', 0),
(64, 4, '自定义表单管理', '###', 0),
(65, 64, '管理表单', 'index.php?m=form&c=form', 0);

-- --------------------------------------------------------

--
-- 表的结构 `bk_message`
--

CREATE TABLE IF NOT EXISTS `bk_message` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` char(80) NOT NULL,
  `inputtime` int(10) NOT NULL DEFAULT '0',
  `truename` char(80) NOT NULL,
  `telephone` char(80) NOT NULL,
  `address` char(80) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- 表的结构 `bk_model`
--

CREATE TABLE IF NOT EXISTS `bk_model` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `model_name` char(20) NOT NULL,
  `model_table` char(20) NOT NULL,
  `is_lock` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_fixed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `bk_model`
--

INSERT INTO `bk_model` (`id`, `model_name`, `model_table`, `is_lock`, `is_fixed`) VALUES
(1, '单页模型', 'single', 1, 1),
(2, '新闻模型', 'news', 1, 0),
(3, '产品模型', 'product', 1, 0),
(4, '招聘模型', 'job', 1, 0),
(5, '下载模型', 'download', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `bk_model_field`
--

CREATE TABLE IF NOT EXISTS `bk_model_field` (
  `fieldid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `modelid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `field` char(20) NOT NULL,
  `name` char(20) NOT NULL,
  `formtype` char(20) NOT NULL,
  `width` tinyint(4) NOT NULL DEFAULT '0',
  `height` tinyint(4) NOT NULL DEFAULT '0',
  `initial` text,
  `explain` char(20) DEFAULT NULL,
  `sort` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_fixed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fieldid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `bk_model_field`
--

INSERT INTO `bk_model_field` (`fieldid`, `modelid`, `field`, `name`, `formtype`, `width`, `height`, `initial`, `explain`, `sort`, `is_fixed`) VALUES
(1, 1, 'content', '详细内容', 'editor', 0, 0, '', '', 0, 1),
(2, 2, 'content', '详细内容', 'editor', 0, 0, '', '', 0, 0),
(4, 3, 'content', '详细说明', 'editor', 0, 0, '', '', 2, 0),
(5, 4, 'type', '招聘类别', 'option', 0, 0, '全职,兼职', '', 0, 0),
(6, 4, 'experience', '经验要求', 'option', 0, 0, '不限,毕业生,1年,2年,3年,5年', '或以上', 0, 0),
(7, 4, 'degree', '学历要求', 'option', 0, 0, '不限,初中,高中,职校,中专,大专,本科,硕士,博士', '或以上', 0, 0),
(8, 4, 'sex', '性别要求', 'option', 0, 0, '不限,男性,女性', '', 0, 0),
(9, 4, 'numbers', '招聘人数', 'text', 8, 0, '', '人', 0, 0),
(10, 4, 'wage', '月薪待遇', 'text', 15, 0, '', '', 0, 0),
(11, 4, 'content', '职位描述', 'editor', 0, 0, '', '', 0, 0),
(14, 5, 'files', '上传文件', 'files', 0, 0, '', '', 0, 0),
(15, 5, 'content', '详细说明', 'editor', 0, 0, '', '', 0, 0),
(16, 3, 'moreimage', '多图上传', 'moreimage', 0, 0, '', '', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `bk_news`
--

CREATE TABLE IF NOT EXISTS `bk_news` (
  `contentid` int(8) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `bk_news`
--

INSERT INTO `bk_news` (`contentid`, `content`) VALUES
(2, '经过一年的努力，由91736团队原创的91736cms终于开发完成。'),
(3, '修复smarty字符串截取功能'),
(4, '优化调用缓存函数'),
(5, '优化分页函数'),
(6, 'loop循环使用方法详细介绍'),
(25, '配置了前台模板缓存'),
(33, '优化静态保存目录 更好结合seo'),
(32, '完善页面静态生成,减轻系统负担'),
(34, '优化文章静态生成路径'),
(35, '完善列表页生成静态 操作更便捷');

-- --------------------------------------------------------

--
-- 表的结构 `bk_product`
--

CREATE TABLE IF NOT EXISTS `bk_product` (
  `contentid` int(8) NOT NULL,
  `content` text NOT NULL,
  `moreimage` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `bk_product`
--

INSERT INTO `bk_product` (`contentid`, `content`, `moreimage`) VALUES
(51, '\r\n	<strong> <img src="/uploadfile/image/20120724/20120724145635_80188.gif" alt="" /> 云存储</strong> \r\n\r\n<p>\r\n	AllWeb是一款基于浏览器使用的以网络存储为核心的云操作系统，系统基于分布式环境设计，可应用于跨物理区域的基础设施，保证在不同集群之间的数据一致性。用户无需关心底层基础设施的运营和管理，只要根据自己的业务需求，在核心数据的基础上，选择或者定制应用即可轻松拓展业务。\r\n</p>\r\n<strong><img src="/uploadfile/image/20120724/20120724145646_82221.gif" alt="" /> 应用扩展</strong> \r\n<p>\r\n	AllWeb采用应用商店的设计方法对云平台上的各种应用进行管理，用户可以选择适合自己业务的应用软件；此外，用户也可以通过AllWeb所提供的应用接口，轻松集成自己的应用软件至云端服务器上，并面向整个互联网提供服务。\r\n</p>\r\n\r\n	<strong><strong> <img src="/uploadfile/image/20120724/20120724145635_80188.gif" alt="" /> </strong>移动存储终端</strong> \r\n\r\n<p>\r\n	在线下，通过对移动存储设备安装同步软件，能够在该设备与AllWeb之间建立同步数据通道，移动数据终端最大的优势在于能够对数据进行不同安全级别的控制，以保证企业和个人数据的私密性和可靠性，适用于各大中小型企业与个人用户的数据资料存储、备份、归档等一系列需求。\r\n</p>\r\n\r\n	<strong><strong> <img src="/uploadfile/image/20120724/20120724145635_80188.gif" alt="" /> </strong>数据安全</strong> \r\n\r\n<p>\r\n	AllWeb中采用了网络安全、系统安全、应用安全、管理安全、用户认证和签名等一系列安防措施，以最大程度保护用户数据不被泄露或丢失。AllWeb对用户数据和信息的加密已经达到国内银行级加密水平。\r\n</p>\r\n\r\n	<strong><strong> <img src="/uploadfile/image/20120724/20120724145635_80188.gif" alt="" /> </strong>用户体验</strong> \r\n\r\n<p>\r\n	AllWeb采用了JQuery开发技术，其UI与传统的桌面操作系统相近，为用户提供了友好方便的使用方法，极大的提高了体验价值\r\n</p>', 'a:0:{}'),
(37, '<p style="text-indent:21.0pt;">\r\n	<span style="font-family:宋体;">围绕用户的核心数据，搭建面向企业内部的应用软件私有云服务平台，集数据安全、备份容灾、软件开发部署、基础设施运维于一体的综合解决方案服务。<span></span></span> \r\n</p>', 'a:0:{}'),
(38, '<p style="text-indent:21.0pt;">\r\n	<span style="font-size:10.5pt;">面对急剧膨胀的数据量，越来越复杂的数据类型、二十四小时不停运转的关键任务数据库，对企事业单位而言，不论是天灾或是人为疏忽所造成数据损失，对企事业单位造成的冲击及财务损失就是一场可怕的灾难。防止这些灾难，最佳的解决之道便是事先做好数据备份，并做好灾难恢复计划。北信为您提供如下数据备份方案：<span></span></span> \r\n</p>\r\n<ul>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">集中备份解决方案<span></span></span> \r\n	</li>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">D2D2R </span><span style="font-family:宋体;">远程数据容灾解决方案<span></span></span> \r\n	</li>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">D2D2T </span><span style="font-family:宋体;">备份解决方案<span></span></span> \r\n	</li>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">LAN-Free</span><span style="font-family:宋体;">备份解决方案<span></span></span> \r\n	</li>\r\n</ul>\r\n<span style="font-size:10.5pt;font-family:宋体;">实时备份解决方案</span>', 'a:0:{}'),
(54, '<p style="text-indent:21.0pt;">\r\n	<span style="font-family:宋体;">提供基于弹性资源管理的解决方案，秉承了<span>“</span>海纳百川，融会贯通<span>”</span>的理念，旨在</span><span style="font-family:宋体;">面向企业的个性化需求，量身定制低成本、高性能的虚拟化和云安全解决方案。具体范围包括：<span></span></span> \r\n</p>\r\n<ul>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">应用虚拟化<span></span></span> \r\n	</li>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">桌面虚拟化<span></span></span> \r\n	</li>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">服务器虚拟化<span></span></span> \r\n	</li>\r\n</ul>\r\n<br />', 'a:0:{}'),
(39, '<p style="text-indent:21.0pt;">\r\n	<span style="font-family:宋体;">北信数据恢复中心以标准化的数据恢复流程及配套设施为基础，以基础技术人员为主体，便携性好、支持范围广，可以及时、全方位、全天候地对用户硬盘及其他存储设备的数据进行恢复处理。解决的存储设备故障范围包括：<span></span></span> \r\n</p>\r\n<p style="text-indent:21.0pt;">\r\n	<span style="font-family:宋体;"> </span> \r\n</p>\r\n<ul>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">软故障</span><span style="font-family:宋体;"></span> \r\n	</li>\r\n</ul>\r\n<p style="margin-left:18.0pt;text-align:left;text-indent:-18.0pt;" align="left">\r\n	<span style="font-family:宋体;"><span>1)<span> </span></span></span><span style="font-family:宋体;">人为误删除、误格式化、误<span>GHOST</span>造成数据丢失，正常情况下看不到数据。<span></span></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-align:left;text-indent:-18.0pt;" align="left">\r\n	<span style="font-family:宋体;"><span>2)<span> </span></span></span><span style="font-family:宋体;">病毒破坏造成数据丢失，造成数据错乱，正常情况下看不到数据。<span></span></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-align:left;text-indent:-18.0pt;" align="left">\r\n	<span style="font-family:宋体;"><span>3)<span> </span></span></span><span style="font-family:宋体;">服务器阵列信息丢失，在服务器的阵列卡<span>BIOS</span>里找不到阵列，或者能找到，但有硬盘报警系统不能启动。<span></span></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-align:left;text-indent:-18.0pt;" align="left">\r\n	<span style="font-family:宋体;"><span>4)<span> </span></span></span><span style="font-family:宋体;">硬盘、闪存盘固件损坏，硬盘表现为通电无异响，但不能正常被电脑识别。闪存盘表现为分区属性为<span>RAW</span>格式，<span>0</span>字节；双击盘符就弹出格式化的对话框。<span></span></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-align:left;text-indent:-18.0pt;" align="left">\r\n	<span style="font-family:宋体;"><span>5)<span> </span></span></span><span style="font-family:宋体;">磁盘阵列信息故障，<span>RAID</span>信息丢失、找不到分区、分区丢失、系统不能启动，系统注册表坏、盘体不认。<span></span></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-align:left;text-indent:0cm;" align="left">\r\n	<span style="font-family:宋体;"> </span> \r\n</p>\r\n<ul>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">硬故障</span><span style="font-family:宋体;"></span> \r\n	</li>\r\n</ul>\r\n<p style="margin-left:18.0pt;text-align:left;text-indent:-18.0pt;" align="left">\r\n	<span style="font-family:宋体;"><span>1)<span> </span></span></span><span style="font-family:宋体;">硬盘坏道，<span>WINDOWS</span>下不能正常读取数据，不能正常装系统，扫描有明显坏道。<span></span></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-align:left;text-indent:-18.0pt;" align="left">\r\n	<span style="font-family:宋体;"><span>2)<span> </span></span></span><span style="font-family:宋体;">硬盘电路板、磁头、盘片、电机的物理损坏，造成通电后电机不转、不能正常被电脑识别、有敲盘声音等故障。<span></span></span> \r\n</p>\r\n<p style="margin-left:18.0pt;text-align:left;text-indent:-18.0pt;" align="left">\r\n	<span style="font-family:宋体;"><span>3)<span> </span></span></span><span style="font-family:宋体;">闪存卡电路损坏造成的插上电脑没有任何反应，用厂家固件程序也检测不到闪存信息。</span><span style="font-family:宋体;"></span> \r\n</p>', 'a:0:{}'),
(40, '<p style="text-indent:21pt;">\r\n	<span style="font-family:宋体;">北科院云存储平台是在大规模数据存储及处理等云计算技术基础上，建立一个开放的科研知识共享与管理平台，以便更好的组织、传播市科研院内部研究人员的研究成果（例如论文、专利等）。同时，该平台提供综合性的科研、办公服务，例如邮件系统、数据搜索、应用软件、消息发布等功能，能够进一步降低市科研院内部信息传递成本，促进内部的信息共享，从而提升市科研院的科研能力。统一的数据、信息共享及管理平台能够体现一个现代企业品牌和形象，促进北科院与外部的业务联系，全面提升院信息化的综合管理水平。</span> \r\n</p>\r\n<p style="text-indent:21.0pt;">\r\n	<img src="/bk/uploadfile/image/20120723/20120723212029_50751.png" alt="" /><br />\r\n<span style="font-family:宋体;"><b><span></span></b></span> \r\n</p>', 'a:0:{}'),
(41, '<p style="text-indent:21pt;">\r\n	<span style="font-family:宋体;">生物计算平台（</span><span>BioCloud.org.cn</span><span style="font-family:宋体;">）是由北京市计算中心、北京市科学技术研究院资助开发的面向生命科学及相关应用领域的云计算平台，生物计算平台采用网格计算（</span><span>Grid Computing</span><span style="font-family:宋体;">）、分布式计算（</span><span>Distributed Computing</span><span style="font-family:宋体;">）、并行计算（</span><span>Parallel Computing</span><span style="font-family:宋体;">）、效用计算（</span><span>Utility Computing</span><span style="font-family:宋体;">）、网络存储（</span><span>Network Storage Technologies</span><span style="font-family:宋体;">）、虚拟化（</span><span>Virtualization</span><span style="font-family:宋体;">）、负载均衡（</span><span>Load\r\nBalance</span><span style="font-family:宋体;">）、远程访问（</span><span>Remote Desktop</span><span style="font-family:宋体;">）等多种云计算技术，整合近</span><span>200</span><span style="font-family:宋体;">种生物信息学软件及数据库工具，旨在为广大科研院所、中小企业提供高性能、低成本的数据分析服务，使每一位终端用户都能够分享到高性能计算的强大与便捷，为广大生物学研究人员提供经济实用、方便快捷的数据计算和分析服务。</span> \r\n</p>\r\n<p style="text-indent:21.0pt;">\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style="font-family:宋体;">平台结构示意图 </span><span></span> \r\n</p>\r\n<img style="width:571px;height:297px;" src="/uploadfile/image/20120723/20120723212130_12488.png" alt="" /><br />\r\n<span style="font-family:宋体;"></span><span></span> \r\n<p>\r\n	<br />\r\n</p>', 'a:0:{}'),
(42, '<p style="text-indent:21pt;">\r\n	<span style="font-family:宋体;">“微生物生物信息软件分析服务平台”</span><span>1.0</span><span style="font-family:宋体;">版旨在现有统计分析工具和数据库的基础上，进行集成开发，以便为用户提供界面简洁、使用方便的软件工具平台，该平台能够为用户提供最常用的分析服务，能够切实帮助用户解决在实际工作所遇到的问题，提高工作效率。平台功能主要分为在线软件服务、文件管理系统、</span><span>Blast</span><span style="font-family:宋体;">比对功能、数据库下载等</span><span>4</span><span style="font-family:宋体;">个部分内容。</span> \r\n</p>\r\n<p style="text-indent:21.0pt;">\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style="font-family:宋体;">网络拓补示意图</span><span style="font-family:宋体;"></span> \r\n</p>\r\n<img style="width:562px;height:246px;" src="/uploadfile/image/20120723/20120723212321_19909.png" alt="" /><br />\r\n<span style="font-family:宋体;"></span><span></span> \r\n<p>\r\n	<br />\r\n</p>', 'a:0:{}'),
(52, '<img src="/uploadfile/image/20120724/20120724145857_64961.gif" alt="" /> <strong>数据挖掘算法</strong> \r\n<p>\r\n	PDMiner是一个基于分布式系统的高可靠、高容错大规模数据分析云平台，其核心包括三大类数据挖掘工具，包括关联规则分析、分类分析、聚类分析，其中每一类都集成了各种丰富算法。通过PDMiner，用户能够方便的使用由北信提供的集软件、硬件、网络、算法等资源于一体的互联网服务，来完成对海量数据的存储、分析等各种操作，从而进一步实现自己的商业应用。\r\n</p>\r\n<img src="/uploadfile/image/20120724/20120724145857_64961.gif" alt="" /><strong>体系结构</strong> \r\n<p>\r\n	PDMiner平台采用分层、结构化设计，各业务功能通过模块化子系统实现，包括用户接口、工作流引擎、ETL、数据挖掘等多个部分。PDMiner底层由数十台普通服务器组成，由于采用了基于开源项目Hadoop的分布式方法，平台对整个硬件系统进行高效的组织调用，充分发挥出整体聚合带宽的优势，真正实现了低成本、高性能的数据处理引擎。\r\n</p>\r\n<p>\r\n	平台结构示意图\r\n</p>\r\n<p style="text-align:center;">\r\n	<img style="width:403px;height:403px;" src="/uploadfile/image/20120724/20120724150453_42442.png" alt="" /> \r\n</p>\r\n<img src="/uploadfile/image/20120724/20120724145857_64961.gif" alt="" /> <strong>工作流</strong> \r\n<p>\r\n	工作流引擎通过图形化的UI系统为用户提供服务，用户可以灵活定制符合业务应用工作流程的自定制挖掘任务；工作流引擎支持建立多个工作流任务，不仅每个挖掘任务内部能够并行，不同数据挖掘任务之间也实现了并行。\r\n</p>\r\n<img src="/uploadfile/image/20120724/20120724145857_64961.gif" alt="" /><strong> ETL扩展</strong> \r\n<p>\r\n	数据预处理在数据挖掘中非常重要，通常其输出是数据挖掘算法的输入，PDMiner中实现了数十种ETL算法，用户有着非常广阔的选择空间。\r\n</p>\r\n<img src="/uploadfile/image/20120724/20120724145857_64961.gif" alt="" /> <strong>大数据处理</strong> \r\n<p>\r\n	目前PDMiner集群规模为32节点，单个物理节点规格包括4核处理器（2路2核）、8GB&nbsp;DDR3内存、1TB硬盘，其所能处理的数据规模分别为：ETL&nbsp;1TB、关联规则&nbsp;30GB、分类&nbsp;400GB、聚类&nbsp;12GB。\r\n</p>\r\n<img src="/uploadfile/image/20120724/20120724145857_64961.gif" alt="" /><strong> 性能评测</strong> \r\n<p>\r\n	测试数据规模：ETL&nbsp;1TB、关联规则&nbsp;30GB、分类&nbsp;400GB\r\n</p>\r\n<p style="text-align:center;">\r\n	<img style="width:342px;height:322px;" src="/uploadfile/image/20120724/20120724150633_23029.png" alt="" /><img src="/uploadfile/image/20120724/20120724150657_12903.png" alt="" style="width:342px;height:322px;" />&nbsp;&nbsp;&nbsp;&nbsp;<img style="width:332px;height:322px;" src="/uploadfile/image/20120724/20120724150927_10173.png" alt="" />&nbsp;&nbsp;&nbsp;<img style="width:332px;height:322px;" src="/uploadfile/image/20120724/20120724151102_97923.png" alt="" /> \r\n</p>', 'a:0:{}');

-- --------------------------------------------------------

--
-- 表的结构 `bk_qq`
--

CREATE TABLE IF NOT EXISTS `bk_qq` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(20) NOT NULL,
  `qq` char(20) NOT NULL,
  `is_lock` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `bk_qq`
--

INSERT INTO `bk_qq` (`id`, `title`, `qq`, `is_lock`, `inputtime`) VALUES
(1, '商业服务', '261689713', 0, 1322019561),
(5, '商业模板', '771352113', 0, 1322019561);

-- --------------------------------------------------------

--
-- 表的结构 `bk_resume`
--

CREATE TABLE IF NOT EXISTS `bk_resume` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` char(80) NOT NULL,
  `inputtime` int(10) NOT NULL DEFAULT '0',
  `truename` char(80) NOT NULL,
  `age` char(80) NOT NULL,
  `telephone` char(80) NOT NULL,
  `degree` char(80) NOT NULL,
  `address` char(80) NOT NULL,
  `school` text NOT NULL,
  `work` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `bk_resume`
--

INSERT INTO `bk_resume` (`id`, `title`, `inputtime`, `truename`, `age`, `telephone`, `degree`, `address`, `school`, `work`) VALUES
(1, '阿萨德法师的', 1342874653, '阿萨德法师打发', '12', '', '小学', '', '阿斯蒂芬', '是打发');

-- --------------------------------------------------------

--
-- 表的结构 `bk_single`
--

CREATE TABLE IF NOT EXISTS `bk_single` (
  `contentid` int(8) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `bk_single`
--

INSERT INTO `bk_single` (`contentid`, `content`) VALUES
(19, '\r\n	公司简介\r\n'),
(36, ''),
(47, '<table style="width:100%;" class="ke-zeroborder" border="0" bordercolor="#000000" cellpadding="2" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					<img src="/uploadfile/image/20120721/20120721222117_32631.png" alt="" /> \r\n				</p>\r\n				<p style="text-align:left;">\r\n					<i><span style="font-family:宋体;"> 北京市科学技术研究院<span></span></span></i> \r\n				</p>\r\n				<p>\r\n					<br />\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<img style="width:188px;height:54px;" src="/uploadfile/image/20120721/20120721222107_84143.png" alt="" /> \r\n				<p>\r\n					<i><span style="font-family:宋体;"> 北京市计算中心</span></i> \r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					<img style="width:268px;height:54px;" src="/uploadfile/image/20120721/20120721222135_39657.png" alt="" /> \r\n				</p>\r\n				<p>\r\n					<i><span style="font-family:宋体;"> 北京市交通委<span></span></span></i> \r\n				</p>\r\n				<p>\r\n					<br />\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<i><span style="font-family:宋体;"></span></i><img style="width:164px;height:56px;" src="/uploadfile/image/20120721/20120721222144_39396.png" alt="" /> \r\n				</p>\r\n				<p>\r\n					<i><span style="font-family:宋体;">闪联</span></i> \r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					<img style="width:272px;height:56px;" src="/uploadfile/image/20120721/20120721222126_13276.png" alt="" /> \r\n				</p>\r\n				<p>\r\n					<br />\r\n				</p>\r\n				<p>\r\n					<i><span style="font-family:宋体;"> 北京市科委<span></span></span></i> \r\n				</p>\r\n				<p>\r\n					<br />\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />'),
(48, '<p>\r\n	<img style="width:155px;height:71px;" src="/uploadfile/image/20120721/20120721223518_37869.png" alt="" /><img src="/uploadfile/image/20120721/20120721223511_85108.png" alt="" /><img src="/uploadfile/image/20120721/20120721223446_76939.png" alt="" /> \r\n</p>\r\n<p>\r\n	<img style="width:169px;height:58px;" src="/uploadfile/image/20120721/20120721223533_81963.gif" alt="" /> <img style="width:152px;height:68px;" src="/uploadfile/image/20120721/20120721223526_51220.jpg" alt="" /> \r\n</p>\r\n<p>\r\n	<img style="width:119px;height:55px;" src="/uploadfile/image/20120721/20120721223454_22208.png" alt="" /> \r\n</p>\r\n<p>\r\n	<img style="width:357px;height:54px;" src="/uploadfile/image/20120721/20120721223439_90175.png" alt="" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>'),
(49, '<p style="text-align:left;text-indent:21.0pt;" align="left">\r\n	<span style="font-family:宋体;">北信<span>“</span>软件合作伙伴计划<span>”</span>致力于和企业在软件研发领域建立全方位的资源合作，包括人力、项目、产品等，以便更加高效的推广基于北信云计算技术的商业应用。该计划主要内容有：<span></span></span> \r\n</p>\r\n<ul>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">在各种业务和技术社区中，专家、开发人员展开技术交流。<span></span></span> \r\n	</li>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">探讨云计算和软件技术发展蓝图，联合开展研究项目。<span></span></span> \r\n	</li>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">基于北信的客户价值和市场定位，共同开发具有前瞻性的软件产品。<span></span></span> \r\n	</li>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">共同努力降低<span>IT</span>基础设施的复杂性，提升软件平台的用户体验价值。<span></span></span> \r\n	</li>\r\n	<li style="text-align:left;">\r\n		<span style="font-family:宋体;">相互将商标包含在市场营销材料中。<span></span></span> \r\n	</li>\r\n</ul>\r\n<p style="text-align:left;text-indent:21.0pt;" align="left">\r\n	<span style="font-family:宋体;">通过“软件合作伙伴计划”，我们希望和您一起创建<span>1+1&gt;2</span>的互利伙伴关系。<span>我们坚信能为您的业务带来有价值的贡献，并且期望能够通过每天赢得您的信任来证明这一承诺。</span>北信期待您的加入。</span><span style="font-family:宋体;"></span> \r\n</p>\r\n<br />'),
(50, '<br />\r\n<p>\r\n	北京总部\r\n</p>\r\n<p>\r\n	地址：	北京市安翔北里甲11号\r\n</p>\r\n<p>\r\n	邮编：	100101\r\n</p>\r\n<p>\r\n	咨询热线：	021-5422&nbsp;2601\r\n</p>\r\n<p>\r\n	客服邮箱：	bkxx.contact@gmail.com\r\n</p>\r\n<p>\r\n	<img src="/uploadfile/image/20120724/20120724042527_33071.png" alt="" />\r\n</p>'),
(55, '暂无<br />'),
(56, '<p>\r\n	<span style="font-size:10.5pt;font-family:宋体;">目前北信已与多家跨国企业和研究院所建立了战略合作伙伴关系，与多个解决方案提供商并肩合作，积累了丰富的集成、联合研发经验。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:10.5pt;font-family:宋体;"><img src="/uploadfile/image/20120724/20120724135053_77324.jpg" alt="" /><img src="/uploadfile/image/20120724/20120724135105_92246.jpg" alt="" /><img src="/uploadfile/image/20120724/20120724135117_70622.jpg" alt="" /></span> \r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 清华大学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 北京大学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 北京航空航天大学<br />\r\n<span style="font-size:10.5pt;font-family:宋体;"> </span>\r\n</p>\r\n<p>\r\n	<span style="font-size:10.5pt;font-family:宋体;">&nbsp;&nbsp;&nbsp; <br />\r\n</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:10.5pt;font-family:宋体;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/uploadfile/image/20120724/20120724135143_66398.jpg" alt="" />&nbsp;&nbsp; <img src="/uploadfile/image/20120724/20120724135153_62885.jpg" alt="" /></span>\r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 北京交通大学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 北京工业大学<br />\r\n<span style="font-size:10.5pt;font-family:宋体;"></span> \r\n</p>\r\n<p style="text-align:left;">\r\n	<span style="font-size:10.5pt;font-family:宋体;"><img style="width:343px;height:53px;" src="/uploadfile/image/20120724/20120724135212_94825.png" alt="" /></span>\r\n</p>\r\n<p style="text-align:left;">\r\n	&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中国科学院计算机研究所<br />\r\n<span style="font-size:10.5pt;font-family:宋体;"></span> \r\n</p>\r\n<p style="text-align:left;">\r\n	<span style="font-size:10.5pt;font-family:宋体;"><img src="/uploadfile/image/20120724/20120724135236_14254.png" alt="" /></span>\r\n</p>\r\n<p style="text-align:left;">\r\n	<span style="font-size:10.5pt;font-family:宋体;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 中国科学院自动化研究所<br />\r\n</span> \r\n</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
