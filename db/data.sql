-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 10 Novembre 2016 à 11:34
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

--
-- Contenu de la table `Article`
--

INSERT INTO `Article` (`art_id`, `art_title`, `art_content`, `art_image`, `art_date`, `art_theme`) VALUES
(1, 'Hello world', 'Id quem domesticarum, o aliqua pariatur ad anim iudicem sed laboris in illum \r\n		mandaremus aut excepteur. Singulis do appellat. Aute sed ita culpa nescius non \r\n			aliquip tamen sint laboris malis, laboris magna nisi ubi malis, ullamco velit \r\n				quae id enim. Anim illustriora mentitum cillum ingeniis, singulis te excepteur o \r\n					nulla fabulas nam velit dolor, qui ab sint voluptate. Laboris quem mentitum hic \r\n						ex quorum laborum transferrem ne est anim exercitation ex multos expetendis ne \r\n						incididunt. Ut summis admodum eruditionem.', 'error_ghost.png', '2016-11-08 00:00:00', 'Test'),
(2, 'Salut toi', 'Id quem domesticarum, o aliqua pariatur ad anim iudicem sed laboris in illum mandaremus aut excepteur. Singulis do appellat. Aute sed ita culpa nescius non aliquip tamen sint laboris malis, laboris magna nisi ubi malis, ullamco velit quae id enim. Anim illustriora mentitum cillum ingeniis, singulis te excepteur o nulla fabulas nam velit dolor, qui ab sint voluptate. Laboris quem mentitum hic ex quorum laborum transferrem ne est anim exercitation ex multos expetendis ne incididunt. Ut summis admodum eruditionem.', 'error_ghost.png', '2016-11-09 00:00:00', 'test'),
(4, 'Bonjour', 'Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et \r\n	possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an \r\n		cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor \r\n		excepteur, ullamco et incurreret te an dolore fore ab fabulas. Amet arbitrantur \r\n			laboris irure consequat, nam enim aliquip. Ipsum aliquip ab singulis, incurreret \r\n				ne summis, est amet esse qui probant aut aut commodo et arbitror quo veniam \r\n					singulis qui fugiat magna, varias tempor ea senserit est an minim quamquam \r\n						concursionibus, varias de occaecat. Velit an ita ipsum aliquip ab dolore \r\n							transferrem proident culpa probant, culpa illustriora consequat labore occaecat \r\n								hic sed commodo consectetur ea litteris duis labore pariatur quem de quid \r\n								cupidatat ingeniis ad et ubi tamen enim nulla an aliquip dolor dolor et dolor. \r\n								Eu varias ubi labore, nostrud e cupidatat se quorum iudicem e consectetur de \r\n									vidisse dolore admodum, officia ubi quem, singulis quis fore arbitror illum, do \r\n										magna reprehenderit, ad dolore malis et eiusmod. Quis possumus vidisse.', 'error_ghost.png', '2011-01-01 00:00:00', 'test'),
(5, 'test', 'Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et \r\n	possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an \r\n		cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor \r\n		excepteur, ullamco et incurreret te an dolore fore ab fabulas. Amet arbitrantur \r\n			laboris irure consequat, nam enim aliquip. Ipsum aliquip ab singulis, incurreret \r\n				ne summis, est amet esse qui probant aut aut commodo et arbitror quo veniam \r\n					singulis qui fugiat magna, varias tempor ea senserit est an minim quamquam \r\n						concursionibus, varias de occaecat. Velit an ita ipsum aliquip ab dolore \r\n							transferrem proident culpa probant, culpa illustriora consequat labore occaecat \r\n								hic sed commodo consectetur ea litteris duis labore pariatur quem de quid \r\n								cupidatat ingeniis ad et ubi tamen enim nulla an aliquip dolor dolor et dolor. \r\n								Eu varias ubi labore, nostrud e cupidatat se quorum iudicem e consectetur de \r\n									vidisse dolore admodum, officia ubi quem, singulis quis fore arbitror illum, do \r\n										magna reprehenderit, ad dolore malis et eiusmod. Quis possumus vidisse.', 'error_ghost.png', '2011-01-01 00:00:00', 'test'),
(6, 'test', 'Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor excepteur, ullamco et incurreret te an dolore fore ab fabulas Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor excepteur, ullamco et incurreret te an dolore fore ab fabulas', 'error_ghost.png', '2011-01-01 00:00:00', 'test');

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`usr_id`, `usr_name`, `usr_password`, `usr_salt`, `usr_role`) VALUES
(2, 'JohnDoe', 'L2nNR5hIcinaJkKR+j4baYaZjcHS0c3WX2gjYF6Tmgl1Bs+C9Qbr+69X8eQwXDvw0vp73PrcSeT0bGEW5+T2hA==', 'YcM=A$nsYzkyeDVjEUa7W9K', 'ROLE_ADMIN');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
