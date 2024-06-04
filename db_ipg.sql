-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 04:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ipg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `kuota`
--

CREATE TABLE `kuota` (
  `id` int(11) NOT NULL,
  `sabtu_sore` bigint(20) NOT NULL,
  `minggu_pagi` bigint(20) NOT NULL,
  `minggu_sore` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuota`
--

INSERT INTO `kuota` (`id`, `sabtu_sore`, `minggu_pagi`, `minggu_sore`) VALUES
(2, 5, 232, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(1, 'Mekael', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` char(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nm_umat` varchar(50) NOT NULL,
  `usia` int(11) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `jd_ibadah` varchar(50) NOT NULL,
  `nm_wilayah` varchar(50) NOT NULL,
  `nm_lingkungan` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `nm_umat`, `usia`, `jk`, `jd_ibadah`, `nm_wilayah`, `nm_lingkungan`, `no_telp`) VALUES
('001', '2023-03-02', 'surti', 32, 'Perempuan', 'Minggu Pagi', 'aloysius gonzaga', 'clara', '0824412322'),
('002', '2023-04-21', 'Reinal Agustivan', 25, 'Laki-laki', 'Sabtu Sore', 'yustinus', 'cesilia', '08244562113'),
('003', '2023-04-21', 'Greice Lauren', 21, 'Perempuan', 'Minggu Pagi', 'yustinus', 'elisabeth', '08129898875'),
('004', '2023-04-22', 'Jessica Dessy', 34, 'Perempuan', 'Minggu Pagi', 'Benedictus', 'Elisabeth', '085629986561');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuota`
--
ALTER TABLE `kuota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuota`
--
ALTER TABLE `kuota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
