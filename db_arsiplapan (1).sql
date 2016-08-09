-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Agu 2016 pada 04.43
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsiplapan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `ID_ARSIP` int(11) NOT NULL,
  `NO_SURAT` varchar(50) NOT NULL,
  `JUDUL` varchar(50) NOT NULL,
  `ID_JENIS_ARSIP` int(11) NOT NULL,
  `TANGGAL` date NOT NULL,
  `ISI` varchar(50) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsip`
--

INSERT INTO `arsip` (`ID_ARSIP`, `NO_SURAT`, `JUDUL`, `ID_JENIS_ARSIP`, `TANGGAL`, `ISI`, `Keterangan`) VALUES
(38, '137', 'Pengangkatan jabatan teknisi litkayasa', 7, '2012-12-06', '1982757a81934bee5e.jpg', 'Ida Siti Khodijah'),
(39, '137', 'Pengangkatan jabatan teknisi litkayasa', 7, '2012-12-06', '1336057a819867f191.jpg', 'Kepada Budi Tangani'),
(40, '565/06/2012/ROUTE', 'Keputusan Kepala LAPAN tentang Pengangkatan', 7, '2012-06-22', '221757a81a3f3b9be.jpg', 'kepada kepala pustekbang'),
(41, '149', 'Pengangkatan jabatan teknisi litkayasa', 7, '2012-07-16', '1021057a81dcfede1c.jpg', 'kepada Suharja'),
(42, '629/07/2012/Roum', 'Penyampaian Penetapan Angka Kredit Jabatan Teknisi', 7, '2012-07-23', '190757a81e9f9b939.jpg', 'kepada kepala pustekbang'),
(43, '162/09/2012/PTP', 'Permohonan Penilaian Angka Kredit', 7, '2012-09-03', '2616057a81f02a5042.jpg', 'Kepada kepala biro umum LAPAN'),
(44, '193/11/2012/PTP', 'Permohonan Menduduki Jabatan Fungsional Teknisi Li', 7, '2012-09-13', '2116157a81f4b864ba.jpg', 'Kepada kepala biro umum LAPAN'),
(45, '138/11/2012/PTP', 'Penilaian Karya Tulis', 7, '2012-09-29', '2462257a81fa878b36.jpg', 'kepada kepala sub bag TU. Minjabfung'),
(46, '138/11/2012/PTP', 'Penilaian Karya Tulis', 7, '2012-09-29', '2100157a81fa8ea3b9.jpg', 'kepada kepala sub bag TU. Minjabfung'),
(47, '207/11/2012/PTP', 'Permohonan Menduduki Jabatan Fungsional Teknisi Li', 7, '2012-12-09', '2356657a81ff0397e6.jpg', 'Kepada kepala biro umum LAPAN'),
(48, '223/12/2012/PTP', 'Permohonan Menduduki Jabatan Fungsional Teknisi Li', 7, '2012-12-26', '977557a8202ab6d28.jpg', 'Kepada kepala biro umum LAPAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_arsip`
--

CREATE TABLE `jenis_arsip` (
  `id_jenis_arsip` int(11) NOT NULL,
  `jenis_arsip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_arsip`
--

INSERT INTO `jenis_arsip` (`id_jenis_arsip`, `jenis_arsip`) VALUES
(1, 'Dokumen abadi'),
(2, 'Surat Perjanjian/Keuangan'),
(3, 'Surat Kantor/Dinas/SK'),
(4, 'Undangan Rapat'),
(5, 'Koran'),
(6, 'Laporan'),
(7, 'Takah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_PEG` varchar(50) NOT NULL,
  `NAMA_PEG` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `KET` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
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
  MODIFY `ID_ARSIP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `jenis_arsip`
--
ALTER TABLE `jenis_arsip`
  MODIFY `id_jenis_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
