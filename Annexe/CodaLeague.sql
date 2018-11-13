-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 08 Novembre 2018 à 14:41
-- Version du serveur :  5.7.22-0ubuntu0.17.10.1
-- Version de PHP :  7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `CodaLeague`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `published_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `set_online` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id_news`, `id_user`, `published_at`, `title`, `content`, `img`, `set_online`) VALUES
(41, 1, '2018-10-31 08:16:22', 'Les sangliers envahissent l\'Allemagne !', 'Dans Berlin, il y aurait entre 3 000 et 8 000 sangliers. \"Berlin est recouvert à 20% de forêt. Il y a beaucoup de parcs et d\'arbres dans la rue. Les animaux y trouvent de la nourriture et des cachettes\", déclare Milena Stillfried, de l\'institut Leibniz.', 'aide-memoire-shell.png', 1),
(49, 1, '2018-10-31 10:49:00', 'Mise en ligne du site', 'Le site coda v 0.7 est sorti il sera mis en ligne (localhost) a 13h gmt today!!', 'aide-memoire-shell.png', 1),
(50, 1, '2018-10-31 11:49:53', 'RetrouvÃ©e vivante dans le rÃ©frigÃ©rateur d\'une morgue !!!', 'Elle a Ã©tÃ© transportÃ©e a la morgue par erreur. Une femme sud-africaine a Ã©tÃ© retrouvÃ©e vivante par un employÃ© qui venait vÃ©rifier le corps, dans le rÃ©frigerateur de la morgue de Carletonville, pres de Johannesbourg, en Afrique du Sud. ', 'morgue.jpg', 1),
(52, 1, '2018-10-31 11:53:53', 'la v 0.7 est la!!', 'today sort la version 0.7 du site coda league, le site sera dispo en ligne (localhost).', 'aide-memoire-shell.png', 1),
(53, 1, '2018-10-31 11:56:42', 'les sangliers envahissent l\'allemagne!!', 'Dans Berlin, il y aurait entre 3 000 et 8 000 sangliers. \"Berlin est recouvert a 20% de forÃªt. Il y a beaucoup de parcs et d\'arbres dans la rue. Les animaux y trouvent de la nourriture et des cachettes\", dÃ©clare Milena Stillfried, de l\'institut Leibniz.', 'sanglier.jpg', 1),
(55, 1, '2018-10-31 13:15:48', 'new', 'new article', 'tÃ©lÃ©chargement.jpeg', 1),
(59, 2, '2018-11-03 02:32:41', 'test de titre d\'article', 'zqDGFQ SRE FQSD FQD FEA HRAJNDGHBHK?U TSRTQ JSHF J FDH ', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
  `id_profil` tinyint(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci,
  `pseudo_sh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `profils`
--

INSERT INTO `profils` (`id_profil`, `id_user`, `image`, `description`, `pseudo_sh`, `first_name`, `last_name`) VALUES
(1, 1, 'nicolas.jpg', 'j\'ai 18 ans et j\'ai toutes mes dents (comme florent)', 'Undefined', 'Nicolas', 'Haytayan'),
(2, 2, 'marion.jpg', 'Ideo urbs venerabilis post superbas efferatarum gentium cervices oppressas latasque leges fundamenta libertatis et retinacula sempiterna velut frugi parens et prudens et dives Caesaribus tamquam liberis suis regenda patrimonii iura permisit.', 'Dark Warion', 'Marion', 'Gely'),
(3, 3, 'florent.jpg', 'Je m\'appelle Florent, j\'ai ENCORE toutes mes dents, ET CA SE VOIT lorsque JE SUIS CONTENT !', 'Dr. Incubator', 'Florent', 'Spinelli'),
(4, 4, 'yacine.jpg', 'Je m\'appelle Yacine', 'Iron Man', 'Yacine', 'Ponsot'),
(5, 5, 'eloy.jpg', 'Je m\'appelle Eloy', 'Daredevil', 'Eloy', 'Gardenier'),
(6, 6, 'meriem.jpg', 'Description Meriem', 'Tornade', 'Meriem', 'Dahrane'),
(7, 7, 'geoffrey.jpg', 'Description Geoffrey', 'Fautes de frappe', 'Geoffrey', 'Mirgon'),
(8, 8, 'victor.jpg', 'Description Victor', 'Nagraj', 'Victor', 'Dourlot'),
(9, 9, 'jeanmax.jpg', 'Description Jean-Max', 'Accelerator', 'Jean-Max', 'Daniel'),
(10, 10, 'luca.jpg', 'Description Luca', 'Droopy', 'Luca', 'Rosso'),
(11, 11, 'mauryl.jpg', 'Je m\'appelle Mauryl ', 'Root', 'Mauryl', 'Saint-Jalmes'),
(12, 12, 'romain.jpg', 'Je suis un Romain', 'Super CC', 'Romain', 'Fuentes'),
(13, 13, 'jonathan.jpg', 'Description Jonathan', 'Dr Jonathan Osterman', 'Jonathan', 'De La Rosa'),
(14, 14, 'enzo.jpg', 'Je m\'appelle Enzo', 'Mr Robot', 'Enzo', 'Magnier'),
(15, 15, 'julien.jpg', 'Scrum Master', 'Taskmaster', 'Julien', 'Casanova'),
(16, 16, 'xavier.jpg', 'Description Xavier', 'Professeur X', 'Xavier', '');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id_projets` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `published_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(60) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `set_online` tinyint(1) NOT NULL DEFAULT '0',
  `participant` varchar(100) NOT NULL,
  `technologie` varchar(100) DEFAULT NULL,
  `lien` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `projets`
--

INSERT INTO `projets` (`id_projets`, `id_user`, `published_at`, `title`, `content`, `img`, `set_online`, `participant`, `technologie`, `lien`) VALUES
(1, 1, '2018-11-08 10:25:44', 'projet 1', 'ceci est le contenu du premier projet', 'morgue.jpg', 1, 'florent , marion , nico ', 'css html php', 'https://www.google.fr'),
(5, 1, '2018-11-08 11:55:26', 'super projet II', 'ksdjngkjnskjdgfkjds fgkjdskgjbdskg ', 'tÃ©lÃ©chargement.jpeg', 1, 'nico, flo, le pape', 'de tout comme techno', 'http://www.google.com'),
(7, 2, '2018-11-08 13:35:11', '65435132', '13213213213213213211', 'wallpaper.png', 0, '32132132132', '1321321321', '132132132132');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id_skill` int(11) NOT NULL,
  `skill_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `skills`
--

INSERT INTO `skills` (`id_skill`, `skill_name`, `icon`) VALUES
(1, 'HTML5', 'html5.svg'),
(2, 'CSS3', 'css3.svg'),
(3, 'PHP', 'php.svg'),
(4, 'Javascript', 'js.svg'),
(5, 'NodeJS', 'node.svg'),
(6, 'jQuery', 'jquery.svg'),
(7, 'Bootstrap', 'bootstrap.svg'),
(8, 'CMS', 'cms.svg'),
(9, 'Ruby', 'ruby.svg'),
(10, 'Unity', 'unity.svg'),
(11, 'C++', 'cpp.svg'),
(12, 'Python', 'python.svg'),
(13, 'Java', 'java.svg'),
(14, 'Swift', 'swift.svg'),
(15, 'Symfony', 'symfony.svg'),
(16, 'Laravel', 'laravel.svg'),
(17, 'SQL', 'sql.svg'),
(20, 'C#', 'csharp.svg');

-- --------------------------------------------------------

--
-- Structure de la table `skillvalue`
--

CREATE TABLE `skillvalue` (
  `id_skillvalue` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `skill_value` int(3) NOT NULL,
  `id_skill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `skillvalue`
--

INSERT INTO `skillvalue` (`id_skillvalue`, `id_user`, `skill_value`, `id_skill`) VALUES
(1, 3, 10, 1),
(2, 3, 4, 2),
(3, 3, 3, 3),
(4, 3, 2, 4),
(5, 3, 1, 5),
(6, 3, 0, 6),
(7, 3, 0, 7),
(8, 3, 0, 8),
(9, 3, 0, 9),
(10, 3, 0, 10),
(11, 3, 0, 11),
(12, 3, 0, 12),
(13, 3, 0, 13),
(14, 3, 0, 14),
(15, 3, 0, 15),
(16, 3, 0, 16),
(17, 3, 0, 17),
(36, 1, 90, 1),
(37, 1, 70, 2),
(38, 1, 70, 3),
(39, 1, 60, 4),
(40, 1, 0, 5),
(41, 1, 0, 6),
(42, 1, 60, 7),
(43, 1, 70, 8),
(44, 1, 0, 9),
(45, 1, 15, 10),
(46, 1, 10, 11),
(47, 1, 30, 12),
(48, 1, 0, 13),
(49, 1, 0, 14),
(50, 1, 0, 15),
(51, 1, 15, 16),
(52, 1, 40, 17),
(54, 2, 5, 1),
(55, 2, 4, 2),
(56, 2, 3, 3),
(57, 2, 2, 4),
(58, 2, 1, 5),
(59, 2, 0, 6),
(60, 2, 0, 7),
(61, 2, 0, 8),
(62, 2, 0, 9),
(63, 2, 0, 10),
(64, 2, 0, 11),
(65, 2, 0, 12),
(66, 2, 0, 13),
(67, 2, 0, 14),
(68, 2, 0, 15),
(69, 2, 0, 16),
(70, 2, 0, 17),
(72, 4, 5, 1),
(73, 4, 4, 2),
(74, 4, 3, 3),
(75, 4, 2, 4),
(76, 4, 1, 5),
(77, 4, 0, 6),
(78, 4, 0, 7),
(79, 4, 0, 8),
(80, 4, 0, 9),
(81, 4, 0, 10),
(82, 4, 0, 11),
(83, 4, 0, 12),
(84, 4, 0, 13),
(85, 4, 0, 14),
(86, 4, 0, 15),
(87, 4, 0, 16),
(88, 4, 0, 17),
(90, 5, 5, 1),
(91, 5, 4, 2),
(92, 5, 3, 3),
(93, 5, 2, 4),
(94, 5, 1, 5),
(95, 5, 0, 6),
(96, 5, 0, 7),
(97, 5, 0, 8),
(98, 5, 0, 9),
(99, 5, 0, 10),
(100, 5, 0, 11),
(101, 5, 0, 12),
(102, 5, 0, 13),
(103, 5, 0, 14),
(104, 5, 0, 15),
(105, 5, 0, 16),
(106, 5, 0, 17),
(108, 6, 5, 1),
(109, 6, 4, 2),
(110, 6, 3, 3),
(111, 6, 2, 4),
(112, 6, 1, 5),
(113, 6, 0, 6),
(114, 6, 0, 7),
(115, 6, 0, 8),
(116, 6, 0, 9),
(117, 6, 0, 10),
(118, 6, 0, 11),
(119, 6, 0, 12),
(120, 6, 0, 13),
(121, 6, 0, 14),
(122, 6, 0, 15),
(123, 6, 0, 16),
(124, 6, 0, 17),
(126, 7, 5, 1),
(127, 7, 4, 2),
(128, 7, 3, 3),
(129, 7, 2, 4),
(130, 7, 1, 5),
(131, 7, 0, 6),
(132, 7, 0, 7),
(133, 7, 0, 8),
(134, 7, 0, 9),
(135, 7, 0, 10),
(136, 7, 0, 11),
(137, 7, 0, 12),
(138, 7, 0, 13),
(139, 7, 0, 14),
(140, 7, 0, 15),
(141, 7, 0, 16),
(142, 7, 0, 17),
(144, 8, 5, 1),
(145, 8, 4, 2),
(146, 8, 3, 3),
(147, 8, 2, 4),
(148, 8, 1, 5),
(149, 8, 0, 6),
(150, 8, 0, 7),
(151, 8, 0, 8),
(152, 8, 0, 9),
(153, 8, 0, 10),
(154, 8, 0, 11),
(155, 8, 0, 12),
(156, 8, 0, 13),
(157, 8, 0, 14),
(158, 8, 0, 15),
(159, 8, 0, 16),
(160, 8, 0, 17),
(161, 9, 5, 1),
(162, 9, 4, 2),
(163, 9, 3, 3),
(164, 9, 2, 4),
(165, 9, 1, 5),
(166, 9, 0, 6),
(167, 9, 0, 7),
(168, 9, 0, 8),
(169, 9, 0, 9),
(170, 9, 0, 10),
(171, 9, 0, 11),
(172, 9, 0, 12),
(173, 9, 0, 13),
(174, 9, 0, 14),
(175, 9, 0, 15),
(176, 9, 0, 16),
(177, 9, 0, 17),
(178, 10, 5, 1),
(179, 10, 4, 2),
(180, 10, 3, 3),
(181, 10, 2, 4),
(182, 10, 1, 5),
(183, 10, 0, 6),
(184, 10, 0, 7),
(185, 10, 0, 8),
(186, 10, 0, 9),
(187, 10, 0, 10),
(188, 10, 0, 11),
(189, 10, 0, 12),
(190, 10, 0, 13),
(191, 10, 0, 14),
(192, 10, 0, 15),
(193, 10, 0, 16),
(194, 10, 0, 17),
(195, 11, 5, 1),
(196, 11, 4, 2),
(197, 11, 3, 3),
(198, 11, 2, 4),
(199, 11, 1, 5),
(200, 11, 0, 6),
(201, 11, 0, 7),
(202, 11, 0, 8),
(203, 11, 0, 9),
(204, 11, 0, 10),
(205, 11, 0, 11),
(206, 11, 0, 12),
(207, 11, 0, 13),
(208, 11, 0, 14),
(209, 11, 0, 15),
(210, 11, 0, 16),
(211, 11, 0, 17),
(212, 12, 5, 1),
(213, 12, 4, 2),
(214, 12, 3, 3),
(215, 12, 2, 4),
(216, 12, 1, 5),
(217, 12, 0, 6),
(218, 12, 0, 7),
(219, 12, 0, 8),
(220, 12, 0, 9),
(221, 12, 0, 10),
(222, 12, 0, 11),
(223, 12, 0, 12),
(224, 12, 0, 13),
(225, 12, 0, 14),
(226, 12, 0, 15),
(227, 12, 0, 16),
(228, 12, 0, 17),
(229, 13, 5, 1),
(230, 13, 4, 2),
(231, 13, 3, 3),
(232, 13, 2, 4),
(233, 13, 1, 5),
(234, 13, 0, 6),
(235, 13, 0, 7),
(236, 13, 0, 8),
(237, 13, 0, 9),
(238, 13, 0, 10),
(239, 13, 0, 11),
(240, 13, 0, 12),
(241, 13, 0, 13),
(242, 13, 0, 14),
(243, 13, 0, 15),
(244, 13, 0, 16),
(245, 13, 0, 17),
(246, 14, 5, 1),
(247, 14, 4, 2),
(248, 14, 3, 3),
(249, 14, 2, 4),
(250, 14, 1, 5),
(251, 14, 0, 6),
(252, 14, 0, 7),
(253, 14, 0, 8),
(254, 14, 0, 9),
(255, 14, 0, 10),
(256, 14, 0, 11),
(257, 14, 0, 12),
(258, 14, 0, 13),
(259, 14, 0, 14),
(260, 14, 0, 15),
(261, 14, 0, 16),
(262, 14, 0, 17),
(263, 15, 5, 1),
(264, 15, 4, 2),
(265, 15, 3, 3),
(266, 15, 2, 4),
(267, 15, 1, 5),
(268, 15, 0, 6),
(269, 15, 0, 7),
(270, 15, 0, 8),
(271, 15, 0, 9),
(272, 15, 0, 10),
(273, 15, 0, 11),
(274, 15, 0, 12),
(275, 15, 0, 13),
(276, 15, 0, 14),
(277, 15, 0, 15),
(278, 15, 0, 16),
(279, 15, 0, 17),
(280, 16, 100, 1),
(281, 16, 100, 2),
(282, 16, 100, 3),
(283, 16, 100, 4),
(284, 16, 100, 5),
(285, 16, 100, 6),
(286, 16, 100, 7),
(287, 16, 100, 8),
(288, 16, 100, 9),
(289, 16, 100, 10),
(290, 16, 100, 11),
(291, 16, 100, 12),
(292, 16, 100, 13),
(293, 16, 100, 14),
(294, 16, 100, 15),
(295, 16, 100, 16),
(296, 16, 100, 17),
(298, 2, 0, 20),
(299, 3, 0, 20),
(300, 4, 0, 20),
(301, 1, 20, 20),
(302, 5, 0, 20),
(303, 6, 0, 20),
(304, 7, 0, 20),
(305, 8, 0, 20),
(306, 9, 0, 20),
(307, 10, 0, 20),
(308, 11, 0, 20),
(309, 12, 0, 20),
(310, 13, 0, 20),
(311, 14, 0, 20),
(312, 15, 0, 20),
(313, 16, 0, 20);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `pseudo_log` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `grade` tinyint(1) DEFAULT NULL,
  `password_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reset_pass_at` datetime DEFAULT NULL,
  `reset_log_at` datetime DEFAULT NULL,
  `token_pass` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `pseudo_log`, `email`, `grade`, `password_user`, `reset_pass_at`, `reset_log_at`, `token_pass`) VALUES
(1, 'hay.nico@hotmail.fr', 'undefined@codaleague.org', 2, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', '2018-11-05 13:37:19', NULL, NULL),
(2, 'mariongely1@gmail.com', 'darkwarion@codaleague.org', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', '2018-11-05 09:58:01', NULL, '169f68ea534e93b2c250f8fb53de3975fa338bd78ae8867c106f614e6854'),
(3, 'workdesign@outlook.fr', 'drincubator@codaleague.org', 2, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', '2018-11-05 14:42:27', NULL, '72fdf43e372e3a4a0ab21ff44da3ed1163640ec61337bfe6fcb4bfabf031'),
(4, 'yaya.ponsot@gmail.com', 'ironman@codaleague.com', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', NULL, NULL, NULL),
(5, 'gardenier.eloy30@gmail.com', 'daredevil@codaleague.org', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', NULL, NULL, NULL),
(6, 'meriemdahrane@gmail.com', 'tornade@codaleague.org', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', NULL, NULL, NULL),
(7, 'geoff.mirgon@gmail.fr', 'fautesdefrappe@codaleague.org', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', NULL, NULL, NULL),
(8, 'victordourlot@gmail.com', 'nagraj@codaleague.org', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', NULL, NULL, NULL),
(9, 'jm.daniel@gmail.fr', 'accelerator@codaleague.org', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', NULL, NULL, NULL),
(10, 'luca.rosso30@gmail.com', 'droopy@codaleague.org', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', NULL, NULL, NULL),
(11, 'mauryl.saintjalmes@gmail.com', 'root@codaleague.org', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', NULL, NULL, NULL),
(12, 'romainfuentes1@gmail.com', 'supercc@codaleague.org', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', NULL, NULL, NULL),
(13, 'delarosa.jonathan@free.fr', 'drjonathanosterman@codaleague.org', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', NULL, NULL, NULL),
(14, 'enzomagnier30@gmail.com', 'mrrobot@codaleague.org', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', NULL, NULL, NULL),
(15, 'rukza@orange.fr', 'taskmaster@codaleague.org', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', NULL, NULL, NULL),
(16, 'professeurx@codaleague.org', 'professeurx@codaleague.org', 1, '$2y$10$rVctH8uRmq5BtFnizC8xDemiYPxFPm2n0hNyIsbmJM5V0gGs.Jb6m', NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `published_at` (`published_at`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id_projets`),
  ADD KEY `published_at` (`published_at`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id_skill`),
  ADD KEY `name` (`skill_name`);

--
-- Index pour la table `skillvalue`
--
ALTER TABLE `skillvalue`
  ADD PRIMARY KEY (`id_skillvalue`),
  ADD KEY `id_skill` (`id_skill`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id_profil` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id_projets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `skillvalue`
--
ALTER TABLE `skillvalue`
  MODIFY `id_skillvalue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `profils`
--
ALTER TABLE `profils`
  ADD CONSTRAINT `profils_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `projets`
--
ALTER TABLE `projets`
  ADD CONSTRAINT `projets_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `profils` (`id_user`);

--
-- Contraintes pour la table `skillvalue`
--
ALTER TABLE `skillvalue`
  ADD CONSTRAINT `skillvalue_ibfk_1` FOREIGN KEY (`id_skill`) REFERENCES `skills` (`id_skill`),
  ADD CONSTRAINT `skillvalue_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
