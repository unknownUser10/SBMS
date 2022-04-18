-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 07:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(23, 'Aljon Dalingding', 'AljonDalingding', 'ab.dalingding@gmail.com', '09679926379', 'fc3a78db22621cd1a9a72685387671ca');

-- --------------------------------------------------------

--
-- Table structure for table `ind1_fgds`
--

CREATE TABLE `ind1_fgds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind1_fgdsori`
--

CREATE TABLE `ind1_fgdsori` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind1_fgdsori`
--

INSERT INTO `ind1_fgdsori` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(3, 'Online class system and Learning Absorption of Grade 12 students of General Santos Doctor.docx', 13241, '2021-09-02', 'indicator1', 'This is a sample file for testing!');

-- --------------------------------------------------------

--
-- Table structure for table `ind1_fr`
--

CREATE TABLE `ind1_fr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind1_fr`
--

INSERT INTO `ind1_fr` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(6, 'Name.docx', 12640, '2022-02-28', 'AljonDalingding', 'Done!');

-- --------------------------------------------------------

--
-- Table structure for table `ind1_hr`
--

CREATE TABLE `ind1_hr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind1_hr`
--

INSERT INTO `ind1_hr` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(63, 'Name1.docx', 14312, '2022-03-01', 'sbm', 'This is a sample file for testing!'),
(66, 'GAMABA AWARDEES (DALINGDING).docx', 767856, '2022-03-10', 'AljonDalingding', 'This is a sample file for testing!');

-- --------------------------------------------------------

--
-- Table structure for table `ind1_lr`
--

CREATE TABLE `ind1_lr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind1_mcc`
--

CREATE TABLE `ind1_mcc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind1_mqi`
--

CREATE TABLE `ind1_mqi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind1_mqi`
--

INSERT INTO `ind1_mqi` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(4, 'sdsdfsasafds.docx', 419536, '2022-03-07', 'sbm', 'Done!');

-- --------------------------------------------------------

--
-- Table structure for table `ind1_mr`
--

CREATE TABLE `ind1_mr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind1_nr`
--

CREATE TABLE `ind1_nr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind1_nr`
--

INSERT INTO `ind1_nr` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(3, 'Name.docx', 12640, '2022-03-10', 'AljonDalingding', 'This is a sample file for testing!');

-- --------------------------------------------------------

--
-- Table structure for table `ind1_osa`
--

CREATE TABLE `ind1_osa` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind1_ptb`
--

CREATE TABLE `ind1_ptb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind1_rigp`
--

CREATE TABLE `ind1_rigp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind1_rirdv`
--

CREATE TABLE `ind1_rirdv` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind1_rmooe`
--

CREATE TABLE `ind1_rmooe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind1_rsefu`
--

CREATE TABLE `ind1_rsefu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind1_rsp`
--

CREATE TABLE `ind1_rsp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind1_sipaip`
--

CREATE TABLE `ind1_sipaip` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind1_tr`
--

CREATE TABLE `ind1_tr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind1_users`
--

CREATE TABLE `ind1_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ind1_users`
--

INSERT INTO `ind1_users` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(43, 'aljon dalingding', 'indicator1', 'ab.dalingding@gmail.com', '353453453453', 'b67f7a6af0a7cdd12179e6223ff4391f');

-- --------------------------------------------------------

--
-- Table structure for table `ind2_ar`
--

CREATE TABLE `ind2_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind2_dpm`
--

CREATE TABLE `ind2_dpm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind2_fgdr`
--

CREATE TABLE `ind2_fgdr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind2_fm`
--

CREATE TABLE `ind2_fm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind2_fm`
--

INSERT INTO `ind2_fm` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(3, 'BRIDGE English Version PPT.pptx', 2201626, '2022-03-07', 'sbm', 'Done!');

-- --------------------------------------------------------

--
-- Table structure for table `ind2_ga`
--

