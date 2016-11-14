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
-- โครงสร้างตาราง `wi_service`
--

CREATE TABLE IF NOT EXISTS `wi_service2` (
  `service_auto` int(5) NOT NULL AUTO_INCREMENT,
  `cpe_mac` varchar(20) CHARACTER SET utf8 DEFAULT NULL,  
  `service_id` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `location_id` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `bs_id` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `service_id2` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `center` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `cpe_type` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `service_name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `promotion_name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `promotion_price` int(5) NOT NULL,
  `service_lat` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `service_long` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `contact` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `service_active` varchar(1) CHARACTER SET utf8 DEFAULT NULL,
  `service_ect` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`service_auto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
