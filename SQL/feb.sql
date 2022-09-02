-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2022 at 01:01 AM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `nim` varchar(11) NOT NULL,
  `nama` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int NOT NULL,
  `id_tagihan` int NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(10) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `tgl` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_tagihan`, `nim`, `nama`, `prodi`, `semester`, `bukti_pembayaran`, `tgl`, `status`) VALUES
(1, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(2, 5, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(3, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(4, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(5, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(6, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(7, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(8, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(9, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(10, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(11, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(12, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(13, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(14, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(15, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(16, 14, '20150122', 's', '12', '6', 'AD MENCETAK KUITANSI.png', '2022-06-23 16:55:04', 1),
(17, 5, '1231', 'KHATIMAH', 'Akuntansi', '2', '', '2022-06-24 00:36:00', 0),
(18, 5, '1231', 'SUWARDI', 'Manajemen', '1', '1656005945_7305bbd058541cddad3e.jpg', '2022-06-24 00:39:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int NOT NULL,
  `tagihan` varchar(50) NOT NULL,
  `prodi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `semester` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `batas_waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `tagihan`, `prodi`, `semester`, `keterangan`, `batas_waktu`, `status`) VALUES
(4, '$tagihans', 'Akuntansi', '6', '$keterangan', '2022-06-23 09:39:00', 'Active'),
(5, 'Bayar Sesuatu', '0', '$s', '$keterangan', '2022-06-23 09:39:34', 'Active'),
(6, '$tagihan', '0', '$s', '$keterangan', '2022-06-23 09:39:34', 'Active'),
(7, '$tagihan', '0', '$s', '$keterangan', '2022-06-23 09:39:34', 'Active'),
(8, '$tagihan', '0', '$s', '$keterangan', '2022-06-23 09:39:34', 'Active'),
(11, 'jeni', 'Akuntansi', 's', 's', '2022-06-23 11:33:00', 'Active'),
(12, 'jeni', 'Perbankan Syariah', 's', 's', '2022-06-23 11:33:00', 'Active'),
(13, 'ehm', 'Perbankan Syariah', '$s', '$keterangan', '2022-06-23 09:39:00', 'Active'),
(14, 'ehm', 'Akuntansi', '$s', '$keterangan', '2022-06-23 09:39:00', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_tagihan` (`id_tagihan`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_tagihan`) REFERENCES `tagihan` (`id_tagihan`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
