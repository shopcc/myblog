/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.5.24-log : Database - myblog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `myblog`;

/*Table structure for table `my_article` */

CREATE TABLE `my_article` (
  `id` mediumint(10) NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `article_title` varchar(100) NOT NULL DEFAULT '' COMMENT '文章标题',
  `author` varchar(60) NOT NULL DEFAULT '' COMMENT '文章作者',
  `sort_id` tinyint(5) NOT NULL DEFAULT '0' COMMENT '文章分类ID',
  `content` text COMMENT '文章内容',
  `add_time` int(12) NOT NULL COMMENT '添加时间',
  `keywords` varchar(120) NOT NULL DEFAULT '' COMMENT '文章关键字',
  `description` varchar(200) NOT NULL DEFAULT '' COMMENT '文章描述',
  `html_url` varchar(200) NOT NULL DEFAULT '' COMMENT '静态链接地址',
  `small_content` text COMMENT '文章简介',
  `thumb_img` varchar(200) NOT NULL DEFAULT '' COMMENT '文章微图',
  `click` mediumint(10) NOT NULL DEFAULT '0' COMMENT '文章点击量',
  `a_hot` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否推荐',
  PRIMARY KEY (`id`),
  KEY `artile_title` (`article_title`,`keywords`),
  FULLTEXT KEY `content` (`content`,`small_content`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `my_article` */

insert  into `my_article`(`id`,`article_title`,`author`,`sort_id`,`content`,`add_time`,`keywords`,`description`,`html_url`,`small_content`,`thumb_img`,`click`,`a_hot`) values (1,'测试新闻2','admin',1,'ssss9',1970,'11','11','','1','/Public/data/kindeditor/attached/image/20150531/20150531103400_81976.gif',1,1),(12,'测试新闻1','admin',1,'1',1435075200,'2','1','','11111111','/Public/data/kindeditor/attached/image/20150531/20150531103400_81976.gif',11,1);

/*Table structure for table `my_category` */

CREATE TABLE `my_category` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `cate_name` varchar(60) NOT NULL DEFAULT '' COMMENT '分类名称',
  `pid` tinyint(5) NOT NULL DEFAULT '0' COMMENT '上级分类',
  `order_sort` int(10) NOT NULL DEFAULT '50' COMMENT '排序',
  `add_time` int(11) NOT NULL,
  `is_nav` tinyint(1) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `cate_name` (`cate_name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `my_category` */

insert  into `my_category`(`id`,`cate_name`,`pid`,`order_sort`,`add_time`,`is_nav`,`status`) values (2,'12',0,12,1433223364,0,0);

/*Table structure for table `my_comment` */

CREATE TABLE `my_comment` (
  `id` mediumint(10) NOT NULL AUTO_INCREMENT COMMENT '评论ID',
  `article_id` mediumint(10) NOT NULL DEFAULT '0' COMMENT '文章ID',
  `user_id` mediumint(10) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `content` text COMMENT '评论内容',
  `reply` text COMMENT '评论回复',
  `status` tinyint(1) DEFAULT '0' COMMENT '评论状态',
  PRIMARY KEY (`id`),
  KEY `article_id` (`article_id`,`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `my_comment` */

insert  into `my_comment`(`id`,`article_id`,`user_id`,`content`,`reply`,`status`) values (2,1,1,'111','33333333333333333',1);

/*Table structure for table `my_gllary` */

CREATE TABLE `my_gllary` (
  `id` mediumint(10) NOT NULL AUTO_INCREMENT COMMENT '相册ID',
  `g_name` varchar(60) NOT NULL DEFAULT '' COMMENT '相册名称',
  `g_img_url` varchar(120) NOT NULL DEFAULT '' COMMENT '相册封面',
  `g_desc` text COMMENT '相册描述',
  PRIMARY KEY (`id`),
  KEY `g_name` (`g_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `my_gllary` */

/*Table structure for table `my_users` */

CREATE TABLE `my_users` (
  `id` mediumint(10) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `user_name` varchar(60) NOT NULL DEFAULT '' COMMENT '用户名',
  `passwd` varchar(120) NOT NULL DEFAULT '' COMMENT '密码',
  `email` varchar(30) NOT NULL DEFAULT '' COMMENT '邮箱',
  `qqnum` mediumint(20) NOT NULL DEFAULT '0' COMMENT 'QQ号码',
  `openid` mediumint(20) NOT NULL DEFAULT '0' COMMENT 'openid',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否管理员',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`,`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `my_users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
