-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2016 at 11:17 AM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `road`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `dist` float NOT NULL,
  `bk_rate` float NOT NULL,
  `type` int(11) NOT NULL,
  `bk_status` int(11) NOT NULL DEFAULT '0',
  `days` int(11) NOT NULL,
  `bk_dt` datetime NOT NULL,
  `from_loc` text NOT NULL,
  `to_loc` text NOT NULL,
  `v_id` int(11) NOT NULL,
  `fare` float NOT NULL,
  `unit` text NOT NULL,
  `pk_time` time NOT NULL,
  `dr_time` time NOT NULL,
  `lon` text NOT NULL,
  `lat` text NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `u_id`, `dist`, `bk_rate`, `type`, `bk_status`, `days`, `bk_dt`, `from_loc`, `to_loc`, `v_id`, `fare`, `unit`, `pk_time`, `dr_time`, `lon`, `lat`) VALUES
(10, 1, 1.3, 17, 1, 0, 0, '2016-12-30 10:04:59', 'Blue Area, Islamabad, Islamabad Capital Territory, Pakistan', 'Jinnah Avenue, Islamabad, Islamabad Capital Territory, Pakistan', 2, 130, 'km', '00:00:00', '00:00:00', '73.0463089', '33.588970599999996'),
(11, 1, 1.3, 17, 1, 0, 0, '2016-12-30 10:09:26', 'Blue Area, Islamabad, Islamabad Capital Territory, Pakistan', 'Jinnah Avenue, Islamabad, Islamabad Capital Territory, Pakistan', 2, 130, 'km', '00:00:00', '00:00:00', '73.0463089', '33.588970599999996'),
(12, 1, 1.3, 17, 1, 0, 0, '2016-12-30 10:38:57', 'Blue Area, Islamabad, Islamabad Capital Territory, Pakistan', 'pakistani restaurant near Jinnah Avenue, Islamabad, Islamabad Capital Territory, Pakistan', 2, 130, 'km', '00:00:00', '00:00:00', '73.0463089', '33.588970599999996'),
(13, 1, 1.3, 17, 1, 0, 0, '2016-12-30 10:46:49', 'Blue Area, Islamabad, Islamabad Capital Territory, Pakistan', 'Jinnah Avenue, Islamabad, Islamabad Capital Territory, Pakistan', 2, 130, 'km', '00:00:00', '00:00:00', '73.0463089', '33.588970599999996'),
(14, 1, 1.3, 17, 1, 0, 0, '2016-12-30 10:47:40', 'Blue Area, Islamabad, Islamabad Capital Territory, Pakistan', 'Jinnah Avenue, Islamabad, Islamabad Capital Territory, Pakistan', 2, 130, 'km', '00:00:00', '00:00:00', '73.0463089', '33.588970499999995'),
(15, 1, 1.3, 17, 1, 0, 0, '2016-12-30 10:48:53', 'Blue Area, Islamabad, Islamabad Capital Territory, Pakistan', 'Jinnah Avenue, Islamabad, Islamabad Capital Territory, Pakistan', 2, 130, 'km', '00:00:00', '00:00:00', '73.0463089', '33.588970499999995'),
(16, 1, 1.3, 17, 1, 0, 0, '2016-12-30 10:55:20', 'Blue Area, Islamabad, Islamabad Capital Territory, Pakistan', 'Jinnah Avenue, Islamabad, Islamabad Capital Territory, Pakistan', 1, 122, 'km', '00:00:00', '00:00:00', '73.0463089', '33.588970499999995');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_rate`
--

CREATE TABLE IF NOT EXISTS `fuel_rate` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  `rate` float NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fuel_rate`
--

INSERT INTO `fuel_rate` (`fid`, `type`, `rate`) VALUES
(1, 'Economic', 17),
(2, 'Business', 23);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `name`, `email`, `contact`, `password`, `status`, `type`) VALUES
(1, 'waleedahmed1992', 'waleed@fwo.com.pk', '923435551441', '123', 0, 2),
(2, 'waleed', 'waleed@wlssoft.com', '123123', '123', 1, 1),
(3, 'waleed', 'waleed@wlssofts.com', '123123', '123', 0, 1),
(4, 'waleedahmed1992', 'waleedwaheed1196iiui@yahoo.com', '123123', '123', 0, 1),
(5, 'waleed', 'driver@gmail.com', '2147483647', '123', 0, 4),
(6, 'asasd', 'waleed@fwo.com.pks', '2147483647', '123', 0, 1),
(7, 'Sep-Oct', 'waleed@fwo.com.pkss', '2147483647', '123', 0, 1),
(8, 'waleed', 'waleed@fwo.com.pksadsd', '923435551441', '123', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `v_name` text NOT NULL,
  `v_status` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`v_id`, `v_name`, `v_status`, `type`) VALUES
(1, 'Mehran', 0, 1),
(2, 'Carry Car', 0, 2),
(3, 'testss', 1, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
