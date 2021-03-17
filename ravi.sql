-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2016 at 01:07 PM
-- Server version: 5.5.16
-- PHP Version: 5.4.0beta2-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ravi`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `specilist` varchar(45) NOT NULL,
  `room` varchar(45) NOT NULL,
  `day` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `specilist`, `room`, `day`) VALUES
(1, 'Ravi kant singh', 'Neurology', '23', 'Monday'),
(2, 'Madan murari singh', 'Cardology', '24', 'Monday'),
(3, 'Devender kumar', 'Surgery', '25', 'Tuesday'),
(4, 'Shivam nishad', 'Dentist', '26', 'Tuesday'),
(5, 'Manjeet Kumar', 'Urology', '27', 'Wednesday'),
(6, 'Abhay mishra', 'Dentist', '28', 'Wednesday'),
(7, 'Shashi', 'OPD', '29', 'Thursday'),
(8, 'RAHUL', 'Urology', '24', 'Thursday'),
(9, 'RAHUL', 'Surgery', '25', 'Thursday'),
(10, 'rohit', 'Cardiyology', '23', 'Thursday'),
(11, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_con`
--

CREATE TABLE IF NOT EXISTS `doctor_con` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` varchar(45) NOT NULL,
  `doctor_name` varchar(45) NOT NULL,
  `patient_name` varchar(45) NOT NULL,
  `time_slot` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `doctor_con`
--

INSERT INTO `doctor_con` (`id`, `date`, `doctor_name`, `patient_name`, `time_slot`) VALUES
(1, '', 'o', 'o', ''),
(2, '2016-02-11', 'Devender kumar', 'RAVIKANT SINGH', '12:04'),
(3, '2016-02-11', 'Devender kumar', 'RAVIKANT SINGH', '12:04'),
(4, 'm,nmn', 'RAVIKANT SINGH', 'o', ''),
(5, '2016-02-24', 'RAHUL', 'MADAN MURARI SINGH', '12:10'),
(6, '2016-03-16', 'RAVIKANT SINGH', 'DEVENDRA KUMAR NISHASD', '12:59'),
(7, '', 'o', 'o', ''),
(8, '', 'o', 'o', '');

-- --------------------------------------------------------

--
-- Table structure for table `d_registration`
--

CREATE TABLE IF NOT EXISTS `d_registration` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `age` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `specilist` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `qualification` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `d_registration`
--

INSERT INTO `d_registration` (`id`, `name`, `age`, `address`, `gender`, `specilist`, `email`, `date`, `contact`, `qualification`) VALUES
(10, 'RAVIKANT SINGH', '19', 'GHAZIPUR', 'MALE', 'FEMALE', 'ravikant@gmail.com', '2016-02-10', '98989898989', 'B-tech'),
(12, 'RAHUL', '23', 'CHANDUALI', 'MALE', 'MALE', 'ravikantsingh.5088@gmail.com', '2016-02-10', '8576057645', 'XYZ');

-- --------------------------------------------------------

--
-- Table structure for table `e_registration`
--

CREATE TABLE IF NOT EXISTS `e_registration` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `catogery` varchar(45) NOT NULL,
  `age` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `qualification` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `e_registration`
--

INSERT INTO `e_registration` (`id`, `name`, `catogery`, `age`, `address`, `gender`, `email`, `date`, `contact`, `qualification`) VALUES
(2, '', '', '', '', 'please select............', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `finan_reg`
--

CREATE TABLE IF NOT EXISTS `finan_reg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(45) NOT NULL,
  `money` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `purpose` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nursing`
--

CREATE TABLE IF NOT EXISTS `nursing` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `problem` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_registration`
--

CREATE TABLE IF NOT EXISTS `p_registration` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `age` varchar(45) NOT NULL,
  `problem` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `doctor` varchar(45) NOT NULL,
  `room` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `p_registration`
--

INSERT INTO `p_registration` (`id`, `name`, `age`, `problem`, `gender`, `doctor`, `room`, `date`, `address`) VALUES
(8, 'MADAN MURARI SINGH', '23', 'EYE', 'MALE', 'Manjeet Kumar', '26', '2016-02-20', 'MAHARAJGANG'),
(9, 'DEVENDRA KUMAR NISHASD', '12', 'TEETH', 'MALE', 'RAHUL', '25', '2016-02-19', 'KHALILABAD'),
(14, 'ravikant', '14', 'feaver', 'MALE', 'Devender kumar', '26', '2016-04-22', 'ghazipur'),
(15, 'ravikant singh', '17', 'feaver', 'MALE', 'Manjeet Kumar', '25', '2016-03-23', 'gorakhpur');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, '', '', ''),
(2, 'ravikantsingh', 'ravikant@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'ravikantsingh', 'ravikant@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'ravikant', 'ravikantsingh@gmail.com', '1234567'),
(5, 'ravikantsingh', 'ravikant@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'ravikant', 'ravikant@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Ravi kant singh', 'ravikant@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'Ravi kant singh', 'ravikant@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'ash', 'as@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(10, 'ash', 'as@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'ravikant', 'ravikant@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'devendra', 'ravikant@gmail.com', 'a8698009bce6d1b8c2128eddefc25aad'),
(13, 'ravikant', 'ravikant@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(14, 'ravikant', 'ravikant@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(15, 'Ravi kant singh', 'ravikant@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(16, 'Ravi kant singh', 'ravikant@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 'Ravi kant singh', 'ravikant@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'Ravi kant singh', 'ravikant@gmail.com', '8db1b2a51733d0885869266e7ccbf1f0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
