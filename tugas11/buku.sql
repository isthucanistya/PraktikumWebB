-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 06 Mei 2020 pada 15.06
-- Versi Server: 5.7.17-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pratikum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `no_isbn` varchar(13) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `stok` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`no_isbn`, `nama`, `penerbit`, `stok`) VALUES
('9786020639512', 'Selena', 'Gramedia Pustaka Utama', '10'),
('9786022917199', 'Lockdown 309 Tahun', 'Bentang Pustaka', '1'),
('9786024813680', 'Kanker Biografi Suatu Penyakit', 'Kepustakaan Populer Gramedia', '7'),
('9786237211594', 'Trouvaille', 'Loveable', '5'),
('9786237351283', 'BONE', 'Haru', '2'),
('9786237439363', 'Raja Untuk Ratu', 'Coconut Books', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`no_isbn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
