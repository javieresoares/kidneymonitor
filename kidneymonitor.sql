-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2025 at 08:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kidneymonitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `cek_ginjal`
--

CREATE TABLE `cek_ginjal` (
  `cek_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bp` float NOT NULL,
  `bgr` float NOT NULL,
  `rc` float NOT NULL,
  `sg` float NOT NULL,
  `bu` float NOT NULL,
  `htn` enum('yes','no') NOT NULL,
  `al` double NOT NULL,
  `su` double NOT NULL,
  `sc` enum('yes','no') NOT NULL,
  `sod` double NOT NULL,
  `pot` double NOT NULL,
  `rbc` enum('normal','abnormal') NOT NULL,
  `pc` enum('normal','abnormal') NOT NULL,
  `pcc` enum('present','notpresent') NOT NULL,
  `ba` enum('present','notpresent') NOT NULL,
  `hemo` double NOT NULL,
  `pcv` int(11) NOT NULL,
  `wc` int(11) NOT NULL,
  `dm` enum('yes','no') NOT NULL,
  `cad` enum('yes','no') NOT NULL,
  `appet` enum('good','poor') NOT NULL,
  `pe` enum('yes','no') NOT NULL,
  `ane` enum('yes','no') NOT NULL,
  `classification` enum('ckd','normal') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2025_01_04_100400_create_users_table', 1),
(2, '2025_01_04_100429_create_user_data_table', 1),
(3, '2025_01_04_100452_create_cek_ginjal_table', 1),
(5, '2025_01_04_105237_create_sessions_table', 2),
(6, '2025_01_05_023436_update_cek_ginjal_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('kCXpNz6VxChIxHhWAT3NV4JtI86fch0IYAyggqp0', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiN1NyVndWaG90Y0lDbDhOWUduaVV4ZXZXQ1FkdGZ1cmxqRHIyY0dOYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Nlay1naW5qYWwiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Nlay1naW5qYWwiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1736062574);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama_lengkap`, `tanggal_lahir`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '2004-09-03', 'admin@gmail.com', '$2y$12$aQJEqWNg0lRRXnHvOHtihe1wD7Aw9pD3D7eEeGlWtZpabs..DlZvS', 'admin', '2025-01-04 06:54:27', '2025-01-04 06:54:27'),
(2, 'user', 'User', '2005-02-17', 'user@gmail.com', '$2y$12$aQJEqWNg0lRRXnHvOHtihe1wD7Aw9pD3D7eEeGlWtZpabs..DlZvS', 'user', '2025-01-04 07:26:08', '2025-01-04 07:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `golongan_darah` varchar(255) NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  `riwayat_obat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `user_id`, `golongan_darah`, `riwayat_penyakit`, `riwayat_obat`, `created_at`, `updated_at`) VALUES
(3, 2, 'AB', '-', '-', '2025-01-04 18:27:57', '2025-01-04 18:27:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cek_ginjal`
--
ALTER TABLE `cek_ginjal`
  ADD PRIMARY KEY (`cek_id`),
  ADD KEY `cek_ginjal_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_data_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cek_ginjal`
--
ALTER TABLE `cek_ginjal`
  MODIFY `cek_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cek_ginjal`
--
ALTER TABLE `cek_ginjal`
  ADD CONSTRAINT `cek_ginjal_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
