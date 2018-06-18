-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jun 2018 pada 17.01
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
  `post_id` int(11) NOT NULL,
  `post_date` datetime DEFAULT '0000-00-00 00:00:00',
  `fk_cat_id` int(11) NOT NULL,
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

INSERT INTO `blogs` (`post_id`, `post_date`, `fk_cat_id`, `post_title`, `post_slug`, `post_content`, `post_thumbnail`, `post_status`, `date_created`) VALUES
(1, '2006-03-13 07:22:19', 2, 'Fancy Dress', 'Poisoning by unspecified analgesic and antipyretic', 'Because the more technicial term costime is regularly linked to the term \"fashion\"', '11.png', 0, '2006-12-11 00:33:02'),
(2, '1997-03-24 14:12:10', 1, 'Tony learned to read music', 'Baclofen\r\n', 'The written or printed signs representing vocal or instrumental sound', '', 1, '2009-12-14 22:56:40'),
(3, '1984-10-09 08:18:15', 1, 'Harmony', 'Western White Pine\r\n', 'Combined of form, harmony', '', 1, '1988-05-26 07:22:37'),
(4, '2005-03-04 11:27:57', 3, 'Tournament', 'Asoka', 'This was a game of shuttle diplomacy at which I had become adept', '19.jpg', 1, '2002-07-18 17:11:43'),
(5, '1970-05-28 00:22:07', 2, 'Gigi Hadid', 'Extrinsic asthma, unspecified\r\n', 'Gigi Hadid is model in Fashion Beauty', '', 0, '1989-04-15 08:34:55'),
(6, '1979-07-23 21:28:53', 2, 'Sewing Machine', 'Blisters, epidermal loss [second degree] of axilla\r\n', 'And the proliferation of retail outlets such as departement stores', '', 1, '1971-12-14 13:50:17'),
(7, '2009-03-30 11:06:20', 2, 'Fashion Trend', 'Visuospatial deficit\r\n', 'Fashion is a distinctive and often constant trend in the style in which a person dresses.', '16.jpg', 1, '2017-12-02 05:04:29'),
(8, '1979-12-04 23:24:26', 4, 'Sculpture', 'Trueblue - Blueberry 12x473ml\r\n', 'Application of human creative', '', 1, '1994-05-07 02:31:24'),
(9, '1978-02-08 09:21:47', 4, 'Visual', 'Muffin Mix - Banana Nut\r\n', 'Beauty or emotional power', '', 0, '2012-05-29 14:50:30'),
(10, '1983-05-08 23:30:15', 4, 'Artwork', 'Wine - Port Late Bottled Vintage\r\n', 'The visual arts', '', 1, '1980-12-25 10:10:58'),
(11, '1980-07-07 08:22:59', 2, 'Global Fashion', 'Sezary\'s disease, lymph nodes of inguinal region and lower limb\r\n', 'Most clothing was custom made. Handmade for individuals', '', 1, '1973-09-10 12:49:25'),
(12, '1974-06-21 14:02:37', 3, 'Mobile Legend', 'Swiss Chard\r\n', 'This game will make you stress forever', '', 0, '2006-07-12 00:47:22'),
(13, '1973-01-09 07:01:25', 8, 'Demi 5Kg', 'Crab - Back Fin Meat, Canned\r\n', 'There has been a surge in popularity internationally', '', 1, '2002-05-20 17:10:29'),
(14, '1993-12-10 05:34:49', 7, 'Gulp down', 'alice-whispered-that-its-done-by-everybody', 'We sat by the fire, drinking our coffee', '', 0, '2009-06-20 08:00:34'),
(15, '2014-03-28 22:58:45', 3, 'Match', 'i-said-what-for-she-boxed-the-queens', 'The team has not lost a game all season', '7.jpg', 1, '1999-04-14 17:39:43'),
(16, '2011-08-07 16:10:53', 5, 'Designer', 'alice-it-would-have-this-cat-removed-the', 'A person who produces paintings or drawings as a profession or hobby', '14.jpg', 1, '2005-11-27 04:22:47'),
(17, '1984-01-27 17:50:07', 10, 'Tint', 'ill-be-jury-said-cunning-old-fury-ill-try', 'Emits light or objects reflects', '', 1, '1984-03-23 19:34:31'),
(18, '1991-01-22 16:12:04', 4, 'Fine Art Artwork', 'this-did-not-like-the-right-height-to-rest-her', 'Producing works to be appreciated primarily', '', 1, '2001-04-04 17:24:47'),
(19, '2007-07-07 15:14:05', 2, 'At a Haute couture Fashion Show', 'alice-and-after-glaring-at-her-with-large', 'It is the prevailling styles in behaviour and the newest creations of designers', '17.jpg', 1, '1973-07-21 13:02:47'),
(20, '2014-10-12 03:59:38', 9, 'User generated content', 'queen-put-on-her-hand-and-made-believe-to-worry', 'Such as text posts or comments, digital photos or videos and data generated through all online interactions.', '5.jpg', 1, '2017-08-06 18:45:37'),
(21, '1982-01-06 13:27:48', 3, 'Valiant', 'please-mind-what-youre-talking-about-said', 'Manipulate situation typically in a way that is unfair ', '', 1, '2010-11-21 12:55:40'),
(22, '1983-04-26 03:47:29', 1, 'Expression', 'and-the-gryphon-went-on-growing-and-she-went-to', 'Vocal or instrumental sounds to both', '', 1, '2000-09-10 15:27:32'),
(23, '1995-01-27 16:14:31', 3, 'Amusement', 'duchesss-cook-she-carried-the-pepper-box-in', 'Rules and decided by skill, strength or luck', '', 1, '1994-04-22 17:55:11'),
(24, '2005-08-18 05:37:31', 7, 'Guzzle', 'heads-below-a-loud-crash-now-who-did', 'Take (a liquid) into the mouth and swallow', '13.png', 1, '1973-10-17 15:40:14'),
(25, '2000-01-19 20:22:50', 4, 'The art of the Renaissance', 'gryphon-the-squeaking-of-the-song-she-kept', 'He studied art', '', 1, '2015-02-26 15:46:26'),
(26, '2014-06-24 15:20:25', 3, 'Diversion', 'i-can-go-back-by-railway-she-said-this-she', 'A form of play or sport, especially a competitive one played according to rules and decided by skill', '6.jpg', 1, '1983-04-07 00:51:41'),
(27, '2014-12-20 09:31:05', 10, 'The lights changed color', 'imagine-her-surprise-when-the-white-rabbit-blew', 'The property possessed by an object of producing different sensations on the eye', '4.jpg', 1, '2009-01-13 13:46:35'),
(28, '1985-05-02 02:09:26', 10, 'Shade', 'alice-loudly-the-idea-of-the-others-took-the', 'Eye as a result of the way the object reflects', '', 1, '1996-07-11 19:23:06'),
(29, '1974-05-04 16:54:25', 2, 'Standard size', 'so-she-went-on-planning-to-herself-its-the', 'Standard sizes and sold at fixed prices', '', 1, '1994-04-11 10:54:30'),
(30, '1992-12-13 16:30:03', 2, 'Fashion Industry', 'the-kings-argument-was-that-she-never-knew-so', 'The notion of global fashion industry is a product of the modern age.', '', 1, '2010-10-07 22:22:22'),
(31, '2007-02-19 14:08:47', 4, 'What is art', 'it-the-mouse-to-tell-its-age-there-was', 'The various branches of creative activity, such as painting, music', '10.png', 1, '1990-01-25 20:59:20'),
(32, '1977-08-30 08:52:54', 3, 'Ku\'On', 'cheshire-cat-said-alice-shes-so', 'They were game for anything after the traumas on Monday.', '', 1, '2011-08-23 04:23:10'),
(33, '1989-04-02 04:05:37', 3, 'Recreation', 'lizard-who-seemed-to-alice-to-herself-because', 'Eager and willing to do something new', '', 1, '1999-04-13 05:27:50'),
(34, '2002-12-26 04:24:36', 5, 'Creatorr', 'duchess-an-invitation-from-the-time-at-the', 'A mural artist', '', 1, '1982-07-24 00:21:56'),
(35, '2001-04-21 23:19:17', 5, 'Producer', 'she-had-quite-a-long-sleep-youve-had-oh', 'A person who practices any of the various such as a sculptor', '', 0, '2010-12-16 11:15:17'),
(36, '1995-08-04 01:20:06', 5, 'Old Master', 'though-they-were-filled-with-cupboards-and', 'A surgeon who is an artist a mural artist', '', 1, '1988-12-02 03:11:22'),
(37, '2005-04-12 14:49:54', 6, 'Bread', 'alice-ventured-to-taste-it-and-found-in-it-a', 'Food for the cattle', '18.jpg', 1, '1992-04-11 04:59:05'),
(38, '2011-11-17 16:54:29', 6, 'We need food', 'not-be-an-old-turtle-we-used-to-queer-things', 'Any nutritious substance that people or animals eat or drink', '8.jpg', 1, '1994-02-28 19:18:00'),
(39, '1974-11-25 07:50:23', 8, 'Hana Haru', 'she-soon-got-it-out-to-her-full-size-by-this', 'While webtoons were mostly unknown outside of the country', '', 1, '1974-04-13 18:16:47'),
(40, '2015-11-12 08:18:45', 9, 'Social Media Interactive', 'mock-turtle-persisted-how-could-he-turn-them', 'Social media are computer-mediated technologies that facilitate the creation and sharing of information.', '3.jpg', 1, '1991-02-21 19:16:30'),
(41, '1972-02-24 23:32:57', 10, 'Blue', 'said-his-father;-dont-give-yourself-airs-do', 'I love dark blue. Because it beautifull', '', 1, '2001-01-04 06:12:18'),
(42, '2005-01-24 17:14:33', 9, 'Social Network', 'still-she-went-nearer-to-watch-them-and-he-went', 'Social media facilitate the development of online social networks by connecting a user profile', '20.jpg', 1, '2006-06-20 14:28:37'),
(43, '1978-04-26 11:04:16', 2, 'System of Production', 'alice-very-earnestly-ive-had-nothing-yet', 'Either as home production or on order form dressmakers and tailors.', '', 1, '1970-01-19 02:28:21'),
(44, '1972-02-03 11:50:43', 7, 'Pop Ice', 'mouse-to-tell-its-age-there-was-nothing-on-it', 'Dont drink to much or you will die', '', 1, '1986-11-10 19:16:59'),
(45, '1972-05-02 14:17:23', 5, 'Kris Wu', 'a-little-bright-eyed-terrier-you-know-this', 'Wu Yi Fan is artist from China', '', 1, '1984-02-27 15:58:05'),
(46, '1980-09-10 01:14:16', 4, 'Various', 'me-and-told-me-you-had-been-for-some-time-after', 'Monnalissa art is beautifull', '', 1, '1971-07-09 14:52:02'),
(47, '2011-07-15 08:19:32', 2, 'Fashion Model in a modern gown', 'dormouse-write-that-down-the-king-said-to', 'Fashion is a popular style, especially in clothing, footwear, lifestyle products.', '15.jpg', 1, '2004-12-04 21:57:53'),
(48, '2004-10-12 02:05:02', 5, 'Master', 'rabbit-came-up-to-the-little-door-was-shut', 'A person skilled at a particular task or occupation', '', 1, '1973-09-02 14:02:01'),
(49, '1979-08-01 08:35:28', 8, 'I Am Gangnam Beauty Webtoon', 'i-dont-care-which-happens-she-ate-a-little', 'Are a type of digital comic that originated in South Korea.', '', 1, '2002-05-20 15:14:53'),
(50, '1970-08-08 19:07:52', 4, 'Flower Art', 'march-hare-said-i-didnt-the-march-hare', 'Hasan is drawing flower art in the classroom', '', 1, '1975-07-02 19:05:12'),
(51, '2018-05-13 10:42:34', 5, 'ALOLO', 'alolo', 'HAHA INI ADALAH KONTEN HAHA HAHA', '2.jpg', 1, '2018-05-13 10:42:34'),
(52, '2018-05-14 15:36:50', 5, 'Halo', 'halo', 'HHHHHHHHHHHHHHHHH', '11.jpg', 1, '2018-05-14 15:36:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL DEFAULT '',
  `cat_description` varchar(255) NOT NULL DEFAULT '',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`, `date_created`) VALUES
(1, 'Music', 'Ini kategori Musik.', '2007-08-16 06:20:42'),
(2, 'Fashion ', 'Ini kategori Fashion.', '1997-07-07 14:13:41'),
(3, 'Game', 'Ini kategori Game.', '2018-01-12 00:48:35'),
(4, 'Art', 'Ini kategori Kesenian.', '2010-08-25 22:03:56'),
(5, 'Artist', 'Ini kategori Artis', '2007-11-16 07:22:00'),
(6, 'Food', 'Ini kategori Makanan.', '1997-08-19 09:14:34'),
(7, 'Drink', 'Ini kategori Minuman.', '2017-07-07 00:07:07'),
(8, 'Webtoon', 'Ini kategori Webtoon Cartoon.', '1986-02-04 13:01:26'),
(9, 'Social Media', 'Ini kategori Sosial Media.', '2003-06-18 11:58:13'),
(10, 'Colour', 'Ini kategori Warna.', '2001-12-04 17:14:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `levels`
--

CREATE TABLE `levels` (
  `level_id` tinyint(2) NOT NULL,
  `nama_level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `levels`
--

INSERT INTO `levels` (`level_id`, `nama_level`) VALUES
(1, 'Administrator'),
(2, 'Author'),
(3, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `user_level` enum('author','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_age`, `user_mobile`, `user_level`) VALUES
(1, 'Ehtesham', 'ehtesham@gmail.com', '123', 23, 334443333, 'author'),
(2, 'Ehtesham', 'ehtesham@gmail.com', '123', 23, 2147483647, 'author'),
(3, 'farrukh', 'farrukh@gmail.com', '123', 32, 232342343, 'author'),
(4, 'zaid', 'zaid@gmail.com', '202cb962ac59075b964b07152d234b70', 23, 324234234, 'author'),
(5, 'yona', 'yona@gmail.com', '95488ef6daa5a49a38ea076c37ea3143', 20, 2147483647, 'author'),
(6, 'auo', 'auo@gmail.com', 'f64ab18101461fffa12a32d53c0dc866', 11, 2147483647, 'author'),
(7, 'h', 'h@gmail.com', '2510c39011c5be704182423e3a695e91', 1, 2147483647, 'author'),
(8, 'haha', 'haha@gmail.com', '4e4d6c332b6fe62a63afe56171fd3725', 2, 123456, 'author'),
(9, 'Yona Narulita', 'yona.narulita@yahoo.co.id', '9cae02c030e2c0cfc6f697db3766cfaf', 20, 2147483647, 'author'),
(10, 'Siapaya', 'siapaya@gmail.com', 'e1116e43b70707a9fe486dfc1c277531', 22, 2147483647, 'author'),
(11, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0, 'author'),
(12, 'a', 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 1, 1, 'author'),
(13, 'Yona Narulita', 'yyona77@gmail.com', '95488ef6daa5a49a38ea076c37ea3143', 20, 2147483647, 'author'),
(14, 'hm', 'hm@gmail.com', '2ab5564b805d8065f4bcf81060472746', 1, 1, 'author'),
(15, 'j', 'j@gmail.com', '363b122c528f54df4a0446b6bab05515', 1, 1, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_slug` (`post_slug`),
  ADD KEY `cat_id` (`fk_cat_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `level_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`fk_cat_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
