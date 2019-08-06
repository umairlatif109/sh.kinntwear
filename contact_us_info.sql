-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2019 at 09:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shkintwear`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_info`
--

CREATE TABLE `contact_us_info` (
  `user_id` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phon_no` varchar(100) NOT NULL,
  `info_mail` varchar(250) NOT NULL,
  `marketing_mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us_info`
--

INSERT INTO `contact_us_info` (`user_id`, `address`, `phon_no`, `info_mail`, `marketing_mail`) VALUES
(7, ' P-139/140, Central Mills Road, Jhang Road, Faisalabad-Pakistan  ', ' +92-41-2653926  ', ' info@shknitwear.com ', 'marketing@shknitwear.com ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us_info`
--
ALTER TABLE `contact_us_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us_info`
--
ALTER TABLE `contact_us_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
