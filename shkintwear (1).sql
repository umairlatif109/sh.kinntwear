-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 03:53 PM
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
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `user_id` int(11) NOT NULL,
  `werbpage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`user_id`, `werbpage`) VALUES
(4, '  â€˜S.H. Knitwearâ€™ (previously known as Sardar Hosiery) is a leading Apparel Exporter, located in Faisalabad. Founded in mid-seventies and starting export in 1991, we have been serving our customers with our Quality of production.\r\n                        We have a vertically oriented production facility with in-house dyeing and production units. We are well-equipped and well-trained in Yarn to Pack textile manufacturing and are well-known due to our quality.  ');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `user_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`user_id`, `image`) VALUES
(7, '1563547153pacific-coast-copy.png'),
(8, '1563547158Picture1.png'),
(9, '1563547165Picture2.png'),
(10, '1563547170Picture3.png'),
(11, '1563547176Picture6.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_form`
--

CREATE TABLE `contact_us_form` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us_form`
--

INSERT INTO `contact_us_form` (`customer_id`, `name`, `email`, `mobile_number`, `subject`, `message`) VALUES
(25, 'plumbing1', 'usama @gmail.com', '123456', 'complain', 'WEREgrWetndtrndtrn'),
(26, 'usama ', 'umair_6565@yahoo.com', '03000116565', 'exelent', 'xfykmxrfdsfsvdssvsdf');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `user_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`user_id`, `image`) VALUES
(1, '1563539264contain.png'),
(2, '1563539320image8.png'),
(3, '1563539415image27.png'),
(4, '1563539425image24.png'),
(5, '1563539431image11.png'),
(6, '1563539436image5.png');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(10) NOT NULL,
  `imgpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `imgpath`) VALUES
(37, '1563546970Untitled-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(20) NOT NULL,
  `menu_name` varchar(20) NOT NULL,
  `menu_icon` varchar(30) NOT NULL,
  `menu_icon_last` varchar(50) NOT NULL,
  `menu_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_icon`, `menu_icon_last`, `menu_link`) VALUES
(19, 'HOME', '', '', '#home'),
(20, 'ABOUT', '', '', '#about'),
(21, 'HISTORY', '', '', '#history'),
(22, 'PRODUCT', '', '', '#product'),
(23, 'CLIENTS', '', '', '#client'),
(24, 'CONTACT', '', '', '#contact'),
(26, 'GALLERY', '', '', 'gallery.php');

-- --------------------------------------------------------

--
-- Table structure for table `mini_slider`
--

CREATE TABLE `mini_slider` (
  `user_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mini_slider`
--

INSERT INTO `mini_slider` (`user_id`, `image`) VALUES
(2, '1563537066aaaaa.jpg'),
(3, '1563537077Recovered.jpg'),
(4, '1563537087IMAG2442-449x253.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `our_history`
--

CREATE TABLE `our_history` (
  `user_id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_history`
--

INSERT INTO `our_history` (`user_id`, `year`, `description`) VALUES
(3, '1983 ', 'Another production unit was launched to increase production capacity hence meeting market demands'),
(4, '2000 ', 'Things moved on and we shifted totally to export being an sole export oriented production setup'),
(7, '2010\r\n\r\n', 'Things moved on and we shifted totally to export being an sole export oriented production setup'),
(8, '2010\r\n', 'Things moved on and we shifted totally to export being an sole export oriented production setup');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'ali', 'ali@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(2, 'umair latif', 'umair109109@gmail.com', '6297664bc2451adaa477350e376d87c3ed82d79fbf6b0e981569af2c73c987a5'),
(3, 'm umair', 'umair@gmail.com', '5f6121bc06e18e209920d57d2f16b17cc82dfc2ade1d375d6951b99c65d1b89d'),
(4, 'asad', 'asad.best.ab@gmail.com', 'b0b818cd5e235dda583aa6ec6f47a71038250ff9d7797cd4836822ac4ef75989');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `mini_slider`
--
ALTER TABLE `mini_slider`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `our_history`
--
ALTER TABLE `our_history`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `mini_slider`
--
ALTER TABLE `mini_slider`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `our_history`
--
ALTER TABLE `our_history`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
