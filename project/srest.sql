-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 05:11 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srest`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `etype` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `phone`, `etype`, `password`) VALUES
(4, 'Ragib2', '1556656', 'cook', ''),
(3, 'Ragib1', '012354658', 'admin', ''),
(5, 'asd', '1234', 'staff', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(255) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `totalPrice` int(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `uid`, `totalPrice`, `status`) VALUES
(1, '01534556362', 600, 1),
(2, '01534556362', 600, 1),
(3, '01686662976', 0, 1),
(4, '01686662976', 150, 1),
(5, '01686662976', 150, 0),
(6, '01686662976', 150, 0),
(7, '01686662976', 150, 0),
(8, '01686662976', 150, 0),
(9, '01686662976', 150, 0),
(10, '01686662976', 0, 0),
(11, '01686662976', 0, 0),
(12, '01686662976', 150, 0),
(13, '01686662976', 150, 0),
(14, '01686662976', 150, 0),
(15, '01686662976', 150, 0),
(16, '01686662976', 150, 0),
(17, '01686662976', 150, 0),
(18, '01686662976', 150, 0),
(19, '01686662976', 150, 0),
(20, '01686662976', 150, 0),
(21, '01686662976', 300, 2);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `category`, `price`) VALUES
(2, 'Garlic Cheese Bread', 'appetizer', 150),
(3, 'Beef Burger', 'burgers', 0),
(4, 'Chicken Burger', 'burgers', 0),
(5, 'Caeser Salad', 'sides', 0),
(6, 'Paani Puri', 'sides', 0),
(7, 'Beef Pizza', 'mains', 0),
(8, 'Mexican Tacos', 'mains', 0),
(9, 'Oven Baked Pasta', 'mains', 0),
(10, 'Pepsi', 'drinks', 0),
(11, 'Mountain Dew', 'drinks', 0),
(12, 'Mirinda', 'drinks', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `invoiceId` int(255) NOT NULL,
  `itemId` int(3) NOT NULL,
  `itemQuantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoiceId`, `itemId`, `itemQuantity`) VALUES
(1, 17, 2, 1),
(2, 18, 2, 1),
(3, 19, 2, 1),
(4, 20, 2, 1),
(5, 20, 3, 1),
(6, 21, 4, 1),
(7, 21, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(11) NOT NULL,
  `pass` varchar(18) NOT NULL,
  `userType` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pass`, `userType`) VALUES
('01534556362', '1234', 'admin'),
('01686662976', '1234', ''),
('01686663363', '1234', ''),
('01686662971', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
