-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1

-- Generation Time: Apr 21, 2015 at 10:48 AM

-- Generation Time: Apr 21, 2015 at 10:21 AM

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

-- --------------------------------------------------------

--
-- Table structure for table `generic_name`
--

CREATE TABLE IF NOT EXISTS `generic_name` (
`id` int(11) NOT NULL,
  `generic_name` varchar(25) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

CREATE TABLE IF NOT EXISTS `item_category` (
`id` int(11) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
`id` int(11) NOT NULL,
  `location_code` varchar(20) NOT NULL,
  `location_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
`id` int(11) NOT NULL,
  `position_code` varchar(20) NOT NULL,
  `position_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `position_code`, `position_name`) VALUES
(3, 'NRSE', 'Nurse'),
(4, 'ASST NRSE', 'Assistant Nurse'),
(5, 'PHRMCST', 'Pharmacist');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_status`
--

CREATE TABLE IF NOT EXISTS `stock_status` (
`id` int(11) NOT NULL,
  `status_code` varchar(20) NOT NULL,
  `description_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unit_of_measure`
--

CREATE TABLE IF NOT EXISTS `unit_of_measure` (
`id` int(11) NOT NULL,
  `type_of_measure` varchar(25) NOT NULL,
  `description` longtext
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'pharmacist', '0WXm4Lpvd1vdTixccRKG0sEmXFtQpA6E', '$2y$13$eRy9Sa2HrNrCtjf/0sXqJuwHS3xG5AwWO76ngKlsH4UHWJ0l5K6jm', NULL, 'pharmacist@gmail.com', 20, 10, 1429601439, 1429601439),
(2, 'admin', 'XZfsBFObdUNbsXRIyUsVbVY5VKKW9rNX', '$2y$13$2vijun0mPd.8kMR32DwSlOYOhd0p3kWO2pqoFw/QF6aJoNuClMDpm', NULL, 'admin@example.com', 20, 10, 1429603285, 1429603285),
(3, 'accounting', 'uhfXsFS37SfLW9xA9JP_fVByYJIOVgCx', '$2y$13$bDU2d9OsR28UzygpSzSlNenT2zci1JhXBjlwc.H/qqVIuHwiM9.YK', NULL, 'accounting@example.com', 10, 10, 1429603315, 1429603315);

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
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `bed_ibfk_3` (`location_id`), ADD KEY `bed_ibfk_4` (`bed_status_id`);

--
-- Indexes for table `bed_status`
--
ALTER TABLE `bed_status`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

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
 ADD PRIMARY KEY (`id`), ADD KEY `return_item_details_ibfk_1` (`return_item_header_id`), ADD KEY `return_item_details_ibfk_5` (`item_id`), ADD KEY `return_item_details_ibfk_15` (`created_by`);

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
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `stock_issue_header_ibfk_1` (`stock_status_id`), ADD KEY `stock_issue_header_ibfk_2` (`stock_inventory_id`), ADD KEY `stock_issue_header_ibfk_3` (`location_id`), ADD KEY `created_by` (`created_by`);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `return_item_details`
--
ALTER TABLE `return_item_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `return_item_header`
--
ALTER TABLE `return_item_header`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stock_inventory`
--
ALTER TABLE `stock_inventory`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stock_issue_details`
--
ALTER TABLE `stock_issue_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stock_issue_header`
--
ALTER TABLE `stock_issue_header`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `stock_status`
--
ALTER TABLE `stock_status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `unit_of_measure`
--
ALTER TABLE `unit_of_measure`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bed`
--
ALTER TABLE `bed`
ADD CONSTRAINT `bed_ibfk_3` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`),
ADD CONSTRAINT `bed_ibfk_4` FOREIGN KEY (`bed_status_id`) REFERENCES `bed_status` (`id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
ADD CONSTRAINT `employee_ibfk_9` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

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
ADD CONSTRAINT `return_item_details_ibfk_10` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`),
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
ADD CONSTRAINT `stock_issue_header_ibfk_8` FOREIGN KEY (`stock_status_id`) REFERENCES `stock_status` (`id`),
ADD CONSTRAINT `stock_issue_header_ibfk_9` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
