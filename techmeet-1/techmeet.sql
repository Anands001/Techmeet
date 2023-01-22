-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 06:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techmeet`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `head1` varchar(100) NOT NULL,
  `head2` varchar(100) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `head1`, `head2`, `text`) VALUES
(1, '2022', 'ICAPO@100', 'a siodoi adhoihds a asiodoiadh oihdsaasiodo iadhoihds aasiodoiad hoihdsaasio doiadhoihdsa asiodoiadho ihdsaasio doiadhoi hdsaasiodoia dhoihdsaasiodo iadhoihdsaasio doiadhoihdsaasiodoi adh o i hdsaasiodo iadhoihdsa asiodoia dhoihdsa');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `clg_id` int(11) NOT NULL,
  `clg_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`clg_id`, `clg_name`) VALUES
(1, 'st.xaviers college'),
(2, 'johns college');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'BCA'),
(2, 'Bsc.Comp Science'),
(3, 'MCA'),
(4, 'Msc.Comp Science');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(10) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_name1` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(30) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `rules` varchar(10000) NOT NULL,
  `partic_no` int(10) NOT NULL,
  `cimage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_name1`, `date`, `time`, `details`, `rules`, `partic_no`, `cimage`) VALUES
(1, 'WEB DESIGNING', 'WEB WEAVERS', '2023-01-10', '12.00hrs to 3.00hrs', 'details', 'Competition is open to all for UG and PG (CS/IT/SE/CA/IT&M) Students.\n                \n                Only one team per college, Maximum 20 participants per team are allowed.\n                \n                All the participants should bring their college ID card and bonafide certificate signed by HOD. \n                \n                Registration fee Rs.150/- per participant.\n                \n                Verification of Spot Registration start at 9.00 am and will be closed at 10.00 am\n                \n                22.2.2018\n                \n                Decision of the judges will be final for all events.\n                \n                Refreshment and Lunch will be provided.\n                \n                The filled in registration form should reach us on or before 20.2.2018 through E-mail\n                \n                ictaac18@gmail.com\n                \n                Participants should be present at the venue 15 minutes before the event.', 2, 'fabio-oyXis2kALVg-unsplash.jpg'),
(2, 'PAPER PRESENTATION', 'TECHNO TALK', '2023-07-12', '12.00hrs to 1.00hrs', '', 'Competition is open to all for UG and PG (CS/IT/SE/CA/IT&M) Students.\n                \nOnly one team per college, Maximum 20 participants per team are allowed.\n                \nAll the participants should bring their college ID card and bonafide certificate signed by HOD. \n                \nRegistration fee Rs.150/- per participant.\n                \nVerification of Spot Registration start at 9.00 am and will be closed at 10.00 am\n                \n22.2.2018\n                \nDecision of the judges will be final for all events.\n                \nRefreshment and Lunch will be provided.\n                \nThe filled in registration form should reach us on or before 20.2.2018 through E-mail\n                \nictaac18@gmail.com\n                \nParticipants should be present at the venue 15 minutes before the event.', 2, 'fabio-oyXis2kALVg-unsplash.jpg'),
(3, 'STRESS INTERVIEW', 'COOL STALWARTS', '2023-07-12', '3.00hrs to 4.00hrs', '', 'Competition is open to all for UG and PG (CS/IT/SE/CA/IT&M) Students.\r\n                \r\nOnly one team per college, Maximum 20 participants per team are allowed.\r\n                \r\nAll the participants should bring their college ID card and bonafide certificate signed by HOD. \r\n                \r\nRegistration fee Rs.150/- per participant.\r\n                \r\nVerification of Spot Registration start at 9.00 am and will be closed at 10.00 am\r\n                \r\n22.2.2018\r\n                \r\nDecision of the judges will be final for all events.\r\n                \r\nRefreshment and Lunch will be provided.\r\n                \r\nThe filled in registration form should reach us on or before 20.2.2018 through E-mail\r\n                \r\nictaac18@gmail.com\r\n                \r\nParticipants should be present at the venue 15 minutes before the event.', 1, 'fabio-oyXis2kALVg-unsplash.jpg'),
(9, 'SOFTWARE DEBUGGING', 'BUG SQUEEZERS', '2023-07-13', '10am to 12am', '', 'Competition is open to all for UG and PG (CS/IT/SE/CA/IT&M) Students.\r\n\r\nOnly one team per college, Maximum 20 participants per team are allowed.\r\n\r\nAll the participants should bring their college ID card and bonafide certificate signed by\r\n\r\nHOD. Registration fee Rs.150/- per participant.\r\n\r\nVerification of Spot Registration start at 9.00 am and will be closed at 10.00 am\r\n\r\n22.2.2018\r\n\r\nDecision of the judges will be final for all events.\r\n\r\nRefreshment and Lunch will be provided.\r\n\r\nThe filled in registration form should reach us on or before 20.2.2018 through E-mail\r\n\r\nictaac18@gmail.com\r\n\r\nParticipants should be present at the venue 15 minutes before the event.', 2, 'fabio-oyXis2kALVg-unsplash.jpg'),
(10, 'SOFTWARE MARKETING', 'ADJUGGLARS', '2023-07-12', '10am to 11am', '', 'Only 2 participants\r\n', 5, 'kevin-ku-w7ZyuGYNpRQ-unsplash.jpg'),
(11, 'E-WASTE', 'ART OF E-TRASH', '2023-07-12', '10am to 12am', '', 'PROTOCOLS', 2, 'chris-ried-ieic5Tq8YMk-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `manage_events`
--

CREATE TABLE `manage_events` (
  `std_id` int(20) NOT NULL,
  `event_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_events`
--

INSERT INTO `manage_events` (`std_id`, `event_id`) VALUES
(8, 1),
(11, 1),
(16, 1),
(17, 1),
(2, 1),
(18, 1),
(1, 1),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 10),
(8, 10),
(21, 10),
(11, 10),
(22, 10),
(24, 9),
(25, 9);

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'ANANDA SUBRAMANIAN S', 'sssanand70@gmail.com', '9080983', 'Hello...'),
(2, '', '', '', ''),
(3, 'john', 'john@gmail.com', '9080983', 'Message...'),
(4, 'clark', 'clark@gmail.com', '32123123', 'msgggggggggg........'),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', '', '', ''),
(31, '', '', '', ''),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, '', '', '', ''),
(35, '', '', '', ''),
(36, '', '', '', ''),
(37, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '', '', '', ''),
(48, '', '', '', ''),
(49, '', '', '', ''),
(50, '', '', '', ''),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, '', '', '', ''),
(58, '', '', '', ''),
(59, '', '', '', ''),
(60, '', '', '', ''),
(61, '', '', '', ''),
(62, '', '', '', ''),
(63, '', '', '', ''),
(64, 'clark', 'clark@gmail.com', '32123123', 'msgggggggggg........');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desg` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `username`, `password`, `name`, `desg`, `image`, `gmail`, `facebook`, `linkedin`) VALUES
(1, '', '', 'Dr.S.CHIDAMBARANATHAN', 'ASSOCIATE PROFESSOR', 'chidambaranathan.jpg', ' scharan2009@gmail.com', '', ''),
(2, '', '', ' Dr.S.SARASWATHI', 'HEAD OF THE DEPARTMENT', 'saraswathi.png', 'sararavi2001@gmail.com', '', ''),
(3, '', '', ' Mrs. L. Sujatha', 'ASSISTANT PROFESSOR', 'sujatha.png', 'sujish1511@gmail.com', '', ''),
(4, '', '', 'Mrs. R. Geetha', 'ASSISTANT PROFESSOR', 'geetha.png', 'meil2geetha@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `std_id` int(100) NOT NULL,
  `std_name` varchar(100) DEFAULT NULL,
  `std_regno` varchar(100) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clg_name` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`std_id`, `std_name`, `std_regno`, `mobile`, `email`, `clg_name`, `dept`) VALUES
(1, 'john wick', '', 0, 'johnwick@gmail.com', 'st.xaviers college', 'BCA'),
(2, 'Anand', '20UCA515', 877835050, 'anand@gmail.com', 'st.xaviers college', 'bca'),
(8, 'jen', 'jen01', 9080983, 'jen@gmail.com', 'st.xaviers college', 'bca'),
(11, 'fred', 'fred1', 9488848, 'fred@gmail.com', 'st.xaviers college', 'bca'),
(16, 'emma', 'em1', 2132333, 'emma@gmail.com', 'st.xaviers college', 'bca'),
(17, 'walter', '', 0, 'walter@gmail.com', 'st.xaviers college', 'bca'),
(18, 'reacher', 'reacher1', 776667764, 'reacher@gmail.com', 'st.xaviers college', 'bca'),
(19, 'hanna', '21HAN03', 1111111111, 'hanna@gmail.com', 'st.xaviers college', 'bsc.comp'),
(20, 'ben', 'ben10', 2147483647, 'ben@gmail.com', 'st.xaviers college', 'bca'),
(21, 'ken', 'ken10', 2147483647, 'ken@gmail.com', 'st.xaviers college', 'bsc.comp'),
(22, 'jenny', 'jenny01', 938989328, 'jenny@gmail.com', 'johns college', 'MCA'),
(23, 'Tamil', '503', 2147483647, 'tamil@gmail.com', 'johns college', 'MCA'),
(24, 'Tamilarasi', '21PCA503', 9090, 'tamilarasi@gmail.com', 'johns college', 'MCA'),
(25, 'vanaja', '', 0, 'vanaja@gmail.com', 'johns college', 'MCA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`clg_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `manage_events`
--
ALTER TABLE `manage_events`
  ADD KEY `userevents` (`std_id`),
  ADD KEY `eventsmanage` (`event_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`std_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `clg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `std_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manage_events`
--
ALTER TABLE `manage_events`
  ADD CONSTRAINT `eventsmanage` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userevents` FOREIGN KEY (`std_id`) REFERENCES `user` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
