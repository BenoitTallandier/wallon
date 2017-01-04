-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 03 Mars 2016 à 07:12
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `wallon`
--

-- --------------------------------------------------------

--
-- Structure de la table `carriere`
--

CREATE TABLE IF NOT EXISTS `carriere` (
  `id_carr` int(11) NOT NULL AUTO_INCREMENT,
  `name_carr` text NOT NULL,
  `image_carr` text NOT NULL,
  `descript_carr` text NOT NULL,
  PRIMARY KEY (`id_carr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `carriere`
--

INSERT INTO `carriere` (`id_carr`, `name_carr`, `image_carr`, `descript_carr`) VALUES
(1, 'La ferme Belge', '01.jpg', 'blabla');

-- --------------------------------------------------------

--
-- Structure de la table `join_carr_mods`
--

CREATE TABLE IF NOT EXISTS `join_carr_mods` (
  `id_join` int(11) NOT NULL AUTO_INCREMENT,
  `id_mod` int(11) NOT NULL,
  `id_carr` int(11) NOT NULL,
  PRIMARY KEY (`id_join`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `join_carr_mods`
--

INSERT INTO `join_carr_mods` (`id_join`, `id_mod`, `id_carr`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `mods`
--

CREATE TABLE IF NOT EXISTS `mods` (
  `id_mod` int(11) NOT NULL AUTO_INCREMENT,
  `lien_mod` text NOT NULL,
  `type_mod` int(11) NOT NULL,
  `image_mods` text NOT NULL,
  `name_mods` text NOT NULL,
  PRIMARY KEY (`id_mod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `mods`
--

INSERT INTO `mods` (`id_mod`, `lien_mod`, `type_mod`, `image_mods`, `name_mods`) VALUES
(1, 'http://tellis.olympe.in', 28, 'tractors.png', 'le tractor du futur !'),
(2, 'http://tellis.olympe.in', 28, 'Logo Wallon.png', 'azeaze');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `auteur` int(11) NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id_news`, `title`, `content`, `date`, `auteur`) VALUES
(2, 'Test2', 'Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.', '2016-01-17 13:00:00', 0),
(4, 'Test3', 'Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.', '2016-01-17 14:47:00', 1),
(7, 'ae', '<p>\r\n	deada</p>\r\n<p>\r\n	gezrge</p>\r\n<p>\r\n	<u>fzfez</u></p>\r\n<p>\r\n	<u><strong>dezdadzd</strong></u></p>\r\n', '2016-02-15 22:23:25', 1),
(8, 'Première news', '<p>\r\n	Bonjour &agrave; tous,</p>\r\n<p>\r\n	ceci est la premi&egrave;re news officielle du site histoire de voir si &ccedil;a marche bien.</p>\r\n', '2016-02-15 22:25:41', 1);

-- --------------------------------------------------------

--
-- Structure de la table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id_state` int(11) NOT NULL,
  `autorisation` int(11) NOT NULL,
  `message` text,
  `lien_bottom` int(1) NOT NULL,
  `version` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `state`
--

INSERT INTO `state` (`id_state`, `autorisation`, `message`, `lien_bottom`, `version`) VALUES
(1, 1, 'vous n''êtes plus autorisé à utiliser ce site', 1, '1.2');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `name_type` text NOT NULL,
  `image_type` text NOT NULL,
  `descript_type` text NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id_type`, `name_type`, `image_type`, `descript_type`) VALUES
(28, 'Tracteurs', 'tracteur.png', 'Tracteur'),
(29, 'Camions', 'camion.png', ''),
(30, 'Moissonneuses', 'moisseuneuse.png', 'Moissonneuse batteuse'),
(31, 'Arracheuses', 'bettrave.png', ''),
(32, 'Remorques', 'benne.png', ''),
(33, 'Charrues', 'charrue.png', ''),
(34, 'Cultivateurs', 'cultivateur.png', ''),
(35, 'Semoirs', 'semoir.png', ''),
(36, 'Epander à engrais', 'epandeur.png', ''),
(37, 'Pulvérisateurs', 'pulve.png', ''),
(38, 'Epandeur à fumier', 'fumier.png', ''),
(39, 'Cuve à lisier', 'lisier.png', ''),
(40, 'Faucheuse', 'faucheuse.png', ''),
(41, 'Faneuse', 'faneuse.png', ''),
(42, 'Andaineur', 'andaineur.png', ''),
(43, 'Auto-chargeuse', 'autochargeuse.png', ''),
(44, 'Outillage pour balle', 'balle.png', ''),
(45, 'Alimentation', 'melangeuse.png', ''),
(46, 'Masse', 'masse.png', ''),
(47, 'Forestier', 'bois.png', ''),
(48, 'Engins de TP', 'tp.png', ''),
(49, 'Voitures', 'voiture.png', ''),
(50, 'Chargeurs', 'telescopique.png', ''),
(51, 'Maps', 'map.png', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `user`, `pass`) VALUES
(1, 'aze', 'aze');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id_videos` int(11) NOT NULL AUTO_INCREMENT,
  `lien` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_videos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `videos`
--

INSERT INTO `videos` (`id_videos`, `lien`, `date`) VALUES
(1, 'TL8K4rRKUV0', '2015-09-27'),
(2, 'iDbw2cabwas', '2015-09-30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
