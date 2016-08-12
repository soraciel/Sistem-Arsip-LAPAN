-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2016 at 04:45 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsiplapan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE IF NOT EXISTS `arsip` (
  `ID_ARSIP` int(11) NOT NULL,
  `NO_SURAT` varchar(50) NOT NULL,
  `JUDUL` varchar(50) NOT NULL,
  `ID_JENIS_ARSIP` int(11) NOT NULL,
  `TANGGAL` date NOT NULL,
  `ISI` varchar(50) NOT NULL,
  `Keterangan` varchar(100) NOT NULL,
  `TANGGAL_INPUT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Loker` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`ID_ARSIP`, `NO_SURAT`, `JUDUL`, `ID_JENIS_ARSIP`, `TANGGAL`, `ISI`, `Keterangan`, `TANGGAL_INPUT`, `Loker`) VALUES
(38, '137', 'Pengangkatan jabatan teknisi litkayasa', 7, '2012-12-06', '1982757a81934bee5e.jpg', 'Ida Siti Khodijah', '2016-08-12 02:30:31', ''),
(39, '137', 'Pengangkatan jabatan teknisi litkayasa', 7, '2012-12-06', '1336057a819867f191.jpg', 'Kepada Budi Tangani', '2016-08-12 02:30:31', ''),
(40, '565/06/2012/ROUTE', 'Keputusan Kepala LAPAN tentang Pengangkatan', 7, '2012-06-22', '221757a81a3f3b9be.jpg', 'kepada kepala pustekbang', '2016-08-12 02:30:31', ''),
(41, '149', 'Pengangkatan jabatan teknisi litkayasa', 7, '2012-07-16', '1021057a81dcfede1c.jpg', 'kepada Suharja', '2016-08-12 02:30:31', ''),
(42, '629/07/2012/Roum', 'Penyampaian Penetapan Angka Kredit Jabatan Teknisi', 7, '2012-07-23', '190757a81e9f9b939.jpg', 'kepada kepala pustekbang', '2016-08-12 02:30:31', ''),
(43, '162/09/2012/PTP', 'Permohonan Penilaian Angka Kredit', 7, '2012-09-03', '2616057a81f02a5042.jpg', 'Kepada kepala biro umum LAPAN', '2016-08-12 02:30:31', ''),
(44, '193/11/2012/PTP', 'Permohonan Menduduki Jabatan Fungsional Teknisi Li', 7, '2012-09-13', '2116157a81f4b864ba.jpg', 'Kepada kepala biro umum LAPAN', '2016-08-12 02:30:31', ''),
(45, '138/11/2012/PTP', 'Penilaian Karya Tulis', 7, '2012-09-29', '2462257a81fa878b36.jpg', 'kepada kepala sub bag TU. Minjabfung', '2016-08-12 02:30:31', ''),
(46, '138/11/2012/PTP', 'Penilaian Karya Tulis', 7, '2012-09-29', '2100157a81fa8ea3b9.jpg', 'kepada kepala sub bag TU. Minjabfung', '2016-08-12 02:30:31', ''),
(47, '207/11/2012/PTP', 'Permohonan Menduduki Jabatan Fungsional Teknisi Li', 7, '2012-12-09', '2356657a81ff0397e6.jpg', 'Kepada kepala biro umum LAPAN', '2016-08-12 02:30:31', ''),
(48, '223/12/2012/PTP', 'Permohonan Menduduki Jabatan Fungsional Teknisi Li', 7, '2012-12-26', '977557a8202ab6d28.jpg', 'Kepada kepala biro umum LAPAN', '2016-08-12 02:30:31', ''),
(50, 'aeda', 'qweqw', 8, '2016-08-09', '249557a9d6d936c47.PNG', 'jh', '2016-08-12 02:30:31', ''),
(51, '01293809128', 'Surat kertas', 6, '0000-00-00', '561657ad35917814a.png', 'klsdjla', '2016-08-12 02:33:53', ''),
(52, '739128379', 'Surat ', 1, '0000-00-00', '371257ad368e7e333.png', 'njnjn', '2016-08-12 02:38:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_arsip`
--

CREATE TABLE IF NOT EXISTS `jenis_arsip` (
  `id_jenis_arsip` int(11) NOT NULL,
  `jenis_arsip` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_arsip`
--

INSERT INTO `jenis_arsip` (`id_jenis_arsip`, `jenis_arsip`) VALUES
(1, 'Dokumen abadi'),
(2, 'Surat Perjanjian/Keuangan'),
(3, 'Surat Kantor/Dinas/SK'),
(4, 'Undangan Rapat'),
(5, 'Koran'),
(6, 'Laporan'),
(7, 'Takah'),
(8, 'Rahasia');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_PEG` varchar(50) NOT NULL,
  `NAMA_PEG` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `KET` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_PEG`, `NAMA_PEG`, `PASSWORD`, `KET`) VALUES
('003', 'Sarah Susanti', 'oiSarah003', 'User'),
('01', 'Budi Sutejo', 'Sutejo_Budi_01', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`ID_ARSIP`);

--
-- Indexes for table `jenis_arsip`
--
ALTER TABLE `jenis_arsip`
  ADD PRIMARY KEY (`id_jenis_arsip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_PEG`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `ID_ARSIP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `jenis_arsip`
--
ALTER TABLE `jenis_arsip`
  MODIFY `id_jenis_arsip` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
