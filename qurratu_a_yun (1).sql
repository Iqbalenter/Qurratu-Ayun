-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2024 pada 09.48
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
-- Database: `qurratu_a'yun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id_ekstrakulikuler` int(10) NOT NULL,
  `nama_ekstrakulikuler` varchar(100) NOT NULL,
  `ket_ekstrakulikuler` text NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(10) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `ket_fasilitas` varchar(1000) NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `ket_fasilitas`, `gambar`) VALUES
(11, 'Kolam Berenang', 'Kolam renang ini menawarkan berbagai fasilitas untuk menunjang kenyamanan pengunjung, seperti kolam renang utama dan anak dengan kedalaman bervariasi, jacuzzi untuk relaksasi, sauna untuk detoksifikasi, ruang ganti dan toilet, kantin untuk mengisi perut, dan area taman untuk bersantai. Ditambah lagi, petugas penjaga kolam selalu siap siaga untuk membantu dan memastikan keamanan para pengunjung.	', '66842f2bcb541jpeg'),
(12, 'Lab', 'Kolam renang ini menawarkan berbagai fasilitas untuk menunjang kenyamanan pengunjung, seperti kolam renang utama dan anak dengan kedalaman bervariasi, jacuzzi untuk relaksasi, sauna untuk detoksifikasi, ruang ganti dan toilet, kantin untuk mengisi perut, dan area taman untuk bersantai. Ditambah lagi, petugas penjaga kolam selalu siap siaga untuk membantu dan memastikan keamanan para pengunjung.	', '6684d9294e882jpeg'),
(14, 'Perpustakaan', 'Perpustakaan sekolah ini merupakan pusat pembelajaran yang dilengkapi dengan berbagai fasilitas modern untuk mendukung kegiatan literasi dan penelitian siswa. Dengan koleksi buku yang luas mencakup berbagai genre dan bidang studi, perpustakaan ini menyediakan bahan bacaan yang bervariasi mulai dari fiksi hingga literatur ilmiah. Terdapat juga akses ke sumber daya digital seperti e-book, jurnal online, dan database akademik yang memungkinkan siswa untuk melakukan penelitian secara mendalam. Ruang baca yang nyaman dan tenang dilengkapi dengan meja dan kursi ergonomis serta pencahayaan yang baik, menciptakan suasana yang kondusif untuk belajar. Selain itu, perpustakaan ini memiliki beberapa komputer dengan akses internet cepat, yang dapat digunakan untuk mencari informasi tambahan atau menyelesaikan tugas sekolah. Staf perpustakaan yang ramah dan berpengetahuan siap membantu siswa dalam menemukan buku atau sumber informasi yang dibutuhkan. Fasilitas ini juga dilengkapi dengan area diskusi', '6686aac40bfe7jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(10) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `mapel` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `universitas` varchar(255) NOT NULL,
  `ket_guru` text NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `mapel`, `email`, `pendidikan_terakhir`, `universitas`, `ket_guru`, `gambar`) VALUES
(8, 'Soe', 'Algorita', 'soe@gmail.com', 'S1', 'Universitas Harapan', 'Guru yang berdedikasi adalah sosok inspiratif yang memainkan peran penting dalam dunia pendidikan. Mereka tidak hanya sekedar mengajar, tetapi juga mendidik dan membimbing murid-muridnya dengan penuh kasih sayang dan kesabaran. Berikut adalah beberapa deskripsi yang menggambarkan seorang guru yang berdedikasi:', '6684b11342ed8jpg'),
(9, 'Lahmudin', 'Arsitektur Visual', 'lahmudin@gmail.com', 'S1', 'Universitas Harapan', 'Guru yang berdedikasi adalah sosok inspiratif yang memainkan peran penting dalam dunia pendidikan. Mereka tidak hanya sekedar mengajar, tetapi juga mendidik dan membimbing murid-muridnya dengan penuh kasih sayang dan kesabaran. Berikut adalah beberapa deskripsi yang menggambarkan seorang guru yang berdedikasi:', '6684b1612caf3jpg'),
(10, 'Ambaritta', 'Internet dan  Jaringan', 'ambarita@gmail.com', 'S1', 'Universitas Harapan', 'Guru yang berdedikasi adalah sosok inspiratif yang memainkan peran penting dalam dunia pendidikan. Mereka tidak hanya sekedar mengajar, tetapi juga mendidik dan membimbing murid-muridnya dengan penuh kasih sayang dan kesabaran. Berikut adalah beberapa deskripsi yang menggambarkan seorang guru yang berdedikasi', '6686a9dd444a5jpg'),
(11, 'Rusli', 'Matematika', 'rusli@gmail.com', 'S2', 'universitas harapan', 'Guru yang berdedikasi adalah sosok inspiratif yang memainkan peran penting dalam dunia pendidikan. Mereka tidak hanya sekedar mengajar, tetapi juga mendidik dan membimbing murid-muridnya dengan penuh kasih sayang dan kesabaran. Berikut adalah beberapa deskripsi yang menggambarkan seorang guru yang berdedikasi', '6686aa08c36dfjpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(10) NOT NULL,
  `tingkatan` varchar(35) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `ket_kegiatan` text NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `tingkatan`, `nama_kegiatan`, `ket_kegiatan`, `gambar`) VALUES
