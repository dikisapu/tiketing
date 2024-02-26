-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2024 pada 18.18
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiketbus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `nomor_identitas` varchar(16) NOT NULL,
  `No_hp` varchar(12) NOT NULL,
  `kelasPenumpang` varchar(50) NOT NULL,
  `jadwal_keberangkatan` date NOT NULL,
  `jumlah_penumpang` varchar(25) NOT NULL,
  `jumlah_lansia` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `namaLengkap`, `nomor_identitas`, `No_hp`, `kelasPenumpang`, `jadwal_keberangkatan`, `jumlah_penumpang`, `jumlah_lansia`) VALUES
(1, 'Diki Santoso', '1801180118011801', '089527575681', 'ekonomi', '2024-02-01', '10', '1'),
(2, 'Elza Widya Sari', '180218021802', '089527575688', 'ekslusif', '2024-02-01', '10', '1'),
(3, 'dsfad', '1231892398', '9231923', 'Ekonomi', '2025-10-28', '1', '1'),
(4, 'Dini Pratiwi', 'diki', 'di', 'Ekonomi', '2024-10-28', '1', '1'),
(5, 'diki', '28182', '23123', 'Ekonomi', '2024-10-28', '1', '28'),
(6, 'asuu', 'mantab', '892388', 'Ekonomi', '2024-10-28', '2', '2'),
(7, 'asu', '213123', '123', 'Ekonomi', '2023-12-28', '10', '2'),
(8, 'mantab', 'esdf', 'sdf', 'Ekonomi', '2024-10-28', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
