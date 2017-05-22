CREATE DATABASE  IF NOT EXISTS `salon` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `salon`;
-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 08:44 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(45) NOT NULL,
  `mobile_number` int(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`customer_id`, `first_name`, `last_name`, `username`, `password`, `gender`, `address`, `country`, `mobile_number`, `email`, `bio`, `status`) VALUES
(6, 'Sample', 'Lang', 'sample', '8151325dcdbae9e0ff95f9f9658432dbedfdb209', 'Male', 'sadsda', 'BS', 232323, 'sample@gmail.com', 'ako na lang', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `last_name`, `first_name`, `username`, `password`) VALUES
(1, 'mark', 'mark', 'mark', 'mark'),
(4, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `comments` varchar(300) DEFAULT NULL,
  `rating` int(2) DEFAULT NULL,
  `serv_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `customer_id_idx` (`customer_id`),
  KEY `serv_id_idx` (`serv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `customer_id`, `comments`, `rating`, `serv_id`, `date`, `time`) VALUES
(3, 6, 'hahaha', 3, 9, '2017-05-03', '11:20:22'),
(4, 6, 'wewewe', 4, 9, '2017-05-05', '08:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `s_id` int(11) NOT NULL,
  PRIMARY KEY (`message_id`),
  KEY `customer_id` (`c_id`),
  KEY `s_id_idx` (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `c_id`, `date`, `time`, `content`, `s_id`) VALUES
(3, 6, '2017-05-04', '09:22:37', 'ano', 9);

-- --------------------------------------------------------

--
-- Table structure for table `request_accounts`
--

DROP TABLE IF EXISTS `request_accounts`;
CREATE TABLE IF NOT EXISTS `request_accounts` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(45) NOT NULL,
  `mobile_number` int(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_accounts`
--

INSERT INTO `request_accounts` (`customer_id`, `first_name`, `last_name`, `username`, `password`, `gender`, `address`, `country`, `mobile_number`, `email`, `bio`, `status`) VALUES
(7, 'Ian', 'Paul', 'name', 'a027184a55211cd23e3f3094f1fdc728df5e0500', 'Male', 'Bakakeng', 'AD', 3298393, 'haha@gmail.com', 'ajdhjsd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `request_sp`
--

DROP TABLE IF EXISTS `request_sp`;
CREATE TABLE IF NOT EXISTS `request_sp` (
  `serv_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `mobilenumber` int(12) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `spbio` varchar(100) NOT NULL,
  `serviceOffer` varchar(100) NOT NULL,
  `service_desc` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`serv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(45) NOT NULL,
  `prices` float DEFAULT NULL,
  PRIMARY KEY (`service_id`),
  UNIQUE KEY `service_name_UNIQUE` (`service_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `prices`) VALUES
(1, 'hair', 3232),
(2, 'facial', 3223);

-- --------------------------------------------------------

--
-- Table structure for table `service_providers`
--

DROP TABLE IF EXISTS `service_providers`;
CREATE TABLE IF NOT EXISTS `service_providers` (
  `serv_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `mobilenumber` int(12) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `spbio` varchar(100) NOT NULL,
  `serviceOffer` varchar(100) NOT NULL,
  `service_desc` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`serv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_providers`
--

INSERT INTO `service_providers` (`serv_id`, `first_name`, `last_name`, `username`, `password`, `gender`, `address`, `country`, `mobilenumber`, `email`, `spbio`, `serviceOffer`, `service_desc`, `status`) VALUES
(9, 'mark', 'mark', 'mark', 'f1b5a91d4d6ad523f2610114591c007e75d15084', 'Male', 'dfdfd', 'AI', 3232323, 'mark@gmail.com', 'mamammaa', 'Facial', 'adwewewew', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_request`
--

DROP TABLE IF EXISTS `service_request`;
CREATE TABLE IF NOT EXISTS `service_request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `custom_id` int(11) NOT NULL,
  `serviceOffer` varchar(100) NOT NULL,
  `dateAvail` datetime NOT NULL,
  `servce_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`request_id`),
  KEY `custom_id_idx` (`custom_id`),
  KEY `servce_id_idx` (`servce_id`),
  KEY `serviceOffer_idx` (`serviceOffer`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_request`
--

INSERT INTO `service_request` (`request_id`, `custom_id`, `serviceOffer`, `dateAvail`, `servce_id`, `date`) VALUES
(1, 6, 'hair', '2017-05-03 09:21:18', 9, '2017-05-12 10:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `sp_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `serviceDesc` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`request_id`),
  UNIQUE KEY `serv_id_UNIQUE` (`sp_id`),
  UNIQUE KEY `cust_id_UNIQUE` (`cust_id`),
  KEY `custname_idx` (`cust_id`),
  KEY `serviceAvailed_idx` (`serviceDesc`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`request_id`, `sp_id`, `cust_id`, `serviceDesc`, `status`, `remarks`, `date`) VALUES
(4, 9, 6, 'facial', 'pending', 'haha', '2017-05-04 09:16:15');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `accounts` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `serv_id` FOREIGN KEY (`serv_id`) REFERENCES `service_providers` (`serv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `c_id` FOREIGN KEY (`c_id`) REFERENCES `accounts` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `s_id` FOREIGN KEY (`s_id`) REFERENCES `service_providers` (`serv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `service_request`
--
ALTER TABLE `service_request`
  ADD CONSTRAINT `custom_id` FOREIGN KEY (`custom_id`) REFERENCES `accounts` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `servce_id` FOREIGN KEY (`servce_id`) REFERENCES `service_providers` (`serv_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `serviceOffer` FOREIGN KEY (`serviceOffer`) REFERENCES `services` (`service_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `cust_id` FOREIGN KEY (`cust_id`) REFERENCES `accounts` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `serviceDesc` FOREIGN KEY (`serviceDesc`) REFERENCES `services` (`service_name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sp_id` FOREIGN KEY (`sp_id`) REFERENCES `service_providers` (`serv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
