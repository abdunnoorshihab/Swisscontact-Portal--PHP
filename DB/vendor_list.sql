-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 11:05 AM
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
-- Database: `vendor_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `staffdb`
--

CREATE TABLE `staffdb` (
  `SL` int(50) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Designation` varchar(1000) NOT NULL,
  `Project` varchar(1000) NOT NULL,
  `Mobile` int(50) NOT NULL,
  `PBX` int(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Location` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffdb`
--

INSERT INTO `staffdb` (`SL`, `Name`, `Designation`, `Project`, `Mobile`, `PBX`, `Email`, `Location`) VALUES
(1, 'shihab', 'ccc', 'tghju', 1456789, 999, '2tateee@gmail.com', 'gggggg'),
(2, 'Mohammad', 'Officer', 'Astha', 1456789, 999, 'mohammoad@gmail.com', 'Dhaka, Bangladesh'),
(3, 'Ahmed', 'Officer 2', 'CO2', 176543221, 922, 'ahmed@gmail.com', 'Gazipur'),
(2, 'Mohammad', 'Officer', 'Astha', 1456789, 999, 'mohammoad@gmail.com', 'Dhaka, Bangladesh'),
(3, 'Ahmed', 'Officer 2', 'CO2', 176543221, 922, 'ahmed@gmail.com', 'Gazipur'),
(6, 'Kaka', 'cleaner', 'Coof', 1987643322, 333, 'kakka@gmail.com', 'dhaja');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
