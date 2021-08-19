-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 12:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `msg_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `received_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `lname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`msg_id`, `id`, `fname`, `email`, `messages`, `received_at`, `lname`) VALUES
(10, 14, 'Kevin', 'manzi@gmail.com', 'hey , Huye we need other brands like tecno. thanks', '2021-08-19 21:51:21', 'Manzi');

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

CREATE TABLE `orderr` (
  `order_no` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `district` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `ordered_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Province` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `purchased_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` longblob DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `serial_no`, `product_name`, `brand`, `category`, `price`, `manufacturer`, `purchased_at`, `img`, `filename`) VALUES
(5, 0, 'iphone X', 'iPhone', 'Smart Phone', 170000, 'Apple', '2021-08-03 21:42:36', NULL, 'images/iphonexsmax.jpg'),
(6, 3444, 'Lenovo', 'Lenovo', 'Laptop', 40000, 'Lenovo', '2021-08-04 11:35:02', NULL, 'images/leno1.jpg'),
(7, 19, 'Hp Probook', 'Hp', 'Laptop', 400000, 'Hp', '2021-08-04 12:25:46', NULL, 'images/hp1.jpg'),
(8, 0, 'Abdul', 'iPhone', 'Smart Phone', 400000, 'Apple', '2021-08-04 12:56:23', NULL, 'images/iphone11.jpg'),
(10, 0, 'Hp Battery', 'Hp', 'Laptop', 2000, 'Hp', '2021-08-04 14:06:54', NULL, 'images/bat1.jpg'),
(12, 0, 'iPhone 11 promax 128gb', 'iPhone', 'Smart Phone', 1000000, 'Apple', '2021-08-05 10:36:58', NULL, 'images/11promax.jpg'),
(13, 0, 'iphone 7 128gb', 'iPhone', 'Smart Phone', 200000, 'Apple', '2021-08-05 10:39:55', NULL, 'images/iphone7.jpg'),
(14, 0, 'iphone7 plus 32gb', 'iPhone', 'Smart Phone', 270000, 'Apple', '2021-08-05 10:44:04', NULL, 'images/iphone7p.jpg'),
(15, 0, 'iPhone 12 526gb', 'iPhone', 'Smart Phone', 1200000, 'Apple', '2021-08-05 13:53:28', NULL, 'images/iphone12.jpg'),
(17, 3444, 'Lenovo Pro', 'Lenovo', 'Laptop', 1000000, 'Lenovo', '2021-08-16 14:21:11', NULL, 'images/leno1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `passwords`, `sex`, `age`, `created_at`) VALUES
(14, 'Kevin', 'Manzi', 'manzi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 28, '2021-08-19 21:10:04'),
(15, 'Bazambanza', 'Abdoulkalim', 'bzkarim250@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 25, '2021-08-19 22:06:50'),
(16, 'Yubahwe', 'Chris', 'chris@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 31, '2021-08-19 22:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_order_product`
--

CREATE TABLE `user_order_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_order_product`
--
ALTER TABLE `user_order_product`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_no` (`order_no`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orderr`
--
ALTER TABLE `orderr`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD CONSTRAINT `contact_us_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_order_product`
--
ALTER TABLE `user_order_product`
  ADD CONSTRAINT `user_order_product_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `user_order_product_ibfk_3` FOREIGN KEY (`order_no`) REFERENCES `orderr` (`order_no`),
  ADD CONSTRAINT `user_order_product_ibfk_4` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
