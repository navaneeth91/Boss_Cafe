-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2024 at 10:09 PM
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
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT 'user',
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(16, 'Staff', 'staff@gmail.com', '1253208465b1efa876f982d8a9e73eef', 'staff'),
(20, 'Stelon Daniel', 'stelon@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(21, 'stelon', 'stelon@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(22, 'revin', 'revin1@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(23, 'shahana', 'shahanariff@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(24, 'shahilupdated one', 'shahil@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(25, 'test', 'test@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'user'),
(26, 'stelon1', 'stelon1@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin'),
(27, 'staff2', 'staff24@gmail.com', 'a99ce686175f8c2c0232ebdc34482bf1', 'staff'),
(28, 'xyz', 'xyz@gmail.com', 'd16fb36f0911f878998c136191af705e', 'user'),
(29, 'xyz', 'xyz@gmail.com', 'e76625b8901758aaaa8554e1876d9c37', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
