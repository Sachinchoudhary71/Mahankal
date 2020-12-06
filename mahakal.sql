-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 12:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahakal`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip` int(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `date` int(10) NOT NULL,
  `tsize` varchar(10) NOT NULL,
  `payment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`firstname`, `lastname`, `fathername`, `email`, `idproof`, `gender`, `address`, `city`, `state`, `country`, `zip`, `mobile`, `date`, `tsize`, `payment`) VALUES
('rahul', 'kumar', 'badal', 'shishirrc2@gmail.com', '123456789', 'male', 'Indore', 'Hyderabad', 'MEN F HOSTEL', 'India', 500046, 2147483647, 2020, '25', '6250'),
('rajkumawat', 'kumar', 'xxxxxxx', 'shishirrc2@gmail.com', '1111111111111111111', 'male', 'Indore', 'Hyderabad', 'MEN F HOSTEL', 'India', 500046, 2147483647, 2020, '3', '750');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name` varchar(20) NOT NULL,
  `number` varchar(30) NOT NULL,
  `exp_month` varchar(10) NOT NULL,
  `exp_year` varchar(10) NOT NULL,
  `cvv` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `number`, `exp_month`, `exp_year`, `cvv`) VALUES
('sachin', '123456789', '12', '23', '123'),
('vinod', '123456789', '12', '12', '123'),
('vinod', '123456789', '12', '12', '123'),
('vinod', '12212121212', '5', '12', '133'),
('hemant', '234567', '12', '5', '123'),
('hemant', '234567', '12', '5', '123'),
('rajkumawat', '3333333333333', '12', '12', '233'),
('rajkumawat', '654234567', '12', '21', '144');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
