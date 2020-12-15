-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 06:39 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `hosteldata`
--

CREATE TABLE `hosteldata` (
  `HID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `CheckIn` tinyint(1) NOT NULL,
  `CheckOut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `UID` int(11) NOT NULL,
  `UName` varchar(20) NOT NULL,
  `UEmailID` varchar(40) NOT NULL,
  `UPassword` varchar(12) NOT NULL,
  `MobileNo` bigint(10) NOT NULL,
  `Address` text NOT NULL,
  `RegiterDate` datetime NOT NULL DEFAULT current_timestamp(),
  `AdharCard` bigint(12) NOT NULL,
  `RoomNo` int(11) DEFAULT NULL,
  `JoiningDate` date DEFAULT NULL,
  `LeavingDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`UID`, `UName`, `UEmailID`, `UPassword`, `MobileNo`, `Address`, `RegiterDate`, `AdharCard`, `RoomNo`, `JoiningDate`, `LeavingDate`) VALUES
(1, 'admin', 'admin@gmail.com', 'adminadmin', 987654321, 'dfghjkkuytredcvbnmkiuytrfghjk', '2020-10-22 23:57:06', 987655434, NULL, NULL, NULL),
(10, 'mummy', 'mummy@gmail.com', 'hiral123', 4567890123, 'dfghjkyuiotyjklvbnm', '2020-10-27 11:55:59', 100000000014, NULL, '2020-11-06', '2020-11-15'),
(12, 'bhayu', 'bhayu@gmail.com', 'bhayu123', 1234560987, 'dtyhuijopkloijuhytrftgyhuij', '2020-11-02 12:47:44', 1234567893, 5, '2020-11-12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hosteldata`
--
ALTER TABLE `hosteldata`
  ADD PRIMARY KEY (`HID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UEmailID` (`UEmailID`),
  ADD UNIQUE KEY `AdharCard` (`AdharCard`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hosteldata`
--
ALTER TABLE `hosteldata`
  MODIFY `HID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hosteldata`
--
ALTER TABLE `hosteldata`
  ADD CONSTRAINT `hosteldata_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `userdata` (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
