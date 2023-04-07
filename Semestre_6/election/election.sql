-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 04 avr. 2023 à 14:39
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `election`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `codecom` int NOT NULL AUTO_INCREMENT,
  `texte` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `pseudo` varchar(21) DEFAULT NULL,
  `num_salle` int DEFAULT NULL,
  PRIMARY KEY (`codecom`),
  KEY `pseudo` (`pseudo`),
  KEY `num_salle` (`num_salle`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`codecom`, `texte`, `date`, `heure`, `pseudo`, `num_salle`) VALUES
(1, 'sss', '2023-03-23', '17:11:02', 'flo', 2),
(2, '4555\r\n', '2023-03-23', '17:14:22', 'flo', 3),
(3, 'blablabla\r\n', '2023-03-23', '18:35:19', 'flo', 4),
(4, '', '2023-03-23', '18:35:35', 'flo', 4),
(5, 'je suis bo', '2023-03-23', '18:36:39', 'flo', 4),
(6, '566', '2023-03-23', '18:38:36', 'flo', 4),
(7, 'nul', '2023-03-23', '18:38:56', 'flo', 4),
(8, 'zaeazeaz', '2023-03-23', '19:24:05', 'flo', 4),
(9, 'aezeaze', '2023-03-23', '19:24:11', 'flo', 4),
(10, 'azeazeazeaz', '2023-03-23', '19:24:12', 'flo', 4),
(11, 'qsdqsdqsdqs', '2023-03-23', '19:24:14', 'flo', 4),
(12, 'qsdqsdqsdqs', '2023-03-23', '19:24:15', 'flo', 4),
(13, 'qsdqsdqsdqs', '2023-03-23', '19:24:17', 'flo', 4),
(14, 'qsdqsdqsdqsd', '2023-03-23', '19:24:19', 'flo', 4),
(15, 'qsdqsdqsd', '2023-03-23', '19:24:21', 'flo', 4),
(16, '899', '2023-03-23', '19:31:35', 'flo', 5),
(17, 'sdqdsdqsd', '2023-03-23', '19:46:08', 'flo', 6),
(18, 'ze21az42e2z1e12az1e12az2e2a1e', '2023-03-23', '19:57:13', 'flo', 7),
(19, 'azeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeaze', '2023-03-23', '19:57:29', 'flo', 8),
(20, 'azeaz', '2023-03-23', '20:32:22', 'flo', NULL),
(21, '56656', '2023-03-23', '20:33:26', 'flo', NULL),
(22, '5656', '2023-03-23', '20:34:20', 'flo', NULL),
(23, '6565', '2023-03-23', '20:34:41', 'flo', NULL),
(24, '12345656\r\n', '2023-03-23', '20:36:38', 'flo', NULL),
(25, '12345656\r\n', '2023-03-23', '20:37:03', 'flo', NULL),
(26, 'aeazeazeaze', '2023-03-23', '20:37:08', 'flo', NULL),
(27, '', '2023-03-23', '20:39:13', 'flo', NULL),
(28, '', '2023-03-23', '20:39:20', 'flo', NULL),
(29, '', '2023-03-23', '20:39:45', 'flo', NULL),
(30, '', '2023-03-23', '20:39:49', 'flo', NULL),
(31, 'aez', '2023-03-23', '20:39:54', 'flo', NULL),
(32, '', '2023-03-23', '20:41:42', 'flo', NULL),
(33, '21121', '2023-03-23', '20:42:00', 'flo', NULL),
(34, '454', '2023-03-23', '20:44:04', 'flo', NULL),
(35, '15611515', '2023-03-23', '20:45:14', 'flo', 10),
(36, '', '2023-03-23', '20:45:24', 'flo', NULL),
(37, '15611515', '2023-03-23', '20:45:26', 'flo', 11),
(38, '15611515', '2023-03-23', '20:45:41', 'flo', 12),
(39, 'erqsrsdfs', '2023-03-23', '20:45:54', 'flo', 13),
(40, '', '2023-03-23', '20:49:44', 'flo', NULL),
(41, '1545', '2023-03-23', '20:49:51', 'flo', NULL),
(42, '152525', '2023-03-23', '20:53:23', 'flo', 4),
(43, '152525', '2023-03-23', '20:53:35', 'flo', 4),
(44, '', '2023-03-23', '20:53:39', 'flo', 2),
(45, '2322', '2023-03-23', '20:53:44', 'flo', 2),
(46, 'Zzae', '2023-03-23', '20:54:39', 'flo', 2),
(47, 'zeaze', '2023-03-23', '20:54:41', 'flo', 2),
(48, 'azeaze', '2023-03-23', '20:54:42', 'flo', 2),
(49, 'zaeaze', '2023-03-23', '20:54:43', 'flo', 2),
(50, 'aze', '2023-03-23', '20:56:27', 'flo', 2),
(51, 'aezaeaze', '2023-03-23', '20:57:01', 'flo', 3),
(52, 'aezaeaze', '2023-03-23', '20:57:08', 'flo', 3),
(53, 'azeaze', '2023-03-23', '20:57:09', 'flo', 3),
(54, 'azeaze', '2023-03-23', '20:57:10', 'flo', 3),
(55, 'azeaze', '2023-03-23', '20:57:36', 'flo', 14),
(56, 'azeaz', '2023-03-23', '20:57:37', 'flo', 14),
(57, 'aezae', '2023-03-23', '20:57:39', 'flo', 14),
(58, '', '2023-03-23', '20:57:40', 'flo', 14),
(59, '', '2023-03-23', '20:57:41', 'flo', 14),
(60, 'ad', '2023-03-23', '20:58:12', 'flo', 1),
(61, 'azeaz', '2023-03-23', '20:58:15', 'flo', 5),
(62, 'zd', '2023-03-23', '20:59:59', 'flo', 1),
(63, 'azeaz', '2023-03-23', '21:00:00', 'flo', 1),
(64, 'azeaz', '2023-03-23', '21:17:55', 'flo', 2),
(65, 'azeaze', '2023-03-23', '21:17:59', 'flo', 15),
(66, 'aze', '2023-03-23', '21:18:02', 'flo', 15),
(67, 'aeaze', '2023-03-23', '21:18:08', 'flo', 16),
(68, 'aeazeaz', '2023-03-23', '22:21:57', 'test', 5),
(69, 'eazeaze', '2023-03-23', '22:21:59', 'test', 5),
(70, 'aeze', '2023-03-23', '22:22:58', 'test', 8),
(71, 'aezaze', '2023-03-23', '22:26:03', 'test', 9),
(72, 'aze', '2023-03-23', '22:26:05', 'test', 9),
(73, 'aze', '2023-03-23', '22:26:17', 'flo', 5),
(74, 'yjhgjjk\r\n', '2023-03-28', '16:50:21', 'flo', 5),
(75, '45456546', '2023-03-28', '16:50:46', 'flo', 5),
(76, '454645', '2023-03-28', '16:50:58', 'flo', 5),
(77, '45545', '2023-03-28', '16:51:06', 'flo', 17),
(78, '64545656', '2023-03-28', '16:51:08', 'flo', 17),
(79, 'com', '2023-03-29', '07:48:43', 'flo', 18),
(80, 'post2\r\n', '2023-03-29', '07:48:57', 'flo', 18),
(81, 'zaezae', '2023-03-29', '07:48:59', 'flo', 18),
(82, 'aeaze', '2023-03-29', '11:01:17', NULL, 3),
(83, 'azeaze', '2023-03-29', '11:01:19', NULL, 3),
(84, 'aeez', '2023-03-29', '11:41:01', NULL, 1),
(85, '&é\"', '2023-03-29', '11:47:08', NULL, 2),
(86, '&é\"&é\"', '2023-03-29', '11:47:12', NULL, 2),
(87, 'azeza', '2023-03-29', '11:47:45', NULL, 1),
(88, 'z', '2023-03-29', '11:47:58', NULL, 7),
(89, 'ze', '2023-03-29', '11:56:15', 'flo', 2),
(90, 'ze', '2023-03-29', '11:56:16', 'flo', 2);

