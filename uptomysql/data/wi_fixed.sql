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
-- โครงสร้างตาราง `wi_fixed`
--

CREATE TABLE IF NOT EXISTS `wi_fixed` (
  `fixed_auto` int(5) NOT NULL AUTO_INCREMENT,
  `fixed_id` varchar(10) DEFAULT NULL,
  `fixed_type` varchar(17) CHARACTER SET utf8 DEFAULT NULL,
  `fixed_active` varchar(1) CHARACTER SET utf8 DEFAULT NULL,
  `customer_name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `customer_addr` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `fixed_account_type` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `service_location_code` varchar(4) DEFAULT NULL,
  `service_location_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `product_dest` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`fixed_auto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
