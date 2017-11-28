-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2017 at 03:41 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_exhibitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `exhibitor`
--

CREATE TABLE `exhibitor` (
  `id` int(11) NOT NULL,
  `company_1` varchar(100) NOT NULL,
  `company_2` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(60) NOT NULL,
  `country_com` varchar(60) NOT NULL,
  `country_2` varchar(60) NOT NULL,
  `page` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `booth_no` varchar(20) NOT NULL,
  `doc_id` varchar(20) NOT NULL,
  `contactor` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exhibitor`
--

INSERT INTO `exhibitor` (`id`, `company_1`, `company_2`, `name`, `position`, `country_com`, `country_2`, `page`, `address`, `booth_no`, `doc_id`, `contactor`, `fax`, `phone`, `email`, `rank`, `status`) VALUES
(1, 'TIFF', 'tif', 'BENJAPORN', 'CHAIHARN', 'THAILAND', 'thai', 'FAIR', 'TT', '', '', 0, 0, 0, '', '', ''),
(2, 'TIF', 'tif', 'or', 'sale', 'THAILAND', 'thai', 'add', 'TT', '', '', 0, 0, 0, 'tt', '', ''),
(3, 'TIF', 'tif', 'or', 'sale', 'THAILAND', 'thai', '<br />\r\n<b>Notice</b', 'TT', '', '', 0, 0, 0, '', '', ''),
(4, 'TIF', 'tif', 'test', 'test', 'THAILAND', 'thai', '<br />\r\n<b>Notice</b', 'TT', '', '', 0, 0, 0, '', '', ''),
(5, 'TIF', 'tif', 'kk', 'kk', 'THAILAND', 'thai', 'add', 'TT', '', '', 0, 0, 0, '', '', ''),
(6, 'TIF', 'tif', '', '', 'THAILAND', 'thai', 'add', 'TT', '', '', 0, 0, 0, '', '', ''),
(7, 'TIF', 'tif', '', '', 'THAILAND', 'thai', 'add', 'TT', '', '', 0, 0, 0, '', '', ''),
(8, 'TIF', 'tif', '', '', 'THAILAND', 'thai', 'add', 'TT', '', '', 0, 0, 0, '', '', ''),
(9, 'TIF', 'tif', 'ฟฟ', '', 'THAILAND', 'thai', 'add', 'TT', '', '', 0, 0, 0, '', '', ''),
(10, 'TIF', 'tif', 'ฟฟ', '', 'THAILAND', 'thai', 'add', 'TT', '', '', 0, 0, 0, '', '', ''),
(11, 'TIF', 'tif', 'อิอิ', '', 'THAILAND', 'thai', 'add', 'TT', '', '', 0, 0, 0, '', '', ''),
(12, 'TIF', 'tif', 'กก', '', 'THAILAND', 'thai', 'add', 'TT', '', '', 0, 0, 0, '', '', ''),
(13, 'TIF', 'tif', 'หหห', '', 'THAILAND', 'thai', 'add', 'TT', '', '', 0, 0, 0, '', '', ''),
(14, 'com', 'comtest', 'name', 'it', 'japan', 'japan', 'FAIR', 'aa', '', '', 0, 0, 2147483647, 'orloft@com', '', ''),
(15, 'com', 'comtest', 'gg', 'sale', 'japan', 'japan', 'add', 'aa', '', '', 0, 0, 2147483647, '', '', ''),
(16, 'com', 'comtest', 'vv', 'sale', 'japan', 'japan', 'FAIR', 'aa', '', '', 0, 0, 0, 'rerer', '', ''),
(17, 'com', 'comtest', 'scsc', '', 'japan', 'japan', '<br />\r\n<b>Notice</b', 'aa', '', '', 0, 0, 0, '', '', ''),
(18, 'com', 'comtest', 'test', '', 'japan', 'japan', '<br />\r\n<b>Notice</b', 'aa', '', '', 0, 0, 0, '', '', ''),
(19, 'com', 'comtest', 'test', '', 'japan', 'japan', 'FAIR', 'aa', '', '', 0, 0, 0, '', '', ''),
(20, 'com', 'comtest', 'aa', '', 'japan', 'japan', 'FAIR', 'aa', '', '', 0, 0, 0, '', '', ''),
(21, 'com', 'comtest', 'test', '', 'japan', 'japan', 'FAIR', 'aa', '', '', 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(6, 'admin', 'orloft_or@hotmail.co.th', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-17 09:38:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exhibitor`
--
ALTER TABLE `exhibitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exhibitor`
--
ALTER TABLE `exhibitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
