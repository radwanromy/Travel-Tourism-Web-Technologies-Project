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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
