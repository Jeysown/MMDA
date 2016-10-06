-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2016 at 12:52 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mmda`
--

-- --------------------------------------------------------

--
-- Table structure for table `prone`
--

CREATE TABLE IF NOT EXISTS `prone` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `location` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `prone`
--

INSERT INTO `prone` (`ID`, `latitude`, `longitude`, `location`) VALUES
(2, 14.694993, 121.031444, 'Quirino Highway'),
(3, 14.645309, 120.983548, 'Rizal Avenue Extension'),
(4, 14.654633, 120.957367, 'C-4 Road'),
(5, 14.668703, 120.962598, 'Gov. Pascual Ave'),
(6, 14.679304, 120.961569, 'M.H Del Pilar St.'),
(7, 14.66643, 120.983477, 'McArthur Highway'),
(8, 14.636977, 120.960692, 'Honorio Lopez Blvd'),
(9, 14.642623, 120.953944, 'Radial Road 10'),
(10, 14.668703, 120.962598, 'Gov. Pascual Ave.'),
(11, 14.661695, 120.9437088, 'M. Naval St'),
(12, 14.6983679, 120.9750308, 'Maysan Road'),
(13, 14.6928042, 120.9667397, 'McArthur Highway'),
(14, 14.5505859, 121.027421, 'EDSA'),
(15, 14.5115844, 121.0300889, 'Pres. Sergio Osmeña Highway'),
(16, 14.5115844, 121.0300889, 'Buendia Ave.'),
(17, 14.4403658, 120.9981088, 'Alabang-Zapote Road'),
(18, 14.4243497, 121.0299451, 'Real St.'),
(19, 14.4282532, 121.0004168, 'Marcos Alvarez Ave.'),
(20, 14.4398552, 121.0430144, 'West Service Road'),
(21, 14.4403606, 120.9981088, 'National Highway: Alabang-Zapote Road'),
(22, 14.4798234, 121.0428424, 'West Service Road'),
(23, 14.5261728, 120.9914434, 'Roxas Blvd.'),
(24, 14.4994775, 120.9941689, 'Ninoy Aquino Ave.'),
(25, 14.4668317, 121.0132325, 'Dr. A. Santos Ave.'),
(26, 14.5374904, 120.9965166, 'EDSA'),
(27, 14.5535642, 120.9911321, 'Buendia Ext.'),
(28, 14.5490961, 120.9894841, 'Roxas Blvd.'),
(29, 14.5233127, 121.0523728, 'Carlos P. Garcia Ave. (C-5)'),
(30, 14.4989545, 121.061065, 'M. L. Quezon St.'),
(31, 14.51383, 121.0315691, 'East Service Road'),
(32, 14.5451858, 121.0663202, 'M. Almeda St.'),
(33, 14.5458139, 121.063843, 'P. Herrera St.'),
(34, 14.6230117, 121.0841018, 'Marcos Highway'),
(35, 14.6350505, 121.0991299, 'Sumulong Highway'),
(36, 14.571116, 121.0444166, 'EDSA'),
(37, 14.5886329, 121.0410704, 'Shaw Blvd'),
(38, 14.590526, 121.0825219, 'Ortigas Ave.'),
(39, 14.5774858, 121.0712981, 'E. Rodriguez Jr. Ave.'),
(40, 14.6188835, 121.0904116, 'Marcos Highway'),
(41, 14.5661387, 121.0712666, 'Julia Vargas'),
(42, 14.6034922, 121.0424669, 'Ortigas Ave.'),
(43, 14.6046687, 121.0555774, 'EDSA'),
(44, 14.6076404, 121.0370945, 'Santolan Road'),
(45, 14.5998042, 121.0345793, 'P. Guevarra St.'),
(46, 14.6082566, 121.025801, 'N. Domingo St.'),
(47, 14.5715058, 120.9977516, 'Pres. Sergio Osmeña Highway'),
(48, 14.6121973, 120.9582629, 'Radial Road 10'),
(49, 14.5514161, 120.987522, 'Roxas Blvd.'),
(50, 14.7052654, 121.0715684, 'Commonwealth Ave.'),
(51, 14.668703, 120.962598, 'Gov. Pascual Ave'),
(52, 14.679304, 120.961569, 'M.H Del Pilar St.'),
(53, 14.66643, 120.983477, 'McArthur Highway'),
(54, 14.636977, 120.960692, 'Honorio Lopez Blvd'),
(55, 14.642623, 120.953944, 'Radial Road 10'),
(56, 14.668703, 120.962598, 'Gov. Pascual Ave.'),
(57, 14.661695, 120.9437088, 'M. Naval St'),
(58, 14.6983679, 120.9750308, 'Maysan Road'),
(59, 14.6928042, 120.9667397, 'McArthur Highway'),
(60, 14.5505859, 121.027421, 'EDSA'),
(61, 14.5115844, 121.0300889, 'Pres. Sergio Osmeña Highway'),
(62, 14.5115844, 121.0300889, 'Buendia Ave.'),
(63, 14.4403658, 120.9981088, 'Alabang-Zapote Road'),
(64, 14.4243497, 121.0299451, 'Real St.'),
(65, 14.4282532, 121.0004168, 'Marcos Alvarez Ave.'),
(66, 14.4398552, 121.0430144, 'West Service Road'),
(67, 14.4403606, 120.9981088, 'National Highway: Alabang-Zapote Road'),
(68, 14.4798234, 121.0428424, 'West Service Road'),
(69, 14.5261728, 120.9914434, 'Roxas Blvd.'),
(70, 14.4994775, 120.9941689, 'Ninoy Aquino Ave.'),
(71, 14.4668317, 121.0132325, 'Dr. A. Santos Ave.'),
(72, 14.5374904, 120.9965166, 'EDSA'),
(73, 14.5535642, 120.9911321, 'Buendia Ext.'),
(74, 14.5490961, 120.9894841, 'Roxas Blvd.'),
(75, 14.5233127, 121.0523728, 'Carlos P. Garcia Ave. (C-5)'),
(76, 14.4989545, 121.061065, 'M. L. Quezon St.'),
(77, 14.51383, 121.0315691, 'East Service Road'),
(78, 14.5451858, 121.0663202, 'M. Almeda St.'),
(79, 14.5458139, 121.063843, 'P. Herrera St.'),
(80, 14.6230117, 121.0841018, 'Marcos Highway'),
(81, 14.6350505, 121.0991299, 'Sumulong Highway'),
(82, 14.571116, 121.0444166, 'EDSA'),
(83, 14.5886329, 121.0410704, 'Shaw Blvd'),
(84, 14.590526, 121.0825219, 'Ortigas Ave.'),
(85, 14.5774858, 121.0712981, 'E. Rodriguez Jr. Ave.'),
(86, 14.6188835, 121.0904116, 'Marcos Highway'),
(87, 14.5661387, 121.0712666, 'Julia Vargas'),
(88, 14.6034922, 121.0424669, 'Ortigas Ave.'),
(89, 14.6046687, 121.0555774, 'EDSA'),
(90, 14.6076404, 121.0370945, 'Santolan Road'),
(91, 14.5998042, 121.0345793, 'P. Guevarra St.'),
(92, 14.6082566, 121.025801, 'N. Domingo St.'),
(93, 14.5715058, 120.9977516, 'Pres. Sergio Osmeña Highway'),
(94, 14.6121973, 120.9582629, 'Radial Road 10'),
(95, 14.5514161, 120.987522, 'Roxas Blvd.'),
(96, 14.7052654, 121.0715684, 'Commonwealth Ave.'),
(97, 14.6342974, 121.0417414, 'EDSA'),
(98, 14.6938539, 121.0284684, 'Quirino Highway');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `status` varchar(30) NOT NULL,
  `report_date` varchar(20) NOT NULL,
  `report_time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `message`, `latitude`, `longitude`, `status`, `report_date`, `report_time`) VALUES
