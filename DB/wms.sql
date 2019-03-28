-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 04:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fname` varchar(244) NOT NULL,
  `lname` varchar(244) NOT NULL,
  `email` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL,
  `whname` varchar(244) NOT NULL,
  `Cpac` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fname`, `lname`, `email`, `password`, `whname`, `Cpac`) VALUES
(5, 'admin', 'admin', 'admin@admin', '123', 'My wharehouse', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `fk_aid` int(11) NOT NULL,
  `name` varchar(244) NOT NULL,
  `uname` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fk_aid`, `name`, `uname`, `password`) VALUES
(185, 5, 'NASSER', 'nasser', '123'),
(186, 5, 'FAHAD', 'FAHAD', '123'),
(187, 5, 'ABDO', 'abdo', '123'),
(188, 5, 'MOHAMMED', 'mohammed', '123'),
(189, 5, 'ANAS', 'anas', '123'),
(190, 5, 'OMAR', 'omar', '123'),
(191, 5, 'HASSAN', 'hassan', '123'),
(192, 5, 'ADEL', 'adel', '123'),
(193, 5, 'FAISAL', 'faisal', '123');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `fk_aid` int(11) NOT NULL,
  `name` varchar(244) NOT NULL,
  `location` varchar(244) NOT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `fk_aid`, `name`, `location`, `qty`, `description`) VALUES
(401, 5, 'Apple iphone', 'R1S1', '2000', 'Smart phone 500 gb 2018 by apple'),
(402, 5, 'Apple Macbook', 'R4S2', '3000', 'Laptope 1TB 2019 by apple 8GB RAM i5'),
(403, 5, 'LG TV', 'R5S3', '1000', 'LG Smart tv 65 inch 2019'),
(404, 5, 'DELL LAPTOP', 'R8S11', '2500', 'Laptope 1TB 2019 by DELL 8GB RAM i5');

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `fk_eid` int(11) NOT NULL,
  `fk_iid` int(11) NOT NULL,
  `type` varchar(244) NOT NULL,
  `qty` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`fk_eid`, `fk_iid`, `type`, `qty`, `time`) VALUES
(185, 401, 'D', 2000, '2019-03-28 15:19:38'),
(185, 402, 'I', 1000, '2019-03-28 15:19:38'),
(185, 404, 'D', 500, '2019-03-28 15:19:38'),
(185, 403, 'D', 20, '2019-03-28 15:19:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aid` (`fk_aid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aid` (`fk_aid`);

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD KEY `fk_eid` (`fk_eid`),
  ADD KEY `fk_iid` (`fk_iid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`fk_aid`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`fk_aid`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trans`
--
ALTER TABLE `trans`
  ADD CONSTRAINT `trans_ibfk_1` FOREIGN KEY (`fk_eid`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trans_ibfk_2` FOREIGN KEY (`fk_iid`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
