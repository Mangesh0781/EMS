-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2025 at 12:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `venue` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `organizer_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('upcoming','ongoing','completed') NOT NULL DEFAULT 'upcoming',
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `date`, `venue`, `description`, `organizer_id`, `status`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Wedding Anniversary 2025', '2024-12-15', 'Grand Ballroom', '25th wedding anniversary celebration.', 1, 'upcoming', NULL, '2025-03-20 04:38:39', '2025-03-20 04:38:39'),
(2, 'Tech Conference 2025', '2025-06-10', 'Downtown Convention Center', 'A global conference on emerging technologies and AI.', 1, 'upcoming', NULL, '2025-03-20 05:04:51', '2025-03-20 05:04:51'),
(3, 'jalna jalna', '2025-03-22', 'jalna', 'ajalna', 1, 'upcoming', NULL, '2025-03-20 05:44:31', '2025-03-20 05:44:31'),
(4, 'mangya ki shadi', '2025-03-22', 'jes college', 'pragati aur shrawani ke sath', 1, 'upcoming', NULL, '2025-03-20 05:49:58', '2025-03-20 05:49:58'),
(5, 'yash ki baraat', '2025-03-22', 'annapura', 'biryani ban rahi hai', 1, 'upcoming', NULL, '2025-03-20 05:56:12', '2025-03-20 05:56:12'),
(6, 'sagar ka 13va', '2025-04-02', 'badnapur ka samshan ghat', 'market gira sagar mara', 1, 'upcoming', NULL, '2025-03-20 06:22:02', '2025-03-20 06:22:02'),
(7, 'Laravel Conference', '2025-08-15', 'Tech Hub, NY', 'A conference for Laravel developers.', 1, 'upcoming', NULL, '2025-03-20 06:30:00', '2025-03-20 06:30:00'),
(8, 'khotkar ki shadi', '2025-03-22', 'gorantyal ke sath', 'we support LGBTQ', 1, 'upcoming', 'uploads/d8XxA80nVxVSwfLhdqZehe4F0KoOAvXOAL37bsCs.jpg', '2025-03-20 06:32:44', '2025-03-20 06:32:44');

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
(20, '2025_03_18_090412_create_events_table', 1),
(21, '2025_03_19_123746_create_events_table', 2),
(23, '2014_10_12_000000_create_users_table', 3),
(24, '2014_10_12_100000_create_password_reset_tokens_table', 3),
(25, '2019_08_19_000000_create_failed_jobs_table', 3),
(26, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(27, '2025_03_19_125850_create_events_table', 3),
(28, '2025_03_20_113915_add_image_path_to_events_table', 4);

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'auth_token', 'a42dc563257e1883df800b002aae83ab250517b2f5236b2fd1a9f6d37634b647', '[\"*\"]', NULL, NULL, '2025-03-20 04:10:13', '2025-03-20 04:10:13'),
(2, 'App\\Models\\User', 1, 'auth_token', 'ef4b09ae3dc08fd51b512ba5c22b3b001b1fce3736bcc04eb79088cdd8d08742', '[\"*\"]', NULL, NULL, '2025-03-20 04:10:29', '2025-03-20 04:10:29'),
(3, 'App\\Models\\User', 1, 'auth_token', 'eb85c92e4ac986d3805a78c8c1c6bf9e0cbe2aa9173402c1203e6b4e73209ca2', '[\"*\"]', NULL, NULL, '2025-03-20 04:13:07', '2025-03-20 04:13:07'),
(4, 'App\\Models\\User', 1, 'auth_token', '439fac3a1e3fb6574270539520d4f3a539ca4d5a6f00b25b98a4e2ae7aa03a58', '[\"*\"]', NULL, NULL, '2025-03-20 04:24:43', '2025-03-20 04:24:43'),
(5, 'App\\Models\\User', 1, 'auth_token', 'a38038f0b525b1f76094e090b663b5fa5953d5b4989550217744148fd0f49f8a', '[\"*\"]', '2025-03-20 06:30:00', NULL, '2025-03-20 04:36:54', '2025-03-20 06:30:00'),
(6, 'App\\Models\\User', 1, 'auth_token', '757a40a77a03eee9bb1f750c4e30041f3fb1f424ed7d7e2d52caeb3329695fc0', '[\"*\"]', NULL, NULL, '2025-03-20 05:02:58', '2025-03-20 05:02:58'),
(7, 'App\\Models\\User', 1, 'auth_token', '8924c970a282240b403d15d081ebde5611e160e44b9a7b5c872549f47f5c3235', '[\"*\"]', NULL, NULL, '2025-03-20 05:02:59', '2025-03-20 05:02:59'),
(8, 'App\\Models\\User', 1, 'auth_token', '2f5442d550a772b2f9496f1903ac85c6a20e38d44410efb7d7033f7f4cb5b076', '[\"*\"]', NULL, NULL, '2025-03-20 05:21:18', '2025-03-20 05:21:18'),
(9, 'App\\Models\\User', 1, 'auth_token', '4ee601ab26f917e1b204b1cfb70d2ed20744e0baadca059e369e7fc16d884aa1', '[\"*\"]', NULL, NULL, '2025-03-20 05:25:37', '2025-03-20 05:25:37'),
(10, 'App\\Models\\User', 1, 'auth_token', '53ed5f2efcf3755641f46f33c35dd4ddf579e03920277e6644f0b99adb17a80d', '[\"*\"]', NULL, NULL, '2025-03-20 05:25:41', '2025-03-20 05:25:41'),
(11, 'App\\Models\\User', 1, 'auth_token', '7f569a1235eff5188f312859b1ea3f1c51aaa954404417634e1727a79fafb94e', '[\"*\"]', NULL, NULL, '2025-03-20 05:25:42', '2025-03-20 05:25:42'),
(12, 'App\\Models\\User', 1, 'auth_token', '3e260060d07c09c2aee5dc26df359d0e5b0cc71afe7fafb54918e4570b6e0bf6', '[\"*\"]', NULL, NULL, '2025-03-20 05:25:42', '2025-03-20 05:25:42'),
(13, 'App\\Models\\User', 1, 'auth_token', 'c8c8f25acfa9cf32f89113d7f1c5a9024c564ce5930b0e59024cf7c9922de41f', '[\"*\"]', NULL, NULL, '2025-03-20 05:25:43', '2025-03-20 05:25:43'),
(14, 'App\\Models\\User', 1, 'auth_token', '63a761ec64e98505ed74f334ff7303d04acab0a4a2e8622a820cff45928ab355', '[\"*\"]', NULL, NULL, '2025-03-20 05:29:43', '2025-03-20 05:29:43'),
(15, 'App\\Models\\User', 1, 'auth_token', '4b1ed714d9fd0c6edc0a3a2e3864d29085c76d0e7ff136e549adfec08efb2480', '[\"*\"]', NULL, NULL, '2025-03-20 05:29:59', '2025-03-20 05:29:59'),
(16, 'App\\Models\\User', 1, 'auth_token', '13bca2aeb13c7a0d3fa09ae16c4910c93c93d27a91cf6bfb87b2c1fead17544a', '[\"*\"]', NULL, NULL, '2025-03-20 05:30:00', '2025-03-20 05:30:00'),
(17, 'App\\Models\\User', 1, 'auth_token', '840f82974685cdd9073b80bf498fcee8c6fd0cc41ef55e55af58b6c8f6001141', '[\"*\"]', NULL, NULL, '2025-03-20 05:30:01', '2025-03-20 05:30:01'),
(18, 'App\\Models\\User', 1, 'auth_token', '63cb0d7784bec07b424f1a79197643e92be3f90fd47c24112e4f26efa4357212', '[\"*\"]', NULL, NULL, '2025-03-20 05:30:33', '2025-03-20 05:30:33'),
(19, 'App\\Models\\User', 1, 'auth_token', '9c8a9389a303902d54f498345d2b0954ba54132ab693666e5c3e6d566ff3d335', '[\"*\"]', NULL, NULL, '2025-03-20 05:31:37', '2025-03-20 05:31:37'),
(20, 'App\\Models\\User', 1, 'auth_token', '08cc2fe0781d53065fcf21387aa5c45077c8efd82505d2a03153de33bbdd7c0d', '[\"*\"]', NULL, NULL, '2025-03-20 05:33:33', '2025-03-20 05:33:33'),
(21, 'App\\Models\\User', 1, 'auth_token', '59f81f1b0ac541c3aaffa0da22188af14a057c83b0331a6a04b7fb83f76956a2', '[\"*\"]', NULL, NULL, '2025-03-20 05:35:40', '2025-03-20 05:35:40'),
(22, 'App\\Models\\User', 1, 'auth_token', 'b3b945607d5b8fe6e1212184333c46df23ac78e3c441c900976fe71ecf44bcf9', '[\"*\"]', NULL, NULL, '2025-03-20 05:38:32', '2025-03-20 05:38:32'),
(23, 'App\\Models\\User', 1, 'auth_token', '4803e6d9abe0e4a8288b8c29bc27a57a2a20aa3629051ebb33cc6ad3b5fbd6ce', '[\"*\"]', '2025-03-20 05:49:58', NULL, '2025-03-20 05:42:10', '2025-03-20 05:49:58'),
(24, 'App\\Models\\User', 1, 'auth_token', 'c2162dd485e7dfbfa6ad60e16bce9f7a787edb5dc79e63ef71723b8f3bab7828', '[\"*\"]', '2025-03-20 05:56:44', NULL, '2025-03-20 05:55:35', '2025-03-20 05:56:44'),
(25, 'App\\Models\\User', 1, 'auth_token', '63fa13e8662f4aec017443258912a325a28103a233642b65a3f41b378a7946e1', '[\"*\"]', '2025-03-20 06:00:28', NULL, '2025-03-20 05:59:46', '2025-03-20 06:00:28'),
(26, 'App\\Models\\User', 1, 'auth_token', 'a5745caa2ab7c8f778ba26478315dadc8dda86d7a480c1f625781741822869b4', '[\"*\"]', NULL, NULL, '2025-03-20 06:08:15', '2025-03-20 06:08:15'),
(27, 'App\\Models\\User', 1, 'auth_token', '91dd733819af57d1e19e4de0f5522bc69ec4fb86e0f9ce7e8843f8be8bd7d842', '[\"*\"]', '2025-03-20 06:08:22', NULL, '2025-03-20 06:08:16', '2025-03-20 06:08:22'),
(28, 'App\\Models\\User', 1, 'auth_token', '2be767c7811eac14b95a8bdae7d8555adec63dfc6e4a40dcdeb8c0abee388a25', '[\"*\"]', '2025-03-20 06:15:50', NULL, '2025-03-20 06:15:44', '2025-03-20 06:15:50'),
(29, 'App\\Models\\User', 1, 'auth_token', '0bf4154af8277ae4771b7b759e94f23844279e1cb435167911be71e815afd4e3', '[\"*\"]', '2025-03-20 06:22:13', NULL, '2025-03-20 06:18:16', '2025-03-20 06:22:13'),
(30, 'App\\Models\\User', 1, 'auth_token', '4b3a5622f933eb5b2e25b9de66d0131c647f9b0bf92f1a375f3bba4f73fb86ab', '[\"*\"]', '2025-03-20 06:32:44', NULL, '2025-03-20 06:32:02', '2025-03-20 06:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mangesh', 'mangesh@gmail.com', NULL, '$2y$12$4PsBxctKLqJearmyVnOLnuHyLbgFZhsZPO5nEScv9nlUsOwI696rW', NULL, '2025-03-20 04:09:51', '2025-03-20 04:09:51'),
(2, 'yash', 'kondyal@gmail.com', NULL, '$2y$12$4PsBxctKLqJearmyVnOLnuHyLbgFZhsZPO5nEScv9nlUsOwI696rW', NULL, '2025-03-20 05:01:35', '2025-03-20 05:01:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_organizer_id_foreign` (`organizer_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_organizer_id_foreign` FOREIGN KEY (`organizer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
