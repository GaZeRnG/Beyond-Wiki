-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql202.yzz.me
-- Generation Time: Jan 03, 2026 at 07:36 AM
-- Server version: 11.4.9-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yzzme_40627579_beyond_wiki`
--

-- --------------------------------------------------------

--
-- Table structure for table `cookie_tokens`
--

CREATE TABLE `cookie_tokens` (
  `user_id` int(11) NOT NULL,
  `token_hash` varchar(64) NOT NULL,
  `expires_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `tip_id` int(11) NOT NULL,
  `tip_title` varchar(255) NOT NULL,
  `tip_content` varchar(255) NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`tip_id`, `tip_title`, `tip_content`, `author`, `created_at`) VALUES
(1, 'test', 'test tip', '', '2026-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_pfp` varchar(255) DEFAULT NULL,
  `oauth_provider` enum('google','discord') DEFAULT NULL,
  `oauth_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_pfp`, `oauth_provider`, `oauth_id`, `created_at`, `updated_at`) VALUES
(1, 'gazer2006', 'christianpatrickpanti@gmail.com', NULL, '7ee308a713b0938a8f9ad32f4d63004b', 'discord', '678492415392350209', '2026-01-03 08:31:40', '2026-01-03 08:31:40'),
(2, 'test', 'gazeringg@gmail.com', '$2y$10$llXZ4ui2TlBPIY1m4LBKxOZFji7bP2uBNhVOK.kvMj5v6.wgHXAaG', '/Images/pfp/6958d41541946.JPG', '', NULL, '2026-01-03 08:32:21', '2026-01-03 08:32:21'),
(3, 'Dump Lng', 'dumpacclngtouy@gmail.com', NULL, NULL, 'google', '107149618915310914826', '2026-01-03 12:31:16', '2026-01-03 12:35:23'),
(4, 'Gazer rng', 'gazeringg@gmail.com', NULL, NULL, 'google', '103917951335292033430', '2026-01-03 12:34:12', '2026-01-03 12:35:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cookie_tokens`
--
ALTER TABLE `cookie_tokens`
  ADD PRIMARY KEY (`token_hash`),
  ADD KEY `user id` (`user_id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`tip_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cookie_tokens`
--
ALTER TABLE `cookie_tokens`
  ADD CONSTRAINT `user id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
