-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 03:39 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE IF NOT EXISTS `book_info` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(64) NOT NULL,
  `book_author` varchar(32) NOT NULL,
  `book_edition` varchar(32) NOT NULL,
  `publication_year` varchar(32) NOT NULL,
  `isbn_number` varchar(32) NOT NULL,
  `book_price` varchar(11) NOT NULL,
  `book_accession_no` varchar(64) NOT NULL,
  `book_location` varchar(64) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`book_id`, `book_title`, `book_author`, `book_edition`, `publication_year`, `isbn_number`, `book_price`, `book_accession_no`, `book_location`) VALUES
(13, 'The  Audacity of Hope: Thoughts on Reclaiming the American Dream', 'Obama, Barack', '1st', '2006', '97803072377', 'Tk. 700', 'B0001', 'Shelf -1'),
(14, 'Programming in ANSI C', 'Balagurusamy, E.', '7th', '2017', '97893392196', 'Tk. 500', 'B0002', 'Shelf -2'),
(15, 'Number Building in Dewey Decimal Classification: A Practical Man', 'Islam, K. M. Saiful', '19th', '1991', '978984521274', '300', 'B0003', 'Shelf -3'),
(16, 'Studies in Poets Andrew Marvell: An Evaluation of His Poetry', 'Lall, Ramji', '1st', '2011', '9789846430367', 'Tk. 150', 'B0004', 'Shelf -4'),
(17, 'Studies in Poets Andrew Marvell: An Evaluation of His Poetry', 'Lall, Ramji', '1st', '2011', 'isbn_number', 'Tk. 150', 'B0004', 'Shelf -4');

-- --------------------------------------------------------

--
-- Table structure for table `book_shelf_info`
--

CREATE TABLE IF NOT EXISTS `book_shelf_info` (
  `book_shelf_id` int(11) NOT NULL,
  `book_shelf_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_shelf_info`
--

INSERT INTO `book_shelf_info` (`book_shelf_id`, `book_shelf_name`) VALUES
(0, 'asdfgdadf'),
(0, 'asdfgdadf');

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE IF NOT EXISTS `member_info` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_library_id` varchar(11) NOT NULL,
  `member_name` varchar(32) NOT NULL,
  `member_email` varchar(32) NOT NULL,
  `member_contact_no` varchar(64) NOT NULL,
  `member_address` varchar(64) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role_info`
--

CREATE TABLE IF NOT EXISTS `role_info` (
  `role_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_info_name` varchar(32) NOT NULL,
  `role_description` varchar(64) NOT NULL,
  PRIMARY KEY (`role_info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `role_info`
--

INSERT INTO `role_info` (`role_info_id`, `role_info_name`, `role_description`) VALUES
(1, 'fjfdlkjfdlkj', 'eiroueoru'),
(2, 'fgfg', 'agf');

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE IF NOT EXISTS `staff_info` (
  `staff_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(32) NOT NULL,
  `staff_designation` varchar(32) NOT NULL,
  `staff_email` varchar(32) NOT NULL,
  `staff_contact_no` varchar(11) NOT NULL,
  `staff_address` varchar(64) NOT NULL,
  PRIMARY KEY (`staff_info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff_info`
--

INSERT INTO `staff_info` (`staff_info_id`, `staff_name`, `staff_designation`, `staff_email`, `staff_contact_no`, `staff_address`) VALUES
(1, 'adsfsfa', 'aghh', 'ada@yahoo.com', '12234466', '123dgfhj'),
(2, 'hlkjlkj', 'hl', 'deuroie', 'ujkj', 'dfdfj;l');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_info`
--

CREATE TABLE IF NOT EXISTS `supplier_info` (
  `sup_id` int(11) NOT NULL AUTO_INCREMENT,
  `sup_name` varchar(64) NOT NULL,
  `sup_email` varchar(32) NOT NULL,
  `sup_contact_no` varchar(32) NOT NULL,
  PRIMARY KEY (`sup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `writer_info`
--

CREATE TABLE IF NOT EXISTS `writer_info` (
  `writer_id` int(11) NOT NULL AUTO_INCREMENT,
  `writer_name` varchar(64) NOT NULL,
  `writer_type` varchar(32) NOT NULL,
  `writer_email` varchar(32) NOT NULL,
  `writer_contact_no` varchar(32) NOT NULL,
  PRIMARY KEY (`writer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
