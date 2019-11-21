-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2019 pada 17.51
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impulse`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `praktikan`
--

CREATE TABLE `praktikan` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `tempatLahir` varchar(50) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kontak` varchar(100) DEFAULT NULL,
  `pertanyaanKeamanan` varchar(255) DEFAULT NULL,
  `jawabanKeamanan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `praktikan`
--

INSERT INTO `praktikan` (`nim`, `nama`, `password`, `kelas`, `tempatLahir`, `tanggalLahir`, `gender`, `agama`, `alamat`, `kontak`, `pertanyaanKeamanan`, `jawabanKeamanan`) VALUES
('1301174280', 'Dionisio Febrianto', '$2y$10$d22KyCRUZG27MSsQ6bHPoeYj6O/DQhMi0p1gZGNm6bDQnlLnt3P2i', 'IF41-10', 'KAB. KARAWANG', '2019-11-06', 'Perempuan', 'Islam', 'P.Jomin permai D6', '089699076774', 'Siapa kamu?', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `praktikan`
--
ALTER TABLE `praktikan`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