CREATE TABLE `ind2_ga` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind2_ga`
--

INSERT INTO `ind2_ga` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(5, 'sdsdfsasafds.docx', 419536, '2022-03-07', 'sbm', '');

-- --------------------------------------------------------

--
-- Table structure for table `ind2_hrdp`
--

CREATE TABLE `ind2_hrdp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind2_hrdp`
--

INSERT INTO `ind2_hrdp` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(2, 'CAP-102-MONITORING-CHECKLIST - DALINGDING GROUP.docx', 15011, '2022-03-07', 'sbm', 'DDDSDSDSDCVVV');

-- --------------------------------------------------------

--
-- Table structure for table `ind2_ifsrm`
--

CREATE TABLE `ind2_ifsrm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind2_ifsrm`
--

INSERT INTO `ind2_ifsrm` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(8, 'sdsdfsasafds.docx', 419536, '2022-03-07', 'sbm', 'This is a sample file for testing!'),
(9, 'GAMABA AWARDEES (DALINGDING).docx', 767856, '2022-03-10', 'AljonDalingding', 'Done!');

-- --------------------------------------------------------

--
-- Table structure for table `ind2_ps`
--

CREATE TABLE `ind2_ps` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind2_ra`
--

CREATE TABLE `ind2_ra` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind2_roap`
--

CREATE TABLE `ind2_roap` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind2_sa`
--

CREATE TABLE `ind2_sa` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind2_sp`
--

CREATE TABLE `ind2_sp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind2_users`
--

CREATE TABLE `ind2_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ind2_users`
--

INSERT INTO `ind2_users` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(2, 'Erick Dimasol', 'indicator2', 'indicator2@ps.cc', '22585857', 'eeb455cc34497c7124a845daaad97654');

-- --------------------------------------------------------

--
-- Table structure for table `ind3_ar`
--

CREATE TABLE `ind3_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_esnm`
--

CREATE TABLE `ind3_esnm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_fmdp`
--

CREATE TABLE `ind3_fmdp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_fri`
--

CREATE TABLE `ind3_fri` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind3_fri`
--

INSERT INTO `ind3_fri` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(3, 'Online class system and Learning Absorption of Grade 12 students of General Santos Doctor.docx', 13241, '2022-03-07', 'sbm', 'This is a sample file for testing!');

-- --------------------------------------------------------

--
-- Table structure for table `ind3_hrdp`
--

CREATE TABLE `ind3_hrdp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_hri`
--

CREATE TABLE `ind3_hri` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind3_hri`
--

INSERT INTO `ind3_hri` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(4, 'Namedsfdfd.docx', 1314003, '2022-02-18', 'indicator3', 'This is a sample file for testing!');

-- --------------------------------------------------------

--
-- Table structure for table `ind3_il`
--

CREATE TABLE `ind3_il` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_isnm`
--

CREATE TABLE `ind3_isnm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_memo`
--

CREATE TABLE `ind3_memo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_men`
--

CREATE TABLE `ind3_men` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_merm`
--

CREATE TABLE `ind3_merm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind3_merm`
--

INSERT INTO `ind3_merm` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(3, 'sdsdfsasafds.docx', 419536, '2022-03-07', 'sbm', '');

-- --------------------------------------------------------

--
-- Table structure for table `ind3_mom`
--

CREATE TABLE `ind3_mom` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_mri`
--

CREATE TABLE `ind3_mri` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_osa`
--

CREATE TABLE `ind3_osa` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_pic`
--

CREATE TABLE `ind3_pic` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_qs`
--

CREATE TABLE `ind3_qs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_ri`
--

CREATE TABLE `ind3_ri` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_rmer`
--

CREATE TABLE `ind3_rmer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_rsm`
--

CREATE TABLE `ind3_rsm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_spdp`
--

CREATE TABLE `ind3_spdp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_sr`
--

CREATE TABLE `ind3_sr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_tri`
--

CREATE TABLE `ind3_tri` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_trip`
--

CREATE TABLE `ind3_trip` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind3_users`
--

CREATE TABLE `ind3_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ind3_users`
--

