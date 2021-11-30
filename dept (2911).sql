-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2021 at 07:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dept`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accounts_id` int(11) NOT NULL,
  `accounts_detail` text NOT NULL,
  `accounts_type` text NOT NULL,
  `accounts_amount` int(11) NOT NULL,
  `accounts_voucher` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accounts_id`, `accounts_detail`, `accounts_type`, `accounts_amount`, `accounts_voucher`) VALUES
(24, 'jabibskf', 'Deposit', 1111, '15656'),
(25, 'jabibskf', 'Deposit', 1234555, '1'),
(26, 'dddd', 'Deposit', 2165, '1'),
(27, 'dddd', 'Deposit', 2165, '989898'),
(28, 'dddd', 'Deposit', 0, '111');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'aktaruzzaman', '1234'),
(2, 'ibrahim', '1234'),
(3, 'asad', '1234'),
(4, 'shahidul', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `biolab_insert`
--

CREATE TABLE `biolab_insert` (
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `item_num` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biolab_insert`
--

INSERT INTO `biolab_insert` (`item_id`, `item_name`, `item_num`) VALUES
(20, 'GPU', '1'),
(21, 'Personal Computer', '1');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `co_id` int(11) NOT NULL,
  `course_code` text NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `year` text NOT NULL,
  `credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`co_id`, `course_code`, `name`, `type`, `year`, `credit`) VALUES
(1, 'CSE 1101', 'Introduction to Computer System', 'Theory', '1-1', 3),
(2, 'CSE 1102', 'Introduction to Computer Systems Lab', 'Lab', '1-1', 1),
(3, 'CSE 1103', 'Structured Programming Language', 'Theory', '1-1', 3),
(4, 'CSE 1104', 'Structured Programming Language Lab', 'Lab', '1-1', 1),
(5, 'EEE 1105', 'Fundamental of Electrical Engineering', 'Theory', '1-1', 3),
(6, 'EEE 1106', 'Fundamental of Electrical Engineering Lab', 'Lab', '1-1', 1),
(7, 'HUM 1107', 'Communicative English', 'Theory', '1-1', 1),
(8, 'HUM 1108', 'Communicative English Lab', 'Lab', '1-1', 1),
(9, 'MATH 1109', 'Algebra and Trigonometry', 'Lab', '1-1', 3),
(10, 'NCC', 'Islamic studies/Bangladesh Studies', 'Optional', '1-1', 0),
(11, 'CSE 1201', 'Data Structure', 'Theory', '1-2', 2),
(12, 'CSE 1202', 'Data Structure lab', 'Lab', '1-2', 1),
(13, 'EEE 1203', 'Electronics Devices & Circuits', 'Theory', '1-2', 3),
(14, 'CSE 1204', 'Electronics Devices & Circuits Lab', 'Lab', '1-2', 1),
(15, 'CSE 1205', 'Object Oriented Programming', 'Theory', '1-2', 3),
(16, 'CSE 1206', 'Object Oriented Programming Lab', 'Lab', '1-2', 1),
(17, 'PHY 1207', 'Physics', 'Theory', '1-2', 3),
(18, 'PHY 1208', 'Physics Lab', 'Lab', '1-2', 1),
(19, 'MATH 120', 'Calculus and Differential Equations', 'Theory', '1-2', 3),
(20, 'CSE 1210', 'Viva Voce', 'Viva', '1-2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `id` int(11) NOT NULL,
  `hall_name` varchar(255) NOT NULL,
  `provost_name` varchar(50) NOT NULL,
  `capability` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`id`, `hall_name`, `provost_name`, `capability`) VALUES
(1, 'Jatir Pita Bangabandhu Sheikh Mujibur Rahman Hall', 'Dr. Mahbubul Arefin', '600'),
(2, 'Saddam Hossain Hall', 'ABC', '550'),
(3, 'Shahid Ziaur Rahman Hall', 'ABC', '530'),
(4, 'Khaleda Zia Hall', 'Professor Dr. Reba Mondol', '400'),
(5, 'Bangamata Sheikh Fazilatunnesa Mujib Hall', 'ABC', '600'),
(6, 'Lalon Shah Hall', 'Professor Dr. Md. Obayedul Islam', '750'),
(7, 'Deshratno Sheikh Hasina Hall', 'Professor Dr. Selina Nasrin', '1000'),
(8, 'Sheikh Russel Hall', 'ABC', '550');

-- --------------------------------------------------------

--
-- Table structure for table `lab_insert`
--

CREATE TABLE `lab_insert` (
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `item_type` text NOT NULL,
  `entry_date` text NOT NULL,
  `room_no` int(11) NOT NULL,
  `status_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_insert`
--

INSERT INTO `lab_insert` (`item_id`, `item_name`, `item_type`, `entry_date`, `room_no`, `status_info`) VALUES
(16, 'GPU', 'Keyboard', '25-11-2021', 420, 'Bad');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `book_author` text NOT NULL,
  `book_publisher` text NOT NULL,
  `book_edition` text NOT NULL,
  `book_quantity` int(11) NOT NULL,
  `book_borrowed` int(11) NOT NULL,
  `book_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`book_id`, `book_name`, `book_author`, `book_publisher`, `book_edition`, `book_quantity`, `book_borrowed`, `book_available`) VALUES
