-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 08:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank-appointment-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_firstname` varchar(255) DEFAULT NULL,
  `admin_lastname` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_phoneno` varchar(255) DEFAULT NULL,
  `admin_role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_firstname`, `admin_lastname`, `admin_email`, `admin_phoneno`, `admin_role`) VALUES
(4, '123', '123', 'CHIA', 'HUEY', 'chiajiahuey0301@gmail.com', '0123456789', 'admin'),
(5, '456', '123', 'CHIA', 'HUEY', 'chiajiahuey0301@gmail.com', '0123456789', 'admin'),
(6, 'admin', 'admin', 'amy', 'lee', 'amylee@gmail.com', '0145723748', 'admin'),
(8, 'test', '680908', 'testing', 'ing', 'vobelod777@febula.com', '0123456789', 'admin'),
(9, 'mr.lee', 'abcd1234', 'lee', 'zhe an', 'zhean.0515@gmail.com', '0177749057', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(3) NOT NULL,
  `ser_id` int(3) NOT NULL,
  `cus_id` int(3) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_phoneno` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time_list` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `ser_id`, `cus_id`, `cus_name`, `cus_email`, `cus_phoneno`, `date`, `time_list`) VALUES
(653, 8, 21, 'jason', 'chiajiahuey0301@gmail.com', '01137298875', '2021-02-03', '12.00pm'),
(654, 6, 21, 'chia', 'chiajiahuey0301@gmail.com', '01137298875', '2021-01-21', '10.10am'),
(655, 9, 21, 'joey', 'chiajiahuey0301@gmail.com', '0119293843849', '2021-01-26', '10.20am'),
(657, 13, 21, 'CHIA JIA HUEY', 'chiajiahuey0301@gmail.com', '011-26740823', '2021-01-27', '12.10pm'),
(658, 16, 21, 'yifan', 'chiajiahuey0301@gmail.com', '011-26740823', '2021-01-21', '12.00pm'),
(659, 4, 21, 'CHIA JIA HUEY', 'chiajiahuey0301@gmail.com', '011-26740823', '2021-01-28', '10.40am'),
(660, 4, 21, 'CHIA JIA HUEY', 'chiajiahuey0301@gmail.com', '011-26740823', '2021-01-29', '1.10pm'),
(661, 4, 21, 'CHIA JIA HUEY', 'chiajiahuey0301@gmail.com', '011-26740823', '2021-01-19', '10.00am'),
(662, 9, 26, 'CHIA JIA HUEY', 'chiajiahuey0301@gmail.com', '011-26740823', '2021-01-21', '10.30am'),
(664, 4, 21, 'Alice', 'chiajiahuey0301@gmail.com', '01137298875', '2021-01-21', '10.10am'),
(668, 7, 21, 'CHIA JIA HUEY', 'chiajiahuey0301@gmail.com', '011-26740823', '2021-01-26', '1.10pm'),
(669, 4, 21, 'CHIA JIA HUEY', 'chiajiahuey0301@gmail.com', '011-26740823', '2021-01-27', '10.30am'),
(671, 19, 21, 'CHIA JIA HUEY', 'chiajiahuey0301@gmail.com', '011-26740823', '2021-01-29', '10.40am');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(12, 'Deposit facilities'),
(13, 'Credit facilities'),
(15, 'Bank transfer and payments'),
(16, 'International banking service'),
(17, 'Investment banking and wealth management'),
(18, 'Ancillary services'),
(31, 'super loan');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(7) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `cus_password` varchar(255) NOT NULL,
  `cus_firstname` varchar(255) NOT NULL,
  `cus_lastname` varchar(255) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_phoneno` varchar(255) NOT NULL,
  `cus_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `cus_name`, `cus_password`, `cus_firstname`, `cus_lastname`, `cus_email`, `cus_phoneno`, `cus_role`) VALUES
(13, 'admin', '77728', 'CHIA', 'HUEY', 'chiajiahuey0301@gmail.com', '0123456789', 'subscriber'),
(21, 'chia', '12345', 'CHIA', 'HUEY', 'chiajiahuey0301@gmail.com', '01126740823', 'subscriber'),
(24, 'lee', '12345', 'zhe', 'an', 'leezhean@gmail.com', '0123456789', 'subscriber'),
(25, 'lim', '12345', 'zhou', 'yi', 'chiajiahuey0301@gmail.com', '0123456789', 'subscriber'),
(26, 'abc', '515625', 'a', 'c', 'vobelod777@febula.com', '0123456788', 'subscriber'),
(27, 'zhean', 'abcd1234', 'Lee', 'Zhe An', 'zhean.0515@gmail.com', '0177749057', 'subscriber');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ser_id` int(3) NOT NULL,
  `type_cat_id` int(3) NOT NULL,
  `ser_name` varchar(255) NOT NULL,
  `ser_author` varchar(255) NOT NULL,
  `date_posted` date NOT NULL,
  `ser_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ser_id`, `type_cat_id`, `ser_name`, `ser_author`, `date_posted`, `ser_desc`) VALUES
(4, 12, 'Account opening', 'Admin', '2021-01-23', 'Service that open new bank account for customer'),
(5, 12, 'Service of cheques', 'Admin', '2021-01-18', 'Any services that related to the cheques '),
(6, 12, 'Payment of periodical interest', 'Admin', '2021-01-18', 'A periodic interest rate is a rate that can be charged on a loan, or realized on an investment over a specific period of time.'),
(7, 13, 'Cash credit', 'Admin', '2021-01-18', 'Cash credit is a facility to withdraw money from a current bank account without having credit balance but limited to the extent of borrowing limit.'),
(8, 13, 'Vehicles loans', 'Admin', '2021-01-18', 'Service that have a loans for vehicles'),
(9, 15, 'Payment for bills', 'Admin', '2021-01-18', 'For paying bills'),
(10, 15, 'Bank transfer', 'Admin', '2021-01-18', 'Transfer the money from account to account'),
(11, 16, 'Payment from cross country', 'Admin', '2021-01-18', 'Cross country payment'),
(12, 16, 'Currency exchange', 'Admin', '2021-01-18', 'currency exchange'),
(13, 17, 'Asset management', 'Admin', '2021-01-18', 'Asset management is the process of developing, operating, maintaining, and selling assets.'),
(14, 18, 'Safe deposit locker', 'Admin', '2021-01-18', 'safe deposit locker'),
(15, 18, 'Insurance', 'Admin', '2021-01-18', 'Life Insurance,\r\nHealth Insurance,\r\nLong-Term Disability Coverage,\r\n\r\n'),
(16, 18, 'Credit or debit card', 'Admin', '2021-01-18', 'Apply for credit and debit card'),
(19, 12, '3412aaa', '123', '2021-01-29', 'ergweth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `appointmentdetails_fk1` (`ser_id`),
  ADD KEY `appointmentdetails_fk2` (`cus_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ser_id`),
  ADD KEY `service_cat_fk1` (`type_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=672;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ser_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointmentdetails_fk1` FOREIGN KEY (`ser_id`) REFERENCES `services` (`ser_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointmentdetails_fk2` FOREIGN KEY (`cus_id`) REFERENCES `customers` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `service_cat_fk1` FOREIGN KEY (`type_cat_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
