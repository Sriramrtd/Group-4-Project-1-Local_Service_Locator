-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 04:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `location_acess`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Id` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `hso` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dat` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `bname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Id`, `sname`, `email`, `phone`, `hso`, `address`, `dat`, `status`, `bname`) VALUES
(3, 'pujitha', 'srilakshmipujitha123@gmail.com', '9398564248', '6-7', 'ujk', '2020-03-08', 'Accepted', 'pujitha'),
(4, 'Kavya', 'puji71043@gmail.com', '7997531919', '9-8', 'hjj', '2020-03-08', 'Pending', ''),
(5, 'Raju', 'athukuriramesh96@gmail.com', '9948355551', 'sf4', 'vijayawada', '2222-02-22', 'Pending', 'ravi'),
(6, 'pujitha', 'srilakshmipujitha123@gmail.com', '9398564248', '6-7', '11-6-12, NEAR NTR STATUE, RAMIREDDY PET', '2020-03-17', 'Pending', 'pujitha123'),
(7, 'Raju', 'athukuriramesh96@gmail.com', '9948355551', '6-7', 'Drno 11-6-12 near patha samithi office ramireddy pet Narasaraopet, Guntur district', '2020-03-18', 'Pending', 'pujitha123'),
(8, 'Kavya', 'puji71043@gmail.com', '7997531919', '6-7', '11-6-12 NEAR PATHA SAMITHI OFFICE RAMIREDDY PET', '2020-03-18', 'Pending', 'pujitha123'),
(9, 'pujitha', 'srilakshmipujitha123@gmail.com', '9398564248', '6-7', '11-6-12, NEAR NTR STATUE', '2020-06-10', 'Pending', 'pujitha123'),
(10, 'Kavya', 'puji71043@gmail.com', '7997531919', '9-8', '11-6-12, NEAR NTR STATUE', '2020-06-11', 'Pending', 'pujitha123'),
(11, 'Raju', 'athukuriramesh96@gmail.com', '9948355551', '6-7', 'Drno 11-6-12 near patha samithi office ramireddy pet Narasaraopet', '2020-06-11', 'Pending', 'pujitha123'),
(12, 'Raju', 'athukuriramesh96@gmail.com', '9948355551', '123', 'ngos colony', '2020-06-09', 'Pending', 'pujitha123'),
(13, 'electronics', 'electronics@gmail.com', '123456789', '123', 'patamata', '2020-06-11', 'Pending', 'nandu123'),
(14, 'Kavya', 'puji71043@gmail.com', '7997531919', 'sf4', 'Vijayawada', '2222-02-22', 'Pending', 'ravi'),
(15, 'electronics', 'electronics@gmail.com', '123456789', '123', 'patamata', '2020-06-11', 'Pending', 'nandu123'),
(16, 'pujitha', 'srilakshmipujitha123@gmail.com', '9398564248', 'sf4', 'Vijayawada', '2020-06-26', 'Accepted', 'ravi'),
(17, 'cooler works', 'coolerworks@gmail.com', '9812523456', '1234', 'patamata', '2020-06-11', 'Pending', 'nandu123'),
(18, 'cooler works', 'coolerworks@gmail.com', '9812523456', '1234', 'patamata', '2020-06-11', 'Pending', 'nandu123'),
(19, 'Ravi', 'ravibabu89.nadakuditi@gmail.com', '8790604717', '123', 'ghyghgj', '2020-06-17', 'Pending', 'nandu123'),
(20, 'electronics', 'electronics@gmail.com', '123456789', '12-1 ', 'patamata beside state bank road', '2020-06-23', 'Pending', 'nandu123'),
(21, 'Vijaya', 'srilakshmipujitha123@gmail.com', '9550143554', '6-7', '11-6-12, NEAR NTR STATUE', '2020-06-23', 'Pending', 'Ramesh'),
(22, 'gas works', 'gasworks@gmail.com', '9567823231', '123', 'patamata', '2020-06-24', 'Accepted', 'nandu123'),
(23, 'gas works', 'gasworks@gmail.com', '9567823231', 'sf4', 'Vijayawada', '2222-02-22', 'Accepted', 'ravi'),
(24, 'electronics', 'electronics@gmail.com', '123456789', '1234', 'near kanaka durga temple', '2020-06-24', 'Pending', 'nandu123'),
(25, 'Vijaya', 'srilakshmipujitha123@gmail.com', '9550143554', '6-7', 'Drno 11-6-12 near patha samithi office ramireddy pet Narasaraopet', '2020-06-24', 'Pending', 'Ramesh'),
(26, 'Raju', 'athukuriramesh96@gmail.com', '9948355551', '6-7', '11-6-12, NEAR NTR STATUE', '2020-06-24', 'Pending', 'Ramesh'),
(27, 'SRI LAKSHMI ', 'puji71043@gmail.com', '9398564348', '6-7', '11-6-12, NEAR NTR STATUE', '2020-06-25', 'Pending', 'Ramesh'),
(28, 'SRI  Lakshmi', 'srilakshmipujitha123@gmail.com', '9398564348', '6-7', 'Drno 11-6-12 near patha samithi office ramireddy pet Narasaraopet', '2020-06-24', 'Pending', 'Ramesh'),
(29, 'gas works', 'gasworks@gmail.com', '9567823231', '6-7', '11-6-12, NEAR NTR STATUE', '2020-06-25', 'Accepted', 'Ramesh'),
(30, 'lappy works', 'lappy@gmail.com', '9632587419', '2-45', 'labbipet', '2020-06-24', 'Pending', 'nandu123'),
(31, 'Sai', 'sai@gmail.com', '88997656', '6-7', '11-6-12, NEAR NTR STATUE', '2020-06-25', 'Accepted', 'puja'),
(32, 'lappy works', 'lappy@gmail.com', '9632587419', '12-1', 'santa market road', '2020-06-24', 'Accepted', 'nandu123'),
(33, 'lappy works', 'lappy@gmail.com', '9632587419', '2.1567', 'gudivada near ntr statue', '2020-09-06', 'Pending', 'nandu123'),
(34, 'pujitha', 'srilakshmipujitha123@gmail.com', '9398564248', 'sasank', 'tgudivada', '2020-09-27', 'Pending', 'sasank'),
(35, 'Ravi', 'ravibabu89.nadakuditi@gmail.com', '8790604717', '1735', 'jamac', '2020-11-23', 'Accepted', 'sam'),
(36, 'Enterprise', 'enterprise@gmail.com', '8073334444', '725', 'James Street North Thunderbay', '2020-11-24', 'Accepted', 'Sumanth'),
(37, 'Enterprise', 'enterprise@gmail.com', '8073334444', '727', 'Victoria Avenue', '2020-11-26', 'Accepted', 'Surya'),
(38, 'Marnics', 'marnics@gmail.com', '8073551409', '809', 'arthur street', '2020-11-26', 'Accepted', 'Sriram');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `name`, `phone`, `email`, `msg`) VALUES
(1, 'Ravi Babu Na', '8790604717', 'ravi.nadakuditi@gmail.com', 'Need information'),
(2, 'dcnraju', '123456789', 'chinchang@gmail.com', 'good service'),
(4, 'dcnraju', '123467895', 'dcnraju@gmail.com', 'develop site'),
(5, 'Pujitha', '9398564348', 'srilakshmipujitha123@gmail.com', 'Good '),
(6, 'satish', '9648523231', 'satish@gmail.com', 'easy to access your website'),
(7, 'chin chang', '1152384789', 'chinchang@gmail.com', 'easy to access your website i like to support your website');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `name`, `loc`, `phone`, `email`, `uname`, `pwd`, `photo`) VALUES
(15, 'SriramRathod', 'Reserve', '8073561323', 'sriramrathodjee@gmail.com', 'Sriram', '123456', 'sriramprofile.PNG'),
(13, 'SumanthReddy', 'Port Arthur', '8073560137', 'sumanth1195@gmail.com', 'Sumanth', '123456', 'sumanthprofile.PNG'),
(14, 'SuryaNethra', 'EastEnd', '8073559413', 'suryanethra98@gmail.com', 'Surya', '123456', 'suryaprofile.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` varchar(4) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Id` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Id`, `sname`, `phone`, `msg`, `rate`, `uname`, `email`) VALUES
(9, 'Marnics', '38', 'poor servics', '1', 'Sriram', 'marnics@gmail.com'),
(8, 'Enterprise', '37', 'very good service', '5', 'Surya', 'enterprise@gmail.com'),
(7, 'Enterprise', '36', 'Good service', '4', 'Sumanth', 'enterprise@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amt` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `log` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`Id`, `name`, `amt`, `phone`, `email`, `uname`, `pass`, `lat`, `log`, `loc`, `type`, `pic`) VALUES
(26, 'Marnics', '120', '8073551409', 'marnics@gmail.com', 'Marnics', '123456', '48.4062683', '-89.3022568', 'Algoma Street', 'Mobile repairs', 'marnicsprofile.png'),
(25, 'Enterprise', '120', '8073334444', 'enterprise@gmail.com', 'Enterprise', '123456', '48.4140538,-', '-89.2427965', 'Memorial avenue', 'Car Rental', 'enterpriseprofile.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
