-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 10:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `mother_name` varchar(40) DEFAULT NULL,
  `father_name` varchar(40) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` char(40) DEFAULT NULL,
  `gender` char(40) DEFAULT NULL,
  `roll_number` int(11) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`first_name`, `last_name`, `mother_name`, `father_name`, `dob`, `address`, `gender`, `roll_number`, `email_id`, `phone_number`) VALUES
('Sheiakh', 'Nazib', 'Nazma Khatun', 'Sheaikh Raquib', '2012-12-06', 'Dhaka', 'male', 1, 'sheiakhnazib9@gmail.com', 1770207810),
('Jubair', 'Hossain', 'Jahanara Khatun', 'Karim Hossain', '2013-08-12', 'Bhola', 'male', 2, 'jubairhoassain@gmail.com', 1587878743),
('Saroar', 'Mahmud', 'Rokeya Khatun', 'Rahim Hossain', '2013-04-30', 'Cumilla', 'male', 3, 'saroar@gmail.com', 1582458743),
('MD.', 'Abul', 'Asma Khatun', 'Akkas Hossain', '2014-03-29', 'Noyakhali', 'male', 4, 'abul@gmail.com', 1982458743),
('MD.', 'Babul', 'Bsma Khatun', 'Bkkas Hossain', '2012-07-22', 'Sirajganj', 'male', 5, 'babul@gmail.com', 1785458743),
('MD.', 'Cabul', 'Casma Khatun', 'Cakkas Hossain', '2014-06-24', 'Narayanganj', 'male', 6, 'cabul@gmail.com', 1783658743),
('dabul', 'lkdjsafk;s', 'Jorina khatun', 'Kuddus Alom', '2022-12-05', 'Sarulia', 'on', 7, 'rixevem542@covbase.com', 67587575),
('Md. ', 'Ebul', 'Khaleda', 'Jiyaur', '2022-12-03', 'Sarulia', 'on', 8, 'ebul9374@gmail.com', 90823432),
('Md. ', 'Fabul', 'Hasina', 'Fardin', '2022-12-20', 'Cumilla', 'on', 9, 'fabul9843@gmail.com', 2147483647),
('Mohammad', 'Eabul', 'farzin', 'Adnan', '2022-08-25', 'Cumilla', 'on', 10, 'eabul39847@gmail.com', 2147483647),
('farzin', 'khan', 'Fabiha', 'Bakkar', '2022-11-29', 'Chittagong', 'on', 11, 'farzin93874@gmail.com', 948574252);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `address` char(40) DEFAULT NULL,
  `gender` char(40) DEFAULT NULL,
  `email_id` varchar(40) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`first_name`, `last_name`, `dob`, `address`, `gender`, `email_id`, `subject`, `phone_number`) VALUES
('Fahimul', 'Haque', '0000-00-00', 'Dhaka', 'male', 'fahimulhaque9@gmail.com', 'cse311', 183207810),
('Shuvo', 'Hossain', '0000-00-00', 'Chittagong', 'male', 'shuvohossain9@gmail.com', 'cse323', 198507810),
('Mahmudur', 'Rahman', '0000-00-00', 'Khulna', 'male', 'mahmudur9@gmail.com', 'eee111', 136957810),
('Anisul', 'Islam', '0000-00-00', 'Sylhet', 'male', 'anisulr9@gmail.com', 'cse115', 198057810),
('Monamy', 'Islam', '0000-00-00', 'Barishal', 'female', 'monamy9@gmail.com', 'cse225', 191956810),
('Mohammad', 'hossain', '2022-12-06', 'Chittagong', 'on', 'mahmud@gmail.com', 'eee141', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`roll_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
