-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 10:57 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `note_name` varchar(255) NOT NULL,
  `note_body` text NOT NULL,
  `task_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_complete` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `note_name`, `note_body`, `task_id`, `create_date`, `is_complete`) VALUES
(3, 'note 1', 'hello', 3, '2017-04-13 15:06:40', 0),
(4, 'hellohgsgd', 'gfgf', 3, '2017-04-13 19:42:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_body` text NOT NULL,
  `task_userid` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_name`, `task_body`, `task_userid`, `create_date`, `due_date`) VALUES
(3, 'task1', 'hhhhjhbhg', 8, '2017-04-13 14:29:04', '0000-00-00'),
(4, 'task 2', 'hello', 8, '2017-04-13 14:58:31', '2016-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `username`, `password`, `register_date`) VALUES
(4, 'Nawal', 'KH', 'ezma1996@gmail.com', 'ezma', 'a67ed6b6134d9c6e2c3801d1af592bd9', '2017-04-07 10:19:23'),
(5, 'mona', 'KH', 'smcgrath1@gmail.com', 'mona', 'a67ed6b6134d9c6e2c3801d1af592bd9', '2017-04-07 10:20:04'),
(6, 'jj', 'jj', 'jrrllicey@hotmail.com', 'koko', 'a67ed6b6134d9c6e2c3801d1af592bd9', '2017-04-07 12:51:08'),
(7, 'k', 'k', 'L.r.16@hotmail.com', 'oooo', 'a67ed6b6134d9c6e2c3801d1af592bd9', '2017-04-07 13:15:13'),
(8, 'nawal', 'kh', 'nojar2@gmail.com', 'nawal', 'a67ed6b6134d9c6e2c3801d1af592bd9', '2017-04-11 14:41:01'),
(9, 'nawal', 'saleh', 'ezma1996@gmail.com', 'nawal', 'a67ed6b6134d9c6e2c3801d1af592bd9', '2017-04-13 20:40:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
