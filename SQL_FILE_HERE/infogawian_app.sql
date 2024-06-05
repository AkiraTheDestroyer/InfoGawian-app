-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 04:36 AM
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
-- Database: `infogawian_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(120) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `rules` varchar(255) DEFAULT NULL,
  `status` enum('inactive','active') NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company`, `desc`, `rules`, `status`, `user_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pt.Modern Nusantara', 'Menjadi perusahaan perdagangan dan distribusi terdepan di Indonesia yang menyediakan produk berkualitas tinggi dan layanan terbaik untuk meningkatkan kualitas hidup masyarakat.', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</div>', 'active', 1, 'company-images/YErSwybMt01SWSj5C2slbWbMZdHldN9NLz8RFYVk.png', '2024-04-15 17:15:12', '2024-05-27 16:26:58'),
(3, 'Pt. madu wijaya', 'Menjadi produsen madu murni terkemuka di Indonesia yang dikenal atas kualitas dan keaslian produknya, serta berkontribusi dalam peningkatan kesehatan masyarakat melalui produk-produk alami.', '<div>Semua produk PT Madu Wijaya harus memenuhi standar kualitas yang ditetapkan oleh perusahaan dan regulasi pemerintah, dengan uji kualitas rutin untuk memastikan keaslian dan kemurnian madu.&nbsp;</div>', 'active', 3, 'company-images/IgiJE9MaGuySx6XN0eaR9bHlbJEVI835A3R5mLzU.jpg', '2024-04-29 22:12:16', '2024-05-27 16:21:31'),
(4, 'Pt.Alfamart', NULL, NULL, 'active', 5, 'company-images/default.png', '2024-05-27 22:16:29', '2024-05-27 22:16:45');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_09_022628_company', 1),
(6, '2024_03_11_032430_posts', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `salary_type` enum('month','year') NOT NULL,
  `status` enum('open','close') NOT NULL,
  `body` varchar(700) NOT NULL,
  `company_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `salary`, `salary_type`, `status`, `body`, `company_id`, `created_at`, `updated_at`) VALUES
(16, 'pekerjaan 0', '2', 'month', 'open', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</div>', 1, '2024-05-27 15:59:43', '2024-05-27 20:04:13'),
(17, 'pekerjaan 1', '1', 'month', 'open', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>', 1, '2024-05-27 16:04:54', '2024-05-27 16:04:54'),
(24, 'Analis Keuangan', '20', 'month', 'open', '<div>Analis Keuangan di PT Modern Nusantara bertanggung jawab untuk menganalisis data keuangan&nbsp;</div>', 1, '2024-05-27 20:03:19', '2024-05-27 20:03:19'),
(25, 'Manajer Distribusi', '10', 'month', 'open', '<div>Manajer Distribusi bertanggung jawab mengelola dan mengawasi semua aktivitas distribusi perusahaan.</div>', 1, '2024-05-27 20:03:58', '2024-05-27 21:30:22'),
(26, 'pekerjaan 2', '20', 'month', 'open', '<div>test</div>', 4, '2024-05-27 22:17:26', '2024-05-27 22:17:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `image` varchar(255) NOT NULL DEFAULT 'user-images/default.jpg',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `bio`, `whatsapp`, `email`, `role`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nabil', 'nabil', NULL, '087732617227', 'Nabil.izazi@gmail.om', 'user', 'user-images/b2meQQQ50RxYGLNPe6JSOX5yAOZdUZqEhNL8pf78.webp', '$2y$12$kBbnsWy.Q2fRSn9pPONY3OiVjRQXHCQzWADm4RD1ECpQxRcJlFc66', NULL, '2024-04-15 17:13:30', '2024-04-15 17:15:01'),
(2, 'zefa', 'zefa', NULL, '081234568', 'zefa@gmail.com', 'user', 'user-images/default.jpg', '$2y$12$/XewNAE3TbTRf3CtY9HUM.vmZkwJa7.YPzBpZ5GUfkqJwhZ3DLSUq', NULL, '2024-04-29 21:35:55', '2024-04-29 21:36:34'),
(3, 'sahit', 'sahit@gmail.com', NULL, '123456779', 'sahit@gmail.com', 'user', 'user-images/default.jpg', '$2y$12$9LlQflLcnSeasTaxjXzwYudh9PRG7THKZY2mNJ/QhstEa8prPPc6S', NULL, '2024-04-29 22:09:31', '2024-04-29 22:11:45'),
(4, 'ijay', 'ijay', NULL, NULL, NULL, 'user', 'user-images/default.jpg', '$2y$12$pvsL.oZhwPhOporpJGYIl.j/86D4eEWTF5MNs0OnEfWnKDpf04iAq', NULL, '2024-05-13 16:45:53', '2024-05-13 16:45:53'),
(5, 'rasya', 'rasya', NULL, '081234567', 'rayyagami@gmail.com', 'admin', 'user-images/default.jpg', '$2y$12$NcNqZtllfsm3dDn/AEOyLe0v5Ucl7SXhYi893sPWbNAng8jqWECOS', NULL, '2024-05-13 16:47:43', '2024-05-27 22:16:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_whatsapp_unique` (`whatsapp`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
