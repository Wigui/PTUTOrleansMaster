-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 05 Janvier 2019 à 11:58
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
  `post1` varchar(255) NOT NULL,
  `post2` varchar(255) NOT NULL,
  `post3` varchar(255) NOT NULL,
  `marMat` tinyint(1) NOT NULL DEFAULT '0',
  `marAprem` tinyint(1) NOT NULL DEFAULT '0',
  `merMat` tinyint(1) NOT NULL DEFAULT '0',
  `merAprem` tinyint(1) NOT NULL DEFAULT '0',
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
  MODIFY `idPerso` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
