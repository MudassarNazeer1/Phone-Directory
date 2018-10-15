-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 06:12 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phone directory`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_list`
--

CREATE TABLE IF NOT EXISTS `contact_list` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `cellphone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contact_list`
--

INSERT INTO `contact_list` (`ID`, `fname`, `lname`, `cellphone`, `email`, `address`) VALUES
(1, 'Mudassar', 'Nazeer', '03087949380', 'mudassarnazeer143@gmail.com', 'Ichra metro station, ferozpur road Lahore'),
(2, 'Usman', 'Danish', '03054493447', 'usmanalid4@gmail.com', 'Disposal road, BWN'),
(3, 'Arslan', 'Iqbal', '03070518955', 'arslaniqbal12@gmail.com', 'Bukhari colony, BWN'),
(4, 'Ali ', 'Razzaq', '03324848456', 'alirazzaq1124@gmail.com', 'Muhala nizam pura west, BWN  '),
(7, 'Shakir', 'Ali', '03338009005', 'shakirali1124@gmail.com', 'Khadim abad colony, BWN     ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `fname`, `lname`, `phone`, `email`, `password`) VALUES
(1, 'Mudassar ', 'Nazeer', '03087949380', 'mudassarnazeer143@gmail.com', '12345678'),
(2, 'Usman', 'Danish', '03054493447', 'usmanalid4@gmail.com', '12345'),
(3, 'Shakir', 'Ali', '0333-8009005', 'shakirali@gmail.com', '12345'),
(4, 'Ali ', 'Razzaq', '0332-4848456', 'alirazzaq12@gmail.com', '12345'),
(5, 'Arslan', 'Iqbal', '0307-0518955', 'arslaniqbal@gmail.com', '12345'),
(6, 'Kashif', 'Bashir', '0305-6313130', 'kashifbashir112@gmail.com', '12345'),
(7, 'Basit', 'Nazir', '0302-3334803', 'basitnazir@gmail.com', '12345'),
(10, 'Ali ', 'Ahmed', '03011234567', 'aliahmed12@gmail.com', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
