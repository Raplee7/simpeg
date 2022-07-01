-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2022 at 10:51 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg3`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` int(11) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgllahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statuskawin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `foto`, `nip`, `nama`, `jeniskelamin`, `tlahir`, `tgllahir`, `notelpon`, `agama`, `statuskawin`, `alamat`, `created_at`, `updated_at`) VALUES
(9, 'IMG_20210922_124659-removebg-preview.png', 12200964, 'Rafli Marian Mirza', 'Laki-Laki', 'Pontianak', '2002-03-18 00:00:00', '089520280405', 'Islam', 'Belum Menikah', 'Jln Kapten Bambang Ismoyo no.38', '2022-05-27 07:30:28', '2022-05-27 07:30:28'),
(10, 'WhatsApp Image 2021-07-24 at 20.16.40.jpeg', 46900221, 'Ilfar Nairam Azrim', 'Perempuan', 'Pontianak', '2002-03-18 00:00:00', '08987654321', 'Islam', 'Belum Menikah', 'Jln Kapten Bambang Ismoyo no.38', '2022-05-27 07:31:46', '2022-05-27 07:31:46'),
(11, 'WhatsApp Image 2021-06-10 at 16.43.56.jpeg', 999999, 'kehidupan', 'Laki-Laki', 'dunia', '9999-09-09 00:00:00', '7777777', 'Anime', 'Belum Menikah', 'dunia', '2022-05-27 07:32:47', '2022-05-27 07:32:47'),
(16, '1653979107.jpg', 123456, 'H00man', 'Laki-Laki', 'Dunia', '2022-05-12 00:00:00', '123452', 'Anime', 'Menikah', 'Dunia', '2022-05-30 22:59:54', '2022-05-30 23:38:27'),
(17, 'IMG_20210922_124659-removebg-preview-removebg-preview.jpeg', 1223, 'tes error 24', 'Laki-Laki', '2022-06-08', '2022-06-08 00:00:00', '1223', 'WEB', 'Belum Menikah', 'Internet', '2022-06-06 21:31:27', '2022-06-10 06:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_24_130237_create_employees_table', 1),
(6, '2022_05_27_140032_add_role_to_users_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'RAFLI MARIAN MIRZA', 'raflimarianm@gmail.com', NULL, '$2y$10$3ed1lg.fQ0D2X.D7XhGx0uKAbKZ8/GrPkELku0f.BB/oGmezBBO/y', NULL, '2022-05-27 02:11:23', '2022-05-27 02:11:23', 'admin'),
(2, 'Ilfar Nairam Azrim', 'ilfar@gmail.com', NULL, '$2y$10$FDIdxKwqeDV1blCW1cNaBOv0sM9/IDiOClzT6VIej0wOgq1oYSk7G', NULL, '2022-05-27 07:03:46', '2022-05-27 07:03:46', 'user'),
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$10$.qWMWC5dwK9mvgKNgNjwguiyd77MtAggUGsYhXAMVQlvRqx/XnWzq', NULL, '2022-05-27 07:25:19', '2022-05-27 07:25:19', 'admin'),
(7, 'tes', 'lavida@gmail.com', NULL, '$2y$10$PY0NODxWMpGNOpGtXTM5v.yg4P/8rhDzbRBc7Z76ZhBHZ6gY38uha', NULL, '2022-06-07 01:18:13', '2022-06-07 01:18:13', 'user'),
(8, 'tes2', 'tes3@gmail.com', NULL, '$2y$10$cJPsAvE.aucnsL9ZxpEFsOeyYtRcyXHYFsZeJW1asrASIKrZr6Xme', NULL, '2022-06-10 05:37:33', '2022-06-10 05:37:33', 'user'),
(9, 'tes kesekian kalinya', 'tes10@gmail.com', NULL, '$2y$10$EK/E.nu3s.ILVy1mALJcve6ntoc03xcruKT9P00HJttD7zzaUxTfS', NULL, '2022-06-11 01:55:38', '2022-06-11 01:55:38', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
