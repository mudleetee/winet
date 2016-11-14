-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_winet`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `wi_3g`
--

CREATE TABLE IF NOT EXISTS `wi_3g` (
  `3g_auto` int(5) NOT NULL AUTO_INCREMENT,
  `3g_site_id` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `3g_site_code` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `3g_site_type` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `3g_site_name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `3g_site_lat` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `3g_site_long` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `3g_site_tam` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `3g_site_district` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `3g_site_province` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `3g_property_id` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  `3g_code10_id` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`3g_auto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
