-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 08:21 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `otherinfo`
--

CREATE TABLE `otherinfo` (
  `id` int(5) NOT NULL,
  `visitorid` varchar(50) NOT NULL,
  `intime` time(6) NOT NULL,
  `outtime` time(6) NOT NULL,
  `refid` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `accessories` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otherinfo`
--

INSERT INTO `otherinfo` (`id`, `visitorid`, `intime`, `outtime`, `refid`, `company`, `department`, `contactno`, `accessories`, `status`) VALUES
(3, '1', '00:00:00.000000', '23:40:00.000000', '420', 'RSG', 'mca', '7004505378', 'other,Pendrive', 1),
(4, '1', '00:00:12.000000', '15:33:00.000000', '420', 'RSG', 'mca', '7004505378', 'other,Pendrive', 1),
(5, '1', '13:20:00.000000', '14:07:00.000000', '420', 'RSG', 'mca', '7004505378', 'other,Pendrive', 1),
(6, '3', '04:40:00.000000', '00:00:00.000000', '44444', 'ASILICON DESIGN', 'aAaA', '7004505378', '', 0),
(7, '3', '04:40:00.000000', '11:11:00.000000', '44444', 'ASILICON DESIGN', 'aAaA', '7004505378', '', 1),
(8, '4', '15:03:00.000000', '15:04:00.000000', '12', 'SYNAPSE DESIGN', 'ca', '5555555555', 'mobile,laptop,Pendrive', 1),
(9, '5', '16:12:00.000000', '16:13:00.000000', '546546', 'SYNAPSE DESIGN', 'fdfdf', '5634565465', 'mobile,laptop,Pendrive', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'shashank', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `visitorinfo`
--

CREATE TABLE `visitorinfo` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `vanno` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitorinfo`
--

INSERT INTO `visitorinfo` (`id`, `name`, `mobileno`, `vanno`, `email`, `company`, `remark`, `image`) VALUES
(1, 'Shashnk Shekhar', 2147483647, 8668, 'shashankshekhar543@gmail.com', 'wipro', 'good', 0),
(2, 'Arjun Kumar 1 1', 2147483647, 11111111, 'shashankshekhar@gmail.com', 'xyzzzzzzzzzzzzzzz', 'ggggggggggggggggggg', 0),
(3, 'Shashank Shekhar', 2147483647, 8556, 'shashankshekhar543@gmail.com', 'abc', 'sdd', 0),
(4, 'Nill', 2147483647, 0, 'nill@gmail.com', 'mmi', 'goood', 0),
(5, 'sahashank', 2147483647, 0, 'shashank@gmail.com', 'caaahhhhh', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `otherinfo`
--
ALTER TABLE `otherinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `visitorinfo`
--
ALTER TABLE `visitorinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `otherinfo`
--
ALTER TABLE `otherinfo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitorinfo`
--
ALTER TABLE `visitorinfo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
