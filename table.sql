-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 07 Décembre 2018 à 16:01
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Meme_R`
--

-- --------------------------------------------------------

--
-- Structure de la table `images_brutes`
--

CREATE TABLE `images_brutes` (
  `ID_imgbrutes` int(11) NOT NULL,
  `Url_imgbrutes` varchar(1000) DEFAULT NULL,
  `nom_imgbrutes` varchar(255) DEFAULT NULL,
  `chemin_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `images_brutes`
--

INSERT INTO `images_brutes` (`ID_imgbrutes`, `Url_imgbrutes`, `nom_imgbrutes`, `chemin_img`) VALUES
(1, 'https://ophelied.promo-24.codeur.online/images/bigbigfaill.jpg', 'photo26.jpg', 'Images/photo26.jpg'),
(2, 'https://ophelied.promo-24.codeur.online/images/bigfall.jpg', 'photo27.jpg', 'Images/photo27.jpg'),
(3, 'https://ophelied.promo-24.codeur.online/images/cat.jpg', 'photo28.jpg', 'Images/photo28.jpg'),
(4, 'https://ophelied.promo-24.codeur.online/images/cat2.jpg', 'photo29.jpg', 'Images/photo29.jpg'),
(5, 'https://ophelied.promo-24.codeur.online/images/coffee.jpg', 'photo30.jpg', 'Images/photo30.jpg'),
(6, 'https://ophelied.promo-24.codeur.online/images/coworker.jpg', 'photo31.jpg', 'Images/photo31.jpg'),
(7, 'https://ophelied.promo-24.codeur.online/images/dog.jpg', 'photo32.jpg', 'Images/photo32.jpg'),
(8, 'https://ophelied.promo-24.codeur.online/images/fall.jpg', 'photo33.jpg', 'Images/photo33.jpg'),
(9, 'https://ophelied.promo-24.codeur.online/images/man.jpg', 'photo34.jpg', 'Images/photo34.jpg'),
(10, 'https://ophelied.promo-24.codeur.online/images/mug.jpg', 'photo35.jpg', 'Images/photo35.jpg'),
(11, 'https://ophelied.promo-24.codeur.online/images/people.jpg', 'photo36.jpg', 'Images/photo36.jpg'),
(12, 'https://ophelied.promo-24.codeur.online/images/scary.jpg', 'photo37.jpg', 'Images/photo37.jpg'),
(13, 'https://ophelied.promo-24.codeur.online/images/sheet.jpg', 'photo38.jpg', 'Images/photo38.jpg'),
(14, 'https://ophelied.promo-24.codeur.online/images/smatch.jpg', 'photo39.jpg', 'Images/photo39.jpg'),
(15, 'https://ophelied.promo-24.codeur.online/images/toy.jpg', 'photo40.jpg', 'Images/photo40.jpg'),
(16, 'https://ophelied.promo-24.codeur.online/images/volontaries.jpg', 'photo41.jpg', 'Images/photo41.jpg'),
(17, 'https://ophelied.promo-24.codeur.online/images/weird.jpg', 'photo43.jpg', 'Images/photo43.jpg'),
(18, 'https://ophelied.promo-24.codeur.online/images/worker.jpg', 'photo42.jpg', 'Images/photo42.jpg'),
(19, 'https://ophelied.promo-24.codeur.online/images/1.jpg', 'photo43.jpg', 'Images/photo43.jpg'),
(20, 'https://ophelied.promo-24.codeur.online/images/2.jpg', 'photo44.jpg', 'Images/photo44.jpg'),
(21, 'https://ophelied.promo-24.codeur.online/images/3.jpg', 'photo45.jpg', 'Images/photo45.jpg'),
(22, 'https://ophelied.promo-24.codeur.online/images/4.jpg', 'photo47.jpg', 'Images/photo47.jpg'),
(23, 'https://ophelied.promo-24.codeur.online/images/5.jpg', 'photo46.jpg', 'Images/photo46.jpg'),
(24, 'https://ophelied.promo-24.codeur.online/images/6.jpg', 'photo48.jpg', 'Images/photo48.jpg'),
(25, 'https://ophelied.promo-24.codeur.online/images/7.jpg', 'photo49.jpg', 'Images/photo49.jpg'),
(28, 'https://ophelied.promo-24.codeur.online/images/8.jpg', 'photo8.jpg', 'Images/photo8.jpg'),
(29, 'https://ophelied.promo-24.codeur.online/images/9.jpg', 'photo9.jpg', 'Images/photo9.jpg'),
(30, 'https://ophelied.promo-24.codeur.online/images/10.jpg', 'photo10.jpg', 'Images/photo10.jpg'),
(31, 'https://ophelied.promo-24.codeur.online/images/11.jpg', 'photo11.jpg', 'Images/photo11.jpg'),
(32, 'https://ophelied.promo-24.codeur.online/images/12.jpg', 'photo12.jpg', 'Images/photo12.jpg'),
(33, 'https://ophelied.promo-24.codeur.online/images/15.jpg', 'photo15.jpg', 'Images/photo15.jpg'),
(34, 'https://ophelied.promo-24.codeur.online/images/16.jpg', 'photo16.jpg', 'Images/photo16.jpg'),
(35, 'https://ophelied.promo-24.codeur.online/images/17.jpg', 'photo17.jpg', 'Image/photo17.jpg'),
(36, 'https://ophelied.promo-24.codeur.online/images/18.jpg', 'photo18.jpg', 'Images/photo18.jpg'),
(37, 'https://ophelied.promo-24.codeur.online/images/19.jpg', 'photo19.jpg', 'Images/photo19.jpg'),
(38, 'https://ophelied.promo-24.codeur.online/images/20.jpg', 'photo20.jpg', 'Images/photo20.jpg'),
(39, 'https://ophelied.promo-24.codeur.online/images/21.jpg', 'photo21.jpg', 'Images/photo21.jpg'),
(40, 'https://ophelied.promo-24.codeur.online/images/22.jpg', 'photo22.jpg', 'Images/photo22.jpg'),
(41, 'https://ophelied.promo-24.codeur.online/images/23.jpg', 'photo23.jpg', 'Images/photo23.jpg'),
(42, 'https://ophelied.promo-24.codeur.online/images/24.jpg', 'photo24.jpg', 'Images/photo24.jpg'),
(43, 'https://ophelied.promo-24.codeur.online/images/25.jpg', 'photo25.jpg', 'Images/photo25.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `memes`
--

CREATE TABLE `memes` (
  `Id_memes` int(11) NOT NULL,
  `url_memes` varchar(1000) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `cheminlocal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `images_brutes`
--
ALTER TABLE `images_brutes`
  ADD PRIMARY KEY (`ID_imgbrutes`);

--
-- Index pour la table `memes`
--
ALTER TABLE `memes`
  ADD PRIMARY KEY (`Id_memes`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `images_brutes`
--
ALTER TABLE `images_brutes`
  MODIFY `ID_imgbrutes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT pour la table `memes`
--
ALTER TABLE `memes`
  MODIFY `Id_memes` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
