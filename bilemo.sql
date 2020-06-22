-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 juin 2020 à 13:05
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP : 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bilemo`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `password`, `roles`) VALUES
(1, 'An Admin', 'test@test.fr', '$2y$13$Grap/d/J9ZQxPBkQb.gBZODShm2XRzu2C2/xQ8WHPwRmLHBPOGJzq', '[\"ROLE_ADMIN\"]'),
(2, 'An user', 'test2@test.fr', '$2y$13$dZhUVWkAUd3LKTQ6cy6zl.euWkL8EzU09kmFHsRnN0p6suYvPSVVi', '[\"ROLE_USER\"]');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `brand`) VALUES
(1, 'Iphone XR 64go', 'une description', '699.00', 'Apple'),
(2, 'Iphone X 64go', 'une description', '599.00', 'Apple'),
(3, 'Galaxy S10 64Go', 'une description', '599.00', 'Samsung'),
(4, 'Galaxy S10 264Go', 'une description', '699.00', 'Samsung'),
(5, 'Iphone XS 128Go', 'une description', '799.00', 'Apple');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8D93D64919EB6921` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `client_id`, `username`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 'an admin\'s user', 'user@test.fr', '2020-06-22 12:41:36', NULL),
(2, 1, 'an admin\'s user 2', 'user2@test.fr', '2020-06-22 12:42:19', NULL),
(3, 2, 'a client\'s user', 'user3@test.fr', '2020-06-22 12:48:57', NULL),
(4, 2, 'a client\'s user 2', 'user4@test.fr', '2020-06-22 12:49:12', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D64919EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
