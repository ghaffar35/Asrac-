-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 18 Novembre 2016 à 15:08
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
(2, 'Hello world', 'Id quem domesticarum, o aliqua pariatur ad anim iudicem sed laboris in illum mandaremus aut excepteur. Singulis do appellat. Aute sed ita culpa nescius non aliquip tamen sint laboris malis, laboris magna nisi ubi malis, ullamco velit quae id enim. Anim illustriora mentitum cillum ingeniis, singulis te excepteur o nulla fabulas nam velit dolor, qui ab sint voluptate. Laboris quem mentitum hic ex quorum laborum transferrem ne est anim exercitation ex multos expetendis ne incididunt. Ut summis admodum eruditionem.', 'agenda1.jpg', '2016-12-18 00:00:00', 'test'),
(4, 'Hello world', 'Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et \r\n	possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an \r\n		cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor \r\n		excepteur, ullamco et incurreret te an dolore fore ab fabulas. Amet arbitrantur \r\n			laboris irure consequat, nam enim aliquip. Ipsum aliquip ab singulis, incurreret \r\n				ne summis, est amet esse qui probant aut aut commodo et arbitror quo veniam \r\n					singulis qui fugiat magna, varias tempor ea senserit est an minim quamquam \r\n						concursionibus, varias de occaecat. Velit an ita ipsum aliquip ab dolore \r\n							transferrem proident culpa probant, culpa illustriora consequat labore occaecat \r\n								hic sed commodo consectetur ea litteris duis labore pariatur quem de quid \r\n								cupidatat ingeniis ad et ubi tamen enim nulla an aliquip dolor dolor et dolor. \r\n								Eu varias ubi labore, nostrud e cupidatat se quorum iudicem e consectetur de \r\n									vidisse dolore admodum, officia ubi quem, singulis quis fore arbitror illum, do \r\n										magna reprehenderit, ad dolore malis et eiusmod. Quis possumus vidisse.', 'agenda1.jpg', '2016-11-18 00:00:00', 'test'),
(5, 'Hello world', 'Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et \r\n	possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an \r\n		cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor \r\n		excepteur, ullamco et incurreret te an dolore fore ab fabulas. Amet arbitrantur \r\n			laboris irure consequat, nam enim aliquip. Ipsum aliquip ab singulis, incurreret \r\n				ne summis, est amet esse qui probant aut aut commodo et arbitror quo veniam \r\n					singulis qui fugiat magna, varias tempor ea senserit est an minim quamquam \r\n						concursionibus, varias de occaecat. Velit an ita ipsum aliquip ab dolore \r\n							transferrem proident culpa probant, culpa illustriora consequat labore occaecat \r\n								hic sed commodo consectetur ea litteris duis labore pariatur quem de quid \r\n								cupidatat ingeniis ad et ubi tamen enim nulla an aliquip dolor dolor et dolor. \r\n								Eu varias ubi labore, nostrud e cupidatat se quorum iudicem e consectetur de \r\n									vidisse dolore admodum, officia ubi quem, singulis quis fore arbitror illum, do \r\n										magna reprehenderit, ad dolore malis et eiusmod. Quis possumus vidisse.', 'agenda1.jpg', '2016-11-18 00:00:00', 'test'),
(6, 'Hello world', 'Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor excepteur, ullamco et incurreret te an dolore fore ab fabulas Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor excepteur, ullamco et incurreret te an dolore fore ab fabulas', 'agenda1.jpg', '2016-11-18 00:00:00', 'test'),
(7, 'Hello world', 'Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor excepteur, ullamco et incurreret te an dolore fore ab fabulas Te enim laborum concursionibus, cernantur ea nulla ullamco. Occaecat elit et possumus efflorescere eu est enim duis eu offendit, amet excepteur ingeniis an cupidatat iis aliquip est hic sint voluptatibus qui aliqua ex et dolor excepteur, ullamco et incurreret te an dolore fore ab fabulas', 'agenda1.jpg', '2017-01-18 00:00:00', 'test');

--
-- Contenu de la table `Event`
--

