-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 03:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(8, 'tesssssssst', 'test@test.test', 'aaaaaaaaaaaaaaaaa'),
(9, 'tesssssssst', 'test@test.test', 'aaaaaaaaaaaaaaaaa'),
(10, 'tesssssssst', 'test@test.test', 'aaaaaaaaaaaaaaaaa'),
(11, 'test', 'admin@admin.com', 'HAHAHAH'),
(12, 'test', 'admin@admin.com', 'HAHAHAH'),
(13, 'test', 'admin@admin.com', 'HAHAHAH'),
(14, 'test', 'admin@admin.com', 'HAHAHAH'),
(15, 'test', 'admin@admin.com', 'HAHAHAH'),
(16, 'test', 'admin@admin.com', 'HAHAHAH'),
(17, 'test', 'admin@admin.com', 'HAHAHAH'),
(18, 'test', 'admin@admin.com', 'HAHAHAH'),
(19, 'test', 'admin@admin.com', 'HAHAHAH'),
(20, 'test', 'admin@admin.com', 'HAHAHAH'),
(21, 'test', 'admin@admin.com', 'HAHAHAH'),
(22, 'test', 'admin@admin.com', 'HAHAHAH'),
(23, 'test', 'admin@admin.com', 'HAHAHAH'),
(24, 'test', 'admin@admin.com', 'HAHAHAH'),
(25, 'test', 'admin@admin.com', 'HAHAHAH'),
(26, 'test', 'admin@admin.com', 'HAHAHAH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
