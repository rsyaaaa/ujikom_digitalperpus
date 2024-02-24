-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2024 at 08:01 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikomperpus1`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `tahun_terbit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kategori`, `judul`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(60, 13, 'Nelayan yang terdampar', 'Handri Sumirjo', 'Erlangga', 2000),
(61, 17, 'Matematika Kelas 12', 'Nadim Makarim', 'Gramedia', 2015),
(63, 20, 'Komputer Worm 1', 'Achmad Darmal', 'Jasakom', 2006);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`id_kategori`, `nama_kategori`) VALUES
(13, 'Novel'),
(16, 'Mangga'),
(17, 'Buku Paket'),
(19, 'Dongeng'),
(20, 'Karya Ilmiah'),
(21, 'Biografi');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `status` enum('DIPINJAM','DIKEMBALIKAN','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_user`, `id_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status`) VALUES
(1, 11, 61, '2024-01-03', '2024-01-04', 'DIKEMBALIKAN'),
(0, 4, 63, '2024-02-07', NULL, 'DIPINJAM'),
(0, 12, 61, '2024-02-01', NULL, 'DIPINJAM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `user_level` enum('Admin','Petugas','Peminjam','') NOT NULL,
  `nomor_telepon` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `user_level`, `nomor_telepon`) VALUES
(2, 'rasya', 'd41d8cd98f00b204e9800998ecf8427e', 'rasya@gmail.com', 'rasyaaa', 'jonggol', 'Admin', 0),
(3, 'kertas', '099f63c38b2ead3cdae490737ca31760', 'kertas@gmail.com', 'kertasss', 'jonggol', 'Admin', 0),
(4, 'batu', 'eee0f1d32f916b182f65eafab2931060', 'batu@gmail.com', 'Haikal Muhsin', 'Jonggol', 'Petugas', 89787),
(5, 'mobil', 'd2c75a26973a1888f241125717b166cf', 'mobil@gmail.com', 'mobil', 'jonggol', 'Peminjam', 8999882),
(6, 'rda', '11d5ffbac1cdc077e2f5aeb0b1fdc4f9', 'rda@gmail.com', 'rda', 'cibubur', 'Peminjam', 89997),
(7, 'dendi', '9d47cb51d31cc4adbdaa29cde5070c7c', 'dendi@gmail.com', 'dendi', 'bumi', 'Peminjam', 9888),
(10, 'akmal', '272874d450b7f8381b1174133ac62b40', 'akmal@gmail.com', 'akmallll', 'jonggol', 'Admin', 283838),
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'rsyaaa@gmail.com', 'Rsyaaaa', 'jonggol', 'Admin', 93920302),
(12, 'gavra', 'a65688721cf5d5070ac3c2bd3eeb3bf7', 'gavra@gmail.com', 'Gavra Arnawa', 'Cileungsi', 'Peminjam', 234234234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD UNIQUE KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD KEY `peminjaman_ibfk_1` (`id_buku`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_buku` (`id_kategori`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
