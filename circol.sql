-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 08:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `circol`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `customer` varchar(100) DEFAULT NULL,
  `image` longblob DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `customer`, `image`, `product_name`, `price`, `quantity`, `total_amount`) VALUES
(18, NULL, 0x696d616765732f696e666f5f746563685f77686974652e706e67, 'Info Tech White', 320.00, 35, 11200.00),
(19, NULL, 0x696d616765732f627574746f6e5f70696e2e706e67, 'Button pin', 320.00, 10, 3200.00),
(20, NULL, 0x696d616765732f6c616e7961726430322e706e67, 'Lanyard B&V', 320.00, 2, 640.00);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `username`, `password`, `first_name`, `last_name`, `age`, `phone_number`, `address`) VALUES
(2, 'vivianvivo@gmail.com', 'vivivivo12', 'gandalang12', 'Vivian', 'Vivo', 25, '09816635890', 'Washington, Legazpi City, Albay');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `size` varchar(50) DEFAULT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `size`, `stock`) VALUES
(1, 'Info Tech Black', 250.00, 'S, M, L, XL', 20),
(2, 'Info Tech White', 320.00, 'S, M, L, XL', 43),
(3, 'CircUITS Limited Edition', 320.00, 'S, M, L, XL', 14),
(4, 'Key strap', 320.00, '', 50),
(5, 'Lanyard BLB', 320.00, '', 40),
(6, 'Lanyard B&B', 320.00, '', 6),
(7, 'Lanyard B&V', 320.00, '', 13),
(8, 'Lanyard GWB', 320.00, '', 22),
(9, 'Button pin', 160.00, '', 100),
(10, 'Sir Kits Plain Tee', 320.00, 'S, M, L, XL', 79),
(11, 'Sir Kits Hoodie', 200.00, 'S, M, L, XL', 24),
(12, 'Sir Kits Tumbler', 400.00, '', 12),
(13, 'Sir Kits Mousepad', 200.00, '', 50),
(14, 'Sir Kits Keyboard', 1000.00, '', 23),
(15, 'Sir Kits Sticker Set', 25.00, '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