INSERT INTO `Event` (`ev_id`, `ev_title`, `ev_lieu`, `ev_date`, `ev_image`, `ev_desc`) VALUES
(2, 'Hello world', 'Rennes', '2017-01-01 00:00:00', 'agenda1.jpg', 'Deserunt tamen nostrud. Laborum est irure, lorem quibusdam tractavissent et \r\nlaborum malis summis a elit id aut do dolore ullamco, ullamco dolore nostrud \r\ningeniis an ex ullamco o appellat e culpa fabulas comprehenderit, fugiat \r\nquibusdam relinqueret.'),
(3, 'Hello world', 'Rennes', '2016-12-18 00:00:00', 'agenda1.jpg', 'Deserunt tamen nostrud. Laborum est irure, lorem quibusdam tractavissent et \r\nlaborum malis summis a elit id aut do dolore ullamco, ullamco dolore nostrud \r\ningeniis an ex ullamco o appellat e culpa fabulas comprehenderit, fugiat \r\nquibusdam relinqueret.'),
(5, 'Hello world', 'Rennes', '2016-11-22 00:00:00', 'agenda1.jpg', 'Ea a distinguantur, si probant exquisitaque, mentitum ubi quis, summis appellat \r\nan exquisitaque. Vidisse illustriora e deserunt o de aute mandaremus quibusdam \r\nid o ipsum laboris sempiternum, in e sunt tamen fore sed do se quae offendit an \r\noccaecat cillum eiusmod, nulla te pariatur, veniam de qui quae senserit. \r\nOccaecat tamen irure fabulas culpa, pariatur duis tempor, ab quamquam se aliquip.'),
(6, 'Hello world', 'Rennes', '2016-11-22 00:00:00', 'agenda1.jpg', 'Ea a distinguantur, si probant exquisitaque, mentitum ubi quis, summis appellat \r\nan exquisitaque. Vidisse illustriora e deserunt o de aute mandaremus quibusdam \r\nid o ipsum laboris sempiternum, in e sunt tamen fore sed do se quae offendit an \r\noccaecat cillum eiusmod, nulla te pariatur, veniam de qui quae senserit. \r\nOccaecat tamen irure fabulas culpa, pariatur duis tempor, ab quamquam se aliquip.'),
(7, 'Hello world', 'Rennes', '2016-11-21 00:00:00', 'agenda1.jpg', 'Ea a distinguantur, si probant exquisitaque, mentitum ubi quis, summis appellat \r\nan exquisitaque. Vidisse illustriora e deserunt o de aute mandaremus quibusdam \r\nid o ipsum laboris sempiternum, in e sunt tamen fore sed do se quae offendit an \r\noccaecat cillum eiusmod, nulla te pariatur, veniam de qui quae senserit. \r\nOccaecat tamen irure fabulas culpa, pariatur duis tempor, ab quamquam se aliquip.'),
(8, 'Hello world', 'Rennes', '2016-11-30 00:00:00', 'agenda1.jpg', 'Ea a distinguantur, si probant exquisitaque, mentitum ubi quis, summis appellat \r\nan exquisitaque. Vidisse illustriora e deserunt o de aute mandaremus quibusdam \r\nid o ipsum laboris sempiternum, in e sunt tamen fore sed do se quae offendit an \r\noccaecat cillum eiusmod, nulla te pariatur, veniam de qui quae senserit. \r\nOccaecat tamen irure fabulas culpa, pariatur duis tempor, ab quamquam se aliquip.'),
(9, 'Hello world', 'Rennes', '2016-11-20 00:00:00', 'agenda1.jpg', 'Ea a distinguantur, si probant exquisitaque, mentitum ubi quis, summis appellat \r\nan exquisitaque. Vidisse illustriora e deserunt o de aute mandaremus quibusdam \r\nid o ipsum laboris sempiternum, in e sunt tamen fore sed do se quae offendit an \r\noccaecat cillum eiusmod, nulla te pariatur, veniam de qui quae senserit. \r\nOccaecat tamen irure fabulas culpa, pariatur duis tempor, ab quamquam se aliquip.');

--
-- Contenu de la table `Slide`
--

INSERT INTO `Slide` (`sl_id`, `sl_title`, `sl_subTitle`, `sl_image`) VALUES
(2, 'Test slide', 'ipsum Lorem', 'reunion2.jpg'),
(3, 'Test slide 2', 'Lorem ipsum', 'reunion2.jpg'),
(4, 'Test slide 4', 'Emrlo sumpi', 'reunion2.jpg');

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
