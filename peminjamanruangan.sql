-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 06:56 AM
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
-- Database: `peminjamanruangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
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

INSERT INTO `forms` (`id`, `ruangan`, `date`, `start`, `end`, `status`, `description`) VALUES
(1, 101, '2024-04-25', '2024-04-25 13:56:00', '2024-04-25 15:56:00', 'pending', 'asda');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
