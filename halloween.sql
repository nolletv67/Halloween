-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 30 Octobre 2018 à 21:09
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `halloween`
--

-- --------------------------------------------------------

--
-- Structure de la table `bonbon`
--

CREATE TABLE `bonbon` (
  `id` int(11) NOT NULL,
  `codeBarre` bigint(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bonbon`
--

INSERT INTO `bonbon` (`id`, `codeBarre`, `name`, `marque`) VALUES
(1, 3103220009154, 'Oeuf au plat', 'Haribo'),
(2, 3103220009208, 'Banan\'s', 'Haribo'),
(3, 4014400900897, 'Werther\'s Original', 'Stork'),
(4, 3560070339495, 'Ours guimauve', 'Carrefour'),
(5, 3116740021957, 'Arlequin', 'Lutti'),
(6, 3103220036792, 'Twin Ours', 'Haribo'),
(7, 7622210370280, 'Vary Bad Kids', 'Mondelez'),
(8, 5000159437943, 'Maltesers', 'Mars'),
(9, 9044400231009, 'Pez', 'Pez'),
(10, 5413548015866, 'Kinder Surprise', 'Kinder'),
(11, 3103220030455, 'Stroumpfs ', 'Haribo'),
(12, 5159314541, 'Skittles Crazy', 'Mars'),
(13, 5413548015552, 'Shoko-Bons', 'Kinder'),
(14, 3538280052176, 'Mi-Cho-Ko', 'La pie qui chante'),
(15, 3501271119035, 'Têtes brulées', 'Verquin'),
(16, 3103220009130, 'Croco', 'Haribo'),
(17, 3116740027317, 'Scoubidou', 'Lutti'),
(18, 7622210429056, 'Regal\'ad', 'Kréma'),
(19, 3103220030424, 'CARenSAC', 'Haribo'),
(20, 40111445, 'M & M\'s', 'M & M\'s');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  `bonbonName` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`id`, `pseudo`, `bonbonName`, `quantity`, `points`) VALUES
(1, 'Bob', 'tagada', 3, 7);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bonbon`
--
ALTER TABLE `bonbon`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bonbon`
--
ALTER TABLE `bonbon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
