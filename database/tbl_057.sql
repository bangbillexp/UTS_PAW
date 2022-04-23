-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2022 pada 05.54
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_057`
--

CREATE TABLE `tbl_057` (
  `ID` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `umur` int(2) NOT NULL,
  `hobi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_057`
--

INSERT INTO `tbl_057` (`ID`, `nama`, `umur`, `hobi`) VALUES
(17, 'INDRIYANTO', 20, 'BALAPAN'),
(18, 'PUTRI', 22, 'MENYANYI'),
(19, 'ALEX', 26, 'BERENANG'),
(20, 'BILLY MORGEN ', 19, 'MELUKIS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_057`
--
ALTER TABLE `tbl_057`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_057`
--
ALTER TABLE `tbl_057`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
