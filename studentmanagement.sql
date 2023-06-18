-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 02:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `Id` int(100) NOT NULL,
  `firstName` varchar(110) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `password` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`Id`, `firstName`, `lastName`, `emailAddress`, `password`) VALUES
(1, 'Ritwik', '', 'accountant@gmail.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE `addbook` (
  `Id` int(50) NOT NULL,
  `st_img` varchar(400) NOT NULL,
  `name1` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `code` int(100) NOT NULL,
  `date` date NOT NULL,
  `price` varchar(200) NOT NULL,
  `quantity` int(100) NOT NULL,
  `avail` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`Id`, `st_img`, `name1`, `author`, `code`, `date`, `price`, `quantity`, `avail`) VALUES
(18, 'eimg/x300.jpg', ' Pride and Premeditation ', 'Tirzah Price', 838670, '2022-09-22', '100', 100, 100),
(20, 'eimg/81isnkToJUL.jpg', ' I Am Not Your Perfect Mexican Daughter ', 'Erika L.', 8386703, '2022-09-22', '100', 100, 100),
(21, 'eimg/x300 (1).jpg', 'Thirteen Doorways, Wolves Behind Them', 'Erika L.', 83867022, '2022-09-22', '100', 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(30) NOT NULL,
  `course` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `level` varchar(150) NOT NULL,
  `total_amount` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`, `description`, `level`, `total_amount`, `date_created`) VALUES
(3, 'COLLEGE SEMISTER FEES', '', '1', 36000, '2022-09-22 21:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Id` int(20) NOT NULL,
  `img` varchar(400) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` datetime(6) NOT NULL,
  `details` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(30) NOT NULL,
  `course_id` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `course_id`, `description`, `amount`) VALUES
(7, 3, 'SEMISTER', 36000);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Id` int(11) NOT NULL,
  `img` varchar(400) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Id`, `img`, `name`, `subject`, `date`) VALUES
(11, 'placement/group-diverse-young-students-standing-together-classroom-156212396.jpg', 'Ritwik Paul', '2023-04-09', '2023-04-08 18:30:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `Id` int(50) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `emailAddress` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`Id`, `firstName`, `lastName`, `emailAddress`, `password`) VALUES
(1, 'Ritwik', 'Paul', 'librarian@gmail.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `Id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `details` varchar(300) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`Id`, `subject`, `details`, `date`) VALUES
(32, 'HOLIDAY', 'Let this Durga Puja holidays be your best of all with fun and excitement all around. I wish you a happy holiday students.â€', '2022-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `notice1`
--

CREATE TABLE `notice1` (
  `Id` int(54) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `details` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notice1`
--

INSERT INTO `notice1` (`Id`, `subject`, `details`, `date`) VALUES
(5, 'WELCOME TO OUR TECHNO INDIA GROUP', '', '2022-09-01'),
(6, ' Registration Open For 2023', '', '2023-04-03'),
(7, ' Registration Open For 2023', '', '2023-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(30) NOT NULL,
  `ef_id` int(30) NOT NULL,
  `amount` float NOT NULL,
  `remarks` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `ef_id`, `amount`, `remarks`, `date_created`) VALUES
(7, 5, 36000, 'SBI DEBIT CARD', '2022-09-22 21:39:12'),
(8, 6, 36000, 'SBI CARD', '2022-09-22 21:39:38'),
(9, 7, 10000, 'Good', '2023-04-03 17:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `Id` int(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `firstName` varchar(400) NOT NULL,
  `admissionNumber` varchar(400) NOT NULL,
  `session` varchar(400) NOT NULL,
  `company` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`Id`, `img`, `firstName`, `admissionNumber`, `session`, `company`) VALUES
(37, 'img2/gettyimages-1272815911-612x612.jpg', 'Abdul Kalam', '24400119042', '2019-2022', 'Amazon'),
(39, 'img2/istockphoto-1139495117-612x612.jpg', 'Akash Sarkar', '24400119017', '2019-2022', 'Amazon');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` varchar(200) NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sbook`
--

CREATE TABLE `sbook` (
  `Id` int(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `admissionNumber` varchar(100) NOT NULL,
  `password` varchar(140) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `classId` varchar(100) NOT NULL,
  `book` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `book1` varchar(100) NOT NULL,
  `code1` varchar(100) NOT NULL,
  `book2` varchar(100) NOT NULL,
  `code2` varchar(100) NOT NULL,
  `idate` varchar(100) NOT NULL,
  `ldate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sbook`
--

INSERT INTO `sbook` (`Id`, `firstName`, `lastName`, `emailAddress`, `admissionNumber`, `password`, `mobile`, `classId`, `book`, `code`, `book1`, `code1`, `book2`, `code2`, `idate`, `ldate`) VALUES
(17, 'RAm', 'Ghosh', '  student01@gmail.com', '24400119042', '12345678', '987456321', '12', ' I Am Not Your Perfect Mexican Daughter ', '838670', '', '', '', '', '03/04/2023', '07/03/2023'),
(18, 'Akash', 'Sarkar', '  akash@gmail.com', '24400119017', '12345678', '987456321', '12', ' Pride and Premeditation ', '838670', '', '', '', '', '22/3/2023', '1/4/2023');

-- --------------------------------------------------------

--
-- Table structure for table `student_ef_list`
--

CREATE TABLE `student_ef_list` (
  `id` int(30) NOT NULL,
  `student_id` int(30) NOT NULL,
  `ef_no` varchar(200) NOT NULL,
  `course_id` int(30) NOT NULL,
  `total_fee` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_ef_list`
--

INSERT INTO `student_ef_list` (`id`, `student_id`, `ef_no`, `course_id`, `total_fee`, `date_created`) VALUES
(5, 72, '1', 3, 36000, '2022-09-22 21:38:15'),
(6, 73, '2', 3, 36000, '2022-09-22 21:38:30'),
(7, 79, '412325', 3, 36000, '2023-04-03 17:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Id` int(100) NOT NULL,
  `code` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Id`, `code`, `subject`) VALUES
(4, 'ECSL208B', 'Electronics & Communication Engineering '),
(5, 'EALP127B ', 'Bachelors in Architecture'),
(6, 'CSL1021', 'Mechanical Engineering'),
(7, 'SEL7021', 'Economics ');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'College Student Management System', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table48`
--

CREATE TABLE `table48` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table48`
--

INSERT INTO `table48` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(1, 'Sample 101', 'This is a sample schedule only.', '2022-01-10 10:30:00', '2022-01-11 18:00:00'),
(2, 'Sample 102', 'Sample Description 102', '2022-01-08 09:30:00', '2022-01-08 11:30:00'),
(4, 'Sample 102', 'Sample Description', '2022-01-12 14:00:00', '2022-01-12 17:00:00'),
(6, 'hyu', 'hh', '2023-01-08 21:52:00', '2023-01-08 21:52:00'),
(8, 'jgh', 'hjghjg', '2023-01-09 11:56:00', '2023-01-10 11:56:00'),
(11, 'Puja', '3-4', '2023-04-03 17:15:00', '2023-04-04 17:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `Id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`Id`, `firstName`, `lastName`, `emailAddress`, `password`) VALUES
(1, 'Admin', 'Das', 'admin@mail.com', '0'),
(2, 'Ritwik', 'Paul', 'ritwikpaul01@gmail.com', '1234'),
(24, 'Ritwik12', '567567', 'technoindia@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tblattendance`
--

CREATE TABLE `tblattendance` (
  `Id` int(10) NOT NULL,
  `admissionNo` varchar(255) NOT NULL,
  `classId` varchar(10) NOT NULL,
  `classArmId` varchar(10) NOT NULL,
  `sessionTermId` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `dateTimeTaken` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblattendance`
--

INSERT INTO `tblattendance` (`Id`, `admissionNo`, `classId`, `classArmId`, `sessionTermId`, `status`, `dateTimeTaken`) VALUES
(162, 'ASDFLKJ', '1', '2', '1', '1', '2020-11-01'),
(163, 'HSKSDD', '1', '2', '1', '1', '2020-11-01'),
(164, 'JSLDKJ', '1', '2', '1', '1', '2020-11-01'),
(172, 'HSKDS9EE', '1', '4', '1', '1', '2020-11-01'),
(171, 'JKADA', '1', '4', '1', '0', '2020-11-01'),
(170, 'JSFSKDJ', '1', '4', '1', '1', '2020-11-01'),
(173, 'ASDFLKJ', '1', '2', '1', '1', '2020-11-19'),
(174, 'HSKSDD', '1', '2', '1', '1', '2020-11-19'),
(175, 'JSLDKJ', '1', '2', '1', '1', '2020-11-19'),
(176, 'JSFSKDJ', '1', '4', '1', '0', '2021-07-15'),
(177, 'JKADA', '1', '4', '1', '0', '2021-07-15'),
(178, 'HSKDS9EE', '1', '4', '1', '0', '2021-07-15'),
(179, 'ASDFLKJ', '1', '2', '1', '0', '2021-09-27'),
(180, 'HSKSDD', '1', '2', '1', '1', '2021-09-27'),
(181, 'JSLDKJ', '1', '2', '1', '1', '2021-09-27'),
(182, 'ASDFLKJ', '1', '2', '1', '0', '2021-10-06'),
(183, 'HSKSDD', '1', '2', '1', '0', '2021-10-06'),
(184, 'JSLDKJ', '1', '2', '1', '1', '2021-10-06'),
(185, 'ASDFLKJ', '1', '2', '1', '0', '2021-10-07'),
(186, 'HSKSDD', '1', '2', '1', '0', '2021-10-07'),
(187, 'JSLDKJ', '1', '2', '1', '0', '2021-10-07'),
(188, 'AMS110', '4', '6', '1', '1', '2021-10-07'),
(189, 'AMS133', '4', '6', '1', '1', '2021-10-07'),
(190, 'AMS135', '4', '6', '1', '1', '2021-10-07'),
(191, 'AMS144', '4', '6', '1', '1', '2021-10-07'),
(192, 'AMS148', '4', '6', '1', '0', '2021-10-07'),
(193, 'AMS151', '4', '6', '1', '0', '2021-10-07'),
(194, 'AMS159', '4', '6', '1', '0', '2021-10-07'),
(195, 'AMS161', '4', '6', '1', '0', '2021-10-07'),
(196, 'AMS005', '1', '2', '1', '1', '2022-08-08'),
(197, 'AMS007', '1', '2', '1', '1', '2022-08-08'),
(198, 'AMS011', '1', '2', '1', '1', '2022-08-08'),
(199, 'uiyiy', '5', '7', '3', '1', '2022-08-08'),
(200, 'AMS110', '4', '6', '3', '1', '2022-08-11'),
(201, 'AMS133', '4', '6', '3', '1', '2022-08-11'),
(202, 'AMS135', '4', '6', '3', '1', '2022-08-11'),
(203, 'AMS144', '4', '6', '3', '1', '2022-08-11'),
(204, 'AMS148', '4', '6', '3', '0', '2022-08-11'),
(205, 'AMS151', '4', '6', '3', '0', '2022-08-11'),
(206, 'AMS159', '4', '6', '3', '0', '2022-08-11'),
(207, 'AMS161', '4', '6', '3', '0', '2022-08-11'),
(208, 'uiyiy', '5', '7', '3', '0', '2022-08-11'),
(209, 'AMS012', '1', '4', '3', '1', '2022-08-12'),
(210, 'AMS015', '1', '4', '3', '1', '2022-08-12'),
(211, 'AMS017', '1', '4', '3', '1', '2022-08-12'),
(212, '8888', '1', '4', '3', '0', '2022-08-12'),
(213, 'AMS012', '1', '4', '3', '1', '2022-08-19'),
(214, 'AMS015', '1', '4', '3', '1', '2022-08-19'),
(215, 'AMS017', '1', '4', '3', '1', '2022-08-19'),
(216, '412', '9', '30', '7', '1', '2022-09-17'),
(217, '412', '9', '30', '7', '1', '2022-09-19'),
(218, '76867', '9', '30', '', '0', '2022-09-20'),
(219, '888', '9', '30', '', '0', '2022-09-20'),
(220, '55551', '9', '30', '', '0', '2022-09-20'),
(221, '24400119042', '12', '64', '', '1', '2022-09-22'),
(222, '24400119043', '12', '64', '', '1', '2022-09-22'),
(223, '24400119042', '12', '64', '', '1', '2022-11-23'),
(224, '24400119043', '12', '64', '', '0', '2022-11-23'),
(225, '24400119042', '12', '64', '8', '1', '2023-04-03'),
(226, '24400119017', '12', '64', '8', '1', '2023-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `Id` int(10) NOT NULL,
  `className` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`Id`, `className`) VALUES
(12, 'B.Tech in Computer Sc. & Engineering'),
(13, 'B.Tech in Civil Engineering'),
(14, 'B.Tech in Electrical & Electronics Engineering'),
(15, 'Bachelor in Hotel Management & Catering Technology'),
(16, 'B.Tech in Mechanical Engineering'),
(17, 'Bachelor of Pharmacy	'),
(18, 'Bhm');

-- --------------------------------------------------------

--
-- Table structure for table `tblclassarms`
--

CREATE TABLE `tblclassarms` (
  `Id` int(10) NOT NULL,
  `classId` varchar(10) NOT NULL,
  `classArmName` varchar(255) NOT NULL,
  `isAssigned` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblclassarms`
--

INSERT INTO `tblclassarms` (`Id`, `classId`, `classArmName`, `isAssigned`) VALUES
(66, '12', '3rd year', 0),
(67, '12', '4th year', 0),
(65, '12', '2nd Year', 1),
(64, '12', '1st Year', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblclassteacher`
--

CREATE TABLE `tblclassteacher` (
  `Id` int(10) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` int(10) NOT NULL,
  `phoneNo` varchar(50) NOT NULL,
  `classId` varchar(10) NOT NULL,
  `classArmId` varchar(10) NOT NULL,
  `dateCreated` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblclassteacher`
--

INSERT INTO `tblclassteacher` (`Id`, `firstName`, `lastName`, `emailAddress`, `password`, `phoneNo`, `classId`, `classArmId`, `dateCreated`) VALUES
(24, ' Aditya ', 'Baisnab', 'teacher01@gmail.com', 0, '9874563212', '12', '64', '2022-09-21'),
(25, 'Deba', 'Archarya', 'teacher02@gmail.com', 0, '987456321', '12', '65', '2022-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `tblsessionterm`
--

CREATE TABLE `tblsessionterm` (
  `Id` int(10) NOT NULL,
  `sessionName` varchar(50) NOT NULL,
  `termId` varchar(50) NOT NULL,
  `isActive` varchar(10) NOT NULL,
  `dateCreated` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblsessionterm`
--

INSERT INTO `tblsessionterm` (`Id`, `sessionName`, `termId`, `isActive`, `dateCreated`) VALUES
(9, '2020-2024', '1', '0', '2022-09-20'),
(8, '2019-2022', '1', '1', '2022-09-20'),
(10, '2021-2025', '1', '0', '2022-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `Id` int(10) NOT NULL,
  `st_img` varchar(400) NOT NULL,
  `fee` varchar(400) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `otherName` varchar(255) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `admissionNumber` varchar(255) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` int(12) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` date DEFAULT NULL,
  `session` varchar(30) NOT NULL,
  `semister` varchar(20) NOT NULL,
  `library` varchar(30) NOT NULL,
  `cgpa` int(20) NOT NULL,
  `fees` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `police` varchar(30) NOT NULL,
  `exam` int(30) NOT NULL,
  `ctype` varchar(30) NOT NULL,
  `notice` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `classId` varchar(10) NOT NULL,
  `classArmId` varchar(10) NOT NULL,
  `dateCreated` varchar(50) NOT NULL,
  `first` varchar(200) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `number2` int(200) NOT NULL,
  `remark2` varchar(200) NOT NULL,
  `number3` int(200) NOT NULL,
  `remark3` varchar(200) NOT NULL,
  `number4` int(200) NOT NULL,
  `remark4` varchar(200) NOT NULL,
  `number5` int(200) NOT NULL,
  `remark5` varchar(200) NOT NULL,
  `number6` int(200) NOT NULL,
  `remark6` varchar(200) NOT NULL,
  `number7` int(200) NOT NULL,
  `remark7` varchar(200) NOT NULL,
  `number8` int(200) NOT NULL,
  `remark8` varchar(200) NOT NULL,
  `average` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`Id`, `st_img`, `fee`, `firstName`, `lastName`, `otherName`, `emailAddress`, `admissionNumber`, `fname`, `mname`, `gender`, `mobile`, `religion`, `address`, `dob`, `session`, `semister`, `library`, `cgpa`, `fees`, `state`, `police`, `exam`, `ctype`, `notice`, `password`, `classId`, `classArmId`, `dateCreated`, `first`, `remark`, `number2`, `remark2`, `number3`, `remark3`, `number4`, `remark4`, `number5`, `remark5`, `number6`, `remark6`, `number7`, `remark7`, `number8`, `remark8`, `average`) VALUES
(72, 'img/gettyimages-1272815911-612x612.jpg', 'img1/School-Fee-Receipt-Sample.jpg', 'RAm', 'Ghosh', 'Abdul', '\n  student01@gmail.com', '24400119042', 'Jainulabiddin Marakayar', 'Ashiamma Jainulabiddin', 'Male', 987456321, 'Muslim', '2022-09-18', '2023-04-03', '2019-2022', '1st', '987645CC', 85, 'NO', 'West Bengal', 'Dumdum', 56, 'Regular', 'None', '12345678', '12', '64', '2022-09-22', '8.1', 'GOOD', 8, 'WELL DONE', 8, 'WELL DONE', 8, 'GOOD', 8, 'WELL DONE', 8, 'GOOD', 8, 'WELL DONE', 8, 'GOOD', '8.1'),
(79, '', 'img/gettyimages-1272815911-612x612.jpg', 'Akash', 'Sarkar', '', '\r\n \r\n akash@gmail.com', '24400119017', 'ABC', 'ABC', 'MALE', 987456321, 'hindu', '2023-04-07', '0000-00-00', '2019-2022', '!st', '54551', 789, 'NO', 'West Bengal', 'Ashoknager', 85, 'Regular', 'good', '12345678', '12', '64', '2023-04-03', '33', 'GOOD', 33, 'WELL DONE', 33, 'GOOD', 33, 'GOOD', 33, 'GOOD', 33, 'GOOD', 33, 'WELL DONE', 33, 'GOOD', '33');

-- --------------------------------------------------------

--
-- Table structure for table `tblterm`
--

CREATE TABLE `tblterm` (
  `Id` int(10) NOT NULL,
  `termName` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblterm`
--

INSERT INTO `tblterm` (`Id`, `termName`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Third');

-- --------------------------------------------------------

--
-- Table structure for table `tbook`
--

CREATE TABLE `tbook` (
  `Id` int(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phoneNo` int(12) NOT NULL,
  `classId` varchar(100) NOT NULL,
  `book` varchar(100) NOT NULL,
  `code` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbook`
--

INSERT INTO `tbook` (`Id`, `firstName`, `lastName`, `emailAddress`, `password`, `phoneNo`, `classId`, `book`, `code`) VALUES
(4, 'Ryan', 'McQuie', 'ryan@mail.com', '0', 2147483647, '3', 'Ritwik Paul', 78575),
(5, 'Demola', 'Ade', 'Kumolu@gmail.com', '0', 2147483647, '1', 't535', 35345);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 3 COMMENT '1=Admin,2=Staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `addbook`
--
ALTER TABLE `addbook`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `notice1`
--
ALTER TABLE `notice1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placement`
--
ALTER TABLE `placement`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `sbook`
--
ALTER TABLE `sbook`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student_ef_list`
--
ALTER TABLE `student_ef_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table48`
--
ALTER TABLE `table48`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblattendance`
--
ALTER TABLE `tblattendance`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblclassarms`
--
ALTER TABLE `tblclassarms`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblclassteacher`
--
ALTER TABLE `tblclassteacher`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblsessionterm`
--
ALTER TABLE `tblsessionterm`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblterm`
--
ALTER TABLE `tblterm`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbook`
--
ALTER TABLE `tbook`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant`
--
ALTER TABLE `accountant`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addbook`
--
ALTER TABLE `addbook`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `notice1`
--
ALTER TABLE `notice1`
  MODIFY `Id` int(54) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `placement`
--
ALTER TABLE `placement`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sbook`
--
ALTER TABLE `sbook`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student_ef_list`
--
ALTER TABLE `student_ef_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table48`
--
ALTER TABLE `table48`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblattendance`
--
ALTER TABLE `tblattendance`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblclassarms`
--
ALTER TABLE `tblclassarms`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tblclassteacher`
--
ALTER TABLE `tblclassteacher`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblsessionterm`
--
ALTER TABLE `tblsessionterm`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tblterm`
--
ALTER TABLE `tblterm`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbook`
--
ALTER TABLE `tbook`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