INSERT INTO `ind3_users` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(2, 'Tao ng Bayan', 'indicator3', 'laysa@ff.cc', '533532555', '6dfacab3ffda6c24d6b13242cc53e513');

-- --------------------------------------------------------

--
-- Table structure for table `ind4_ar`
--

CREATE TABLE `ind4_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_es`
--

CREATE TABLE `ind4_es` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_frmdp`
--

CREATE TABLE `ind4_frmdp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_hrdp`
--

CREATE TABLE `ind4_hrdp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_ige`
--

CREATE TABLE `ind4_ige` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_ild`
--

CREATE TABLE `ind4_ild` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_im`
--

CREATE TABLE `ind4_im` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_mom`
--

CREATE TABLE `ind4_mom` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_nr`
--

CREATE TABLE `ind4_nr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_oe`
--

CREATE TABLE `ind4_oe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_others`
--

CREATE TABLE `ind4_others` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_pic`
--

CREATE TABLE `ind4_pic` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_prog`
--

CREATE TABLE `ind4_prog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_qapm`
--

CREATE TABLE `ind4_qapm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind4_qapm`
--

INSERT INTO `ind4_qapm` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(1, 'https.docx', 12496, '2022-03-07', 'sbm', 'This is a sample file for testing!');

-- --------------------------------------------------------

--
-- Table structure for table `ind4_qaqp`
--

CREATE TABLE `ind4_qaqp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_qmep`
--

CREATE TABLE `ind4_qmep` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_qpm`
--

CREATE TABLE `ind4_qpm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_qrfb`
--

CREATE TABLE `ind4_qrfb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_sfa`
--

CREATE TABLE `ind4_sfa` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_sm`
--

CREATE TABLE `ind4_sm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_spfdp`
--

CREATE TABLE `ind4_spfdp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_srm`
--

CREATE TABLE `ind4_srm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_st`
--

CREATE TABLE `ind4_st` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_tam`
--

CREATE TABLE `ind4_tam` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_trip`
--

CREATE TABLE `ind4_trip` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind4_users`
--

CREATE TABLE `ind4_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ind4_users`
--

INSERT INTO `ind4_users` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(2, 'Joke lang po', 'indicator4', 'papailes@gmail.com', '', '78c9284719aa1201516b0f995adadcf6');

-- --------------------------------------------------------

--
-- Table structure for table `ind4_vip`
--

CREATE TABLE `ind4_vip` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_aa`
--

CREATE TABLE `ind5_aa` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_abc`
--

CREATE TABLE `ind5_abc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_aip`
--

CREATE TABLE `ind5_aip` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_ar`
--

CREATE TABLE `ind5_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_arec`
--

CREATE TABLE `ind5_arec` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_ds`
--

CREATE TABLE `ind5_ds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_edc`
--

CREATE TABLE `ind5_edc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_fa`
--

CREATE TABLE `ind5_fa` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_jf`
--

CREATE TABLE `ind5_jf` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind5_jf`
--

INSERT INTO `ind5_jf` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(3, 'Name.docx', 12640, '2022-03-10', 'AljonDalingding', 'This is a sample file for testing!');

-- --------------------------------------------------------

--
-- Table structure for table `ind5_lgu`
--

CREATE TABLE `ind5_lgu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_ljf`
--

CREATE TABLE `ind5_ljf` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_mm`
--

CREATE TABLE `ind5_mm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_mmc`
--

CREATE TABLE `ind5_mmc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_osao`
--

CREATE TABLE `ind5_osao` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_pic`
--

CREATE TABLE `ind5_pic` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_po`
--

CREATE TABLE `ind5_po` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_ppbm`
--

CREATE TABLE `ind5_ppbm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_ppo`
--

CREATE TABLE `ind5_ppo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_pta`
--

CREATE TABLE `ind5_pta` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_pw`
--

CREATE TABLE `ind5_pw` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_rmec`
--

