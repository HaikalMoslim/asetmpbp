-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 12:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asetmpbp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `admin_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email_admin`, `password`, `admin_created`) VALUES
(2, 'miratul', 'mira@gmail.com', 'amira123', '2022-01-11 13:42:48'),
(25, 'HAIKAL', 'haikal@gmail.com', 'haikal123', '2022-01-30 22:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `id_comp` int(11) NOT NULL,
  `no_aset_comp` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jenama_comp` varchar(100) NOT NULL,
  `model_comp` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `jenis_comp` varchar(50) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `os` varchar(50) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `workgroup` varchar(50) NOT NULL,
  `tahun_comp` int(10) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id_comp`, `no_aset_comp`, `nama`, `jabatan`, `jenama_comp`, `model_comp`, `nama_user`, `jenis_comp`, `ram`, `os`, `processor`, `ip_address`, `workgroup`, `tahun_comp`, `notes`) VALUES
(13, 'MPBP/LT/17/011', 'MUHDFAIZ', 'UNIT UNDANG-UNDANG', 'ACER', 'VERITON', 'FAIZSUHAIMI', 'TOWER', '2 GB', 'WINDOWS 7', 'INTELI5', '10.32.210.33', 'UNDANG-UNDANG', 2017, 'DIGUNAKAN');

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

CREATE TABLE `printer` (
  `id_printer` int(10) NOT NULL,
  `nama_printer` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `model_printer` varchar(100) NOT NULL,
  `tahun_printer` int(50) NOT NULL,
  `no_aset_printer` varchar(100) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `printer`
--

INSERT INTO `printer` (`id_printer`, `nama_printer`, `jabatan`, `model_printer`, `tahun_printer`, `no_aset_printer`, `notes`) VALUES
(6, 'AMIRA', 'UNIT UNDANG-UNDANG', 'CANON', 2017, 'MPBP/LP/17/013', 'DIGUNAKAN');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `staff_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `full_name`, `username`, `jabatan`, `email`, `password`, `staff_created`) VALUES
(16, 'muhammad faiz bin suhaimi', 'faiz123', 'UNIT OSC', 'faizsuhaimi@gmail.com', 'faiz123', '2022-01-30 22:37:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`id_comp`);

--
-- Indexes for table `printer`
--
ALTER TABLE `printer`
  ADD PRIMARY KEY (`id_printer`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `id_comp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `printer`
--
ALTER TABLE `printer`
  MODIFY `id_printer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
