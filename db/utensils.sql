-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2023 at 01:50 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `utensils`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `distribution`
--

CREATE TABLE IF NOT EXISTS `distribution` (
  `disid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `mobile` varchar(150) NOT NULL,
  `areaname` varchar(300) NOT NULL,
  `address` text NOT NULL,
  `donation_id` int(10) NOT NULL,
  `prodname` varchar(250) NOT NULL,
  `issued_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issue_image` varchar(250) NOT NULL,
  PRIMARY KEY (`disid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `distribution`
--

INSERT INTO `distribution` (`disid`, `username`, `mobile`, `areaname`, `address`, `donation_id`, `prodname`, `issued_date`, `issue_image`) VALUES
(1, 'Nizam', '9876543212', 'Royapuram', 'Chennai', 1, 'Gas Stove', '2023-03-14 01:37:06', '38814-qqr.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `donid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `address` varchar(500) NOT NULL,
  `productname` varchar(250) NOT NULL,
  `productDetails` text NOT NULL,
  `prodimage` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL,
  `donated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`donid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donid`, `username`, `address`, `productname`, `productDetails`, `prodimage`, `status`, `donated_at`) VALUES
(1, 'umar', 'Chennai Nungabakkam Near Railway Station', 'Gas Stove', 'Butterfly light usage Gas Stove', '26357-head_bckg.jpg', 'Distributed', '2023-03-14 00:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `feedbacks` text NOT NULL,
  `feedback_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`fid`, `username`, `mobile`, `feedbacks`, `feedback_at`) VALUES
(1, 'umar', '9876543212', 'Feedbacks for Kitchen Utensils', '2023-03-14 00:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'umar', 'umar', 'User', '2023-03-14 01:14:41'),
(2, 'admin', 'admin', 'Admin', '2023-03-14 01:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `needers`
--

CREATE TABLE IF NOT EXISTS `needers` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `needers`
--

INSERT INTO `needers` (`nid`, `name`, `mobile`, `address`, `city`, `state`, `about`) VALUES
(1, 'Nizam', '9876543212', 'Chennai', 'Chennai', 'Tamilnadu', 'Expecting from Yejaman');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `Lanmark` varchar(250) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `City` varchar(200) NOT NULL,
  `State` varchar(200) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rid`),
  UNIQUE KEY `rid` (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`rid`, `Name`, `mobile`, `email`, `Lanmark`, `Address`, `City`, `State`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'Umar', '98765432121', 'umar@gmail.com', 'Bus Stand', 'Chennai', 'Chennai', 'Tamilnadu', 'umar', 'umar', 'User', '2023-03-14 01:14:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