CREATE TABLE `ind5_rmec` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_rmpo`
--

CREATE TABLE `ind5_rmpo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_rrr`
--

CREATE TABLE `ind5_rrr` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_sgc`
--

CREATE TABLE `ind5_sgc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_spg`
--

CREATE TABLE `ind5_spg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind5_spg`
--

INSERT INTO `ind5_spg` (`id`, `name`, `size`, `submission`, `uploader`, `remarks`) VALUES
(2, 'https.docx', 12496, '2022-03-08', 'sbm', 'Done!');

-- --------------------------------------------------------

--
-- Table structure for table `ind5_tad`
--

CREATE TABLE `ind5_tad` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `submission` date NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ind5_users`
--

CREATE TABLE `ind5_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ind5_users`
--

INSERT INTO `ind5_users` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(3, 'Indicator 5', 'indicator5', 'indicator5@gmail.com', '12454165641', '03be66c9a413cc817dffd63f11ed6787');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `opn` varchar(255) NOT NULL,
  `npn` varchar(255) NOT NULL,
  `umeasure` varchar(255) NOT NULL,
  `uvalue` varchar(255) NOT NULL,
  `qpcard` varchar(255) NOT NULL,
  `qpcount` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `condi` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pcustodian_users`
--

CREATE TABLE `pcustodian_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pcustodian_users`
--

INSERT INTO `pcustodian_users` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(5, 'Property Custodian', 'pc', 'dsqdsadsadsadsad', '353453453453', 'bc54f4d60f1cec0f9a6cb70e13f2127a');

-- --------------------------------------------------------

--
-- Table structure for table `sbmcoordinator_users`
--

CREATE TABLE `sbmcoordinator_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbmcoordinator_users`
--

