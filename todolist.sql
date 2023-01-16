-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 04:50 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int DEFAULT NULL,
  `starting_date` datetime DEFAULT NULL,
  `ending_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `name`, `status`, `starting_date`, `ending_date`) VALUES
(2, 'work 2', 0, '2023-01-12 18:30:00', '2023-01-14 18:30:00'),
(3, 'work 3', 2, '2023-01-16 18:31:00', '2023-01-21 18:31:00'),
(4, 'work 4', 0, '2023-01-14 17:33:00', '2023-01-14 17:33:00'),
(5, 'work 5', 0, '2023-01-17 10:12:00', '2023-01-18 10:12:00'),
(6, 'post 1', 2, '2023-01-16 10:14:18', '2023-01-16 10:14:18'),
(7, 'post 2', 0, '2023-01-18 10:24:00', '2023-01-18 10:24:00'),
(8, 'post 3', 0, '2023-01-20 10:24:00', '2023-01-20 10:24:00'),
(9, 'post 4', 2, '2023-01-30 10:24:00', '2023-01-30 10:24:00'),
(10, 'post 5', 1, '2023-01-16 10:24:35', '2023-01-16 10:24:35'),
(11, 'post 6', 0, '2023-01-16 10:24:43', '2023-01-16 10:24:43'),
(12, 'Work unit test', 1, '2020-03-02 00:00:00', '2020-03-02 00:00:00'),
(13, 'Work unit test', 1, '2023-01-16 00:00:00', '2023-01-17 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
