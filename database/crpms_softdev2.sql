-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2015 at 02:23 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crpms_softdev2`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounting_status`
--

CREATE TABLE IF NOT EXISTS `accounting_status` (
`id` int(11) NOT NULL,
  `status_code` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounting_status`
--

INSERT INTO `accounting_status` (`id`, `status_code`, `description`) VALUES
(1, 'FV', 'For Viewing'),
(2, 'DV', 'Done Viewing');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE IF NOT EXISTS `bed` (
`id` int(11) NOT NULL,
  `bed_code` varchar(20) NOT NULL,
  `bed_number` int(20) NOT NULL,
  `location_id` int(11) NOT NULL,
  `bed_description` longtext,
  `bed_comments` longtext,
  `bed_status_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`id`, `bed_code`, `bed_number`, `location_id`, `bed_description`, `bed_comments`, `bed_status_id`) VALUES
(1, 'b1', 207, 1, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bed_status`
--

CREATE TABLE IF NOT EXISTS `bed_status` (
`id` int(11) NOT NULL,
  `status_name` varchar(20) NOT NULL,
  `description` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`id` int(11) NOT NULL,
  `emp_code` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `position_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_code`, `firstname`, `lastname`, `middlename`, `address`, `contact_number`, `position_id`, `user_id`, `created_by`, `date_created`) VALUES
(1, '201158', 'flordeliza', 'calanno', 'm', 'taguig city', '123456', 2, 1, 0, '2015-04-20 07:24:47'),
(2, '201159', 'TEN TEN', 'RONARIO', 'L', 'taguig city', '123456', 2, 0, 0, '2015-04-20 07:24:47'),
(3, '2011510', 'KEVIN', 'NAVARRO', 'A', 'taguig city', '123456', 2, 0, 0, '2015-04-20 07:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `generic_name`
--

CREATE TABLE IF NOT EXISTS `generic_name` (
`id` int(11) NOT NULL,
  `generic_name` varchar(25) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generic_name`
--

INSERT INTO `generic_name` (`id`, `generic_name`, `description`) VALUES
(1, 'TST', 'ASDADASDAS');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
`id` int(11) NOT NULL,
  `item_code` char(5) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_category_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `generic_name_id` int(11) NOT NULL,
  `minimum_reorder_quantity` int(11) NOT NULL,
  `unit_of_measure_id` int(11) NOT NULL,
  `remarks` longtext,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `item_code`, `item_name`, `item_category_id`, `manufacturer_id`, `generic_name_id`, `minimum_reorder_quantity`, `unit_of_measure_id`, `remarks`, `date_created`, `date_updated`) VALUES
