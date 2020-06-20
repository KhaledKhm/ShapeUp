-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2020 at 09:54 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorieevent`
--

INSERT INTO `categorieevent` (`idCategorieEvent`, `libelleCategorieEvent`, `descriptionCategorieEvent`) VALUES
(1, 'test', 'test'),
(2, 'test', 'test2'),
(3, 'test', 'test3'),
(4, 'qwe', 'qwe'),
(5, 'test4', 'test4');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorieproduit`
--

INSERT INTO `categorieproduit` (`id`, `libelleC`, `descriptionC`) VALUES
(1, '1', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`idCommande`, `statusCommande`, `idProduit`, `cinUtilisateur`) VALUES
(1, '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `idEvent` int(11) NOT NULL AUTO_INCREMENT,
  `libelleEvent` varchar(100) NOT NULL,
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
  KEY `fk_idcommande_livraison` (`idCommande`),
  KEY `fk_cinlivreur_livraison` (`cinLivreur`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livraison`
--

INSERT INTO `livraison` (`idLivraison`, `destination`, `cinUtilisateur`, `cinLivreur`, `idCommande`) VALUES
(1, 'Bizerte', 1, 88888888, 1),
(3, 'Tunis', 44444444, 11111113, 1),
(4, 'Nabeul', 44444444, 11111115, 1),
(5, 'Bizerte', 44444444, 11415161, 1),
(7, 'Bizerte', 44444444, 11111116, 1);

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

--
-- Dumping data for table `livreur`
--

INSERT INTO `livreur` (`cinLivreur`, `nomLivreur`, `prenomLivreur`) VALUES
(11111113, 'test', 'test'),
(11111115, 'test', 'test'),
(11111116, 'test', 'test'),
(11415161, 'khaled', 'erw'),
(77777777, '77', '77'),
(88888888, '88', '88');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`code`, `libelleP`, `quantite`, `prix`, `id`) VALUES
(1, 'produit1', 10, 200, 1),
(2, 'produit2', 15, 200, 1),
(3, 'produit3', 12, 250, 1);

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
  `datedepartPromotion` varchar(100) NOT NULL,
  `datefinPromotion` varchar(100) NOT NULL,
  PRIMARY KEY (`idPromotion`),
  KEY `fk_idproduit_promotion` (`idProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`idPromotion`, `tauxPromotion`, `descriptionPromotion`, `idProduit`, `datedepartPromotion`, `datefinPromotion`) VALUES
(4, 40, 'Promotion ete!', 1, '06/01/2020', '07/01/2020'),
(5, 40, 'Promotion ete!', 1, '06/01/2020', '07/01/2020'),
(6, 40, 'Promotion hiver!', 1, '11/12/2020', '12/12/2020');

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
  `cinUtilisateur` int(8) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `role` int(11) NOT NULL,
  `dateNaiss` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `numTel` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dateInscription` date NOT NULL,
  PRIMARY KEY (`cinUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`cinUtilisateur`, `nom`, `prenom`, `password`, `sexe`, `role`, `dateNaiss`, `adresse`, `numTel`, `email`, `dateInscription`) VALUES
(1, '2', '3', 'cc3f822cebef2c9542dfaeaa283cd19f', '1', 1, '2020-04-01', '1', 1, '2', '2020-04-15'),
(12, '13', '10', 'bfd92386a1b48076792e68b596846499', '10', 0, '2020-05-02', '10', 10, '10', '2020-05-02'),
(20, '20', '20', '98f13708210194c475687be6106a3b84', '20', 0, '2020-05-03', '20', 20, '20', '2020-05-03'),
(21, '21', '21', '7b74fc6204d5ef422b8b8ee10e5d64a8', '21', 1, '2020-05-02', '10', 10, '10', '2020-05-02'),
(30, '30', '30', 'd3d9446802a44259755d38e6d163e820', 'male', 1, '2020-04-30', '30', 30, '30', '2020-05-03'),
(31, '31', '31', 'd3d9446802a44259755d38e6d163e820', 'male', 0, '2020-05-06', 'bizerte', 1, 'test', '2020-05-13'),
(101, '101', '101', 'c43f193bd3837e500bad9813aab41549', '21', 1, '2020-05-02', '10', 10, '10', '2020-05-02'),
(4444444, 'Maammar', 'Khaled', '698d51a19d8a121ce581499d7b701668', 'Male', 0, '1997-08-06', 'Corniche, Bizerte', 24746877, 'khmthe@gmail.com', '2020-05-05'),
(44444444, 'Maammar', 'Khaled', '202cb962ac59075b964b07152d234b70', 'Male', 0, '1997-08-06', 'Corniche, Bizerte', 24746877, 'khmthe@gmail.com', '2020-05-05'),
(55555555, '55', '55', 'b53b3a3d6ab90ce0268229151c9bde11', '55', 0, '2020-05-27', '55', 55, '55', '2020-05-27');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appreciation`
--
ALTER TABLE `appreciation`
  ADD CONSTRAINT `fk_cinclient_appreciation` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cinUtilisateur`);

--
-- Constraints for table `bandachat`
--
ALTER TABLE `bandachat`
  ADD CONSTRAINT `fk_cinclient_bandachat` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cinUtilisateur`);

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_cinclient_commande` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cinUtilisateur`),
  ADD CONSTRAINT `fk_idproduit_commande` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`code`);

--
-- Constraints for table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `fk_cinClient_evenement` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cinUtilisateur`),
  ADD CONSTRAINT `fk_idcategorieevent_evenement` FOREIGN KEY (`idCategorieEvent`) REFERENCES `categorieevent` (`idCategorieEvent`),
  ADD CONSTRAINT `fk_idpromotion_evenement` FOREIGN KEY (`idPromotion`) REFERENCES `promotion` (`idPromotion`);

--
-- Constraints for table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `fk_cinclient_facture` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cinUtilisateur`);

--
-- Constraints for table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `fk_cinclient_livraison` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cinUtilisateur`),
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
  ADD CONSTRAINT `fk_cinclient_reclamation` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cinUtilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
