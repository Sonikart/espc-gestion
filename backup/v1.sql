-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 02 avr. 2018 à 03:29
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Structure de la table `configuration`
--

CREATE TABLE `configuration` (
  `id` int(11) NOT NULL,
  `maintenance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `configuration`
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
-- Déchargement des données de la table `maintenance`
--

INSERT INTO `maintenance` (`id`, `estimation`, `reason`) VALUES
(1, 'Non determiné.', 'Site en cours de construction.');

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
-- Déchargement des données de la table `p_project`
--

INSERT INTO `p_project` (`id`, `id_projet`, `createur`, `titre`, `lien`, `client`, `description`, `date_commande`, `date_livraison`, `color`, `paiement`, `tasks`, `etat`, `archive`, `price_total`) VALUES
(1, 63254126, 'ES-PC Informatique', 'JCP ESPACES VERTS', 'http://dessoucheuse.fr', 'contact@jcpespacesverts.com', 'Site internet de dessouchage de souche, avec un systeme de devis, un backoffice, et une gestion compléte par administration.', '1522629137', '30/05/2018', '#2ecc71', '1', '0', 1, 0, '450€'),
(2, 42322275, 'dylan.lemaire@icloud.com', 'Bureau Vert', 'https://bureauvert.fr', 'contact@bureauvert.fr', 'Site dynamique et indexabled pour une liste de bureau louable, avec une gestion compléte administrative.', '1522628958', '25/04/2018', '#1457b3', '1', '0', 1, 0, 'Non défini'),
(3, 37649698, 'dylan.lemaire@icloud.com', 'VAP FUSION', 'http://vap_fusion.com', 'contact@vapfusion.com', 'CMS Prestashop, Simple et Dynamique de gestion et vente liquide e-cigarette + E-Commerce Complet', '1522629137', '30/05/2018', '#ff5a00', '1', '0', 1, 0, 'Non défini'),
(4, 42282739, 'dylan.lemaire@icloud.com', 'Pass Holidays', 'https://passholidays.com', 'contact@passholidays.com', 'CMS Prestashop, Creation d\'un back office maison, Pour gestion et creation de carte. ( Voir Tasks )', '1522629323', '23/05/2018', '#ff8a00', '1', '0', 1, 0, 'Non défini');

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
-- Déchargement des données de la table `token_access`
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
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `id_membre`, `token`, `nom`, `prenom`, `email`, `company`, `password`, `created_at`, `last_login`, `role`, `avatar`, `locked`, `online`, `access`) VALUES
(1, '65259565', '18z55y5pwmsgcogsocsco88cwgcwc0w00ks8o08wokog4wc48c', 'LEMAIRE', 'Dylan', 'dylan.lemaire@icloud.com', 'http://espc-informatique.fr', '46cefac1cebd7aa33e2a3e8ee3e843580f828971', 1522345261, 1522345261, 'Créateur', 'https://www.gravatar.com/avatar/6087c04888ee4894afd3fbe4aeb5267f', '0', 1, 10);

--
-- Index pour les tables déchargées
--

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
-- Index pour la table `p_project`
--
ALTER TABLE `p_project`
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
-- AUTO_INCREMENT pour les tables déchargées
--

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
-- AUTO_INCREMENT pour la table `p_project`
--
ALTER TABLE `p_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `token_access`
--
ALTER TABLE `token_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
