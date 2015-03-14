-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2015 at 01:34 AM
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
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1425582185),
('m130524_201442_init', 1425582195);

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

--
-- Dumping data for table `return_item`
--

INSERT INTO `return_item` (`id`, `date`, `item_name`, `quantity`, `amount`, `remarks`, `return_slip_form_id`) VALUES
(1, '2015-02-26', 'Biogesic', 10, '100', '', 1),
(2, '2015-02-01', 'Cloxacilin Carbonate', 100, '43', '', 1);

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
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return_slip_form`
--

INSERT INTO `return_slip_form` (`id`, `patient_last_name`, `patient_first_name`, `patient_middle_initial`, `date`, `ward_name`, `bed_number`, `returned_by`, `received_by`, `approved_by`, `accounting_status`, `user_id`) VALUES
(1, 'Abisado', 'Jandra Marie', 'K', '2015-02-26', 'private ward', '210', 'Cristine Ronario', 'Carmelita Buenaflor', 'Mr. Jerry Cruz', 1, 0),
(2, 'Ronario', 'Cristine', 'L', '2015-02-09', 'suite room', '208|210', 'Flordeliza Calanno', 'Carmelita Buenaflor', 'Mr. Jerry Cruz', 1, 0),
(3, 'Navarro', 'Mark', 'K', '2015-02-18', 'male ward', '204', 'Cristine Ronario', 'Carmelita Buenaflor', 'Mr. Jerry Cruz', 0, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks_record`
--

INSERT INTO `stocks_record` (`id`, `description`, `user_id`) VALUES
(1, 'Medicine Supply', 0),
(2, 'For Operation', 0),
(3, 'For Pedia Ward', 0),
(5, 'For Male Ward', 0);

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

--
-- Dumping data for table `stocks_record_item`
--

INSERT INTO `stocks_record_item` (`id`, `item_name`, `available_quantity`, `released_quantity`, `delivery_date`, `purchasing_status`, `remarks`, `stocks_record_id`) VALUES
(1, 'Biogesic', 100, 0, '2015-02-18', 1, '', 1),
(2, 'Gauze Bandage', 100, 10, '2015-02-18', 1, '', 2),
(3, 'milk', 100, 0, '2015-06-06', 1, '', 3),
(4, 'alcohol', 60, 10, '2015-02-18', 2, '', 2);

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

--
-- Dumping data for table `stock_issue_form`
--

INSERT INTO `stock_issue_form` (`id`, `date`, `ward_name`, `prepared_by`, `approved_by`, `issued_by`, `received_by`, `user_id`) VALUES
(1, '2015-02-19', 'Male Ward', 'Calanno Flor', 'Mrs. Carmelita', 'Dr. Jerry Cruz', 'Mrs. Carmelita', 0),
(2, '2015-02-04', 'private ward', 'Calanno Flor', 'Mrs. Carmelita', 'Dr. Jerry Cruz', 'Mrs. Carmelita', 0),
(3, '2015-02-09', 'suite room', 'Calanno Flor', 'Mrs. Carmelita', 'Dr. Jerry Cruz', 'Mrs. Carmelita', 0);

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
-- Dumping data for table `stock_issue_item`
--

INSERT INTO `stock_issue_item` (`id`, `date`, `item_name`, `quantity`, `expiration_date`, `unit_cost`, `amount`, `remarks`, `stock_issue_form_id`) VALUES
(1, '2015-02-17', 'Betadine', 100, '2015-02-04', 15, 100, '', 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(0, 'pharmacist', 'cQJSEAUSouFEnBLfcwPkpNu67QDAMx5V', '$2y$13$qEDYlF28pEyIuRqhFqv2teTdNYnM3B5IEFjeC8D.8iNj4Rs3ikPUu', NULL, 'florcalanno@gmail.com', 10, 1425609615, 1425609615),
(1, 'admin', '0ZkJw-9LXn7fcWhB0aYgwkeZpbsCioXm', '$2y$13$tq/zLNe59DpmQqSrj/2I4uIRqZZUbKmS7o5FpHbBAnDvovOUKzIH2', NULL, 'admin@example.com', 10, 1425599488, 1425599488);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `return_item`
--
ALTER TABLE `return_item`
 ADD PRIMARY KEY (`id`), ADD KEY `return_item_ibfk_1` (`return_slip_form_id`);

--
-- Indexes for table `return_slip_form`
--
ALTER TABLE `return_slip_form`
 ADD PRIMARY KEY (`id`), ADD KEY `return_slip_form_ibfk_1` (`user_id`);

--
-- Indexes for table `stocks_record`
--
ALTER TABLE `stocks_record`
 ADD PRIMARY KEY (`id`), ADD KEY `stocks_record_ibfk_1` (`user_id`);

--
-- Indexes for table `stocks_record_item`
--
ALTER TABLE `stocks_record_item`
 ADD PRIMARY KEY (`id`), ADD KEY `stocks_record_item_ibfk_1` (`stocks_record_id`);

--
-- Indexes for table `stock_issue_form`
--
ALTER TABLE `stock_issue_form`
 ADD PRIMARY KEY (`id`), ADD KEY `stock_issue_form_ibfk_1` (`user_id`);

--
-- Indexes for table `stock_issue_item`
--
ALTER TABLE `stock_issue_item`
 ADD PRIMARY KEY (`id`), ADD KEY `stock_issue_item_ibfk_1` (`stock_issue_form_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `return_item`
--
ALTER TABLE `return_item`
ADD CONSTRAINT `return_item_ibfk_1` FOREIGN KEY (`return_slip_form_id`) REFERENCES `return_slip_form` (`id`);

--
-- Constraints for table `return_slip_form`
--
ALTER TABLE `return_slip_form`
ADD CONSTRAINT `return_slip_form_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `stocks_record`
--
ALTER TABLE `stocks_record`
ADD CONSTRAINT `stocks_record_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `stocks_record_item`
--
ALTER TABLE `stocks_record_item`
ADD CONSTRAINT `stocks_record_item_ibfk_1` FOREIGN KEY (`stocks_record_id`) REFERENCES `stocks_record` (`id`);

--
-- Constraints for table `stock_issue_form`
--
ALTER TABLE `stock_issue_form`
ADD CONSTRAINT `stock_issue_form_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `stock_issue_item`
--
ALTER TABLE `stock_issue_item`
ADD CONSTRAINT `stock_issue_item_ibfk_1` FOREIGN KEY (`stock_issue_form_id`) REFERENCES `stock_issue_form` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
