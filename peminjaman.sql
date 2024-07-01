-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 05:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ruangan` int(11) NOT NULL,
  `date` date NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `user_id`, `ruangan`, `date`, `start`, `end`, `status`, `description`) VALUES
(2, 1, 101, '2024-07-02', '2024-07-02 23:20:00', '2024-07-02 01:20:00', 'pending', 'desc');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `no` int(11) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `kapasitas` int(10) NOT NULL,
  `lokasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`no`, `tipe`, `kapasitas`, `lokasi`) VALUES
(101, 'Computer Lab', 50, 'AryaDuta'),
(102, 'Discussion Class', 45, 'AryaDuta'),
(103, 'Discussion Class', 45, 'AryaDuta'),
(104, 'Discussion Class', 45, 'AryaDuta'),
(105, 'Discussion Class', 40, 'AryaDuta'),
(106, 'Computer Lab', 75, 'AryaDuta'),
(107, 'Standard Class/Dance Room', 40, 'AryaDuta'),
(108, 'Standard Class/Dance Room', 40, 'AryaDuta'),
(109, 'Standard Class', 40, 'AryaDuta'),
(501, 'Harvard Style Class (Round Table)', 70, 'Lippo'),
(502, 'Harvard Style Class (Round Table)', 65, 'Lippo'),
(503, 'Computer Lab', 35, 'Lippo'),
(504, 'Mockup Courtroom', 40, 'Lippo'),
(601, 'Harvard Style Class (Straight Table)', 90, 'Lippo'),
(602, 'Harvard Style Class (Straight Table)', 90, 'Lippo'),
(603, 'Discussion Class', 40, 'Lippo'),
(604, 'Discussion Class', 40, 'Lippo'),
(605, 'Discussion Class', 40, 'Lippo'),
(606, 'Discussion Class', 40, 'Lippo'),
(607, 'Discussion Class', 40, 'Lippo'),
(608, 'Discussion Class', 40, 'Lippo'),
(609, 'Discussion Class', 40, 'Lippo'),
(610, 'Discussion Class', 40, 'Lippo'),
(701, 'Harvard Style Class (Straight Table)', 60, 'Lippo'),
(702, 'Harvard Style Class (Straight Table)', 70, 'Lippo'),
(703, 'Harvard Style Class (Straight Table)', 60, 'Lippo'),
(704, 'Harvard Style Class (Straight Table)', 60, 'Lippo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'austin', '$2y$10$xhcyqxCut23j5d8ocO.4.uWtsapkSaalC9eYPvOnu6P/6nhW/eq6u', 'noturavgaustin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
