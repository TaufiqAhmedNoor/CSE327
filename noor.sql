-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 05:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noor`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_stock` int(11) NOT NULL,
  `item_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `res_id`, `item_name`, `item_price`, `item_stock`, `item_image`) VALUES
(1, 1, 'Biriyani', 150, 5, 'bro.jpg'),
(2, 2, 'fried', 23, 3, 'bro.jpg'),
(3, 3, 'Burger', 150, 5, 'bro.jpg'),
(4, 4, 'fried', 23, 3, 'bro.jpg'),
(5, 5, 'berani', 150, 5, 'bro.jpg'),
(6, 6, 'fried', 23, 3, 'bro.jpg'),
(7, 7, 'berani', 150, 5, 'bro.jpg'),
(8, 8, 'fried', 23, 3, 'bro.jpg'),
(9, 3, 'French Fry', 15, 5, 'bro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restu`
--

CREATE TABLE `restu` (
  `res_id` int(11) NOT NULL,
  `res_title` varchar(100) NOT NULL,
  `res_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restu`
--

INSERT INTO `restu` (`res_id`, `res_title`, `res_image`) VALUES
(1, 'Madchef', 'chef.jpg'),
(2, 'Chillox', 'bro.jpg'),
(3, 'Burgerology ', 'chef.jpg'),
(4, 'Takeout', 'bro.jpg'),
(5, 'Kacchi bhai', 'bro.jpg'),
(6, 'Magpie', 'bro.jpg'),
(7, 'kachchi', 'bro.jpg'),
(8, 'Sultan\'s dine', 'bro.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `restu`
--
ALTER TABLE `restu`
  ADD PRIMARY KEY (`res_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `restu`
--
ALTER TABLE `restu`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
