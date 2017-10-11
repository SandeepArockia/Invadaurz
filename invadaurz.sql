-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2017 at 08:47 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `invadaurz`
--
CREATE DATABASE IF NOT EXISTS `invadaurz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `invadaurz`;

-- --------------------------------------------------------

--
-- Table structure for table `eventreg`
--

CREATE TABLE IF NOT EXISTS `eventreg` (
  `rollno` varchar(10) NOT NULL DEFAULT '',
  `event` varchar(20) NOT NULL,
  `status` varchar(10) DEFAULT 'pending',
  PRIMARY KEY (`rollno`,`event`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventreg`
--

INSERT INTO `eventreg` (`rollno`, `event`, `status`) VALUES
('15i228', 'bugboss', 'registered');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `rollno` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `year` int(1) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`rollno`, `name`, `degree`, `branch`, `year`, `phone`, `mail`, `password`) VALUES
('15', 'a a', '1', '7', 1, '9965951487', 'pr.gksp@gmail.com', 'p'),
('a', 'a a', '1', '7', 1, '9898989889', 'p@d.c', 'a'),
('k', 'k k', '1', '7', 1, '9876543210', 'p@k.l', 'l');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
