-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 01:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `admin_panel_setting`
--

CREATE TABLE `admin_panel_setting` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_panel_setting`
--

INSERT INTO `admin_panel_setting` (`id`, `name`, `value`) VALUES
(1, 'LOGO', '1737958500618456057logo.png'),
(2, 'SIDEBAR_IMG', '1276140079pngtree-tech-interlaced-texture-texture-propaganda-background-image_214967.jpg'),
(3, 'SIDEBAR_COLOR', 'man-of-steel'),
(4, 'NAME', 'F.E.T'),
(5, 'FOOTER', 'University Of Sindh');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DEPT_ID` int(11) NOT NULL,
  `FAC_ID` int(3) DEFAULT NULL,
  `INST_ID` int(11) DEFAULT NULL,
  `DEPT_NAME` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `IS_INST` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `CODE` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `REMARKS` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `EMAIL` text COLLATE latin1_general_ci NOT NULL,
  `SAC_PASSWORD` text COLLATE latin1_general_ci NOT NULL,
  `RESET_TOKEN` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `USER_TEMP` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `PASS_TEMP` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `CITY_NAME` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `FORM_FINAL_PER` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEPT_ID`, `FAC_ID`, `INST_ID`, `DEPT_NAME`, `IS_INST`, `CODE`, `REMARKS`, `EMAIL`, `SAC_PASSWORD`, `RESET_TOKEN`, `USER_TEMP`, `PASS_TEMP`, `CITY_NAME`, `FORM_FINAL_PER`) VALUES
(1, 6, 0, 'ECONOMICS', 'N', 'ECON', 'ECONOMICS', 'chair.economics@usindh.edu.pk', 'fcae3f9041169c92e3fdd096f09dbff9', '', '', '', '', 40),
(2, 2, 6, 'BUSINESS ADMINSTRATION', 'N', 'BUS', 'BBA', '', 'e025582dca473c01bea5b4d525e5a59e', 'HoD6663', '', '', '', 40),
(3, 5, 0, 'INSTITUTE OF INFORMATION &COMMUNICATION TECHNOLOGY', 'Y', '', '', 'dir.iict@usindh.edu.pk', 'a4d08fe1309f4c270ad50c86c6916ec4', 'HoD566', '', '', '', 40),
(7, 2, 0, 'INSTITUTE OF COMMERCE', 'Y', '', 'COM', 'dir.com@usindh.edu.pk', '38028b03a2fbfc58f972e1660926813b', '', '', '', '', 40),
(6, 2, 0, 'INSTITUTE  OF BUSINESS ADMINISTRATION', 'Y', '', 'IBA', 'dir.iba@usindh.edu.pk', '4ec55f75ebd1ed0bf86caff5ad60c625', '', '', '', '', 40),
(8, 5, 3, 'INFORMATION TECHNOLOGY', 'N', 'ITEC', 'INFORMATION TECHNOLOGY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(9, 5, 0, 'INSTITUTE OF MATHEMATICS & COMPUTER SCIENCE', 'Y', '', 'IMCS', 'dir.imcs@usindh.edu.pk', 'af5f501fd9ce0ec9cd85a7b462cfcc2f', '', '', '', '', 40),
(10, 5, 9, 'COMPUTER SCIENCE', 'N', 'COMP', 'COMPUTER SCIENCE', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(11, 5, 0, 'DR. M.A. KAZI INSTITUTE OF CHEMISTRY', 'Y', '', 'CHEMISTRY', 'dir.chem@usindh.edu.pk', '73e65a52a01b1c5157033399f474cbdc', '', '', '', '', 40),
(12, 5, 11, 'CHEMISTRY', 'N', 'CHEM', 'CHEMISTRY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(13, 5, 3, 'SOFTWARE ENGINEERING', 'N', 'SWE', 'SOFTWARE ENGINEERING', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(14, 5, 3, 'TELECOMMUNICATION', 'N', 'TELC', 'TELECOMMUNICATION', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(15, 5, 3, 'ELECTRONICS', 'N', 'ELEC', 'ELECTRONICS', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(16, 6, 0, 'SINDH DEVELOPMENT STUDIES CENTRE', 'N', 'DS', 'SINDH DEVELOPMENT STUDIES CENTRE', 'dir.sdsc@usindh.edu.pk', '18a8bb21b38434263c998a77df1fe0ea', '', '', '', '', 40),
(17, 5, 0, 'INSTITUTE OF BIOTECHNOLOGY & GENETIC ENGINEERING', 'Y', '', '', 'dir.bt@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD4316', '', '', '', 40),
(18, 5, 17, 'GENETIC ENGINEERING', 'N', 'GENG', 'GENETIC ENGINEERING', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(19, 5, 68, 'BOTANY', 'N', 'BOTN', 'BOTANY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(20, 5, 0, 'FRESH WATER BIOLOGY & FISHERIES', 'N', 'FWBF', 'FRESH WATER BIOLOGY & FISHERIES', 'chair.fbf@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD11508', '', '', '', 40),
(21, 5, 0, 'GEOGRAPHY', 'N', 'GEOG', 'GEOGRAPHY', 'chair.geo@usindh.edu.pk', 'f4091b02c6c01b964fe81cf56acba97b', '', '', '', '', 40),
(22, 5, 0, 'CENTRE FOR PURE & APPLIED GEOLOGY', 'N', 'GEOL', 'GEOLOGY', 'dir.cpag@usindh.edu.pk', 'ba966d27d86cc255ceda313dd255a6c7', '', '', '', '', 40),
(23, 5, 79, 'MICROBIOLOGY', 'N', 'MICR', 'MICORBIOLOGY', 'director.mb@usindh.edu.pk', '136e83004ff4c86b067abf41bc52eb82', 'HoD7338', '', '', '', 40),
(24, 5, 69, 'PHYSICS', 'N', 'PHYS', 'PHYSICS', 'dir.phy@usindh.edu.pk', '6f276d7022b662f67c4c4446e33a0d3d', '', '', '', '', 40),
(25, 5, 0, 'PHYSIOLOGY', 'Y', 'PHSL', 'PHYSIOLOGY', 'chair.physio@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD5727', '', '', '', 40),
(26, 5, 0, 'STATISTICS', 'N', 'STAT', 'STATISTICS', 'chair.stat@usindh.edu.pk', 'f480034fee8f39994f1989df74cdd206', 'HoD12150', '', '', '', 40),
(27, 5, 0, 'ZOOLOGY', 'N', 'ZOOL', 'ZOOLOGY', 'chair.zoo@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD17698', '', '', '', 40),
(28, 6, 0, 'INSTITUTE OF GENDER STUDIES', 'Y', '', 'IGS', 'dir.gs@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD13730', '', '', '', 40),
(29, 6, 28, 'GENDER STUDIES', 'N', 'WS', 'GS', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(30, 5, 0, 'CENTRE FOR  PHYSICAL EDUCATION  HEALTH & SPORTS SC', 'N', 'HPE', 'HEALTH & PHYSICAL EDUCATION', 'dir.pes@usindh.edu.pk', '3bb3114b1102300d6806e8a8668dbeb0', '', '', '', '', 40),
(31, 6, 0, 'GENERAL HISTORY', 'N', 'GH', 'GENRAL HISTORY', 'chair.gh@usindh.edu.pk', 'ec2b438df9d4913a3fd783cd05f082b3', '', '', '', '', 40),
(32, 6, 0, 'INTERNATIONAL RELATIONS', 'N', 'IR', 'I R', 'chair.ir@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD21267', '', '', '', 40),
(33, 6, 0, 'LIBRARY INFORMATION SCIENCE & ARCHIVE STUDIES', 'N', 'LS', 'LIBRARY SCIENCES', 'chair.lisas@usindh.edu.pk', 'fd55ab27afc262c72684b9471d64c081', '', '', '', '', 40),
(34, 6, 0, 'MEDIA & COMMUNICATION STUDIES', 'N', 'MC', 'MEDIA & COMMUNICATION STUDIES', 'chair.mc@usindh.edu.pk', '7fd638a4ce60abe1f4d1178ec62cfb0f', '', '', '', '', 40),
(35, 6, 0, 'CENTRE FOR RURAL DEVELOPMENT COMMUNICATION', 'N', 'RURAL', 'RURAL DEVELOPMENT / MASS COMMUNICATION', 'dir.crdc@usindh.edu.pk', '7fd638a4ce60abe1f4d1178ec62cfb0f', 'HoD7302', '', '', '', 40),
(36, 6, 0, 'POLITICAL SCIENCE', 'N', 'POL', 'POLITICAL SCIENCE', 'chair.polsc@usindh.edu.pk', 'ce63fb91d2abb487b1d18e22e4d05480', '', '', '', '', 40),
(37, 6, 0, 'PSYCHOLOGY', 'N', 'PSY', 'PSYCHOLOGY', 'chair.psy@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD29657', '', '', '', 40),
(38, 6, 0, 'PUBLIC ADMINISTRATION', 'N', 'PA', 'PUBLIC ADMINISTRATION', 'chair.pa@usindh.edu.pk', 'cb19f461dd30a9dbe505943047816938', '', '', '', '', 40),
(39, 6, 0, 'SOCIOLOGY', 'N', 'SOC', 'SOCIOLOGY', 'chair.socio@usindh.edu.pk', '03238bebc1591aec2ce7fbd90ac4f437', 'HoD13061', '', '', '', 40),
(40, 6, 0, 'SOCIAL WORK', 'N', 'SW', 'SOCIAL WORK', 'chair.sw@usindh.edu.pk', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', 40),
(41, 6, 0, 'CRIMINOLOGY', 'N', 'CRM', 'CRIMINOLOGY', 'chair.crim@usindh.edu.pk', '9e5e527eba535db2fdae59d84d397cfa', '', '', '', '', 40),
(42, 2, 7, 'COMMERCE', 'N', 'COM', '', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(43, 7, 0, 'INSTITUTE OF ARTS & DESIGN', 'Y', '', 'FINE ARTS', 'dir.ad@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(44, 7, 0, 'INSTITUTE OF LANGUAGES', 'Y', '', 'INSTITUTE OF LANGUAGES', 'dir.lang@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(45, 7, 70, 'ENGLISH', 'N', 'ENG', 'ENLISH', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(46, 7, 0, 'PHILOSOPHY', 'N', 'PHIL', 'PHILOSOPHY', 'chair.phil@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(47, 7, 0, 'SINDHI', 'N', 'SIND', 'SINDHI', 'chair.sin@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(48, 7, 0, 'URDU', 'N', 'URD', 'URDU', 'chair.urdu@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD14015', '', '', '', 40),
(49, 7, 43, 'ART & DESIGN', 'N', 'FAD', 'FINE ART', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(50, 7, 44, 'ARABIC', 'N', 'AR', 'ARABIC', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(51, 7, 44, 'PERSIAN', 'N', 'PERS', 'PERSIAN', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(57, 9, 0, 'COMPARATIVE RELIGION & ISLAMIC CULTURE', 'N', 'IC', '', 'chair.cris@usindh.edu.pk', '5976d08e6aef0f0c506c8a333164f9c6', 'HoD32019', '', '', '', 40),
(58, 9, 0, 'MUSLIM HISTORY', 'N', 'MH', '', 'chair.mh@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD32336', '', '', '', 40),
(59, 5, 0, 'INSTITUTE OF BIOCHEMISTRY', 'Y', '', '', 'dir.bc@usindh.edu.pk', '58ca33e848f918457028a86134d9b955', '', '', '', '', 40),
(60, 5, 59, 'BIOCHEMISTRY', 'N', 'BIOC', 'BIOCHEMISRY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(61, 5, 0, 'CENTRE OF ENVIRONMENTAL SCIENCES', 'N', 'ENVS', 'ENVIROMENTAL', 'dir.es@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD12074', '', '', '', 40),
(62, 11, 0, 'INSTITUTE OF PHARMACY', 'Y', '', '', 'dean.pharm@usindh.edu.pk', 'd352d25c3aa2e00532ed9e79be2b8bb8', '', '', '', '', 60),
(63, 11, 62, 'PHARMACY', 'N', 'PHAR', 'PHAR', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 60),
(64, 5, 9, 'MATHEMATICS', 'N', 'MATH', 'MATHEMATICS', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(65, 5, 17, 'BIOTECHNOLOGY', 'N', 'BIOT', 'BIOTECHNOLOGY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(66, 10, 0, 'PAKISTAN STUDY CENTRE', 'N', 'PS', '', 'dir.psc@usindh.edu.pk', 'ee04d4a67656cbaf8539f42f88af9dbc', '', '', '', '', 40),
(67, 8, 0, 'EDUCATION', 'N', 'EDU', 'Main Department of Education', 'dean.edu@usindh.edu.pk', 'f6d7c53f57de5bc274b64fd7142d8a40', '', '', '', '', 40),
(68, 5, 0, 'INSTITUTE OF PLANT SCIENCES', 'Y', 'BOTN', 'BOTANY', 'dir.plant@usindh.edu.pk', '58a810d2204fdc406d2e110de8829efa', '', '', '', '', 40),
(69, 5, 0, 'INSTITUTE OF PHYSICS', 'Y', '', '', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(70, 7, 0, 'INSTITUTE OF ENGLISH LANGUAGE & LITERATURE', 'Y', '', 'ENGLISH', 'dir.eng@usindh.edu.pk', '746b4d29ba635025fc4f2b62b2620d9d', '', '', '', '', 40),
(71, 5, 3, 'TELEMEDICINE & E-HEALTH', 'N', 'TEMED', 'TELEMEDICINE & E-HEALTH', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(72, 10, 0, 'SINDH UNIVERSITY LAAR CAMPUS @ BADIN', 'N', 'SUBC', '', 'pvc.laar@usindh.edu.pk', '30e1a74f7358acea0cc6f773ab673b71', '', '', '', '', 40),
(73, 5, 0, 'ANTHROPOLOGY & ARCHAEOLOGY', 'N', 'ANTH', 'ANTHROPOLOGY & ARCHAEOLOGY', 'chair.anth@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD9899', '', '', '', 40),
(74, 8, 0, 'EDUCATION  SINDH UNIVERSITY LAAR CAMPUS @ BADIN', 'N', 'EDUL', 'LAAR BADIN', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(75, 8, 0, 'EDUCATION  P.I.T.E SINDH  NAWABSHAH', 'N', 'EDUP', 'PITE (NAWABSHAH)', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(76, 12, 88, 'LAW', 'N', 'LAW', 'LAW', 'law_test@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 65),
(77, 10, 0, 'SINDH UNIVERSITY CAMPUS MIRPURKHAS', 'N', 'SUMC', '', 'pvc.mpk@usindh.edu.pk', '780a55d8e03a3a7a2c8165f815cbb510', '', '', '', '', 40),
(78, 7, 0, 'CENTRE FOR MUSIC EDUCATION  INSTITUTE OF ART & DES', 'N', 'MUSC', 'CENTRE FOR MUSIC EDUCATION', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(79, 5, 0, 'SHAHEED PROF. BASHIR AHMED CHANNAR DEPARTMENT OF M', 'Y', '', '', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(80, 10, 0, 'MOHTARMA BENAZIR BHUTTO SHAHEED CAMPUS DADU', 'N', 'SUDC', '', 'pvc.dadu@usindh.edu.pk', '605f6e2f32c20233f41322c8850e057f', '', '', '', '', 40),
(81, 13, 0, 'INSTITUTE OF MODEREN SCIENCES & ARTS  HYDERABAD', 'N', '', '03332766010', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(83, 13, 0, 'SUKKUR INSTITUTE OF SCIENCE & TECHNOLOGY  SUKKAR', 'N', '', '0715614116', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(82, 13, 0, 'COLLEGE OF MODEREN SCIENCES', 'N', '', '03136667700', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(84, 10, 0, 'SINDH UNIVERSITY CAMPUS THATTA', 'N', 'SUCT', '', 'pvc.thatta@usindh.edu.pk', 'efebfb5e5abccfc0fdbc4e07eae91390', '', '', '', '', 40),
(85, 10, 0, 'SINDH UNIVERSITY CAMPUS LARKANA', 'N', '', '', 'pvc.larkana@usindh.edu.pk', 'd308a4b759a8ed5334edeef8d9c60613', '', '', '', '', 40),
(86, 5, 59, 'NUTRITION & FOOD TECHNOLOGY', 'N', 'NUFT', 'NUTRITION & FOOD TECHNOLOGY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(87, 10, 0, 'SINDH UNIVERSITY CAMPUS BHIT SHAH  IUPSMS', 'N', '', '', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(88, 12, 0, 'INSTITUTE OF LAW', 'Y', '', 'LAW', 'dean.law@usindh.edu.pk', '069f5b72e8a290c533857c2d0b3fe7f5', '', '', '', '', 65),
(89, 10, 0, 'SYED ALLAHANDO SHAH CAMPUS NAUSHAHRO FEROZ', 'N', 'SUNC', '', 'pvc.nf@usindh.edu.pk', 'e025582dca473c01bea5b4d525e5a59e', 'HoD6548', '', '', '', 40),
(90, 13, 0, 'ANEES HASSAN CENTRE OF EXCELLENCE  HYDERABAD', 'N', '', '03213133050', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(91, 13, 0, 'NATIONAL COLLEGE OF ARTS MANAGEMENT  HYDERABAD', 'N', '', '0223812383/ 0223821393', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(92, 13, 0, 'HYDERABAD INSTITUTE OF ART  SCIENCES & TECHNOLOGY', 'N', '', '03432392847', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(93, 13, 0, 'MUHAMMAD INSTITUTE OF SCIENCE & TECHNOLOGY  MIRPUR', 'N', '', '0233516049', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(94, 13, 0, 'NAZEER HASSAIN INSTITUTE OF EMERGING SCIENCE  MIRP', 'N', '', '0233863522', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(95, 13, 0, 'GOVERNMENT BOYS COLLEGE KALI MORI  HYDERABAD', 'N', '1', '03013614184', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(96, 13, 0, 'GOVERNMENT BOYS COLLEGE QASIMABAD  HYDERABAD', 'N', '58', '03332457571', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(97, 13, 0, 'GOVERNMENT NAZARETH GIRLS COLLEGE  HYDERABAD', 'N', '13', '03018370965', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(99, 13, 0, 'GOVERNMENT GIRLS COLLEGE QASIMABAD  HYDERABAD', 'N', '53', '03003013341', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(100, 13, 0, 'GOVERNMENT SHAH LATIF GIRLS COLLEGE LATIFABAD  HYDERABAD', 'N', '9', '03332602126', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(101, 13, 0, 'IBNE RUSHID GOVERNMENT GIRLS COLLEGE  MIRPURKHAS', 'N', '18', '02339290232', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(102, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  TANDO JAN MUHAMMAD', 'N', '19', '03342551289', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(103, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN) - HYDERABAD', 'N', '', '03013617298', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(104, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (WOMEN) - HYDERABAD', 'N', '', '03003796085', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(105, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN) - MIRPURKHAS', 'N', '', '03073432008', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(106, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (WOMEN) - MIRPURKHAS', 'N', '', '03003321446', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(107, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN/ WOMEN) - BADIN', 'N', '', '03332707826', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(108, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN) - THATTA', 'N', '', '03003250562', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(109, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (WOMEN) - THATTA', 'N', '', '03337076876', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(110, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN/ WOMEN) - MITHI', 'N', '', '03023217823', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(111, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (WOMEN)', 'N', '', '03013641804', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(112, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN)  ', 'N', '', '03332180822', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(113, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (WOMEN)', 'N', '', '03023909464', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(114, 13, 0, 'GOVERNMENT ELEMENTARY COLLEGE OF EDUCATION (MEN)  ', 'N', '', '03463862138', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(115, 13, 0, 'PROVINCIAL INSTITUTE OF TEACHERS EDUCATION (PITE) ', 'N', '', '03013610556', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(116, 13, 0, 'INDUS COLLEGE OF LAW  HYDERABAD', 'N', '', '03332525427', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(117, 5, 25, 'MEDICAL LABORATORY TECHNOLOGY', 'N', 'MLT', 'MEDICAL LABORATORY TECHNOLOGY', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', '', 40),
(122, 14, 0, 'GOVERNMENT COLLEGES', 'N', '5.0', '', '', 'e025582dca473c01bea5b4d525e5a59e', '', '', '', 'HYDERABAD', 40),
(123, 5, 0, 'NATIONAL CENTRE OF EXCELLENCE  IN ANALYTICAL CHEMI', 'N', 'NCEAC', '', '', '', '', '', '', '', 40),
(124, 5, 0, 'INSTITUTE FOR ADVANCED RESEARCH STUDIES IN CHEMICAL', 'Y', '', '', 'dir.iarscs@usindh.edu.pk', '19f210b05a9749765ab719eb1d5e9ad5', '', '', '', '', 40),
(125, 15, 0, 'INFORMATION TECHNOLOGY SERVICES CENTRE', '', 'ITSC', '', 'itsc@usindh.edu.pkk', '17737fff315297aa506af526812f3564', 'HoD22604', '', '', 'JAMSHORO', 40),
(126, 15, 0, 'REGISTRAR', 'Y', '', '', 'registrar@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(127, 15, 0, 'CONTROLLER OF EXAMINATIONS (SEMESTER)', 'Y', 'CES', '', 'controller@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(128, 15, 0, 'CONTROLLER OF EXAMINATIONS (ANNUAL)', 'Y', 'CEA', '', 'controller.annual@usindh.edu.pk', 'ab3f14c59bae2961429be7c1f8a8b1cb', '', '', '', 'JAMSHORO', 40),
(129, 15, 0, 'DIRECTOR ADMISSIONS', 'Y', 'DA', '', 'dir.adms@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(130, 15, 0, 'DIRECTOR FINANCE', 'Y', 'DF', '', 'df.outward@usindh.edu.pk', '4d55fb060da944225e2bc6b16d23bf4a', '', '', '', 'JAMSHORO', 40),
(131, 15, 126, 'ADMINISTRATION ADMIN OFFICE', 'N', '', '', 'admin.admin.io@usindh.edu.pk', '549819d8770c8d5e171ece507eacb471', '', '', '', 'JAMSHORO', 40),
(132, 15, 126, 'ADMINISTRATION TEACH OFFICE', 'N', '', '', 'admin.teach.io@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(133, 15, 126, 'GENERAL BRANCH', 'N', '', '', 'admin.general.io@usindh.edu.pk', '6ff2e3de17f7fdbbc5fab2bddb1ba5a4', '', '', '', 'JAMSHORO', 40),
(134, 15, 130, 'BURSUR  UNIVERSITY OF SINDH  JAMSHORO.', 'N', '', '', 'bursar@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(135, 15, 130, 'AUDITOR  UNIVERSITY OF SINDH  JAMSHORO', 'N', '', '', 'auditor@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(136, 15, 130, 'CHIEF ACCOUNTANT-I  UNIVERSITY OF SINDH  JAMSHORO', 'N', '', '', 'chief.acount@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(137, 15, 129, 'DIRECTORATE OF ADMISSIONS  UNIVERSITY OF SINDH', 'N', '', '', 'admin.admissions@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(138, 15, 127, 'DIRECTORATE OF CONTROLLER OF EXAMINATION (SEMESTER', 'N', '', '', 'controller.io@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(139, 15, 128, 'DIRECTORATE OF CONTROLLER OF EXAMINATION (ANNUAL)', 'N', '', '', 'controller.annual.io@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(140, 15, 0, 'INSPECTOR OF AFFILIATED COLLEGES  UNIVERSITY OF SI', 'N', '', '', 'insp.colleges@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(141, 15, 0, 'ADVISOR  PLANNING & DEVELOPMENT CELL  UNIVERSITY O', 'Y', '', '', 'advisorpnd@usindh.edu.pk', '', '', '', '', 'JAMSHORO', 40),
(142, 15, 141, 'DIRECTORATE OF PLANNING & DEVELOPMENT CELL  UNIVER', 'N', '', '', 'directorate.pnd.io@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(143, 15, 0, 'DIRECTOR  PLANNING & DEVELOPMENT CELL  UNIVERSITY ', 'N', '', '', 'dirpnd@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(144, 15, 0, 'DIRECTOR OF PROCUREMENT  UNIVERSITY OF SINDH', 'Y', '', '', 'pso@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(145, 15, 144, 'DIRECTORATE OF PROCUREMENT  UNIVERSITY OF SINDH', 'N', '', '', 'outward.pso@usindh.edu.pk', 'bb4499f7330f05c8e8b2ac63a1485f0d', '', '', '', 'JAMSHORO', 40),
(146, 15, 0, 'QUALITY ENHANCEMENT CELL (QEC)', 'N', 'QEC', '', 'info.qec@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(147, 15, 128, 'OFFICE OF THE DEPUTY CONTROLLER OF EXAMINATIONS (A', 'N', '', '', 'deputycontroller.exam@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(148, 15, 128, 'TOP SECRET SECTION (ANNUAL)', 'N', '', '', 'secretsection.exam.annual@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(149, 15, 128, 'VERIFICATION SECTION EXAMINATION (ANNUAL)', 'N', '', '', 'verificationsection.exam.annual@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(150, 15, 128, ' MIS-COMPUTER LAB (ANNUAL)', 'N', '', '', 'mis.exam.annual@usindh.edu.pk', '14736c9e8daf20c983172bd51c2bef97', '', '', '', 'JAMSHORO', 40),
(151, 15, 0, 'DEAN - FACULTY OF SOCIAL SCIENCES', 'N', 'DFSS', '', 'dean.social@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'JAMSHORO', 40),
(152, 15, 126, 'REGISTRAR OFFICE (PA)', 'N', 'ROPA', '', 'registrar.pa.io@usindh.edu.pk', '8bf76d6df3e88bc2da3b9e06ea70b383', '', '', '', 'JAMSHORO', 40),
(153, 15, 0, 'DIRECTORATE OF SPORTS GIRLS', 'N', 'DSG', '', 'outward.gsports@usindh.edu.pk', '078b2064b0abf99e6cfe3106f581f0e6', '', '', '', 'JAMSHORO', 40),
(154, 15, 0, 'DEAN - COMMERCE & BUSINESS ADMINISTRATION', 'N', 'DCBA', '', 'dean.cba@usindh.edu.pk', 'def28c1a7fe67216aeb0fcf37bd447b0', '', '', '', 'JAMSHORO', 40),
(155, 15, 0, 'VICE-CHANCELLOR SECRETARIAT', 'N', 'VCS', '', 'outward.vc@usindh.edu.pk', '46503c65a5b993974ee0892b5fde381b', '', '', '', 'JAMSHORO', 40),
(158, 13, 0, 'GOVT:S.S.ARTS/COMMERCE COLLEGE HYDERABAD', 'N', '2', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(159, 13, 0, 'GOVERNMENT CITY COLLEGE HYDERABAD', 'N', '3', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(160, 13, 0, 'Government M.B & G.F  Girls College  Hyderabad', 'N', '5', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(161, 13, 0, 'GOVERNMENT K.B.M.S GIRLS DEGREE COLLEGE HYDERABAD', 'N', '6', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(163, 13, 0, 'GOVT GHAZALI COLLEGE LATIFABAD HYDERABAD', 'N', '8', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(164, 13, 0, 'MIR GHULAM ALI KHAN TALPUR GOVERNMENT BOYS DEGREE COLLEGE  Tando Muhammad Khan', 'N', '10', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'TANDO MUHAMMAD KHAN', 40),
(165, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  MATLI', 'N', '11', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MATLI', 40),
(166, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  MATLI', 'N', '12', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MATLI', 40),
(167, 13, 0, 'GOVERNMENT SARWARI ISLAMIA DEGREE COLLEGE  HALA', 'N', '14', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HALA', 40),
(168, 13, 0, 'GOVERNMENT ISLAMIA DEGREE COLLEGE  BADIN', 'N', '15', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'BADIN', 40),
(169, 13, 0, 'GOVERNMENT MODEL COLLEGE   MIRPURKHAS', 'N', '16', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MIRPURKHAS', 40),
(170, 13, 0, 'SHAH ABDUL LATIF GOVERNMENT DEGREE COLLEGE   MIRPURKHAS', 'N', '17', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MIRPURKHAS', 40),
(171, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE   UMERKOT', 'N', '20', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'UMERKOT', 40),
(172, 13, 0, 'M.D ORIENTAL AND ARTS DEGREE COLLEGE  HAJI MUHAMMAD Alam Palli', 'N', '21', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40),
(173, 13, 0, 'SADIQUE FAQEER GOVERNMENT BOYS DEGREE COLLEGE  MITHI', 'N', '22', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MITHI', 40),
(174, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  SEHWAN', 'N', '31', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SEHWAN', 40),
(175, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  THATTA', 'N', '35', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'THATTA', 40),
(176, 13, 0, 'GOVERNMENT S.M DEGREE COLLEGE  Tando Allahyar', 'N', '37', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40),
(177, 13, 0, 'ALI BABA GOVERNMENT BOYS DEGREE COLLEGE  KOTRI', 'N', '38', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'KOTRI', 40),
(178, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  THATTA', 'N', '39', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'THATTA', 40),
(179, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  TANDO MUHAMMAD KHAN', 'N', '40', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'TM KHAN', 40),
(180, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  HALA', 'N', '42', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HALA', 40),
(181, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE   UMERKOT', 'N', '43', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'UMERKOT', 40),
(182, 13, 0, 'GOVERNMENT DEGREE COLLEGE   TANDO JAM', 'N', '45', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'TANDO JAM', 40),
(183, 13, 0, 'GOVT SINDH COLLEGE OF COMMERCE Hyderabad', 'N', '46', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(184, 13, 0, 'GOVT. GIRLS DEGREE COLLEGE LATIFABAD NO.8 HYDERABAD', 'N', '48', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(185, 13, 0, 'GOVERNMENT DR. I. H. ZUBERI GIRLS COLLEGE  HYDERABAD', 'N', '49', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(186, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  SUJAWAL', 'N', '54', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SUJAWAL', 40),
(187, 13, 0, 'GOVERNMENT F.G DEGREE COLLEGE  CANTT. HYDERABAD', 'N', '55', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(188, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  KOTRI', 'N', '56', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'KOTRI', 40),
(189, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  NEW SAEEDABAD', 'N', '59', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SAEEDABAD', 40),
(190, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE   MATIARI', 'N', '41', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MATIARI', 40),
(191, 13, 0, 'GOVERNMENT DEGREE COLLEGE KOHISAR  HYDERABAD', 'N', '60', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(192, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  TANDO JAN MUHAMMAD', 'N', '61', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'TANDO JAN MUHAMMAD', 40),
(193, 13, 0, 'NATIONAL DEGREE COLLEGE   DHABEJI', 'N', '62', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'DHABEJI', 40),
(194, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  MITHI', 'N', '63', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MITHI', 40),
(195, 13, 0, 'GOVERNMENT COLLEGE PARETABAD HYDERABAD', 'N', '64', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(196, 13, 0, 'GOVERNMENT MUSLIM SCIENCE DEGREE COLLEGE   HYDERABAD', 'N', '65', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(197, 13, 0, 'DR. NASREEN MAQBOOL MEMON GOVERNMENT DEGREE COLLEGE  M. SADIQUE MEMON  TANDO ALLAHYAR', 'N', '66', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40),
(198, 13, 0, 'GOVERNMENT GIRLS COLLEGE  KUNRI', 'N', '67', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'KUNRI', 40),
(199, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  BHITSHAH', 'N', '68', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MATIARI', 40),
(200, 13, 0, 'NATIONAL INSTITUTE OF EMERGING SCIENCES  MIRPURKHAS', 'N', '71', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MIRPURKHAS', 40),
(201, 13, 0, 'GOVERNMENT BOYS DEGREE COLLEGE  BHAN SAEEDABAD', 'N', '71', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'BHAN SAEEDABAD', 40),
(202, 13, 0, 'KHURSHEED BEGUM GOVERNMENT GIRLS DEGREE COLLEGE  HYDERABAD', 'N', '74', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(203, 13, 0, 'SARDAR MUHAMMAD ALI SHAH GOVERNMENT GIRLS DEGREE COLLEGE  MATIARI', 'N', '75', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MATIARI', 40),
(204, 13, 0, 'GOVERNMENT PAKISTAN DEGREE COLLEGE SAEEDPUR', 'N', '76', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SAEEDPUR', 40),
(205, 13, 0, 'GOVERNMENT DEGREE COLLEGE GHORA BARI', 'N', '77', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'GHORABARI', 40),
(206, 13, 0, 'GOVT. JINNAH LAW COLLEGE HYDERABAD', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(207, 13, 0, 'GOVT. SINDH LAW COLLEGE HYDERABAD', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(208, 13, 0, 'QUAID-E-AZAM LAW COLLEGE NAWABSHAH', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'NAWABSHAH', 40),
(209, 13, 0, 'GOVT: PIR ILLAHI BUX LAW COLLEGE  DADU', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'DADU', 40),
(210, 13, 0, 'MIRPURKHAS LAW COLLEGE', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MIRPURKHAS', 40),
(211, 13, 0, 'SISTECH LAW COLLEGE SUKKUR', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SUKKUR', 40),
(212, 13, 0, 'SUKKUR INSTITUTE OF SCIENCE &AMP  TECHNOLOGY SUKKU', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SUKKUR', 40),
(213, 13, 0, 'MAKHDOOM MUHAMMAD ZAMAN TALIB-UL-MOLA GOVT. LAW CO', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HALA', 40),
(214, 13, 0, 'SHAN-E-AASI COLLEGE OF LAW TANDO ADAM', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'TANDO ADAM', 40),
(215, 13, 0, 'ALI LAW COLLEGE  SANGHAR', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SANGHAR', 40),
(216, 13, 0, 'QAZI MIAN AHMED QURESHI LAW COLLEGE MORO', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'MORO', 40),
(217, 13, 0, 'SHAHEED BENAZIR BHUTTO LAW COLLEGE', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40),
(218, 13, 0, 'FAIZ MUHAMMAD SAHITO LAW COLLEGE KANDIARO', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'KANDIARO', 40),
(219, 13, 0, 'INSTITUTE OF MODERN SCIENCE &AMP  ARTS IMSA', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40),
(220, 15, 0, 'DEAN - FACULTY OF ARTS', 'N', 'DFA', '', 'outward.arts@usindh.edu.pk', '14a2ac4d8cd35cf9ba4417a9bdafd41e', '', '', '', 'JAMSHORO', 40),
(221, 13, 0, 'HYDERABAD INSTITUTE OF ARTS  SCIENCE &AMP  TECHNOL', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(222, 13, 0, 'MUHAMMAD INSTITUTE OF SCIENCE &AMP  TECHNOLOGY', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40),
(223, 13, 0, 'COLLEGE OF MODERN SCIENCES', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40),
(224, 13, 0, 'NATIONAL COLEGE OF ARTS &AMP  MANAGEMENT SCIENCE', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40),
(225, 13, 0, 'MANAGEMENT INSTITUTE OF TECHNOLOGY', 'N', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 40),
(226, 15, 0, 'DEAN - FACULTY OF NATURAL SCIENCE', 'N', 'DFNS', '', 'dean.science@usindh.edu.pk', 'b87fb4953df6e795088a9625174ebd3b', '', '', '', 'JAMSHORO', 40),
(227, 15, 0, 'SINDH UNIVERSITY TESTING CENTRE', 'N', 'SUTC', '', 'outward.sutc@usindh.edu.pk', 'b30531cb18d1a55877d917c3a559b447', '', '', '', 'JAMSHORO', 40),
(228, 15, 126, 'DEPUTY REGISTER AC1', 'N', 'DRAC1', '', 'outward.drac1@usindh.edu.pk', '17737fff315297aa506af526812f3564', '', '', '', 'JAMSHORO', 40),
(246, 13, 0, 'GOVERNMENT SACHAL SARMAST COMMERCE COLLEGE HIRABAD  HYDERABAD', 'N', '47', '', 'xyz@test.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(229, 11, 0, 'PHARMACEUTICS', 'N', '', '', 'chair.pharm@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'JAMSHORO', 60),
(230, 11, 0, 'PHARMACOLOGY', 'N', '', '', 'chair.pcology@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'JAMSHORO', 60),
(231, 11, 0, 'PHARMACOGNOSY', 'N', '', '', 'chair.pgnosy@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'JAMSHORO', 60),
(232, 11, 0, 'PHARMACY PRACTICE', 'N', '', '', 'chair.ppractice@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'JAMSHORO', 60),
(233, 11, 0, 'PHARMACEUTICAL CHEMISTRY', 'N', '', '', 'chair.pc@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'JAMSHORO', 60),
(234, 15, 0, 'DEAN - FACULTY OF EDUCATION', 'N', 'DFE', '', 'dean.edu@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'HYDERABAD', 40),
(235, 6, 0, 'AREA STUDY CENTRE FAR EAST AND SOUTH EAST ASIA', 'N', 'ASCES', '', 'director.fesea@usindh.edu.pk', '02e7ee36f5d14428959d075c30712ccf', '', '', '', 'JAMSHORO', 40),
(236, 8, 0, 'EDUCATIONAL MANAGEMENT AND SUPERVISION', 'N', 'EMS', '', 'chair.ems@usindh.edu.pk', 'c65f941d8f43b6b6c1ab59e81ce7f680', '', '', '', 'HYDERABAD', 40),
(237, 8, 0, 'SCIENCE AND TECHNICAL EDUCATION', 'N', 'STE', '', 'chair.ste@usindh.edu.pk', '367dbef0ce9aebc16fc119252f307629', '', '', '', 'HYDERABAD', 40),
(238, 8, 0, 'EARLY CHILDHOOD AND ELEMENTARY EDUCATION', 'N', 'ECEE', '', 'outward.ecee@usindh.edu.pk', 'd8136a439855a0af4e48ef21cc317ff8', '', '', '', 'HYDERABAD', 40),
(239, 8, 0, 'DISTANCE CONTINUING AND COMPUTER EDUCATION', 'N', 'DCCE', '', 'chair.dcce@usindh.edu.pk', '120b553955b32419e7d1c040f48107d2', '', '', '', 'HYDERABAD', 40),
(240, 8, 0, 'PSYCHOLOGICAL TESTING AND GUIDANCE AND RESEARCH', 'N', 'PTGR', '', 'chair.ptgr@usindh.edu.pk', 'da97f6aacab581c7c71e0be4c47121a6', '', '', '', 'HYDERABAD', 40),
(241, 8, 0, 'CURRICULM DEVELOPMENT AND SPECIAL EDUCATION', 'N', 'CDI', '', 'chair.cdi@usindh.edu.pk', 'dc5375f4552ccd00e879fbc8906d6759', '', '', '', 'HYDERABAD', 40),
(242, 13, 0, 'GOVERNMENT GIRLS DEGREE COLLEGE  SEHWAN SHARIF', 'N', '80', '', '.', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'SEHWAN', 40),
(243, 15, 0, 'DIRECTOR CAMPUS SECURITY', 'N', 'DCS', '', 'outward.csecurity@usindh.edu.pk', 'e91e6348157868de9dd8b25c81aebfb9', '', '', '', 'JAMSHORO', 40),
(244, 13, 0, 'GOVERNMENT DEGREE COLLEGE  LATIFABAD # 11  HYDERABAD', 'N', '7', '', 'xyz@test.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'HYDERABAD', 40),
(247, 5, 0, 'NATIONAL CENTRE OF EXCELLENCE IN ANALYTICAL CHEMISTRY', 'N', 'NCEAC', NULL, '', '', '', '', '', 'JAMSHORO', 40);

-- --------------------------------------------------------

--
-- Table structure for table `departments_programs`
--

CREATE TABLE `departments_programs` (
  `program_id` int(11) NOT NULL,
  `depart_id` int(11) NOT NULL,
  `program_name` varchar(100) NOT NULL,
  `program_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments_programs`
--

INSERT INTO `departments_programs` (`program_id`, `depart_id`, `program_name`, `program_description`) VALUES
(5, 3, 'asfas', 'afafa'),
(6, 3, 'program1', 'prorgram1desc'),
(8, 6, 'program11111', 'rasf'),
(9, 11, 'program1', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FAC_ID` int(3) NOT NULL,
  `FAC_NAME` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `REMARKS` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`FAC_ID`, `FAC_NAME`, `REMARKS`) VALUES
