-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 02:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aditya`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `comno` int(11) NOT NULL,
  `comname` varchar(11) NOT NULL,
  `comlolation` varchar(11) NOT NULL,
  `comnumber` int(11) NOT NULL,
  `companylser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`comno`, `comname`, `comlolation`, `comnumber`, `companylser`) VALUES
(1, 'abs', 'jaipur', 54545454, 1000),
(2, 'aba', 'jaaia', 737474, 29099),
(3, 'vdsv', 'jaipur', 74564674, 10000),
(4, 'dhfhfhf', 'kota', 737374, 747474),
(5, 'ffeff', 'effeff', 3444433, 3444334),
(6, 'jfhhff', 'kdhffhfh', 6364, 873873);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hosno` int(11) NOT NULL,
  `hosname` varchar(11) NOT NULL,
  `hosaddress` varchar(11) NOT NULL,
  `hosnumber` int(11) NOT NULL,
  `hosemail` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hosno`, `hosname`, `hosaddress`, `hosnumber`, `hosemail`) VALUES
(1, 'xyz', 'jaipur', 1324, 'x@gmail'),
(2, 'xxx', 'kota', 34343, 'y@gmail'),
(3, 'sancnb', 'cdsvdew', 3123456, 'svfd@'),
(4, 'cdvbb', 'ecnushcih', 6363, 'snqcjhe'),
(5, 'xihoxhsjk', 'dsxksc', 7673, 'lksncsjl'),
(6, 'vkhcvshjch', 'xsskxnih', 76336, 'suuhihsois@');

-- --------------------------------------------------------

--
-- Table structure for table `moblie`
--

CREATE TABLE `moblie` (
  `s no1` int(11) NOT NULL,
  `mobname` int(11) NOT NULL,
  `mobram` int(11) NOT NULL,
  `mobrom` int(11) NOT NULL,
  `moborice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moblie`
--

INSERT INTO `moblie` (`s no1`, `mobname`, `mobram`, `mobrom`, `moborice`) VALUES
(1, 233, 33344, 444, 44546),
(35, 334445, 3445, 34453, 33355);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `sno` int(11) NOT NULL,
  `sname` varchar(11) NOT NULL,
  `saddresh` varchar(11) NOT NULL,
  `smoblie` int(11) NOT NULL,
  `sgmail` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`sno`, `sname`, `saddresh`, `smoblie`, `sgmail`) VALUES
(1, 'ram', 'kota', 24353, 'ram1@gmail'),
(1, 'ram', 'kota', 24353, 'ram1@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `cusid` int(11) NOT NULL,
  `cusname` varchar(11) NOT NULL,
  `cusdetail` varchar(11) NOT NULL,
  `cusadress` int(11) NOT NULL,
  `cusnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`cusid`, `cusname`, `cusdetail`, `cusadress`, `cusnumber`) VALUES
(1, 'gdgcdh', 'sjabkccajk', 544443, 3334),
(2, 'hhfhjjfd', 'kcjjcjc', 334344, 444556),
(6, 'lbkbknbk', 'dsvlknnlj', 4243, 4434),
(7, 'bbdgdbgd', 'dbdfb', 5555, 555),
(8, 'fgddbdb', 'fdbdfb', 44446, 64),
(9, 'cefnbdgn', 'fndbcxbb', 886775, 567);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll no` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `address` varchar(11) NOT NULL,
  `moblie no` int(12) NOT NULL,
  `email` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll no`, `name`, `address`, `moblie no`, `email`) VALUES
(1, 'Aditya', 'jaipur', 1234567, 'aditya09@gmail.com'),
(2, 'rohan', 'u.p', 23456, 'rohan02@gmail.com'),
(5, 'vinit', 'kota', 653653, 'vinit98@gmail.com'),
(6, 'mansi', 'delhi', 83783783, 'mansi09@gmail.com'),
(7, 'vinit sir', 'jaipur', 653653, 'vinit98@gmail.com'),
(8, 'lokesh', 'delhi', 83783783, 'lokii09@gmail.com'),
(9, 'mukesh', 'napal', 76363783, 'isis764@gmail.com'),
(10, 'himanshu', 'rachi', 7766765, 'himan12@gmail.com'),
(11, 'mukesh', 'napal', 76363783, 'isis764@gmail.com'),
(12, 'himanshu', 'rachi', 7766765, 'himan12@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`comno`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hosno`);

--
-- Indexes for table `moblie`
--
ALTER TABLE `moblie`
  ADD PRIMARY KEY (`s no1`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`cusid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `comno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hosno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `moblie`
--
ALTER TABLE `moblie`
  MODIFY `s no1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `cusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `roll no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
