-- phpMyAdmin SQL Dump
-- version OVH
-- https://www.phpmyadmin.net/
--
-- Hôte : archersdpw001.mysql.db
-- Généré le : mar. 13 juin 2023 à 18:21
-- Version du serveur : 5.7.42-log
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `archersdpw001`
--

-- --------------------------------------------------------

--
-- Structure de la table `arc_nu`
--

CREATE TABLE `arc_nu` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `arc_nu`
--

INSERT INTO `arc_nu` (`nom`, `point`) VALUES
('Jérôme Chatillon', 4),
('Marie-Claude Farjon', 3),
('Michel Charles', 7),
('Monique Grouet', 2),
('Nina Hoang', 5);

-- --------------------------------------------------------

--
-- Structure de la table `clubs`
--

CREATE TABLE `clubs` (
  `ID` int(11) NOT NULL,
  `club` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clubs`
--

INSERT INTO `clubs` (`ID`, `club`) VALUES
(1, 'Compagnon de l arc (Castelginest)'),
(2, 'Archers du Girou (St Marcel Paulel)');

-- --------------------------------------------------------

--
-- Structure de la table `confirm`
--

CREATE TABLE `confirm` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `confirm`
--

INSERT INTO `confirm` (`nom`, `point`) VALUES
('Anne-Marie Abella', 1),
('Bruno Krempf', 1),
('David Escalas', 1),
('Fréréric Dourche', 1),
('Marie-Gisèle Masclet', 1),
('Patrice Hurez', 1),
('Patrick Carlier', 1),
('Philippe Cere', 2),
('Philippe Rose', 1),
('René Leclercq', 4),
('Sébastein Rivière', 1),
('Stéphanie Gaston-Mauro', 3),
('Thierry Theil', 7),
('Vincent Mélisova', 5),
('Wiliam Roy', 1);

-- --------------------------------------------------------

--
-- Structure de la table `debu`
--

CREATE TABLE `debu` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `debu`
--

INSERT INTO `debu` (`nom`, `point`) VALUES
('Anthony Travère', 3),
('Benjamin Mille', 1),
('Bernard Attia', 1),
('Denis Liesenborghs', 1),
('Franck Brun', 1),
('Frédéric Bernidel', 4),
('Guillaume Malo', 5),
('Hubert Lulka', 1),
('Jonathan Martel', 1),
('Laurent Robinet', 7),
('Mélanie kowal', 1),
('Nathaël Neveu', 1),
('Nicolas Vilaspasa', 1),
('Philippe Delmas', 1),
('SAbine Albucher', 2),
('Sébastien Massire', 1),
('Soline Amarger', 1),
('Stéphanie Vilaspasa', 1),
('Virginie Tréneau', 1);

-- --------------------------------------------------------

--
-- Structure de la table `dix_ans`
--

CREATE TABLE `dix_ans` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dix_ans`
--

INSERT INTO `dix_ans` (`nom`, `point`) VALUES
('Alexi Marcou', 10),
('Anée Delmas', 7),
('Angus Fauche', 1),
('Axel Gravel', 5),
('Ethan Sévétian', 6),
('Ethann Roux-Perez', 1),
('Lana Ackerman', 4),
('Leïa Cabrol', 1),
('Lucas Vilaspasa', 7),
('Quantin Bernard', 4),
('Simanak Horn', 2),
('Thomas Chatillon', 1);

-- --------------------------------------------------------

--
-- Structure de la table `dix_huit_ans`
--

CREATE TABLE `dix_huit_ans` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dix_huit_ans`
--

INSERT INTO `dix_huit_ans` (`nom`, `point`) VALUES
('Aubin Amarger', 10),
('Eva Corazza', 4),
('Gabrielle Chanteau', 6),
('Julie Lanchais', 8),
('Leslie Achana', 7),
('Lilou Vilatte', 1),
('Luka Lame', 1),
('Mélina Gaste', 5),
('océane Vilaspasa', 2);

-- --------------------------------------------------------

--
-- Structure de la table `poulie_confirm`
--

CREATE TABLE `poulie_confirm` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `poulie_confirm`
--

INSERT INTO `poulie_confirm` (`nom`, `point`) VALUES
('Antoine Dieguez', 4),
('Julien Beyris', 14),
('Mathéo Albucher', 3),
('Sébastien Narbonne', 5);

-- --------------------------------------------------------

--
-- Structure de la table `poulie_debu`
--

CREATE TABLE `poulie_debu` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `poulie_debu`
--

INSERT INTO `poulie_debu` (`nom`, `point`) VALUES
('Manuel Dasilva-Correia', 7),
('Yoann Page', 12);

-- --------------------------------------------------------

--
-- Structure de la table `super_confirm`
--

CREATE TABLE `super_confirm` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `super_confirm`
--

INSERT INTO `super_confirm` (`nom`, `point`) VALUES
('Erwan Barbier', 7),
('Fabrice Guillaume', 4),
('Jean-Philippe Carreaux', 5),
('Olivier Laplaze', 2),
('Thierry Soula', 3);

-- --------------------------------------------------------

--
-- Structure de la table `treize_ans`
--

CREATE TABLE `treize_ans` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `treize_ans`
--

INSERT INTO `treize_ans` (`nom`, `point`) VALUES
('Baptiste Bensi', 3),
('Charlize Vanbesien', 1),
('Guilhem Lacaze', 2),
('Ilana Touzot', 1),
('Leny Coez-Poux', 14),
('Louis Martel', 3),
('Lucie Andanson', 8),
('Mathis kowal', 3),
('Nolann Rivière', 5),
('Robin Gaston', 1),
('Valentin Ruiz', 5);

-- --------------------------------------------------------

--
-- Structure de la table `ultra_confirm`
--

CREATE TABLE `ultra_confirm` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ultra_confirm`
--

INSERT INTO `ultra_confirm` (`nom`, `point`) VALUES
('', 1),
('Anthony Maurel', 3),
('Claire Rey', 2),
('Cyril Virazel', 7),
('Frédéric Bastié', 4),
('Mathilde Larrue', 1),
('Pierre-Yves Grouet', 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `arc_nu`
--
ALTER TABLE `arc_nu`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `debu`
--
ALTER TABLE `debu`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `dix_ans`
--
ALTER TABLE `dix_ans`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `dix_huit_ans`
--
ALTER TABLE `dix_huit_ans`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `poulie_confirm`
--
ALTER TABLE `poulie_confirm`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `poulie_debu`
--
ALTER TABLE `poulie_debu`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `super_confirm`
--
ALTER TABLE `super_confirm`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `treize_ans`
--
ALTER TABLE `treize_ans`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `ultra_confirm`
--
ALTER TABLE `ultra_confirm`
  ADD PRIMARY KEY (`nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
