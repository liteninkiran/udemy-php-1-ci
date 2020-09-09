-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 12:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci`
--
CREATE DATABASE IF NOT EXISTS `db_ci` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_ci`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_author`
--

DROP TABLE IF EXISTS `tbl_author`;
CREATE TABLE `tbl_author` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_author`
--

INSERT INTO `tbl_author` (`id`, `name`) VALUES
(6, 'Anik Singal'),
(7, 'Cal Newport'),
(13, 'Charles Duhigg'),
(9, 'Daniel Kahneman'),
(17, 'David Allen'),
(16, 'Gary Keller'),
(5, 'Kim Perell'),
(8, 'Mark Manson'),
(14, 'Michael E. Gerber'),
(3, 'Napoleon Hill'),
(4, 'Ray Dalio'),
(11, 'Robert T. Kiyosaki'),
(15, 'Ryan Holiday'),
(12, 'Timothy Ferriss'),
(10, 'Travis Bradberry');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

DROP TABLE IF EXISTS `tbl_book`;
CREATE TABLE `tbl_book` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `name`, `department_id`, `author_id`, `total`) VALUES
(6, 'The Execution Factor', 4, 6, '5'),
(7, 'Principles: Life and Work', 7, 6, '15'),
(8, 'Think and Grow Rich', 4, 3, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

DROP TABLE IF EXISTS `tbl_department`;
CREATE TABLE `tbl_department` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`id`, `name`) VALUES
(3, 'Time Management'),
(4, 'Success Self-Help'),
(5, 'Personal Time Management'),
(6, 'Job Hunting & Career Guides'),
(7, 'Business & Money'),
(8, 'Behavioral Sciences'),
(9, 'Motivation & Self-Improvement'),
(10, 'Motivational Management & Leadership'),
(11, 'Personal Finance');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

DROP TABLE IF EXISTS `tbl_student`;
CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `registration` int(11) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `department_id`, `role`, `registration`, `phone`) VALUES
(1, 'Hasan', 3, 1, 1, '03105164646'),
(2, 'Kazi', 4, 2, 2, '54146468468'),
(3, 'Ariyan', 5, 3, 3, '02752740455'),
(4, 'Rakib', 6, 4, 4, '03252528278');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_author`
--
ALTER TABLE `tbl_author`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UC_author_name` (`name`) USING BTREE;

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_book_author` (`author_id`),
  ADD KEY `FK_book_department` (`department_id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_student_department` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_author`
--
ALTER TABLE `tbl_author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD CONSTRAINT `FK_book_author` FOREIGN KEY (`author_id`) REFERENCES `tbl_author` (`id`),
  ADD CONSTRAINT `FK_book_department` FOREIGN KEY (`department_id`) REFERENCES `tbl_department` (`id`);

--
-- Constraints for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD CONSTRAINT `FK_student_department` FOREIGN KEY (`department_id`) REFERENCES `tbl_department` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
