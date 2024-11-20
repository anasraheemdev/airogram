-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2024 at 01:24 AM
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
-- Database: `airogram`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(7) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `caption` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `caption`) VALUES
(1, 'Untitled design (10).png', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(4) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `phone`, `dob`, `password`, `profile_pic`) VALUES
(37, 'Anas Raheem', 'anasrahes669@gmail.com', '34566545365', '2024-11-14', 's', NULL),
(40, 'Anas Raheem', 'anasrahs@gmail.com', '34566545365', '2024-11-14', 's', NULL),
(41, 'Anas Raheem', 'anasraheem48@gmail.com', '+92 346 2440356', '2005-05-05', 'anas', NULL),
(42, 'Abubaker', 'abubaker@gmail.com', '03456434454', '2017-02-14', 'anas786MALIK@', NULL),
(43, 'anas', 'sa@gmail.com', '3345678775', '2024-11-22', '123', NULL),
(44, 'Hamdan', 'hamdan@gmail.com', '+92 3403346848', '2004-11-18', '123', NULL),
(45, 'Niaz Malik', 'niaz@gmail.com', '03453575519', '2024-11-30', '112233', NULL),
(46, 'Ahsan', 'ahsan@gmail.com', '3', '2024-11-29', '123', ''),
(47, 'Manahil Ather', 'manahil@gmail.com', '034345 34534', '2024-11-05', '1', ''),
(48, 'Alec Cooke', 'cusecus@mailinator.com', '+1 (888) 798-83', '2005-05-26', 'Pa$$w0rd!', ''),
(51, 'Hunter Craig', 'gudydib@mailinator.com', '+1 (896) 948-64', '1992-04-16', 'Pa$$w0rd!', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
