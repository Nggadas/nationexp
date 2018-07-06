-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2018 at 01:12 PM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nationex_smartzip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_contact`
--

CREATE TABLE `admin_contact` (
  `id` int(11) NOT NULL,
  `contact_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `phone2` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `whatsapp_no` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `newdate` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `time` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin_contact`
--

INSERT INTO `admin_contact` (`id`, `contact_id`, `phone`, `phone2`, `whatsapp_no`, `email`, `status`, `newdate`, `date`, `time`) VALUES
(1, '01260', '123444', '5333333', '', '', 'Disabled', '2017-09-10', '10 Sep 2017', '1:10pm'),
(2, '01261', '08170333258', '08057732873', '08057732873', 'info@nationexpress24.com', 'Enabled', '2017-09-10', '10 Sep 2017', '1:12pm');

-- --------------------------------------------------------

--
-- Table structure for table `admin_invalid_login`
--

CREATE TABLE `admin_invalid_login` (
  `id` int(11) NOT NULL,
  `login_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `login_date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `login_time` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `user_ip` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `status` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `newdate` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `time` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_details`
--

CREATE TABLE `admin_login_details` (
  `id` int(11) NOT NULL,
  `login_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `login_date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `login_time` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `title` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `user_ip` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `admin_id` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `old` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `newdate` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `time` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin_login_details`
--

INSERT INTO `admin_login_details` (`id`, `login_id`, `login_date`, `login_time`, `title`, `user_ip`, `country`, `email`, `admin_id`, `old`, `status`, `newdate`, `date`, `time`) VALUES
(1, '25093323', '25 Sep 2017', '07:49 AM', 'Admin', '41.58.83.187', '', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-25', '25 Sep 2017', '07:49 AM'),
(2, '25093324', '25 Sep 2017', '10:01 AM', 'Admin', '154.118.19.203', '', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-25', '25 Sep 2017', '10:01 AM'),
(3, '25093325', '25 Sep 2017', '11:49 AM', 'Admin', '154.118.19.203', '', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-25', '25 Sep 2017', '11:49 AM'),
(4, '25093326', '25 Sep 2017', '01:40 PM', 'Admin', '154.118.19.203', '', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-25', '25 Sep 2017', '01:40 PM'),
(5, '25093327', '25 Sep 2017', '04:26 PM', 'Admin', '154.118.19.203', '', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-25', '25 Sep 2017', '04:26 PM'),
(6, '25093328', '25 Sep 2017', '10:41 PM', 'Admin', '41.58.204.69', '', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-25', '25 Sep 2017', '10:41 PM'),
(7, '25093329', '26 Sep 2017', '08:02 AM', 'Admin', '41.58.116.185', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-26', '26 Sep 2017', '08:02 AM'),
(8, '25093330', '26 Sep 2017', '09:45 AM', 'Admin', '41.58.116.185', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-26', '26 Sep 2017', '09:45 AM'),
(9, '25093331', '26 Sep 2017', '12:32 PM', 'Admin', '41.58.74.61', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-26', '26 Sep 2017', '12:32 PM'),
(10, '25093332', '26 Sep 2017', '01:15 PM', 'Admin', '41.58.74.61', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-26', '26 Sep 2017', '01:15 PM'),
(11, '25093333', '26 Sep 2017', '02:56 PM', 'Admin', '41.58.74.61', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-26', '26 Sep 2017', '02:56 PM'),
(12, '25093334', '26 Sep 2017', '04:13 PM', 'Admin', '197.211.61.11', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-26', '26 Sep 2017', '04:13 PM'),
(13, '25093335', '26 Sep 2017', '04:30 PM', 'Admin', '41.58.105.59', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-26', '26 Sep 2017', '04:30 PM'),
(14, '25093336', '28 Sep 2017', '01:03 AM', 'Admin', '41.58.245.44', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-28', '28 Sep 2017', '01:03 AM'),
(15, '25093337', '28 Sep 2017', '09:18 AM', 'Admin', '41.58.83.254', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-28', '28 Sep 2017', '09:18 AM'),
(16, '25093338', '28 Sep 2017', '12:55 PM', 'Admin', '41.217.123.104', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-09-28', '28 Sep 2017', '12:55 PM'),
(17, '25093339', '03 Oct 2017', '03:07 PM', 'Admin', '41.58.90.34', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-03', '03 Oct 2017', '03:07 PM'),
(18, '25093340', '03 Oct 2017', '03:07 PM', 'Admin', '41.58.90.34', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-03', '03 Oct 2017', '03:07 PM'),
(19, '25093341', '03 Oct 2017', '03:08 PM', 'Admin', '41.58.90.34', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-03', '03 Oct 2017', '03:08 PM'),
(20, '25093342', '03 Oct 2017', '03:08 PM', 'Admin', '41.58.90.34', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-03', '03 Oct 2017', '03:08 PM'),
(21, '25093343', '03 Oct 2017', '03:09 PM', 'Admin', '41.58.90.34', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-03', '03 Oct 2017', '03:09 PM'),
(22, '25093344', '03 Oct 2017', '03:10 PM', 'Admin', '41.58.90.34', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-03', '03 Oct 2017', '03:10 PM'),
(23, '25093345', '03 Oct 2017', '03:32 PM', 'Admin', '41.58.90.34', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-03', '03 Oct 2017', '03:32 PM'),
(24, '25093346', '03 Oct 2017', '03:32 PM', 'Admin', '41.58.90.34', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-03', '03 Oct 2017', '03:32 PM'),
(25, '25093347', '04 Oct 2017', '01:31 PM', 'Admin', '197.211.59.137', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-04', '04 Oct 2017', '01:31 PM'),
(26, '25093348', '04 Oct 2017', '01:41 PM', 'Admin', '197.211.59.137', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-04', '04 Oct 2017', '01:41 PM'),
(27, '25093349', '04 Oct 2017', '03:26 PM', 'Admin', '197.211.59.137', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-04', '04 Oct 2017', '03:26 PM'),
(28, '25093350', '04 Oct 2017', '08:19 PM', 'Admin', '197.211.59.137', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-04', '04 Oct 2017', '08:19 PM'),
(29, '25093351', '04 Oct 2017', '08:21 PM', 'Admin', '197.211.59.137', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-04', '04 Oct 2017', '08:21 PM'),
(30, '25093352', '04 Oct 2017', '08:48 PM', 'Admin', '197.211.59.137', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-04', '04 Oct 2017', '08:48 PM'),
(31, '25093353', '05 Oct 2017', '09:38 PM', 'Admin', '197.211.59.137', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-05', '05 Oct 2017', '09:38 PM'),
(32, '25093354', '05 Oct 2017', '11:39 PM', 'Admin', '41.58.63.136', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-05', '05 Oct 2017', '11:39 PM'),
(33, '25093355', '06 Oct 2017', '12:24 AM', 'Admin', '197.211.59.137', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-06', '06 Oct 2017', '12:24 AM'),
(34, '25093356', '06 Oct 2017', '12:25 AM', 'Admin', '197.211.59.137', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-06', '06 Oct 2017', '12:25 AM'),
(35, '25093357', '10 Oct 2017', '12:32 PM', 'Admin', '154.120.84.172', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-10', '10 Oct 2017', '12:32 PM'),
(36, '25093358', '10 Oct 2017', '01:44 PM', 'Admin', '154.120.84.172', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-10', '10 Oct 2017', '01:44 PM'),
(37, '25093359', '10 Oct 2017', '02:51 PM', 'Admin', '154.120.84.172', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-10', '10 Oct 2017', '02:51 PM'),
(38, '25093360', '10 Oct 2017', '02:51 PM', 'Admin', '154.120.84.172', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-10', '10 Oct 2017', '02:51 PM'),
(39, '25093361', '16 Oct 2017', '04:53 PM', 'Admin', '197.242.111.248', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-16', '16 Oct 2017', '04:53 PM'),
(40, '25093362', '16 Oct 2017', '07:39 PM', 'Admin', '197.211.59.147', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-16', '16 Oct 2017', '07:39 PM'),
(41, '25093363', '22 Oct 2017', '01:35 PM', 'Admin', '197.211.59.146', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '01:35 PM'),
(42, '25093364', '22 Oct 2017', '01:56 PM', 'Admin', '197.211.59.146', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '01:56 PM'),
(43, '25093365', '22 Oct 2017', '02:18 PM', 'Admin', '197.211.59.146', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '02:18 PM'),
(44, '25093366', '22 Oct 2017', '02:29 PM', 'Admin', '197.211.59.146', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '02:29 PM'),
(45, '25093367', '22 Oct 2017', '03:06 PM', 'Admin', '197.211.59.146', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '03:06 PM'),
(46, '25093368', '22 Oct 2017', '03:47 PM', 'Admin', '197.211.59.146', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '03:47 PM'),
(47, '25093369', '22 Oct 2017', '05:29 PM', 'Admin', '197.211.63.164', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '05:29 PM'),
(48, '25093370', '22 Oct 2017', '09:13 PM', 'Admin', '197.211.59.146', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '09:13 PM'),
(49, '25093371', '22 Oct 2017', '09:41 PM', 'Admin', '41.58.63.175', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '09:41 PM'),
(50, '25093372', '29 Oct 2017', '02:24 PM', 'Admin', '197.210.226.57', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-29', '29 Oct 2017', '02:24 PM'),
(51, '25093373', '30 Oct 2017', '09:02 PM', 'Admin', '197.211.59.159', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-30', '30 Oct 2017', '09:02 PM'),
(52, '25093374', '31 Oct 2017', '09:55 PM', 'Admin', '197.211.59.159', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-31', '31 Oct 2017', '09:55 PM'),
(53, '25093375', '31 Oct 2017', '11:08 PM', 'Admin', '197.211.59.159', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-10-31', '31 Oct 2017', '11:08 PM'),
(54, '25093376', '02 Nov 2017', '03:27 PM', 'Admin', '197.242.113.55', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-02', '02 Nov 2017', '03:27 PM'),
(55, '25093377', '07 Nov 2017', '12:21 PM', 'Admin', '41.58.122.119', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-07', '07 Nov 2017', '12:21 PM'),
(56, '25093378', '07 Nov 2017', '12:51 PM', 'Admin', '41.58.122.119', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-07', '07 Nov 2017', '12:51 PM'),
(57, '25093379', '09 Nov 2017', '11:36 AM', 'Admin', '154.120.88.21', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-09', '09 Nov 2017', '11:36 AM'),
(58, '25093380', '09 Nov 2017', '12:09 PM', 'Admin', '154.120.88.21', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-09', '09 Nov 2017', '12:09 PM'),
(59, '25093381', '09 Nov 2017', '01:20 PM', 'Admin', '154.120.88.21', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-09', '09 Nov 2017', '01:20 PM'),
(60, '25093382', '09 Nov 2017', '04:52 PM', 'Admin', '154.120.88.21', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-09', '09 Nov 2017', '04:52 PM'),
(61, '25093383', '09 Nov 2017', '07:31 PM', 'Admin', '41.58.85.202', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-09', '09 Nov 2017', '07:31 PM'),
(62, '25093384', '10 Nov 2017', '11:18 AM', 'Admin', '41.217.125.237', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-10', '10 Nov 2017', '11:18 AM'),
(63, '25093385', '10 Nov 2017', '12:52 PM', 'Admin', '41.217.125.237', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-10', '10 Nov 2017', '12:52 PM'),
(64, '25093386', '10 Nov 2017', '02:24 PM', 'Admin', '41.217.125.237', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-10', '10 Nov 2017', '02:24 PM'),
(65, '25093387', '10 Nov 2017', '04:28 PM', 'Admin', '41.217.125.237', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-10', '10 Nov 2017', '04:28 PM'),
(66, '25093388', '10 Nov 2017', '05:16 PM', 'Admin', '41.217.125.237', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-10', '10 Nov 2017', '05:16 PM'),
(67, '25093389', '10 Nov 2017', '08:38 PM', 'Admin', '41.58.115.173', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-10', '10 Nov 2017', '08:38 PM'),
(68, '25093390', '10 Nov 2017', '09:36 PM', 'Admin', '41.58.115.173', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-10', '10 Nov 2017', '09:36 PM'),
(69, '25093391', '10 Nov 2017', '10:36 PM', 'Admin', '41.58.115.173', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-10', '10 Nov 2017', '10:36 PM'),
(70, '25093392', '14 Nov 2017', '10:38 PM', 'Admin', '197.211.59.159', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-14', '14 Nov 2017', '10:38 PM'),
(71, '25093393', '15 Nov 2017', '01:14 PM', 'Admin', '197.242.119.82', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-15', '15 Nov 2017', '01:14 PM'),
(72, '25093394', '18 Nov 2017', '09:55 PM', 'Admin', '41.58.73.82', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-18', '18 Nov 2017', '09:55 PM'),
(73, '25093395', '18 Nov 2017', '11:24 PM', 'Admin', '41.58.73.82', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-18', '18 Nov 2017', '11:24 PM'),
(74, '25093396', '21 Nov 2017', '09:11 PM', 'Admin', '197.211.59.157', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-21', '21 Nov 2017', '09:11 PM'),
(75, '25093397', '21 Nov 2017', '10:21 PM', 'Admin', '197.211.59.157', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-21', '21 Nov 2017', '10:21 PM'),
(76, '25093398', '26 Nov 2017', '10:29 PM', 'Admin', '41.58.244.213', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-26', '26 Nov 2017', '10:29 PM'),
(77, '25093399', '27 Nov 2017', '12:32 PM', 'Admin', '154.118.42.148', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-27', '27 Nov 2017', '12:32 PM'),
(78, '25093400', '27 Nov 2017', '02:18 PM', 'Admin', '154.118.42.148', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-27', '27 Nov 2017', '02:18 PM'),
(79, '25093401', '28 Nov 2017', '09:26 PM', 'Admin', '197.211.59.153', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-28', '28 Nov 2017', '09:26 PM'),
(80, '25093402', '28 Nov 2017', '09:40 PM', 'Admin', '197.211.59.153', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-28', '28 Nov 2017', '09:40 PM'),
(81, '25093403', '28 Nov 2017', '10:43 PM', 'Admin', '197.211.59.153', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-11-28', '28 Nov 2017', '10:43 PM'),
(82, '25093404', '12 Dec 2017', '12:19 PM', 'Admin', '41.58.209.205', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-12-12', '12 Dec 2017', '12:19 PM'),
(83, '25093405', '12 Dec 2017', '04:13 PM', 'Admin', '154.118.60.194', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-12-12', '12 Dec 2017', '04:13 PM'),
(84, '25093406', '12 Dec 2017', '05:43 PM', 'Admin', '154.118.60.194', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-12-12', '12 Dec 2017', '05:43 PM'),
(85, '25093407', '14 Dec 2017', '01:21 PM', 'Admin', '41.58.221.132', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-12-14', '14 Dec 2017', '01:21 PM'),
(86, '25093408', '14 Dec 2017', '05:51 PM', 'Admin', '41.58.86.88', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-12-14', '14 Dec 2017', '05:51 PM'),
(87, '25093409', '14 Dec 2017', '08:45 PM', 'Admin', '41.58.109.163', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-12-14', '14 Dec 2017', '08:45 PM'),
(88, '25093410', '15 Dec 2017', '11:25 PM', 'Admin', '41.58.250.89', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-12-15', '15 Dec 2017', '11:25 PM'),
(89, '25093411', '22 Dec 2017', '03:54 PM', 'Admin', '197.210.8.188', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2017-12-22', '22 Dec 2017', '03:54 PM'),
(90, '25093412', '02 Jan 2018', '08:50 AM', 'Admin', '41.58.229.72', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2018-01-02', '02 Jan 2018', '08:50 AM'),
(91, '25093413', '03 Jan 2018', '01:12 PM', 'Admin', '154.118.22.43', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2018-01-03', '03 Jan 2018', '01:12 PM'),
(92, '25093414', '03 Jan 2018', '04:24 PM', 'Admin', '154.118.22.43', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2018-01-03', '03 Jan 2018', '04:24 PM'),
(93, '25093415', '08 Jan 2018', '01:33 PM', 'Admin', '197.242.96.76', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2018-01-08', '08 Jan 2018', '01:33 PM'),
(94, '25093416', '13 Jan 2018', '02:01 PM', 'Admin', '41.58.90.36', 'Nigeria', 'admin@nationexpress24.com', '010101', 'yes', 'Enabled', '2018-01-13', '13 Jan 2018', '02:01 PM'),
(95, '25093417', '06 Mar 2018', '10:05 PM', 'Admin', '197.210.226.105', 'Nigeria', 'admin@nationexpress24.com', '010101', '', 'Enabled', '2018-03-06', '06 Mar 2018', '10:05 PM');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `bus_stop` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `state` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `alt_phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `account_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `delivery_type` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `est_delivery_date` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `est_delivery_time` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `booking_no` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `time` varchar(11) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`id`, `full_name`, `address`, `bus_stop`, `city`, `state`, `country`, `phone`, `alt_phone`, `email`, `account_id`, `delivery_type`, `est_delivery_date`, `est_delivery_time`, `booking_no`, `date`, `time`) VALUES
(1, 'Lara Wilson', 'BLOCK Mall driive', 'IsoLO', 'ISoLO', 'Lagos', 'Nigeria', '08077155666', '', 'larajdj@aol.com', 'VFGV26096709', 'Same Day', '29 Sep 2017', '', '24x72809654019', '28 Sep 2017', '01:53 PM'),
(2, 'ggghj', 'ddffgh', 'hhkkk', 'abia', 'Gombe', 'nigeria', '33467888', '555555555', 'ff@g.com', 'RFEQ04104847', 'Next Day', '11 Oct 2017', '', '24x71010240602', '10 Oct 2017', '03:03 PM'),
(3, 'Dan Orimolade', '12 ja hi ave', 'Oja', 'Ikotun', 'Lagos', 'Nigeria', '08088223322', '', '', 'CDVY22109096', 'Next Day', '03 Nov 2017', '', '24x70211839748', '02 Nov 2017', '03:40 PM'),
(10, '', 'Isaac John Street', '', 'Ikeja', 'Lagos', 'Nigeria', '', '', '', 'VFGV26096709', '', '', '', '70301424887', '03 Jan 2018', '04:32 PM'),
(11, '', 'ASO ROCK BAR AND LODGING', '', 'Lagos', 'Lagos', 'Nigeria', '', '', '', 'VFGV26096709', '', '', '', '70301981643', '03 Jan 2018', '05:04 PM'),
(12, '', 'Hyacinth Maduekwe Street', '', 'Lagos', 'Lagos', 'Nigeria', '', '', '', '', '', '', '', '70301911113', '03 Jan 2018', '07:57 PM'),
(9, '', 'Wamis', '', 'Lagos', 'Lagos', 'Nigeria', '', '', '', '', '', '', '', '70301905762', '03 Jan 2018', '04:26 PM'),
(13, '', 'Don Bosco Technology', '', 'Lagos', 'Lagos', 'Nigeria', '', '', '', '', '', '', '', '70801286028', '08 Jan 2018', '01:29 PM'),
(14, '', 'Aniyun Hospital', '', 'Lagos', 'Lagos', 'Nigeria', '', '', '', 'VFGV26096709', '', '', '', '70801333535', '08 Jan 2018', '01:31 PM'),
(15, '', 'Aso Rock Villa', '', 'Abuja', 'Federal Capital Territory', 'Nigeria', '', '', '', '', '', '', '', '70901826965', '09 Jan 2018', '01:26 PM'),
(16, '', 'Aso Rock Villa', '', 'Abuja', 'Federal Capital Territory', 'Nigeria', '', '', '', '', '', '', '', '70901331909', '09 Jan 2018', '01:26 PM'),
(17, '', 'Aso Rock Villa', '', 'Abuja', 'Federal Capital Territory', 'Nigeria', '', '', '', '', '', '', '', '70901873657', '09 Jan 2018', '01:26 PM'),
(18, '', 'Aso Rock Villa', '', 'Abuja', 'Federal Capital Territory', 'Nigeria', '', '', '', '', '', '', '', '70901368158', '09 Jan 2018', '01:26 PM'),
(19, '', 'Aso Rock Villa', '', 'Abuja', 'Federal Capital Territory', 'Nigeria', '', '', '', '', '', '', '', '70901374645', '09 Jan 2018', '01:26 PM'),
(20, '', 'Aso Rock Villa', '', 'Abuja', 'Federal Capital Territory', 'Nigeria', '', '', '', '', '', '', '', '70901478430', '09 Jan 2018', '01:26 PM'),
(21, '', 'Aso Rock Villa', '', 'Abuja', 'Federal Capital Territory', 'Nigeria', '', '', '', '', '', '', '', '70901351292', '09 Jan 2018', '01:26 PM'),
(22, '', 'Aso Rock Villa', '', 'Abuja', 'Federal Capital Territory', 'Nigeria', '', '', '', '', '', '', '', '70901820511', '09 Jan 2018', '01:26 PM'),
(23, '', 'Aso Rock Villa', '', 'Abuja', 'Federal Capital Territory', 'Nigeria', '', '', '', '', '', '', '', '70901505192', '09 Jan 2018', '01:26 PM'),
(24, '', 'Jakande Gate Market', '', 'Lagos', 'Lagos', 'Nigeria', '', '', '', '', '', '', '', '70901751778', '09 Jan 2018', '01:34 PM'),
(25, '', 'Jakande Gate Market', '', 'Lagos', 'Lagos', 'Nigeria', '', '', '', '', '', '', '', '70901492469', '09 Jan 2018', '01:34 PM'),
(26, '', 'Kafanchan', '', 'Kafanchan', 'Kaduna', 'Nigeria', '', '', '', '', '', '', '', '71102912488', '11 Feb 2018', '12:27 AM'),
(27, '', 'Ikeja GRA', '', 'Ikeja', 'Lagos', 'Nigeria', '', '', '', '', '', '', '', '72505453741', '25 May 2018', '04:59 PM'),
(28, '', 'Domestic - Murtala Muhammed Airport', '', 'Lagos', 'Lagos', 'Nigeria', '', '', '', 'CDVY22109096', '', '', '', '72505510172', '25 May 2018', '05:03 PM'),
(29, '', 'Western Avenue', '', 'Lagos', 'Lagos', 'Nigeria', '', '', '', 'CDVY22109096', '', '', '', '72505867596', '25 May 2018', '05:03 PM'),
(30, '', 'D4 Alh. Masha Rd', '', 'Lagos', 'Lagos', 'Nigeria', '', '', '', '', '', '', '', '73005955983', '30 May 2018', '09:52 AM');

-- --------------------------------------------------------

--
-- Table structure for table `invalid_login`
--

CREATE TABLE `invalid_login` (
  `id` int(11) NOT NULL,
  `login_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `login_date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `login_time` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `user_ip` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `status` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `newdate` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `time` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `invalid_login`
--

INSERT INTO `invalid_login` (`id`, `login_id`, `login_date`, `login_time`, `user_ip`, `country`, `email`, `password`, `status`, `newdate`, `date`, `time`) VALUES
(1, '25091355', '25 Sep 2017', '10:40 PM', '41.58.204.69', '', 'admin@nationexpress.com', 'Obaiyanu1@', 'Login Failed', '2017-09-25', '25 Sep 2017', '10:40 PM'),
(2, '25091356', '26 Sep 2017', '04:08 PM', '197.211.61.11', 'Nigeria', 'admin@nationexpress24.com', 'Obaiyanu12@', 'Login Failed', '2017-09-26', '26 Sep 2017', '04:08 PM'),
(3, '25091357', '26 Sep 2017', '04:11 PM', '197.211.61.11', 'Nigeria', 'admin@nationexpress24.com', 'Obaiyanu12@Obaiyanu12@', 'Login Failed', '2017-09-26', '26 Sep 2017', '04:11 PM'),
(4, '25091358', '04 Oct 2017', '08:21 PM', '197.211.59.137', 'Nigeria', 'k@j.com', 'Obaiyanu1@', 'Login Failed', '2017-10-04', '04 Oct 2017', '08:21 PM'),
(5, '25091359', '14 Oct 2017', '09:21 PM', '141.0.12.99', 'Norway', 'doyinsola100@gmail.com', 'success_123', 'Login Failed', '2017-10-14', '14 Oct 2017', '09:21 PM'),
(6, '25091360', '22 Oct 2017', '09:41 PM', '41.58.63.175', 'Nigeria', 'adeolualatishe@yahoo.com', 'Ade123@', 'Login Failed', '2017-10-22', '22 Oct 2017', '09:41 PM'),
(7, '25091361', '22 Oct 2017', '09:41 PM', '41.58.63.175', 'Nigeria', 'adeolualatishe@yahoo.com', 'Ade123@', 'Login Failed', '2017-10-22', '22 Oct 2017', '09:41 PM'),
(8, '25091362', '22 Oct 2017', '09:42 PM', '41.58.63.175', 'Nigeria', 'adeolualatishe@yahoo.com', 'Ade123@', 'Login Failed', '2017-10-22', '22 Oct 2017', '09:42 PM'),
(9, '25091363', '10 Nov 2017', '04:28 PM', '41.217.125.237', 'Nigeria', 'admin@nationexpress24.com', 'Obaiyanu1@@', 'Login Failed', '2017-11-10', '10 Nov 2017', '04:28 PM'),
(10, '25091364', '19 Nov 2017', '01:44 PM', '197.210.8.139', 'Nigeria', 'bvg@c.cc', 'Ade123556@', 'Login Failed', '2017-11-19', '19 Nov 2017', '01:44 PM'),
(11, '25091365', '19 Nov 2017', '01:45 PM', '197.210.8.139', 'Nigeria', 'bvg@c.cc', 'Ade123556@', 'Login Failed', '2017-11-19', '19 Nov 2017', '01:45 PM'),
(12, '25091366', '14 Dec 2017', '01:21 PM', '41.58.221.132', 'Nigeria', 'admin@nationexpress24.com', 'Adeolu123@', 'Login Failed', '2017-12-14', '14 Dec 2017', '01:21 PM'),
(13, '25091367', '27 Dec 2017', '09:00 AM', '41.58.239.210', 'Nigeria', 'adeolualatishe@yahoo.com', 'Amazon123@', 'Login Failed', '2017-12-27', '27 Dec 2017', '09:00 AM'),
(14, '25091368', '03 Jan 2018', '04:24 PM', '154.118.22.43', 'Nigeria', 'admin@nationexpress24.com', 'Obaiyanu1@@', 'Login Failed', '2018-01-03', '03 Jan 2018', '04:24 PM'),
(15, '25091369', '09 Jan 2018', '01:35 PM', '197.210.25.142', 'Nigeria', 'adeolualatishe@gmail.com', 'Amazon123@', 'Login Failed', '2018-01-09', '09 Jan 2018', '01:35 PM');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `login_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `login_date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `login_time` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `title` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `user_ip` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `account_id` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `old` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `newdate` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `time` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `login_id`, `login_date`, `login_time`, `title`, `user_ip`, `country`, `email`, `account_id`, `old`, `status`, `newdate`, `date`, `time`) VALUES
(1, '22105270', '22 Oct 2017', '01:38 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '01:38 PM'),
(2, '22105271', '22 Oct 2017', '01:39 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '01:39 PM'),
(3, '22105272', '22 Oct 2017', '01:39 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '01:39 PM'),
(4, '22105273', '22 Oct 2017', '01:40 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '01:40 PM'),
(5, '22105274', '22 Oct 2017', '01:40 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '01:40 PM'),
(6, '22105275', '22 Oct 2017', '01:40 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '01:40 PM'),
(7, '22105276', '22 Oct 2017', '01:40 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '01:40 PM'),
(8, '22105277', '22 Oct 2017', '01:56 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '01:56 PM'),
(9, '22105278', '22 Oct 2017', '01:58 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '01:58 PM'),
(10, '22105279', '22 Oct 2017', '02:23 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '02:23 PM'),
(11, '22105280', '22 Oct 2017', '02:24 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '02:24 PM'),
(12, '22105281', '22 Oct 2017', '02:25 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '02:25 PM'),
(13, '22105282', '22 Oct 2017', '02:26 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '02:26 PM'),
(14, '22105283', '22 Oct 2017', '02:26 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '02:26 PM'),
(15, '22105284', '22 Oct 2017', '02:26 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '02:26 PM'),
(16, '22105285', '22 Oct 2017', '02:27 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '02:27 PM'),
(17, '22105286', '22 Oct 2017', '02:28 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '02:28 PM'),
(18, '22105287', '22 Oct 2017', '02:28 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '02:28 PM'),
(19, '22105288', '22 Oct 2017', '02:28 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '02:28 PM'),
(20, '22105289', '22 Oct 2017', '02:29 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '02:29 PM'),
(21, '22105290', '22 Oct 2017', '03:03 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '03:03 PM'),
(22, '22105291', '22 Oct 2017', '03:29 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '03:29 PM'),
(23, '22105292', '22 Oct 2017', '03:35 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '03:35 PM'),
(24, '22105293', '22 Oct 2017', '03:50 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '03:50 PM'),
(25, '22105294', '22 Oct 2017', '05:37 PM', 'standard', '41.58.227.30', 'Nigeria', 'adeolualatishe@yahoo.com', 'VFGV26096709', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '05:37 PM'),
(26, '22105295', '22 Oct 2017', '08:15 PM', 'standard', '197.211.59.146', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-22', '22 Oct 2017', '08:15 PM'),
(27, '22105296', '29 Oct 2017', '09:16 PM', 'standard', '41.58.95.218', 'Nigeria', 'adeolualatishe@yahoo.com', 'VFGV26096709', 'yes', 'Enabled', '2017-10-29', '29 Oct 2017', '09:16 PM'),
(28, '22105297', '29 Oct 2017', '09:58 PM', 'standard', '41.58.63.113', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-29', '29 Oct 2017', '09:58 PM'),
(29, '22105298', '30 Oct 2017', '10:56 AM', 'standard', '197.211.59.151', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-30', '30 Oct 2017', '10:56 AM'),
(30, '22105299', '30 Oct 2017', '10:59 AM', 'standard', '197.211.59.151', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-30', '30 Oct 2017', '10:59 AM'),
(31, '22105300', '30 Oct 2017', '12:02 PM', 'standard', '197.211.59.151', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-30', '30 Oct 2017', '12:02 PM'),
(32, '22105301', '30 Oct 2017', '12:11 PM', 'standard', '197.211.59.151', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-30', '30 Oct 2017', '12:11 PM'),
(33, '22105302', '30 Oct 2017', '12:16 PM', 'standard', '197.211.59.151', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-30', '30 Oct 2017', '12:16 PM'),
(34, '22105303', '30 Oct 2017', '08:12 PM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-30', '30 Oct 2017', '08:12 PM'),
(35, '22105304', '30 Oct 2017', '08:55 PM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-30', '30 Oct 2017', '08:55 PM'),
(36, '22105305', '30 Oct 2017', '08:55 PM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-30', '30 Oct 2017', '08:55 PM'),
(37, '22105306', '30 Oct 2017', '08:58 PM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-30', '30 Oct 2017', '08:58 PM'),
(38, '22105307', '30 Oct 2017', '09:10 PM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-30', '30 Oct 2017', '09:10 PM'),
(39, '22105308', '31 Oct 2017', '11:11 AM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-31', '31 Oct 2017', '11:11 AM'),
(40, '22105309', '31 Oct 2017', '11:17 AM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-31', '31 Oct 2017', '11:17 AM'),
(41, '22105310', '31 Oct 2017', '11:18 AM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-31', '31 Oct 2017', '11:18 AM'),
(42, '22105311', '31 Oct 2017', '11:44 AM', 'standard', '197.211.59.159', '', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-31', '31 Oct 2017', '11:44 AM'),
(43, '22105312', '31 Oct 2017', '11:47 AM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-31', '31 Oct 2017', '11:47 AM'),
(44, '22105313', '31 Oct 2017', '12:04 PM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-31', '31 Oct 2017', '12:04 PM'),
(45, '22105314', '31 Oct 2017', '09:27 PM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-31', '31 Oct 2017', '09:27 PM'),
(46, '22105315', '31 Oct 2017', '10:23 PM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-31', '31 Oct 2017', '10:23 PM'),
(47, '22105316', '31 Oct 2017', '10:54 PM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-31', '31 Oct 2017', '10:54 PM'),
(48, '22105317', '31 Oct 2017', '10:59 PM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-10-31', '31 Oct 2017', '10:59 PM'),
(49, '22105318', '02 Nov 2017', '03:23 PM', 'standard', '197.242.113.55', 'Nigeria', 'adeolualatishe@yahoo.com', 'VFGV26096709', 'yes', 'Enabled', '2017-11-02', '02 Nov 2017', '03:23 PM'),
(50, '22105319', '02 Nov 2017', '04:03 PM', 'standard', '197.242.113.55', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-11-02', '02 Nov 2017', '04:03 PM'),
(51, '22105320', '06 Nov 2017', '08:53 PM', 'standard', '41.58.252.87', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-11-06', '06 Nov 2017', '08:53 PM'),
(52, '22105321', '06 Nov 2017', '09:52 PM', 'standard', '41.58.252.87', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-11-06', '06 Nov 2017', '09:52 PM'),
(53, '22105322', '09 Nov 2017', '08:30 PM', 'standard', '197.211.59.155', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-11-09', '09 Nov 2017', '08:30 PM'),
(54, '22105323', '14 Nov 2017', '10:38 PM', 'standard', '197.211.59.159', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-11-14', '14 Nov 2017', '10:38 PM'),
(55, '22105324', '21 Nov 2017', '08:22 PM', 'standard', '197.211.59.157', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-11-21', '21 Nov 2017', '08:22 PM'),
(56, '22105325', '21 Nov 2017', '08:23 PM', 'standard', '197.211.59.157', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-11-21', '21 Nov 2017', '08:23 PM'),
(57, '22105326', '21 Nov 2017', '08:26 PM', 'standard', '197.211.59.157', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-11-21', '21 Nov 2017', '08:26 PM'),
(58, '22105327', '27 Nov 2017', '01:29 PM', 'standard', '154.118.42.148', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-11-27', '27 Nov 2017', '01:29 PM'),
(59, '22105328', '28 Nov 2017', '09:22 PM', 'standard', '197.211.59.153', 'Nigeria', 'k@j.com', 'RFEQ04104847', 'yes', 'Enabled', '2017-11-28', '28 Nov 2017', '09:22 PM'),
(60, '22105329', '28 Nov 2017', '09:23 PM', 'standard', '197.211.59.153', 'Nigeria', 'k@j.com', 'RFEQ04104847', '', 'Enabled', '2017-11-28', '28 Nov 2017', '09:23 PM'),
(61, '22105330', '27 Dec 2017', '09:00 AM', 'standard', '41.58.239.210', 'Nigeria', 'adeolualatishe@yahoo.com', 'VFGV26096709', 'yes', 'Enabled', '2017-12-27', '27 Dec 2017', '09:00 AM'),
(62, '22105331', '03 Jan 2018', '04:31 PM', 'standard', '154.118.22.43', 'Nigeria', 'adeolualatishe@yahoo.com', 'VFGV26096709', 'yes', 'Enabled', '2018-01-03', '03 Jan 2018', '04:31 PM'),
(63, '22105332', '08 Jan 2018', '01:30 PM', 'standard', '197.242.96.76', 'Nigeria', 'adeolualatishe@yahoo.com', 'VFGV26096709', 'yes', 'Enabled', '2018-01-08', '08 Jan 2018', '01:30 PM'),
(64, '22105333', '08 Jan 2018', '03:57 PM', 'standard', '197.242.96.76', 'Nigeria', 'adeolualatishe@yahoo.com', 'VFGV26096709', 'yes', 'Enabled', '2018-01-08', '08 Jan 2018', '03:57 PM'),
(65, '22105334', '09 Jan 2018', '01:36 PM', 'standard', '197.210.25.175', 'Nigeria', 'adeolualatishe@yahoo.com', 'VFGV26096709', 'yes', 'Enabled', '2018-01-09', '09 Jan 2018', '01:36 PM'),
(66, '22105335', '25 May 2018', '10:58 AM', 'standard', '41.58.111.85', 'Nigeria', 'adeolualatishe@yahoo.com', 'VFGV26096709', 'yes', 'Enabled', '2018-05-25', '25 May 2018', '10:58 AM'),
(67, '22105336', '25 May 2018', '11:24 AM', 'standard', '41.58.111.85', 'Nigeria', 'test@gmail.com', 'CDVY22109096', 'yes', 'Enabled', '2018-05-25', '25 May 2018', '11:24 AM'),
(68, '22105337', '25 May 2018', '11:24 AM', 'standard', '41.58.111.85', 'Nigeria', 'test@gmail.com', 'CDVY22109096', 'yes', 'Enabled', '2018-05-25', '25 May 2018', '11:24 AM'),
(69, '22105338', '25 May 2018', '11:26 AM', 'standard', '41.58.111.85', 'Nigeria', 'test@gmail.com', 'CDVY22109096', 'yes', 'Enabled', '2018-05-25', '25 May 2018', '11:26 AM'),
(70, '22105339', '25 May 2018', '05:00 PM', 'standard', '41.58.111.85', 'Nigeria', 'test@gmail.com', 'CDVY22109096', 'yes', 'Enabled', '2018-05-25', '25 May 2018', '05:00 PM'),
(71, '22105340', '25 May 2018', '05:01 PM', 'standard', '41.58.111.85', 'Nigeria', 'test@gmail.com', 'CDVY22109096', 'yes', 'Enabled', '2018-05-25', '25 May 2018', '05:01 PM'),
(72, '22105341', '25 May 2018', '05:02 PM', 'standard', '41.58.111.85', 'Nigeria', 'test@gmail.com', 'CDVY22109096', '', 'Enabled', '2018-05-25', '25 May 2018', '05:02 PM'),
(73, '22105342', '30 May 2018', '12:57 PM', 'standard', '41.58.125.113', 'Nigeria', 'adeolualatishe@yahoo.com', 'VFGV26096709', '', 'Enabled', '2018-05-30', '30 May 2018', '12:57 PM');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_details`
--

CREATE TABLE `parcel_details` (
  `id` int(11) NOT NULL,
  `goods_description` longtext COLLATE latin1_general_ci NOT NULL,
  `value_of_contents` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_of_parcel` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `weight_kg` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `booking_no` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `account_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `update_date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `update_time` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `time` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `parcel_details`
--

INSERT INTO `parcel_details` (`id`, `goods_description`, `value_of_contents`, `no_of_parcel`, `weight_kg`, `booking_no`, `email`, `account_id`, `update_date`, `update_time`, `date`, `time`) VALUES
(1, 'CELL PHONE', '5000', '2', '1.5', '24x72809654019', '', 'VFGV26096709', '28 Sep 2017', '03:44 PM', '28 Sep 2017', '03:13 PM'),
(2, 'ghljhm', '155677', '4', '7', '24x71010240602', '', 'RFEQ04104847', '', '', '10 Oct 2017', '03:06 PM'),
(3, 'Pants and bra', '5000.00', '2', '0.5', '24x70211839748', '', 'CDVY22109096', '', '', '02 Nov 2017', '03:45 PM'),
(6, '', '', '', '0.5', '70301905762', '', '', '', '', '03 Jan 2018', '04:26 PM'),
(7, '', '', '', '1', '70301424887', '', 'VFGV26096709', '', '', '03 Jan 2018', '04:32 PM'),
(8, '', '', '', '0.5', '70301981643', '', 'VFGV26096709', '', '', '03 Jan 2018', '05:04 PM'),
(9, '', '', '', '0.5', '70301911113', '', '', '', '', '03 Jan 2018', '07:57 PM'),
(10, '', '', '', '1.5', '70801286028', '', '', '', '', '08 Jan 2018', '01:29 PM'),
(11, '', '', '', '0.5', '70801333535', '', 'VFGV26096709', '', '', '08 Jan 2018', '01:31 PM'),
(12, '', '', '', '0.5', '70901826965', '', '', '', '', '09 Jan 2018', '01:26 PM'),
(13, '', '', '', '0.5', '70901331909', '', '', '', '', '09 Jan 2018', '01:26 PM'),
(14, '', '', '', '0.5', '70901873657', '', '', '', '', '09 Jan 2018', '01:26 PM'),
(15, '', '', '', '0.5', '70901368158', '', '', '', '', '09 Jan 2018', '01:26 PM'),
(16, '', '', '', '0.5', '70901374645', '', '', '', '', '09 Jan 2018', '01:26 PM'),
(17, '', '', '', '0.5', '70901478430', '', '', '', '', '09 Jan 2018', '01:26 PM'),
(18, '', '', '', '0.5', '70901351292', '', '', '', '', '09 Jan 2018', '01:26 PM'),
(19, '', '', '', '0.5', '70901820511', '', '', '', '', '09 Jan 2018', '01:26 PM'),
(20, '', '', '', '0.5', '70901505192', '', '', '', '', '09 Jan 2018', '01:26 PM'),
(21, '', '', '', '0.5', '70901751778', '', '', '', '', '09 Jan 2018', '01:34 PM'),
(22, '', '', '', '0.5', '70901492469', '', '', '', '', '09 Jan 2018', '01:34 PM'),
(23, '', '', '', '700', '71102912488', '', '', '', '', '11 Feb 2018', '12:27 AM'),
(24, '', '', '', '20', '72505453741', '', '', '', '', '25 May 2018', '04:59 PM'),
(25, '', '', '', '10', '72505510172', '', 'CDVY22109096', '', '', '25 May 2018', '05:03 PM'),
(26, '', '', '', '20', '72505867596', '', 'CDVY22109096', '', '', '25 May 2018', '05:03 PM'),
(27, '', '', '', '20', '73005955983', '', '', '', '', '30 May 2018', '09:52 AM');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `payment_method` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `payment_status` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `payment_date` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `delivery_cost` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `insurance_fee` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pickup_cost` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `booking_no` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `account_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `total_cost` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `update_date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `update_time` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `time` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `payment_method`, `payment_status`, `payment_date`, `delivery_cost`, `insurance_fee`, `pickup_cost`, `booking_no`, `email`, `account_id`, `total_cost`, `update_date`, `update_time`, `date`, `time`) VALUES
(1, 'Cash On Delivery', 'UNPAID', '', '500', '0', '0', '24x72809654019', '', 'VFGV26096709', '500', '28 Sep 2017', '03:44 PM', '28 Sep 2017', '03:13 PM'),
(2, 'Cash On Delivery', 'UNPAID', '', '4444444', '50000', '3333333', '24x71010240602', '', 'RFEQ04104847', '7827777', '', '', '10 Oct 2017', '03:06 PM'),
(3, 'Cash On Delivery', 'UNPAID', '', '500.00', '', '500.00', '24x70211839748', '', 'CDVY22109096', '1000', '', '', '02 Nov 2017', '03:45 PM');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_details`
--

CREATE TABLE `pickup_details` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `bus_stop` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `state` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `alt_phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `account_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `booking_no` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `scheduled_date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `time` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pickup_details`
--

INSERT INTO `pickup_details` (`id`, `full_name`, `address`, `bus_stop`, `city`, `state`, `phone`, `alt_phone`, `email`, `account_id`, `booking_no`, `scheduled_date`, `date`, `time`) VALUES
(1, 'DARE PICK', 'DARE\'S HOUSE', 'LAW SCHOOL JUNCTION', 'VICTORIA ISLAND', 'Lagos', '08111111222', '', 'DARE@GO.COM', 'VFGV26096709', '24x72809654019', '29 Sep 2017', '28 Sep 2017', '02:12 PM'),
(2, 'gggg', 'ggmin', 'umahia', 'abia', 'Gombe', '444444444', '4444444677', 'dd@hh.com', 'RFEQ04104847', '24x71010240602', '10 Oct 2017', '10 Oct 2017', '03:04 PM'),
(3, 'Fisayo Adeyemi', '23 Arila close', 'Victoria Island', 'VGC', 'Lagos', '08077516555', '', '', 'CDVY22109096', '24x70211839748', '02 Nov 2017', '02 Nov 2017', '03:43 PM'),
(9, '', 'KILO BUS STOP', '', 'Lagos', 'Lagos', '', '', '', '', '70301911113', '', '03 Jan 2018', '07:57 PM'),
(10, '', 'Ikeja Military Cantonment', '', 'Lagos', 'Lagos', '', '', '', '', '70801286028', '', '08 Jan 2018', '01:29 PM'),
(8, '', 'Ikeja Military Cantonment', '', 'Lagos', 'Lagos', '', '', '', 'VFGV26096709', '70301981643', '', '03 Jan 2018', '05:04 PM'),
(11, '', 'Ikeja Grammar School', '', 'Lagos', 'Lagos', '', '', '', 'VFGV26096709', '70801333535', '', '08 Jan 2018', '01:31 PM'),
(12, '', 'Lasu Epe central mosque', '', 'Epe', 'Lagos', '', '', '', '', '70901826965', '', '09 Jan 2018', '01:26 PM'),
(13, '', 'Lasu Epe central mosque', '', 'Epe', 'Lagos', '', '', '', '', '70901331909', '', '09 Jan 2018', '01:26 PM'),
(14, '', 'Lasu Epe central mosque', '', 'Epe', 'Lagos', '', '', '', '', '70901873657', '', '09 Jan 2018', '01:26 PM'),
(15, '', 'Lasu Epe central mosque', '', 'Epe', 'Lagos', '', '', '', '', '70901368158', '', '09 Jan 2018', '01:26 PM'),
(16, '', 'Lasu Epe central mosque', '', 'Epe', 'Lagos', '', '', '', '', '70901374645', '', '09 Jan 2018', '01:26 PM'),
(17, '', 'Lasu Epe central mosque', '', 'Epe', 'Lagos', '', '', '', '', '70901478430', '', '09 Jan 2018', '01:26 PM'),
(18, '', 'Lasu Epe central mosque', '', 'Epe', 'Lagos', '', '', '', '', '70901351292', '', '09 Jan 2018', '01:26 PM'),
(19, '', 'Lasu Epe central mosque', '', 'Epe', 'Lagos', '', '', '', '', '70901820511', '', '09 Jan 2018', '01:26 PM'),
(20, '', 'Lasu Epe central mosque', '', 'Epe', 'Lagos', '', '', '', '', '70901505192', '', '09 Jan 2018', '01:26 PM'),
(21, '', 'Maryland Mall Anthony Lagos', '', 'Lagos', 'Lagos', '', '', '', '', '70901751778', '', '09 Jan 2018', '01:34 PM'),
(22, '', 'Maryland Mall Anthony Lagos', '', 'Lagos', 'Lagos', '', '', '', '', '70901492469', '', '09 Jan 2018', '01:34 PM'),
(23, '', 'Lagos University Teaching Hospital', '', 'Lagos', 'Lagos', '', '', '', '', '71102912488', '', '11 Feb 2018', '12:27 AM'),
(24, '', 'Ajah', '', 'Lekki', 'Eti-Osa', '', '', '', '', '72505453741', '', '25 May 2018', '04:59 PM'),
(25, '', 'James Oni Street', '', 'Lagos', 'Lagos', '', '', '', 'CDVY22109096', '72505510172', '', '25 May 2018', '05:03 PM'),
(26, '', 'Joel Ogunnaike Street', '', 'Lagos', 'Lagos', '', '', '', 'CDVY22109096', '72505867596', '', '25 May 2018', '05:03 PM'),
(27, '', 'FFF Road', '', 'Lagos', 'Lagos', '', '', '', '', '73005955983', '', '30 May 2018', '09:52 AM');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `title` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `business_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `first_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `last_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `alt_phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `account_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `address` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `bus_stop` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `state` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `newdate` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `time` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `ip` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `ip_country` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `user_agent` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `old` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `registeredby` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `title`, `business_name`, `first_name`, `last_name`, `phone`, `alt_phone`, `email`, `account_id`, `password`, `address`, `bus_stop`, `city`, `state`, `country`, `newdate`, `date`, `time`, `ip`, `ip_country`, `user_agent`, `status`, `old`, `registeredby`) VALUES
(1, 'standard', 'AAA', 'Adeolu', 'Alatishe', '08077156443', '', 'adeolualatishe@yahoo.com', 'VFGV26096709', 'Amazon123@', 'NIL', 'LAGOS', 'NIL', 'Lagos', 'Nigeria', '2017-09-26', '26 Sep 2017', '08:40 AM', '41.58.116.185', 'Nigeria', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:51.0) Gecko', 'Enabled', 'yes', 'Admin'),
(2, 'standard', 'testes', 'test', 'teste', '00000', '', 'k@j.com', 'RFEQ04104847', 'x+XUmnJZ', 'jfj', 'kfk', 'jf', 'Lagos', 'Nigeria', '2017-10-04', '04 Oct 2017', '08:20 PM', '197.211.59.137', 'Nigeria', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/5', 'Enabled', 'yes', 'Admin'),
(3, 'standard', 'test', 'fisayo', 'Adeyemi', '0906546547', '', 'test@gmail.com', 'CDVY22109096', 'Amazon123@', 'hhjjj', 'ghj', 'hhjjj', 'Ogun', 'Nigeria', '2017-10-22', '22 Oct 2017', '05:38 PM', '197.211.63.164', 'Nigeria', 'Mozilla/5.0 (Linux; U; Android 6.0; en-US; HTC One', 'Enabled', 'yes', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `settings_delivery`
--

CREATE TABLE `settings_delivery` (
  `delivery_id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `collection_city` varchar(100) NOT NULL,
  `delivery_city` varchar(100) NOT NULL,
  `zone_id` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_delivery`
--

INSERT INTO `settings_delivery` (`delivery_id`, `collection_city`, `delivery_city`, `zone_id`) VALUES
(00000000043, 'Abuja', 'Abuja', '00000000001'),
(00000000044, 'Abuja', 'Abeokuta', '00000000004'),
(00000000045, 'Abuja', 'Ado ekiti', '00000000004'),
(00000000046, 'Abuja', 'Abakaliki', '00000000002'),
(00000000047, 'Abuja', 'Akure', '00000000004'),
(00000000048, 'Abuja', 'Asaba', '00000000002'),
(00000000049, 'Abuja', 'Awka', '00000000002'),
(00000000050, 'Abuja', 'Bauchi', '00000000004'),
(00000000051, 'Abuja', 'Birnin kebbi', '00000000004'),
(00000000052, 'Abuja', 'Benin', '00000000003'),
(00000000053, 'Abuja', 'Bonny', '00000000003'),
(00000000054, 'Abuja', 'Calabar', '00000000003'),
(00000000055, 'Abuja', 'Damaturu', '00000000004'),
(00000000056, 'Abuja', 'Dutse', '00000000004'),
(00000000057, 'Abuja', 'Eket', '00000000002'),
(00000000058, 'Abuja', 'Enugu', '00000000002'),
(00000000059, 'Abuja', 'Gombe', '00000000004'),
(00000000060, 'Abuja', 'Gusua', '00000000004'),
(00000000061, 'Abuja', 'Ibadan', '00000000004'),
(00000000062, 'Abuja', 'Ife', '00000000004'),
(00000000063, 'Abuja', 'Ijebu ode', '00000000004'),
(00000000064, 'Abuja', 'Illorin', '00000000004'),
(00000000065, 'Abuja', 'Jalingo', '00000000004'),
(00000000066, 'Abuja', 'Jos', '00000000004'),
(00000000067, 'Abuja', 'Kaduna', '00000000004'),
(00000000068, 'Abuja', 'Kano', '00000000004'),
(00000000069, 'Abuja', 'Kastina', '00000000004'),
(00000000070, 'Abuja', 'Lafia', '00000000004'),
(00000000071, 'Abuja', 'Lokoja', '00000000004'),
(00000000072, 'Abuja', 'Lagos', '00000000003'),
(00000000073, 'Abuja', 'Maiduguri', '00000000004'),
(00000000074, 'Abuja', 'Makurdi', '00000000004'),
(00000000075, 'Abuja', 'Minna', '00000000004'),
(00000000076, 'Abuja', 'Nnewi', '00000000002'),
(00000000077, 'Abuja', 'Nsukka', '00000000002'),
(00000000078, 'Abuja', 'Offa', '00000000004'),
(00000000079, 'Abuja', 'Onitsha', '00000000002'),
(00000000080, 'Abuja', 'Owerri', '00000000002'),
(00000000081, 'Abuja', 'Osogbo', '00000000004'),
(00000000082, 'Abuja', 'Port harcourt', '00000000002'),
(00000000083, 'Abuja', 'Sapele', '00000000003'),
(00000000084, 'Abuja', 'Sagamu', '00000000004'),
(00000000085, 'Abuja', 'Sokoto', '00000000004'),
(00000000086, 'Abuja', 'Suleja', '00000000004'),
(00000000087, 'Abuja', 'Umuahia', '00000000002'),
(00000000088, 'Abuja', 'Uyo', '00000000002'),
(00000000089, 'Abuja', 'Warri', '00000000003'),
(00000000090, 'Abuja', 'Yenogoa', '00000000003'),
(00000000091, 'Abuja', 'Yola', '00000000004'),
(00000000092, 'Abuja', 'Zaria', '00000000004'),
(00000000093, 'Abeokuta', 'Abuja', '00000000004'),
(00000000094, 'Abeokuta', 'Abeokuta', '00000000001'),
(00000000095, 'Abeokuta', 'Ado ekiti', '00000000003'),
(00000000096, 'Abeokuta', 'Abakaliki', '00000000004'),
(00000000097, 'Abeokuta', 'Akure', '00000000003'),
(00000000098, 'Abeokuta', 'Asaba', '00000000004'),
(00000000099, 'Abeokuta', 'Awka', '00000000004'),
(00000000100, 'Abeokuta', 'Bauchi', '00000000004'),
(00000000101, 'Abeokuta', 'Birnin kebbi', '00000000004'),
(00000000102, 'Abeokuta', 'Benin', '00000000003'),
(00000000103, 'Abeokuta', 'Bonny', '00000000004'),
(00000000104, 'Abeokuta', 'Calabar', '00000000004'),
(00000000105, 'Abeokuta', 'Damaturu', '00000000004'),
(00000000106, 'Abeokuta', 'Dutse', '00000000004'),
(00000000107, 'Abeokuta', 'Eket', '00000000004'),
(00000000108, 'Abeokuta', 'Enugu', '00000000004'),
(00000000109, 'Abeokuta', 'Gombe', '00000000004'),
(00000000110, 'Abeokuta', 'Gusua', '00000000004'),
(00000000111, 'Abeokuta', 'Ibadan', '00000000002'),
(00000000112, 'Abeokuta', 'Ife', '00000000003'),
(00000000113, 'Abeokuta', 'Ijebu ode', '00000000002'),
(00000000114, 'Abeokuta', 'Illorin', '00000000003'),
(00000000115, 'Abeokuta', 'Jalingo', '00000000004'),
(00000000116, 'Abeokuta', 'Jos', '00000000004'),
(00000000117, 'Abeokuta', 'Kaduna', '00000000004'),
(00000000118, 'Abeokuta', 'Kano', '00000000004'),
(00000000119, 'Abeokuta', 'Kastina', '00000000004'),
(00000000120, 'Abeokuta', 'Lafia', '00000000004'),
(00000000121, 'Abeokuta', 'Lokoja', '00000000004'),
(00000000122, 'Abeokuta', 'Lagos', '00000000002'),
(00000000123, 'Abeokuta', 'Maiduguri', '00000000004'),
(00000000124, 'Abeokuta', 'Makurdi', '00000000004'),
(00000000125, 'Abeokuta', 'Minna', '00000000004'),
(00000000126, 'Abeokuta', 'Nnewi', '00000000004'),
(00000000127, 'Abeokuta', 'Nsukka', '00000000004'),
(00000000128, 'Abeokuta', 'Offa', '00000000003'),
(00000000129, 'Abeokuta', 'Onitsha', '00000000004'),
(00000000130, 'Abeokuta', 'Owerri', '00000000004'),
(00000000131, 'Abeokuta', 'Osogbo', '00000000003'),
(00000000132, 'Abeokuta', 'Port harcourt', '00000000004'),
(00000000133, 'Abeokuta', 'Sapele', '00000000004'),
(00000000134, 'Abeokuta', 'Sagamu', '00000000002'),
(00000000135, 'Abeokuta', 'Sokoto', '00000000004'),
(00000000136, 'Abeokuta', 'Suleja', '00000000004'),
(00000000137, 'Abeokuta', 'Umuahia', '00000000004'),
(00000000138, 'Abeokuta', 'Uyo', '00000000004'),
(00000000139, 'Abeokuta', 'Warri', '00000000004'),
(00000000140, 'Abeokuta', 'Yenogoa', '00000000004'),
(00000000141, 'Abeokuta', 'Yola', '00000000004'),
(00000000142, 'Abeokuta', 'Zaria', '00000000004'),
(00000000143, 'Ado Ekiti', 'Abuja', '00000000004'),
(00000000144, 'Ado Ekiti', 'Abeokuta', '00000000003'),
(00000000145, 'Ado Ekiti', 'Ado ekiti', '00000000001'),
(00000000146, 'Ado Ekiti', 'Abakaliki', '00000000004'),
(00000000147, 'Ado Ekiti', 'Akure', '00000000002'),
(00000000148, 'Ado Ekiti', 'Asaba', '00000000004'),
(00000000149, 'Ado Ekiti', 'Awka', '00000000004'),
(00000000150, 'Ado Ekiti', 'Bauchi', '00000000004'),
(00000000151, 'Ado Ekiti', 'Birnin kebbi', '00000000004'),
(00000000152, 'Ado Ekiti', 'Benin', '00000000003'),
(00000000153, 'Ado Ekiti', 'Bonny', '00000000004'),
(00000000154, 'Ado Ekiti', 'Calabar', '00000000004'),
(00000000155, 'Ado Ekiti', 'Damaturu', '00000000004'),
(00000000156, 'Ado Ekiti', 'Dutse', '00000000004'),
(00000000157, 'Ado Ekiti', 'Eket', '00000000004'),
(00000000158, 'Ado Ekiti', 'Enugu', '00000000004'),
(00000000159, 'Ado Ekiti', 'Gombe', '00000000004'),
(00000000160, 'Ado Ekiti', 'Gusua', '00000000004'),
(00000000161, 'Ado Ekiti', 'Ibadan', '00000000002'),
(00000000162, 'Ado Ekiti', 'Ife', '00000000002'),
(00000000163, 'Ado Ekiti', 'Ijebu ode', '00000000003'),
(00000000164, 'Ado Ekiti', 'Illorin', '00000000003'),
(00000000165, 'Ado Ekiti', 'Jalingo', '00000000004'),
(00000000166, 'Ado Ekiti', 'Jos', '00000000004'),
(00000000167, 'Ado Ekiti', 'Kaduna', '00000000004'),
(00000000168, 'Ado Ekiti', 'Kano', '00000000004'),
(00000000169, 'Ado Ekiti', 'Kastina', '00000000004'),
(00000000170, 'Ado Ekiti', 'Lafia', '00000000004'),
(00000000171, 'Ado Ekiti', 'Lokoja', '00000000004'),
(00000000172, 'Ado Ekiti', 'Lagos', '00000000003'),
(00000000173, 'Ado Ekiti', 'Maiduguri', '00000000004'),
(00000000174, 'Ado Ekiti', 'Makurdi', '00000000004'),
(00000000175, 'Ado Ekiti', 'Minna', '00000000004'),
(00000000176, 'Ado Ekiti', 'Nnewi', '00000000004'),
(00000000177, 'Ado Ekiti', 'Nsukka', '00000000004'),
(00000000178, 'Ado Ekiti', 'Offa', '00000000003'),
(00000000179, 'Ado Ekiti', 'Onitsha', '00000000004'),
(00000000180, 'Ado Ekiti', 'Owerri', '00000000004'),
(00000000181, 'Ado Ekiti', 'Osogbo', '00000000003'),
(00000000182, 'Ado Ekiti', 'Port harcourt', '00000000004'),
(00000000183, 'Ado Ekiti', 'Sapele', '00000000004'),
(00000000184, 'Ado Ekiti', 'Sagamu', '00000000003'),
(00000000185, 'Ado Ekiti', 'Sokoto', '00000000004'),
(00000000186, 'Ado Ekiti', 'Suleja', '00000000004'),
(00000000187, 'Ado Ekiti', 'Umuahia', '00000000004'),
(00000000188, 'Ado Ekiti', 'Uyo', '00000000004'),
(00000000189, 'Ado Ekiti', 'Warri', '00000000004'),
(00000000190, 'Ado Ekiti', 'Yenogoa', '00000000004'),
(00000000191, 'Ado Ekiti', 'Yola', '00000000004'),
(00000000192, 'Ado Ekiti', 'Zaria', '00000000004'),
(00000000193, 'Abakaliki', 'Abuja', '00000000002'),
(00000000194, 'Abakaliki', 'Abeokuta', '00000000004'),
(00000000195, 'Abakaliki', 'Ado ekiti', '00000000004'),
(00000000196, 'Abakaliki', 'Abakaliki', '00000000001'),
(00000000197, 'Abakaliki', 'Akure', '00000000004'),
(00000000198, 'Abakaliki', 'Asaba', '00000000002'),
(00000000199, 'Abakaliki', 'Awka', '00000000002'),
(00000000200, 'Abakaliki', 'Bauchi', '00000000004'),
(00000000201, 'Abakaliki', 'Birnin kebbi', '00000000004'),
(00000000202, 'Abakaliki', 'Benin', '00000000003'),
(00000000203, 'Abakaliki', 'Bonny', '00000000003'),
(00000000204, 'Abakaliki', 'Calabar', '00000000002'),
(00000000205, 'Abakaliki', 'Damaturu', '00000000004'),
(00000000206, 'Abakaliki', 'Dutse', '00000000004'),
(00000000207, 'Abakaliki', 'Eket', '00000000003'),
(00000000208, 'Abakaliki', 'Enugu', '00000000002'),
(00000000209, 'Abakaliki', 'Gombe', '00000000004'),
(00000000210, 'Abakaliki', 'Gusua', '00000000004'),
(00000000211, 'Abakaliki', 'Ibadan', '00000000004'),
(00000000212, 'Abakaliki', 'Ife', '00000000004'),
(00000000213, 'Abakaliki', 'Ijebu ode', '00000000004'),
(00000000214, 'Abakaliki', 'Illorin', '00000000004'),
(00000000215, 'Abakaliki', 'Jalingo', '00000000004'),
(00000000216, 'Abakaliki', 'Jos', '00000000004'),
(00000000217, 'Abakaliki', 'Kaduna', '00000000004'),
(00000000218, 'Abakaliki', 'Kano', '00000000004'),
(00000000219, 'Abakaliki', 'Kastina', '00000000004'),
(00000000220, 'Abakaliki', 'Lafia', '00000000004'),
(00000000221, 'Abakaliki', 'Lokoja', '00000000004'),
(00000000222, 'Abakaliki', 'Lagos', '00000000004'),
(00000000223, 'Abakaliki', 'Maiduguri', '00000000004'),
(00000000224, 'Abakaliki', 'Makurdi', '00000000004'),
(00000000225, 'Abakaliki', 'Minna', '00000000004'),
(00000000226, 'Abakaliki', 'Nnewi', '00000000002'),
(00000000227, 'Abakaliki', 'Nsukka', '00000000002'),
(00000000228, 'Abakaliki', 'Offa', '00000000004'),
(00000000229, 'Abakaliki', 'Onitsha', '00000000002'),
(00000000230, 'Abakaliki', 'Owerri', '00000000002'),
(00000000231, 'Abakaliki', 'Osogbo', '00000000004'),
(00000000232, 'Abakaliki', 'Port harcourt', '00000000003'),
(00000000233, 'Abakaliki', 'Sapele', '00000000003'),
(00000000234, 'Abakaliki', 'Sagamu', '00000000004'),
(00000000235, 'Abakaliki', 'Sokoto', '00000000004'),
(00000000236, 'Abakaliki', 'Suleja', '00000000004'),
(00000000237, 'Abakaliki', 'Umuahia', '00000000002'),
(00000000238, 'Abakaliki', 'Uyo', '00000000003'),
(00000000239, 'Abakaliki', 'Warri', '00000000003'),
(00000000240, 'Abakaliki', 'Yenogoa', '00000000003'),
(00000000241, 'Abakaliki', 'Yola', '00000000004'),
(00000000242, 'Abakaliki', 'Zaria', '00000000004'),
(00000000243, 'Akure', 'Abuja', '00000000004'),
(00000000244, 'Akure', 'Abeokuta', '00000000003'),
(00000000245, 'Akure', 'Ado ekiti', '00000000002'),
(00000000246, 'Akure', 'Abakaliki', '00000000004'),
(00000000247, 'Akure', 'Akure', '00000000001'),
(00000000248, 'Akure', 'Asaba', '00000000004'),
(00000000249, 'Akure', 'Awka', '00000000004'),
(00000000250, 'Akure', 'Bauchi', '00000000004'),
(00000000251, 'Akure', 'Birnin kebbi', '00000000004'),
(00000000252, 'Akure', 'Benin', '00000000003'),
(00000000253, 'Akure', 'Bonny', '00000000004'),
(00000000254, 'Akure', 'Calabar', '00000000004'),
(00000000255, 'Akure', 'Damaturu', '00000000004'),
(00000000256, 'Akure', 'Dutse', '00000000004'),
(00000000257, 'Akure', 'Eket', '00000000004'),
(00000000258, 'Akure', 'Enugu', '00000000004'),
(00000000259, 'Akure', 'Gombe', '00000000004'),
(00000000260, 'Akure', 'Gusua', '00000000004'),
(00000000261, 'Akure', 'Ibadan', '00000000002'),
(00000000262, 'Akure', 'Ife', '00000000002'),
(00000000263, 'Akure', 'Ijebu ode', '00000000003'),
(00000000264, 'Akure', 'Illorin', '00000000003'),
(00000000265, 'Akure', 'Jalingo', '00000000004'),
(00000000266, 'Akure', 'Jos', '00000000004'),
(00000000267, 'Akure', 'Kaduna', '00000000004'),
(00000000268, 'Akure', 'Kano', '00000000004'),
(00000000269, 'Akure', 'Kastina', '00000000004'),
(00000000270, 'Akure', 'Lafia', '00000000004'),
(00000000271, 'Akure', 'Lokoja', '00000000004'),
(00000000272, 'Akure', 'Lagos', '00000000003'),
(00000000273, 'Akure', 'Maiduguri', '00000000004'),
(00000000274, 'Akure', 'Makurdi', '00000000004'),
(00000000275, 'Akure', 'Minna', '00000000004'),
(00000000276, 'Akure', 'Nnewi', '00000000004'),
(00000000277, 'Akure', 'Nsukka', '00000000004'),
(00000000278, 'Akure', 'Offa', '00000000003'),
(00000000279, 'Akure', 'Onitsha', '00000000004'),
(00000000280, 'Akure', 'Owerri', '00000000004'),
(00000000281, 'Akure', 'Osogbo', '00000000002'),
(00000000282, 'Akure', 'Port harcourt', '00000000004'),
(00000000283, 'Akure', 'Sapele', '00000000004'),
(00000000284, 'Akure', 'Sagamu', '00000000003'),
(00000000285, 'Akure', 'Sokoto', '00000000004'),
(00000000286, 'Akure', 'Suleja', '00000000004'),
(00000000287, 'Akure', 'Umuahia', '00000000004'),
(00000000288, 'Akure', 'Uyo', '00000000004'),
(00000000289, 'Akure', 'Warri', '00000000003'),
(00000000290, 'Akure', 'Yenogoa', '00000000004'),
(00000000291, 'Akure', 'Yola', '00000000004'),
(00000000292, 'Akure', 'Zaria', '00000000004'),
(00000000293, 'Asaba', 'Abuja', '00000000002'),
(00000000294, 'Asaba', 'Abeokuta', '00000000004'),
(00000000295, 'Asaba', 'Ado ekiti', '00000000004'),
(00000000296, 'Asaba', 'Abakaliki', '00000000002'),
(00000000297, 'Asaba', 'Akure', '00000000004'),
(00000000298, 'Asaba', 'Asaba', '00000000001'),
(00000000299, 'Asaba', 'Awka', '00000000002'),
(00000000300, 'Asaba', 'Bauchi', '00000000004'),
(00000000301, 'Asaba', 'Birnin kebbi', '00000000004'),
(00000000302, 'Asaba', 'Benin', '00000000002'),
(00000000303, 'Asaba', 'Bonny', '00000000003'),
(00000000304, 'Asaba', 'Calabar', '00000000003'),
(00000000305, 'Asaba', 'Damaturu', '00000000004'),
(00000000306, 'Asaba', 'Dutse', '00000000004'),
(00000000307, 'Asaba', 'Eket', '00000000003'),
(00000000308, 'Asaba', 'Enugu', '00000000002'),
(00000000309, 'Asaba', 'Gombe', '00000000004'),
(00000000310, 'Asaba', 'Gusua', '00000000004'),
(00000000311, 'Asaba', 'Ibadan', '00000000004'),
(00000000312, 'Asaba', 'Ife', '00000000004'),
(00000000313, 'Asaba', 'Ijebu ode', '00000000004'),
(00000000314, 'Asaba', 'Illorin', '00000000004'),
(00000000315, 'Asaba', 'Jalingo', '00000000004'),
(00000000316, 'Asaba', 'Jos', '00000000004'),
(00000000317, 'Asaba', 'Kaduna', '00000000004'),
(00000000318, 'Asaba', 'Kano', '00000000004'),
(00000000319, 'Asaba', 'Kastina', '00000000004'),
(00000000320, 'Asaba', 'Lafia', '00000000004'),
(00000000321, 'Asaba', 'Lokoja', '00000000004'),
(00000000322, 'Asaba', 'Lagos', '00000000003'),
(00000000323, 'Asaba', 'Maiduguri', '00000000004'),
(00000000324, 'Asaba', 'Makurdi', '00000000004'),
(00000000325, 'Asaba', 'Minna', '00000000004'),
(00000000326, 'Asaba', 'Nnewi', '00000000002'),
(00000000327, 'Asaba', 'Nsukka', '00000000002'),
(00000000328, 'Asaba', 'Offa', '00000000004'),
(00000000329, 'Asaba', 'Onitsha', '00000000002'),
(00000000330, 'Asaba', 'Owerri', '00000000002'),
(00000000331, 'Asaba', 'Osogbo', '00000000004'),
(00000000332, 'Asaba', 'Port harcourt', '00000000003'),
(00000000333, 'Asaba', 'Sapele', '00000000002'),
(00000000334, 'Asabas', 'Sagamu', '00000000004'),
(00000000335, 'Asaba', 'Sokoto', '00000000004'),
(00000000336, 'Asaba', 'Suleja', '00000000004'),
(00000000337, 'Asaba', 'Umuahia', '00000000003'),
(00000000338, 'Asaba', 'Uyo', '00000000003'),
(00000000339, 'Asaba', 'Warri', '00000000002'),
(00000000340, 'Asaba', 'Yenogoa', '00000000003'),
(00000000341, 'Asaba', 'Yola', '00000000004'),
(00000000342, 'Asaba', 'Zaria', '00000000004'),
(00000000343, 'Awka', 'Abia', '00000000002'),
(00000000344, 'Awka', 'Abeokuta', '00000000004'),
(00000000345, 'Awka', 'Abuja', '00000000004'),
(00000000346, 'Awka', 'Ado ekiti', '00000000004'),
(00000000347, 'Awka', 'Abakaliki', '00000000002'),
(00000000348, 'Abia', 'Abia', '00000000001'),
(00000000349, 'Abia', 'Abuja', '00000000003'),
(00000000350, 'Abia', 'Abeokuta', '00000000004'),
(00000000351, 'Abia', 'Ado ekiti', '00000000004'),
(00000000352, 'Abia', 'Abakaliki', '00000000002'),
(00000000353, 'Abia', 'Akure', '00000000004'),
(00000000354, 'Abia', 'Asaba', '00000000002'),
(00000000355, 'Abia', 'Awka', '00000000002'),
(00000000356, 'Abia', 'Bauchi', '00000000003'),
(00000000357, 'Abia', 'Birnin kebbi', '00000000003'),
(00000000358, 'Abia', 'Benin', '00000000003'),
(00000000359, 'Abia', 'Bonny', '00000000004'),
(00000000360, 'Abia', 'Calabar', '00000000003'),
(00000000361, 'Abia', 'Damaturu', '00000000003'),
(00000000362, 'Abia', 'Dutse', '00000000003'),
(00000000363, 'Abia', 'Eket', '00000000002'),
(00000000364, 'Abia', 'Enugu', '00000000002'),
(00000000365, 'Abia', 'Gombe', '00000000004'),
(00000000366, 'Abia', 'Gusua', '00000000004'),
(00000000367, 'Abia', 'Ibadan', '00000000004'),
(00000000368, 'Abia', 'Ife', '00000000004'),
(00000000369, 'Abia', 'Ijebu ode', '00000000004'),
(00000000370, 'Abia', 'Illorin', '00000000004'),
(00000000371, 'Abia', 'Jalingo', '00000000004'),
(00000000372, 'Abia', 'Jos', '00000000004'),
(00000000373, 'Abia', 'Kaduna', '00000000004'),
(00000000374, 'Abia', 'Kano', '00000000004'),
(00000000375, 'Abia', 'Kastina', '00000000004'),
(00000000376, 'Abia', 'Lafia', '00000000004'),
(00000000377, 'Abia', 'Lokoja', '00000000004'),
(00000000378, 'Abia', 'Lagos', '00000000003'),
(00000000379, 'Abia', 'Maiduguri', '00000000004'),
(00000000380, 'Abia', 'Makurdi', '00000000004'),
(00000000381, 'Abia', 'Minna', '00000000004'),
(00000000382, 'Abia', 'Nnewi', '00000000002'),
(00000000383, 'Abia', 'Nsukka', '00000000002'),
(00000000384, 'Abia', 'Offa', '00000000004'),
(00000000385, 'Abia', 'Onitsha', '00000000002'),
(00000000386, 'Abia', 'Owerri', '00000000002'),
(00000000387, 'Abia', 'Osogbo', '00000000004'),
(00000000388, 'Abia', 'Port harcourt', '00000000003'),
(00000000389, 'Abia', 'Sapele', '00000000004'),
(00000000390, 'Abia', 'Sagamu', '00000000004'),
(00000000391, 'Abia', 'Sokoto', '00000000004'),
(00000000392, 'Abia', 'Suleja', '00000000004'),
(00000000393, 'Abia', 'Umuahia', '00000000002'),
(00000000394, 'Abia', 'Uyo', '00000000002'),
(00000000395, 'Abia', 'Warri', '00000000003'),
(00000000396, 'Abia', 'Yenogoa', '00000000004'),
(00000000397, 'Abia', 'Yola', '00000000004'),
(00000000398, 'Abia', 'Zaria', '00000000004'),
(00000000399, 'Abuja', 'Abia', '00000000003'),
(00000000400, 'Abeokuta', 'Abia', '00000000004'),
(00000000401, 'Ado Ekiti', 'Abia', '00000000004'),
(00000000402, 'Abakaliki', 'Abia', '00000000002'),
(00000000403, 'Akure', 'Abia', '00000000004'),
(00000000404, 'Asaba', 'Abia', '00000000002'),
(00000000405, 'Awka', 'Akure', '00000000004'),
(00000000406, 'Awka', 'Asaba', '00000000002'),
(00000000407, 'Awka', 'Awka', '00000000001'),
(00000000408, 'Awka', 'Bauchi', '00000000004'),
(00000000409, 'Awka', 'Birnin kebbi', '00000000004'),
(00000000410, 'Awka', 'Benin', '00000000002'),
(00000000411, 'Awka', 'Bonny', '00000000003'),
(00000000412, 'Awka', 'Calabar', '00000000003'),
(00000000413, 'Awka', 'Damaturu', '00000000004'),
(00000000414, 'Awka', 'Dutse', '00000000004'),
(00000000415, 'Awka', 'Eket', '00000000003'),
(00000000416, 'Awka', 'Enugu', '00000000002'),
(00000000417, 'Awka', 'Gombe', '00000000004'),
(00000000418, 'Awka', 'Gusua', '00000000004'),
(00000000419, 'Awka', 'Ibadan', '00000000004'),
(00000000420, 'Awka', 'Ife', '00000000004'),
(00000000421, 'Awka', 'Ijebu ode', '00000000004'),
(00000000422, 'Awka', 'Illorin', '00000000004'),
(00000000423, 'Awka', 'Jalingo', '00000000004'),
(00000000424, 'Awka', 'Jos', '00000000004'),
(00000000425, 'Awka', 'Kaduna', '00000000004'),
(00000000426, 'Awka', 'Kano', '00000000004'),
(00000000427, 'Awka', 'Kastina', '00000000004'),
(00000000428, 'Awka', 'Lafia', '00000000004'),
(00000000429, 'Awka', 'Lokoja', '00000000003'),
(00000000430, 'Awka', 'Lagos', '00000000003'),
(00000000431, 'Awka', 'Maiduguri', '00000000004'),
(00000000432, 'Awka', 'Makurdi', '00000000004'),
(00000000433, 'Awka', 'Minna', '00000000004'),
(00000000434, 'Awka', 'Nnewi', '00000000002'),
(00000000435, 'Awka', 'Nsukka', '00000000002'),
(00000000436, 'Awka', 'Offa', '00000000004'),
(00000000437, 'Awka', 'Onitsha', '00000000002'),
(00000000438, 'Awka', 'Owerri', '00000000002'),
(00000000439, 'Awka', 'Osogbo', '00000000004'),
(00000000440, 'Awka', 'Port harcourt', '00000000003'),
(00000000441, 'Awka', 'Sapele', '00000000002'),
(00000000442, 'Awka', 'Sagamu', '00000000004'),
(00000000443, 'Awka', 'Sokoto', '00000000004'),
(00000000444, 'Awka', 'Suleja', '00000000004'),
(00000000445, 'Awka', 'Umuahia', '00000000002'),
(00000000446, 'Awka', 'Uyo', '00000000003'),
(00000000447, 'Awka', 'Warri', '00000000002'),
(00000000448, 'Awka', 'Yenogoa', '00000000003'),
(00000000449, 'Awka', 'Yola', '00000000004'),
(00000000450, 'Awka', 'Zaria', '00000000004'),
(00000000451, 'Bauchi', 'Abia', '00000000004'),
(00000000452, 'Bauchi', 'Abeokuta', '00000000004'),
(00000000453, 'Bauchi', 'Abuja', '00000000003'),
(00000000454, 'Bauchi', 'Ado ekiti', '00000000004'),
(00000000455, 'Bauchi', 'Abakaliki', '00000000004'),
(00000000456, 'Bauchi', 'Akure', '00000000004'),
(00000000457, 'Bauchi', 'Asaba', '00000000004'),
(00000000458, 'Bauchi', 'Awka', '00000000004'),
(00000000459, 'Bauchi', 'Bauchi', '00000000001'),
(00000000460, 'Bauchi', 'Birnin kebbi', '00000000003'),
(00000000461, 'Bauchi', 'Benin', '00000000004'),
(00000000462, 'Bauchi', 'Bonny', '00000000004'),
(00000000463, 'Bauchi', 'Calabar', '00000000004'),
(00000000464, 'Bauchi', 'Damaturu', '00000000003'),
(00000000465, 'Bauchi', 'Dutse', '00000000003'),
(00000000466, 'Bauchi', 'Eket', '00000000004'),
(00000000467, 'Bauchi', 'Enugu', '00000000004'),
(00000000468, 'Bauchi', 'Gombe', '00000000002'),
(00000000469, 'Bauchi', 'Gusua', '00000000003'),
(00000000470, 'Bauchi', 'Ibadan', '00000000004'),
(00000000471, 'Bauchi', 'Ife', '00000000004'),
(00000000472, 'Bauchi', 'Ijebu ode', '00000000004'),
(00000000473, 'Bauchi', 'Illorin', '00000000004'),
(00000000474, 'Bauchi', 'Jalingo', '00000000003'),
(00000000475, 'Bauchi', 'Jos', '00000000002'),
(00000000476, 'Bauchi', 'Kaduna', '00000000002'),
(00000000477, 'Bauchi', 'Kano', '00000000003'),
(00000000478, 'Bauchi', 'Kastina', '00000000003'),
(00000000479, 'Bauchi', 'Lafia', '00000000003'),
(00000000480, 'Bauchi', 'Lokoja', '00000000003'),
(00000000481, 'Bauchi', 'Lagos', '00000000004'),
(00000000482, 'Bauchi', 'Maiduguri', '00000000003'),
(00000000483, 'Bauchi', 'Makurdi', '00000000003'),
(00000000484, 'Bauchi', 'Minna', '00000000003'),
(00000000485, 'Bauchi', 'Nnewi', '00000000004'),
(00000000486, 'Bauchi', 'Nsukka', '00000000004'),
(00000000487, 'Bauchi', 'Offa', '00000000004'),
(00000000488, 'Bauchi', 'Onitsha', '00000000004'),
(00000000489, 'Bauchi', 'Owerri', '00000000004'),
(00000000490, 'Bauchi', 'Osogbo', '00000000004'),
(00000000491, 'Bauchi', 'Port harcourt', '00000000004'),
(00000000492, 'Bauchi', 'Sapele', '00000000004'),
(00000000493, 'Bauchi', 'Sagamu', '00000000004'),
(00000000494, 'Bauchi', 'Sokoto', '00000000003'),
(00000000495, 'Bauchi', 'Suleja', '00000000003'),
(00000000496, 'Bauchi', 'Umuahia', '00000000004'),
(00000000497, 'Bauchi', 'Uyo', '00000000004'),
(00000000498, 'Bauchi', 'Warri', '00000000004'),
(00000000499, 'Bauchi', 'Yenogoa', '00000000004'),
(00000000500, 'Bauchi', 'Yola', '00000000003'),
(00000000501, 'Bauchi', 'Zaria', '00000000003'),
(00000000502, 'Birnin kebbi', 'Abia', '00000000004'),
(00000000503, 'Birnin kebbi', 'Abeokuta', '00000000004'),
(00000000504, 'Birnin kebbi', 'Abuja', '00000000003'),
(00000000505, 'Birnin kebbi', 'Ado ekiti', '00000000004'),
(00000000506, 'Birnin kebbi', 'Abakaliki', '00000000004'),
(00000000507, 'Birnin kebbi', 'Akure', '00000000004'),
(00000000508, 'Birnin kebbi', 'Asaba', '00000000004'),
(00000000509, 'Birnin kebbi', 'Awka', '00000000004'),
(00000000510, 'Birnin kebbi', 'Bauchi', '00000000003'),
(00000000511, 'Birnin kebbi', 'Birnin kebbi', '00000000001'),
(00000000512, 'Birnin kebbi', 'Benin', '00000000004'),
(00000000513, 'Birnin kebbi', 'Bonny', '00000000004'),
(00000000514, 'Birnin kebbi', 'Calabar', '00000000004'),
(00000000515, 'Birnin kebbi', 'Damaturu', '00000000003'),
(00000000516, 'Birnin kebbi', 'Dutse', '00000000003'),
(00000000517, 'Birnin kebbi', 'Eket', '00000000004'),
(00000000518, 'Birnin kebbi', 'Enugu', '00000000004'),
(00000000519, 'Birnin kebbi', 'Gombe', '00000000003'),
(00000000520, 'Birnin kebbi', 'Gusua', '00000000002'),
(00000000521, 'Birnin kebbi', 'Ibadan', '00000000004'),
(00000000522, 'Birnin kebbi', 'Ife', '00000000004'),
(00000000523, 'Birnin kebbi', 'Ijebu ode', '00000000004'),
(00000000524, 'Birnin kebbi', 'Illorin', '00000000004'),
(00000000525, 'Birnin kebbi', 'Jalingo', '00000000003'),
(00000000526, 'Birnin kebbi', 'Jos', '00000000003'),
(00000000527, 'Birnin kebbi', 'Kaduna', '00000000002'),
(00000000528, 'Birnin kebbi', 'Kano', '00000000003'),
(00000000529, 'Birnin kebbi', 'Kastina', '00000000003'),
(00000000530, 'Birnin kebbi', 'Lafia', '00000000003'),
(00000000531, 'Birnin kebbi', 'Lokoja', '00000000003'),
(00000000532, 'Birnin kebbi', 'Lagos', '00000000004'),
(00000000533, 'Birnin kebbi', 'Maiduguri', '00000000003'),
(00000000534, 'Birnin kebbi', 'Makurdi', '00000000003'),
(00000000535, 'Birnin kebbi', 'Minna', '00000000003'),
(00000000536, 'Birnin kebbi', 'Nnewi', '00000000004'),
(00000000537, 'Birnin kebbi', 'Nsukka', '00000000004'),
(00000000538, 'Birnin kebbi', 'Offa', '00000000004'),
(00000000539, 'Birnin kebbi', 'Onitsha', '00000000004'),
(00000000540, 'Birnin kebbi', 'Owerri', '00000000004'),
(00000000541, 'Birnin kebbi', 'Osogbo', '00000000004'),
(00000000542, 'Birnin kebbi', 'Port harcourt', '00000000004'),
(00000000543, 'Birnin kebbi', 'Sapele', '00000000004'),
(00000000544, 'Birnin kebbi', 'Sagamu', '00000000004'),
(00000000545, 'Birnin kebbi', 'Sokoto', '00000000002'),
(00000000546, 'Birnin kebbi', 'Suleja', '00000000003'),
(00000000547, 'Birnin kebbi', 'Umuahia', '00000000004'),
(00000000548, 'Birnin kebbi', 'Uyo', '00000000004'),
(00000000549, 'Birnin kebbi', 'Warri', '00000000004'),
(00000000550, 'Birnin kebbi', 'Yenogoa', '00000000004'),
(00000000551, 'Birnin kebbi', 'Zaria', '00000000003'),
(00000000552, 'Birnin kebbi', 'Yola', '00000000003'),
(00000000553, 'Benin', 'Abia', '00000000003'),
(00000000554, 'Benin', 'Abeokuta', '00000000003'),
(00000000555, 'Benin', 'Abuja', '00000000004'),
(00000000556, 'Benin', 'Ado ekiti', '00000000003'),
(00000000557, 'Benin', 'Abakaliki', '00000000003'),
(00000000558, 'Benin', 'Akure', '00000000003'),
(00000000559, 'Benin', 'Asaba', '00000000002'),
(00000000560, 'Benin', 'Awka', '00000000002'),
(00000000561, 'Benin', 'Bauchi', '00000000004'),
(00000000562, 'Benin', 'Birnin kebbi', '00000000004'),
(00000000563, 'Benin', 'Benin', '00000000001'),
(00000000564, 'Benin', 'Bonny', '00000000003'),
(00000000565, 'Benin', 'Calabar', '00000000003'),
(00000000566, 'Benin', 'Damaturu', '00000000004'),
(00000000567, 'Benin', 'Dutse', '00000000004'),
(00000000568, 'Benin', 'Eket', '00000000003'),
(00000000569, 'Benin', 'Enugu', '00000000003'),
(00000000570, 'Benin', 'Gombe', '00000000004'),
(00000000571, 'Benin', 'Gusua', '00000000004'),
(00000000572, 'Benin', 'Ibadan', '00000000003'),
(00000000573, 'Benin', 'Ife', '00000000004'),
(00000000574, 'Benin', 'Ijebu ode', '00000000003'),
(00000000575, 'Benin', 'Illorin', '00000000004'),
(00000000576, 'Benin', 'Jalingo', '00000000004'),
(00000000577, 'Benin', 'Jos', '00000000004'),
(00000000578, 'Benin', 'Kaduna', '00000000004'),
(00000000579, 'Benin', 'Kano', '00000000004'),
(00000000580, 'Benin', 'Kastina', '00000000004'),
(00000000581, 'Benin', 'Lafia', '00000000004'),
(00000000582, 'Benin', 'Lokoja', '00000000004'),
(00000000583, 'Benin', 'Lagos', '00000000003'),
(00000000584, 'Benin', 'Maiduguri', '00000000004'),
(00000000585, 'Benin', 'Makurdi', '00000000004'),
(00000000586, 'Benin', 'Minna', '00000000004'),
(00000000587, 'Benin', 'Nnewi', '00000000002'),
(00000000588, 'Benin', 'Nsukka', '00000000003'),
(00000000589, 'Benin', 'Offa', '00000000004'),
(00000000590, 'Benin', 'Onitsha', '00000000002'),
(00000000591, 'Benin', 'Owerri', '00000000003'),
(00000000592, 'Benin', 'Osogbo', '00000000004'),
(00000000593, 'Benin', 'Port harcourt', '00000000003'),
(00000000594, 'Benin', 'Sapele', '00000000002'),
(00000000595, 'Benin', 'Sokoto', '00000000004'),
(00000000596, 'Benin', 'Sagamu', '00000000003'),
(00000000597, 'Benin', 'Suleja', '00000000004'),
(00000000598, 'Benin', 'Umuahia', '00000000003'),
(00000000599, 'Benin', 'Uyo', '00000000003'),
(00000000600, 'Benin', 'Warri', '00000000002'),
(00000000601, 'Benin', 'Yenogoa', '00000000003'),
(00000000602, 'Benin', 'Yola', '00000000004'),
(00000000603, 'Benin', 'Zaria', '00000000004'),
(00000000604, 'Bonny', 'Abia', '00000000003'),
(00000000605, 'Bonny', 'Abeokuta', '00000000004'),
(00000000606, 'Bonny', 'Abuja', '00000000004'),
(00000000607, 'Bonny', 'Ado ekiti', '00000000004'),
(00000000608, 'Bonny', 'Abakaliki', '00000000003'),
(00000000609, 'Bonny', 'Akure', '00000000004'),
(00000000610, 'Bonny', 'Asaba', '00000000003'),
(00000000611, 'Bonny', 'Awka', '00000000003'),
(00000000612, 'Bonny', 'Bauchi', '00000000004'),
(00000000613, 'Bonny', 'Birnin kebbi', '00000000004'),
(00000000614, 'Bonny', 'Benin', '00000000003'),
(00000000615, 'Bonny', 'Bonny', '00000000001'),
(00000000616, 'Bonny', 'Calabar', '00000000003'),
(00000000617, 'Bonny', 'Damaturu', '00000000004'),
(00000000618, 'Bonny', 'Dutse', '00000000004'),
(00000000619, 'Bonny', 'Eket', '00000000003'),
(00000000620, 'Bonny', 'Enugu', '00000000003'),
(00000000621, 'Bonny', 'Gombe', '00000000004'),
(00000000622, 'Bonny', 'Gusua', '00000000004'),
(00000000623, 'Bonny', 'Ibadan', '00000000004'),
(00000000624, 'Bonny', 'Ife', '00000000004'),
(00000000625, 'Bonny', 'Ijebu ode', '00000000004'),
(00000000626, 'Bonny', 'Illorin', '00000000004'),
(00000000627, 'Bonny', 'Jalingo', '00000000004'),
(00000000628, 'Bonny', 'Jos', '00000000004'),
(00000000629, 'Bonny', 'Kaduna', '00000000004'),
(00000000630, 'Bonny', 'Kano', '00000000004'),
(00000000631, 'Bonny', 'Kastina', '00000000004'),
(00000000632, 'Bonny', 'Lafia', '00000000004'),
(00000000633, 'Bonny', 'Lokoja', '00000000004'),
(00000000634, 'Bonny', 'Lagos', '00000000004'),
(00000000635, 'Bonny', 'Maiduguri', '00000000004'),
(00000000636, 'Bonny', 'Makurdi', '00000000004'),
(00000000637, 'Bonny', 'Minna', '00000000004'),
(00000000638, 'Bonny', 'Nnewi', '00000000003'),
(00000000639, 'Bonny', 'Nsukka', '00000000003'),
(00000000640, 'Bonny', 'Offa', '00000000004'),
(00000000641, 'Bonny', 'Onitsha', '00000000003'),
(00000000642, 'Bonny', 'Owerri', '00000000003'),
(00000000643, 'Bonny', 'Osogbo', '00000000004'),
(00000000644, 'Bonny', 'Port harcourt', '00000000002'),
(00000000645, 'Bonny', 'Sapele', '00000000003'),
(00000000646, 'Bonny', 'Sagamu', '00000000004'),
(00000000647, 'Bonny', 'Sokoto', '00000000004'),
(00000000648, 'Bonny', 'Suleja', '00000000004'),
(00000000649, 'Bonny', 'Umuahia', '00000000003'),
(00000000650, 'Bonny', 'Uyo', '00000000003'),
(00000000651, 'Bonny', 'Warri', '00000000003'),
(00000000652, 'Bonny', 'Yenogoa', '00000000002'),
(00000000653, 'Bonny', 'Yola', '00000000004'),
(00000000654, 'Bonny', 'Zaria', '00000000004'),
(00000000655, 'Calabar', 'Abia', '00000000003'),
(00000000656, 'Calabar', 'Abeokuta', '00000000004'),
(00000000657, 'Calabar', 'Abuja', '00000000004'),
(00000000658, 'Calabar', 'Ado ekiti', '00000000004'),
(00000000659, 'Calabar', 'Abakaliki', '00000000003'),
(00000000660, 'Calabar', 'Akure', '00000000004'),
(00000000661, 'Calabar', 'Asaba', '00000000003'),
(00000000662, 'Calabar', 'Awka', '00000000003'),
(00000000663, 'Calabar', 'Bauchi', '00000000004'),
(00000000664, 'Calabar', 'Birnin kebbi', '00000000004'),
(00000000665, 'Calabar', 'Benin', '00000000003'),
(00000000666, 'Calabar', 'Bonny', '00000000003'),
(00000000667, 'Calabar', 'Calabar', '00000000001'),
(00000000668, 'Calabar', 'Damaturu', '00000000004'),
(00000000669, 'Calabar', 'Dutse', '00000000004'),
(00000000670, 'Calabar', 'Eket', '00000000002'),
(00000000671, 'Calabar', 'Enugu', '00000000003'),
(00000000672, 'Calabar', 'Gombe', '00000000004'),
(00000000673, 'Calabar', 'Gusua', '00000000004'),
(00000000674, 'Calabar', 'Ibadan', '00000000004'),
(00000000675, 'Calabar', 'Ife', '00000000004'),
(00000000676, 'Calabar', 'Ijebu ode', '00000000004'),
(00000000677, 'Calabar', 'Illorin', '00000000004'),
(00000000678, 'Calabar', 'Jalingo', '00000000004'),
(00000000679, 'Calabar', 'Jos', '00000000004'),
(00000000680, 'Calabar', 'Kaduna', '00000000004'),
(00000000681, 'Calabar', 'Kano', '00000000004'),
(00000000682, 'Calabar', 'Kastina', '00000000004'),
(00000000683, 'Calabar', 'Lafia', '00000000004'),
(00000000684, 'Calabar', 'Lokoja', '00000000004'),
(00000000685, 'Calabar', 'Lagos', '00000000003'),
(00000000686, 'Calabar', 'Maiduguri', '00000000004'),
(00000000687, 'Calabar', 'Makurdi', '00000000004'),
(00000000688, 'Calabar', 'Minna', '00000000004'),
(00000000689, 'Calabar', 'Nnewi', '00000000003'),
(00000000690, 'Calabar', 'Nsukka', '00000000003'),
(00000000691, 'Calabar', 'Offa', '00000000004'),
(00000000692, 'Calabar', 'Onitsha', '00000000003'),
(00000000693, 'Calabar', 'Owerri', '00000000003'),
(00000000694, 'Calabar', 'Osogbo', '00000000004'),
(00000000695, 'Calabar', 'Port harcourt', '00000000002'),
(00000000696, 'Calabar', 'Sapele', '00000000003'),
(00000000697, 'Calabar', 'Sagamu', '00000000004'),
(00000000698, 'Calabar', 'Sokoto', '00000000004'),
(00000000699, 'Calabar', 'Suleja', '00000000004'),
(00000000700, 'Calabar', 'Umuahia', '00000000003'),
(00000000701, 'Calabar', 'Uyo', '00000000002'),
(00000000702, 'Calabar', 'Warri', '00000000003'),
(00000000703, 'Calabar', 'Yenogoa', '00000000003'),
(00000000704, 'Calabar', 'Yola', '00000000004'),
(00000000705, 'Calabar', 'Zaria', '00000000004'),
(00000000706, 'Damaturu', 'Abia', '00000000004'),
(00000000707, 'Damaturu', 'Abeokuta', '00000000004'),
(00000000708, 'Damaturu', 'Abuja', '00000000003'),
(00000000709, 'Damaturu', 'Ado ekiti', '00000000004'),
(00000000710, 'Damaturu', 'Abakaliki', '00000000004'),
(00000000711, 'Damaturu', 'Akure', '00000000004'),
(00000000712, 'Damaturu', 'Asaba', '00000000004'),
(00000000713, 'Damaturu', 'Awka', '00000000004'),
(00000000714, 'Damaturu', 'Bauchi', '00000000003'),
(00000000715, 'Damaturu', 'Birnin kebbi', '00000000003'),
(00000000716, 'Damaturu', 'Benin', '00000000004'),
(00000000717, 'Damaturu', 'Bonny', '00000000004'),
(00000000718, 'Damaturu', 'Calabar', '00000000004'),
(00000000719, 'Damaturu', 'Damaturu', '00000000001'),
(00000000720, 'Damaturu', 'Dutse', '00000000003'),
(00000000721, 'Damaturu', 'Eket', '00000000004'),
(00000000722, 'Damaturu', 'Enugu', '00000000004'),
(00000000723, 'Damaturu', 'Gombe', '00000000003'),
(00000000724, 'Damaturu', 'Gusua', '00000000003'),
(00000000725, 'Damaturu', 'Ibadan', '00000000004'),
(00000000726, 'Damaturu', 'Ife', '00000000004'),
(00000000727, 'Damaturu', 'Ijebu ode', '00000000004'),
(00000000728, 'Damaturu', 'Illorin', '00000000004'),
(00000000729, 'Damaturu', 'Jalingo', '00000000003'),
(00000000730, 'Damaturu', 'Jos', '00000000003'),
(00000000731, 'Damaturu', 'Kaduna', '00000000003'),
(00000000732, 'Damaturu', 'Kano', '00000000002'),
(00000000733, 'Damaturu', 'Kastina', '00000000003'),
(00000000734, 'Damaturu', 'Lafia', '00000000003'),
(00000000735, 'Damaturu', 'Lokoja', '00000000003'),
(00000000736, 'Damaturu', 'Lagos', '00000000004'),
(00000000737, 'Damaturu', 'Maiduguri', '00000000003'),
(00000000738, 'Damaturu', 'Makurdi', '00000000002'),
(00000000739, 'Damaturu', 'Minna', '00000000003'),
(00000000740, 'Damaturu', 'Nnewi', '00000000004'),
(00000000741, 'Damaturu', 'Nsukka', '00000000004'),
(00000000742, 'Damaturu', 'Offa', '00000000004'),
(00000000743, 'Damaturu', 'Onitsha', '00000000004'),
(00000000744, 'Damaturu', 'Owerri', '00000000004'),
(00000000745, 'Damaturu', 'Osogbo', '00000000004'),
(00000000746, 'Damaturu', 'Port harcourt', '00000000004'),
(00000000747, 'Damaturu', 'Sapele', '00000000004'),
(00000000748, 'Damaturu', 'Sagamu', '00000000004'),
(00000000749, 'Damaturu', 'Sokoto', '00000000003'),
(00000000750, 'Damaturu', 'Suleja', '00000000003'),
(00000000751, 'Damaturu', 'Umuahia', '00000000004'),
(00000000752, 'Damaturu', 'Uyo', '00000000004'),
(00000000753, 'Damaturu', 'Warri', '00000000004'),
(00000000754, 'Damaturu', 'Yenogoa', '00000000004'),
(00000000755, 'Damaturu', 'Yola', '00000000003'),
(00000000756, 'Damaturu', 'Zaria', '00000000003'),
(00000000757, 'Dutse', 'Abia', '00000000004'),
(00000000758, 'Dutse', 'Abeokuta', '00000000004'),
(00000000759, 'Dutse', 'Abuja', '00000000003'),
(00000000760, 'Dutse', 'Ado ekiti', '00000000004'),
(00000000761, 'Dutse', 'Abakaliki', '00000000004'),
(00000000762, 'Dutse', 'Akure', '00000000004'),
(00000000763, 'Dutse', 'Asaba', '00000000004'),
(00000000764, 'Dutse', 'Awka', '00000000004'),
(00000000765, 'Dutse', 'Bauchi', '00000000003'),
(00000000766, 'Dutse', 'Birnin kebbi', '00000000003'),
(00000000767, 'Dutse', 'Benin', '00000000004'),
(00000000768, 'Dutse', 'Bonny', '00000000004'),
(00000000769, 'Dutse', 'Calabar', '00000000004'),
(00000000770, 'Dutse', 'Damaturu', '00000000003'),
(00000000771, 'Dutse', 'Dutse', '00000000001'),
(00000000772, 'Dutse', 'Eket', '00000000004'),
(00000000773, 'Dutse', 'Enugu', '00000000004'),
(00000000774, 'Dutse', 'Gombe', '00000000003'),
(00000000775, 'Dutse', 'Gusua', '00000000003'),
(00000000776, 'Dutse', 'Ibadan', '00000000004'),
(00000000777, 'Dutse', 'Ife', '00000000004'),
(00000000778, 'Dutse', 'Ijebu ode', '00000000004'),
(00000000779, 'Dutse', 'Illorin', '00000000004'),
(00000000780, 'Dutse', 'Jalingo', '00000000003'),
(00000000781, 'Dutse', 'Jos', '00000000003'),
(00000000782, 'Dutse', 'Kaduna', '00000000002'),
(00000000783, 'Dutse', 'Kano', '00000000002'),
(00000000784, 'Dutse', 'Kastina', '00000000002'),
(00000000785, 'Dutse', 'Lafia', '00000000003'),
(00000000786, 'Dutse', 'Lokoja', '00000000003'),
(00000000787, 'Dutse', 'Lagos', '00000000004'),
(00000000788, 'Dutse', 'Maiduguri', '00000000003'),
(00000000789, 'Dutse', 'Makurdi', '00000000003'),
(00000000790, 'Dutse', 'Minna', '00000000003'),
(00000000791, 'Dutse', 'Nnewi', '00000000004'),
(00000000792, 'Dutse', 'Nsukka', '00000000004'),
(00000000793, 'Dutse', 'Offa', '00000000004'),
(00000000794, 'Dutse', 'Onitsha', '00000000004'),
(00000000795, 'Dutse', 'Owerri', '00000000004'),
(00000000796, 'Dutse', 'Osogbo', '00000000004'),
(00000000797, 'Dutse', 'Port harcourt', '00000000004'),
(00000000798, 'Dutse', 'Sapele', '00000000004'),
(00000000799, 'Dutse', 'Sagamu', '00000000004'),
(00000000800, 'Dutse', 'Sokoto', '00000000003'),
(00000000801, 'Dutse', 'Suleja', '00000000003'),
(00000000802, 'Dutse', 'Umuahia', '00000000004'),
(00000000803, 'Dutse', 'Uyo', '00000000004'),
(00000000804, 'Dutse', 'Warri', '00000000004'),
(00000000805, 'Dutse', 'Yenogoa', '00000000004'),
(00000000806, 'Dutse', 'Yola', '00000000003'),
(00000000807, 'Dutse', 'Zaria', '00000000003'),
(00000000808, 'Lagos-Epe', 'Oshogbo', '00000000002'),
(00000000809, 'Eket', 'Abia', '00000000002'),
(00000000810, 'Eket', 'Abeokuta', '00000000004'),
(00000000811, 'Eket', 'Abuja', '00000000004'),
(00000000812, 'Eket', 'Ado ekiti', '00000000004'),
(00000000813, 'Eket', 'Abakaliki', '00000000003'),
(00000000814, 'Eket', 'Akure', '00000000004'),
(00000000815, 'Eket', 'Asaba', '00000000003'),
(00000000816, 'Eket', 'Awka', '00000000003'),
(00000000817, 'Eket', 'Bauchi', '00000000004'),
(00000000818, 'Eket', 'Birnin kebbi', '00000000004'),
(00000000819, 'Eket', 'Benin', '00000000003'),
(00000000820, 'Eket', 'Bonny', '00000000003'),
(00000000821, 'Eket', 'Calabar', '00000000002'),
(00000000822, 'Eket', 'Damaturu', '00000000004'),
(00000000823, 'Eket', 'Dutse', '00000000004'),
(00000000824, 'Eket', 'Eket', '00000000001'),
(00000000825, 'Eket', 'Enugu', '00000000003'),
(00000000826, 'Eket', 'Gombe', '00000000004'),
(00000000827, 'Eket', 'Gusua', '00000000004'),
(00000000828, 'Eket', 'Ibadan', '00000000004'),
(00000000829, 'Eket', 'Ife', '00000000004'),
(00000000830, 'Eket', 'Ijebu ode', '00000000004'),
(00000000831, 'Eket', 'Illorin', '00000000004'),
(00000000832, 'Eket', 'Jalingo', '00000000004'),
(00000000833, 'Eket', 'Jos', '00000000004'),
(00000000834, 'Eket', 'Kaduna', '00000000004'),
(00000000835, 'Eket', 'Kano', '00000000004'),
(00000000836, 'Eket', 'Kastina', '00000000004'),
(00000000837, 'Eket', 'Lafia', '00000000004'),
(00000000838, 'Eket', 'Lokoja', '00000000004'),
(00000000839, 'Eket', 'Lagos', '00000000003'),
(00000000840, 'Eket', 'Maiduguri', '00000000004'),
(00000000841, 'Eket', 'Makurdi', '00000000004'),
(00000000842, 'Eket', 'Minna', '00000000004'),
(00000000843, 'Eket', 'Nnewi', '00000000003'),
(00000000844, 'Eket', 'Nsukka', '00000000003'),
(00000000845, 'Eket', 'Offa', '00000000004'),
(00000000846, 'Eket', 'Onitsha', '00000000003'),
(00000000847, 'Eket', 'Owerri', '00000000003'),
(00000000848, 'Eket', 'Osogbo', '00000000004'),
(00000000849, 'Eket', 'Port harcourt', '00000000002'),
(00000000850, 'Eket', 'Sapele', '00000000003'),
(00000000851, 'Eket', 'Sagamu', '00000000004'),
(00000000852, 'Eket', 'Sokoto', '00000000004'),
(00000000853, 'Eket', 'Suleja', '00000000004'),
(00000000854, 'Eket', 'Umuahia', '00000000003'),
(00000000855, 'Eket', 'Uyo', '00000000002'),
(00000000856, 'Eket', 'Warri', '00000000003'),
(00000000857, 'Eket', 'Yenogoa', '00000000003'),
(00000000858, 'Eket', 'Yola', '00000000004'),
(00000000859, 'Eket', 'Zaria', '00000000004'),
(00000000860, 'Enugu', 'Abia', '00000000002'),
(00000000861, 'Enugu', 'Abeokuta', '00000000004'),
(00000000862, 'Enugu', 'Abuja', '00000000004'),
(00000000863, 'Enugu', 'Ado ekiti', '00000000004'),
(00000000864, 'Enugu', 'Abakaliki', '00000000002'),
(00000000865, 'Enugu', 'Akure', '00000000004'),
(00000000866, 'Enugu', 'Asaba', '00000000002'),
(00000000867, 'Enugu', 'Awka', '00000000002'),
(00000000868, 'Enugu', 'Bauchi', '00000000004'),
(00000000869, 'Enugu', 'Birnin kebbi', '00000000004'),
(00000000870, 'Enugu', 'Benin', '00000000003'),
(00000000871, 'Enugu', 'Bonny', '00000000003'),
(00000000872, 'Enugu', 'Calabar', '00000000003'),
(00000000873, 'Enugu', 'Damaturu', '00000000004'),
(00000000874, 'Enugu', 'Dutse', '00000000004'),
(00000000875, 'Enugu', 'Eket', '00000000003'),
(00000000876, 'Enugu', 'Enugu', '00000000001'),
(00000000877, 'Enugu', 'Gombe', '00000000004'),
(00000000878, 'Enugu', 'Gusua', '00000000004'),
(00000000879, 'Enugu', 'Ibadan', '00000000004'),
(00000000880, 'Enugu', 'Ife', '00000000004'),
(00000000881, 'Enugu', 'Ijebu ode', '00000000004'),
(00000000882, 'Enugu', 'Illorin', '00000000004'),
(00000000883, 'Enugu', 'Jalingo', '00000000004'),
(00000000884, 'Enugu', 'Jos', '00000000004'),
(00000000885, 'Enugu', 'Kaduna', '00000000004'),
(00000000886, 'Enugu', 'Kano', '00000000004'),
(00000000887, 'Enugu', 'Kastina', '00000000004'),
(00000000888, 'Enugu', 'Lafia', '00000000004'),
(00000000889, 'Enugu', 'Lokoja', '00000000004'),
(00000000890, 'Enugu', 'Lagos', '00000000003'),
(00000000891, 'Enugu', 'Maiduguri', '00000000004'),
(00000000892, 'Enugu', 'Makurdi', '00000000004'),
(00000000893, 'Enugu', 'Minna', '00000000004'),
(00000000894, 'Enugu', 'Nnewi', '00000000002'),
(00000000895, 'Enugu', 'Nsukka', '00000000002'),
(00000000896, 'Enugu', 'Offa', '00000000004'),
(00000000897, 'Enugu', 'Onitsha', '00000000002'),
(00000000898, 'Enugu', 'Owerri', '00000000002'),
(00000000899, 'Enugu', 'Osogbo', '00000000004'),
(00000000900, 'Enugu', 'Port harcourt', '00000000003'),
(00000000901, 'Enugu', 'Sapele', '00000000003'),
(00000000902, 'Enugu', 'Sagamu', '00000000004'),
(00000000903, 'Enugu', 'Sokoto', '00000000004'),
(00000000904, 'Enugu', 'Suleja', '00000000004'),
(00000000905, 'Enugu', 'Umuahia', '00000000002'),
(00000000906, 'Enugu', 'Uyo', '00000000003'),
(00000000907, 'Enugu', 'Warri', '00000000003'),
(00000000908, 'Enugu', 'Yenogoa', '00000000003'),
(00000000909, 'Enugu', 'Yola', '00000000004'),
(00000000910, 'Enugu', 'Zaria', '00000000004'),
(00000000911, 'Gombe', 'Abia', '00000000004'),
(00000000912, 'Gombe', 'Abeokuta', '00000000004'),
(00000000913, 'Gombe', 'Abuja', '00000000003'),
(00000000914, 'Gombe', 'Ado ekiti', '00000000004'),
(00000000915, 'Gombe', 'Abakaliki', '00000000004'),
(00000000916, 'Gombe', 'Akure', '00000000004'),
(00000000917, 'Gombe', 'Asaba', '00000000004'),
(00000000918, 'Gombe', 'Awka', '00000000004'),
(00000000919, 'Gombe', 'Bauchi', '00000000002'),
(00000000920, 'Gombe', 'Birnin kebbi', '00000000003'),
(00000000921, 'Gombe', 'Benin', '00000000004'),
(00000000922, 'Gombe', 'Bonny', '00000000004'),
(00000000923, 'Gombe', 'Calabar', '00000000004'),
(00000000924, 'Gombe', 'Damaturu', '00000000003'),
(00000000925, 'Gombe', 'Dutse', '00000000003'),
(00000000926, 'Gombe', 'Eket', '00000000004'),
(00000000927, 'Gombe', 'Enugu', '00000000004'),
(00000000928, 'Gombe', 'Gombe', '00000000001'),
(00000000929, 'Gombe', 'Gusua', '00000000003'),
(00000000930, 'Gombe', 'Ibadan', '00000000004'),
(00000000931, 'Gombe', 'Ife', '00000000004'),
(00000000932, 'Gombe', 'Ijebu ode', '00000000004'),
(00000000933, 'Gombe', 'Illorin', '00000000004'),
(00000000934, 'Gombe', 'Jalingo', '00000000002'),
(00000000935, 'Gombe', 'Jos', '00000000002'),
(00000000936, 'Gombe', 'Kaduna', '00000000003'),
(00000000937, 'Gombe', 'Kano', '00000000003'),
(00000000938, 'Gombe', 'Kastina', '00000000003'),
(00000000939, 'Gombe', 'Lafia', '00000000003'),
(00000000940, 'Gombe', 'Lokoja', '00000000003'),
(00000000941, 'Gombe', 'Lagos', '00000000004'),
(00000000942, 'Gombe', 'Maiduguri', '00000000003'),
(00000000943, 'Gombe', 'Makurdi', '00000000003'),
(00000000944, 'Gombe', 'Minna', '00000000003'),
(00000000945, 'Gombe', 'Nnewi', '00000000004'),
(00000000946, 'Gombe', 'Nsukka', '00000000004'),
(00000000947, 'Gombe', 'Offa', '00000000004'),
(00000000948, 'Gombe', 'Onitsha', '00000000004'),
(00000000949, 'Gombe', 'Owerri', '00000000004'),
(00000000950, 'Gombe', 'Osogbo', '00000000004'),
(00000000951, 'Gombe', 'Port harcourt', '00000000004'),
(00000000952, 'Gombe', 'Sapele', '00000000004'),
(00000000953, 'Gombe', 'Sokoto', '00000000003'),
(00000000954, 'Gombe', 'Sagamu', '00000000004'),
(00000000955, 'Gombe', 'Suleja', '00000000003'),
(00000000956, 'Gombe', 'Umuahia', '00000000004'),
(00000000957, 'Gombe', 'Uyo', '00000000004'),
(00000000958, 'Gombe', 'Warri', '00000000004'),
(00000000959, 'Gombe', 'Yenogoa', '00000000004'),
(00000000960, 'Gombe', 'Yola', '00000000002'),
(00000000961, 'Gombe', 'Zaria', '00000000003'),
(00000000962, 'Gusua', 'Abia', '00000000004'),
(00000000963, 'Gusua', 'Abeokuta', '00000000004'),
(00000000964, 'Gusua', 'Abuja', '00000000003'),
(00000000965, 'Gusua', 'Ado ekiti', '00000000004'),
(00000000966, 'Gusua', 'Abakaliki', '00000000004'),
(00000000967, 'Gusua', 'Akure', '00000000004'),
(00000000968, 'Gusua', 'Asaba', '00000000004'),
(00000000969, 'Gusua', 'Awka', '00000000004'),
(00000000970, 'Gusua', 'Bauchi', '00000000003'),
(00000000971, 'Gusua', 'Birnin kebbi', '00000000002'),
(00000000972, 'Gusua', 'Benin', '00000000004'),
(00000000973, 'Gusua', 'Bonny', '00000000004'),
(00000000974, 'Gusua', 'Calabar', '00000000004'),
(00000000975, 'Gusua', 'Damaturu', '00000000003'),
(00000000976, 'Gusua', 'Dutse', '00000000003'),
(00000000977, 'Gusua', 'Eket', '00000000004'),
(00000000978, 'Gusua', 'Enugu', '00000000004'),
(00000000979, 'Gusua', 'Gombe', '00000000003'),
(00000000980, 'Gusua', 'Gusua', '00000000001'),
(00000000981, 'Gusua', 'Ibadan', '00000000004'),
(00000000982, 'Gusua', 'Ife', '00000000004'),
(00000000983, 'Gusua', 'Ijebu ode', '00000000004'),
(00000000984, 'Gusua', 'Illorin', '00000000004'),
(00000000985, 'Gusua', 'Jalingo', '00000000003'),
(00000000986, 'Gusua', 'Jos', '00000000003'),
(00000000987, 'Gusua', 'Kaduna', '00000000002'),
(00000000988, 'Gusua', 'Kano', '00000000003'),
(00000000989, 'Gusua', 'Kastina', '00000000003'),
(00000000990, 'Gusua', 'Lafia', '00000000003'),
(00000000991, 'Gusua', 'Lokoja', '00000000003'),
(00000000992, 'Gusua', 'Lagos', '00000000004'),
(00000000993, 'Gusua', 'Maiduguri', '00000000003'),
(00000000994, 'Gusua', 'Makurdi', '00000000003'),
(00000000995, 'Gusua', 'Minna', '00000000003'),
(00000000996, 'Gusua', 'Nnewi', '00000000004'),
(00000000997, 'Gusua', 'Nsukka', '00000000004'),
(00000000998, 'Gusua', 'Offa', '00000000004'),
(00000000999, 'Gusua', 'Onitsha', '00000000004'),
(00000001000, 'Gusua', 'Owerri', '00000000004'),
(00000001001, 'Gusua', 'Osogbo', '00000000004'),
(00000001002, 'Gusua', 'Port harcourt', '00000000004'),
(00000001003, 'Gusua', 'Sapele', '00000000004'),
(00000001004, 'Gusua', 'Sagamu', '00000000004'),
(00000001005, 'Gusua', 'Sokoto', '00000000002'),
(00000001006, 'Gusua', 'Suleja', '00000000003'),
(00000001007, 'Gusua', 'Umuahia', '00000000004'),
(00000001008, 'Gusua', 'Uyo', '00000000004'),
(00000001009, 'Gusua', 'Warri', '00000000004'),
(00000001010, 'Gusua', 'Yenogoa', '00000000004'),
(00000001011, 'Gusua', 'Yola', '00000000003'),
(00000001012, 'Gusua', 'Zaria', '00000000002'),
(00000001013, 'Ibadan', 'Abia', '00000000004'),
(00000001014, 'Ibadan', 'Abeokuta', '00000000002'),
(00000001015, 'Ibadan', 'Abuja', '00000000004'),
(00000001016, 'Ibadan', 'Ado ekiti', '00000000002'),
(00000001017, 'Ibadan', 'Abakaliki', '00000000004'),
(00000001018, 'Ibadan', 'Akure', '00000000002'),
(00000001019, 'Ibadan', 'Asaba', '00000000004'),
(00000001020, 'Ibadan', 'Awka', '00000000004'),
(00000001021, 'Ibadan', 'Bauchi', '00000000004'),
(00000001022, 'Ibadan', 'Birnin kebbi', '00000000004'),
(00000001023, 'Ibadan', 'Benin', '00000000003'),
(00000001024, 'Ibadan', 'Bonny', '00000000004'),
(00000001025, 'Ibadan', 'Calabar', '00000000004'),
(00000001026, 'Ibadan', 'Damaturu', '00000000004'),
(00000001027, 'Ibadan', 'Dutse', '00000000004'),
(00000001028, 'Ibadan', 'Eket', '00000000004'),
(00000001029, 'Ibadan', 'Enugu', '00000000004'),
(00000001030, 'Ibadan', 'Gombe', '00000000004'),
(00000001031, 'Ibadan', 'Gusua', '00000000004'),
(00000001032, 'Ibadan', 'Ibadan', '00000000001'),
(00000001033, 'Ibadan', 'Ife', '00000000002'),
(00000001034, 'Ibadan', 'Ijebu ode', '00000000002'),
(00000001035, 'Ibadan', 'Illorin', '00000000002'),
(00000001036, 'Ibadan', 'Jalingo', '00000000004'),
(00000001037, 'Ibadan', 'Jos', '00000000004'),
(00000001038, 'Ibadan', 'Kaduna', '00000000004'),
(00000001039, 'Ibadan', 'Kano', '00000000004'),
(00000001040, 'Ibadan', 'Kastina', '00000000004'),
(00000001041, 'Ibadan', 'Lafia', '00000000004'),
(00000001042, 'Ibadan', 'Lokoja', '00000000004'),
(00000001043, 'Ibadan', 'Lagos', '00000000002'),
(00000001044, 'Ibadan', 'Maiduguri', '00000000004'),
(00000001045, 'Ibadan', 'Makurdi', '00000000004'),
(00000001046, 'Ibadan', 'Minna', '00000000004'),
(00000001047, 'Ibadan', 'Nnewi', '00000000004'),
(00000001048, 'Ibadan', 'Nsukka', '00000000004'),
(00000001049, 'Ibadan', 'Offa', '00000000002'),
(00000001050, 'Ibadan', 'Onitsha', '00000000004'),
(00000001051, 'Ibadan', 'Owerri', '00000000004'),
(00000001052, 'Ibadan', 'Osogbo', '00000000002'),
(00000001053, 'Ibadan', 'Port harcourt', '00000000004'),
(00000001054, 'Ibadan', 'Sapele', '00000000004'),
(00000001055, 'Ibadan', 'Sagamu', '00000000002'),
(00000001056, 'Ibadan', 'Sokoto', '00000000004'),
(00000001057, 'Ibadan', 'Suleja', '00000000004'),
(00000001058, 'Ibadan', 'Umuahia', '00000000004'),
(00000001059, 'Ibadan', 'Uyo', '00000000004'),
(00000001060, 'Ibadan', 'Warri', '00000000004'),
(00000001061, 'Ibadan', 'Yenogoa', '00000000004'),
(00000001062, 'Ibadan', 'Yola', '00000000004'),
(00000001063, 'Ibadan', 'Zaria', '00000000004'),
(00000001064, 'Ife', 'Abia', '00000000004'),
(00000001065, 'Ife', 'Abeokuta', '00000000003'),
(00000001066, 'Ife', 'Abuja', '00000000004'),
(00000001067, 'Ife', 'Ado ekiti', '00000000002'),
(00000001068, 'Ife', 'Abakaliki', '00000000004'),
(00000001069, 'Ife', 'Akure', '00000000002'),
(00000001070, 'Ife', 'Asaba', '00000000004'),
(00000001071, 'Ife', 'Awka', '00000000004'),
(00000001072, 'Ife', 'Bauchi', '00000000004'),
(00000001073, 'Ife', 'Birnin kebbi', '00000000004'),
(00000001074, 'Ife', 'Benin', '00000000004'),
(00000001075, 'Ife', 'Bonny', '00000000004'),
(00000001076, 'Ife', 'Calabar', '00000000004'),
(00000001077, 'Ife', 'Damaturu', '00000000004'),
(00000001078, 'Ife', 'Dutse', '00000000004'),
(00000001079, 'Ife', 'Eket', '00000000004');
INSERT INTO `settings_delivery` (`delivery_id`, `collection_city`, `delivery_city`, `zone_id`) VALUES
(00000001080, 'Ife', 'Enugu', '00000000004'),
(00000001081, 'Ife', 'Gombe', '00000000004'),
(00000001082, 'Ife', 'Gusua', '00000000004'),
(00000001083, 'Ife', 'Ibadan', '00000000002'),
(00000001084, 'Ife', 'Ife', '00000000001'),
(00000001085, 'Ife', 'Ijebu ode', '00000000003'),
(00000001086, 'Ife', 'Illorin', '00000000003'),
(00000001087, 'Ife', 'Jalingo', '00000000004'),
(00000001088, 'Ife', 'Jos', '00000000004'),
(00000001089, 'Ife', 'Kaduna', '00000000004'),
(00000001090, 'Ife', 'Kano', '00000000004'),
(00000001091, 'Ife', 'Kastina', '00000000004'),
(00000001092, 'Ife', 'Lafia', '00000000004'),
(00000001093, 'Ife', 'Lokoja', '00000000004'),
(00000001094, 'Ife', 'Lagos', '00000000003'),
(00000001095, 'Ife', 'Maiduguri', '00000000004'),
(00000001096, 'Ife', 'Makurdi', '00000000004'),
(00000001097, 'Ife', 'Minna', '00000000004'),
(00000001098, 'Ife', 'Nnewi', '00000000004'),
(00000001099, 'Ife', 'Nsukka', '00000000004'),
(00000001100, 'Ife', 'Offa', '00000000003'),
(00000001101, 'Ife', 'Onista', '00000000004'),
(00000001102, 'Ife', 'Owerri', '00000000004'),
(00000001103, 'Ife', 'Osogbo', '00000000002'),
(00000001104, 'Ife', 'Port Harcourt', '00000000004'),
(00000001105, 'Ife', 'Sapele', '00000000004'),
(00000001106, 'Ife', 'Sagamu', '00000000004'),
(00000001107, 'Ife', 'Sokoto', '00000000004'),
(00000001108, 'Ife', 'Suleja', '00000000004'),
(00000001109, 'Ife', 'Umuahia', '00000000004'),
(00000001110, 'Ife', 'Uyo', '00000000004'),
(00000001111, 'Ife', 'Warri', '00000000004'),
(00000001112, 'Ife', 'Yenogoa', '00000000004'),
(00000001113, 'Ife', 'Yola', '00000000004'),
(00000001114, 'Ife', 'Zaria', '00000000004'),
(00000001115, 'Ijebu Ode', 'Abia', '00000000004'),
(00000001116, 'Ijebu Ode', 'Abeokuta', '00000000002'),
(00000001117, 'Ijebu Ode', 'Abuja', '00000000004'),
(00000001118, 'Ijebu Ode', 'Ado ekiti', '00000000003'),
(00000001119, 'Ijebu Ode', 'Abakaliki', '00000000004'),
(00000001120, 'Ijebu Ode', 'Akure', '00000000003'),
(00000001121, 'Ijebu Ode', 'Asaba', '00000000004'),
(00000001122, 'Ijebu Ode', 'Awka', '00000000004'),
(00000001123, 'Ijebu Ode', 'Bauchi', '00000000004'),
(00000001124, 'Ijebu Ode', 'Birnin Kebbi', '00000000004'),
(00000001125, 'Ijebu Ode', 'Benin', '00000000003'),
(00000001126, 'Ijebu Ode', 'Bonny', '00000000004'),
(00000001127, 'Ijebu Ode', 'Calabar', '00000000004'),
(00000001128, 'Ijebu Ode', 'Damaturu', '00000000004'),
(00000001129, 'Ijebu Ode', 'Dutse', '00000000004'),
(00000001130, 'Ijebu Ode', 'Eket', '00000000004'),
(00000001131, 'Ijebu Ode', 'Enugu', '00000000004'),
(00000001132, 'Ijebu Ode', 'Gombe', '00000000004'),
(00000001133, 'Ijebu Ode', 'Gusua', '00000000004'),
(00000001134, 'Ijebu Ode', 'Ibadan', '00000000002'),
(00000001135, 'Ijebu Ode', 'Ife', '00000000003'),
(00000001136, 'Ijebu Ode', 'Ijebu ode', '00000000001'),
(00000001137, 'Ijebu Ode', 'Illorin', '00000000003'),
(00000001138, 'Ijebu Ode', 'Jalingo', '00000000004'),
(00000001139, 'Ijebu Ode', 'Jos', '00000000004'),
(00000001140, 'Ijebu Ode', 'Kaduna', '00000000004'),
(00000001141, 'Ijebu Ode', 'Kano', '00000000004'),
(00000001142, 'Ijebu Ode', 'Kastina', '00000000004'),
(00000001143, 'Ijebu Ode', 'Lafia', '00000000004'),
(00000001144, 'Ijebu Ode', 'Lokoja', '00000000004'),
(00000001145, 'Ijebu Ode', 'Lagos', '00000000003'),
(00000001146, 'Ijebu Ode', 'Maiduguri', '00000000004'),
(00000001147, 'Ijebu Ode', 'Makurdi', '00000000004'),
(00000001148, 'Ijebu Ode', 'Minna', '00000000004'),
(00000001149, 'Ijebu Ode', 'Nnewi', '00000000004'),
(00000001150, 'Ijebu Ode', 'Nsukka', '00000000004'),
(00000001151, 'Ijebu Ode', 'Offa', '00000000003'),
(00000001152, 'Ijebu Ode', 'Onista', '00000000004'),
(00000001153, 'Ijebu Ode', 'Owerri', '00000000004'),
(00000001154, 'Ijebu Ode', 'Osogbo', '00000000003'),
(00000001155, 'Ijebu Ode', 'Port Harcourt', '00000000004'),
(00000001156, 'Ijebu Ode', 'Sapele', '00000000004'),
(00000001157, 'Ijebu Ode', 'Sagamu', '00000000002'),
(00000001158, 'Ijebu Ode', 'Sokoto', '00000000004'),
(00000001159, 'Ijebu Ode', 'Suleja', '00000000004'),
(00000001160, 'Ijebu Ode', 'Umuahia', '00000000004'),
(00000001161, 'Ijebu Ode', 'Uyo', '00000000004'),
(00000001162, 'Ijebu Ode', 'Warri', '00000000004'),
(00000001163, 'Ijebu Ode', 'Yenogoa', '00000000004'),
(00000001164, 'Ijebu Ode', 'Yola', '00000000004'),
(00000001165, 'Ijebu Ode', 'Zaria', '00000000004'),
(00000001166, 'Illorin', 'Abia', '00000000004'),
(00000001167, 'Illorin', 'Abeokuta', '00000000003'),
(00000001168, 'Illorin', 'Abuja', '00000000004'),
(00000001169, 'Illorin', 'Ado ekiti', '00000000003'),
(00000001170, 'Illorin', 'Abakaliki', '00000000004'),
(00000001171, 'Illorin', 'Akure', '00000000003'),
(00000001172, 'Illorin', 'Asaba', '00000000004'),
(00000001173, 'Illorin', 'Awka', '00000000004'),
(00000001174, 'Illorin', 'Bauchi', '00000000004'),
(00000001175, 'Illorin', 'Birnin kebbi', '00000000004'),
(00000001176, 'Illorin', 'Benin', '00000000004'),
(00000001177, 'Illorin', 'Bonny', '00000000004'),
(00000001178, 'Illorin', 'Calabar', '00000000004'),
(00000001179, 'Illorin', 'Damaturu', '00000000004'),
(00000001180, 'Illorin', 'Dutse', '00000000004'),
(00000001181, 'Illorin', 'Eket', '00000000004'),
(00000001182, 'Illorin', 'Enugu', '00000000004'),
(00000001183, 'Illorin', 'Gombe', '00000000004'),
(00000001184, 'Illorin', 'Gusua', '00000000004'),
(00000001185, 'Illorin', 'Ibadan', '00000000002'),
(00000001186, 'Illorin', 'Ife', '00000000003'),
(00000001187, 'Illorin', 'Ijebu ode', '00000000003'),
(00000001188, 'Illorin', 'Illorin', '00000000001'),
(00000001189, 'Illorin', 'Jalingo', '00000000004'),
(00000001190, 'Illorin', 'Jos', '00000000004'),
(00000001191, 'Illorin', 'Kaduna', '00000000004'),
(00000001192, 'Illorin', 'Kano', '00000000004'),
(00000001193, 'Illorin', 'Kastina', '00000000004'),
(00000001194, 'Illorin', 'Lafia', '00000000004'),
(00000001195, 'Illorin', 'Lokoja', '00000000004'),
(00000001196, 'Illorin', 'Lagos', '00000000003'),
(00000001197, 'Illorin', 'Maiduguri', '00000000004'),
(00000001198, 'Illorin', 'Makurdi', '00000000004'),
(00000001199, 'Illorin', 'Minna', '00000000004'),
(00000001200, 'Illorin', 'Nnewi', '00000000004'),
(00000001201, 'Illorin', 'Nsukka', '00000000004'),
(00000001202, 'Illorin', 'Offa', '00000000002'),
(00000001203, 'Illorin', 'Onitsha', '00000000004'),
(00000001204, 'Illorin', 'Owerri', '00000000004'),
(00000001205, 'Illorin', 'Osogbo', '00000000002'),
(00000001206, 'Illorin', 'Port harcourt', '00000000004'),
(00000001207, 'Illorin', 'Sapele', '00000000004'),
(00000001208, 'Illorin', 'Sagamu', '00000000003'),
(00000001209, 'Illorin', 'Sokoto', '00000000004'),
(00000001210, 'Illorin', 'Suleja', '00000000004'),
(00000001211, 'Illorin', 'Umuahia', '00000000004'),
(00000001212, 'Illorin', 'Uyo', '00000000004'),
(00000001213, 'Illorin', 'Warri', '00000000004'),
(00000001214, 'Illorin', 'Yenogoa', '00000000004'),
(00000001215, 'Illorin', 'Yola', '00000000004'),
(00000001216, 'Illorin', 'Zaria', '00000000004'),
(00000001217, 'Jalingo', 'Abia', '00000000004'),
(00000001218, 'Jalingo', 'Abeokuta', '00000000004'),
(00000001219, 'Jalingo', 'Abuja', '00000000003'),
(00000001220, 'Jalingo', 'Ado ekiti', '00000000004'),
(00000001221, 'Jalingo', 'Abakaliki', '00000000004'),
(00000001222, 'Jalingo', 'Asaba', '00000000004'),
(00000001223, 'Jalingo', 'Awka', '00000000004'),
(00000001224, 'Jalingo', 'Bauchi', '00000000004'),
(00000001225, 'Jalingo', 'Birnin kebbi', '00000000003'),
(00000001226, 'Jalingo', 'Benin', '00000000004'),
(00000001227, 'Jalingo', 'Bonny', '00000000004'),
(00000001228, 'Jalingo', 'Calabar', '00000000004'),
(00000001229, 'Jalingo', 'Damaturu', '00000000003'),
(00000001230, 'Lagos-Badagry', 'Lagos-Epe', '00000000007'),
(00000001231, 'Osogbo', 'Osogbo', '00000000001'),
(00000001232, 'Jalingo', 'Dutse', '00000000003'),
(00000001233, 'Jalingo', 'Eket', '00000000004'),
(00000001234, 'Jalingo', 'Enugu', '00000000004'),
(00000001235, 'Jalingo', 'Gombe', '00000000002'),
(00000001236, 'Jalingo', 'Gusua', '00000000003'),
(00000001237, 'Jalingo', 'Ibadan', '00000000004'),
(00000001238, 'Jalingo', 'Ife', '00000000004'),
(00000001239, 'Jalingo', 'Ijebu ode', '00000000004'),
(00000001240, 'Jalingo', 'Illorin', '00000000004'),
(00000001241, 'Jalingo', 'Jalingo', '00000000001'),
(00000001242, 'Jalingo', 'Jos', '00000000003'),
(00000001243, 'Jalingo', 'Kaduna', '00000000003'),
(00000001244, 'Jalingo', 'Kano', '00000000003'),
(00000001245, 'Jalingo', 'Kastina', '00000000003'),
(00000001246, 'Jalingo', 'Lafia', '00000000003'),
(00000001247, 'Jalingo', 'Lokoja', '00000000003'),
(00000001248, 'Jalingo', 'Lagos', '00000000004'),
(00000001249, 'Jalingo', 'Maiduguri', '00000000003'),
(00000001250, 'Jalingo', 'Makurdi', '00000000003'),
(00000001251, 'Jalingo', 'Minna', '00000000003'),
(00000001252, 'Jalingo', 'Nnewi', '00000000004'),
(00000001253, 'Jalingo', 'Nsukka', '00000000004'),
(00000001254, 'Jalingo', 'Offa', '00000000004'),
(00000001255, 'Jalingo', 'Osogbo', '00000000004'),
(00000001256, 'Jalingo', 'Onista', '00000000004'),
(00000001257, 'Jalingo', 'Owerri', '00000000004'),
(00000001258, 'Jalingo', 'Port Harcourt', '00000000004'),
(00000001259, 'Jos', 'Aba', '00000000004'),
(00000001260, 'Lagos-Epe', 'Lagos-Mainland', '00000000005'),
(00000001261, 'Lagos-Epe', 'Lagos-Island', '00000000005s'),
(00000001262, 'Lagos-Epe', 'Lagos-Badagry', '00000000005'),
(00000001263, 'Lagos-Epe', 'Lagos-Ikorodu', '00000000005'),
(00000001264, 'Lagos-Mainland', 'Lagos-Epe', '00000000005'),
(00000001265, 'Lagos-Mainland', 'Lagos-Island', '00000000005'),
(00000001266, 'Lagos-Mainland', 'Lagos-Badagry', '00000000005'),
(00000001267, 'Lagos-Mainland', 'Lagos-Ikorodu', '00000000005'),
(00000001268, 'Lagos-Island', 'Lagos-Epe', '00000000005e'),
(00000001269, 'Lagos-Island', 'Lagos-Mainland', '00000000005m'),
(00000001270, 'Lagos-Island', 'Lagos-Badagry', '00000000005b'),
(00000001271, 'Lagos-Island', 'Lagos-Ikorodu', '00000000005k'),
(00000001272, 'Lagos-Badagry', 'Lagos-Mainland', '00000000005'),
(00000001273, 'Lagos-Badagry', 'Lagos-Island', '00000000005'),
(00000001274, 'Lagos-Badagry', 'Lagos-Ikorodu', '00000000005'),
(00000001275, 'Lagos-Ikorodu', 'Lagos-Epe', '00000000005'),
(00000001276, 'Lagos-Ikorodu', 'Lagos-Mainland', '00000000005'),
(00000001277, 'Lagos-Ikorodu', 'Lagos-Island', '00000000005'),
(00000001278, 'Lagos-Ikorodu', 'Lagos-Badagry', '00000000005'),
(00000001285, 'Lagos', 'Katsina', '00000000004'),
(00000001286, 'Lagos', 'Lafia', '00000000004'),
(00000001287, 'LAGOS', 'ABA', '00000000003'),
(00000001288, 'Lagos', 'Lokoja', '00000000004'),
(00000001289, 'LAGOS', 'ABEOKUTA', '00000000002'),
(00000001290, 'Lagos', 'Maiduguri', '00000000004'),
(00000001291, 'Lagos', 'Makurdi', '00000000004'),
(00000001292, 'Lagos', 'Minna', '00000000004'),
(00000001293, 'Lagos', 'Nnewi', '00000000003'),
(00000001294, 'Lagos', 'Nsukka', '00000000004'),
(00000001295, 'LAGOS', 'ABUJA', '00000000003'),
(00000001296, 'LAGOS', 'ADO-EKITI', '00000000003'),
(00000001297, 'Lagos', 'Offa', '00000000003'),
(00000001298, 'Lagos', 'Onitsha', '00000000003'),
(00000001299, 'Lagos', 'Owerri', '00000000003'),
(00000001300, 'LAGOS', 'ABAKALIKI', '00000000004'),
(00000001301, 'Lagos', 'Osogbo', '00000000003'),
(00000001302, 'Lagos', 'Ota', '00000000002'),
(00000001303, 'LAGOS', 'AKURE', '00000000003'),
(00000001304, 'Lagos', 'Port Harcourt', '00000000003'),
(00000001305, 'Lagos', 'Sapele', '00000000003'),
(00000001306, 'LAGOS', 'ASABA', '00000000003'),
(00000001307, 'Lagos', 'Sagamu', '00000000002'),
(00000001308, 'LAGOS', 'AWKA', '00000000003'),
(00000001309, 'LAGOS', 'BAUCHI', '00000000004'),
(00000001310, 'Lagos', 'Sokoto', '00000000004'),
(00000001311, 'Lagos', 'Suleja', '00000000004'),
(00000001312, 'LAGOS', 'BIRNIN KEBBI', '00000000004'),
(00000001313, 'Lagos', 'Umuahia', '00000000003'),
(00000001314, 'Lagos', 'Uyo', '00000000003'),
(00000001315, 'Lagos', 'Warri', '00000000003'),
(00000001316, 'LAGOS', 'BENIN', '00000000003'),
(00000001317, 'Lagos', 'Yenegua', '00000000004'),
(00000001318, 'LAGOS', 'BONNY', '00000000004'),
(00000001319, 'Lagos', 'Yola', '00000000004'),
(00000001320, 'Lagos', 'Zaria', '00000000004'),
(00000001321, 'LAGOS', 'CALABAR', '00000000003'),
(00000001322, 'LAGOS', 'DAMATURU', '00000000004'),
(00000001323, 'LAGOS', 'DUTSE', '00000000004'),
(00000001324, 'LAGOS', 'EKET', '00000000003'),
(00000001325, 'LAGOS', 'ENUGU', '00000000003'),
(00000001326, 'LAGOS', 'GOMBE', '00000000004'),
(00000001327, 'LAGOS', 'GUSUA', '00000000004'),
(00000001328, 'LAGOS', 'IBADAN', '00000000002'),
(00000001329, 'LAGOS', 'IFE', '00000000003'),
(00000001330, 'LAGOS', 'IJEBU-ODE', '00000000003'),
(00000001331, 'LAGOS', 'AWKA IBOM', '00000000004'),
(00000001332, 'LAGOS', 'ILORIN', '00000000003'),
(00000001333, 'LAGOS', 'JALINGO', '00000000004'),
(00000001334, 'LAGOS', 'JOS', '00000000004'),
(00000001335, 'LAGOS', 'KADUNA', '00000000003'),
(00000001336, 'LAGOS', 'KANO', '00000000003'),
(00000001338, 'JOS', 'ABEOKUTA', '00000000004'),
(00000001339, 'JOS', 'ABUJA', '00000000002'),
(00000001340, 'JOS', 'ADO-EKITI', '00000000004'),
(00000001341, 'JOS', 'ABAKALIKI', '00000000004'),
(00000001342, 'JOS', 'AKURE', '00000000004'),
(00000001343, 'JOS', 'ASABA', '00000000004'),
(00000001344, 'JOS', 'AWKA', '00000000004'),
(00000001345, 'JOS', 'BAUCHI', '00000000002'),
(00000001346, 'JOS', 'BIRIN KEBBI', '00000000003'),
(00000001347, 'JOS', 'BONNY', '00000000004'),
(00000001348, 'JOS', 'CALABAR', '00000000004'),
(00000001349, 'JOS', 'DAMATURU', '00000000003'),
(00000001350, 'JOS', 'DUTSE', '00000000003'),
(00000001351, 'JOS', 'EKET', '00000000004'),
(00000001352, 'JOS', 'ENUGU', '00000000004'),
(00000001353, 'JOS', 'GOMBE', '00000000002'),
(00000001354, 'JOS', 'GUSUA', '00000000003'),
(00000001355, 'JOS', 'IBADAN', '00000000004'),
(00000001356, 'JOS', 'IFE', '00000000004'),
(00000001357, 'JOS', 'IJEBU ODE', '00000000004'),
(00000001358, 'JOS', 'AWKA IBOM', '00000000004'),
(00000001359, 'JOS', 'ILORIN', '00000000004'),
(00000001360, 'JOS', 'JALINGO', '00000000003'),
(00000001361, 'JOS ', 'JOS', '00000000001'),
(00000001362, 'JOS', 'KADUNA', '00000000002'),
(00000001363, 'JOS', 'KANO', '00000000003'),
(00000001364, 'JOS', 'KASTINA', '00000000003'),
(00000001365, 'zaria', 'aba', '00000000004'),
(00000001366, 'JOS', 'LAFIA', '00000000002'),
(00000001367, 'JOS', 'LOKOJA', '00000000003'),
(00000001368, 'JOS', 'LAGOS', '00000000004'),
(00000001369, 'JOS', 'MAIDUGURI', '00000000003'),
(00000001370, 'JOS', 'MAKURDI', '00000000003'),
(00000001371, 'JOS', 'MINNA', '00000000003'),
(00000001372, 'JOS', 'NNEWI', '00000000004'),
(00000001373, 'JOS', 'NSUKKA', '00000000004'),
(00000001374, 'JOS', 'OFA', '00000000004'),
(00000001375, 'JOS', 'ONITSHA', '00000000004'),
(00000001376, 'JOS', 'OWERRI', '00000000004'),
(00000001377, 'JOS', 'OSOGBO', '00000000004'),
(00000001378, 'JOS', 'OTA', '00000000004'),
(00000001379, 'JOS', 'PHORTHARCOURT', '00000000004'),
(00000001380, 'JOS', 'SAGAMU', '00000000004'),
(00000001381, 'JOS', 'SAPELE', '00000000004'),
(00000001382, 'JOS', 'SOKOTO', '00000000003'),
(00000001383, 'JOS', 'SULEJA', '00000000003'),
(00000001384, 'JOS', 'UMUAHIA', '00000000004'),
(00000001385, 'JOS', 'UYO', '00000000004'),
(00000001386, 'JOS', 'WARRI', '00000000004'),
(00000001387, 'JOS', 'YENEGOA', '00000000004'),
(00000001388, 'JOS', 'YOLA', '00000000003'),
(00000001389, 'JOS', 'ZARIA', '00000000003'),
(00000001390, 'ZARIA', 'ABEOKUTA', '00000000004'),
(00000001391, 'ZARIA', 'ABUJA', '00000000002'),
(00000001392, 'ZARIA', 'ADO-EKITI', '00000000004'),
(00000001393, 'ZARIA', 'ABAKALIKI', '00000000004'),
(00000001394, 'ZARIA', 'AKURE', '00000000004'),
(00000001395, 'ZARIA', 'ASABA', '00000000004'),
(00000001396, 'ZARIA', 'AWKA', '00000000004'),
(00000001397, 'ZARIA', 'BAUCHI', '00000000003'),
(00000001398, 'ZARIA', 'BERNIN-KEBBI', '00000000003'),
(00000001399, 'ZARIA', 'BENIN', '00000000004'),
(00000001400, 'ZARIA', 'BONNY', '00000000004'),
(00000001401, 'ZARIA', 'CALABAR', '00000000004'),
(00000001402, 'ZARIA', 'DAMATURU', '00000000003'),
(00000001403, 'ZARIA', 'DUTSE', '00000000003'),
(00000001404, 'ZARIA', 'EKET', '00000000004'),
(00000001405, 'ZARIA', 'ENUGU', '00000000004'),
(00000001406, 'ZARIA', 'GONBE', '00000000003'),
(00000001407, 'ZARIA', 'GUSAU', '00000000002'),
(00000001408, 'ZARIA', 'IBADAN', '00000000004'),
(00000001409, 'ZARIA', 'IFE', '00000000004'),
(00000001410, 'ZARIA', 'IJEBU-ODE', '00000000004'),
(00000001411, 'ZARIA', 'AKWA-IBOM', '00000000004'),
(00000001412, 'ZARIA', 'ILORIN', '00000000004'),
(00000001413, 'ZARIA', 'JALINGO', '00000000003'),
(00000001414, 'ZARIA', 'JOS', '00000000003'),
(00000001415, 'ZARIA', 'KADUNA', '00000000002'),
(00000001416, 'ZARIA', 'KANO', '00000000002'),
(00000001417, 'ZARIA', 'KASTINA', '00000000003'),
(00000001418, 'ZARIA', 'LAFIA', '00000000003'),
(00000001419, 'ZARIA', 'LOKOJA', '00000000003'),
(00000001420, 'ZARIA', 'LAGOS', '00000000004'),
(00000001421, 'ZARIA', 'MAIDUGURI', '00000000003'),
(00000001422, 'ZARIA', 'MAKURDI', '00000000003'),
(00000001423, 'ZARIA', 'MINNA', '00000000003'),
(00000001424, 'ZARIA', 'NNEWI', '00000000004'),
(00000001425, 'ZARIA', 'NSUKKA', '00000000004'),
(00000001426, 'ZARIA', 'OFFA', '00000000004'),
(00000001427, 'ZARIA', 'ONITSHA', '00000000004'),
(00000001428, 'ZARIA', 'OWERRI', '00000000004'),
(00000001429, 'ZARIA', 'OSOGBO', '00000000004'),
(00000001430, 'ZARIA', 'OTTA', '00000000004'),
(00000001431, 'ZARIA', 'PORT-HARCOURT', '00000000004'),
(00000001432, 'ZARIA', 'SAPELE', '00000000004'),
(00000001433, 'ZARIA', 'SAGAMU', '00000000004'),
(00000001434, 'ZARIA', 'SOKOTO', '00000000002'),
(00000001435, 'ZARIA', 'SULEJA', '00000000002'),
(00000001436, 'ZARIA', 'UMUAHIA', '00000000004'),
(00000001437, 'ZARIA', 'UYO', '00000000004'),
(00000001438, 'ZARIA', 'WARRI', '00000000004'),
(00000001439, 'ZARIA', 'YENEGOA', '00000000004'),
(00000001440, 'ZARIA', 'YOLA', '00000000003'),
(00000001441, 'ZARIA', 'ZARIA', '00000000001'),
(00000001442, 'YOLA', 'ABA', '00000000004'),
(00000001443, 'YOLA', 'ABEOKUTA', '00000000004'),
(00000001444, 'YOLA', 'ABUJA', '00000000003'),
(00000001445, 'YOLA', 'ADO-EKITI', '00000000004'),
(00000001446, 'YOLA', 'ABAKALIKI', '00000000004'),
(00000001447, 'YOLA', 'AKURE', '00000000004'),
(00000001448, 'YOLA', 'ASABA', '00000000004'),
(00000001449, 'YOLA', 'AWKA', '00000000004'),
(00000001450, 'YOLA', 'BAUCHI', '00000000003');

-- --------------------------------------------------------

--
-- Table structure for table `settings_delivery_type`
--

CREATE TABLE `settings_delivery_type` (
  `id` int(10) NOT NULL,
  `type_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `delivery_type` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `zone_id` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `additional_cost` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `estimated_dt` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `collection_st` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `collection_et` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `delivery_st` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `delivery_et` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `delivery_et1` varchar(11) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `resume` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `stop` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` varchar(300) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_delivery_type`
--

INSERT INTO `settings_delivery_type` (`id`, `type_id`, `delivery_type`, `zone_id`, `additional_cost`, `estimated_dt`, `collection_st`, `collection_et`, `delivery_st`, `delivery_et`, `delivery_et1`, `status`, `resume`, `stop`, `description`) VALUES
(7, '2347', 'Next Day', '00000000005', '0', '2', '9:00am', '4:00pm', '10:00am', '6:00pm', '16', 'Active', '2015-05-17', '0000-00-00', 'Our Regular delivery is super economical and still guaranteed to arrive in a reasonable time.'),
(3, '2343', 'Early Morning', '00000000005', '0.3', '2', '9:00am', '4:00pm', '9:00am', '11:00am', '16', 'Active', '0000-00-00', '0000-00-00', 'Our Early Morning delivery is perfect when you need your parcel to be delivered by tomorrow morning by 10AM'),
(5, '2345', 'Same Day', '00000000005', '0.1', '1', '9:00am', '1:00pm', '10:00am', '6:00pm', '16', 'Active', '0000-00-00', '0000-00-00', 'A cost-effective same day delivery service for your urgent and time sensitive delivery needs. Delivery is done before the end of business day or next working day depending on the time of collection/pickup'),
(10, '2348', 'Outside Lagos', '00000000002', '0', '3', '9:00am', '4:00pm', '10:00am', '6:00pm', '16', 'Active', '0000-00-00', '0000-00-00', 'Outside Lagos delivery service provide the best price for the delivery of parcels across Nigeria. All your shipments can be fully tracked online so you can be assured of your items progress through the system.');

-- --------------------------------------------------------

--
-- Table structure for table `settings_delivery_type_backup`
--

CREATE TABLE `settings_delivery_type_backup` (
  `type_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `delivery_type` varchar(100) NOT NULL,
  `zone_id` varchar(100) NOT NULL,
  `additional_cost` float NOT NULL,
  `estimated_dt` varchar(100) NOT NULL,
  `collection_st` varchar(100) NOT NULL,
  `collection_et` varchar(100) NOT NULL,
  `delivery_st` varchar(100) NOT NULL,
  `delivery_et` varchar(100) NOT NULL,
  `delivery_et1` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `resume` date NOT NULL,
  `stop` date NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_delivery_type_backup`
--

INSERT INTO `settings_delivery_type_backup` (`type_id`, `delivery_type`, `zone_id`, `additional_cost`, `estimated_dt`, `collection_st`, `collection_et`, `delivery_st`, `delivery_et`, `delivery_et1`, `status`, `resume`, `stop`, `description`) VALUES
(0000000007, 'Regular Delivery ', '00000000005', 0, '3', '9:00am', '4:00pm', '9:00am', '5:00pm', 16, 'Active', '2015-05-17', '0000-00-00', 'Our Regular delivery is super economical and still guaranteed to arrive in a reasonable time.'),
(0000000002, 'Express9AM', '00000000005', 0.4, '2', '9:00am', '17', '9:00am', '10:00am', 18, 'Active', '0000-00-00', '0000-00-00', 'Our Express9AM delivery is perfect when you need your parcel to be delivered tomorrow morning by 9 AM.'),
(0000000003, 'Express10AM', '00000000005', 0.3, '2', '9:00am', '17', '10:00am', '11:00am', 16, 'Active', '0000-00-00', '0000-00-00', 'Our Express10AM delivery is perfect when you need your parcel to be delivered by tomorrow morning by 10AM'),
(0000000004, 'Express12NOON', '00000000005', 0.2, '2', '9:00am', '4:00pm', '12:00am', '1:00pm', 16, 'Active', '0000-00-00', '0000-00-00', 'Express12Noon is our reliable &lsquo;by noon&rsquo; service and a convenient option for business and residential customers alike. Expect your parcel to be delivered by noon if we receive your order before 10AM'),
(0000000005, 'Express24/Same Day', '00000000005', 0.1, '1', '9:00am', '4:00pm', '10:00am', '5:00pm', 16, 'Active', '0000-00-00', '0000-00-00', 'A cost-effective same day delivery service for your urgent and time sensitive delivery needs. Delivery is done before the end of business day or next working day depending on the time of collection/pickup'),
(0000000006, 'Express48/Two Working Days', '00000000007', 0.05, '3', '9:00am', '4:00pm', '10:00am', '3:00pm', 16, 'Active', '0000-00-00', '0000-00-00', 'Delivery within two working days is our great value for money management. This is a great valued service if you have a parcel that must be delivered within the next two business days, You can trust us to deliver. '),
(0000000001, 'Rush Delivery', '00000000005', 0.5, '1', '9:00am', '12', '10:00am', '5:00pm', 16, 'Active', '0000-00-00', '0000-00-00', 'Rush Delivery is guaranteed to be delivered within 1 to 3 hours after time of order. Using Rush Delivery, we pick up and deliver direct to you. That means we pick up and head straight for the delivery destination.This is our fastest delivery service.'),
(0000000010, 'Priority 2 Delivery', '00000000002', 0, '1', '9:00am', '4:00pm', '10:00am', '6:00pm', 16, 'Active', '0000-00-00', '0000-00-00', 'Priority 2 delivery service provide the best price for the delivery of parcels across Nigeria by road. All your shipments can be fully tracked online so you can be assured of your items progress through the Nationdelivery courier system. The price above is for delivery only.'),
(0000000011, 'Priority 3 Delivery', '00000000003', 0, '2', '9:00am', '4:00pm', '10:00am', '6:00pm', 16, 'Active', '0000-00-00', '0000-00-00', 'Priority 3 delivery service provide the best price for the delivery of parcels across Nigeria by road. All your shipments can be fully tracked online so you can be assured of your items progress through the Nationdelivery courier system. The price above is for delivery only.'),
(0000000012, 'Priority 4 Delivery', '00000000004', 0, '2', '9:00am', '4:00pm', '10:00am', '6:00pm', 16, 'Active', '0000-00-00', '0000-00-00', 'Priority 4 delivery service provide the best price for the delivery of parcels across Nigeria by air. All your shipments can be fully tracked online so you can be assured of your items progress through the Nationdelivery courier system. The price above is for delivery only.');

-- --------------------------------------------------------

--
-- Table structure for table `settings_lagos_lga`
--

CREATE TABLE `settings_lagos_lga` (
  `id` int(11) NOT NULL,
  `zone_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `zone_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `lg_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `lg_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_lagos_lga`
--

INSERT INTO `settings_lagos_lga` (`id`, `zone_id`, `zone_name`, `lg_id`, `lg_name`, `description`, `status`) VALUES
(2, '00000000005a', 'Zone 5a', '1000', 'Alimosho', 'Lagos Alimosho/Iyana Ipaja', 'Enabled'),
(3, '00000000005b', 'Zone 5b', '1001', 'Ajeromi/Ifelodun', 'Lagos Badagry', 'Enabled'),
(4, '00000000005m', 'Zone 5m', '1002', 'Kosofe', 'Lagos Mainland', 'Enabled'),
(1, '00000000005m', 'Zone 5m', '1003', 'Mushin', 'Lagos Mainland', 'Enabled'),
(9, '00000000005m', 'Zone 5m', '1004', 'Oshodi/Isolo', 'Lagos Mainland', 'Enabled'),
(10, '00000000005m', 'Zone 5m', '1005', 'Ojo', 'Lagos Mainland', 'Enabled'),
(11, '00000000005k', 'Zone 5k', '1006', 'Ikorodu', 'Lagos Ikorodu', 'Enabled'),
(12, '00000000005m', 'Zone 5m', '1007', 'Surulere', 'Lagos Mainland', 'Enabled'),
(13, '00000000005m', 'Zone 5m', '1008', 'Agege', 'Lagos Mainland', 'Enabled'),
(14, '00000000005a', 'Zone 5a', '1009', 'Ifako-Ijaiye', 'Lagos Alimosho/Iyana Ipaja', 'Enabled'),
(15, '00000000005m', 'Zone 5m', '1010', 'Shomolu', 'Lagos Mainland', 'Enabled'),
(16, '00000000005b', 'Zone 5b', '1011', 'Amuwo Odofin', 'Lagos Badagry', 'Enabled'),
(17, '00000000005m', 'Zone 5m', '1012', 'Lagos Mainland', 'Lagos Mainland', 'Enabled'),
(18, '00000000005m', 'Zone 5m', '1013', 'Ikeja', 'Lagos Mainland', 'Enabled'),
(19, '00000000005s', 'Zone 5s', '1014', 'Eti Osa', 'Lagos Island', 'Enabled'),
(20, '00000000005b', 'Zone 5b', '1015', 'Badagry', 'Lagos Badagry', 'Enabled'),
(21, '00000000005s', 'Zone 5s', '1016', 'Apapa', 'Lagos Island', 'Enabled'),
(22, '00000000005s', 'Zone 5s', '1017', 'Lagos Island', 'Lagos Island', 'Enabled'),
(23, '00000000005e', 'Zone 5e', '1018', 'Epe', 'Lagos Epe', 'Enabled'),
(24, '00000000005e', 'Zone 5e', '1019', 'Ibeju Lekki', 'Lagos Epe', 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `settings_states`
--

CREATE TABLE `settings_states` (
  `id` int(11) NOT NULL,
  `zone_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `zone_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `state_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `state_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `short_state_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_states`
--

INSERT INTO `settings_states` (`id`, `zone_id`, `zone_name`, `state_id`, `state_name`, `short_state_name`, `description`, `status`) VALUES
(2, '00000000002', 'Zone 2', '1000', 'Abia', 'AB', 'South East', 'Enabled'),
(3, '00000000006', 'Zone 6', '1001', 'Adamawa', 'AD', 'North East', 'Enabled'),
(4, '00000000002', 'Zone 2', '1002', 'Anambra', 'AN', 'South East', 'Enabled'),
(1, '00000000004', 'Zone 4', '1003', 'Akwa Ibom', 'AK', 'South South', 'Enabled'),
(9, '00000000006', 'Zone 6', '1004', 'Bauchi', 'BA', 'North East', 'Enabled'),
(10, '000000000014', 'Zone 14', '1005', 'Bayelsa', 'BY', 'Niger Delta', 'Enabled'),
(11, '000000000015', 'Zone 15', '1006', 'Benue', 'BN', 'Middle Belt', 'Enabled'),
(12, '00000000006', 'Zone 6', '1007', 'Borno', 'BR', 'North East', 'Enabled'),
(13, '00000000004', 'Zone 4', '1008', 'Cross River', 'CR', 'South South', 'Enabled'),
(14, '00000000004', 'Zone 4', '1009', 'Delta', 'DT', 'South South', 'Enabled'),
(15, '00000000002', 'Zone 2', '1010', 'Ebonyi', 'EB', 'South East', 'Enabled'),
(16, '00000000002', 'Zone 2', '1011', 'Enugu', 'EN', 'South East', 'Enabled'),
(17, '000000000013', 'Zone 13', '1012', 'Edo', 'ED', 'Edo', 'Enabled'),
(18, '000000000010', 'Zone 10', '1013', 'Ekiti', 'KT', 'West', 'Enabled'),
(19, '00000000006', 'Zone 6', '1014', 'Gombe', 'GM', 'North East', 'Enabled'),
(20, '00000000002', 'Zone 2', '1015', 'Imo', 'IM', 'South East', 'Enabled'),
(21, '00000000008', 'Zone 8', '1016', 'Jigawa', 'JG', 'North Central', 'Enabled'),
(22, '00000000007', 'Zone 7', '1017', 'Kaduna', 'KD', 'North West', 'Enabled'),
(23, '00000000009', 'Zone 9', '1018', 'Kano', 'KN', 'North', 'Enabled'),
(24, '00000000007', 'Zone 7', '1019', 'Katsina', 'KT', 'North West', 'Enabled'),
(25, '00000000007', 'Zone 7', '1020', 'Kebbi', 'KB', 'North West', 'Enabled'),
(26, '000000000012', 'Zone 12', '1021', 'Kogi', 'KG', 'Central', 'Enabled'),
(27, '000000000010', 'Zone 10', '1022', 'Kwara', 'KW', 'West', 'Enabled'),
(28, '00000000008', 'Zone 8', '1023', 'Nasarawa', 'NS', 'North Central', 'Enabled'),
(29, '000000000012', 'Zone 12', '1024', 'Niger', 'NG', 'Central', 'Enabled'),
(30, '00000000003', 'Zone 3', '1025', 'Ogun State', 'OG', 'South West', 'Enabled'),
(31, '000000000010', 'Zone 10', '1026', 'Ondo', 'ND', 'West', 'Enabled'),
(32, '00000000003', 'Zone 3', '1027', 'Osun', 'OS', 'South West', 'Enabled'),
(33, '00000000003', 'Zone 3', '1028', 'Oyo', 'YO', 'South West', 'Enabled'),
(34, '000000000015', 'Zone 15', '1029', 'Plateau', 'PL', 'Middle Belt', 'Enabled'),
(35, '000000000014', 'Zone 14', '1030', 'Rivers', 'RV', 'Niger Delta', 'Enabled'),
(36, '00000000007', 'Zone 7', '1031', 'Sokoto', 'SK', 'North West', 'Enabled'),
(37, '000000000011', 'Zone 11', '1032', 'Taraba', 'TR', 'South', 'Enabled'),
(38, '00000000006', 'Zone 6', '1033', 'Yobe', 'TB', 'North East', 'Enabled'),
(39, '00000000007', 'Zone 7', '1034', 'Zamfara', 'ZA', 'North West', 'Enabled'),
(40, '000000000012', 'Zone 12', '1035', 'Federal Capital Territory', 'Federal Capital Territory', 'Central', 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `settings_zone`
--

CREATE TABLE `settings_zone` (
  `id` int(11) NOT NULL,
  `record_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `zone_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `zone_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `unit_price` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `add_kg_cost` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pickup_price` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `unit_kg` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_zone`
--

INSERT INTO `settings_zone` (`id`, `record_id`, `zone_id`, `zone_name`, `unit_price`, `add_kg_cost`, `pickup_price`, `description`, `unit_kg`, `status`) VALUES
(2, '1521', '00000000002', 'Zone 2', '2771', '304', '0', 'South East', '0.5', 'Enabled'),
(3, '1522', '00000000003', 'Zone 3', '1788', '268', '0', 'South West', '0.5', 'Enabled'),
(4, '1523', '00000000004', 'Zone 4', '2713', '536', '0', 'South South', '0.5', 'Enabled'),
(16, '1532', '00000000007', 'Zone 7', '3755', '536', '0', 'North West', '0.5', 'Enabled'),
(17, '1533', '00000000008', 'Zone 8', '3713', '536', '0', 'North Central', '0.5', 'Enabled'),
(15, '1524', '00000000006', 'Zone 6', '3713', '536', '0', 'North East', '0.5', 'Enabled'),
(1, '1531', '00000000001', 'Zone 1', '', '', '0', 'Outside Nigeria', '0.5', 'Enabled'),
(9, '1525', '00000000005s', 'Zone 5s', '700', '150', '900', 'Lagos Island', '0.5', 'Enabled'),
(10, '1526', '00000000005m', 'Zone 5m', '600', '150', '1000', 'Lagos Mainland', '0.5', 'Enabled'),
(11, '1530', '00000000005a', 'Zone 5a', '650', '150', '1500', 'Lagos Alimosho/Iyana Ipaja', '0.5', 'Enabled'),
(12, '1527', '00000000005b', 'Zone 5b', '800', '230', '1500', 'Lagos Badagry', '0.5', 'Enabled'),
(13, '1528', '00000000005k', 'Zone 5k', '800', '230', '1500', 'Lagos Ikorodu', '0.5', 'Enabled'),
(14, '1529', '00000000005e', 'Zone 5e', '800', '230', '1500', 'Lagos Epe', '0.5', 'Enabled'),
(18, '1534', '00000000009', 'Zone 9', '3713', '536', '0', 'North', '0.5', 'Enabled'),
(19, '1535', '000000000010', 'Zone 10', '2050', '285', '0', 'West', '0.5', 'Enabled'),
(20, '1536', '000000000011', 'Zone 11', '2250', '295', '0', 'South', '0.5', 'Enabled'),
(21, '1537', '000000000012', 'Zone 12', '2270', '295', '0', 'Central', '0.5', 'Enabled'),
(22, '1538', '000000000013', 'Zone 13', '2200', '295', '0', 'Edo', '0.5', 'Enabled'),
(23, '1539', '000000000014', 'Zone 14', '2250', '295', '0', 'Niger Delta', '0.5', 'Enabled'),
(24, '1540', '000000000015', 'Zone 15', '2250', '295', '0', 'Middle Belt', '0.5', 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `settings_zone_backup`
--

CREATE TABLE `settings_zone_backup` (
  `id` int(11) NOT NULL,
  `zone_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `zone_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `amount1` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `amount2` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `amount3` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings_zone_backup`
--

INSERT INTO `settings_zone_backup` (`id`, `zone_id`, `zone_name`, `amount1`, `amount2`, `amount3`) VALUES
(1, '1520', 'Zone 1', '491', '230', '0'),
(2, '1521', 'Zone 2', '1788', '268', '0'),
(3, '1522', 'Zone 3', '2771', '304', '0'),
(4, '1523', 'Zone 4', '3713', '536', '0'),
(5, '1524', 'Zone 5', '491', '230', '1000'),
(7, '1525', 'zone 1A', '530', '110', '500'),
(6, '1526', 'Zone 6', '491', '230', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `smart_admin`
--

CREATE TABLE `smart_admin` (
  `id` int(11) NOT NULL,
  `title` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `admin_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `first_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `last_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `status` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `newdate` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `time` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `smart_admin`
--

INSERT INTO `smart_admin` (`id`, `title`, `admin_id`, `first_name`, `last_name`, `phone`, `email`, `password`, `status`, `newdate`, `date`, `time`) VALUES
(1, 'Admin', '010101', 'Admin', 'Admin', 'NIL', 'admin@nationexpress24.com', 'Obaiyanu1@', 'Enabled', '2017-08-19', '19 Aug 2017', 'Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_details`
--

CREATE TABLE `tracking_details` (
  `id` int(11) NOT NULL,
  `description` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `current_city` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `old` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `booking_no` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `account_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `ship_date` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `newdate` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `time` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tracking_details`
--

INSERT INTO `tracking_details` (`id`, `description`, `current_city`, `old`, `status`, `booking_no`, `email`, `account_id`, `ship_date`, `newdate`, `date`, `time`) VALUES
(1, '', 'VICTORIA ISLAND', '', 'order_booked', '24x72809654019', '', 'VFGV26096709', '', '2017-09-28', '28 Sep 2017', '03:44 PM'),
(2, '', 'abia', '', 'order_booked', '24x71010240602', '', 'RFEQ04104847', '', '2017-10-10', '10 Oct 2017', '03:06 PM'),
(3, '', 'VGC', '', 'order_booked', '24x70211839748', '', 'CDVY22109096', '', '2017-11-02', '02 Nov 2017', '03:45 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_contact`
--
ALTER TABLE `admin_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_invalid_login`
--
ALTER TABLE `admin_invalid_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invalid_login`
--
ALTER TABLE `invalid_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_details`
--
ALTER TABLE `parcel_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_details`
--
ALTER TABLE `pickup_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_delivery`
--
ALTER TABLE `settings_delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `settings_delivery_type`
--
ALTER TABLE `settings_delivery_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_delivery_type_backup`
--
ALTER TABLE `settings_delivery_type_backup`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `settings_lagos_lga`
--
ALTER TABLE `settings_lagos_lga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_states`
--
ALTER TABLE `settings_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_zone`
--
ALTER TABLE `settings_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_zone_backup`
--
ALTER TABLE `settings_zone_backup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smart_admin`
--
ALTER TABLE `smart_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking_details`
--
ALTER TABLE `tracking_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_contact`
--
ALTER TABLE `admin_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_invalid_login`
--
ALTER TABLE `admin_invalid_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `delivery_details`
--
ALTER TABLE `delivery_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `invalid_login`
--
ALTER TABLE `invalid_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `parcel_details`
--
ALTER TABLE `parcel_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pickup_details`
--
ALTER TABLE `pickup_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings_delivery`
--
ALTER TABLE `settings_delivery`
  MODIFY `delivery_id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1452;

--
-- AUTO_INCREMENT for table `settings_delivery_type`
--
ALTER TABLE `settings_delivery_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `settings_delivery_type_backup`
--
ALTER TABLE `settings_delivery_type_backup`
  MODIFY `type_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings_lagos_lga`
--
ALTER TABLE `settings_lagos_lga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `settings_states`
--
ALTER TABLE `settings_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `settings_zone`
--
ALTER TABLE `settings_zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `settings_zone_backup`
--
ALTER TABLE `settings_zone_backup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `smart_admin`
--
ALTER TABLE `smart_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tracking_details`
--
ALTER TABLE `tracking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
