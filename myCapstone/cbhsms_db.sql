-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 08:15 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cbhsms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive_hcdisease`
--

CREATE TABLE IF NOT EXISTS `archive_hcdisease` (
`archdis_id` int(30) NOT NULL,
  `archdis_name` varchar(200) NOT NULL,
  `archdis_desc` varchar(200) NOT NULL,
  `archdis_cause` varchar(200) NOT NULL,
  `archdis_effect` varchar(200) NOT NULL,
  `archdis_prevention` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `denied_hc`
--

CREATE TABLE IF NOT EXISTS `denied_hc` (
  `archHC_id` int(200) NOT NULL,
  `hc_id` int(200) NOT NULL,
  `admin` varchar(200) NOT NULL,
  `archHC_reason` varchar(200) NOT NULL,
  `archHC_dateTime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
`id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `type`, `lat`, `lng`) VALUES
(1, 'Malaria', 'Malaria Rd, Barangay 185, Caloocan City North, Philippines', 'bar', 14.768680, 121.077995),
(2, 'Bagong Silang', 'Barangay 176, Caloocan City North, Philippines', 'bar', 14.777100, 121.043098),
(3, 'Cefels Park Subd. III', 'Hilton, Barangay 184, Caloocan City North, Philippines', 'bar', 14.768310, 121.081589),
(4, 'Soldier Hills III', 'Narra Ave, Barangay 182, Caloocan City North, Philippines', 'bar', 14.760940, 121.078697),
(5, 'Congress Village', 'Camarin Rd, Barangay 175, Caloocan City North, Philippines', 'bar', 14.756010, 121.043167),
(6, 'NHC Tala Estate', 'Christian Dior, Barangay 186, Caloocan City North, Philippines', 'bar', 14.772591, 121.068314),
(7, 'Phase 8', 'Phase 8, Barangay 176, Caloocan City North, Philippines', 'bar', 14.778740, 121.054512),
(8, 'Phase 5', 'St. Jqseph Phase 5, Barangay 176, Caloocan City North, Philippinesnes', 'bar', 14.771920, 121.054718),
(9, 'Barangay 177', 'Barangay 177, Caloocan City North, Philippines', 'bar', 14.749040, 121.051277),
(10, 'Barangay 171', 'Barangay 171, Caloocan City North, Philippines', 'restaurant', 14.752460, 121.017563);

-- --------------------------------------------------------

--
-- Table structure for table `tb_accounts`
--

CREATE TABLE IF NOT EXISTS `tb_accounts` (
  `acc_id` varchar(200) NOT NULL,
  `acc_username` varchar(200) NOT NULL,
  `acc_pass` varchar(200) NOT NULL,
  `acc_fname` varchar(200) NOT NULL,
  `acc_mname` varchar(200) NOT NULL,
  `acc_lname` varchar(200) NOT NULL,
  `acc_address` varchar(200) NOT NULL,
  `acc_cpnum` varchar(200) NOT NULL,
  `acc_email` varchar(200) NOT NULL,
  `acc_hash` varchar(200) NOT NULL,
  `acc_active` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_accounts`
--

INSERT INTO `tb_accounts` (`acc_id`, `acc_username`, `acc_pass`, `acc_fname`, `acc_mname`, `acc_lname`, `acc_address`, `acc_cpnum`, `acc_email`, `acc_hash`, `acc_active`) VALUES
('', 'mangnestor3@gmail.com', '$2y$10$HfCgemrHrLkmu1YxxUVFM.rOx3My9GwogpQaX8Umm4AQ56b3JZJXu', 'Arvie', '', 'Regato', '', '', '', '2a38a4a9316c49e5a833517c45d31070', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barangay`
--

CREATE TABLE IF NOT EXISTS `tb_barangay` (
`brgy_id` int(200) NOT NULL,
  `brgy_name` varchar(200) NOT NULL,
  `brgy_address` varchar(200) NOT NULL,
  `brgy_residents` varchar(200) NOT NULL,
  `brgy_lat` varchar(200) NOT NULL,
  `brgy_lng` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barangay`
--

INSERT INTO `tb_barangay` (`brgy_id`, `brgy_name`, `brgy_address`, `brgy_residents`, `brgy_lat`, `brgy_lng`) VALUES
(1, 'Pangarap Village', 'Barangay 176, Caloocan City North', '15,321', '14.77736', '121.05191'),
(2, 'Phase 8', 'Phase 8, Barangay 176, Caloocan City North', '11,220', '14.77874', '121.054512');

-- --------------------------------------------------------

--
-- Table structure for table `tb_conclusion`
--

CREATE TABLE IF NOT EXISTS `tb_conclusion` (
  `conc_id` varchar(200) NOT NULL,
  `conc_name` varchar(200) NOT NULL,
  `conc_description` varchar(200) NOT NULL,
  `conc_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_diseases`
--

CREATE TABLE IF NOT EXISTS `tb_diseases` (
  `sick_id` varchar(200) NOT NULL,
  `sick_name` varchar(200) NOT NULL,
  `sick_description` varchar(200) NOT NULL,
  `sick_cause` varchar(200) NOT NULL,
  `sick_effect` varchar(200) NOT NULL,
  `sick_countermeasures` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hcdiseases`
--

CREATE TABLE IF NOT EXISTS `tb_hcdiseases` (
`hcdis_id` int(30) NOT NULL,
  `hc_id` int(200) NOT NULL,
  `brgy_name` varchar(200) NOT NULL,
  `case_per_brgy` varchar(200) NOT NULL,
  `hcdis_totalcase` varchar(200) NOT NULL,
  `hcdis_dateTime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_healthcenter`
--

CREATE TABLE IF NOT EXISTS `tb_healthcenter` (
  `hc_id` varchar(100) NOT NULL,
  `hc_username` varchar(200) NOT NULL,
  `hc_password` varchar(200) NOT NULL,
  `hc_hash` varchar(200) NOT NULL,
  `hc_active` varchar(200) NOT NULL,
  `hc_name` varchar(100) NOT NULL,
  `hc_description` varchar(100) NOT NULL,
  `hc_address` varchar(100) NOT NULL,
  `bgryID` varchar(100) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_regrequest`
--

CREATE TABLE IF NOT EXISTS `tb_regrequest` (
`regreq_id` int(200) NOT NULL,
  `hc_id` int(200) NOT NULL,
  `regreq_dateTime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive_hcdisease`
--
ALTER TABLE `archive_hcdisease`
 ADD PRIMARY KEY (`archdis_id`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_accounts`
--
ALTER TABLE `tb_accounts`
 ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `tb_barangay`
--
ALTER TABLE `tb_barangay`
 ADD PRIMARY KEY (`brgy_id`);

--
-- Indexes for table `tb_hcdiseases`
--
ALTER TABLE `tb_hcdiseases`
 ADD PRIMARY KEY (`hcdis_id`);

--
-- Indexes for table `tb_regrequest`
--
ALTER TABLE `tb_regrequest`
 ADD PRIMARY KEY (`regreq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive_hcdisease`
--
ALTER TABLE `archive_hcdisease`
MODIFY `archdis_id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_barangay`
--
ALTER TABLE `tb_barangay`
MODIFY `brgy_id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_hcdiseases`
--
ALTER TABLE `tb_hcdiseases`
MODIFY `hcdis_id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_regrequest`
--
ALTER TABLE `tb_regrequest`
MODIFY `regreq_id` int(200) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