(18, 'SD', 'Bermain Puzzle', 'Bermain puzzle dapat membantu anak mengembangkan kemampuan memecahkan masalah, konsentrasi, dan kesabaran. Pilihlah puzzle dengan tingkat kesulitan yang sesuai dengan usia anak.	', '6684b1b031aa2jpg'),
(19, 'TK', 'Pekan Olahraga', 'Pekan Olahraga, bagaikan sebuah simfoni megah yang menggemakan semangat sportifitas dan prestasi. Di arena ini, para atlet dari berbagai penjuru bersatu, menunjukkan dedikasi dan ketangguhan mereka dalam berbagai cabang olahraga. Teriakan sorak-sorai penonton dan kibaran bendera menjadi saksi bisu perjuangan mereka untuk meraih kejayaan. Lebih dari sekadar kompetisi, Pekan Olahraga menjadi wadah pemersatu bangsa, menumbuhkan rasa bangga dan cinta tanah air, serta menginspirasi generasi muda untuk mengejar mimpi mereka.', '66856a3a096eajpg'),
(20, 'TK', 'Sholat Berjamaah', 'Anak anak sedang melakukan sholat berjamaah bersam-sama di waktu pulang sekolah', '66856a745090fjpg'),
(21, 'TK', 'Anak Anak', 'Anak anak sedang melakukan sholat berjamaah bersam-sama di waktu pulang sekolah', '66856a94ab127jpg'),
(23, 'TK', 'Pekan', 'Pekan Olahraga, bagaikan sebuah simfoni megah yang menggemakan semangat sportifitas dan prestasi. Di arena ini, para atlet dari berbagai penjuru bersatu, menunjukkan dedikasi dan ketangguhan mereka dalam berbagai cabang olahraga. Teriakan sorak-sorai penonton dan kibaran bendera menjadi saksi bisu perjuangan mereka untuk meraih kejayaan. Lebih dari sekadar kompetisi, Pekan Olahraga menjadi wadah pemersatu bangsa, menumbuhkan rasa bangga dan cinta tanah air, serta menginspirasi generasi muda untuk mengejar mimpi mereka.	', '66895dbdc182bjpg'),
(24, 'TK', 'Sekolah asik', 'Pekan Olahraga, bagaikan sebuah simfoni megah yang menggemakan semangat sportifitas dan prestasi. Di arena ini, para atlet dari berbagai penjuru bersatu, menunjukkan dedikasi dan ketangguhan mereka dalam berbagai cabang olahraga. Teriakan sorak-sorai penonton dan kibaran bendera menjadi saksi bisu perjuangan mereka untuk meraih kejayaan. Lebih dari sekadar kompetisi, Pekan Olahraga menjadi wadah pemersatu bangsa, menumbuhkan rasa bangga dan cinta tanah air, serta menginspirasi generasi muda untuk mengejar mimpi mereka.', '66895e6433c0ajpg'),
(25, 'tk', 'Masuk', 'Bermain puzzle dapat membantu anak mengembangkan kemampuan memecahkan masalah, konsentrasi, dan kesabaran. Pilihlah puzzle dengan tingkat kesulitan yang sesuai dengan usia anak.	', '66895ee12b6cfjpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `kota`, `alamat`, `telepon`, `email`) VALUES
(1, 'Medan, Sumatera Utara', 'Jl. Medan - Delitua No.74 Km. 10,3 Mekar Sari', '+1 253 565 2365', 'support@colorlib.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `jabatan`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'Iqbal', 'Admin', 'iqbal', '$2y$10$4U5aVo86SvKzYc9h9MkzsO5jynVOEXE5KT3y3EMsLY9bWzFNBhe.O', 'iqbal@gmail.com', '2024-06-30 14:26:22'),
(5, 'Budi', 'Admin', 'dd', '$2y$10$T3PoJPNs96iiW.r/taokGeAWO1OrQSeI.jScTZyqLSv5G2IUH3Vp6', 'budi@gmail.com', '2024-06-30 15:19:57'),
(6, 'dimas', 'Admin', 'ruangislamic__', '$2y$10$LGmyemoRSIuxwZlny7CaA.Vr2Lvee3hRhGb8J287IguqsyS8npfW2', 'iqbalwijayaa77@gmail.com', '2024-06-30 15:22:42'),
(7, 'dimas', 'Admin', 'dimas', '$2y$10$VjJLWaIR9rFmwNoCyF/ynuP04jSkVYFMk2b16f2bu7wxvYaPi3Y1O', 'dimas@gmail.com', '2024-06-30 15:38:53'),
(8, 'Yogi', 'admin', 'yogi', '$2y$10$ccCBOxHM.u5EIxo7bgm3BuAd2wA6KlqSox4lnb3gndr7CuEIvMISa', 'yogi@gmail.com', '2024-07-01 05:10:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(10) NOT NULL,
  `nama_prestasi` varchar(100) NOT NULL,
  `ket_prestasi` text NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_prestasi`, `ket_prestasi`, `gambar`) VALUES
(21, 'Lomba', 'Selamat kepada Budi atas raihan Juara 1, Ani sebagai Juara 2, dan Cipto di posisi Juara 3 dalam Lomba Menggambar yang diselenggarakan pada [tanggal lomba]. Apresiasi juga tak lupa kami sampaikan kepada Dini dan Eka sebagai Harapan 1 dan 2, serta Fani sebagai Harapan 3. Terima kasih kepada seluruh peserta atas partisipasinya yang luar biasa!	', '66842e8a3eacfjpeg'),
(22, 'Lomba', 'Selamat kepada Budi atas raihan Juara 1, Ani sebagai Juara 2, dan Cipto di posisi Juara 3 dalam Lomba Menggambar yang diselenggarakan pada [tanggal lomba]. Apresiasi juga tak lupa kami sampaikan kepada Dini dan Eka sebagai Harapan 1 dan 2, serta Fani sebagai Harapan 3. Terima kasih kepada seluruh peserta atas partisipasinya yang luar biasa!	', '66842eb47e90ejpeg'),
(23, 'Lomba', 'Selamat kepada Budi atas raihan Juara 1, Ani sebagai Juara 2, dan Cipto di posisi Juara 3 dalam Lomba Menggambar yang diselenggarakan pada [tanggal lomba]. Apresiasi juga tak lupa kami sampaikan kepada Dini dan Eka sebagai Harapan 1 dan 2, serta Fani sebagai Harapan 3. Terima kasih kepada seluruh peserta atas partisipasinya yang luar biasa!	', '66842ec549bf0jpeg'),
(24, 'Lomba', 'Selamat kepada Budi atas raihan Juara 1, Ani sebagai Juara 2, dan Cipto di posisi Juara 3 dalam Lomba Menggambar yang diselenggarakan pada [tanggal lomba]. Apresiasi juga tak lupa kami sampaikan kepada Dini dan Eka sebagai Harapan 1 dan 2, serta Fani sebagai Harapan 3. Terima kasih kepada seluruh peserta atas partisipasinya yang luar biasa!	', '66842ee5a1842jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(10) NOT NULL,
  `judul_profil` varchar(100) NOT NULL,
  `gambar_profil` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id_ekstrakulikuler`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id_ekstrakulikuler` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
