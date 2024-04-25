-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 25, 2024 at 01:33 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste`
--

-- --------------------------------------------------------

--
-- Table structure for table `activites`
--

CREATE TABLE `activites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nomSecteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageSecteur` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activites`
--

INSERT INTO `activites` (`id`, `created_at`, `updated_at`, `nomSecteur`, `imageSecteur`) VALUES
(1, NULL, NULL, 'cafe', 0x696d616765735c70726f64756974735c313731303730383037312e6a7067),
(2, NULL, NULL, 'boulangerie', 0x696d616765735c736563746575725c626f756c616e67657269652e6a7067),
(3, NULL, NULL, 'CentreB', 0x696d616765735c736563746575725c63656e747265422e6a7067),
(4, NULL, NULL, 'coiffeur', 0x696d616765735c736563746575725c636f6966666575722e6a7067),
(5, NULL, NULL, 'boucherie', 0x696d616765735c736563746575725c626f756368657269652e6a7067),
(6, NULL, NULL, 'supermarche', 0x696d616765735c736563746575725c73757065726d61726368652e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', '$2y$12$CAFTqEwmUy6vwNlwzcXFd.vKqh/vGH6Vf8CX3BBnBoen3Z630dvV2', NULL, '2024-03-18 13:08:59', '2024-03-18 13:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

CREATE TABLE `commandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commandes`
--

INSERT INTO `commandes` (`id`, `created_at`, `updated_at`, `total`, `user_id`, `detail`) VALUES
(81, '2024-04-02 21:43:49', '2024-04-02 21:43:49', '22000', 91, 'produit (Prix: 4000), produit (Prix: 4000), produit (Prix: 4000), WD0408 p (Prix: 10000)'),
(82, '2024-04-02 21:45:18', '2024-04-02 21:45:18', '50000', 104, 'produit (Prix: 4000), WD950 BLACK (Prix: 8500), WDLINK (Prix: 11500), WDLINK Caisse (Prix: 11500), WDLINK (Prix: 10500)'),
(83, '2024-04-03 17:12:35', '2024-04-03 17:12:35', '20500', 105, 'WD0408 p (Prix: 10000), WD950 BLACK (Prix: 8500), produit (Prix: 2000)'),
(84, '2024-04-03 17:13:19', '2024-04-03 17:13:19', '22000', 106, 'WDLINK (Prix: 11500), WDLINK (Prix: 10500)'),
(85, '2024-04-03 17:14:00', '2024-04-03 17:14:00', '11500', 107, 'WDLINK Caisse (Prix: 11500)'),
(86, '2024-04-03 17:14:53', '2024-04-03 17:14:53', '6000', 108, 'produit (Prix: 4000), produit (Prix: 2000)');

-- --------------------------------------------------------

--
-- Table structure for table `commande_details`
--

CREATE TABLE `commande_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prix_unitaire` decimal(10,0) DEFAULT NULL,
  `produit_id` int(11) DEFAULT NULL,
  `commande_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(5, '2024_03_12_121300_create_paniers_table', 2),
(6, '2024_03_12_121317_create_commandes_table', 3),
(7, '2024_03_12_121332_create_produits_table', 4),
(8, '2024_03_12_121622_create_commande_details_table', 5),
(9, '2024_03_18_135604_create_administrators_table', 6),
(10, '2024_03_24_211516_create_profils_table', 7),
(11, '2024_03_25_112533_create_activites_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `paniers`
--

CREATE TABLE `paniers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `produit_id` int(11) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` blob,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `created_at`, `updated_at`, `description`, `nom`, `image`, `type`) VALUES
(86, '2024-04-23 17:13:12', '2024-04-23 17:28:22', 'Your design has to be as intuitive as it is helpful and insightful. We gathered an intimate understanding of the latest UI &amp; UX behaviors.', 'Web Design', 0x696d616765732f70726f64756974732f313731333839353939325f312e706e67, 'produit'),
(87, '2024-04-23 17:22:01', '2024-04-23 17:28:37', 'There’s some SEO in everything you do online. Search engine optimization, or SEO, is a strategy for improving your site’s rankings in engine results.', 'SEO Solutions', 0x696d616765732f70726f64756974732f313731333839363532315f312e706e67, 'produit'),
(88, '2024-04-23 17:39:23', '2024-04-23 17:39:23', 'Mobile app development is the act or process by which a mobile app is developed for mobile devices, such as personal digital assistants.', 'Web Developement', 0x696d616765732f70726f64756974732f313731333839373536335f312e706e67, 'produit'),
(89, '2024-04-23 17:40:37', '2024-04-23 17:40:37', 'Digital marketing harnesses online channels like social media and email to boost brand visibility and engage effectively with target audiences.', 'Digital Marketing', 0x696d616765732f70726f64756974732f313731333839373633375f312e706e67, 'produit'),
(90, '2024-04-23 17:41:14', '2024-04-23 17:41:14', 'Video editing transforms raw footage into compelling stories, enhancing visual communication through precise cuts, transitions, and effects.', 'Video Editing', 0x696d616765732f70726f64756974732f313731333839373637345f312e706e67, 'produit'),
(91, '2024-04-23 17:41:47', '2024-04-23 17:41:47', 'Capture the extraordinary in every shot – where your moments meet our lenses, magic happens.', 'Shooting', 0x696d616765732f70726f64756974732f313731333839373730375f312e706e67, 'produit'),
(92, '2024-04-23 18:48:14', '2024-04-24 22:28:57', 'Network analytics empowers organizations to optimize performance, enhance security, and improve decision-making by transforming raw network data into actionable insights using the right tools and processes.', 'Network', 0x696d616765732f70726f64756974732f313731343030313333372e706e67, 'produit'),
(93, '2024-04-24 22:22:03', '2024-04-24 22:23:26', 'Data analytics empowers businesses to understand customers, personalize content, enhance campaigns, and boost bottom lines by transforming raw data into actionable insights with the right tools and processes.', 'Data Analytics', 0x696d616765732f70726f64756974732f313731343030303932335f312e706e67, 'produit');

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `images` blob,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `created_at`, `updated_at`, `images`, `type`) VALUES
(2, NULL, '2024-03-28 12:17:56', 0x696d616765732f70726f66696c536974652f313731313633313837362e6a7067, 'slide'),
(3, NULL, '2024-03-28 12:18:11', 0x696d616765732f70726f66696c536974652f313731313633313839312e6a7067, 'slide'),
(4, NULL, '2024-03-28 12:18:34', 0x696d616765732f70726f66696c536974652f313731313633313931342e6a7067, 'slide'),
(5, NULL, '2024-04-24 22:16:18', 0x696d616765732f70726f66696c536974652f313731343030303537382e706e67, 'cover');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(91, 'khalid', NULL, NULL, '$2y$12$eaCyXLxBjDd5LdmbsBIL3ejVRLY6dTizJwW/UrWNgF6VULYX3dPxO', NULL, '2024-03-25 21:12:25', '2024-03-25 21:12:25'),
(104, 'anas', NULL, NULL, '$2y$12$sMffCY/ro2nHp5PE8ZBDeehyGn10Nuvg6.4eZLESvjj/O803cJECS', NULL, '2024-04-02 21:45:18', '2024-04-02 21:45:18'),
(105, 'mohamed', NULL, NULL, '$2y$12$YjlV/U8cBR/e/Y8YzdgGNe/7O1RLAaVgya2Pou6Ll3Po1McltEjmq', NULL, '2024-04-03 17:12:35', '2024-04-03 17:12:35'),
(106, 'hassan', NULL, NULL, '$2y$12$fgVV4y6YKjf4fUm2W9KIIen.qWg9s/tgz8.aHoQ7DNFdEFc88x7XO', NULL, '2024-04-03 17:13:19', '2024-04-03 17:13:19'),
(107, 'youssef', NULL, NULL, '$2y$12$.qseqjgvXG65pADYLmizMOvDZX4CRUBIoUZyYDrFzBNXIV0wgJHQa', NULL, '2024-04-03 17:14:00', '2024-04-03 17:14:00'),
(108, 'abdLali', NULL, NULL, '$2y$12$XUAKIpl.x0jmAnXxjkqJSOvBf4jTO3IchpVlco04uRq81bd3d5V7O', NULL, '2024-04-03 17:14:53', '2024-04-03 17:14:53'),
(109, 'achraf', NULL, NULL, '$2y$12$BBOZlrA1cUPbqWUkFUFIkeQuu1Gyq/oZn59OKD8CHN5mezW7CxeJK', NULL, '2024-04-24 16:28:32', '2024-04-24 16:28:32'),
(110, 'achraf', NULL, NULL, '$2y$12$QUPuP3RWRK3EvrknsIJT5O1ubijZ/ClUbS2tf98.h26Dnsx1/0TQe', NULL, '2024-04-24 16:29:09', '2024-04-24 16:29:09'),
(111, 'yassine', NULL, NULL, '$2y$12$rh0861Rsm6HuG493b.FsaO/ycRLfQ9bB1tc9J9pq.9l5uKZLLDZaS', NULL, '2024-04-24 16:39:01', '2024-04-24 16:39:01'),
(130, 'achraf', 'aelhasnaoui88@gmail.com', NULL, '$2y$12$q5IkaeroLt7KgDqm24RBm.uJfSplNWr9opbvKXWlr6RUsuZ2SHXdi', NULL, '2024-04-24 23:58:32', '2024-04-24 23:58:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `administrators_email_unique` (`email`);

--
-- Indexes for table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateurs` (`user_id`);

--
-- Indexes for table `commande_details`
--
ALTER TABLE `commande_details`
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
-- Indexes for table `paniers`
--
ALTER TABLE `paniers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`),
  ADD KEY `produit_id` (`produit_id`);

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
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
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
-- AUTO_INCREMENT for table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `commande_details`
--
ALTER TABLE `commande_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `paniers`
--
ALTER TABLE `paniers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `paniers`
--
ALTER TABLE `paniers`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `paniers_ibfk_1` FOREIGN KEY (`produit_id`) REFERENCES `produits` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
