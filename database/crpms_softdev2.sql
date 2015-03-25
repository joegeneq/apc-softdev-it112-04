-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2015 at 07:42 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
`id` int(11) NOT NULL,
  `item_code` int(20) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `description_item` longtext NOT NULL,
  `item_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

CREATE TABLE IF NOT EXISTS `item_category` (
`id` int(11) NOT NULL,
  `category_id` int(20) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_category`
--

INSERT INTO `item_category` (`id`, `category_id`, `category_name`) VALUES
(1, 1, 'medicine'),
(2, 0, ''),
(3, 2, 'supply'),
(4, 3, 'equipment');

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
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `stock_inventory`
--

CREATE TABLE IF NOT EXISTS `stock_inventory` (
`id` int(11) NOT NULL,
  `stock_inventory_id` varchar(20) NOT NULL,
  `quantity_onhand` int(11) NOT NULL,
  `quantity_onorder` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_issue_details`
--

CREATE TABLE IF NOT EXISTS `stock_issue_details` (
`id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `stock_inventory_id` int(11) NOT NULL,
  `stock_issue_code` int(11) NOT NULL,
  `stock_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_issue_header`
--

CREATE TABLE IF NOT EXISTS `stock_issue_header` (
`id` int(11) NOT NULL,
  `header_code` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `exp_date` date NOT NULL,
  `unit_cost` decimal(10,0) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `remarks` longtext NOT NULL,
  `stock_issue_details_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_status`
--

CREATE TABLE IF NOT EXISTS `stock_status` (
`id` int(11) NOT NULL,
  `status_code` varchar(20) NOT NULL,
  `description_name` varchar(20) NOT NULL
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
  `role` int(11) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'E3n4JKw-tdsNvCx17E8e4gZx_AmjBlJ8', '$2y$13$7fkt3MbsuuxMiV1P3jVDTuT6qLliDVJ7HccG7apbeRwlU1OJ1wyy6', NULL, 'admin@example.com', 10, 10, 1426402583, 1426402583),
(2, 'pharmacist', 'Cl8ToJBJ3UOWQr-iJ4LArYBFWjMJ0x0O', '$2y$13$/P27cRnmiD8SDUi4ONzc9O3mU8H.4dkAbUnsBvXXWLC.TlvuHO3IC', NULL, 'pharmacist@example.com', 10, 10, 1426403016, 1426403016),
(3, 'accounting', 'qHlTcIVACOvo6M6WhoomZBy9NCFtCVva', '$2y$13$ITYbouiUdeEogfgL2xRiFOhTfQx8GguVrOpD5iSGupUHbmo.YmJDm', '', 'accounting@example.com', 20, 10, 1426403400, 1426403400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `employee_ibfk_1` (`position_id`), ADD KEY `employee_ibfk_2` (`user_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
 ADD PRIMARY KEY (`id`), ADD KEY `item_ibfk_1` (`item_category_id`);

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
-- Indexes for table `position`
--
ALTER TABLE `position`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `stock_inventory`
--
ALTER TABLE `stock_inventory`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `stock_inventory_ibfk_1` (`item_id`), ADD KEY `stock_inventory_ibfk_2` (`location_id`);

--
-- Indexes for table `stock_issue_details`
--
ALTER TABLE `stock_issue_details`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `stock_issue_details_ibfk_1` (`stock_status_id`), ADD KEY `stock_issue_details_ibfk_2` (`stock_inventory_id`), ADD KEY `stock_issue_details_ibfk_3` (`location_id`);

--
-- Indexes for table `stock_issue_header`
--
ALTER TABLE `stock_issue_header`
 ADD PRIMARY KEY (`id`), ADD KEY `stock_issue_header_ibfk_1` (`item_id`), ADD KEY `stock_issue_header_ibfk_2` (`stock_issue_details_id`);

--
-- Indexes for table `stock_status`
--
ALTER TABLE `stock_status`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item_category`
--
ALTER TABLE `item_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stock_inventory`
--
ALTER TABLE `stock_inventory`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock_issue_details`
--
ALTER TABLE `stock_issue_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock_issue_header`
--
ALTER TABLE `stock_issue_header`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock_status`
--
ALTER TABLE `stock_status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`position_id`) REFERENCES `position` (`id`),
ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`item_category_id`) REFERENCES `item_category` (`id`);

--
-- Constraints for table `stock_inventory`
--
ALTER TABLE `stock_inventory`
ADD CONSTRAINT `stock_inventory_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
ADD CONSTRAINT `stock_inventory_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`);

--
-- Constraints for table `stock_issue_details`
--
ALTER TABLE `stock_issue_details`
ADD CONSTRAINT `stock_issue_details_ibfk_1` FOREIGN KEY (`stock_status_id`) REFERENCES `stock_status` (`id`),
ADD CONSTRAINT `stock_issue_details_ibfk_2` FOREIGN KEY (`stock_inventory_id`) REFERENCES `stock_inventory` (`id`),
ADD CONSTRAINT `stock_issue_details_ibfk_3` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`);

--
-- Constraints for table `stock_issue_header`
--
ALTER TABLE `stock_issue_header`
ADD CONSTRAINT `stock_issue_header_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
ADD CONSTRAINT `stock_issue_header_ibfk_2` FOREIGN KEY (`stock_issue_details_id`) REFERENCES `stock_issue_details` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
