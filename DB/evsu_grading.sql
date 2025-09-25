-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 08:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evsu_grading`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `items` varchar(50) NOT NULL,
  `score` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `subject`, `date`, `items`, `score`, `semester`) VALUES
(109, 'lauzon elsie l.', 'Programming 1', '2023-10-20', '43', '43', 1),
(110, 'lauzon elsie l.', 'Programming 1', '2023-10-20', '43', '43', 1),
(111, 'lauzon elsie l.', 'Programming 1', '2023-10-20', '43', '43', 2),
(112, 'lauzon elsie l.', 'Programming 1', '2023-10-20', '43', '43', 2),
(113, 'lauzon elsie b.', 'Programming 1', '2023-10-20', '50', '50', 1),
(114, 'lauzon elsie b.', 'Programming 1', '2023-10-20', '55', '55', 2),
(115, 'lauzon elsie b.', 'Programming 2', '2023-10-20', '43', '30', 1),
(116, 'lauzon elsie l.', 'Programming 2', '2023-10-20', '43', '43', 2),
(117, 'lauzon elsie l.', 'Programming 2', '2023-10-21', '43', '43', 1),
(118, 'lauzon elsie b.', 'Programming 2', '2023-10-21', '43', '43', 2),
(119, 'lauzon elsie b.', 'Programming 2', '2023-10-21', '43', '43', 2),
(120, 'lauzon elsie b.', 'Programming 2', '2023-10-21', '100', '80', 2),
(121, 'lauzon elsie b.', 'Programming 2', '2023-10-21', '43', '43', 2),
(125, 'diola kian shim b.', 'Programming 1', '2023-10-22', '30', '30', 1),
(126, 'diola kian shim b.', 'Programming 1', '2023-10-22', '50', '50', 1),
(127, 'diola kian shim b.', 'Programming 1', '2023-10-22', '30', '12', 2),
(128, 'lauzon elsie l.', 'Programming 3', '2023-10-25', '43', '43', 1),
(129, 'lauzon elsie l.', 'Programming 3', '2023-10-25', '43', '100', 2),
(130, 'lauzon elsie l.', 'Programming 3', '2023-10-25', '43', '44', 1),
(131, 'lauzon elsie l.', 'Programming 2', '2023-10-27', '43', '20', 1),
(132, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '43', '20', 1),
(135, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '43', '43', 1),
(137, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '43', '43', 2),
(138, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '43', '43', 2),
(139, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '43', '43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `access`) VALUES
(1, 'admin123', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_subject`
--

CREATE TABLE `admin_subject` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_subject`
--

INSERT INTO `admin_subject` (`id`, `subject`) VALUES
(3, 'Programming 2'),
(4, 'Programming 3'),
(5, 'Programming 4'),
(7, 'Programming 1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_teacher_subject`
--

CREATE TABLE `admin_teacher_subject` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_teacher_subject`
--

INSERT INTO `admin_teacher_subject` (`id`, `name`, `subject`, `username`, `password`) VALUES
(12, 'jhon doe', 'Programming 2', 'Xydrnyl_uKc7UpZe', 'WX87mzIQ'),
(13, 'elsie', 'Programming 1', 'Albuera_HUllrSOz', 'MIiLOqcG'),
(14, 'jhon doe', 'Programming 3', '123456789', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `firstname`, `lastname`, `middlename`, `email`) VALUES
(15, 'elsie', 'lauzon', 'linggas', 'shimshimdiola@gamial.com');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `present` varchar(50) NOT NULL,
  `absent` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `name`, `date`, `present`, `absent`, `semester`, `subject`) VALUES
(5, 'lauzon elsie b.', '2023-11-07', '', 'ABSENT', 0, 'Programming 3'),
(6, 'diola kian shim b.', '2023-11-07', 'PRESENT', '', 0, 'Programming 3'),
(7, 'lauzon elsie l.', '2023-11-07', '', 'ABSENT', 0, 'Programming 3');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` varchar(11) NOT NULL,
  `items` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `name`, `subject`, `date`, `items`, `score`, `semester`) VALUES
(9, 'lauzon elsie l.', 'Programming 1', '2023-10-22', 43, 43, 1),
(10, 'diola kian shim b.', 'Programming 1', '2023-10-22', 43, 43, 1),
(11, 'diola kian shim b.', 'Programming 1', '2023-10-22', 43, 430, 2),
(12, 'lauzon elsie l.', 'Programming 2', '2023-10-28', 43, 43, 1),
(13, 'lauzon elsie l.', 'Programming 2', '2023-10-28', 43, 43, 2),
(14, 'diola kian shim b.', 'Programming 2', '2023-10-28', 43, 444, 2),
(15, 'diola kian shim b.', 'Programming 2', '2023-10-28', 43, 430, 1),
(16, 'lauzon elsie l.', 'Programming 2', '2023-10-29', 43, 43, 1),
(17, 'lauzon elsie l.', 'Programming 2', '2023-10-29', 43, 43, 1),
(19, 'lauzon elsie l.', 'Programming 2', '2023-10-29', 33, 33, 2);

