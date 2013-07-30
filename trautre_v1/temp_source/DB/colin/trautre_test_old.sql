-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2013 at 10:13 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trautre_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `facebooks`
--

CREATE TABLE IF NOT EXISTS `facebooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook_user_id` varchar(100) DEFAULT NULL,
  `facebook_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `media_type_id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  `width` int(10) DEFAULT '0',
  `height` int(10) DEFAULT '0',
  `number_video` int(11) NOT NULL DEFAULT '0',
  `is_home` int(1) NOT NULL DEFAULT '0',
  `is_source` int(1) NOT NULL DEFAULT '0',
  `link_source` text,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `media_type_id`, `name`, `user_id`, `link`, `width`, `height`, `number_video`, `is_home`, `is_source`, `link_source`, `created`) VALUES
(8, NULL, 'Oishi quan', 0, 'pts', 851, 315, 0, 0, 0, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `media_types`
--

CREATE TABLE IF NOT EXISTS `media_types` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `media_types`
--

INSERT INTO `media_types` (`id`, `name`) VALUES
(1, 'image'),
(2, 'video');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vote_up` int(11) DEFAULT '0',
  `vote_down` int(11) DEFAULT '0',
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) CHARACTER SET latin1 NOT NULL,
  `password` varchar(45) CHARACTER SET latin1 NOT NULL,
  `email` varchar(45) CHARACTER SET latin1 NOT NULL,
  `facebook_id` int(11) NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `full_name` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `regdate` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
