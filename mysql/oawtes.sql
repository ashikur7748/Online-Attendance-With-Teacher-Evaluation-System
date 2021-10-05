-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 02:48 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oawtes`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(10) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `atten_status` varchar(255) NOT NULL,
  `atten_date` date NOT NULL,
  `entrydate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `course_code`, `student_id`, `atten_status`, `atten_date`, `entrydate`) VALUES
(1, ' CSE-301', 'std02', 'P', '2021-04-05', '2021-04-05 10:27:34'),
(2, ' CSE-301', ' std007', ' A', '2021-04-05', '2021-04-05 10:27:34'),
(5, 'CSE-302', 'std02', 'P', '2021-04-05', '2021-04-05 20:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `c_code` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `entrydate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `c_code`, `c_name`, `entrydate`) VALUES
(51, 'CSE-301', 'Computer Security', '2021-04-03 20:29:42'),
(52, 'CSE-303', 'Computer Architecture', '2021-04-03 20:35:40'),
(53, 'CSE-302', 'Computer Fandamental', '2021-04-05 09:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `courses_assign`
--

CREATE TABLE `courses_assign` (
  `id` int(10) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `entrydate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_assign`
--

INSERT INTO `courses_assign` (`id`, `teacher_id`, `course_code`, `entrydate`) VALUES
(7, 'ashikur', 'CSE-302, CSE-303, CSE-301', '2021-04-05 09:18:12'),
(8, 'rahim', 'CSE-302, CSE-303', '2021-04-05 09:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `courses_reg`
--

CREATE TABLE `courses_reg` (
  `id` int(10) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `entrydate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_reg`
--

INSERT INTO `courses_reg` (`id`, `student_id`, `course_code`, `entrydate`) VALUES
(22, 'std007', 'CSE-303, CSE-301', '2021-04-03 20:35:50'),
(23, 'std02', 'CSE-302, CSE-303, CSE-301', '2021-04-05 09:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int(10) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `entrydate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `role` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `entrydate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `password`, `email`, `mobile`, `address`, `department`, `dateofbirth`, `gender`, `entrydate`) VALUES
(8, 'Admin', 'MDHOSSEAIN', 'mdimran24hrs', 'mdimran24hrs', 'mdimran24hrs@gmail.com', '01763732521', NULL, NULL, NULL, NULL, '2021-04-03 20:28:03'),
(9, 'Teacher', 'Ashikur Rahman', 'ashikur', 'ashikur', 'ashikur@gmail.com', '01763732521', '', 'CSE', '0000-00-00', 'Male', '2021-04-03 20:31:57'),
(10, 'Student', 'Md Imran Hossain', 'std007', 'std007', 'std@gmail.com', '01763732521', '', 'CSE', '0000-00-00', 'Male', '2021-04-03 20:34:53'),
(11, 'Teacher', 'Rahim', 'rahim', 'rahim', 'rahim@gmail.com', '01763732521', '', 'CSE', '0000-00-00', 'Male', '2021-04-05 09:19:04'),
(12, 'Student', 'std02', 'std02', 'std02', 'std02@gmail.com', '01763732521', '', 'CSE', '0000-00-00', 'Male', '2021-04-05 09:20:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_assign`
--
ALTER TABLE `courses_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_reg`
--
ALTER TABLE `courses_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `courses_assign`
--
ALTER TABLE `courses_assign`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses_reg`
--
ALTER TABLE `courses_reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
