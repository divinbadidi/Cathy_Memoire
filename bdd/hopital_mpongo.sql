-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 22 nov. 2022 à 17:23
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hopital_mpongo`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `matr_agent` int(11) NOT NULL,
  `nom_complet` varchar(255) DEFAULT NULL,
  `sexe_agent` varchar(1) NOT NULL,
  `Tel_agent` varchar(15) NOT NULL,
  `service` varchar(50) NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `niveau_etude` varchar(50) NOT NULL,
  `date_entree` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`matr_agent`, `nom_complet`, `sexe_agent`, `Tel_agent`, `service`, `fonction`, `grade`, `profession`, `niveau_etude`, `date_entree`, `password`) VALUES
(0, 'BADIDI KAZIMALI DIVIN', '', '', 'Pediatrie', '', '', '', '', '', '098f6bcd4621d373cade4e832627b4f6'),
(12, 'MUNSAYA', '', '', 'chirurgie', '', '', '', '', '', '098f6bcd4621d373cade4e832627b4f6'),
(123, 'david', '', '', 'Secretariat', '', '', '', '', '', '098f6bcd4621d373cade4e832627b4f6'),
(252, 'toto', '', '', 'directeur-general', '', '', '', '', '', '098f6bcd4621d373cade4e832627b4f6'),
(2222, 'daniel', '', '', 'Medecin-directeur', '', '', '', '', '', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id_fonction` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `grade`
--

CREATE TABLE `grade` (
  `id_grade` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `Num_fiche` varchar(10) NOT NULL,
  `Nom_Complet` varchar(255) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `age` varchar(1) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `adresse_complete` varchar(255) NOT NULL,
  `Etat_civil` varchar(25) NOT NULL,
  `Symptome` varchar(25) NOT NULL,
  `Service_consulte` varchar(25) NOT NULL,
  `Tension` varchar(25) NOT NULL,
  `Groupe_sanguin` varchar(25) NOT NULL,
  `Temperature` varchar(25) NOT NULL,
  `date_consultation` varchar(255) NOT NULL,
  `Hospitaliation` varchar(15) NOT NULL,
  `Rapport` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`Num_fiche`, `Nom_Complet`, `sexe`, `telephone`, `age`, `categorie`, `adresse_complete`, `Etat_civil`, `Symptome`, `Service_consulte`, `Tension`, `Groupe_sanguin`, `Temperature`, `date_consultation`, `Hospitaliation`, `Rapport`) VALUES
('1001', 'BADIDI', 'M', '08125125', '1', 'ConventionnÃ©', 'KINSHASA/LINGWALA/ITAGA/NÂ°19', 'Neant', 'Maux de tete', 'Pediatrie', '25', '52', '22', '2022-09-01', 'Non', 'ok'),
('1001/AB', 'MAGO MAKWALA', 'M', '0817767357', '2', 'ConventionnÃ©', 'Kinshasa/Bloc L19', 'test', 'Maux de dos', 'pediatrie', '80', 'B0', '20', '2022-09-15', 'Oui', 'testestetetstetchrisolite'),
('1002/AB', 'MUNSAYA', 'F', '0817767357', '2', 'ConventionnÃ©', 'TEST', 'TEST', 'TEST', 'chirurgie', '25', 'test', '02', '2022-09-16', 'test', 'test'),
('15', 'MUNSAYA AMENEPELE', 'F', '0821166343', '4', 'Journalier', 'BUTA 204', 'MariÃ©', 'Maux de dos', 'chirurgie', '00', '52', '00', '2022-09-08', 'NON', 'son  cas Ã  Ã©tÃ© bien traite');

-- --------------------------------------------------------

--
-- Structure de la table `rapport_md`
--

CREATE TABLE `rapport_md` (
  `id` int(14) NOT NULL,
  `rapport` varchar(500) DEFAULT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rappor_sec`
--

CREATE TABLE `rappor_sec` (
  `id` int(14) NOT NULL,
  `rapport` varchar(500) DEFAULT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id_service`, `designation`) VALUES
(1, 'Pédiatrie'),
(2, 'Chirurgie'),
(5, 'Secrétariat'),
(6, 'Médecin Directeur');

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

CREATE TABLE `sortie` (
  `id_sortie` int(11) NOT NULL,
  `Num_fiche` varchar(25) NOT NULL,
  `Date_entree` varchar(255) NOT NULL,
  `date_sortie` varchar(255) NOT NULL,
  `etat_entree` varchar(255) NOT NULL,
  `etat_sortie` varchar(255) NOT NULL,
  `montant_payer` varchar(255) NOT NULL,
  `mode_paiement` varchar(255) NOT NULL,
  `Num_chambre` varchar(20) NOT NULL,
  `Num_Facture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`matr_agent`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id_fonction`);

--
-- Index pour la table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id_grade`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`Num_fiche`);

--
-- Index pour la table `rapport_md`
--
ALTER TABLE `rapport_md`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rappor_sec`
--
ALTER TABLE `rappor_sec`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Index pour la table `sortie`
--
ALTER TABLE `sortie`
  ADD PRIMARY KEY (`id_sortie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id_fonction` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `grade`
--
ALTER TABLE `grade`
  MODIFY `id_grade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rapport_md`
--
ALTER TABLE `rapport_md`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rappor_sec`
--
ALTER TABLE `rappor_sec`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `sortie`
--
ALTER TABLE `sortie`
  MODIFY `id_sortie` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
