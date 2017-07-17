-- phpMyAdmin SQL Dump
-- version 4.0.10.19
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2017 at 04:18 AM
-- Server version: 5.6.36
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `7erafy`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm_usr`
--

CREATE TABLE IF NOT EXISTS `adm_usr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `NAME` text NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `USR_STAT` varchar(45) NOT NULL,
  `USR_NAME` varchar(100) NOT NULL,
  `PSWD` text NOT NULL,
  `USR_STAT_DT` datetime NOT NULL,
  `USR_END_DT` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`,`EMAIL`,`USR_NAME`),
  UNIQUE KEY `USR_NAME_UNIQUE` (`USR_NAME`),
  UNIQUE KEY `EMAIL_UNIQUE` (`EMAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) NOT NULL,
  `city_ar_name` varchar(50) NOT NULL,
  PRIMARY KEY (`city_name`,`city_ar_name`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `city_ar_name`) VALUES
(1, 'Alexandria', 'الاسكندرية'),
(2, 'Giza', 'الجيزة'),
(3, 'Cairo', 'القاهرة');

-- --------------------------------------------------------

--
-- Table structure for table `cntrl_btn`
--

CREATE TABLE IF NOT EXISTS `cntrl_btn` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `CNTRL_NAME` varchar(100) NOT NULL,
  `PAR_VIEW_ID` int(11) NOT NULL,
  `CNTRL_BTN_COMMENT` text,
  PRIMARY KEY (`ID`,`CNTRL_NAME`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cntrl_btn`
--

INSERT INTO `cntrl_btn` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `CNTRL_NAME`, `PAR_VIEW_ID`, `CNTRL_BTN_COMMENT`) VALUES
(1, '2017-06-29 05:17:31', 'Maged', '2017-06-29 05:17:31', 'Maged', 'Register', 1, 'تسجيل'),
(2, '2017-06-29 05:18:31', 'Maged', '2017-06-29 05:18:31', 'Maged', 'ServicesSearch', 1, 'دور على حرفي'),
(3, '2017-06-29 05:19:40', 'Maged', '2017-06-29 05:19:40', 'Maged', 'Resister', 9, 'تسجيل'),
(4, '2017-06-29 05:20:17', 'Maged', '2017-06-29 05:20:17', 'Maged', 'Search', 2, 'بحث'),
(5, '2017-06-29 05:26:11', 'Maged', '2017-06-29 05:26:11', 'Maged', 'Search', 3, 'بحث'),
(6, '2017-06-29 05:26:41', 'Maged', '2017-06-29 05:26:41', 'Maged', 'Search', 4, 'بحث'),
(7, '2017-06-29 05:27:19', 'Maged', '2017-06-29 05:27:19', 'Maged', 'Search', 5, 'بحث'),
(8, '2017-06-29 05:27:36', 'Maged', '2017-06-29 05:27:36', 'Maged', 'Search', 6, 'بحث'),
(9, '2017-06-29 05:28:02', 'Maged', '2017-06-29 05:28:02', 'Maged', 'Search', 7, 'بحث'),
(10, '2017-06-29 05:28:28', 'Maged', '2017-06-29 05:28:28', 'Maged', 'Search', 8, 'بحث');

-- --------------------------------------------------------

--
-- Table structure for table `cntrl_srch_key_wrd`
--

CREATE TABLE IF NOT EXISTS `cntrl_srch_key_wrd` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `SRCH_KEY_WRD` text,
  `CITY_ID` int(11) DEFAULT NULL,
  `STATE_ID` int(11) DEFAULT NULL,
  `SRCH_SERV_ID` int(11) DEFAULT NULL,
  `COUNTRY_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cntrl_upld`
--

CREATE TABLE IF NOT EXISTS `cntrl_upld` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `UPLD_NAME` varchar(100) NOT NULL,
  `PAR_VIEW_ID` int(11) NOT NULL,
  `CNTRL_UPLD_COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`,`UPLD_NAME`),
  UNIQUE KEY `UPLD_NAME_UNIQUE` (`UPLD_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cntrl_view`
--

CREATE TABLE IF NOT EXISTS `cntrl_view` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `VIEW_NAME` varchar(100) NOT NULL,
  `VIEW_COMMENT` text,
  PRIMARY KEY (`ID`,`VIEW_NAME`),
  UNIQUE KEY `VIEW_NAME_UNIQUE` (`VIEW_NAME`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `cntrl_view`
--

INSERT INTO `cntrl_view` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `VIEW_NAME`, `VIEW_COMMENT`) VALUES
(1, '2017-06-29 05:12:25', 'Maged', '2017-06-29 05:12:25', 'Maged', 'HomePage', 'index.php'),
(2, '2017-06-29 05:12:51', 'Maged', '2017-06-29 05:12:51', 'Maged', 'Services', 'Services.php'),
(3, '2017-06-29 05:13:32', 'Maged', '2017-06-29 05:13:32', 'Maged', 'ServicesSearch', 'servicesSearch.php'),
(4, '2017-06-29 05:13:53', 'Maged', '2017-06-29 05:13:53', 'Maged', 'ServicesSearchCarpentry', 'servicesSearchCarpentry.php'),
(5, '2017-06-29 05:14:14', 'Maged', '2017-06-29 05:14:14', 'Maged', 'ServicesSearchFlooring', 'servicesSearchFlooring.php'),
(6, '2017-06-29 05:14:38', 'Maged', '2017-06-29 05:14:38', 'Maged', 'ServicesSearchMetal', 'servicesSearchMetal.php'),
(7, '2017-06-29 05:14:56', 'Maged', '2017-06-29 05:14:56', 'Maged', 'ServicesSearchPainting', 'servicesSearchPainting.php'),
(8, '2017-06-29 05:15:16', 'Maged', '2017-06-29 05:15:16', 'Maged', 'ServicesSearchPlumping.php', 'servicesSearchPlumping.php'),
(9, '2017-06-29 05:16:03', 'Maged', '2017-06-29 05:16:03', 'Maged', 'RegisterNew', 'Register_new.php');

-- --------------------------------------------------------

--
-- Table structure for table `cont_mthd`
--

CREATE TABLE IF NOT EXISTS `cont_mthd` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `CONT_MTHD_TYPE` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`,`CONT_MTHD_TYPE`),
  UNIQUE KEY `CONT_MTHD_TYPE_UNIQUE` (`CONT_MTHD_TYPE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cst_addr`
--

CREATE TABLE IF NOT EXISTS `cst_addr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(100) NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` varchar(100) NOT NULL,
  `CST_ID` int(11) NOT NULL,
  `ADDR_COMMENT` text,
  `APARTMENT` text,
  `FLOOR_NUMBER` text,
  `BUILDING` text,
  `STREET` text,
  `CITY_ID` int(11) NOT NULL,
  `Zone_ID` int(11) DEFAULT NULL,
  `COUNTRY_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `cst_addr`
--

INSERT INTO `cst_addr` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `CST_ID`, `ADDR_COMMENT`, `APARTMENT`, `FLOOR_NUMBER`, `BUILDING`, `STREET`, `CITY_ID`, `Zone_ID`, `COUNTRY_ID`) VALUES
(4, '2017-05-11 23:14:26', 'GUEST', '2017-05-11 23:14:26', 'GUEST', 19, 'New', '', '', '', '', 1, 1, 1),
(5, '2017-05-13 16:42:28', 'GUEST', '2017-05-13 16:42:28', 'GUEST', 20, 'New', '', '', '', '', 1, 1, 1),
(6, '2017-06-03 18:42:15', 'GUEST', '2017-06-03 18:42:15', 'GUEST', 21, 'New', '', '', '', '', 2, 51, 1),
(7, '2017-06-03 18:48:43', 'GUEST', '2017-06-03 18:48:43', 'GUEST', 22, 'New', '', '', '', '', 3, 88, 1),
(8, '2017-06-03 18:52:30', 'GUEST', '2017-06-03 18:52:30', 'GUEST', 23, 'New', '', '', '', '', 3, 88, 1),
(9, '2017-06-03 18:54:49', 'GUEST', '2017-06-03 18:54:49', 'GUEST', 24, 'New', '', '', '', '', 1, 1, 1),
(10, '2017-06-03 18:56:19', 'GUEST', '2017-06-03 18:56:19', 'GUEST', 25, 'New', '', '', '', '', 3, 88, 1),
(11, '2017-06-03 18:58:39', 'GUEST', '2017-06-03 18:58:39', 'GUEST', 26, 'New', '', '', '', '', 1, 2, 1),
(12, '2017-06-03 19:03:04', 'GUEST', '2017-06-03 19:03:04', 'GUEST', 27, 'New', '', '', '', '', 1, 2, 1),
(13, '2017-06-03 19:04:22', 'GUEST', '2017-06-03 19:04:22', 'GUEST', 28, 'New', '', '', '', '', 3, 88, 1),
(14, '2017-06-03 19:06:43', 'GUEST', '2017-06-03 19:06:43', 'GUEST', 29, 'New', '', '', '', '', 2, 47, 1),
(15, '2017-06-04 23:06:32', 'GUEST', '2017-06-04 23:06:32', 'GUEST', 30, 'New', '', '', '', '', 1, 4, 1),
(16, '2017-06-23 15:06:27', 'GUEST', '2017-06-23 15:06:27', 'GUEST', 31, 'New', '', '', '', '', 1, 4, 1),
(17, '2017-06-30 04:09:06', 'GUEST', '2017-06-30 04:09:06', 'GUEST', 33, 'New', '', '', '', '', 3, 88, 1),
(18, '2017-06-30 04:09:58', 'GUEST', '2017-06-30 04:09:58', 'GUEST', 34, 'New', '', '', '', '', 3, 88, 1),
(19, '2017-06-30 04:11:22', 'GUEST', '2017-06-30 04:11:22', 'GUEST', 35, 'New', '', '', '', '', 3, 88, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cst_cont`
--

CREATE TABLE IF NOT EXISTS `cst_cont` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(100) NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` varchar(100) NOT NULL,
  `CST_ID` int(11) NOT NULL,
  `MOB_NUM` varchar(45) NOT NULL,
  `LL_NUM` varchar(45) DEFAULT NULL,
  `CONT_MTHD_ID` int(11) DEFAULT NULL,
  `CST_NAME` text NOT NULL,
  `NICK_NAME` text,
  `CONT_COMMENT` text,
  `PREFER_CONT_DT_FROM` varchar(45) DEFAULT NULL,
  `PREFER_CONT_DT_TO` varchar(45) DEFAULT NULL,
  `GENDER` varchar(10) DEFAULT NULL,
  `BIRTH_DATE` date DEFAULT NULL,
  PRIMARY KEY (`ID`,`CST_ID`),
  UNIQUE KEY `CST_ID_UNIQUE` (`CST_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `cst_cont`
--

INSERT INTO `cst_cont` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `CST_ID`, `MOB_NUM`, `LL_NUM`, `CONT_MTHD_ID`, `CST_NAME`, `NICK_NAME`, `CONT_COMMENT`, `PREFER_CONT_DT_FROM`, `PREFER_CONT_DT_TO`, `GENDER`, `BIRTH_DATE`) VALUES
(4, '2017-05-11 22:58:34', 'GUEST', '2017-05-11 22:58:34', 'GUEST', 12, 'xwd1s1', '', NULL, 'x11s', 'x1s1', 'New', '', '', 'x1s1', '0000-00-00'),
(5, '2017-05-11 22:58:54', 'GUEST', '2017-05-11 22:58:54', 'GUEST', 13, 'xwd1s1', '', NULL, 'x11s', 'x1s1', 'New', '', '', 'x1s1', '2017-05-11'),
(6, '2017-05-11 23:08:10', 'GUEST', '2017-05-11 23:08:10', 'GUEST', 14, 'xwd1s1', '', NULL, 'x11s', 'x1s1', 'New', '', '', '1', '2017-05-11'),
(7, '2017-05-11 23:10:20', 'GUEST', '2017-05-11 23:10:20', 'GUEST', 15, 'xwd1s1', '', NULL, 'x11s', 'x1s1', 'New', '', '', '1', '2017-05-11'),
(8, '2017-05-11 23:12:00', 'GUEST', '2017-05-11 23:12:00', 'GUEST', 16, 'xwd1s1', '', NULL, 'x11s', 'x1s1', 'New', '', '', '1', '2017-05-11'),
(9, '2017-05-11 23:12:27', 'GUEST', '2017-05-11 23:12:27', 'GUEST', 17, 'xwd1s1', '', NULL, 'x11s', 'x1s1', 'New', '', '', '1', '2017-05-11'),
(10, '2017-05-11 23:13:22', 'GUEST', '2017-05-11 23:13:22', 'GUEST', 18, 'xwd1s1', '', NULL, 'x11s', 'x1s1', 'New', '', '', '1', '2017-05-11'),
(11, '2017-05-11 23:14:26', 'GUEST', '2017-05-11 23:14:26', 'GUEST', 19, 'xwd1s1', '', NULL, 'x11s', 'x1s1', 'New', '', '', '1', '2017-05-11'),
(12, '2017-05-13 16:42:28', 'GUEST', '2017-05-13 16:42:28', 'GUEST', 20, 'xwd1s1', '', NULL, 'sاحمد', 'sاحمد', 'New', '', '', '1', '2017-05-11'),
(13, '2017-06-03 18:42:15', 'GUEST', '2017-06-03 18:42:15', 'GUEST', 21, 'ah.meaged@live.com', '', NULL, 'Ahmed', 'Maged', 'New', '', '', '1', '0000-00-00'),
(14, '2017-06-03 18:48:43', 'GUEST', '2017-06-03 18:48:43', 'GUEST', 22, 'ah.maged@live.com', '', NULL, 'Ahmed Maged Fouad', 'Maged', 'New', '', '', '1', '0000-00-00'),
(15, '2017-06-03 18:52:30', 'GUEST', '2017-06-03 18:52:30', 'GUEST', 23, 'ah.maaged@live.com', '', NULL, 'Ahmed Maged Fouad', 'Maged', 'New', '', '', '1', '1990-02-03'),
(16, '2017-06-03 18:54:49', 'GUEST', '2017-06-03 18:54:49', 'GUEST', 24, 'ah.meaaged@live.com', '', NULL, 'Ahmed Maged Fouad', 'Maged', 'New', '', '', '1', '1970-01-01'),
(17, '2017-06-03 18:56:19', 'GUEST', '2017-06-03 18:56:19', 'GUEST', 25, 'ah@ah.com', '', NULL, 'Maged', 'Maged', 'New', '', '', '1', '1970-01-01'),
(18, '2017-06-03 18:58:39', 'GUEST', '2017-06-03 18:58:39', 'GUEST', 26, 'ahe@ah.com', '', NULL, 'Maged', 'Maged', 'New', '', '', '1', '1970-01-01'),
(19, '2017-06-03 19:03:04', 'GUEST', '2017-06-03 19:03:04', 'GUEST', 27, 'sss@ss.com', '', NULL, 'sss', 'sss', 'New', '', '', '0', '2017-01-01'),
(20, '2017-06-03 19:04:22', 'GUEST', '2017-06-03 19:04:22', 'GUEST', 28, 'maged@live.com', '', NULL, 'Ahmed ', 'Maged', 'New', '', '', '1', '1988-03-26'),
(21, '2017-06-03 19:06:43', 'GUEST', '2017-06-03 19:06:43', 'GUEST', 29, 'ahmedismaiel@live.com', '', NULL, 'Ahmed', 'Shalaby', 'New', '', '', '1', '1991-02-19'),
(22, '2017-06-04 23:06:32', 'GUEST', '2017-06-04 23:06:32', 'GUEST', 30, 'ah@aah.com', '', NULL, 'Ahmed', 'Maged', 'New', '', '', '1', '2013-05-06'),
(23, '2017-06-23 15:06:27', 'GUEST', '2017-06-23 15:06:27', 'GUEST', 31, 'Ah.a@n.com', '', NULL, 'Ahmed', 'Maged', 'New', '', '', '1', '2013-06-05'),
(24, '2017-06-30 04:09:06', 'GUEST', '2017-06-30 04:09:06', 'GUEST', 33, 'ahmed.maged-mohamed@vodafone.com', '', NULL, 'Ahmed Maged Fouad', 'Maged', 'New', '', '', '1', '0000-00-00'),
(25, '2017-06-30 04:09:58', 'GUEST', '2017-06-30 04:09:58', 'GUEST', 34, 'ahmed.maged@vodafone.com', '', NULL, 'Ahmed Maged Fouad', 'Maged', 'New', '', '', '1', '0000-00-00'),
(26, '2017-06-30 04:11:22', 'GUEST', '2017-06-30 04:11:22', 'GUEST', 35, 'ahmed.maged-ahmed@vodafone.com', '', NULL, 'Ahmed Maged Fouad', 'Maged', 'New', '', '', '1', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cst_hit`
--

CREATE TABLE IF NOT EXISTS `cst_hit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `CST_ID` int(11) NOT NULL,
  `BTN_CNT` int(11) DEFAULT NULL,
  `LOGIN_CNT` int(11) DEFAULT NULL,
  `VIEW_CNT` int(11) DEFAULT NULL,
  `UPLD_CNT` int(11) DEFAULT NULL,
  `SRCH_CNT` int(11) DEFAULT NULL,
  `TECH_CNT` int(11) DEFAULT NULL,
  `TOTAL_CNT` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CST_ID_UNIQUE` (`CST_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cst_hit`
--

INSERT INTO `cst_hit` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `CST_ID`, `BTN_CNT`, `LOGIN_CNT`, `VIEW_CNT`, `UPLD_CNT`, `SRCH_CNT`, `TECH_CNT`, `TOTAL_CNT`) VALUES
(1, '2017-06-29 05:58:45', 'Maged', '2017-06-29 05:58:45', 'Maged', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cst_hit_log`
--

CREATE TABLE IF NOT EXISTS `cst_hit_log` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `CST_HIT_ID` int(11) NOT NULL,
  `BTN_ID` int(11) DEFAULT NULL,
  `SRCH_KEY_WRD_ID` int(11) DEFAULT NULL,
  `VIEW_ID` int(11) DEFAULT NULL,
  `UPLD_ID` int(11) DEFAULT NULL,
  `LOGIN_VIEW_ID` int(11) DEFAULT NULL,
  `TECH_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `cst_hit_log`
--

INSERT INTO `cst_hit_log` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `CST_HIT_ID`, `BTN_ID`, `SRCH_KEY_WRD_ID`, `VIEW_ID`, `UPLD_ID`, `LOGIN_VIEW_ID`, `TECH_ID`) VALUES
(1, '2017-06-30 02:20:25', '0', '2017-06-30 02:20:25', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2017-06-30 03:03:39', 'GUEST', '2017-06-30 03:03:39', 'GUEST', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2017-06-30 03:05:09', 'GUEST', '2017-06-30 03:05:09', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(4, '2017-06-30 03:15:36', 'GUEST', '2017-06-30 03:15:36', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(5, '2017-06-30 03:18:55', 'GUEST', '2017-06-30 03:18:55', 'GUEST', 0, 1, NULL, 1, NULL, NULL, NULL),
(6, '2017-06-30 03:19:05', 'GUEST', '2017-06-30 03:19:05', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(7, '2017-06-30 03:19:07', 'GUEST', '2017-06-30 03:19:07', 'GUEST', 0, 1, NULL, 1, NULL, NULL, NULL),
(8, '2017-06-30 03:21:37', 'GUEST', '2017-06-30 03:21:37', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(9, '2017-06-30 03:21:52', 'GUEST', '2017-06-30 03:21:52', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(10, '2017-06-30 03:23:34', 'GUEST', '2017-06-30 03:23:34', 'GUEST', 0, 1, NULL, 1, NULL, NULL, NULL),
(11, '2017-06-30 03:26:01', 'GUEST', '2017-06-30 03:26:01', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(12, '2017-06-30 03:35:54', 'GUEST', '2017-06-30 03:35:54', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(13, '2017-06-30 03:41:42', 'GUEST', '2017-06-30 03:41:42', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(14, '2017-06-30 03:42:33', 'GUEST', '2017-06-30 03:42:33', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(15, '2017-06-30 03:43:12', 'GUEST', '2017-06-30 03:43:12', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(16, '2017-06-30 03:44:30', 'GUEST', '2017-06-30 03:44:30', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(17, '2017-06-30 03:44:47', 'GUEST', '2017-06-30 03:44:47', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(18, '2017-06-30 03:45:30', 'GUEST', '2017-06-30 03:45:30', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(19, '2017-06-30 03:45:37', 'GUEST', '2017-06-30 03:45:37', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(20, '2017-06-30 03:45:46', 'GUEST', '2017-06-30 03:45:46', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(21, '2017-06-30 03:46:13', 'GUEST', '2017-06-30 03:46:13', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(22, '2017-06-30 03:46:30', 'GUEST', '2017-06-30 03:46:30', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(23, '2017-06-30 03:48:55', 'GUEST', '2017-06-30 03:48:55', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(24, '2017-06-30 03:49:08', 'GUEST', '2017-06-30 03:49:08', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(25, '2017-06-30 03:49:15', 'GUEST', '2017-06-30 03:49:15', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(26, '2017-06-30 03:49:50', 'GUEST', '2017-06-30 03:49:50', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(27, '2017-06-30 03:52:24', 'GUEST', '2017-06-30 03:52:24', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(28, '2017-06-30 03:53:50', 'GUEST', '2017-06-30 03:53:50', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(29, '2017-06-30 04:01:16', 'GUEST', '2017-06-30 04:01:16', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(30, '2017-06-30 03:10:44', 'GUEST', '2017-06-30 03:10:44', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(31, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(32, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(33, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(34, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(35, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(36, '2017-06-30 03:28:30', 'GUEST', '2017-06-30 03:28:30', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(37, '2017-06-30 03:30:39', 'GUEST', '2017-06-30 03:30:39', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(38, '2017-06-30 03:32:39', 'GUEST', '2017-06-30 03:32:39', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(39, '2017-06-30 03:32:42', 'GUEST', '2017-06-30 03:32:42', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(40, '2017-06-30 03:36:21', 'GUEST', '2017-06-30 03:36:21', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(41, '2017-06-30 03:36:24', 'GUEST', '2017-06-30 03:36:24', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(42, '2017-06-30 03:37:50', 'GUEST', '2017-06-30 03:37:50', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(43, '2017-06-30 03:44:44', 'GUEST', '2017-06-30 03:44:44', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(44, '2017-06-30 03:44:49', 'GUEST', '2017-06-30 03:44:49', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(45, '2017-06-30 03:46:50', 'GUEST', '2017-06-30 03:46:50', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(46, '2017-06-30 03:46:54', 'GUEST', '2017-06-30 03:46:54', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(47, '2017-06-30 03:47:02', 'GUEST', '2017-06-30 03:47:02', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(48, '2017-06-30 03:48:18', 'GUEST', '2017-06-30 03:48:18', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(49, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(50, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(51, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(52, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 0, 1, NULL, 1, NULL, NULL, NULL),
(53, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 0, 1, NULL, 1, NULL, NULL, NULL),
(54, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 0, 1, NULL, 1, NULL, NULL, NULL),
(55, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(56, '2017-06-30 04:04:40', 'GUEST', '2017-06-30 04:04:40', 'GUEST', 0, NULL, NULL, 1, NULL, NULL, NULL),
(57, '2017-06-30 04:04:43', 'GUEST', '2017-06-30 04:04:43', 'GUEST', 0, 1, NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cst_offr`
--

CREATE TABLE IF NOT EXISTS `cst_offr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `CST_ID` int(11) NOT NULL,
  `OFFR_ID` int(11) NOT NULL,
  `START_DT` datetime NOT NULL,
  `END_DT` datetime DEFAULT NULL,
  `CST_OFFR_STAT` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`,`CST_ID`),
  UNIQUE KEY `CST_ID_UNIQUE` (`CST_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cst_profile`
--

CREATE TABLE IF NOT EXISTS `cst_profile` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(100) NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` varchar(100) NOT NULL,
  `CST_STAT` varchar(45) NOT NULL,
  `CST_HIT_ID` int(11) DEFAULT NULL,
  `CST_SGMNT_ID` int(11) DEFAULT NULL,
  `CST_GRP_ID` int(11) DEFAULT NULL,
  `CST_TYPE_ID` int(11) DEFAULT NULL,
  `CST_LOY_ID` int(11) DEFAULT NULL,
  `CST_PROFILE_COMMENT` text,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`email`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `cst_profile`
--

INSERT INTO `cst_profile` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `CST_STAT`, `CST_HIT_ID`, `CST_SGMNT_ID`, `CST_GRP_ID`, `CST_TYPE_ID`, `CST_LOY_ID`, `CST_PROFILE_COMMENT`, `email`) VALUES
(4, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', NULL, NULL, NULL, NULL, NULL, '', ''),
(31, '2017-06-23 15:06:27', 'GUEST', '2017-06-23 15:06:27', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'Ah.a@n.com'),
(23, '2017-06-03 18:52:30', 'GUEST', '2017-06-03 18:52:30', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'ah.maaged@live.com'),
(22, '2017-06-03 18:48:43', 'GUEST', '2017-06-03 18:48:43', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'ah.maged@live.com'),
(24, '2017-06-03 18:54:49', 'GUEST', '2017-06-03 18:54:49', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'ah.meaaged@live.com'),
(21, '2017-06-03 18:42:15', 'GUEST', '2017-06-03 18:42:15', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'ah.meaged@live.com'),
(30, '2017-06-04 23:06:32', 'GUEST', '2017-06-04 23:06:32', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'ah@aah.com'),
(25, '2017-06-03 18:56:19', 'GUEST', '2017-06-03 18:56:19', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'ah@ah.com'),
(26, '2017-06-03 18:58:39', 'GUEST', '2017-06-03 18:58:39', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'ahe@ah.com'),
(35, '2017-06-30 04:11:22', 'GUEST', '2017-06-30 04:11:22', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'ahmed.maged-ahmed@vodafone.com'),
(33, '2017-06-30 04:09:06', 'GUEST', '2017-06-30 04:09:06', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'ahmed.maged-mohamed@vodafone.com'),
(34, '2017-06-30 04:09:58', 'GUEST', '2017-06-30 04:09:58', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'ahmed.maged@vodafone.com'),
(29, '2017-06-03 19:06:43', 'GUEST', '2017-06-03 19:06:43', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'ahmedismaiel@live.com'),
(20, '2017-05-13 16:42:28', 'GUEST', '2017-05-13 16:42:28', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'emaisl1eewed'),
(32, '2017-06-29 06:01:44', 'Maged', '2017-06-29 06:01:44', 'Maged', 'SYSTEM', 0, 0, 0, NULL, NULL, 'UEST USER -> SYSTEM', 'GUESTUSER@SYSTEM'),
(28, '2017-06-03 19:04:22', 'GUEST', '2017-06-03 19:04:22', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'maged@live.com'),
(27, '2017-06-03 19:03:04', 'GUEST', '2017-06-03 19:03:04', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'sss@ss.com'),
(5, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'test'),
(6, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'test2'),
(7, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'x1'),
(8, '2017-05-11 22:41:55', 'GUEST', '2017-05-11 22:41:55', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'x11'),
(9, '0000-00-00 00:00:00', 'GUEST', '0000-00-00 00:00:00', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'x1s1'),
(12, '2017-05-11 22:58:34', 'GUEST', '2017-05-11 22:58:34', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'xss1s1'),
(13, '2017-05-11 22:58:54', 'GUEST', '2017-05-11 22:58:54', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'xssss1s1'),
(19, '2017-05-11 23:14:26', 'GUEST', '2017-05-11 23:14:26', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'xsssweedddddds1s1'),
(18, '2017-05-11 23:13:22', 'GUEST', '2017-05-11 23:13:22', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'xsssweeddddds1s1'),
(17, '2017-05-11 23:12:27', 'GUEST', '2017-05-11 23:12:27', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'xsssweedddds1s1'),
(16, '2017-05-11 23:12:00', 'GUEST', '2017-05-11 23:12:00', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'xsssweeddds1s1'),
(15, '2017-05-11 23:10:20', 'GUEST', '2017-05-11 23:10:20', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'xssswees1s1'),
(14, '2017-05-11 23:08:10', 'GUEST', '2017-05-11 23:08:10', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'xsssws1s1'),
(10, '2017-05-11 22:43:29', 'GUEST', '2017-05-11 22:43:29', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'xw1s1'),
(11, '2017-05-11 22:50:43', 'GUEST', '2017-05-11 22:50:43', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 'New', 'xwd1s1');

-- --------------------------------------------------------

--
-- Table structure for table `cst_sgmnt`
--

CREATE TABLE IF NOT EXISTS `cst_sgmnt` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `SGMNT_NAME` varchar(100) NOT NULL,
  `SGMNT_STAT` varchar(45) NOT NULL,
  `SGMNT_START_DT` datetime NOT NULL,
  `SGMNT_END_DT` datetime DEFAULT NULL,
  `SGMNT_COMMENT` text,
  PRIMARY KEY (`ID`,`SGMNT_NAME`),
  UNIQUE KEY `SGMNT_NAME_UNIQUE` (`SGMNT_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cst_tech_req`
--

CREATE TABLE IF NOT EXISTS `cst_tech_req` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `CST_ID` int(11) NOT NULL,
  `SERV_ID` int(11) NOT NULL,
  `TECH_ID` int(11) DEFAULT NULL,
  `PRICE_FROM` int(11) DEFAULT '0',
  `PRICE_TO` int(11) DEFAULT '0',
  `CITY_ID` int(11) NOT NULL,
  `STATE_ID` int(11) NOT NULL,
  `COUNTRY_ID` int(11) NOT NULL,
  `REQ_STAT` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cst_tech_req_log`
--

CREATE TABLE IF NOT EXISTS `cst_tech_req_log` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `CST_TECH_REQ_ID` int(11) NOT NULL,
  `TECH_ID` int(11) NOT NULL,
  `TECH_REQ_APPRV` varchar(45) DEFAULT NULL,
  `TECH_REQ_APPRV_DT` datetime DEFAULT NULL,
  `END_DT` datetime NOT NULL,
  `TECH_REQ_APPRV_PRICE` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`,`CST_TECH_REQ_ID`),
  UNIQUE KEY `CST_TECH_REQ_ID_UNIQUE` (`CST_TECH_REQ_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cst_usr`
--

CREATE TABLE IF NOT EXISTS `cst_usr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(100) NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` varchar(100) NOT NULL,
  `CST_ID` int(11) NOT NULL,
  `USR_STAT` varchar(45) NOT NULL,
  `USR_NAME` varchar(45) NOT NULL,
  `PSWD` text NOT NULL,
  PRIMARY KEY (`ID`,`USR_NAME`),
  UNIQUE KEY `CST_ID_UNIQUE` (`CST_ID`),
  UNIQUE KEY `USR_NAME_UNIQUE` (`USR_NAME`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `cst_usr`
--

INSERT INTO `cst_usr` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `CST_ID`, `USR_STAT`, `USR_NAME`, `PSWD`) VALUES
(4, '2017-05-11 22:50:43', 'GUEST', '2017-05-11 22:50:43', 'GUEST', 11, 'New', 'xwd1s1', 'x1s1'),
(5, '2017-05-11 22:58:34', 'GUEST', '2017-05-11 22:58:34', 'GUEST', 12, 'New', 'xss1s1', 'x1s1'),
(6, '2017-05-11 22:58:54', 'GUEST', '2017-05-11 22:58:54', 'GUEST', 13, 'New', 'xssss1s1', 'x1s1'),
(7, '2017-05-11 23:08:10', 'GUEST', '2017-05-11 23:08:10', 'GUEST', 14, 'New', 'xsssws1s1', 'x1s1'),
(8, '2017-05-11 23:10:20', 'GUEST', '2017-05-11 23:10:20', 'GUEST', 15, 'New', 'xssswees1s1', 'x1s1'),
(9, '2017-05-11 23:12:00', 'GUEST', '2017-05-11 23:12:00', 'GUEST', 16, 'New', 'xsssweeddds1s1', 'x1s1'),
(10, '2017-05-11 23:12:27', 'GUEST', '2017-05-11 23:12:27', 'GUEST', 17, 'New', 'xsssweedddds1s1', 'x1s1'),
(11, '2017-05-11 23:13:22', 'GUEST', '2017-05-11 23:13:22', 'GUEST', 18, 'New', 'xsssweeddddds1s1', 'x1s1'),
(12, '2017-05-11 23:14:26', 'GUEST', '2017-05-11 23:14:26', 'GUEST', 19, 'New', 'xsssweedddddds1s1', 'x1s1'),
(13, '2017-05-13 16:42:28', 'GUEST', '2017-05-13 16:42:28', 'GUEST', 20, 'New', 'emaisl1eewed', 'x1s1'),
(14, '2017-06-03 18:42:15', 'GUEST', '2017-06-03 18:42:15', 'GUEST', 21, 'New', 'ah.meaged@live.com', 'deddd'),
(15, '2017-06-03 18:48:43', 'GUEST', '2017-06-03 18:48:43', 'GUEST', 22, 'New', 'ah.maged@live.com', '123456'),
(16, '2017-06-03 18:52:30', 'GUEST', '2017-06-03 18:52:30', 'GUEST', 23, 'New', 'ah.maaged@live.com', '123456'),
(17, '2017-06-03 18:54:49', 'GUEST', '2017-06-03 18:54:49', 'GUEST', 24, 'New', 'ah.meaaged@live.com', 'eeeee'),
(18, '2017-06-03 18:56:19', 'GUEST', '2017-06-03 18:56:19', 'GUEST', 25, 'New', 'ah@ah.com', 'Maged'),
(19, '2017-06-03 18:58:39', 'GUEST', '2017-06-03 18:58:39', 'GUEST', 26, 'New', 'ahe@ah.com', 'eeeeeee'),
(20, '2017-06-03 19:03:04', 'GUEST', '2017-06-03 19:03:04', 'GUEST', 27, 'New', 'sss@ss.com', '212'),
(21, '2017-06-03 19:04:22', 'GUEST', '2017-06-03 19:04:22', 'GUEST', 28, 'New', 'maged@live.com', '12346'),
(22, '2017-06-03 19:06:43', 'GUEST', '2017-06-03 19:06:43', 'GUEST', 29, 'New', 'ahmedismaiel@live.com', 'CYV-orC-7SQ-C4J'),
(23, '2017-06-04 23:06:32', 'GUEST', '2017-06-04 23:06:32', 'GUEST', 30, 'New', 'ah@aah.com', 't'),
(24, '2017-06-23 15:06:27', 'GUEST', '2017-06-23 15:06:27', 'GUEST', 31, 'New', 'Ah.a@n.com', '123456'),
(25, '2017-06-30 04:09:06', 'GUEST', '2017-06-30 04:09:06', 'GUEST', 33, 'New', 'ahmed.maged-mohamed@vodafone.com', '123456'),
(26, '2017-06-30 04:09:58', 'GUEST', '2017-06-30 04:09:58', 'GUEST', 34, 'New', 'ahmed.maged@vodafone.com', '123456'),
(27, '2017-06-30 04:11:22', 'GUEST', '2017-06-30 04:11:22', 'GUEST', 35, 'New', 'ahmed.maged-ahmed@vodafone.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `customer_data`
--

CREATE TABLE IF NOT EXISTS `customer_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_first_name` varchar(45) NOT NULL,
  `c_last_name` varchar(45) NOT NULL,
  `c_age` varchar(45) NOT NULL,
  `c_email` varchar(45) DEFAULT NULL,
  `c_mobile` int(11) DEFAULT NULL,
  `c_gender` varchar(45) DEFAULT NULL,
  `c_city` varchar(45) DEFAULT NULL,
  `c_zone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gndr`
--

CREATE TABLE IF NOT EXISTS `gndr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `GNDR_NAME` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`,`GNDR_NAME`),
  UNIQUE KEY `GNDR_NAME_UNIQUE` (`GNDR_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grp`
--

CREATE TABLE IF NOT EXISTS `grp` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `GRP_NAME` varchar(100) NOT NULL,
  `GRP_STAT` varchar(45) NOT NULL,
  `GRP_START_DT` datetime NOT NULL,
  `GRP_END_DT` datetime DEFAULT NULL,
  `GRP_COMMENT` text,
  PRIMARY KEY (`ID`,`GRP_NAME`),
  UNIQUE KEY `GRP_NAME_UNIQUE` (`GRP_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loy`
--

CREATE TABLE IF NOT EXISTS `loy` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `CST_ID` int(11) NOT NULL,
  `CST_HIT_ID` int(11) DEFAULT NULL,
  `CST_SGMNT_ID` int(11) NOT NULL,
  `GCST_GRP_ID` int(11) NOT NULL,
  `CST_TYPE_ID` int(11) NOT NULL,
  `LOY_PRG_ID` int(11) NOT NULL,
  `ENRLMNT_DT` datetime NOT NULL,
  `LOY_STAT` datetime NOT NULL,
  `LOY_END_DT` datetime DEFAULT NULL,
  `LOY_COMMENT` text,
  PRIMARY KEY (`ID`,`CST_ID`),
  UNIQUE KEY `CST_ID_UNIQUE` (`CST_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loy_prg`
--

CREATE TABLE IF NOT EXISTS `loy_prg` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `LOY_PRG_NAME` varchar(100) NOT NULL,
  `LOY_PRG_STAT` varchar(45) NOT NULL,
  `LOY_PRG_SATRT_DT` datetime NOT NULL,
  `LOY_PRG_END_DT` datetime DEFAULT NULL,
  `LOY_PRG_COMMENT` text,
  PRIMARY KEY (`ID`,`LOY_PRG_NAME`),
  UNIQUE KEY `LOY_PRG_NAME_UNIQUE` (`LOY_PRG_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `offr`
--

CREATE TABLE IF NOT EXISTS `offr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `OFFR_NAME` varchar(100) NOT NULL,
  `OFFR_STAT` varchar(45) NOT NULL,
  `OFFR_SART_DT` datetime NOT NULL,
  `OFFR_END_DT` datetime DEFAULT NULL,
  `OFFR_COMMENT` text,
  PRIMARY KEY (`ID`,`OFFR_NAME`),
  UNIQUE KEY `OFFR_NAME_UNIQUE` (`OFFR_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `privilige`
--

CREATE TABLE IF NOT EXISTS `privilige` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `ADM_USR_ID` int(11) NOT NULL,
  `PRIVLEGE_TYPE` text NOT NULL,
  `PRIVLEGE_TYPE_COMMENT` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `serv`
--

CREATE TABLE IF NOT EXISTS `serv` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `SERV_NAME` text,
  `SERV_TYPE` text,
  `PRICE_FROM` int(11) DEFAULT '0',
  `PRICE_TO` int(11) DEFAULT '0',
  `SERV_RATE` int(11) DEFAULT '0',
  `SERV_TECH_CNT` int(11) DEFAULT '0',
  `SERV_STAT` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `serv`
--

INSERT INTO `serv` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `SERV_NAME`, `SERV_TYPE`, `PRICE_FROM`, `PRICE_TO`, `SERV_RATE`, `SERV_TECH_CNT`, `SERV_STAT`) VALUES
(1, '2017-06-25 18:09:32', 'GUEST', '2017-06-25 18:09:32', 'GUEST', 'سباكة', NULL, 0, 0, 0, 0, 'Active'),
(2, '2017-06-25 18:10:07', 'GUEST', '2017-06-25 18:10:07', 'GUEST', 'نجارة', NULL, 0, 0, 0, 0, 'Active'),
(3, '2017-06-25 18:10:45', 'GUEST', '2017-06-25 18:10:45', 'GUEST', 'الدهانات والواجهات', NULL, 0, 0, 0, 0, 'Active'),
(4, '2017-06-25 18:11:12', 'GUEST', '2017-06-25 18:11:12', 'GUEST', 'الأرضيات والتركيبات', NULL, 0, 0, 0, 0, 'Active'),
(5, '2017-06-25 18:11:38', 'GUEST', '2017-06-25 18:11:38', 'GUEST', 'الحداده', NULL, 0, 0, 0, 0, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `spnsr`
--

CREATE TABLE IF NOT EXISTS `spnsr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `SPNSR_NAME` text NOT NULL,
  `INDSTRY` text NOT NULL,
  `MOB_NUM` varchar(45) NOT NULL,
  `CONT_PRSN_NAME` text NOT NULL,
  `ADDR` text NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `LL_NUM` varchar(45) DEFAULT NULL,
  `SPNSR_CONTR_START_DT` datetime NOT NULL,
  `SPNSR_CONTR_END_DT` datetime DEFAULT NULL,
  `SPNSR_COMMENT` text,
  PRIMARY KEY (`ID`,`EMAIL`),
  UNIQUE KEY `EMAIL_UNIQUE` (`EMAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tech_addr`
--

CREATE TABLE IF NOT EXISTS `tech_addr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(50) NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` varchar(50) NOT NULL,
  `TECH_ID` int(11) NOT NULL,
  `ADDR_COMMENT` text,
  `APARTMENT` text,
  `FLOOR` text,
  `BUILDING` text,
  `STREET` text,
  `CITY_ID` int(11) NOT NULL,
  `ZONE_ID` int(11) DEFAULT NULL,
  `COUNTRY_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`,`TECH_ID`),
  UNIQUE KEY `TECH_ID_UNIQUE` (`TECH_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tech_addr`
--

INSERT INTO `tech_addr` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `TECH_ID`, `ADDR_COMMENT`, `APARTMENT`, `FLOOR`, `BUILDING`, `STREET`, `CITY_ID`, `ZONE_ID`, `COUNTRY_ID`) VALUES
(1, '2017-06-25 18:17:39', 'GUEST', '2017-06-25 18:17:39', 'GUEST', 1, 'New', '', '', '', '', 3, 92, 1),
(2, '2017-06-25 19:27:35', 'GUEST', '2017-06-25 19:27:35', 'GUEST', 2, 'New', '', '', '', '', 3, 106, 1),
(3, '2017-06-25 19:28:46', 'GUEST', '2017-06-25 19:28:46', 'GUEST', 3, 'New', '', '', '', '', 3, 83, 1),
(4, '2017-06-25 20:23:40', 'GUEST', '2017-06-25 20:23:40', 'GUEST', 4, 'New', '', '', '', '', 2, 65, 1),
(5, '2017-06-25 20:25:24', 'GUEST', '2017-06-25 20:25:24', 'GUEST', 5, 'New', '', '', '', '', 3, 111, 1),
(6, '2017-06-25 20:26:32', 'GUEST', '2017-06-25 20:26:32', 'GUEST', 6, 'New', '', '', '', '', 2, 62, 1),
(7, '2017-06-25 20:27:26', 'GUEST', '2017-06-25 20:27:26', 'GUEST', 7, 'New', '', '', '', '', 3, 92, 1),
(8, '2017-06-25 20:30:01', 'GUEST', '2017-06-25 20:30:01', 'GUEST', 8, 'New', '', '', '', '', 3, 87, 1),
(9, '2017-06-25 20:37:51', 'GUEST', '2017-06-25 20:37:51', 'GUEST', 9, 'New', '', '', '', '', 3, 84, 1),
(10, '2017-06-25 21:00:29', 'GUEST', '2017-06-25 21:00:29', 'GUEST', 10, 'New', '', '', '', '', 2, 56, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tech_cont`
--

CREATE TABLE IF NOT EXISTS `tech_cont` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(50) NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` varchar(50) NOT NULL,
  `TECH_ID` int(11) NOT NULL,
  `MOB_NUM` varchar(45) NOT NULL,
  `LL_NUM` varchar(45) DEFAULT NULL,
  `CONT_MTHD_ID` int(11) DEFAULT NULL,
  `TEC_NAME` text NOT NULL,
  `MID_NAME` text,
  `LST_NAME` text,
  `NICK_NAME` text,
  `CONT_COMMENT` text,
  `GENDER_ID` int(11) DEFAULT NULL,
  `BIRTH_DATE` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`,`TECH_ID`),
  UNIQUE KEY `TECH_ID_UNIQUE` (`TECH_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tech_cont`
--

INSERT INTO `tech_cont` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `TECH_ID`, `MOB_NUM`, `LL_NUM`, `CONT_MTHD_ID`, `TEC_NAME`, `MID_NAME`, `LST_NAME`, `NICK_NAME`, `CONT_COMMENT`, `GENDER_ID`, `BIRTH_DATE`) VALUES
(1, '2017-06-25 18:17:39', 'GUEST', '2017-06-25 18:17:39', 'GUEST', 1, 'tech@tech.com', '', NULL, 'Ahmed Maged', '', '', 'Maged', 'New', NULL, '17-02-1987'),
(2, '2017-06-25 19:27:35', 'GUEST', '2017-06-25 19:27:35', 'GUEST', 2, 'ahmed.mohamed@gmail.com', '', NULL, 'محمد احمد', '', '', 'حمادة', 'New', NULL, '26-03-1982'),
(3, '2017-06-25 19:28:46', 'GUEST', '2017-06-25 19:28:46', 'GUEST', 3, 'rafik.maher@gmail.com', '', NULL, 'رفيق ماهر', '', '', 'رفيق', 'New', NULL, '21-08-1985'),
(4, '2017-06-25 20:23:40', 'GUEST', '2017-06-25 20:23:40', 'GUEST', 4, 'rafik.awad@gmail.com', '', NULL, 'رفيق ماهر عوض', '', '', 'رفيق', 'New', NULL, '21-08-1989'),
(5, '2017-06-25 20:25:24', 'GUEST', '2017-06-25 20:25:24', 'GUEST', 5, 'rafik.kamel@gmail.com', '', NULL, 'كامل عوض', '', '', 'رفيق', 'New', NULL, '17-09-1979'),
(6, '2017-06-25 20:26:32', 'GUEST', '2017-06-25 20:26:32', 'GUEST', 6, 'ali.saleh@live.com', '', NULL, 'علي صالح', '', '', 'الاسطى حمادة', 'New', NULL, '19-12-1981'),
(7, '2017-06-25 20:27:26', 'GUEST', '2017-06-25 20:27:26', 'GUEST', 7, 'ali@yahoo.com', '', NULL, 'علي صالح علي صالح', '', '', 'حمادة', 'New', NULL, '2-01-1966'),
(8, '2017-06-25 20:30:01', 'GUEST', '2017-06-25 20:30:01', 'GUEST', 8, 'sherief_anwar_2010@gmail.com', '', NULL, 'شريف انور', '', '', 'انور', 'New', NULL, '19-02-1972'),
(9, '2017-06-25 20:37:51', 'GUEST', '2017-06-25 20:37:51', 'GUEST', 9, 'sherief_she@gmail.com', '', NULL, 'شريف شريف ', '', '', 'شريف ', 'New', NULL, '13-05-1976'),
(10, '2017-06-25 21:00:29', 'GUEST', '2017-06-25 21:00:29', 'GUEST', 10, 'ahmed_5555@gmail.com', '', NULL, 'احمد شريف ', '', '', 'شريف ', 'New', NULL, '15-04-1981');

