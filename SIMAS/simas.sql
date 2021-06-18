-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 03:56 PM
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
-- Database: `simas`
--
CREATE DATABASE IF NOT EXISTS `simas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `simas`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_aduan`
--

DROP TABLE IF EXISTS `tb_aduan`;
CREATE TABLE `tb_aduan` (
  `id_masy` int(10) NOT NULL,
  `ktp_masy` varchar(10) DEFAULT NULL,
  `nama_masy` varchar(50) DEFAULT NULL,
  `agama_masy` varchar(10) DEFAULT NULL,
  `tgllapor_masy` varchar(20) DEFAULT NULL,
  `jk_masy` varchar(10) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `email_masy` varchar(50) DEFAULT NULL,
  `notlp_masy` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aduan`
--

INSERT INTO `tb_aduan` (`id_masy`, `ktp_masy`, `nama_masy`, `agama_masy`, `tgllapor_masy`, `jk_masy`, `alamat`, `email_masy`, `notlp_masy`) VALUES
(1, '0101020201', 'Wayan Agus Wirayasa', 'Hindu', '1992-08-03', 'Laki', 'Jl. Dangin Bingin Sading Kangin', 'wira@gmail.com', '081999675884'),
(3, '0101020202', 'Andi Siswanto', 'Muslim', '1993-04-09', 'Laki', 'Jl. Dauh Tukad Bilok', 'andis@gmail.com', '081345445675'),
(8, '90989132', 'asalksdjlaks', 'Muslim', '2021-06-10', 'Laki', 'asdjkasjdk', 'kori@gasnd.com', '0812312412');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aduan2`
--

DROP TABLE IF EXISTS `tb_aduan2`;
CREATE TABLE `tb_aduan2` (
  `id_mhs` int(10) NOT NULL,
  `ktp_mhs` varchar(10) DEFAULT NULL,
  `nim_mhs` varchar(10) DEFAULT NULL,
  `nama_mhs` varchar(50) DEFAULT NULL,
  `tgllahir_mhs` varchar(20) DEFAULT NULL,
  `tmplahir_mhs` varchar(20) DEFAULT NULL,
  `agama_mhs` varchar(10) DEFAULT NULL,
  `kwn_mhs` varchar(10) DEFAULT NULL,
  `jk_mhs` varchar(10) DEFAULT NULL,
  `alamat_mhs` varchar(200) DEFAULT NULL,
  `email_mhs` varchar(50) DEFAULT NULL,
  `notlp_mhs` varchar(15) DEFAULT NULL,
  `smak_mhs` varchar(50) DEFAULT NULL,
  `almtsmak_mhs` varchar(100) DEFAULT NULL,
  `llssmak_mhs` varchar(10) DEFAULT NULL,
  `ortu_mhs` varchar(50) DEFAULT NULL,
  `tlportu_mhs` varchar(15) DEFAULT NULL,
  `almtortu_mhs` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aduan2`
--

INSERT INTO `tb_aduan2` (`id_mhs`, `ktp_mhs`, `nim_mhs`, `nama_mhs`, `tgllahir_mhs`, `tmplahir_mhs`, `agama_mhs`, `kwn_mhs`, `jk_mhs`, `alamat_mhs`, `email_mhs`, `notlp_mhs`, `smak_mhs`, `almtsmak_mhs`, `llssmak_mhs`, `ortu_mhs`, `tlportu_mhs`, `almtortu_mhs`) VALUES
(1, '0404010103', '2019046001', 'Agus Wirayasa', '1993-03-01', 'Tabanan', 'Hindu', 'Indonesia', 'Laki', 'Jl. Dangin Bingin Sading', 'wirayasa@gmail.com', '081333444333', 'SMAN 2 Denpasar', 'Jl. Sudirman Denpasar', '2010', 'Resti Ketut', '084333929123', 'Jl. Raya Baturiti Tabanan'),
(2, '0404031102', '2019046002', 'Made Bagus Indra', '1999-02-02', 'Singaraja', 'hindu', 'Indonesia', 'Laki', 'Jl. Patih Jelantik IIIC', 'indrabagus@gmail.com', '081345445675', 'SMAN 1 Singaraja', 'Jl. Ahmad Yani Utara Singaraja', '2011', 'Ni Made Surtiningsih', '082334556665', 'Jl. Dangin Peken SIngaraja');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`) VALUES
(1, 'wira', '$2y$10$11ozkSKlDUurVR2e3bvdGurGWv2uqrxClGApj8t0pBnnE9ULWxNcy'),
(3, 'administrator', '$2y$10$BSdwXZrvkYvxaTBhbzhMleLfAi7PzoLOLD8Z9IuoB.UZ.lpcsjf42'),
(4, 'anwar', '$2y$10$XmYEYoy.60U30A9e9gqv1uqbyvz7M5u20z/OdHhdIcofMh9yx06.G'),
(9, 'admin', '$2y$10$NX3tLc7HUnyveoRcS7BpyewgA8y6LYLNv1pSPHV0GxUMo1bSocrs6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aduan`
--
ALTER TABLE `tb_aduan`
  ADD PRIMARY KEY (`id_masy`);

--
-- Indexes for table `tb_aduan2`
--
ALTER TABLE `tb_aduan2`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aduan`
--
ALTER TABLE `tb_aduan`
  MODIFY `id_masy` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_aduan2`
--
ALTER TABLE `tb_aduan2`
  MODIFY `id_mhs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
