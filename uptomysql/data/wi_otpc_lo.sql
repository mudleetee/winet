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
-- โครงสร้างตาราง `wi_otpc_lo`
--

CREATE TABLE IF NOT EXISTS `wi_otpc_lo` (
  `otpc_lo_auto` int(5) NOT NULL AUTO_INCREMENT,
  `otpc_lo_district` varchar(100) DEFAULT NULL,
  `otpc_lo_area` varchar(100) DEFAULT NULL,
  `otpc_lo_pe` varchar(15) DEFAULT NULL,
  `otpc_lo_vlanm` varchar(4) DEFAULT NULL,
  `otpc_lo_ipgw` varchar(16) DEFAULT NULL,
  `otpc_lo_ect` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`otpc_lo_auto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
