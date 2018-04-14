-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 05 Avril 2018 à 22:00
-- Version du serveur :  5.7.18-1
-- Version de PHP :  7.0.20-2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `espc`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `nom` text,
  `prenom` text,
  `email` text,
  `adresse` text,
  `code_postal` text,
  `ville` text,
  `telephone` text,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `id_client`, `nom`, `prenom`, `email`, `adresse`, `code_postal`, `ville`, `telephone`, `password`) VALUES
(1, 10574915, NULL, NULL, 'contact@newfacebook.fr', NULL, NULL, NULL, NULL, NULL),
(2, 55114750, NULL, NULL, 'contact@provapfusion.com', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `configuration`
--

CREATE TABLE `configuration` (
  `id` int(11) NOT NULL,
  `maintenance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `configuration`
--

INSERT INTO `configuration` (`id`, `maintenance`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `estimation` text NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `maintenance`
--

INSERT INTO `maintenance` (`id`, `estimation`, `reason`) VALUES
(1, '1h', 'Migration des bases de données.');

-- --------------------------------------------------------

--
-- Structure de la table `p_authorize`
--

CREATE TABLE `p_authorize` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `p_authorize`
--

INSERT INTO `p_authorize` (`id`, `id_project`, `email`) VALUES
(12, 79853125, 'dylan.lemaire@icloud.com'),
(14, 3109726, 'dylan.lemaire@icloud.com');

-- --------------------------------------------------------

--
-- Structure de la table `p_messages`
--

CREATE TABLE `p_messages` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_create` varchar(55) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `p_messages`
--

INSERT INTO `p_messages` (`id`, `id_project`, `message`, `date_create`, `author`) VALUES
(1, 50193818, 'test', '1522795729', 'dylan.lemaire@icloud.com'),
(2, 50193818, 'ok', '1522795791', 'dylan.lemaire@icloud.com'),
(3, 50193818, 'Merci pour votre franchise', '1522796061', 'dylan.lemaire@icloud.com');

-- --------------------------------------------------------

--
-- Structure de la table `p_project`
--

CREATE TABLE `p_project` (
  `id` int(11) NOT NULL,
  `id_projet` int(11) NOT NULL,
  `createur` text NOT NULL,
  `titre` text NOT NULL,
  `lien` text NOT NULL,
  `client` text NOT NULL,
  `description` longtext NOT NULL,
  `date_commande` text NOT NULL,
  `date_livraison` text NOT NULL,
  `color` varchar(10) NOT NULL,
  `paiement` text NOT NULL,
  `tasks` text NOT NULL,
  `etat` int(11) NOT NULL,
  `archive` int(11) NOT NULL,
  `price_total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `p_project`
--

INSERT INTO `p_project` (`id`, `id_projet`, `createur`, `titre`, `lien`, `client`, `description`, `date_commande`, `date_livraison`, `color`, `paiement`, `tasks`, `etat`, `archive`, `price_total`) VALUES
(21, 3109726, 'dylan.lemaire@icloud.com', 'Pro VapFusion', 'http://pro.vapfusion.com', 'contact@provapfusion.com', 'Vap Fusion pour les pro', '1522909762', '03/05/2018', '#ffa900', '1', '0', 1, 0, 'Non défini');

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `etat` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tasks`
--

INSERT INTO `tasks` (`id`, `id_project`, `author`, `content`, `etat`) VALUES
(14, 50193818, 'dylan.lemaire@icloud.com', 'Crée un slider en Javascript', 1),
(15, 50193818, 'dylan.lemaire@icloud.com', 'Création d\'un conteneur', 1),
(16, 50193818, 'dylan.lemaire@icloud.com', 'Création d\'un backoffice', 1),
(17, 23162769, 'dylan.lemaire@icloud.com', 'Création d\'un CMS en CSS et HTML complet', 1),
(18, 68594351, 'dylan.lemaire@icloud.com', 'Création du CMS', 0),
(19, 23162769, 'dylan.lemaire@icloud.com', 'Création d\'un backoffice', 1),
(20, 50193818, 'dylan.lemaire@icloud.com', 'Faire un slider pour l\'application mobile', 0),
(21, 84334641, 'dylan.lemaire@icloud.com', 'Faire un slider', 1),
(22, 50193818, 'dylan.lemaire@icloud.com', 'Crée un favicon', 0),
(23, 23162769, 'dylan.lemaire@icloud.com', 'Crée une API JSON pour recuperer les donnes du site', 0);

-- --------------------------------------------------------

--
-- Structure de la table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `timer`
--

INSERT INTO `timer` (`id`, `id_project`, `time`) VALUES
(1, 1, 74292);

-- --------------------------------------------------------

--
-- Structure de la table `token_access`
--

CREATE TABLE `token_access` (
  `id` int(11) NOT NULL,
  `attribute` text NOT NULL,
  `token` varchar(60) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `token_access`
--

INSERT INTO `token_access` (`id`, `attribute`, `token`, `active`) VALUES
(1, '65259565', '18z55y5pwmsgcogsocsco88cwgcwc0w00ks8o08wokog4wc48c', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `id_membre` text NOT NULL,
  `token` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `last_login` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `avatar` text,
  `locked` text NOT NULL,
  `online` tinyint(4) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `id_membre`, `token`, `nom`, `prenom`, `email`, `company`, `password`, `created_at`, `last_login`, `role`, `avatar`, `locked`, `online`, `access`) VALUES
(1, '65259565', '18z55y5pwmsgcogsocsco88cwgcwc0w00ks8o08wokog4wc48c', 'LEMAIRE', 'Dylan', 'dylan.lemaire@icloud.com', 'http://espc-informatique.fr', '46cefac1cebd7aa33e2a3e8ee3e843580f828971', 1522345261, 1522345261, 'Administrateur', 'https://www.gravatar.com/avatar/6087c04888ee4894afd3fbe4aeb5267f', '0', 1, 10);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `p_authorize`
--
ALTER TABLE `p_authorize`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `p_messages`
--
ALTER TABLE `p_messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `p_project`
--
ALTER TABLE `p_project`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `token_access`
--
ALTER TABLE `token_access`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `p_authorize`
--
ALTER TABLE `p_authorize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `p_messages`
--
ALTER TABLE `p_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `p_project`
--
ALTER TABLE `p_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `token_access`
--
ALTER TABLE `token_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
