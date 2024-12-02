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
-- Database: `staff_list`
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
(0, 'Test', 't2', 'gh', 14567898, 0, '', ''),
(2, 'HAsib', 'Driver', 'Astha', 1987643322, 333, 'hasib@gmail.com', 'Dhaka, Bangladesh'),
(3, 'kaka', 'Manager', 'Probhiddi', 186123456, 112, 'kakak@gamil.com', 'MAgura'),
(4, 'Asif', 'Intern', 'H20', 123456789, 554, 'asif@gmail.com', 'Jessore'),
(5, 'Messi', 'Executive', 'Coof', 143214565, 113, 'messi@gmail.com', 'Khulna'),
(6, 'Aladin', 'office boy', 'coof', 1777020201, 0, 'aladin@gmail.com', 'dhaka'),
(7, 'ahmed', 'officer', 'B skillful', 123456678, 33, 'ahmed@gmail.com', 'Borishal'),
(7, 'Sakib', 'Team Lead', 'Astha', 1675432167, 0, 'sakib@gmail.com', 'Dhaka, Bangladesh'),
(8, 'Rayhan', 'Team Lead', 'Sarathi', 186123456, 112, 'sarathi@gmail.com', 'Mymensingh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
