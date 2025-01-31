-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2024 at 10:10 PM
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
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `people` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `date_time`, `fullname`, `phonenumber`, `people`) VALUES
(2, '2024-08-22 00:00:00', 'shan', 12345564, 5),
(3, '2024-08-22 00:00:00', 'stelon', 767327375, 2),
(4, '2024-08-22 00:00:00', 'revin', 767327371, 2),
(5, '2024-08-22 22:44:00', 'Perera', 717327371, 5),
(6, '2024-08-22 03:44:00', 'rifkhan', 2147483647, 1),
(7, '2024-08-22 20:08:00', 'zain', 774411220, 15),
(8, '2024-08-22 14:32:00', 'Evin', 717327371, 7),
(9, '2024-08-22 13:16:00', 'dayan', 812205030, 3),
(10, '2024-08-22 16:58:00', 'sharif', 771234567, 2),
(12, '2024-08-22 21:28:00', 'staff', 22222222, 2),
(16, '2024-08-23 11:57:00', 'test', 123456789, 6),
(18, '2024-08-27 18:38:00', 'xyz', 1234567, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