(29, 'Computer Fundamental', 'PK', 'Dk', '1st', 8, 2, 6),
(30, 'ANSI C', 'ddd', 'Dk', '1st', 4, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `message`, `time`) VALUES
(14, 'Test', 'hello', '2021-11-28 00:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `session` text NOT NULL,
  `year` text NOT NULL,
  `semester` text NOT NULL,
  `roll` int(15) NOT NULL,
  `total_result` double NOT NULL,
  `grade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `session`, `year`, `semester`, `roll`, `total_result`, `grade`) VALUES
(1, 'Prosenjit Saha Apu', '2018-2019', '1st', 'Even', 1814013, 3.1, 'A-'),
(2, 'Mst Muslima Afroj', '2015-2016', '4th', 'Even', 1514043, 3.39, 'A'),
(3, 'Md. Bayozid Bostami', '2018-2019', '1st', 'Odd', 1814019, 2.69, 'B-'),
(4, 'Md. Shohanur Rahman Shohan', '2016-2017', '3rd', 'Odd', 1614037, 3.43, 'A'),
(5, 'Tamanna Afroj', '2017-2018', '2nd', 'Even', 1714050, 3.5, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_no` varchar(11) NOT NULL,
  `room_name` text NOT NULL,
  `room_type` text NOT NULL,
  `room_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_no`, `room_name`, `room_type`, `room_capacity`) VALUES
