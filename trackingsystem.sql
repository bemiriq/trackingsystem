-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2016 at 01:26 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trackingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `assigned_to` varchar(20) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `assigned_to`, `date_posted`) VALUES
(1, 'Ujjwol dangol', '2016-04-02'),
(3, 'Pariskrit Shrestha', '2016-04-04'),
(4, 'Sulav Sir', '2016-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `issue_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `building` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `assigned_to` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`issue_id`, `name`, `priority`, `building`, `class`, `description`, `assigned_to`, `status`, `date_posted`) VALUES
(22, 'Kshtiz Raut', 'High', 'Nepal', 'Pokhara', 'The projector is not workingg .', 'Pariskrit Shrestha', 'Pending', '2016-04-07'),
(25, 'Namrata', 'Medium', 'Nepal', 'Lumbini', 'Mike not supported. ', 'Ujjwol dangol', 'Pending', '2016-04-09'),
(26, 'Saughat ', 'High', 'London', 'Newcastle', 'The projector is not working !! ', 'Sulav Sir', 'Completed', '2016-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_category` varchar(30) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `username`, `password`, `user_category`, `date_posted`) VALUES
(4, 'Sandesh Phuyal', 'sandeshphuyalc6@gmail.com', 'bemiriq', 'bemiriq', 'Student', '2016-03-31'),
(13, 'Pariskrit Shrestha', 'pariskrit@gmail.com', 'pariskrit', 'pariskrit', 'IT Employee', '2016-03-31'),
(18, 'Monil Adhikari', 'monil@gmail.com', 'monil', 'monil', 'Teacher', '2016-03-31'),
(19, 'saughat', 'saughat@gmail.com', 'admin', 'admin', 'Admin', '2016-04-07'),
(20, 'Sachit Sherchan', 'sachit@gmail.com', 'sachit', 'sachit', 'Student', '2016-04-09'),
(21, 'prakriti', 'prakriti@email.com', 'prakriti', 'prakriti', 'IT Employee', '2016-04-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
