-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2025 at 09:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hbdom`
--

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  `features` text DEFAULT NULL,
  `facilities` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `name`, `capacity`, `features`, `facilities`, `price`, `image`) VALUES
(1, 'JK Convention Centre', 1500, 'Main hall, Sub halls', 'Wi-Fi, Projector', '500000.00', 'hall1.jpg'),
(2, 'ST. GASPAR CONFERENCE CENTRE', 800, 'Main hall', 'Wi-Fi, Pool', '300000.00', 'hall2.jpg'),
(4, 'CAVILAM', 700, 'packing', 'wi-fi', '300000.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phonenum` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `pass`, `phonenum`, `role`) VALUES
(6, 'Ahmed', 'Admin Office', 'ahmed@gmail.com', '$2y$10$2Vyr93NOMqti/MsvB9LuVuGoq.nHLaEUMvLOPcSpLrbj1.FBbpyqW', '0787927785', 'admin'),
(7, 'Tonny', 'Admin Office', 'tonny@gmail.com', '$2y$10$0tcMCC00QN61YtF0eYfPROxouF44aEXaUHFLwucIn4TRiir8OiSlW', '0787927785', 'admin'),
(8, 'Rozena', 'Admin Office', 'rozena@gmail.com', '$2y$10$tPvbBFJk2HFZyhiGCYyhpePDRxypryqGX2Aal3rrw60CRz7Ci3B.e', '0787927785', 'admin'),
(9, 'Sule', 'dar', 'sule@gmail.com', '$2y$10$mSIubzqJFNBQks4f7N.NQunp4MXbmRz2ATufkwEv.JeiOA2vj3V2W', '0788888888', 'user'),
(10, 'juma', 'MERIWA', 'jumakazi@gmail.com', '$2y$10$hAZgghSDPx.opQSwQhze3OnxYhkAJOqwUkUtha05VUswmWoI/Rov6', '0755555555', 'user'),
(16, 'irah', 'dar', 'irah@gmail.com', '$2y$10$EoSWPS6sNHSiPLl4afPJYOo7w4bfwPrmdP4/Z2KLL06QUfnLaKClG', '0787927785', 'user'),
(17, 'abdul', 'tanga', 'abdul@gmail.com', '$2y$10$4p6l3aBbK/yuHRex/vSoIe5NCic0LToW8Oqp0lgb256shlbfHUZ5y', '0787927785', 'user'),
(19, 'mariam', 'IGUNGA', 'mariam@gmail.com', '$2y$10$OFZtn27k/JyVotPUbrQtCeOTf6KQo8MLC5RPlfq5isLbONkjyQHLq', '0787927785', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
