-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 05:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `act3`
--

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `id_code` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` varchar(6) NOT NULL,
  `created_at` datetime NOT NULL,
  `expiration` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`id_code`, `user_id`, `code`, `created_at`, `expiration`) VALUES
(132, 1, '311504', '2021-03-28 20:14:46', '2021-03-28 20:19:46'),
(133, 1, '611311', '2021-03-28 20:15:44', '2021-03-28 20:20:44'),
(134, 1, '234637', '2021-03-28 20:16:55', '2021-03-28 20:21:55'),
(135, 1, '969779', '2021-03-28 20:22:41', '2021-03-28 20:27:41'),
(136, 1, '559065', '2021-05-02 23:43:56', '2021-05-02 23:48:56'),
(137, 1, '179767', '2021-05-02 23:47:01', '2021-05-02 23:52:01'),
(138, 1, '710781', '2021-05-02 23:47:18', '2021-05-02 23:52:18'),
(139, 1, '248891', '2021-05-02 23:48:13', '2021-05-02 23:53:13'),
(140, 1, '276308', '2021-05-02 23:52:24', '2021-05-02 23:57:24'),
(141, 1, '229782', '2021-05-02 23:59:40', '2021-05-03 00:04:40'),
(142, 1, '429638', '2021-05-03 00:13:37', '2021-05-03 00:18:37'),
(143, 1, '433531', '2021-05-03 00:14:22', '2021-05-03 00:19:22'),
(144, 1, '291588', '2021-05-03 00:16:45', '2021-05-03 00:21:45'),
(145, 1, '262784', '2021-05-03 00:19:49', '2021-05-03 00:24:49'),
(146, 1, '351886', '2021-05-03 12:17:03', '2021-05-03 12:22:03'),
(147, 1, '558616', '2021-05-03 14:47:33', '2021-05-03 14:52:33'),
(148, 1, '436801', '2021-05-03 15:26:48', '2021-05-03 15:31:48'),
(149, 1, '445584', '2021-05-03 17:43:49', '2021-05-03 17:48:49'),
(150, 1, '687748', '2021-05-03 17:47:39', '2021-05-03 17:52:39'),
(151, 1, '104174', '2021-05-03 17:51:04', '2021-05-03 17:56:04'),
(152, 1, '900811', '2021-05-03 17:53:28', '2021-05-03 17:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `event_log`
--

CREATE TABLE `event_log` (
  `event_id` int(11) NOT NULL,
  `activity` varchar(200) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(15) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_log`
--

INSERT INTO `event_log` (`event_id`, `activity`, `date_time`, `user_id`, `username`) VALUES
(84, 'Get Verification Code', '2021-05-03 09:53:27', 1, 'ADMIN'),
(85, 'User Logged In', '2021-05-03 09:53:31', 1, 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'ADMIN', '$2y$10$8MKFKwPhqJ6pHVyXgmB2NeWE6bvUGEs/FOGRTvziz2Ne4n9q6Y.ny', '2021-03-24 21:44:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id_code`);

--
-- Indexes for table `event_log`
--
ALTER TABLE `event_log`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `event_log`
--
ALTER TABLE `event_log`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
