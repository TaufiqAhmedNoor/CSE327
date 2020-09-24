-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 07:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `restu`
--

CREATE TABLE `restu` (
  `res_id` int(11) NOT NULL,
  `res_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restu`
--

INSERT INTO `restu` (`res_id`, `res_title`) VALUES
(1, 'Burgerology'),
(2, 'Kacchiwala'),
(3, 'Kacchi bhai'),
(4, 'Khana's'),
(5, 'Chillox'),
(6, 'Takeout'),
(7, 'Madchef'),
(8, 'Sultans dine');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restu`
--
ALTER TABLE `restu`
  ADD PRIMARY KEY (`res_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restu`
--
ALTER TABLE `restu`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
