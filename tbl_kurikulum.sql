-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2021 at 04:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kurikulum`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurikulum`
--

CREATE TABLE `tbl_kurikulum` (
  `id` int(11) NOT NULL,
  `kode_matakuliah` varchar(5) NOT NULL,
  `nama_matakuliah` varchar(50) NOT NULL,
  `jenis_perkuliahan` varchar(20) NOT NULL,
  `semester` int(1) NOT NULL,
  `jenis_matakuliah` varchar(20) NOT NULL,
  `bobot_sks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kurikulum`
--

INSERT INTO `tbl_kurikulum` (`id`, `kode_matakuliah`, `nama_matakuliah`, `jenis_perkuliahan`, `semester`, `jenis_matakuliah`, `bobot_sks`) VALUES
(1, 'DT001', 'Pendidikan Pancasila', 'Teori', 1, 'Wajib', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kurikulum`
--
ALTER TABLE `tbl_kurikulum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kurikulum`
--
ALTER TABLE `tbl_kurikulum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
