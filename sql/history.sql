-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 25, 2017 at 07:09 PM
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
  `ID` int(6) NOT NULL,
  `rID` int(8) NOT NULL,
  `rusername` varchar(10) NOT NULL,
  `gusername` varchar(30) NOT NULL,
  `gfn` varchar(30) NOT NULL,
  `gln` varchar(30) NOT NULL,
  `gtnumber` int(12) NOT NULL,
  `hall` varchar(30) NOT NULL,
  `din` varchar(30) NOT NULL,
  `tin` varchar(30) NOT NULL,
  `dout` varchar(30) NOT NULL,
  `tout` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`ID`, `rID`, `rusername`, `gusername`, `gfn`, `gln`, `gtnumber`, `hall`, `din`, `tin`, `dout`, `tout`) VALUES
(0, 12569439, 'erp59', '', 'Franco', 'Pettigrosso', 0, 'race', '123wf', '12312', '12312', '2332'),
(755929, 12345678, 'jfc22', 'jlg26', 'Mike', 'Brown', 9640853, 'Race', 'May 23', '10:00AM', 'May 24', '11:00AM');
