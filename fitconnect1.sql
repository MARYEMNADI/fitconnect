-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 juin 2026 à 17:36
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fitconnect`
--
CREATE DATABASE IF NOT EXISTS `fitconnect` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `fitconnect`;

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `id_abonnement` int(11) NOT NULL,
  `type` enum('mensuel','trimestriel','annuel') NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  `statut` enum('actif','expire','annule') NOT NULL DEFAULT 'actif',
  `id_adherent` int(11) NOT NULL
) ;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`id_abonnement`, `type`, `date_debut`, `date_fin`, `prix`, `statut`, `id_adherent`) VALUES
(1, 'mensuel', '2026-06-01', '2026-07-01', 350.00, 'actif', 1),
(2, 'trimestriel', '2026-05-01', '2026-08-01', 900.00, 'actif', 2),
(3, 'annuel', '2026-01-01', '2027-01-01', 3200.00, 'actif', 3),
(4, 'mensuel', '2026-03-01', '2026-04-01', 350.00, 'expire', 4),
(5, 'trimestriel', '2026-04-15', '2026-07-15', 900.00, 'actif', 5),
(6, 'mensuel', '2026-05-01', '2026-06-01', 350.00, 'annule', 6);

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id_activite` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id_activite`, `nom`, `description`) VALUES
(1, 'Musculation', 'Renforcement musculaire'),
(2, 'Cardio', 'Tapis de course, vélo, rameur'),
(3, 'Cours collectif - RPM', 'Cours de cycling en groupe'),
(4, 'Cours collectif - Yoga', 'Cours de yoga en groupe'),
(5, 'CrossTraining', 'Entraînement fonctionnel');

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `id_adherent` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `date_inscription` date NOT NULL,
  `id_salle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`id_adherent`, `nom`, `prenom`, `email`, `telephone`, `date_naissance`, `date_inscription`, `id_salle`) VALUES
(1, 'Bensaid', 'Yassine', 'yassine.bensaid@example.com', '0661000001', '1995-03-12', '2025-01-10', 1),
(2, 'El Amrani', 'Salma', 'salma.elamrani@example.com', '0661000002', '1998-07-22', '2025-02-15', 1),
(3, 'Tahiri', 'Mehdi', 'mehdi.tahiri@example.com', '0661000003', '1990-11-05', '2024-09-01', 2),
(4, 'Ouazzani', 'Lina', 'lina.ouazzani@example.com', '0661000004', '2000-01-30', '2026-04-01', 3),
(5, 'Kabbaj', 'Reda', 'reda.kabbaj@example.com', '0661000005', '1993-06-18', '2026-05-20', 4),
(6, 'Berrada', 'Nadia', 'nadia.berrada@example.com', '0661000006', '1988-09-09', '2023-12-01', 2);

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `id_equipement` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `id_salle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipement`
--

INSERT INTO `equipement` (`id_equipement`, `nom`, `id_salle`) VALUES
(1, 'Tapis de course n°1', 1),
(2, 'Vélo elliptique n°1', 1),
(3, 'Rameur n°1', 2),
(4, 'Banc de musculation n°2', 2),
(5, 'Tapis de yoga n°3', 3),
(6, 'Vélo RPM n°4', 4);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `nom`, `ville`, `adresse`, `telephone`) VALUES
(1, 'FitConnect Centre', 'Casablanca', '12 Rue Mohammed V', '0522000001'),
(2, 'FitConnect Marina', 'Casablanca', '5 Boulevard de la Corniche', '0522000002'),
(3, 'FitConnect Agdal', 'Rabat', '8 Avenue de France', '0537000003'),
(4, 'FitConnect Gueliz', 'Marrakech', '20 Avenue Mohammed VI', '0524000004');

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `id_seance` int(11) NOT NULL,
  `date_seance` datetime NOT NULL DEFAULT current_timestamp(),
  `duree_minutes` smallint(5) UNSIGNED NOT NULL,
  `id_adherent` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL,
  `id_activite` int(11) NOT NULL,
  `id_equipement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`id_seance`, `date_seance`, `duree_minutes`, `id_adherent`, `id_salle`, `id_activite`, `id_equipement`) VALUES
(1, '2026-06-20 09:00:00', 60, 1, 1, 1, 1),
(2, '2026-06-21 18:30:00', 45, 1, 1, 2, 2),
(3, '2026-06-22 10:00:00', 90, 2, 1, 1, NULL),
(4, '2026-06-22 17:00:00', 30, 3, 2, 3, 3),
(5, '2026-06-23 08:15:00', 50, 5, 4, 5, 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`id_abonnement`),
  ADD KEY `idx_abonnement_adherent_statut` (`id_adherent`,`statut`);

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id_activite`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`id_adherent`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_adherent_salle` (`id_salle`);

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`id_equipement`),
  ADD KEY `fk_equipement_salle` (`id_salle`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`id_seance`),
  ADD KEY `fk_seance_salle` (`id_salle`),
  ADD KEY `fk_seance_activite` (`id_activite`),
  ADD KEY `fk_seance_equipement` (`id_equipement`),
  ADD KEY `idx_seance_adherent` (`id_adherent`),
  ADD KEY `idx_seance_date` (`date_seance`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `id_abonnement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id_activite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `id_adherent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `id_equipement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `seance`
