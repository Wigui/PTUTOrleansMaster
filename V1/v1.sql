-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 13 Décembre 2018 à 13:12
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `v1`
--

-- --------------------------------------------------------

--
-- Structure de la table `infoperso`
--

CREATE TABLE `infoperso` (
  `idPerso` int(11) NOT NULL,
  `dejBene` tinyint(1) NOT NULL DEFAULT '0',
  `licence` tinyint(1) NOT NULL DEFAULT '0',
  `textarea` varchar(512) NOT NULL,
  `reglement` tinyint(1) NOT NULL DEFAULT '0',
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `numeroTel` varchar(255) NOT NULL,
  `tShirt` varchar(8) NOT NULL,
  `lang1` varchar(255) NOT NULL,
  `lang2` varchar(255) NOT NULL,
  `lang3` varchar(255) NOT NULL,
  `poste1` varchar(255) NOT NULL,
  `poste2` varchar(255) NOT NULL,
  `poste3` varchar(255) NOT NULL,
  `marMat` tinyint(1) NOT NULL DEFAULT '0',
  `marAprem` tinyint(1) NOT NULL DEFAULT '0',
  `merMat` tinyint(1) NOT NULL DEFAULT '0',
  `merArem` tinyint(1) NOT NULL DEFAULT '0',
  `jeuMat` tinyint(1) NOT NULL DEFAULT '0',
  `jeuAprem` tinyint(1) NOT NULL DEFAULT '0',
  `venMat` tinyint(1) NOT NULL DEFAULT '0',
  `venAprem` tinyint(1) NOT NULL DEFAULT '0',
  `samMat` tinyint(1) NOT NULL DEFAULT '0',
  `samAprem` tinyint(1) NOT NULL DEFAULT '0',
  `dimMat` tinyint(1) NOT NULL DEFAULT '0',
  `dimAprem` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `infoperso`
--

INSERT INTO `infoperso` (`idPerso`, `dejBene`, `licence`, `textarea`, `reglement`, `nom`, `prenom`, `club`, `age`, `mail`, `numeroTel`, `tShirt`, `lang1`, `lang2`, `lang3`, `poste1`, `poste2`, `poste3`, `marMat`, `marAprem`, `merMat`, `merArem`, `jeuMat`, `jeuAprem`, `venMat`, `venAprem`, `samMat`, `samAprem`, `dimMat`, `dimAprem`) VALUES
(5, 1, 1, '', 1, '', '', '', 20, '', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 1, 1, '', 1, '', '', '', 20, '', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 1, 1, '', 1, '', '', '', 20, '', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 1, 1, '', 1, '', '', '', 20, '', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 1, 1, 'ssgsxgxsg', 1, '', '', '', 20, '', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 1, 1, 'ssgsxgxsg', 1, '', '', '', 20, '', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 1, 1, 'ssgsxgxsg', 1, '', '', '', 20, '', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 1, 1, 'ssgsxgxsg', 1, '', '', '', 20, '', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 1, 1, 'ssgsxgxsg', 1, '', '', '', 20, '', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 1, 1, 'ssgsxgxsg', 1, '', '', '', 20, '', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 1, 1, 'ssgsxgxsg', 1, '', '', '', 20, '', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 1, 1, 'ssgsxgxsg', 1, '', '', '', 20, '', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 1, 1, 'ssgsxgxsg', 1, '', '', '', 20, '', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `infoperso`
--
ALTER TABLE `infoperso`
  ADD PRIMARY KEY (`idPerso`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `infoperso`
--
ALTER TABLE `infoperso`
  MODIFY `idPerso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
