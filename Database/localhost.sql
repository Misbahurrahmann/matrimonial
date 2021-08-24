-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2017 at 11:18 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `humsafar`
--
CREATE DATABASE `humsafar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `humsafar`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_login` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin_login`
--

INSERT INTO `tbl_admin_login` (`admin_id`, `email`, `password`) VALUES
(1, 'shubham@gmail.com', 'shubham');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `ans_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ques_id` int(11) NOT NULL,
  `ans` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ans_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`ans_id`, `user_id`, `ques_id`, `ans`, `date`) VALUES
(1, 9, 1, 'hfiuyiy', '2017-08-01'),
(2, 9, 1, 'mnm', '2017-08-01'),
(3, 9, 1, 'kjfjfkj', '2017-08-01'),
(4, 9, 4, 'dfef', '2017-08-01'),
(5, 9, 4, 'dfefkgfkihj', '2017-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE IF NOT EXISTS `tbl_enquiry` (
  `eq_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `message` varchar(100) NOT NULL,
  `eq_date` varchar(30) NOT NULL,
  PRIMARY KEY (`eq_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`eq_id`, `name`, `email`, `mobile`, `message`, `eq_date`) VALUES
(1, 'SHUBHAM', 'ss130496@gmail.com', '09005803923', 'WELCOME', ''),
(2, 'sumit rajpoot', 'sr91200400@gmail.com', '09120040071', 'welcome', '2017-07-25'),
(3, 'shubham sharma', 'ss130496@gmail.com', '9454000757', 'welcome', '2017-07-25'),
(16, 'shubham', 'ss130496@gmail.com', '8423171179', 'shubham, Your Contact is successfully submitted..', '2017-08-02'),
(5, 'ROHIT GHOSH', 'rohit720@gmail.com', '07052417766', 'WHAT IS HUMSFAR', '2017-07-25'),
(7, 'shubham', 'ss130496@gmail.com', '09005803923', 'shubham, Your Contact is successfully submitted..', '2017-07-31'),
(8, 'shubham', 'ss130496@gmail.com', '09005803923', 'shubham, Your Contact is successfully submitted..', '2017-07-31'),
(9, 'shubham', 'ss130496@gmail.com', '09005803923', 'shubham, Your Contact is successfully submitted..', '2017-07-31'),
(10, 'shubham', 'ss130496@gmail.com', '09005803923', 'shubham, Your Contact is successfully submitted..', '2017-07-31'),
(11, 'shubham', 'ss130496@gmail.com', '09005803923', 'shubham, Your Contact is successfully submitted..', '2017-07-31'),
(12, 'shubham', 'ss130496@gmail.com', '09005803923', 'shubham, Your Contact is successfully submitted..', '2017-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `f_date` varchar(30) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`f_id`, `user_id`, `topic`, `message`, `f_date`) VALUES
(1, 'ss130496@gmail.com', 'shubham', '', ''),
(2, 'ss130496@gmail.com', 'shubham', '', ''),
(4, 'ss130496@gmail.com', 'sdfghj', '2354rt6hnm', ''),
(5, 'ss130496@gmail.com', 'fefrgg', 'gfgrrhrh', '2017-07-26'),
(6, 'ss130496@gmail.com', '', '', '2017-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mrequest`
--

CREATE TABLE IF NOT EXISTS `tbl_mrequest` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user` varchar(100) NOT NULL,
  `to_user` varchar(100) NOT NULL,
  `request_date` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_mrequest`
--

INSERT INTO `tbl_mrequest` (`request_id`, `from_user`, `to_user`, `request_date`, `status`) VALUES
(1, '9', '7', '2017-07-30', 'false'),
(8, '9', '7', '2017-07-31', 'false'),
(5, '', '10', '2017-07-31', 'false'),
(6, '9', '7', '2017-07-31', 'false'),
(13, '11', '7', '2017-08-01', 'false'),
(12, '8', '9', '2017-07-31', 'true'),
(10, '9', '10', '2017-07-31', 'false'),
(11, '9', '7', '2017-07-31', 'false'),
(14, '11', '8', '2017-08-01', 'true'),
(15, '11', '10', '2017-08-01', 'false'),
(16, '9', '8', '2017-08-02', 'false'),
(17, '9', '8', '2017-08-02', 'false'),
(18, '9', '8', '2017-08-02', 'false'),
(19, '9', '8', '2017-08-02', 'false'),
(20, '9', '8', '2017-08-02', 'false'),
(21, '9', '8', '2017-08-02', 'false'),
(22, '9', '7', '2017-08-02', 'false'),
(23, '9', '8', '2017-08-02', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE IF NOT EXISTS `tbl_notification` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `notification` varchar(1000) NOT NULL,
  `n_date` varchar(30) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`n_id`, `notification`, `n_date`) VALUES
(1, 'hi', '2017-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE IF NOT EXISTS `tbl_question` (
  `ques_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ques` varchar(200) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`ques_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`ques_id`, `user_id`, `ques`, `date`) VALUES
(1, 9, 'ddfefe', '2017-07-31'),
(2, 9, 'kjkj', '2017-07-31'),
(3, 9, 'hhhvhjbjkg', '2017-07-31'),
(4, 9, '', '2017-08-01'),
(5, 9, '', '2017-08-01'),
(6, 9, 'mnjhj', '2017-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `f_occupation` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `high_quali` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `pic_name` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reg_date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`id`, `name`, `father_name`, `f_occupation`, `gender`, `email`, `dob`, `high_quali`, `religion`, `category`, `sub_category`, `profession`, `pic_name`, `state`, `city`, `password`, `reg_date`) VALUES
(7, 'pooja', 'krinsgopal', '', 'female', 'pooja789@gmail.com', '1996-11-21', 'Intermedeat', 'hindu', 'genrel', '', 'none', 'beach-babes-16a.jpg', 'none', 'Mahoba', '789', '2017-07-27'),
(8, 'sonam', 'papa', '', 'female', 'sonam@gmail.com', '0000-00-00', 'Intermedeat', 'hindu', 'obc', '', 'govt.job', 'jacqueline-fernandez-5a.jpg', 'utter pradesh', '', 'sonam', '2017-07-27'),
(9, 'shubham ', 'mahesh chandra', 'huhuy', 'male', 'ss130496@gmail.com', '1996-04-13', 'Grauguation', 'hindu', 'obc', 'jhjhjh', 'private job', '2017-06-01-18-37-54-613.jpg', 'utter pradesh', 'Kanpur', '1234', '2017-07-27'),
(10, 'arti', 'ppa', 'hdhdg', 'female', 'arti@gmail.com', '1995-06-11', 'Intermedeat', 'hindu', 'genrel', 'ghfffh', 'other', 'Adah Sharma_6411[1].jpg', 'madhay pradesh', 'bhopal', '1234', '2017-07-30'),
(11, 'AMITESH SINGH', 'SHIV MURTI SINGH', 'FARMER', 'male', 'amitesh8787@gmail.com', '1998-07-10', 'Intermedeat', 'hindu', 'genrel', 'THAKIUR', 'private job', 'C__Data_Users_DefApps_AppData_INTERNETEXPLORER_Temp_Saved Images_NE9YgLqVwzy2d9_1_2.jpg', 'uttar pradesh', 'RAEBARELI', 'AMITESH8787', '2017-08-01'),
(12, 'himanshu', 'mahech chandra', '', 'male', 'himanshu@gmail.com', '1999-11-11', 'Intermedeat', 'hindu', 'none', '', 'none', '01-24-53-Best-iPhone-6-and-iPhone-6-plus-wallpapers-hd-full-resolution-113.jpg', 'none', 'kanpur', '123', '2017-08-01'),
(13, 'Divya sharma', 'Ramkrshn', '', 'female', 'divya12@gmail.com', '1995-12-21', 'Grauguation', 'hindu', 'genrel', 'Sharma', 'private job', 'avril-lavigne-42a.jpg', 'uttar pradesh', 'kanpur', 'divya', '2017-08-02'),
(14, 'Priya yadav', 'Tejpratap', '', 'female', 'priya12@gmail.com', '1994-07-23', 'Grauguation', 'hindu', 'none', '', 'govt.job', 'Emma-Roberts.jpg', 'uttar pradesh', 'Lucknow', '', '2017-08-02'),
(15, 'anjal', 'ramsingh', '', 'female', 'anjal12@gmail.com', '1995-07-09', 'Highschool', 'hindu', 'obc', 'rajpoot', 'other', 'Elena-Fernandes-27206.jpg', 'madhay pradesh', 'bhopal', 'anjal', '2017-08-02');
