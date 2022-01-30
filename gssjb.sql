-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 04:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gssjb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(4) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `ID` int(3) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `lga` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `jamb_number` varchar(20) NOT NULL,
  `jamb_score` int(3) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `ssce_details` varchar(30) NOT NULL,
  `ssce` varchar(200) NOT NULL,
  `status` varchar(44) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_admission` varchar(22) NOT NULL,
  `applicationID` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`ID`, `fullname`, `sex`, `phone`, `email`, `lga`, `state`, `jamb_number`, `jamb_score`, `faculty`, `dept`, `ssce_details`, `ssce`, `status`, `photo`, `date_admission`, `applicationID`) VALUES
(7, 'Hanson Daniel ', 'Female', '090990654', 'newleastpaysolution@gmail.com', 'Eket', 'Akwa Ibom', '9075669XV', 222, 'Science', 'Chemistry', 'WAEC/2009', 'upload/waec.jpeg', '1', 'upload/passport.jpeg', '2021-07-08', 'ADM/2021/56053'),
(8, 'Inemesit Idara', 'Male', '0904355343', 'nidara@gmail.com', 'Itu', 'Akwa Ibom', '46576878BA', 219, 'Engineering', 'CIvil Engineering', 'WAEC/2019', 'upload/default.jpg', '1', 'upload/default.jpg', '12/10/2021', '54576887'),
(10, 'Ibrahim ', 'Male', '080899630503', 'ibkhaleal2@gmail.com', ' Tarauni', 'Kano', '1232342421fgf', 211231, 'Art', 'Geography', 'err', 'upload/Result-Report-card-software.png', '0', 'upload/default.jpg', '2021-12-07', 'ADM/2021/69527'),
(11, 'Ibrahim ', 'Male', '080899630503', 'e@dd.vfg', ' e', 'Kano', '2eweqw', 0, 'ewdfs', 'wedwe', 'wedfe', 'upload/Result-Report-card-software.png', '0', 'upload/default.jpg', '2021-12-07', 'ADM/2021/16912'),
(12, 'd', 'Male', 'dsd', 'dwdw@efd.ju', ' e', 'Kano', '1232342421qwq', 0, 'qwq', 'qwq', 'qs', 'upload/Result-Report-card-software.png', '0', 'upload/default.jpg', '2021-12-07', 'ADM/2021/21833'),
(13, 'd', 'Male', 'dsd', 'dwdw@efd.jud', ' e ', 'Kano', '1232342421qwqfd', 0, 'qwq', 'qwq', 'qs', 'upload/Result-Report-card-software.png', '0', 'upload/default.jpg', '2021-12-07', 'ADM/2021/12599'),
(14, 'Ibrahim 344', 'Male', '3434', 'dwdw@efd.judr', ' Tarauni', 'Kano', '34rt34r4', 4, '3434', 'r', 'rfrf', 'upload/Result-Report-card-software.png', '0', 'upload/default.jpg', '2021-12-07', 'ADM/2021/10569'),
(15, 'xcxc', ' ', 'sassq', 'dwdw@essfd.jud', ' es', 's', 's', 0, 's', 'ss', 'ss', 'upload/team-02.png', '0', 'upload/default.jpg', '2021-12-07', 'ADM/2021/31979'),
(16, 'Ibrahim ', 'Male', '08089963050', 'asas@dfjfj.cc', ' ww', 'wd', 'd', 0, 'ddw', 'dww', 'wdwd', 'upload/Result-Report-card-software.png', '0', 'upload/default.jpg', '2021-12-07', 'ADM/2021/10261');

-- --------------------------------------------------------

--
-- Table structure for table `scratchcard`
--

CREATE TABLE `scratchcard` (
  `ID` int(4) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `ser` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scratchcard`
--

INSERT INTO `scratchcard` (`ID`, `pin`, `ser`, `status`) VALUES
(1, '7890327890', '6789332145', 1),
(2, '9877659087', '6643541231', 0),
(3, '9000988754', '0098786541', 0),
(4, '9865489076', '3214568907', 0),
(5, '5455009876', '3213436903', 0),
(6, '5567889012', '1290875444', 0),
(7, '111', '111', 1),
(8, '99', '99', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `scratchcard`
--
ALTER TABLE `scratchcard`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `scratchcard`
--
ALTER TABLE `scratchcard`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
