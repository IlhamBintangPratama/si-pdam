-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 24, 2023 at 10:54 PM
-- Server version: 8.0.35-0ubuntu0.20.04.1
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pdam`
--

-- --------------------------------------------------------

--
-- Table structure for table `desas`
--

CREATE TABLE `desas` (
  `id` int UNSIGNED NOT NULL,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kecamatan` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desas`
--

INSERT INTO `desas` (`id`, `nama_desa`, `id_kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'Banjar Lor', 1, NULL, NULL),
(2, 'Cigadung', 1, NULL, NULL),
(3, 'Ciawi', 1, NULL, NULL),
(4, 'Cibendung', 1, NULL, NULL),
(5, 'Blandongan', 1, NULL, NULL),
(6, 'Bandungsari', 1, NULL, NULL),
(7, 'Cigadung', 1, NULL, NULL),
(8, 'Blandongan', 1, NULL, NULL),
(9, 'Banjarsari', 2, NULL, NULL),
(10, 'Ciomas', 2, NULL, NULL),
(11, 'Bantarwaru', 2, NULL, NULL),
(12, 'Jipang', 2, NULL, NULL),
(13, 'Bantarkawung', 2, NULL, NULL),
(14, 'Cinanas', 2, NULL, NULL),
(15, 'Bangbayang', 2, NULL, NULL),
(16, 'Bantarwaru', 2, NULL, NULL),
(17, 'Kaliwlingi', 3, NULL, NULL),
(18, 'Kedunguter', 3, NULL, NULL),
(19, 'Kaligangsa Wetan', 3, NULL, NULL),
(20, 'Kalimati', 3, NULL, NULL),
(21, 'Lembarawa', 3, NULL, NULL),
(22, 'Lembarawa', 3, NULL, NULL),
(23, 'Lembarawa', 3, NULL, NULL),
(24, 'Lembarawa', 3, NULL, NULL),
(25, 'Bulusari', 4, NULL, NULL),
(26, 'Cipelem', 4, NULL, NULL),
(27, 'Dukuhlo', 4, NULL, NULL),
(28, 'Banjaratma', 4, NULL, NULL),
(29, 'Cimohong', 4, NULL, NULL),
(30, 'Bulusari', 4, NULL, NULL),
(31, 'Bangsri', 4, NULL, NULL),
(32, 'Bangsri', 4, NULL, NULL),
(33, 'Kalisumur', 5, NULL, NULL),
(34, 'Adisana', 5, NULL, NULL),
(35, 'Kalilangkap', 5, NULL, NULL),
(36, 'Kalilangkap', 5, NULL, NULL),
(37, 'Kalisumur', 5, NULL, NULL),
(38, 'Adisana', 5, NULL, NULL),
(39, 'Bumiayu', 5, NULL, NULL),
(40, 'Jatisawit', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informasis`
--

CREATE TABLE `informasis` (
  `id` int UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_informasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` int UNSIGNED NOT NULL,
  `nama_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatans`
--

INSERT INTO `kecamatans` (`id`, `nama_kecamatan`, `kode`, `created_at`, `updated_at`) VALUES
(1, 'Banjarharjo', 52265, NULL, NULL),
(2, 'Bantarkawung', 52274, NULL, NULL),
(3, 'Brebes', 52212, NULL, NULL),
(4, 'Bulakamba', 52253, NULL, NULL),
(5, 'Bumiayu', 52273, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_09_21_105124_create_tagihans_table', 1),
(16, '2022_09_21_105515_create_pelanggans_table', 1),
(17, '2022_09_21_110031_create_pengaduans_table', 1),
(18, '2022_09_21_110046_create_informasis_table', 1),
(19, '2023_06_30_144622_create_profils_table', 1),
(20, '2023_07_07_142544_create_pasangbarus_table', 1),
(21, '2023_12_21_150259_create_desas_table', 1),
(22, '2023_12_21_150316_create_kecamatans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasangbarus`
--

CREATE TABLE `pasangbarus` (
  `id` bigint UNSIGNED NOT NULL,
  `persyaratan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_pasang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasangbarus`
--

INSERT INTO `pasangbarus` (`id`, `persyaratan`, `harga_pasang`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt nobis dicta possimus?', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt nobis dicta possimus?', '2023-12-21 08:11:29', '2023-12-21 08:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rekening_air` bigint NOT NULL,
  `id_desa` int NOT NULL,
  `id_kecamatan` int NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `nama`, `email`, `foto`, `no_rekening_air`, `id_desa`, `id_kecamatan`, `remember_token`, `created_at`, `updated_at`) VALUES
(79, 'Gasti Yuniar', 'gpuspasari@yahoo.com', NULL, 2023120001, 6, 2, NULL, NULL, NULL),
(80, 'Kamidin Sirait S.Gz', 'hutagalung.dinda@narpati.co', NULL, 2023120002, 7, 1, NULL, NULL, NULL),
(81, 'Ami Haryanti M.Pd', 'hassanah.nilam@gmail.com', NULL, 2023120003, 4, 1, NULL, NULL, NULL),
(82, 'Rika Sudiati', 'farida.siska@halimah.co', NULL, 2023120004, 8, 1, NULL, NULL, NULL),
(83, 'Dalima Laras Prastuti M.M.', 'eman.nasyidah@yahoo.co.id', NULL, 2023120005, 3, 1, NULL, NULL, NULL),
(84, 'Icha Zulaika S.Gz', 'enteng87@narpati.co', NULL, 2023120006, 2, 1, NULL, NULL, NULL),
(85, 'Radit Pradana S.H.', 'natalia.sitorus@narpati.biz.id', NULL, 2023120007, 2, 1, NULL, NULL, NULL),
(86, 'Adikara Prakasa S.Pt', 'chandra68@yahoo.com', NULL, 2023120008, 2, 1, NULL, NULL, NULL),
(87, 'Latif Mandala S.IP', 'wadi.mansur@yahoo.co.id', NULL, 2023120009, 6, 1, NULL, NULL, NULL),
(88, 'Violet Sadina Nuraini S.Pd', 'rini.oktaviani@hastuti.tv', NULL, 2023120010, 8, 1, NULL, NULL, NULL),
(89, 'Humaira Haryanti', 'vwulandari@hasanah.co', NULL, 2023120011, 4, 1, NULL, NULL, NULL),
(90, 'Putri Rahayu Laksita', 'csuryatmi@latupono.in', NULL, 2023120012, 5, 1, NULL, NULL, NULL),
(91, 'Yuni Paramita Yulianti S.E.', 'lamar.usada@latupono.co.id', NULL, 2023120013, 7, 1, NULL, NULL, NULL),
(92, 'Gilda Kania Puspasari', 'dagustina@pradana.tv', NULL, 2023120014, 3, 1, NULL, NULL, NULL),
(93, 'Galar Nababan S.Psi', 'upurnawati@nasyiah.my.id', NULL, 2023120015, 5, 1, NULL, NULL, NULL),
(94, 'Tirta Uwais', 'violet.sitompul@yahoo.co.id', NULL, 2023120016, 2, 1, NULL, NULL, NULL),
(95, 'Ani Sudiati', 'humaira22@sitompul.go.id', NULL, 2023120017, 7, 1, NULL, NULL, NULL),
(96, 'Banara Tamba', 'imam.andriani@yahoo.co.id', NULL, 2023120018, 3, 1, NULL, NULL, NULL),
(97, 'Jamalia Betania Palastri M.M.', 'victoria22@manullang.co', NULL, 2023120019, 3, 1, NULL, NULL, NULL),
(98, 'Jaka Nababan', 'radit.suryono@sihotang.desa.id', NULL, 2023120020, 5, 1, NULL, NULL, NULL),
(99, 'Farhunnisa Mandasari', 'yhidayanto@zulaika.biz.id', NULL, 2023120021, 5, 1, NULL, NULL, NULL),
(100, 'Iriana Purwanti', 'harjasa38@gmail.co.id', NULL, 2023120022, 2, 1, NULL, NULL, NULL),
(101, 'Simon Nasim Pratama M.Ak', 'parman.rahimah@farida.biz', NULL, 2023120023, 5, 1, NULL, NULL, NULL),
(102, 'Rahmi Rahmawati', 'rahimah.wardaya@kurniawan.go.id', NULL, 2023120024, 7, 1, NULL, NULL, NULL),
(103, 'Kartika Mardhiyah', 'gasti79@pradana.biz.id', NULL, 2023120025, 3, 1, NULL, NULL, NULL),
(104, 'Zizi Usada', 'endra94@mardhiyah.info', NULL, 2023120026, 5, 1, NULL, NULL, NULL),
(106, 'Banawi Sihotang S.T.', 'wibisono.harja@gmail.com', NULL, 2023121001, 12, 2, NULL, NULL, NULL),
(107, 'Adika Uwais', 'irsad26@gmail.com', NULL, 2023121002, 12, 2, NULL, NULL, NULL),
(108, 'Radit Narpati', 'himawan.wahyuni@mardhiyah.id', NULL, 2023121003, 9, 2, NULL, NULL, NULL),
(109, 'Anom Kurniawan', 'aprastuti@yahoo.co.id', NULL, 2023121004, 14, 2, NULL, NULL, NULL),
(110, 'Farhunnisa Nasyiah', 'enasyidah@gmail.co.id', NULL, 2023121005, 15, 2, NULL, NULL, NULL),
(111, 'Janet Eka Novitasari M.Kom.', 'hariyah.elvina@yahoo.com', NULL, 2023121006, 12, 2, NULL, NULL, NULL),
(112, 'Bakidin Sinaga', 'namaga.patricia@gmail.co.id', NULL, 2023121007, 14, 2, NULL, NULL, NULL),
(113, 'Hartaka Mahesa Simanjuntak S.Kom', 'enteng67@yahoo.co.id', NULL, 2023121008, 10, 2, NULL, NULL, NULL),
(114, 'Sabrina Puspita S.Farm', 'puspita.dalima@yahoo.co.id', NULL, 2023121009, 16, 2, NULL, NULL, NULL),
(115, 'Yunita Pertiwi', 'wpuspita@pratiwi.mil.id', NULL, 2023121010, 16, 2, NULL, NULL, NULL),
(116, 'Jamalia Kania Fujiati', 'harsana.thamrin@yahoo.com', NULL, 2023121011, 9, 2, NULL, NULL, NULL),
(117, 'Putri Zulaika', 'uusada@pratama.sch.id', NULL, 2023121012, 10, 2, NULL, NULL, NULL),
(118, 'Anita Nasyidah', 'yulianti.lamar@yahoo.co.id', NULL, 2023121013, 9, 2, NULL, NULL, NULL),
(119, 'Silvia Latika Kuswandari', 'danuja63@yahoo.com', NULL, 2023121014, 15, 2, NULL, NULL, NULL),
(120, 'Luwar Firmansyah', 'siska.lazuardi@gmail.com', NULL, 2023121015, 16, 2, NULL, NULL, NULL),
(121, 'Rahman Wakiman Sihotang', 'uwais.heryanto@yolanda.ac.id', NULL, 2023121016, 9, 2, NULL, NULL, NULL),
(122, 'Jasmani Nainggolan', 'sinaga.ifa@wahyudin.biz', NULL, 2023121017, 14, 2, NULL, NULL, NULL),
(123, 'Gara Sihotang', 'parman76@utami.sch.id', NULL, 2023121018, 15, 2, NULL, NULL, NULL),
(124, 'Alambana Hidayanto', 'lukman.prakasa@yahoo.com', NULL, 2023121019, 11, 2, NULL, NULL, NULL),
(125, 'Maman Purwadi Sitorus S.E.', 'cengkir.pradana@megantara.info', NULL, 2023122001, 23, 3, NULL, NULL, NULL),
(126, 'Usman Damanik S.Ked', 'karman.rahayu@yahoo.co.id', NULL, 2023122002, 21, 3, NULL, NULL, NULL),
(127, 'Kasiran Saptono', 'suwarno.kiandra@haryanti.tv', NULL, 2023122003, 23, 3, NULL, NULL, NULL),
(128, 'Gamani Pardi Pradipta S.Sos', 'hutagalung.asmadi@zulaika.org', NULL, 2023122004, 23, 3, NULL, NULL, NULL),
(129, 'Salman Sitompul', 'shardiansyah@maheswara.name', NULL, 2023122005, 23, 3, NULL, NULL, NULL),
(130, 'Caket Utama', 'purnawati.darmaji@sirait.ac.id', NULL, 2023122006, 23, 3, NULL, NULL, NULL),
(131, 'Bakianto Prabowo', 'saefullah.daliman@kuswandari.net', NULL, 2023122007, 20, 3, NULL, NULL, NULL),
(132, 'Elvin Adriansyah', 'bagya39@yahoo.com', NULL, 2023122008, 23, 3, NULL, NULL, NULL),
(133, 'Juli Safitri', 'usudiati@andriani.co.id', NULL, 2023122009, 21, 3, NULL, NULL, NULL),
(134, 'Icha Hastuti', 'vanesa.wijayanti@hasanah.go.id', NULL, 2023122010, 18, 3, NULL, NULL, NULL),
(135, 'Patricia Hasna Anggraini S.E.I', 'rachel57@yahoo.com', NULL, 2023122011, 23, 3, NULL, NULL, NULL),
(136, 'Wardi Rajasa', 'sitorus.adikara@tampubolon.sch.id', NULL, 2023122012, 23, 3, NULL, NULL, NULL),
(137, 'Pia Utami', 'lusamah@suryatmi.co', NULL, 2023122013, 23, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduans`
--

CREATE TABLE `pengaduans` (
  `id` int UNSIGNED NOT NULL,
  `id_pelanggan` int UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kecamatan` int NOT NULL,
  `id_desa` int NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` int UNSIGNED NOT NULL,
  `profil` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `profil`, `facebook`, `instagram`, `no_telp`, `email`, `alamat`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(1, 'Penyedia sarana air bersih di Kabupaten Brebes adalah salah satu wilayah yang keberadaannya sejak jaman pemerintahan Belanda. PDAM Kabupaten Brebes dikelola berdasarkan PERDA No.7 Tahun 1992. Dibangunnya menara Persuhaan Daerah Air Minum (PDAM) yang menjulang tinggi setinggi 27 meter di jalan Taman Siswa yang berdiri pada tahun 1998.', 'https://www.facebook.com/pdambrebes/', 'https://www.instagram.com/tirtabaribis/', '085713134141', 'tirtabaribis.brebes@gmail.com', 'Jalan Taman Siswa No 3, Brebes, Jawa Tengah, Indonesia', 'Menjadi Perumda Air Minum yang Unggul, Modern, dan Berwawasan Lingkungan', '1. Memberikan pelayanan air yang unggul kepada konsumen secara kualitas, kuantitas, kontinuitas serta keterjangkauan\n                        2. Ikut serta aktif dalam pembangunan daerah dalam penyediaan air bersih.', '2023-12-21 08:10:55', '2023-12-21 08:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `tagihans`
--

CREATE TABLE `tagihans` (
  `id` int UNSIGNED NOT NULL,
  `no_rekening_air` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_tagihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin', NULL, '$2y$10$w6UZ3KMYShNwYp69naELo.feUyIUWFt5CoR21BeJUKTY1q8CWM23S', NULL, '2023-12-21 11:13:45', '2023-12-21 11:13:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desas`
--
ALTER TABLE `desas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `informasis`
--
ALTER TABLE `informasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasangbarus`
--
ALTER TABLE `pasangbarus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pelanggans_email_unique` (`email`),
  ADD UNIQUE KEY `pelanggans_no_rekening_air_unique` (`no_rekening_air`);

--
-- Indexes for table `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengaduans_id_pelanggan_foreign` (`id_pelanggan`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profils_no_telp_unique` (`no_telp`),
  ADD UNIQUE KEY `profils_email_unique` (`email`);

--
-- Indexes for table `tagihans`
--
ALTER TABLE `tagihans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desas`
--
ALTER TABLE `desas`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasis`
--
ALTER TABLE `informasis`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pasangbarus`
--
ALTER TABLE `pasangbarus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `pengaduans`
--
ALTER TABLE `pengaduans`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tagihans`
--
ALTER TABLE `tagihans`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD CONSTRAINT `pengaduans_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
