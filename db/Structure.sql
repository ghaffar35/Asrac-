-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 16 Novembre 2016 à 10:06
-- Version du serveur :  5.7.16-0ubuntu0.16.04.1
-- Version de PHP :  7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Asrac`
--
CREATE DATABASE IF NOT EXISTS `Asrac` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Asrac`;

-- --------------------------------------------------------

--
-- Structure de la table `Article`
--

CREATE TABLE `Article` (
  `art_id` int(11) NOT NULL,
  `art_title` text CHARACTER SET utf8mb4 NOT NULL,
  `art_content` text CHARACTER SET utf8mb4 NOT NULL,
  `art_image` text CHARACTER SET utf8mb4,
  `art_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `art_theme` varchar(200) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Event`
--

CREATE TABLE `Event` (
  `ev_id` int(11) NOT NULL,
  `ev_title` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `ev_lieu` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `ev_date` datetime NOT NULL,
  `ev_image` text CHARACTER SET utf8 NOT NULL,
  `ev_desc` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Slide`
--

CREATE TABLE `Slide` (
  `sl_id` int(11) NOT NULL,
  `sl_title` text CHARACTER SET utf8 NOT NULL,
  `sl_subTitle` text CHARACTER SET utf8 NOT NULL,
  `sl_image` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_password` text CHARACTER SET utf8 NOT NULL,
  `usr_salt` text CHARACTER SET utf8 NOT NULL,
  `usr_role` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`art_id`);

--
-- Index pour la table `Event`
--
ALTER TABLE `Event`
  ADD PRIMARY KEY (`ev_id`);

--
-- Index pour la table `Slide`
--
ALTER TABLE `Slide`
  ADD PRIMARY KEY (`sl_id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Article`
--
ALTER TABLE `Article`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `Event`
--
ALTER TABLE `Event`
  MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `Slide`
--
ALTER TABLE `Slide`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