--
ALTER TABLE `seance`
  MODIFY `id_seance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `fk_abonnement_adherent` FOREIGN KEY (`id_adherent`) REFERENCES `adherent` (`id_adherent`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD CONSTRAINT `fk_adherent_salle` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD CONSTRAINT `fk_equipement_salle` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `fk_seance_activite` FOREIGN KEY (`id_activite`) REFERENCES `activite` (`id_activite`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_seance_adherent` FOREIGN KEY (`id_adherent`) REFERENCES `adherent` (`id_adherent`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_seance_equipement` FOREIGN KEY (`id_equipement`) REFERENCES `equipement` (`id_equipement`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_seance_salle` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`) ON UPDATE CASCADE;
--
-- Base de données : `gestionventes`
--
CREATE DATABASE IF NOT EXISTS `gestionventes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gestionventes`;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `CODEART` varchar(10) NOT NULL,
  `NOMA` varchar(50) DEFAULT NULL,
  `COULEUR` varchar(30) DEFAULT NULL,
  `PRIXACHAT` decimal(10,2) DEFAULT NULL,
  `PRIXVENTE` decimal(10,2) DEFAULT NULL,
  `QTE_STK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `CODECLI` varchar(10) NOT NULL,
  `NOMC` varchar(50) DEFAULT NULL,
  `CATC` int(11) DEFAULT NULL,
  `VILC` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`CODECLI`, `NOMC`, `CATC`, `VILC`) VALUES
('C001', 'Martin', 2, 'Londres'),
('C002', 'Dupont', 1, 'Paris'),
('C003', 'Lebrave', 3, 'Londres'),
('C004', 'Csimple', 2, 'Londres'),
('C005', 'Martin', 3, 'Nice'),
('C006', 'Lebon', 1, 'Genéve'),
('C007', 'Dupin', 1, 'Paris');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `NUMCOM` varchar(10) NOT NULL,
  `CODECLI` varchar(10) DEFAULT NULL,
  `DATECOM` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `detailcom`
--

CREATE TABLE `detailcom` (
  `NUMCOM` varchar(10) NOT NULL,
  `CODEART` varchar(10) NOT NULL,
  `QTE_COMD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`CODEART`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CODECLI`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`NUMCOM`),
  ADD KEY `CODECLI` (`CODECLI`);

--
-- Index pour la table `detailcom`
--
ALTER TABLE `detailcom`
  ADD PRIMARY KEY (`NUMCOM`,`CODEART`),
  ADD KEY `CODEART` (`CODEART`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`CODECLI`) REFERENCES `client` (`CODECLI`);

--
-- Contraintes pour la table `detailcom`
--
ALTER TABLE `detailcom`
  ADD CONSTRAINT `detailcom_ibfk_1` FOREIGN KEY (`NUMCOM`) REFERENCES `commande` (`NUMCOM`),
  ADD CONSTRAINT `detailcom_ibfk_2` FOREIGN KEY (`CODEART`) REFERENCES `article` (`CODEART`);
