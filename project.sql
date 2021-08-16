-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 09:18 PM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(250) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `mobile` bigint(250) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `idproof` varchar(250) NOT NULL,
  `addres` varchar(250) NOT NULL,
  `roomNo` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `status` varchar(250) DEFAULT 'CheckIn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `cname`, `mobile`, `nationality`, `gender`, `dob`, `idproof`, `addres`, `roomNo`, `price`, `status`) VALUES
(1, 'A. S. M. Radwan', 8801717799111, 'bd', 'Male', '1998-06-10', '123', 'fxcv', 'Bar501001', '10000', 'CheckOut'),
(5, 'A. S. M. Radwan', 11717799111, 'bd', 'Other', '2021-08-04', '1234', 'fxcvghjmngfhjn', 'Dha30j1001ghjg', '12220', 'CheckOut'),
(6, 'A. S. M. Radwan', 11717799111, 'bd', 'Female', '2021-08-02', '123', 'fxcv', 'Dha301001', '30000', 'CheckOut'),
(16, 'A. S. M. Radwan', 11717799111, 'bd', 'Female', '2021-08-02', '1234546456356', 'fxcv', 'Bar401002', '1000', 'CheckIn'),
(17, 'A. S. M. Radwan', 11717799111, 'bd', 'Male', '2021-08-01', '1234546456356', 'fxcv', 'Khu521001', '1500', 'CheckOut');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `eid` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `day` int(250) NOT NULL,
  `month` int(250) NOT NULL,
  `year` int(250) NOT NULL,
  `filename` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`eid`, `name`, `username`, `email`, `password`, `gender`, `day`, `month`, `year`, `filename`) VALUES
(21, 'A. S. M. Radwan', '18-36384-1', '18-36384-1@student.aiub.edu', '123456', 'Male', 10, 6, 1998, 'rad2.jpg'),
(22, 'A. S. M. Radwan', 'radwanromy', 'radwanromy@gmail.com', '123123', 'Male', 10, 6, 1998, 'rad.jpg'),
(80, 'Radwan', 'radwanromy22', 'radwanromy22@gmail.com', '123123', 'Male', 10, 6, 2500, 'rad.jpg');

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
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `eid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `roomid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
