-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 10:28 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servicemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(4, '2020_02_19_033606_student', 2),
(5, '2020_02_19_033912_schedule', 3),
(6, '2020_02_19_034158_payment', 3);

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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `STUDENTID` bigint(20) NOT NULL,
  `STUDENTNAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MONTH` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AMOUNT` bigint(20) NOT NULL,
  `CREATED_DATETIME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CREATED_BY` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UPDATED_DATETIME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UPDATED_BY` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `STUDENTID` bigint(20) NOT NULL,
  `STUDENTNAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TIME_IN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TIME_OUT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CREATED_DATETIME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CREATED_BY` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UPDATED_DATETIME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UPDATED_BY` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ADDRESS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AMOUNT` bigint(20) NOT NULL,
  `CREATED_DATETIME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CREATED_BY` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UPDATED_DATETIME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UPDATED_BY` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `NAME`, `ADDRESS`, `AMOUNT`, `CREATED_DATETIME`, `CREATED_BY`, `UPDATED_DATETIME`, `UPDATED_BY`, `created_at`, `updated_at`) VALUES
(1, '@NGELO', 'alabang', 900, '', '', '', '', NULL, '2020-02-19 00:49:12'),
(2, 'no need', 'san pedro', 678, 'test', 'test', 'test', 'test', '2020-02-18 23:29:14', '2020-02-19 00:53:04'),
(3, 'kate', 'gma', 189, 'test', 'test', 'test', 'test', '2020-02-18 23:35:06', '2020-02-19 00:53:14'),
(4, 'jezz', 'trece', 555, 'test', 'NOEL ANGELO', 'test', 'test', '2020-02-18 23:38:54', '2020-02-18 23:38:54'),
(5, 'albert', '42 Diamond St Camella 3-C, Pamplona Tres', 99999, 'test', 'Angelo Atencio', 'test', 'test', '2020-02-18 23:39:47', '2020-02-18 23:39:47'),
(6, 'donna', 'googl.com', 98, 'test', 'ID: 1, NAME: Angelo Atencio', 'test', 'test', '2020-02-18 23:44:09', '2020-02-19 00:53:27'),
(7, 'rey', 'las pinas', 200, 'test', 'ID: 1, NAME: Angelo Atencio', 'test', 'test', '2020-02-18 23:50:49', '2020-02-18 23:50:49'),
(8, 'acoba, nicole', 'amethyst st.', 1000, 'test', 'ID: 1, NAME: Angelo Atencio', 'test', 'test', '2020-02-19 00:03:05', '2020-02-19 00:03:05');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Angelo Atencio', 'angelo@email.com', NULL, '$2y$10$hFHZXWXxZA9I8lM5WkLR5ugQNuJ8El90Edwa/BHVRd2tRWb.AfBiO', NULL, '2020-02-18 19:16:00', '2020-02-18 19:16:00'),
(2, 'NOEL ANGELO', 'noel@email.com', NULL, '$2y$10$b1bpQcFX.oMTfprR4xuPBu2VIVNNcN6jqswkF/9C6cw3visUBeX9y', NULL, '2020-02-18 23:24:06', '2020-02-18 23:24:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
