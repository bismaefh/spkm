-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 03, 2024 at 05:57 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u699861505_skpmft`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto_numbers`
--

CREATE TABLE `auto_numbers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kompetisi'),
(2, 'Pengakuan (termasuk kepanitiaan)'),
(3, 'Penghargaan'),
(4, 'Karir Organisasi (per periode kepengurusan)'),
(5, 'Hasil Karya'),
(6, 'Pemberdayaan atau Aksi Kemanusiaan'),
(7, 'Kewirausahaan'),
(8, 'PKKMB (Wajib)'),
(9, 'PKKM (Wajib)'),
(10, 'Asisten (per Mata Kuliah, maksimal 3 Mata Kuliah)');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(100) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `point` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_kategori`, `nama_kegiatan`, `point`) VALUES
(1, 1, 'Juara 1 Perorangan Kategori A / Internasional', 100),
(2, 1, 'Juara 1 Perorangan Kategori B / Regional', 80),
(3, 1, 'Juara 1 Perorangan Kategori C / Nasional', 60),
(4, 1, 'Juara 1 Perorangan Kategori D / Provinsi', 50),
(5, 1, 'Juara 1 Perorangan Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 30),
(6, 1, 'Juara 2 Perorangan Kategori A / Internasional', 75),
(7, 1, 'Juara 2 Perorangan Kategori B / Regional', 60),
(8, 1, 'Juara 2 Perorangan Kategori C / Nasional', 45),
(9, 1, 'Juara 2 Perorangan Kategori D / Provinsi', 35),
(10, 1, 'Juara 2 Perorangan Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 20),
(11, 1, 'Juara 3 Perorangan Kategori A / Internasional', 50),
(12, 1, 'Juara 3 Perorangan Kategori B / Regional', 40),
(13, 1, 'Juara 3 Perorangan Kategori C / Nasional', 30),
(14, 1, 'Juara 3 Perorangan Kategori D / Provinsi', 25),
(15, 1, 'Juara 3 Perorangan Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 20),
(16, 1, 'Juara Kategori Perorangan Lainnya Kategori A / Internasional', 40),
(17, 1, 'Juara Kategori Perorangan Lainnya Kategori B / Regional', 30),
(18, 1, 'Juara Kategori Perorangan Lainnya Kategori C / Nasional', 25),
(19, 1, 'Juara Kategori Perorangan Lainnya Kategori D / Provinsi', 20),
(20, 1, 'Juara Kategori Perorangan Lainnya Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 15),
(21, 1, 'Juara 1 Beregu Kategori A / Internasional', 50),
(22, 1, 'Juara 1 Beregu Kategori B / Regional', 40),
(23, 1, 'Juara 1 Beregu Kategori C / Nasional', 30),
(24, 1, 'Juara 1 Beregu Kategori D / Provinsi', 25),
(25, 1, 'Juara 1 Beregu Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 20),
(26, 1, 'Juara 2 Beregu Kategori A / Internasional', 40),
(27, 1, 'Juara 2 Beregu Kategori B / Regional', 30),
(28, 1, 'Juara 2 Beregu Kategori C / Nasional', 25),
(29, 1, 'Juara 2 Beregu Kategori D / Provinsi ', 20),
(30, 1, 'Juara 2 Beregu Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 15),
(31, 1, 'Juara 3 Beregu Kategori A / Internasional', 30),
(32, 1, 'Juara 3 Beregu Kategori B / Regional', 25),
(33, 1, 'Juara 3 Beregu Kategori C / Nasional', 20),
(34, 1, 'Juara 3 Beregu Kategori D / Provinsi', 20),
(35, 1, 'Juara 3 Beregu Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 10),
(36, 1, 'Juara Kategori Beregu Lainnya Kategori A / Internasional', 25),
(37, 1, 'Juara Kategori Beregu Lainnya Kategori B / Regional', 20),
(38, 1, 'Juara Kategori Beregu Lainnya Kategori C / Nasional', 15),
(39, 1, 'Juara Kategori Beregu Lainnya Kategori D / Provinsi', 13),
(40, 1, 'Juara Kategori Beregu Lainnya Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 10),
(41, 2, 'Pelatih/Wasit/Juri Bersertifikat Kategori A / Internasional', 50),
(42, 2, 'Pelatih/Wasit/Juri Bersertifikat Kategori B / Regional', 40),
(43, 2, 'Pelatih/Wasit/Juri Bersertifikat Kategori C / Nasional', 30),
(47, 2, 'Pelatih/Wasit/Juri Bersertifikat Kategori D / Provinsi', 25),
(48, 2, 'Pelatih/Wasit/Juri Bersertifikat Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 20),
(49, 2, 'Pelatih/Wasit/Juri Tidak Bersertifikat Kategori A / Internasional', 40),
(50, 2, 'Pelatih/Wasit/Juri Tidak Bersertifikat Kategori B / Regional', 30),
(51, 2, 'Pelatih/Wasit/Juri Tidak Bersertifikat Kategori C / Nasional', 25),
(52, 2, 'Pelatih/Wasit/Juri Tidak Bersertifikat Kategori D / Provinsi', 15),
(53, 2, 'Pelatih/Wasit/Juri Tidak Bersertifikat Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 10),
(54, 2, 'Narasumber/Pembicara Kategori A / Internasional', 80),
(55, 2, 'Narasumber/Pembicara Kategori B / Regional', 50),
(56, 2, 'Narasumber/Pembicara Kategori C / Nasional', 30),
(57, 2, 'Narasumber/Pembicara Kategori D / Provinsi', 20),
(58, 2, 'Narasumber/Pembicara Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 15),
(59, 2, 'Moderator (maksimal 5 kegiatan) Kategori A / Internasional', 30),
(60, 2, 'Moderator (maksimal 5 kegiatan) Kategori B / Regional', 25),
(61, 2, 'Moderator (maksimal 5 kegiatan) Kategori C / Nasional', 15),
(62, 2, 'Moderator (maksimal 5 kegiatan) Kategori D / Provinsi', 10),
(63, 2, 'Moderator (maksimal 5 kegiatan) Kategori  E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 5),
(64, 2, 'Lainnya (maksimal 5 kegiatan) Kategori A / Internasional', 30),
(65, 2, 'Lainnya (maksimal 5 kegiatan) Kategori B / Regional', 25),
(66, 2, 'Lainnya (maksimal 5 kegiatan) Kategori C / Nasional', 15),
(67, 2, 'Lainnya (maksimal 5 kegiatan) Kategori D / Provinsi', 10),
(68, 2, 'Lainnya (maksimal 5 kegiatan) Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 5),
(69, 3, 'Tanda Jasa Kategori A / Internasional', 50),
(70, 3, 'Tanda Jasa Kategori B / Regional', 40),
(71, 3, 'Tanda Jasa Kategori C / Nasional', 30),
(72, 3, 'Tanda Jasa Kategori D / Provinsi', 25),
(73, 3, 'Tanda Jasa Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 20),
(74, 3, 'Grand Final, Peraih Medali Emas Berdasar Nilai Batas Kategori A / Internasional', 50),
(75, 3, 'Grand Final, Peraih Medali Emas Berdasar Nilai Batas Kategori B / Regional', 40),
(76, 3, 'Grand Final, Peraih Medali Emas Berdasar Nilai Batas Kategori C / Nasional', 30),
(77, 3, 'Grand Final, Peraih Medali Emas Berdasar Nilai Batas Kategori D / Provinsi', 25),
(78, 3, 'Grand Final, Peraih Medali Emas Berdasar Nilai Batas Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 20),
(79, 3, 'Grand Final, Peraih Medali Perak Berdasar Nilai Batas Kategori A / Internasional', 40),
(80, 3, 'Grand Final, Peraih Medali Perak Berdasar Nilai Batas Kategori B / Regional', 30),
(81, 3, 'Grand Final, Peraih Medali Perak Berdasar Nilai Batas Kategori C / Nasional', 25),
(82, 3, 'Grand Final, Peraih Medali Perak Berdasar Nilai Batas Kategori D / Provinsi', 20),
(83, 3, 'Grand Final, Peraih Medali Perak Berdasar Nilai Batas Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 15),
(84, 3, 'Grand Final, Peraih Medali Perunggu Berdasar Nilai Batas Kategori A / Internasional', 30),
(85, 3, 'Grand Final, Peraih Medali Perunggu Berdasar Nilai Batas Kategori  B / Regional', 25),
(86, 3, 'Grand Final, Peraih Medali Perunggu Berdasar Nilai Batas Kategori C / Nasional', 20),
(87, 3, 'Grand Final, Peraih Medali Perunggu Berdasar Nilai Batas Kategori D / Provinsi', 15),
(88, 3, 'Grand Final, Peraih Medali Perunggu Berdasar Nilai Batas Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 10),
(89, 3, 'Piagam Partisipasi (Maksimal 10 Kegiatan/Penghargaan) Kategori A / Internasional', 30),
(90, 3, 'Piagam Partisipasi (Maksimal 10 Kegiatan/Penghargaan) Kategori B / Regional', 25),
(91, 3, 'Piagam Partisipasi (Maksimal 10 Kegiatan/Penghargaan) Kategori C / Nasional', 20),
(92, 3, 'Piagam Partisipasi (Maksimal 10 Kegiatan/Penghargaan) Kategori  D / Provinsi', 10),
(93, 3, 'Piagam Partisipasi (Maksimal 10 Kegiatan/Penghargaan) Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 5),
(94, 3, 'Penerima Hibah Kompetisi Kategori A / Internasional', 50),
(95, 3, 'Penerima Hibah Kompetisi Kategori B / Regional', 40),
(96, 3, 'Penerima Hibah Kompetisi Kategori C / Nasional', 30),
(97, 3, 'Penerima Hibah Kompetisi Kategori  D / Provinsi', 20),
(98, 3, 'Penerima Hibah Kompetisi Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 15),
(99, 3, 'Lainnya (maksimal 10 kegiatan/penghargaan) Kategori A / Internasional', 30),
(100, 3, 'Lainnya (maksimal 10 kegiatan/penghargaan) Kategori B / Regional', 20),
(101, 3, 'Lainnya (maksimal 10 kegiatan/penghargaan) Kategori C / Nasional', 15),
(102, 3, 'Lainnya (maksimal 10 kegiatan/penghargaan) Kategori D / Provinsi', 10),
(103, 3, 'Lainnya (maksimal 10 kegiatan/penghargaan) Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 5),
(104, 4, 'Ketua Kategori A / Internasional', 50),
(105, 4, 'Ketua Kategori B / Regional', 50),
(106, 4, 'Ketua Kategori C / Nasional', 50),
(107, 4, 'Ketua Kategori D / Provinsi', 50),
(108, 4, 'Ketua Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 60),
(109, 4, 'Wakil Ketua Kategori A / Internasional', 40),
(110, 4, 'Wakil Ketua Kategori B / Regional', 40),
(111, 4, 'Wakil Ketua Kategori C / Nasional', 40),
(112, 4, 'Wakil Ketua Kategori D / Provinsi', 40),
(113, 4, 'Wakil Ketua Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 50),
(114, 4, 'Sekretaris, Bendahara Kategori A / Internasional', 30),
(115, 4, 'Sekretaris, Bendahara Kategori B / Regional', 30),
(116, 4, 'Sekretaris, Bendahara Kategori C / Nasional', 30),
(117, 4, 'Sekretaris, Bendahara Kategori D / Provinsi', 30),
(118, 4, 'Sekretaris, Bendahara Kategori  E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 40),
(119, 4, 'Ketua Bidang setara Sekretaris/Bendahara Kategori A / Internasional', 30),
(120, 4, 'Ketua Bidang setara Sekretaris/Bendahara Kategori B / Regional', 30),
(121, 4, 'Ketua Bidang setara Sekretaris, Bendahara Kategori C / Nasional', 30),
(122, 4, 'Ketua Bidang setara Sekretaris, Bendahara Kategori D / Provinsi', 30),
(123, 4, 'Ketua Bidang setara Sekretaris, Bendahara Kategori  E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 40),
(124, 4, 'Satu Tingkat Dibawah Pengurus Harian Kategori A / Internasional', 10),
(125, 4, 'Satu Tingkat Dibawah Pengurus Harian Kategori B / Regional', 10),
(126, 4, 'Satu Tingkat Dibawah Pengurus Harian Kategori C / Nasional', 10),
(127, 4, 'Satu Tingkat Dibawah Pengurus Harian Kategori D / Provinsi', 10),
(128, 4, 'Satu Tingkat Dibawah Pengurus Harian Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 20),
(129, 4, 'Dewan Pertimbangan Organisasi/BPH/ Pengawas Lainnya Kategori A / Internasional', 15),
(130, 4, 'Dewan Pertimbangan Organisasi/BPH/ Pengawas Lainnya Kategori B / Regional', 15),
(131, 4, 'Dewan Pertimbangan Organisasi/BPH/ Pengawas Lainnya Kategori C / Nasional', 15),
(132, 4, 'Dewan Pertimbangan Organisasi/BPH/ Pengawas Lainnya Kategori D / Provinsi', 15),
(133, 4, 'Dewan Pertimbangan Organisasi/BPH/ Pengawas Lainnya Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 25),
(134, 4, 'Anggota Aktif Kategori A / Internasional', 10),
(135, 4, 'Anggota Aktif Kategori B / Regional', 10),
(136, 4, 'Anggota Aktif Kategori C / Nasional', 10),
(137, 4, 'Anggota Aktif Kategori D / Provinsi', 10),
(138, 4, 'Anggota Aktif Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 15),
(139, 5, 'Patent Kategori A / Internasional', 100),
(140, 5, 'Patent  Kategori B / Regional', 100),
(141, 5, 'Patent Kategori C / Nasional', 100),
(142, 5, 'Patent Kategori D / Provinsi', 100),
(143, 5, 'Patent Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 100),
(144, 5, 'Patent Sederhana Kategori A / Internasional', 50),
(145, 5, 'Patent Sederhana Kategori B / Regional', 50),
(146, 5, 'Patent Sederhana Kategori C / Nasional', 50),
(147, 5, 'Patent Sederhana Kategori D / Provinsi', 50),
(148, 5, 'Patent Sederhana Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 50),
(149, 5, 'Cipta Karya Orisinal Kategori A / Internasional', 50),
(150, 5, 'Cipta Karya Orisinal Kategori B / Regional', 50),
(151, 5, 'Cipta Karya Orisinal Kategori C / Nasional', 50),
(152, 5, 'Cipta Karya Orisinal Kategori D / Provinsi', 50),
(153, 5, 'Cipta Karya Orisinal Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 50),
(154, 5, 'Buku ber-ISBN Penulis Utama Kategori A / Internasional', 50),
(155, 5, 'Buku ber-ISBN Penulis Utama Kategori B / Regional', 50),
(156, 5, 'Buku ber-ISBN Penulis Utama Kategori C / Nasional', 50),
(157, 5, 'Buku ber-ISBN Penulis Utama Kategori D / Provinsi', 50),
(158, 5, 'Buku ber-ISBN Penulis Utama Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 50),
(159, 5, 'Buku ber-ISBN Penulis Kedua dst Kategori A / Internasional', 25),
(160, 5, 'Buku ber-ISBN Penulis Kedua dst Kategori B / Regional', 25),
(161, 5, 'Buku ber-ISBN Penulis Kedua dst Kategori C / Nasional', 25),
(162, 5, 'Buku ber-ISBN Penulis Kedua dst Kategori D / Provinsi', 25),
(163, 5, 'Buku ber-ISBN Penulis Kedua dst Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 25),
(164, 5, 'Penulis Utama/Korespondensi Karya Ilmiah Di Jurnal Yang Bereputasi Dan Diakui Kategori A / Internasional', 50),
(165, 5, 'Penulis Utama/Korespondensi Karya Ilmiah Di Jurnal Yang Bereputasi Dan Diakui Kategori B / Regional', 50),
(166, 5, 'Penulis Utama/Korespondensi Karya Ilmiah Di Jurnal Yang Bereputasi Dan Diakui Kategori C / Nasional', 50),
(167, 5, 'Penulis Utama/Korespondensi Karya Ilmiah Di Jurnal Yang Bereputasi Dan Diakui Kategori D / Provinsi', 50),
(168, 5, 'Penulis Utama/Korespondensi Karya Ilmiah Di Jurnal Yang Bereputasi Dan Diakui Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 50),
(169, 5, 'Penulis Kedua/Korespondensi Karya Ilmiah Di Jurnal Yang Bereputasi Dan Diakui Kategori A / internasional', 30),
(170, 5, 'Penulis Kedua/Korespondensi Kaya Ilmiah Di Jurnal Yang Bereputasi Dan Diakui Kategori B / Regional', 30),
(171, 5, 'Penulis Kedua/Korespondensi Kaya Ilmiah Di Jurnal Yang Bereputasi Dan Diakui Kategori C / Nasional', 30),
(172, 5, 'Penulis Kedua/Korespondensi Kaya Ilmiah Di Jurnal Yang Bereputasi Dan Diakui Kategori D / Provinsi', 30),
(173, 5, 'Penulis Kedua/Korespondensi Kaya Ilmiah Di Jurnal Yang Bereputasi Dan Diakui Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 30),
(174, 6, 'Pemrakarsa/Pendiri Kategori A / Internasional', 50),
(175, 6, 'Pemrakarsa/Pendiri Kategori B / Regional', 50),
(176, 6, 'Pemrakarsa/Pendiri Kategori C / Nasional', 50),
(177, 6, 'Pemrakarsa/Pendiri Kategori D / Provinsi', 30),
(178, 6, 'Pemrakarsa/Pendiri Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 25),
(179, 6, 'Koordinator Relawan Kategori A / Internasional', 40),
(180, 6, 'Koordinator Relawan Kategori B / Regional', 40),
(181, 6, 'Koordinator Relawan Kategori C / Nasional', 40),
(182, 6, 'Koordinator Relawan Kategori D / Provinsi', 25),
(183, 6, 'Koordinator Relawan Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 20),
(184, 6, 'Relawan Kategori A / Internasional', 30),
(185, 6, 'Relawan Kategori B / Regional', 30),
(186, 6, 'Relawan Kategori C / Nasional', 30),
(187, 6, 'Relawan Kategori D / Provinsi', 20),
(188, 6, 'Relawan Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 15),
(189, 6, 'Asisten Program Pengabdian Pada Masyarakat (maksimal 2 kegiatan) Kategori C / Nasional', 5),
(190, 6, 'Asisten Program Pengabdian Pada Masyarakat (maksimal 2 kegiatan) Kategori D / Provinsi', 5),
(191, 6, 'Asisten Program Pengabdian Pada Masyarakat (maksimal 2 kegiatan) Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 5),
(192, 7, 'Kewirausahaan Kategori A / Internasional', 50),
(193, 7, 'Kewirausahaan Kategori B / Regional', 40),
(194, 7, 'Kewirausahaan Kategori C / Nasional', 40),
(195, 7, 'Kewirausahaan Kategori D / Provinsi', 40),
(196, 7, 'Kewirausahaan Kategori E / Kabupaten / Kota / Perguruan Tinggi / Fakultas', 30),
(197, 8, 'PKKMB', 15),
(198, 9, 'PKKM', 15),
(199, 10, 'Koordinator Anggota', 10);

-- --------------------------------------------------------

--
-- Table structure for table `kemahasiswaan`
--

CREATE TABLE `kemahasiswaan` (
  `nim` varchar(18) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `profile` varchar(200) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kemahasiswaan`
--

INSERT INTO `kemahasiswaan` (`nim`, `name`, `email`, `telp`, `tgl_lahir`, `profile`) VALUES
('197305172003121001', 'Dr. Ir. Nurul Hidayat, S.Pt., M.Kom.', 'nurul.hidayat@unsoed.ac.id', '08122718132', '1973-05-17', 'image2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `jurusan` enum('Sipil','Elektro','Geologi','Informatika','Industri') NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `telp` varchar(13) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `profile` varchar(200) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `name`, `angkatan`, `jurusan`, `email`, `jenis_kelamin`, `telp`, `tgl_lahir`, `alamat`, `profile`) VALUES
('H1D018032', 'Bisma Fajar Hidayat', 2018, 'Informatika', 'bisma.hidayat@mhs.unsoed.ac.id', 'laki-laki', '08973158185', '2000-08-13', 'Jomblang Rt 17/RW 05, Dawung, Jenar, Sragen', 'H1D018032.png'),
('H1D018057', 'Melvin Mourelly Tanjung', 2018, 'Informatika', 'melvin.tanjung@mhs.unsoed.ac.id', 'laki-laki', '089620320590', '2000-04-08', 'Cilacap', 'H1D018057.png');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2017_08_03_055212_create_auto_numbers', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$w3YxPJ8lgoPEu/A9IDZmaOwSezAQxk8U1b1XGMcBejDthyOD1RmgG', '2023-10-12 14:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `pejabat`
--

CREATE TABLE `pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pejabat`
--

INSERT INTO `pejabat` (`id_pejabat`, `nama`, `nip`, `jabatan`) VALUES
(1, 'Dr. Ir. Nurul Hidayat, S.Pt., M.Kom.', '197305172003121001', 'Wakil Dekan Bidang Kemahasiswaan dan Alumni'),
(2, 'Alta Kurnia Handoyo', 'H1E021065', 'Presiden BEM');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id_permohonan` int(11) NOT NULL,
  `no_permohonan` varchar(20) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `rincian` text NOT NULL,
  `file` varchar(200) NOT NULL DEFAULT 'default.pdf',
  `point` int(11) NOT NULL DEFAULT 0,
  `status_permohonan` enum('acc','tolak','pending') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id_permohonan`, `no_permohonan`, `nim`, `id_kegiatan`, `lokasi`, `tgl_mulai`, `tgl_selesai`, `rincian`, `file`, `point`, `status_permohonan`) VALUES
(56, 'SKPM/20240221/0001', 'H1D018032', 74, 'Sragen', '2024-02-14', '2024-02-22', 'Juara', 'DOC-20230508-WA0006_230515_113049.pdf', 50, 'acc'),
(59, 'SKPM/20240326/0002', 'H1D018032', 79, 'Purbalingga', '2024-03-24', '2024-03-24', 'Grand Final', 'Kartu Ujian TOEFL.pdf', 40, 'tolak');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(18) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` enum('superadmin','admin','mahasiswa','kemahasiswaan') NOT NULL DEFAULT 'mahasiswa',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nim`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(62, 'H1D018032', 'Bisma Fajar Hidayat', 'bisma.hidayat@mhs.unsoed.ac.id', NULL, '$2y$10$8sAugHx2MvnD.pRyMLxb7uszjEZkpg2rwnLeQwVzXGEVJE4.GIwha', NULL, 'mahasiswa', '2023-10-16 08:01:09', '2023-10-16 08:01:09'),
(67, '197305172003121001', 'Dr. Ir. Nurul Hidayat, S.Pt., M.Kom.', 'nurul.hidayat@unsoed.ac.id', NULL, '$2y$10$hFFtpUQoMso9tMS5wO.1/.s3uliKGkb1u9fvCfkveVeATJSGMbTZK', NULL, 'kemahasiswaan', '2024-01-09 07:15:36', '2024-01-09 07:15:36'),
(69, '0', 'Admin', 'admin@unsoed.ac.id', NULL, '$2y$10$0Oepr2hmEIflWu7OTanCheB9CaZBj1nFYq/VpzmIXSdG/8/HF.CuC', NULL, 'admin', '2024-01-22 06:06:11', '2024-01-22 06:06:11'),
(73, 'H1D018057', 'Melvin Mourelly Tanjung', 'melvin.tanjung@mhs.unsoed.ac.id', NULL, '$2y$10$XadlHvsCLt3HLlExvbX4kuSs2XzG/yEXBgthtA63BAV8huHxxviGO', NULL, 'mahasiswa', '2024-02-21 13:25:24', '2024-02-21 13:25:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto_numbers`
--
ALTER TABLE `auto_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kemahasiswaan`
--
ALTER TABLE `kemahasiswaan`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id_pejabat`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id_permohonan`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto_numbers`
--
ALTER TABLE `auto_numbers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
