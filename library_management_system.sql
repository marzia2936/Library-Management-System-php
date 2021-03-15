-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 02:06 PM
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
  `publication_year` varchar(20) NOT NULL,
  `book_accession_no` varchar(32) NOT NULL,
  `book_location` varchar(255) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`book_id`, `book_title`, `book_author`, `book_edition`, `publication_year`, `book_accession_no`, `book_location`) VALUES
(1, 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf'),
(2, 'bjhghj', 'fghfgh', 'fdgh', '2020', '5646', 'dfgdfg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
