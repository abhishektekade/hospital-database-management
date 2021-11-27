-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 08:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `pid` int(100) DEFAULT NULL,
  `did` int(100) DEFAULT NULL,
  `date_t` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `pid`, `did`, `date_t`) VALUES
(1, 5, 4, '31/12/2000'),
(2, 1, 2, '12/04/2001'),
(3, 1, 0, '12/04/2001'),
(4, 1, 0, '12/04/2001'),
(5, 1, 0, '12/04/2001'),
(6, 1, 0, '12/04/2001'),
(7, 1, 0, '12/04/2001'),
(8, 1, 0, '12/04/2001'),
(9, 1, 0, '12/04/2001'),
(10, 1, 0, '12/04/2001'),
(11, 1, 0, '12/04/2001'),
(12, 1, 1, '12/04/2002'),
(13, 1, 3, '10/01/2005'),
(14, 1, 3, '10/01/2005');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(100) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spec` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `email`, `password`, `name`, `spec`) VALUES
(1, 'ab@gmail.com', '123', 'Ram', 'cardiologist'),
(2, 'ram@gmail.com', '156', 'Ram', 'Cardio'),
(3, 'sham@gmail.com', '123', 'sham', 'Allergists');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `age` int(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `password`, `name`, `age`, `gender`) VALUES
(1, 'rushikesh@gmail.com', '132', 'rk', 35, 'male'),
(2, 'rushikesh3172001@gmail.com', '12354', NULL, 18, 'male'),
(3, 'rushikesh301@gmail.com', '7845194', NULL, 19, 'male'),
(4, 'rushikesh301@gmail.com', '7845194', 'rk', 19, 'male'),
(5, 'rushikesh31@gmail.com', '797879', 'rkfkkf', 5, 'male'),
(6, 'rushikesh31@gmail.com', '797879', 'rkfkkf', 5, 'male'),
(7, 'rushikesh31@gmail.com', '797879', 'rkfkkf', 5, 'male'),
(8, 'rushikesh31@gmail.com', '797879', 'rkfkkf', 5, 'male'),
(9, 'rushikesh31@gmail.com', '797879', 'rkfkkf', 5, 'male'),
(10, 'rushikesh31@gmail.com', '797879', 'rkfkkf', 5, 'male'),
(11, 'rushikesh31@gmail.com', '797879', 'rkfkkf', 5, 'male'),
(12, 'rushikesh31@gmail.com', '797879', 'rkfkkf', 5, 'male'),
(13, 'rushikesh31@gmail.com', '797879', 'rkfkkf', 5, 'male'),
(14, 'rushikesh31@gmail.com', '797879', 'rkfkkf', 5, 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