-- --------------------------------------------------------

--
-- Structure de la table `correspondre`
--

DROP TABLE IF EXISTS `correspondre`;
CREATE TABLE IF NOT EXISTS `correspondre` (
  `codedep` varchar(2) NOT NULL,
  `codeelec` varchar(2) NOT NULL,
  PRIMARY KEY (`codedep`,`codeelec`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `correspondre`
--

INSERT INTO `correspondre` (`codedep`, `codeelec`) VALUES
('01', '01'),
('02', '02'),
('03', '03'),
('04', '04'),
('05', '05'),
('06', '06'),
('07', '07'),
('08', '08'),
('09', '09'),
('10', '10'),
('11', '11'),
('12', '12'),
('13', '13'),
('14', '14'),
('15', '15'),
('16', '16'),
('17', '17'),
('18', '18'),
('19', '19'),
('21', '21'),
('22', '22'),
('23', '23'),
('24', '24'),
('25', '25'),
('26', '26'),
('27', '27'),
('28', '28'),
('29', '29'),
('2A', '2A'),
('2B', '2B'),
('30', '30'),
('31', '31'),
('32', '32'),
('33', '33'),
('34', '34'),
('35', '35'),
('36', '36'),
('37', '37'),
('38', '38'),
('39', '39'),
('40', '40'),
('41', '41'),
('42', '42'),
('43', '43'),
('44', '44'),
('45', '45'),
('46', '46'),
('47', '47'),
('48', '48'),
('49', '49'),
('50', '50'),
('51', '51'),
('52', '52'),
('53', '53'),
('54', '54'),
('55', '55'),
('56', '56'),
('57', '57'),
('58', '58'),
('59', '59'),
('60', '60'),
('61', '61'),
('62', '62'),
('63', '63'),
('64', '64'),
('65', '65'),
('66', '66'),
('67', '67'),
('68', '68'),
('69', '69'),
('70', '70'),
('71', '71'),
('72', '72'),
('73', '73'),
('74', '74'),
('75', '75'),
('76', '76'),
('77', '77'),
('78', '78'),
('79', '79'),
('80', '80'),
('81', '81'),
('82', '82'),
('83', '83'),
('84', '84'),
('85', '85'),
('86', '86'),
('87', '87'),
('88', '88'),
('89', '89'),
('90', '90'),
('91', '91'),
('92', '92'),
('93', '93'),
('94', '94'),
('95', '95'),
('ZA', 'ZA'),
('ZB', 'ZB'),
('ZC', 'ZC'),
('ZD', 'ZD'),
('ZM', 'ZM');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `codedep` varchar(2) NOT NULL,
  `nom` varchar(23) DEFAULT NULL,
  `region` varchar(26) DEFAULT NULL,
  `chef_lieu` varchar(20) DEFAULT NULL,
  `superficie` int DEFAULT NULL,
  `Population` int DEFAULT NULL,
  PRIMARY KEY (`codedep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`codedep`, `nom`, `region`, `chef_lieu`, `superficie`, `Population`) VALUES
('01', 'Ain', 'Auvergne-Rhône-Alpes', 'Bourg-en-Bresse', 5762, 649654),
('02', 'Aisne', 'Hauts-de-France', 'Laon', 7369, 534286),
('03', 'Allier', 'Auvergne-Rhône-Alpes', 'Moulins', 7340, 338978),
('04', 'Alpes-de-Haute-Provence', 'Provence-Alpes-Côte d\'Azur', 'Digne', 6925, 161664),
('05', 'Hautes-Alpes', 'Provence-Alpes-Côte d\'Azur', 'Gap', 5549, 141576),
('06', 'Alpes-Maritimes', 'Provence-Alpes-Côte d\'Azur', 'Nice', 4299, 1080614),
('07', 'Ardèche', 'Auvergne-Rhône-Alpes', 'Privas', 5529, 328557),
('08', 'Ardennes', 'Grand Est', 'Charleville-Mézières', 5229, 271339),
('09', 'Ariège', 'Occitanie', 'Foix', 4890, 152321),
('10', 'Aube', 'Grand Est', 'Troyes', 6004, 311623),
('11', 'Aude', 'Occitanie', 'Carcassonne', 6139, 370245),
('12', 'Aveyron', 'Occitanie', 'Rodez', 8735, 281082),
('13', 'Bouches-du-Rhône', 'Provence-Alpes-Côte d\'Azur', 'Marseille', 5088, 2043941),
('14', 'Calvados', 'Normandie', 'Caen', 5548, 695818),
('15', 'Cantal', 'Auvergne-Rhône-Alpes', 'Aurillac', 5726, 144240),
('16', 'Charente', 'Nouvelle-Aquitaine', 'Angoulême', 5956, 351971),
('17', 'Charente-Maritime', 'Nouvelle-Aquitaine', 'La Rochelle', 6864, 648183),
('18', 'Cher', 'Centre-Val de Loire', 'Bourges', 7235, 304794),
('19', 'Corrèze', 'Nouvelle-Aquitaine', 'Tulle', 5857, 241891),
('21', 'Côte-d\'Or', 'Bourgogne-Franche-Comté', 'Dijon', 8763, 536837),
('22', 'Côtes d\'Armor', 'Bretagne', 'Saint-Brieuc', 6878, 598715),
('23', 'Creuse', 'Nouvelle-Aquitaine', 'Guéret', 5565, 118711),
('24', 'Dordogne', 'Nouvelle-Aquitaine', 'Périgueux', 9060, 412629),
('25', 'Doubs', 'Bourgogne-Franche-Comté', 'Besançon', 5233, 540890),
('26', 'Drôme', 'Auvergne-Rhône-Alpes', 'Valence', 6530, 516172),
('27', 'Eure', 'Normandie', 'Évreux', 6040, 610152),
('28', 'Eure-et-Loir', 'Centre-Val de Loire', 'Chartres', 5880, 433983),
('29', 'Finistère', 'Bretagne', 'Quimper', 6733, 910502),
('2A', 'Corse-du-Sud', 'Corse', 'Ajaccio', 4014, 159894),
('2B', 'Haute-Corse', 'Corse', 'Bastia', 4666, 177902),
('30', 'Gard', 'Occitanie', 'Nîmes', 5853, 748236),
('31', 'Haute-Garonne', 'Occitanie', 'Toulouse', 6309, 1388393),
('32', 'Gers', 'Occitanie', 'Auch', 6257, 191332),
('33', 'Gironde', 'Nouvelle-Aquitaine', 'Bordeaux', 9976, 1610829),
('34', 'Hérault', 'Occitanie', 'Montpellier', 6101, 1160043),
('35', 'Ille-et-Vilaine', 'Bretagne', 'Rennes', 6775, 1073883),
('36', 'Indre', 'Centre-Val de Loire', 'Châteauroux', 6791, 218508),
('37', 'Indre-et-Loire', 'Centre-Val de Loire', 'Tours', 6127, 611139),
('38', 'Isère', 'Auvergne-Rhône-Alpes', 'Grenoble', 7432, 1272816),
('39', 'Jura', 'Bourgogne-Franche-Comté', 'Lons-le-Saunier', 4999, 259393),
('40', 'Landes', 'Nouvelle-Aquitaine', 'Mont-de-Marsan', 9243, 411757),
('41', 'Loir-et-Cher', 'Centre-Val de Loire', 'Blois', 6343, 332601),
('42', 'Loire', 'Auvergne-Rhône-Alpes', 'Saint-Étienne', 4781, 762495),
('43', 'Haute-Loire', 'Auvergne-Rhône-Alpes', 'Le Puy-en-Velay', 4977, 227444),
('44', 'Loire-Atlantique', 'Pays de la Loire', 'Nantes', 6809, 1413341),
('45', 'Loiret', 'Centre-Val de Loire', 'Orléans', 6775, 681497),
('46', 'Lot', 'Occitanie', 'Cahors', 5217, 171463),
('47', 'Lot-et-Garonne', 'Nouvelle-Aquitaine', 'Agen', 5361, 333230),
('48', 'Lozère', 'Occitanie', 'Mende', 5167, 75463),
('49', 'Maine-et-Loire', 'Pays de la Loire', 'Angers', 7172, 820655),
('50', 'Manche', 'Normandie', 'Saint-Lô', 5938, 496972),
('51', 'Marne', 'Grand Est', 'Châlons-en-Champagne', 8162, 573253),
('52', 'Haute-Marne', 'Grand Est', 'Chaumont', 6211, 175102),
('53', 'Mayenne', 'Pays de la Loire', 'Laval', 5175, 306323),
('54', 'Meurthe-et-Moselle', 'Grand Est', 'Nancy', 5246, 733085),
('55', 'Meuse', 'Grand Est', 'Bar-le-Duc', 6211, 187372),
('56', 'Morbihan', 'Bretagne', 'Vannes', 6823, 753543),
('57', 'Moselle', 'Grand Est', 'Metz', 6216, 1038558),
('58', 'Nièvre', 'Bourgogne-Franche-Comté', 'Nevers', 6817, 205942),
('59', 'Nord', 'Hauts-de-France', 'Lille', 5743, 2613874),
('60', 'Oise', 'Hauts-de-France', 'Beauvais', 5860, 829839),
('61', 'Orne', 'Normandie', 'Alençon', 6103, 282516),
('62', 'Pas-de-Calais', 'Hauts-de-France', 'Arras', 6671, 1475142),
('63', 'Puy-de-Dôme', 'Auvergne-Rhône-Alpes', 'Clermont-Ferrand', 7970, 655185),
('64', 'Pyrénées-Atlantiques', 'Nouvelle-Aquitaine', 'Pau', 7645, 677189),
('65', 'Hautes-Pyrénées', 'Occitanie', 'Tarbes', 4464, 227492),
('66', 'Pyrénées-Orientales', 'Occitanie', 'Perpignan', 4116, 482131),
('67', 'Bas-Rhin', 'Grand Est', 'Strasbourg', 4755, 1125279),
('68', 'Haut-Rhin', 'Grand Est', 'Colmar', 3525, 767606),
('69', 'Rhône', 'Auvergne-Rhône-Alpes', 'Lyon', 3249, 1878095),
('70', 'Haute-Saône', 'Bourgogne-Franche-Comté', 'Vesoul', 5360, 234316),
('71', 'Saône-et-Loire', 'Bourgogne-Franche-Comté', 'Mâcon', 8575, 553129),
('72', 'Sarthe', 'Pays de la Loire', 'Le Mans', 6206, 566901),
('73', 'Savoie', 'Auvergne-Rhône-Alpes', 'Chambéry', 6028, 433755),
('74', 'Haute-Savoie', 'Auvergne-Rhône-Alpes', 'Annecy', 4388, 829668),
('75', 'Paris', 'Ile-de-France', 'Paris', 105, 2168462),
('76', 'Seine-Maritime', 'Normandie', 'Rouen', 6278, 1257009),
('77', 'Seine-et-Marne', 'Ile-de-France', 'Melun', 5915, 1422736),
('78', 'Yvelines', 'Ile-de-France', 'Versailles', 2284, 1438440),
('79', 'Deux-Sèvres', 'Nouvelle-Aquitaine', 'Niort', 5999, 375652),
('80', 'Somme', 'Hauts-de-France', 'Amiens', 6170, 570195),
('81', 'Tarn', 'Occitanie', 'Albi', 5758, 392407),
('82', 'Tarn-et-Garonne', 'Occitanie', 'Montauban', 3718, 262582),
('83', 'Var', 'Provence-Alpes-Côte d\'Azur', 'Toulon', 5973, 1071832),
('84', 'Vaucluse', 'Provence-Alpes-Côte d\'Azur', 'Avignon', 3567, 566096),
('85', 'Vandée', 'Pays de la Loire', 'La Roche-sur-Yon', 6720, 680191),
('86', 'Vienne', 'Nouvelle-Aquitaine', 'Poitiers', 6990, 438136),
('87', 'Haute-Vienne', 'Nouvelle-Aquitaine', 'Limoges', 5520, 374158),
('88', 'Vosges', 'Grand Est', 'Épinal', 5874, 364873),
('89', 'Yonne', 'Bourgogne-Franche-Comté', 'Auxerre', 7427, 338303),
('90', 'Territoire de Belfort', 'Bourgogne-Franche-Comté', 'Belfort', 609, 144479),
('91', 'Essonne', 'Ile-de-France', 'Évry', 1804, 1313729),
('92', 'Hauts-de-Seine', 'Ile-de-France', 'Nanterre', 176, 1612788),
('93', 'Seine-St-Denis', 'Ile-de-France', 'Bobigny', 236, 1646105),
('94', 'Val-de-Marne', 'Ile-de-France', 'Créteil', 245, 1401228),
('95', 'Val-D\'Oise', 'Ile-de-France', 'Pontoise', 1246, 1242746),
('ZA', 'Guadeloupe', 'Guadeloupe', 'Basse-Terre', 1628, 390704),
('ZB', 'Martinique', 'Martinique', 'Fort-de-France', 1128, 371246),
('ZC', 'Guyane', 'Guyane', 'Cayenne', 83534, 281612),
('ZD', 'La Réunion', 'La Réunion', 'Saint-Denis', 2504, 865826),
('ZM', 'Mayotte', 'Mayotte', 'Dzaoudzi', 376, 259154);

-- --------------------------------------------------------

--
-- Structure de la table `deposer`
--

DROP TABLE IF EXISTS `deposer`;
CREATE TABLE IF NOT EXISTS `deposer` (
  `pseudo` varchar(25) NOT NULL,
  `numsalle` int NOT NULL,
  PRIMARY KEY (`pseudo`,`numsalle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `election`
--

DROP TABLE IF EXISTS `election`;
CREATE TABLE IF NOT EXISTS `election` (
  `codeelec` varchar(2) NOT NULL,
  `Inscrits` int DEFAULT NULL,
  `Abstentions` int DEFAULT NULL,
  `%Abs` decimal(4,2) DEFAULT NULL,
  `Votants` int DEFAULT NULL,
  `%Vot` decimal(4,2) DEFAULT NULL,
  `Blancs` int DEFAULT NULL,
  `%Blancs` decimal(3,2) DEFAULT NULL,
  `Nuls` int DEFAULT NULL,
  `%Nuls` decimal(3,2) DEFAULT NULL,
  `VoixMacron` int DEFAULT NULL,
  `TauxVoixMacron` decimal(4,2) DEFAULT NULL,
  `VoixLePen` int DEFAULT NULL,
  `TauxVoixLePen` decimal(4,2) DEFAULT NULL,
  PRIMARY KEY (`codeelec`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `election`
--

INSERT INTO `election` (`codeelec`, `Inscrits`, `Abstentions`, `%Abs`, `Votants`, `%Vot`, `Blancs`, `%Blancs`, `Nuls`, `%Nuls`, `VoixMacron`, `TauxVoixMacron`, `VoixLePen`, `TauxVoixLePen`) VALUES
('01', 438250, 109568, '25.00', 328682, '75.00', 19802, '4.52', 5875, '1.34', 166635, '54.99', 136370, '45.01'),
('02', 373621, 97965, '26.22', 275656, '73.78', 14465, '3.87', 5694, '1.52', 102428, '40.09', 153069, '59.91'),
('03', 249954, 62311, '24.93', 187643, '75.07', 13866, '5.55', 6370, '2.55', 87645, '52.35', 79762, '47.65'),
('04', 128077, 31907, '24.91', 96170, '75.09', 7773, '6.07', 2599, '2.03', 41659, '48.55', 44139, '51.45'),
('05', 113540, 27296, '24.04', 86244, '75.96', 7377, '6.50', 2208, '1.94', 42213, '55.07', 34446, '44.93'),
('06', 778703, 217148, '27.89', 561555, '72.11', 30567, '3.93', 8370, '1.07', 261989, '50.13', 260629, '49.87'),
('07', 255891, 62124, '24.28', 193767, '75.72', 15843, '6.19', 6166, '2.41', 90053, '52.43', 81705, '47.57'),
('08', 186220, 48099, '25.83', 138121, '74.17', 7808, '4.19', 3180, '1.71', 55093, '43.33', 72040, '56.67'),
('09', 119047, 29751, '24.99', 89296, '75.01', 8637, '7.26', 3745, '3.15', 39298, '51.09', 37616, '48.91'),
('10', 205599, 51298, '24.95', 154301, '75.05', 8710, '4.24', 3126, '1.52', 68840, '48.32', 73625, '51.68'),
('11', 279959, 68610, '24.51', 211349, '75.49', 15224, '5.44', 6622, '2.37', 85465, '45.10', 104038, '54.90'),
('12', 219480, 49491, '22.55', 169989, '77.45', 13943, '6.35', 6301, '2.87', 89955, '60.07', 59790, '39.93'),
('13', 1411580, 410707, '29.10', 1000873, '70.90', 57930, '4.10', 19055, '1.35', 481129, '52.08', 442759, '47.92'),
('14', 512204, 116324, '22.71', 395880, '77.29', 23849, '4.66', 9492, '1.85', 218579, '60.29', 143960, '39.71'),
('15', 115741, 25815, '22.30', 89926, '77.70', 6739, '5.82', 2911, '2.52', 45015, '56.08', 35261, '43.92'),
('16', 257508, 64403, '25.01', 193105, '74.99', 13410, '5.21', 5952, '2.31', 95656, '55.06', 78087, '44.94'),
('17', 518929, 126022, '24.29', 392907, '75.71', 26323, '5.07', 9405, '1.81', 201159, '56.32', 156020, '43.68'),
('18', 224457, 60255, '26.84', 164202, '73.16', 12510, '5.57', 3793, '1.69', 77739, '52.56', 70160, '47.44'),
('19', 185031, 42851, '23.16', 142180, '76.84', 12700, '6.86', 7077, '3.82', 68272, '55.78', 54131, '44.22'),
('21', 366828, 89553, '24.41', 277275, '75.59', 19232, '5.24', 5632, '1.54', 144545, '57.27', 107866, '42.73'),
('22', 471760, 100204, '21.24', 371556, '78.76', 26972, '5.72', 11174, '2.37', 209721, '62.90', 123689, '37.10'),
('23', 90958, 23479, '25.81', 67479, '74.19', 5915, '6.50', 2857, '3.14', 30554, '52.04', 28153, '47.96'),
('24', 318129, 72606, '22.82', 245523, '77.18', 18941, '5.95', 10713, '3.37', 111182, '51.50', 104687, '48.50'),
('25', 368437, 95455, '25.91', 272982, '74.09', 18190, '4.94', 6527, '1.77', 141917, '57.16', 106348, '42.84'),
('26', 382280, 96584, '25.27', 285696, '74.73', 21116, '5.52', 6666, '1.74', 143697, '55.72', 114217, '44.28'),
('27', 432273, 104821, '24.25', 327452, '75.75', 19537, '4.52', 6078, '1.41', 146751, '48.62', 155086, '51.38'),
('28', 304007, 79606, '26.19', 224401, '73.81', 13661, '4.49', 4811, '1.58', 109744, '53.29', 96185, '46.71'),
('29', 709818, 161974, '22.82', 547844, '77.18', 42852, '6.04', 12523, '1.76', 332396, '67.50', 160073, '32.50'),
('2A', 113904, 44739, '39.28', 69165, '60.72', 4154, '3.65', 2283, '2.00', 26144, '41.68', 36584, '58.32'),
('2B', 129096, 50359, '39.01', 78737, '60.99', 5380, '4.17', 2269, '1.76', 29951, '42.13', 41137, '57.87'),
('30', 555277, 146848, '26.45', 408429, '73.55', 27684, '4.99', 9410, '1.69', 177669, '47.85', 193666, '52.15'),
('31', 930579, 223557, '24.02', 707022, '75.98', 51784, '5.56', 19366, '2.08', 409622, '64.42', 226250, '35.58'),
('32', 147268, 30993, '21.05', 116275, '78.95', 9512, '6.46', 7016, '4.76', 55559, '55.70', 44188, '44.30'),
('33', 1158551, 288844, '24.93', 869707, '75.07', 59890, '5.17', 19934, '1.72', 484771, '61.37', 305112, '38.63'),
('34', 847479, 225798, '26.64', 621681, '73.36', 41829, '4.94', 14878, '1.76', 297066, '52.58', 267908, '47.42'),
('35', 771870, 169031, '21.90', 602839, '78.10', 39489, '5.12', 13090, '1.70', 390330, '70.94', 159930, '29.06'),
('36', 166057, 41208, '24.82', 124849, '75.18', 8768, '5.28', 4094, '2.47', 57558, '51.40', 54429, '48.60'),
('37', 440750, 108984, '24.73', 331766, '75.27', 22088, '5.01', 9238, '2.10', 188421, '62.72', 112019, '37.28'),
('38', 885672, 229398, '25.90', 656274, '74.10', 43467, '4.91', 11627, '1.31', 359596, '59.82', 241584, '40.18'),
('39', 190644, 45869, '24.06', 144775, '75.94', 11194, '5.87', 3851, '2.02', 68846, '53.07', 60884, '46.93'),
('40', 329376, 73120, '22.20', 256256, '77.80', 20685, '6.28', 8526, '2.59', 128363, '56.54', 98682, '43.46'),
('41', 244640, 58413, '23.88', 186227, '76.12', 11919, '4.87', 4514, '1.85', 91360, '53.81', 78434, '46.19'),
('42', 513962, 136870, '26.63', 377092, '73.37', 25417, '4.95', 7622, '1.48', 194879, '56.64', 149174, '43.36'),
('43', 180716, 41139, '22.76', 139577, '77.24', 10937, '6.05', 4288, '2.37', 62372, '50.16', 61980, '49.84'),
('44', 1057081, 255271, '24.15', 801810, '75.85', 57816, '5.47', 16881, '1.60', 505179, '69.48', 221934, '30.52'),
('45', 457763, 115792, '25.30', 341971, '74.70', 20725, '4.53', 7033, '1.54', 180882, '57.57', 133331, '42.43'),
('46', 139238, 31406, '22.56', 107832, '77.44', 10040, '7.21', 4630, '3.33', 55130, '59.18', 38032, '40.82'),
('47', 241312, 58106, '24.08', 183206, '75.92', 12858, '5.33', 6716, '2.78', 81013, '49.51', 82619, '50.49'),
('48', 59801, 13099, '21.90', 46702, '78.10', 4072, '6.81', 1916, '3.20', 22067, '54.20', 18647, '45.80'),
('49', 589468, 138502, '23.50', 450966, '76.50', 28550, '4.84', 9342, '1.58', 274813, '66.53', 138261, '33.47'),
('50', 384662, 91046, '23.67', 293616, '76.33', 19057, '4.95', 6450, '1.68', 159815, '59.61', 108294, '40.39'),
('51', 380766, 99374, '26.10', 281392, '73.90', 14921, '3.92', 5400, '1.42', 136025, '52.10', 125046, '47.90'),
('52', 129397, 32607, '25.20', 96790, '74.80', 5509, '4.26', 2465, '1.90', 38230, '43.04', 50586, '56.96'),
('53', 224819, 51035, '22.70', 173784, '77.30', 10441, '4.64', 4074, '1.81', 102263, '64.21', 57006, '35.79'),
('54', 492287, 133308, '27.08', 358979, '72.92', 22316, '4.53', 7249, '1.47', 179237, '54.41', 150177, '45.59'),
('55', 134802, 32475, '24.09', 102327, '75.91', 5618, '4.17', 2280, '1.69', 41930, '44.40', 52499, '55.60'),
('56', 609316, 135060, '22.17', 474256, '77.83', 33469, '5.49', 11315, '1.86', 269755, '62.81', 159717, '37.19'),
('57', 746147, 212882, '28.53', 533265, '71.47', 30064, '4.03', 8652, '1.16', 249556, '50.46', 244993, '49.54'),
('58', 154239, 41089, '26.64', 113150, '73.36', 8140, '5.28', 3675, '2.38', 50556, '49.89', 50779, '50.11'),
('59', 1814746, 521129, '28.72', 1293617, '71.28', 67296, '3.71', 27134, '1.50', 633569, '52.83', 565618, '47.17'),
('60', 564184, 145130, '25.72', 419054, '74.28', 23912, '4.24', 8485, '1.50', 182791, '47.27', 203866, '52.73'),
('61', 205553, 48758, '23.72', 156795, '76.28', 9537, '4.64', 3432, '1.67', 79275, '55.12', 64551, '44.88'),
('62', 1093839, 273743, '25.03', 820096, '74.97', 38116, '3.48', 20499, '1.87', 323661, '42.50', 437820, '57.50'),
('63', 468144, 116492, '24.88', 351652, '75.12', 27807, '5.94', 10552, '2.25', 188468, '60.16', 124825, '39.84'),
('64', 519954, 124853, '24.01', 395101, '75.99', 34369, '6.61', 12271, '2.36', 219719, '63.05', 128742, '36.95'),
('65', 177443, 43422, '24.47', 134021, '75.53', 11892, '6.70', 4862, '2.74', 65085, '55.50', 52182, '44.50'),
('66', 362124, 94558, '26.11', 267566, '73.89', 16986, '4.69', 8077, '2.23', 105893, '43.67', 136610, '56.33'),
('67', 778994, 197584, '25.36', 581410, '74.64', 29061, '3.73', 11021, '1.41', 319370, '59.00', 221958, '41.00'),
('68', 531918, 141261, '26.56', 390657, '73.44', 22170, '4.17', 5892, '1.11', 191814, '52.90', 170781, '47.10'),
('69', 1181791, 315207, '26.67', 866584, '73.33', 49484, '4.19', 15038, '1.27', 550592, '68.65', 251470, '31.35'),
('70', 177724, 40527, '22.80', 137197, '77.20', 8287, '4.66', 5760, '3.24', 53098, '43.12', 70052, '56.88'),
('71', 402996, 102315, '25.39', 300681, '74.61', 21338, '5.29', 7493, '1.86', 144990, '53.33', 126860, '46.67'),
('72', 411271, 103599, '25.19', 307672, '74.81', 22334, '5.43', 5771, '1.40', 154909, '55.41', 124658, '44.59'),
('73', 320730, 79968, '24.93', 240762, '75.07', 17202, '5.36', 5547, '1.73', 125676, '57.65', 92337, '42.35'),
('74', 565833, 147179, '26.01', 418654, '73.99', 26203, '4.63', 8655, '1.53', 236764, '61.69', 147032, '38.31'),
('75', 1368623, 354494, '25.90', 1014129, '74.10', 49446, '3.61', 15171, '1.11', 808107, '85.11', 141405, '14.89'),
('76', 879653, 222738, '25.32', 656915, '74.68', 44668, '5.08', 11402, '1.30', 332146, '55.28', 268699, '44.72'),
('77', 899809, 266519, '29.62', 633290, '70.38', 42755, '4.75', 13520, '1.50', 328698, '56.97', 248317, '43.03'),
('78', 961628, 254934, '26.51', 706694, '73.49', 40934, '4.26', 11372, '1.18', 464913, '71.05', 189475, '28.95'),
('79', 273265, 64482, '23.60', 208783, '76.40', 13741, '5.03', 5437, '1.99', 117804, '62.13', 71801, '37.87'),
('80', 409946, 98487, '24.02', 311459, '75.98', 16982, '4.14', 7177, '1.75', 140763, '49.00', 146537, '51.00'),
('81', 298180, 71489, '23.98', 226691, '76.02', 17176, '5.76', 8306, '2.79', 106768, '53.06', 94441, '46.94'),
('82', 188728, 43807, '23.21', 144921, '76.79', 10196, '5.40', 4452, '2.36', 62503, '47.98', 67770, '52.02'),
('83', 821141, 214221, '26.09', 606920, '73.91', 33343, '4.06', 10720, '1.31', 252720, '44.90', 310137, '55.10'),
('84', 411727, 106789, '25.94', 304938, '74.06', 18445, '4.48', 6310, '1.53', 134476, '48.00', 145707, '52.00'),
('85', 551209, 120713, '21.90', 430496, '78.10', 25046, '4.54', 10184, '1.85', 244494, '61.86', 150772, '38.14'),
('86', 306076, 76152, '24.88', 229924, '75.12', 15629, '5.11', 6133, '2.00', 125138, '60.12', 83024, '39.88'),
('87', 263777, 64447, '24.43', 199330, '75.57', 15884, '6.02', 8854, '3.36', 103329, '59.18', 71263, '40.82'),
('88', 277925, 67785, '24.39', 210140, '75.61', 12592, '4.53', 5153, '1.85', 91542, '47.58', 100853, '52.42'),
('89', 237966, 61722, '25.94', 176244, '74.06', 11274, '4.74', 3762, '1.58', 78038, '48.41', 83170, '51.59'),
('90', 93723, 25006, '26.68', 68717, '73.32', 4581, '4.89', 1947, '2.08', 31987, '51.44', 30202, '48.56'),
('91', 799860, 234023, '29.26', 565837, '70.74', 37018, '4.63', 11342, '1.42', 338569, '65.43', 178908, '34.57'),
('92', 998191, 257547, '25.80', 740644, '74.20', 46366, '4.65', 7469, '0.75', 552124, '80.39', 134685, '19.61'),
('93', 794364, 308171, '38.79', 486193, '61.21', 35060, '4.41', 8851, '1.11', 326057, '73.72', 116225, '26.28'),
('94', 796782, 245481, '30.81', 551301, '69.19', 36107, '4.53', 10117, '1.27', 376204, '74.48', 128873, '25.52'),
('95', 733876, 238978, '32.56', 494898, '67.44', 32485, '4.43', 9138, '1.25', 299829, '66.15', 153446, '33.85'),
('ZA', 315941, 166884, '52.82', 149057, '47.18', 8511, '2.69', 8211, '2.60', 40229, '30.40', 92106, '69.60'),
('ZB', 304670, 166201, '54.55', 138469, '45.45', 11198, '3.68', 7353, '2.41', 46918, '39.13', 73000, '60.87'),
('ZC', 103058, 62970, '61.10', 40088, '38.90', 3049, '2.96', 1768, '1.72', 13834, '39.22', 21437, '60.78'),
('ZD', 676080, 274588, '40.61', 401492, '59.39', 20584, '3.04', 16644, '2.46', 147297, '40.44', 216967, '59.56'),
('ZM', 92421, 50377, '54.51', 42044, '45.49', 1645, '1.78', 1997, '2.16', 15708, '40.90', 22694, '59.10');

-- --------------------------------------------------------

--
-- Structure de la table `likercom`
--

DROP TABLE IF EXISTS `likercom`;
CREATE TABLE IF NOT EXISTS `likercom` (
  `codecom` int NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  PRIMARY KEY (`codecom`,`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `likerforum`
--

DROP TABLE IF EXISTS `likerforum`;
CREATE TABLE IF NOT EXISTS `likerforum` (
  `pseudo` varchar(20) NOT NULL,
  `num_salle` int NOT NULL,
  PRIMARY KEY (`pseudo`,`num_salle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `likerforum`
--

INSERT INTO `likerforum` (`pseudo`, `num_salle`) VALUES
('flo', 2);

-- --------------------------------------------------------

--
-- Structure de la table `salle_forum`
--

DROP TABLE IF EXISTS `salle_forum`;
CREATE TABLE IF NOT EXISTS `salle_forum` (
  `num_salle` int NOT NULL AUTO_INCREMENT,
  `nomforum` varchar(255) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`num_salle`),
  KEY `pseudo` (`pseudo`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salle_forum`
--

INSERT INTO `salle_forum` (`num_salle`, `nomforum`, `pseudo`) VALUES
(1, 'test', 'flo'),
(2, 'ss', 'flo'),
(3, '4555', 'flo'),
(4, 'balbloalbal', 'flo'),
(5, '999', 'flo'),
(6, '544545', 'flo'),
(7, 'e1a12e12aze122', 'flo'),
(8, 'azeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeazeazeazazezaeazeazeazeazeazeazeazeeazazeazeazeaze', 'flo'),
(9, 'zaer', 'flo'),
(10, '1442', 'flo'),
(11, '1442', 'flo'),
(12, '1442', 'flo'),
(13, 'teststst', 'flo'),
(14, 'azeaze', 'flo'),
(15, 'azeaz', 'flo'),
(16, 'azeaz', 'flo'),
(17, '45445', 'flo'),
(18, 'nom', 'flo');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `pseudo` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  PRIMARY KEY (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`pseudo`, `mail`, `mdp`, `nom`, `prenom`) VALUES
('flo', 'popopo@gmail.com', 'aa36dc6e81e2ac7ad03e12fedcb6a2c0', 'Dubois', 'Florian'),
('michoudu07', 'mathilde@gmail.com', 'e0323a9039add2978bf5b49550572c7c', 'MICHEL', 'Mathilde'),
('test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
