-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 01:14 PM
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

--
-- Dumping data for table `adress`
--

INSERT INTO `adress` (`user_id`, `apartment`, `street`, `city`, `country`) VALUES
(33, 0, 'egypt', 'suez', 'Egypt'),
(699, 0, 'egypt', 'suez', 'Egypt'),
(6666, 0, 'egypt', 'suez', 'Egypt'),
(9999999, 5, 'egypt', 'suez', 'Egypt'),
(222222222222, 0, 'egypt', 'suez', 'Egypt'),
(255555555558, 5, 'egypt', 'suez', 'Egypt'),
(2888888888888, 0, 'egypt', 'suez', 'Egypt'),
(29608034444444, 0, 'hg', 'suez', 'Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `patient_Id` bigint(14) NOT NULL,
  `doctor_id` bigint(14) NOT NULL,
  `consultation_type` varchar(15) NOT NULL,
  `booked_online` tinyint(1) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `datetime`, `patient_Id`, `doctor_id`, `consultation_type`, `booked_online`, `state`) VALUES
(2, '2023-02-27 00:00:00', 2664, 29608030400141, 'bv', 1, 'hjgh '),
(7, '2023-03-01 00:00:00', 29608030400141, 29608030400141, 'reapp', 0, 'done'),
(31, '2023-03-01 00:00:00', 29608030400141, 29608030400141, 'reapp2', 0, 'confirm'),
(47, '2023-03-02 00:00:00', 29608034444444, 29608030400141, 'gggggggggg', 0, 'status'),
(51, '2023-03-02 00:00:00', 29608034444444, 29608030400141, 'sondoooooo', 1, 'status'),
(52, '0000-00-00 00:00:00', 29608034444444, 29608030400141, 'sondoooooo', 1, 'status'),
(54, '0000-00-00 00:00:00', 29608034444444, 29608030400141, 'test ccccc', 0, 'status'),
(55, '0000-00-00 00:00:00', 29608034444444, 29608030400141, 'test ccccc', 0, 'status'),
(56, '0000-00-00 00:00:00', 29608034444444, 29608030400141, 'test ccccc', 0, 'status'),
(69, '2023-03-02 07:27:37', 29608034444444, 29608030400141, 'teeeeeeeee', 0, 'status'),
(70, '2023-03-02 20:30:17', 29608034444444, 29608030400141, 'hhhhhhhhhh', 0, 'status'),
(71, '2023-03-03 09:41:25', 29608034444444, 29608030400141, 'front test', 1, 'front test'),
(73, '2023-03-03 09:41:25', 29608034444444, 29608030400141, 'front test', 1, 'front test'),
(74, '2023-03-03 09:41:25', 29608034444444, 29608030400141, 'front test', 1, 'front test'),
(75, '2023-03-03 09:41:25', 29608034444444, 29608030400141, 'front test', 1, 'front test'),
(76, '2023-03-03 09:41:25', 29608034444444, 29608030400141, 'front test', 1, 'front test'),
(77, '2023-03-03 09:41:25', 29608034444444, 29608030400141, 'front test', 1, 'front test'),
(78, '2023-03-03 09:41:25', 29608034444444, 29608030400141, 'front test', 1, 'front test'),
(79, '2023-03-03 09:41:25', 29608034444444, 29608030400141, 'front test', 1, 'front test'),
(80, '2023-03-03 09:41:25', 29608034444444, 29608030400141, 'front test', 1, 'front test'),
(81, '2023-03-03 09:41:25', 29608034444444, 29608030400141, 'front test', 1, 'front test'),
(82, '2023-03-03 09:41:25', 29608034444444, 29608030400141, 'front test', 1, 'front test'),
(83, '2023-03-03 09:41:25', 29608034444444, 29608030400141, 'front test', 1, 'front test'),
(85, '2023-03-03 06:10:03', 29608034444444, 29608030400141, 're-examination', 0, ''),
(86, '2023-03-03 20:39:00', 29608030400141, 29608030400141, 're-examination', 0, ''),
(87, '0000-00-00 00:00:00', 29608030400141, 29608030400141, 'examination', 1, 'draft'),
(88, '0000-00-00 00:00:00', 29608030400141, 29608030400141, 'examination', 1, 'draft'),
(89, '0000-00-00 00:00:00', 29608030400141, 29608030400141, 'examination', 1, 'draft'),
(97, '2023-03-04 10:15:44', 2888888888888, 29608030400141, 'examination', 0, ''),
(99, '2023-03-11 12:54:00', 29608030400141, 255555555558, 're-examination', 0, 'Done'),
(102, '2023-03-05 10:12:42', 222222222222, 255555555558, 'examination', 0, 'Draft'),
(103, '2023-03-05 10:19:10', 222222222222, 255555555558, 're-examination', 0, 'Done'),
(104, '2023-03-07 09:33:00', 29608030400141, 255555555558, 're-examination', 1, 'draft'),
(106, '2023-03-06 09:45:36', 2888888888888, 255555555558, 'examination', 0, 'Confirm'),
(107, '2023-03-06 01:38:07', 2888888888888, 255555555558, 're-examination', 0, 'Draft'),
(108, '2023-03-10 13:43:00', 33, 255555555558, 're-examination', 1, 'draft'),
(110, '2023-03-01 14:12:00', 29608030400141, 255555555558, 're-examination', 1, 'draft');

