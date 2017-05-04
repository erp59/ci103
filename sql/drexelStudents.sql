-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 21, 2017 at 02:38 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `drexelStudents`
--

CREATE TABLE `drexelStudents` (
  `id` int(8) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fName` varchar(30) NOT NULL,
  `lName` varchar(30) NOT NULL,
  `hall` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drexelStudents`
--

INSERT INTO `drexelStudents` (`id`, `username`, `password`, `fName`, `lName`, `hall`) VALUES
(12345678, 'abc123', 'abc123', 'test', 'user', 'Race'),
(12457638, 'saa75', 'saa75', 'Sam', 'Alston', NULL),
(12569439, 'erp59', 'erp59', 'Elio', 'Pettigrosso', 'Race'),
(19234567, 'jfc22', 'jfc22', 'Joseph', 'Cappello', 'Canneris'),
(21346578, 'jlg26', 'jlg26', 'Jennifer', 'Gay', NULL),
(87654321, 'cba321', 'cba321', 'Nondorm', 'User', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drexelStudents`
--
ALTER TABLE `drexelStudents`
 ADD PRIMARY KEY (`id`);
