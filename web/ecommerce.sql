-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2021 at 01:33 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `p_id` bigint(20) NOT NULL,
  `p_name` text NOT NULL,
  `p_price` varchar(100) NOT NULL,
  `p_img` text NOT NULL,
  `p_color` varchar(100) NOT NULL,
  `p_category` varchar(100) NOT NULL,
  `p_details` text NOT NULL,
  `admin_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`p_id`, `p_name`, `p_price`, `p_img`, `p_color`, `p_category`, `p_details`, `admin_id`) VALUES
(16, 'Aditya', '12', 'images/Screenshot from 2021-10-14 15-58-57.png', 'dwdfsfw', 'segdsg', 'segvsdgv', 0),
(17, 'GSKDWHLIDdd', '1233444555566677', 'images/2.png', 'red', 'xzFcxzxc', 'xZxzXLslpdlaspl', 0),
(18, 'aadafag', '12334', 'images/15.png', 'saADAFCASC', 'VSVCZDVSDSAFCDSVC', 'CXCZDXCSF', 0),
(19, 'agerree', '113', 'images/Screenshot from 2021-10-15 18-25-25.png', 'red', 'IDJXOHASOIDH', 'DLNDADKUKUXHODH', 0),
(20, 'ASDSFDG', '131342', 'images/124.png', 'DFVDSVSD', 'FDSFVSEDGV', 'FESDFSEGS', 0),
(21, 'dsakfggfas', '134344', 'images/15.png', 'fdegggff', 'fdfeggesegf', 'fsdkfkfokse', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'aditya', 'adi@gmail', 123),
(2, 'mukesh', 'muku@gmail', 345),
(3, 'vishal', 'adi123@gmail', 123),
(4, 'vishal', 'vishal@12', 1234),
(6, 'rahul ', 'rahul@gmail', 123);

-- --------------------------------------------------------

--
-- Table structure for table `bottomwear`
--

CREATE TABLE `bottomwear` (
  `p_id` bigint(20) NOT NULL,
  `p_name` text NOT NULL,
  `p_price` varchar(100) NOT NULL,
  `p_img` text NOT NULL,
  `p_color` varchar(100) NOT NULL,
  `p_category` varchar(100) NOT NULL,
  `p_details` text NOT NULL,
  `admin_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(250) NOT NULL,
  `cat_table` varchar(250) NOT NULL,
  `cat_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`cat_id`, `cat_name`, `cat_table`, `cat_img`) VALUES
(1, 'Accessories', 'accessories', 'images/w_pic4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `p_id` bigint(20) NOT NULL,
  `p_name` text NOT NULL,
  `p_price` varchar(100) NOT NULL,
  `p_img` text NOT NULL,
  `p_color` varchar(100) NOT NULL,
  `p_category` varchar(100) NOT NULL,
  `p_details` text NOT NULL,
  `admin_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topwear`
--

CREATE TABLE `topwear` (
  `p_id` bigint(20) NOT NULL,
  `p_name` text NOT NULL,
  `p_price` varchar(100) NOT NULL,
  `p_img` text NOT NULL,
  `p_color` varchar(100) NOT NULL,
  `p_category` varchar(100) NOT NULL,
  `p_details` text NOT NULL,
  `admin_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `bottomwear`
--
ALTER TABLE `bottomwear`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `topwear`
--
ALTER TABLE `topwear`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `p_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bottomwear`
--
ALTER TABLE `bottomwear`
  MODIFY `p_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `p_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topwear`
--
ALTER TABLE `topwear`
  MODIFY `p_id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
