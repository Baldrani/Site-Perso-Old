-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 14, 2016 at 09:53 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sos`
--

--
-- Table structure for table `lieu`
--

CREATE TABLE `lieu` (
  `idlieu` int(11) NOT NULL,
  `ville` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lieu`
--

INSERT INTO `lieu` (`idlieu`, `ville`) VALUES
(1, 'FRANCONVILLE'),
(2, 'ERMONT'),
(3, 'TAVERNY'),
(4, 'PARIS'),
(5, 'PLESSISBOUCHARD'),
(6, 'PARIS15'),
(7, 'TEST'),
(8, 'PARISVI'),
(9, 'FSDG'),
(10, 'SQ'),
(11, 'QDF'),
(12, 'DF'),
(13, 'JHGJH'),
(14, 'FRANCE'),
(15, 'SWAG');

-- --------------------------------------------------------

--
-- Table structure for table `niveau`
--

CREATE TABLE `niveau` (
  `idniveau` int(11) NOT NULL,
  `niveau` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `niveau`
--

INSERT INTO `niveau` (`idniveau`, `niveau`) VALUES
(1, 'Debutant'),
(2, 'Intermediaire'),
(3, 'Expert');

-- --------------------------------------------------------

--
-- Table structure for table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` int(11) NOT NULL,
  `idutilisateur` int(11) NOT NULL,
  `idpartenaire` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partenaires`
--

INSERT INTO `partenaires` (`id`, `idutilisateur`, `idpartenaire`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 2, 1),
(4, 2, 3),
(5, 3, 1),
(6, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pratique`
--

CREATE TABLE `pratique` (
  `idpratique` int(11) NOT NULL,
  `idsport` int(11) NOT NULL,
  `idutilisateur` int(11) NOT NULL,
  `idlieu` int(11) NOT NULL,
  `idniveau` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pratique`
--

INSERT INTO `pratique` (`idpratique`, `idsport`, `idutilisateur`, `idlieu`, `idniveau`) VALUES
(31, 10, 1, 3, 3),
(3, 2, 2, 2, 2),
(30, 1, 3, 1, 1),
(11, 33, 2, 1, 1),
(10, 33, 1, 1, 1),
(46, 33, 4, 15, 2),
(45, 4, 4, 7, 2),
(43, 16, 4, 4, 2),
(44, 27, 4, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `idsport` int(11) NOT NULL,
  `sport` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`idsport`, `sport`) VALUES
(1, 'Aviron'),
(2, 'Badminton'),
(3, 'Basket-ball'),
(4, 'Biathlon'),
(5, 'Billard'),
(6, 'Bowling'),
(7, 'Boxe'),
(8, 'Canyonnig'),
(9, 'Course d''orientation'),
(10, 'Crosse'),
(11, 'Cyclisme'),
(12, 'Danse'),
(13, 'Equitation'),
(14, 'Deltaplane'),
(15, 'Escrime'),
(16, 'Echecs'),
(17, 'Football'),
(18, 'Golf'),
(19, 'Gymnastique'),
(20, 'Handball'),
(21, 'Hockey'),
(22, 'Judo'),
(23, 'Karaté'),
(24, 'Karting'),
(25, 'Lutte'),
(26, 'Moto'),
(27, 'Natation'),
(28, 'Parachutisme'),
(29, 'Patinage artistique'),
(30, 'Pêche sportive'),
(31, 'Ping-pong'),
(32, 'Plongée'),
(33, 'Paintblall'),
(34, 'Roller'),
(35, 'Rugby'),
(36, 'Tennis'),
(37, 'Tir à l''arc'),
(38, 'Ultimate'),
(39, 'Volley'),
(40, 'Yoga');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idutilisateur` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `identifiant` text NOT NULL,
  `mdp` text NOT NULL,
  `email` text,
  `telephone` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`idutilisateur`, `nom`, `prenom`, `identifiant`, `mdp`, `email`, `telephone`) VALUES
(1, 'Brioland', 'Emilie', 'EmilieBrio', '1234', 'e.brio@blabla.fr', '0605040302'),
(2, 'Pascoal', 'Alexandre', 'AlexPasc', '1234', 'a.pasc@blabla.fr', '0605756921'),
(3, 'Rieu', 'Maxime', 'mrieu', '1234', 'm.rieu@ip-formation.net', '84989494'),
(36, 'MaÃ«l', 'Mayon', 'Mawel', '1234', 'mael.mayon@free.fr', '0613499190');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`idlieu`);

--
-- Indexes for table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`idniveau`);

--
-- Indexes for table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUtilisateur` (`idutilisateur`),
  ADD KEY `idPartenaire` (`idpartenaire`);

--
-- Indexes for table `pratique`
--
ALTER TABLE `pratique`
  ADD PRIMARY KEY (`idpratique`),
  ADD KEY `idSport` (`idsport`),
  ADD KEY `idUtilisateur` (`idutilisateur`),
  ADD KEY `idLieu` (`idlieu`),
  ADD KEY `idNiveau` (`idniveau`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`idsport`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idutilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `idlieu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pratique`
--
ALTER TABLE `pratique`
  MODIFY `idpratique` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `idsport` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idutilisateur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;