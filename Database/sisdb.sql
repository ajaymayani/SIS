-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 08:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `aDate` date NOT NULL,
  `ap` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `studentId`, `aDate`, `ap`) VALUES
(7, 12, '2022-01-19', 'A'),
(9, 13, '2022-01-19', 'P'),
(11, 22, '2022-01-21', 'P'),
(12, 12, '2022-01-22', 'P'),
(13, 13, '2022-01-22', 'P'),
(14, 12, '2022-01-23', 'P'),
(15, 12, '2022-02-01', 'A'),
(16, 12, '2022-02-03', 'P'),
(17, 20, '2022-02-03', 'P'),
(18, 12, '2022-02-04', 'A'),
(19, 28, '2022-02-04', 'A'),
(20, 18, '2022-02-04', 'P'),
(21, 15, '2022-02-04', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `bca_sem1_result_tbl`
--

CREATE TABLE `bca_sem1_result_tbl` (
  `id` int(11) NOT NULL,
  `BCA101` varchar(5) NOT NULL,
  `BCA102` varchar(5) NOT NULL,
  `BCA103` varchar(5) NOT NULL,
  `BCA104` varchar(5) NOT NULL,
  `BCA105` varchar(5) NOT NULL,
  `BCA106` varchar(5) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `total` varchar(5) NOT NULL,
  `studentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bca_sem1_result_tbl`
--

INSERT INTO `bca_sem1_result_tbl` (`id`, `BCA101`, `BCA102`, `BCA103`, `BCA104`, `BCA105`, `BCA106`, `percentage`, `total`, `studentId`) VALUES
(5, '8', '75', '85', '99', '96', '97', '90.16', '541', 12),
(6, '80', '90', '70', '89', '87', '88', '84', '504', 13);

-- --------------------------------------------------------

--
-- Table structure for table `bca_sem2_result_tbl`
--

CREATE TABLE `bca_sem2_result_tbl` (
  `id` int(11) NOT NULL,
  `BCA201` varchar(5) NOT NULL,
  `BCA202` varchar(5) NOT NULL,
  `BCA203` varchar(5) NOT NULL,
  `BCA204` varchar(5) NOT NULL,
  `BCA205` varchar(5) NOT NULL,
  `BCA206` varchar(5) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `total` varchar(5) NOT NULL,
  `studentId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bca_sem2_result_tbl`
--

INSERT INTO `bca_sem2_result_tbl` (`id`, `BCA201`, `BCA202`, `BCA203`, `BCA204`, `BCA205`, `BCA206`, `percentage`, `total`, `studentId`) VALUES
(1, '23', '45', '54', '45', '33', '66', '44.33', '266', '14'),
(2, '52', '40', '62', '10', '55', '65', '47.33', '284', '15');

-- --------------------------------------------------------

--
-- Table structure for table `bca_sem3_result_tbl`
--

CREATE TABLE `bca_sem3_result_tbl` (
  `id` int(11) NOT NULL,
  `BCA301` varchar(5) NOT NULL,
  `BCA302` varchar(5) NOT NULL,
  `BCA303` varchar(5) NOT NULL,
  `BCA304` varchar(5) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `total` varchar(5) NOT NULL,
  `studentId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bca_sem3_result_tbl`
--

INSERT INTO `bca_sem3_result_tbl` (`id`, `BCA301`, `BCA302`, `BCA303`, `BCA304`, `percentage`, `total`, `studentId`) VALUES
(1, '65', '32', '54', '55', '51.5', '206', '16'),
(3, '70', '87', '70', '65', '73', '292', '17');

-- --------------------------------------------------------

--
-- Table structure for table `bca_sem4_result_tbl`
--

CREATE TABLE `bca_sem4_result_tbl` (
  `id` int(11) NOT NULL,
  `BCA401` varchar(5) NOT NULL,
  `BCA402` varchar(5) NOT NULL,
  `BCA403` varchar(5) NOT NULL,
  `BCA404` varchar(5) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `total` varchar(5) NOT NULL,
  `studentId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bca_sem4_result_tbl`
--

INSERT INTO `bca_sem4_result_tbl` (`id`, `BCA401`, `BCA402`, `BCA403`, `BCA404`, `percentage`, `total`, `studentId`) VALUES
(4, '98', '85', '77', '65', '81.25', '325', '18'),
(5, '99', '85', '66', '50', '75', '300', '19');

-- --------------------------------------------------------

--
-- Table structure for table `bca_sem5_result_tbl`
--

CREATE TABLE `bca_sem5_result_tbl` (
  `id` int(11) NOT NULL,
  `BCA501` varchar(5) NOT NULL,
  `BCA502` varchar(5) NOT NULL,
  `BCA503` varchar(5) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `total` varchar(5) NOT NULL,
  `studentId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bca_sem5_result_tbl`
--

INSERT INTO `bca_sem5_result_tbl` (`id`, `BCA501`, `BCA502`, `BCA503`, `percentage`, `total`, `studentId`) VALUES
(1, '50', '24', '150', '74.66', '224', '20'),
(4, '95', '87', '90', '90.66', '272', '21');

-- --------------------------------------------------------

--
-- Table structure for table `bca_sem6_result_tbl`
--

CREATE TABLE `bca_sem6_result_tbl` (
  `id` int(11) NOT NULL,
  `BCA601` varchar(5) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `total` varchar(5) NOT NULL,
  `studentId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bca_sem6_result_tbl`
--

INSERT INTO `bca_sem6_result_tbl` (`id`, `BCA601`, `percentage`, `total`, `studentId`) VALUES
(3, '98', '98', '98', '22'),
(4, '85', '85', '85', '23');

-- --------------------------------------------------------

--
-- Table structure for table `coursesinfo_tbl`
--

CREATE TABLE `coursesinfo_tbl` (
  `cid` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursesinfo_tbl`
--

INSERT INTO `coursesinfo_tbl` (`cid`, `cname`) VALUES
(1, 'BCA'),
(2, 'MSCIT');

-- --------------------------------------------------------

--
-- Table structure for table `mscit_sem1_result_tbl`
--

CREATE TABLE `mscit_sem1_result_tbl` (
  `id` int(11) NOT NULL,
  `MSCIT101` varchar(5) NOT NULL,
  `MSCIT102` varchar(5) NOT NULL,
  `MSCIT103` varchar(5) NOT NULL,
  `MSCIT104` varchar(5) NOT NULL,
  `MSCIT105` varchar(5) NOT NULL,
  `MSCIT106` varchar(5) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `total` varchar(5) NOT NULL,
  `studentId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mscit_sem1_result_tbl`
--

INSERT INTO `mscit_sem1_result_tbl` (`id`, `MSCIT101`, `MSCIT102`, `MSCIT103`, `MSCIT104`, `MSCIT105`, `MSCIT106`, `percentage`, `total`, `studentId`) VALUES
(3, '97', '85', '78', '96', '80', '87', '87.16', '523', '24'),
(4, '85', '78', '68', '75', '60', '80', '74.33', '446', '25');

-- --------------------------------------------------------

--
-- Table structure for table `mscit_sem2_result_tbl`
--

CREATE TABLE `mscit_sem2_result_tbl` (
  `id` int(11) NOT NULL,
  `MSCIT201` varchar(5) NOT NULL,
  `MSCIT202` varchar(5) NOT NULL,
  `MSCIT203` varchar(5) NOT NULL,
  `MSCIT204` varchar(5) NOT NULL,
  `MSCIT205` varchar(5) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `total` varchar(5) NOT NULL,
  `studentId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mscit_sem2_result_tbl`
--

INSERT INTO `mscit_sem2_result_tbl` (`id`, `MSCIT201`, `MSCIT202`, `MSCIT203`, `MSCIT204`, `MSCIT205`, `percentage`, `total`, `studentId`) VALUES
(3, '98', '74', '55', '68', '98', '78.6', '393', '26'),
(4, '98', '78', '85', '90', '78', '85.8', '429', '27');

-- --------------------------------------------------------

--
-- Table structure for table `mscit_sem3_result_tbl`
--

CREATE TABLE `mscit_sem3_result_tbl` (
  `id` int(11) NOT NULL,
  `MSCIT301` varchar(5) NOT NULL,
  `MSCIT302` varchar(5) NOT NULL,
  `MSCIT303` varchar(5) NOT NULL,
  `MSCIT304` varchar(5) NOT NULL,
  `MSCIT305` varchar(5) NOT NULL,
  `MSCIT306` varchar(5) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `total` varchar(5) NOT NULL,
  `studentId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mscit_sem3_result_tbl`
--

INSERT INTO `mscit_sem3_result_tbl` (`id`, `MSCIT301`, `MSCIT302`, `MSCIT303`, `MSCIT304`, `MSCIT305`, `MSCIT306`, `percentage`, `total`, `studentId`) VALUES
(3, '98', '95', '96', '87', '88', '99', '93.83', '563', '28'),
(4, '23', '65', '98', '24', '88', '50', '66.83', '401', '29');

-- --------------------------------------------------------

--
-- Table structure for table `mscit_sem4_result_tbl`
--

CREATE TABLE `mscit_sem4_result_tbl` (
  `id` int(11) NOT NULL,
  `MSCIT401` varchar(5) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `total` varchar(5) NOT NULL,
  `studentId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mscit_sem4_result_tbl`
--

INSERT INTO `mscit_sem4_result_tbl` (`id`, `MSCIT401`, `percentage`, `total`, `studentId`) VALUES
(1, '98', '98', '98', '30'),
(2, '99', '99', '99', '31');

-- --------------------------------------------------------

--
-- Table structure for table `studentsinfo_tbl`
--

CREATE TABLE `studentsinfo_tbl` (
  `studentId` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(15) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `dob` text NOT NULL,
  `emailId` text NOT NULL,
  `mobileno` text NOT NULL,
  `gender` varchar(7) NOT NULL,
  `religion` text NOT NULL,
  `aadharnumber` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL,
  `course` varchar(10) NOT NULL,
  `semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentsinfo_tbl`
--

INSERT INTO `studentsinfo_tbl` (`studentId`, `firstname`, `middlename`, `lastname`, `dob`, `emailId`, `mobileno`, `gender`, `religion`, `aadharnumber`, `address`, `password`, `course`, `semester`) VALUES
(12, 'Priya', 'Dipakbhai', 'Sorathiya', '2003-10-22', 'piyusorathiya123@gmail.com', '8527413698', 'Female', 'Hindu', '415263968574', 'Gadhpur', '123', '1', 1),
(13, 'Jensi', 'AshokBhai', 'Kapadiya', '2003-10-02', 'jensi123@gmail.com', '1236547890', 'Female', 'Hindi', '748596632541', 'Pasodra', '123', '1', 1),
(14, 'Prit', 'Vallabhbhai', 'Gondaliya', '2001/02/10', 'print123@gmail.com', '1236549870', 'Male', 'Hindu', '74125896320', 'Matru sakti soceity', '123', '1', 2),
(15, 'Hardik', 'Rambhai', 'Kotadiya', '2000/12/12', 'hardik123@gmail.com', '1236549870', 'Male', 'Hindu', '74125896320', 'Narayan nagar soceity', '123', '1', 2),
(16, 'Arshit', 'Kantibhai', 'Jasoliya', '2000-06-07', 'arshit123@gmail.com', '7410258963', 'Male', 'Hindu', '741852369741', 'Motavarachha', '123', '1', 3),
(17, 'Ajay', 'Bhikhabhai', 'Mayani', '2001/01/05', 'ajay123@gmail.com', '97125521585', 'Male', 'Hindu', '741258963012', 'Velanja', '123', '1', 3),
(18, 'Astha', 'Sureshbhai', 'Monapara', '2001-07-13', 'astha123@gmail.com', '7410256398', 'Female', 'Hindu', '25863479102', 'Hirabag', '123', '1', 4),
(19, 'Bansi', 'Rameshbhai', 'Savaj', '2002/10/28', 'bansi123@gmail.com', '0125478963', 'Female', 'Hindu', '154789632012', 'Amreli', '123', '1', 4),
(20, 'Abhay1', 'Manubhai', 'Mayani', '2000/08/12', 'abhay123@gmail.com', '1236549870', 'Male', 'Hindu', '74125896320', 'Gadhpur', '123', '1', 5),
(21, 'Vasu', 'Sureshbhai', 'Patel', '2000/10/20', 'vasu123@gmail.com', '1236549870', 'Male', 'Hindu', '74125896320', 'Valsad', '123', '1', 5),
(22, 'Vivek', 'Yogeshbhai', 'Galchar', '2000/05/15', 'vivek123@gmail.com', '1236549870', 'Male', 'Hindu', '74125896320', 'Rajkot', '123', '1', 6),
(23, 'Deep', 'Manojkumar', 'Sindhav', '2000/01/11', 'deep123@gmail.com', '1236549870', 'Male', 'Hindu', '74125896320', 'Vadodara', '123', '1', 6),
(24, 'Aastha', 'Mehulbhai', 'Oza', '2000-02-04', 'aastha123@gmail.com', '1236549870', 'Female', 'Hindu', '74125896320', 'Vadodara', '123', '2', 1),
(25, 'Charmy', 'Tarunkumar', 'Patel', '1997/11/14', 'charmi123@gmail.com', '1236549870', 'Female', 'Hindu', '74125896320', 'Vadodara', '123', '2', 1),
(26, 'Rinki', 'Sureshbhai', 'Shivani', '2000/07/05', 'aastha123@gmail.com', '1236549870', 'Female', 'Hindu', '74125896320', 'Vadodara', '123', '2', 2),
(27, 'Surbhee', 'Narottambhai', 'Kunpara', '', 'surbhee123@gmail.com', '1236549870', 'Female', 'Hindu', '74125896320', 'Vadodara', '123', '2', 2),
(28, 'Bhargav', 'Rameshbhai', 'Upara', '2000/07/05', 'aastha123@gmail.com', '1236549870', 'Female', 'Hindu', '74125896320', 'Vadodara', '123', '2', 3),
(29, 'Somendra', 'Swapan', 'Sarkar', '2000/07/05', 'aastha123@gmail.com', '1236549870', 'Female', 'Hindu', '74125896320', 'Vadodara', '123', '2', 3),
(30, 'Mehul', 'Anupkumar', 'Agrawal', '2000/07/05', 'aastha123@gmail.com', '1236549870', 'Female', 'Hindu', '74125896320', 'Vadodara', '123', '2', 4),
(31, 'Darshan', 'Pranavbhai', 'Bhatt', '2000/07/05', 'aastha123@gmail.com', '1236549870', 'Female', 'Hindu', '74125896320', 'Vadodara', '123', '2', 4);

-- --------------------------------------------------------

--
-- Table structure for table `subjects_tbl`
--

CREATE TABLE `subjects_tbl` (
  `subjectId` int(11) NOT NULL,
  `subjectcode` varchar(20) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `subjectcredit` int(3) NOT NULL,
  `courseId` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects_tbl`
--

INSERT INTO `subjects_tbl` (`subjectId`, `subjectcode`, `subjectname`, `subjectcredit`, `courseId`, `semester`) VALUES
(1, 'BCA101', 'Computer Organization', 2, 1, 1),
(2, 'BCA102', 'Operating Systems', 3, 1, 1),
(3, 'BCA103', 'Introduction to Programming', 3, 1, 1),
(4, 'BCA104', 'HTML Lab', 2, 1, 1),
(5, 'BCA105', 'Mathematical Foundations-I', 2, 1, 1),
(6, 'BCA106', 'Communication Skills', 2, 1, 1),
(7, 'BCA201', 'Object Oriented Programming', 3, 1, 2),
(8, 'BCA202', 'Data Structures and Algorithms', 3, 1, 2),
(9, 'BCA203', 'Database Management Systems', 2, 1, 2),
(10, 'BCA204', 'SQL', 2, 1, 2),
(11, 'BCA205', 'Mathematical Foundation-II', 2, 1, 2),
(12, 'BCA206', 'Environmental Science', 2, 1, 2),
(13, 'BCA301', 'Shell Programming', 2, 1, 3),
(14, 'BCA302', 'Database Application and Programming', 2, 1, 3),
(15, 'BCA303', 'Computer Networks-I', 3, 1, 3),
(16, 'BCA304', 'Data Exploration', 3, 1, 3),
(17, 'BCA401', 'Web Technology', 2, 1, 4),
(18, 'BCA402', 'Software Engineering-I', 3, 1, 4),
(19, 'BCA403', 'Computer Networks-II', 3, 1, 4),
(20, 'BCA404', 'Business Modeling Project', 1, 1, 4),
(22, 'BCA501', 'Software Engineering-II', 4, 1, 5),
(23, 'BCA502', 'XML and JSON Technology', 3, 1, 5),
(24, 'BCA503', 'Mini Project', 2, 1, 5),
(25, 'BCA601', 'Major Project ', 24, 1, 6),
(27, 'MSCIT101', 'Information Systems & Technologies', 3, 2, 1),
(28, 'MSCIT102', 'Software Engineering ', 3, 2, 1),
(29, 'MSCIT103', 'Digital Communications & Networking', 3, 2, 1),
(30, 'MSCIT104', 'Web Technologies', 3, 2, 1),
(31, 'MSCIT105', 'Programming in Java', 3, 2, 1),
(32, 'MSCIT106', 'Finance and Accounting', 3, 2, 1),
(33, 'MSCIT201', 'Networks and Switching', 3, 2, 2),
(34, 'MSCIT202', 'Platform Technologies', 2, 2, 2),
(35, 'MSCIT203', 'SMAC (Social Mobile Analytics & Cloud)', 4, 2, 2),
(36, 'MSCIT204', 'Introduction to data analysis', 3, 2, 2),
(37, 'MSCIT205', 'E-Commerce', 3, 2, 2),
(38, 'MSCIT301', 'User Experience Design', 3, 2, 3),
(39, 'MSCIT302', 'Cyber Security', 3, 2, 3),
(40, 'MSCIT303', 'Big Data Systems', 3, 2, 3),
(41, 'MSCIT304', 'Internet of Things', 3, 2, 3),
(42, 'MSCIT305', 'IT Project Management', 2, 2, 3),
(43, 'MSCIT306', 'Advanced Java', 3, 2, 3),
(44, 'MSCIT401', 'Industrial Project/Major Project (Live)', 25, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$fCOiMky4n5hCJx3cpsG20Od4wHtlkCLKmO6VLobJNRIg9ooHTkgjK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bca_sem1_result_tbl`
--
ALTER TABLE `bca_sem1_result_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bca_sem2_result_tbl`
--
ALTER TABLE `bca_sem2_result_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bca_sem3_result_tbl`
--
ALTER TABLE `bca_sem3_result_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bca_sem4_result_tbl`
--
ALTER TABLE `bca_sem4_result_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bca_sem5_result_tbl`
--
ALTER TABLE `bca_sem5_result_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bca_sem6_result_tbl`
--
ALTER TABLE `bca_sem6_result_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursesinfo_tbl`
--
ALTER TABLE `coursesinfo_tbl`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `mscit_sem1_result_tbl`
--
ALTER TABLE `mscit_sem1_result_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mscit_sem2_result_tbl`
--
ALTER TABLE `mscit_sem2_result_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mscit_sem3_result_tbl`
--
ALTER TABLE `mscit_sem3_result_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mscit_sem4_result_tbl`
--
ALTER TABLE `mscit_sem4_result_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentsinfo_tbl`
--
ALTER TABLE `studentsinfo_tbl`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `subjects_tbl`
--
ALTER TABLE `subjects_tbl`
  ADD PRIMARY KEY (`subjectId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bca_sem1_result_tbl`
--
ALTER TABLE `bca_sem1_result_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bca_sem2_result_tbl`
--
ALTER TABLE `bca_sem2_result_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bca_sem3_result_tbl`
--
ALTER TABLE `bca_sem3_result_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bca_sem4_result_tbl`
--
ALTER TABLE `bca_sem4_result_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bca_sem5_result_tbl`
--
ALTER TABLE `bca_sem5_result_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bca_sem6_result_tbl`
--
ALTER TABLE `bca_sem6_result_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coursesinfo_tbl`
--
ALTER TABLE `coursesinfo_tbl`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mscit_sem1_result_tbl`
--
ALTER TABLE `mscit_sem1_result_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mscit_sem2_result_tbl`
--
ALTER TABLE `mscit_sem2_result_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mscit_sem3_result_tbl`
--
ALTER TABLE `mscit_sem3_result_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mscit_sem4_result_tbl`
--
ALTER TABLE `mscit_sem4_result_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentsinfo_tbl`
--
ALTER TABLE `studentsinfo_tbl`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subjects_tbl`
--
ALTER TABLE `subjects_tbl`
  MODIFY `subjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
