-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 01:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfectjob`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spam` int(10) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `title`, `description`, `email`, `spam`, `created_at`, `updated_at`) VALUES
(39, 111111, 'City Pic', 'Work closely with the Design team to deliver the best user experience. Write automated tests to ensure extensive test coverage and a successful continuous integration process.', 'nikolaraf@hotmail.com', 0, '2019-02-24 23:19:00', '2019-02-24 23:19:00'),
(40, 111111, 'Fox', 'Be involved in the technical community to develop best-of-breed solutions. Constantly monitor performance and user metrics to identify issues and recommend changes and new features.', 'nikolaraf@hotmail.com', 0, '2019-02-24 23:24:53', '2019-02-24 23:24:53'),
(41, 111111, 'Airbnb / Accountancy, Human Resources', 'The Heavy Equipment / Grader Operator is responsible for operating one or several types construction equipment, such as front end loader, roller, bulldozer, or excavator to move', 'xsaero@gmail.com', 0, '2019-02-24 23:26:45', '2019-02-24 23:26:45'),
(42, 111111, 'King LLC / Accountancy, Human Resources', 'Be involved in the technical community to develop best-of-breed solutions. Constantly monitor performance and user metrics to identify issues and recommend changes and new features.', 'xsaero@gmail.com', 0, '2019-02-24 23:27:29', '2019-02-24 23:27:29'),
(43, 111111, 'Telimed / Accounting Assistant, Arts, Design, and Media', 'The Heavy Equipment / Grader Operator is responsible for operating one or several types construction equipment, such as front end loader, roller, bulldozer, or excavator to move', 'xsaero@gmail.com', 0, '2019-02-24 23:28:45', '2019-02-24 23:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_02_23_134507_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nikola Rafajlovic', 'xsaero@gmail.com', '$2y$10$Aa4.LDCcTriBfqPQZ3glAeh1Jeo8X4Ri8dFqwxvqiSI0JW1Xq8htG', 'HB3HKzq8RhwmplMsk5MS6AbaJ4xKycThhZnHSZR5scd2Cs0PTAdwGudymAUH', '2019-02-23 12:55:52', '2019-02-23 12:55:52'),
(2, 'Ivana Gajic', 'ivana009@gmail.com', '$2y$10$ORaWqS4oXzTNuELlcx.SJujfZ6/4fzzKfFDN32TB2DND9.29qmZ9i', 'AIk3hnMpxo6AbTjgp8JlsyxFaXl7RffpiKZtA6LPT9L5zKeOCETqrlqlScIL', '2019-02-23 12:55:34', '2019-02-23 12:55:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