-- --------------------------------------------------------

--
-- Table structure for table `tech_email`
--

CREATE TABLE IF NOT EXISTS `tech_email` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `TECH_ID` int(11) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`,`TECH_ID`,`EMAIL`),
  UNIQUE KEY `TECH_ID_UNIQUE` (`TECH_ID`),
  UNIQUE KEY `EMAIL_UNIQUE` (`EMAIL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tech_email`
--

INSERT INTO `tech_email` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `TECH_ID`, `EMAIL`) VALUES
(1, '2017-06-25 18:17:39', 'GUEST', '2017-06-25 18:17:39', 'GUEST', 1, 'tech@tech.com'),
(2, '2017-06-25 19:27:35', 'GUEST', '2017-06-25 19:27:35', 'GUEST', 2, 'ahmed.mohamed@gmail.com'),
(3, '2017-06-25 19:28:46', 'GUEST', '2017-06-25 19:28:46', 'GUEST', 3, 'rafik.maher@gmail.com'),
(4, '2017-06-25 20:23:40', 'GUEST', '2017-06-25 20:23:40', 'GUEST', 4, 'rafik.awad@gmail.com'),
(5, '2017-06-25 20:25:24', 'GUEST', '2017-06-25 20:25:24', 'GUEST', 5, 'rafik.kamel@gmail.com'),
(6, '2017-06-25 20:26:32', 'GUEST', '2017-06-25 20:26:32', 'GUEST', 6, 'ali.saleh@live.com'),
(7, '2017-06-25 20:27:26', 'GUEST', '2017-06-25 20:27:26', 'GUEST', 7, 'ali@yahoo.com'),
(8, '2017-06-25 20:30:01', 'GUEST', '2017-06-25 20:30:01', 'GUEST', 8, 'sherief_anwar_2010@gmail.com'),
(9, '2017-06-25 20:37:51', 'GUEST', '2017-06-25 20:37:51', 'GUEST', 9, 'sherief_she@gmail.com'),
(10, '2017-06-25 21:00:29', 'GUEST', '2017-06-25 21:00:29', 'GUEST', 10, 'ahmed_5555@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tech_hit`
--

