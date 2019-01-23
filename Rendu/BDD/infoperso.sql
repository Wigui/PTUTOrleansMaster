-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : cltobadmintivo.mysql.db
-- Généré le :  mar. 22 jan. 2019 à 20:47
-- Version du serveur :  5.5.60-0+deb7u1-log
-- Version de PHP :  5.6.38-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cltobadmintivo`
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
  `tourbene` tinyint(1) NOT NULL DEFAULT '0',
  `soirbene` tinyint(1) NOT NULL DEFAULT '0',
  `visbene` tinyint(1) NOT NULL DEFAULT '0',
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `date_naissance` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `numeroTel` varchar(255) NOT NULL,
  `tShirt` varchar(10) NOT NULL,
  `lang1` varchar(255) NOT NULL,
  `lang2` varchar(255) NOT NULL,
  `lang3` varchar(255) NOT NULL,
  `permis` tinyint(1) NOT NULL DEFAULT '0',
  `post1` varchar(255) NOT NULL,
  `post2` varchar(255) NOT NULL,
  `post3` varchar(255) NOT NULL,
  `sam2Mat` tinyint(1) NOT NULL DEFAULT '0',
  `sam2Aprem` tinyint(1) NOT NULL DEFAULT '0',
  `dim2Mat` tinyint(1) NOT NULL DEFAULT '0',
  `dim2Aprem` tinyint(1) NOT NULL DEFAULT '0',
  `lunMat` tinyint(1) NOT NULL DEFAULT '0',
  `lunAprem` tinyint(1) NOT NULL DEFAULT '0',
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
-- Déchargement des données de la table `infoperso`
--

INSERT INTO `infoperso` (`idPerso`, `dejBene`, `licence`, `textarea`, `reglement`, `tourbene`, `soirbene`, `visbene`, `nom`, `prenom`, `club`, `date_naissance`, `mail`, `numeroTel`, `tShirt`, `lang1`, `lang2`, `lang3`, `permis`, `post1`, `post2`, `post3`, `sam2Mat`, `sam2Aprem`, `dim2Mat`, `dim2Aprem`, `lunMat`, `lunAprem`, `marMat`, `marAprem`, `merMat`, `merAprem`, `jeuMat`, `jeuAprem`, `venMat`, `venAprem`, `samMat`, `samAprem`, `dimMat`, `dimAprem`) VALUES
(9, 1, 1, 'YONEX IFB', 1, 1, 1, 0, 'Laurent', 'Franck', 'CLTO Badminton', '25/8/1972', 'franck.laurent@cltobadminton.fr', '0660534925', 'tailleL', 'anglais', 'aucune', 'aucune', 1, 'accueil', 'restauration', 'restauration', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(10, 1, 0, 'Bénévole au  YonexIFB  au stade Jean Bouin', 1, 0, 1, 1, 'Bacrot', 'Martine ', 'Aucun', '24/12/1957', 'martine.bac@live.fr', '0627582273', 'tailleS', 'aucune', 'aucune', 'aucune', 1, 'placeurs', 'vip', 'restauration', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1),
(11, 1, 0, 'Bénévole au YONEX IFB Au stade jean bouin ', 1, 0, 1, 1, 'Gandon ', 'Isabelle ', 'Aucun ', '25/5/1965', 'isabelle65.gandon@gmail.com', '0698631709', 'tailleM', 'aucune', 'aucune', 'aucune', 1, 'placeurs', 'vip', 'restauration', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1),
(12, 1, 0, 'Bénévole YonexIFB jean bouin', 1, 0, 1, 1, 'Bacrot', 'Alain', 'Aucun', '2/3/1966', 'alainbacrot@hotmail.fr', '0614165990', 'tailleXL', 'aucune', 'aucune', 'aucune', 1, 'placeurs', 'vip', 'restauration', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0),
(13, 0, 1, 'Au cours du Championnat d\'Europe Parabadminton 2018, à Rodez, oú j\'étais JL', 1, 1, 1, 1, 'Buesa Bringué', 'Vicenç', 'Badminton Saint-Estève BSE66', '4/8/1961', 'eda481961@hotmail.com', '+34 678675573', 'tailleL', 'espagnole', 'anglais', 'aucune', 1, 'officielsTech', 'placeurs', 'plateau', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(14, 1, 0, 'Bénévolat', 1, 0, 1, 0, 'GAUDEY', 'Bernard', '', '22/9/1955', 'brd.gaudey@orange.fr', '06 86 93 89 57', 'tailleXL', 'anglais', 'allemand', 'aucune', 1, 'vip', 'accueil', 'boutique', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1),
(17, 0, 1, 'Par une joueuse ! ', 1, 0, 1, 1, 'Liottard ', 'Christelle ', 'Badminton club Bourg-de-Péage 26', '29/6/1971', 'Christelle@bcbp26.com ', '0616934812 ', 'tailleM', 'aucune', 'aucune', 'aucune', 1, 'restauration', 'accueil', 'comAnimSco', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(18, 0, 0, 'média', 1, 0, 1, 0, 'bourdin', 'jean yves', '', '11/6/1959', 'jeanyvesbourdin@sfr.fr', '0677287082', 'tailleL', 'aucune', 'aucune', 'aucune', 1, 'accueil', 'placeurs', 'gestJoueurs', 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1),
(19, 0, 1, 'FFBAD', 1, 1, 0, 0, 'Assié', 'Christophe', 'Badminton Club Ozoir', '18/10/1965', 'christopheassie@hotmail.com', '0670660042', 'tailleXL', 'anglais', 'aucune', 'aucune', 1, 'officielsTech', 'restauration', 'restauration', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0),
(20, 1, 0, 'Participation l annee derniere', 1, 0, 1, 1, 'macle', 'claude', '', '18/1/1946', 'claude.macle@orange.fr', '0680138883', 'tailleXXL', 'aucune', 'aucune', 'aucune', 1, 'transport', 'transport', 'transport', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(21, 1, 1, 'j\'m\'en rappelle plus ... surement par le bouche à oreilles....', 1, 0, 0, 0, 'Fouassier', 'Bruno', 'Ingré / Pithiviers', '21/2/1956', 'bruno.fouassier@wanadoo.fr', '06 80 17 29 77', 'tailleXL', 'aucune', 'aucune', 'aucune', 1, 'plateau', 'transport', 'restauration', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1),
(22, 1, 1, 'réquisition par un bénévole il y a très longtemps ....', 1, 0, 0, 0, 'Fouassier', 'Corinne', 'Ingré', '29/8/1960', 'bruno.fouassier@wanadoo.fr', '06 80 17 29 77', 'tailleXL', 'anglais', 'aucune', 'aucune', 1, 'plateau', 'restauration', 'restauration', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(23, 1, 0, 'invitation par amis il y a longtemps ....', 1, 0, 0, 0, 'Guillemart', 'Genevieve', 'Darvoy', '17/7/1963', 'danielguillemart@orange.fr', '06 72 01 26 43', 'tailleXXL', 'aucune', 'aucune', 'aucune', 1, 'plateau', 'restauration', 'restauration', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(24, 0, 0, 'Reseaux sociaux (Facebook)', 1, 0, 1, 1, 'Coatmeur', 'Bernard', '', '25/5/1956', 'b.coatmeur@wanadoo.fr', '0616542030', 'tailleL', 'anglais', 'aucune', 'aucune', 1, 'accueil', 'placeurs', 'restauration', 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(25, 0, 0, 'Par la pratique du badminton. Suite à une mutation professionnelle je viens d\'arriver sur Orléans. Pour la saison 2018-19 je suis actuellement en convalescence mais espère reprendre prochainement au sein du CLTO. (Ancien club USL LAILLE en Bretagne)', 1, 0, 0, 1, 'Prodhomme ', 'Audrey', 'Ex clus USL LAILLE', '15/4/1984', 'audrey.prodhomme01@gmail.com ', '0681517718', 'tailleL', 'aucune', 'aucune', 'aucune', 1, 'restauration', 'accueil', 'logistique', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1),
(26, 1, 0, 'Par le travail', 1, 0, 0, 0, 'Barreau', 'Sylvain', '', '18/5/1975', 'sylvain.barreau@laposte.net', '0681934115', 'tailleL', 'anglais', 'aucune', 'aucune', 1, 'comAnimSco', 'communication', 'restauration', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(27, 1, 0, 'CLTO Badminton', 1, 0, 1, 0, 'MAIRE', 'Pauline', '', '24/7/1991', 'pauline_maire@orange.fr', '0670044828', 'tailleL', 'aucune', 'aucune', 'aucune', 1, 'vip', 'restauration', 'restauration', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1),
(28, 0, 0, 'FFBAD + lecture perso + pub lors des IFB par Pamela :)', 1, 0, 1, 0, 'TISET', 'Sylvain', 'Badminton Club d\'Antibes', '4/9/1992', 'sylvain.tiset@gmail.com', '0647333714', 'tailleL', 'anglais', 'aucune', 'aucune', 1, 'gestJoueurs', 'communication', 'informatique', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(29, 0, 1, 'Car je suis l\'un des plus grand fan du badminton.', 1, 1, 1, 0, 'Tabarly', 'Théo', 'Badminton Club Appaméen', '15/10/1997', 'theodupas@hotmail.fr', '+376394727', 'tailleM', 'espagnole', 'aucune', 'aucune', 0, 'boutique', 'vip', 'accueil', 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0),
(30, 1, 0, 'OM / OIC / IFB', 1, 0, 1, 1, 'QUENNEC', 'CHRISTOPHE', '', '21/4/1971', 'christophe.quennec@gmail.com', '0662813740', 'tailleXL', 'anglais', 'aucune', 'aucune', 1, 'transport', 'logistique', 'plateau', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(31, 0, 0, 'j ai deja travaille aux jeux olympiques en grece ,et une personne m a parle de cet evement majeur ', 1, 1, 0, 1, 'mostari', 'zouaoui', '', '27/2/1967', 'zmostari@hotmail.com', '0777349363', 'tailleS', 'anglais', 'arabe', 'espagnole', 1, 'accueil', 'communication', 'boutique', 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1),
(32, 0, 0, 'au Yonex IFB', 1, 0, 1, 1, 'NICOLAS', 'Alexandre', 'APPL', '19/9/1950', 'nicolas.alex@gmail.com', '0687532613', 'tailleXL', 'espagnole', 'aucune', 'aucune', 1, 'placeurs', 'informatique', 'transport', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(33, 0, 1, 'Mon collègue Hervé Leclerc', 1, 0, 1, 1, 'DUHAIL', 'Emilie', 'CLTO', '20/4/1990', 'emilie.duhail@gmail.com', '0650432063', 'tailleS', 'anglais', 'aucune', 'aucune', 1, 'communication', 'boutique', 'vip', 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 1, 0),
(34, 0, 1, 'Facebook FFBAD', 1, 0, 1, 0, 'FREROU', 'Gaëlle', 'Gévezé', '1/6/1998', 'gaelle.frerou@outlook.fr', '0651367413', 'tailleM', 'anglais', 'espagnole', 'aucune', 1, 'boutique', 'restauration', 'vip', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1),
(35, 1, 0, 'Rencontre des responsables au tournoi de Badmintonn Paris 2017', 1, 0, 1, 0, 'AGNAN', 'Chantal', '', '27/9/1950', 'chantal007tahiti@gmail.com', '06 62 91 71 74 ', 'tailleS', 'anglais', 'allemand', 'aucune', 1, 'vip', 'vip', 'vip', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1),
(36, 1, 1, 'mon pere', 1, 0, 1, 0, 'laurent', 'thomas', 'clto', '15/5/2000', 'thomaslau15052000@gmail.com', '0668144513', 'tailleL', 'aucune', 'aucune', 'aucune', 1, 'restauration', 'restauration', 'restauration', 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1),
(37, 1, 1, '', 1, 1, 1, 0, 'GAILLARD', 'Christel', 'USM Saran', '21/8/1968', 'cgaillard@ausy.fr', '06 08 31 44 36', 'tailleXL', 'anglais', 'aucune', 'aucune', 1, 'informatique', 'informatique', 'plateau', 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(38, 1, 0, 'le bouche à oreille', 1, 0, 1, 0, 'pierdet', 'philippe', 'orleans master', '12/2/1965', 'philpierdet@sfr.fr', '0786925945', 'tailleXL', 'anglais', 'aucune', 'aucune', 1, 'restauration', 'restauration', 'restauration', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(39, 1, 0, 'Mon mari', 1, 0, 1, 0, 'Moirot', 'Laure', '', '10/1/1979', 'laure.moirot@gmail.com', '0613796991', 'tailleM', 'anglais', 'espagnole', 'aucune', 1, 'vip', 'vip', 'vip', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(40, 1, 1, '', 1, 1, 1, 0, 'ANTOINE', 'Maxime', 'CLTO', '2/7/1986', 'maxime.antoine1986@gmail.com', '0684384012', 'tailleM', 'anglais', 'espagnole', 'aucune', 1, 'communication', 'restauration', 'restauration', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(41, 1, 1, 'Par mon ancien club de badminton', 1, 1, 1, 0, 'GAUBICHER', 'BERTRAND', 'DJSBad 45', '29/7/1977', 'bertrand.gaubicher@gmail.com', '06.62.53.65.58', 'tailleXL', 'anglais', 'allemand', 'aucune', 1, 'competition', 'competition', 'competition', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(43, 1, 1, 'CLTO', 1, 1, 1, 0, 'GIESSLER', 'MARC', 'CLTO ORLEANS', '7/12/1961', 'marc.giessler@free.fr', '0603594868', 'tailleXXL', 'anglais', 'aucune', 'aucune', 1, 'accueil', 'placeurs', 'boutique', 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(45, 1, 1, 'club de badminton', 1, 0, 1, 0, 'meuleman', 'florence', 'artenay badminton club', '30/3/1986', 'wowowe@hotmail.com', '0761160042', 'tailleM', 'anglais', 'aucune', 'aucune', 1, 'competition', 'restauration', 'accueil', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(46, 1, 1, 'par le club abc artenay', 1, 0, 1, 0, 'garcin', 'christophe', 'abc artenay', '10/7/1978', 'garcinchris@live.fr', '0660324694', 'tailleL', 'aucune', 'aucune', 'aucune', 1, 'restauration', 'restauration', 'restauration', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(48, 0, 0, 'Par des amis de club.', 1, 1, 1, 0, 'CAMARA', 'Ségolène ', 'CLTO Badminton ', '28/11/2016', 'segolene.camara@cltobadminton.fr', '0671970396', 'tailleM', 'anglais', 'espagnole', 'aucune', 1, 'competition', 'communication', 'gestJoueurs', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `infoperso`
--
ALTER TABLE `infoperso`
  ADD PRIMARY KEY (`idPerso`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `infoperso`
--
ALTER TABLE `infoperso`
  MODIFY `idPerso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
