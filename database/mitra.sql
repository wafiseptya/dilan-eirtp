-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 04:10 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dilan_eirtp`
--

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `category` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `name`, `image`, `category`, `url`, `created_at`, `updated_at`) VALUES
(5, 'Gandeng Gendong', 'mitra5d1eee7a3c420.png', 'Marketplace', 'https://dodolan.jogjakota.go.id/', '2019-07-05 06:30:18', '2019-07-05 06:30:18'),
(6, 'Badan POM RI', 'mitra5d1eee954e3c9.png', 'Sertifikasi', 'https://e-reg.pom.go.id/', '2019-07-05 06:30:45', '2019-07-05 06:30:45'),
(7, 'Direktorat Jenderal Kekayaan Intelektual', 'mitra5d1eeed22e1b4.png', 'Sertifikasi', 'http://www.dgip.go.id/', '2019-07-05 06:31:46', '2019-07-05 06:31:46'),
(8, 'Majelis Ulama Indonesia', 'mitra5d1eef0e68598.png', 'Sertifikasi', 'https://e-lppommui.org/new/', '2019-07-05 06:32:46', '2019-07-05 06:32:46'),
(9, 'Test', 'mitra5d1efa6d0b356.png', 'Marketplace', 'https://integra.web.id/eirtp-public/pojok-dilan/', '2019-07-05 07:21:17', '2019-07-05 07:21:17'),
(10, 'Test', 'mitra5d1efa949f8ba.jpg', 'Sertifikasi', 'https://integra.web.id/eirtp-public/pojok-dilan/', '2019-07-05 07:21:56', '2019-07-05 07:21:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
