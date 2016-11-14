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
-- โครงสร้างตาราง `wi_bs`
--

CREATE TABLE IF NOT EXISTS `wi_bs` (
  `bs_auto` int(5) NOT NULL AUTO_INCREMENT,
  `location_id` varchar(10) DEFAULT NULL,
  `bs_id` varchar(10) DEFAULT NULL,
  `bs_coverage` varchar(200) DEFAULT NULL,
  `bs_ip` varchar(20) DEFAULT NULL,
  `bs_service` varchar(5) DEFAULT NULL,
  `bs_circuit_id` varchar(10) DEFAULT NULL,
  `bs_vlan` varchar(5) DEFAULT NULL,
  `request_id` varchar(12) DEFAULT NULL,
  `bs_cus` varchar(3) DEFAULT NULL,
  `bs_avai` varchar(3) DEFAULT NULL,
    `bs_lat` varchar(10) DEFAULT NULL,
    `bs_long` varchar(10) DEFAULT NULL,
    `bs_angle` varchar(3) DEFAULT NULL,
    `bs_height` varchar(3) DEFAULT NULL,
    `bs_freq` varchar(7) DEFAULT NULL,
    `bs_install_date` varchar(10) DEFAULT NULL,
    `bs_active` varchar(1) DEFAULT NULL,
    `bs_support_mt` varchar(1) DEFAULT NULL,
    `bs_ect` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bs_auto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
