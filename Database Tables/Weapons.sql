-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2018 at 01:49 PM
-- Server version: 5.7.24
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rotce_minions`
--

-- --------------------------------------------------------

--
-- Table structure for table `Weapons`
--

CREATE TABLE `Weapons` (
  `Type` varchar(30) NOT NULL,
  `Weight (Ibs)` int(11) NOT NULL,
  `Height (IN)` int(11) NOT NULL,
  `Length (IN)` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Weapons`
--

INSERT INTO `Weapons` (`Type`, `Weight (Ibs)`, `Height (IN)`, `Length (IN)`) VALUES
('Small Lazer ', 20, 10, 20),
('Large Shrink Ray', 50, 20, 40);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
