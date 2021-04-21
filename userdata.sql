-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2021 at 07:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `Id` int(5) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `Emailid` varchar(30) DEFAULT NULL,
  `Password` varchar(25) DEFAULT NULL,
  `Matric` varchar(25) DEFAULT NULL,
  `SSC` varchar(25) DEFAULT NULL,
  `College` varchar(25) DEFAULT NULL,
  `Image` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`Id`, `username`, `Emailid`, `Password`, `Matric`, `SSC`, `College`, `Image`) VALUES
(2, 'neha', 'neha@gmail.com', 'nehaneha', 'neha', 'neha', 'neha', 'ghar.png'),
(3, 'Rohit', 'neha@gmail.com', 'nehaneha', 'neha', 'neha', 'neha', 'face.png'),
(4, 'mohit', 'mohit@gmail.com', 'nehaneha', 'neha', 'neha', 'neha', 'ghar.png'),
(5, 'abcd', 'abc@gmail.com', 'abcdabcd', 'abcd', 'abcd', 'abcd', 'face.png'),
(6, 'bcd', 'bcd@gmail.com', 'bcdbcdbcd', 'bcd', 'bcd', 'bcd', 'face.png'),
(8, 'shyam', 'shayam@gmail.com', 'mohitmohit', 'mohit', 'mohit', 'mohit', 'face.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `sl.no` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
