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
-- โครงสร้างตาราง `wi_location`
--

CREATE TABLE IF NOT EXISTS `wi_location` (
  `location_auto` int(5) NOT NULL AUTO_INCREMENT,
  `center_name` varchar(50) DEFAULT NULL,
  `location_id` varchar(10) DEFAULT NULL,
  `location_name` varchar(50) DEFAULT NULL,
  `location_address` varchar(200) DEFAULT NULL,
  `location_datein` varchar(10) DEFAULT NULL,
  `circuit_id` varchar(10) DEFAULT NULL,
  `circuit_vlan` varchar(5) DEFAULT NULL,
  `circuit_sw_ip` varchar(20) DEFAULT NULL,
  `circuit_gw` varchar(20) DEFAULT NULL,
  `circuit_access_sw_port` varchar(200) DEFAULT NULL,
  `circuit_map` varchar(300) DEFAULT NULL,
  `circuit_ba` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`location_auto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
