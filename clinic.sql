-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2016 at 12:45 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `adminname` varchar(30) NOT NULL,
  `adminpass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `adminpass`) VALUES
(1, 'alaa', 'alaa');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `b_patient_name` varchar(30) NOT NULL,
  `b_patient_dr` varchar(30) NOT NULL,
  `b_patient_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `b_patient_name`, `b_patient_dr`, `b_patient_date`) VALUES
(1, 'fathy', 'ali abdo', '2016-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(10) NOT NULL,
  `disease` varchar(700) NOT NULL,
  `disease_trate` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `disease`, `disease_trate`) VALUES
(1, 'heart', 'capoten'),
(2, 'Dermatologist', 'degludec '),
(3, 'surgeon', 'isophane '),
(4, 'Oncologists', 'glulisine '),
(5, 'psy and neurological', 'lispro '),
(6, 'Orthopedic', 'Humulin ');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) NOT NULL,
  `dr_name` varchar(30) NOT NULL,
  `dr_specialty` varchar(30) NOT NULL,
  `dr_patient_num` int(10) NOT NULL,
  `state` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `dr_name`, `dr_specialty`, `dr_patient_num`, `state`) VALUES
(5, 'alaa elsaid', 'surgeon', 25, 1),
(7, 'noha ahmed', 'Dermatologist', 15, 1),
(10, 'Mai Farid', 'Dermatologist', 36, 1),
(12, 'Tamer Hassan', 'Oncologists', 36, 1),
(14, 'Yasser Mohamed', 'psychological and neurological', 30, 1),
(16, 'Samy Adel', 'Orthopedic', 25, 1),
(17, 'Sara Elsayed', 'Dermatologist', 12, 1),
(18, 'Mohamed Ali', 'Orthopedic', 25, 1),
(19, 'Fady Diab', 'heart', 25, 0),
(20, 'Salah Moahmed', 'surgeon', 36, 0),
(23, 'Soha Ragab', 'Oncologists', 25, 0),
(24, 'Saly Diab', 'Oncologists', 12, 1),
(25, 'Samar Moahmed', 'Oncologists', 50, 1),
(26, 'Moahmed Abelhamid', 'heart', 26, 1),
(27, 'Ashraf Moahmed', 'heart', 36, 1),
(28, 'Ali Abdo', 'heart', 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `patient_come_date` date NOT NULL,
  `patient_treated_dr` varchar(30) NOT NULL,
  `patient_disease_trate` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patient_name`, `patient_come_date`, `patient_treated_dr`, `patient_disease_trate`) VALUES
(1, 'alaa', '2016-12-12', 'alaa elsaid', 'capoten'),
(5, 'fathy', '2016-12-11', 'ali abdo', 'degludec ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'alaa', 'alaa'),
(3, 'fathy', 'fathy'),
(4, 'adel', 'adel'),
(5, 'ashraf', 'ashraf'),
(6, 'ahmed', 'ahmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `b_patient_name` (`b_patient_name`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dr_name` (`dr_name`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patient_name` (`patient_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
