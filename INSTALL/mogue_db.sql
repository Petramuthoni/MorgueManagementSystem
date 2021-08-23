-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 08:16 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mogue_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE `beds` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` varchar(40) NOT NULL,
  `room` int(10) UNSIGNED NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beds`
--

INSERT INTO `beds` (`id`, `number`, `room`, `status`) VALUES
(1, '11', 1, 'empty'),
(2, '12', 2, 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) UNSIGNED NOT NULL,
  `deceased` int(10) UNSIGNED NOT NULL,
  `total` int(10) UNSIGNED DEFAULT NULL,
  `paid_amount` int(11) NOT NULL,
  `balance` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `deceased`, `total`, `paid_amount`, `balance`) VALUES
(1, 3, 3, 5000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `incoming_deceased`
--

CREATE TABLE `incoming_deceased` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `tag_number` varchar(40) NOT NULL,
  `serial_number` varchar(40) NOT NULL,
  `relative_name` int(10) UNSIGNED DEFAULT NULL,
  `relative_number` int(10) UNSIGNED DEFAULT NULL,
  `room` int(10) UNSIGNED NOT NULL,
  `bed` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `incoming_deceased`
--

INSERT INTO `incoming_deceased` (`id`, `fullname`, `gender`, `tag_number`, `serial_number`, `relative_name`, `relative_number`, `room`, `bed`, `date`) VALUES
(1, 'elephant ndovu', 'male', '356789542', '1234689987543245', 1, 1, 1, 1, '2020-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `deceased` int(10) UNSIGNED NOT NULL,
  `room` int(10) UNSIGNED DEFAULT NULL,
  `relative` int(10) UNSIGNED DEFAULT NULL,
  `services` text NOT NULL,
  `total` int(11) NOT NULL,
  `balance` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `deceased`, `room`, `relative`, `services`, `total`, `balance`, `date`) VALUES
(3, 1, 1, 1, 'washing\r\nmaintain\r\nclean\r\ninject', 20000, 15000, '2020-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `membership_grouppermissions`
--

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `groupID` int(11) DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT '0',
  `allowEdit` tinyint(4) NOT NULL DEFAULT '0',
  `allowDelete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_grouppermissions`
--

INSERT INTO `membership_grouppermissions` (`permissionID`, `groupID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(1, 2, 'incoming_deceased', 1, 3, 3, 3),
(2, 2, 'outgoing_deceased', 1, 3, 3, 3),
(3, 2, 'relatives_info', 1, 3, 3, 3),
(4, 2, 'rooms', 1, 3, 3, 3),
(5, 2, 'beds', 1, 3, 3, 3),
(6, 2, 'bill', 1, 3, 3, 3),
(7, 2, 'invoices', 1, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `membership_groups`
--

CREATE TABLE `membership_groups` (
  `groupID` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_groups`
--

INSERT INTO `membership_groups` (`groupID`, `name`, `description`, `allowSignup`, `needsApproval`) VALUES
(1, 'anonymous', 'Anonymous group created automatically on 2020-05-28', 0, 0),
(2, 'Admins', 'Admin group created automatically on 2020-05-28', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership_userpermissions`
--

CREATE TABLE `membership_userpermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `memberID` varchar(20) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT '0',
  `allowEdit` tinyint(4) NOT NULL DEFAULT '0',
  `allowDelete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `membership_userrecords`
--

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) UNSIGNED NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(20) DEFAULT NULL,
  `dateAdded` bigint(20) UNSIGNED DEFAULT NULL,
  `dateUpdated` bigint(20) UNSIGNED DEFAULT NULL,
  `groupID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_userrecords`
--

INSERT INTO `membership_userrecords` (`recID`, `tableName`, `pkValue`, `memberID`, `dateAdded`, `dateUpdated`, `groupID`) VALUES
(1, 'rooms', '1', 'admin', 1527492421, 1527492421, 2),
(2, 'rooms', '2', 'admin', 1527492439, 1527492439, 2),
(3, 'beds', '1', 'admin', 1527492462, 1527492462, 2),
(4, 'beds', '2', 'admin', 1527492476, 1527492476, 2),
(5, 'relatives_info', '1', 'admin', 1527492535, 1527492535, 2),
(6, 'incoming_deceased', '1', 'admin', 1527493086, 1527493086, 2),
(9, 'invoices', '3', 'admin', 1527493680, 1527493680, 2),
(10, 'bill', '1', 'admin', 1527494036, 1527494036, 2);

-- --------------------------------------------------------

--
-- Table structure for table `membership_users`
--

CREATE TABLE `membership_users` (
  `memberID` varchar(20) NOT NULL,
  `passMD5` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text,
  `custom2` text,
  `custom3` text,
  `custom4` text,
  `comments` text,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `comments`, `pass_reset_key`, `pass_reset_expiry`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', '2018-05-28', 2, 0, 1, NULL, NULL, NULL, NULL, 'Admin member created automatically on 2018-05-28', NULL, NULL),
('guest', NULL, NULL, '2020-05-28', 1, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2020-05-28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `outgoing_deceased`
--

CREATE TABLE `outgoing_deceased` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` int(10) UNSIGNED NOT NULL,
  `gender` int(10) UNSIGNED DEFAULT NULL,
  `tag_number` int(10) UNSIGNED DEFAULT NULL,
  `serial_number` int(10) UNSIGNED DEFAULT NULL,
  `relative_name` int(10) UNSIGNED DEFAULT NULL,
  `relative_phone_number` int(10) UNSIGNED DEFAULT NULL,
  `date` date DEFAULT NULL,
  `car_out_number` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `relatives_info`
--

CREATE TABLE `relatives_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_relative_full_name` varchar(150) NOT NULL,
  `home_address` varchar(200) NOT NULL,
  `home_town` varchar(200) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `phone_number` varchar(40) NOT NULL,
  `second_relative_full_name` varchar(40) DEFAULT NULL,
  `second_relative_home_address` varchar(40) DEFAULT NULL,
  `second_relative_home_town` varchar(40) DEFAULT NULL,
  `second_relative_occupation` varchar(40) DEFAULT NULL,
  `second_relative_phone_number` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `relatives_info`
--

INSERT INTO `relatives_info` (`id`, `first_relative_full_name`, `home_address`, `home_town`, `occupation`, `phone_number`, `second_relative_full_name`, `second_relative_home_address`, `second_relative_home_town`, `second_relative_occupation`, `second_relative_phone_number`) VALUES
(1, 'lion simba', 'junge', 'den', 'king', '09876543', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `type`, `status`) VALUES
(1, 'A20', 'VIP', 'available'),
(2, 'A22', 'Ordinary', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room` (`room`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deceased` (`deceased`);

--
-- Indexes for table `incoming_deceased`
--
ALTER TABLE `incoming_deceased`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relative_name` (`relative_name`),
  ADD KEY `room` (`room`),
  ADD KEY `bed` (`bed`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deceased` (`deceased`);

--
-- Indexes for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_groups`
--
ALTER TABLE `membership_groups`
  ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`),
  ADD KEY `pkValue` (`pkValue`),
  ADD KEY `tableName` (`tableName`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `outgoing_deceased`
--
ALTER TABLE `outgoing_deceased`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fullname` (`fullname`);

--
-- Indexes for table `relatives_info`
--
ALTER TABLE `relatives_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beds`
--
ALTER TABLE `beds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `incoming_deceased`
--
ALTER TABLE `incoming_deceased`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `outgoing_deceased`
--
ALTER TABLE `outgoing_deceased`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relatives_info`
--
ALTER TABLE `relatives_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
