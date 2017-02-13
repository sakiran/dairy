-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Host: 127.4.136.2:3306
-- Generation Time: Jan 04, 2017 at 04:50 PM
-- Server version: 5.5.52
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dairy`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordermanagement`
--

CREATE TABLE IF NOT EXISTS `ordermanagement` (
  `serialno` int(11) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `contactnumber` varchar(200) NOT NULL,
  `ordertime` int(11) NOT NULL,
  `ordertype` varchar(222) NOT NULL,
  `orderstatus` varchar(220) NOT NULL,
  `milkneeded` varchar(200) NOT NULL,
  `milktype` varchar(200) NOT NULL,
  `milkpacket` varchar(200) NOT NULL,
  `milkquantity` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordermanagement`
--

INSERT INTO `ordermanagement` (`serialno`, `userid`, `username`, `fromdate`, `todate`, `remarks`, `contactnumber`, `ordertime`, `ordertype`, `orderstatus`, `milkneeded`, `milktype`, `milkpacket`, `milkquantity`) VALUES
(0, 'DSG10B-505', 'DSG10B-505', '2017-01-03', '2017-01-05', 'Milk Not Required', '8884670700', 1483548564, '', 'in progress', 'no', 'no', 'no', 'no'),
(0, 'DSG10B-505', 'DSG10B-505', '2017-01-19', '2017-01-27', 'Not Required', '', 1483548593, '', 'in progress', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `usermanagement`
--

CREATE TABLE IF NOT EXISTS `usermanagement` (
  `userid` varchar(200) NOT NULL,
  `username` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `role` varchar(400) NOT NULL,
  `dateofjoining` varchar(400) NOT NULL,
  `homeaddress` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `phonenumber` varchar(400) NOT NULL,
  `userstatus` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usermanagement`
--

INSERT INTO `usermanagement` (`userid`, `username`, `password`, `role`, `dateofjoining`, `homeaddress`, `email`, `phonenumber`, `userstatus`) VALUES
('DSG10B-505', 'DSG10B-505', 'DSG10B-505', 'customer', '', 'DSG', '', '', 'active'),
('DSG10B-201', 'DSG10B-201', 'DSG10B-201', 'customer', '', 'DSG', '', '', 'active'),
('DSG11B-709', 'DSG11B-709', 'DSG11B-709', 'customer', '', 'DSG', '', '', 'active'),
('DSG11B-506', 'DSG11B-506', 'DSG11B-506', 'customer', '', 'DSG', '', '', 'active'),
('DSG11B-305', 'DSG11B-305', 'DSG11B-305', 'customer', '', 'DSG', '', '', 'active'),
('DSG11B-209', 'DSG11B-209', 'DSG11B-209', 'customer', '', 'DSG', '', '', 'active'),
('DSG11B-101', 'DSG11B-101', 'DSG11B-101', 'customer', '', 'DSG', '', '', 'active'),
('DSG8B-614', 'DSG8B-614', 'DSG8B-614', 'customer', '', 'DSG', '', '', 'active'),
('DSG8B-715', 'DSG8B-715', 'DSG8B-715', 'customer', '', 'DSG', '', '', 'active'),
('DSG8B-712', 'DSG8B-712', 'DSG8B-712', 'customer', '', 'DSG', '', '', 'active'),
('DSG8B-708', 'DSG8B-708', 'DSG8B-708', 'customer', '', 'DSG', '', '', 'active'),
('DSG8B-802', 'DSG8B-802', 'DSG8B-802', 'customer', '', 'DSG', '', '', 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
