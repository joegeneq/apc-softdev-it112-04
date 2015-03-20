-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2015 at 05:20 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crpms_softdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_medicine`
--

CREATE TABLE IF NOT EXISTS `about_medicine` (
`id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `manufacturer` varchar(30) NOT NULL,
  `stocks_record_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `accounting_status`
--

CREATE TABLE IF NOT EXISTS `accounting_status` (
  `id` int(11) NOT NULL,
  `description` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounting_status`
--

INSERT INTO `accounting_status` (`id`, `description`) VALUES
(1, 'For Accounting Viewing'),
(2, 'Done Viewing');

-- --------------------------------------------------------

--
-- Table structure for table `bed_number`
--

CREATE TABLE IF NOT EXISTS `bed_number` (
  `id` int(11) NOT NULL,
  `description` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed_number`
--

INSERT INTO `bed_number` (`id`, `description`) VALUES
(1, 201),
(2, 202),
(3, 203),
(4, 204),
(5, 205),
(6, 206),
(7, 207),
(8, 208),
(9, 209);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchasing_status`
--

CREATE TABLE IF NOT EXISTS `purchasing_status` (
`id` int(11) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchasing_status`
--

INSERT INTO `purchasing_status` (`id`, `status`) VALUES
(1, 'Need More Stocks'),
(2, 'Stocks are enough');

-- --------------------------------------------------------

--
-- Table structure for table `return_item`
--

CREATE TABLE IF NOT EXISTS `return_item` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `medicine_name` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `return_slip_form_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return_item`
--

INSERT INTO `return_item` (`id`, `date`, `medicine_name`, `quantity`, `amount`, `remarks`, `return_slip_form_id`) VALUES
(1, '2015-03-16', 'Biogesic', 1, '5', 'Unused', 15001);

-- --------------------------------------------------------

--
-- Table structure for table `return_slip_form`
--

CREATE TABLE IF NOT EXISTS `return_slip_form` (
  `id` int(11) NOT NULL,
  `patient_last_name` varchar(45) NOT NULL,
  `patient_first_name` varchar(45) NOT NULL,
  `patient_middle_initial` varchar(45) DEFAULT NULL,
  `date` date NOT NULL,
  `ward_id` int(11) NOT NULL,
  `bed_number_id` int(11) NOT NULL,
  `accounting_status_id` int(11) NOT NULL,
  `returned_by` varchar(45) NOT NULL,
  `received_by` varchar(45) NOT NULL,
  `approved_by` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `search_module`
--

CREATE TABLE IF NOT EXISTS `search_module` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stocks_record`
--

CREATE TABLE IF NOT EXISTS `stocks_record` (
`id` int(11) NOT NULL,
  `description` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15002 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks_record`
--

INSERT INTO `stocks_record` (`id`, `description`, `user_id`) VALUES
(15001, 'For Male Ward', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stocks_record_item`
--

CREATE TABLE IF NOT EXISTS `stocks_record_item` (
`id` int(11) NOT NULL,
  `medicine_name` varchar(45) NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `released_quantity` int(11) NOT NULL,
  `delivery_date` date NOT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `purchasing_status_id` int(11) NOT NULL,
  `stocks_record_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks_record_item`
--

INSERT INTO `stocks_record_item` (`id`, `medicine_name`, `available_quantity`, `released_quantity`, `delivery_date`, `remarks`, `purchasing_status_id`, `stocks_record_id`) VALUES
(1, 'Biogesic', 1000, 500, '2015-03-31', '', 1, 15001);

-- --------------------------------------------------------

--
-- Table structure for table `stock_issue_form`
--

CREATE TABLE IF NOT EXISTS `stock_issue_form` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `ward_name` varchar(45) NOT NULL,
  `prepared_by` varchar(45) NOT NULL,
  `approved_by` varchar(45) NOT NULL,
  `issued_by` varchar(45) NOT NULL,
  `received_by` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_issue_item`
--

CREATE TABLE IF NOT EXISTS `stock_issue_item` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `expiration_date` date NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `stock_issue_form_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'E3n4JKw-tdsNvCx17E8e4gZx_AmjBlJ8', '$2y$13$7fkt3MbsuuxMiV1P3jVDTuT6qLliDVJ7HccG7apbeRwlU1OJ1wyy6', NULL, 'admin@example.com', 10, 1426402583, 1426402583),
(2, 'pharmacist', 'Cl8ToJBJ3UOWQr-iJ4LArYBFWjMJ0x0O', '$2y$13$/P27cRnmiD8SDUi4ONzc9O3mU8H.4dkAbUnsBvXXWLC.TlvuHO3IC', NULL, 'pharmacist@example.com', 10, 1426403016, 1426403016),
(3, 'accounting', 'qHlTcIVACOvo6M6WhoomZBy9NCFtCVva', '$2y$13$ITYbouiUdeEogfgL2xRiFOhTfQx8GguVrOpD5iSGupUHbmo.YmJDm', NULL, 'accounting@example.com', 10, 1426403400, 1426403400);

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE IF NOT EXISTS `ward` (
  `id` int(11) NOT NULL,
  `ward_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`id`, `ward_name`) VALUES
(1, 'pedia'),
(2, 'private_ward'),
(3, 'semi-private'),
(4, 'male-ward'),
(5, 'Ob-Gyne'),
(6, 'suite-ward');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_medicine`
--
ALTER TABLE `about_medicine`
 ADD PRIMARY KEY (`id`), ADD KEY `about_medicine_ibfk_1` (`stocks_record_item_id`);

--
-- Indexes for table `accounting_status`
--
ALTER TABLE `accounting_status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed_number`
--
ALTER TABLE `bed_number`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchasing_status`
--
ALTER TABLE `purchasing_status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_item`
--
ALTER TABLE `return_item`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_slip_form`
--
ALTER TABLE `return_slip_form`
 ADD PRIMARY KEY (`id`), ADD KEY `return_slip_form_ibfk_1` (`ward_id`), ADD KEY `return_slip_form_ibfk_2` (`bed_number_id`), ADD KEY `return_slip_form_ibfk_3` (`accounting_status_id`);

--
-- Indexes for table `search_module`
--
ALTER TABLE `search_module`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks_record`
--
ALTER TABLE `stocks_record`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks_record_item`
--
ALTER TABLE `stocks_record_item`
 ADD PRIMARY KEY (`id`), ADD KEY `stocks_record_item_ibfk_1` (`purchasing_status_id`);

--
-- Indexes for table `stock_issue_form`
--
ALTER TABLE `stock_issue_form`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_issue_item`
--
ALTER TABLE `stock_issue_item`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_medicine`
--
ALTER TABLE `about_medicine`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchasing_status`
--
ALTER TABLE `purchasing_status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `return_item`
--
ALTER TABLE `return_item`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stocks_record`
--
ALTER TABLE `stocks_record`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15002;
--
-- AUTO_INCREMENT for table `stocks_record_item`
--
ALTER TABLE `stocks_record_item`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stock_issue_form`
--
ALTER TABLE `stock_issue_form`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock_issue_item`
--
ALTER TABLE `stock_issue_item`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_medicine`
--
ALTER TABLE `about_medicine`
ADD CONSTRAINT `about_medicine_ibfk_1` FOREIGN KEY (`stocks_record_item_id`) REFERENCES `stocks_record_item` (`id`);

--
-- Constraints for table `return_slip_form`
--
ALTER TABLE `return_slip_form`
ADD CONSTRAINT `return_slip_form_ibfk_1` FOREIGN KEY (`ward_id`) REFERENCES `ward` (`id`),
ADD CONSTRAINT `return_slip_form_ibfk_2` FOREIGN KEY (`bed_number_id`) REFERENCES `bed_number` (`id`),
ADD CONSTRAINT `return_slip_form_ibfk_3` FOREIGN KEY (`accounting_status_id`) REFERENCES `accounting_status` (`id`);

--
-- Constraints for table `stocks_record_item`
--
ALTER TABLE `stocks_record_item`
ADD CONSTRAINT `stocks_record_item_ibfk_1` FOREIGN KEY (`purchasing_status_id`) REFERENCES `purchasing_status` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
