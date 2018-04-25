-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Apr 2018 pada 17.20
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
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(5) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `konten` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `tanggal`, `author`, `konten`, `image`) VALUES
(1, 'I\'m Gangnam Beauty', '2018-04-21', 'KMK', 'Ini adalah Gangnam Beauty', 'gangnam.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `post_date` datetime DEFAULT '0000-00-00 00:00:00',
  `post_title` varchar(128) NOT NULL,
  `post_slug` varchar(128) NOT NULL,
  `post_content` text NOT NULL,
  `post_thumbnail` varchar(128) NOT NULL,
  `post_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='utf8_general_ci';

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`id`, `post_date`, `post_title`, `post_slug`, `post_content`, `post_thumbnail`, `post_status`, `date_created`) VALUES
(3, '2018-04-25 16:55:20', 'Kyungsuk', 'kyungsuk', 'Ini adalah cuplikan cerita tentang webtoon I\'am Gangnam Beauty, yang menceritakan tentang kehidupan sehari-hari', 'gangnam1.jpg', 1, '2018-04-25 16:55:20'),
(4, '2018-04-25 17:04:14', 'Naver Webtoon', 'naver-webtoon', 'Ini adalah spoiler webtoon terbaru di korea, silahkan lihat lebih lanjut di naver', '00-08-30-images.jpg', 1, '2018-04-25 17:04:14'),
(5, '2018-04-25 17:05:10', 'Love Revolution', 'love-revolution', 'Ini adalah cerita webtoon dengan banyak episode yang ditampilkan. Beserta soundtrack yang dapat kamu download di Naver Music', 'kaengaram.jpg', 1, '2018-04-25 17:05:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_slug` (`post_slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
