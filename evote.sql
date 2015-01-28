-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2015 at 09:55 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evote`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `password_temp` varchar(60) NOT NULL,
  `code` varchar(60) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `password_temp`, `code`, `active`, `created_at`, `updated_at`) VALUES
(4, 'summmmit44@gmail.com', '', '', 'hyjUJ9edCS5j9Bh1wkG0mLl9o5hXpY2wpQwT76qXt0w4i6znss950NS9z5Yf', 0, '2015-01-28 15:19:27', '2015-01-28 15:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE IF NOT EXISTS `users_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `middle_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(7) CHARACTER SET utf8 NOT NULL,
  `married` tinyint(4) NOT NULL,
  `mobile` varchar(15) CHARACTER SET utf8 NOT NULL,
  `mobile_updated_on` datetime NOT NULL,
  `house_number` int(11) NOT NULL,
  `street_number` varchar(20) CHARACTER SET utf8 NOT NULL,
  `area` varchar(20) CHARACTER SET utf8 NOT NULL,
  `town` varchar(20) CHARACTER SET utf8 NOT NULL,
  `city` varchar(30) CHARACTER SET utf8 NOT NULL,
  `state` varchar(30) CHARACTER SET utf8 NOT NULL,
  `country` varchar(15) CHARACTER SET utf8 NOT NULL,
  `pin_code` varchar(10) CHARACTER SET utf8 NOT NULL,
  `address_updated_on` datetime NOT NULL,
  `pic` text CHARACTER SET utf8 NOT NULL,
  `pic_updated_on` datetime NOT NULL,
  `relative_id` int(11) NOT NULL,
  `relation_with_person` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `update_on` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
