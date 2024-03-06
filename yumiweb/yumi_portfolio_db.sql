-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 04:16 AM
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
-- Database: `yumi_portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details_tbl`
--

CREATE TABLE `account_details_tbl` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `blk_lot` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `phase_subdivision` varchar(50) DEFAULT NULL,
  `barangay` varchar(50) DEFAULT NULL,
  `city_municipality` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_details_tbl`
--

INSERT INTO `account_details_tbl` (`id`, `lastname`, `firstname`, `email`, `password`, `blk_lot`, `street`, `phase_subdivision`, `barangay`, `city_municipality`, `province`, `country`, `contact_no`) VALUES
(1, 'oclares', 'kyan', 'kyanoclares24@gmail.com', '$2y$10$itTgr4dfGix.rzdQQfA6DOcB2.vF660wxWti8K/uTEhoO71SiAGDG', 'blk 3 lot 21', 'pitong bahay', 'maligaya', 'Barangay 177', 'CALOOCAN CITY', '1375', 'Philippines', '+639198000415');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details_tbl`
--

CREATE TABLE `contact_details_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details_tbl`
--

INSERT INTO `contact_details_tbl` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'yumi', 'yumi@gmail.com', 'commission', 'We\'re no strangers to love\r\nYou know the rules and so do I (do I)\r\nA full commitment\'s what I\'m thinking of\r\nYou wouldn\'t get this from any other guy\r\nI just wanna tell you how I\'m feeling\r\nGotta make you understand\r\nNever gonna give you up\r\nNever gonna let you down\r\nNever gonna run around and desert you\r\nNever gonna make you cry\r\nNever gonna say goodbye\r\nNever gonna tell a lie and hurt you\r\nWe\'ve known each other for so long\r\nYour heart\'s been aching, but you\'re too shy to say it (say it)\r\nInsi'),
(2, 'Kyan Oclares', 'kyanoclares24@gmail.com', 'None', 'Everyday ay bagong city, Yeah!\r\nDi na broke cause we made it, Yeah!\r\nDi na naka honda civic, Yeah!\r\nYeah we lit nasa top naka spaceship\r\nCheeze! Paa! Paa!\r\nEveryday ay bagong city, Prrrr, Paaa!\r\nDi na broke cause we made it, Paaa, Paaa!\r\nDi na naka honda civic, Prrrr, Paaa!\r\nYeah we lit nasa top naka spaceship, Paaa!\r\nEveryday ay bagong city, Prrrr, Paaa!\r\nDi na broke cause we made it, Paaa, Paaa!\r\nDi na naka honda civic, Prrrr, Paaa!\r\nYeah we lit nasa top naka spaceship, Paaa!\r\nYung label ko da');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details_tbl`
--
ALTER TABLE `account_details_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details_tbl`
--
ALTER TABLE `contact_details_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details_tbl`
--
ALTER TABLE `account_details_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_details_tbl`
--
ALTER TABLE `contact_details_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
