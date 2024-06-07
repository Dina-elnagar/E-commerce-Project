-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 12:47 PM
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
-- Database: `redefine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `AdminNumber` varchar(11) NOT NULL,
  `AdminEmail` varchar(45) NOT NULL,
  `AdminName` varchar(45) NOT NULL,
  `AdminAddress` varchar(45) NOT NULL,
  `AdminUsername` varchar(45) NOT NULL,
  `AdminPassword` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `CID` int(11) NOT NULL,
  `CNumber` varchar(11) NOT NULL,
  `CEmail` varchar(45) NOT NULL,
  `CName` varchar(45) NOT NULL,
  `CAddress` varchar(45) NOT NULL,
  `CUsername` varchar(45) NOT NULL,
  `CPassword` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `dates` date DEFAULT NULL,
  `times` time DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `minCost` float DEFAULT NULL,
  `maxCost` float DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `userId` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `email`, `phoneNumber`, `dates`, `times`, `city`, `area`, `minCost`, `maxCost`, `comments`, `type`, `userId`, `created_at`, `updated_at`) VALUES
(1, 'Dina Abdelaziz', 'dinaa14@gmail.com', '01145677002', '2024-06-07', '17:22:00', 'new cairo', 'sa', 324324, 32432400, 'dxvsd', 'Buy Request', 9, '2024-06-06 08:28:17', '2024-06-06 13:54:40'),
(2, 'Dina Abdelaziz', 'di4@gmail.com', '01115464564', '2024-06-07', '17:22:00', 'new cairo', 'sa', 324324, 32432400, 'dxvsd', 'Buy Request', 9, '2024-06-06 08:28:47', '2024-06-06 13:54:37'),
(3, 'aya', 'aya@gmail.com', '01000321564', '2024-06-27', '21:35:00', 'alex', 'sa', 32222, 3222, 'zcdsz', 'Buy Request', NULL, '2024-06-06 08:29:39', '2024-06-06 13:54:08'),
(4, 'ahmed', 'hmed@gmail.com', '01525461234', '2024-06-27', '20:35:00', 'new cairo', 'sas', 12222, 33333, NULL, 'Rent Request', 7, '2024-06-06 08:35:56', '2024-06-06 13:53:41'),
(5, 'Dina Abdelaziz', 'dinaabde4@gmail.com', '01225497613', '2024-06-28', '20:53:00', 'new cairo', 'sdfs', 324324, 324342, 'sdsv', 'Interior Request', 7, '2024-06-06 08:48:05', '2024-06-06 13:54:26'),
(6, 'Dina Abdelaziz', 'dinaz514@gmail.com', '01113754854', '2024-06-20', '17:54:00', 'new cairo', 'qda', 32222, 555455, NULL, 'Furniture Request', 7, '2024-06-06 08:54:15', '2024-06-06 13:54:44'),
(7, 'aaa', 'aa@gmail.com', '01252579466', '2024-07-05', '19:56:00', 'new cairo', 'sdfs', 55555, 66666, NULL, 'Budget Request', 7, '2024-06-06 08:56:53', '2024-06-06 13:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LogID` int(11) NOT NULL,
  `LogRoleID` int(11) NOT NULL,
  `LogUsername` varchar(25) NOT NULL,
  `LogPassword` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_06_04_102357_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `ProID` int(11) NOT NULL,
  `ProSlrID` int(11) NOT NULL,
  `ProByrID` int(11) NOT NULL,
  `ProType` varchar(45) NOT NULL,
  `ProAddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(25) NOT NULL,
  `RoleDisciription` varchar(100) NOT NULL,
  `Admin_AdminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
('BZrasfhG1ZsPTaWIz8F2uv2fRqsSSAQKebcO8ATY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiI3RWUzNUlKdmFZdnRuREV5a1Y5SVZ2Wkxrb0NHRGE5RVNTVVByVEZxIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRnbTR0MGw4czNPeXNybXBuVE9pWXkua2dvcG1pTnJReVcxRXF1WEx2aVZKb0Jpam9KYldLVyI7fQ==', 1717682527);

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phoneNumber` varchar(50) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `phoneNumber`, `isAdmin`) VALUES
(7, 'dina', 'dina@gmail.com', NULL, '$2y$10$gm4t0l8s3OysrmpnTOiYy.kgopmiNrQyW1EquXLviVJoBijoJbWKW', NULL, NULL, NULL, 'XOdYVO6QoQVITKhLk7WiQFntzhhzrprencyOZ5RqagOr9bg1cNhnSeCgWroX', NULL, NULL, '2024-06-04 10:29:34', '2024-06-04 10:29:34', NULL, 0),
(8, 'Dina Abdelaziz', 'dinaabdelaziz514@gmail.com', NULL, '$2y$10$P3J8NXND/PmlUOuiqOFlTuytqKyj2jLMFKgrZl0LymHET5TetPVyi', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-05 07:46:15', '2024-06-05 07:46:15', NULL, 0),
(9, 'Aya', 'aya@gmail.com', NULL, '$2y$10$Hc.5bnkZ3VlQG3CIytsECenGgVKcyVlbo6tculnFNxtdsTZUPEzxy', NULL, NULL, NULL, '08mdYTq5LfXyxu6FgWHrFolvNKLubV2H6PLp8tOMy9LmCmIj5xSQwgZP6IWh', NULL, NULL, '2024-06-05 07:56:13', '2024-06-05 07:56:13', '01113770021', 0),
(10, 'admin', 'admin@gmail.com', NULL, '$2y$10$Dzmdkde6Wm.UJnMsRSZO2O1M.IW39nmr2AxsitZXX.LPAn976st3y', NULL, NULL, NULL, 'wOUHC9fQDuNcKVnytC4L76QcqpoXnpPxPk6737JId6ncinrLEuyHP1wboSxK', NULL, NULL, '2024-06-06 09:35:41', '2024-06-06 09:35:41', '01549876638', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `ByrNumber_UNIQUE` (`AdminNumber`),
  ADD UNIQUE KEY `ByrEmail_UNIQUE` (`AdminEmail`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CID`),
  ADD UNIQUE KEY `ByrNumbers_UNIQUE` (`CNumber`),
  ADD UNIQUE KEY `ByrEmails_UNIQUE` (`CEmail`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID_idx` (`userId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LogID`),
  ADD KEY `RolesID_idx` (`LogRoleID`);

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
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`ProID`),
  ADD KEY `ByrID_idx` (`ProByrID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`RoleID`,`Admin_AdminID`),
  ADD KEY `fk_Roles_Admin1_idx` (`Admin_AdminID`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `ProID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forms`
--
ALTER TABLE `forms`
  ADD CONSTRAINT `fk_userID` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `RoleID` FOREIGN KEY (`LogRoleID`) REFERENCES `roles` (`RoleID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `ByrID` FOREIGN KEY (`ProByrID`) REFERENCES `client` (`CID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `fk_Roles_Admin1` FOREIGN KEY (`Admin_AdminID`) REFERENCES `admin` (`AdminID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
