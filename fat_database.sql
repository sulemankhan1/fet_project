-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 07:16 PM
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
-- Database: `fat_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `depart_id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `depart_numb` varchar(255) NOT NULL,
  `depart_name` varchar(150) NOT NULL,
  `depart_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`depart_id`, `college_id`, `depart_numb`, `depart_name`, `depart_description`, `created_at`) VALUES
(2, 0, 'depart_2', 'depart2', 'depart2\r\n', '2020-11-02 18:32:29'),
(3, 0, 'depart_3', 'depart', 'desc', '2020-11-02 18:32:29'),
(4, 0, 'depart_4', 'sfsa', 'safasf', '2020-11-02 18:32:29'),
(5, 0, 'depart_5', 'saf', 'f', '2020-11-02 18:32:29'),
(6, 0, 'depart_6', 'deeeeepart', 'description', '2020-11-02 18:32:29'),
(8, 0, 'depart_8', 'test', 'asdfasdf', '2020-11-02 18:32:29'),
(10, 0, 'depart_10', 'asfa', 'asfasf', '2020-11-07 16:25:22'),
(11, 10, 'depart_11', 'saas', 'afa', '2020-11-07 16:31:40'),
(12, 11, 'depart_12', 'aaa', 'aaa', '2020-11-09 22:16:02'),
(13, 11, 'depart_13', 'departhiscollege', 'aa\r\n', '2020-12-07 09:43:30'),
(14, 11, 'depart_14', '100', '100', '2020-12-08 19:04:20');

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
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`depart_id`);

--
-- Indexes for table `departments_programs`
--
ALTER TABLE `departments_programs`
  ADD PRIMARY KEY (`program_id`);

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
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `depart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `departments_programs`
--
ALTER TABLE `departments_programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
