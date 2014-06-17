/*
Navicat MySQL Data Transfer

Source Server         : PHP
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : v5cms

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2014-06-17 11:37:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for v5_admin
-- ----------------------------
DROP TABLE IF EXISTS `v5_admin`;
CREATE TABLE `v5_admin` (
  `aid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(30) DEFAULT NULL COMMENT '账号',
  `password` char(32) DEFAULT NULL COMMENT '密码',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v5_admin
-- ----------------------------
INSERT INTO `v5_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- Table structure for v5_article
-- ----------------------------
DROP TABLE IF EXISTS `v5_article`;
CREATE TABLE `v5_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned DEFAULT NULL,
  `keywords` varchar(80) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` text,
  `click` int(11) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `admin_id` mediumint(8) unsigned DEFAULT NULL,
  `source` char(60) DEFAULT NULL,
  `author` char(30) DEFAULT NULL,
  `addtime` int(10) DEFAULT NULL,
  `updatetime` int(10) DEFAULT NULL,
  `title` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v5_article
-- ----------------------------
INSERT INTO `v5_article` VALUES ('1', '28', 'Java', '								java							', '<p><strong>Java</strong>是一種電腦<a href=\"http://zh.wikipedia.org/wiki/%E7%A8%8B%E5%BC%8F%E8%A8%AD%E8%A8%88%E8%AA%9E%E8%A8%80\" title=\"程式設計語言\">程式設計語言</a>，擁有<a href=\"http://zh.wikipedia.org/wiki/%E8%B7%A8%E5%B9%B3%E5%8F%B0\" title=\"跨平台\">跨平台</a>、<a href=\"http://zh.wikipedia.org/wiki/%E7%89%A9%E4%BB%B6%E5%B0%8E%E5%90%91\" title=\"物件導向\">物件導向</a>、<a href=\"http://zh.wikipedia.org/wiki/%E6%B3%9B%E5%9E%8B%E7%A8%8B%E5%BC%8F%E8%A8%AD%E8%A8%88\" title=\"泛型程式設計\">泛型程式設計</a>的特性，廣泛應用於企業級Web應用開發和行動應用開發。</p><p>任職於昇陽電腦的<a href=\"http://zh.wikipedia.org/wiki/%E8%A9%B9%E5%A7%86%E6%96%AF%C2%B7%E9%AB%98%E6%96%AF%E6%9E%97\" title=\"詹姆斯·高斯林\">詹姆斯·高斯林</a>等人於1990年代初開發Java語言的雛形，最初被命名為Oak，目標設定在<a href=\"http://zh.wikipedia.org/wiki/%E5%AE%B6%E7%94%A8%E7%94%B5%E5%99%A8\" title=\"家用電器\">家用電器</a>等小型系統的<a href=\"http://zh.wikipedia.org/wiki/%E7%A8%8B%E5%BC%8F%E8%AA%9E%E8%A8%80\" title=\"程式語言\">程式語言</a>，應用在<a href=\"http://zh.wikipedia.org/wiki/%E7%94%B5%E8%A7%86%E6%9C%BA\" title=\"電視機\">電視機</a>、<a href=\"http://zh.wikipedia.org/wiki/%E7%94%B5%E8%AF%9D\" title=\"電話\">電話</a>、<a href=\"http://zh.wikipedia.org/wiki/%E9%97%B9%E9%92%9F\" title=\"鬧鐘\">鬧鐘</a>、<a href=\"http://zh.wikipedia.org/wiki/%E7%83%A4%E9%9D%A2%E5%8C%85%E6%9C%BA\" title=\"烤麵包機\">烤麵包機</a>等家用電器的控制和通訊。由於這些<a href=\"http://zh.wikipedia.org/w/index.php?title=%E6%99%BA%E8%83%BD%E5%8C%96&action=edit&redlink=1\" title=\"智慧型 (頁面不存在)\">智慧型</a>家電的市場需求沒有預期的高，Sun公司放棄了該項計劃。隨著1990年代<a href=\"http://zh.wikipedia.org/wiki/%E7%B6%B2%E9%9A%9B%E7%B6%B2%E8%B7%AF\" title=\"網際網路\">網際網路</a>的發展，Sun公司看見Oak在<a href=\"http://zh.wikipedia.org/wiki/%E7%B6%B2%E9%9A%9B%E7%B6%B2%E8%B7%AF\" title=\"網際網路\">網際網路</a>上應用的前景，於是改造了Oak，於1995年5月以Java的名稱正式釋出。Java伴隨著網際網路的迅猛發展而發展，逐漸成為重要的網路程式語言。</p><p>Java程式語言的風格十分接近<a href=\"http://zh.wikipedia.org/wiki/C%2B%2B\" title=\"C++\">C++</a>語言。繼承了C++語言物件導向技術的核心，Java捨棄了C++語言中容易引起錯誤的<a href=\"http://zh.wikipedia.org/wiki/%E6%8C%87%E9%92%88_%28%E4%BF%A1%E6%81%AF%E5%AD%A6%29\" title=\"指標 (訊息學)\">指標</a>，改以<a href=\"http://zh.wikipedia.org/wiki/%E5%8F%83%E7%85%A7\" title=\"參照\">參照</a>取代，同時移除原C++與原來<a href=\"http://zh.wikipedia.org/wiki/%E9%81%8B%E7%AE%97%E5%AD%90%E5%A4%9A%E8%BC%89\" title=\"運算子多載\">運算子多载</a>，也移除<a href=\"http://zh.wikipedia.org/wiki/%E7%BB%A7%E6%89%BF_%28%E8%AE%A1%E7%AE%97%E6%9C%BA%E7%A7%91%E5%AD%A6%29\" title=\"繼承 (電腦科學)\">多重繼承</a>特性，改用<a href=\"http://zh.wikipedia.org/wiki/%E6%8E%A5%E5%8F%A3_%28Java%29\" title=\"介面 (Java)\">介面</a>取代，增加<a href=\"http://zh.wikipedia.org/wiki/%E5%9E%83%E5%9C%BE%E5%9B%9E%E6%94%B6_%28%E8%A8%88%E7%AE%97%E6%A9%9F%E7%A7%91%E5%AD%B8%29\" title=\"垃圾回收 (計算機科學)\">垃圾回收器</a>功能。在Java SE 1.5版本中引入了<a href=\"http://zh.wikipedia.org/wiki/%E6%B3%9B%E5%9E%8B\" title=\"泛型\">泛型程式設計</a>、<a href=\"http://zh.wikipedia.org/wiki/%E7%B1%BB%E5%9E%8B%E5%AE%89%E5%85%A8\" title=\"型別安全\">型別安全</a>的列舉、不定長參數和自動裝/拆箱特性。昇陽電腦對Java語言的解釋是：「Java程式語言是個簡單、物件導向、分布式、解釋性、健壯、安全與系統無關、可移植、高效能、多執行緒和動態的語言」</p><p>Java不同於一般的<a href=\"http://zh.wikipedia.org/wiki/%E7%B7%A8%E8%AD%AF%E8%AA%9E%E8%A8%80\" title=\"編譯語言\">編譯語言</a>和<a href=\"http://zh.wikipedia.org/wiki/%E7%9B%B4%E8%AD%AF%E8%AA%9E%E8%A8%80\" title=\"直譯語言\">直譯語言</a>。它首先將原始碼編譯成<a href=\"http://zh.wikipedia.org/wiki/%E5%AD%97%E8%8A%82%E7%A0%81\" title=\"位元組碼\">位元組碼</a>，然後依賴各種不同平台上的虛擬機器來解釋執行位元組碼，從而實作了「<a href=\"http://zh.wikipedia.org/wiki/%E4%B8%80%E6%AC%A1%E7%BC%96%E5%86%99%EF%BC%8C%E5%88%B0%E5%A4%84%E8%BF%90%E8%A1%8C\" title=\"一次編寫，到處執行\">一次編寫，到處執行</a>」的跨平台特性。在早期JVM中，這在一定程度上降低了Java程式的執行效率。但在J2SE1.4.2釋出後，Java的執行速度有了大幅提升。</p><p>與傳統型態不同，Sun公司在推出Java時就將其作為開放的技術。全球數以萬計的Java開發公司被要求所設計的Java軟體必須相互相容。「Java語言靠群體的力量而非公司的力量」是Sun公司的口號之一，並獲得了廣大軟體開發商的認同。這與<a href=\"http://zh.wikipedia.org/wiki/%E5%BE%AE%E8%BD%AF\" title=\"微軟\">微軟</a>公司所倡導的注重精英和封閉式的模式完全不同，此外，<a href=\"http://zh.wikipedia.org/wiki/%E5%BE%AE%E8%BD%AF%E5%85%AC%E5%8F%B8\" title=\"微軟公司\">微軟公司</a>後來推出了與之競爭的<a href=\"http://zh.wikipedia.org/wiki/.NET_Framework\" title=\".NET Framework\">.NET平台</a>以及模仿Java的<a href=\"http://zh.wikipedia.org/wiki/%EF%BC%A3%EF%BC%83\" title=\"Ｃ＃\">C#</a>語言。後來<a href=\"http://zh.wikipedia.org/wiki/Sun%E5%85%AC%E5%8F%B8\" title=\"Sun公司\">Sun公司</a>被<a href=\"http://zh.wikipedia.org/wiki/%E7%94%B2%E9%AA%A8%E6%96%87%E5%85%AC%E5%8F%B8\" title=\"甲骨文公司\">甲骨文公司</a>併購，Java也隨之成為甲骨文公司的產品。</p><p><br/></p>', '100', 'upload/article/2014/06/13/15521402634511.png', '1', 'http://www.java.com/', '詹姆斯·高斯林', '1402634511', '1970', 'Java--');
INSERT INTO `v5_article` VALUES ('2', '26', 'php', 'php', '<p>PHP（PHP: Hypertext Preprocessor的缩写，中文名：“超文本预处理器”）是一种通用<a target=\"_blank\" href=\"http://baike.baidu.com/view/9664.htm\">开源</a><a target=\"_blank\" href=\"http://baike.baidu.com/view/76320.htm\">脚本语言</a>。<a target=\"_blank\" href=\"http://baike.baidu.com/view/135635.htm\">语法</a>吸收了<a target=\"_blank\" href=\"http://baike.baidu.com/view/1219.htm\">C语言</a>、<a target=\"_blank\" href=\"http://baike.baidu.com/view/29.htm\">Java</a>和<a target=\"_blank\" href=\"http://baike.baidu.com/view/46614.htm\">Perl</a>的特点，入门门槛较低，易于学习，使用广泛，主要适用于<a target=\"_blank\" href=\"http://baike.baidu.com/view/3912.htm\">Web</a>开发领域。PHP的文件后缀名为php</p>', '100', 'upload/article/2014/06/13/47241402635399.png', '1', '百度百科', 'Rasmus Lerdorf', '1402635399', '2014', 'PHP');
INSERT INTO `v5_article` VALUES ('3', '22', ' 维基百科', '																\r\n维基百科														', '<h1><span class=\"mw-headline\" id=\".E7.BB.B4.E5.9F.BA.E7.99.BE.E7.A7.91\"><a href=\"http://zh.wikipedia.org/wiki/Wikipedia:%E5%85%B3%E4%BA%8E\" title=\"Wikipedia:关于\">维基百科</a></span></h1><p><br/></p>', '100', 'upload/article/2014/06/13/66861402644266.png', '1', ' 维基百科', ' 维基百科', '1402642091', '1970', ' 维基百科！！！-');
INSERT INTO `v5_article` VALUES ('4', '22', ' 维基百科', '		\r\n维基百科维基百科					\r\n维基百科维基百科					\r\n维基百科维基百科					\r\n维基百科维基百科																																			', '<h1><span class=\"mw-headline\" id=\".E7.BB.B4.E5.9F.BA.E7.99.BE.E7.A7.91\"><a href=\"http://zh.wikipedia.org/wiki/Wikipedia:%E5%85%B3%E4%BA%8E\" title=\"Wikipedia:关于\">维基百科</a></span></h1><p><br/></p>', '100', null, '1', ' 维基百科', ' 维基百科', '1402642654', '1970', ' 维基百科!!!');
INSERT INTO `v5_article` VALUES ('5', '38', '', '', '<p>华为是全球领先的信息与通信解决方案供应商。我们围绕客户的需求持续创新，与合作伙伴开放合作，在电信网络、企业网络、消费者和云计算等领域构筑了端到端\r\n的解决方案优势。我们致力于为电信运营商、企业和消费者等提供有竞争力的 ICT \r\n解决方案和服务，持续提升客户体验，为客户创造最大价值。目前，华为的产品和解决方案已经应用于170 多个国家和地区，服务全球1/3的人口。<br/><br/>我们以丰富人们的沟通和生活为愿景，运用信息与通信领域专业经验，消除数字鸿沟，让人人享有宽带。为应对全球气候变化挑战，华为通过领先的绿色解决方案，帮助客户及其他行业降低能源消耗和二氧化碳排放，创造最佳的社会、经济和环境效益。</p>', '100', null, '1', '例如:腾讯网', 'admin', '1402891204', '1402891204', '公司介绍');
INSERT INTO `v5_article` VALUES ('6', '26', '', '', '<p>1、Xdebug 错误与性能分析</p><p>2、Xdebug 内置函数的应用</p><p>3、Xdebug 日志查看工具</p><p>&nbsp;</p><p>&nbsp;</p><p>xdebug.max_nesting_level = 50 &nbsp;最大循环或调试次数，防止死循环</p><p>&nbsp;</p><p>xdebug.dump_once = On &nbsp;</p><p>xdebug.dump_globals = On</p><p>xdebug.dump_undefined = On</p><p>xdebug.dump.SERVER = REQUEST_METHOD,REQUEST_URI,HTTP_USER_AGENT</p><p>xdebug.dump.REQUEST=*</p><p>&nbsp;</p><p>xdebug.show_exception_trace = On &nbsp; 仍将强制执行异常跟踪</p><p>xdebug.show_local_vars = 1</p><p>将打印每个函数调用的最外围中的所有局部变量，包括尚未初始化的变量</p><p>xdebug.var_display_max_depth = 6</p><p>表示转储复杂变量的深度。</p><p>&nbsp;</p><p>Xdebug扩展加载后，Xdebug会对原有的某些PHP函数进行覆写</p><p><br/></p>', '100', 'upload/article/2014/06/17/83661402970864.jpg', '1', '例如:腾讯网', 'admin', '1402970864', '1402970864', 'PHP5.3 Xdebug 错误分析与性能调试');
INSERT INTO `v5_article` VALUES ('7', '25', '', '', '<p>今天我们来分享一款基于HTML5和SVG的动画效果，它是一个可以自动分叉的树，动画将以二叉树的形式展开。这三颗SVG树先是用svg的g画笔来定义这些树枝，然后利用javascript来实现动态改变g从而实现树枝的分叉展开动画。</p>', '100', null, '1', '例如:腾讯网', 'admin', '1402971517', '1402971517', 'HTML5 SVG 树枝分叉动画特效');
INSERT INTO `v5_article` VALUES ('8', '25', '', '', '<p><br/>之前我们介绍过很多CSS3菜单了，效果都十分华丽炫酷，但是这些CSS3菜单基本都是二维平面菜单，今天要分享的这款HTML5/CSS3菜单却是3D的效果。菜单展现时出现折叠下拉的动画特效，菜单也可以收起，鼠标滑过菜单项的效果也很不错。</p>', '100', 'upload/article/2014/06/17/87951402972092.jpg', '1', '例如:腾讯网', 'admin', '1402972092', '1402972092', 'HTML5/CSS3 3D下拉折叠菜单 超炫CSS3菜单动画');

-- ----------------------------
-- Table structure for v5_category
-- ----------------------------
DROP TABLE IF EXISTS `v5_category`;
CREATE TABLE `v5_category` (
  `cid` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `cname` char(30) DEFAULT NULL COMMENT '栏目名称',
  `pid` smallint(6) DEFAULT '0' COMMENT '父级ID',
  `keywords` varchar(80) DEFAULT NULL COMMENT '关键字',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v5_category
-- ----------------------------
INSERT INTO `v5_category` VALUES ('2', '汽车', '0', '汽车', '汽车 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('7', '无线城市', '8', '无疑', '测试哈全				 			');
INSERT INTO `v5_category` VALUES ('8', '中国移动', '21', '中国移动', '中国移动	 				\r\n	 				 				 				 			');
INSERT INTO `v5_category` VALUES ('10', '社会', '0', '社会 ', '社会 	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('11', '电影', '0', '电影', '电影	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('12', '和生活', '7', '和生活', '和生活	 				\r\n	 				 			');
INSERT INTO `v5_category` VALUES ('13', '3G', '12', '4G', '4G	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('14', '国产汽车', '2', '国产汽车', '国产汽车	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('15', '奥迪A6', '23', '奥迪A6', '奥迪A6	 				\r\n	 				 			');
INSERT INTO `v5_category` VALUES ('16', '国产电影', '11', '国产电影', '国产电影	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('18', '外国大片', '11', '外国大片', '外国大片	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('19', '我们的爱', '16', '我们的爱', '我们的爱	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('20', '生化战场', '18', '生化战场', '生化战场	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('21', '国内新闻', '10', '国内新闻', '国内新闻	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('22', '国外新闻', '10', '国外新闻', '国外新闻	 				\r\n	 				 			');
INSERT INTO `v5_category` VALUES ('23', '外国汽车', '2', '外产汽车', '外产汽车	 				\r\n	 				 			');
INSERT INTO `v5_category` VALUES ('24', '大众', '14', '大众', '大众	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('25', '编程语言', '0', '编程语言', '编程语言	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('26', 'PHP', '25', 'PHP', 'PHP	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('27', 'smarty', '26', 'smarty', 'smarty	 				\r\n	 				 			');
INSERT INTO `v5_category` VALUES ('28', 'Java', '25', 'Java', 'Java	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('29', 'Hibernate', '28', 'Hibernate', 'Hibernate	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('30', 'struts2', '28', 'struts2', 'struts2	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('31', 'spring', '28', 'spring', 'spring	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('32', 'C#', '25', 'C#', '	 				\r\nC#	 			');
INSERT INTO `v5_category` VALUES ('33', '.net', '32', '.net', '	 				\r\n.net	 			');
INSERT INTO `v5_category` VALUES ('34', 'asp', '32', 'asp', 'asp	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('35', 'C++', '0', 'C++', 'C++	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('36', 'c', '35', 'c', 'c	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('37', '奔驰', '23', '奔驰', '奔驰	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('38', '办公室', '0', '办公室', '办公室	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('39', '产品分类', '0', '产品分类', '	 				\r\n产品分类	 			');
INSERT INTO `v5_category` VALUES ('40', '海铁联运', '39', '海铁联运', '海铁联运	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('41', '码头作业', '39', '码头作业', '	 				\r\n码头作业	 			');
INSERT INTO `v5_category` VALUES ('43', '集装箱定舱', '39', '集装箱定舱', '集装箱定舱	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('44', '优质的仓储服务', '39', '优质的仓储服务', '优质的仓储服务	 				\r\n	 			');
INSERT INTO `v5_category` VALUES ('45', '海陆联运', '39', '海陆联运', '	 				\r\n海陆联运	 			');
INSERT INTO `v5_category` VALUES ('46', '水路运输', '39', '水路运输', '水路运输	 				\r\n	 			');

-- ----------------------------
-- Table structure for v5_config
-- ----------------------------
DROP TABLE IF EXISTS `v5_config`;
CREATE TABLE `v5_config` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `value` char(100) NOT NULL DEFAULT '',
  `show_type` tinyint(1) NOT NULL DEFAULT '1',
  `message` varchar(255) NOT NULL DEFAULT '',
  `option` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v5_config
-- ----------------------------
INSERT INTO `v5_config` VALUES ('1', 'webname', '网站名称', 'CMS', '1', '网站名称', '');
INSERT INTO `v5_config` VALUES ('2', 'icp', 'ICP', '京ICP备12048441号-3', '1', 'ICP', '');
INSERT INTO `v5_config` VALUES ('3', 'qq', 'QQ', '511391805', '1', 'QQ', '');
INSERT INTO `v5_config` VALUES ('4', 'email', '站长邮箱', '511391805@qq.com', '1', '站长邮箱', '');
INSERT INTO `v5_config` VALUES ('5', 'webstatus', '网站开启', '1', '2', '网站开启', '1|开启,0|关闭');
INSERT INTO `v5_config` VALUES ('6', '网站关闭提示', '网站关闭提示', '网站升级中......', '3', '网站关闭提示', '');