(1, '442', 'Software Lab', 'Lab', 20),
(2, '443', 'Hardware Lab', 'Lab', 20),
(3, '444', 'Class Room', 'Class', 50),
(4, '413', 'Class Room', 'Class', 50),
(5, '412A', 'Computer Communication Lab', 'Lab', 50),
(6, '412B', 'Robotics Lab', 'Lab', 25),
(7, '419', 'Class Room', 'Class', 50),
(8, '418', 'Programming Lab', 'Lab', 50),
(9, '416', 'Library', 'Library', 30),
(10, '401', 'Office Room', 'Office', 5);

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `r_id` int(11) NOT NULL,
  `week` text NOT NULL,
  `year` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `type` text NOT NULL,
  `course_code` text NOT NULL,
  `time` text NOT NULL,
  `teacher_id` text NOT NULL,
  `room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`r_id`, `week`, `year`, `session`, `type`, `course_code`, `time`, `teacher_id`, `room_no`) VALUES
(1, 'Saturday', '1-2', '2017-2018', 'Theory', 'CSE 2201', '9:00-10:00', 'MMI', 414),
(2, 'Saturday', '1-2', '2017-2018', 'Theory', 'CSE 2205', '10:00-11:00', 'MMI', 417),
(3, 'Saturday', '1-2', '2017-2018', 'Theory', 'CSE 2203', '11:00-12:00', 'IA', 419),
(4, 'Saturday', '1-2', '2017-2018', 'Theory', 'CSE 2207', '12:00-01:00', 'SKM', 417),
(5, 'Saturday', '1-2', '2017-2018', 'Theory', 'CSE 2208', '01:00-02:30', 'SKM', 417),
(6, 'Saturday', '1-2', '2017-2018', 'Lab', 'CSE 2210', '02:30-04:00', 'MAM', 418),
(7, 'Saturday', '5-1', '2014-2015', 'Theory', 'CSE 5101', '09:00-10:00', 'AA', 420),
(8, 'Saturday', '5-1', '2014-2015', 'Theory', 'CSE 5105', '10:00-11:00', 'MAH', 420),
(9, 'Saturday', '5-1', '2014-2015', 'Theory', 'CSE 5103', '11:00-12:00', 'MAZ', 420),
(10, 'Saturday', '5-1', '2014-2015', 'Theory', 'CSE 5107', '12:00-01:00', 'MMR', 420),
(11, 'Saturday', '5-1', '2014-2015', 'Theory', 'CSE 5108', '01:00-02:30', 'MMR', 420),
(12, 'Saturday', '5-1', '2014-2015', 'Lab', 'CSE 5102', '02:30-04:00', 'MMR', 412),
(13, 'Sunday', '1-2', '2017-2018', 'Theory', 'CSE 2209', '09:00-10:00', 'MAM', 414),
(14, 'Sunday', '1-2', '2017-2018', 'Theory', 'CSE 2205', '10:00-11:00', 'MMI', 417),
(15, 'Sunday', '1-2', '2017-2018', 'Theory', 'CSE 2203', '11:00-12:00', 'IA', 417),
(16, 'Sunday', '1-2', '2017-2018', 'Theory', 'CSE 2207', '12:00-01:00', 'SKM', 417),
(17, 'Sunday', '1-2', '2017-2018', 'Theory', 'CSE 2204', '01:00-02:30', 'IA', 417),
(18, 'Sunday', '1-2', '2017-2018', 'Lab', 'CSE 2202', '02:30-04:00', 'SKM', 418);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_supplier` text NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `warranty_expiration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`product_id`, `product_name`, `product_supplier`, `product_quantity`, `purchase_date`, `warranty_expiration_date`) VALUES
(69, 'arduino', 'aristo', 2, '2021-11-11', '2022-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Roll` varchar(20) NOT NULL,
  `Session` varchar(20) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `Hall_id` int(10) DEFAULT NULL,
  `gpa` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `Name`, `Roll`, `Session`, `Year`, `Hall_id`, `gpa`) VALUES
(1, 'MD ABBAS MAHMUD SUZON', '1814011', '2018-2019', 'First', 2, 3.26),
(2, 'Md Araf Faisal Mahi', '1814012', '2018-2019', 'First', 2, 3.49),
(3, 'Mst.Rowshon Ara Ripa', '1814048', '2018-2019', 'First', 4, 2.95),
(4, 'Bariul ahasan shezan', '1714006', '2017-2018', 'Second', 2, 3.52),
(5, 'Nabilah Anzoom Nishu', '1714051', '2017-2018', 'Second', 7, 3.8),
(6, 'Prosenjit Saha Apu', '1814013', '2018-2019', 'First', 2, 3.2),
(7, 'MD.Shakhawat hosen', '1514045', '2015-2016', 'Fourth', 2, 3.34),
(8, 'Samanta Mostafiz', '1714052', '2017-2018', 'Second', 4, 3.22),
(9, 'Md. Harun-Or-Rashed', '1514024', '2015-2016', 'Fourth', 1, 3.1),
(10, 'Al Roman Faisal', '1614005', '2016-2017', 'Third', 8, 2.68);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `Present_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `mothers_name` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `ssc_gpa` double NOT NULL,
  `hsc_gpa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `research` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `name`, `type`, `research`, `status`) VALUES
