-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 01:39 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `title` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `model_number` varchar(255) DEFAULT NULL,
  `concept` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `available_size` varchar(255) DEFAULT NULL,
  `available_color` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `sub_category` varchar(255) DEFAULT NULL,
  `featured_on` varchar(255) DEFAULT NULL,
  `other_details` varchar(255) DEFAULT NULL,
  `image` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `model_number`, `concept`, `category`, `available_size`, `available_color`, `details`, `sub_category`, `featured_on`, `other_details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sunt repudiandae ut ', '981', '986', 'Similique expedita n', 'Cillum impedit at v', 'Sed sunt recusandae', 'Et nisi et consectet', 'Eveniet nostrud mol', 'Nulla maiores dolore', 'Et fuga Tempora per', 'Ut amet sed adipisc', '70176239_711169079359614_6064616078196080640_n.jpg', '0000-00-00 00:00:00', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
