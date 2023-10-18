-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 02:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webadvance`
--

-- --------------------------------------------------------

--
-- Table structure for table `twoinput`
--

CREATE TABLE `twoinput` (
  `id` int(11) NOT NULL,
  `num1` int(11) DEFAULT NULL,
  `num2` int(11) DEFAULT NULL,
  `sum` int(11) DEFAULT NULL,
  `product` int(11) DEFAULT NULL,
  `difference` int(11) DEFAULT NULL,
  `quotiont` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `twoinput`
--

INSERT INTO `twoinput` (`id`, `num1`, `num2`, `sum`, `product`, `difference`, `quotiont`) VALUES
(1, 12, 1, 13, 12, 11, 12),
(2, 32, 23, 55, 736, 9, 1),
(4, 2, 1, 3, 2, 1, 2),
(9, 44, 44, 88, 1936, 0, 1),
(10, 34, 23, 57, 782, 11, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `twoinput`
--
ALTER TABLE `twoinput`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `twoinput`
--
ALTER TABLE `twoinput`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
