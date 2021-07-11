-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2020 at 11:22 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'ONE PLUS 7T', 34999),
(2, 'SAMSUNG-S20', 77999),
(3, 'IPHONE-11-PRO-MAX', 117100),
(4, 'NOKIA-7-PLUS', 18499),
(5, 'OPPO-F15', 18990),
(6, 'XIAOMI-REDMI-NOTE-8-PRO', 19199);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Password`, `Contact`, `City`, `Address`) VALUES
(1, 'Bishamber kumar', 'bishamberkumar@gmail.com', 'e29cc543878f7724bb16cec17065c03b', '9416911056', 'karnal', 'h.no-987 sec-8 part 1 karnal'),
(2, 'Anshul', 'anshulbamania19@gmail.com', 'e29cc543878f7724bb16cec17065c03b', '9416911056', 'karnal', 'h.no-123 sec-6 part 1 karnal'),
(3, 'Sudesh', 'sudeshbamania@gmail.com', 'e29cc543878f7724bb16cec17065c03b', '9416911056', 'karnal', 'h.no-443 sec-10 part 1 karnal'),
(4, 'Mayank', 'mayankbamania19@gmail.com', 'e29cc543878f7724bb16cec17065c03b', '9416911056', 'karnal', 'h.no-9889 sec-100 part 1 karnal');

-- --------------------------------------------------------

--
-- Table structure for table `users_items1`
--

DROP TABLE IF EXISTS `users_items1`;
CREATE TABLE IF NOT EXISTS `users_items1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) DEFAULT NULL,
  `item_id` int(30) DEFAULT NULL,
  `status` enum('added to cart','confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items1`
--

INSERT INTO `users_items1` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 1, 3, 'added to cart'),
(2, 2, 2, 'added to cart'),
(3, 3, 1, 'added to cart'),
(4, 4, 1, 'added to cart'),
(5, 4, 2, 'added to cart'),
(6, 4, 3, 'added to cart'),
(7, 4, 6, 'added to cart'),
(8, 4, 5, 'added to cart'),
(9, 4, 4, 'added to cart');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items1`
--
ALTER TABLE `users_items1`
  ADD CONSTRAINT `users_items1_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items1_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
