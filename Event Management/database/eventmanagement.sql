-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 05:45 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

CREATE TABLE `userinfodata` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `etype` varchar(25) DEFAULT NULL,
  `comment` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfodata`
--

INSERT INTO `userinfodata` (`id`, `username`, `email`, `etype`, `comment`) VALUES
(1, 'Shivangi Pandey', 'Shivangi@gmail.com', 'Wedding', 'No. of people are 100\r\n        '),
(2, 'anushka', 'a@gmail.com', 'birthday', 'Number of people are 20-30'),
(3, 'vineeta', 'vn@gmail.com', 'Meeting', 'It is Large conference'),
(4, 'Akash ', 'akash@gmail.com', 'Birthday', 'Want it as extravagant as possible.\r\n        '),
(5, 'shubham', '1shubham@gmail.com', 'Wedding', '  Want it to be perfect\r\n        ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfodata`
--
ALTER TABLE `userinfodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfodata`
--
ALTER TABLE `userinfodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
