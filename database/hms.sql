-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 12:04 PM
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
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adress`
--

CREATE TABLE `adress` (
  `user_id` bigint(14) NOT NULL,
  `apartment` int(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `patient_Id` bigint(14) NOT NULL,
  `doctor_id` bigint(14) NOT NULL,
  `consultation_type` varchar(10) NOT NULL,
  `booked_online` tinyint(1) NOT NULL,
  `state` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `date`, `time`, `patient_Id`, `doctor_id`, `consultation_type`, `booked_online`, `state`) VALUES
(2, '2023-02-27', '15:24:37', 2664, 2664, 'bv', 1, 'hjgh'),
(5, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'sevice', 0, 'done'),
(7, '2023-03-01', '07:56:27', 29608030400141, 29608030400141, 'reapp', 0, 'done'),
(8, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(9, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(10, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(11, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(14, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(15, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(16, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(17, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(18, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(19, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(20, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(21, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(22, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(23, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(24, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(25, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(26, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(27, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(29, '2023-02-28', '00:00:00', 29608030400141, 29608030400141, 'cons', 0, 'fd'),
(31, '2023-03-01', '09:32:26', 29608030400141, 29608030400141, 'reapp2', 0, 'confirm'),
(32, '2023-03-01', '11:19:55', 29608030400141, 29608030400141, 'sevice', 0, 'status'),
(33, '2023-03-01', '11:20:19', 29608030400141, 29608030400141, '', 0, 'status');

-- --------------------------------------------------------

--
-- Stand-in structure for view `appointmentusers`
-- (See below for the actual view)
--
CREATE TABLE `appointmentusers` (
`id` int(11)
,`patienName` varchar(40)
,`birthDate` date
,`doctorName` varchar(40)
,`departmentName` varchar(20)
,`date` date
,`time` time
,`consultation_type` varchar(10)
,`booked_online` tinyint(1)
,`state` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'surger');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `user_id` bigint(14) NOT NULL,
  `department_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`user_id`, `department_id`) VALUES
(2664, 1),
(29608030400141, 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `user_id` bigint(14) NOT NULL,
  `company` varchar(10) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `blood_type` char(3) NOT NULL,
  `chronic_disease` text NOT NULL,
  `past_surgery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`user_id`, `company`, `employee_id`, `blood_type`, `chronic_disease`, `past_surgery`) VALUES
(2664, 'fd', 2, 'o', 'nlk', 'jbh'),
(29608030400141, 'suez canal', 2, 'o', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `appointment_id` int(11) NOT NULL,
  `prescription_time` time NOT NULL,
  `disease` text NOT NULL,
  `medical_test` text NOT NULL,
  `x_rays` text NOT NULL,
  `followup_date` date NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`appointment_id`, `prescription_time`, `disease`, `medical_test`, `x_rays`, `followup_date`, `notes`) VALUES
(7, '09:59:23', 'sd', 'q', 'q', '0000-00-00', ''),
(14, '10:26:25', 'n', 'n', 'n', '2023-03-08', 'nn'),
(23, '09:55:07', 'a', 'a', 'a', '0000-00-00', ''),
(27, '09:53:01', 'r2', 'r2', 'x2', '0000-00-00', ''),
(31, '09:49:36', 'realone', 'real one', 'real one', '2023-03-17', 'real note');

-- --------------------------------------------------------

--
-- Table structure for table `prescription_line`
--

CREATE TABLE `prescription_line` (
  `id` int(11) NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `medicine_name` varchar(30) NOT NULL,
  `dosage_detail` varchar(100) NOT NULL,
  `allow_subsistuation` tinyint(1) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescription_line`
--

INSERT INTO `prescription_line` (`id`, `prescription_id`, `medicine_name`, `dosage_detail`, `allow_subsistuation`, `comment`) VALUES
(65, 31, 'm1', 'd1', 0, 'c1'),
(66, 31, 'm2', 'd2', 0, 'c2'),
(67, 27, 'm1', '', 0, ''),
(68, 23, 'a', 'aa', 0, 'aa'),
(69, 23, 'a', '', 0, ''),
(70, 7, 'q', 'qq', 0, ''),
(71, 14, 'n', 'n', 0, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `dayDate` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `doctor_id` bigint(14) NOT NULL,
  `room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `national_id` bigint(14) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `type` varchar(10) NOT NULL,
  `birthDate` date NOT NULL,
  `gender` char(1) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`national_id`, `name`, `email`, `password`, `type`, `birthDate`, `gender`, `mobile`) VALUES
(2664, 'ali', ',mnkjl', ',mnkjl', 'k', '2023-02-16', 'f', 142),
(29608030400141, 'zaynab ibrahim', 'zaynab3handoum@gmail.com', '123', 'doctor', '1996-08-03', 'F', 1020797704);

-- --------------------------------------------------------

--
-- Structure for view `appointmentusers`
--
DROP TABLE IF EXISTS `appointmentusers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appointmentusers`  AS SELECT `a`.`id` AS `id`, `p`.`name` AS `patienName`, `p`.`birthDate` AS `birthDate`, `d`.`name` AS `doctorName`, `dep`.`name` AS `departmentName`, `a`.`date` AS `date`, `a`.`time` AS `time`, `a`.`consultation_type` AS `consultation_type`, `a`.`booked_online` AS `booked_online`, `a`.`state` AS `state` FROM ((((`appointment` `a` join `users` `p` on(`a`.`patient_Id` = `p`.`national_id`)) join `users` `d` on(`a`.`doctor_id` = `d`.`national_id`)) join `doctor` `doc` on(`doc`.`user_id` = `d`.`national_id`)) join `department` `dep` on(`dep`.`id` = `doc`.`department_id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKappointmenDoctor` (`doctor_id`),
  ADD KEY `FKappointmenPatient` (`patient_Id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD KEY `FKdoctorUser` (`user_id`),
  ADD KEY `FKdoctorDepartment` (`department_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `prescription_line`
--
ALTER TABLE `prescription_line`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_prelinePre` (`prescription_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKScheduleDoctor` (`doctor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`national_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prescription_line`
--
ALTER TABLE `prescription_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adress`
--
ALTER TABLE `adress`
  ADD CONSTRAINT `FKadressUsers` FOREIGN KEY (`user_id`) REFERENCES `users` (`national_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `FKappointmenDoctor` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`user_id`),
  ADD CONSTRAINT `FKappointmenPatient` FOREIGN KEY (`patient_Id`) REFERENCES `patient` (`user_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `FKdoctorDepartment` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `FKdoctorUser` FOREIGN KEY (`user_id`) REFERENCES `users` (`national_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `FKpatientUser` FOREIGN KEY (`user_id`) REFERENCES `users` (`national_id`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `FK_prescriptioAppointment` FOREIGN KEY (`appointment_id`) REFERENCES `appointment` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prescription_line`
--
ALTER TABLE `prescription_line`
  ADD CONSTRAINT `FK_prelinePre` FOREIGN KEY (`prescription_id`) REFERENCES `prescription` (`appointment_id`) ON DELETE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `FKScheduleDoctor` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
