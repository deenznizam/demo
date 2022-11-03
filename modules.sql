-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2022 at 02:25 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a1631upu_zeito`
--

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `mod_id` int(11) NOT NULL,
  `mod_name` varchar(60) NOT NULL,
  `allow_view` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-No, 1-Yes',
  `allow_add` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-No, 1-Yes',
  `allow_edit` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-No, 1-Yes',
  `allow_delete` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-No, 1-Yes',
  `allow_print` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-No, 1-Yes',
  `status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-Inactive, 1-Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`mod_id`, `mod_name`, `allow_view`, `allow_add`, `allow_edit`, `allow_delete`, `allow_print`, `status`) VALUES
(1, 'Moulds', '1', '1', '1', '0', '1', '1'),
(2, 'FO2', '1', '1', '1', '0', '1', '1'),
(3, 'Bill of Materials', '1', '1', '1', '0', '1', '1'),
(4, 'Settings', '1', '1', '1', '1', '0', '1'),
(5, 'Database', '1', '1', '1', '1', '0', '1'),
(6, 'Users', '1', '1', '1', '1', '0', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`mod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
