-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2022 pada 09.01
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasiswa-db`
--
CREATE DATABASE IF NOT EXISTS `datasiswa-db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `datasiswa-db`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_login`
--

CREATE TABLE `db_login` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_login`
--

INSERT INTO `db_login` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_siswa`
--

CREATE TABLE `db_siswa` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_siswa`
--

INSERT INTO `db_siswa` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`) VALUES
(1, 'ADE ANDRIANTI', 'DESA MAKMUR', '2004-04-28'),
(2, 'AGIL APDIANSYAH', 'Suka Jadi', '2003-11-21'),
(3, 'AGUS ARIANDA HARAHAP', 'Sidodadi', '2004-08-06'),
(4, 'ALIFFIA SALWADINI', 'Mangga Dua', '2004-11-13'),
(5, 'Anisa Vincensia Manalu', 'Sialang Buah', '2004-06-14'),
(6, 'CINDY WANDIA', 'SENTANG', '2004-01-19'),
(7, 'DAHLIA MARPAUNG', 'Porsea', '2003-05-26'),
(8, 'Deana Azhalia', 'Bogak Besar', '2004-10-12'),
(9, 'DINA AMANDA', 'Tanah Besih', '2004-07-14'),
(10, 'Fahrol Rozi', 'Pem. Kuala', '2000-10-13'),
(11, 'FITRI ANASTI RAMBE', 'Lubuk Cengal', '2004-03-14'),
(12, 'GUSTI FIRMANSYAH', 'Mangga Dua', '2004-08-16'),
(13, 'IHFAN', 'PEMATANG PASIR', '2003-09-07'),
(14, 'ILHAM', 'Cibaliung', '2003-05-25'),
(15, 'JULIANNO R.M SIMBOLON', 'Pekan Sialang Buah', '2002-07-23'),
(16, 'LAMBOK BOXSER NABABAN', 'Sialang Buah', '2003-10-19'),
(17, 'M. RANDY SYAHPUTRA', 'Liberia ', '2004-09-05'),
(18, 'MAWAR CHAIRANI MELATI', 'Perbaungan ', '2004-06-23'),
(19, 'MHD. HAMIDUMMAJID\r\nSYUHADA', 'Sialang Buah ', '2004-06-05'),
(20, 'Muhammad Arifin Ilham', 'Medan ', '2004-06-06'),
(21, 'NOFRI ULI ARTA HASIBUAN', 'Makmur', '2004-07-23'),
(22, 'NUR AZIZAH', 'Kedai Durian', '2004-03-12'),
(23, 'NURSAPTIA', 'SENTANG', '2003-10-24'),
(24, 'Palentino Simanjorang', 'Pekan Sialang Buah', '2004-02-14'),
(25, 'PUTRI KHAIRUNNISA ', 'PEM. SETRAK ', '2003-06-30'),
(26, 'RANI ANTIKA', 'SIALANG BUAH', '2004-02-22'),
(27, 'REZEKY ADEK SIMANJUNTAK', 'SIALANG BUAH', '2003-08-04'),
(28, 'SALSA NABILA', 'Pematang Setrak', '2004-12-01'),
(29, 'SANDY DONNY TAMPUBOLON', 'Bogak Besar', '2004-04-27'),
(30, 'SERLI AGUSTIN', 'DESA MAKMUR', '2004-08-13'),
(31, 'Siti Nurhalizah Simbolon', 'Pekan Sialang Buah', '2004-08-23'),
(32, 'Syahmi Ali ', 'Bogak Besar', '2003-09-29'),
(33, 'Wahyu Firmansyah', 'Sentang', '2003-09-29'),
(34, 'ZAHARA ARDILA', 'PASAR BARU', '2004-04-03'),
(61, 'asas', 'asassa', '2022-01-03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_login`
--
ALTER TABLE `db_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_siswa`
--
ALTER TABLE `db_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_login`
--
ALTER TABLE `db_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `db_siswa`
--
ALTER TABLE `db_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
