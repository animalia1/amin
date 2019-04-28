-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 28 avr. 2019 à 03:01
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `animalia`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(50) NOT NULL,
  `type_animaux` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`, `type_animaux`) VALUES
(6, 'hello', 'chiens'),
(4, 'test', 'chats');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom_utilisateur`, `password`, `email`) VALUES
(1, 'rami', '5e26853cb7d7d97fb6ef2d5697b9fbafb0cc718b', 'ramijaiem@gmail.com'),
(2, 'ramy', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'ramijaiem@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `userid` int(30) NOT NULL,
  `productid` int(20) NOT NULL,
  KEY `productid-fk` (`productid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`userid`, `productid`) VALUES
(1, 17),
(1, 20),
(2, 17),
(2, 17);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

DROP TABLE IF EXISTS `ligne_commande`;
CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `produitid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `order_id_fk` int(20) NOT NULL,
  `etat` varchar(11) NOT NULL,
  `date` varchar(40) NOT NULL,
  `id_livreur` int(20) NOT NULL,
  `prix_livraison` int(11) NOT NULL,
  `adresse` varchar(90) NOT NULL,
  `numero` int(20) NOT NULL,
  `zip` int(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  KEY `order_id_fk` (`order_id_fk`),
  KEY `id_livreur` (`id_livreur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`order_id_fk`, `etat`, `date`, `id_livreur`, `prix_livraison`, `adresse`, `numero`, `zip`, `nom`, `prenom`) VALUES
(2, 'pending', '12/43/19', 57, 5, 'X4, Tunis, Tunisie', 123, 123, 'rami', 'jaiem'),
(2, 'pending', 'todaysDate', 57, 3, '14 Avenue Du Roi Abdelaziz, Tunisie', 1234124312, 123124, 'jaiem', 'aksj'),
(2, 'pending', '4 / 22 / 2019', 57, 3, 'Rue Caracalla, Tunis, Tunisie', 123124, 1234, 'testt', 'asf'),
(2, 'pending', '4 / 28 / 2019', 58, 5, '10 Avenue Youssef Rouissi, Tunis, Tunisie', 124, 214, 'test', 'tets');

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `codePostale` varchar(20) NOT NULL,
  `numero` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dateR` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `dispo` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`id`, `nom`, `adresse`, `codePostale`, `numero`, `email`, `dateR`, `salary`, `dispo`) VALUES
(57, 'beji', '3 rue essatouel', '4391', '72918761', 'bejimatrix@gmail.com', '4 / 1 / 2019', '1200', 5),
(58, 'rami', 'ajkshd', '87', '12897348', 'ramijaiem@gmail.com', '4 / 28 / 2019', '868', 4);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur` varchar(50) NOT NULL,
  `prix` int(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`order_id`, `utilisateur`, `prix`, `date`) VALUES
(2, 'ramy', 15, '');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(70) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` varchar(70) NOT NULL,
  `type_animaux` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `description`, `category`, `type_animaux`, `price`, `image`, `date`) VALUES
(17, 'produit1', 'Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. but the majority have suffered alteration in some form, by injected humour', 'test', 'chats', 98, 'images/64875.png', '2019-04-28 02:34:57'),
(19, 'asdc', 'Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. but the majority have suffered alteration in some form, by injected humour', 'test2', 'chats', 123, 'images/Image1.png', '2019-04-28 02:34:57'),
(20, 'll', 'Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. but the majority have suffered alteration in some form, by injected humour', 'test', 'chats', 500, 'images/64875.png', '2019-04-28 02:34:57'),
(24, 'teadf', 'Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. but the majority have suffered alteration in some form, by injected humour', 'test', 'chats', 234, 'images/gg.png', '2019-04-28 02:38:53'),
(25, 'ddd', 'Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. but the majority have suffered alteration in some form, by injected humour', 'hello', 'chats', 213, 'images/fenetre_f.png', '2019-04-28 02:40:57');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`) VALUES
(1, 'ramy', 'jaiem');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `productid-fk` FOREIGN KEY (`productid`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `userid-fk` FOREIGN KEY (`userid`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `livfk` FOREIGN KEY (`id_livreur`) REFERENCES `livreur` (`id`),
  ADD CONSTRAINT `orderfk` FOREIGN KEY (`order_id_fk`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;