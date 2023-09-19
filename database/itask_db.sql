-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 08:55 AM
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
-- Database: `itask_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `scholars_jhs`
--

CREATE TABLE `scholars_jhs` (
  `ID` int(11) NOT NULL,
  `Scholar_ID` varchar(15) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) NOT NULL,
  `Birthdate` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `School` varchar(50) NOT NULL,
  `Grade_Level` varchar(50) NOT NULL,
  `created_on` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholars_jhs`
--

INSERT INTO `scholars_jhs` (`ID`, `Scholar_ID`, `Last_Name`, `First_Name`, `Middle_Name`, `Birthdate`, `Gender`, `Contact`, `Address`, `School`, `Grade_Level`, `created_on`) VALUES
(0, 'YNW629413708', 'Lopez', 'Maria', 'Dumayaw', 'Aug 19, 2010', 'Male', '09923262065', 'Kapitbahay ni Ralph', 'Knights & Archers Montesorri School', 'Grade 8', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
