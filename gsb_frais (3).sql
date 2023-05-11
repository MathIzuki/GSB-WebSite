-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 06 avr. 2023 à 17:54
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gsb_frais`
--

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fichefrais`
--

CREATE TABLE `fichefrais` (
  `mois` varchar(6) NOT NULL,
  `idVisiteur` int(11) NOT NULL,
  `nbJustificatifs` int(11) DEFAULT NULL,
  `montantValide` decimal(10,2) DEFAULT NULL,
  `dateModif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fraisforfait`
--

CREATE TABLE `fraisforfait` (
  `id` varchar(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  `montant` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lignefraisforfait`
--

CREATE TABLE `lignefraisforfait` (
  `idVisiteur` varchar(11) DEFAULT NULL,
  `mois` varchar(6) DEFAULT NULL,
  `idFraisForfait` int(11) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lignefraishorsforfait`
--

CREATE TABLE `lignefraishorsforfait` (
  `id` varchar(11) NOT NULL,
  `date` date DEFAULT NULL,
  `montant` decimal(10,2) DEFAULT NULL,
  `libelle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) DEFAULT NULL,
  `role_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `role_desc`) VALUES
(1, 'comptable', 'Personne chargée des tâches de comptabilité'),
(2, 'visiteur', 'Personne qui visite un lieu ou un événement');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` varchar(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `dateEmbauche` date DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `adresse`, `ville`, `cp`, `dateEmbauche`, `login`, `mdp`, `role_id`) VALUES
('a131', 'Villechalane', 'Louis', '8 rue des Charmes', 'Cahors', '46000', '2005-12-21', 'lvillachane', 'jux7g', NULL),
('a17', 'Andre', 'David', '1 rue Petit', 'Lalbenque', '46200', '1998-11-23', 'dandre', 'oppg5', NULL),
('a55', 'Bedos', 'Christian', '1 rue Peranud', 'Montcuq', '46250', '1995-01-12', 'cbedos', 'gmhxd', NULL),
('a93', 'Tusseau', 'Louis', '22 rue des Ternes', 'Gramat', '46123', '2000-05-01', 'ltusseau', 'ktp3s', NULL),
('b13', 'Bentot', 'Pascal', '11 allée des Cerises', 'Bessines', '46512', '1992-07-09', 'pbentot', 'doyw1', NULL),
('b16', 'Bioret', 'Luc', '1 Avenue gambetta', 'Cahors', '46000', '1998-05-11', 'lbioret', 'hrjfs', NULL),
('b19', 'Bunisset', 'Francis', '10 rue des Perles', 'Montreuil', '93100', '1987-10-21', 'fbunisset', '4vbnd', NULL),
('b25', 'Bunisset', 'Denise', '23 rue Manin', 'paris', '75019', '2010-12-05', 'dbunisset', 's1y1r', NULL),
('b28', 'Cacheux', 'Bernard', '114 rue Blanche', 'Paris', '75017', '2009-11-12', 'bcacheux', 'uf7r3', NULL),
('b34', 'Cadic', 'Eric', '123 avenue de la République', 'Paris', '75011', '2008-09-23', 'ecadic', '6u8dc', NULL),
('b4', 'Charoze', 'Catherine', '100 rue Petit', 'Paris', '75019', '2005-11-12', 'ccharoze', 'u817o', NULL),
('b50', 'Clepkens', 'Christophe', '12 allée des Anges', 'Romainville', '93230', '2003-08-11', 'cclepkens', 'bw1us', NULL),
('b59', 'Cottin', 'Vincenne', '36 rue Des Roches', 'Monteuil', '93100', '2001-11-18', 'vcottin', '2hoh9', NULL),
('c111', 'Amin', 'Amin', '8 rue des Charmes', 'Cahors', '46000', '2005-12-21', 'amin', 'amin', 1),
('c14', 'Daburon', 'François', '13 rue de Chanzy', 'Créteil', '94000', '2002-02-11', 'fdaburon', '7oqpv', NULL),
('c3', 'De', 'Philippe', '13 rue Barthes', 'Créteil', '94000', '2010-12-14', 'pde', 'gk9kx', NULL),
('c54', 'Debelle', 'Michel', '181 avenue Barbusse', 'Rosny', '93210', '2006-11-23', 'mdebelle', 'od5rt', NULL),
('d13', 'Debelle', 'Jeanne', '134 allée des Joncs', 'Nantes', '44000', '2000-05-11', 'jdebelle', 'nvwqq', NULL),
('d51', 'Debroise', 'Michel', '2 Bld Jourdain', 'Nantes', '44000', '2001-04-17', 'mdebroise', 'sghkb', NULL),
('e22', 'Desmarquest', 'Nathalie', '14 Place d Arc', 'Orléans', '45000', '2005-11-12', 'ndesmarquest', 'f1fob', NULL),
('e24', 'Desnost', 'Pierre', '16 avenue des Cèdres', 'Guéret', '23200', '2001-02-05', 'pdesnost', '4k2o5', NULL),
('e39', 'Dudouit', 'Frédéric', '18 rue de l église', 'GrandBourg', '23120', '2000-08-01', 'fdudouit', '44im8', NULL),
('e49', 'Duncombe', 'Claude', '19 rue de la tour', 'La souteraine', '23100', '1987-10-10', 'cduncombe', 'qf77j', NULL),
('e5', 'Enault-Pascreau', 'Céline', '25 place de la gare', 'Gueret', '23200', '1995-09-01', 'cenault', 'y2qdu', NULL),
('e52', 'Eynde', 'Valérie', '3 Grand Place', 'Marseille', '13015', '1999-11-01', 'veynde', 'i7sn3', NULL),
('f21', 'Finck', 'Jacques', '10 avenue du Prado', 'Marseille', '13002', '2001-11-10', 'jfinck', 'mpb3t', NULL),
('f39', 'Frémont', 'Fernande', '4 route de la mer', 'Allauh', '13012', '1998-10-01', 'ffremont', 'xs5tq', NULL),
('f4', 'Gest', 'Alain', '30 avenue de la mer', 'Berre', '13025', '1985-11-01', 'agest', 'dywvt', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fichefrais`
--
ALTER TABLE `fichefrais`
  ADD PRIMARY KEY (`mois`,`idVisiteur`);

--
-- Index pour la table `fraisforfait`
--
ALTER TABLE `fraisforfait`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lignefraishorsforfait`
--
ALTER TABLE `lignefraishorsforfait`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role` (`role_id`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
