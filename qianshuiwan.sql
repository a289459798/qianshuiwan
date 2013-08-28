-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 08 月 28 日 23:10
-- 服务器版本: 5.1.44-community
-- PHP 版本: 5.3.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `qianshuiwan`
--

-- --------------------------------------------------------

--
-- 表的结构 `qsw_admin`
--

CREATE TABLE IF NOT EXISTS `qsw_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `groupid` tinyint(4) NOT NULL DEFAULT '1' COMMENT '用户组ID',
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `login_time` int(10) unsigned NOT NULL COMMENT '登录时间',
  `login_ip` varchar(15) NOT NULL COMMENT '登录ip',
  `lock` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '锁定状态',
  `restpass` int(2) DEFAULT NULL,
  `restcode` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `restdate` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usename` (`username`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `qsw_admin`
--

INSERT INTO `qsw_admin` (`id`, `groupid`, `username`, `password`, `login_time`, `login_ip`, `lock`, `restpass`, `restcode`, `restdate`) VALUES
(1, 1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1377526131, '127.0.0.1', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `qsw_falv`
--

CREATE TABLE IF NOT EXISTS `qsw_falv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `fenlei` int(11) NOT NULL,
  `dateline` int(11) NOT NULL,
  `onclick` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `qsw_falv`
--

INSERT INTO `qsw_falv` (`id`, `title`, `content`, `fenlei`, `dateline`, `onclick`) VALUES
(1, '1111', 'eeeee', 1, 1377610522, 0),
(2, '333', '4444', 2, 1377697613, 0);

-- --------------------------------------------------------

--
-- 表的结构 `qsw_group`
--

CREATE TABLE IF NOT EXISTS `qsw_group` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `power_value` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- 表的结构 `qsw_news`
--

CREATE TABLE IF NOT EXISTS `qsw_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `fenlei` int(11) NOT NULL,
  `dateline` int(11) NOT NULL,
  `onclick` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `qsw_news`
--

INSERT INTO `qsw_news` (`id`, `title`, `content`, `fenlei`, `dateline`, `onclick`) VALUES
(2, '444444', '555555555555555555555555555555555555555555', 1, 1377607412, 0),
(3, '电饭锅电饭锅', '规范化风光好规划局规划局规划局&amp;nbsp;', 2, 1377608327, 0),
(4, 'aersf', 'fgdfgdgdg', 3, 1377610906, 0);

-- --------------------------------------------------------

--
-- 表的结构 `qsw_page`
--

CREATE TABLE IF NOT EXISTS `qsw_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fenlei` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `qsw_page`
--

INSERT INTO `qsw_page` (`id`, `fenlei`, `content`) VALUES
(2, 1, 'rererererer66666666666666666'),
(4, 2, 'rthrhtrhrthh6666666666666666');

-- --------------------------------------------------------

--
-- 表的结构 `qsw_resource`
--

CREATE TABLE IF NOT EXISTS `qsw_resource` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL,
  `operate` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `qsw_resource`
--

INSERT INTO `qsw_resource` (`id`, `pid`, `operate`, `name`) VALUES
(1, 0, 'article', ''),
(2, 1, 'index', ''),
(3, 1, 'search', ''),
(4, 1, 'add', ''),
(5, 1, 'edit', ''),
(6, 1, 'del', ''),
(7, 1, 'state', ''),
(8, 0, 'case', ''),
(9, 8, 'index', ''),
(10, 8, 'add', ''),
(11, 8, 'edit', ''),
(12, 8, 'del', ''),
(13, 0, 'category', ''),
(14, 13, 'getModules', ''),
(15, 13, 'index', ''),
(16, 13, 'add', ''),
(17, 13, 'edit', ''),
(18, 13, 'del', ''),
(19, 13, 'getCat', ''),
(20, 0, 'index', ''),
(21, 20, 'index', ''),
(22, 20, 'login', ''),
(23, 20, 'logout', ''),
(24, 20, 'verify', ''),
(25, 20, 'welcome', ''),
(26, 0, 'system', ''),
(27, 26, 'clearCache', ''),
(28, 0, 'tpl', ''),
(29, 28, 'index', ''),
(30, 28, 'edit', ''),
(31, 28, 'restore', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
