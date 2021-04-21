-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 12:46 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fet_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `remarks` text NOT NULL,
  `is_archived` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`id`, `logo`, `name`, `address`, `remarks`, `is_archived`) VALUES
(1, '', 'University of sindh (Allama II Kazi Campus)', 'uos jamshoro', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `class_rooms`
--

CREATE TABLE `class_rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `remarks` text NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_archived` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_rooms`
--

INSERT INTO `class_rooms` (`id`, `name`, `barcode`, `room_no`, `date_added`, `remarks`, `added_by`, `is_archived`) VALUES
(7, 'Data comm Lab', '', '1', '2021-04-20 21:47:00', '', 1, 0),
(8, 'Comp Lab 1', '', '2', '2021-04-20 21:47:18', '', 1, 0),
(9, 'Comp Lab 2', '', '3', '2021-04-20 21:47:28', '', 1, 0),
(10, 'Some Class', '', '5', '2021-04-20 21:47:45', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `fac_id` int(3) DEFAULT NULL,
  `campus_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `is_inst` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `code` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `remarks` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `email` text COLLATE latin1_general_ci NOT NULL,
  `sac_password` text COLLATE latin1_general_ci NOT NULL,
  `reeset_token` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `user_temp` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `pass_temp` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `city_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `form_final_per` int(11) NOT NULL,
  `is_archived` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `fac_id`, `campus_id`, `name`, `is_inst`, `code`, `remarks`, `email`, `sac_password`, `reeset_token`, `user_temp`, `pass_temp`, `city_name`, `form_final_per`, `is_archived`) VALUES
(1, 6, 0, 'ECONOMICS', 'N', 'ECON', 'ECONOMICS', 'chair.economics@usindh.edu.pk', 'fcae3f9041169c92e3fdd096f09dbff9', '', '', '', '', 40, 0),
(2, 2, 6, 'BUSINESS ADMINSTRATION', 'N', 'BUS', 'BBA', '', 'e025582dca473c01bea5b4d525e5a59e', 'HoD6663', '', '', '', 40, 0),
(3, 5, 0, 'INSTITUTE OF INFORMATION &COMMUNICATION TECHNOLOGY', 'Y', '', '', 'dir.iict@usindh.edu.pk', 'a4d08fe1309f4c270ad50c86c6916ec4', 'HoD566', '', '', '', 40, 0),
(7, 2, 0, 'INSTITUTE OF COMMERCE', 'Y', '', 'COM', 'dir.com@usindh.edu.pk', '38028b03a2fbfc58f972e1660926813b', '', '', '', '', 40, 0),
(6, 2, 0, 'INSTITUTE  OF BUSINESS ADMINISTRATION', 'Y', '', 'IBA', 'dir.iba@usindh.edu.pk', '4ec55f75ebd1ed0bf86caff5ad60c625', '', '', '', '', 40, 0),
(8, 5, 3, 'INFORMATION TECHNOLOGY', 'N', 'ITEC', 'INFORMATION TECHNOLOGY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(9, 5, 0, 'INSTITUTE OF MATHEMATICS & COMPUTER SCIENCE', 'Y', '', 'IMCS', 'dir.imcs@usindh.edu.pk', 'af5f501fd9ce0ec9cd85a7b462cfcc2f', '', '', '', '', 40, 0),
(10, 5, 9, 'COMPUTER SCIENCE', 'N', 'COMP', 'COMPUTER SCIENCE', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(11, 5, 0, 'DR. M.A. KAZI INSTITUTE OF CHEMISTRY', 'Y', '', 'CHEMISTRY', 'dir.chem@usindh.edu.pk', '73e65a52a01b1c5157033399f474cbdc', '', '', '', '', 40, 0),
(12, 5, 11, 'CHEMISTRY', 'N', 'CHEM', 'CHEMISTRY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(13, 5, 3, 'SOFTWARE ENGINEERING', 'N', 'SWE', 'SOFTWARE ENGINEERING', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(14, 5, 3, 'TELECOMMUNICATION', 'N', 'TELC', 'TELECOMMUNICATION', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(15, 5, 3, 'ELECTRONICS', 'N', 'ELEC', 'ELECTRONICS', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(16, 6, 0, 'SINDH DEVELOPMENT STUDIES CENTRE', 'N', 'DS', 'SINDH DEVELOPMENT STUDIES CENTRE', 'dir.sdsc@usindh.edu.pk', '18a8bb21b38434263c998a77df1fe0ea', '', '', '', '', 40, 0),
(17, 5, 0, 'INSTITUTE OF BIOTECHNOLOGY & GENETIC ENGINEERING', 'Y', '', '', 'dir.bt@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD4316', '', '', '', 40, 0),
(18, 5, 17, 'GENETIC ENGINEERING', 'N', 'GENG', 'GENETIC ENGINEERING', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(19, 5, 68, 'BOTANY', 'N', 'BOTN', 'BOTANY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(20, 5, 0, 'FRESH WATER BIOLOGY & FISHERIES', 'N', 'FWBF', 'FRESH WATER BIOLOGY & FISHERIES', 'chair.fbf@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD11508', '', '', '', 40, 0),
(21, 5, 0, 'GEOGRAPHY', 'N', 'GEOG', 'GEOGRAPHY', 'chair.geo@usindh.edu.pk', 'f4091b02c6c01b964fe81cf56acba97b', '', '', '', '', 40, 0),
(22, 5, 0, 'CENTRE FOR PURE & APPLIED GEOLOGY', 'N', 'GEOL', 'GEOLOGY', 'dir.cpag@usindh.edu.pk', 'ba966d27d86cc255ceda313dd255a6c7', '', '', '', '', 40, 0),
(23, 5, 79, 'MICROBIOLOGY', 'N', 'MICR', 'MICORBIOLOGY', 'director.mb@usindh.edu.pk', '136e83004ff4c86b067abf41bc52eb82', 'HoD7338', '', '', '', 40, 0),
(24, 5, 69, 'PHYSICS', 'N', 'PHYS', 'PHYSICS', 'dir.phy@usindh.edu.pk', '6f276d7022b662f67c4c4446e33a0d3d', '', '', '', '', 40, 0),
(25, 5, 0, 'PHYSIOLOGY', 'Y', 'PHSL', 'PHYSIOLOGY', 'chair.physio@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD5727', '', '', '', 40, 0),
(26, 5, 0, 'STATISTICS', 'N', 'STAT', 'STATISTICS', 'chair.stat@usindh.edu.pk', 'f480034fee8f39994f1989df74cdd206', 'HoD12150', '', '', '', 40, 0),
(27, 5, 0, 'ZOOLOGY', 'N', 'ZOOL', 'ZOOLOGY', 'chair.zoo@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD17698', '', '', '', 40, 0),
(28, 6, 0, 'INSTITUTE OF GENDER STUDIES', 'Y', '', 'IGS', 'dir.gs@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD13730', '', '', '', 40, 0),
(29, 6, 28, 'GENDER STUDIES', 'N', 'WS', 'GS', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(30, 5, 0, 'CENTRE FOR  PHYSICAL EDUCATION  HEALTH & SPORTS SC', 'N', 'HPE', 'HEALTH & PHYSICAL EDUCATION', 'dir.pes@usindh.edu.pk', '3bb3114b1102300d6806e8a8668dbeb0', '', '', '', '', 40, 0),
(31, 6, 0, 'GENERAL HISTORY', 'N', 'GH', 'GENRAL HISTORY', 'chair.gh@usindh.edu.pk', 'ec2b438df9d4913a3fd783cd05f082b3', '', '', '', '', 40, 0),
(32, 6, 0, 'INTERNATIONAL RELATIONS', 'N', 'IR', 'I R', 'chair.ir@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD21267', '', '', '', 40, 0),
(33, 6, 0, 'LIBRARY INFORMATION SCIENCE & ARCHIVE STUDIES', 'N', 'LS', 'LIBRARY SCIENCES', 'chair.lisas@usindh.edu.pk', 'fd55ab27afc262c72684b9471d64c081', '', '', '', '', 40, 0),
(34, 6, 0, 'MEDIA & COMMUNICATION STUDIES', 'N', 'MC', 'MEDIA & COMMUNICATION STUDIES', 'chair.mc@usindh.edu.pk', '7fd638a4ce60abe1f4d1178ec62cfb0f', '', '', '', '', 40, 0),
(35, 6, 0, 'CENTRE FOR RURAL DEVELOPMENT COMMUNICATION', 'N', 'RURAL', 'RURAL DEVELOPMENT / MASS COMMUNICATION', 'dir.crdc@usindh.edu.pk', '7fd638a4ce60abe1f4d1178ec62cfb0f', 'HoD7302', '', '', '', 40, 0),
(36, 6, 0, 'POLITICAL SCIENCE', 'N', 'POL', 'POLITICAL SCIENCE', 'chair.polsc@usindh.edu.pk', 'ce63fb91d2abb487b1d18e22e4d05480', '', '', '', '', 40, 0),
(37, 6, 0, 'PSYCHOLOGY', 'N', 'PSY', 'PSYCHOLOGY', 'chair.psy@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD29657', '', '', '', 40, 0),
(38, 6, 0, 'PUBLIC ADMINISTRATION', 'N', 'PA', 'PUBLIC ADMINISTRATION', 'chair.pa@usindh.edu.pk', 'cb19f461dd30a9dbe505943047816938', '', '', '', '', 40, 0),
(39, 6, 0, 'SOCIOLOGY', 'N', 'SOC', 'SOCIOLOGY', 'chair.socio@usindh.edu.pk', '03238bebc1591aec2ce7fbd90ac4f437', 'HoD13061', '', '', '', 40, 0),
(40, 6, 0, 'SOCIAL WORK', 'N', 'SW', 'SOCIAL WORK', 'chair.sw@usindh.edu.pk', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', 40, 0),
(41, 6, 0, 'CRIMINOLOGY', 'N', 'CRM', 'CRIMINOLOGY', 'chair.crim@usindh.edu.pk', '9e5e527eba535db2fdae59d84d397cfa', '', '', '', '', 40, 0),
(42, 2, 7, 'COMMERCE', 'N', 'COM', '', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(43, 7, 0, 'INSTITUTE OF ARTS & DESIGN', 'Y', '', 'FINE ARTS', 'dir.ad@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(44, 7, 0, 'INSTITUTE OF LANGUAGES', 'Y', '', 'INSTITUTE OF LANGUAGES', 'dir.lang@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(45, 7, 70, 'ENGLISH', 'N', 'ENG', 'ENLISH', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(46, 7, 0, 'PHILOSOPHY', 'N', 'PHIL', 'PHILOSOPHY', 'chair.phil@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(47, 7, 0, 'SINDHI', 'N', 'SIND', 'SINDHI', 'chair.sin@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(48, 7, 0, 'URDU', 'N', 'URD', 'URDU', 'chair.urdu@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD14015', '', '', '', 40, 0),
(49, 7, 43, 'ART & DESIGN', 'N', 'FAD', 'FINE ART', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(50, 7, 44, 'ARABIC', 'N', 'AR', 'ARABIC', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(51, 7, 44, 'PERSIAN', 'N', 'PERS', 'PERSIAN', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(57, 9, 0, 'COMPARATIVE RELIGION & ISLAMIC CULTURE', 'N', 'IC', '', 'chair.cris@usindh.edu.pk', '5976d08e6aef0f0c506c8a333164f9c6', 'HoD32019', '', '', '', 40, 0),
(58, 9, 0, 'MUSLIM HISTORY', 'N', 'MH', '', 'chair.mh@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD32336', '', '', '', 40, 0),
(59, 5, 0, 'INSTITUTE OF BIOCHEMISTRY', 'Y', '', '', 'dir.bc@usindh.edu.pk', '58ca33e848f918457028a86134d9b955', '', '', '', '', 40, 0),
(60, 5, 59, 'BIOCHEMISTRY', 'N', 'BIOC', 'BIOCHEMISRY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(61, 5, 0, 'CENTRE OF ENVIRONMENTAL SCIENCES', 'N', 'ENVS', 'ENVIROMENTAL', 'dir.es@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD12074', '', '', '', 40, 0),
(62, 11, 0, 'INSTITUTE OF PHARMACY', 'Y', '', '', 'dean.pharm@usindh.edu.pk', 'd352d25c3aa2e00532ed9e79be2b8bb8', '', '', '', '', 60, 0),
(63, 11, 62, 'PHARMACY', 'N', 'PHAR', 'PHAR', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 60, 0),
(64, 5, 9, 'MATHEMATICS', 'N', 'MATH', 'MATHEMATICS', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(65, 5, 17, 'BIOTECHNOLOGY', 'N', 'BIOT', 'BIOTECHNOLOGY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(66, 10, 0, 'PAKISTAN STUDY CENTRE', 'N', 'PS', '', 'dir.psc@usindh.edu.pk', 'ee04d4a67656cbaf8539f42f88af9dbc', '', '', '', '', 40, 0),
(67, 8, 0, 'EDUCATION', 'N', 'EDU', 'Main Department of Education', 'dean.edu@usindh.edu.pk', 'f6d7c53f57de5bc274b64fd7142d8a40', '', '', '', '', 40, 0),
(68, 5, 0, 'INSTITUTE OF PLANT SCIENCES', 'Y', 'BOTN', 'BOTANY', 'dir.plant@usindh.edu.pk', '58a810d2204fdc406d2e110de8829efa', '', '', '', '', 40, 0),
(69, 5, 0, 'INSTITUTE OF PHYSICS', 'Y', '', '', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(70, 7, 0, 'INSTITUTE OF ENGLISH LANGUAGE & LITERATURE', 'Y', '', 'ENGLISH', 'dir.eng@usindh.edu.pk', '746b4d29ba635025fc4f2b62b2620d9d', '', '', '', '', 40, 0),
(71, 5, 3, 'TELEMEDICINE & E-HEALTH', 'N', 'TEMED', 'TELEMEDICINE & E-HEALTH', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(72, 10, 0, 'SINDH UNIVERSITY LAAR CAMPUS @ BADIN', 'N', 'SUBC', '', 'pvc.laar@usindh.edu.pk', '30e1a74f7358acea0cc6f773ab673b71', '', '', '', '', 40, 0),
(73, 5, 0, 'ANTHROPOLOGY & ARCHAEOLOGY', 'N', 'ANTH', 'ANTHROPOLOGY & ARCHAEOLOGY', 'chair.anth@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD9899', '', '', '', 40, 0),
(74, 8, 0, 'EDUCATION  SINDH UNIVERSITY LAAR CAMPUS @ BADIN', 'N', 'EDUL', 'LAAR BADIN', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(75, 8, 0, 'EDUCATION  P.I.T.E SINDH  NAWABSHAH', 'N', 'EDUP', 'PITE (NAWABSHAH)', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(76, 12, 88, 'LAW', 'N', 'LAW', 'LAW', 'law_test@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 65, 0),
(77, 10, 0, 'SINDH UNIVERSITY CAMPUS MIRPURKHAS', 'N', 'SUMC', '', 'pvc.mpk@usindh.edu.pk', '780a55d8e03a3a7a2c8165f815cbb510', '', '', '', '', 40, 0),
(78, 7, 0, 'CENTRE FOR MUSIC EDUCATION  INSTITUTE OF ART & DES', 'N', 'MUSC', 'CENTRE FOR MUSIC EDUCATION', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(79, 5, 0, 'SHAHEED PROF. BASHIR AHMED CHANNAR DEPARTMENT OF M', 'Y', '', '', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(80, 10, 0, 'MOHTARMA BENAZIR BHUTTO SHAHEED CAMPUS DADU', 'N', 'SUDC', '', 'pvc.dadu@usindh.edu.pk', '605f6e2f32c20233f41322c8850e057f', '', '', '', '', 40, 0),
(81, 13, 0, 'INSTITUTE OF MODEREN SCIENCES & ARTS  HYDERABAD', 'N', '', '03332766010', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(83, 13, 0, 'SUKKUR INSTITUTE OF SCIENCE & TECHNOLOGY  SUKKAR', 'N', '', '0715614116', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(82, 13, 0, 'COLLEGE OF MODEREN SCIENCES', 'N', '', '03136667700', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(84, 10, 0, 'SINDH UNIVERSITY CAMPUS THATTA', 'N', 'SUCT', '', 'pvc.thatta@usindh.edu.pk', 'efebfb5e5abccfc0fdbc4e07eae91390', '', '', '', '', 40, 0),
(85, 10, 0, 'SINDH UNIVERSITY CAMPUS LARKANA', 'N', '', '', 'pvc.larkana@usindh.edu.pk', 'd308a4b759a8ed5334edeef8d9c60613', '', '', '', '', 40, 0),
(86, 5, 59, 'NUTRITION & FOOD TECHNOLOGY', 'N', 'NUFT', 'NUTRITION & FOOD TECHNOLOGY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(87, 10, 0, 'SINDH UNIVERSITY CAMPUS BHIT SHAH  IUPSMS', 'N', '', '', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(88, 12, 0, 'INSTITUTE OF LAW', 'Y', '', 'LAW', 'dean.law@usindh.edu.pk', '069f5b72e8a290c533857c2d0b3fe7f5', '', '', '', '', 65, 0),
(89, 10, 0, 'SYED ALLAHANDO SHAH CAMPUS NAUSHAHRO FEROZ', 'N', 'SUNC', '', 'pvc.nf@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD6548', '', '', '', 40, 0),
(90, 13, 0, 'ANEES HASSAN CENTRE OF EXCELLENCE  HYDERABAD', 'N', '', '03213133050', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(91, 13, 0, 'NATIONAL COLLEGE OF ARTS MANAGEMENT  HYDERABAD', 'N', '', '0223812383/ 0223821393', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(92, 13, 0, 'HYDERABAD INSTITUTE OF ART  SCIENCES & TECHNOLOGY', 'N', '', '03432392847', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(93, 13, 0, 'MUHAMMAD INSTITUTE OF SCIENCE & TECHNOLOGY  MIRPUR', 'N', '', '0233516049', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(94, 13, 0, 'NAZEER HASSAIN INSTITUTE OF EMERGING SCIENCE  MIRP', 'N', '', '0233863522', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(95, 13, 0, 'GOVERNMENT BOYS COLLEGE KALI MORI  HYDERABAD', 'N', '1', '03013614184', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(96, 13, 0, 'GOVERNMENT BOYS COLLEGE QASIMABAD  HYDERABAD', 'N', '58', '03332457571', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(97, 13, 0, 'GOVERNMENT NAZARETH GIRLS COLLEGE  HYDERABAD', 'N', '13', '03018370965', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(99, 13, 0, 'GOVERNMENT GIRLS COLLEGE QASIMABAD  HYDERABAD', 'N', '53', '03003013341', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(100, 13, 0, 'GOVERNMENT SHAH LATIF GIRLS COLLEGE LATIFABAD  HYDERABAD', 'N', '9', '03332602126', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(101, 13, 0, 'IBNE RUSHID GOVERNMENT GIRLS COLLEGE  MIRPURKHAS', 'N', '18', '02339290232', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(102, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  TANDO JAN MUHAMMAD', 'N', '19', '03342551289', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(103, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN) - HYDERABAD', 'N', '', '03013617298', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(104, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (WOMEN) - HYDERABAD', 'N', '', '03003796085', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(105, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN) - MIRPURKHAS', 'N', '', '03073432008', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(106, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (WOMEN) - MIRPURKHAS', 'N', '', '03003321446', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(107, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN/ WOMEN) - BADIN', 'N', '', '03332707826', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(108, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN) - THATTA', 'N', '', '03003250562', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(109, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (WOMEN) - THATTA', 'N', '', '03337076876', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(110, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN/ WOMEN) - MITHI', 'N', '', '03023217823', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(111, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (WOMEN)', 'N', '', '03013641804', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(112, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN)  ', 'N', '', '03332180822', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(113, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (WOMEN)', 'N', '', '03023909464', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(114, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN)  ', 'N', '', '03463862138', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(115, 13, 0, 'PROVINCIAL INSTITUTE OF TEACHERS EDUCATION (PITE) ', 'N', '', '03013610556', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(116, 13, 0, 'INDUS COLLEGE OF LAW  HYDERABAD', 'N', '', '03332525427', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(117, 5, 25, 'MEDICAL LABORATORY TECHNOLOGY', 'N', 'MLT', 'MEDICAL LABORATORY TECHNOLOGY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40, 0),
(122, 14, 0, 'GOVERNMENT COLLEGES', 'N', '5.0', '', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', 'HYDERABAD', 40, 0),
(123, 5, 0, 'NATIONAL CENTRE OF EXCELLENCE  IN ANALYTICAL CHEMI', 'N', 'NCEAC', '', '', '', '', '', '', '', 40, 0),
(124, 5, 0, 'INSTITUTE FOR ADVANCED RESEARCH STUDIES IN CHEMICAL', 'Y', '', '', 'dir.iarscs@usindh.edu.pk', '19f210b05a9749765ab719eb1d5e9ad5', '', '', '', '', 40, 0),
(125, 15, 0, 'INFORMATION TECHNOLOGY SERVICES CENTRE', '', 'ITSC', '', 'itsc@usindh.edu.pkk', '17737fff315297aa506af526812f3564', 'HoD22604', '', '', 'JAMSHORO', 40, 0),
(126, 15, 0, 'REGISTRAR', 'Y', '', '', 'registrar@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(127, 15, 0, 'CONTROLLER OF EXAMINATIONS (SEMESTER)', 'Y', 'CES', '', 'controller@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(128, 15, 0, 'CONTROLLER OF EXAMINATIONS (ANNUAL)', 'Y', 'CEA', '', 'controller.annual@usindh.edu.pk', 'ab3f14c59bae2961429be7c1f8a8b1cb', '', '', '', 'JAMSHORO', 40, 0),
(129, 15, 0, 'DIRECTOR ADMISSIONS', 'Y', 'DA', '', 'dir.adms@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(130, 15, 0, 'DIRECTOR FINANCE', 'Y', 'DF', '', 'df.outward@usindh.edu.pk', '4d55fb060da944225e2bc6b16d23bf4a', '', '', '', 'JAMSHORO', 40, 0),
(131, 15, 126, 'ADMINISTRATION ADMIN OFFICE', 'N', '', '', 'admin.admin.io@usindh.edu.pk', '549819d8770c8d5e171ece507eacb471', '', '', '', 'JAMSHORO', 40, 0),
(132, 15, 126, 'ADMINISTRATION TEACH OFFICE', 'N', '', '', 'admin.teach.io@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(133, 15, 126, 'GENERAL BRANCH', 'N', '', '', 'admin.general.io@usindh.edu.pk', '6ff2e3de17f7fdbbc5fab2bddb1ba5a4', '', '', '', 'JAMSHORO', 40, 0),
(134, 15, 130, 'BURSUR  UNIVERSITY OF SINDH  JAMSHORO.', 'N', '', '', 'bursar@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(135, 15, 130, 'AUDITOR  UNIVERSITY OF SINDH  JAMSHORO', 'N', '', '', 'auditor@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(136, 15, 130, 'CHIEF ACCOUNTANT-I  UNIVERSITY OF SINDH  JAMSHORO', 'N', '', '', 'chief.acount@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(137, 15, 129, 'DIRECTORATE OF ADMISSIONS  UNIVERSITY OF SINDH', 'N', '', '', 'admin.admissions@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(138, 15, 127, 'DIRECTORATE OF CONTROLLER OF EXAMINATION (SEMESTER', 'N', '', '', 'controller.io@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(139, 15, 128, 'DIRECTORATE OF CONTROLLER OF EXAMINATION (ANNUAL)', 'N', '', '', 'controller.annual.io@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(140, 15, 0, 'INSPECTOR OF AFFILIATED COLLEGES  UNIVERSITY OF SI', 'N', '', '', 'insp.colleges@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(141, 15, 0, 'ADVISOR  PLANNING & DEVELOPMENT CELL  UNIVERSITY O', 'Y', '', '', 'advisorpnd@usindh.edu.pk', '', '', '', '', 'JAMSHORO', 40, 0),
(142, 15, 141, 'DIRECTORATE OF PLANNING & DEVELOPMENT CELL  UNIVER', 'N', '', '', 'directorate.pnd.io@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(143, 15, 0, 'DIRECTOR  PLANNING & DEVELOPMENT CELL  UNIVERSITY ', 'N', '', '', 'dirpnd@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(144, 15, 0, 'DIRECTOR OF PROCUREMENT  UNIVERSITY OF SINDH', 'Y', '', '', 'pso@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(145, 15, 144, 'DIRECTORATE OF PROCUREMENT  UNIVERSITY OF SINDH', 'N', '', '', 'outward.pso@usindh.edu.pk', 'bb4499f7330f05c8e8b2ac63a1485f0d', '', '', '', 'JAMSHORO', 40, 0),
(146, 15, 0, 'QUALITY ENHANCEMENT CELL (QEC)', 'N', 'QEC', '', 'info.qec@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(147, 15, 128, 'OFFICE OF THE DEPUTY CONTROLLER OF EXAMINATIONS (A', 'N', '', '', 'deputycontroller.exam@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(148, 15, 128, 'TOP SECRET SECTION (ANNUAL)', 'N', '', '', 'secretsection.exam.annual@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(149, 15, 128, 'VERIFICATION SECTION EXAMINATION (ANNUAL)', 'N', '', '', 'verificationsection.exam.annual@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(150, 15, 128, ' MIS-COMPUTER LAB (ANNUAL)', 'N', '', '', 'mis.exam.annual@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40, 0),
(151, 15, 0, 'DEAN - FACULTY OF SOCIAL SCIENCES', 'N', 'DFSS', '', 'dean.social@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'JAMSHORO', 40, 0),
(152, 15, 126, 'REGISTRAR OFFICE (PA)', 'N', 'ROPA', '', 'registrar.pa.io@usindh.edu.pk', '8bf76d6df3e88bc2da3b9e06ea70b383', '', '', '', 'JAMSHORO', 40, 0),
(153, 15, 0, 'DIRECTORATE OF SPORTS GIRLS', 'N', 'DSG', '', 'outward.gsports@usindh.edu.pk', '078b2064b0abf99e6cfe3106f581f0e6', '', '', '', 'JAMSHORO', 40, 0),
(154, 15, 0, 'DEAN - COMMERCE & BUSINESS ADMINISTRATION', 'N', 'DCBA', '', 'dean.cba@usindh.edu.pk', 'def28c1a7fe67216aeb0fcf37bd447b0', '', '', '', 'JAMSHORO', 40, 0),
(155, 15, 0, 'VICE-CHANCELLOR SECRETARIAT', 'N', 'VCS', '', 'outward.vc@usindh.edu.pk', '46503c65a5b993974ee0892b5fde381b', '', '', '', 'JAMSHORO', 40, 0),
(158, 13, 0, 'GOVT:S.S.ARTS/COMMERCE COLLEGE HYDERABAD', 'N', '2', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(159, 13, 0, 'GOVERNMENT CITY COLLEGE HYDERABAD', 'N', '3', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(160, 13, 0, 'Government M.B & G.F  Girls College  Hyderabad', 'N', '5', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(161, 13, 0, 'GOVERNMENT K.B.M.S GIRLS DEGREE COLLEGE HYDERABAD', 'N', '6', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(163, 13, 0, 'GOVT GHAZALI COLLEGE LATIFABAD HYDERABAD', 'N', '8', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(164, 13, 0, 'MIR GHULAM ALI KHAN TALPUR GOVERNMENT BOYS DEGREE COLLEGE  Tando Muhammad Khan', 'N', '10', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'TANDO MUHAMMAD KHAN', 40, 0),
(165, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  MATLI', 'N', '11', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MATLI', 40, 0),
(166, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  MATLI', 'N', '12', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MATLI', 40, 0),
(167, 13, 0, 'GOVERNMENT SARWARI ISLAMIA DEGREE COLLEGE  HALA', 'N', '14', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HALA', 40, 0),
(168, 13, 0, 'GOVERNMENT ISLAMIA DEGREE COLLEGE  BADIN', 'N', '15', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'BADIN', 40, 0),
(169, 13, 0, 'GOVERNMENT MODEL COLLEGE   MIRPURKHAS', 'N', '16', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MIRPURKHAS', 40, 0),
(170, 13, 0, 'SHAH ABDUL LATIF GOVERNMENT DEGREE COLLEGE   MIRPURKHAS', 'N', '17', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MIRPURKHAS', 40, 0),
(171, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE   UMERKOT', 'N', '20', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'UMERKOT', 40, 0),
(172, 13, 0, 'M.D ORIENTAL AND ARTS DEGREE COLLEGE  HAJI MUHAMMAD Alam Palli', 'N', '21', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40, 0),
(173, 13, 0, 'SADIQUE FAQEER GOVERNMENT BOYS DEGREE COLLEGE  MITHI', 'N', '22', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MITHI', 40, 0),
(174, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  SEHWAN', 'N', '31', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SEHWAN', 40, 0),
(175, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  THATTA', 'N', '35', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'THATTA', 40, 0),
(176, 13, 0, 'GOVERNMENT S.M DEGREE COLLEGE  Tando Allahyar', 'N', '37', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40, 0),
(177, 13, 0, 'ALI BABA GOVERNMENT BOYS DEGREE COLLEGE  KOTRI', 'N', '38', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'KOTRI', 40, 0),
(178, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  THATTA', 'N', '39', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'THATTA', 40, 0),
(179, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  TANDO MUHAMMAD KHAN', 'N', '40', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'TM KHAN', 40, 0),
(180, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  HALA', 'N', '42', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HALA', 40, 0),
(181, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE   UMERKOT', 'N', '43', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'UMERKOT', 40, 0),
(182, 13, 0, 'GOVERNMENT DEGREE COLLEGE   TANDO JAM', 'N', '45', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'TANDO JAM', 40, 0),
(183, 13, 0, 'GOVT SINDH COLLEGE OF COMMERCE Hyderabad', 'N', '46', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(184, 13, 0, 'GOVT. GIRLS DEGREE COLLEGE LATIFABAD NO.8 HYDERABAD', 'N', '48', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(185, 13, 0, 'GOVERNMENT DR. I. H. ZUBERI GIRLS COLLEGE  HYDERABAD', 'N', '49', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(186, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  SUJAWAL', 'N', '54', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SUJAWAL', 40, 0),
(187, 13, 0, 'GOVERNMENT F.G DEGREE COLLEGE  CANTT. HYDERABAD', 'N', '55', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(188, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  KOTRI', 'N', '56', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'KOTRI', 40, 0),
(189, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  NEW SAEEDABAD', 'N', '59', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SAEEDABAD', 40, 0),
(190, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE   MATIARI', 'N', '41', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MATIARI', 40, 0),
(191, 13, 0, 'GOVERNMENT DEGREE COLLEGE KOHISAR  HYDERABAD', 'N', '60', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(192, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  TANDO JAN MUHAMMAD', 'N', '61', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'TANDO JAN MUHAMMAD', 40, 0),
(193, 13, 0, 'NATIONAL DEGREE COLLEGE   DHABEJI', 'N', '62', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'DHABEJI', 40, 0),
(194, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  MITHI', 'N', '63', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MITHI', 40, 0),
(195, 13, 0, 'GOVERNMENT COLLEGE PARETABAD HYDERABAD', 'N', '64', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(196, 13, 0, 'GOVERNMENT MUSLIM SCIENCE DEGREE COLLEGE   HYDERABAD', 'N', '65', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(197, 13, 0, 'DR. NASREEN MAQBOOL MEMON GOVERNMENT DEGREE COLLEGE  M. SADIQUE MEMON  TANDO ALLAHYAR', 'N', '66', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40, 0),
(198, 13, 0, 'GOVERNMENT GIRLS COLLEGE  KUNRI', 'N', '67', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'KUNRI', 40, 0),
(199, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  BHITSHAH', 'N', '68', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MATIARI', 40, 0),
(200, 13, 0, 'NATIONAL INSTITUTE OF EMERGING SCIENCES  MIRPURKHAS', 'N', '71', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MIRPURKHAS', 40, 0),
(201, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  BHAN SAEEDABAD', 'N', '71', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'BHAN SAEEDABAD', 40, 0),
(202, 13, 0, 'KHURSHEED BEGUM GOVERNMENT GIRLS DEGREE COLLEGE  HYDERABAD', 'N', '74', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(203, 13, 0, 'SARDAR MUHAMMAD ALI SHAH GOVERNMENT GIRLS DEGREE COLLEGE  MATIARI', 'N', '75', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MATIARI', 40, 0),
(204, 13, 0, 'GOVERNMENT PAKISTAN DEGREE COLLEGE SAEEDPUR', 'N', '76', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SAEEDPUR', 40, 0),
(205, 13, 0, 'GOVERNMENT DEGREE COLLEGE GHORA BARI', 'N', '77', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'GHORABARI', 40, 0),
(206, 13, 0, 'GOVT. JINNAH LAW COLLEGE HYDERABAD', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(207, 13, 0, 'GOVT. SINDH LAW COLLEGE HYDERABAD', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(208, 13, 0, 'QUAID-E-AZAM LAW COLLEGE NAWABSHAH', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'NAWABSHAH', 40, 0),
(209, 13, 0, 'GOVT: PIR ILLAHI BUX LAW COLLEGE  DADU', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'DADU', 40, 0),
(210, 13, 0, 'MIRPURKHAS LAW COLLEGE', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MIRPURKHAS', 40, 0),
(211, 13, 0, 'SISTECH LAW COLLEGE SUKKUR', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SUKKUR', 40, 0),
(212, 13, 0, 'SUKKUR INSTITUTE OF SCIENCE &AMP  TECHNOLOGY SUKKU', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SUKKUR', 40, 0),
(213, 13, 0, 'MAKHDOOM MUHAMMAD ZAMAN TALIB-UL-MOLA GOVT. LAW CO', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HALA', 40, 0),
(214, 13, 0, 'SHAN-E-AASI COLLEGE OF LAW TANDO ADAM', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'TANDO ADAM', 40, 0),
(215, 13, 0, 'ALI LAW COLLEGE  SANGHAR', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SANGHAR', 40, 0),
(216, 13, 0, 'QAZI MIAN AHMED QURESHI LAW COLLEGE MORO', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MORO', 40, 0),
(217, 13, 0, 'SHAHEED BENAZIR BHUTTO LAW COLLEGE', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40, 0),
(218, 13, 0, 'FAIZ MUHAMMAD SAHITO LAW COLLEGE KANDIARO', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'KANDIARO', 40, 0),
(219, 13, 0, 'INSTITUTE OF MODERN SCIENCE &AMP  ARTS IMSA', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40, 0),
(220, 15, 0, 'DEAN - FACULTY OF ARTS', 'N', 'DFA', '', 'outward.arts@usindh.edu.pk', '14a2ac4d8cd35cf9ba4417a9bdafd41e', '', '', '', 'JAMSHORO', 40, 0),
(221, 13, 0, 'HYDERABAD INSTITUTE OF ARTS  SCIENCE &AMP  TECHNOL', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(222, 13, 0, 'MUHAMMAD INSTITUTE OF SCIENCE &AMP  TECHNOLOGY', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40, 0),
(223, 13, 0, 'COLLEGE OF MODERN SCIENCES', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40, 0),
(224, 13, 0, 'NATIONAL COLEGE OF ARTS &AMP  MANAGEMENT SCIENCE', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40, 0),
(225, 13, 0, 'MANAGEMENT INSTITUTE OF TECHNOLOGY', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40, 0),
(226, 15, 0, 'DEAN - FACULTY OF NATURAL SCIENCE', 'N', 'DFNS', '', 'dean.science@usindh.edu.pk', 'b87fb4953df6e795088a9625174ebd3b', '', '', '', 'JAMSHORO', 40, 0),
(227, 15, 0, 'SINDH UNIVERSITY TESTING CENTRE', 'N', 'SUTC', '', 'outward.sutc@usindh.edu.pk', 'b30531cb18d1a55877d917c3a559b447', '', '', '', 'JAMSHORO', 40, 0),
(228, 15, 126, 'DEPUTY REGISTER AC1', 'N', 'DRAC1', '', 'outward.drac1@usindh.edu.pk', '17737fff315297aa506af526812f3564', '', '', '', 'JAMSHORO', 40, 0),
(246, 13, 0, 'GOVERNMENT SACHAL SARMAST COMMERCE COLLEGE HIRABAD  HYDERABAD', 'N', '47', '', 'xyz@test.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(229, 11, 0, 'PHARMACEUTICS', 'N', '', '', 'chair.pharm@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'JAMSHORO', 60, 0),
(230, 11, 0, 'PHARMACOLOGY', 'N', '', '', 'chair.pcology@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'JAMSHORO', 60, 0),
(231, 11, 0, 'PHARMACOGNOSY', 'N', '', '', 'chair.pgnosy@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'JAMSHORO', 60, 0),
(232, 11, 0, 'PHARMACY PRACTICE', 'N', '', '', 'chair.ppractice@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'JAMSHORO', 60, 0),
(233, 11, 0, 'PHARMACEUTICAL CHEMISTRY', 'N', '', '', 'chair.pc@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'JAMSHORO', 60, 0),
(234, 15, 0, 'DEAN - FACULTY OF EDUCATION', 'N', 'DFE', '', 'dean.edu@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'HYDERABAD', 40, 0),
(235, 6, 0, 'AREA STUDY CENTRE FAR EAST AND SOUTH EAST ASIA', 'N', 'ASCES', '', 'director.fesea@usindh.edu.pk', '02e7ee36f5d14428959d075c30712ccf', '', '', '', 'JAMSHORO', 40, 0),
(236, 8, 0, 'EDUCATIONAL MANAGEMENT AND SUPERVISION', 'N', 'EMS', '', 'chair.ems@usindh.edu.pk', 'c65f941d8f43b6b6c1ab59e81ce7f680', '', '', '', 'HYDERABAD', 40, 0),
(237, 8, 0, 'SCIENCE AND TECHNICAL EDUCATION', 'N', 'STE', '', 'chair.ste@usindh.edu.pk', '367dbef0ce9aebc16fc119252f307629', '', '', '', 'HYDERABAD', 40, 0),
(238, 8, 0, 'EARLY CHILDHOOD AND ELEMENTARY EDUCATION', 'N', 'ECEE', '', 'outward.ecee@usindh.edu.pk', 'd8136a439855a0af4e48ef21cc317ff8', '', '', '', 'HYDERABAD', 40, 0),
(239, 8, 0, 'DISTANCE CONTINUING AND COMPUTER EDUCATION', 'N', 'DCCE', '', 'chair.dcce@usindh.edu.pk', '120b553955b32419e7d1c040f48107d2', '', '', '', 'HYDERABAD', 40, 0),
(240, 8, 0, 'PSYCHOLOGICAL TESTING AND GUIDANCE AND RESEARCH', 'N', 'PTGR', '', 'chair.ptgr@usindh.edu.pk', 'da97f6aacab581c7c71e0be4c47121a6', '', '', '', 'HYDERABAD', 40, 0),
(241, 8, 0, 'CURRICULM DEVELOPMENT AND SPECIAL EDUCATION', 'N', 'CDI', '', 'chair.cdi@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'HYDERABAD', 40, 0),
(242, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  SEHWAN SHARIF', 'N', '80', '', '.', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SEHWAN', 40, 0),
(243, 15, 0, 'DIRECTOR CAMPUS SECURITY', 'N', 'DCS', '', 'outward.csecurity@usindh.edu.pk', 'e91e6348157868de9dd8b25c81aebfb9', '', '', '', 'JAMSHORO', 40, 0),
(244, 13, 0, 'GOVERNMENT DEGREE COLLEGE  LATIFABAD # 11  HYDERABAD', 'N', '7', '', 'xyz@test.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40, 0),
(247, 5, 0, 'NATIONAL CENTRE OF EXCELLENCE IN ANALYTICAL CHEMISTRY', 'N', 'NCEAC', NULL, '', '', '', '', '', 'JAMSHORO', 40, 0),
(248, 16, 1, 'Software Engineering', NULL, 'SENG', NULL, '', '', '', '', '', '', 0, 0),
(249, 16, 1, 'I.T', NULL, 'IT', NULL, '', '', '', '', '', '', 0, 0),
(250, 16, 1, 'TELECOMMUNICATION', NULL, 'TELEC', NULL, '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `remarks` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `is_archived` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `remarks`, `is_archived`) VALUES
(6, 'SOCIAL SCIENCES', '', 0),
(5, 'NATURAL SCIENCES', '', 0),
(2, 'COMMERCE & BUSINESS ADMINISTRATION', '', 0),
(7, 'ARTS', '', 0),
(8, 'EDUCATION', '', 0),
(10, 'GENERAL (OTHER)', '', 0),
(9, 'ISLAMIC STUDIES', '', 0),
(11, 'PHARMACY', '', 0),
(12, 'LAW', '', 0),
(13, 'AFFILIATED COLLEGES/ INSTITUTIONS PUBLIC & PRIVATE', '', 0),
(14, 'ANNUAL SYSTEM', '', 0),
(15, 'ADMINISTRATIVE OFFICES', NULL, 0),
(16, 'Faculty of Engineering and Telecommunication (FET)', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(11) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `news_id` int(11) NOT NULL,
  `type` enum('news') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `keyword`, `news_id`, `type`) VALUES
(33, 'abc', 2, 'news'),
(34, ' new', 3, 'news'),
(35, ' xyz', 2, 'news'),
(37, ' new', 2, 'news'),
(38, 'tesy', 2, 'news');

-- --------------------------------------------------------

--
-- Table structure for table `news_notifications`
--

CREATE TABLE `news_notifications` (
  `id` int(11) NOT NULL,
  `faculty_id` varchar(100) NOT NULL,
  `depart_id` varchar(100) NOT NULL,
  `notify_type_id` int(11) NOT NULL,
  `notification_for` varchar(255) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date_time` timestamp NULL DEFAULT current_timestamp(),
  `image` varchar(255) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `user_type_id` varchar(256) DEFAULT NULL,
  `program_id` varchar(100) DEFAULT NULL,
  `remarks` varchar(256) DEFAULT NULL,
  `in_draft` tinyint(1) NOT NULL,
  `is_archieved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_notifications`
--

INSERT INTO `news_notifications` (`id`, `faculty_id`, `depart_id`, `notify_type_id`, `notification_for`, `title`, `description`, `date_time`, `image`, `publisher_id`, `user_type_id`, `program_id`, `remarks`, `in_draft`, `is_archieved`) VALUES
(2, 'all', 'all', 4, 'university_faculty', 'updated title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-04-08 16:32:55', 'uploads/notifications_images/70438808horizon_zero_dawn_2017_video_game-wallpaper-3554x1999.jpg', 1, NULL, 'all', 'asdfasdf updated ', 0, 0),
(3, '', '', 13, 'everyone', 'test student notice', '<p>asdf asdf asdf asdf asdf asdf asf asdfasdfas dfasdf asdfa sdfasdfasdf asdf asdf asdf asdf asdf asdf asdfa sdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdfas dfas dfa sdfasdf </p>\r\n', '2021-04-08 17:20:49', '', 1, NULL, NULL, '', 0, 0),
(4, '', '', 13, 'everyone', 'another test notice Lorem ipsum dolor sit amet\r\nanother test notice Lorem ipsum dolor sit amet\r\n\r\n\r\n', '', '2021-04-08 17:21:05', 'uploads/notifications_images/136198974assassins_creed_valhalla_6-wallpaper-3554x1999.jpg', 1, NULL, NULL, '', 0, 0),
(5, '', '', 1, 'everyone', 'abc xyz', '<p>abc</p>\r\n', '2021-04-11 22:10:16', '', 1, NULL, NULL, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification_type`
--

CREATE TABLE `notification_type` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `remarks` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification_type`
--

INSERT INTO `notification_type` (`id`, `name`, `remarks`) VALUES
(1, 'General News', NULL),
(2, 'Announcement', NULL),
(3, 'Upcoming Event', NULL),
(4, 'University News', NULL),
(5, 'Examination Related', NULL),
(6, 'Admissino Related', NULL),
(7, 'Inter Departmental', NULL),
(8, 'Job Opportunity', NULL),
(9, 'Scholarship', NULL),
(10, 'Seminars & Workshops', NULL),
(11, 'Univeristy Campus', NULL),
(12, 'Affiliate Colleges', NULL),
(13, 'Student Notice', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `other_users`
--

CREATE TABLE `other_users` (
  `id` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `is_archived` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `depart_id` int(11) NOT NULL,
  `program_title` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sem_duration` int(11) DEFAULT NULL,
  `sem_per_part` int(11) DEFAULT NULL,
  `remarks` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `degree_title` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `subject` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `graduate_postgraduate` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `sem_month_duration` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `is_archived` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `depart_id`, `program_title`, `sem_duration`, `sem_per_part`, `remarks`, `degree_title`, `subject`, `graduate_postgraduate`, `sem_month_duration`, `is_archived`) VALUES
(1, 1, 'B.A (HONS) ECONOMICS', 6, 2, '15', 'Bachelor of Arts (Honours)', 'ECONOMICS', 'G', '6', 0),
(2, 1, 'M.A (HONS) ECONOMICS', 2, 2, '16', 'Master of Arts (Honours)', 'ECONOMICS', 'H', '6', 0),
(11, 13, 'BS (SOFTWARE ENGINEERING)', 8, 2, '16', 'Bachelor Studies', 'SOFTWARE ENGINEERING', 'G', '6', 0),
(4, 2, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6', 0),
(5, 2, 'M.B.A (HONS)', 4, 2, '18', 'Master of Business Administration (Hons)', '', 'H', '6', 0),
(6, 2, 'M.B.A (PASS)', 4, 2, '16', 'Master of Business Administration (Pass)', '', 'P', '6', 0),
(8, 10, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6', 0),
(10, 12, 'BS (CHEMISTRY)', 8, 2, '16', 'Bachelor Studies', 'CHEMISTRY', 'G', '6', 0),
(13, 15, 'BS (ELECTRONICS)', 8, 2, '16', 'Bachelor of Science', 'ELECTRONICS', 'G', '6', 0),
(14, 1, 'M.A (PASS) ECONOMICS', 4, 2, '16', 'Master of Arts (Pass)', 'ECONOMICS', 'P', '6', 0),
(23, 10, 'MASTER OF COMPUTER SCIENCE (MCS)', 4, 2, '17', 'Master of Computer Science', '', 'P', '6', 0),
(24, 12, 'M.Sc. (PASS) CHEMISTRY', 4, 2, '16', 'Master of Science (Pass)', 'CHEMISTRY', 'P', '6', 0),
(26, 19, 'BS (BOTANY)', 8, 2, '16', 'Bachelor Studies', 'BOTANY', 'G', '6', 0),
(27, 19, 'M.Sc. (PASS) BOTANY', 4, 2, '16', 'Master of Science (Pass)', 'BOTANY', 'P', '6', 0),
(32, 22, 'BS (GEOLOGY)', 8, 2, '16', 'Bachelor Studies', 'GEOLOGY', 'G', '6', 0),
(33, 22, 'M.Phil (GEOLOGY)', 3, 2, '18', 'Master of Philosophy', 'GEOLOGY', 'M', '6', 0),
(34, 23, 'BS (MICROBIOLOGY)', 8, 2, '16', 'Bachelor Studies', 'MICROBIOLOGY', 'G', '6', 0),
(36, 24, 'BS (PHYSICS)', 8, 2, '16', 'Bachelor Studies', 'PHYSICS', 'G', '6', 0),
(38, 25, 'BS (PHYSIOLOGY)', 8, 2, '16', 'Bachelor Studies', 'PHYSIOLOGY', 'G', '6', 0),
(40, 26, 'BS (STATISTICS)', 8, 2, '16', 'Bachelor Studies', 'STATISTICS', 'G', '6', 0),
(42, 27, 'BS (ZOOLOGY)', 8, 2, '16', 'Bachelor Studies', 'ZOOLOGY', 'G', '6', 0),
(43, 27, 'M.Sc. (PASS) ZOOLOGY', 4, 2, '16', 'Master of Science (Pass)', 'ZOOLOGY', 'P', '6', 0),
(45, 30, 'B.H.P.Ed', 2, 2, '15', 'Bachelor of Health & Physical Education', '', 'G', '6', 0),
(46, 30, 'M.H.P.Ed', 2, 2, '16', 'Master of Health & Physical Education', '', 'P', '6', 0),
(49, 29, 'P.G.D (COMMUNITY DEVELOPMENT)', 2, 2, '15', 'Post Graduate Diploma', 'COMMUNITY DEVELOPMENT', 'P', '6', 0),
(50, 31, 'B.A. (HONS) GENERAL HISTORY', 6, 2, '15', 'Bachelor of Arts (Honours)', 'GENERAL HISTORY', 'G', '6', 0),
(51, 31, 'M.A. (HONS) GENERAL HISTORY', 2, 2, '16', 'Master of Arts (Honours)', 'GENERAL HISTORY', 'H', '6', 0),
(54, 32, 'M.A (HONS) INTERNATIONAL RELATIONS', 2, 2, '16', 'Master of Arts (Honours)', 'INTERNATIONAL RELATIONS', 'H', '6', 0),
(57, 33, 'MASTER OF LIBRARY & INFORMATION SCIENCE', 2, 2, '16', 'Master of Library & Information Science', '', 'P', '6', 0),
(59, 34, 'M.A (HONS) MASS COMMUNICATION', 2, 2, '16', 'Master of Arts (Honours)', 'MASS COMMUNICATION', 'H', '6', 0),
(64, 57, 'M.A (PASS) ISLAMIC CULTURE', 4, 2, '16', 'Master of Arts (Pass)', 'ISLAMIC CULTURE', 'P', '6', 0),
(65, 57, 'B.A (HONS) COMPARATIVE RELIGION', 6, 2, '15', 'Bachelor of Arts (Honours)', 'COMPARATIVE RELIGION', 'G', '6', 0),
(69, 58, 'M.A (HONS) MUSLIM HISTORY', 2, 2, '16', 'Master of Arts (Honours)', 'MUSLIM HISTORY', 'H', '6', 0),
(71, 36, 'M.A (HONS) POLITICAL SCIENCE', 2, 2, '16', 'Master of Arts (Honours)', 'POLITICAL SCIENCE', 'H', '6', 0),
(75, 37, 'M.Sc. (PASS) PSYCHOLOGY', 4, 2, '16', 'Master of Science (Pass)', 'PSYCHOLOGY', 'P', '6', 0),
(76, 38, 'B.P.A (HONS)', 6, 2, '15', 'Bachelor of Public Administration (Honours)', '', 'G', '6', 0),
(81, 39, 'M.A (PASS) SOCIOLOGY', 4, 2, '16', 'Master of Arts (Pass)', 'SOCIOLOGY', 'P', '6', 0),
(87, 47, 'M.A (HONS) SINDHI', 2, 2, '16', 'Master of Arts (Honours)', 'SINDHI', 'H', '6', 0),
(92, 48, 'B.A (HONS) URDU', 6, 2, '15', 'Bachelor of Arts (Honours)', 'URDU', 'G', '6', 0),
(94, 45, 'B.A (HONS) ENGLISH', 6, 2, '15', 'Bachelor of Arts (Honours)', 'ENGLISH', 'G', '6', 0),
(95, 45, 'M.A (HONS) ENGLISH', 2, 2, '16', 'Master of Arts (Honours)', 'ENGLISH', 'H', '6', 0),
(96, 45, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH', 'P', '6', 0),
(97, 46, 'B.A (HONS) PHILOSOPHY', 6, 2, '15', 'Bachelor of Arts (Honours)', 'PHILOSOPHY', 'G', '6', 0),
(101, 49, 'M.A (PASS) FINE ARTS', 4, 2, '16', 'Master of Arts (Pass)', 'FINE ARTS', 'P', '6', 0),
(103, 50, 'M.A (HONS) ARABIC', 2, 2, '16', 'Master of Arts (Honours)', 'ARABIC', 'H', '6', 0),
(106, 51, 'M.A (HONS) PERSIAN', 2, 2, '16', 'Master of Arts (Honours)', 'PERSIAN', 'H', '6', 0),
(107, 51, 'M.A (PASS) PERSIAN', 4, 2, '16', 'Master of Arts (Pass)', 'PERSIAN', 'P', '6', 0),
(108, 10, 'M.Sc. (PASS) COMPUTER SCIENCE', 4, 2, '16', 'Master of Science (Pass)', 'COMPUTER SCIENCE', 'P', '6', 0),
(109, 2, 'M.B.A (EVENING)', 6, 3, '16', 'Master of Business Administration (Evening)', '', 'P', '4', 0),
(110, 42, 'B.COM (HONS)', 6, 2, '15', 'Bachelor of Commerce (Honours)', '', 'G', '6', 0),
(111, 42, 'M.COM (HONS)', 2, 2, '16', 'Master of Commerce (Honours)', '', 'H', '6', 0),
(112, 42, 'M.COM (PASS)', 4, 2, '16', 'Master of Commerce (Pass)', '', 'P', '6', 0),
(52, 31, 'M.A. (PASS) GENERAL HISTORY', 4, 2, '16', 'Master of Arts (Pass)', 'GENERAL HISTORY', 'P', '6', 0),
(53, 32, 'B.A (HONS) INTERNATIONAL RELATIONS', 6, 2, '15', 'Bachelor of Arts (Honours)', 'INTERNATIONAL RELATIONS', 'G', '6', 0),
(55, 32, 'M.A (PASS) INTERNATIONAL RELATIONS', 4, 2, '16', 'Master of Arts (Pass)', 'INTERNATIONAL RELATIONS', 'P', '6', 0),
(60, 34, 'M.A (PASS) MASS COMMUNICATION', 4, 2, '16', 'Master of Arts (Pass)', 'MASS COMMUNICATION', 'P', '6', 0),
(61, 36, 'B.A (HONS) POLITICAL SCIENCE', 6, 2, '15', 'Bachelor of Arts (Honours)', 'POLITICAL SCIENCE', 'G', '6', 0),
(72, 36, 'M.A (PASS) POLITICAL SCIENCE', 4, 2, '16', 'Master of Arts (Pass)', 'POLITICAL SCIENCE', 'P', '6', 0),
(79, 39, 'B.A (HONS) SOCIOLOGY', 6, 2, '15', 'Bachelor of Arts (Honours)', 'SOCIOLOGY', 'G', '6', 0),
(80, 39, 'M.A (HONS) SOCIOLOGY', 2, 2, '16', 'Master of Arts (Honours)', 'SOCIOLOGY', 'H', '6', 0),
(82, 40, 'B.A (HONS) SOCIAL WORK', 6, 2, '15', 'Bachelor of Arts (Honours)', 'SOCIAL WORK', 'G', '6', 0),
(83, 40, 'M.A (HONS) SOCIAL WORK', 2, 2, '16', 'Master of Arts (Honours)', 'SOCIAL WORK', 'H', '6', 0),
(84, 40, 'M.A (PASS) SOCIAL WORK', 4, 2, '16', 'Master of Arts (Pass)', 'SOCIAL WORK', 'P', '6', 0),
(85, 41, 'M.Sc. (PASS) CRIMINOLOGY', 4, 2, '16', 'Master of Science (Pass)', 'CRIMINOLOGY', 'P', '6', 0),
(37, 24, 'M.Sc. (PASS) PHYSICS', 4, 2, '16', 'Master of Science (Pass)', 'PHYSICS', 'P', '6', 0),
(39, 25, 'M.Sc. (PASS) PHYSIOLOGY', 4, 2, '16', 'Master of Science (Pass)', 'PHYSIOLOGY', 'P', '6', 0),
(98, 46, 'M.A (PASS) PHILOSOPHY', 4, 2, '16', 'Master of Arts (Pass)', 'PHILOSOPHY', 'P', '6', 0),
(86, 47, 'B.A (HONS) SINDHI', 6, 2, '15', 'Bachelor of Arts (Honours)', 'SINDHI', 'G', '6', 0),
(88, 47, 'M.A (PASS) SINDHI', 4, 2, '16', 'Master of Arts (Pass)', 'SINDHI', 'P', '6', 0),
(99, 48, 'M.A (PASS) URDU', 4, 2, '16', 'Master of Arts (Pass)', 'URDU', 'P', '6', 0),
(100, 49, 'B.A (PASS) FINE ARTS', 4, 2, '14', 'Bachelor of Arts (Pass)', 'FINE ARTS', 'G', '6', 0),
(102, 50, 'B.A (HONS) ARABIC', 6, 2, '15', 'Bachelor of Arts (Honours)', 'ARABIC', 'G', '6', 0),
(104, 50, 'M.A (PASS) ARABIC', 4, 2, '16', 'Master of Arts (Pass)', 'ARABIC', 'P', '6', 0),
(105, 51, 'B.A (HONS) PERSIAN', 6, 2, '15', 'Bachelor of Arts (Honours)', 'PERSIAN', 'G', '6', 0),
(68, 58, 'B.A (HONS) MUSLIM HISTORY', 6, 2, '15', 'Bachelor of Arts (Honours)', 'MUSLIM HISTORY', 'G', '6', 0),
(70, 58, 'M.A (PASS) MUSLIM HISTORY', 4, 2, '16', 'Master of Arts (Pass)', 'MUSLIM HISTORY', 'P', '6', 0),
(113, 60, 'BS (BIOCHEMISTRY)', 8, 2, '16', 'Bachelor Studies', 'BIOCHEMISTRY', 'G', '6', 0),
(114, 60, 'M.Sc. (PASS) BIOCHEMISTRY', 4, 2, '16', 'Master of Science (Pass)', 'BIOCHEMISTRY', 'P', '6', 0),
(117, 63, 'DOCTOR OF PHARMACY (PHARM. D)', 10, 2, '17', 'Doctor of Pharmacy', '', 'G', '6', 0),
(118, 64, 'BS (MATHEMATICS)', 8, 2, '16', 'Bachelor Studies', 'MATHEMATICS', 'G', '6', 0),
(119, 64, 'M.Sc. (PASS) MATHEMATICS', 4, 2, '16', 'Master of Science (Pass)', 'MATHEMATICS', 'P', '6', 0),
(120, 37, 'B.Sc. (HONS) PSYCHOLOGY', 6, 2, '15', 'Bachelor of Science (Honours)', 'PSYCHOLOGY', 'G', '6', 0),
(123, 10, 'POST GRADUATE DIPLOMA (COMPUTER SCIENCE)', 2, 2, '15', 'Post Graduate Diploma', 'COMPUTER SCIENCE', 'P', '6', 0),
(78, 38, 'M.P.A (PASS)', 4, 2, '16', 'Master of Public Administration (Pass)', '', 'P', '6', 0),
(126, 33, 'M.A (PASS) LIBRARY & INFORMATION SCIENCE', 4, 2, '16', 'Master of Arts (Pass)', 'LIBRARY & INFORMATION SCIENCE', 'P', '6', 0),
(127, 66, 'M.A. (PASS) PAKISTAN STUDIES', 4, 2, '16', 'Master of Arts (Pass)', 'PAKISTAN STUDIES', 'P', '6', 0),
(29, 20, 'M.Sc. (PASS) FRESHWATER BIOLOGY & FISHERIES', 4, 2, '16', 'Master of Science (Pass)', 'FRESHWATER BIOLOGY & FISHERIES', 'P', '6', 0),
(28, 20, 'BS (FRESHWATER BIOLOGY & FISHERIES)', 8, 2, '16', 'Bachelor Studies', 'FRESHWATER BIOLOGY & FISHERIES', 'G', '6', 0),
(77, 38, 'M.P.A (HONS)', 2, 2, '16', 'Master of Public Administration (Honours)', '', 'H', '6', 0),
(134, 67, 'B.ED.', 2, 2, '15', 'Bachelor of Education', 'EDUCATION', 'G', '6', 0),
(135, 67, 'M.ED.', 2, 2, '16', 'Master of Education', 'EDUCATION', 'P', '6', 0),
(136, 67, 'B.A (HONS) EDUCATION', 6, 2, '15', 'Bachelor of Arts (Honours)', 'EDUCATION', 'G', '6', 0),
(137, 67, 'M.A (PASS) EDUCATION', 4, 2, '16', 'Master of Arts (Pass)', 'EDUCATION', 'P', '6', 0),
(138, 37, 'BS (PSYCHOLOGY) SOCIAL SCIENCES', 8, 2, '16', 'Bachelor Studies', 'PSYCHOLOGY', 'G', '6', 0),
(140, 21, 'B.A (HONS) GEOGRAPHY', 6, 2, '15', 'Bachelor of Arts (Honours)', 'GEOGRAPHY', 'G', '6', 0),
(141, 30, 'BS (HEALTH & PHYSICAL EDU.)', 8, 2, '16', 'Bachelor Studies', 'PHYSICAL EDUCATION  HEALTH & SPORTS SCIENCES', 'G', '6', 0),
(142, 1, 'BS (ECONOMICS)', 8, 2, '16', 'Bachelor Studies', 'ECONOMICS', 'G', '6', 0),
(143, 34, 'BS (MASS COMMUNICATION)', 8, 2, '16', 'Bachelor Studies', 'MASS COMMUNICATION', 'G', '6', 0),
(144, 31, 'BS (GENERAL HISTORY)', 8, 2, '16', 'Bachelor Studies', 'GENERAL HISTORY', 'G', '6', 0),
(145, 39, 'BS (SOCIOLOGY)', 8, 2, '16', 'Bachelor Studies', 'SOCIOLOGY', 'G', '6', 0),
(146, 32, 'BS (INTERNATIONAL RELATIONS)', 8, 2, '16', 'Bachelor Studies', 'INTERNATIONAL RELATIONS', 'G', '6', 0),
(147, 36, 'BS (POLITICAL SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'POLITICAL SCIENCE', 'G', '6', 0),
(148, 40, 'BS (SOCIAL WORK)', 8, 2, '16', 'Bachelor Studies', 'SOCIAL WORK', 'G', '6', 0),
(149, 16, 'BS (RURAL DEVELOPMENT)', 8, 2, '16', 'Bachelor Studies', 'RURAL DEVELOPMENT', 'G', '6', 0),
(150, 38, 'BS (PUBLIC ADMINISTRATION)', 8, 2, '16', 'Bachelor Studies', 'PUBLIC ADMINISTRATION', 'G', '6', 0),
(194, 74, 'M.Ed', 2, 2, '16', 'Master of Education', '', 'P', '6', 0),
(152, 37, 'BS (PSYCHOLOGY) NATURAL SCIENCES', 8, 2, '16', 'Bachelor of Science', 'PSYCHOLOGY', 'G', '6', 0),
(153, 38, 'P.G.D (PUBLIC ADMINISTRATION)', 2, 2, '15', 'Post Graduate Diploma', 'PUBLIC ADMINISTRATION', 'P', '6', 0),
(160, 72, 'BS (COMMERCE)', 8, 2, '16', 'Bachelor Studies', 'COMMERCE', 'G', '6', 0),
(155, 42, 'BS (COMMERCE)', 8, 2, '16', 'Bachelor Studies', 'COMMERCE', 'G', '6', 0),
(156, 37, 'M.A (HONS) PSYCHOLOGY', 2, 2, '16', 'Master of Arts (Honours)', 'PSYCHOLOGY', 'H', '6', 0),
(157, 37, 'M.Sc. (HONS) PSYCHOLOGY', 2, 2, '16', 'Master of Science (Honours)', 'PSYCHOLOGY', 'H', '6', 0),
(158, 71, 'M.Sc. (PASS) TELEMEDICINE & E-HEALTH', 4, 2, '16', 'Master of Science (Pass)', 'TELEMEDICINE & E-HEALTH', 'P', '6', 0),
(159, 72, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6', 0),
(161, 72, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6', 0),
(162, 67, 'M.A (HONS) EDUCATION', 2, 2, '16', 'Master of Arts (Honours)', 'EDUCATION', 'H', '6', 0),
(163, 38, 'M.P.A FINAL (P.G.D SIDE)', 2, 2, '16', 'Master of Public Administration (Pass)', '', 'P', '6', 0),
(164, 73, 'BS (ANTHROPOLOGY & ARCHAEOLOGY)', 8, 2, '16', 'Bachelor Studies', '', 'G', '6', 0),
(165, 46, 'M.A (HONS) PHILOSOPHY', 4, 2, '16', 'Master of Arts (Honours)', 'PHILOSOPHY', 'H', '6', 0),
(167, 72, 'M.B.A (EVENING)', 6, 3, '16', 'Master of Business Administration (Evening)', '', 'P', '4', 0),
(166, 63, 'ONE YEAR CONDENSED DEFICIENCY COURSE IN PHARMACY', 2, 2, '17', 'Doctor of Pharmacy', '', 'G', '6', 0),
(93, 48, 'M.A (HONS) URDU', 2, 2, '16', 'Master of Arts (Honours)', 'URDU', 'H', '6', 0),
(62, 57, 'B.A (HONS) ISLAMIC CULTURE', 6, 2, '15', 'Bachelor of Arts (Honours)', 'ISLAMIC CULTURE', 'G', '6', 0),
(67, 57, 'M.A (PASS) COMPARATIVE RELIGION', 4, 2, '16', 'Master of Arts (Pass)', 'COMPARATIVE RELIGION', 'P', '6', 0),
(66, 57, 'M.A (HONS) COMPARATIVE RELIGION', 2, 2, '16', 'Master of Arts (Honours)', 'COMPARATIVE RELIGION', 'H', '6', 0),
(63, 57, 'M.A (HONS) ISLAMIC CULTURE', 2, 2, '16', 'Master of Arts (Honours)', 'ISLAMIC CULTURE', 'H', '6', 0),
(25, 18, 'BS (GENETICS)', 8, 2, '16', 'Bachelor Studies', 'GENETICS', 'G', '6', 0),
(31, 21, 'M.Sc. (PASS) GEOGRAPHY', 4, 2, '16', 'Master of Science (Pass)', 'GEOGRAPHY', 'P', '6', 0),
(41, 26, 'M.Sc. (PASS) STATISTICS', 4, 2, '16', 'Master of Science (Pass)', 'STATISTICS', 'P', '6', 0),
(12, 14, 'BS (TELECOMMUNICATION)', 8, 2, '16', 'Bachelor of Science', 'TELECOMMUNICATION', 'G', '6', 0),
(56, 33, 'P.G.D (LIBRARY & INFORMATION SCIENCE)', 2, 2, '15', 'Post Graduate Diploma', 'LIBRARY & INFORMATION SCIENCE', 'P', '6', 0),
(58, 34, 'B.A (HONS) MASS COMMUNICATION', 6, 2, '15', 'Bachelor of Arts (Honours)', 'MASS COMMUNICATION', 'G', '6', 0),
(73, 37, 'B.A (HONS) PSYCHOLOGY', 6, 2, '15', 'Bachelor of Arts (Honours)', 'PSYCHOLOGY', 'G', '6', 0),
(74, 37, 'M.A (PASS) PSYCHOLOGY', 4, 2, '16', 'Master of Arts (Pass)', 'PSYCHOLOGY', 'P', '6', 0),
(48, 29, 'M.A (PASS) WOMEN DEVELOPMENT STUDIES', 4, 2, '16', 'Master of Arts (Pass)', 'WOMEN DEVELOPMENT STUDIES', 'P', '6', 0),
(47, 29, 'M.Sc. (PASS) HOME ECONOMICS', 4, 2, '16', 'Master of Science (Pass)', 'HOME ECONOMICS', 'P', '6', 0),
(168, 74, 'B.Ed', 2, 2, '15', 'Bachelor of Education', '', 'G', '6', 0),
(125, 65, 'M.Sc. (PASS) BIOTECHNOLOGY', 4, 2, '16', 'Master of Science (Pass)', 'BIOTECHNOLOGY', 'P', '6', 0),
(115, 61, 'M.Sc. (PASS) ENVIRONMENTAL SCIENCES', 4, 2, '16', 'Master of Science (Pass)', 'ENVIRONMENTAL SCIENCES', 'P', '6', 0),
(30, 21, 'BS (GEOGRAPHY)', 8, 2, '16', 'Bachelor Studies', 'GEOGRAPHY', 'G', '6', 0),
(7, 8, 'BS (INFORMATION TECHNOLOGY)', 8, 2, '16', 'Bachelor Studies', 'INFORMATION TECHNOLOGY', 'G', '6', 0),
(169, 45, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6', 0),
(170, 49, 'BACHELOR OF FINE ARTS', 8, 2, '16', 'Bachelor of Fine Arts', '', 'G', '6', 0),
(171, 49, 'BACHELOR OF ART HISTORY', 8, 2, '16', 'Bachelor of Art History', '', 'G', '6', 0),
(172, 75, 'B.Ed', 3, 3, '15', 'Bachelor of Education', '', 'G', '6', 0),
(139, 49, 'BACHELOR OF DESIGN', 8, 2, '16', 'Bachelor of Design', '', 'G', '6', 0),
(173, 76, 'L.L.B (HONS)', 10, 2, '17', 'Bachelor of Law', 'LL.B (Honours)', 'G', '6', 0),
(174, 47, 'BS (SINDHI)', 8, 2, '16', 'Bachelor Studies', 'SINDHI', 'G', '6', 0),
(175, 77, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', 'BUSINESS ADMINISTRATION', 'G', '6', 0),
(176, 77, 'BS (COMMERCE)', 8, 2, '16', 'Bachelor Studies', 'COMMERCE', 'G', '6', 0),
(177, 77, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6', 0),
(178, 77, 'BS (INFORMATION TECHNOLOGY)', 8, 2, '16', 'Bachelor Studies', 'INFORMATION TECHNOLOGY', 'G', '6', 0),
(179, 77, 'BS (GEOLOGY)', 8, 2, '16', 'Bachelor Studies', 'GEOLOGY', 'G', '6', 0),
(180, 67, 'ASSOCIATE DEGREE IN EDUCATION (ADE)', 4, 2, '14', 'Associate Degree in Education', 'EDUCATION', 'G', '6', 0),
(181, 78, 'CERTIFICATE COURSE IN MUSIC EDUCATION', 1, 1, '11', 'FOUR MONTHS CERTIFICATE COURSE', 'MUSIC EDUCATION  INSTITUTE OF ART & DESIGN', 'G', '6', 0),
(182, 78, 'DIPLOMA COURSE IN MUSIC EDUCATION', 2, 2, '11', 'EIGHT MONTHS DIPLOMA COURSE', 'MUSIC EDUCATION  INSTITUTE OF ART & DESIGN', 'G', '6', 0),
(183, 30, 'BACHELOR OF PHYSICAL EDUCATION  HEALTH & SPORTS SC', 2, 2, '15', 'Bachelor of Physical Education  Health & Sports Sc', '', 'G', '6', 0),
(184, 30, 'MASTER OF PHYSICAL EDUCATION  HEALTH & SPORTS SCIE', 2, 2, '16', 'Master of Physical Education  Health & Sports Scie', '', 'G', '6', 0),
(185, 67, 'B.ED. (HONS) ELEMENTARY', 8, 2, '16', 'Bachelor of Education (Hons) Elementary', 'EDUCATION', 'G', '6', 0),
(186, 42, 'MS (COMMERCE)', 3, 2, '18', 'Master Studies', 'COMMERCE', 'M', '6', 0),
(187, 2, 'MBA', 8, 2, '18', 'Master of Business Administration', 'BUSINESS ADMINSTRATION', 'H', '6', 0),
(188, 80, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6', 0),
(189, 80, 'BS (INFORMATION TECHNOLOGY)', 8, 2, '16', 'Bachelor Studies', 'INFORMATION TECHNOLOGY', 'G', '6', 0),
(190, 80, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6', 0),
(191, 80, 'M.B.A (PASS)', 4, 2, '16', 'Master of Business Administration (Pass)', '', 'P', '6', 0),
(192, 80, 'M.B.A (EVENING)', 6, 3, '16', 'Master of Business Administration (Evening)', '', 'P', '4', 0),
(193, 82, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6', 0),
(197, 84, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6', 0),
(195, 84, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6', 0),
(196, 84, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6', 0),
(198, 84, 'M.B.A (EVENING)', 6, 3, '16', 'Master of Business Administration (Evening)', '', 'P', '4', 0),
(199, 85, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6', 0),
(200, 85, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6', 0),
(201, 85, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6', 0),
(202, 85, 'M.B.A (EVENING)', 6, 3, '16', 'Master of Business Administration (Evening)', '', 'P', '4', 0),
(203, 61, 'BS (ENVIRONMENTAL SCIENCES)', 8, 2, '16', 'Bachelor Studies', 'ENVIRONMENTAL SCIENCE', 'G', '6', 0),
(204, 41, 'BS (CRIMINOLOGY)', 8, 2, '16', 'Bachelor Studies', 'CRIMINOLOGY', 'G', '6', 0),
(206, 86, 'BS (NUTRITION & FOOD TECHNOLOGY )', 8, 2, '16', 'Bachelor Studies', 'NUTRITION & FOOD TECHNOLOGY', 'G', '6', 0),
(207, 76, 'L.L.M', 4, 2, '19', 'Master of Law', 'LL.M', 'P', '6', 0),
(208, 87, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6', 0),
(209, 87, 'M.A (PASS) SUFISM & PEACE', 4, 2, '16', 'Master of Arts (Pass)', 'SUFISM & PEACE', 'P', '6', 0),
(210, 87, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH', 'P', '6', 0),
(211, 87, 'M.A (PASS) POLITICAL SCIENCE', 4, 2, '16', 'Master of Arts (Pass)', 'POLITICAL SCIENCE', 'P', '6', 0),
(212, 49, 'BACHELOR OF COMMUNICATION DESIGN', 8, 2, '16', 'Bachelor of Communication Design', '', 'G', '6', 0),
(213, 49, 'BACHELOR OF TEXTILE DESIGN', 8, 2, '16', 'Bachelor of Textile Design', '', 'G', '6', 0),
(214, 65, 'BS (BIOTECHNOLOGY)', 8, 2, '16', 'Bachelor Studies', 'BIOTECHNOLOGY', 'G', '6', 0),
(215, 29, 'BS (GENDER STUDIES)', 8, 2, '16', 'Bachelor Studies', 'GENDER STUDIES', 'G', '6', 0),
(216, 33, 'BS (LIBRARY AND INFORMATION SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'LIBRARY AND INFORMATION SCIENCE', 'G', '6', 0),
(217, 80, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH', 'H', '6', 0),
(218, 89, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6', 0),
(219, 89, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6', 0),
(220, 89, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6', 0),
(221, 89, 'M.B.A (PASS)', 4, 2, '16', 'Master of Business Administration (Pass)', '', 'P', '6', 0),
(247, 57, 'M.A (PASS) ISLAMIC STUDIES', 4, 2, '16', 'Master of Arts (Pass)', 'ISLAMIC STUDIES', 'P', '6', 0),
(223, 67, 'B.ED. (HONS) ELEMENTARY FOLLOWED BY A.D.E', 4, 2, '16', 'Bachelor of Education (Hons) Elementary', 'EDUCATION', 'G', '6', 0),
(224, 114, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6', 0),
(225, 108, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6', 0),
(226, 103, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6', 0),
(227, 105, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6', 0),
(228, 110, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6', 0),
(229, 112, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6', 0),
(230, 107, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6', 0),
(231, 109, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6', 0),
(232, 104, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6', 0),
(233, 106, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6', 0),
(234, 111, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6', 0),
(235, 113, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6', 0),
(236, 82, 'M.B.A (PASS)', 4, 2, '16', 'Master of Business Administration (Pass)', '', 'P', '6', 0),
(237, 87, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6', 0),
(238, 80, 'MBA', 8, 2, '18', 'Master of Business Administration', '', 'P', '6', 0),
(239, 89, 'MBA', 8, 2, '18', 'Master of Business Administration', '', 'P', '6', 0),
(240, 117, 'BS (MEDICAL LABORATORY TECHNOLOGY)', 8, 2, '16', 'Bachelor Studies', 'MEDICAL LABORATORY TECHNOLOGY', 'G', '6', 0),
(241, 89, 'BS (INFORMATION TECHNOLOGY)', 8, 2, '16', 'Bachelor Studies', 'INFORMATION TECHNOLOGY', 'G', '6', 0),
(242, 58, 'BS (MUSLIM HISTORY)', 8, 2, '16', 'Bachelor Studies', 'MUSLIM HISTORY', 'G', '6', 0),
(243, 57, 'BS (ISLAMIC STUDIES)', 8, 2, '16', 'Bachelor Studies', 'ISLAMIC STUDIES', 'G', '6', 0),
(244, 57, 'BS (COMPARATIVE RELIGION)', 8, 2, '16', 'Bachelor Studies', 'COMPARATIVE RELIGION', 'G', '6', 0),
(246, 48, 'BS (URDU)', 8, 2, '16', 'Bachelor Studies', 'URDU', 'G', '6', 0),
(245, 87, 'BS (POLITICAL SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'POLITICAL SCIENCE', 'G', '6', 0),
(248, 89, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts', 'ENGLISH', 'P', '6', 0),
(249, 72, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6', 0),
(250, 87, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6', 0),
(251, 84, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH', 'P', '6', 0),
(252, 50, 'BS (ARABIC)', 8, 2, '16', 'Bachelor Studies', 'ARABIC', 'G', '6', 0),
(253, 51, 'BS (PERSIAN)', 8, 2, '16', 'Bachelor Studies', 'PERSIAN', 'G', '6', 0),
(254, 122, 'M.COM (PASS)', 2, 1, '16', 'Master of Commerce (Pass)', '', 'P', '1', 0),
(255, 122, 'M.Sc. (PASS) BOTANY', 2, 1, '16', 'Master of Science (Pass)', 'BOTANY', 'P', '1', 0),
(256, 122, 'M.Sc. (PASS) CHEMISTRY', 2, 1, '16', 'Master of Science (Pass)', 'CHEMISTRY', 'P', '1', 0),
(257, 122, 'M.Sc. (PASS) MATHEMATICS', 2, 1, '16', 'Master of Science (Pass)', 'MATHEMATICS', 'P', '1', 0),
(258, 122, 'M.Sc. (PASS) PHYSICS', 2, 1, '16', 'Master of Science (Pass)', 'PHYSICS', 'P', '1', 0),
(259, 122, 'M.Sc. (PASS) STATISTICS', 2, 1, '16', 'Master of Science (Pass)', 'STATISTICS', 'P', '1', 0),
(260, 122, 'M.Sc. (PASS) ZOOLOGY', 2, 1, '16', 'Master of Science (Pass)', 'ZOOLOGY', 'P', '1', 0),
(261, 122, 'M.A (PASS) ECONOMICS', 2, 1, '16', 'Master of Arts (Pass)', 'ECONOMICS', 'P', '1', 0),
(262, 122, 'M.A (PASS) ENGLISH', 2, 1, '16', 'Master of Arts (Pass)', 'ENGLISH', 'P', '1', 0),
(263, 122, 'M.A (PASS) INTERNATIONAL RELATIONS', 2, 1, '16', 'Master of Arts (Pass)', 'INTERNATIONAL RELATIONS', 'P', '1', 0),
(264, 122, 'M.A (PASS) MUSLIM HISTORY', 2, 1, '16', 'Master of Arts (Pass)', 'MUSLIM HISTORY', 'P', '1', 0),
(265, 122, 'M.A (PASS) POLITICAL SCIENCE', 2, 1, '16', 'Master of Arts (Pass)', 'POLITICAL SCIENCE', 'P', '1', 0),
(266, 122, 'M.A (PASS) URDU', 2, 1, '16', 'Master of Arts (Pass)', 'URDU', 'P', '1', 0),
(267, 122, 'B.COM (PASS)', 2, 1, '14', 'Bachelor of Commerce (Pass)', '', 'G', '1', 0),
(268, 122, 'B.Sc. (PASS) HOME ECONOMICS', 2, 1, '14', 'Bachelor of Science (Pass)', 'HOME ECONOMICS', 'G', '1', 0),
(269, 122, 'B.Sc. (PASS)', 2, 1, '14', 'Bachelor of Science (Pass)', '', 'G', '1', 0),
(270, 122, 'B.A (PASS)', 2, 1, '14', 'Bachelor of Arts (Pass)', '', 'G', '1', 0),
(271, 122, 'M.A (PASS) ARABIC', 2, 1, '16', 'Master of Arts (Pass)', 'ARABIC', 'P', '1', 0),
(272, 122, 'M.A (PASS) COMPARATIVE RELIGION', 2, 1, '16', 'Master of Science (Pass)', 'COMPARATIVE RELIGION', 'P', '1', 0),
(273, 122, 'M.A (PASS) GENERAL HISTORY', 2, 1, '16', 'Master of Science (Pass)', 'GENERAL HISTORY', 'P', '1', 0),
(274, 122, 'M.A (PASS) PHILOSOPHY', 2, 1, '16', 'Master of Science (Pass)', 'PHILOSOPHY', 'P', '1', 0),
(275, 122, 'M.A (PASS) SINDHI', 2, 1, '16', 'Master of Science (Pass)', 'SINDHI', 'P', '1', 0),
(276, 122, 'M.A (PASS) SOCIOLOGY', 2, 1, '16', 'Master of Science (Pass)', 'SOCIOLOGY', 'P', '1', 0),
(277, 122, 'M.A (PASS) ISLAMIC CULTURE', 2, 1, '16', 'Master of Arts (Pass)', 'ISLAMIC CULTURE', 'P', '1', 0),
(278, 85, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH', 'P', '6', 0),
(279, 67, 'PGD (EARLY CHILDHOOD EDUCATION)', 2, 2, '15', 'Post Graduate Diploma', 'EARLY CHILDHOOD EDUCATION', 'G', '6', 0),
(280, 16, 'M.Sc. (PASS) DEVELOPMENT STUDIES', 4, 2, '16', 'Master of Science (Pass)', 'DEVELOPMENT STUDIES', 'P', '6', 0),
(281, 67, 'B.ED. (HONS) SECONDARY 1.5 YEAR', 3, 2, '16', 'B.Ed (Hons) Secondary 1.5 Year', 'EDUCATION', 'G', '6', 0),
(282, 67, 'B.ED. (HONS) SECONDARY 2.5 YEAR', 5, 2, '16', 'B.Ed (Hons) Secondary  2.5 Year', 'EDUCATION', 'G', '6', 0),
(283, 21, 'M.A (PASS) GEOGRAPHY', 4, 2, '16', 'Master of ARTS (Pass)', 'GEOGRAPHY', 'P', '6', 0),
(284, 26, 'M.Sc. (PASS) ACTUARIAL SCIENCES', 4, 2, '16', 'Master of Science (Pass)', 'ACTUARIAL SCIENCES', 'P', '', 0),
(285, 77, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH', 'P', '6', 0),
(286, 66, 'BS (PAKISTAN STUDIES)', 8, 2, '16', 'Bachelor Studies', 'PAKISTAN STUDIES', 'G', '6', 0),
(287, 77, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6', 0),
(288, 12, 'M.Phil (ANALYTICAL CHEMISTRY)', 3, 2, '18', 'Master of Philosophy', 'ANALYTICAL CHEMISTRY', 'M', '6', 0),
(289, 50, 'M.Phil (ARABIC)', 3, 2, '18', 'Master of Philosophy', 'ARABIC', 'M', '6', 0),
(290, 45, 'M.Phil (ENGLISH LITERATURE)', 3, 2, '18', 'Master of Philosophy', 'ENGLISH LITERATURE', 'M', '6', 0),
(291, 45, 'M.Phil (ENGLISH LINGUISTICS)', 3, 2, '18', 'Master of Philosophy', 'ENGLISH LINGUISTICS', 'M', '6', 0),
(292, 47, 'M.Phil (SINDHI)', 3, 2, '18', 'Master of Philosophy', 'SINDHI', 'M', '6', 0),
(293, 48, 'M.Phil (URDU)', 3, 2, '18', 'Master of Philosophy', 'URDU', 'M', '6', 0),
(294, 2, 'M.Phil (BUSINESS ADMINISTRATION)', 3, 2, '18', 'Master of Philosophy', 'BUSINESS ADMINSTRATION', 'M', '6', 0),
(295, 42, 'M.Phil (COMMERCE)', 3, 2, '18', 'Master of Philosophy', 'COMMERCE', 'M', '6', 0),
(296, 67, 'M.Phil (EDUCATION)', 3, 2, '18', 'Master of Philosophy', 'EDUCATION', 'M', '6', 0),
(297, 57, 'M.Phil (ISLAMIC STUDIES)', 3, 2, '18', 'Master of Philosophy', 'ISLAMIC STUDIES', 'M', '6', 0),
(298, 16, 'M.Phil (DEVELOPMENT STUDIES)', 3, 2, '18', 'Master of Philosophy', 'DEVELOPMENT STUDIES', 'M', '6', 0),
(299, 1, 'M.Phil (ECONOMICS)', 3, 2, '18', 'Master of Philosophy', 'ECONOMICS', 'M', '6', 0),
(300, 29, 'M.Phil (GENDER STUDIES)', 3, 2, '18', 'Master of Philosophy', 'GENDER STUDIES', 'M', '6', 0),
(301, 34, 'M.Phil (MEDIA & COMMUNICATION STUDIES)', 3, 2, '18', 'Master of Philosophy', 'MEDIA & COMMUNICATION STUDIES', 'M', '6', 0),
(302, 32, 'M.Phil (INTERNATIONAL RELATIONS)', 3, 2, '18', 'Master of Philosophy', 'INTERNATIONAL RELATIONS', 'M', '6', 0),
(303, 36, 'M.Phil (POLITICAL SCIENCE)', 3, 2, '18', 'Master of Philosophy', 'POLITICAL SCIENCE', 'M', '6', 0),
(304, 66, 'M.Phil (PAKISTAN STUDIES)', 3, 2, '18', 'Master of Philosophy', 'PAKISTAN STUDIES', 'M', '6', 0),
(305, 37, 'M.Phil (PSYCHOLOGY)', 3, 2, '18', 'Master of Philosophy', 'PSYCHOLOGY', 'M', '6', 0),
(306, 38, 'MS (PUBLIC ADMINISTRATION)', 3, 2, '18', 'Master Studies', 'PUBLIC ADMINISTRATION', 'M', '6', 0),
(307, 38, 'M.Phil (PUBLIC ADMINISTRATION)', 3, 2, '18', 'Master of Philosophy', 'PUBLIC ADMINISTRATION', 'M', '6', 0),
(308, 39, 'M.Phil (SOCIOLOGY)', 3, 2, '18', 'Master of Philosophy', 'SOCIOLOGY', 'M', '6', 0),
(309, 65, 'M.Phil (BIOTECHNOLOGY)', 3, 2, '18', 'Master of Philosophy', 'BIOTECHNOLOGY', 'M', '6', 0),
(310, 19, 'M.Phil (BOTANY)', 3, 2, '18', 'Master of Philosophy', 'BOTANY', 'M', '6', 0),
(311, 10, 'M.Phil (COMPUTER SCIENCE)', 3, 2, '18', 'Master of Philosophy', 'COMPUTER SCIENCE', 'M', '6', 0),
(312, 15, 'M.Phil (ELECTRONICS)', 3, 2, '18', 'Master of Philosophy', 'ELECTRONICS', 'M', '6', 0),
(313, 61, 'M.Phil (ENVIRONMENTAL SCIENCES)', 3, 2, '18', 'Master of Philosophy', 'ENVIRONMENTAL SCIENCES', 'M', '6', 0),
(314, 20, 'M.Phil (FRESHWATER BIOLOGY & FISHERIES)', 3, 2, '18', 'Master of Philosophy', 'FRESHWATER BIOLOGY & FISHERIES', 'M', '6', 0),
(315, 18, 'M.Phil (GENETICS)', 3, 2, '18', 'Master of Philosophy', 'GENETICS', 'M', '6', 0),
(316, 22, 'M.Phil (PETROLEUM GEOSCIENCES)', 3, 2, '18', 'Master Studies', 'PETROLEUM GEOSCIENCES', 'M', '6', 0),
(317, 22, 'MS (PETROLEUM GEOSCIENCES)', 3, 2, '18', 'Master of Philosophy', 'PETROLEUM GEOSCIENCES', 'M', '6', 0),
(318, 12, 'M.Phil (INORGANIC CHEMISTRY)', 3, 2, '18', 'Master of Philosophy', 'INORGANIC CHEMISTRY', 'M', '6', 0),
(319, 30, 'M.Phil (PHYSICAL EDUCATION  HEALTH & SPORTS SCIENC', 3, 2, '18', 'Master of Philosophy', 'PHYSICAL EDUCATION  HEALTH & SPORTS SCIENCES', 'M', '6', 0),
(320, 14, 'M.Phil (TELECOMMUNICATION)', 3, 2, '18', 'Master of Philosophy', 'TELECOMMUNICATION', 'M', '6', 0),
(321, 26, 'M.Phil (STATISTICS)', 3, 2, '18', 'Master of Philosophy', 'STATISTICS', 'M', '6', 0),
(322, 13, 'M.Phil (SOFTWARE ENGINEERING)', 3, 2, '18', 'Master of Philosophy', 'SOFTWARE ENGINEERING', 'M', '6', 0),
(323, 12, 'M.Phil (PHYSICAL CHEMISTRY)', 3, 2, '18', 'Master of Philosophy', 'PHYSICAL CHEMISTRY', 'M', '6', 0),
(324, 24, 'M.Phil (PHYSICS)', 3, 2, '18', 'Master of Philosophy', 'PHYSICS', 'M', '6', 0),
(325, 25, 'M.Phil (PHYSIOLOGY)', 3, 2, '18', 'Master of Philosophy', 'PHYSIOLOGY', 'M', '6', 0),
(326, 12, 'M.Phil (ORGANIC CHEMISTRY)', 3, 2, '18', 'Master of Philosophy', 'ORGANIC CHEMISTRY', 'M', '6', 0),
(327, 23, 'M.Phil (MICROBIOLOGY)', 3, 2, '18', 'Master of Philosophy', 'MICROBIOLOGY', 'M', '6', 0),
(328, 64, 'M.Phil (MATHEMATICS)', 3, 2, '18', 'Master of Philosophy', 'MATHEMATICS', 'M', '6', 0),
(329, 8, 'M.Phil (INFORMATION TECHNOLOGY)', 3, 2, '18', 'Master of Philosophy', 'INFORMATION TECHNOLOGY', 'M', '6', 0),
(330, 63, 'M.Phil (PHARMACEUTICS)', 3, 2, '18', 'Master of Philosophy', 'PHARMACEUTICS', 'M', '6', 0),
(331, 63, 'M.Phil (PHARMACOLOGY)', 3, 2, '18', 'Master of Philosophy', 'PHARMACOLOGY', 'M', '6', 0),
(332, 86, 'M.Phil (NUTRITION & FOOD TECHNOLOGY )', 3, 2, '18', 'Master of Philosophy', 'NUTRITION & FOOD TECHNOLOGY', 'M', '6', 0),
(333, 31, 'M.Phil (GENERAL HISTORY)', 3, 2, '18', 'Master of Philosophy', 'GENERAL HISTORY', 'M', '6', 0),
(334, 10, 'M.Phil (BIOINFORMATICS)', 3, 2, '18', 'Master of Philosophy', 'BIOINFORMATICS', 'M', '6', 0),
(335, 123, 'M.Phil (ANALYTICAL CHEMISTRY)', 3, 2, '18', 'Master of Philosophy', 'ANALYTICAL CHEMISTRY', 'M', '6', 0),
(336, 124, 'M.Phil (CHEMICAL SCIENCES)', 3, 2, '18', 'Master of Philosophy', 'M.Phil (CHEMICAL SCIENCES)', 'M', '6', 0),
(337, 27, 'M.Phil (ZOOLOGY)', 3, 2, '18', 'Master of Philosophy', 'ZOOLOGY', 'M', '6', 0),
(338, 42, 'BS (BANKING AND FINANCE)', 8, 2, '16', 'Bachelor Studies', 'BANKING AND FINANCE', 'G', '6', 0),
(339, 124, 'Ph.D (CHEMICAL SCIENCES)', 3, 2, '20', 'Doctor of Philosophy', 'CHEMICAL SCIENCES', 'H', '6', 0),
(340, 12, 'Ph.D (ANALYTICAL CHEMISTRY)', 3, 2, '20', 'Doctor of Philosophy', 'ANALYTICAL CHEMISTRY', 'G', '6', 0),
(341, 12, 'Ph.D (PHYSICAL CHEMISTRY)', 3, 2, '20', 'DOCTOR OF PHILOSOPHY', 'PHYSICAL CHEMISTRY', 'G', '6', 0),
(342, 12, 'Ph.D (INORGANIC CHEMISTRY)', 3, 2, '20', 'DOCTOR OF PHILOSOPHY', 'INORGANIC CHEMISTRY', 'G', '6', 0),
(343, 60, 'Ph.D (BIOCHEMISTRY)', 3, 2, '20', 'Doctor of Philosophy', 'BIOCHEMISTRY', 'G', '6', 0),
(344, 10, 'Ph.D (COMPUTER SCIENCE)', 3, 2, '20', 'Doctor of Philosophy', 'COMPUTER SCIENCE', 'G', '6', 0),
(345, 20, 'Ph.D (FRESHWATER BIOLOGY & FISHERIES)', 3, 2, '20', 'Doctor of Philosophy', 'FRESHWATER BIOLOGY & FISHERIES', 'G', '6', 0),
(346, 64, 'Ph.D (MATHEMATICS)', 3, 2, '20', 'Doctor of Philosophy', 'MATHEMATICS', 'G', '6', 0),
(347, 23, 'Ph.D (MICROBIOLOGY)', 3, 2, '20', 'Doctor of Philosophy', 'MICROBIOLOGY', 'G', '6', 0),
(348, 86, 'Ph.D (MICROBIOLOGY)', 3, 2, '20', 'Doctor of Philosophy', 'NUTRITION & FOOD TECHNOLOGY', 'G', '6', 0),
(349, 25, 'Ph.D (PHYSIOLOGY)', 3, 2, '20', 'Doctor of Philosophy', 'PHYSIOLOGY', 'G', '6', 0),
(350, 27, 'Ph.D (ZOOLOGY)', 3, 2, '20', 'Doctor of Philosophy', 'ZOOLOGY', 'G', '6', 0),
(351, 57, 'Ph.D (ISLAMIC STUDIES)', 3, 2, '20', 'Doctor of Philosophy', 'ISLAMIC STUDIES', 'G', '6', 0),
(352, 67, 'Ph.D (EDUCATION)', 3, 2, '20', 'Doctor of Philosophy', 'EDUCATION', 'G', '6', 0),
(353, 2, 'Ph.D (BUSINESS ADMINISTRATION)', 3, 2, '20', 'Doctor of Philosophy', 'BUSINESS ADMINSTRATION', 'G', '6', 0),
(354, 42, 'Ph.D (COMMERCE)', 3, 2, '20', 'Doctor of Philosophy', 'COMMERCE', 'G', '6', 0),
(355, 45, 'Ph.D (ENGLISH LITERATURE)', 3, 2, '20', 'Doctor of Philosophy', 'ENGLISH LITERATURE', 'D', '6', 0),
(356, 45, 'Ph.D (ENGLISH LINGUISTICS)', 3, 2, '20', 'Doctor of Philosophy', 'ENGLISH LINGUISTICS', 'D', '6', 0),
(357, 39, 'Ph.D (SOCIOLOGY)', 3, 2, '20', 'Doctor of Philosophy', 'SOCIOLOGY', 'G', '6', 0),
(358, 38, 'Ph.D (PUBLIC ADMINISTRATION)', 3, 2, '20', 'Doctor of Philosophy', 'PUBLIC ADMINISTRATION', 'G', '6', 0),
(359, 8, 'Ph.D (INFORMATION TECHNOLOGY)', 3, 2, '20', 'Doctor of Philosophy', 'INFORMATION TECHNOLOGY', 'G', '6', 0),
(360, 46, 'BS (PHILOSOPHY)', 8, 2, '16', 'Bachelor Studies', 'PHILOSOPHY', 'P', '6', 0),
(362, 77, 'B.ED. (HONS) SECONDARY 2.5 YEAR', 5, 2, '16', 'Bachelor of Education (Hons) Secondary  2.5 Year', 'EDUCATION', 'G', '6', 0),
(361, 35, 'BS (DEVELOPMENT COMMUNICATION)', 8, 2, '16', 'Bachelor Studies', 'DEVELOPMENT COMMUNICATION', 'G', '6', 0),
(363, 77, 'M.B.A (EVENING)', 6, 3, '16', 'Master of Business Administration (Evening)', 'BUSINESS ADMINISTRATION', 'P', '4', 0),
(364, 77, 'B.ED. (HONS) SECONDARY 1.5 YEAR', 3, 2, '16', 'B.Ed (Hons) Secondary 1.5 Year', 'EDUCATION', 'G', '6', 0),
(365, 14, 'BS (TELECOMMUNICATION ENGINEERING)', 8, 2, '16', 'Bachelor Studies', 'TELECOMMUNICATION ENGINEERING', 'G', '6', 0),
(366, 15, 'BS (ELECTRONIC ENGINEERING)', 8, 2, '16', 'Bachelor Studies', 'ELECTRONIC', 'G', '6', 0),
(367, 45, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6', 0),
(368, 45, 'BS (APPLIED LINGUISTICS)', 8, 2, '16', 'Bachelor Studies', 'APPLIED LINGUISTICS', 'G', '6', 0),
(369, 45, 'M.A (PASS) ENGLISH LANGUAGE & LITERATURE', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH LANGUAGE & LITERATURE', 'P', '6', 0),
(370, 45, 'M.A (PASS) APPLIED LINGUISTICS', 4, 2, '16', 'Master of Arts (Pass)', 'APPLIED LINGUISTICS', 'P', '6', 0),
(371, 80, 'M.A (PASS) ENGLISH LANGUAGE & LITERATURE', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH LANGUAGE & LITERATURE', 'P', '6', 0),
(372, 85, 'M.A (PASS) ENGLISH LANGUAGE & LITERATURE', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH LANGUAGE & LITERATURE', 'P', '6', 0),
(373, 80, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6', 0),
(374, 85, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6', 0),
(375, 77, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6', 0),
(376, 77, 'M.A (PASS) ENGLISH LANGUAGE & LITERATURE', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH LANGUAGE & LITERATUR', 'P', '6', 0),
(377, 84, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6', 0),
(378, 84, 'M.A (PASS) ENGLISH LANGUAGE & LITERATURE', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH LANGUAGE & LITERATURE', 'P', '6', 0),
(379, 72, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6', 0),
(380, 89, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6', 0),
(381, 89, 'M.A (PASS) ENGLISH LANGUAGE & LITERATURE', 4, 2, '16', 'Master of Arts', 'ENGLISH LANGUAGE & LITERATURE', 'P', '6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `type` enum('general','admin_panel','website','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `type`) VALUES
(1, 'LOGO', '1737958500618456057logo.png', 'admin_panel'),
(2, 'SIDEBAR_IMG', '1276140079pngtree-tech-interlaced-texture-texture-propaganda-background-image_214967.jpg', 'admin_panel'),
(3, 'SIDEBAR_COLOR', 'man-of-steel', 'admin_panel'),
(4, 'NAME', 'F.E.T', 'admin_panel'),
(5, 'FOOTER', 'University Of Sindh', 'admin_panel'),
(6, 'ACCOUNT_ACTIVITY', 'active', 'general');

-- --------------------------------------------------------

--
-- Table structure for table `slider_setting`
--

CREATE TABLE `slider_setting` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(150) NOT NULL,
  `title_color` varchar(50) DEFAULT NULL,
  `title_link` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `description_color` varchar(50) DEFAULT NULL,
  `description_link` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_setting`
--

INSERT INTO `slider_setting` (`id`, `image`, `title`, `title_color`, `title_link`, `description`, `description_color`, `description_link`, `active`) VALUES
(1, '', 'title', '#614a8c', 'http://localhost/fet_project/settings', 'description', '#21ab9b', 'http://localhost/fet_project/settings', 1),
(2, '622989903two_auth.jpeg', 'title1', '#e8e8e8', 'http://localhost/fet_project/settings', 'description1', '#e3e3e3', '212', 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `roll_number` varchar(25) NOT NULL,
  `program_id` int(11) NOT NULL,
  `batch_year` varchar(6) NOT NULL,
  `current_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `subject_title` varchar(255) NOT NULL,
  `subject_desc` text NOT NULL,
  `for_campus` enum('general','specific') NOT NULL,
  `campus_id` int(11) NOT NULL,
  `for_depart` enum('general','specific') NOT NULL,
  `depart_id` int(11) NOT NULL,
  `for_program` enum('general','specific') NOT NULL,
  `program_id` int(11) NOT NULL,
  `morning_evening` enum('morning','evening','both') NOT NULL,
  `for_faculty` enum('general','specific') NOT NULL,
  `year` varchar(50) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_archived` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `course_code`, `subject_title`, `subject_desc`, `for_campus`, `campus_id`, `for_depart`, `depart_id`, `for_program`, `program_id`, `morning_evening`, `for_faculty`, `year`, `faculty_id`, `remarks`, `added_by`, `is_archived`) VALUES
(4, 'SENG-610', 'Distributed Computing', '', 'general', 0, 'general', 0, 'general', 0, 'both', 'general', '', 6, '', 1, 0),
(5, 'SENG-612', 'Design Patterns', '', 'general', 0, 'general', 0, 'general', 0, 'both', 'general', '', 6, '', 1, 0),
(6, 'SENG-614', 'Human Computer Interaction', '', 'general', 0, 'general', 0, 'general', 0, 'both', 'general', '', 6, '', 1, 0),
(7, 'SENG-618', 'Software Project Management', '', 'general', 0, 'general', 0, 'general', 0, 'both', 'general', '', 6, '', 1, 0),
(8, 'SENG-616', 'Software Design & Architecture', '', 'general', 0, 'general', 0, 'general', 0, 'both', 'general', '', 6, '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sys_notifications`
--

CREATE TABLE `sys_notifications` (
  `id` int(11) NOT NULL,
  `for_user_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `redirect_link` text NOT NULL,
  `is_seen` tinyint(1) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_notifications`
--

INSERT INTO `sys_notifications` (`id`, `for_user_id`, `msg`, `redirect_link`, `is_seen`, `datetime`) VALUES
(1, 1, 'testing', 'admin', 1, '2020-11-25 17:58:55'),
(2, 1, 'You have a new module added', 'admin', 1, '2020-11-25 18:11:26'),
(3, 1, 'You have a new module added', 'dashboard', 1, '2020-11-25 18:31:20'),
(4, 1, 'You have a new module added', 'dashboard', 1, '2020-11-25 18:31:28'),
(5, 1, 'You have a new module added', 'dashboard', 1, '2020-11-25 18:31:30'),
(6, 1, 'You have a new module added', 'dashboard', 1, '2020-11-25 18:33:59'),
(7, 1, 'You have a new module added', 'dashboard', 1, '2020-11-25 18:34:04'),
(8, 1, 'You have a new module added', 'dashboard', 1, '2020-12-01 14:28:15'),
(9, 1, 'New Maintenance request has generated', 'student_requests', 1, '2020-12-03 08:00:02'),
(10, 1, 'New Maintenance request has generated', 'student_requests', 1, '2020-12-03 08:00:02'),
(11, 1, 'You have a new module added', 'dashboard', 1, '2020-12-03 08:00:28'),
(12, 1, 'You have a new module added', 'dashboard', 1, '2020-12-03 08:01:52'),
(13, 1, 'New Maintenance request has generated', 'student_requests', 1, '2020-12-03 08:02:42'),
(14, 1, 'New Maintenance request has generated', 'student_requests', 1, '2020-12-03 08:02:42'),
(15, 1, 'Maintenance request has rejected', 'student_requests', 1, '2020-12-03 08:21:05'),
(16, 1, 'Maintenance request has rejected', 'student_requests', 1, '2020-12-03 08:21:05'),
(17, 1, 'Maintenance request has returned', 'student_requests', 1, '2020-12-03 08:29:37'),
(18, 1, 'Maintenance request has returned', 'student_requests', 1, '2020-12-03 08:29:37'),
(19, 1, 'Maintenance request has rejected', 'student_requests', 1, '2020-12-03 08:34:59'),
(20, 1, 'Maintenance request has rejected', 'student_requests', 1, '2020-12-03 08:34:59'),
(21, 1, 'Maintenance request has returned', 'student_requests', 1, '2020-12-03 08:43:47'),
(22, 1, 'Maintenance request has returned', 'student_requests', 1, '2020-12-03 08:43:47'),
(23, 1, 'New Maintenance request has generated', 'student_requests', 1, '2020-12-03 08:46:51'),
(24, 1, 'New Maintenance request has generated', 'student_requests', 1, '2020-12-03 08:46:51'),
(25, 42, 'Usage request has rejected', 'view_usage_requests', 0, '2020-12-05 06:44:08'),
(26, 1, 'Usage request has rejected', 'view_usage_requests', 1, '2020-12-05 06:44:16'),
(27, 1, 'Usage request has rejected', 'view_usage_requests', 1, '2020-12-05 06:44:40'),
(28, 1, 'Usage request has rejected', 'view_usage_requests', 1, '2020-12-05 06:44:40'),
(29, 1, 'Maintenance request has return', 'student_requests', 1, '2020-12-05 07:02:44'),
(30, 1, 'Maintenance request has return', 'student_requests', 1, '2020-12-05 07:02:44'),
(31, 1, 'Maintenance request has return', 'student_requests', 1, '2020-12-05 07:05:11'),
(32, 1, 'Maintenance request has return', 'student_requests', 1, '2020-12-05 07:05:11'),
(33, 1, 'Maintenance request has resubmit', 'student_requests', 1, '2020-12-05 07:23:13'),
(34, 1, 'Maintenance request has resubmit', 'student_requests', 1, '2020-12-05 07:23:13'),
(35, 1, 'New Maintenance request has generated', 'student_requests', 1, '2020-12-08 17:44:19'),
(36, 1, 'New Maintenance request has generated', 'student_requests', 1, '2020-12-08 17:44:19'),
(37, 1, 'New Maintenance request has generated', 'student_requests', 0, '2020-12-08 19:40:59'),
(38, 1, 'New Maintenance request has generated', 'student_requests', 1, '2020-12-08 19:40:59'),
(39, 1, 'New Maintenance request has generated', 'student_requests', 0, '2020-12-08 19:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `speciality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` enum('image','custom') NOT NULL,
  `image` text NOT NULL,
  `for_campus` enum('all','specific') NOT NULL,
  `campus_id` int(50) NOT NULL,
  `depart_id` int(50) NOT NULL,
  `program_id` int(50) NOT NULL,
  `faculty_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `semester` int(10) NOT NULL,
  `class_group` varchar(255) NOT NULL,
  `datetime_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `datettime_updated` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `evening_morning` enum('morning','evening') NOT NULL,
  `part` int(2) NOT NULL,
  `year` varchar(10) NOT NULL,
  `remarks` text NOT NULL,
  `pbulished` tinyint(1) NOT NULL,
  `is_archived` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `title`, `type`, `image`, `for_campus`, `campus_id`, `depart_id`, `program_id`, `faculty_id`, `user_id`, `semester`, `class_group`, `datetime_added`, `datettime_updated`, `is_deleted`, `evening_morning`, `part`, `year`, `remarks`, `pbulished`, `is_archived`) VALUES
(1, '', 'image', '1734855654SWE04e.jpg', 'all', 1, 248, 0, 16, 0, 0, 'Group (A)', '2021-04-21 21:57:48', '0000-00-00 00:00:00', 0, 'evening', 1, '2021', '', 0, 0),
(2, '', 'image', '683872100SWE04e.jpg', 'all', 1, 248, 0, 16, 0, 0, 'Group (A)', '2021-04-21 21:59:08', '0000-00-00 00:00:00', 0, 'evening', 4, '2021', '', 0, 0),
(3, '', 'custom', '', 'all', 1, 248, 0, 16, 0, 0, '', '2021-04-21 22:04:11', '0000-00-00 00:00:00', 0, 'evening', 4, '2021', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `timetable_details`
--

CREATE TABLE `timetable_details` (
  `id` int(11) NOT NULL,
  `timetable_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `day` varchar(100) NOT NULL,
  `time_from` varchar(20) NOT NULL,
  `time_to` varchar(20) NOT NULL,
  `at_class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `campuss_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `depart_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` enum('male','female') NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `show_cnic_public` tinyint(1) NOT NULL DEFAULT 0,
  `father_name` varchar(150) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `zip_code` varchar(30) NOT NULL,
  `show_address_public` tinyint(1) NOT NULL,
  `type` varchar(20) NOT NULL,
  `role_id` int(11) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `phone_no_code` varchar(11) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `show_phone_no_public` tinyint(1) NOT NULL DEFAULT 0,
  `last_qualitification` varchar(255) NOT NULL,
  `registered_from` enum('frontend','backend') NOT NULL,
  `account_verified` tinyint(1) NOT NULL DEFAULT 0,
  `reg_datetime` timestamp NULL DEFAULT current_timestamp(),
  `account_active` tinyint(1) NOT NULL DEFAULT 0,
  `deactivated_on` timestamp NULL DEFAULT NULL,
  `remarks` text NOT NULL,
  `is_archived` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `campuss_id`, `faculty_id`, `depart_id`, `image`, `title`, `username`, `password`, `full_name`, `surname`, `email`, `dob`, `gender`, `cnic`, `show_cnic_public`, `father_name`, `nationality`, `province`, `district`, `city`, `home_address`, `permanent_address`, `zip_code`, `show_address_public`, `type`, `role_id`, `bio`, `phone_no_code`, `phone_no`, `show_phone_no_public`, `last_qualitification`, `registered_from`, `account_verified`, `reg_datetime`, `account_active`, `deactivated_on`, `remarks`, `is_archived`) VALUES
(1, 0, 0, 0, '1245787577america.png', 'Mr', 'admin', '284bf3fdab5fa4def9a9f3981e882ed407ef9fc45f3feb99d2ab6f4231e96bd9b5053e970b41e713bcf4b9d8d6f78a41ae1a4fef79207a77ebee23d30807eab5NY4Haa3ex1TB75GwOpsI2qqk91rCcWx1T2aVKIf11xQ=', 'admin', '', 'admin@gmail.com', NULL, 'male', '', 1, '', '', '', '', '', '', '', '', 0, 'Superadmin', 2, '', '0', '', 1, '', 'frontend', 1, '2021-04-01 11:16:53', 1, NULL, '', 0),
(2, 0, 0, 0, '', 'Ms', 'username2', '0', 'asfasf', 'surename', 'asfas@gmail.com', '2021-04-08', 'male', '2021-04-14', 1, 'asfasf', 'asfasfas', 'sdfsdaf', 'dsfgdsf', 'dsgfdsg', 'asfasfasfasf', 'asfa', '', 0, '', 5, 'dsfhskjfhskdjfhkdsjfh', '92', '92', 1, '', 'frontend', 0, '2021-04-01 20:16:30', 0, NULL, '', 0),
(3, 0, 0, 0, '', 'Ms', 'username3', '0', 'asfasf', 'surename', 'asfa1s@gmail.com', '2021-04-08', 'male', '2021-04-14', 1, 'asfasf', 'asfasfas', 'sdfsdaf', 'dsfgdsf', 'dsgfdsg', 'asfasfasfasf', 'asfa', '', 0, '', 5, 'dsfhskjfhskdjfhkdsjfh', '92', '92', 1, '', 'frontend', 0, '2021-04-01 20:17:06', 0, NULL, '', 0),
(4, 0, 0, 0, '1245787577america.png', 'Mr', 'username4', '0', 'hkj@Gmail.com', 'asfas', 'kj', '2019-11-29', 'female', 'safgasfasf', 0, 'asfasf', 'safasf', 'sadfasf', 'wfdsafasf', 'gkj', 'asfa', 'safasf', '', 0, '', 6, 'sdgdsgasdg', '92', '92', 0, '', 'frontend', 0, '2021-04-01 20:35:11', 0, NULL, '', 0),
(5, 0, 0, 0, '', 'Ms', 'username5', '60d6286756664a00529f479cf4a587f37ff85d5414368c79bde505d47261a01c308d09d4f35e2002ddf6052bf62cc773a8a8c5af6f2ebb1b4a5b02669108fef2b8R2B1KUAsge1//C+qsLOVcFWIw5sQYu2XvKOnUdG9s=', '11', 'sdfsd', 'sdfsdf@gmail.com', '2021-04-07', 'male', '444342134', 1, 'asfasfasf', 'afsas', 'a', 'asf', 'asf', 'safaf', 'asfsafasf', '', 0, 'Other', 1, 'asfasfas', '323', '32232223', 0, '', 'frontend', 0, '2021-04-02 04:52:31', 0, NULL, '', 0),
(6, 0, 0, 0, '361688680romanian.png', 'Ms', 'username6', '042ac6ebade10f1e9db85dc627e817685c004ed27215d7e01543f3f636f569e8e968f535cea6f8620ea5e3f7c32788b7c063a431cf4220492ddab3633a8f00e67Ez1aKJObhYcSHHOwGCeLUZ7GeYuc2rcX+aHNhoy3j0=', '1', '1', '1', '0001-01-10', 'female', '1111', 1, '111', '111', '111', '11', '111', '111', '111', '324', 1, 'Teacher', 5, '111', '11', '11', 1, '', 'frontend', 0, '2021-04-02 07:50:35', 1, NULL, '', 0),
(7, 1, 16, 0, '', 'Mr', 'kamrantaj', '', 'Kamran Taj\r\n', 'Pathan', '', NULL, '', '', 0, '', '', '', '', '', '', '', '', 0, 'Teacher', 0, '', '', '', 0, '', '', 1, '2021-04-20 21:54:34', 1, NULL, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_rooms`
--
ALTER TABLE `class_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FAC_ID` (`fac_id`),
  ADD KEY `INST_ID` (`campus_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_notifications`
--
ALTER TABLE `news_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_type`
--
ALTER TABLE `notification_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_users`
--
ALTER TABLE `other_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DEPT_ID` (`depart_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_setting`
--
ALTER TABLE `slider_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_notifications`
--
ALTER TABLE `sys_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable_details`
--
ALTER TABLE `timetable_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class_rooms`
--
ALTER TABLE `class_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `news_notifications`
--
ALTER TABLE `news_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notification_type`
--
ALTER TABLE `notification_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `other_users`
--
ALTER TABLE `other_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=382;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider_setting`
--
ALTER TABLE `slider_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sys_notifications`
--
ALTER TABLE `sys_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timetable_details`
--
ALTER TABLE `timetable_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
