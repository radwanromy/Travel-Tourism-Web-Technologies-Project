-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 09:03 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `mobile`, `email`, `address`, `age`, `dob`, `gender`, `status`) VALUES
('A-1', 'mr. jack', '01500000000', 'jack@gmail.com', 'Dhaka', '50', '1988-04-08', 'Male', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bl_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pay_status` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` varchar(50) NOT NULL,
  `pht_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_tracking`
--

CREATE TABLE `book_tracking` (
  `bt_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `active_status` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `passport_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `name`, `dob`, `age`, `mobile`, `address`, `passport_id`, `status`, `gender`, `email`, `image`) VALUES
('C-1', 'Hemsworth', '1990-04-22', '40', '01600000000', 'Gazipur', '11111111111111', 'active', 'Male', 'Hemsworth@gmail.com', '../../storage/user_image/hemsworth.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `e_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `salary` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `a_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`e_id`, `name`, `dob`, `salary`, `address`, `gender`, `email`, `mobile`, `status`, `a_id`) VALUES
('E-1', 'jackson', '2020-04-12', '20000', 'Laxmipur', 'Male', 'jackson@gmail.com', '01300000000', 'active', 'A-1');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `h_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `room_no` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `count` int(50) NOT NULL,
  `e_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`h_id`, `name`, `status`, `ref`, `price`, `room_no`, `details`, `location`, `count`, `e_id`) VALUES
('H-1', 'Blu Radison', 'active', '006542aa', '3500', '70', 'Double Bed,AC,TV', 'Dhaka', 0, 'E-1'),
('H-3428075', 'Miami', 'active', 'miami1', '1000', '70', 'AC cabin,single bed', 'Comilla', 0, 'E-1'),
('H-5362051', 'SEA GIRL', 'active', 'rax1', '1000', '70', 'AC cabin and TV', 'Cox Bazar', 0, 'E-1');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `is_id` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `c_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `type`, `ans`, `status`) VALUES
('A-1', 'A-1', 'admin', 'cat', 'active'),
('C-1', 'C-1', 'user', 'teddy', 'active'),
('E-1', 'E-1', 'employee', 'jerry', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `p_id` varchar(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `old_price` varchar(50) DEFAULT NULL,
  `features` varchar(50) NOT NULL,
  `travel_date` date NOT NULL,
  `offer` varchar(50) DEFAULT NULL,
  `a_id` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`p_id`, `p_name`, `type`, `location`, `image`, `price`, `old_price`, `features`, `travel_date`, `offer`, `a_id`, `status`) VALUES
('P-1', 'Sea Beach Tour', 'holiday', 'Saint Martin', '../../storage/package_image/pacSaint.jpg', '200', '200', 'Three days long tour, guide,food,medical support', '2020-11-30', 'off', 'A-1', 'active'),
('P-1813599', 'Hill Tour', 'Holiday', 'RangaMati', '../../storage/package_image/pacRangamati.jpg', '2000', '2000', 'seven days long tour,guide,food,medical support', '2020-04-08', 'off', 'A-1', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `py_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL,
  `bl_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `t_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `from_date` date DEFAULT NULL,
  `no_days` varchar(50) DEFAULT NULL,
  `travel_date` date DEFAULT NULL,
  `seat_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `tr_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `traveldate` date NOT NULL,
  `location_f` varchar(50) NOT NULL,
  `location_t` varchar(50) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `seat_no` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `count` int(50) NOT NULL,
  `e_id` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`tr_id`, `name`, `type`, `traveldate`, `location_f`, `location_t`, `ref`, `seat_no`, `price`, `details`, `count`, `e_id`, `status`) VALUES
('T-1', 'scania', 'bus', '2020-04-06', 'Chittagong', 'Dhaka', '0001sd', '40', '100', 'AC and TV ', 0, 'E-1', 'active'),
('T-530218', 'Green Line', 'air', '2020-04-02', 'Comilla', 'Dhaka', 'miami1', '70', '100', 'AC cabin', 0, 'E-1', 'active'),
('T-9233822', 'Star Line', 'Bus', '2020-04-29', 'Dhaka', 'Comilla', 'Star114', '45', '350', 'Tv and food ', 0, 'E-1', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `web_info`
--

CREATE TABLE `web_info` (
  `w_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_info`
--

INSERT INTO `web_info` (`w_id`, `name`, `details`, `image`) VALUES
('W-1', 'Sundorban', 'Sundorban is the largest forest in Bangladesh', '../../storage/web_info_image/exp1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bl_id`),
  ADD KEY `customer_bill` (`c_id`),
  ADD KEY `booking_bill` (`b_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `customer_booking` (`c_id`);

--
-- Indexes for table `book_tracking`
--
ALTER TABLE `book_tracking`
  ADD PRIMARY KEY (`bt_id`),
  ADD KEY `booking_tracking` (`b_id`),
  ADD KEY `customer_tracking` (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `admin_manager` (`a_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`h_id`),
  ADD KEY `emp_hotel` (`e_id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`is_id`),
  ADD KEY `customer_issue` (`c_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `admin_pack` (`a_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`py_id`),
  ADD KEY `customer_payment` (`c_id`),
  ADD KEY `booking_payment` (`b_id`),
  ADD KEY `bill_payment` (`bl_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `booking_review` (`b_id`),
  ADD KEY `customer_review` (`c_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `booking_ticket` (`b_id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`tr_id`),
  ADD KEY `emp_transport` (`e_id`);

--
-- Indexes for table `web_info`
--
ALTER TABLE `web_info`
  ADD PRIMARY KEY (`w_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `booking` (`b_id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `book_tracking`
--
ALTER TABLE `book_tracking`
  ADD CONSTRAINT `book_tracking_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `book_tracking_ibfk_2` FOREIGN KEY (`b_id`) REFERENCES `booking` (`b_id`);

--
-- Constraints for table `emp`
--
ALTER TABLE `emp`
  ADD CONSTRAINT `emp_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `admin` (`a_id`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `emp` (`e_id`);

--
-- Constraints for table `issue`
--
ALTER TABLE `issue`
  ADD CONSTRAINT `issue_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `admin` (`a_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`b_id`) REFERENCES `booking` (`b_id`),
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`bl_id`) REFERENCES `bill` (`bl_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `booking` (`b_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `booking` (`b_id`);

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `emp` (`e_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
