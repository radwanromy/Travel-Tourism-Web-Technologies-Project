-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 09:19 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomid` int(250) NOT NULL,
  `roomNo` varchar(250) NOT NULL,
  `roomType` varchar(250) NOT NULL,
  `bed` varchar(250) NOT NULL,
  `price` bigint(250) NOT NULL,
  `booked` varchar(250) DEFAULT 'yes',
  `location` varchar(250) NOT NULL,
  `quality` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomid`, `roomNo`, `roomType`, `bed`, `price`, `booked`, `location`, `quality`) VALUES
(9, 'Bar401001', 'Non_AC', 'Single', 4000, 'YES', 'Barishal (বরিশাল Barishal)', '4 Stars'),
(11, 'Chi301001', 'Non_AC', 'Single', 3000, 'YES', 'Chittagong (চট্টগ্রাম Chittagong)', '3 Stars'),
(13, 'Dha301001', 'Non_AC', 'Couple(1 Big Beded Room)', 100, 'YES', 'Dhaka (ঢাকা Dhaka)', '3 Stars'),
(14, 'Bar5010012', 'Non_AC', 'Single', 1000, 'YES', 'Barishal (বরিশাল Barishal)', '5 Stars'),
(15, 'Bar401002', 'Non_AC', 'Single', 1000, 'YES', 'Barishal (বরিশাল Barishal)', '4 Stars'),
(16, 'Khu521001', 'AC', 'Single', 1500, 'YES', 'Khulna (খুলনা Khulna)', '5 Stars'),
(17, 'Bar501003', 'Non_AC', 'Single', 1000, 'no', 'Barishal (বরিশাল Barishal)', '5 Stars');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `roomid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
