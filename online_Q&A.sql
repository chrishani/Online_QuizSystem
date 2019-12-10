-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 12:37 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinequiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer1`
--

CREATE TABLE `answer1` (
  `a_id` int(50) NOT NULL,
  `answers` varchar(500) NOT NULL,
  `ans_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer1`
--

INSERT INTO `answer1` (`a_id`, `answers`, `ans_id`) VALUES
(1, 'Hyper Text Markup Language', 1),
(2, 'Hyper Turn Mark Lingo', 1),
(3, 'Hyper Text Markup Language', 1),
(4, 'Hyper Text Marking Language', 1),
(5, 'Internetwork', 2),
(6, 'WAN', 2),
(7, 'MAN', 2),
(8, 'LAN', 2),
(9, 'Proxy Domain', 3),
(10, 'Proxy Documents', 3),
(11, 'Proxy Server', 3),
(12, 'Proxy IP', 3),
(13, 'Change', 4),
(14, 'Idle', 4),
(15, 'Attacks', 4),
(16, 'Defend', 4),
(17, 'TCP/IP', 5),
(18, 'WWW', 5),
(19, 'HTML', 5),
(20, 'FTP', 5);

-- --------------------------------------------------------

--
-- Table structure for table `question1`
--

CREATE TABLE `question1` (
  `q_id` int(50) NOT NULL,
  `questions` varchar(500) NOT NULL,
  `ans_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question1`
--

INSERT INTO `question1` (`q_id`, `questions`, `ans_id`) VALUES
(1, 'What does HTML stands for?', 1),
(2, 'Combination of two or more networks are called', 5),
(3, 'Hyper Text Transfer Protocol (HTTP) support', 12),
(4, 'We use Cryptography term to transforming messages to make them secure and immune to', 15),
(5, 'To create Web Pages we use a term, called', 19);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` int(50) NOT NULL,
  `new_password` varchar(50) NOT NULL,
  `retype_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `first_name`, `last_name`, `u_name`, `email`, `contact_no`, `new_password`, `retype_password`) VALUES
(1, 'gayathri', 'buddhika', 'gayathri', 'wg.gayathri@gmail.com', 703954688, 'thaki', 'thaki'),
(3, 'Tharushi', 'gamage', 'tharishi', 'tharushi@gmail.com', 767349092, 'thru1234', 'tharu124'),
(4, 'Tharushi', 'gamage', 'tharishi', 'tharushi@gmail.com', 767349092, 'thru1234', 'thru1234'),
(5, 'Tharushi', 'gamage', 'tharishi', 'tharushi@gmail.com', 767349092, 'thru1234', 'thru1234'),
(6, 'Tharushi', 'gamage', 'tharishi', 'tharushi@gmail.com', 767349092, 'thru1234', 'thru1234'),
(7, 'Tharushi', 'gamage', 'tharishi', 'tharushi@gmail.com', 767349092, 'thru1234', 'thru1234'),
(8, 'Tharushi', 'gamage', 'tharishi', 'tharushi@gmail.com', 767349092, 'thru1234', 'thru1234'),
(9, 'dinuki', 'oshadi', 'dinuki', 'dinuki@gmail.com', 761715140, 'dinuki123', 'dinuki123'),
(10, 'dinithi', 'madushani', 'dinithi', 'dinithi@gmail.com', 716381981, 'dinithi', 'dinithi'),
(11, 'shashini', 'ireska', 'shashini', 'iresha@gmail.com', 715348963, 'iresha', 'iresha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer1`
--
ALTER TABLE `answer1`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `question1`
--
ALTER TABLE `question1`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer1`
--
ALTER TABLE `answer1`
  MODIFY `a_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `question1`
--
ALTER TABLE `question1`
  MODIFY `q_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
