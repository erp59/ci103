-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 23, 2017 at 10:06 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `Guest`
--

CREATE TABLE `Guest` (
  `ID` int(6) NOT NULL,
  `rID` int(8) NOT NULL,
  `rusername` varchar(10) NOT NULL,
  `gusername` varchar(30) NOT NULL,
  `gfn` varchar(30) NOT NULL,
  `gln` varchar(30) NOT NULL,
  `gtnumber` int(12) NOT NULL,
  `hall` varchar(30) NOT NULL,
  `din` varchar(30) NOT NULL,
  `tin` varchar(20) NOT NULL,
  `dout` varchar(30) NOT NULL,
  `tout` varchar(20) NOT NULL,
  `pending` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Guest`
--

INSERT INTO `Guest` (`ID`, `rID`, `rusername`, `gusername`, `gfn`, `gln`, `gtnumber`, `hall`, `din`, `tin`, `dout`, `tout`, `pending`) VALUES
(382772, 12345678, 'jfc22', 'jlg26', 'John', 'Smith', 9640853, 'Race', 'May 23', '11:00AM', 'May 24', '11:00AM', 0),
(249112, 12345678, 'jfc22', 'jlg26', 'Joe', 'Dot', 9640853, 'Race', 'May 23', '12:00AM', 'May 24', '11:00AM', 0),
(545103, 12345678, 'jfc22', 'jlg26', 'Mike', 'Brown', 9640853, 'Race', 'May 23', '10:00AM', 'May 24', '11:00AM', 0),
(130867, 12345678, 'jfc22', 'jlg26', 'Mike', 'Brown', 9640853, 'Race', 'May 23', '10:00AM', 'May 24', '11:00AM', 1);
