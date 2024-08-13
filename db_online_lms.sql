-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 04:18 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_online_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Muhammad Husnain', 'Husnaintariq47@gmail.com', 'Coffeecake'),
(2, 'TeamFlash', 'adminlms@flash.org', 'user1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `book_author` text NOT NULL,
  `book_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`book_id`, `book_name`, `book_author`, `book_description`) VALUES
(6, 'IT SERIES', 'TARIQ MEHMOOD', '9th Class'),
(7, 'Sarmaiya Urdu', 'Dr.Najeeb', '10th Class');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookissue`
--

CREATE TABLE `tbl_bookissue` (
  `bookissue_id` int(11) NOT NULL,
  `student_roll_no` int(25) NOT NULL,
  `student_name` text NOT NULL,
  `class` text NOT NULL,
  `student_contact_no` text NOT NULL,
  `book_id` text NOT NULL,
  `book_name` text NOT NULL,
  `issue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bookissue`
--

INSERT INTO `tbl_bookissue` (`bookissue_id`, `student_roll_no`, `student_name`, `class`, `student_contact_no`, `book_id`, `book_name`, `issue_date`) VALUES
(20, 1114, 'Ali', '10', '033337464732', '', '7', '2021-06-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_bookissue`
--
ALTER TABLE `tbl_bookissue`
  ADD PRIMARY KEY (`bookissue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_bookissue`
--
ALTER TABLE `tbl_bookissue`
  MODIFY `bookissue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