(1, 'Md Aktaruzzaman', 'Chairman', 'Digital Signal Processing,Speech Enhancement', 'Present'),
(2, 'Dr. Md. Farukuzzaman Khan', 'Professor', 'N/A', 'Present'),
(3, 'Dr. Ahsan-Ul-Ambia', 'Professor', 'N/A', 'Present'),
(4, 'Md. Ibrahim Abdullah', 'Professor', 'N/A', 'Present'),
(5, 'Sujit Kumar Mondal', 'Professor', 'N/A', 'Present'),
(6, 'Dr. Md. Robiul Hoque', 'Professor', 'Context-Aware System, Smart Space, Ubiquitous Computing, Wireless Sensor Network, Image processing, Speech processing', 'Present'),
(7, 'A.O.M Asaduzzaman', 'Associate Professor', 'N/A', 'Present'),
(8, 'Md. Mojahidul Islam', 'Associate Professor', 'N/A', 'Present'),
(9, 'Dr. M. Muntasir Rahman', 'Associate Professor', 'Computer Vision, Deep Learning, Machine Learning, Artificial Intelligence, Big Data Analysis.', 'Present'),
(10, 'Md. Shamim Hossain', 'Associate Professor', 'N/A', 'Present'),
(11, 'Joyassree Sen', 'Associate Professor', 'N/A', 'Present'),
(12, 'Dr. Md. Habibur Rahman', 'Associate Professor', 'Bioinformatics, Health Informatics, Machine Learning, Deep Learning, and Medical Data Analysis', 'Present'),
(13, 'Dr. Md. Shohidul Islam', 'Associate Professor', 'N/A', 'Present'),
(14, 'Md. Atiqur Rahman', 'Assistant Professor', 'N/A', 'Present'),
(15, 'Mohammad Alamgir Hossain', 'Assistant Professor', 'N/A', 'Present'),
(16, 'Bappa Sarkar', 'Assistant Professor', 'N/A', 'Study Leave');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`id`, `user_name`, `password`) VALUES
(1, 'akteruzzaman', 1234),
(2, 'ibrahim', 1234),
(3, 'asad', 1234),
(4, 'shahidul', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `mothers_name` varchar(255) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `age` varchar(20) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `cgpa` double DEFAULT NULL,
  `hall` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `fathers_name`, `mothers_name`, `present_address`, `permanent_address`, `age`, `roll_number`, `session`, `year`, `cgpa`, `hall`) VALUES
(17, 'Prosenjit Saha Apu', 'apusaha0011@gmail.com', '1234', '------', '------', 'Islami University', 'Khulna', '20', '1814013', '2018-19', 'First', 3.21, '2'),
(19, 'Md Araf Faisal Mahi', 'araffaisalmahi55@gmail.com', '1234', '----- ', '-----', 'Kushtia', 'Naoga', '22', '1814012', '2018-2019', 'First', 3.4, '2'),
(22, 'Nabilah Anzoom Nishu', 'nabilahanzoom@gmail.com', '1234', '------', '-----', 'Islamic University', 'Rajshahi', '21', '1714051', '2017-18', 'Second', 3.8, '7'),
(16, 'a', 'y@yahoo.com', '123', 'sdsd', 'sfsdsdsd', 'sdsdsds', 'sdsdsd', 'sdsdsd', 'dsdsdsd', 'sdsdsd', 'sdsd', 0, 'dsdsds'),
(18, 'fddf', 'zayed@gmail.com', '1234', '', '', '', '', '', '', '', '', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accounts_id`),
  ADD KEY `accounts_id` (`accounts_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biolab_insert`
--
ALTER TABLE `biolab_insert`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_insert`
--
ALTER TABLE `lab_insert`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_no` (`room_no`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`,`Roll`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `teacher_login`
--
ALTER TABLE `teacher_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accounts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `biolab_insert`
--
ALTER TABLE `biolab_insert`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lab_insert`
--
ALTER TABLE `lab_insert`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `teacher_login`
--
ALTER TABLE `teacher_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