-- --------------------------------------------------------

--
-- Table structure for table `partial_score`
--

CREATE TABLE `partial_score` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `attendance` tinyint(11) NOT NULL,
  `activity` tinyint(11) NOT NULL,
  `quiz` tinyint(11) NOT NULL,
  `project` tinyint(11) NOT NULL,
  `exam` tinyint(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partial_score`
--

INSERT INTO `partial_score` (`id`, `name`, `subject`, `attendance`, `activity`, `quiz`, `project`, `exam`, `semester`) VALUES
(65, 'diola kian shim b.', 'Programming 1', 0, 0, 0, 0, 127, 1),
(66, 'lauzon elsie l.', 'Programming 1', 0, 0, 0, 0, 43, 2),
(67, 'lauzon elsie l.', 'Programming 1', 0, 0, 0, 0, 43, 1),
(68, 'diola kian shim b.', 'Programming 1', 0, 0, 0, 0, 43, 2),
(69, 'lauzon elsie l.', 'Programming 3', 0, 87, 0, 0, 0, 1),
(70, 'lauzon elsie l.', 'Programming 3', 75, 100, 127, 80, 75, 2),
(71, 'diola kian shim b.', 'Programming 3', 0, 0, 44, 0, 0, 1),
(72, 'lauzon elsie l.', 'Programming 2', 0, 127, 127, 127, 127, 1),
(73, 'lauzon elsie l.', 'Programming 2', 0, 86, 40, 33, 76, 2),
(74, 'diola kian shim b.', 'Programming 2', 0, 0, 0, 0, 127, 2),
(75, 'diola kian shim b.', 'Programming 2', 0, 0, 0, 0, 43, 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `avatar`, `name`) VALUES
(12, '6549d648ae9be.png', 'Test123'),
(13, '6549de3d89e07.png', 'cinco123');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `items` varchar(50) NOT NULL,
  `score` varchar(50) NOT NULL,
  `semester` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `subject`, `date`, `items`, `score`, `semester`) VALUES
(13, 'lauzon elsie l.', 'Programming 1', '2023-10-20', '90', '90', 1),
(14, 'lauzon elsie l.', 'Programming 1', '2023-10-20', '77', '77', 1),
(15, 'lauzon elsie l.', 'Programming 1', '2023-10-20', '22', '22', 2),
(16, 'lauzon elsie l.', 'Programming 1', '2023-10-20', '12', '12', 2),
(17, 'lauzon elsie b.', 'Programming 1', '2023-10-20', '100', '100', 1),
(20, 'diola kian shim b.', 'Programming 1', '2023-10-22', '30', '30', 1),
(21, 'diola kian shim b.', 'Programming 1', '2023-10-22', '30', '30', 1),
(22, 'diola kian shim b.', 'Programming 1', '2023-10-22', '40', '30', 1),
(27, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '11', '11', 1),
(28, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '22', '22', 1),
(29, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '22', '22', 1),
(30, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '22', '22', 1),
(31, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '22', '22', 1),
(32, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '22', '22', 1),
(33, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '33', '33', 1),
(34, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '333', '333', 1),
(35, 'lauzon elsie l.', 'Programming 2', '2023-10-28', '33', '33', 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `items` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `name`, `subject`, `date`, `items`, `score`, `semester`) VALUES
(8, 'lauzon elsie l.', 'Programming 1', '2023-10-20', 90, 90, 1),
(9, 'lauzon elsie l.', 'Programming 1', '2023-10-20', 22, 22, 2),
(10, 'lauzon elsie l.', 'Programming 1', '2023-10-20', 55, 55, 2),
(11, 'lauzon elsie l.', 'Programming 1', '2023-10-20', 55, 55, 2),
(12, 'lauzon elsie l.', 'Programming 1', '2023-10-20', 20, 20, 2),
(13, 'lauzon elsie b.', 'Programming 1', '2023-10-20', 100, 100, 1),
(14, 'diola kian shim b.', 'Programming 1', '2023-10-22', 40, 100, 1),
(15, 'diola kian shim b.', 'Programming 1', '2023-10-22', 90, 90, 1),
(16, 'diola kian shim b.', 'Programming 3', '2023-10-25', 44, 44, 1),
(17, 'lauzon elsie l.', 'Programming 3', '2023-10-25', 44, 44, 2),
(18, 'lauzon elsie l.', 'Programming 2', '2023-10-28', 50, 50, 2),
(22, 'lauzon elsie l.', 'Programming 2', '2023-10-28', 44, 44, 1),
(23, 'lauzon elsie l.', 'Programming 2', '2023-10-28', 44, 44, 1),
(24, 'lauzon elsie l.', 'Programming 2', '2023-10-28', 11, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students_user`
--

CREATE TABLE `students_user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `subject1` varchar(50) NOT NULL,
  `subject2` varchar(50) NOT NULL,
  `subject3` varchar(50) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_user`
--

INSERT INTO `students_user` (`id`, `firstname`, `lastname`, `middlename`, `subject1`, `subject2`, `subject3`, `id_number`, `password`, `email`, `section`) VALUES
(8, 'elsie', 'lauzon', 'linggas', ' Programming 1', ' Programming 2', ' Programming 3', 'selso_22EDFPte', 'ffiM8hMi', 'shimshimdiola@gamial.com', '4A'),
(13, 'elsie', 'lauzon', 'brusesooo', ' Programming 2', ' Programming 1', ' Programming 3', 'Test123', 'Test123', 'shimshimdiola@gamial.com', '4A'),
(14, 'jona mae', 'Ambot ', 'cinco', ' Programming 2', ' Programming 1', ' Programming 3', 'cinco123', 'cinco123', 'shimshimdiola@gamial.com', '4A');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `grade_first_semester` float NOT NULL,
  `grade_second_semester` float NOT NULL,
  `GWA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `firstname`, `lastname`, `middlename`, `id_number`, `section`, `subject`, `grade_first_semester`, `grade_second_semester`, `GWA`) VALUES
(19, 'lauzon elsie l.', 'elsie', 'lauzon', 'linggas', 'selso_22EDFPte', '4A', ' Programming 1', 0, 0, ''),
(20, 'lauzon elsie l.', 'elsie', 'lauzon', 'linggas', 'selso_22EDFPte', '4A', ' Programming 2', 1, 5, '0'),
(21, 'lauzon elsie l.', 'elsie', 'lauzon', 'linggas', 'selso_22EDFPte', '4A', ' Programming 3', 5, 1.25, '0'),
(25, 'diola kian shim b.', 'kian shim', 'diola', 'bruses', 'test123', '4A', ' Programming 1', 5, 5, ''),
(26, 'diola kian shim b.', 'kian shim', 'diola', 'bruses', 'test123', '4A', ' Programming 2', 5, 5, ''),
(27, 'diola kian shim b.', 'kian shim', 'diola', 'bruses', 'test123', '4A', ' Programming 3', 5, 0, ''),
(28, 'ttt ttt t.', 'ttt', 'ttt', 'tttt', 'selso_22EDFPtesss', 'franklin', ' Programming 2', 0, 0, ''),
(29, 'ttt ttt t.', 'ttt', 'ttt', 'tttt', 'selso_22EDFPtesss', 'franklin', ' Programming 1', 0, 0, ''),
(30, 'ttt ttt t.', 'ttt', 'ttt', 'tttt', 'selso_22EDFPtesss', 'franklin', ' Programming 1', 0, 0, ''),
(31, 'ttt ttt t.', 'ttt', 'ttt', 'tttt', 'Selso_22EDFPte', 'Edison', ' Programming 2', 0, 0, ''),
(32, 'ttt ttt t.', 'ttt', 'ttt', 'tttt', 'Selso_22EDFPte', 'Edison', ' Programming 2', 0, 0, ''),
(33, 'ttt ttt t.', 'ttt', 'ttt', 'tttt', 'Selso_22EDFPte', 'Edison', ' Programming 1', 0, 0, ''),
(34, 'lauzon elsie b.', 'elsie', 'lauzon', 'brusesooo', 'Test123', '4A', ' Programming 2', 0, 0, ''),
(35, 'lauzon elsie b.', 'elsie', 'lauzon', 'brusesooo', 'Test123', '4A', ' Programming 1', 0, 0, ''),
(36, 'lauzon elsie b.', 'elsie', 'lauzon', 'brusesooo', 'Test123', '4A', ' Programming 3', 0, 0, ''),
(37, 'Ambot  jona mae c.', 'jona mae', 'Ambot ', 'cinco', 'cinco123', '4A', ' Programming 2', 0, 0, ''),
(38, 'Ambot  jona mae c.', 'jona mae', 'Ambot ', 'cinco', 'cinco123', '4A', ' Programming 1', 0, 0, ''),
(39, 'Ambot  jona mae c.', 'jona mae', 'Ambot ', 'cinco', 'cinco123', '4A', ' Programming 3', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_subject`
--
ALTER TABLE `admin_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_teacher_subject`
--
ALTER TABLE `admin_teacher_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partial_score`
--
ALTER TABLE `partial_score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_user`
--
ALTER TABLE `students_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_subject`
--
ALTER TABLE `admin_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin_teacher_subject`
--
ALTER TABLE `admin_teacher_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `partial_score`
--
ALTER TABLE `partial_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `students_user`
--
ALTER TABLE `students_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
