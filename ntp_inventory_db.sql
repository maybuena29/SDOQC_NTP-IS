-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 06:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntp_inventory_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicantstbl`
--

CREATE TABLE `applicantstbl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `typeofappointment` varchar(255) NOT NULL,
  `itemnumber` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `tinnumber` varchar(255) NOT NULL,
  `DOA` date NOT NULL,
  `DLP` date NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicantstbl`
--

INSERT INTO `applicantstbl` (`id`, `typeofappointment`, `itemnumber`, `firstname`, `middlename`, `lastname`, `position`, `department`, `gender`, `birthdate`, `tinnumber`, `DOA`, `DLP`, `eligibility`, `school_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 'MOOE', NULL, 'Emerson', 'Brock Davenport', 'Dejesus', 'Consectetu', 'At sit qu', 'Female', '2019-07-24', '629', '1995-04-20', '2020-03-02', 'Ut harum o', 20, 'Inactive', '2023-05-18 05:50:30', '2023-05-18 05:50:30', NULL),
(13, 'City Permanent', '691', 'Dillon', 'Slade Franco', 'Dean', 'Quam illo', 'Provident', 'Male', '1980-07-16', '625', '1998-06-20', '2006-05-23', 'Ipsa exer', 20, 'Retired', '2023-05-18 05:50:33', '2023-05-18 05:50:33', NULL),
(14, 'City Permanent', '321', 'Chava', 'Tucker Barron', 'Matthews', 'Tempore i', 'Magna labo', 'Female', '2022-07-20', '924', '1976-12-23', '2001-06-16', 'Voluptatem', 15, 'Resigned', '2023-05-18 05:50:35', '2023-05-18 05:50:35', NULL),
(15, 'National Permanent', '39', 'Karina', 'Alice Macdonald', 'Soto', 'Et sit cu', 'Dolores lo', 'Female', '2012-12-22', '303', '2014-06-11', '2009-06-28', 'Ut sunt di', 10, 'Resigned', '2023-05-18 05:50:37', '2023-05-18 05:50:37', NULL),
(16, 'National Permanent', '518', 'Jelani', 'Gage Moss', 'Mitchell', 'Aut molest', 'Odit ut ea', 'Male', '1976-10-05', '579', '1978-07-10', '1989-12-04', 'Molestiae', 15, 'Diseased', '2023-05-18 05:50:39', '2023-05-18 05:50:39', NULL),
(17, 'National Permanent', '511', 'Cora', 'Gage Fitzgerald', 'Jensen', 'Nihil assu', 'Unde labor', 'Male', '2007-07-28', '209', '2019-06-10', '2013-07-06', 'Aut quas l', 9, 'AWOL', '2023-05-18 05:50:41', '2023-05-18 05:50:41', NULL),
(18, 'National Permanent', '228', 'Sonia', 'Beck Wilkins', 'Lee', 'Ipsum nec', 'Blanditiis', 'Female', '2007-01-04', '72', '1996-06-10', '1984-12-16', 'Exercitati', 15, 'Active', '2023-05-18 05:50:45', '2023-05-18 05:50:45', NULL),
(19, 'Contractual', NULL, 'Dustin', 'Rinah Whitaker', 'Tanner', 'Laboris la', 'Animi exe', 'Female', '1997-04-19', '558', '1975-10-23', '2003-08-02', 'Sed commod', 18, 'Active', '2023-05-18 05:50:49', '2023-05-18 05:50:49', NULL),
(20, 'City Permanent', '684', 'Lucius', 'Christine Rivas', 'Sparks', 'Ea qui min', 'Autem cupi', 'Female', '2012-07-22', '370', '2011-05-15', '1980-12-18', 'Deleniti e', 20, 'AWOL', '2023-05-18 05:50:51', '2023-05-18 05:50:51', NULL),
(21, 'MOOE', NULL, 'Bruno', 'Cassady Dean', 'Hart', 'Officia oc', 'Quia possi', 'Female', '2000-05-09', '343', '2002-01-08', '1988-01-25', 'Ut assumen', 20, 'Retired', '2023-05-18 05:50:54', '2023-05-18 05:50:54', NULL),
(22, 'City Permanent', '235', 'Bethany', 'Mary Acevedo', 'Barrera', 'Enim est', 'Natus repr', 'Female', '1974-02-18', '851', '1974-04-22', '1983-08-04', 'Sint offi', 9, 'Active', '2023-05-18 05:50:57', '2023-05-18 05:50:57', NULL),
(23, 'Contractual', NULL, 'Lois', 'Knox Clayton', 'Schmidt', 'Quia inven', 'Aut blandi', 'Male', '2012-12-03', '583', '2023-09-24', '1976-09-11', 'Doloribus', 21, 'Active', '2023-05-18 05:51:01', '2023-05-18 05:51:01', NULL),
(24, 'City Permanent', '183', 'Maisie', 'Nichole Mcpherson', 'Sandoval', 'Non magna', 'Voluptatum', 'Female', '1992-12-20', '246', '1985-08-16', '2005-06-25', 'Sunt paria', 9, 'Active', '2023-05-18 05:51:05', '2023-05-18 05:51:05', NULL),
(25, 'City Permanent', '10', 'Ryder', 'Lani Sargent', 'Reynolds', 'Quasi dolo', 'Expedita r', 'Male', '2002-09-29', '318', '1983-09-06', '1991-07-20', 'Quas in et', 20, 'Active', '2023-05-18 05:51:08', '2023-05-18 05:51:08', NULL),
(26, 'MOOE', NULL, 'Peter', 'Quentin Valentine', 'Arnold', 'Odio ad qu', 'Eius porro', 'Female', '1977-03-23', '967', '2020-06-04', '1974-07-26', 'Maxime rep', 12, 'Active', '2023-05-18 05:51:12', '2023-05-18 05:51:12', NULL),
(27, 'City Permanent', '346', 'Kiona', 'Laith Michael', 'Crosby', 'Ut incidun', 'Non et ea', 'Female', '1993-04-29', '316', '1989-09-05', '2013-05-12', 'Aut rerum', 20, 'Active', '2023-05-18 05:51:16', '2023-05-18 05:51:16', NULL),
(28, 'Contractual', NULL, 'zxc', 'zxc', 'zxc', 'Unde fugia', 'Aut cum vo', 'Male', '2020-11-26', '929', '1975-01-18', '2014-04-19', 'Ut at volu', 19, 'Active', '2023-05-20 07:05:43', '2023-05-23 08:32:55', NULL),
(29, 'City Permanent', '213', 'test', 'test', 'test', 'Non evenie', 'Sed modi q', 'Male', '2020-05-04', '362', '2019-05-17', '1970-05-18', 'Et dolores', 18, 'Active', '2023-05-20 08:48:48', '2023-05-20 08:49:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `disticttbl`
--

CREATE TABLE `disticttbl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disticttbl`
--

INSERT INTO `disticttbl` (`id`, `district`, `status`, `created_at`, `updated_at`) VALUES
(1, 'District 6', 'Active', '2023-05-10 22:22:55', '2023-05-16 04:24:36'),
(2, 'District 1', 'Active', '2023-05-10 22:34:40', '2023-05-16 04:22:40'),
(3, 'District 2', 'Active', '2023-05-10 22:34:47', '2023-05-16 04:24:27'),
(4, 'District 3', 'Active', '2023-05-10 22:34:55', '2023-05-16 04:24:52'),
(5, 'District 4', 'Active', '2023-05-10 22:36:15', '2023-05-16 04:25:12'),
(6, 'District 5', 'Active', '2023-05-10 22:36:19', '2023-05-16 04:25:25');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_05_05_034004_create_statustbl_table', 1),
(10, '2023_05_10_021915_create_disticttbl_table', 1),
(11, '2023_05_10_031310_create_schooltbl_table', 1),
(12, '2023_05_10_061507_create_applicantstbl_table', 1);

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
-- Table structure for table `schooltbl`
--

CREATE TABLE `schooltbl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schooltbl`
--

INSERT INTO `schooltbl` (`id`, `school`, `level`, `district_id`, `status`, `created_at`, `updated_at`) VALUES
(7, 'A consequa', 'Secondary (Senior High School)', 5, 'Inactive', '2023-05-18 05:48:26', '2023-05-18 05:48:26'),
(8, 'Ipsum et n', 'Secondary (Junior High School)', 6, 'Inactive', '2023-05-18 05:48:31', '2023-05-18 05:48:31'),
(9, 'Non commod', 'Secondary (Senior High School)', 6, 'Active', '2023-05-18 05:48:34', '2023-05-18 05:48:34'),
(10, 'Qui omnis', 'Elementary', 3, 'Active', '2023-05-18 05:48:37', '2023-05-18 05:48:37'),
(11, 'Dolores qu', 'Secondary (Junior High School with Senior High School)', 4, 'Active', '2023-05-18 05:48:39', '2023-05-18 05:48:39'),
(12, 'Eius qui o', 'Secondary (Junior High School with Senior High School)', 5, 'Active', '2023-05-18 05:48:41', '2023-05-18 05:48:41'),
(13, 'Aut sed cu', 'Elementary', 6, 'Inactive', '2023-05-18 05:48:44', '2023-05-18 05:48:44'),
(14, 'Assumenda', 'Elementary', 6, 'Inactive', '2023-05-18 05:48:46', '2023-05-18 05:48:46'),
(15, 'Harum et v', 'Elementary', 6, 'Active', '2023-05-18 05:48:50', '2023-05-18 05:48:50'),
(16, 'Fugiat vo', 'Secondary (Senior High School)', 5, 'Active', '2023-05-18 05:48:52', '2023-05-18 05:48:52'),
(17, 'Quod eum i', 'Secondary (Senior High School)', 5, 'Inactive', '2023-05-18 05:48:55', '2023-05-18 05:48:55'),
(18, 'Aut sunt', 'Elementary', 4, 'Active', '2023-05-18 05:49:03', '2023-05-18 05:49:03'),
(19, 'Cum laboru', 'Secondary (Junior High School)', 2, 'Inactive', '2023-05-18 05:49:08', '2023-05-18 05:49:08'),
(20, 'Voluptatem', 'Secondary (Senior High School)', 5, 'Active', '2023-05-18 05:49:10', '2023-05-18 05:49:10'),
(21, 'Dicta poss', 'Secondary (Senior High School)', 3, 'Active', '2023-05-18 05:49:12', '2023-05-18 05:49:12'),
(22, 'Quia est', 'Elementary', 3, 'Inactive', '2023-05-18 05:49:17', '2023-05-18 05:49:17'),
(23, 'Eiusmod fu', 'Secondary (Junior High School with Senior High School)', 6, 'Inactive', '2023-05-18 05:49:21', '2023-05-18 05:49:21'),
(24, 'Reprehende', 'Secondary (Junior High School with Senior High School)', 4, 'Inactive', '2023-05-18 05:49:25', '2023-05-18 05:49:25'),
(25, 'Maxime tem', 'Secondary (Junior High School with Senior High School)', 5, 'Inactive', '2023-05-18 05:49:28', '2023-05-18 05:49:28'),
(26, 'Delectus', 'Secondary (Junior High School with Senior High School)', 5, 'Inactive', '2023-05-18 05:49:31', '2023-05-18 05:49:31'),
(27, 'Ab anim in', 'Secondary (Senior High School)', 5, 'Inactive', '2023-05-18 05:49:34', '2023-05-18 05:49:34'),
(28, 'san francisco', 'Elementary', 2, 'Active', '2023-05-23 05:29:56', '2023-05-23 05:29:56'),
(30, 'san franciscoa', 'Elementary', 2, 'Active', '2023-05-23 06:09:52', '2023-05-23 06:09:52'),
(31, 'sa', 'Elementary', 2, 'Active', '2023-05-23 08:33:48', '2023-05-23 08:33:48'),
(32, 'san francisco', 'Secondary (Junior High School)', 2, 'Active', '2023-05-23 08:34:00', '2023-05-23 08:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `statustbl`
--

CREATE TABLE `statustbl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin@gmail.com', NULL, '$2y$10$Q7smdyuRedjnxiygx2oOYecdnD9cjTthB40HAA7QZBqXsg0IPzRrS', '5SOYRoInlWNtJ3dYYzvVBD68eodGldnlATD1oRlyVJknYvjF6rirhsMIYKkW', '2023-05-10 22:02:41', '2023-05-10 22:02:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicantstbl`
--
ALTER TABLE `applicantstbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicantstbl_school_id_foreign` (`school_id`);

--
-- Indexes for table `disticttbl`
--
ALTER TABLE `disticttbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `disticttbl_district_unique` (`district`);

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
-- Indexes for table `schooltbl`
--
ALTER TABLE `schooltbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique school` (`school`,`level`),
  ADD KEY `schooltbl_district_id_foreign` (`district_id`);

--
-- Indexes for table `statustbl`
--
ALTER TABLE `statustbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statustbl_value_unique` (`value`);

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
-- AUTO_INCREMENT for table `applicantstbl`
--
ALTER TABLE `applicantstbl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `disticttbl`
--
ALTER TABLE `disticttbl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schooltbl`
--
ALTER TABLE `schooltbl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `statustbl`
--
ALTER TABLE `statustbl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicantstbl`
--
ALTER TABLE `applicantstbl`
  ADD CONSTRAINT `applicantstbl_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schooltbl` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `schooltbl`
--
ALTER TABLE `schooltbl`
  ADD CONSTRAINT `schooltbl_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `disticttbl` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
