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

CREATE TABLE IF NOT EXISTS `wi_wait` (
  `wa_auto` int(5) NOT NULL AUTO_INCREMENT,
  `wa_cen` varchar(11) DEFAULT NULL,
  `wa_req` varchar(25) DEFAULT NULL,
  `wa_reg_date` varchar(10) DEFAULT NULL,
  `wa_cen_sentdate` varchar(10) DEFAULT NULL,
  `wa_name` varchar(60) DEFAULT NULL,
  `wa_address` varchar(30) DEFAULT NULL,
  `wa_tambon` varchar(20) DEFAULT NULL,
  `wa_amphoe` varchar(20) DEFAULT NULL,
  `wa_province` varchar(20) DEFAULT NULL,
  `wa_postalcode` varchar(5) DEFAULT NULL,
    `wa_id_card` varchar(10) DEFAULT NULL,
    `wa_mobile` varchar(10) DEFAULT NULL,
    `wa_bb_contract` varchar(1) DEFAULT NULL,
    `wa_pro_contract` varchar(1) DEFAULT NULL,
    `wa_id_card_copy` varchar(1) DEFAULT NULL,
    `wa_census_regi_copy` varchar(1) DEFAULT NULL,
    `wa_result` varchar(30) DEFAULT NULL,
    `wa_ect` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`wa_auto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
