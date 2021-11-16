-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2021 at 07:21 AM
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
-- Table structure for table `ppppppppppp`
--

CREATE TABLE `ppppppppppp` (
  `pno` int(11) NOT NULL,
  `pbrand` varchar(11) NOT NULL,
  `pcomp` varchar(11) NOT NULL,
  `pipname` varchar(11) NOT NULL,
  `p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ppppppppppp`
--

INSERT INTO `ppppppppppp` (`pno`, `pbrand`, `pcomp`, `pipname`, `p`) VALUES
(1, 'bd', 'ckbcdcjld', 'cdckjdckd', 11),
(2, 'vfgvfdv', 'vdvdsvsdv', 'vdsvvsd', 33),
(3, 'dvdzvdvd', 'vdzvdvd', 'vdvdvs', 22),
(4, 'zdvzdv', 'vxvdzvdv', 'dvdsvsdv', 34),
(5, 'c ', 'vcxvvs', 'ggbffb', 45),
(6, 'fxbcxv', ' vcvvcx', 'vzdvvd', 34),
(7, 'vzccv ', 'jjgfgh', 'hghghg', 5),
(8, 'hfbcvbb', 'ncvvcnn', 'vncvn', 5),
(9, 'cascwqf', 'sacsac', 'csaev', 342),
(10, 'fcfsdcf', 'cxcdf', 'fdfef', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ppppppppppp`
--
ALTER TABLE `ppppppppppp`
  ADD PRIMARY KEY (`pno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ppppppppppp`
--
ALTER TABLE `ppppppppppp`
  MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