-- --------------------------------------------------------

--
-- Stand-in structure for view `appointmentusers`
-- (See below for the actual view)
--
CREATE TABLE `appointmentusers` (
`id` int(11)
,`patientId` bigint(14)
,`patienName` varchar(40)
,`birthDate` date
,`docId` bigint(14)
,`doctorName` varchar(40)
,`departmentName` varchar(20)
,`datetime` datetime
,`consultation_type` varchar(15)
,`booked_online` tinyint(1)
,`state` varchar(20)
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
(1, 'surgery'),
(2, 'paediatrics'),
(3, 'dental'),
(4, 'Gastroenterologists');

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
(29608030400141, 1),
(255555555558, 3),
(6666, 1);

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
(33, 'sugarCanel', 1, 'A', 'no', 'no'),
(2664, 'fd', 2, 'o', 'nlk', 'jbh'),
(9999999, 'sugarCanel', 1, 'A', 'no', 'no'),
(222222222222, 'sugarCanel', 0, 'A', 'no', 'egypt'),
(2888888888888, 'Department', 123, 'B', 'no', 'no'),
(29608030400141, 'suez canal', 2, 'o', 'no', 'no'),
(29608034444444, 'sugarCanel', 1, 'A', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `appointment_id` int(11) NOT NULL,
  `prescription_time` datetime NOT NULL,
  `disease` text NOT NULL,
  `medical_test` text NOT NULL,
  `x_rays` text NOT NULL,
  `followup_date` datetime NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`appointment_id`, `prescription_time`, `disease`, `medical_test`, `x_rays`, `followup_date`, `notes`) VALUES
(2, '2023-03-03 09:12:50', 'js test', '', '', '2023-03-03 09:12:50', ''),
(7, '2023-03-03 09:05:21', 'fffffffffffffffffffffffffffffff', 'ffffffff', 'fffffffffff', '2023-03-03 09:05:21', ''),
(31, '2023-03-03 09:49:36', 'realoneffffffffffffffffffffffffffffffffff', 'real one', 'real one', '2023-03-17 00:00:00', 'real note2222222222222222'),
(47, '2023-03-03 04:43:33', 'mmmmmmmmmmmmmmmmmmmmm', '', '', '2023-03-03 04:43:33', ''),
(51, '2023-02-25 04:40:15', 'wooooooooooooooooooooooooooooooooooooo', '', '', '2023-03-03 04:40:15', ''),
(54, '2023-03-03 04:53:18', '', '', '', '2023-03-03 04:53:18', ''),
(55, '2023-03-03 04:50:04', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '', '', '2023-03-03 04:50:04', ''),
(78, '2023-03-07 01:22:53', '', '', '', '2023-03-07 01:22:53', ''),
(99, '0000-00-00 00:00:00', 'diseasemnjh', 'real onemj,k', 'x1,x2,x3m,', '2023-03-05 10:22:07', 'nnnnnnnnnnnnnnnnn'),
(103, '2023-03-05 11:32:43', 'disease', 'MedicalTest', 'x1,x2,x3', '2023-03-05 11:32:43', 'nnnnnnnnnnnnnnnnn'),
(107, '2023-03-06 01:39:47', 'disease', 'MedicalTest', 'x1,x2,x3', '2023-03-06 01:39:47', 'gggggggggggg');

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
(65, 31, 'm2', 'd22222222222222222222', 1, 'c2'),
(66, 31, 'm2', 'd22222222222222222222', 1, 'c2'),
(73, 51, 'a', 'a', 1, 'a'),
(74, 51, 'a', 'a', 1, 'a'),
(75, 51, 'a', 'a', 0, 'a'),
(77, 47, 'a1', 'a1', 1, 'a1'),
(78, 47, 'a2', 'a2', 1, 'a2'),
(79, 47, 'a3', 'a3', 0, 'a3'),
(80, 55, 'm1', '', 1, ''),
(81, 55, 'm2', '', 1, ''),
(86, 54, 'a', '', 1, ''),
(87, 54, 'a1', '', 0, ''),
(88, 54, 'a2', '', 0, ''),
(92, 7, 'f1', 'f1', 1, 'f1'),
(93, 7, 'f2', 'f2', 1, 'f2'),
(94, 7, 'f3', 'f3', 0, 'f3'),
(96, 2, 'm1', '', 0, ''),
(97, 2, 'm2', '', 0, ''),
(98, 2, 'm3', '', 0, ''),
(99, 2, 'm4', '', 0, ''),
(107, 99, 'm4', '', 0, ''),
(108, 99, 'm4', '', 0, ''),
(109, 99, 'm4', '', 0, ''),
(110, 99, 'm4', '', 0, ''),
(111, 103, 'm4', 'd4', 0, 'c4'),
(112, 103, 'm4', 'd4', 0, 'c4'),
(113, 103, 'm4', 'd4', 0, 'c4'),
(114, 103, 'm4', 'd4', 0, 'c4'),
(115, 107, 'm1', 'd1', 0, 'c1'),
(116, 107, 'm1', 'd1', 0, 'c1'),
(117, 107, 'm1', 'd1', 0, 'c1'),
(118, 107, 'm1', 'd1', 0, 'c1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `presusers`
-- (See below for the actual view)
--
CREATE TABLE `presusers` (
`appointment_id` int(11)
,`prescription_time` datetime
,`followup_date` datetime
,`patienName` varchar(40)
,`doctorName` varchar(40)
,`departmentName` varchar(20)
);

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
  `type` varchar(15) NOT NULL,
  `birthDate` date NOT NULL,
  `gender` char(1) NOT NULL,
  `mobile` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`national_id`, `name`, `email`, `password`, `type`, `birthDate`, `gender`, `mobile`) VALUES
(0, 'sad', 'zeinab3handoum@gmail.com', '123', 'Doctor', '2023-03-02', 'M', '01000'),
(33, 'external', 'zeinab3handoum@gmail.com', '123', 'Patient', '2023-03-01', 'F', '1020797704'),
(699, 'zoza', 'adminnnnnn@adn', '123', 'Patient', '0000-00-00', '', '699'),
(1111, 'zaynabDoctor', 'zay', '123', 'doctor', '1996-08-03', 'F', '01020797704'),
(2222, 'zaynabReciptionast', 'zayn', '123', 'receptionist', '1996-08-03', 'F', '01020797704'),
(2664, 'ali', ',mnkjl', ',mnkjl', 'k', '2023-02-16', 'f', '142'),
(6666, 'sad', 'zeinab3handoum@gmail.com', '123', 'Doctor', '2003-02-27', 'F', '00000000'),
(9999999, 'ahmed', 'admin@ad', '123', 'Patient', '2023-03-01', 'F', '55555555'),
(222222222222, 'zaynab handounm', 'admin@ad', 'admin', 'Patient', '2023-03-01', 'F', '5555'),
(255555555558, 'hoda', 'zeinab3handoum@gmail.com', '123', 'Doctor', '2005-02-02', 'M', '1020797704'),
(2888888888888, 'ahmed', 'admin@gh', 'admin', 'Patient', '2009-02-02', '', '+20122222222'),
(29608030400141, 'zaynab ibrahim', 'zaynab3handoum@gmail.com', '123', 'admin', '1996-08-03', 'F', '1020797704'),
(29608034444444, 'zaynab ibrahim', 'admin@gh', 'admin', 'patient', '0000-00-00', '', '1020797755');

-- --------------------------------------------------------

--
-- Structure for view `appointmentusers`
--
DROP TABLE IF EXISTS `appointmentusers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appointmentusers`  AS SELECT `a`.`id` AS `id`, `p`.`national_id` AS `patientId`, `p`.`name` AS `patienName`, `p`.`birthDate` AS `birthDate`, `d`.`national_id` AS `docId`, `d`.`name` AS `doctorName`, `dep`.`name` AS `departmentName`, `a`.`datetime` AS `datetime`, `a`.`consultation_type` AS `consultation_type`, `a`.`booked_online` AS `booked_online`, `a`.`state` AS `state` FROM ((((`appointment` `a` join `users` `p` on(`a`.`patient_Id` = `p`.`national_id`)) join `users` `d` on(`a`.`doctor_id` = `d`.`national_id`)) join `doctor` `doc` on(`doc`.`user_id` = `d`.`national_id`)) join `department` `dep` on(`dep`.`id` = `doc`.`department_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `presusers`
--
DROP TABLE IF EXISTS `presusers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `presusers`  AS SELECT `pre`.`appointment_id` AS `appointment_id`, `pre`.`prescription_time` AS `prescription_time`, `pre`.`followup_date` AS `followup_date`, `a`.`patienName` AS `patienName`, `a`.`doctorName` AS `doctorName`, `a`.`departmentName` AS `departmentName` FROM (`prescription` `pre` left join `appointmentusers` `a` on(`a`.`id` = `pre`.`appointment_id`))  ;

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
  ADD KEY `FKdoctorDepartment` (`department_id`),
  ADD KEY `FKdoctorUser` (`user_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prescription_line`
--
ALTER TABLE `prescription_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `FKappointmenDoctor` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKappointmenPatient` FOREIGN KEY (`patient_Id`) REFERENCES `patient` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `FKdoctorDepartment` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `FKdoctorUser` FOREIGN KEY (`user_id`) REFERENCES `users` (`national_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `FKpatientUser` FOREIGN KEY (`user_id`) REFERENCES `users` (`national_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `FKScheduleDoctor` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
