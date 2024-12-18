-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 10:00 AM
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
-- Database: `event_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `services` varchar(50) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `services`, `starting_date`, `ending_date`) VALUES
(1, 'Deepak Verma', 'dverma9165@gmail.com', 0, 'nightmid', '2024-02-15', '2024-02-29'),
(2, 'Deepesh Verma', 'deepeshv9926@gmail.com', 0, 'nighthigh', '2024-02-16', '2024-02-27'),
(3, 'vikash chaudhary', 'vikashchaudhari103@gmail.com', 0, 'daymid', '2024-02-13', '2024-02-29'),
(4, 'vikash chaudhary', 'vikashchaudhari103@gmail.com', 1234567890, 'daymid', '2024-02-13', '2024-02-29'),
(5, 'virat kohli', 'vamikakohli@gmail.com', 2147483647, 'nighthigh', '2024-02-13', '2024-03-20'),
(6, 'virat kohli', 'vamikakohli@gmail.com', 2147483647, 'nighthigh', '2024-02-13', '2024-03-20'),
(7, 'raju', 'raju@gmail.com', 1234567890, 'nightmid', '2024-02-14', '2024-02-29'),
(8, 'raju', 'raju@gmail.com', 1234567890, 'nightmid', '2024-02-14', '2024-02-29'),
(9, 'raju', 'raju@gmail.com', 1234567890, 'nightmid', '2024-02-14', '2024-02-29'),
(10, 'vikash chaudhary', 'vikashchaudhari103@gmail.com', 1234567890, 'daylow', '2024-02-28', '2024-02-23'),
(11, 'Deepak Verma', 'dverma9165@gmail.com', 2147483647, 'daylow', '2024-02-06', '2024-02-29'),
(12, 'Mitchil Starc', 'mitchilstarc18@gmail.com', 2147483647, 'daymid', '2024-02-27', '2024-03-27'),
(13, 'vikash ', 'vikash143@gmail.com', 1234567890, 'daymid', '2024-03-27', '2024-04-24'),
(14, 'ravindra jadeja', 'ravindra@123gmail.com', 2147483647, 'dayhigh', '2024-02-26', '2024-02-27'),
(15, 'Deepak Verma', 'dverma9165@gmail.com', 2147483647, 'daylow', '2024-02-19', '2024-02-29'),
(16, 'dinesh patel ', 'dinesh@gmail.com', 2147483647, 'nightmid', '2024-04-15', '2024-04-20'),
(17, 'homkumar nishad', 'homkumar@gmail.com', 2147483647, 'nightmid', '2024-04-13', '2024-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `message`) VALUES
(9, 'Deepak Verma', 'dverma9165@gmail.com', 'dfsf'),
(10, 'Deepak Verma', 'deepeshv9926@gmail.com', 'deepakv'),
(11, 'Deepak Verma', 'deepakv9165@gmail.com', 'submit'),
(12, 'Deepak Verma', 'deepakv9165@gmail.com', 'submit'),
(13, 'Deepak Verma', 'dverma9165@gmail.com', 'dkfjdkf'),
(14, 'Deepesh Verma', 'dverma9165@gmail.com', 'sdfgsegg'),
(15, 'virat kohli', 'viratkohli18@gmail.com', '100 century loading....'),
(16, 'vikash chaudhary', 'vikash143@gmail.com', 'i student of bca at rungta collage raipur'),
(17, 'tarun', 'tarung104@gmail.com', 'abcdefg'),
(18, 'vikash chaudhary', 'vikash143@gmail.com', 'bahut achchha webisite hai mai dekh ke bahut khush ho gya'),
(19, 'Deepak Verma', 'dverma9165@gmail.com', 'i want to book now'),
(20, 'deepak verma', 'derma9165@gmail.com', 'i loved your website'),
(21, 'mitchil starc', 'mitchilstarc18@gmail.com', 'i am formal austrailian player. i recently visit your site it\'s amazing.'),
(22, 'mitchil starc', 'mitchilstarc18@gmail.com', 'i am formal austrailian player. i recently visit your site it\'s amazing.'),
(23, 'yaman verma', 'yamanverma9977@gmail.com', 'keep it up!'),
(24, 'yaman verma', 'yamanverma9977@gmail.com', 'keep it up!'),
(25, 'yaman verma', 'yamanverma9977@gmail.com', 'keep it up!'),
(26, 'virat kohli', 'vamikakohli@gmail.com', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(1, 'deepak verma', 'dverma9165', 'dverma9165@gmail.com', 0, '1234'),
(2, 'deepesh verma', 'deepeshv9926', 'deepeshv9926@gmail.com', 2147483647, '1234'),
(3, 'neeraj', 'nv@gmail.com', 'neeraj@gmail.com', 2147483647, '1101'),
(4, 'yaman', 'yaman@123', 'yaman@gmail.com', 2147483647, 'yaman123'),
(5, 'deepesh verma', 'deepesh123', 'deepesh@gmail.com', 2147483647, '1234'),
(6, 'vikash', 'vikash123', 'vikash@gmail.com', 1234567890, '1234'),
(7, 'homkumar', 'hom123', 'homkumar@gmail.com', 2147483647, '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
