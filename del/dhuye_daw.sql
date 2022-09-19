-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 06:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhuye_daw`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(20) NOT NULL,
  `val` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `val`) VALUES
(3, 'not very good\r\n'),
(3, 'sdfdsfadsfasdf'),
(3, 'Behaviour is not good\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `c_name` varchar(30) DEFAULT NULL,
  `c_contact` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `loaction` varchar(20) DEFAULT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `u_id`, `c_name`, `c_contact`, `email`, `loaction`, `Image`) VALUES
(1, 1, 'Adrito', '1234568', 'adrito.mustagaa@gmail.com', 'Khilgaon', ''),
(2, 2, 'Rahim', '125347', 'ra@gmail.com', 'Rampura', ''),
(3, 10, 'Tahlil', '01869196215', 'tahlil@gmail.com', 'Gulshan', '');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_man`
--

CREATE TABLE `delivery_man` (
  `d_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `dm_name` varchar(30) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `dm_contact` varchar(30) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `loactio` varchar(20) DEFAULT NULL,
  `Delivery Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_man`
--

INSERT INTO `delivery_man` (`d_id`, `u_id`, `dm_name`, `password`, `dm_contact`, `s_id`, `loactio`, `Delivery Status`) VALUES
(3, 1, 'Rakib', '1234', '09876', 1, 'Khilgaon', 0),
(4, 3, 'Shanto', '1234', '123126387', 1, 'Rampura', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `feed` varchar(255) NOT NULL,
  `rating` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feed`, `rating`) VALUES
(3, 'Azim Votka', 0),
(3, 'Hello :)', 0),
(3, 'Hello :)', 4),
(0, 'Kaj kore na', 5),
(3, 'baje delivery', 1),
(3, 'hello \r\n', 5),
(3, 'nice', 4);

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `u_type` varchar(20) DEFAULT NULL,
  `Image` blob NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`u_id`, `u_name`, `email`, `pass`, `u_type`, `Image`, `token`) VALUES
(1, 'adrito', 'adrito.mustafa@gmail.com', '1234', 'admin', '', ''),
(2, 'Rahim', '', '1234', 'Customer', 0x30, ''),
(3, 'shanto', '', '1234', 'delivery man', 0x30, ''),
(4, 'sh21', '', '1234', 'Shopper', 0x30, ''),
(8, 'sultan', '', '1234', 'Customer', 0x30, ''),
(9, 'admin', '', '1234', 'admin', 0x30, ''),
(10, 'Tahlil', '', '1234', 'User', 0x30, ''),
(12, 'mustafa', '', '1234', 'admin', 0x30, '');

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `o_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `c_name` varchar(20) NOT NULL,
  `s_id` int(11) DEFAULT NULL,
  `pickman_id` int(11) DEFAULT NULL,
  `dropup_id` int(11) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `d_location` varchar(20) DEFAULT NULL,
  `c_contact` varchar(30) DEFAULT NULL,
  `o_progress` varchar(20) DEFAULT 'pending',
  `Orderdate` date NOT NULL DEFAULT current_timestamp(),
  `d_date` varchar(20) DEFAULT NULL,
  `bill` varchar(20) DEFAULT NULL,
  `d_type` varchar(20) DEFAULT NULL,
  `p_type` varchar(20) DEFAULT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  `d_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`o_id`, `c_id`, `c_name`, `s_id`, `pickman_id`, `dropup_id`, `area`, `d_location`, `c_contact`, `o_progress`, `Orderdate`, `d_date`, `bill`, `d_type`, `p_type`, `s_name`, `d_status`) VALUES
