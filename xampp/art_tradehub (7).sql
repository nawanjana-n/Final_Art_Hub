-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2024 at 07:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art_tradehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_types`
--

CREATE TABLE `category_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_types`
--

INSERT INTO `category_types` (`id`, `photo`, `category_name`, `created_at`, `updated_at`) VALUES
(20, '2024033007print-make.jpg', 'Print Makings', '2024-03-30 02:21:50', '2024-03-30 02:21:50'),
(21, '2024033007draw1.png', 'Drawings', '2024-03-30 02:22:19', '2024-03-30 02:22:19'),
(22, '2024033007dig-arts.jpg', 'Digital Arts', '2024-03-30 02:23:17', '2024-03-30 02:23:17'),
(23, '2024033007photo.jpg', 'Photography', '2024-03-30 02:28:58', '2024-03-30 02:28:58'),
(24, '2024033008scul.png', 'Sculptures', '2024-03-30 02:30:03', '2024-03-30 02:35:12'),
(25, '2024033008paint-main.jpg', 'Paintings', '2024-03-30 02:30:43', '2024-03-30 02:30:43');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_15_041721_create_property_types_table', 2),
(6, '2024_03_02_061601_create_category_types_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('nuwandipra@gmail.com', '$2y$12$/14eBKCmLUgrQeh8/BVhz.XxoZN1BhIvmtSjItyj0yE7I.YQ5Y1WC', '2023-12-30 02:03:05');

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `category` int(11) NOT NULL,
  `photo` varchar(400) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `seller_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `photo`, `description`, `seller_id`, `created_at`, `updated_at`) VALUES
