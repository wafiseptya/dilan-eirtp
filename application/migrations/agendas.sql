-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 10:53 AM
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
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `category` varchar(191) NOT NULL,
  `venue` varchar(191) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `title`, `start_time`, `end_time`, `category`, `venue`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Penyuluhan Keamanan Pangan PIRT Bulan Juli 2019', '08:00:00', '17:00:00', 'Penyuluhan Keamanan Pangan', 'Dinas Kesehatan Yogyakarta', '2019-07-23', '2019-07-02 08:37:56', '2019-07-02 08:37:56'),
(2, 'Penyuluhan Keamanan Pangan PIRT Bulan Agustus 2019', '08:00:00', '17:00:00', 'Penyuluhan Keamanan Pangan', 'Dinas Kesehatan Yogyakarta', '2019-08-20', '2019-07-02 08:39:14', '2019-07-02 08:39:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
