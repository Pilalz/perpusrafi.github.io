-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 07:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_rafi`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `No_buku` varchar(6) NOT NULL,
  `JudulBuku` varchar(40) NOT NULL,
  `Pengarang` varchar(200) NOT NULL,
  `Penerbit` varchar(200) NOT NULL,
  `Tahun_terbit` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`No_buku`, `JudulBuku`, `Pengarang`, `Penerbit`, `Tahun_terbit`, `Status`) VALUES
('001', 'kuda perang', 'bagas', 'pt.dava assomethin', '2021-11-10', 'dipinjam'),
('002', 'sangkuriang yang meriang', 'lucky', 'pt.kepin sentosa', '2001-10-05', 'dipinjam'),
('003', 'sibuta dari goa malaikat', 'farhan rahmat', 'pt.rahmat sanjoyo', '2016-05-17', 'dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('bagas23', 'bagas23'),
('adam11', 'adam11');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `No_faktur` int(11) NOT NULL,
  `NIS` varchar(6) NOT NULL,
  `No_buku` varchar(6) NOT NULL,
  `Tanggal_pinjam` date NOT NULL,
  `Tanggal_kembali` date NOT NULL,
  `Tanggal_kembali_asli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`No_faktur`, `NIS`, `No_buku`, `Tanggal_pinjam`, `Tanggal_kembali`, `Tanggal_kembali_asli`) VALUES
(52355, '52323', 'gergr', '2021-11-07', '2021-11-16', '2021-12-01'),
(101092021, '112233', '000001', '2021-07-01', '2021-09-01', '2021-08-01'),
(201092021, '112244', '000002', '2021-08-01', '2021-09-01', '2021-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS` varchar(6) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `JenisKelamin` enum('L','P') NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `Nama`, `JenisKelamin`, `Alamat`) VALUES
('001', 'bagas31', 'L', 'bekasi utara'),
('002', 'adam', 'L', 'jakarta selatan'),
('003', 'lucky', 'L', 'bandung'),
('004', 'rachel', 'P', 'bekasi'),
('006', 'rafki', 'L', 'jakarta raya'),
('007', 'yolan santoso', 'L', 'jkt ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`No_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`No_faktur`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
