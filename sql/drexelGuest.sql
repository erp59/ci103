-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 21, 2017 at 02:37 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `drexelGuest`
--

CREATE TABLE `drexelGuest` (
  `sessionID` int(8) NOT NULL,
  `username` varchar(10) NOT NULL,
  `fName` varchar(30) NOT NULL,
  `lName` varchar(30) NOT NULL,
  `rusername` varchar(10) NOT NULL,
  `hall` varchar(30) NOT NULL,
  `dateIn` varchar(30) NOT NULL,
  `timeIn` varchar(30) NOT NULL,
  `dateOut` varchar(30) NOT NULL,
  `timeOut` varchar(30) NOT NULL,
  `pending` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drexelGuest`
--

INSERT INTO `drexelGuest` (`sessionID`, `username`, `fName`, `lName`, `rusername`, `hall`, `dateIn`, `timeIn`, `dateOut`, `timeOut`, `pending`) VALUES
(12569439, 'erp59', 'Elio', 'Pettigrosso', 'jfc22', 'Race', '', '', '', '', 1);