(1, 'llhljjli', '200', 1, NULL, 'ivdoisj', 15, '2024-04-02 05:01:11', '2024-04-02 05:01:11'),
(2, 'drawings', '124', 3, '[\"upload\\/product_images\\/2024040205_th (70).jfif\",\"upload\\/product_images\\/2024040205_lion-jungle-animals-three-wallpaper.jpg\"]', 'hiof', 15, '2024-04-02 05:05:13', '2024-04-02 05:05:13'),
(3, 'dfdmgdk', '2344', 22, '[\"upload\\/product_images\\/2024040205_Screenshot_22-3-2024_212515_wildguard.somee.com.jpeg\",\"upload\\/product_images\\/2024040205_index.png\"]', 'ehfehgieheihfebe //.koejgiejgeihg4eigheg4g,.,,gegebhguje4bhg', 15, '2024-04-02 05:32:38', '2024-04-02 05:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','seller','client') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `photo`, `phone`, `address`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'nuwandi@gmail.com', NULL, '$2y$12$2guX2xBig1XG.KV80h6d6e2f0kgwxXX4e5upZJZk90mhuMPp1Iz/m', '202403241330th (65).jfif', '100', 'Meegoda', 'admin', 'active', NULL, NULL, '2024-03-29 23:11:05'),
(3, 'Client Main', 'client', 'w@gmail.com', NULL, '$2y$12$TO29AVzAIbuCkNdzBranYeI0DqCVsnFOGPys2ufdIP7xhBoU3dIV.', '202402100546photo8.jpg', '10224', 'Meegoda', 'client', 'active', NULL, NULL, '2024-03-29 23:53:00'),
(4, 'Miss Dolores Sipes V', NULL, 'slegros@example.org', '2023-12-29 03:19:43', '$2y$12$8CyMXKVL/QbZDfb2x2lnaeY4oD7XFpbVbUUWXbzZdaM8y8TEHVjN2', 'https://via.placeholder.com/60x60.png/00eedd?text=temporibus', '872-614-3151', '80038 Rene Station Apt. 338\nNew Shanaland, ND 82077-2192', 'client', 'inactive', '1uxkdnu3xs', '2023-12-29 03:19:44', '2023-12-29 03:19:44'),
(5, 'Stanford Stroman', NULL, 'makenzie32@example.org', '2023-12-29 03:19:44', '$2y$12$8CyMXKVL/QbZDfb2x2lnaeY4oD7XFpbVbUUWXbzZdaM8y8TEHVjN2', 'https://via.placeholder.com/60x60.png/00aa55?text=perspiciatis', '(313) 674-1106', '9071 Nicolas Forges Apt. 038\nWhitemouth, DE 92076-3066', 'client', 'inactive', 'NefrVxFncw', '2023-12-29 03:19:44', '2023-12-29 03:19:44'),
(7, 'Ruthie Okuneva', NULL, 'marvin.rene@example.net', '2023-12-29 03:19:44', '$2y$12$8CyMXKVL/QbZDfb2x2lnaeY4oD7XFpbVbUUWXbzZdaM8y8TEHVjN2', 'https://via.placeholder.com/60x60.png/0055cc?text=atque', '+1-332-809-5432', '6872 Elvie Viaduct\nReyton, NC 46431', 'client', 'inactive', 'wYg7mE5Nb3', '2023-12-29 03:19:44', '2023-12-29 03:19:44'),
(9, 'Nuwandi', NULL, 'nuwandipra@gmail.com', NULL, '$2y$12$ppt2bAV/KDEB.VkHgQJ7vudp2bprUBbwN.zfMQL2xsrfIvmj1oYYu', NULL, NULL, NULL, 'client', 'active', NULL, '2023-12-29 03:25:52', '2023-12-29 03:25:52'),
(11, 'Shs', NULL, 'saas@gmail.com', NULL, '$2y$12$Hn3BouXg7Dlr0gOdDP.Xe.vkaqM2izZl3Ev/TZA8tmULoZ9JxJqa2', NULL, '47763242252', NULL, 'client', 'active', NULL, '2024-02-03 01:26:49', '2024-03-30 00:10:14'),
(12, 'Hahs', NULL, 'das@gmail.com', NULL, '$2y$12$EvJinpoU.cCloNjCvg1Z/.UzTXpKtQBAV5OvyPXzdmvsgeGpYqlUW', NULL, NULL, NULL, 'client', 'active', NULL, '2024-02-03 01:33:42', '2024-02-03 01:33:42'),
(13, 'Waas', 'waas', 'waas@gmail.com', NULL, '$2y$12$1K/brP7JZ2WsKKdi7sy10OWHMn6UDZA0GjNBYn.N47uABnQeQpPI.', NULL, '071155', NULL, 'client', 'active', NULL, '2024-02-03 01:36:50', '2024-02-03 01:36:50'),
(15, 'Main Seller', 'mainseller', 'mainseller@gmail.com', NULL, '$2y$12$B9DM6veDNp7NlIZO3PiPbulJ2kn9TTbemMsKIGecPT0HqT/WOIpjW', '202403090705th.jfif', '101', 'Colombo 02', 'seller', 'active', NULL, '2024-02-16 22:32:35', '2024-03-29 23:11:19'),
(16, 'Client', 'mainclient', 'mainclient@gmail.com', NULL, '$2y$12$IC96A0kkT3apRo7XgwMwcuJUam4lNg3dPCF/kel8x0pxcrRIDuYR6', '202403090705th.jfif', '102', 'Delkanda', 'client', 'active', NULL, '2024-02-16 22:36:13', '2024-03-09 01:35:15'),
(27, 'bjsbfv', 'bjsbfv', 'bjsbfv@gmail.com', NULL, '$2y$10$awbx32LCVa9UJxb7amBu6.Z8HtwQfIfK1lky.Y9ob5.Ta5xns7mIW', NULL, '22533553366', NULL, 'seller', 'active', NULL, '2024-03-29 23:17:23', '2024-03-30 00:08:57'),
(29, 'test1', 'test1', 'test1@gmail.com', NULL, '$2y$10$tZhtH1O3y7ZpchBO3UdPsu5cDa3ScTi6vnSA0/Hw4ZgLxwGLcf/re', NULL, '123', NULL, 'admin', 'inactive', NULL, '2024-03-29 23:42:35', '2024-03-29 23:42:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_types`
--
ALTER TABLE `category_types`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
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
-- AUTO_INCREMENT for table `category_types`
--
ALTER TABLE `category_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