(1, 'Awwwwwwwww', '15.0929081', '121.0613609', 'Motor Accident', '2016-01-30', '10:34'),
(2, 'Awwwwwwwww', '14.8740942', '121.1427638', 'Car Accident', '2015-09-23', '1:25'),
(3, 'Awwwwwwwww', '14.760122', '121.2003971', 'Car Accident', '2012-04-03', '9:49'),
(4, 'Awwwwwwwww', '14.5772737', '121.0857342', 'Motor Accident', '2015-07-11', '8:52'),
(5, 'Help', '14.8740942', '121.1427638', 'Motor Accident', '2016-10-05', '04:00:00 PM AM'),
(6, 'help', '14.5893181', '121.0179241', 'Accident', '2016-10-05', '04:08:59 PM'),
(7, '0', '14.5893882', '121.0178912', 'Motor Accident', '2016-10-05', '04:14:37 PM'),
(8, '0', '14.5893219', '121.0179259', 'Car Accident', '2016-10-05', '04:17:35 PM'),
(9, '0', '14.5893483', '121.0179055', 'Car Accident', '2016-10-05', '04:19:02 PM'),
(10, 'help me please ', '14.5893503', '121.017907', 'Motor Accident', '2016-10-05', '04:20:51 PM'),
(11, 'tulong ', '14.5893503', '121.017907', 'Car Accident', '2016-10-05', '04:21:16 PM'),
(16, 'Awwwwwwwww', '14.5893885', '121.0613609', 'Motor Accident', '2016-10-01', '11:06:00 AM'),
(17, 'tulungan niyo po ako ', '14.5893885', '121.0178913', 'Car Accident', '2016-10-05', '04:22:52 PM'),
(18, 'Awwwwwwwww', '14.5893885', '121.0613609', 'Motor Accident', '2016-10-01', '11:06:00 AM'),
(19, 'tulonggggggg ', '14.6006212', '120.9587992', 'Car Accident', '2016-10-06', '06:47:46 AM'),
(20, 'help ', '14.6001797', '120.9604991', 'Motor Accident', '2016-10-06', '06:38:29 AM'),
(21, 'tulong  ', '14.6006212', '120.9587992', 'Motor Accident', '2016-10-06', '06:58:55 AM');

-- --------------------------------------------------------

--
-- Table structure for table `temporary`
--

CREATE TABLE IF NOT EXISTS `temporary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `report_date` varchar(20) NOT NULL,
  `report_time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fName` varchar(250) NOT NULL,
  `lName` varchar(250) NOT NULL,
  `mName` varchar(250) NOT NULL,
  `emailAddress` varchar(250) NOT NULL,
  `plateNumber` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fName`, `lName`, `mName`, `emailAddress`, `plateNumber`) VALUES
(1, 'user1', '313debd0b750f6774a21b22783770ddc', 'Jose', 'Reyes', 'Perez', 'josereyes@gmail.com', 'DFG 789'),
(3, 'winwin', '1cd13479e5609d79971c69051158a27f', 'Glenwin', 'Bernabe', 'Gonzalo', 'glenwinbernabe@gmail.com', 'WIN 018'),
(7, 'kevin', '827ccb0eea8a706c4c34a16891f84e7b', 'Kevin', 'Cantillan', 'Santiago', 'kevin@gmail.com', 'KEV 123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
