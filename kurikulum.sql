-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 04:18 AM
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
  `sifat_perkuliahan` varchar(20) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `semester` int(1) NOT NULL,
  `jenis_matakuliah` varchar(20) NOT NULL,
  `bobot_sks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kurikulum`
--

INSERT INTO `tbl_kurikulum` (`id`, `kode_matakuliah`, `nama_matakuliah`, `sifat_perkuliahan`, `tahun_ajaran`, `semester`, `jenis_matakuliah`, `bobot_sks`) VALUES
(46, 'DT001', 'Pancasila', 'Wajib', '2019/2020', 1, 'Praktek', 2),
(47, 'DT002', 'Web 2', 'Pilihan', '2020/2021', 3, 'Praktek', 4),
(48, 'DT003', 'Delectus nisi dolor', 'Wajib', '2020/2021', 3, 'Teori', 2),
(49, 'DT004', 'A odit beatae non qu', 'Pilihan', '2020/2021', 2, 'Teori', 2),
(51, 'DT010', 'Asperiores dolore no', 'Pilihan', '2019/2020', 6, 'Praktek', 4),
(53, 'DT012', 'Pengolahan Basis Data', 'Konsentrasi', '2021/2022', 3, 'Praktek', 4),
(54, 'DT100', 'UI/UX Design 2', 'Konsentrasi', '2021/2022', 5, 'Praktek', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
