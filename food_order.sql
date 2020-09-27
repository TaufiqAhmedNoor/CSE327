-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 09:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('', '', '', '', '', ''),
('3333333', '3333333', 'test@test.com', '3333333', '333', '3333'),
('cust@gmail.com', 'customer', 'test', '11111111111', 'test', '12345'),
('demo@gmail.com', 'demo', 'test', '333333', 'demo', '12345'),
('kaka@gmiil.com', 'kaka ', 'test', '22222', 'dkfjskf', '12345'),
('rrrrrrrrrrrr', 'rrrrrrr', 'test@test.com', '333', '33333333', '2222'),
('sdd@gmail.com', 'sdd', 'test', '0000', 'dhaka', '1234'),
('test', 'test', 'test@test.com', '11111111111', 'test', '12345'),
('testtkltjkj', 'test test', 'test@test.com', '11111111111', 'dsfdklsjfs', '12345'),
('testtkltjkjsdfdsfsdf', 'test test', 'test@test.com', '11111111111', 'dsfdklsjfs', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`F_ID`, `name`, `price`, `description`, `R_ID`, `images_path`, `options`) VALUES
(58, 'paneeer piza', 99, 'paneeer piza', 2, 'images/Masala_Paneer_Kathi_Roll.jpg', 'ENABLE'),
(59, 'burger paneer', 79, 'burger paneer', 2, 'images/Meurig.jpg', 'ENABLE'),
(60, 'aalu tika with paneer', 199, 'aalu tika with paneer', 2, 'images/Chocolate_Hazelnut_Truffle.jpg', 'ENABLE'),
(61, 'spetial paneer', 299, 'spetial paneer', 2, 'images/Happy_Happy_Choco_Chip_Shake.jpg', 'ENABLE'),
(62, 'spetial burger', 79, 'spetial burger', 2, 'images/Spring_Rolls.jpg', 'ENABLE'),
(63, 'bada thala', 399, 'bada thala', 2, 'images/Baahubali_Thali.jpg', 'ENABLE'),
(65, 'palak pyaz ', 49, 'palak pyaz ', 2, 'images/coffee.jpg', 'DISABLE'),
(66, 'tea with pyaz masala', 49, 'tea with pyaz masala', 2, 'images/tea.jpg', 'DISABLE'),
(68, 'tometo panir piza', 39, 'tometo panir piza', 2, 'images/paneer pakora.jpg', 'DISABLE'),
(80, 'sakutma paneer masala 	', 299, 'sakutma paneer masala ', 3, 'http://localhost/Online_Food_Order/images/db1.jpg', 'ENABLE'),
(81, 'pagdi band pizza', 69, 'pagdi band pizza', 3, 'http://localhost/Online_Food_Order/images/db2.jpg', 'ENABLE'),
(82, 'sfsfaajtak masala', 229, 'aajtak masala', 3, 'http://localhost/Online_Food_Order/images/db1.jpg', 'DISABLE');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `F_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `R_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `F_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`, `R_ID`) VALUES
(1, 59, 'Meurig Fish', 60, 1, '2020-08-01', 'test', 1),
(2, 60, 'Chocolate Hazelnut Truffle', 99, 1, '2020-08-01', 'test', 1),
(3, 60, 'Chocolate Hazelnut Truffle', 199, 1, '2020-08-03', 'kaka@gmiil.com', 2),
(4, 59, 'Meurig Fish', 79, 1, '2020-08-03', 'kaka@gmiil.com', 2),
(5, 61, 'Happy Happy Choco Chip Shake', 299, 1, '2020-08-03', 'kaka@gmiil.com', 2),
(6, 58, 'Juicy', 99, 1, '2020-08-03', 'kaka@gmiil.com', 2),
(7, 61, 'Happy Happy Choco Chip Shake', 299, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(8, 58, 'Juicy', 99, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(9, 60, 'Chocolate Hazelnut Truffle', 199, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(10, 61, 'Happy Happy Choco Chip Shake', 299, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(11, 58, 'Juicy', 99, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(12, 61, 'Happy Happy Choco Chip Shake', 299, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(13, 58, 'Juicy', 99, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(14, 61, 'Happy Happy Choco Chip Shake', 299, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(15, 58, 'Juicy', 99, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(16, 61, 'Happy Happy Choco Chip Shake', 299, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(17, 58, 'Juicy', 99, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(18, 61, 'Happy Happy Choco Chip Shake', 299, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(19, 58, 'Juicy', 99, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(20, 63, 'Baahubali Thali', 399, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(21, 63, 'Baahubali Thali', 399, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(22, 60, 'Chocolate Hazelnut Truffle', 199, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(23, 60, 'Chocolate Hazelnut Truffle', 199, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(24, 60, 'Chocolate Hazelnut Truffle', 199, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(25, 59, 'Meurig Fish', 79, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(26, 60, 'Chocolate Hazelnut Truffle', 199, 1, '2020-08-04', 'kaka@gmiil.com', 2),
(27, 63, 'Baahubali Thali', 399, 1, '2020-08-04', 'demo@gmail.com', 2),
(28, 80, 'fdsfas', 299, 1, '2020-08-04', 'demo@gmail.com', 2),
(29, 58, 'Juicy', 99, 1, '2020-08-04', 'demo@gmail.com', 2),
(30, 61, 'Happy Happy Choco Chip Shake', 299, 1, '2020-08-04', 'demo@gmail.com', 2),
(31, 60, 'Chocolate Hazelnut Truffle', 199, 1, '2020-08-05', 'cust@gmail.com', 2),
(32, 60, 'Chocolate Hazelnut Truffle', 199, 1, '2020-08-05', 'cust@gmail.com', 2),
(33, 60, 'Chocolate Hazelnut Truffle', 199, 1, '2020-08-05', 'cust@gmail.com', 2),
(34, 59, 'burger paneer', 79, 1, '2020-08-05', 'cust@gmail.com', 2),
(35, 60, 'aalu tika with paneer', 199, 1, '2020-08-05', 'cust@gmail.com', 2),
(36, 60, 'aalu tika with paneer', 199, 1, '2020-08-05', 'cust@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `R_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `M_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`R_ID`, `name`, `email`, `contact`, `address`, `M_ID`) VALUES
(1, 'Testi Restorent', 'test@admin.com', '7777777777777', 'test', 'admin@admin.com'),
(2, 'testi', 'test@test.com', '11111111111', 'teest', 'testm'),
(3, 'sdfds', 'test@test.com', 'sdfsd', 'dsfs', 'admin1@admin.com');

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
(7, 'Kacchi Wala', 'bro.jpg'),
(8, 'Sultan\'s dine', 'bro.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `F_ID` (`F_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`R_ID`),
  ADD UNIQUE KEY `M_ID_2` (`M_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- Indexes for table `restu`
--
ALTER TABLE `restu`
  ADD PRIMARY KEY (`res_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `R_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `restu`
--
ALTER TABLE `restu`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `food` (`F_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `manager` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
