-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 09:07 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `title`, `created`, `usertype`) VALUES
(1, 'ADMIN03862', 'admin0342852@gmail.con', '2026550143', 'joni1245joni1245', '2019-05-08 17:32:00', 'admin'),
(2, 'David Deacon', 'daviddeacon@example.com', '2025550121', 'Employee', '2019-05-08 17:28:44', 'user'),
(3, 'Sam White', 'samwhite@example.com', '2004550121', 'Employee', '2019-05-08 17:29:27', 'user'),
(4, 'Colin Chaplin', 'colinchaplin@example.com', '2022550178', 'Supervisor', '2019-05-08 17:29:27', 'user'),
(5, 'Ricky Waltz', 'rickywaltz@example.com', '7862342390', '', '2019-05-09 19:16:00', 'user'),
(7, 'Toni Adams', 'alvah1981@example.com', '2603668738', '', '2019-05-09 19:19:00', 'user'),
(8, 'Donald Perry', 'donald1983@example.com', '7019007916', 'Employee', '2019-05-09 19:20:00', 'user'),
(9, 'Joe McKinney', 'nadia.doole0@example.com', '6153353674', 'Employee', '2019-05-09 19:20:00', 'user'),
(10, 'Angela Horst', 'angela1977@example.com', '3094234980', 'Assistant', '2019-05-09 19:21:00', 'user'),
(11, 'James Jameson', 'james1965@example.com', '4002349823', 'Assistant', '2019-05-09 19:32:00', 'user'),
(12, 'Daniel Deacon', 'danieldeacon@example.com', '5003423549', 'Manager', '2019-05-09 19:33:00', 'user'),
(15, 'Joni', 'blank', '1928374', 'jonijoni', '2021-06-30 16:41:00', 'user'),
(17, 'Filmaster', 'test@gmail.com', '1928374', 'jonijoni', '2021-09-23 17:07:00', 'user'),
(19, '', '', '', '', '2021-09-23 17:07:00', 'user'),
(20, '', '', '', '', '2021-09-23 17:07:00', 'user'),
(21, '', '', '', '', '2021-09-23 17:07:00', 'user'),
(22, 'no one', 'test@gmail.com', '0385824', 'jonijoni', '2021-09-23 17:27:00', 'user'),
(23, 'no one', 'test@gmail.com', '0385824', 'jonijoni', '2021-09-23 17:27:00', 'user'),
(24, 'no one', 'test@gmail.com', '0385824', 'jonijoni', '2021-09-23 17:27:00', 'user'),
(25, 'no one', 'test@gmail.com', '0385824', 'jonijoni', '2021-09-23 17:27:00', 'user'),
(26, 'no one', 'test@gmail.com', '0385824', 'jonijoni', '2021-09-23 17:27:00', 'user'),
(27, 'no one', 'test@gmail.com', '0385824', 'jonijoni', '2021-09-23 17:27:00', 'user'),
(28, 'no one', 'test@gmail.com', '0385824', 'jonijoni', '2021-09-23 17:27:00', 'user'),
(29, 'no one', 'test@gmail.com', '0385824', 'jonijoni', '2021-09-23 17:27:00', 'user'),
(30, 'no one', 'test@gmail.com', '0385824', 'jonijoni', '2021-09-23 17:27:00', 'user'),
(34, 'Rilindi', 'rilind.kadrijaj@hotmail.com', '1928374', 'jonijoni', '2021-09-23 17:55:00', 'user'),
(75, 'Joni', 'jonistencyl02@gmail.com', '0385824', 'jonijoni', '2021-10-19 17:18:00', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
