-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 09:18 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `accno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `email`, `balance`, `accno`) VALUES
('Riby', 'riby@mail.com', 98768, 1),
('Sheryl', 'sheryl@gmail.com', 50000, 2),
('Aswin ', 'aswin@gmail.com', 600000, 3),
('Ivan', 'ivan@gmail.com', 70000, 4),
('sarath', 'sarath@gmail.com', 200000, 5),
('John', 'john@gmail.com', 250000, 6),
('Thomas', 'thomas@gmail.com', 300000, 7),
('Nechiketh', 'nechiketh@gmail.com', 90000, 8),
('Muhammad', 'muhammad@gmail.com', 450000, 9),
('Thaju', 'thaju@gmail.com', 800000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `sno` int(11) NOT NULL,
  `to` int(11) DEFAULT NULL,
  `from` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`sno`, `to`, `from`, `amount`) VALUES
(1, 4, 1, 45),
(2, 3, 1, 2444),
(3, 5, 1, 123222),
(4, 3, 1, 332),
(5, 3, 1, 332),
(6, 3, 1, 332),
(7, 6, 1, 400),
(8, 3, 1, 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`accno`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