(1, 'TSTNG', 'Testing', 1, 1, 1, 123, 0, 'DSADASDASDAS', '2015-04-19 22:29:31', '2015-04-19 22:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

CREATE TABLE IF NOT EXISTS `item_category` (
`id` int(11) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_category`
--

INSERT INTO `item_category` (`id`, `category_id`, `category_name`) VALUES
(1, 'test', 'medicine');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
`id` int(11) NOT NULL,
  `location_code` varchar(20) NOT NULL,
  `location_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location_code`, `location_name`) VALUES
(1, 'PDWRD', 'pedia ward'),
(2, 'FWARD', 'female ward'),
(3, 'MWARD', 'male ward');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
`id` int(11) NOT NULL,
  `manufacturer_name` varchar(25) NOT NULL,
  `description` longtext NOT NULL,
  `contact_person` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `telephone_number` varchar(25) NOT NULL,
  `cellphone_number` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `manufacturer_name`, `description`, `contact_person`, `address`, `telephone_number`, `cellphone_number`) VALUES
(1, 'TST1', 'ASDASDASDASD', '', '', '', ''),
(2, 'Unilab', 'TESTING\r\n\r\n', '', '', '', '');

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
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
`id` int(11) NOT NULL,
  `patient_id_no` varchar(20) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `middlename` varchar(10) NOT NULL,
  `address` varchar(25) NOT NULL,
  `birthdate` date NOT NULL,
  `telephone_number` varchar(20) DEFAULT NULL,
  `cellphone_number` varchar(20) DEFAULT NULL,
  `email_address` varchar(25) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patient_id_no`, `lastname`, `firstname`, `middlename`, `address`, `birthdate`, `telephone_number`, `cellphone_number`, `email_address`, `created_at`, `created_by`) VALUES
(1, '201113', 'fincale', 'jurena', 'a', 'taguig city', '2015-04-27', NULL, NULL, '', '2015-04-19 23:39:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
`id` int(11) NOT NULL,
  `position_code` varchar(20) NOT NULL,
  `position_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `position_code`, `position_name`) VALUES
(1, 'NRS', 'nurse'),
(2, 'ASNRS', 'assistant nurse');

-- --------------------------------------------------------

--
-- Table structure for table `return_item_details`
--

CREATE TABLE IF NOT EXISTS `return_item_details` (
`id` int(11) NOT NULL,
  `return_item_header_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_cost` decimal(10,2) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return_item_details`
--

INSERT INTO `return_item_details` (`id`, `return_item_header_id`, `item_id`, `quantity`, `unit_cost`, `amount`, `date_created`, `created_by`) VALUES
(1, 1, 1, 10, '0.00', '10', '2015-04-20 00:00:41', 0);

-- --------------------------------------------------------

--
-- Table structure for table `return_item_header`
--

CREATE TABLE IF NOT EXISTS `return_item_header` (
`id` int(11) NOT NULL,
  `return_item_header_code` varchar(20) NOT NULL,
  `date_prepared` date NOT NULL,
  `patient_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `bed_id` int(11) NOT NULL,
  `total_amount` decimal(10,0) NOT NULL,
  `returned_by` int(11) NOT NULL,
  `received_by` int(11) NOT NULL,
  `approved_by` int(11) NOT NULL,
  `accounting_status_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return_item_header`
--

INSERT INTO `return_item_header` (`id`, `return_item_header_code`, `date_prepared`, `patient_id`, `location_id`, `bed_id`, `total_amount`, `returned_by`, `received_by`, `approved_by`, `accounting_status_id`, `date_created`, `date_updated`, `created_by`) VALUES
(1, 'RIH', '2015-04-27', 1, 1, 1, '109', 0, 0, 0, 1, '2015-04-19 23:40:04', '2015-04-19 23:42:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock_inventory`
--

CREATE TABLE IF NOT EXISTS `stock_inventory` (
`id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `quantity_onhand` int(11) NOT NULL,
  `quantity_onorder` int(11) NOT NULL,
  `stock_inventory_code` varchar(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_inventory`
--

INSERT INTO `stock_inventory` (`id`, `item_id`, `location_id`, `quantity_onhand`, `quantity_onorder`, `stock_inventory_code`, `created`, `created_by`) VALUES
(1, 1, 1, 1212, 21313, 'SI123', '2015-04-19 22:36:11', 0),
(2, 1, 2, 23123, 213123, 'SI124', '2015-04-19 22:40:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock_issue_details`
--

CREATE TABLE IF NOT EXISTS `stock_issue_details` (
`id` int(11) NOT NULL,
  `stock_issue_header_id` int(11) NOT NULL,
  `date_release` date NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `exp_date` date NOT NULL,
  `unit_cost` decimal(10,0) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `remarks` longtext,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_issue_details`
--

INSERT INTO `stock_issue_details` (`id`, `stock_issue_header_id`, `date_release`, `item_id`, `quantity`, `exp_date`, `unit_cost`, `amount`, `remarks`, `date_created`, `created_by`) VALUES
(1, 1, '2015-04-30', 1, 1000, '2015-06-29', '10', '100', '', '2015-04-20 05:07:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock_issue_header`
--

CREATE TABLE IF NOT EXISTS `stock_issue_header` (
`id` int(11) NOT NULL,
  `stock_issue_header_code` varchar(20) NOT NULL,
  `date_prepared` date NOT NULL,
  `location_id` int(11) NOT NULL,
  `stock_inventory_id` int(11) NOT NULL,
  `stock_status_id` int(11) NOT NULL,
  `prepared_by` int(11) NOT NULL,
  `approved_by` int(11) NOT NULL,
  `issued_by` int(11) NOT NULL,
  `received_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_issue_header`
--

INSERT INTO `stock_issue_header` (`id`, `stock_issue_header_code`, `date_prepared`, `location_id`, `stock_inventory_id`, `stock_status_id`, `prepared_by`, `approved_by`, `issued_by`, `received_by`, `date_created`, `date_updated`, `created_by`) VALUES
(1, 'SIH1234', '2015-04-02', 1, 2, 1, 0, 0, 0, 0, '2015-04-19 22:41:59', '2015-04-19 22:41:59', 0),
(2, 'SIH1235', '2015-04-09', 1, 1, 1, 0, 0, 0, 0, '2015-04-19 22:51:01', '2015-04-19 22:51:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock_status`
--

CREATE TABLE IF NOT EXISTS `stock_status` (
`id` int(11) NOT NULL,
  `status_code` varchar(20) NOT NULL,
  `description_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_status`
--

INSERT INTO `stock_status` (`id`, `status_code`, `description_name`) VALUES
(1, 'PNDNG', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `unit_of_measure`
--

CREATE TABLE IF NOT EXISTS `unit_of_measure` (
`id` int(11) NOT NULL,
  `type_of_measure` int(11) NOT NULL,
  `description` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(0, 'pharmacist', 'P6M-ByYdBAlKlXrjb9UnlS-HktQ3nts4', '$2y$13$7qrXlIGDT0SKh0PomWiTYeoqU5mSzPA5Q0qEV4JVAGneEMFWIcT32', '', 'pharmacist@gmail.com', 20, 10, 1428206215, 1428206215),
(1, 'admin', 'E3n4JKw-tdsNvCx17E8e4gZx_AmjBlJ8', '$2y$13$7fkt3MbsuuxMiV1P3jVDTuT6qLliDVJ7HccG7apbeRwlU1OJ1wyy6', NULL, 'admin@example.com', 20, 10, 1426402583, 1426402583),
(3, 'accounting', 'qHlTcIVACOvo6M6WhoomZBy9NCFtCVva', '$2y$13$ITYbouiUdeEogfgL2xRiFOhTfQx8GguVrOpD5iSGupUHbmo.YmJDm', '', 'accounting@example.com', 10, 10, 1426403400, 1426403400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounting_status`
--
ALTER TABLE `accounting_status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `bed_ibfk_3` (`location_id`);

--
-- Indexes for table `bed_status`
--
ALTER TABLE `bed_status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `employee_ibfk_1` (`position_id`), ADD KEY `employee_ibfk_2` (`user_id`);

--
-- Indexes for table `generic_name`
--
ALTER TABLE `generic_name`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
 ADD PRIMARY KEY (`id`), ADD KEY `item_ibfk_1` (`item_category_id`), ADD KEY `item_ibfk_4` (`generic_name_id`), ADD KEY `item_ibfk_5` (`manufacturer_id`), ADD KEY `id` (`id`);

--
-- Indexes for table `item_category`
--
ALTER TABLE `item_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `return_item_details`
--
ALTER TABLE `return_item_details`
 ADD PRIMARY KEY (`id`), ADD KEY `return_item_details_ibfk_1` (`return_item_header_id`), ADD KEY `return_item_details_ibfk_5` (`item_id`);

--
-- Indexes for table `return_item_header`
--
ALTER TABLE `return_item_header`
 ADD PRIMARY KEY (`id`), ADD KEY `return_item_header_ibfk_1` (`location_id`), ADD KEY `return_item_header_ibfk_2` (`bed_id`), ADD KEY `return_item_header_ibfk_4` (`patient_id`), ADD KEY `return_item_header_ibfk_14` (`accounting_status_id`);

--
-- Indexes for table `stock_inventory`
--
ALTER TABLE `stock_inventory`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `stock_inventory_ibfk_1` (`item_id`), ADD KEY `stock_inventory_ibfk_2` (`location_id`), ADD KEY `id_2` (`id`);

--
-- Indexes for table `stock_issue_details`
--
ALTER TABLE `stock_issue_details`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`), ADD KEY `stock_issue_details_ibfk_1` (`item_id`), ADD KEY `stock_issue_details_ibfk_2` (`stock_issue_header_id`);

--
-- Indexes for table `stock_issue_header`
--
ALTER TABLE `stock_issue_header`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `stock_issue_header_ibfk_1` (`stock_status_id`), ADD KEY `stock_issue_header_ibfk_2` (`stock_inventory_id`), ADD KEY `stock_issue_header_ibfk_3` (`location_id`);

--
-- Indexes for table `stock_status`
--
ALTER TABLE `stock_status`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `unit_of_measure`
--
ALTER TABLE `unit_of_measure`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounting_status`
--
ALTER TABLE `accounting_status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bed_status`
--
ALTER TABLE `bed_status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `generic_name`
--
ALTER TABLE `generic_name`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `item_category`
--
ALTER TABLE `item_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `return_item_details`
--
ALTER TABLE `return_item_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `return_item_header`
--
ALTER TABLE `return_item_header`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stock_inventory`
--
ALTER TABLE `stock_inventory`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stock_issue_details`
--
ALTER TABLE `stock_issue_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stock_issue_header`
--
ALTER TABLE `stock_issue_header`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stock_status`
--
ALTER TABLE `stock_status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `unit_of_measure`
--
ALTER TABLE `unit_of_measure`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bed`
--
ALTER TABLE `bed`
ADD CONSTRAINT `bed_ibfk_3` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
ADD CONSTRAINT `item_ibfk_3` FOREIGN KEY (`item_category_id`) REFERENCES `item_category` (`id`),
ADD CONSTRAINT `item_ibfk_4` FOREIGN KEY (`generic_name_id`) REFERENCES `generic_name` (`id`),
ADD CONSTRAINT `item_ibfk_5` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`id`);

--
-- Constraints for table `return_item_details`
--
ALTER TABLE `return_item_details`
ADD CONSTRAINT `return_item_details_ibfk_3` FOREIGN KEY (`return_item_header_id`) REFERENCES `return_item_header` (`id`),
ADD CONSTRAINT `return_item_details_ibfk_5` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);

--
-- Constraints for table `return_item_header`
--
ALTER TABLE `return_item_header`
ADD CONSTRAINT `return_item_header_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`),
ADD CONSTRAINT `return_item_header_ibfk_14` FOREIGN KEY (`accounting_status_id`) REFERENCES `accounting_status` (`id`),
ADD CONSTRAINT `return_item_header_ibfk_2` FOREIGN KEY (`bed_id`) REFERENCES `bed` (`id`),
ADD CONSTRAINT `return_item_header_ibfk_3` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`),
ADD CONSTRAINT `return_item_header_ibfk_5` FOREIGN KEY (`bed_id`) REFERENCES `bed` (`id`),
ADD CONSTRAINT `return_item_header_ibfk_6` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`);

--
-- Constraints for table `stock_inventory`
--
ALTER TABLE `stock_inventory`
ADD CONSTRAINT `stock_inventory_ibfk_3` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
ADD CONSTRAINT `stock_inventory_ibfk_4` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`);

--
-- Constraints for table `stock_issue_details`
--
ALTER TABLE `stock_issue_details`
ADD CONSTRAINT `stock_issue_details_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
ADD CONSTRAINT `stock_issue_details_ibfk_2` FOREIGN KEY (`stock_issue_header_id`) REFERENCES `stock_issue_header` (`id`),
ADD CONSTRAINT `stock_issue_details_ibfk_3` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
ADD CONSTRAINT `stock_issue_details_ibfk_4` FOREIGN KEY (`stock_issue_header_id`) REFERENCES `stock_issue_header` (`id`),
ADD CONSTRAINT `stock_issue_details_ibfk_5` FOREIGN KEY (`stock_issue_header_id`) REFERENCES `stock_issue_header` (`id`);

--
-- Constraints for table `stock_issue_header`
--
ALTER TABLE `stock_issue_header`
ADD CONSTRAINT `stock_issue_header_ibfk_1` FOREIGN KEY (`stock_status_id`) REFERENCES `stock_status` (`id`),
ADD CONSTRAINT `stock_issue_header_ibfk_2` FOREIGN KEY (`stock_inventory_id`) REFERENCES `stock_inventory` (`id`),
ADD CONSTRAINT `stock_issue_header_ibfk_3` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`),
ADD CONSTRAINT `stock_issue_header_ibfk_6` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`),
ADD CONSTRAINT `stock_issue_header_ibfk_7` FOREIGN KEY (`stock_inventory_id`) REFERENCES `stock_inventory` (`id`),
ADD CONSTRAINT `stock_issue_header_ibfk_8` FOREIGN KEY (`stock_status_id`) REFERENCES `stock_status` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
