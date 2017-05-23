-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 23, 2017 at 10:07 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(8) NOT NULL,
  `ruserName` varchar(10) NOT NULL,
  `gFirstName` varchar(30) NOT NULL,
  `gLastName` varchar(30) NOT NULL,
  `hall` varchar(30) NOT NULL,
  `dateIn` varchar(30) NOT NULL,
  `timeIn` varchar(30) NOT NULL,
  `dateOut` varchar(30) NOT NULL,
  `timeOut` varchar(30) NOT NULL,
  `guserName` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `ruserName`, `gFirstName`, `gLastName`, `hall`, `dateIn`, `timeIn`, `dateOut`, `timeOut`, `guserName`) VALUES
(12569439, 'erp59', 'Franco', 'Pettigrosso', 'race', '123wf', '12312', '12312', '2332', NULL);
