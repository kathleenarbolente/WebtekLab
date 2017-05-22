CREATE DATABASE  IF NOT EXISTS `salon` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `salon`;
-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 06:26 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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

CREATE TABLE `accounts` (
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
  `status` int(10) NOT NULL DEFAULT '0'
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

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `comments` varchar(300) DEFAULT NULL,
  `rating` int(2) DEFAULT NULL,
  `sp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `request_accounts` (
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
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_sp`
--

CREATE TABLE `request_sp` (
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
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serv_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `service_name` varchar(45) DEFAULT NULL,
  `prices` int(7) DEFAULT NULL
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

CREATE TABLE `service_providers` (
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
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_providers`
--

INSERT INTO `service_providers` (`serv_id`, `first_name`, `last_name`, `username`, `password`, `gender`, `address`, `country`, `mobilenumber`, `email`, `spbio`, `serviceOffer`, `spservices`, `status`) VALUES
(5, 'haha', 'haha', 'haha', '637d1f5c6e6d1be22ed907eb3d223d858ca396d8', 'Male', 'ahahah', 'EG', 33434, 'haha@gmail.com', '3434344dfdfd', 'Makeup', 's', 1),
(6, 'ako', 'siya', 'gaga', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'Male', 'asfdsfds', 'FI', 32323, 'a@gmail.com', 'wewewew', 'Facial', 's', 1),
(7, 'Chad', 'Cohger', 'Chad', '6c6b1b2b3ecc0e6900000dabf4faae6f8df5ffd1', 'Female', 'Apatot', 'SE', 9382938, 'chad@gmail.com', 'Youre so sweet', 'Makeup', 's', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `request_id` int(11) NOT NULL,
  `spname` varchar(45) NOT NULL,
  `custname` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `serviceAvailed` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`request_id`, `spname`, `custname`, `address`, `serviceAvailed`, `status`, `remarks`) VALUES
(1, 'Joneil Europa', 'John Paul', 'Santiago', 'Hair coloring', 'pending', 'good'),
(2, 'Maryl Abwan', 'Edu Michael', 'Marikina', 'Makeup', 'done', 'good service'),
(3, 'Joneil Europa', 'Richard Pawn', 'Quezon', 'Facial', 'decline', 'not good record');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `request_accounts`
--
ALTER TABLE `request_accounts`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `request_sp`
--
ALTER TABLE `request_sp`
  ADD PRIMARY KEY (`serv_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serv_id`);

--
-- Indexes for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD PRIMARY KEY (`serv_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `request_accounts`
--
ALTER TABLE `request_accounts`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `request_sp`
--
ALTER TABLE `request_sp`
  MODIFY `serv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
