-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2020 at 01:59 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `converter`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_info`
--

DROP TABLE IF EXISTS `file_info`;
CREATE TABLE IF NOT EXISTS `file_info` (
  `id` int(70) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `file_size` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `file_type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UID` int(20) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PHNO` int(10) NOT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `NAME`, `EMAIL`, `PHNO`, `PASSWORD`) VALUES
(1, 'Ajoy', 'ajoykumarpujari@gmail.com', 2147483647, 'password'),
(2, 'Ajoy', 'ajoykumarpujari@gmail.com', 2147483647, 'password'),
(3, 'Ajoy', 'ajoykumarpujari@gmail.com', 8474, 'pass'),
(4, 'Ajoy', 'ajoykumarpujari@gmail.com', 847487105, 'pass');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