--
-- Base de données : `hotel_db`
--
CREATE DATABASE IF NOT EXISTS `hotel_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hotel_db`;

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id_chambre` int(11) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `type_chambre` varchar(30) NOT NULL,
  `prix_nuit` decimal(10,2) NOT NULL,
  `statut` varchar(20) NOT NULL DEFAULT 'Disponible'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id_chambre`, `numero`, `type_chambre`, `prix_nuit`, `statut`) VALUES
(1, '[140]', '[Simple]', 300.00, '[disponsible]'),
(2, '[144]', '[Douple]', 500.00, '[disponsible]'),
(3, '[200]', '[Suite]', 1000.00, '[occupée]');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `telephone`, `email`) VALUES
(1, '[NADI]', '[Hassan]', '[0655772266]', '[hassannadi@gmail.com]'),
(2, '[TASI]', '[maryem]', '[0655442200]', '[maryemtasi2@gmail.com]'),
(3, '[KARIM]', '[abdelghani]', '[0622772299]', '[abdelghanikarim66@gmail.com]');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id_paiement` int(11) NOT NULL,
  `date_paiement` date NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `mode_paiement` varchar(30) NOT NULL,
  `id_reservation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`id_paiement`, `date_paiement`, `montant`, `mode_paiement`, `id_reservation`) VALUES
(3, '2026-06-05', 1500.00, 'Cart', 1),
(4, '0000-00-00', 2500.00, 'Espéces', 2);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `date_reservation` date NOT NULL,
  `date_arrivee` date NOT NULL,
  `date_depart` date NOT NULL,
  `statut` varchar(20) DEFAULT 'Confirmée',
  `id_client` int(11) NOT NULL,
  `id_chambre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `date_reservation`, `date_arrivee`, `date_depart`, `statut`, `id_client`, `id_chambre`) VALUES
(1, '2026-06-01', '2026-06-10', '2026-06-15', 'Confirmée', 1, 1),
(2, '2026-06-02', '2026-06-12', '2026-06-18', 'Confirmée', 2, 2),
(3, '2026-06-03', '2026-06-20', '2026-06-25', 'En attente', 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `sejour`
--

CREATE TABLE `sejour` (
  `id_sejour` int(11) NOT NULL,
  `date_checkin` date NOT NULL,
  `date_checkout` date NOT NULL,
  `observations` text DEFAULT NULL,
  `id_reservation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sejour`
--

INSERT INTO `sejour` (`id_sejour`, `date_checkin`, `date_checkout`, `observations`, `id_reservation`) VALUES
(1, '2026-06-10', '2026-06-15', 'RAS', 1),
(2, '2026-06-12', '2026-06-18', 'Client satisfait', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_chambre`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `telephone` (`telephone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id_paiement`),
  ADD UNIQUE KEY `id_reservation` (`id_reservation`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_chambre` (`id_chambre`);

--
-- Index pour la table `sejour`
--
ALTER TABLE `sejour`
  ADD PRIMARY KEY (`id_sejour`),
  ADD UNIQUE KEY `id_reservation` (`id_reservation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id_chambre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id_paiement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `sejour`
--
ALTER TABLE `sejour`
  MODIFY `id_sejour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id_reservation`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_chambre`) REFERENCES `chambre` (`id_chambre`);

--
-- Contraintes pour la table `sejour`
--
ALTER TABLE `sejour`
  ADD CONSTRAINT `sejour_ibfk_1` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id_reservation`);
