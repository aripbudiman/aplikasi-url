-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2021 pada 02.46
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi-url`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `no` int(8) NOT NULL,
  `nama_petugas` varchar(150) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jabatan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`no`, `nama_petugas`, `alamat`, `jabatan`) VALUES
(1, 'Sulaeman Afif', 'Garut', 'TPL'),
(3, 'Bani Nuzul Ramadhan', 'Lembang', 'TPL'),
(4, 'Beni Iskandar', 'Bandung Barat', 'TPL'),
(5, 'Hendri Herdiansyah Sugiarto', 'Cimahi', 'TPL'),
(6, 'Mohamad Saeful Ramdan', 'Cianjur', 'TPL'),
(7, 'Rian Andriani Aziz', 'Ciamis', 'TPL'),
(15, 'Tendi Agus Maulana', 'Garut', 'TPL'),
(16, 'steven ac', 'Ciamis', 'TPL'),
(18, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
