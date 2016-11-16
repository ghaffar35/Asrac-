-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 16 Novembre 2016 à 17:17
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

--
-- Contenu de la table `Article`
--

INSERT INTO `Article` (`art_id`, `art_title`, `art_content`, `art_image`, `art_date`, `art_theme`) VALUES
(2, 'Salut toi', 'Id quem domesticarum, o aliqua pariatur ad anim iudicem sed laboris in illum mandaremus aut excepteur. Singulis do appellat. Aute sed ita culpa nescius non aliquip tamen sint laboris malis, laboris magna nisi ubi malis, ullamco velit quae id enim. Anim illustriora mentitum cillum ingeniis, singulis te excepteur o nulla fabulas nam velit dolor, qui ab sint voluptate. Laboris quem mentitum hic ex quorum laborum transferrem ne est anim exercitation ex multos expetendis ne incididunt. Ut summis admodum eruditionem.', 'error_ghost.png', '2016-11-09 00:00:00', 'test'),
(4, 'Bonjour', 'Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et \r\n	possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an \r\n		cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor \r\n		excepteur, ullamco et incurreret te an dolore fore ab fabulas. Amet arbitrantur \r\n			laboris irure consequat, nam enim aliquip. Ipsum aliquip ab singulis, incurreret \r\n				ne summis, est amet esse qui probant aut aut commodo et arbitror quo veniam \r\n					singulis qui fugiat magna, varias tempor ea senserit est an minim quamquam \r\n						concursionibus, varias de occaecat. Velit an ita ipsum aliquip ab dolore \r\n							transferrem proident culpa probant, culpa illustriora consequat labore occaecat \r\n								hic sed commodo consectetur ea litteris duis labore pariatur quem de quid \r\n								cupidatat ingeniis ad et ubi tamen enim nulla an aliquip dolor dolor et dolor. \r\n								Eu varias ubi labore, nostrud e cupidatat se quorum iudicem e consectetur de \r\n									vidisse dolore admodum, officia ubi quem, singulis quis fore arbitror illum, do \r\n										magna reprehenderit, ad dolore malis et eiusmod. Quis possumus vidisse.', 'error_ghost.png', '2011-01-01 00:00:00', 'test'),
(5, 'test', 'Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et \r\n	possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an \r\n		cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor \r\n		excepteur, ullamco et incurreret te an dolore fore ab fabulas. Amet arbitrantur \r\n			laboris irure consequat, nam enim aliquip. Ipsum aliquip ab singulis, incurreret \r\n				ne summis, est amet esse qui probant aut aut commodo et arbitror quo veniam \r\n					singulis qui fugiat magna, varias tempor ea senserit est an minim quamquam \r\n						concursionibus, varias de occaecat. Velit an ita ipsum aliquip ab dolore \r\n							transferrem proident culpa probant, culpa illustriora consequat labore occaecat \r\n								hic sed commodo consectetur ea litteris duis labore pariatur quem de quid \r\n								cupidatat ingeniis ad et ubi tamen enim nulla an aliquip dolor dolor et dolor. \r\n								Eu varias ubi labore, nostrud e cupidatat se quorum iudicem e consectetur de \r\n									vidisse dolore admodum, officia ubi quem, singulis quis fore arbitror illum, do \r\n										magna reprehenderit, ad dolore malis et eiusmod. Quis possumus vidisse.', 'error_ghost.png', '2011-01-01 00:00:00', 'test'),
(6, 'test', 'Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor excepteur, ullamco et incurreret te an dolore fore ab fabulas Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor excepteur, ullamco et incurreret te an dolore fore ab fabulas', 'error_ghost.png', '2011-01-01 00:00:00', 'test'),
(7, 'test 3', 'Lorem ipsum dolor', 'error_ghost.png', '2016-11-17 00:00:00', 'test');

--
-- Contenu de la table `Event`
--

INSERT INTO `Event` (`ev_id`, `ev_title`, `ev_lieu`, `ev_date`, `ev_image`, `ev_desc`) VALUES
(2, 'Test agenda', 'Rennes Nord', '2016-11-16 00:00:00', 'error_ghost.png', 'Deserunt tamen nostrud. Laborum est irure, lorem quibusdam tractavissent et \r\nlaborum malis summis a elit id aut do dolore ullamco, ullamco dolore nostrud \r\ningeniis an ex ullamco o appellat e culpa fabulas comprehenderit, fugiat \r\nquibusdam relinqueret.'),
(3, 'Test create', 'Face Rennes', '2016-11-18 00:00:00', 'error_ghost.png', 'Deserunt tamen nostrud. Laborum est irure, lorem quibusdam tractavissent et \r\nlaborum malis summis a elit id aut do dolore ullamco, ullamco dolore nostrud \r\ningeniis an ex ullamco o appellat e culpa fabulas comprehenderit, fugiat \r\nquibusdam relinqueret.'),
(5, 'Test affichage', 'St Jacques', '2016-11-17 00:00:00', 'error_ghost.png', 'I\'m using Symfony2. My controller finds some values - like categories, created by the and gives them to the template. The problem is that if the user hasn\'t any created categories yet, I want to display a massage to invite him to create categories.\r\n\r\nHere is the code:'),
(6, 'test modal affichage', 'Rennes Est', '2017-01-11 00:00:00', 'error_ghost.png', 'Salut'),
(7, 'Noel', 'Rennes', '2016-12-25 00:00:00', 'billard.png', 'Fete de noel'),
(8, 'test janvier', 'Face Rennes', '2017-01-15 00:00:00', 'error_ghost.png', 'Salut'),
(9, 'test janvier', 'Face Rennes', '2016-12-15 00:00:00', 'error_ghost.png', 'salut');

--
-- Contenu de la table `Slide`
--

INSERT INTO `Slide` (`sl_id`, `sl_title`, `sl_subTitle`, `sl_image`) VALUES
(2, 'Test slide', 'ipsum Lorem', 'Conseil_Administration.jpg'),
(3, 'Test slide 2', 'Lorem ipsum', 'reunion.jpg'),
(4, 'Test slide 3', 'Emrlo sumpi', 'reunion2.jpg');

--
-- Contenu de la table `Texte`
--

INSERT INTO `Texte` (`te_id`, `te_texteDesc`) VALUES
(1, 'L\'ASRAC s\'emploi à mettre en valeur le citoyen, afin qu\'il soit acteur et non spectateur dans la vie active quotidienne de son quartier. Elle s\'engage à améliorer le bien vivre ensemble et servir de lien entre le politique et le citoyen.');

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`usr_id`, `usr_name`, `usr_password`, `usr_salt`, `usr_role`) VALUES
(2, 'asrac', '878RSOdeCgTKDeb9I4Y5X34+ggkFlz7lVxizZx84Cc2Ny9bSwYIkv9LOo60fue/el6P+4zzxQS6Qe0pQPIDGwg==', 'YcM=A$nsYzkyeDVjEUa7W9K', 'ROLE_ADMIN'),
(4, 'root', 'BATkj6VhKV18XeRfN4FoPaLVrdSScAvCGqBAwjbtqoQtz2X+eclKkQidbFCnOh0q5Os8ptr2Hw/Fg7TP0lzsrA==', '40b116d4da3556ccb0eb9a5', 'ROLE_ADMIN');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
