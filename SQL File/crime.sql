-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 05:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL,
  `superadmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`, `superadmin`) VALUES
(1, 'admin', 'Test@12345', '28-12-2016 11:42:05 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `ID` int(10) NOT NULL,
  `criminalID` int(10) DEFAULT NULL,
  `CaseDescription` mediumtext DEFAULT NULL,
  `DateFiled` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `investigationStatus` varchar(12) NOT NULL DEFAULT 'Ongoing',
  `policeID` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`ID`, `criminalID`, `CaseDescription`, `DateFiled`, `investigationStatus`, `policeID`, `cid`) VALUES
(9, 5, 'killed a 14 year old girl', '2022-07-14 06:21:15', 'Ongoing', 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `crime`
--

CREATE TABLE `crime` (
  `cid` int(11) NOT NULL,
  `cname` varchar(34) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crime`
--

INSERT INTO `crime` (`cid`, `cname`, `dateCreated`) VALUES
(1, 'Domestic Violence', '2022-07-12 20:18:47'),
(2, 'Domestic Violence', '2022-07-12 20:20:09'),
(3, 'Assault', '2022-07-12 20:20:49'),
(4, 'Murder', '2022-07-12 20:21:54'),
(5, 'Robbing', '2022-07-12 20:22:22'),
(6, 'Fraud', '2022-07-12 20:24:13'),
(7, 'Defilement', '2022-07-12 20:24:50'),
(8, 'Others', '2022-07-12 20:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `policeName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `pID` int(8) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`id`, `specilization`, `policeName`, `address`, `docFees`, `contactno`, `docEmail`, `pID`, `password`, `creationDate`, `updationDate`) VALUES
(10, 'cooporal', 'steven kamau', 'nyeri', '2000', 742202957, 'police@gmail.com', 3640807, 'password', '2022-07-14 06:20:03', NULL),
(11, 'seargent', 'kamau', 'sigoti', '', 254769869061, 'police6@gmail.com', 34566677, '25d55ad283aa400af464c76d713c07ad', '2022-07-15 12:48:41', '2022-07-15 12:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `policelog`
--

CREATE TABLE `policelog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `policepecilization`
--

CREATE TABLE `policepecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policepecilization`
--

INSERT INTO `policepecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Gynecologist/Obstetrician', '2016-12-28 06:37:25', '0000-00-00 00:00:00'),
(2, 'seargent', '2016-12-28 06:38:12', '2022-06-29 19:16:30'),
(3, 'Dermatologist', '2016-12-28 06:38:48', '0000-00-00 00:00:00'),
(4, 'Homeopath', '2016-12-28 06:39:26', '0000-00-00 00:00:00'),
(5, 'Ayurveda', '2016-12-28 06:39:51', '0000-00-00 00:00:00'),
(6, 'Dentist', '2016-12-28 06:40:08', '0000-00-00 00:00:00'),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2016-12-28 06:41:18', '0000-00-00 00:00:00'),
(9, 'Demo test', '2016-12-28 07:37:39', '0000-00-00 00:00:00'),
(10, 'Bones Specialist demo', '2017-01-07 08:07:53', '0000-00-00 00:00:00'),
(11, 'Test', '2019-06-23 17:51:06', '2019-06-23 17:55:06'),
(12, 'Dermatologist', '2019-11-10 18:36:36', '2019-11-10 18:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblcriminal`
--

CREATE TABLE `tblcriminal` (
  `ID` int(10) NOT NULL,
  `Docid` int(10) DEFAULT NULL,
  `criminalName` varchar(24) DEFAULT NULL,
  `criminalContno` bigint(10) DEFAULT NULL,
  `criminalEmail` varchar(15) DEFAULT NULL,
  `criminalGender` varchar(5) DEFAULT NULL,
  `criminalAdd` mediumtext DEFAULT NULL,
  `criminalAge` int(4) DEFAULT NULL,
  `criminalMedhis` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcriminal`
--

INSERT INTO `tblcriminal` (`ID`, `Docid`, `criminalName`, `criminalContno`, `criminalEmail`, `criminalGender`, `criminalAdd`, `criminalAge`, `criminalMedhis`, `CreationDate`, `UpdationDate`) VALUES
(1, 1, 'Manisha Jha', 4558968789, 'test@gmail.com', 'Femal', '\"\"J&K Block J-127, Laxmi Nagar New Delhi', 26, 'She is diabetic criminal', '2019-11-04 21:38:06', '2019-11-06 06:48:05'),
(2, 5, 'Raghu Yadav', 9797977979, 'raghu@gmail.com', 'Male', 'ABC Apartment Mayur Vihar Ph-1 New Delhi', 39, 'No', '2019-11-05 10:40:13', '2019-11-05 11:53:45'),
(3, 7, 'Mansi', 9878978798, 'jk@gmail.com', 'Femal', '\"fdghyj', 46, 'No', '2019-11-05 10:49:41', '2019-11-05 11:58:59'),
(4, 7, 'Manav Sharma', 9888988989, 'sharma@gmail.co', 'Male', 'L-56,Ashok Nagar New Delhi-110096', 45, 'He is long suffered by asthma', '2019-11-06 14:33:54', '2019-11-06 14:34:31'),
(5, 9, 'John', 1234567890, 'john@test.com', 'male', 'Test ', 25, 'THis is sample text for testing.', '2019-11-10 18:49:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(2, 'Sarita pandey', 'New Delhi India', 'Delhi', 'female', 'test@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-30 05:34:39', '0000-00-00 00:00:00'),
(3, 'Amit', 'New Delhi', 'New delhi', 'male', 'amit@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 06:36:53', '0000-00-00 00:00:00'),
(4, 'Rahul Singh', 'New Delhi', 'New delhi', 'male', 'rahul@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:41:14', '0000-00-00 00:00:00'),
(5, 'Amit kumar', 'New Delhi India', 'Delhi', 'male', 'amit12@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 08:00:26', '0000-00-00 00:00:00'),
(6, 'Test user', 'New Delhi', 'Delhi', 'male', 'tetuser@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2019-06-23 18:24:53', '2019-06-23 18:36:09'),
(7, 'John', 'USA', 'Newyork', 'male', 'john@test.com', 'f925916e2754e5e03f75dd58a5733251', '2019-11-10 18:40:21', '2019-11-10 18:40:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `policeID` (`policeID`),
  ADD KEY `criminalID` (`criminalID`),
  ADD KEY `cid_fk` (`cid`);

--
-- Indexes for table `crime`
--
ALTER TABLE `crime`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policelog`
--
ALTER TABLE `policelog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policepecilization`
--
ALTER TABLE `policepecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcriminal`
--
ALTER TABLE `tblcriminal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `crime`
--
ALTER TABLE `crime`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `policelog`
--
ALTER TABLE `policelog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `policepecilization`
--
ALTER TABLE `policepecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblcriminal`
--
ALTER TABLE `tblcriminal`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_ibfk_1` FOREIGN KEY (`policeID`) REFERENCES `police` (`id`),
  ADD CONSTRAINT `cases_ibfk_2` FOREIGN KEY (`criminalID`) REFERENCES `tblcriminal` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_ibfk_3` FOREIGN KEY (`cid`) REFERENCES `crime` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
