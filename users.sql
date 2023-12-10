-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 07:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `userID` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `twitter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`userID`, `firstname`, `lastname`, `username`, `email`, `password`, `twitter`) VALUES
(7, 'admin', 'test', 'ryuchi', 'admin@test.com', '$2y$10$iUlrOO9flxmEP9VVUGmEUOwha4sx4NWRipg2TEiZpX6Txji3gBO.K', '');

-- --------------------------------------------------------

--
-- Table structure for table `archive_profile`
--

CREATE TABLE `archive_profile` (
  `userID` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `twitter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archive_profile`
--

INSERT INTO `archive_profile` (`userID`, `firstname`, `lastname`, `username`, `email`, `password`, `twitter`) VALUES
(1, NULL, NULL, 'test', 'test@gmail.com', '$2y$10$y8nq/zkOuXikfXw0pMMgROQkN2KZXsp42keR8WPlHeWZpJFC0ebQ6', NULL),
(2, NULL, NULL, 'test', 'test@gmail.com', '$2y$10$SvhHNIdZoIvAc7HJGIfu1uaFb8bjXXz65C8BvoYGMoYr4L3h14kIS', NULL),
(3, NULL, NULL, 'test', 'testEmail@gmail.com', '$2y$10$rS3dlNMWdz3ZJnnIlSluiOt5bxCVH0av.SUEaNpOrRwbgvTJzYNhq', NULL),
(4, 'tes', 'ting', 'newtest', 'new@new.com', '$2y$10$FTgxfF3tRaPKjclmIL6s/.zd6OFJdxIa5ff7LG8NWxUQwiVx8lB1a', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `art_price`
--

CREATE TABLE `art_price` (
  `ID` int(11) NOT NULL,
  `portrait` int(10) DEFAULT NULL,
  `halfBody` int(10) DEFAULT NULL,
  `landscape` int(10) DEFAULT NULL,
  `Live2D_Model` int(10) DEFAULT NULL,
  `Colored` int(10) DEFAULT NULL,
  `blacknwhite` int(10) DEFAULT NULL,
  `revision` int(10) NOT NULL,
  `sketch` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `art_price`
--

INSERT INTO `art_price` (`ID`, `portrait`, `halfBody`, `landscape`, `Live2D_Model`, `Colored`, `blacknwhite`, `revision`, `sketch`) VALUES
(1, 50, 25, 100, 250, 25, 15, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `artType` varchar(250) NOT NULL,
  `style` varchar(255) DEFAULT NULL,
  `paymentMethod` varchar(50) NOT NULL,
  `pm_referenceNumber` varchar(255) NOT NULL,
  `commissionDetails` varchar(2500) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `userID`, `username`, `firstname`, `lastname`, `email`, `twitter`, `artType`, `style`, `paymentMethod`, `pm_referenceNumber`, `commissionDetails`, `total`, `status`) VALUES
(247, 7, 'dasda', 'asdsa', 'asdsada', 'asdsa@gmail.com', '', 'Portrait', 'BlackNWhite', 'Paypal', 'asdsad', 'asdsad', 65, ''),
(248, 7, 'xcvxcvcx@gmai', 'cvcxv', 'cvxcv', 'xcvxcvcx@gmail.com', '', 'Live2D_Model', 'Colored', 'GoTyme Bank', 'asdsa', 'asdsa', 275, '');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_images`
--

CREATE TABLE `portfolio_images` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `card_identifier` int(11) NOT NULL,
  `card_text` varchar(1500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `portfolio_images`
--

INSERT INTO `portfolio_images` (`id`, `filename`, `card_identifier`, `card_text`) VALUES
(391, '1702230956_4.jpg', 4, NULL),
(390, '1702230929_3.jpg', 3, NULL),
(389, '1702230915_3.jpg', 3, NULL),
(388, '1702230895_2.jpg', 2, NULL),
(387, '1702230888_2.jpg', 2, NULL),
(386, '1702230878_1.jpg', 1, '                                  Testing of commission description.'),
(392, '1702230965_5.jpg', 5, NULL),
(393, '1702230971_5.jpg', 5, NULL),
(394, '1702230986_4.png', 4, NULL),
(395, '1702231003_4.png', 4, NULL),
(396, '1702231012_4.jpg', 4, NULL),
(397, '1702231025_4.png', 4, NULL),
(398, '1702231038_4.png', 4, NULL),
(399, '1702231066_4.jpg', 4, NULL),
(400, '1702231074_5.jpg', 5, NULL),
(401, '1702231082_5.jpg', 5, NULL),
(402, '1702231090_6.jpg', 6, NULL),
(403, '1702231240_6.jpg', 6, NULL),
(404, '1702231278_6.jpg', 6, NULL),
(405, '1702231296_6.jpg', 6, NULL),
(406, '1702231314_6.jpg', 6, NULL),
(407, '1702231324_7.jpg', 7, NULL),
(408, '1702231329_8.jpg', 8, NULL),
(409, '1702231341_5.jpg', 5, NULL),
(410, '1702231352_5.jpg', 5, NULL),
(411, '1702231383_5.jpg', 5, NULL),
(412, '1702231397_5.jpg', 5, NULL),
(413, '1702231415_9.png', 9, NULL),
(414, '1702231431_6.png', 6, NULL),
(415, '1702231453_6.jpg', 6, NULL),
(416, '1702231480_6.jpg', 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `userID` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `twitter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`userID`, `firstname`, `lastname`, `username`, `email`, `password`, `twitter`) VALUES
(30, 'first', 'name', 'void', 'void@gmail.com', '$2y$10$I4DAgIp7tS..TuRC8hInB.e8cxQqg8.hMVPiKRii1kHRsVqg7AUMu', ''),
(31, NULL, NULL, 'voidstalk', 'voiding@gmail.com', '$2y$10$FHwmJUNlh/AUl3XQZDEq1OZ243edHRpGFuik2V.SG0.Zaba7gtmqO', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `archive_profile`
--
ALTER TABLE `archive_profile`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `archive_profile`
--
ALTER TABLE `archive_profile`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=418;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
