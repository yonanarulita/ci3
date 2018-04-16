-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Apr 2018 pada 17.26
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nim` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `nim`, `alamat`) VALUES
(1, 'Yona', '1631710085', 'Jl Lawang'),
(2, 'Dita', '1631710000', 'Jl Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `judul` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tanggal` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `author` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `konten` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `tanggal`, `author`, `konten`, `image`) VALUES
(1, 'Conversation', '09-04-2018', 'Elvano', 'Konten ke 1', '1.jpg'),
(2, 'Reading', '09-04-2018', 'Elvano', 'Konten ke 2', '2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `konten` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `judul`, `tgl`, `author`, `konten`, `img`) VALUES
(1, 'I\'m Gangnam Beauty', '2018-04-21', 'Yona Narulita', 'I\'m Gangnam Beauty adalah sebuah komik yang menceritakan kehidupan', 'kyungsuk.jpg'),
(2, 'Love Revolution', '16-04-2018', 'Yoo Naa', 'Ini adalah komik Love Revolution', 'kaengaram.jpg'),
(3, 'Moon', '17-04-2018', 'YN', 'Ini adalah komik Moon', 'haha.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
