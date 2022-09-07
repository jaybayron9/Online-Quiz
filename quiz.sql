-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 12:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- Dumping database structure for quiz
CREATE DATABASE IF NOT EXISTS `quiz` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `quiz`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'datapirates', 'datapirates');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `coption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_number`, `is_correct`, `coption`) VALUES
(1, 1, 0, ' Personal Hypertext Processor'),
(2, 1, 0, 'Private Home Page'),
(3, 1, 1, 'PHP: Hypertext Preprocessor'),
(4, 2, 1, 'echo \"Helow World\";'),
(5, 2, 0, '\"Hello World\";'),
(6, 2, 0, 'Document.Write(\"Hello World\");'),
(7, 3, 1, '$'),
(8, 3, 0, '%'),
(9, 3, 0, '?'),
(10, 3, 0, '!'),
(11, 4, 0, '.'),
(12, 4, 0, 'New Line'),
(13, 4, 0, '</php?'),
(14, 4, 1, ';'),
(15, 5, 0, 'Java'),
(16, 5, 1, 'Perl and C'),
(17, 5, 0, 'Visual Basic'),
(18, 5, 0, 'VB Script'),
(19, 6, 0, 'TRUE'),
(20, 6, 1, 'FALSE'),
(21, 7, 1, 'TRUE'),
(22, 7, 0, 'FALSE'),
(23, 8, 1, 'function myFunction()'),
(24, 8, 0, 'new_function myFunction()'),
(25, 8, 0, 'create myFunction()'),
(26, 9, 1, 'TRUE'),
(27, 9, 0, 'FALSE'),
(28, 10, 1, '/*..... */'),
(29, 10, 0, '<comment>....</comment>');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question_text`) VALUES
(1, 'What does PHP stand for?'),
(2, 'How do you write \"Hello World\" in PHP'),
(3, 'All variables in PHP start with which symbol?'),
(4, 'What is the correct way to end a PHP statement?'),
(5, 'The PHP syntax is most similar to:'),
(6, 'When using the POST method, variables are displayed in the URL:'),
(7, 'In PHP you can use both single quotes ( \'...\' ) and double quotes ( \"...\" ) for strings:'),
(8, 'What is the correct way to create a function in PHP?'),
(9, 'PHP allows you to send emails directly from a script'),
(10, 'What is a correct way to add a comment in PHP?');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `work` varchar(50) NOT NULL,
  `school_attended` varchar(20) NOT NULL,
  `scores` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
