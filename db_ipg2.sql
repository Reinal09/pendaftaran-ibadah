-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 08:59 PM
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
(2, 2, 20, 2);

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
('P202221011', '2022-05-12', 'rena', 58, 'Laki-laki', 'Sabtu Sore', 'benedictus', 'elisabeth', '082246630448'),
('P202221012', '2022-06-01', 'rena', 23, 'Laki-laki', 'Sabtu Sore', 'aloysius gonzaga', 'elisabeth', '132123123'),
('P202221013', '2022-07-29', 'rena', 32, 'Laki-laki', 'Sabtu Sore', 'fransiskus xaverius', 'elisabeth', '222222'),
('P202221014', '2022-07-29', 'rena', 32, 'Laki-laki', 'Sabtu Sore', 'fransiskus xaverius', 'elisabeth', '222222'),
('P202221015', '2022-07-29', 'rena', 23, 'Laki-laki', 'Sabtu Sore', 'fransiskus xaverius', 'cesilia', '082246630448'),
('P202221016', '2022-07-29', 'renallllll', 32, 'Laki-laki', 'Sabtu Sore', 'fransiskus xaverius', 'clara', '08244562113'),
('P21001', '2021-11-16', 'Reinal', 23, 'Laki-laki', 'Sabtu Sore', 'fransiskus xaverius', 'vincentius', '08244562113'),
('P21003', '2021-11-16', 'loker2', 35, 'Laki-laki', 'Minggu Sore', 'theresia', 'cesilia', '0824412323'),
('P21004', '2021-11-16', 'loker2', 35, 'Laki-laki', 'Minggu Sore', 'theresia', 'cesilia', '0824412323'),
('P21005', '2021-11-17', 'gejanloi', 23, 'Laki-laki', 'Sabtu Sore', 'ignatius', 'clara', '08244562113'),
('P21006', '2021-11-17', 'Reinal jonson', 34, 'Laki-laki', 'Sabtu Sore', 'ignatius', 'stefanus', '082445621132'),
('P21007', '2021-11-17', 'Reinal jonson', 34, 'Laki-laki', 'Sabtu Sore', 'ignatius', 'stefanus', '082445621132'),
('P21008', '2021-11-29', 'gejanloi', 32, 'Laki-laki', 'Sabtu Sore', 'aloysius gonzaga', 'clara', '08244562113'),
('P21009', '2021-12-01', 'tester', 23, 'Laki-laki', 'Sabtu Sore', 'benedictus', 'stefanus', '098564345'),
('P21010', '2021-12-01', 'gejanloi', 32, 'Laki-laki', 'Sabtu Sore', 'aloysius gonzaga', 'gregorius', '08244562113');

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
