-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 01:10 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crpms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`id` int(11) NOT NULL,
  `account_lastname` varchar(45) DEFAULT NULL,
  `account_firstname` varchar(45) DEFAULT NULL,
  `account_middle_initial` varchar(45) DEFAULT NULL,
  `account_birthdate` varchar(45) DEFAULT NULL,
  `account_home_address` varchar(45) DEFAULT NULL,
  `account_email_address` varchar(45) DEFAULT NULL,
  `account_contact_number` varchar(45) DEFAULT NULL,
  `account_username` varchar(45) NOT NULL,
  `account_password` varchar(45) NOT NULL,
  `account_type` varchar(45) DEFAULT NULL,
  `search` tinyint(1) DEFAULT NULL,
  `reports` tinyint(1) DEFAULT NULL,
  `forms` tinyint(1) DEFAULT NULL,
  `system` tinyint(1) DEFAULT NULL,
  `rights_add` tinyint(1) DEFAULT NULL,
  `rights_edit` tinyint(1) DEFAULT NULL,
  `rights_delete` tinyint(1) DEFAULT NULL,
  `rights_view` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `account_lastname`, `account_firstname`, `account_middle_initial`, `account_birthdate`, `account_home_address`, `account_email_address`, `account_contact_number`, `account_username`, `account_password`, `account_type`, `search`, `reports`, `forms`, `system`, `rights_add`, `rights_edit`, `rights_delete`, `rights_view`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `return_item`
--

CREATE TABLE IF NOT EXISTS `return_item` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `return_slip_form_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `ward_name` varchar(45) NOT NULL,
  `bed_number` varchar(45) NOT NULL,
  `returned_by` varchar(45) NOT NULL,
  `received_by` varchar(45) NOT NULL,
  `approved_by` varchar(45) NOT NULL,
  `accounting_status` tinyint(1) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stocks_record`
--

CREATE TABLE IF NOT EXISTS `stocks_record` (
`id` int(11) NOT NULL,
  `desciption` varchar(45) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stocks_record_item`
--

CREATE TABLE IF NOT EXISTS `stocks_record_item` (
`id` int(11) NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `released_quantity` int(11) NOT NULL,
  `delivery_date` date NOT NULL,
  `purchasing_status` tinyint(1) NOT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `stocks_record_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `account_id` int(11) NOT NULL
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `account_username_UNIQUE` (`account_username`);

--
-- Indexes for table `return_item`
--
ALTER TABLE `return_item`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_return_item_return_slip_form1_idx` (`return_slip_form_id`);

--
-- Indexes for table `return_slip_form`
--
ALTER TABLE `return_slip_form`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `patient_name_UNIQUE` (`patient_last_name`), ADD UNIQUE KEY `patient_first_name_UNIQUE` (`patient_first_name`), ADD KEY `fk_return_slip_form_account1` (`account_id`);

--
-- Indexes for table `stocks_record`
--
ALTER TABLE `stocks_record`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_stocks_record_account1_idx` (`account_id`);

--
-- Indexes for table `stocks_record_item`
--
ALTER TABLE `stocks_record_item`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_stocks_record_item_stocks_record1_idx` (`stocks_record_id`);

--
-- Indexes for table `stock_issue_form`
--
ALTER TABLE `stock_issue_form`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_stock_issue_form_account1_idx` (`account_id`);

--
-- Indexes for table `stock_issue_item`
--
ALTER TABLE `stock_issue_item`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_stock_issue_item_stock_issue_form1_idx` (`stock_issue_form_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `return_item`
--
ALTER TABLE `return_item`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `return_slip_form`
--
ALTER TABLE `return_slip_form`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stocks_record`
--
ALTER TABLE `stocks_record`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stocks_record_item`
--
ALTER TABLE `stocks_record_item`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- Constraints for dumped tables
--

--
-- Constraints for table `return_item`
--
ALTER TABLE `return_item`
ADD CONSTRAINT `fk_return_item_return_slip_form1` FOREIGN KEY (`return_slip_form_id`) REFERENCES `return_slip_form` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `return_slip_form`
--
ALTER TABLE `return_slip_form`
ADD CONSTRAINT `fk_return_slip_form_account1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stocks_record`
--
ALTER TABLE `stocks_record`
ADD CONSTRAINT `fk_stocks_record_account1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stocks_record_item`
--
ALTER TABLE `stocks_record_item`
ADD CONSTRAINT `fk_stocks_record_item_stocks_record1` FOREIGN KEY (`stocks_record_id`) REFERENCES `stocks_record` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stock_issue_form`
--
ALTER TABLE `stock_issue_form`
ADD CONSTRAINT `fk_stock_issue_form_account1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stock_issue_item`
--
ALTER TABLE `stock_issue_item`
ADD CONSTRAINT `fk_stock_issue_item_stock_issue_form1` FOREIGN KEY (`stock_issue_form_id`) REFERENCES `stock_issue_form` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
