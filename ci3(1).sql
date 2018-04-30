-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Apr 2018 pada 16.15
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
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `post_date` datetime DEFAULT '0000-00-00 00:00:00',
  `cat_id` int(11) NOT NULL,
  `post_title` varchar(128) NOT NULL,
  `post_slug` varchar(128) NOT NULL,
  `post_content` text NOT NULL,
  `post_thumbnail` varchar(128) NOT NULL,
  `post_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='utf8_general_ci';

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`id`, `post_date`, `cat_id`, `post_title`, `post_slug`, `post_content`, `post_thumbnail`, `post_status`, `date_created`) VALUES
(1, '2006-03-13 07:22:19', 1, 'Bear', 'Beruang-Hewan-Karnivora', 'Ini adalah beruang. Termasuk dalam kategori Karnivora', 'bear.png', 0, '2006-12-11 00:33:02'),
(2, '1997-03-24 14:12:10', 2, 'Cow', 'Sapi-Hewan-Herbivora', 'Ini adalah sapi. Termasuk dalam kategori hewan Herbivora.', 'cow.png', 1, '2009-12-14 22:56:40'),
(3, '1984-10-09 08:18:15', 1, 'Crocodile', 'Buaya-Hewan-Karnivora', 'Ini adalah buaya. Termasuk dalam kategori hewan Karnivora.', 'crocodile.png', 1, '1988-05-26 07:22:37'),
(4, '2005-03-04 11:27:57', 1, 'Dog', 'Anjing-Hewan-Karnivora', 'Ini adalah anjing. Termasuk dalam kategori hewan Karnivora.', 'dog.png', 1, '2002-07-18 17:11:43'),
(5, '1970-05-28 00:22:07', 2, 'Rabbit', 'Kelinci-Hewan-Herbivora', 'Ini adalah kelinci. Termasuk dalam kategori hewan Herbivora.', 'rabbit.png', 0, '1989-04-15 08:34:55'),
(6, '1979-07-23 21:28:53', 3, 'Pig', 'Babi-Hewan-Omnivora', 'Ini adalah Babi. Termasuk dalam kategori Hewan Omnivora.', 'pig.png', 1, '1971-12-14 13:50:17'),
(7, '2009-03-30 11:06:20', 2, 'Buffalo', 'Kerbau-Hewan-Herbivora', 'Ini adalah Kerbau. Termasuk dalam kategori hewan Herbivora.', 'buffalo.png', 1, '2017-12-02 05:04:29'),
(8, '1979-12-04 23:24:26', 3, 'Chicken', 'Ayam-Hewan-Omnivora', 'Ini adalah Ayam. Termasuk dalam kategori Hewan Omnivora.', 'chicken.png', 1, '1994-05-07 02:31:24'),
(9, '1978-02-08 09:21:47', 2, 'Zebra', 'Zebra-Hewan-Herbivora', 'Ini adalah Zebra. Termasuk dalam kategori Hewan Herbivora.', 'zebra.png', 0, '2012-05-29 14:50:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL DEFAULT '',
  `cat_description` varchar(255) NOT NULL DEFAULT '',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_description`, `date_created`) VALUES
(1, 'Hewan Karnivora', 'Ini adalah kategori artikel tentang hewan karnivora yaitu hewan pemakan daging. Hewan jenis ini memangsa hewan lain kemudian menjadikan sebagai makanan dan sumber energi. Hewan karnivora memiliki ciri-ciri gigi taring yang tajam dan cakar yang kuat', '2006-10-11 02:12:42'),
(2, 'Hewan Herbivora', 'Ini adalah kategori hewan herbivora. Yaitu golongan jean pemakan tumbuhan saja. Memiliki ciri-ciri hanya memiliki gigi geraham sebagai alat mencerna makanan. Dalam suatu ekosistem herbivora dikenal sebagai konsumen pertama.', '1983-02-19 16:13:41'),
(3, 'Hewan Omnivora', 'Ini adalah kategori hewan omnivora yaitu hewan yang dapat digolongkan sebagai pemakan tumbuhan dan pemakan daging, atau bisa disebut sebagai pemakan segala. Ciri-cirinya memiliki gigi geraham, taring dan seri.', '2005-01-12 03:48:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_slug` (`post_slug`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
