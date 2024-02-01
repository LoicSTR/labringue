-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 27 avr. 2022 à 09:14
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `labringue`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `categorie`) VALUES
(1, '+18'),
(2, 'imitation'),
(3, 'honte'),
(4, 'blabla'),
(5, 'physique');

-- --------------------------------------------------------

--
-- Structure de la table `gages`
--

CREATE TABLE `gages` (
  `id` int(11) NOT NULL,
  `gage` varchar(200) NOT NULL,
  `id_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gages`
--

INSERT INTO `gages` (`id`, `gage`, `id_categories`) VALUES
(1, 'imite un chien', 2),
(2, 'imite Johnny Halliday ', 2),
(3, 'fais 5 pompes', 5),
(4, 'imite Titeuf', 2),
(5, 'lèche l\'oreille de ton voisin de droite', 1),
(6, 'raconte nous ta pire honte', 4),
(7, 'chante une chanson Disney', 3),
(8, 'fais 7 squats', 5),
(9, 'enlève un vêtement', 1),
(10, 'donne un défaut de ton voisin de gauche', 4),
(11, 'danse le logobi', 3),
(12, 'dis-nous qui sent le moins bon', 4),
(13, 'bois une gorgée avec les pieds', 3),
(14, 'échange ton t-shirt avec la personne à ta droite', 1),
(15, 'épelle le nom de famille de la personne à ta gauche', 4),
(16, 'dis-nous sur qui tu as déjà fantasmé ici', 1),
(17, 'dis-nous qui ouvre trop sa gueule', 4),
(18, 'dis-nous avec qui tu t\'ennuies le plus', 4),
(19, 'mime la position sexuelle de ton choix', 1),
(20, 'masse les pieds du joueur que tu veux', 3),
(21, 'imite une limace', 2),
(22, 'donne une qualité à ton voisin de droite', 4),
(23, 'chante une chanson de ton choix', 3),
(24, 'dis-nous qui ne peut pas se passer de son téléphone', 4),
(25, 'retire la chaussette du joueur à ta droite avec les dents ', 3),
(26, 'lis-nous ton dernier dm insta', 3),
(27, 'lis-nous le premier message quand tu recherche \"aime\"', 3),
(28, 'dis-nous la personne que tu aimes le plus ici', 4),
(29, 'dis-nous quand et pourquoi tu as pleuré pour la dernière fois', 4),
(30, 'dis-nous une bonne raison de coucher avec ton voisin de gauche', 1),
(31, 'imite jacquouille', 2),
(32, 'imite l\'accent belge', 2),
(33, 'imite Emmanuel Macron', 2),
(34, 'imite Nicolas Sarkozy', 2),
(35, 'imite François Hollande', 2),
(36, 'imite Patrick Sebastien', 2),
(37, 'imite Julien Lepers', 2),
(38, 'imite Donald Duck', 2),
(39, 'imite Mickey Mouse', 2),
(40, 'imite l\'Âne de Shrek', 2),
(41, 'imite Dark Vador', 2),
(42, 'imite Gollum', 2),
(43, 'imite Gilbert Montagné', 2),
(44, 'imite Squeezie', 2),
(45, 'imite Cyril Hanouna', 2),
(46, 'imite Mister V', 2),
(47, 'imite Cyprien', 2),
(48, 'imite un cochon', 2),
(49, 'imite Eric Zemmour', 2),
(50, 'imite Jean-Marie Le Pen', 2),
(51, 'fais le tour de la pièce à cloche-pied', 5),
(52, 'imite Kev Adams', 2),
(53, 'porte la personne à ta gauche', 5),
(54, 'fais 10 abdos', 5),
(55, 'touche tes orteils les jambes tendues', 5),
(56, 'fais le tour de la table en rampant', 5),
(57, 'imite un canard', 2),
(58, 'imite un poisson', 2),
(59, 'ouvre la fenêtre et crie \"J\'aime Francky Vincent\"', 3),
(60, 'lèche le nez de ton voisin de droite', 3),
(61, 'embrasse tendrement ta main', 3),
(62, 'convaincs-nous de ton amour pour les licornes', 4),
(63, 'lèche toi le coude', 5),
(64, 'décris ton partenaire idéal', 4),
(65, 'montre une photo au hasard dans ta galerie', 3);

-- --------------------------------------------------------

--
-- Structure de la table `joueurs`
--

CREATE TABLE `joueurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `joueurs`
--

INSERT INTO `joueurs` (`id`, `pseudo`) VALUES
(244, 'Loic'),
(245, 'Loic'),
(246, 'Loic');

-- --------------------------------------------------------

--
-- Structure de la table `nbr_tours`
--

CREATE TABLE `nbr_tours` (
  `id` int(11) NOT NULL,
  `nombre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `nbr_tours`
--

INSERT INTO `nbr_tours` (`id`, `nombre`) VALUES
(1, 10),
(2, 20),
(3, 30);

-- --------------------------------------------------------

--
-- Structure de la table `parties`
--

CREATE TABLE `parties` (
  `id` int(11) NOT NULL,
  `id_nbr_tours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `parties`
--

INSERT INTO `parties` (`id`, `id_nbr_tours`) VALUES
(52, 1),
(53, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tables_categories`
--

CREATE TABLE `tables_categories` (
  `id` int(11) NOT NULL,
  `id_parties` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tables_categories`
--

INSERT INTO `tables_categories` (`id`, `id_parties`, `id_categories`) VALUES
(188, 52, 1),
(189, 52, 2),
(190, 52, 4),
(191, 52, 5),
(192, 53, 1),
(193, 53, 2),
(194, 53, 4),
(195, 53, 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gages`
--
ALTER TABLE `gages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Index pour la table `joueurs`
--
ALTER TABLE `joueurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nbr_tours`
--
ALTER TABLE `nbr_tours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nbr_tours` (`id_nbr_tours`);

--
-- Index pour la table `tables_categories`
--
ALTER TABLE `tables_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoriesPC` (`id_categories`),
  ADD KEY `id_parties` (`id_parties`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `gages`
--
ALTER TABLE `gages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `joueurs`
--
ALTER TABLE `joueurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT pour la table `nbr_tours`
--
ALTER TABLE `nbr_tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `parties`
--
ALTER TABLE `parties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `tables_categories`
--
ALTER TABLE `tables_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `gages`
--
ALTER TABLE `gages`
  ADD CONSTRAINT `id_categories` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `parties`
--
ALTER TABLE `parties`
  ADD CONSTRAINT `id_nbr_tours` FOREIGN KEY (`id_nbr_tours`) REFERENCES `nbr_tours` (`id`);

--
-- Contraintes pour la table `tables_categories`
--
ALTER TABLE `tables_categories`
  ADD CONSTRAINT `id_categoriesPC` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `id_parties` FOREIGN KEY (`id_parties`) REFERENCES `parties` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
