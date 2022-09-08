-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 10:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bad`
--

CREATE TABLE `tbl_bad` (
  `id` int(11) NOT NULL,
  `bad` varchar(50) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bad`
--

INSERT INTO `tbl_bad` (`id`, `bad`, `date_create`) VALUES
(1, 'Bad 1', '2022-09-07 02:49:54'),
(2, 'Bad 2', '2022-09-07 02:50:01'),
(3, 'Bad 3', '2022-09-07 02:50:06'),
(5, 'Bad 4', '2022-09-07 02:50:24'),
(6, 'Bad 5', '2022-09-07 02:50:34'),
(7, 'Bad 6', '2022-09-07 02:50:43'),
(8, 'Bad 7', '2022-09-07 02:50:48'),
(9, 'Bad 8', '2022-09-07 02:50:55'),
(10, 'Bad 9', '2022-09-07 02:51:05'),
(11, 'Bad 10', '2022-09-07 02:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jam`
--

CREATE TABLE `tbl_jam` (
  `id` int(11) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jam`
--

INSERT INTO `tbl_jam` (`id`, `jam`, `date_create`) VALUES
(4, '09:00', '2022-09-07 02:28:03'),
(5, '10:00', '2022-09-07 02:28:11'),
(6, '11:00', '2022-09-07 02:28:17'),
(7, '12:00', '2022-09-07 02:28:28'),
(8, '13:00', '2022-09-07 02:28:45'),
(9, '14:00', '2022-09-07 02:28:51'),
(10, '15:00', '2022-09-07 02:28:56'),
(11, '16:00', '2022-09-07 02:29:04'),
(12, '17:00', '2022-09-07 02:29:19'),
(13, '18:00', '2022-09-07 02:29:25'),
(14, '19:00', '2022-09-07 02:29:33'),
(15, '20:00', '2022-09-07 02:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outlet`
--

CREATE TABLE `tbl_outlet` (
  `id` int(11) NOT NULL,
  `outlet` varchar(50) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_outlet`
--

INSERT INTO `tbl_outlet` (`id`, `outlet`, `date_create`) VALUES
(2, 'outlet 1', '2022-09-07 09:19:52'),
(3, 'outlet 2', '2022-09-07 09:20:01'),
(5, 'outlet 3', '2022-09-07 09:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan_customer`
--

CREATE TABLE `tbl_pesan_customer` (
  `id` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `outlet` varchar(50) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `desc` text NOT NULL,
  `bad` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `terapis_pilihan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesan_customer`
--

INSERT INTO `tbl_pesan_customer` (`id`, `customer`, `outlet`, `date`, `time`, `nohp`, `desc`, `bad`, `status`, `terapis_pilihan`) VALUES
(3, 'Aldi', 'Outlet 1', '2022-09-21', '09:00', '34343', '343434343', 'Bad 3', 'Consult', 'Trapis 2'),
(4, 'Londeh ', 'outlet 1', '2022-09-08', '10:00', '083138184143', 'hello', 'Bad 2', 'Book', 'Terapis 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_terapis`
--

CREATE TABLE `tbl_terapis` (
  `id` int(11) NOT NULL,
  `kode_terapis` varchar(15) NOT NULL,
  `terapis` varchar(50) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_terapis`
--

INSERT INTO `tbl_terapis` (`id`, `kode_terapis`, `terapis`, `date_create`) VALUES
(3, 'terapis-8213', 'Terapis 1', '2022-09-07 09:28:51'),
(4, 'terapis-336', 'Terapis 2', '2022-09-07 09:28:58'),
(5, 'terapis-554', 'Terapis 3', '2022-09-07 09:29:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bad`
--
ALTER TABLE `tbl_bad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jam`
--
ALTER TABLE `tbl_jam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_outlet`
--
ALTER TABLE `tbl_outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesan_customer`
--
ALTER TABLE `tbl_pesan_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_terapis`
--
ALTER TABLE `tbl_terapis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bad`
--
ALTER TABLE `tbl_bad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_jam`
--
ALTER TABLE `tbl_jam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_outlet`
--
ALTER TABLE `tbl_outlet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pesan_customer`
--
ALTER TABLE `tbl_pesan_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_terapis`
--
ALTER TABLE `tbl_terapis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
