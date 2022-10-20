-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 17 juin 2022 à 15:12
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
-- Base de données : `bddproximo`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `mdp`) VALUES
('1', 'admin', 'mcfg');

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `idAn` bigint(20) NOT NULL,
  `dateAn` datetime NOT NULL,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `pseudoCpteJ` varchar(20) NOT NULL,
  `mdpCpteJ` varchar(20) NOT NULL,
  `mailrepCpteJ` varchar(20) NOT NULL,
  `texteAn` mediumtext NOT NULL,
  `idCat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `NomCat` varchar(100) NOT NULL,
  `ImageCat` varchar(100) NOT NULL,
  `IdCat` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`NomCat`, `ImageCat`, `IdCat`) VALUES
('Assistanat-Accueil-Secrétariat', 'accueil assistanat.png', 1),
('Artisanat', 'artisanat.png', 2),
('Gestion finance', 'gestionfinances.png', 3),
('Production maintenance', 'productionmaintenance.png', 4),
('Santé sociale', 'santesociale.png', 5);

-- --------------------------------------------------------

--
-- Structure de la table `comptej`
--

CREATE TABLE `comptej` (
  `idCpteJ` bigint(20) NOT NULL,
  `nomCpteJ` varchar(20) NOT NULL,
  `prenomCpteJ` varchar(20) NOT NULL,
  `mailpersoCpteJ` varchar(40) NOT NULL,
  `pseudoCpteJ` varchar(20) NOT NULL,
  `mdpCpteJ` varchar(20) NOT NULL,
  `mailrepCpteJ` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comptej`
--

INSERT INTO `comptej` (`idCpteJ`, `nomCpteJ`, `prenomCpteJ`, `mailpersoCpteJ`, `pseudoCpteJ`, `mdpCpteJ`, `mailrepCpteJ`) VALUES
(1, '', '', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`idAn`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`IdCat`);

--
-- Index pour la table `comptej`
--
ALTER TABLE `comptej`
  ADD PRIMARY KEY (`idCpteJ`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `idAn` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `IdCat` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `comptej`
--
ALTER TABLE `comptej`
  MODIFY `idCpteJ` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