INSERT INTO `sbmcoordinator_users` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(2, 'SBM Coordinator', 'sbm', 'sbmcoordinator@gmail.com', '09332451207', 'fc24e58fa3775bae5524f776f9e57ec3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_fgds`
--
ALTER TABLE `ind1_fgds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_fgdsori`
--
ALTER TABLE `ind1_fgdsori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_fr`
--
ALTER TABLE `ind1_fr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_hr`
--
ALTER TABLE `ind1_hr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_lr`
--
ALTER TABLE `ind1_lr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_mcc`
--
ALTER TABLE `ind1_mcc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_mqi`
--
ALTER TABLE `ind1_mqi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_mr`
--
ALTER TABLE `ind1_mr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_nr`
--
ALTER TABLE `ind1_nr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_osa`
--
ALTER TABLE `ind1_osa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_ptb`
--
ALTER TABLE `ind1_ptb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_rigp`
--
ALTER TABLE `ind1_rigp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_rirdv`
--
ALTER TABLE `ind1_rirdv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_rmooe`
--
ALTER TABLE `ind1_rmooe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_rsefu`
--
ALTER TABLE `ind1_rsefu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_rsp`
--
ALTER TABLE `ind1_rsp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_sipaip`
--
ALTER TABLE `ind1_sipaip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_tr`
--
ALTER TABLE `ind1_tr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind1_users`
--
ALTER TABLE `ind1_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind2_ar`
--
ALTER TABLE `ind2_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind2_dpm`
--
ALTER TABLE `ind2_dpm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind2_fgdr`
--
ALTER TABLE `ind2_fgdr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind2_fm`
--
ALTER TABLE `ind2_fm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind2_ga`
--
ALTER TABLE `ind2_ga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind2_hrdp`
--
ALTER TABLE `ind2_hrdp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind2_ifsrm`
--
ALTER TABLE `ind2_ifsrm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind2_ps`
--
ALTER TABLE `ind2_ps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind2_ra`
--
ALTER TABLE `ind2_ra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind2_roap`
--
ALTER TABLE `ind2_roap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind2_sa`
--
ALTER TABLE `ind2_sa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind2_sp`
--
ALTER TABLE `ind2_sp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind2_users`
--
ALTER TABLE `ind2_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_ar`
--
ALTER TABLE `ind3_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_esnm`
--
ALTER TABLE `ind3_esnm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_fmdp`
--
ALTER TABLE `ind3_fmdp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_fri`
--
ALTER TABLE `ind3_fri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_hrdp`
--
ALTER TABLE `ind3_hrdp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_hri`
--
ALTER TABLE `ind3_hri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_il`
--
ALTER TABLE `ind3_il`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_isnm`
--
ALTER TABLE `ind3_isnm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_memo`
--
ALTER TABLE `ind3_memo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_men`
--
ALTER TABLE `ind3_men`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_merm`
--
ALTER TABLE `ind3_merm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_mom`
--
ALTER TABLE `ind3_mom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_mri`
--
ALTER TABLE `ind3_mri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_osa`
--
ALTER TABLE `ind3_osa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_pic`
--
ALTER TABLE `ind3_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_qs`
--
ALTER TABLE `ind3_qs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_ri`
--
ALTER TABLE `ind3_ri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_rmer`
--
ALTER TABLE `ind3_rmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_rsm`
--
ALTER TABLE `ind3_rsm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_spdp`
--
ALTER TABLE `ind3_spdp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_sr`
--
ALTER TABLE `ind3_sr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_tri`
--
ALTER TABLE `ind3_tri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_trip`
--
ALTER TABLE `ind3_trip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind3_users`
--
ALTER TABLE `ind3_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_ar`
--
ALTER TABLE `ind4_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_es`
--
ALTER TABLE `ind4_es`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_frmdp`
--
ALTER TABLE `ind4_frmdp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_hrdp`
--
ALTER TABLE `ind4_hrdp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_ige`
--
ALTER TABLE `ind4_ige`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_ild`
--
ALTER TABLE `ind4_ild`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_im`
--
ALTER TABLE `ind4_im`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_mom`
--
ALTER TABLE `ind4_mom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_nr`
--
ALTER TABLE `ind4_nr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_oe`
--
ALTER TABLE `ind4_oe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_others`
--
ALTER TABLE `ind4_others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_pic`
--
ALTER TABLE `ind4_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_prog`
--
ALTER TABLE `ind4_prog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_qapm`
--
ALTER TABLE `ind4_qapm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_qaqp`
--
ALTER TABLE `ind4_qaqp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_qmep`
--
ALTER TABLE `ind4_qmep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_qpm`
--
ALTER TABLE `ind4_qpm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_qrfb`
--
ALTER TABLE `ind4_qrfb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_sfa`
--
ALTER TABLE `ind4_sfa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_sm`
--
ALTER TABLE `ind4_sm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_spfdp`
--
ALTER TABLE `ind4_spfdp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_srm`
--
ALTER TABLE `ind4_srm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_st`
--
ALTER TABLE `ind4_st`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_tam`
--
ALTER TABLE `ind4_tam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_trip`
--
ALTER TABLE `ind4_trip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_users`
--
ALTER TABLE `ind4_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind4_vip`
--
ALTER TABLE `ind4_vip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_aa`
--
ALTER TABLE `ind5_aa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_abc`
--
ALTER TABLE `ind5_abc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_aip`
--
ALTER TABLE `ind5_aip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_ar`
--
ALTER TABLE `ind5_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_arec`
--
ALTER TABLE `ind5_arec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_ds`
--
ALTER TABLE `ind5_ds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_edc`
--
ALTER TABLE `ind5_edc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_fa`
--
ALTER TABLE `ind5_fa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_jf`
--
ALTER TABLE `ind5_jf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_lgu`
--
ALTER TABLE `ind5_lgu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_ljf`
--
ALTER TABLE `ind5_ljf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_mm`
--
ALTER TABLE `ind5_mm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_mmc`
--
ALTER TABLE `ind5_mmc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_osao`
--
ALTER TABLE `ind5_osao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_pic`
--
ALTER TABLE `ind5_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_po`
--
ALTER TABLE `ind5_po`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_ppbm`
--
ALTER TABLE `ind5_ppbm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_ppo`
--
ALTER TABLE `ind5_ppo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_pta`
--
ALTER TABLE `ind5_pta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_pw`
--
ALTER TABLE `ind5_pw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_rmec`
--
ALTER TABLE `ind5_rmec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_rmpo`
--
ALTER TABLE `ind5_rmpo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_rrr`
--
ALTER TABLE `ind5_rrr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_sgc`
--
ALTER TABLE `ind5_sgc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_spg`
--
ALTER TABLE `ind5_spg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_tad`
--
ALTER TABLE `ind5_tad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind5_users`
--
ALTER TABLE `ind5_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pcustodian_users`
--
ALTER TABLE `pcustodian_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbmcoordinator_users`
--
ALTER TABLE `sbmcoordinator_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `ind1_fgds`
--
ALTER TABLE `ind1_fgds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind1_fgdsori`
--
ALTER TABLE `ind1_fgdsori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ind1_fr`
--
ALTER TABLE `ind1_fr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ind1_hr`
--
ALTER TABLE `ind1_hr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `ind1_lr`
--
ALTER TABLE `ind1_lr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind1_mcc`
--
ALTER TABLE `ind1_mcc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind1_mqi`
--
ALTER TABLE `ind1_mqi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ind1_mr`
--
ALTER TABLE `ind1_mr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ind1_nr`
--
ALTER TABLE `ind1_nr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ind1_osa`
--
ALTER TABLE `ind1_osa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ind1_ptb`
--
ALTER TABLE `ind1_ptb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind1_rigp`
--
ALTER TABLE `ind1_rigp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind1_rirdv`
--
ALTER TABLE `ind1_rirdv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind1_rmooe`
--
ALTER TABLE `ind1_rmooe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind1_rsefu`
--
ALTER TABLE `ind1_rsefu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind1_rsp`
--
ALTER TABLE `ind1_rsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind1_sipaip`
--
ALTER TABLE `ind1_sipaip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind1_tr`
--
ALTER TABLE `ind1_tr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind1_users`
--
ALTER TABLE `ind1_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `ind2_ar`
--
ALTER TABLE `ind2_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind2_dpm`
--
ALTER TABLE `ind2_dpm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind2_fgdr`
--
ALTER TABLE `ind2_fgdr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind2_fm`
--
ALTER TABLE `ind2_fm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind2_ga`
--
ALTER TABLE `ind2_ga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ind2_hrdp`
--
ALTER TABLE `ind2_hrdp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind2_ifsrm`
--
ALTER TABLE `ind2_ifsrm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ind2_ps`
--
ALTER TABLE `ind2_ps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind2_ra`
--
ALTER TABLE `ind2_ra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ind2_roap`
--
ALTER TABLE `ind2_roap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind2_sa`
--
ALTER TABLE `ind2_sa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind2_sp`
--
ALTER TABLE `ind2_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind2_users`
--
ALTER TABLE `ind2_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ind3_ar`
--
ALTER TABLE `ind3_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind3_esnm`
--
ALTER TABLE `ind3_esnm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind3_fmdp`
--
ALTER TABLE `ind3_fmdp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind3_fri`
--
ALTER TABLE `ind3_fri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind3_hrdp`
--
ALTER TABLE `ind3_hrdp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind3_hri`
--
ALTER TABLE `ind3_hri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ind3_il`
--
ALTER TABLE `ind3_il`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind3_isnm`
--
ALTER TABLE `ind3_isnm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind3_memo`
--
ALTER TABLE `ind3_memo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind3_men`
--
ALTER TABLE `ind3_men`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind3_merm`
--
ALTER TABLE `ind3_merm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind3_mom`
--
ALTER TABLE `ind3_mom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind3_mri`
--
ALTER TABLE `ind3_mri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind3_osa`
--
ALTER TABLE `ind3_osa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind3_pic`
--
ALTER TABLE `ind3_pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind3_qs`
--
ALTER TABLE `ind3_qs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind3_ri`
--
ALTER TABLE `ind3_ri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind3_rmer`
--
ALTER TABLE `ind3_rmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind3_rsm`
--
ALTER TABLE `ind3_rsm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind3_spdp`
--
ALTER TABLE `ind3_spdp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind3_sr`
--
ALTER TABLE `ind3_sr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind3_tri`
--
ALTER TABLE `ind3_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ind3_trip`
--
ALTER TABLE `ind3_trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind3_users`
--
ALTER TABLE `ind3_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ind4_ar`
--
ALTER TABLE `ind4_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_es`
--
ALTER TABLE `ind4_es`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind4_frmdp`
--
ALTER TABLE `ind4_frmdp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind4_hrdp`
--
ALTER TABLE `ind4_hrdp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind4_ige`
--
ALTER TABLE `ind4_ige`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind4_ild`
--
ALTER TABLE `ind4_ild`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_im`
--
ALTER TABLE `ind4_im`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_mom`
--
ALTER TABLE `ind4_mom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_nr`
--
ALTER TABLE `ind4_nr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_oe`
--
ALTER TABLE `ind4_oe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_others`
--
ALTER TABLE `ind4_others`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_pic`
--
ALTER TABLE `ind4_pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_prog`
--
ALTER TABLE `ind4_prog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_qapm`
--
ALTER TABLE `ind4_qapm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind4_qaqp`
--
ALTER TABLE `ind4_qaqp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind4_qmep`
--
ALTER TABLE `ind4_qmep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_qpm`
--
ALTER TABLE `ind4_qpm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind4_qrfb`
--
ALTER TABLE `ind4_qrfb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_sfa`
--
ALTER TABLE `ind4_sfa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_sm`
--
ALTER TABLE `ind4_sm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind4_spfdp`
--
ALTER TABLE `ind4_spfdp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind4_srm`
--
ALTER TABLE `ind4_srm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_st`
--
ALTER TABLE `ind4_st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind4_tam`
--
ALTER TABLE `ind4_tam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind4_trip`
--
ALTER TABLE `ind4_trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind4_users`
--
ALTER TABLE `ind4_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ind4_vip`
--
ALTER TABLE `ind4_vip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind5_aa`
--
ALTER TABLE `ind5_aa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_abc`
--
ALTER TABLE `ind5_abc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_aip`
--
ALTER TABLE `ind5_aip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_ar`
--
ALTER TABLE `ind5_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_arec`
--
ALTER TABLE `ind5_arec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind5_ds`
--
ALTER TABLE `ind5_ds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_edc`
--
ALTER TABLE `ind5_edc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_fa`
--
ALTER TABLE `ind5_fa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_jf`
--
ALTER TABLE `ind5_jf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind5_lgu`
--
ALTER TABLE `ind5_lgu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_ljf`
--
ALTER TABLE `ind5_ljf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_mm`
--
ALTER TABLE `ind5_mm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_mmc`
--
ALTER TABLE `ind5_mmc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_osao`
--
ALTER TABLE `ind5_osao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_pic`
--
ALTER TABLE `ind5_pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_po`
--
ALTER TABLE `ind5_po`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_ppbm`
--
ALTER TABLE `ind5_ppbm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_ppo`
--
ALTER TABLE `ind5_ppo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_pta`
--
ALTER TABLE `ind5_pta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_pw`
--
ALTER TABLE `ind5_pw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind5_rmec`
--
ALTER TABLE `ind5_rmec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_rmpo`
--
ALTER TABLE `ind5_rmpo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_rrr`
--
ALTER TABLE `ind5_rrr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind5_sgc`
--
ALTER TABLE `ind5_sgc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_spg`
--
ALTER TABLE `ind5_spg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind5_tad`
--
ALTER TABLE `ind5_tad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind5_users`
--
ALTER TABLE `ind5_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pcustodian_users`
--
ALTER TABLE `pcustodian_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sbmcoordinator_users`
--
ALTER TABLE `sbmcoordinator_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