--
-- Base de données : `nom_base`
--
CREATE DATABASE IF NOT EXISTS `nom_base` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `nom_base`;
--
-- Base de données : `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Structure de la table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Structure de la table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Structure de la table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Structure de la table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Structure de la table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Structure de la table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Structure de la table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Structure de la table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Déchargement des données de la table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-10-21 13:37:09', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Structure de la table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Index pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Index pour la table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Index pour la table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Index pour la table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Index pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Index pour la table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Index pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Index pour la table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Index pour la table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Index pour la table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Index pour la table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Index pour la table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Index pour la table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de données : `schoolmanager`
--
CREATE DATABASE IF NOT EXISTS `schoolmanager` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `schoolmanager`;

-- --------------------------------------------------------

--
-- Structure de la table `affectation`
--

CREATE TABLE `affectation` (
  `id_affectation` int(11) NOT NULL,
  `annee_scolaire` varchar(20) NOT NULL,
  `id_enseignant` int(11) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `affectation`
--

INSERT INTO `affectation` (`id_affectation`, `annee_scolaire`, `id_enseignant`, `id_matiere`, `id_classe`) VALUES
(1, '2025-2026', 1, 1, 1),
(2, '2025-2026', 2, 2, 1),
(3, '2025-2026', 3, 3, 2),
(4, '2025-2026', 4, 4, 2),
(5, '2025-2026', 5, 5, 3),
(6, '2025-2026', 6, 6, 3),
(7, '2025-2026', 7, 7, 4),
(8, '2025-2026', 8, 8, 4),
(9, '2025-2026', 9, 9, 5),
(10, '2025-2026', 10, 10, 5);

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id_classe` int(11) NOT NULL,
  `nom_classe` varchar(50) NOT NULL,
  `niveau` varchar(30) NOT NULL,
  `annee_scolaire` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id_classe`, `nom_classe`, `niveau`, `annee_scolaire`) VALUES
(1, 'A1', '1ère année', '2025-2026'),
(2, 'A2', '1ère année', '2025-2026'),
(3, 'B1', '2ème année', '2025-2026'),
(4, 'B2', '2ème année', '2025-2026'),
(5, 'C1', '3ème année', '2025-2026'),
(6, 'C2', '3ème année', '2025-2026'),
(7, 'D1', '4ème année', '2025-2026'),
(8, 'D2', '4ème année', '2025-2026'),
(9, 'E1', '5ème année', '2025-2026'),
(10, 'E2', '5ème année', '2025-2026');

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `id_eleve` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `sexe` enum('M','F') NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id_eleve`, `nom`, `prenom`, `date_naissance`, `sexe`, `adresse`, `telephone`, `email`) VALUES
(1, 'Amrani', 'Youssef', '2008-01-15', 'M', 'Casablanca', '0600000001', 'y1@gmail.com'),
(2, 'Alaoui', 'Sara', '2008-03-20', 'F', 'Casablanca', '0600000002', 's1@gmail.com'),
(3, 'Karimi', 'Ahmed', '2008-04-12', 'M', 'Rabat', '0600000003', 'a1@gmail.com'),
(4, 'Tazi', 'Meryem', '2008-05-10', 'F', 'Fes', '0600000004', 'm1@gmail.com'),
(5, 'Bennani', 'Omar', '2008-06-22', 'M', 'Marrakech', '0600000005', 'o1@gmail.com'),
(6, 'Naji', 'Lina', '2008-07-15', 'F', 'Agadir', '0600000006', 'l1@gmail.com'),
(7, 'Rami', 'Anas', '2008-08-08', 'M', 'Kenitra', '0600000007', 'an1@gmail.com'),
(8, 'Khaldi', 'Aya', '2008-09-18', 'F', 'Tanger', '0600000008', 'ay1@gmail.com'),
(9, 'Ziani', 'Adam', '2008-10-25', 'M', 'Oujda', '0600000009', 'ad1@gmail.com'),
(10, 'Mouline', 'Salma', '2008-11-30', 'F', 'Casa', '0600000010', 'sa1@gmail.com'),
(11, 'Nadi', 'Maryem', '2000-11-11', 'F', 'nazah', '0662039796', 'saidinordin1994@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id_enseignant` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `specialite` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id_enseignant`, `nom`, `prenom`, `telephone`, `email`, `specialite`) VALUES
(1, 'Benali', 'Hassan', '0611111111', 'h1@gmail.com', 'Mathématiques'),
(2, 'Lahlou', 'Samir', '0611111112', 's2@gmail.com', 'Physique'),
(3, 'Tazi', 'Nadia', '0611111113', 'n1@gmail.com', 'Français'),
(4, 'Ait', 'Karim', '0611111114', 'k1@gmail.com', 'Informatique'),
(5, 'Berrada', 'Mina', '0611111115', 'm2@gmail.com', 'Anglais'),
(6, 'Raji', 'Yassine', '0611111116', 'y2@gmail.com', 'SVT'),
(7, 'El Idrissi', 'Fatima', '0611111117', 'f1@gmail.com', 'Arabe'),
(8, 'Chakir', 'Othmane', '0611111118', 'o2@gmail.com', 'Histoire'),
(9, 'Fassi', 'Leila', '0611111119', 'l2@gmail.com', 'Géographie'),
(10, 'Amin', 'Rachid', '0611111120', 'r1@gmail.com', 'EPS');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id_inscription` int(11) NOT NULL,
  `date_inscription` date NOT NULL,
  `id_eleve` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id_inscription`, `date_inscription`, `id_eleve`, `id_classe`) VALUES
