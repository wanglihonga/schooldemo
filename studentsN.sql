-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-05-29 02:24:49
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentsN`
--
CREATE DATABASE IF NOT EXISTS `studentsN` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `studentsN`;

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--
/*学生个人留言板*/
DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UserName` varchar(32) NOT NULL,
  `Email` varchar(24) NOT NULL,
  `Subject` varchar(32) NOT NULL,
  `Body` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 插入之前先把表清空（truncate） `contact`
--

TRUNCATE TABLE `contact`;
-- --------------------------------------------------------

--
-- 表的结构 `customs`
--
/*学生个人基本信息注册*/
DROP TABLE IF EXISTS `customs`;
CREATE TABLE IF NOT EXISTS `customs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,     /*学生编号*/
  `UserName` varchar(32) NOT NULL,     /*学生姓名*/
  `UserN` varchar(32) NOT NULL,     /*学生学号*/
  `UserY` varchar(32) NOT NULL,     /*学生院系*/
  `UserZ` varchar(32) NOT NULL,     /*学生专业*/
  `UserB` varchar(32) NOT NULL,     /*学生班级*/
  `Email` varchar(24) NOT NULL,     /*登陆邮箱*/
  `UserPassword` varchar(32) NOT NULL,     /*登录名密码*/
  `addtime` int(40) unsigned NOT NULL,     /*注册时间*/
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 插入之前先把表清空（truncate） `customs`
--

-- --------------------------------------------------------

--
-- 表的结构 `News`
--
/*学生个人成绩信息录入*/
DROP TABLE IF EXISTS `News`;
CREATE TABLE IF NOT EXISTS `News` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UserN` varchar(64) NOT NULL,/*学生学号*/
  `year` varchar(64) NOT NULL,/*年份*/
  `mouth` varchar(32) NOT NULL,/*月份*/
  `day` varchar(64)  NOT NULL,/*天数*/
  `CJ` varchar(32) NOT NULL,/*学生成绩*/
  `addtime` int(10) unsigned NOT NULL,/*添加时间*/
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 插入之前先把表清空（truncate） `News`
--

TRUNCATE TABLE `News`;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
