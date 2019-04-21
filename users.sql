-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2019 at 01:48 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `credit` int(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`username`, `email`, `credit`) VALUES
('H', 'hari@gmail.com', 4500),
('G', 'gan12@gmail.com', 7890),
('F', 'frank@gmail.com', 2345),
('E', 'mani39@gmail.com', 1100),
('D', 'dinesh99@gmail.com', 2000),
('C', 'lucky7@gmail.com', 1490),
('B', 'barathi@gmail.com', 100),
('A', 'abdev3@gmail.com', 260),
('I', 'imluck@gmail.com', 459),
('J', 'bhuvi@gmail.com', 7890);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

DROP TABLE IF EXISTS `transfers`;
CREATE TABLE IF NOT EXISTS `transfers` (
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `credit` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`sender`, `receiver`, `credit`) VALUES
('A', 'C', 60),
('E', 'D', 900),
('C', 'A', 900),
('J', 'G', 300),
('H', 'D', 300),
('G', 'E', 300),
('F', 'D', 300),
('D', 'A', 30),
('B', 'C', 12),
('B', 'C', 80),
('B', 'C', 80),
('B', 'E', 200),
('A', 'C', 211),
('B', 'A', 1000),
('B', 'A', 900);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
