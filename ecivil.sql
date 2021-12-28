-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 déc. 2021 à 17:20
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecivil`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `idUser` int(11) NOT NULL,
  `numeroBureau` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `citoyen`
--

CREATE TABLE `citoyen` (
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `conversion`
--

CREATE TABLE `conversion` (
  `idconv` int(11) NOT NULL,
  `annee_en_chiffre` varchar(20) NOT NULL,
  `annee_en_lettre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `conversion`
--

INSERT INTO `conversion` (`idconv`, `annee_en_chiffre`, `annee_en_lettre`) VALUES
(1, '2021', 'deux mille vingt et un'),
(3, '2020', 'deux-mille-vingt'),
(6, '2019', 'Deux mille dix-neuf'),
(8, '2018', 'Deux mille dix-huit'),
(10, '2017', 'Deux mille dix-sept'),
(11, '2016', 'Deux mille seize'),
(14, '2015', 'deux-mille-quinze'),
(15, '2014', 'deux-mille-quatorze'),
(18, '2022', 'Deux mille vingt-deux'),
(20, '2023', 'Deux mille vingt-trois'),
(22, '2024', 'Deux mille vingt-quatre');

-- --------------------------------------------------------

--
-- Structure de la table `conversionmois`
--

CREATE TABLE `conversionmois` (
  `idMon` int(11) NOT NULL,
  `mois_chiffre` int(11) NOT NULL,
  `mois_lettre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `conversionmois`
--

INSERT INTO `conversionmois` (`idMon`, `mois_chiffre`, `mois_lettre`) VALUES
(1, 1, 'janvier'),
(2, 2, 'février'),
(3, 3, 'Mars'),
(4, 4, 'avril'),
(5, 5, 'Mai'),
(6, 6, 'juin'),
(7, 7, 'juillet'),
(8, 8, 'août'),
(9, 9, 'septembre'),
(10, 10, 'octobre'),
(11, 11, 'novembre'),
(12, 12, 'decembre');

-- --------------------------------------------------------

--
-- Structure de la table `conversion_jour`
--

CREATE TABLE `conversion_jour` (
  `idJour` int(11) NOT NULL,
  `jour_chiffre` int(11) NOT NULL,
  `jour_lettre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `conversion_jour`
--

INSERT INTO `conversion_jour` (`idJour`, `jour_chiffre`, `jour_lettre`) VALUES
(1, 1, 'un'),
(2, 2, 'deux'),
(3, 3, 'trois'),
(4, 4, 'quatre'),
(5, 5, 'cinq'),
(6, 6, 'six'),
(7, 7, 'sept'),
(8, 8, 'huit'),
(9, 9, 'neuf'),
(10, 10, 'dix'),
(11, 11, 'onze'),
(12, 12, 'douze'),
(13, 13, 'treize'),
(14, 14, 'quatorze'),
(15, 15, 'quinze'),
(16, 16, 'seize'),
(17, 17, 'dix-sept'),
(18, 18, 'dix-huit'),
(19, 19, 'dix-neuf'),
(20, 20, 'vingt '),
(21, 21, 'Vingt-et-un'),
(22, 22, 'vingt-deux'),
(23, 23, 'vingt-trois'),
(24, 24, 'vingt-quatre'),
(25, 25, 'vingt-cinq'),
(26, 26, 'vingt-six'),
(27, 27, 'vingt-sept'),
(28, 28, 'vingt-huit'),
(29, 29, 'vingt-neuf'),
(30, 30, 'trente'),
(31, 31, 'trente et un');

-- --------------------------------------------------------

--
-- Structure de la table `declaration`
--

CREATE TABLE `declaration` (
  `numDeclaration` int(11) NOT NULL,
  `idRegistre` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `Age_idUser` int(11) NOT NULL,
  `Off_idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `declarationdeces`
--

CREATE TABLE `declarationdeces` (
  `numDeclaration` int(11) NOT NULL,
  `prenomDuDeclarant` varchar(254) DEFAULT NULL,
  `nomDuDeclarant` varchar(254) DEFAULT NULL,
  `lienDeParenteAvecLeDefunt` varchar(254) DEFAULT NULL,
  `dateDeDeces` timestamp NULL DEFAULT NULL,
  `heureDeDeces` varchar(254) DEFAULT NULL,
  `dateDeDeclaration` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `declarationnaissance`
--

CREATE TABLE `declarationnaissance` (
  `numDeclaration` int(11) NOT NULL,
  `numCompte` int(11) NOT NULL,
  `lienDeParente` varchar(20) DEFAULT NULL,
  `etat` int(11) NOT NULL,
  `date_declaration` datetime DEFAULT NULL,
  `etat_rejet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `declarationnaissance`
--

INSERT INTO `declarationnaissance` (`numDeclaration`, `numCompte`, `lienDeParente`, `etat`, `date_declaration`, `etat_rejet`) VALUES
(171, 3, 'pere', 0, '2021-12-23 00:00:00', 1),
(172, 11, 'pere', 0, '2021-12-23 00:00:00', 1),
(173, 11, 'pere', 0, '2021-12-23 00:00:00', 1),
(174, 11, 'pere', 1, '2021-12-23 22:27:08', 0),
(175, 13, 'pere', 1, '2021-12-23 22:31:03', 0),
(176, 11, 'pere', 1, '2021-12-23 23:02:36', 0),
(177, 11, 'pere', 1, '2021-12-23 23:53:12', 0),
(178, 11, 'pere', 1, '2021-12-24 11:28:53', 0),
(180, 11, 'pere', 0, '2021-12-27 22:36:40', 0),
(181, 3, 'pere', 1, '2021-12-27 22:55:58', 0),
(182, 11, 'pere', 1, '2021-12-28 01:25:31', 0);

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `numDemande` int(11) NOT NULL,
  `numDeclaration` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `Age_idUser` int(11) DEFAULT NULL,
  `Off_idUser` int(11) NOT NULL,
  `nombreCopies` int(11) DEFAULT NULL,
  `dateDemande` timestamp NULL DEFAULT NULL,
  `etat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `demandeactededeces`
--

CREATE TABLE `demandeactededeces` (
  `numDemande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `demandeactedemariage`
--

CREATE TABLE `demandeactedemariage` (
  `numDemande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `demandeactedenaissance`
--

CREATE TABLE `demandeactedenaissance` (
  `numDemande` int(11) NOT NULL,
  `numCompte` int(11) DEFAULT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `numeroDeRegistre` int(11) DEFAULT NULL,
  `annee_registre` varchar(4) NOT NULL,
  `etat_demande` int(11) NOT NULL,
  `nbre_copie` int(11) NOT NULL,
  `typePapier` varchar(50) DEFAULT NULL,
  `methode_paiement` varchar(40) NOT NULL,
  `date_demande` date DEFAULT NULL,
  `etat_paiement` int(11) NOT NULL,
  `etat_transmission` int(11) NOT NULL,
  `etat_retour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demandeactedenaissance`
--

INSERT INTO `demandeactedenaissance` (`numDemande`, `numCompte`, `nom`, `prenom`, `numeroDeRegistre`, `annee_registre`, `etat_demande`, `nbre_copie`, `typePapier`, `methode_paiement`, `date_demande`, `etat_paiement`, `etat_transmission`, `etat_retour`) VALUES
(38, 11, 'DIOP', 'Abdoulaye', 4, '2021', 1, 1, 'Extrait de naissance', 'Livraison', '2021-12-03', 1, 1, 1),
(39, 11, 'DIOP', 'Abdoulaye', 3, '2020', 1, 1, 'Extrait de naissance', 'Sur Place', '2021-12-06', 1, 0, 0),
(41, 11, 'SOW', 'Fatou', 2, '2020', 1, 1, 'Extrait de naissance', 'Livraison', '2021-12-07', 0, 0, 0),
(42, 11, 'SOW', 'Fatou', 2, '2020', 0, 1, 'Extrait de naissance', 'Livraison', '2021-12-07', 0, 0, 0),
(43, 3, 'Niang', 'Isseu', 1, '2020', 1, 1, 'Extrait de naissance', 'Livraison', '2021-12-08', 0, 0, 0),
(44, 3, 'SOW', 'Fatou', 2, '2020', 1, 1, 'Extrait de naissance', 'Livraison', '2021-12-08', 1, 1, 2),
(52, 11, 'SOW', 'Fatou', 2, '2020', 1, 1, 'Extrait de naissance', 'Livraison', '2021-12-11', 1, 1, 1),
(56, 11, 'DIOP', 'Abdoulaye', 3, '2020', 0, 1, 'Extrait de naissance', 'Sur Place', '2021-12-26', 0, 0, 0),
(57, 3, 'SOW', 'Fatou', 2, '2020', 0, 1, 'Extrait de naissance', 'Sur Place', '2021-12-26', 0, 0, 0),
(58, 3, 'SOW', 'Fatou', 2, '2020', 0, 1, 'Extrait de naissance', 'Sur Place', '2021-12-26', 0, 0, 0),
(59, 3, 'DIOP', 'Abdoulaye', 3, '2020', 1, 1, 'Extrait de naissance', 'Livraison', '2021-12-26', 1, 1, 0),
(60, 11, 'Niang', 'Isseu', 1, '2020', 1, 1, 'Extrait de naissance', 'Livraison', '2021-12-26', 1, 1, 1),
(61, 11, 'DIOP', 'Abdoulaye', 3, '2020', 1, 1, 'Extrait de naissance', 'Livraison', '2021-12-28', 1, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `justificatif`
--

CREATE TABLE `justificatif` (
  `idjustif` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `idRegistre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `justificatif`
--

INSERT INTO `justificatif` (`idjustif`, `libelle`, `url`, `idRegistre`) VALUES
(11, 'Carte National d’identité du pére', 'photos/06122021132143_cni.jpg', 18),
(12, 'Carte National d’identité de la mére', 'photos/06122021132143_pm.jfif', 18),
(13, 'Certificat d\'accouchement', 'photos/06122021132143_accouchement.jpg', 18),
(17, 'Carte National d’identité du pére', 'photos/06122021225154_pm.jfif', 20),
(18, 'Carte National d’identité de la mére', 'photos/06122021225154_cartem.jpg', 20),
(19, 'Certificat d\'accouchement', 'photos/06122021225154_pc.jfif', 20),
(26, 'Carte National d’identité du pére', 'photos/24122021130642_pp.jfif', 23),
(27, 'Carte National d’identité de la mére', 'photos/24122021130642_cartem.jpg', 23),
(28, 'Certificat d\'accouchement', 'photos/24122021130642_accouchement.jpg', 23);

-- --------------------------------------------------------

--
-- Structure de la table `justification`
--

CREATE TABLE `justification` (
  `idJustificatif` int(11) NOT NULL,
  `numDeclaration` int(11) NOT NULL,
  `url` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `justification`
--

INSERT INTO `justification` (`idJustificatif`, `numDeclaration`, `url`) VALUES
(266, 171, 'photos/23122021213058_accouchement.jpg'),
(267, 171, 'photos/23122021213058_pm.jfif'),
(268, 171, 'photos/23122021213058_image.jfif'),
(269, 172, 'photos/23122021213332_accouchement.jpg'),
(270, 172, 'photos/23122021213332_cap7 (4).jpg'),
(271, 172, 'photos/23122021213332_cap2.png'),
(272, 173, 'photos/23122021213807_accouchement.jpg'),
(273, 173, 'photos/23122021213807_cartem.jpg'),
(274, 173, 'photos/23122021213807_image.jfif'),
(275, 174, 'photos/23122021222708_accouchement.jpg'),
(276, 174, 'photos/23122021222708_bb.webp'),
(277, 174, 'photos/23122021222708_bb1.webp'),
(278, 175, 'photos/23122021223103_accouchement.jpg'),
(279, 175, 'photos/23122021223103_bb.webp'),
(280, 175, 'photos/23122021223103_cap9.jpg'),
(281, 176, 'photos/23122021230236_accouchement.jpg'),
(282, 176, 'photos/23122021230236_pm.jfif'),
(283, 176, 'photos/23122021230236_cni.jpg'),
(284, 177, 'photos/23122021235312_accouchement.jpg'),
(285, 177, 'photos/23122021235312_pm.jfif'),
(286, 177, 'photos/23122021235312_image.jfif'),
(287, 178, 'photos/24122021112853_accouchement.jpg'),
(288, 178, 'photos/24122021112853_cartem.jpg'),
(289, 178, 'photos/24122021112853_cni.jpg'),
(290, 179, 'photos/24122021113509_accouchement.jpg'),
(291, 179, 'photos/24122021113509_cartem.jpg'),
(292, 179, 'photos/24122021113509_pp.jfif'),
(293, 180, 'photos/27122021223640_accouchement.jpg'),
(294, 180, 'photos/27122021223640_image.jfif'),
(295, 180, 'photos/27122021223640_cni.jpg'),
(296, 181, 'photos/27122021225558_accouchement.jpg'),
(297, 181, 'photos/27122021225558_pm.jfif'),
(298, 181, 'photos/27122021225558_pp.jfif'),
(299, 182, 'photos/28122021012531_c.png'),
(300, 182, 'photos/28122021012531_bg-heading-03.jpg'),
(301, 182, 'photos/28122021012531_bg-heading-03.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `idLivraison` int(11) NOT NULL,
  `numDemande` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `dateLivraison` date DEFAULT NULL,
  `etat` int(11) DEFAULT NULL,
  `adresse` varchar(254) DEFAULT NULL,
  `numTel` int(11) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`idLivraison`, `numDemande`, `idUser`, `dateLivraison`, `etat`, `adresse`, `numTel`, `prenom`, `nom`) VALUES
(1, 42, 11, NULL, 0, 'Touba', 781195114, 'Baye Serigne', 'Seck'),
(2, 42, 11, NULL, 0, 'Touba', 781195114, 'Baye Serigne', 'Seck'),
(3, 44, 3, NULL, 0, 'Dakar', 784460284, 'Fatou', 'SOUNG'),
(4, 61, 11, NULL, 0, 'Touba', 781195114, 'Baye Serigne', 'Seck');

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

CREATE TABLE `livreur` (
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `officier`
--

CREATE TABLE `officier` (
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `numPaiement` int(11) NOT NULL,
  `numDemande` int(11) NOT NULL,
  `modePaiement` varchar(254) DEFAULT NULL,
  `montant` int(11) DEFAULT NULL,
  `etat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `payer_id` varchar(255) NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `num_demande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `payer_id`, `payer_email`, `amount`, `currency`, `payment_status`, `num_demande`) VALUES
(9, 'PAYID-MGTT5HQ3Y9859553D880710X', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 31),
(10, 'PAYID-MGTUERA12U796968A970520X', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 31),
(11, 'PAYID-MGVBTDY3UC91397VC169472L', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 36),
(12, 'PAYID-MGVB3TI5LD802907D9896253', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 36),
(13, 'PAYID-MGVB4FY44050217AP026522U', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 36),
(14, 'PAYID-MGVB7QQ81H79785GD3498904', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 35),
(15, 'PAYID-MGVCWPA1RT61605U81080408', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 37),
(16, 'PAYID-MGVDVVI4DS58485N3516525M', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 38),
(17, 'PAYID-MGXTO6Q3X946274677972736', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 39),
(18, 'PAYID-MGX45DA30D26501LH887704X', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 41),
(19, 'PAYID-MGX6OEI8KM422263G3587904', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 42),
(20, 'PAYID-MGX63CY50Y99778WC9779911', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 42),
(21, 'PAYID-MGYL3WQ1PF19282HJ772824U', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 44),
(22, 'PAYID-MG2KYZA13H01579M4567693T', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 52),
(23, 'PAYID-MHD4OIQ7DW84206GA0045249', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 59),
(24, 'PAYID-MHD44LY628051046U018453C', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 60),
(25, 'PAYID-MHFITYI61860322CD088484L', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 60),
(26, 'PAYID-MHFSIJA8X5710185G9168848', 'GKQWMCN4H5YFQ', 'okalandaw@gmail.com', 300.00, 'USD', 'approved', 61);

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `idRdv` int(11) NOT NULL,
  `DateRdv` date DEFAULT NULL,
  `numCompte` int(11) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `heureDebut` time NOT NULL,
  `heureFin` time NOT NULL,
  `etatRdv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`idRdv`, `DateRdv`, `numCompte`, `type`, `heureDebut`, `heureFin`, `etatRdv`) VALUES
(111, '2021-12-25', 11, 'Declaration de Naissance', '11:00:00', '11:30:00', 1),
(112, '2021-12-31', 3, 'Declaration de Naissance', '10:10:00', '10:30:00', 0),
(113, '2021-12-29', 11, 'Declaration de Naissance', '10:05:00', '10:20:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `registre`
--

CREATE TABLE `registre` (
  `idRegistre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `registremariage`
--

CREATE TABLE `registremariage` (
  `idRegistre` int(11) NOT NULL,
  `prenomEpoux` varchar(254) DEFAULT NULL,
  `nomEpoux` varchar(254) DEFAULT NULL,
  `dateNaissEpoux` timestamp NULL DEFAULT NULL,
  `lieuNaissEpoux` timestamp NULL DEFAULT NULL,
  `professionEpoux` varchar(254) DEFAULT NULL,
  `domicileEpoux` varchar(254) DEFAULT NULL,
  `prenomPereEpoux` varchar(254) DEFAULT NULL,
  `nomPereEpoux` varchar(254) DEFAULT NULL,
  `jobPereMari` varchar(254) DEFAULT NULL,
  `domicilePereMari` varchar(254) DEFAULT NULL,
  `prenomMereMari` varchar(254) DEFAULT NULL,
  `jobPereEpouse` varchar(254) DEFAULT NULL,
  `nomMereMari` varchar(254) DEFAULT NULL,
  `jobMereMari` varchar(254) DEFAULT NULL,
  `domicileMereMari` varchar(254) DEFAULT NULL,
  `prenomEpouse` varchar(254) DEFAULT NULL,
  `nomEpouse` varchar(254) DEFAULT NULL,
  `dateNaissEpouse` timestamp NULL DEFAULT NULL,
  `lieuNaissEpouse` timestamp NULL DEFAULT NULL,
  `professionEpouse` varchar(254) DEFAULT NULL,
  `domicileEpouse` varchar(254) DEFAULT NULL,
  `prenomPereFem` varchar(254) DEFAULT NULL,
  `nomPereFem` varchar(254) DEFAULT NULL,
  `jobPereFem` varchar(254) DEFAULT NULL,
  `domicilePereFem` varchar(254) DEFAULT NULL,
  `prenomMereFem` varchar(254) DEFAULT NULL,
  `nomMereFem` varchar(254) DEFAULT NULL,
  `jobMereFem` varchar(254) DEFAULT NULL,
  `domicileMereFem` varchar(254) DEFAULT NULL,
  `reg1` varchar(254) DEFAULT NULL,
  `reg2` varchar(254) DEFAULT NULL,
  `dateMariage` timestamp NULL DEFAULT NULL,
  `dateDemande` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `registrenaissance`
--

CREATE TABLE `registrenaissance` (
  `idRegistre` int(11) NOT NULL,
  `annee_registre` varchar(4) NOT NULL,
  `num_registre` int(11) NOT NULL,
  `type_declaration` varchar(255) NOT NULL,
  `date_declaration` date NOT NULL,
  `num_jugement` int(11) NOT NULL,
  `date_jugement` date NOT NULL,
  `prenom_enfant` varchar(255) NOT NULL,
  `nom_enfant` varchar(255) NOT NULL,
  `sexe_enfant` varchar(20) NOT NULL,
  `date_naissance_enfant` date NOT NULL,
  `heure_naissance_enfant` time NOT NULL,
  `structure_naissance` varchar(255) DEFAULT NULL,
  `lieu_naissance_enfant` varchar(40) NOT NULL,
  `nbr_naissance` int(11) NOT NULL,
  `cni_pere` int(11) NOT NULL,
  `prenom_pere` varchar(255) NOT NULL,
  `nom_pere` varchar(255) NOT NULL,
  `date_naissance_pere` date NOT NULL,
  `lieu_naissance_pere` varchar(255) NOT NULL,
  `domicile_pere` varchar(255) NOT NULL,
  `profession_pere` varchar(255) NOT NULL,
  `cni_mere` int(11) NOT NULL,
  `prenom_mere` varchar(255) NOT NULL,
  `nom_mere` varchar(255) NOT NULL,
  `date_naissance_mere` date NOT NULL,
  `lieu_naissance_mere` varchar(100) NOT NULL,
  `domicile_mere` varchar(100) NOT NULL,
  `profession_mere` varchar(100) NOT NULL,
  `parent` varchar(10) NOT NULL,
  `pere_mere` varchar(10) NOT NULL,
  `cni_declarant` int(11) NOT NULL,
  `prenom_declarant` varchar(100) NOT NULL,
  `nom_declarant` varchar(100) NOT NULL,
  `date_naissance_declarant` date NOT NULL,
  `lieu_naissance_declarant` varchar(100) NOT NULL,
  `domicile_declarant` varchar(100) NOT NULL,
  `profession_declarant` varchar(100) NOT NULL,
  `degre_parente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `registrenaissance`
--

INSERT INTO `registrenaissance` (`idRegistre`, `annee_registre`, `num_registre`, `type_declaration`, `date_declaration`, `num_jugement`, `date_jugement`, `prenom_enfant`, `nom_enfant`, `sexe_enfant`, `date_naissance_enfant`, `heure_naissance_enfant`, `structure_naissance`, `lieu_naissance_enfant`, `nbr_naissance`, `cni_pere`, `prenom_pere`, `nom_pere`, `date_naissance_pere`, `lieu_naissance_pere`, `domicile_pere`, `profession_pere`, `cni_mere`, `prenom_mere`, `nom_mere`, `date_naissance_mere`, `lieu_naissance_mere`, `domicile_mere`, `profession_mere`, `parent`, `pere_mere`, `cni_declarant`, `prenom_declarant`, `nom_declarant`, `date_naissance_declarant`, `lieu_naissance_declarant`, `domicile_declarant`, `profession_declarant`, `degre_parente`) VALUES
(18, '2020', 1, 'normale', '2021-12-06', 0, '0000-00-00', 'Isseu', 'Niang', 'FEMININ', '2021-11-29', '13:20:00', 'Structure sanitaire publique', 'Diamaguene', 1, 2147483647, 'Demba', 'Niang', '2005-01-06', 'Diamaguene', 'Diamaguene', 'dentiste', 2147483647, 'Aminata', 'DIOP', '1983-02-06', 'Louga', 'keur Massar', 'commerçante', 'oui', 'pere', 2147483647, 'Demba', 'Niang', '2005-01-06', 'Diamaguene', 'Diamaguene', 'dentiste', 'Pere'),
(20, '2020', 2, 'normale', '2021-12-06', 0, '0000-00-00', 'Fatou', 'SOW', 'FEMININ', '2021-11-29', '00:47:00', 'Structure sanitaire publique', 'Diamaguene', 1, 2147483647, 'Mounty', 'SOW', '1960-10-06', 'Diamaguene', 'Diamaguene', 'dentiste', 2147483647, 'Khady', 'BOYE', '1959-06-06', 'Dakar', 'Ndande', 'commerçante', 'oui', 'pere', 2147483647, 'Mounty', 'SOW', '1960-10-06', 'Diamaguene', 'Diamaguene', 'dentiste', 'Pere'),
(23, '2020', 3, 'normale', '2021-12-24', 0, '0000-00-00', 'Abdoulaye', 'DIOP', 'MASCULIN', '2021-12-13', '13:03:00', 'Structure sanitaire publique', 'Diamaguene', 1, 2147483647, 'Moustapha', 'DIOP', '1977-06-08', 'Ndande', 'Grand ndande', 'dentiste', 2147483647, 'SOW', 'Fatou', '1970-01-24', 'nganda', 'Diamaguene', 'commerçante', 'oui', 'pere', 2147483647, 'Moustapha', 'DIOP', '1977-06-08', 'Ndande', 'Grand ndande', 'dentiste', 'Pere');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `adresse` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `numTel` decimal(10,0) DEFAULT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `etat` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `nom`, `prenom`, `adresse`, `email`, `numTel`, `login`, `password`, `profil`, `etat`) VALUES
(2, 'SOW', 'Fatou', 'Parcelles Assainies', 'sowfatouu022@gmail.com', '772267403', 'loginAdmin', '123456', 'admin', 1),
(3, 'SOUNG', 'Fatou', 'Dakar', 'mamitasoung@gmail.com', '784460284', 'soungfatou98', '1234', 'citoyen', 1),
(5, 'Faye', 'Dieyna', 'Dakar', 'sowfatou022@gmail.com', '772267403', 'fayedieyna', '1234', 'agent', 1),
(6, 'Faye', 'dieynaba', 'Dakar', 'sowfatou022@gmail.com', '772267403', 'fayedieynaba', '1234', 'citoyen', 1),
(7, 'LY', 'Abdoulaye', 'Dakar', 'sowfatou022@gmail.com', '784460284', 'lyAbdoulaye', '123', 'officier', 1),
(11, 'Seck', 'Baye Serigne', 'Touba', 'bayeserigneseck40@gmail.com', '781195114', 'bayeSeck', '12345', 'citoyen', 1),
(13, 'Cissé', 'Mame khady', 'Nganda', 'mameKhady@gmail.com', '7790533333', 'khadyCisse', '12345', 'citoyen', 0),
(19, 'Fall', 'Samba', 'Dakar', 'fallsamba@gmail.com', '76468900', 'fallsamba', 'U$a7DM%h', 'livreur', 1),
(24, 'MBAYE', 'Kéba', 'Dakar', 'mbayekeba@gmail.com', '772267403', 'mbayekeba', '@A3OP$N7', 'livreur', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`idUser`);

--
-- Index pour la table `citoyen`
--
ALTER TABLE `citoyen`
  ADD PRIMARY KEY (`idUser`);

--
-- Index pour la table `conversion`
--
ALTER TABLE `conversion`
  ADD PRIMARY KEY (`idconv`);

--
-- Index pour la table `conversionmois`
--
ALTER TABLE `conversionmois`
  ADD PRIMARY KEY (`idMon`);

--
-- Index pour la table `conversion_jour`
--
ALTER TABLE `conversion_jour`
  ADD PRIMARY KEY (`idJour`);

--
-- Index pour la table `declaration`
--
ALTER TABLE `declaration`
  ADD PRIMARY KEY (`numDeclaration`),
  ADD UNIQUE KEY `DECLARATION_PK` (`numDeclaration`),
  ADD KEY `ASSOCIATION4_FK` (`Age_idUser`),
  ADD KEY `ASSOCIATION8_FK` (`idUser`),
  ADD KEY `VALIDER_FK` (`Off_idUser`),
  ADD KEY `ASSOCIATION12_FK` (`idRegistre`);

--
-- Index pour la table `declarationdeces`
--
ALTER TABLE `declarationdeces`
  ADD PRIMARY KEY (`numDeclaration`);

--
-- Index pour la table `declarationnaissance`
--
ALTER TABLE `declarationnaissance`
  ADD PRIMARY KEY (`numDeclaration`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`numDemande`),
  ADD UNIQUE KEY `DEMANDE_PK` (`numDemande`),
  ADD KEY `CONCERNE_FK` (`numDeclaration`),
  ADD KEY `ASSOCIATION6_FK` (`Age_idUser`),
  ADD KEY `ASSOCIATION10_FK` (`idUser`),
  ADD KEY `ASSOCIATION11_FK` (`Off_idUser`);

--
-- Index pour la table `demandeactededeces`
--
ALTER TABLE `demandeactededeces`
  ADD PRIMARY KEY (`numDemande`);

--
-- Index pour la table `demandeactedemariage`
--
ALTER TABLE `demandeactedemariage`
  ADD PRIMARY KEY (`numDemande`);

--
-- Index pour la table `demandeactedenaissance`
--
ALTER TABLE `demandeactedenaissance`
  ADD PRIMARY KEY (`numDemande`);

--
-- Index pour la table `justificatif`
--
ALTER TABLE `justificatif`
  ADD PRIMARY KEY (`idjustif`),
  ADD KEY `fk_col_ref` (`idRegistre`);

--
-- Index pour la table `justification`
--
ALTER TABLE `justification`
  ADD PRIMARY KEY (`idJustificatif`),
  ADD UNIQUE KEY `JUSTIFICATION_PK` (`idJustificatif`),
  ADD KEY `ASSOCIATION5_FK` (`numDeclaration`) USING BTREE;

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`idLivraison`),
  ADD UNIQUE KEY `LIVRAISON_PK` (`idLivraison`),
  ADD KEY `ASSOCIATION2_FK` (`numDemande`),
  ADD KEY `ASSOCIATION3_FK` (`idUser`);

--
-- Index pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`idUser`);

--
-- Index pour la table `officier`
--
ALTER TABLE `officier`
  ADD PRIMARY KEY (`idUser`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`numPaiement`),
  ADD UNIQUE KEY `PAIEMENT_PK` (`numPaiement`),
  ADD KEY `ASSOCIATION7_FK` (`numDemande`);

--
-- Index pour la table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`idRdv`),
  ADD KEY `fk_rdv` (`numCompte`);

--
-- Index pour la table `registre`
--
ALTER TABLE `registre`
  ADD PRIMARY KEY (`idRegistre`),
  ADD UNIQUE KEY `AK_IDREGISTE_REGISTRE` (`idRegistre`),
  ADD UNIQUE KEY `REGISTRE_PK` (`idRegistre`);

--
-- Index pour la table `registremariage`
--
ALTER TABLE `registremariage`
  ADD PRIMARY KEY (`idRegistre`);

--
-- Index pour la table `registrenaissance`
--
ALTER TABLE `registrenaissance`
  ADD PRIMARY KEY (`idRegistre`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `USERS_PK` (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `conversion`
--
ALTER TABLE `conversion`
  MODIFY `idconv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `conversionmois`
--
ALTER TABLE `conversionmois`
  MODIFY `idMon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `conversion_jour`
--
ALTER TABLE `conversion_jour`
  MODIFY `idJour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `declarationnaissance`
--
ALTER TABLE `declarationnaissance`
  MODIFY `numDeclaration` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT pour la table `demandeactedenaissance`
--
ALTER TABLE `demandeactedenaissance`
  MODIFY `numDemande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT pour la table `justificatif`
--
ALTER TABLE `justificatif`
  MODIFY `idjustif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `justification`
--
ALTER TABLE `justification`
  MODIFY `idJustificatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `idLivraison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `idRdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT pour la table `registrenaissance`
--
ALTER TABLE `registrenaissance`
  MODIFY `idRegistre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `FK_AGENT_GENERALIS_USERS` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `justificatif`
--
ALTER TABLE `justificatif`
  ADD CONSTRAINT `fk_col_ref` FOREIGN KEY (`idRegistre`) REFERENCES `registrenaissance` (`idRegistre`);

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `fk_rdv` FOREIGN KEY (`numCompte`) REFERENCES `users` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
