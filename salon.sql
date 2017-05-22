CREATE DATABASE  IF NOT EXISTS `salon` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `salon`;
-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 03:46 AM
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
(5, 'mark', 'mark', 'mark', 'f1b5a91d4d6ad523f2610114591c007e75d15084', 'Male', 'mamam', 'DJ', 23223, 'a@gmail.com', 'adsdsadsdsa', 1),
(9, 'Mark', 'Abad', 'marko', '1b7ad54f057b59ef44edcaa1fda8cc0d07a167ed', 'Male', 'Bakakeng', 'ZW', 909012211, 'mark@gmail.com', 'I am legend', 1),
(11, 'Lando', 'landa', 'lan', '3ed79aa6d5c36a10b6251a882ea2edb68b0dfae4', 'Male', 'Laguna', 'CH', 90909, 'lan@gmail.com', 'I am always awake', 0),
(13, 'ryan', 'ryan', 'ryan', 'ea3cd978650417470535f3a4725b6b5042a6ab59', 'Male', 'Jan lang', 'AG', 34343434, 'ryan@gmail.com', 'gwapo', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `last_name`, `first_name`, `username`, `password`) VALUES
(1, 'mark', 'mar', 'mark', 'mark'),
(2, 'nick', 'mendoza', 'nicks', 'nicks'),
(3, 'kath', 'lyne', 'kath', 'kath');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `comments` varchar(300) DEFAULT NULL,
  `rating` int(2) DEFAULT NULL,
  `sp_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `comments`, `rating`, `sp_id`) VALUES
(1, 'dont touch my tralala', 4, 2),
(2, 'you are very good', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `date`, `time`, `content`) VALUES
(1, '2017-05-03', '08:20:18', 'Hi i need your service'),
(2, '2017-05-03', '17:48:00', 'Dont do that again');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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
  `spservices` varchar(100) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`serv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `serv_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `service_name` varchar(45) DEFAULT NULL,
  `prices` int(7) DEFAULT NULL,
  PRIMARY KEY (`serv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serv_id`, `customer_id`, `service_name`, `prices`) VALUES
(1, 1, 'Manicure and Pedicure', 2323),
(2, 2, 'Facial', 12122);

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
  `spservices` varchar(100) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`serv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_providers`
--

INSERT INTO `service_providers` (`serv_id`, `first_name`, `last_name`, `username`, `password`, `gender`, `address`, `country`, `mobilenumber`, `email`, `spbio`, `serviceOffer`, `spservices`, `status`) VALUES
(1, 'Nolly', 'Aurellio', 'Nol', 'nol', 'Female', 'Aurora Hill', 'PH', 33434, 'nol@gmail.com', 'webtech is life', 'Makeup', 's', 1),
(2, 'Nicole', 'Navarets', 'Nics', 'nics', 'Female', 'Aurora Hill', 'PH', 323236, 'nics@gmail.com', 'webtech is life', 'Facial', 's', 2),
(3, 'Kathy', 'Ambly', 'Kathy', 'kathy', 'Female', 'Guisad', 'PH', 9382938, 'kathy@gmail.com', 'webtech is life', 'Makeup', 's', 3),
(4, 'Michaela', 'Bernardo', 'Mics', 'mics', 'Female', 'Pinsao Pilot', 'PH', 126386239, 'mics@gmail.com', 'webtech is life', 'a', 'b', 4),
(5, 'Jamina', 'Delos Santos', 'Jamie', 'jamie', 'female', 'Queen of Peace', 'PH', 72438247, 'jamie@gmail.com', 'webtech is life', 'q', 'w', 5),
(6, 'Zsarlene', 'Estrellado', 'Zia', 'zia', 'female', 'T.Alonzo', 'PH', 243345, 'zia@gmail.com', 'webtech is life', 'a', 'a', 6),
(7, 'Faye', 'Anonuevo', 'Faye', 'faye', 'female', 'upper fairview', 'PH', 121324, 'faye@gmail.com', 'webtech is life', 's', 's', 7),
(8, 'Jasiel', 'Dumdum', 'Jasiel', 'jasiel', 'male', 'guisad', 'PH', 8437834, 'jasiel@gmail.com', 'webtech is life', 's', 's', 8),
(9, 'Maureen', 'Manaois', 'Mau', 'mau', 'female', 'Legarda', 'PH', 131232, 'mau@gmail.com', 'webtech is life', 'a', 'd', 9),
(10, 'Abigeyl', 'Dumpit', 'Abi', 'abi', 'male', 'Trancoville', 'PH', 8643283, 'abi@gmail.com', 'webtech is life', 'a', 'a', 10),
(11, 'Ken', 'Lagunilla', 'ken', 'ken', 'male', 'Bakakeng', 'PH', 472565, 'ken@gmail.com', 'webtech is life', 't', 'b', 11),
(12, 'Aeneid', 'Adversalo', 'Aeneid', 'aeneid', 'male', 'Bakakeng', 'PH', 724872, 'aeneid@gmail.com', 'webtech is life', 'w', 'e', 12),
(13, 'James', 'Cabalse', 'James', 'james', 'male', 'Bonifacio', 'PH', 73643741, 'james@gmail.com', 'webtech is life', 'q', 'j', 13),
(14, 'Jan', 'Cabigas', 'Jan', 'jan', 'male', 'Aurora Hill', 'PH', 6356281, 'jan@gmail.com', 'webtech is life', 'r', 'h', 14),
(15, 'Marky', 'Abad', 'Marky', 'marky', 'male', 'T. Alonzo', 'PH', 846837, 'marky@gmail.com', 'webtech is life', 'h', 'j', 15);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `spname` varchar(45) NOT NULL,
  `custname` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `serviceAvailed` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`request_id`, `spname`, `custname`, `address`, `serviceAvailed`, `status`, `remarks`) VALUES
(1, 'Joneil Europa', 'John Paul', 'Santiago', 'Hair coloring', 'pending', 'good'),
(2, 'Maryl Abwan', 'Edu Michael', 'Marikina', 'Makeup', 'done', 'good service'),
(3, 'Joneil Europa', 'Richard Pawn', 'Quezon', 'Facial', 'decline', 'not good record');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
