-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 06:18 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pay`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `week1` varchar(255) NOT NULL,
  `week2` varchar(255) NOT NULL,
  `week3` varchar(255) NOT NULL,
  `week4` varchar(255) NOT NULL,
  `week5` varchar(255) NOT NULL,
  `week6` varchar(255) NOT NULL,
  `week7` varchar(255) NOT NULL,
  `week8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `week1`, `week2`, `week3`, `week4`, `week5`, `week6`, `week7`, `week8`) VALUES
(3, 'Ahmed Aden', 'hp', 'mac', 'dell', 'os', 'jumia', 'uon', 'hullo', 'jumikj'),
(4, 'kassim isac', 'zyc', 'xv', 'ojiui', 'bg', 'killo', 'guy', 'hftr', 'mat'),
(5, 'abdullahi', 'omo', 'were', 'gss', 'yuk', 'phone', 'laptop', 'tablet', 'desktop'),
(6, 'Roro', 'jam', 'were', 'gss', 'yuk', 'oppo', 'guy', 'hftr', 'iknow'),
(7, 'jimale', 'umuro', 'wario', 'jet', 'null', 'killo', 'netflix', 'amazon', 'nomadyyy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