(6, 'SOCIAL SCIENCES', ''),
(5, 'NATURAL SCIENCES', ''),
(2, 'COMMERCE & BUSINESS ADMINISTRATION', ''),
(7, 'ARTS', ''),
(8, 'EDUCATION', ''),
(10, 'GENERAL (OTHER)', ''),
(9, 'ISLAMIC STUDIES', ''),
(11, 'PHARMACY', ''),
(12, 'LAW', ''),
(13, 'AFFILIATED COLLEGES/ INSTITUTIONS PUBLIC & PRIVATE', ''),
(14, 'ANNUAL SYSTEM', ''),
(15, 'ADMINISTRATIVE OFFICES', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_notifications`
--

CREATE TABLE `news_notifications` (
  `NOTIFICATION_ID` int(11) NOT NULL,
  `FAC_ID` int(11) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `NOTIFY_TYPE_ID` int(11) NOT NULL,
  `NOTIFICATION_FOR` varchar(255) NOT NULL,
  `TITLE` text,
  `DESCRIPTION` longtext,
  `DATA_TIME` datetime DEFAULT NULL,
  `IMAGE_PATH` text,
  `PUBLISHER_ID` int(11) DEFAULT NULL,
  `USER_TYPE_ID` varchar(256) DEFAULT NULL,
  `PROG_ID` varchar(256) DEFAULT NULL,
  `REMARKS` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_notifications`
--

INSERT INTO `news_notifications` (`NOTIFICATION_ID`, `FAC_ID`, `DEPT_ID`, `NOTIFY_TYPE_ID`, `NOTIFICATION_FOR`, `TITLE`, `DESCRIPTION`, `DATA_TIME`, `IMAGE_PATH`, `PUBLISHER_ID`, `USER_TYPE_ID`, `PROG_ID`, `REMARKS`) VALUES
(1, 9, 57, 1, 'specific_faculty', 'asdfasdfasdf', '<p><strong>asdfasdfasdf</strong></p>\r\n', NULL, '', 1, NULL, '62', 'asdfasdfasdf'),
(2, 0, 0, 2, 'everyone', 'asdfasd', '<p>asdfasdasdfasdf</p>\r\n', NULL, 'uploads/notifications_images/128057981_MG_0036.JPG', 1, NULL, NULL, 'asdfasdf'),
(3, 0, 0, 2, 'everyone', 'asdfasd', '<p>asdfasdasdfasdf</p>\r\n', NULL, 'uploads/notifications_images/1487831377_MG_0036.JPG', 1, NULL, NULL, 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `for_user_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `redirect_link` text NOT NULL,
  `is_seen` tinyint(1) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `for_user_id`, `msg`, `redirect_link`, `is_seen`, `datetime`) VALUES
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
-- Table structure for table `notification_settings`
--

CREATE TABLE `notification_settings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notf_gen_maintanance` tinyint(1) NOT NULL,
  `notf_ret_maintanance` tinyint(1) NOT NULL,
  `notf_rej_maintanance` tinyint(1) NOT NULL,
  `notf_returned_maintanance` tinyint(1) NOT NULL,
  `notf_compl_maintainance` tinyint(1) NOT NULL,
  `notf_compl_sys_maint` tinyint(1) NOT NULL,
  `notf_gen_usage_req` tinyint(1) NOT NULL,
  `notf_rej_usage_req` tinyint(1) NOT NULL,
  `notf_accepted_usage_req` tinyint(1) NOT NULL,
  `notf_ret_usage_req` tinyint(1) NOT NULL,
  `email_notification` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `notf_gen_chem_inv_req` tinyint(1) NOT NULL,
  `notf_acc_chem_inv_req` tinyint(1) NOT NULL,
  `notf_rej_chem_inv_req` tinyint(1) NOT NULL,
  `notf_returned_chem_inv_req` tinyint(1) NOT NULL,
  `notf_resubmit_chem_inv_req` tinyint(1) NOT NULL,
  `notf_gen_animal_inv_req` tinyint(1) NOT NULL,
  `notf_acc_animal_inv_req` tinyint(1) NOT NULL,
  `notf_rej_animal_inv_req` tinyint(1) NOT NULL,
  `notf_returned_animal_inv_req` tinyint(1) NOT NULL,
  `notf_resubmit_animal_inv_req` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_settings`
--

INSERT INTO `notification_settings` (`id`, `user_id`, `notf_gen_maintanance`, `notf_ret_maintanance`, `notf_rej_maintanance`, `notf_returned_maintanance`, `notf_compl_maintainance`, `notf_compl_sys_maint`, `notf_gen_usage_req`, `notf_rej_usage_req`, `notf_accepted_usage_req`, `notf_ret_usage_req`, `email_notification`, `datetime`, `notf_gen_chem_inv_req`, `notf_acc_chem_inv_req`, `notf_rej_chem_inv_req`, `notf_returned_chem_inv_req`, `notf_resubmit_chem_inv_req`, `notf_gen_animal_inv_req`, `notf_acc_animal_inv_req`, `notf_rej_animal_inv_req`, `notf_returned_animal_inv_req`, `notf_resubmit_animal_inv_req`) VALUES
(1, 42, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 'enable', '2020-11-25 21:18:03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 'enable', '2020-12-02 06:06:22', 1, 1, 0, 1, 0, 1, 0, 1, 0, 1),
(3, 79, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 'enable', '2020-12-08 20:09:59', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification_type`
--

CREATE TABLE `notification_type` (
  `NOTIFY_TYPE_ID` int(11) NOT NULL,
  `NAME` varchar(256) NOT NULL,
  `REMARKS` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification_type`
--

INSERT INTO `notification_type` (`NOTIFY_TYPE_ID`, `NAME`, `REMARKS`) VALUES
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
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `PROG_ID` int(6) NOT NULL,
  `DEPT_ID` int(3) NOT NULL,
  `PROGRAM_TITLE` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `SEM_DURATION` int(3) DEFAULT NULL,
  `SEM_PER_PART` int(1) DEFAULT NULL,
  `REMARKS` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `DEGREE_TITLE` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `SUBJECT` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `GRADUATE_POSTGRADUATE` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `SEM_MONTH_DURATION` varchar(1) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`PROG_ID`, `DEPT_ID`, `PROGRAM_TITLE`, `SEM_DURATION`, `SEM_PER_PART`, `REMARKS`, `DEGREE_TITLE`, `SUBJECT`, `GRADUATE_POSTGRADUATE`, `SEM_MONTH_DURATION`) VALUES
(1, 1, 'B.A (HONS) ECONOMICS', 6, 2, '15', 'Bachelor of Arts (Honours)', 'ECONOMICS', 'G', '6'),
(2, 1, 'M.A (HONS) ECONOMICS', 2, 2, '16', 'Master of Arts (Honours)', 'ECONOMICS', 'H', '6'),
(11, 13, 'BS (SOFTWARE ENGINEERING)', 8, 2, '16', 'Bachelor Studies', 'SOFTWARE ENGINEERING', 'G', '6'),
(4, 2, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6'),
(5, 2, 'M.B.A (HONS)', 4, 2, '18', 'Master of Business Administration (Hons)', '', 'H', '6'),
(6, 2, 'M.B.A (PASS)', 4, 2, '16', 'Master of Business Administration (Pass)', '', 'P', '6'),
(8, 10, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6'),
(10, 12, 'BS (CHEMISTRY)', 8, 2, '16', 'Bachelor Studies', 'CHEMISTRY', 'G', '6'),
(13, 15, 'BS (ELECTRONICS)', 8, 2, '16', 'Bachelor of Science', 'ELECTRONICS', 'G', '6'),
(14, 1, 'M.A (PASS) ECONOMICS', 4, 2, '16', 'Master of Arts (Pass)', 'ECONOMICS', 'P', '6'),
(23, 10, 'MASTER OF COMPUTER SCIENCE (MCS)', 4, 2, '17', 'Master of Computer Science', '', 'P', '6'),
(24, 12, 'M.Sc. (PASS) CHEMISTRY', 4, 2, '16', 'Master of Science (Pass)', 'CHEMISTRY', 'P', '6'),
(26, 19, 'BS (BOTANY)', 8, 2, '16', 'Bachelor Studies', 'BOTANY', 'G', '6'),
(27, 19, 'M.Sc. (PASS) BOTANY', 4, 2, '16', 'Master of Science (Pass)', 'BOTANY', 'P', '6'),
(32, 22, 'BS (GEOLOGY)', 8, 2, '16', 'Bachelor Studies', 'GEOLOGY', 'G', '6'),
(33, 22, 'M.Phil (GEOLOGY)', 3, 2, '18', 'Master of Philosophy', 'GEOLOGY', 'M', '6'),
(34, 23, 'BS (MICROBIOLOGY)', 8, 2, '16', 'Bachelor Studies', 'MICROBIOLOGY', 'G', '6'),
(36, 24, 'BS (PHYSICS)', 8, 2, '16', 'Bachelor Studies', 'PHYSICS', 'G', '6'),
(38, 25, 'BS (PHYSIOLOGY)', 8, 2, '16', 'Bachelor Studies', 'PHYSIOLOGY', 'G', '6'),
(40, 26, 'BS (STATISTICS)', 8, 2, '16', 'Bachelor Studies', 'STATISTICS', 'G', '6'),
(42, 27, 'BS (ZOOLOGY)', 8, 2, '16', 'Bachelor Studies', 'ZOOLOGY', 'G', '6'),
(43, 27, 'M.Sc. (PASS) ZOOLOGY', 4, 2, '16', 'Master of Science (Pass)', 'ZOOLOGY', 'P', '6'),
(45, 30, 'B.H.P.Ed', 2, 2, '15', 'Bachelor of Health & Physical Education', '', 'G', '6'),
(46, 30, 'M.H.P.Ed', 2, 2, '16', 'Master of Health & Physical Education', '', 'P', '6'),
(49, 29, 'P.G.D (COMMUNITY DEVELOPMENT)', 2, 2, '15', 'Post Graduate Diploma', 'COMMUNITY DEVELOPMENT', 'P', '6'),
(50, 31, 'B.A. (HONS) GENERAL HISTORY', 6, 2, '15', 'Bachelor of Arts (Honours)', 'GENERAL HISTORY', 'G', '6'),
(51, 31, 'M.A. (HONS) GENERAL HISTORY', 2, 2, '16', 'Master of Arts (Honours)', 'GENERAL HISTORY', 'H', '6'),
(54, 32, 'M.A (HONS) INTERNATIONAL RELATIONS', 2, 2, '16', 'Master of Arts (Honours)', 'INTERNATIONAL RELATIONS', 'H', '6'),
(57, 33, 'MASTER OF LIBRARY & INFORMATION SCIENCE', 2, 2, '16', 'Master of Library & Information Science', '', 'P', '6'),
(59, 34, 'M.A (HONS) MASS COMMUNICATION', 2, 2, '16', 'Master of Arts (Honours)', 'MASS COMMUNICATION', 'H', '6'),
(64, 57, 'M.A (PASS) ISLAMIC CULTURE', 4, 2, '16', 'Master of Arts (Pass)', 'ISLAMIC CULTURE', 'P', '6'),
(65, 57, 'B.A (HONS) COMPARATIVE RELIGION', 6, 2, '15', 'Bachelor of Arts (Honours)', 'COMPARATIVE RELIGION', 'G', '6'),
(69, 58, 'M.A (HONS) MUSLIM HISTORY', 2, 2, '16', 'Master of Arts (Honours)', 'MUSLIM HISTORY', 'H', '6'),
(71, 36, 'M.A (HONS) POLITICAL SCIENCE', 2, 2, '16', 'Master of Arts (Honours)', 'POLITICAL SCIENCE', 'H', '6'),
(75, 37, 'M.Sc. (PASS) PSYCHOLOGY', 4, 2, '16', 'Master of Science (Pass)', 'PSYCHOLOGY', 'P', '6'),
(76, 38, 'B.P.A (HONS)', 6, 2, '15', 'Bachelor of Public Administration (Honours)', '', 'G', '6'),
(81, 39, 'M.A (PASS) SOCIOLOGY', 4, 2, '16', 'Master of Arts (Pass)', 'SOCIOLOGY', 'P', '6'),
(87, 47, 'M.A (HONS) SINDHI', 2, 2, '16', 'Master of Arts (Honours)', 'SINDHI', 'H', '6'),
(92, 48, 'B.A (HONS) URDU', 6, 2, '15', 'Bachelor of Arts (Honours)', 'URDU', 'G', '6'),
(94, 45, 'B.A (HONS) ENGLISH', 6, 2, '15', 'Bachelor of Arts (Honours)', 'ENGLISH', 'G', '6'),
(95, 45, 'M.A (HONS) ENGLISH', 2, 2, '16', 'Master of Arts (Honours)', 'ENGLISH', 'H', '6'),
(96, 45, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH', 'P', '6'),
(97, 46, 'B.A (HONS) PHILOSOPHY', 6, 2, '15', 'Bachelor of Arts (Honours)', 'PHILOSOPHY', 'G', '6'),
(101, 49, 'M.A (PASS) FINE ARTS', 4, 2, '16', 'Master of Arts (Pass)', 'FINE ARTS', 'P', '6'),
(103, 50, 'M.A (HONS) ARABIC', 2, 2, '16', 'Master of Arts (Honours)', 'ARABIC', 'H', '6'),
(106, 51, 'M.A (HONS) PERSIAN', 2, 2, '16', 'Master of Arts (Honours)', 'PERSIAN', 'H', '6'),
(107, 51, 'M.A (PASS) PERSIAN', 4, 2, '16', 'Master of Arts (Pass)', 'PERSIAN', 'P', '6'),
(108, 10, 'M.Sc. (PASS) COMPUTER SCIENCE', 4, 2, '16', 'Master of Science (Pass)', 'COMPUTER SCIENCE', 'P', '6'),
(109, 2, 'M.B.A (EVENING)', 6, 3, '16', 'Master of Business Administration (Evening)', '', 'P', '4'),
(110, 42, 'B.COM (HONS)', 6, 2, '15', 'Bachelor of Commerce (Honours)', '', 'G', '6'),
(111, 42, 'M.COM (HONS)', 2, 2, '16', 'Master of Commerce (Honours)', '', 'H', '6'),
(112, 42, 'M.COM (PASS)', 4, 2, '16', 'Master of Commerce (Pass)', '', 'P', '6'),
(52, 31, 'M.A. (PASS) GENERAL HISTORY', 4, 2, '16', 'Master of Arts (Pass)', 'GENERAL HISTORY', 'P', '6'),
(53, 32, 'B.A (HONS) INTERNATIONAL RELATIONS', 6, 2, '15', 'Bachelor of Arts (Honours)', 'INTERNATIONAL RELATIONS', 'G', '6'),
(55, 32, 'M.A (PASS) INTERNATIONAL RELATIONS', 4, 2, '16', 'Master of Arts (Pass)', 'INTERNATIONAL RELATIONS', 'P', '6'),
(60, 34, 'M.A (PASS) MASS COMMUNICATION', 4, 2, '16', 'Master of Arts (Pass)', 'MASS COMMUNICATION', 'P', '6'),
(61, 36, 'B.A (HONS) POLITICAL SCIENCE', 6, 2, '15', 'Bachelor of Arts (Honours)', 'POLITICAL SCIENCE', 'G', '6'),
(72, 36, 'M.A (PASS) POLITICAL SCIENCE', 4, 2, '16', 'Master of Arts (Pass)', 'POLITICAL SCIENCE', 'P', '6'),
(79, 39, 'B.A (HONS) SOCIOLOGY', 6, 2, '15', 'Bachelor of Arts (Honours)', 'SOCIOLOGY', 'G', '6'),
(80, 39, 'M.A (HONS) SOCIOLOGY', 2, 2, '16', 'Master of Arts (Honours)', 'SOCIOLOGY', 'H', '6'),
(82, 40, 'B.A (HONS) SOCIAL WORK', 6, 2, '15', 'Bachelor of Arts (Honours)', 'SOCIAL WORK', 'G', '6'),
(83, 40, 'M.A (HONS) SOCIAL WORK', 2, 2, '16', 'Master of Arts (Honours)', 'SOCIAL WORK', 'H', '6'),
(84, 40, 'M.A (PASS) SOCIAL WORK', 4, 2, '16', 'Master of Arts (Pass)', 'SOCIAL WORK', 'P', '6'),
(85, 41, 'M.Sc. (PASS) CRIMINOLOGY', 4, 2, '16', 'Master of Science (Pass)', 'CRIMINOLOGY', 'P', '6'),
(37, 24, 'M.Sc. (PASS) PHYSICS', 4, 2, '16', 'Master of Science (Pass)', 'PHYSICS', 'P', '6'),
(39, 25, 'M.Sc. (PASS) PHYSIOLOGY', 4, 2, '16', 'Master of Science (Pass)', 'PHYSIOLOGY', 'P', '6'),
(98, 46, 'M.A (PASS) PHILOSOPHY', 4, 2, '16', 'Master of Arts (Pass)', 'PHILOSOPHY', 'P', '6'),
(86, 47, 'B.A (HONS) SINDHI', 6, 2, '15', 'Bachelor of Arts (Honours)', 'SINDHI', 'G', '6'),
(88, 47, 'M.A (PASS) SINDHI', 4, 2, '16', 'Master of Arts (Pass)', 'SINDHI', 'P', '6'),
(99, 48, 'M.A (PASS) URDU', 4, 2, '16', 'Master of Arts (Pass)', 'URDU', 'P', '6'),
(100, 49, 'B.A (PASS) FINE ARTS', 4, 2, '14', 'Bachelor of Arts (Pass)', 'FINE ARTS', 'G', '6'),
(102, 50, 'B.A (HONS) ARABIC', 6, 2, '15', 'Bachelor of Arts (Honours)', 'ARABIC', 'G', '6'),
(104, 50, 'M.A (PASS) ARABIC', 4, 2, '16', 'Master of Arts (Pass)', 'ARABIC', 'P', '6'),
(105, 51, 'B.A (HONS) PERSIAN', 6, 2, '15', 'Bachelor of Arts (Honours)', 'PERSIAN', 'G', '6'),
(68, 58, 'B.A (HONS) MUSLIM HISTORY', 6, 2, '15', 'Bachelor of Arts (Honours)', 'MUSLIM HISTORY', 'G', '6'),
(70, 58, 'M.A (PASS) MUSLIM HISTORY', 4, 2, '16', 'Master of Arts (Pass)', 'MUSLIM HISTORY', 'P', '6'),
(113, 60, 'BS (BIOCHEMISTRY)', 8, 2, '16', 'Bachelor Studies', 'BIOCHEMISTRY', 'G', '6'),
(114, 60, 'M.Sc. (PASS) BIOCHEMISTRY', 4, 2, '16', 'Master of Science (Pass)', 'BIOCHEMISTRY', 'P', '6'),
(117, 63, 'DOCTOR OF PHARMACY (PHARM. D)', 10, 2, '17', 'Doctor of Pharmacy', '', 'G', '6'),
(118, 64, 'BS (MATHEMATICS)', 8, 2, '16', 'Bachelor Studies', 'MATHEMATICS', 'G', '6'),
(119, 64, 'M.Sc. (PASS) MATHEMATICS', 4, 2, '16', 'Master of Science (Pass)', 'MATHEMATICS', 'P', '6'),
(120, 37, 'B.Sc. (HONS) PSYCHOLOGY', 6, 2, '15', 'Bachelor of Science (Honours)', 'PSYCHOLOGY', 'G', '6'),
(123, 10, 'POST GRADUATE DIPLOMA (COMPUTER SCIENCE)', 2, 2, '15', 'Post Graduate Diploma', 'COMPUTER SCIENCE', 'P', '6'),
(78, 38, 'M.P.A (PASS)', 4, 2, '16', 'Master of Public Administration (Pass)', '', 'P', '6'),
(126, 33, 'M.A (PASS) LIBRARY & INFORMATION SCIENCE', 4, 2, '16', 'Master of Arts (Pass)', 'LIBRARY & INFORMATION SCIENCE', 'P', '6'),
(127, 66, 'M.A. (PASS) PAKISTAN STUDIES', 4, 2, '16', 'Master of Arts (Pass)', 'PAKISTAN STUDIES', 'P', '6'),
(29, 20, 'M.Sc. (PASS) FRESHWATER BIOLOGY & FISHERIES', 4, 2, '16', 'Master of Science (Pass)', 'FRESHWATER BIOLOGY & FISHERIES', 'P', '6'),
(28, 20, 'BS (FRESHWATER BIOLOGY & FISHERIES)', 8, 2, '16', 'Bachelor Studies', 'FRESHWATER BIOLOGY & FISHERIES', 'G', '6'),
(77, 38, 'M.P.A (HONS)', 2, 2, '16', 'Master of Public Administration (Honours)', '', 'H', '6'),
(134, 67, 'B.ED.', 2, 2, '15', 'Bachelor of Education', 'EDUCATION', 'G', '6'),
(135, 67, 'M.ED.', 2, 2, '16', 'Master of Education', 'EDUCATION', 'P', '6'),
(136, 67, 'B.A (HONS) EDUCATION', 6, 2, '15', 'Bachelor of Arts (Honours)', 'EDUCATION', 'G', '6'),
(137, 67, 'M.A (PASS) EDUCATION', 4, 2, '16', 'Master of Arts (Pass)', 'EDUCATION', 'P', '6'),
(138, 37, 'BS (PSYCHOLOGY) SOCIAL SCIENCES', 8, 2, '16', 'Bachelor Studies', 'PSYCHOLOGY', 'G', '6'),
(140, 21, 'B.A (HONS) GEOGRAPHY', 6, 2, '15', 'Bachelor of Arts (Honours)', 'GEOGRAPHY', 'G', '6'),
(141, 30, 'BS (HEALTH & PHYSICAL EDU.)', 8, 2, '16', 'Bachelor Studies', 'PHYSICAL EDUCATION  HEALTH & SPORTS SCIENCES', 'G', '6'),
(142, 1, 'BS (ECONOMICS)', 8, 2, '16', 'Bachelor Studies', 'ECONOMICS', 'G', '6'),
(143, 34, 'BS (MASS COMMUNICATION)', 8, 2, '16', 'Bachelor Studies', 'MASS COMMUNICATION', 'G', '6'),
(144, 31, 'BS (GENERAL HISTORY)', 8, 2, '16', 'Bachelor Studies', 'GENERAL HISTORY', 'G', '6'),
(145, 39, 'BS (SOCIOLOGY)', 8, 2, '16', 'Bachelor Studies', 'SOCIOLOGY', 'G', '6'),
(146, 32, 'BS (INTERNATIONAL RELATIONS)', 8, 2, '16', 'Bachelor Studies', 'INTERNATIONAL RELATIONS', 'G', '6'),
(147, 36, 'BS (POLITICAL SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'POLITICAL SCIENCE', 'G', '6'),
(148, 40, 'BS (SOCIAL WORK)', 8, 2, '16', 'Bachelor Studies', 'SOCIAL WORK', 'G', '6'),
(149, 16, 'BS (RURAL DEVELOPMENT)', 8, 2, '16', 'Bachelor Studies', 'RURAL DEVELOPMENT', 'G', '6'),
(150, 38, 'BS (PUBLIC ADMINISTRATION)', 8, 2, '16', 'Bachelor Studies', 'PUBLIC ADMINISTRATION', 'G', '6'),
(194, 74, 'M.Ed', 2, 2, '16', 'Master of Education', '', 'P', '6'),
(152, 37, 'BS (PSYCHOLOGY) NATURAL SCIENCES', 8, 2, '16', 'Bachelor of Science', 'PSYCHOLOGY', 'G', '6'),
(153, 38, 'P.G.D (PUBLIC ADMINISTRATION)', 2, 2, '15', 'Post Graduate Diploma', 'PUBLIC ADMINISTRATION', 'P', '6'),
(160, 72, 'BS (COMMERCE)', 8, 2, '16', 'Bachelor Studies', 'COMMERCE', 'G', '6'),
(155, 42, 'BS (COMMERCE)', 8, 2, '16', 'Bachelor Studies', 'COMMERCE', 'G', '6'),
(156, 37, 'M.A (HONS) PSYCHOLOGY', 2, 2, '16', 'Master of Arts (Honours)', 'PSYCHOLOGY', 'H', '6'),
(157, 37, 'M.Sc. (HONS) PSYCHOLOGY', 2, 2, '16', 'Master of Science (Honours)', 'PSYCHOLOGY', 'H', '6'),
(158, 71, 'M.Sc. (PASS) TELEMEDICINE & E-HEALTH', 4, 2, '16', 'Master of Science (Pass)', 'TELEMEDICINE & E-HEALTH', 'P', '6'),
(159, 72, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6'),
(161, 72, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6'),
(162, 67, 'M.A (HONS) EDUCATION', 2, 2, '16', 'Master of Arts (Honours)', 'EDUCATION', 'H', '6'),
(163, 38, 'M.P.A FINAL (P.G.D SIDE)', 2, 2, '16', 'Master of Public Administration (Pass)', '', 'P', '6'),
(164, 73, 'BS (ANTHROPOLOGY & ARCHAEOLOGY)', 8, 2, '16', 'Bachelor Studies', '', 'G', '6'),
(165, 46, 'M.A (HONS) PHILOSOPHY', 4, 2, '16', 'Master of Arts (Honours)', 'PHILOSOPHY', 'H', '6'),
(167, 72, 'M.B.A (EVENING)', 6, 3, '16', 'Master of Business Administration (Evening)', '', 'P', '4'),
(166, 63, 'ONE YEAR CONDENSED DEFICIENCY COURSE IN PHARMACY', 2, 2, '17', 'Doctor of Pharmacy', '', 'G', '6'),
(93, 48, 'M.A (HONS) URDU', 2, 2, '16', 'Master of Arts (Honours)', 'URDU', 'H', '6'),
(62, 57, 'B.A (HONS) ISLAMIC CULTURE', 6, 2, '15', 'Bachelor of Arts (Honours)', 'ISLAMIC CULTURE', 'G', '6'),
(67, 57, 'M.A (PASS) COMPARATIVE RELIGION', 4, 2, '16', 'Master of Arts (Pass)', 'COMPARATIVE RELIGION', 'P', '6'),
(66, 57, 'M.A (HONS) COMPARATIVE RELIGION', 2, 2, '16', 'Master of Arts (Honours)', 'COMPARATIVE RELIGION', 'H', '6'),
(63, 57, 'M.A (HONS) ISLAMIC CULTURE', 2, 2, '16', 'Master of Arts (Honours)', 'ISLAMIC CULTURE', 'H', '6'),
(25, 18, 'BS (GENETICS)', 8, 2, '16', 'Bachelor Studies', 'GENETICS', 'G', '6'),
(31, 21, 'M.Sc. (PASS) GEOGRAPHY', 4, 2, '16', 'Master of Science (Pass)', 'GEOGRAPHY', 'P', '6'),
(41, 26, 'M.Sc. (PASS) STATISTICS', 4, 2, '16', 'Master of Science (Pass)', 'STATISTICS', 'P', '6'),
(12, 14, 'BS (TELECOMMUNICATION)', 8, 2, '16', 'Bachelor of Science', 'TELECOMMUNICATION', 'G', '6'),
(56, 33, 'P.G.D (LIBRARY & INFORMATION SCIENCE)', 2, 2, '15', 'Post Graduate Diploma', 'LIBRARY & INFORMATION SCIENCE', 'P', '6'),
(58, 34, 'B.A (HONS) MASS COMMUNICATION', 6, 2, '15', 'Bachelor of Arts (Honours)', 'MASS COMMUNICATION', 'G', '6'),
(73, 37, 'B.A (HONS) PSYCHOLOGY', 6, 2, '15', 'Bachelor of Arts (Honours)', 'PSYCHOLOGY', 'G', '6'),
(74, 37, 'M.A (PASS) PSYCHOLOGY', 4, 2, '16', 'Master of Arts (Pass)', 'PSYCHOLOGY', 'P', '6'),
(48, 29, 'M.A (PASS) WOMEN DEVELOPMENT STUDIES', 4, 2, '16', 'Master of Arts (Pass)', 'WOMEN DEVELOPMENT STUDIES', 'P', '6'),
(47, 29, 'M.Sc. (PASS) HOME ECONOMICS', 4, 2, '16', 'Master of Science (Pass)', 'HOME ECONOMICS', 'P', '6'),
(168, 74, 'B.Ed', 2, 2, '15', 'Bachelor of Education', '', 'G', '6'),
(125, 65, 'M.Sc. (PASS) BIOTECHNOLOGY', 4, 2, '16', 'Master of Science (Pass)', 'BIOTECHNOLOGY', 'P', '6'),
(115, 61, 'M.Sc. (PASS) ENVIRONMENTAL SCIENCES', 4, 2, '16', 'Master of Science (Pass)', 'ENVIRONMENTAL SCIENCES', 'P', '6'),
(30, 21, 'BS (GEOGRAPHY)', 8, 2, '16', 'Bachelor Studies', 'GEOGRAPHY', 'G', '6'),
(7, 8, 'BS (INFORMATION TECHNOLOGY)', 8, 2, '16', 'Bachelor Studies', 'INFORMATION TECHNOLOGY', 'G', '6'),
(169, 45, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6'),
(170, 49, 'BACHELOR OF FINE ARTS', 8, 2, '16', 'Bachelor of Fine Arts', '', 'G', '6'),
(171, 49, 'BACHELOR OF ART HISTORY', 8, 2, '16', 'Bachelor of Art History', '', 'G', '6'),
(172, 75, 'B.Ed', 3, 3, '15', 'Bachelor of Education', '', 'G', '6'),
(139, 49, 'BACHELOR OF DESIGN', 8, 2, '16', 'Bachelor of Design', '', 'G', '6'),
(173, 76, 'L.L.B (HONS)', 10, 2, '17', 'Bachelor of Law', 'LL.B (Honours)', 'G', '6'),
(174, 47, 'BS (SINDHI)', 8, 2, '16', 'Bachelor Studies', 'SINDHI', 'G', '6'),
(175, 77, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', 'BUSINESS ADMINISTRATION', 'G', '6'),
(176, 77, 'BS (COMMERCE)', 8, 2, '16', 'Bachelor Studies', 'COMMERCE', 'G', '6'),
(177, 77, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6'),
(178, 77, 'BS (INFORMATION TECHNOLOGY)', 8, 2, '16', 'Bachelor Studies', 'INFORMATION TECHNOLOGY', 'G', '6'),
(179, 77, 'BS (GEOLOGY)', 8, 2, '16', 'Bachelor Studies', 'GEOLOGY', 'G', '6'),
(180, 67, 'ASSOCIATE DEGREE IN EDUCATION (ADE)', 4, 2, '14', 'Associate Degree in Education', 'EDUCATION', 'G', '6'),
(181, 78, 'CERTIFICATE COURSE IN MUSIC EDUCATION', 1, 1, '11', 'FOUR MONTHS CERTIFICATE COURSE', 'MUSIC EDUCATION  INSTITUTE OF ART & DESIGN', 'G', '6'),
(182, 78, 'DIPLOMA COURSE IN MUSIC EDUCATION', 2, 2, '11', 'EIGHT MONTHS DIPLOMA COURSE', 'MUSIC EDUCATION  INSTITUTE OF ART & DESIGN', 'G', '6'),
(183, 30, 'BACHELOR OF PHYSICAL EDUCATION  HEALTH & SPORTS SC', 2, 2, '15', 'Bachelor of Physical Education  Health & Sports Sc', '', 'G', '6'),
(184, 30, 'MASTER OF PHYSICAL EDUCATION  HEALTH & SPORTS SCIE', 2, 2, '16', 'Master of Physical Education  Health & Sports Scie', '', 'G', '6'),
(185, 67, 'B.ED. (HONS) ELEMENTARY', 8, 2, '16', 'Bachelor of Education (Hons) Elementary', 'EDUCATION', 'G', '6'),
(186, 42, 'MS (COMMERCE)', 3, 2, '18', 'Master Studies', 'COMMERCE', 'M', '6'),
(187, 2, 'MBA', 8, 2, '18', 'Master of Business Administration', 'BUSINESS ADMINSTRATION', 'H', '6'),
(188, 80, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6'),
(189, 80, 'BS (INFORMATION TECHNOLOGY)', 8, 2, '16', 'Bachelor Studies', 'INFORMATION TECHNOLOGY', 'G', '6'),
(190, 80, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6'),
(191, 80, 'M.B.A (PASS)', 4, 2, '16', 'Master of Business Administration (Pass)', '', 'P', '6'),
(192, 80, 'M.B.A (EVENING)', 6, 3, '16', 'Master of Business Administration (Evening)', '', 'P', '4'),
(193, 82, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6'),
(197, 84, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6'),
(195, 84, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6'),
(196, 84, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6'),
(198, 84, 'M.B.A (EVENING)', 6, 3, '16', 'Master of Business Administration (Evening)', '', 'P', '4'),
(199, 85, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6'),
(200, 85, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6'),
(201, 85, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6'),
(202, 85, 'M.B.A (EVENING)', 6, 3, '16', 'Master of Business Administration (Evening)', '', 'P', '4'),
(203, 61, 'BS (ENVIRONMENTAL SCIENCES)', 8, 2, '16', 'Bachelor Studies', 'ENVIRONMENTAL SCIENCE', 'G', '6'),
(204, 41, 'BS (CRIMINOLOGY)', 8, 2, '16', 'Bachelor Studies', 'CRIMINOLOGY', 'G', '6'),
(206, 86, 'BS (NUTRITION & FOOD TECHNOLOGY )', 8, 2, '16', 'Bachelor Studies', 'NUTRITION & FOOD TECHNOLOGY', 'G', '6'),
(207, 76, 'L.L.M', 4, 2, '19', 'Master of Law', 'LL.M', 'P', '6'),
(208, 87, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6'),
(209, 87, 'M.A (PASS) SUFISM & PEACE', 4, 2, '16', 'Master of Arts (Pass)', 'SUFISM & PEACE', 'P', '6'),
(210, 87, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH', 'P', '6'),
(211, 87, 'M.A (PASS) POLITICAL SCIENCE', 4, 2, '16', 'Master of Arts (Pass)', 'POLITICAL SCIENCE', 'P', '6'),
(212, 49, 'BACHELOR OF COMMUNICATION DESIGN', 8, 2, '16', 'Bachelor of Communication Design', '', 'G', '6'),
(213, 49, 'BACHELOR OF TEXTILE DESIGN', 8, 2, '16', 'Bachelor of Textile Design', '', 'G', '6'),
(214, 65, 'BS (BIOTECHNOLOGY)', 8, 2, '16', 'Bachelor Studies', 'BIOTECHNOLOGY', 'G', '6'),
(215, 29, 'BS (GENDER STUDIES)', 8, 2, '16', 'Bachelor Studies', 'GENDER STUDIES', 'G', '6'),
(216, 33, 'BS (LIBRARY AND INFORMATION SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'LIBRARY AND INFORMATION SCIENCE', 'G', '6'),
(217, 80, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH', 'H', '6'),
(218, 89, 'B.B.A (HONS)', 8, 2, '16', 'Bachelor of Business Administration (Hons)', '', 'G', '6'),
(219, 89, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6'),
(220, 89, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6'),
(221, 89, 'M.B.A (PASS)', 4, 2, '16', 'Master of Business Administration (Pass)', '', 'P', '6'),
(247, 57, 'M.A (PASS) ISLAMIC STUDIES', 4, 2, '16', 'Master of Arts (Pass)', 'ISLAMIC STUDIES', 'P', '6'),
(223, 67, 'B.ED. (HONS) ELEMENTARY FOLLOWED BY A.D.E', 4, 2, '16', 'Bachelor of Education (Hons) Elementary', 'EDUCATION', 'G', '6'),
(224, 114, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6'),
(225, 108, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6'),
(226, 103, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6'),
(227, 105, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6'),
(228, 110, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6'),
(229, 112, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6'),
(230, 107, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6'),
(231, 109, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6'),
(232, 104, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6'),
(233, 106, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6'),
(234, 111, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6'),
(235, 113, 'ASSOCIATE DEGREE IN EDUCATION', 4, 2, '14', 'Associate Degree in Education', '', 'G', '6'),
(236, 82, 'M.B.A (PASS)', 4, 2, '16', 'Master of Business Administration (Pass)', '', 'P', '6'),
(237, 87, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6'),
(238, 80, 'MBA', 8, 2, '18', 'Master of Business Administration', '', 'P', '6'),
(239, 89, 'MBA', 8, 2, '18', 'Master of Business Administration', '', 'P', '6'),
(240, 117, 'BS (MEDICAL LABORATORY TECHNOLOGY)', 8, 2, '16', 'Bachelor Studies', 'MEDICAL LABORATORY TECHNOLOGY', 'G', '6'),
(241, 89, 'BS (INFORMATION TECHNOLOGY)', 8, 2, '16', 'Bachelor Studies', 'INFORMATION TECHNOLOGY', 'G', '6'),
(242, 58, 'BS (MUSLIM HISTORY)', 8, 2, '16', 'Bachelor Studies', 'MUSLIM HISTORY', 'G', '6'),
(243, 57, 'BS (ISLAMIC STUDIES)', 8, 2, '16', 'Bachelor Studies', 'ISLAMIC STUDIES', 'G', '6'),
(244, 57, 'BS (COMPARATIVE RELIGION)', 8, 2, '16', 'Bachelor Studies', 'COMPARATIVE RELIGION', 'G', '6'),
(246, 48, 'BS (URDU)', 8, 2, '16', 'Bachelor Studies', 'URDU', 'G', '6'),
(245, 87, 'BS (POLITICAL SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'POLITICAL SCIENCE', 'G', '6'),
(248, 89, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts', 'ENGLISH', 'P', '6'),
(249, 72, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6'),
(250, 87, 'BS (COMPUTER SCIENCE)', 8, 2, '16', 'Bachelor Studies', 'COMPUTER SCIENCE', 'G', '6'),
(251, 84, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH', 'P', '6'),
(252, 50, 'BS (ARABIC)', 8, 2, '16', 'Bachelor Studies', 'ARABIC', 'G', '6'),
(253, 51, 'BS (PERSIAN)', 8, 2, '16', 'Bachelor Studies', 'PERSIAN', 'G', '6'),
(254, 122, 'M.COM (PASS)', 2, 1, '16', 'Master of Commerce (Pass)', '', 'P', '1'),
(255, 122, 'M.Sc. (PASS) BOTANY', 2, 1, '16', 'Master of Science (Pass)', 'BOTANY', 'P', '1'),
(256, 122, 'M.Sc. (PASS) CHEMISTRY', 2, 1, '16', 'Master of Science (Pass)', 'CHEMISTRY', 'P', '1'),
(257, 122, 'M.Sc. (PASS) MATHEMATICS', 2, 1, '16', 'Master of Science (Pass)', 'MATHEMATICS', 'P', '1'),
(258, 122, 'M.Sc. (PASS) PHYSICS', 2, 1, '16', 'Master of Science (Pass)', 'PHYSICS', 'P', '1'),
(259, 122, 'M.Sc. (PASS) STATISTICS', 2, 1, '16', 'Master of Science (Pass)', 'STATISTICS', 'P', '1'),
(260, 122, 'M.Sc. (PASS) ZOOLOGY', 2, 1, '16', 'Master of Science (Pass)', 'ZOOLOGY', 'P', '1'),
(261, 122, 'M.A (PASS) ECONOMICS', 2, 1, '16', 'Master of Arts (Pass)', 'ECONOMICS', 'P', '1'),
(262, 122, 'M.A (PASS) ENGLISH', 2, 1, '16', 'Master of Arts (Pass)', 'ENGLISH', 'P', '1'),
(263, 122, 'M.A (PASS) INTERNATIONAL RELATIONS', 2, 1, '16', 'Master of Arts (Pass)', 'INTERNATIONAL RELATIONS', 'P', '1'),
(264, 122, 'M.A (PASS) MUSLIM HISTORY', 2, 1, '16', 'Master of Arts (Pass)', 'MUSLIM HISTORY', 'P', '1'),
(265, 122, 'M.A (PASS) POLITICAL SCIENCE', 2, 1, '16', 'Master of Arts (Pass)', 'POLITICAL SCIENCE', 'P', '1'),
(266, 122, 'M.A (PASS) URDU', 2, 1, '16', 'Master of Arts (Pass)', 'URDU', 'P', '1'),
(267, 122, 'B.COM (PASS)', 2, 1, '14', 'Bachelor of Commerce (Pass)', '', 'G', '1'),
(268, 122, 'B.Sc. (PASS) HOME ECONOMICS', 2, 1, '14', 'Bachelor of Science (Pass)', 'HOME ECONOMICS', 'G', '1'),
(269, 122, 'B.Sc. (PASS)', 2, 1, '14', 'Bachelor of Science (Pass)', '', 'G', '1'),
(270, 122, 'B.A (PASS)', 2, 1, '14', 'Bachelor of Arts (Pass)', '', 'G', '1'),
(271, 122, 'M.A (PASS) ARABIC', 2, 1, '16', 'Master of Arts (Pass)', 'ARABIC', 'P', '1'),
(272, 122, 'M.A (PASS) COMPARATIVE RELIGION', 2, 1, '16', 'Master of Science (Pass)', 'COMPARATIVE RELIGION', 'P', '1'),
(273, 122, 'M.A (PASS) GENERAL HISTORY', 2, 1, '16', 'Master of Science (Pass)', 'GENERAL HISTORY', 'P', '1'),
(274, 122, 'M.A (PASS) PHILOSOPHY', 2, 1, '16', 'Master of Science (Pass)', 'PHILOSOPHY', 'P', '1'),
(275, 122, 'M.A (PASS) SINDHI', 2, 1, '16', 'Master of Science (Pass)', 'SINDHI', 'P', '1'),
(276, 122, 'M.A (PASS) SOCIOLOGY', 2, 1, '16', 'Master of Science (Pass)', 'SOCIOLOGY', 'P', '1'),
(277, 122, 'M.A (PASS) ISLAMIC CULTURE', 2, 1, '16', 'Master of Arts (Pass)', 'ISLAMIC CULTURE', 'P', '1'),
(278, 85, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH', 'P', '6'),
(279, 67, 'PGD (EARLY CHILDHOOD EDUCATION)', 2, 2, '15', 'Post Graduate Diploma', 'EARLY CHILDHOOD EDUCATION', 'G', '6'),
(280, 16, 'M.Sc. (PASS) DEVELOPMENT STUDIES', 4, 2, '16', 'Master of Science (Pass)', 'DEVELOPMENT STUDIES', 'P', '6'),
(281, 67, 'B.ED. (HONS) SECONDARY 1.5 YEAR', 3, 2, '16', 'B.Ed (Hons) Secondary 1.5 Year', 'EDUCATION', 'G', '6'),
(282, 67, 'B.ED. (HONS) SECONDARY 2.5 YEAR', 5, 2, '16', 'B.Ed (Hons) Secondary  2.5 Year', 'EDUCATION', 'G', '6'),
(283, 21, 'M.A (PASS) GEOGRAPHY', 4, 2, '16', 'Master of ARTS (Pass)', 'GEOGRAPHY', 'P', '6'),
(284, 26, 'M.Sc. (PASS) ACTUARIAL SCIENCES', 4, 2, '16', 'Master of Science (Pass)', 'ACTUARIAL SCIENCES', 'P', ''),
(285, 77, 'M.A (PASS) ENGLISH', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH', 'P', '6'),
(286, 66, 'BS (PAKISTAN STUDIES)', 8, 2, '16', 'Bachelor Studies', 'PAKISTAN STUDIES', 'G', '6'),
(287, 77, 'BS (ENGLISH)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH', 'G', '6'),
(288, 12, 'M.Phil (ANALYTICAL CHEMISTRY)', 3, 2, '18', 'Master of Philosophy', 'ANALYTICAL CHEMISTRY', 'M', '6'),
(289, 50, 'M.Phil (ARABIC)', 3, 2, '18', 'Master of Philosophy', 'ARABIC', 'M', '6'),
(290, 45, 'M.Phil (ENGLISH LITERATURE)', 3, 2, '18', 'Master of Philosophy', 'ENGLISH LITERATURE', 'M', '6'),
(291, 45, 'M.Phil (ENGLISH LINGUISTICS)', 3, 2, '18', 'Master of Philosophy', 'ENGLISH LINGUISTICS', 'M', '6'),
(292, 47, 'M.Phil (SINDHI)', 3, 2, '18', 'Master of Philosophy', 'SINDHI', 'M', '6'),
(293, 48, 'M.Phil (URDU)', 3, 2, '18', 'Master of Philosophy', 'URDU', 'M', '6'),
(294, 2, 'M.Phil (BUSINESS ADMINISTRATION)', 3, 2, '18', 'Master of Philosophy', 'BUSINESS ADMINSTRATION', 'M', '6'),
(295, 42, 'M.Phil (COMMERCE)', 3, 2, '18', 'Master of Philosophy', 'COMMERCE', 'M', '6'),
(296, 67, 'M.Phil (EDUCATION)', 3, 2, '18', 'Master of Philosophy', 'EDUCATION', 'M', '6'),
(297, 57, 'M.Phil (ISLAMIC STUDIES)', 3, 2, '18', 'Master of Philosophy', 'ISLAMIC STUDIES', 'M', '6'),
(298, 16, 'M.Phil (DEVELOPMENT STUDIES)', 3, 2, '18', 'Master of Philosophy', 'DEVELOPMENT STUDIES', 'M', '6'),
(299, 1, 'M.Phil (ECONOMICS)', 3, 2, '18', 'Master of Philosophy', 'ECONOMICS', 'M', '6'),
(300, 29, 'M.Phil (GENDER STUDIES)', 3, 2, '18', 'Master of Philosophy', 'GENDER STUDIES', 'M', '6'),
(301, 34, 'M.Phil (MEDIA & COMMUNICATION STUDIES)', 3, 2, '18', 'Master of Philosophy', 'MEDIA & COMMUNICATION STUDIES', 'M', '6'),
(302, 32, 'M.Phil (INTERNATIONAL RELATIONS)', 3, 2, '18', 'Master of Philosophy', 'INTERNATIONAL RELATIONS', 'M', '6'),
(303, 36, 'M.Phil (POLITICAL SCIENCE)', 3, 2, '18', 'Master of Philosophy', 'POLITICAL SCIENCE', 'M', '6'),
(304, 66, 'M.Phil (PAKISTAN STUDIES)', 3, 2, '18', 'Master of Philosophy', 'PAKISTAN STUDIES', 'M', '6'),
(305, 37, 'M.Phil (PSYCHOLOGY)', 3, 2, '18', 'Master of Philosophy', 'PSYCHOLOGY', 'M', '6'),
(306, 38, 'MS (PUBLIC ADMINISTRATION)', 3, 2, '18', 'Master Studies', 'PUBLIC ADMINISTRATION', 'M', '6'),
(307, 38, 'M.Phil (PUBLIC ADMINISTRATION)', 3, 2, '18', 'Master of Philosophy', 'PUBLIC ADMINISTRATION', 'M', '6'),
(308, 39, 'M.Phil (SOCIOLOGY)', 3, 2, '18', 'Master of Philosophy', 'SOCIOLOGY', 'M', '6'),
(309, 65, 'M.Phil (BIOTECHNOLOGY)', 3, 2, '18', 'Master of Philosophy', 'BIOTECHNOLOGY', 'M', '6'),
(310, 19, 'M.Phil (BOTANY)', 3, 2, '18', 'Master of Philosophy', 'BOTANY', 'M', '6'),
(311, 10, 'M.Phil (COMPUTER SCIENCE)', 3, 2, '18', 'Master of Philosophy', 'COMPUTER SCIENCE', 'M', '6'),
(312, 15, 'M.Phil (ELECTRONICS)', 3, 2, '18', 'Master of Philosophy', 'ELECTRONICS', 'M', '6'),
(313, 61, 'M.Phil (ENVIRONMENTAL SCIENCES)', 3, 2, '18', 'Master of Philosophy', 'ENVIRONMENTAL SCIENCES', 'M', '6'),
(314, 20, 'M.Phil (FRESHWATER BIOLOGY & FISHERIES)', 3, 2, '18', 'Master of Philosophy', 'FRESHWATER BIOLOGY & FISHERIES', 'M', '6'),
(315, 18, 'M.Phil (GENETICS)', 3, 2, '18', 'Master of Philosophy', 'GENETICS', 'M', '6'),
(316, 22, 'M.Phil (PETROLEUM GEOSCIENCES)', 3, 2, '18', 'Master Studies', 'PETROLEUM GEOSCIENCES', 'M', '6'),
(317, 22, 'MS (PETROLEUM GEOSCIENCES)', 3, 2, '18', 'Master of Philosophy', 'PETROLEUM GEOSCIENCES', 'M', '6'),
(318, 12, 'M.Phil (INORGANIC CHEMISTRY)', 3, 2, '18', 'Master of Philosophy', 'INORGANIC CHEMISTRY', 'M', '6'),
(319, 30, 'M.Phil (PHYSICAL EDUCATION  HEALTH & SPORTS SCIENC', 3, 2, '18', 'Master of Philosophy', 'PHYSICAL EDUCATION  HEALTH & SPORTS SCIENCES', 'M', '6'),
(320, 14, 'M.Phil (TELECOMMUNICATION)', 3, 2, '18', 'Master of Philosophy', 'TELECOMMUNICATION', 'M', '6'),
(321, 26, 'M.Phil (STATISTICS)', 3, 2, '18', 'Master of Philosophy', 'STATISTICS', 'M', '6'),
(322, 13, 'M.Phil (SOFTWARE ENGINEERING)', 3, 2, '18', 'Master of Philosophy', 'SOFTWARE ENGINEERING', 'M', '6'),
(323, 12, 'M.Phil (PHYSICAL CHEMISTRY)', 3, 2, '18', 'Master of Philosophy', 'PHYSICAL CHEMISTRY', 'M', '6'),
(324, 24, 'M.Phil (PHYSICS)', 3, 2, '18', 'Master of Philosophy', 'PHYSICS', 'M', '6'),
(325, 25, 'M.Phil (PHYSIOLOGY)', 3, 2, '18', 'Master of Philosophy', 'PHYSIOLOGY', 'M', '6'),
(326, 12, 'M.Phil (ORGANIC CHEMISTRY)', 3, 2, '18', 'Master of Philosophy', 'ORGANIC CHEMISTRY', 'M', '6'),
(327, 23, 'M.Phil (MICROBIOLOGY)', 3, 2, '18', 'Master of Philosophy', 'MICROBIOLOGY', 'M', '6'),
(328, 64, 'M.Phil (MATHEMATICS)', 3, 2, '18', 'Master of Philosophy', 'MATHEMATICS', 'M', '6'),
(329, 8, 'M.Phil (INFORMATION TECHNOLOGY)', 3, 2, '18', 'Master of Philosophy', 'INFORMATION TECHNOLOGY', 'M', '6'),
(330, 63, 'M.Phil (PHARMACEUTICS)', 3, 2, '18', 'Master of Philosophy', 'PHARMACEUTICS', 'M', '6'),
(331, 63, 'M.Phil (PHARMACOLOGY)', 3, 2, '18', 'Master of Philosophy', 'PHARMACOLOGY', 'M', '6'),
(332, 86, 'M.Phil (NUTRITION & FOOD TECHNOLOGY )', 3, 2, '18', 'Master of Philosophy', 'NUTRITION & FOOD TECHNOLOGY', 'M', '6'),
(333, 31, 'M.Phil (GENERAL HISTORY)', 3, 2, '18', 'Master of Philosophy', 'GENERAL HISTORY', 'M', '6'),
(334, 10, 'M.Phil (BIOINFORMATICS)', 3, 2, '18', 'Master of Philosophy', 'BIOINFORMATICS', 'M', '6'),
(335, 123, 'M.Phil (ANALYTICAL CHEMISTRY)', 3, 2, '18', 'Master of Philosophy', 'ANALYTICAL CHEMISTRY', 'M', '6'),
(336, 124, 'M.Phil (CHEMICAL SCIENCES)', 3, 2, '18', 'Master of Philosophy', 'M.Phil (CHEMICAL SCIENCES)', 'M', '6'),
(337, 27, 'M.Phil (ZOOLOGY)', 3, 2, '18', 'Master of Philosophy', 'ZOOLOGY', 'M', '6'),
(338, 42, 'BS (BANKING AND FINANCE)', 8, 2, '16', 'Bachelor Studies', 'BANKING AND FINANCE', 'G', '6'),
(339, 124, 'Ph.D (CHEMICAL SCIENCES)', 3, 2, '20', 'Doctor of Philosophy', 'CHEMICAL SCIENCES', 'H', '6'),
(340, 12, 'Ph.D (ANALYTICAL CHEMISTRY)', 3, 2, '20', 'Doctor of Philosophy', 'ANALYTICAL CHEMISTRY', 'G', '6'),
(341, 12, 'Ph.D (PHYSICAL CHEMISTRY)', 3, 2, '20', 'DOCTOR OF PHILOSOPHY', 'PHYSICAL CHEMISTRY', 'G', '6'),
(342, 12, 'Ph.D (INORGANIC CHEMISTRY)', 3, 2, '20', 'DOCTOR OF PHILOSOPHY', 'INORGANIC CHEMISTRY', 'G', '6'),
(343, 60, 'Ph.D (BIOCHEMISTRY)', 3, 2, '20', 'Doctor of Philosophy', 'BIOCHEMISTRY', 'G', '6'),
(344, 10, 'Ph.D (COMPUTER SCIENCE)', 3, 2, '20', 'Doctor of Philosophy', 'COMPUTER SCIENCE', 'G', '6'),
(345, 20, 'Ph.D (FRESHWATER BIOLOGY & FISHERIES)', 3, 2, '20', 'Doctor of Philosophy', 'FRESHWATER BIOLOGY & FISHERIES', 'G', '6'),
(346, 64, 'Ph.D (MATHEMATICS)', 3, 2, '20', 'Doctor of Philosophy', 'MATHEMATICS', 'G', '6'),
(347, 23, 'Ph.D (MICROBIOLOGY)', 3, 2, '20', 'Doctor of Philosophy', 'MICROBIOLOGY', 'G', '6'),
(348, 86, 'Ph.D (MICROBIOLOGY)', 3, 2, '20', 'Doctor of Philosophy', 'NUTRITION & FOOD TECHNOLOGY', 'G', '6'),
(349, 25, 'Ph.D (PHYSIOLOGY)', 3, 2, '20', 'Doctor of Philosophy', 'PHYSIOLOGY', 'G', '6'),
(350, 27, 'Ph.D (ZOOLOGY)', 3, 2, '20', 'Doctor of Philosophy', 'ZOOLOGY', 'G', '6'),
(351, 57, 'Ph.D (ISLAMIC STUDIES)', 3, 2, '20', 'Doctor of Philosophy', 'ISLAMIC STUDIES', 'G', '6'),
(352, 67, 'Ph.D (EDUCATION)', 3, 2, '20', 'Doctor of Philosophy', 'EDUCATION', 'G', '6'),
(353, 2, 'Ph.D (BUSINESS ADMINISTRATION)', 3, 2, '20', 'Doctor of Philosophy', 'BUSINESS ADMINSTRATION', 'G', '6'),
(354, 42, 'Ph.D (COMMERCE)', 3, 2, '20', 'Doctor of Philosophy', 'COMMERCE', 'G', '6'),
(355, 45, 'Ph.D (ENGLISH LITERATURE)', 3, 2, '20', 'Doctor of Philosophy', 'ENGLISH LITERATURE', 'D', '6'),
(356, 45, 'Ph.D (ENGLISH LINGUISTICS)', 3, 2, '20', 'Doctor of Philosophy', 'ENGLISH LINGUISTICS', 'D', '6'),
(357, 39, 'Ph.D (SOCIOLOGY)', 3, 2, '20', 'Doctor of Philosophy', 'SOCIOLOGY', 'G', '6'),
(358, 38, 'Ph.D (PUBLIC ADMINISTRATION)', 3, 2, '20', 'Doctor of Philosophy', 'PUBLIC ADMINISTRATION', 'G', '6'),
(359, 8, 'Ph.D (INFORMATION TECHNOLOGY)', 3, 2, '20', 'Doctor of Philosophy', 'INFORMATION TECHNOLOGY', 'G', '6'),
(360, 46, 'BS (PHILOSOPHY)', 8, 2, '16', 'Bachelor Studies', 'PHILOSOPHY', 'P', '6'),
(362, 77, 'B.ED. (HONS) SECONDARY 2.5 YEAR', 5, 2, '16', 'Bachelor of Education (Hons) Secondary  2.5 Year', 'EDUCATION', 'G', '6'),
(361, 35, 'BS (DEVELOPMENT COMMUNICATION)', 8, 2, '16', 'Bachelor Studies', 'DEVELOPMENT COMMUNICATION', 'G', '6'),
(363, 77, 'M.B.A (EVENING)', 6, 3, '16', 'Master of Business Administration (Evening)', 'BUSINESS ADMINISTRATION', 'P', '4'),
(364, 77, 'B.ED. (HONS) SECONDARY 1.5 YEAR', 3, 2, '16', 'B.Ed (Hons) Secondary 1.5 Year', 'EDUCATION', 'G', '6'),
(365, 14, 'BS (TELECOMMUNICATION ENGINEERING)', 8, 2, '16', 'Bachelor Studies', 'TELECOMMUNICATION ENGINEERING', 'G', '6'),
(366, 15, 'BS (ELECTRONIC ENGINEERING)', 8, 2, '16', 'Bachelor Studies', 'ELECTRONIC', 'G', '6'),
(367, 45, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6'),
(368, 45, 'BS (APPLIED LINGUISTICS)', 8, 2, '16', 'Bachelor Studies', 'APPLIED LINGUISTICS', 'G', '6'),
(369, 45, 'M.A (PASS) ENGLISH LANGUAGE & LITERATURE', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH LANGUAGE & LITERATURE', 'P', '6'),
(370, 45, 'M.A (PASS) APPLIED LINGUISTICS', 4, 2, '16', 'Master of Arts (Pass)', 'APPLIED LINGUISTICS', 'P', '6'),
(371, 80, 'M.A (PASS) ENGLISH LANGUAGE & LITERATURE', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH LANGUAGE & LITERATURE', 'P', '6'),
(372, 85, 'M.A (PASS) ENGLISH LANGUAGE & LITERATURE', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH LANGUAGE & LITERATURE', 'P', '6'),
(373, 80, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6'),
(374, 85, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6'),
(375, 77, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6'),
(376, 77, 'M.A (PASS) ENGLISH LANGUAGE & LITERATURE', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH LANGUAGE & LITERATUR', 'P', '6'),
(377, 84, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6'),
(378, 84, 'M.A (PASS) ENGLISH LANGUAGE & LITERATURE', 4, 2, '16', 'Master of Arts (Pass)', 'ENGLISH LANGUAGE & LITERATURE', 'P', '6'),
(379, 72, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6'),
(380, 89, 'BS (ENGLISH LANGUAGE & LITERATURE)', 8, 2, '16', 'Bachelor Studies', 'ENGLISH LANGUAGE & LITERATURE', 'G', '6'),
(381, 89, 'M.A (PASS) ENGLISH LANGUAGE & LITERATURE', 4, 2, '16', 'Master of Arts', 'ENGLISH LANGUAGE & LITERATURE', 'P', '6');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(150) NOT NULL,
  `role_type` int(11) NOT NULL,
  `college_s` varchar(3) NOT NULL,
  `college_ps` varchar(3) NOT NULL,
  `college_a` varchar(3) NOT NULL,
  `college_e` varchar(3) NOT NULL,
  `college_d` varchar(3) NOT NULL,
  `college_v` varchar(3) NOT NULL,
  `depart_s` varchar(3) NOT NULL,
  `depart_ps` varchar(3) NOT NULL,
  `depart_s_colg` varchar(3) NOT NULL,
  `depart_a` varchar(3) NOT NULL,
  `depart_a_colg` varchar(3) NOT NULL,
  `depart_e` varchar(3) NOT NULL,
  `depart_d` varchar(3) NOT NULL,
  `depart_v` varchar(3) NOT NULL,
  `lab_s` varchar(3) NOT NULL,
  `lab_ps` varchar(3) NOT NULL,
  `lab_s_colg` varchar(3) NOT NULL,
  `lab_s_depart` varchar(3) NOT NULL,
  `lab_a` varchar(3) NOT NULL,
  `lab_a_colg` varchar(3) NOT NULL,
  `lab_a_depart` varchar(3) NOT NULL,
  `lab_e` varchar(3) NOT NULL,
  `lab_d` varchar(3) NOT NULL,
  `my_lab` varchar(3) NOT NULL,
  `machine_s` varchar(3) NOT NULL,
  `machine_colg_s` varchar(3) NOT NULL DEFAULT 'yes',
  `machine_depart_s` varchar(3) NOT NULL,
  `machine_lab_s` varchar(3) NOT NULL,
  `machine_a` varchar(3) NOT NULL,
  `machine_a_colg` varchar(3) NOT NULL,
  `machine_a_depart` varchar(3) NOT NULL,
  `machine_a_lab` varchar(3) NOT NULL,
  `machine_e` varchar(3) NOT NULL,
  `machine_d` varchar(3) NOT NULL,
  `machine_v` varchar(3) NOT NULL,
  `machine_exp` varchar(3) NOT NULL,
  `user_sa` varchar(3) NOT NULL,
  `user_sd` varchar(3) NOT NULL,
  `user_a_to_d` varchar(3) NOT NULL,
  `user_d_to_a` varchar(3) NOT NULL,
  `user_a` varchar(3) NOT NULL,
  `user_va` varchar(3) NOT NULL,
  `user_vd` varchar(3) NOT NULL,
  `user_ad` varchar(3) NOT NULL,
  `user_dd` varchar(3) NOT NULL,
  `maintenance_sysr` varchar(3) NOT NULL,
  `maintenance_sys_colg_r` varchar(3) NOT NULL DEFAULT 'yes',
  `maintenance_sys_lab_r` varchar(3) NOT NULL,
  `maintenance_sys_depart_r` varchar(3) NOT NULL,
  `maintenance_str` varchar(3) NOT NULL,
  `maintenance_st_colg_r` varchar(3) NOT NULL DEFAULT 'yes',
  `maintenance_st_lab_r` varchar(3) NOT NULL,
  `maintenance_st_depart_r` varchar(3) NOT NULL,
  `maintenance_pstr` varchar(3) NOT NULL,
  `maintenance_a` varchar(3) NOT NULL,
  `maintenance_a_colg` varchar(3) NOT NULL,
  `maintenance_a_depart` varchar(3) NOT NULL,
  `change_sys_st` varchar(3) NOT NULL,
  `change_students_st` varchar(3) NOT NULL,
  `usage_s` varchar(3) NOT NULL,
  `usage_colg_s` varchar(3) NOT NULL DEFAULT 'yes',
  `usage_lab_s` varchar(3) NOT NULL,
  `usage_depart_s` varchar(3) NOT NULL,
  `usage_ps` varchar(3) NOT NULL,
  `usage_a` varchar(3) NOT NULL,
  `user_ea` varchar(3) NOT NULL,
  `user_ed` varchar(3) NOT NULL,
  `usage_change_st` varchar(3) NOT NULL,
  `order_s` varchar(3) NOT NULL,
  `order_ps` varchar(3) NOT NULL,
  `order_s_colg` varchar(3) NOT NULL,
  `order_s_depart` varchar(3) NOT NULL,
  `order_s_lab` varchar(3) NOT NULL,
  `order_a` varchar(3) NOT NULL,
  `order_a_colg` varchar(3) NOT NULL,
  `order_a_depart` varchar(3) NOT NULL,
  `order_a_lab` varchar(3) NOT NULL,
  `order_e` varchar(3) NOT NULL,
  `order_d` varchar(3) NOT NULL,
  `order_v` varchar(3) NOT NULL,
  `order_change_st` varchar(3) NOT NULL,
  `usage_add_lab` varchar(3) NOT NULL,
  `maintenance_a_lab` varchar(3) NOT NULL,
  `usage_add_colg` varchar(3) NOT NULL,
  `usage_add_depart` varchar(3) NOT NULL,
  `chem_storage_a` varchar(3) NOT NULL,
  `chem_storage_e` varchar(3) NOT NULL,
  `chem_storage_del` varchar(3) NOT NULL,
  `chem_storage_s` varchar(3) NOT NULL,
  `chem_storage_s_lab` varchar(3) NOT NULL,
  `chem_storage_gen_req` varchar(3) NOT NULL,
  `chem_storage_gen_req_lab` varchar(3) NOT NULL,
  `chem_req_s` varchar(3) NOT NULL,
  `chem_req_s_lab` varchar(3) NOT NULL,
  `chem_req_s_gen` varchar(3) NOT NULL,
  `chem_req_change_st` varchar(3) NOT NULL,
  `animal_s` varchar(3) NOT NULL,
  `animal_s_colg` varchar(3) NOT NULL,
  `animal_s_depart` varchar(3) NOT NULL,
  `animal_s_lab` varchar(3) NOT NULL,
  `animal_a` varchar(3) NOT NULL,
  `animal_a_colg` varchar(3) NOT NULL,
  `animal_a_depart` varchar(3) NOT NULL,
  `animal_a_lab` varchar(3) NOT NULL,
  `animal_e` varchar(3) NOT NULL,
  `animal_del` varchar(3) NOT NULL,
  `animal_vd` varchar(3) NOT NULL,
  `cage_a` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `role_type`, `college_s`, `college_ps`, `college_a`, `college_e`, `college_d`, `college_v`, `depart_s`, `depart_ps`, `depart_s_colg`, `depart_a`, `depart_a_colg`, `depart_e`, `depart_d`, `depart_v`, `lab_s`, `lab_ps`, `lab_s_colg`, `lab_s_depart`, `lab_a`, `lab_a_colg`, `lab_a_depart`, `lab_e`, `lab_d`, `my_lab`, `machine_s`, `machine_colg_s`, `machine_depart_s`, `machine_lab_s`, `machine_a`, `machine_a_colg`, `machine_a_depart`, `machine_a_lab`, `machine_e`, `machine_d`, `machine_v`, `machine_exp`, `user_sa`, `user_sd`, `user_a_to_d`, `user_d_to_a`, `user_a`, `user_va`, `user_vd`, `user_ad`, `user_dd`, `maintenance_sysr`, `maintenance_sys_colg_r`, `maintenance_sys_lab_r`, `maintenance_sys_depart_r`, `maintenance_str`, `maintenance_st_colg_r`, `maintenance_st_lab_r`, `maintenance_st_depart_r`, `maintenance_pstr`, `maintenance_a`, `maintenance_a_colg`, `maintenance_a_depart`, `change_sys_st`, `change_students_st`, `usage_s`, `usage_colg_s`, `usage_lab_s`, `usage_depart_s`, `usage_ps`, `usage_a`, `user_ea`, `user_ed`, `usage_change_st`, `order_s`, `order_ps`, `order_s_colg`, `order_s_depart`, `order_s_lab`, `order_a`, `order_a_colg`, `order_a_depart`, `order_a_lab`, `order_e`, `order_d`, `order_v`, `order_change_st`, `usage_add_lab`, `maintenance_a_lab`, `usage_add_colg`, `usage_add_depart`, `chem_storage_a`, `chem_storage_e`, `chem_storage_del`, `chem_storage_s`, `chem_storage_s_lab`, `chem_storage_gen_req`, `chem_storage_gen_req_lab`, `chem_req_s`, `chem_req_s_lab`, `chem_req_s_gen`, `chem_req_change_st`, `animal_s`, `animal_s_colg`, `animal_s_depart`, `animal_s_lab`, `animal_a`, `animal_a_colg`, `animal_a_depart`, `animal_a_lab`, `animal_e`, `animal_del`, `animal_vd`, `cage_a`) VALUES
(1, 'Other', 6, 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'admin', 1, 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Faculty', 2, 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', '', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Lab Manager', 3, 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Post-Doctoral', 3, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Resident/Fellow', 3, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'Researcher', 3, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'Technician', 3, 'no', 'yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'Employee', 3, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Graduate Student', 4, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'Undergraduate Student', 4, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'guest', 5, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `sidebar_img` varchar(255) NOT NULL,
  `sidebar_color` varchar(255) NOT NULL,
  `footer` varchar(255) NOT NULL,
  `name` varchar(150) NOT NULL,
  `department_email` varchar(150) NOT NULL,
  `about` varchar(255) NOT NULL,
  `terms` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `sidebar_img`, `sidebar_color`, `footer`, `name`, `department_email`, `about`, `terms`) VALUES
(1, '618456057logo.png', '1276140079pngtree-tech-interlaced-texture-texture-propaganda-background-image_214967.jpg', 'white', 'Facutly of Engineering and Technology | University of sindh jamshoro', 'F.A.T System', 'test@email.com', 'about us', 'TERMS OF SERVICES TEST TEXT\r\nTERMS OF SERVICES TEST TEXT\r\nTERMS OF SERVICES TEST TEXT');

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
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_setting`
--

INSERT INTO `slider_setting` (`id`, `image`, `title`, `title_color`, `title_link`, `description`, `description_color`, `description_link`, `active`) VALUES
(1, '', 'title', '#614a8c', 'http://localhost/fet_project/settings', 'description', '#21ab9b', 'http://localhost/fet_project/settings', 1),
(2, '622989903two_auth.jpeg', 'title1', '#e8e8e8', 'http://localhost/fet_project/settings', 'description1', '#e3e3e3', '212', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `is_active` varchar(20) NOT NULL,
  `token` int(11) DEFAULT NULL,
  `token_dateTime` datetime DEFAULT NULL,
  `email_notification` enum('enable','disable') NOT NULL,
  `user_status` int(11) NOT NULL COMMENT 'role',
  `account_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_img`, `username`, `password`, `gender`, `nationality`, `is_active`, `token`, `token_dateTime`, `email_notification`, `user_status`, `account_status`) VALUES
(1, '912271381Profile-PNG-Icon.png', 'admin', '6d9ddacd9fcb13298d34b3876da0ddbb7488fe656fdf33a8df9aa5d4b5c63a6e1f7608ad361513add944a558bcbd42304d860b172ab5f701d3785dd55d825928oTqsUvtMcd7hd9Pxcdwkv4GZdDT7N+bnmC3FQKjPLjE=', 'male', 'Pakistani', 'active', 52068, '2020-10-12 01:12:30', '', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `info_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `depart_id` int(11) NOT NULL,
  `department_name` varchar(150) NOT NULL,
  `laboratory_numb` varchar(255) NOT NULL,
  `phone_1` varchar(30) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `phone_2` varchar(30) NOT NULL,
  `emergency_numb` varchar(30) NOT NULL,
  `university_email` varchar(100) NOT NULL,
  `secondary_email` varchar(100) NOT NULL,
  `campus` enum('male','female') DEFAULT NULL,
  `employee_id_numb` varchar(100) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL,
  `degree` enum('Bachelor','Master','Ph.D') DEFAULT NULL,
  `student_numb` varchar(100) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `id_numb` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`info_id`, `user_id`, `college_id`, `depart_id`, `department_name`, `laboratory_numb`, `phone_1`, `fax`, `phone_2`, `emergency_numb`, `university_email`, `secondary_email`, `campus`, `employee_id_numb`, `program_id`, `degree`, `student_numb`, `university`, `college`, `id_numb`) VALUES
(5, 7, 0, 3, '', '4', '123456', '123456', '123456sadasf', '123456', 'uni@gmail.com', 'uni2@gmail.com', 'male', NULL, 6, 'Bachelor', '123456aaa', NULL, NULL, NULL),
(6, 8, 0, 2, '', '3', 'kjh', 'kjh', 'kjh', 'kjh', 'kjh@gmail.com', 'asa@gmail.com', 'male', 'safajkqjkh', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 9, 0, 0, '', '', 'g', 'dsd', 'dsdsg', 'dsdsg', 'dsdds@gmail.com', '', NULL, 'sdgsdg', NULL, NULL, NULL, 'afa', 'dsgdsds', 'sdsdg'),
(8, 10, 0, 3, '', '4', 'gj', 'hg', 'jh', 'gj', 'gjh@gmail.com', 'sasfas@gmail.com', 'male', NULL, 5, 'Bachelor', 'afasJjhGjh', NULL, NULL, NULL),
(9, 12, 0, 0, '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', ''),
(10, 13, 0, 0, 'sjdg', '', 'sdg', 'sdkjh', 'sdjkgk', 'sdkjgdhjkghq', 'aa@gmail.com', '', NULL, 'sdjgk', NULL, NULL, NULL, 'afhkj', 'jkdg', 'sdkjg'),
(11, 14, 0, 0, 'dsg', '', 'dsg', 'dg`s', 'afs', 'afa', 'ga@gmail.com', '', NULL, 'dsg', NULL, NULL, NULL, 'saf', 'sd', 'dsg'),
(12, 15, 0, 3, 'skjds', '4', 'sdkjfgdkj', 'sdkfgk', 'dskjfgdsk', 'sdkjgfdsjk', 'sdkjgfdsjk@gmail.com', 'sf@GMAIL.COM', 'male', 'sdkjfgdsjk', NULL, NULL, NULL, 'safahsk', 'sjkfgjk', 'sdkjgfdkj'),
(13, 16, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 17, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 18, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 19, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 20, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 21, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 22, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 23, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 24, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 25, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 26, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 27, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 28, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 29, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 30, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 31, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'uni@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 32, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 33, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 34, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 35, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 36, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 37, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 38, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 39, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 40, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 41, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 42, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 43, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 44, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 45, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 46, 0, 3, '', '4', 'gj', 'g', 'hjgjhg', 'jh', 'fardeenkhan7337@gmail.com', 'hsd@gmail.com', 'male', 'hjgjh', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 47, 0, 0, 'sjagjh', '', 'ajgfhj', 'ajgfaj', 'agfh', 'ajgfj', 'sasjfgsjh@gmail.com', '', NULL, 'sjagfhj', NULL, NULL, NULL, 'safkj', 'hsgf', 'ahsfghj'),
(45, 48, 0, 3, '', '4', 'gk', 'jg', 'j', 'gj', 'g@Gmail.com', 'jhsafas@gmail.com', 'male', 'afs', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 1, 0, 0, '', '', '', '', '', '', 'test@email.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 49, 0, 2, '', '3', 'cc', 'cc', 'cc', 'cc', 'fardeenkhan7337@gmail.com', 'ccc@gmail.com', 'male', 'cc', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 50, 0, 0, 'A', '', 'A', 'A', 'A', 'A', 'fardeenkhan7337@gmail.com', '', NULL, 'A', NULL, NULL, NULL, 'A', 'A', 'A'),
(49, 51, 0, 3, '', '4', 'aa', 'aa', 'aa', 'aa', 'fardeenkhan7337@gmail.com', 'asafa@gmail.com', 'male', 'aa', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 53, 0, 3, '', '4', '0', '0', '0', '0', 'm.alhadab@yahoo.com', '0', 'male', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 54, 0, 6, '', '5', '0', '0', '0', '0', 'm.alhadab@yahoo.com', '', 'male', '0000', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 56, 0, 3, '', '4', '0', '0', '0', '0000', 'm.alhadab@yahoo.com', '', 'male', '0000', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 57, 0, 0, 'asfas', '', 'safas', 'asfas', 'asfas', '', 'fardeenkhan7337@gmail.com', '', NULL, 'asfasfas', NULL, NULL, NULL, 'asfas', 'asfas', 'safas'),
(56, 58, 0, 0, 'kjg', '', 'gjh', 'gj', 'h', 'fardeenkhan7337@gmail.com', 'safas@gmail.com', '', NULL, 'jhg', NULL, NULL, NULL, 'asf', 'jk', 'jh'),
(57, 59, 0, 0, 'gj', '', 'jhg', 'jh', 'gjh', 'g', 'fardeenkhan7337@gmail.com', '', NULL, 'gj', NULL, NULL, NULL, 'safas', 'gk', 'hg'),
(58, 60, 0, 0, 'jh', '', 'hg', 'jhg', 'jh', 'gj', 'hgj@gmail.com', '', NULL, 'gjh', NULL, NULL, NULL, 'g', 'jhg', 'gj'),
(59, 61, 0, 0, 'jh', '', 'hg', 'jhg', 'jg', 'jjhgj', 'asf@gmail.com', '', NULL, 'gh', NULL, NULL, NULL, 'asf', 'hjg', 'jgj'),
(60, 62, 0, 0, 'hgj', '', 'jhg', 'jhg', 'jh', 'gjh', 'g@gmail.com', '', NULL, 'hg', NULL, NULL, NULL, 'gj', 'hj', 'jhg'),
(61, 63, 0, 0, 'jhf', '', 'f', 'ghf', 'hg', 'fhg', 'gg@gmail.com', '', NULL, 'jh', NULL, NULL, NULL, 'asf', 'hjf', 'fgh'),
(62, 64, 0, 0, 'hf', '', 'hf', 'hjg', 'jhg', 'jh', 'gjhjhgjhgjhgjhgjhgjhgjh@Gmail.com', '', NULL, 'j', NULL, NULL, NULL, 'safa', 'fhf', 'fj'),
(63, 65, 10, 11, '', '6', 'sf', 'dsf', 'sdf', 'dss', 'sdds@gmail.com', 'afas@gmai.com', 'male', 'asf', NULL, NULL, NULL, NULL, NULL, NULL),
(64, 66, 10, 11, '', '6', 'hf', 'hg', 'fg', 'f', 'hg@gmail.com', 'faaa@gmail.ccom', 'male', 'sdgfg', NULL, NULL, NULL, NULL, NULL, NULL),
(65, 67, 0, 11, '', '6', '123456789', 'fax', '123456789', 'saassasaasas', 'abcdeg@gmail.com', 'aaaaa@gmail.com', 'male', NULL, 9, 'Bachelor', '123', NULL, NULL, NULL),
(66, 68, 10, 11, '', '6', 'ad', 'sf', 'g', 'jhg', 'jhg@a', 'a@a', 'male', 'a', 9, 'Bachelor', 'aaa', NULL, '10', NULL),
(67, 69, 0, 11, '', '6', 'a', 'a', 'a', 'a', 'a@gmail.com', 'a', 'male', 'aa', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 70, 10, 11, '', '6', 'a', 'a', 'a', 'a', 'a@a', 'A@A', 'male', NULL, 9, 'Bachelor', 'a', NULL, NULL, NULL),
(69, 71, 10, 11, '', '6', 'A', 'A', 'A', 'A', 'A@A', 'A@A', 'male', NULL, 9, 'Bachelor', 'A', NULL, NULL, NULL),
(70, 72, 10, 11, '', '6', 'aaa', 'a', 'a', 'a', 'faculty@Gmail.com', 'faculty@gmail.com', 'male', 'aa', 9, 'Bachelor', 'aa', NULL, NULL, NULL),
(71, 73, 11, 12, '', '7', 'll', 'll', 'll', 'll', 'labmanager@gmail.com', 'labmanager@gmail.com', 'male', 'll', NULL, NULL, NULL, NULL, NULL, NULL),
(72, 74, 10, 11, '', '6', 'pd', 'pd', 'pd', 'pd', 'pd@gmail.com', 'pd@gmail.com', 'male', 'pd', NULL, NULL, NULL, NULL, NULL, NULL),
(73, 75, 10, 11, '', '6', 'rf', 'rf', 'rf', 'rf', 'rf@gmail.com', 'rf@gmail.com', 'male', 'rf', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 76, 10, 11, '', '6', 'rr', 'rr', 'rr', 'rr', 'rr@gmail.com', 'rr@gmail.com', 'male', 'rr', NULL, NULL, NULL, NULL, NULL, NULL),
(75, 77, 10, 11, '', '6', 'tt', 'tt', 'tt1', 'tt', 'tt1@gmail.com', 'tt1@gmail.com', 'male', 'tt', NULL, NULL, NULL, NULL, NULL, NULL),
(76, 78, 11, 12, '', '10', '1010', '1010', '1010', '1010', 'm.alhadab@gmail.com', 'm.alhadab@gmail.com', NULL, '101', NULL, NULL, NULL, '2030', NULL, '101'),
(77, 79, 11, 12, '', '10', '100', '100', '100', '100', 'm.alhadab@hotmail.com', '', 'male', '100', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel_setting`
--
ALTER TABLE `admin_panel_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DEPT_ID`),
  ADD KEY `FAC_ID` (`FAC_ID`),
  ADD KEY `INST_ID` (`INST_ID`);

--
-- Indexes for table `departments_programs`
--
ALTER TABLE `departments_programs`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`FAC_ID`);

--
-- Indexes for table `news_notifications`
--
ALTER TABLE `news_notifications`
  ADD PRIMARY KEY (`NOTIFICATION_ID`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_settings`
--
ALTER TABLE `notification_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_type`
--
ALTER TABLE `notification_type`
  ADD PRIMARY KEY (`NOTIFY_TYPE_ID`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`PROG_ID`),
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel_setting`
--
ALTER TABLE `admin_panel_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DEPT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `departments_programs`
--
ALTER TABLE `departments_programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `FAC_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news_notifications`
--
ALTER TABLE `news_notifications`
  MODIFY `NOTIFICATION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `notification_settings`
--
ALTER TABLE `notification_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification_type`
--
ALTER TABLE `notification_type`
  MODIFY `NOTIFY_TYPE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `PROG_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=382;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_setting`
--
ALTER TABLE `slider_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;