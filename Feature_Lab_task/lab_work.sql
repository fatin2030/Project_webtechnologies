-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 10:55 AM
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
-- Database: `lab_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `transection_`
--

CREATE TABLE `transection_` (
  `Name` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Balance` int(20) NOT NULL,
  `PaymentMethod` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transection_`
--

INSERT INTO `transection_` (`Name`, `UserName`, `Phone`, `Balance`, `PaymentMethod`) VALUES
('Fatin', 'F1', 1701060964, 1100, 'NAGAD'),
('Noor', 'F2', 19, 6000, 'ROCKET'),
('Sam', 'admin', 170, 0, 'NAGAD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email`, `UserName`, `Phone`, `Password`) VALUES
('Fatin', 'f@gmail.com', 'F1', 1701060964, '111'),
('Noor', 'n@gmail.com', 'F2', 19, '1111'),
('Sam', 'fa@gmail.com', 'admin', 170, '111');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
