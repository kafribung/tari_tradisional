-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 03:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_tari_tradisional`
--

-- --------------------------------------------------------

--
-- Table structure for table `dances`
--

CREATE TABLE `dances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dances`
--

INSERT INTO `dances` (`id`, `title`, `img`, `description`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Tari Saman Meuseukat', '1589379507.png', 'Tari Saman merupakan salah satu tari tradisional asal Indonesia yang bahkan sudah cukup dikenal di seluruh mancanegara. Tarian satu ini merupakan sebuah tarian suku Gayo yang biasa ditampilkan ketika perayaan peristiwa-peristiwa penting di dalam adat.\r\nMaka dari itu, syair yang terdapat di dalam salah satu tarian dari 20 tari tradisional asal Indonesia ini menggunakan Bahasa Gayo.\r\nDi dalam beberapa literatur menyebutkan bahwa Tari Saman dikembangkan oleh Syekh Saman yang merupakan seorang ulama asal Gayo di Aceh Tenggara.\r\nPada 24 November 2011, Tari Saman ditetapkan UNESCO sebagai Daftar Representatif Budaya Takbenda Warisan Manusia dalam sidang ke-6 Komite Antar-Pemerintah untuk Perlindungan Warisan Budaya Tak Benda UNESCO di Bali.', 1, NULL, '2020-05-13 06:18:27', '2020-05-13 06:18:27'),
(3, 'Tari Kecak', '1589379654.png', 'Selanjutnya ada Tari Kecak dari Bali yang juga masuk ke dalam 20 tari tradisional asal Indonesia. Jenis tarian satu ini menggambarkan tentang cerita Pewayangan, khususnya untuk cerita Ramayana yang dipertunjukan dengan seni gerak dan tarian.\r\nTari Kecak biasanya dimainkan oleh sekelompok penari laki-laki yang duduk berbaris melingkar yang diiringi dengan irama menyerukan “cak” ketika mengangkat kedua lengan untuk menggambarkan kisah Ramayana ketika barisan kera membantu Rama melawan Rahwana.\r\nTarian satu ini sangat terkenal di Bali sekaligus menjadi daya tarik para wisatawan yang tengah berkunjung ke Pulau Dewata tersebut.', 1, NULL, '2020-05-13 06:20:54', '2020-05-13 06:20:54'),
(4, 'Tari Sekapur Sirih', '1589379695.png', 'Tari Sekapur Sirih merupakan tari tradisional asal Indonesia yang berasal dari Provinsi Jambi, Kepulauan Riau dan Riau. Tarian ini biasanya menjadi tarian selamat datang guna menyambut para tamu-tamu besar yang hadir di sebuah acara.\r\nMenggambarkan ungkapan rasa putih hati masyarakat dalam menyambut tamu, salah satu tarian dari 20 tari tradisional asal Indonesia ini biasanya ditarikan oleh 9 orang penari perempuan, 3 orang penari laki-laki, 1 orang yang bertugas membawa payung, serta 2 orang pengawal.', 1, NULL, '2020-05-13 06:21:35', '2020-05-13 06:21:35'),
(5, 'Tari Jaipong', '1589752889.png', 'Tari Jaipong merupakan salah satu jenis tari asal Bandung, Jawa Barat dan sudah cukup populer, khususnya di telinga masyarakat Indonesia. Diciptakan oleh Seniman berdarah Sunda, Gugum Gumbira dan Haji Suanda, tarian ini merupakan gabungan dari beberapa kesenian seperti Wayang Golek, Pencak Silat, dan Ketuk Tilu.\r\nMaka dari itu, tak heran apabila gerakannya cenderung enerjik namun juga unik, dengan disertai oleh iringan alat musik degung. Bahkan, tak jarang tarian ini sering mengundang gelak tawa para penonton karena keunikannya yang dihasilkan.', 1, NULL, '2020-05-13 06:22:32', '2020-05-17 14:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2020_05_13_110636_create_dances_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'iccang', 'iccang@iccang.com', NULL, '$2y$10$.ttflP6hgFX8C.rAWp28Ue5u3ElV.OlsTBGOoBZiHC8vw7fK94WXy', 1, NULL, '2020-05-13 06:00:19', '2020-05-17 14:01:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dances`
--
ALTER TABLE `dances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dances_title_unique` (`title`),
  ADD KEY `dances_user_id_foreign` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dances`
--
ALTER TABLE `dances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dances`
--
ALTER TABLE `dances`
  ADD CONSTRAINT `dances_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
