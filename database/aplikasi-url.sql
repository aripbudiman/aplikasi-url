-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2021 pada 17.32
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
-- Struktur dari tabel `cashflow`
--

CREATE TABLE `cashflow` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tabungan_masuk` int(11) NOT NULL,
  `tabungan_keluar` int(11) NOT NULL,
  `saldo_akhir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cashflow`
--

INSERT INTO `cashflow` (`no`, `nama`, `tabungan_masuk`, `tabungan_keluar`, `saldo_akhir`) VALUES
(1, 'arip', 5000, 2000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `majelis`
--

CREATE TABLE `majelis` (
  `no` int(11) NOT NULL,
  `nama_majelis` varchar(150) NOT NULL,
  `desa` varchar(150) NOT NULL,
  `jadwal_layanan` varchar(150) NOT NULL,
  `jumlah_anggota` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `majelis`
--

INSERT INTO `majelis` (`no`, `nama_majelis`, `desa`, `jadwal_layanan`, `jumlah_anggota`) VALUES
(1, 'KBB_BURUNG MURAI', 'CIHANJUANG RAHAYU', 'SENIN', 12),
(2, 'KBB_BURUNG ANIS', 'CIHANJUANG RAHAYU', 'SENIN', 23),
(4, 'KBB_BUNGA HEBRAS', 'MALAYSIA', 'SENIN', 21);

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
(19, 'Sulaeman', 'Garut2', 'TPL');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cashflow`
--
ALTER TABLE `cashflow`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `majelis`
--
ALTER TABLE `majelis`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `nama_majelis` (`nama_majelis`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cashflow`
--
ALTER TABLE `cashflow`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `majelis`
--
ALTER TABLE `majelis`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
