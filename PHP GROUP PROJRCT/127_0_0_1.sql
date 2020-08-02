-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 09:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus booking`
--
CREATE DATABASE IF NOT EXISTS `bus booking` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bus booking`;

-- --------------------------------------------------------

--
-- Table structure for table `busschedule`
--

CREATE TABLE `busschedule` (
  `id` int(11) NOT NULL,
  `buses` varchar(65) NOT NULL,
  `toDest` varchar(65) NOT NULL,
  `fromDest` varchar(65) NOT NULL,
  `departDate` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `busschedule`
--

INSERT INTO `busschedule` (`id`, `buses`, `toDest`, `fromDest`, `departDate`) VALUES
(1, 'ABC 1234', 'Kuala Lumpur', 'Penang', '01/01/2020'),
(2, 'ABC 1234', 'Penang', 'Kuala Lumpur', '01/01/2020');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `creditCard` varchar(16) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `expiration` varchar(7) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNum` varchar(11) NOT NULL,
  `busid` int(11) NOT NULL,
  `ticketNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `name`, `creditCard`, `cvv`, `expiration`, `email`, `phoneNum`, `busid`, `ticketNum`) VALUES
(1, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 2, 1),
(2, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 2, 1),
(3, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 2, 1),
(4, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busschedule`
--
ALTER TABLE `busschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `busschedule`
--
ALTER TABLE `busschedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
