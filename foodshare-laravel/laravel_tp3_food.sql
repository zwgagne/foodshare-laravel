-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 13 oct. 2021 à 15:40
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel_tp3_food`
--

-- --------------------------------------------------------

--
-- Structure de la table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `meteo` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_reserved` tinyint(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `food`
--

INSERT INTO `food` (`id`, `description`, `image`, `meteo`, `user_id`, `is_reserved`, `created_at`, `updated_at`) VALUES
(1, 'Un paquet de cerises fraîches.', 'cerise.jpg', 18, 2, 1, '2021-09-22 16:09:21', '2021-09-25 16:09:21'),
(2, 'Une boîte de papayes. ', 'papaye.jpg', 16, 2, 1, '2021-09-14 16:11:21', '2021-09-15 16:11:21'),
(3, 'Un melon. ', 'melon.jpg', 22, 2, 0, '2021-09-22 16:12:10', '2021-09-25 16:12:10'),
(4, 'Un paquet de bananes. ', 'banane.jpg', 32, 2, 0, '2021-09-09 16:12:47', '2021-09-10 16:12:47'),
(5, 'Une boîte d\'ananas.', 'ananas.jpg', 12, 2, 0, '2021-09-15 16:13:53', '2021-09-16 16:13:53'),
(6, 'Un caisse d\'oranges.', 'orange.jpg', 22, 2, 1, '2021-09-23 16:14:22', '2021-09-25 16:14:22'),
(7, 'Un paquet de fraises fraîches. ', 'fraise.jpg', 21, 2, 0, '2021-09-14 16:15:07', '2021-09-19 16:15:07'),
(8, 'Un sac de mais. ', 'mais.jpg', 12, 2, 0, '2021-09-14 16:18:28', '2021-09-23 16:18:28'),
(17, 'Un sac de poivron', 'poivron.jpg', 10, 2, 0, '2021-10-07 22:45:50', '2021-10-07 22:45:50'),
(18, 'Un papaye', 'papaye.jpg', 20, 4, 0, '2021-10-07 22:49:13', '2021-10-07 22:49:13'),
(19, 'Crème de brocoli', 'brocoli.jpg', 22, 4, 0, '2021-10-08 00:59:39', '2021-10-08 00:59:39'),
(20, '1L de jus d\'orange', 'orange.jpg', 18, 4, 0, '2021-10-08 01:01:02', '2021-10-08 01:01:02'),
(21, 'Gâteau au cerise', 'cerise.jpg', 20, 2, 0, '2021-10-08 01:01:59', '2021-10-08 01:01:59'),
(23, 'test testes stes te tes', NULL, 20, 2, 0, '2021-10-08 05:13:00', '2021-10-08 09:13:40'),
(25, 'Oh canada Terre de nos', 'icons8-canada-100.png', 20, 2, 0, '2021-10-08 05:28:00', '2021-10-08 09:28:30');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `food_id` bigint(20) UNSIGNED DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `address`, `city`, `food_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zac', 'zac@email.com', '2021-09-24 16:20:20', '42 rue des poivrons', 'Rimouski', 1, '12345', '', '2021-09-24 16:22:07', '2021-09-24 16:22:07'),
(2, 'root', 'root@root.ca', '2021-10-07 22:06:27', '7584 Rue Patate', 'Québec', 2, '$2y$10$JnTcjwm..5dhbeiGMgx8Tebag.Wq6AOeZRMQdUlwzmqOJ/yFSPXqe', '', '2021-10-08 02:06:27', '2021-10-08 02:06:27'),
(4, 'Paul Tester', 'paul@email.ca', '2021-10-07 22:30:43', '468 rue sans nom', 'Montréal', NULL, '$2y$10$X7pxXk2aAHczqX0Jte/PUOoWRhod.3QnX47GnxyR/ZvcLk153OMNq', '', '2021-10-08 02:30:43', '2021-10-08 02:30:43'),
(5, 'tester', 'test@test.ca', '2021-10-08 03:26:50', '456 rue wsef', 'ron', NULL, '$2y$10$Dhs.uhhzKPIinf0bZzaS5e5f5R1u88H.fZckQGC1JdLp1Y9n2/joO', '', '2021-10-08 07:26:50', '2021-10-08 07:26:50');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_id` (`food_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
