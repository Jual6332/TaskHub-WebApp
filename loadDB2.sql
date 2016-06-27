-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2016 at 08:19 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `CompletedTasks`
--

CREATE TABLE `CompletedTasks` (
  `id` int(2) NOT NULL,
  `manager` text NOT NULL,
  `workers` text NOT NULL,
  `description` text NOT NULL,
  `grade` int(11) DEFAULT NULL,
  `completed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CompletedTasks`
--

INSERT INTO `CompletedTasks` (`id`, `manager`, `workers`, `description`, `grade`, `completed`) VALUES
(4, 'Lucy Wilkinson', 'Sean Oneal', 'Set up trello', 10, '2016-06-14'),
(5, 'Lucy Wilkinson', 'Sean Oneal', 'Project part 1', 9, '2016-06-12'),
(6, 'Sean Oneal', 'Justin Alvey', 'Team meating', 10, '2016-06-16'),
(7, 'Sean Oneal', 'Brandon Spitler', 'create database', 8, '2016-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `InProgress`
--

CREATE TABLE `InProgress` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `manager` text NOT NULL,
  `workers` text NOT NULL,
  `description` text NOT NULL,
  `difficulty` int(11) NOT NULL,
  `due` date NOT NULL,
  `assigned` date NOT NULL,
  `progress` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `InProgress`
--

INSERT INTO `InProgress` (`id`, `manager`, `workers`, `description`, `difficulty`, `due`, `assigned`, `progress`) VALUES
('Lucy Wilkinson', 'Sean Oneal', 'Create USER-1 function', 2, '2016-07-01', '2016-06-10', 'Just started'),
('Sean Oneal', 'Justin Alvey', 'create USER-2 function', 3, '2016-06-23', '2016-06-11', 'Testing'),
('Sean Oneal', 'Justin Alvey', 'create USER-3 function', 2, '2016-06-22', '2016-06-12', 'Designing'),
('Sean Oneal', 'Brandon Spitler', 'create Func-01 fucntion', 2, '2016-06-17', '2016-06-11', 'Have not started');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `manager` text,
  `employees` text,
  `name` text NOT NULL,
  `title` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `received` text,
  `sent` text,
  `key` text NOT NULL,
  `email` text NOT NULL,
  `emp_requests` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `manager`, `employees`, `name`, `title`, `username`, `password`, `received`, `sent`, `key`, `email`, `emp_requests`) VALUES
(1, '3', NULL, 'Lucy Wilkinson', 'Head Honcho', 'luwi8498@colorado.edu', 'yaySchool!', NULL, '0', '123', '', NULL),
(2, '3', NULL, 'Sean ONeal', 'Hungry', 'seon7364@colorado.edu', 'password', '0', '1,2,3', '456', '', NULL),
(3, NULL, '1,2', 'Justin Alvey', 'Guy 1', 'jual6332@colorado.edu', '8674lion', '1,2', NULL, '789', '', NULL),
(4, NULL, NULL, 'Brandon Spitler', 'Guy 2', 'brsp7274@colorado.edu', 'guest', '3', NULL, '719', '', NULL),
(5,NULL,NULL,'user1','None','user1@user.com','user1user1',NULL,NULL,'92683759','None',NULL),
(6,NULL,NULL,'user2','None','user3@user.com','user3user3',NULL,NULL,'82771683','None',NULL),
(7,NULL,NULL,'user4','None','user4@user.com','useruser4',NULL,NULL,'71629521','None',NULL)
;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
