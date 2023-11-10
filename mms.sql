-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 03:56 PM
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
-- Database: `mms`
--

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
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `userid`, `name`, `email`, `phone`, `dob`, `country`, `state`, `district`, `city`, `address`, `pincode`, `image`, `remarks`, `created_at`, `updated_at`) VALUES
(5, 2, 'admin', 'user1@gmail.com', '95027341', '2023-10-16', 'Usa', 'Karnataka', 'Guntur', 'dsafsd', 'jhfd', '524403', 'C:\\xampp\\tmp\\php3938.tmp', 'sd', '2023-10-12 01:29:46', '2023-10-12 01:29:46'),
(6, 3, 'admin', 'kumarchembeti26@gmail.com', '95027341', '2023-10-27', 'Usa', 'Karnataka', 'Guntur', 'nyp', 'address1', '524403', 'C:\\xampp\\tmp\\phpAF2F.tmp', 'dwd', '2023-10-12 01:31:22', '2023-10-12 01:31:22'),
(7, 3, 'user1', 'user1@gmail.com', '+1-330-412-148', '2023-10-20', 'Usa', 'Telangana', 'Ongole', 'dsafsd', 'dssf', '524403', '1697125705.jpg', 'dafda', '2023-10-12 01:33:58', '2023-10-12 10:18:25'),
(8, 1, 'admin', 'kumarchembeti26@gmail.com', '950273418', '2023-10-18', 'India', 'Telangana', 'Guntur', 'dsafsd', 'dd', '524403', '1697388567.jpeg', 'safa', '2023-10-12 01:35:20', '2023-10-15 11:19:27'),
(9, 1, 'sai kumar', 'admin@gmail.com', '+1-330-412-148', '2023-10-19', 'Italy', 'Tamilnadu', 'Ongole', 'dsafsd', 'dssf', '524403', '1697125609.jpg', 'fsff', '2023-10-12 01:42:59', '2023-10-12 10:16:49'),
(10, 1, 'sai kumar', 'user1@gmail.com', '95027341', '2023-10-22', 'Italy', 'Telangana', 'Ongole', 'dsafsd', 'jhfd', '524403', 'C:\\xampp\\tmp\\php9797.tmp1697112229.png', 'asa', '2023-10-12 06:33:49', '2023-10-12 06:33:49'),
(11, 1, 'sai kumar', 'user1@gmail.com', '950273418', '2023-10-09', 'India', 'Tamilnadu', 'Ongole', 'dsafsd', 'dd', '524403', '1697112900.png', 'dsa', '2023-10-12 06:45:00', '2023-10-12 06:45:00'),
(12, 1, 'sai kumar', 'kumarchembeti26@gmail.com', '+1-330-412-148', '2023-10-28', 'Usa', 'Tamilnadu', 'Chittor', 'nyp', 'dssf', '524403', '1697113680.jpg', 'sdf', '2023-10-12 06:58:00', '2023-10-12 06:58:00'),
(13, 5, 'sai', 'user@gmail.com', '+1-949-961-985', '2023-10-27', 'Usa', 'Tamilnadu', 'Guntur', 'dsafsd', 'Hyderabad', '524403', '1697113976.jpg', 'asc', '2023-10-12 07:02:56', '2023-10-12 07:02:56'),
(14, 4, 'admin', 'user@gmail.com', '950273418', '2023-10-17', 'Italy', 'Telangana', 'Guntur', 'dsafs', 'dd', '524403', '1697131885.png', 'mm', '2023-10-12 11:51:56', '2023-10-12 12:01:25'),
(15, 1, 'sai', 'kumarchembeti26@gmail.com', '95027341', '2023-10-18', 'India', 'Andhra pradesh', 'Guntur', 'dsafsd', 'dssf', '524403', '1697388772.png', 'dad', '2023-10-12 12:02:42', '2023-10-15 11:22:52'),
(16, 6, 'sai kumar', 'admin@gmail.com', '+1-949-961-985', '2023-10-09', 'Usa', 'Tamilnadu', 'Ongole', 'nyp', 'address1', 'efs', '1697175655.png', 'dsf', '2023-10-13 00:10:55', '2023-10-13 00:10:55'),
(17, 1, 'admin', 'admin@gmail.com', '95027341', '2023-10-18', 'Usa', 'Telangana', 'Guntur', 'dsafsd', 'dssf', '524403', '1697388644.png', 'dSV', '2023-10-13 00:15:22', '2023-10-15 11:20:44');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_11_103541_create_memberships_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `usertype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$bJ.eRqiKdQjVPXkdqdDYtOs74AGdZCHnfyJYZBmBj7IxQ1739smVe', 'admin', NULL, '2023-10-11 04:40:35', '2023-10-11 04:40:35'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$6Ni8zJAVLd/w3R5oLyNBreqxdo8LilJXpwuiWgULZMyM4sa2kRS5S', 'user', NULL, '2023-10-11 04:41:02', '2023-10-11 04:41:02'),
(3, 'user1', 'user1@gmail.com', NULL, '$2y$10$rVvTHEKwH00Tt4eh.T0LTO5I8qRzfFIuJJNPVB/6PZAmKtyfDD3tC', 'user', NULL, '2023-10-12 01:30:47', '2023-10-12 01:30:47'),
(4, 'user2', 'user2@gmail.com', NULL, '$2y$10$valXo/cHS.SZdo383WLHne5J3J8XoFAElr721h/.SgqIA.TFDtlca', 'user', NULL, '2023-10-12 01:36:43', '2023-10-12 01:36:43'),
(5, 'user3', 'user3@gmail.com', NULL, '$2y$10$bI6.hiNt2vN8n7gGl3en..pqshEuxHCAd/Vo4wpJEsOoQGO4CgUl.', 'user', NULL, '2023-10-12 07:02:20', '2023-10-12 07:02:20'),
(6, 'user4', 'user4@gmail.com', NULL, '$2y$10$jI8DYCu0J1Kb8.eg5m16xuldWIx6l4gmpc/CCmc4DgCdVm79UlKaS', 'user', NULL, '2023-10-13 00:10:14', '2023-10-13 00:10:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
