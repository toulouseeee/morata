-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 04 mars 2023 à 17:54
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

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
  `point` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `arc_nu`
--

INSERT INTO `arc_nu` (`nom`, `point`) VALUES
('laur hizon', 4),
('paul linesie', 7),
('thomas te', 5);

-- --------------------------------------------------------

--
-- Structure de la table `confirm`
--

CREATE TABLE `confirm` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `confirm`
--

INSERT INTO `confirm` (`nom`, `point`) VALUES
('edi tion', 8);

-- --------------------------------------------------------

--
-- Structure de la table `debu`
--

CREATE TABLE `debu` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `debu`
--

INSERT INTO `debu` (`nom`, `point`) VALUES
('paul art', 8);

-- --------------------------------------------------------

--
-- Structure de la table `dix_ans`
--

CREATE TABLE `dix_ans` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dix_ans`
--

INSERT INTO `dix_ans` (`nom`, `point`) VALUES
('alain terieur', 22),
('alex terieur', 16),
('enton noir', 13),
('jean ajoute', 1),
('marc assin', 10),
('oli days', 7),
('paul itique', 4);

-- --------------------------------------------------------

--
-- Structure de la table `dix_huit_ans`
--

CREATE TABLE `dix_huit_ans` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dix_huit_ans`
--

INSERT INTO `dix_huit_ans` (`nom`, `point`) VALUES
('alain secte', 22),
('hector ators', 5),
('henry tme', 4),
('herve lo', 5),
('laure estcher', 5),
('paul iment', 17),
('thomas turge', 6);

-- --------------------------------------------------------

--
-- Structure de la table `huit_ans`
--

CREATE TABLE `huit_ans` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `huit_ans`
--

INSERT INTO `huit_ans` (`nom`, `point`) VALUES
('alain becile', 8),
('ed dredon', 6),
('franck alomo', 5),
('jean rage', 4),
('ma ture', 1),
('paul ochon', 1),
('pierre quiroule', 7),
('pierre stone', 3),
('truc alacon', 2);

-- --------------------------------------------------------

--
-- Structure de la table `poulie_confirm`
--

CREATE TABLE `poulie_confirm` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `poulie_confirm`
--

INSERT INTO `poulie_confirm` (`nom`, `point`) VALUES
('ted delit', 8);

-- --------------------------------------------------------

--
-- Structure de la table `poulie_debu`
--

CREATE TABLE `poulie_debu` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `poulie_debu`
--

INSERT INTO `poulie_debu` (`nom`, `point`) VALUES
('nom denon', 8);

-- --------------------------------------------------------

--
-- Structure de la table `super_confirm`
--

CREATE TABLE `super_confirm` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `super_confirm`
--

INSERT INTO `super_confirm` (`nom`, `point`) VALUES
('marc assin', 5),
('paul itique', 8);

-- --------------------------------------------------------

--
-- Structure de la table `treize_ans`
--

CREATE TABLE `treize_ans` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `treize_ans`
--

INSERT INTO `treize_ans` (`nom`, `point`) VALUES
('abel fille', 8),
('adele lisceux', 2),
('alain probable', 1),
('ange duciel', 15),
('franck tireur', 3),
('gerard menvuça', 10),
('joseph ine', 8);

-- --------------------------------------------------------

--
-- Structure de la table `ultra_confirm`
--

CREATE TABLE `ultra_confirm` (
  `nom` varchar(50) NOT NULL,
  `point` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ultra_confirm`
--

INSERT INTO `ultra_confirm` (`nom`, `point`) VALUES
('andré parla', 8);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `arc_nu`
--
ALTER TABLE `arc_nu`
  ADD PRIMARY KEY (`nom`);

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
-- Index pour la table `huit_ans`
--
ALTER TABLE `huit_ans`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
