-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2018 at 04:52 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bahasa`
--

CREATE TABLE `tbl_bahasa` (
  `idbahasa` int(11) NOT NULL,
  `namabahasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bahasa`
--

INSERT INTO `tbl_bahasa` (`idbahasa`, `namabahasa`) VALUES
(1, 'Indonesia'),
(2, 'Inggris'),
(3, 'Francis'),
(4, 'Brazil'),
(5, 'Sunda'),
(6, 'Jawa'),
(8, 'China');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(11) NOT NULL,
  `idbuku` varchar(6) NOT NULL,
  `idbahasa` int(11) NOT NULL,
  `judulbuku` varchar(256) NOT NULL,
  `edisi` varchar(256) NOT NULL,
  `penulis` varchar(256) NOT NULL,
  `editor` varchar(255) NOT NULL,
  `subyek` varchar(256) NOT NULL,
  `isbn` varchar(256) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `kota_terbit` text NOT NULL,
  `penerbit` varchar(256) NOT NULL,
  `thn_terbit` date NOT NULL,
  `no_klasifikasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `idbuku`, `idbahasa`, `judulbuku`, `edisi`, `penulis`, `editor`, `subyek`, `isbn`, `jumlah`, `sampul`, `jumlah_halaman`, `kota_terbit`, `penerbit`, `thn_terbit`, `no_klasifikasi`) VALUES
(1, 'B-001', 1, 'Anjas wicaksana', '2017', 'anjas', 'wicaksana', 'subyek', '2932', 2, '20180102012836_tokyo_ghoul_tokyo_ghoul_39622255_500_324.jpg', 2, 'bogor', 'gramedia', '2018-02-01', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_majalah`
--

CREATE TABLE `tbl_majalah` (
  `id` int(11) NOT NULL,
  `idmajalah` varchar(20) NOT NULL,
  `judulmajalah` varchar(255) NOT NULL,
  `volume` varchar(11) NOT NULL,
  `no` int(11) NOT NULL,
  `tahun_terbit` varchar(30) NOT NULL,
  `kota_terbit` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `issn` varchar(15) NOT NULL,
  `idbahasa` varchar(11) NOT NULL,
  `ketersediaan` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `sampul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_majalah`
--

INSERT INTO `tbl_majalah` (`id`, `idmajalah`, `judulmajalah`, `volume`, `no`, `tahun_terbit`, `kota_terbit`, `penerbit`, `issn`, `idbahasa`, `ketersediaan`, `catatan`, `sampul`) VALUES
(3, '1', '1', '1', 1, '0001-11-11', '1', '1', '1', '1', 1, '1', 'index.html');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('ADMIN','USER') NOT NULL DEFAULT 'USER',
  `__createdby` varchar(256) NOT NULL,
  `__createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `__updatedby` varchar(256) NOT NULL,
  `__updateddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `name`, `password`, `level`, `__createdby`, `__createddate`, `__updatedby`, `__updateddate`) VALUES
(1, 'admin', 'Administrator', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', 'SYS_ADMIN', '2017-09-09 06:48:31', '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bahasa`
--
ALTER TABLE `tbl_bahasa`
  ADD PRIMARY KEY (`idbahasa`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_majalah`
--
ALTER TABLE `tbl_majalah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bahasa`
--
ALTER TABLE `tbl_bahasa`
  MODIFY `idbahasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_majalah`
--
ALTER TABLE `tbl_majalah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