(1, '2025-09-01', 1, 1),
(2, '2025-09-01', 2, 1),
(3, '2025-09-01', 3, 2),
(4, '2025-09-01', 4, 2),
(5, '2025-09-01', 5, 3),
(6, '2025-09-01', 6, 3),
(7, '2025-09-01', 7, 4),
(8, '2025-09-01', 8, 4),
(9, '2025-09-01', 9, 5),
(10, '2025-09-01', 10, 5);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id_matiere` int(11) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `coefficient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id_matiere`, `nom_matiere`, `coefficient`) VALUES
(1, 'Mathématiques', 5),
(2, 'Physique', 4),
(3, 'Français', 3),
(4, 'Informatique', 4),
(5, 'Anglais', 2),
(6, 'SVT', 3),
(7, 'Arabe', 2),
(8, 'Histoire', 2),
(9, 'Géographie', 2),
(10, 'EPS', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affectation`
--
ALTER TABLE `affectation`
  ADD PRIMARY KEY (`id_affectation`),
  ADD KEY `id_enseignant` (`id_enseignant`),
  ADD KEY `id_matiere` (`id_matiere`),
  ADD KEY `id_classe` (`id_classe`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_classe`);

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`id_eleve`),
  ADD UNIQUE KEY `telephone` (`telephone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id_enseignant`),
  ADD UNIQUE KEY `telephone` (`telephone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id_inscription`),
  ADD KEY `id_eleve` (`id_eleve`),
  ADD KEY `id_classe` (`id_classe`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id_matiere`),
  ADD UNIQUE KEY `nom_matiere` (`nom_matiere`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affectation`
--
ALTER TABLE `affectation`
  MODIFY `id_affectation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id_classe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `id_eleve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id_enseignant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id_inscription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id_matiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `affectation`
--
ALTER TABLE `affectation`
  ADD CONSTRAINT `affectation_ibfk_1` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id_enseignant`) ON DELETE CASCADE,
  ADD CONSTRAINT `affectation_ibfk_2` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`) ON DELETE CASCADE,
  ADD CONSTRAINT `affectation_ibfk_3` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id_classe`) ON DELETE CASCADE;

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`id_eleve`) REFERENCES `eleve` (`id_eleve`) ON DELETE CASCADE,
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id_classe`) ON DELETE CASCADE;
--
-- Base de données : `skillsup`
--
CREATE DATABASE IF NOT EXISTS `skillsup` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `skillsup`;

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

CREATE TABLE `formateur` (
  `id_Formation` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formateur`
--

INSERT INTO `formateur` (`id_Formation`, `nom`, `prenom`, `email`) VALUES
(1, '[TAZI]', '[ahmed]', '[ taziahmed@gmail.COM]'),
(2, '[taha]', '[maryem]', '[ tahamaryem@gmail.COM]');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_Formation` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `duree` date DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `niveau_requis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `formateur`
--
ALTER TABLE `formateur`
  ADD PRIMARY KEY (`id_Formation`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_Formation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `formateur`
--
ALTER TABLE `formateur`
  MODIFY `id_Formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_Formation` int(11) NOT NULL AUTO_INCREMENT;
--
-- Base de données : `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
