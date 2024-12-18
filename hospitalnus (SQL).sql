-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 03:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalnus`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `doctor`, `date`, `message`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(10, 'user', 'user@gmail.com', '08123456789', 'dr. Muhammad Akbar, Sp.THT-KL', '2023-06-16', 'Check Up', 'Approved', '10', '2023-06-15 05:21:35', '2023-06-15 05:24:26'),
(11, 'user', 'user@gmail.com', '08123456789', 'dr. Hadiyanti, Sp.PD', '2023-06-19', 'Want a Consult', 'Cancelled', '10', '2023-06-15 05:22:54', '2023-06-15 05:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `phone`, `department`, `room`, `image`, `created_at`, `updated_at`) VALUES
(40, 'dr. Siska Natalia S, Sp. A\',', '08123456781', 'Pediatric', '102', '1686340991.jpg', '2023-06-09 06:03:11', '2023-06-09 06:03:11'),
(41, 'dr. Muhammad Akbar, Sp.THT-KL', '08123456782', 'Ear, Nose, and Throat (ENT)', '201', '1686341018.jpg', '2023-06-09 06:03:38', '2023-06-09 06:03:38'),
(42, 'dr. Tomson S, Sp. THT-KL', '08123456783', 'Ear, Nose, and Throat (ENT)', '202', '1686341069.jpg', '2023-06-09 06:04:29', '2023-06-09 06:04:29'),
(43, 'dr. Arif Budiman,Sp.M', '08123456784', 'Eye', '301', '1686341120.jpg', '2023-06-09 06:05:20', '2023-06-09 06:05:20'),
(44, 'dr. Ika Citra Susanti. Sp. M', '08123456785', 'Eye', '302', '1686341162.jpg', '2023-06-09 06:06:02', '2023-06-09 06:06:02'),
(45, 'drg. Mira Fahmi', '08123456786', 'Dental', '401', '1686341183.jpg', '2023-06-09 06:06:23', '2023-06-09 06:06:23'),
(46, 'drg. Agatha Sucita, A', '08123456787', 'Dental', '402', '1686341208.jpg', '2023-06-09 06:06:48', '2023-06-09 06:06:48'),
(47, 'Dr. Adhi Kurniawan, Sp.JP-FIHA', '08123456788', 'Cardiology', '501', '1686341259.jpeg', '2023-06-09 06:07:39', '2023-06-09 06:07:39'),
(48, 'dr. Shafira Nadia, Sp. JP-FIHA', '08123456789', 'Cardiology', '502', '1686341300.jpg', '2023-06-09 06:08:20', '2023-06-09 06:08:20'),
(49, 'dr. M. Mursal, Sp. B, Finach, MARS', '087776665522', 'General Surgery', '604', '1686808776.jpg', '2023-06-09 06:08:47', '2023-06-14 22:59:36'),
(50, 'dr. Hesty L.T, Sp.B', '08123456792', 'General Surgery', '602', '1686341362.jpg', '2023-06-09 06:09:22', '2023-06-09 06:09:22'),
(51, 'dr. Azizah, Sp.KJ', '08123456793', 'Psychiatry', '701', '1686341402.jpg', '2023-06-09 06:10:02', '2023-06-09 06:10:02'),
(52, 'dr. Rudy Wijono, Sp.KJ', '08123456794', 'Psychiatry', '702', '1686341422.jpg', '2023-06-09 06:10:22', '2023-06-09 06:10:22'),
(53, 'dr. Hadiyanti, Sp.PD', '08123456795', 'Internal Medicine', '801', '1686341446.jpg', '2023-06-09 06:10:46', '2023-06-09 06:10:46'),
(63, 'dr. Monita Lubis, Sp. PD', '08123456796', 'Internal Medicine', '802', '1686813606.jpg', '2023-06-14 12:48:06', '2023-06-15 00:20:06');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_07_151456_create_sessions_table', 1),
(7, '2023_06_09_135014_create_doctors_table', 2),
(8, '2023_06_09_204353_create_appointments_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('PKokZHHvpKRGwzfYsX23xnlkKlb8ju84m2KWX4OS', 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVHRDcHVicGw1ZzAyTlMzNE0zbUdMQ2kwcndWY0JUWlppQnZkQzRySiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG93ZG9jdG9yIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTI7fQ==', 1686836307);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(10, 'user', 'user@gmail.com', '085717646899', 'Nusa Dua', '0', NULL, '$2y$10$5O2tdTj6QRt0AIKJ2a36gecfJQaEc2qoE47NTGxCr03EfdCNDYZYO', NULL, NULL, NULL, 'U382Wbys4wuOyVxuwMW8tD1Gi3SQ0LWPABBqp3n7Xh2NUYuwzQciy1rwgx4q', NULL, NULL, '2023-06-11 15:44:04', '2023-06-11 15:44:04'),
(12, 'admin', 'admin@gmail.com', '02112345678', 'UMN', '1', NULL, '$2y$10$nseb6LrFYoFhOOXXxmSeFOkdLmv.EhW23oK3AwJ5pre.yTcA/IwrS', NULL, NULL, NULL, 'rEs9QKoKkbX6hkz7SqwIY6xPDfAXqbb6iYprLCnzLmMlIanE0HI8P8QR25uY', NULL, NULL, '2023-06-14 08:07:01', '2023-06-14 08:07:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
