-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 04:12 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_22`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE IF NOT EXISTS `customer_info` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(64) NOT NULL,
  `customer_email` varchar(32) NOT NULL,
  `customer_contact_no` varchar(32) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE IF NOT EXISTS `employee_info` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(64) NOT NULL,
  `employee_email` varchar(32) NOT NULL,
  `employee_contact_no` varchar(32) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`employee_id`, `employee_name`, `employee_email`, `employee_contact_no`) VALUES
(1, 'Mamun', 'mamun@gmail.com', '01911367868'),
(2, 'Tomal', 'tomal@gmail.com', '01611367868'),
(3, 'Rony', 'rony@gmail.com', '01711367868'),
(4, 'Jony', 'jony@gmail.com', '01811367868');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
