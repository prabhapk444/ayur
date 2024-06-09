-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 01:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `quantity`, `amount`, `status`) VALUES
(101, 9, 4, 1, 450, 1),
(102, 9, 11, 1, 800, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `confirmaddress` varchar(255) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `delivery` datetime NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `product`, `email`, `number`, `city`, `address`, `confirmaddress`, `pincode`, `delivery`, `total_amount`, `payment_method`) VALUES
(27, 'pk', 'Greasy Scalp Hydration Kit', 'viperprabhakaran@gmail.com', '6383786437', 'sivakasi', 'hii', 'hii', '626130', '2024-03-30 00:00:00', '800.00', 'cash'),
(28, 'pk', 'Greasy Scalp Hydration Kit', 'viperprabhakaran@gmail.com', '6383786437', 'sivakasi', 'hii', 'hii', '626130', '2024-03-30 00:00:00', '800.00', 'cash'),
(29, 'pk', 'Greasy Scalp Hydration Kit', 'viperprabhakaran@gmail.com', '6383786437', 'sivakasi', 'hii', 'hii', '626130', '2024-03-30 00:00:00', '800.00', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `quantity` varchar(250) DEFAULT NULL,
  `rate` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `product_id`, `user_id`, `name`, `state`, `quantity`, `rate`, `amount`) VALUES
