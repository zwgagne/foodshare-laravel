-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 24 sep. 2021 à 16:26
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
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `meteo` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_reserved` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `food`
--

INSERT INTO `food` (`id`, `description`, `image`, `meteo`, `user_id`, `is_reserved`, `created_at`, `updated_at`) VALUES
(1, 'Un paquet de cerises fraîches.', 'cerise.jpg', 18, 1, 0, '2021-09-22 16:09:21', '2021-09-25 16:09:21'),
(2, 'Une boîte de papayes. ', 'papaye.jpg', 16, 2, 1, '2021-09-14 16:11:21', '2021-09-15 16:11:21'),
(3, 'Un melon. ', 'melon.jpg', 22, 1, 0, '2021-09-22 16:12:10', '2021-09-25 16:12:10'),
(4, 'Un paquet de bananes. ', 'banane.jpg', 32, 2, 0, '2021-09-09 16:12:47', '2021-09-10 16:12:47'),
(5, 'Une boîte d\'ananas.', 'ananas.jpg', 12, 1, 0, '2021-09-15 16:13:53', '2021-09-16 16:13:53'),
(6, 'Un caisse d\'oranges.', 'orange.jpg', 22, 2, 1, '2021-09-23 16:14:22', '2021-09-25 16:14:22'),
(7, 'Un paquet de fraises fraîches. ', 'fraise.jpg', 21, 2, 0, '2021-09-14 16:15:07', '2021-09-19 16:15:07'),
(8, 'Un sac de mais. ', 'mais.jpg', 12, 3, 0, '2021-09-14 16:18:28', '2021-09-23 16:18:28'),
(9, 'Un sac de poivrons de quatre couleurs.', 'poivron.jpg', 19, 4, 0, '2021-09-05 16:18:59', '2021-09-06 16:18:59'),
(10, 'Un brocoli de taille normale.', 'brocoli.jpg', 11, 5, 1, '2021-09-08 16:19:38', '2021-09-11 16:19:38');

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
  `food_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `address`, `city`, `food_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zac', 'zac@email.com', '2021-09-24 16:20:20', '42 rue des poivrons', 'Rimouski', 1, '12345', '', '2021-09-24 16:22:07', '2021-09-24 16:22:07'),
(2, 'hans', 'hans@email.com', '2021-09-24 16:22:49', '21 avenue des courges', 'Québec', 2, '54321', '', '2021-09-24 16:22:49', '2021-09-24 16:22:49'),
(3, 'mathieu', 'mathieu@email.com', '2021-09-24 16:23:47', '64 rang des asperges', 'Saint-Nicolas', 4, '5678', '', '2021-09-24 16:23:47', '2021-09-24 16:23:47'),
(4, 'gilles', 'gilles@email.com', '2021-09-24 16:24:53', '54 rue du jardin', 'Lévis', 5, '8765', '', '2021-09-24 16:24:53', '2021-09-24 16:24:53'),
(5, 'luca', 'luca@email.com', '2021-09-24 16:26:33', '76 route fruitée', 'Québec', 6, '9012', '', '2021-09-24 16:26:33', '2021-09-24 16:26:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