CREATE TABLE IF NOT EXISTS `tech_hit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `TECH_ID` int(11) NOT NULL,
  `BTN_CNT` int(11) DEFAULT NULL,
  `LOGIN_CNT` int(11) DEFAULT NULL,
  `VIEW_CNT` int(11) DEFAULT NULL,
  `UPLD_CNT` int(11) DEFAULT NULL,
  `SRCH_CNT` int(11) DEFAULT NULL,
  `TOTAL_CNT` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`,`TECH_ID`),
  UNIQUE KEY `TECH_ID_UNIQUE` (`TECH_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tech_hit_log`
--

CREATE TABLE IF NOT EXISTS `tech_hit_log` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `TECH_HIT_ID` int(11) NOT NULL,
  `BTN_ID` int(11) DEFAULT NULL,
  `SRCH_KEY_WRD_ID` int(11) DEFAULT NULL,
  `VIEW_ID` int(11) DEFAULT NULL,
  `UPLD_ID` int(11) DEFAULT NULL,
  `LOGIN_VIEW_ID` int(11) DEFAULT NULL,
  `CST_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tech_jobs`
--

CREATE TABLE IF NOT EXISTS `tech_jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(50) NOT NULL,
  PRIMARY KEY (`job_name`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `tech_offr`
--

CREATE TABLE IF NOT EXISTS `tech_offr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `TECH_ID` int(11) NOT NULL,
  `OFFR_ID` int(11) NOT NULL,
  `START_DT` datetime NOT NULL,
  `END_DT` datetime DEFAULT NULL,
  `TECH_OFFR_STAT` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`,`TECH_ID`),
  UNIQUE KEY `TECH_ID_UNIQUE` (`TECH_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tech_profile`
--

CREATE TABLE IF NOT EXISTS `tech_profile` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(50) NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` varchar(50) NOT NULL,
  `TECH_STAT` varchar(45) NOT NULL,
  `TECH_HIT_ID` int(11) DEFAULT NULL,
  `TECH_SGMNT_ID` int(11) DEFAULT NULL,
  `TECH_GRP_ID` int(11) DEFAULT NULL,
  `TECH_TYPE_ID` int(11) DEFAULT NULL,
  `TECH_LOY_ID` int(11) DEFAULT NULL,
  `SERV_ID` int(11) DEFAULT NULL,
  `TECH_PROFILE_COMMENT` text,
  `TECH_PRICE_AVG` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tech_profile`
--

INSERT INTO `tech_profile` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `TECH_STAT`, `TECH_HIT_ID`, `TECH_SGMNT_ID`, `TECH_GRP_ID`, `TECH_TYPE_ID`, `TECH_LOY_ID`, `SERV_ID`, `TECH_PROFILE_COMMENT`, `TECH_PRICE_AVG`, `email`) VALUES
(1, '2017-06-25 18:17:39', 'GUEST', '2017-06-25 18:17:39', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 3, 'New', NULL, 'tech@tech.com'),
(2, '2017-06-25 19:27:35', 'GUEST', '2017-06-25 19:27:35', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 2, 'New', NULL, 'ahmed.mohamed@gmail.com'),
(3, '2017-06-25 19:28:46', 'GUEST', '2017-06-25 19:28:46', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 5, 'New', NULL, 'rafik.maher@gmail.com'),
(4, '2017-06-25 20:23:40', 'GUEST', '2017-06-25 20:23:40', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 4, 'New', NULL, 'rafik.awad@gmail.com'),
(5, '2017-06-25 20:25:24', 'GUEST', '2017-06-25 20:25:24', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 1, 'New', NULL, 'rafik.kamel@gmail.com'),
(6, '2017-06-25 20:26:32', 'GUEST', '2017-06-25 20:26:32', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 3, 'New', NULL, 'ali.saleh@live.com'),
(7, '2017-06-25 20:27:26', 'GUEST', '2017-06-25 20:27:26', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 4, 'New', NULL, 'ali@yahoo.com'),
(8, '2017-06-25 20:30:01', 'GUEST', '2017-06-25 20:30:01', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 5, 'New', NULL, 'sherief_anwar_2010@gmail.com'),
(9, '2017-06-25 20:37:51', 'GUEST', '2017-06-25 20:37:51', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 1, 'New', NULL, 'sherief_she@gmail.com'),
(10, '2017-06-25 21:00:29', 'GUEST', '2017-06-25 21:00:29', 'GUEST', 'New', NULL, NULL, NULL, NULL, NULL, 4, 'New', NULL, 'ahmed_5555@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tech_usr`
--

CREATE TABLE IF NOT EXISTS `tech_usr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(50) NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` varchar(50) DEFAULT NULL,
  `TECH_ID` int(11) NOT NULL,
  `TECH_USR_NAME` varchar(100) NOT NULL,
  `TECH_PSWD` varchar(45) NOT NULL,
  `TECH_USR_STAT` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `TECH_ID_UNIQUE` (`TECH_ID`),
  UNIQUE KEY `TECH_USR_NAME_UNIQUE` (`TECH_USR_NAME`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tech_usr`
--

INSERT INTO `tech_usr` (`ID`, `CREATED`, `CREATED_BY`, `LAST_UPD`, `LAST_UPD_BY`, `TECH_ID`, `TECH_USR_NAME`, `TECH_PSWD`, `TECH_USR_STAT`) VALUES
(1, '2017-06-25 18:17:39', 'GUEST', '2017-06-25 18:17:39', 'GUEST', 1, 'tech@tech.com', '123', 'New'),
(2, '2017-06-25 19:27:35', 'GUEST', '2017-06-25 19:27:35', 'GUEST', 2, 'ahmed.mohamed@gmail.com', '123', 'New'),
(3, '2017-06-25 19:28:46', 'GUEST', '2017-06-25 19:28:46', 'GUEST', 3, 'rafik.maher@gmail.com', '123', 'New'),
(4, '2017-06-25 20:23:40', 'GUEST', '2017-06-25 20:23:40', 'GUEST', 4, 'rafik.awad@gmail.com', '123', 'New'),
(5, '2017-06-25 20:25:24', 'GUEST', '2017-06-25 20:25:24', 'GUEST', 5, 'rafik.kamel@gmail.com', '123', 'New'),
(6, '2017-06-25 20:26:32', 'GUEST', '2017-06-25 20:26:32', 'GUEST', 6, 'ali.saleh@live.com', '123', 'New'),
(7, '2017-06-25 20:27:26', 'GUEST', '2017-06-25 20:27:26', 'GUEST', 7, 'ali@yahoo.com', '123', 'New'),
(8, '2017-06-25 20:30:01', 'GUEST', '2017-06-25 20:30:01', 'GUEST', 8, 'sherief_anwar_2010@gmail.com', '123', 'New'),
(9, '2017-06-25 20:37:51', 'GUEST', '2017-06-25 20:37:51', 'GUEST', 9, 'sherief_she@gmail.com', '123', 'New'),
(10, '2017-06-25 21:00:29', 'GUEST', '2017-06-25 21:00:29', 'GUEST', 10, 'ahmed_5555@gmail.com', '123', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `TYPE_NAME` varchar(100) NOT NULL,
  `TYPE_STAT` varchar(45) NOT NULL,
  `TYPE_START_DT` datetime NOT NULL,
  `TYPE_END_DT` datetime DEFAULT NULL,
  `TYPE_COMMENT` text,
  PRIMARY KEY (`ID`,`TYPE_NAME`),
  UNIQUE KEY `TYPE_NAME_UNIQUE` (`TYPE_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE IF NOT EXISTS `values` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` text NOT NULL,
  `LAST_UPD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LAST_UPD_BY` text NOT NULL,
  `PAR_ID` int(11) DEFAULT NULL,
  `NAME` text NOT NULL,
  `TYPE` text NOT NULL,
  `VAL` text NOT NULL,
  `DESC_TXT` text,
  `VAL_STAT` tinyint(1) NOT NULL,
  `CODE` text,
  `ORDER` text,
  `HIGH` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `worker_data`
--

CREATE TABLE IF NOT EXISTS `worker_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_first_name` varchar(45) NOT NULL,
  `c_last_name` varchar(45) NOT NULL,
  `c_age` varchar(45) NOT NULL,
  `c_email` varchar(45) DEFAULT NULL,
  `c_mobile` int(11) DEFAULT NULL,
  `c_gender` varchar(45) DEFAULT NULL,
  `c_city` varchar(45) DEFAULT NULL,
  `c_zone` varchar(45) DEFAULT NULL,
  `c_craft` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE IF NOT EXISTS `zones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(100) DEFAULT NULL,
  `zone` varchar(100) DEFAULT NULL,
  `arabic_zone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `city_id`, `zone`, `arabic_zone`) VALUES
(1, 1, '', 'ابوقير'),
(2, 1, '', 'الازاريطة'),
(3, 1, '', 'الجمرك'),
(4, 1, '', 'الحضرة '),
(5, 1, '', 'الدخلية'),
(6, 1, '', 'السيوف '),
(7, 1, '', 'الصالحية'),
(8, 1, '', 'الظاهرية'),
(9, 1, '', 'العامرية'),
(10, 1, '', 'العصافرة'),
(11, 1, '', 'العطارين'),
(12, 1, '', 'العوايد'),
(13, 1, '', 'القباري '),
(14, 1, '', 'اللبان'),
(15, 1, '', 'المعمورة'),
(16, 1, '', 'المكس'),
(17, 1, '', 'المنتزة'),
(18, 1, '', 'المندرة'),
(19, 1, '', 'المنشية '),
(20, 1, '', 'النخيل'),
(21, 1, '', 'النزهة'),
(22, 1, '', 'الورديان'),
(23, 1, '', 'باكوس'),
(24, 1, '', 'بحري'),
(25, 1, '', 'برج العرب'),
(26, 1, '', 'بلوكلي'),
(27, 1, '', 'جليم'),
(28, 1, '', 'جناكليس'),
(29, 1, '', 'راس التين'),
(30, 1, '', 'زيزنيا'),
(31, 1, '', 'سان ستيفانو'),
(32, 1, '', 'سبورتينج'),
(33, 1, '', 'ستانلي'),
(34, 1, '', 'سموحة'),
(35, 1, '', 'سيدي بشر'),
(36, 1, '', 'سيدي جابر'),
(37, 1, '', 'فكتوريا'),
(38, 1, '', 'كامب شيزار'),
(39, 1, '', 'كفرعبده'),
(40, 1, '', 'كليوباترا'),
(41, 1, '', 'كوم الدكة'),
(42, 1, '', 'لوران'),
(43, 1, '', 'محرم بيك'),
(44, 1, '', 'محطةالرمل'),
(45, 1, '', 'ميامي'),
(46, 1, '', 'مينا البصل '),
(47, 2, '', '6 اكتوبر'),
(48, 2, '', 'ابورواش'),
(49, 2, '', 'اوسيم'),
(50, 2, '', 'امبابة'),
(51, 2, '', 'البدرشين'),
(52, 2, '', 'البراجيل'),
(53, 2, '', 'الحرانية'),
(54, 2, '', 'الحوامدية'),
(55, 2, '', 'الدقي'),
(56, 2, '', 'الرماية'),
(57, 2, '', 'الشيخ زايد'),
(59, 2, '', 'الصف'),
(60, 2, '', 'العجوزة'),
(61, 2, '', 'العزيزية'),
(62, 2, '', 'العمرانية'),
(63, 2, '', 'الكيت كات'),
(64, 2, '', 'المنصورية '),
(65, 2, '', 'المنيب '),
(66, 2, '', 'المهندسين'),
(67, 2, '', 'الهرم'),
(68, 2, '', 'الوراق'),
(69, 2, '', 'بشتيل'),
(70, 2, '', 'بولاق الدكرور'),
(71, 2, '', 'ترسا'),
(72, 2, '', 'حدائق الاهرام'),
(73, 2, '', 'دهشور'),
(74, 2, '', 'ساقية مكي'),
(75, 2, '', 'سقارة'),
(76, 2, '', 'صفط'),
(77, 2, '', 'فيصل'),
(78, 2, '', 'كرداسة'),
(79, 2, '', 'كفر طهرمس'),
(80, 2, '', 'ميت عقبا'),
(81, 2, '', 'ناهيا'),
(82, 3, '', 'المرج'),
(83, 3, '', 'المطرية'),
(84, 3, '', 'عين شمس'),
(85, 3, '', 'السلام'),
(86, 3, '', 'النزهة'),
(87, 3, '', 'مصر الجديدة'),
(88, 3, '', 'مدينة نصر'),
(89, 3, '', ' الوايلى'),
(90, 3, '', 'باب الشعرية'),
(91, 3, '', 'الموسكي'),
(92, 3, '', 'وسط البلد'),
(93, 3, '', 'الازبكية'),
(94, 3, '', 'عابدين'),
(95, 3, '', 'بولاق'),
(96, 3, '', 'الزيتون'),
(97, 3, '', 'حدائق القبة'),
(98, 3, '', 'الزاوية الحمراء'),
(99, 3, '', 'الشرابية'),
(100, 3, '', 'الساحل'),
(101, 3, '', 'شبرا'),
(102, 3, '', 'روض الفرج'),
(103, 3, '', 'السيدة زينب'),
(104, 3, '', 'مصر القديمة'),
(105, 3, '', 'الخليفة'),
(106, 3, '', 'المقطم'),
(107, 3, '', 'البساتين'),
(108, 3, '', 'دار السلام'),
(109, 3, '', 'المعادي وطرة'),
(110, 3, '', 'حلوان'),
(111, 3, '', ' التبين'),
(112, 3, '', '15 مايو');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
