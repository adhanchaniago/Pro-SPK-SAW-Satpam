-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Mei 2020 pada 06.50
-- Versi Server: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_saw_satpam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE IF NOT EXISTS `tb_kriteria` (
  `kriteria_id` int(11) NOT NULL,
  `peserta_id` int(11) NOT NULL,
  `kriteria_1` float NOT NULL,
  `kriteria_2` float NOT NULL,
  `kriteria_3` float NOT NULL,
  `kriteria_4` float NOT NULL,
  `kriteria_5` float NOT NULL,
  `kriteria_6` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`kriteria_id`, `peserta_id`, `kriteria_1`, `kriteria_2`, `kriteria_3`, `kriteria_4`, `kriteria_5`, `kriteria_6`) VALUES
(20, 29, 0.4, 1, 1, 0.5, 0.2, 1),
(26, 35, 0.2, 1, 1, 1, 0.2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE IF NOT EXISTS `tb_peserta` (
  `peserta_id` int(11) NOT NULL,
  `peserta_nama` varchar(255) NOT NULL,
  `peserta_jenis_kelamin` varchar(255) NOT NULL,
  `peserta_tmp_tgl_lahir` varchar(255) NOT NULL,
  `peserta_agama` varchar(255) NOT NULL,
  `peserta_alamat` varchar(255) NOT NULL,
  `peserta_no_hp` varchar(255) NOT NULL,
  `peserta_foto` varchar(255) NOT NULL,
  `peserta_berkas` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_peserta`
--

INSERT INTO `tb_peserta` (`peserta_id`, `peserta_nama`, `peserta_jenis_kelamin`, `peserta_tmp_tgl_lahir`, `peserta_agama`, `peserta_alamat`, `peserta_no_hp`, `peserta_foto`, `peserta_berkas`) VALUES
(29, 'Egova Riva Gustino', 'Laki-Laki', 'Bukittinggi/1990-12-08', 'Islam', 'Padang', '0819274321', '20200105062134.png', '20200105062134.pdf'),
(35, 'Riva Gustino', 'Laki-Laki', 'Bukittinggi/1996-12-08', 'Islam', 'Padang', '08192312', '20200105063023.png', '20200105063023.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_nama` varchar(255) NOT NULL,
  `user_level` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_username`, `user_password`, `user_nama`, `user_level`) VALUES
(1, 'Admin', 'Admin', 'Administrator', 1),
(2, 'Pimpinan', 'Pimpinan', 'Pimpinan', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`kriteria_id`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`peserta_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `kriteria_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `peserta_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
