-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2013 at 06:43 AM
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
  `number_view` int(11) NOT NULL DEFAULT '0',
  `is_home` int(1) NOT NULL DEFAULT '0',
  `is_source` int(1) NOT NULL DEFAULT '0',
  `link_source` text,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `media_type_id`, `name`, `user_id`, `link`, `width`, `height`, `number_view`, `is_home`, `is_source`, `link_source`, `created`) VALUES
(9, 1, 'Tre trau de mo', 12, 'uploaded/images/8374_1375028883.jpg', 0, 311, 0, 0, 0, NULL, '2013-07-28 16:28:05'),
(10, 1, 'hahaa', 12, 'uploaded/images/966_1375029092.jpg', 0, 311, 0, 0, 0, NULL, '2013-07-28 16:31:33'),
(11, 2, 'NhÃ¬n yÃªu luÃ´n', 12, 'http://www.youtube.com/embed/885lo6bGmJM', 0, 0, 0, 0, 0, NULL, '2013-07-28 17:10:35'),
(12, 1, 'colin', 12, 'uploaded/images/1289_1375032798.jpg', 400, 4307, 0, 0, 0, NULL, '2013-07-28 17:33:19'),
(13, 1, 'Xeo ', 12, 'uploaded/images/9168_1375063448.jpg', 593, 742, 0, 0, 0, NULL, '2013-07-29 02:04:09'),
(14, 1, 'Li3m  ga', 12, 'uploaded/images/2393_1375066880.jpg', 202, 307, 0, 0, 0, NULL, '2013-07-29 03:01:21'),
(15, 1, 'vai that', 12, 'uploaded/images/399_1375066928.jpg', 650, 650, 0, 0, 0, ':(', '2013-07-29 03:02:09'),
(16, 2, 'tun', 12, 'http://www.youtube.com/embed/885lo6bGmJM', 0, 0, 0, 0, 0, NULL, '2013-07-29 10:14:37'),
(17, 2, 'CÃ¡i tá»™i quÃªn cáº¡o rÃ¢u', 12, 'http://youtu.be/Rx5ZsSSDCHc', 0, 0, 0, 0, 0, NULL, '2013-07-30 03:35:05');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(3, 'Admin', 'Admin');

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
  `password` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(45) CHARACTER SET latin1 NOT NULL,
  `facebook_id` varchar(255) NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `full_name` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `facebook_id`, `gender`, `full_name`, `birthday`, `last_login`, `role_id`, `avatar`, `website`, `about`, `created`, `modified`) VALUES
(12, 'thanntrung.qb', 'e10adc3949ba59abbe56e057f20f883e', 'thanhtrungquangbinh@gmail.com', '100001393588003', 1, 'Colin NgÃ´', '1989-10-20 00:00:00', NULL, 0, 'http://graph.facebook.com/100001393588003/picture?type=normal', 'http://trautre.com', 'COlin demio', '2013-07-30 02:48:27', '2013-07-30 02:48:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
