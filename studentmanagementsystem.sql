-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 07:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `extensionname` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `civilstatus` varchar(100) NOT NULL,
  `streetnumber` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `firstname`, `middlename`, `lastname`, `extensionname`, `birthday`, `age`, `gender`, `civilstatus`, `streetnumber`, `address`, `barangay`, `town`, `province`, `zipcode`, `student_id`, `login_id`) VALUES
(1, 'Vincent', 'J.', 'Juan', 'none', '2023-12-14', 12, 'male', 'single', 12, '12', 'norte', 'San Manuel', 'Region 3', 2438, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `barangay_table`
--

CREATE TABLE `barangay_table` (
  `id` int(11) NOT NULL,
  `barangay_name` varchar(100) DEFAULT NULL,
  `town_name` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay_table`
--

INSERT INTO `barangay_table` (`id`, `barangay_name`, `town_name`, `date_created`) VALUES
(2, 'GUISET NORTE', 'san manuel', '2023-12-11 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `civil_status_table`
--

CREATE TABLE `civil_status_table` (
  `id` int(11) NOT NULL,
  `civil_status_name` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `civil_status_table`
--

INSERT INTO `civil_status_table` (`id`, `civil_status_name`, `date_created`) VALUES
(3, 'single', '2023-12-11 16:00:00'),
(4, 'female', '2023-12-14 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gender_table`
--

CREATE TABLE `gender_table` (
  `id` int(11) NOT NULL,
  `gender_name` varchar(100) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender_table`
--

INSERT INTO `gender_table` (`id`, `gender_name`, `date_created`) VALUES
(1, 'male', '2023-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `login_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `usertype` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`login_id`, `username`, `password`, `usertype`, `date_created`) VALUES
(1, 'shisui', 'namikaze20', 'student', '2023-12-12 13:22:51'),
(2, 'admin', 'namikaze30', 'admin', '2023-12-12 13:23:27'),
(3, 'parent', 'namikaze10', 'parent', '2023-12-12 13:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `parents_table`
--

CREATE TABLE `parents_table` (
  `id` int(6) NOT NULL,
  `firstname` varchar(191) NOT NULL,
  `middlename` varchar(191) NOT NULL,
  `lastname` varchar(191) NOT NULL,
  `extensionname` varchar(191) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(191) NOT NULL,
  `civilstatus` varchar(191) NOT NULL,
  `streetnumber` int(11) NOT NULL,
  `address` varchar(191) NOT NULL,
  `barangay` varchar(191) NOT NULL,
  `town` varchar(191) NOT NULL,
  `province` varchar(191) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `student` varchar(191) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents_table`
--

INSERT INTO `parents_table` (`id`, `firstname`, `middlename`, `lastname`, `extensionname`, `birthday`, `age`, `gender`, `civilstatus`, `streetnumber`, `address`, `barangay`, `town`, `province`, `zipcode`, `student`, `login_id`) VALUES
(3, 'shisui', 'j', 'juan', 'none', '2023-12-19', 12, 'male', 'single', 12, '12', 'norte', 'san manuel', 'Pangasinan', 2438, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `province_table`
--

CREATE TABLE `province_table` (
  `id` int(11) NOT NULL,
  `province_name` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `province_table`
--

INSERT INTO `province_table` (`id`, `province_name`, `date_created`) VALUES
(1, 'pangasinan', '2023-12-11 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(6) NOT NULL,
  `firstname` varchar(191) NOT NULL,
  `middlename` varchar(191) NOT NULL,
  `lastname` varchar(191) NOT NULL,
  `extensionname` varchar(191) NOT NULL,
  `birthday` date NOT NULL,
  `age` varchar(191) NOT NULL,
  `gender` varchar(191) NOT NULL,
  `civilstatus` varchar(191) NOT NULL,
  `streetnumber` int(11) NOT NULL,
  `barangay` varchar(191) NOT NULL,
  `town` varchar(191) NOT NULL,
  `province` varchar(191) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `parent` varchar(191) NOT NULL,
  `login_id` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `middlename`, `lastname`, `extensionname`, `birthday`, `age`, `gender`, `civilstatus`, `streetnumber`, `barangay`, `town`, `province`, `zipcode`, `parent`, `login_id`) VALUES
(5, 'shisui', 'namikaze', 'uchiha', 'jr.', '1999-02-25', '24', 'male', 'single', 19, 'norte', 'san manuel', 'pangasinan', 2438, 'arlene jueves', '1');

-- --------------------------------------------------------

--
-- Table structure for table `town_table`
--

CREATE TABLE `town_table` (
  `id` int(11) NOT NULL,
  `town_name` varchar(100) DEFAULT NULL,
  `province_name` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `town_table`
--

INSERT INTO `town_table` (`id`, `town_name`, `province_name`, `date_created`) VALUES
(1, 'san manuel', 'pangasinan', '2023-12-11 16:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay_table`
--
ALTER TABLE `barangay_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `civil_status_table`
--
ALTER TABLE `civil_status_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender_table`
--
ALTER TABLE `gender_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `parents_table`
--
ALTER TABLE `parents_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province_table`
--
ALTER TABLE `province_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `town_table`
--
ALTER TABLE `town_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barangay_table`
--
ALTER TABLE `barangay_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `civil_status_table`
--
ALTER TABLE `civil_status_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gender_table`
--
ALTER TABLE `gender_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parents_table`
--
ALTER TABLE `parents_table`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `province_table`
--
ALTER TABLE `province_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `town_table`
--
ALTER TABLE `town_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
