-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2026 at 08:13 AM
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
-- Database: `flashfiber`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `package` varchar(50) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `location`, `package`, `notes`, `created_at`) VALUES
(1, 'ARNOLD TEZI', '0799174938', 'teziarnold1@gmail.com', 'nyali', '5 Mbps', 'q2', '2025-11-25 15:28:16'),
(2, 'ARNOLD KADZUNGO TEZI', '0799174938', 'teziarnold1@gmail.com', 'sssa', '20 Mbps', 'hfgdh', '2025-11-25 15:52:14'),
(3, 'ARNOLD KADZUNGO TEZI', '0799174938', 'teziarnold1@gmail.com', 'nyali', '10 Mbps', 'ttrew', '2025-11-25 16:42:56'),
(4, 'Purity', '0792958388', 'purityondieki@gmail.com', 'karama', '5 Mbps', 'intalattion asap', '2026-01-06 08:41:35'),
(5, 'ARNOLD TEZI', '0799174938', 'teziarnold1@gmail.com', 'karama', '10 Mbps', 'install asap', '2026-01-07 12:01:19'),
(6, 'purity ondieki', '0792958388', 'purity@gmail.com', 'kongowea', '15 Mbps', 'install tommorow', '2026-01-07 12:05:41'),
(7, 'ARNOLD KADZUNGO TEZI', '0799174938', 'teziarnold1@gmail.com', 'Eldoret', '20 Mbps', 'install', '2026-01-07 12:37:16'),
(8, 'Arnold Tezi', '0799174938', 'teziarnold1@gmail.com', 'nyali', '5 Mbps', 'install', '2026-01-23 08:33:47'),
(9, 'Arnold Tezi', '0799174938', 't...1@gmail.com', 'customs', '10 Mbps', 'install', '2026-01-23 08:49:30'),
(10, 'dennis mwai', '0703346730', '', 'likoni', '10 Mbps', '', '2026-01-31 06:37:31'),
(11, 'ARNOLD KADZUNGO TEZI', '0799174938', '', 'nyali', '10 Mbps', 'install tommorow', '2026-02-24 05:42:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