(139, 4, 5, 'pk', 'success', '1', '450', '₹450.00'),
(140, 11, 5, 'pk', 'success', '1', '800', '₹800.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `availablequantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `description`, `price`, `quantity`, `availablequantity`, `image`) VALUES
(2, 'Anuva Moisturizing ', 'skin', 'Anuva Moisturizing it is  Face Wash . ', 500, 198, 200, 'C:/xampp/htdocs/ayur/uploads/Anuva-01-removebg-preview.png'),
(3, 'Drithi Ultra Gentle', 'skin', 'Drithi Ultra Gentle it is ,Face Wash', 500, 97, 100, 'C:/xampp/htdocs/ayur/uploads/Driti-02-removebg-preview.png'),
(4, 'Anaha Deep Cleansing', 'skin', 'Anaha Deep Cleansing it is  Face Wash', 450, 78, 80, 'C:/xampp/htdocs/ayur/uploads/Anaha-01_-removebg-preview.png'),
(5, 'Ahuta Root Stimulating', 'hair', 'Ahuta Root Stimulating ', 600, 50, 50, 'C:/xampp/htdocs/ayur/uploads/Ahuta--Root-Stimulating-Hair-oil_400x400-removebg-preview.png'),
(6, 'Jeevath Root Stimulating', 'hair', 'Jeevath Root Stimulating', 600, 98, 100, 'C:/xampp/htdocs/ayur/uploads/Jeevath-Root-Stimulating-Hair-oil_400x400-removebg-preview.png'),
(7, 'Niryath Root Stimulating Hair', 'hair', 'Niryath Root Stimulating Hair', 400, 298, 300, 'C:/xampp/htdocs/ayur/uploads/Niryath-Root-Stimulating-Hair-oil_400x400-removebg-preview.png'),
(9, 'Hair Growth Booster Onion Combo', 'combo', 'Hair Growth Booster Onion Combo', 718, 200, 200, 'C:/xampp/htdocs/ayur/uploads/customized-hair-growth-booster-onion-combo_480x480-removebg-preview.png'),
(10, ' Hair Growth Booster Hibiscus Combo', 'combo', ' Hair Growth Booster Hibiscus Combo', 600, 60, 60, 'C:/xampp/htdocs/ayur/uploads/customized-hair-growth-booster-hibiscus-combo_480x480 (1).png'),
(11, 'Greasy Scalp Hydration Kit', 'combo', 'Greasy Scalp Hydration Kit', 800, 100, 100, 'C:/xampp/htdocs/ayur/uploads/greasy-scalp-hydration-kit_480x480-removebg-preview.png'),
(12, 'Vibha ', 'skin', 'Vibha Refreshing Acne Facewash', 400, 36, 40, 'C:/xampp/htdocs/ayur/uploads/vibha-removebg-preview.png'),
(13, 'Sthavi HydroPlenish', 'skin', 'Sthavi HydroPlenish Moisturizing Facial Cream For Women', 600, 96, 100, 'C:/xampp/htdocs/ayur/uploads/sthavi-removebg-preview.png'),
(14, 'Niraj HydroMatte ', 'skin', 'Niraj HydroMatte Oil Free Face Gel For Women', 500, 98, 100, 'C:/xampp/htdocs/ayur/uploads/niraj-removebg-preview.png'),
(15, 'Tavas ', 'hair', 'Tavas Non Sticky Hair Fall Oil for Oily Scalp', 350, 104, 110, 'C:/xampp/htdocs/ayur/uploads/Tavas-non-removebg-preview.png'),
(16, 'Vanya ', 'hair', 'Vanya Root Stimulating Hair Oil For Women', 400, 58, 60, 'C:/xampp/htdocs/ayur/uploads/vanya-Root--removebg-preview.png'),
(17, 'Praya', 'hair', 'Praya Root Stimulating Hair Oil For Women', 500, 54, 55, 'C:/xampp/htdocs/ayur/uploads/Praya-Root-removebg-preview.png'),
(18, 'Care Duo', 'combo', 'Dandruff Care Duo', 600, 200, 200, 'C:/xampp/htdocs/ayur/uploads/dand-removebg-preview.png'),
(19, 'Growth', 'combo', 'Customised Hair Growth Oil & Boosters Combo For Oily Hair', 1500, 24, 30, 'C:/xampp/htdocs/ayur/uploads/boost-removebg-preview.png'),
(20, 'Anti-Dandruff ', 'combo', 'Customised Anti-Dandruff Care Combo For Greasy Hair', 1500, 16, 20, 'C:/xampp/htdocs/ayur/uploads/greas-Photoroom.png-Photoroom.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Username`, `Password`, `Email`, `Address`, `id`) VALUES
('pk', '$2y$10$UOtA3Z82aiSVjs7nQo184OWeabRou28Rz14dleva76nNATLStMKye', 'viperprabhakaran@gmail.com', 'hii', 5),
('priya', '$2y$10$I2c/n7cjmApbUNRQSk7bneoaC3KIciAARNC6taGWZirPPkt6/NNGm', 'priya@gmail.com', 'hii', 6),
('mani', '$2y$10$YmVcYGxp6Iz5YtHoEDYafO2LNA.VCUKgYd/v6B5tnHr5XO1GdcaoW', 'mani@gmail.com', 'north st', 7),
('dewin', '$2y$10$kJC4eGWF0Pa/FFXisGY33ezL.Egu/iBoS8AM1HAAorPPYxBHgcBEK', 'dewin@gmail.com', 'sivan street', 8),
('siva', '$2y$10$lMWXLtQMQimnbUc5uuj.eu8W1SoFvBIkPTQFyzYIrA7Usa6mIGwFG', 'siva@gmail.com', 'hii', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

CREATE TABLE `user_reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `command` varchar(100) NOT NULL,
  `ratings` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(2000) NOT NULL,
  `before_image` varchar(1000) NOT NULL,
  `after_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reviews`
--

INSERT INTO `user_reviews` (`id`, `name`, `email`, `command`, `ratings`, `created_at`, `image`, `before_image`, `after_image`) VALUES
(52, 'pk', 'pk@gmail.com', 'hii', 5, '2024-03-14 03:47:45', 'men.jpeg', 'hairfall.jpeg', 'haigrowth.jpeg'),
(53, 'pk', 'pk@gmail.com', 'thank you ayurveda', 4, '2024-03-14 05:29:12', 'men.jpeg', 'skinproblem.jpg', 'solve.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD UNIQUE KEY `unique_cart` (`user_id`,`product_id`,`status`),
  ADD KEY `fk_cart_product` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `register_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_reviews`
--
ALTER TABLE `user_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `fk_cart_user` FOREIGN KEY (`user_id`) REFERENCES `register` (`id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `register` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
