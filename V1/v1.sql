-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 20 Octobre 2018 à 16:19
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `v1`
--

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

CREATE TABLE IF NOT EXISTS `horaire` (
`IdHoraire` int(11) NOT NULL,
  `KeyInfoPerso` int(11) NOT NULL,
  `9h-12h` tinyint(1) NOT NULL,
  `13h-17h` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `infoperso`
--

CREATE TABLE IF NOT EXISTS `infoperso` (
`IdInfo` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `infoperso`
--

INSERT INTO `infoperso` (`IdInfo`, `Nom`) VALUES
(1, 'Bob'),
(2, 'Marie'),
(3, 'Julien'),
(4, 'Charle');

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

CREATE TABLE IF NOT EXISTS `poste` (
`IdPoste` int(11) NOT NULL,
  `KeyPoste` int(11) NOT NULL,
  `Choix 1` varchar(255) NOT NULL,
  `Choix 2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `horaire`
--
ALTER TABLE `horaire`
 ADD PRIMARY KEY (`IdHoraire`);

--
-- Index pour la table `infoperso`
--
ALTER TABLE `infoperso`
 ADD PRIMARY KEY (`IdInfo`);

--
-- Index pour la table `poste`
--
ALTER TABLE `poste`
 ADD PRIMARY KEY (`IdPoste`), ADD KEY `KeyPoste` (`KeyPoste`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `horaire`
--
ALTER TABLE `horaire`
MODIFY `IdHoraire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `infoperso`
--
ALTER TABLE `infoperso`
MODIFY `IdInfo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `poste`
--
ALTER TABLE `poste`
MODIFY `IdPoste` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `poste`
--
ALTER TABLE `poste`
ADD CONSTRAINT `Poste-Id` FOREIGN KEY (`KeyPoste`) REFERENCES `poste` (`IdPoste`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
