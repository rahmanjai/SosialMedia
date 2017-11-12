-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Apr 2017 pada 14.23
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `status`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi_status` varchar(1000) NOT NULL,
  `waktu` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `nama`, `isi_status`, `waktu`) VALUES
(28, 'rahman_jai', 'Pusing kepala dapatnya.', '2017-04-02 05:04:10'),
(10, 'Erik', 'Aku merasa aneh dengan grub kali Linux Indonesia', '2016-11-11 14:27:53'),
(12, 'Rahman Jai', 'Biarkan hati ini terus berjalan hingga bertemu dengan titik lelahnya, perjuangaan akan cinta yang bertemu acuh dingin hati mu tak tersentuh. Ku tak ingin kau tahu pilu di hati ini karena itu hanya jadikan aku tampak lemah di matamu.', '2016-11-12 12:13:23'),
(13, 'Anonim', 'Be a good programmer!', '2016-11-11 15:01:44'),
(14, '@rahman_jai2', 'Aduh heh..', '2016-11-12 11:58:44'),
(22, 'Sotta', 'Programming is Eazy!', '2016-11-14 04:50:29'),
(24, 'Beni', 'Aku bisa ga ngopi data kamu.', '2017-04-02 11:39:26'),
(25, 'Rahman', 'Kemana!', '2016-11-17 13:09:56'),
(26, 'Ronny', 'Pusing materi hari ini. males aku kuliah rasanya.', '2016-11-18 12:43:51'),
(29, 'Rahman Jailani ', 'Seribu kali pun kita mengatakan hal yang benaran takan pernah menjadikan kita benar, sebelum kita membuktika perkataan dalam bentuk perbuatan, selama kita belum mampu membuat hasil yang sama dengan apa yang diucapkan, yang menjadi harapan orang lain.', '2017-04-02 06:05:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
