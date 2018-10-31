-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 31 Octobre 2018 à 11:09
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
  `points` int(11) DEFAULT NULL,
  `codeBarre` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`id`, `pseudo`, `bonbonName`, `quantity`, `points`, `codeBarre`) VALUES
(89, 'Véro', 'Kinder Surprise', 1, 100, 5413548015866),
(90, 'Véro', 'Ours guimauve', 3, 75, 3560070339495),
(91, 'Véro', 'Pez', 6, 30, 9044400231009),
(92, 'Véro', 'Pez', 1, 100, 9044400231009),
(93, 'Véro', 'Croco', 2, 50, 3103220009130),
(94, 'Véro', 'Regal\'ad', 9, 45, 7622210429056),
(95, 'Véro', 'Shoko-Bons', 2, 200, 5413548015552),
(96, 'Véro', 'Regal\'ad', 5, 125, 7622210429056),
(97, 'Véro', 'Têtes brulées', 10, 50, 3501271119035),
(98, 'Emma', 'Arlequin', 1, 100, 3116740021957),
(99, 'Emma', 'Arlequin', 5, 125, 3116740021957),
(100, 'Emma', 'Scoubidou', 4, 20, 3116740027317),
(101, 'Emma', 'Croco', 1, 100, 3103220009130),
(102, 'Emma', 'Werther\'s Original', 2, 50, 4014400900897),
(103, 'Emma', 'Regal\'ad', 6, 30, 7622210429056),
(104, 'Boby', 'Têtes brulées', 2, 200, 3501271119035),
(105, 'Boby', 'Scoubidou', 5, 125, 3116740027317),
(106, 'Boby', 'Croco', 1, 5, 3103220009130),
(107, 'Boby', 'Vary Bad Kids', 2, 200, 7622210370280),
(108, 'Boby', 'Pez', 1, 25, 9044400231009),
(109, 'Boby', 'Pez', 7, 35, 9044400231009),
(110, 'Boby', 'Maltesers', 2, 200, 5000159437943),
(111, 'Boby', 'Stroumpfs ', 3, 75, 3103220030455),
(112, 'Boby', 'CARenSAC', 4, 20, 3103220030424),
(113, 'Nathan', 'Arlequin', 2, 200, 3116740021957),
(114, 'Nathan', 'Banan\'s', 2, 50, 3103220009208),
(115, 'Nathan', 'Kinder Surprise', 9, 45, 5413548015866),
(116, 'Harry', 'Shoko-Bons', 1, 100, 5413548015552),
(117, 'Harry', 'Regal\'ad', 2, 50, 7622210429056),
(118, 'Harry', 'Scoubidou', 6, 30, 3116740027317),
(119, 'Harry', 'Croco', 2, 200, 3103220009130),
(120, 'Harry', 'Shoko-Bons', 5, 125, 5413548015552),
(121, 'Harry', 'Mi-Cho-Ko', 5, 25, 3538280052176),
(122, 'Harry', 'Pez', 2, 200, 9044400231009),
(123, 'Harry', 'Werther\'s Original', 2, 50, 4014400900897),
(124, 'Harry', 'Maltesers', 4, 20, 5000159437943),
(125, 'Hermione', 'M & M\'s', 2, 200, 40111445),
(126, 'Hermione', 'Vary Bad Kids', 1, 25, 7622210370280),
(127, 'Hermione', 'Pez', 10, 50, 9044400231009),
(128, 'Hermione', 'Mi-Cho-Ko', 1, 100, 3538280052176),
(129, 'Hermione', 'Werther\'s Original', 5, 125, 4014400900897),
(130, 'Hermione', 'Skittles Crazy', 4, 20, 5159314541),
(131, 'Hermione', 'Skittles Crazy', 2, 200, 5159314541),
(132, 'Hermione', 'Twin Ours', 4, 100, 3103220036792),
(133, 'Hermione', 'Regal\'ad', 4, 20, 7622210429056),
(134, 'Scouby', 'M & M\'s', 2, 200, 40111445),
(135, 'Scouby', 'Vary Bad Kids', 3, 75, 7622210370280),
(136, 'Scouby', 'Skittles Crazy', 2, 10, 5159314541),
(137, 'Scouby', 'Regal\'ad', 1, 100, 7622210429056),
(138, 'Scouby', 'Kinder Surprise', 1, 25, 5413548015866),
(139, 'Scouby', 'Werther\'s Original', 1, 5, 4014400900897),
(140, 'Scouby', 'Oeuf au plat', 1, 100, 3103220009154),
(141, 'Scouby', 'Mi-Cho-Ko', 3, 75, 3538280052176),
(142, 'Scouby', 'Skittles Crazy', 9, 45, 5159314541),
(143, 'Deb', 'Kinder Surprise', 2, 200, 5413548015866),
(144, 'Deb', 'CARenSAC', 1, 25, 3103220030424),
(145, 'Deb', 'Têtes brulées', 7, 35, 3501271119035),
(146, 'Deb', 'Croco', 2, 200, 3103220009130),
(147, 'Deb', 'Stroumpfs ', 5, 125, 3103220030455),
(148, 'Deb', 'Werther\'s Original', 9, 45, 4014400900897),
(149, 'Deb', 'Arlequin', 2, 200, 3116740021957),
(150, 'Deb', 'Scoubidou', 1, 25, 3116740027317),
(151, 'Deb', 'Oeuf au plat', 1, 5, 3103220009154);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
