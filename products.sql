-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2024 at 10:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(1, 'Arctic Parka', 'Premium parka designed for extreme cold weather conditions.', '299.99'),
(2, 'Explorer Jacket', 'Versatile jacket suitable for outdoor activities.', '199.99'),
(3, 'Aurora Bomber', 'Stylish bomber jacket with faux fur trim.', '249.99'),
(4, 'Mountain Parka', 'Durable parka designed for mountain adventures.', '349.99'),
(5, 'Urban Trench Coat', 'Sleek trench coat perfect for urban environments.', '179.99'),
(6, 'Polar Fleece Jacket', 'Warm and cozy fleece jacket for cold days.', '129.99'),
(7, 'Trailblazer Vest', 'Lightweight vest ideal for hiking and outdoor sports.', '99.99'),
(8, 'Classic Peacoat', 'Timeless peacoat for a sophisticated look.', '269.99'),
(9, 'Tech Shell Jacket', 'Waterproof jacket with advanced technical features.', '199.99'),
(10, 'Heritage Wool Coat', 'Traditional wool coat with a modern twist.', '299.99'),
(11, 'Quilted Puffer Jacket', 'Quilted jacket with a stylish puffer design.', '159.99'),
(12, 'Explorer Parka', 'Explorer jacket with added insulation for extra warmth.', '219.99'),
(13, 'Adventure Hoodie', 'Hoodie designed for outdoor adventures.', '89.99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
