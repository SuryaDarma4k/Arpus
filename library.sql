-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2025 at 04:29 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1753448479),
('laravel-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1753448479;', 1753448479);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `direct_visitors`
--

CREATE TABLE `direct_visitors` (
  `id` bigint UNSIGNED NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year NOT NULL,
  `titik_layanan` int UNSIGNED NOT NULL,
  `anggota_baru` int UNSIGNED NOT NULL,
  `pengunjung` int UNSIGNED NOT NULL,
  `buku_yang_dibaca` int UNSIGNED NOT NULL,
  `jumlah` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `direct_visitors`
--

INSERT INTO `direct_visitors` (`id`, `bulan`, `tahun`, `titik_layanan`, `anggota_baru`, `pengunjung`, `buku_yang_dibaca`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Januari', '2025', 24, 0, 4350, 4672, 0, '2025-07-24 09:49:30', '2025-07-24 09:49:30'),
(2, 'Februari', '2025', 34, 8, 4228, 5267, 0, '2025-07-24 09:49:59', '2025-07-24 09:49:59'),
(3, 'Maret', '2025', 13, 7, 1845, 1613, 0, '2025-07-24 09:50:33', '2025-07-24 09:50:33');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership_registrations`
--

CREATE TABLE `membership_registrations` (
  `id` bigint UNSIGNED NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year NOT NULL,
  `laki_laki` int UNSIGNED NOT NULL,
  `perempuan` int UNSIGNED NOT NULL,
  `jumlah` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membership_registrations`
--

INSERT INTO `membership_registrations` (`id`, `bulan`, `tahun`, `laki_laki`, `perempuan`, `jumlah`, `created_at`, `updated_at`) VALUES
(4, 'Januari', '2025', 7, 27, 34, '2025-07-24 09:55:58', '2025-07-24 09:55:58'),
(5, 'Februari', '2025', 16, 60, 76, '2025-07-24 09:56:19', '2025-07-24 09:56:19'),
(6, 'Maret', '2025', 11, 29, 40, '2025-07-24 09:56:37', '2025-07-24 09:56:37');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_24_135549_create_visitor_by_genders_table', 1),
(5, '2025_07_24_135557_create_visitor_by_jobs_table', 1),
(6, '2025_07_24_135607_create_visitor_by_book_types_table', 1),
(7, '2025_07_24_135633_create_direct_visitors_table', 1),
(8, '2025_07_24_135651_create_membership_registrations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4SWsnVp7K8Tp29BB0pvFlYbJZmyh9l87fSGAuxkx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU01VSmpjaVNQeG5QblNiRVhOak9XUnZKa2hJSmlXaWJENzY3ZTY4SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753499255),
('afAwR2WqdWU7H9pZSOgMIEEvzql3yZ6iEYycb2zx', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVWtUTkZETWNHbHNUM3BDNFlEYUhVNGRCOWlNN3h2Tkl4SXBweElLMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkdHZETnA2aElDYTdiMnFYZnJKZEtVT0pBNGFpNlBNcVVxdWIxMHlXNHdCM1cyMzlWVGx3ZWUiO30=', 1753428638),
('F4vxQv8oYnCZ4yS8OVSUo52wqgyqqMXKXqN9O2xP', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiSndjb29JWWpzaUJMV1cyeU9Vc0ZnZklHc1lIZXpyRXBvYlg0NTZCRSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vbWVtYmVyc2hpcC1yZWdpc3RyYXRpb25zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJHR2RE5wNmhJQ2E3YjJxWGZySmRLVU9KQTRhaTZQTXFVcXViMTB5VzR3QjNXMjM5VlRsd2VlIjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1753377531),
('IM4wZTfaPIIgvzy1pb1Vt8GNPXQMEu9YkivdccMa', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiVVJyY0JzOEpZdktmTUZVenlpSzJxT01lNjNCM3Q2T2lnMUhWbXdHZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/dHJpd3VsYW49MSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkdHZETnA2aElDYTdiMnFYZnJKZEtVT0pBNGFpNlBNcVVxdWIxMHlXNHdCM1cyMzlWVGx3ZWUiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1753457312);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$tvDNp6hICa7b2qXfrJdKUOJA4ai6PMqUqub10yW4wB3W239VTlwee', NULL, '2025-07-24 09:17:42', '2025-07-24 09:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_by_book_types`
--

CREATE TABLE `visitor_by_book_types` (
  `id` bigint UNSIGNED NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year NOT NULL,
  `000` int UNSIGNED NOT NULL,
  `100` int UNSIGNED NOT NULL,
  `200` int UNSIGNED NOT NULL,
  `300` int UNSIGNED NOT NULL,
  `400` int UNSIGNED NOT NULL,
  `500` int UNSIGNED NOT NULL,
  `600` int UNSIGNED NOT NULL,
  `700` int UNSIGNED NOT NULL,
  `800` int UNSIGNED NOT NULL,
  `900` int UNSIGNED NOT NULL,
  `fiksi` int UNSIGNED NOT NULL,
  `jumlah` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_by_book_types`
--

INSERT INTO `visitor_by_book_types` (`id`, `bulan`, `tahun`, `000`, `100`, `200`, `300`, `400`, `500`, `600`, `700`, `800`, `900`, `fiksi`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Januari', '2025', 7, 7, 10, 17, 6, 5, 9, 38, 82, 5, 1, 187, '2025-07-24 10:03:05', '2025-07-24 10:03:05'),
(2, 'Februari', '2025', 5, 6, 14, 13, 6, 5, 9, 38, 82, 5, 1, 184, '2025-07-24 10:05:41', '2025-07-24 10:05:41'),
(3, 'Maret', '2025', 7, 3, 17, 8, 3, 4, 5, 19, 46, 9, 4, 125, '2025-07-24 10:06:39', '2025-07-24 10:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_by_genders`
--

CREATE TABLE `visitor_by_genders` (
  `id` bigint UNSIGNED NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year NOT NULL,
  `laki_laki` int UNSIGNED NOT NULL,
  `perempuan` int UNSIGNED NOT NULL,
  `total` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_by_genders`
--

INSERT INTO `visitor_by_genders` (`id`, `bulan`, `tahun`, `laki_laki`, `perempuan`, `total`, `created_at`, `updated_at`) VALUES
(1, 'Januari', '2025', 289, 345, 634, '2025-07-24 10:07:34', '2025-07-24 10:07:34'),
(2, 'Februari', '2025', 184, 282, 466, '2025-07-24 10:07:49', '2025-07-24 10:07:49'),
(3, 'Maret', '2025', 167, 259, 426, '2025-07-24 10:08:01', '2025-07-24 10:08:01'),
(4, 'April', '2025', 155, 229, 384, '2025-07-25 08:21:29', '2025-07-25 08:21:29'),
(5, 'Mei', '2025', 187, 318, 505, '2025-07-25 08:21:46', '2025-07-25 08:21:46'),
(6, 'Juni', '2025', 414, 698, 1112, '2025-07-25 08:22:08', '2025-07-25 08:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_by_jobs`
--

CREATE TABLE `visitor_by_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year NOT NULL,
  `pelajar` int UNSIGNED NOT NULL,
  `mahasiswa` int UNSIGNED NOT NULL,
  `pns` int UNSIGNED NOT NULL,
  `umum` int UNSIGNED NOT NULL,
  `lainnya` int UNSIGNED NOT NULL,
  `jumlah` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_by_jobs`
--

INSERT INTO `visitor_by_jobs` (`id`, `bulan`, `tahun`, `pelajar`, `mahasiswa`, `pns`, `umum`, `lainnya`, `jumlah`, `created_at`, `updated_at`) VALUES
(2, 'Januari', '2025', 97, 296, 56, 104, 81, 634, '2025-07-24 10:10:09', '2025-07-24 10:10:09'),
(3, 'Februari', '2025', 98, 218, 23, 74, 53, 466, '2025-07-24 10:10:32', '2025-07-24 10:10:32'),
(4, 'Maret', '2025', 56, 174, 42, 125, 29, 426, '2025-07-24 10:10:56', '2025-07-24 10:10:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `direct_visitors`
--
ALTER TABLE `direct_visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_registrations`
--
ALTER TABLE `membership_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `visitor_by_book_types`
--
ALTER TABLE `visitor_by_book_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_by_genders`
--
ALTER TABLE `visitor_by_genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_by_jobs`
--
ALTER TABLE `visitor_by_jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `direct_visitors`
--
ALTER TABLE `direct_visitors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_registrations`
--
ALTER TABLE `membership_registrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor_by_book_types`
--
ALTER TABLE `visitor_by_book_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitor_by_genders`
--
ALTER TABLE `visitor_by_genders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visitor_by_jobs`
--
ALTER TABLE `visitor_by_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
