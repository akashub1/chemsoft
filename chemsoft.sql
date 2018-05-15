-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 05:21 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chemsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`) VALUES
('akashub666@gmail.com', '903520373', 'USER'),
('akashub666@gmail.com', '9855452', 'USER'),
('', '465', 'USER'),
('', 'dsds', 'USER'),
('', 'erewr', 'USER'),
('admin@gmail.com', 'admin', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `information` text,
  `admin` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`information`, `admin`, `date`) VALUES
('Test', 'owner', '2018-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `partical`
--

CREATE TABLE `partical` (
  `title` varchar(20) DEFAULT NULL,
  `admin` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `teacher` varchar(20) DEFAULT NULL,
  `approve` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `phone`, `dob`, `gender`, `profile`, `teacher`, `approve`) VALUES
('Akash', 'akashub666@gmail.com', '903520373', '1997-09-11', 'male', 'profile/back.png', 'owner', 'yes'),
('Akash', 'akashub666@gmail.com', '9855452', '1997-09-11', 'male', 'profile/back.png', 'owner', 'yes'),
('adsd', '', '465', NULL, NULL, NULL, NULL, NULL),
('dsds', '', 'dsds', NULL, NULL, NULL, NULL, NULL),
('rsaeres', '', 'erewr', NULL, NULL, NULL, NULL, NULL),
('Admin', 'admin@gmail.com', '987485784', '2018-05-10', NULL, 'used_photo/admin.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `theary`
--

CREATE TABLE `theary` (
  `title` varchar(20) DEFAULT NULL,
  `admin` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