(2, 1, '', 1, 3, 2, 'malibagh', 'malibagh', '1234568', 'Delivered', '2022-09-01', NULL, '350', 'R', 'cod', NULL, 1),
(3, 2, '', 1, 4, 2, 'Malibagh', 'Malibagh', '7128935', NULL, '2022-09-01', NULL, '200', 'Regular', 'cod', NULL, 0),
(20, 1, '', 8, NULL, NULL, 'Mohammadpur', '', '', 'Delivered', '2022-09-01', NULL, '', 'Express Delivery', 'visa', 'Sheba dry clean', 1),
(21, 1, '', 10, NULL, NULL, 'Mohammadpur', 'Khilgaon', '1234568', NULL, '2022-09-01', NULL, '', 'Express Delivery', 'COD', 'Dhuye Daw', 0),
(22, 1, '', 8, NULL, NULL, 'Malibagh', 'Khilgaon', '1234568', NULL, '2022-09-01', NULL, '', 'Express Delivery', 'visa', 'Sheba dry clean', 0),
(23, 1, '', 8, NULL, NULL, 'Malibagh', 'Khilgaon', '1234568', NULL, '2022-09-01', NULL, '', 'Express Delivery', 'visa', 'Sheba dry clean', 0),
(24, 1, 'Jalal', 10, 4, 4, 'Malibagh', 'Khilgaon', '1234568', 'pick', '2022-09-01', NULL, '', 'Express Delivery', 'visa', 'Dhuye Daw', 0),
(25, 1, '', 10, NULL, NULL, 'Mohammadpur', 'Khilgaon', '1234568', NULL, '2022-09-01', NULL, '', 'Regular Delivery', 'COD', 'Dhuye Daw', 0),
(30, 1, '', 8, NULL, NULL, 'Mohammadpur', 'Khilgaon', '1234568', NULL, '2022-09-01', NULL, '100', 'Express Delivery', 'visa', 'Sheba dry clean', 0),
(31, 1, '', 8, NULL, NULL, 'Mohammadpur', 'Khilgaon', '1234568', NULL, '2022-09-01', NULL, '', 'Regular Delivery', 'COD', 'Sheba dry clean', 0),
(32, NULL, 'Tahlil', NULL, 3, 2, 'malibagh', 'malibagh', '01869196215', 'pick', '2022-09-01', NULL, '200', 'Regular', 'cod', 'Bandbox', 0),
(33, NULL, 'Rahim', 1, 3, NULL, 'malibagh', 'malibagh', '1234568', 'pick', '2022-09-01', NULL, '350', 'Regular', 'cod', 'Bandbox', 0),
(34, NULL, 'Rahim', 1, 3, 3, 'Rampura', 'Rampura', '038068q430980', 'picked', '2022-09-02', NULL, '180', 'Regular', 'cod', 'Bandbox', 0),
(35, NULL, 'Sakib', 8, 4, 4, 'Hazipara', 'Hazipara', '221454785', 'Delivered', '2022-09-03', NULL, '220', 'Regular', 'cod', 'shop1', 1),
(36, NULL, 'Sadik', 15, 4, NULL, 'Rampura', 'Rampura', '89764786987', '', '2022-09-03', NULL, '290', 'Regular', 'cod', 'shop1', 0),
(37, NULL, 'nazmul', 15, 3, 3, 'Rampura', 'Rampura', '757531120877', 'pick', '2022-09-04', NULL, '560', 'Regular', 'cod', 'Bandbox', 0),
(38, NULL, 'Sultan', 15, 4, 4, 'malibagh', 'malibagh', '8375893179', 'Delivered', '2022-09-05', NULL, '340', 'Regular', 'cod', 'shop2', 1),
(39, 1, 'Badhon', 1, 3, 3, 'Notun Bazar', 'Notun Bazar', '01823893688', 'pick', '2022-09-18', '18/9/2022', '80', 'Regular', 'COD', NULL, 0),
(40, 1, 'Azim', 10, 3, 3, 'Gulshan', 'Gulshan', '01895995959', 'pending', '2022-09-18', '18/9/2022', '120', 'Regular', 'COD', NULL, 0),
(41, 3, 'Rezab', 15, 3, 3, 'SayedNagar', 'SayedNagar', '01895995959', 'pick', '2022-09-18', '18/9/2022', '60', 'Regular', 'COD', NULL, 0),
(42, 3, 'Rezab', 15, 3, 3, 'SayedNagar', 'SayedNagar', '01867884555', 'pending', '2022-09-18', '18/9/2022', '60', 'Regular', 'COD', NULL, 0),
(43, 2, 'Joy', 10, 3, 3, 'Baridhara', 'Baridhara', '0196856877', 'pending', '2022-09-18', '18/9/2022', '90', 'Regular', 'COD', NULL, 0),
(44, 1, 'JAHID', 11, 3, 3, 'Notun Bazar', 'Notun Bazar', '01428852255', 'pending', '2022-09-18', '18/9/2022', '180', 'Regular', 'COD', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `price_list`
--

CREATE TABLE `price_list` (
  `f_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `iron_price` varchar(20) DEFAULT NULL,
  `wash_price` varchar(20) DEFAULT NULL,
  `drywash_price` int(11) DEFAULT NULL,
  `shoepolish` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price_list`
--

INSERT INTO `price_list` (`f_id`, `name`, `iron_price`, `wash_price`, `drywash_price`, `shoepolish`) VALUES
(1, 'Shirt', '8', '15', 20, '0'),
(2, 'T-Shirt', '8', '15', 20, '0'),
(3, 'Shoes', '0', '0', 0, '30'),
(5, 'Panjabi', '10', '25', 30, '0'),
(6, 'Saree(cotton)', '50', '80', 100, '0'),
(7, 'Bed Sheet(small)', '30', '50', 80, '0'),
(8, 'Coat/Blazer', '50', '120', 200, '0'),
(9, 'Jacket(leather)', '0', '0', 300, '0'),
(10, 'Casual shoe', '0', '0', 0, '65'),
(11, 'slippers', '0', '0', 0, '20'),
(13, 'Lungi', '10', '0', 0, '0'),
(14, 'Cartin (up to 3 ft)', '50', '80', 0, '0'),
(15, 'Cartin (up to 4 ft)', '60', '80', 0, '0'),
(16, 'Cartin (up to 6 ft)', '70', '85', 0, '0'),
(19, 'Pant', '10', '50', 70, '0'),
(24, 'kameez', '15', '50', 0, '0'),
(25, 'sultan', '', '', 0, ''),
(26, 'sultan', '', '', 0, ''),
(27, 'sultan', '', '', 0, ''),
(28, 'sultan', '', '', 0, ''),
(29, 'Half Shoe', '0', '0', 0, '25');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `p_id` int(11) NOT NULL,
  `promo_code` varchar(30) DEFAULT NULL,
  `active_start` varchar(20) DEFAULT NULL,
  `active_end` varchar(20) DEFAULT NULL,
  `promo_value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `s_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  `s_contact` varchar(30) DEFAULT NULL,
  `s_email` varchar(30) DEFAULT NULL,
  `s_loaction` varchar(20) DEFAULT NULL,
  `s_area` varchar(20) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`s_id`, `u_id`, `s_name`, `s_contact`, `s_email`, `s_loaction`, `s_area`, `pass`) VALUES
(1, 1, 'Bandbox', '123456789', 'bb@gmail.com', 'Rampura', 'Rampura', '1234'),
(8, NULL, 'Sheba dry clean', '0184363477', 'sdcln@gmail.com', 'Khilgaon', 'khilgaon', '1234'),
(10, NULL, 'Dhuye daw', '01950463204', 'ddaw@gmail.com', 'Kalluanpur', 'Mirpur', '12334455'),
(11, NULL, 'Washout', '347596783q', 'wout@gmail.com', 'Dhanmondi', 'Dhanmondi', '1234'),
(12, NULL, 'shop1', '91083051', 'so1@gmail.com', 'bonosree', 'bonosree', '1234'),
(15, NULL, 'so2', '92360219', 'so@gmail.com', 'Bashabo', 'bashabo', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `delivery_man`
--
ALTER TABLE `delivery_man`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `pickman_id` (`pickman_id`);

--
-- Indexes for table `price_list`
--
ALTER TABLE `price_list`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery_man`
--
ALTER TABLE `delivery_man`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_data`
--
ALTER TABLE `order_data`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `price_list`
--
ALTER TABLE `price_list`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `login_info` (`u_id`);

--
-- Constraints for table `delivery_man`
--
ALTER TABLE `delivery_man`
  ADD CONSTRAINT `delivery_man_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `login_info` (`u_id`),
  ADD CONSTRAINT `delivery_man_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `shop` (`s_id`);

--
-- Constraints for table `order_data`
--
ALTER TABLE `order_data`
  ADD CONSTRAINT `order_data_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `order_data_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `shop` (`s_id`),
  ADD CONSTRAINT `order_data_ibfk_3` FOREIGN KEY (`pickman_id`) REFERENCES `delivery_man` (`d_id`);

--
-- Constraints for table `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `shop_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `login_info` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
