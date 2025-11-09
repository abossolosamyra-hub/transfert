-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 09 nov. 2025 à 18:43
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `money`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `EMAIL_ADMIN` longtext DEFAULT NULL,
  `MOT_DE_PASSE` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `EMAIL_ADMIN`, `MOT_DE_PASSE`) VALUES
(1, 'patrice@gmail.com', '2007');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `ID_COMPTE` int(11) NOT NULL,
  `ID_UTILSATEUR` int(11) NOT NULL,
  `SOLDE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `effectue`
--

CREATE TABLE `effectue` (
  `ID_UTILSATEUR` int(11) NOT NULL,
  `ID_TRANSACTION` int(11) NOT NULL,
  `DATE` varchar(255) DEFAULT NULL,
  `STATUT` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `ID_TRANSACTION` int(11) NOT NULL,
  `Nom_envoyeur` varchar(100) NOT NULL,
  `Numero_envoyeur` int(11) NOT NULL,
  `Nom_receveur` varchar(255) NOT NULL,
  `Numero_receveur` int(11) NOT NULL,
  `MONTANT` int(11) DEFAULT NULL,
  `DATE` datetime DEFAULT NULL,
  `TYPE_VIREMENT` longtext DEFAULT NULL,
  `STATUT` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`ID_TRANSACTION`, `Nom_envoyeur`, `Numero_envoyeur`, `Nom_receveur`, `Numero_receveur`, `MONTANT`, `DATE`, `TYPE_VIREMENT`, `STATUT`) VALUES
(1, 'patricia', 0, 'berthy', 0, 25000, '2025-07-25 00:00:00', 'retrait', 'En attente'),
(2, 'aliba', 0, 'prince', 0, 10000, '2025-07-16 00:00:00', 'transfert', 'Validé'),
(3, 'viviane', 0, 'samyra', 0, 125000, '2025-07-21 00:00:00', 'transfert', 'Validé'),
(4, 'fibie', 0, 'lili', 0, 2500000, '2025-08-01 00:00:00', 'dépot', 'En attente'),
(5, 'baba', 0, 'bino', 0, 15250, '2004-02-14 00:00:00', 'dépot', 'En attente');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID_UTILSATEUR` int(11) NOT NULL,
  `NOM` varchar(60) NOT NULL,
  `ADRESSE` varchar(60) NOT NULL,
  `MOT_DE_PASSE` varchar(60) NOT NULL,
  `NUM_TEL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_UTILSATEUR`, `NOM`, `ADRESSE`, `MOT_DE_PASSE`, `NUM_TEL`) VALUES
(49, 'Djam', 'fer@gmail.com', '1234', 975265),
(50, 'ab', 'fer@gmail.com', '2005', 975265),
(51, 'abossolo', 'fer@gmail.com', '2025', 975265),
(52, 'barga', 'fer@gmail.com', '1996', 652314895),
(53, 'ada', 'carine@gmail.com', '0004', 695421874),
(54, 'james', 'fer@gmail.com', '2005', 975265),
(55, 'james', 'patrice@gmail.com', '2007', 975265),
(56, 'red', 'dior@gmail.com', '2156', 658954213),
(57, 'abossolo', 'patrice@gmail.com', '2007', 6325892),
(65, 'ulrich', 'patrice@gmail.com', '2007', 6325892),
(66, 'dj', 'patrice@gmail.com', '2007', 6325892),
(67, 'Djam', 'fer@gmail.com', '1996', 6325892),
(68, 'Djam', 'fer@gmail.com', '1996', 975265),
(69, 'ulrich', 'fer@gmail.com', '1542', 635218594),
(70, 'sardine', 'patrice@gmail.com', '2007', 652147584),
(71, 'GILY', 'Gilyuzumaki@gmail.com', '0000', 2147483647),
(72, 'ulrich', 'patrice@gmail.com', '2007', 2147483647),
(73, 'viviane', 'patrice@gmail.com', '2468', 654789512),
(74, 'Djam', 'patrice@gmail.com', '1234', 65231245);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`ID_COMPTE`),
  ADD KEY `FK_AVOIR` (`ID_UTILSATEUR`);

--
-- Index pour la table `effectue`
--
ALTER TABLE `effectue`
  ADD PRIMARY KEY (`ID_UTILSATEUR`,`ID_TRANSACTION`),
  ADD KEY `FK_EFFECTUE2` (`ID_TRANSACTION`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`ID_TRANSACTION`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_UTILSATEUR`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `ID_TRANSACTION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID_UTILSATEUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `FK_AVOIR` FOREIGN KEY (`ID_UTILSATEUR`) REFERENCES `utilisateur` (`ID_UTILSATEUR`);

--
-- Contraintes pour la table `effectue`
--
ALTER TABLE `effectue`
  ADD CONSTRAINT `FK_EFFECTUE` FOREIGN KEY (`ID_UTILSATEUR`) REFERENCES `utilisateur` (`ID_UTILSATEUR`),
  ADD CONSTRAINT `FK_EFFECTUE2` FOREIGN KEY (`ID_TRANSACTION`) REFERENCES `transaction` (`ID_TRANSACTION`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
