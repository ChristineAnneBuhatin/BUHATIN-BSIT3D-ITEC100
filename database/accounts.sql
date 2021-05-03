-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 05:33 PM
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
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `User_ID` int(11) NOT NULL,
  `User_Firstname` varchar(100) NOT NULL,
  `User_Lastname` varchar(100) NOT NULL,
  `User_email` varchar(50) NOT NULL,
  `User_Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`User_ID`, `User_Firstname`, `User_Lastname`, `User_email`, `User_Pass`) VALUES
(5, 'Luna', 'Banaag', 'dsadda@gmail.com', 'qwerty'),
(7, 'qwerty', 'qwerty', 'dasdasd@gmail.com', 'qwerty'),
(58, 'Christine Anne', 'Buhatin', 'christine.annebuhatin@gmail.com', 'Qwerty123!'),
(59, 'Christine Anne', 'Buhatin', 'chrisnne.buhatin@gmail.com', 'Qwerty123!'),
(60, 'Tin', 'Tin', 'chrisnne.buhatin@gmail.com', 'Qwerty123!'),
(61, 'Christine', 'Buhatin', 'christine.annebuhatin@gmail.com', 'Admin123!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
