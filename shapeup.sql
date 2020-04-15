-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2020 at 08:55 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shapeup`
--
CREATE DATABASE IF NOT EXISTS `shapeup` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shapeup`;

-- --------------------------------------------------------

--
-- Table structure for table `appreciation`
--

DROP TABLE IF EXISTS `appreciation`;
CREATE TABLE IF NOT EXISTS `appreciation` (
  `idAppreciation` int(11) NOT NULL AUTO_INCREMENT,
  `typeAppreciation` varchar(20) NOT NULL,
  `noteAppreciation` int(2) NOT NULL,
  `cinUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idAppreciation`),
  KEY `fk_cinclient_appreciation` (`cinUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bandachat`
--

DROP TABLE IF EXISTS `bandachat`;
CREATE TABLE IF NOT EXISTS `bandachat` (
  `idBand` int(11) NOT NULL AUTO_INCREMENT,
  `tauxBand` float NOT NULL,
  `descriptionBand` varchar(100) NOT NULL,
  `cinUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idBand`),
  KEY `fk_cinclient_bandachat` (`cinUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categorieevent`
--

DROP TABLE IF EXISTS `categorieevent`;
CREATE TABLE IF NOT EXISTS `categorieevent` (
  `idCategorieEvent` int(11) NOT NULL AUTO_INCREMENT,
  `libelleCategorieEvent` varchar(20) NOT NULL,
  `descriptionCategorieEvent` varchar(100) NOT NULL,
  PRIMARY KEY (`idCategorieEvent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categorieproduit`
--

DROP TABLE IF EXISTS `categorieproduit`;
CREATE TABLE IF NOT EXISTS `categorieproduit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleC` varchar(20) NOT NULL,
  `descriptionC` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCommande` int(11) NOT NULL AUTO_INCREMENT,
  `statusCommande` varchar(20) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `cinUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idCommande`),
  KEY `fk_cinclient_commande` (`cinUtilisateur`),
  KEY `fk_idproduit_commande` (`idProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `idEvent` int(11) NOT NULL AUTO_INCREMENT,
  `descriptionEvent` varchar(100) NOT NULL,
  `nbParticipant` int(11) NOT NULL,
  `adresseEvent` varchar(100) NOT NULL,
  `dateEvent` date NOT NULL,
  `idPromotion` int(11) NOT NULL,
  `idCategorieEvent` int(11) NOT NULL,
  `cinUtilisateur` int(8) NOT NULL,
  PRIMARY KEY (`idEvent`),
  KEY `fk_cinClient_evenement` (`cinUtilisateur`),
  KEY `fk_idcategorieevent_evenement` (`idCategorieEvent`),
  KEY `fk_idpromotion_evenement` (`idPromotion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `numFacture` int(11) NOT NULL AUTO_INCREMENT,
  `prixFacture` float NOT NULL,
  `dateFacture` date NOT NULL,
  `idCommande` int(11) NOT NULL,
  `cinUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`numFacture`),
  KEY `fk_idcommande_facture` (`idCommande`),
  KEY `fk_cinclient_facture` (`cinUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `idLivraison` int(11) NOT NULL AUTO_INCREMENT,
  `destination` varchar(100) NOT NULL,
  `cinUtilisateur` int(8) NOT NULL,
  `cinLivreur` int(8) NOT NULL,
  `idCommande` int(11) NOT NULL,
  PRIMARY KEY (`idLivraison`),
  KEY `fk_cinclient_livraison` (`cinUtilisateur`),
  KEY `fk_cinlivreur_livraison` (`cinLivreur`),
  KEY `fk_idcommande_livraison` (`idCommande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `cinLivreur` int(8) NOT NULL,
  `nomLivreur` varchar(20) NOT NULL,
  `prenomLivreur` varchar(20) NOT NULL,
  PRIMARY KEY (`cinLivreur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `libelleP` varchar(50) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` float NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`code`),
  KEY `fk_idCategorie_produit` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `idPromotion` int(11) NOT NULL AUTO_INCREMENT,
  `tauxPromotion` float NOT NULL,
  `descriptionPromotion` varchar(100) NOT NULL,
  `idProduit` int(11) NOT NULL,
  PRIMARY KEY (`idPromotion`),
  KEY `fk_idproduit_promotion` (`idProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `idReclamation` int(11) NOT NULL AUTO_INCREMENT,
  `typeReclamation` varchar(20) NOT NULL,
  `texteReclamation` varchar(1000) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `texteReponse` varchar(1000) NOT NULL,
  `cinUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idReclamation`),
  KEY `fk_cinclient_reclamation` (`cinUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `cin` int(8) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `role` int(11) NOT NULL,
  `dateNaiss` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `numTel` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dateInscription` date NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appreciation`
--
ALTER TABLE `appreciation`
  ADD CONSTRAINT `fk_cinclient_appreciation` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cin`);

--
-- Constraints for table `bandachat`
--
ALTER TABLE `bandachat`
  ADD CONSTRAINT `fk_cinclient_bandachat` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cin`);

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_cinclient_commande` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cin`),
  ADD CONSTRAINT `fk_idproduit_commande` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`code`);

--
-- Constraints for table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `fk_cinClient_evenement` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cin`),
  ADD CONSTRAINT `fk_idcategorieevent_evenement` FOREIGN KEY (`idCategorieEvent`) REFERENCES `categorieevent` (`idCategorieEvent`),
  ADD CONSTRAINT `fk_idpromotion_evenement` FOREIGN KEY (`idPromotion`) REFERENCES `promotion` (`idPromotion`);

--
-- Constraints for table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `fk_cinclient_facture` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cin`);

--
-- Constraints for table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `fk_cinclient_livraison` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cin`),
  ADD CONSTRAINT `fk_cinlivreur_livraison` FOREIGN KEY (`cinLivreur`) REFERENCES `livreur` (`CINLivreur`);

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_idCategorie_produit` FOREIGN KEY (`id`) REFERENCES `categorieproduit` (`id`);

--
-- Constraints for table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `fk_idproduit_promotion` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`code`);

--
-- Constraints for table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `fk_cinclient_reclamation` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
