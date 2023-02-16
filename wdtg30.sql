-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 06:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdtg30`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'Ronaldo', 'ronaldo@gmail.com', 'c5aa3124b1adad080927ce4d144c6b33');

-- --------------------------------------------------------

--
-- Table structure for table `appointmentlists`
--

CREATE TABLE `appointmentlists` (
  `ID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date` varchar(50) NOT NULL,
  `day` varchar(10) NOT NULL,
  `time` varchar(20) NOT NULL,
  `medicalAppointment` varchar(50) NOT NULL,
  `attendance` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointmentlists`
--

INSERT INTO `appointmentlists` (`ID`, `username`, `email`, `phoneNumber`, `gender`, `date`, `day`, `time`, `medicalAppointment`, `attendance`) VALUES
(1, 'hang', 'hang@gmail.com', '60129473433', 'Male', '2022-10-13', 'Thursday', '8:00 p.m - 8:30 p.m', 'Basic Illness Treatment - Dr Lee', 'YES'),
(2, 'zhiming', 'zhiming@gmail.com', '60124895833', 'Male', '2022-10-15', 'Saturday', '1:00 p.m - 1:30 p.m', 'ENT Treatment - Dr Amir', 'NO'),
(3, 'titus', 'titus@gmail.com', '60169496833', 'Male', '2022-10-15', 'Saturday', '8:00 a.m - 8:30 a.m', 'Basic Illness Treatment - Dr Lee', 'NO'),
(4, 'susie', 'susie@gmail.com', '60120483943', 'Female', '2022-10-15', 'Saturday', '8:00 a.m - 8:30 a.m', 'Basic Body Check Up - Dr James', 'YES'),
(5, 'susan', 'susan@gmail.com', '60129489497', 'Female', '2022-10-15', 'Saturday', '9:00 a.m - 9:30 a.m', 'ENT Treatment - Dr Amir', 'NO'),
(7, 'daniel', 'daniel@gmail.com', '60129384932', 'Male', '2022-10-15', 'Saturday', '3:30 p.m - 4:00 p.m', 'Basic Illness Treatment - Dr Lee', 'NO'),
(10, 'neymar', 'neymar@gmail.com', '60145849509', 'Male', '2022-10-17', 'Monday', '9:00 p.m - 9:30 p.m', 'Basic Illness Treatment - Dr Lee', 'YES'),
(14, 'mbappe', 'mbappe@gmail.com', '60128598544', 'Male', '2022-10-18', 'Tuesday', '2:30 p.m - 3:00 p.m', 'Basic Body Check Up - Dr James', 'PENDING'),
(17, 'zong', 'zong@gmail.com', '60128568493', 'Male', '2022-10-17', 'Monday', '8:00 a.m - 8:30 a.m', 'Basic Illness Treatment - Dr Lee', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `username`, `email`, `password`) VALUES
(1, 'Dr Lee', 'drlee@gmail.com', '3909a87edc7457550ee5c19175f64874'),
(2, 'Dr James', 'drjames@gmail.com', 'a366a7d4479489c4af5ed39eb3be6b72'),
(3, 'Dr Amir', 'dramir@gmail.com', '4848b423e044009cdbfaff8635e2316f');

-- --------------------------------------------------------

--
-- Table structure for table `seniors`
--

CREATE TABLE `seniors` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seniors`
--

INSERT INTO `seniors` (`id`, `username`, `email`, `password`) VALUES
(4, 'ZM', 'zm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Messi', 'messi@gmail.com', '1463ccd2104eeb36769180b8a0c86bb6'),
(6, 'Abu', 'abu@gmail.com', '34d71b97c471931334f385b4e7b7379c'),
(7, 'Axelsen', 'axelsen@gmail.com', 'bfc3e8744fc123fcaaef2dac5b1aa155'),
(8, 'Zhi Ming', 'zhiming11@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(9, 'Zhi Ming', 'zhiming@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(10, 'Jimmy', 'jimmy@gmail.com', 'c2fe677a63ffd5b7ffd8facbf327dad0'),
(11, 'Titus', 'titus@gmail.com', '6bead9669b57c4bc84c4bb1c7d711a0a'),
(12, 'chongwei', 'chongwei@gmail.com', '0a54d0c9103f85daf7b9d962ece135c8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointmentlists`
--
ALTER TABLE `appointmentlists`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seniors`
--
ALTER TABLE `seniors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointmentlists`
--
ALTER TABLE `appointmentlists`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seniors`
--
ALTER TABLE `seniors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
