-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 05 Février 2017 à 19:02
-- Version du serveur :  5.7.17-0ubuntu0.16.04.1
-- Version de PHP :  7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `pizAioli_admin`
--

CREATE TABLE `pizAioli_admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pizzasListPizza` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pizAioli_base`
--

CREATE TABLE `pizAioli_base` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pizAioli_base`
--

INSERT INTO `pizAioli_base` (`id`, `nom`) VALUES
(1, 'blanche'),
(2, 'rouge'),
(3, 'exotique');

-- --------------------------------------------------------

--
-- Structure de la table `pizAioli_client`
--

CREATE TABLE `pizAioli_client` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pizzasFavoritesListePizza` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pizAioli_client`
--

INSERT INTO `pizAioli_client` (`id`, `nom`, `prenom`, `adresse`, `telephone`, `email`, `avatar`, `pizzasFavoritesListePizza`) VALUES
(1, 'françois', 'michou', '16 rue de la gerbe', '0612345678', 'azerty@gmail.com', 'avatarrrrrrrrrr', 'je kiffe cette pizza');

-- --------------------------------------------------------

--
-- Structure de la table `pizAioli_commande`
--

CREATE TABLE `pizAioli_commande` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `heure` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_livreur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresses_livraison` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fk_pizza` int(11) DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `nom_client` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fk_modepaiement` int(11) DEFAULT NULL,
  `fk_statut` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pizAioli_commande`
--

INSERT INTO `pizAioli_commande` (`id`, `date`, `heure`, `nom_livreur`, `message`, `adresses_livraison`, `fk_pizza`, `fk_user`, `nom_client`, `fk_modepaiement`, `fk_statut`) VALUES
(26, '2017-02-24 00:00:00', '16:16', 'Michel', 'weshhh', '16 rue de la gerbe', 1, NULL, '', NULL, NULL),
(27, '2017-02-18 00:00:00', '16:16', 'Michel', 'j\'ai faim', '16 rue de la gerbe', 1, NULL, 'test', NULL, NULL),
(28, '2017-02-09 00:00:00', '16:16', 'Michel', 'weshhh', '16 rue de la gerbe', 1, NULL, 'test', NULL, NULL),
(29, '2017-02-16 00:00:00', '16:16', 'Michel', 'weshhh', '16 rue de la gerbe', 1, NULL, 'test', NULL, NULL),
(30, '2017-02-05 00:00:00', '16:16', 'Michel', 'weshhh', '16 rue de la gerbe', 1, NULL, 'test', NULL, NULL),
(31, '2017-02-05 00:00:00', '16:16', 'Michel', 'weshhh', '16 rue de la gerbe', 1, NULL, 'test', NULL, NULL),
(32, '2017-02-05 00:00:00', '16:16', 'Michel', 'weshhh', '16 rue de la gerbe', 1, NULL, 'test', NULL, NULL),
(33, '2017-02-05 00:00:00', '16:16', 'Michel', 'weshhh', '16 rue de la gerbe', 1, NULL, 'test', NULL, NULL),
(34, '2017-02-05 00:00:00', '16:16', 'Robert', 'j\'ai faim', '16 rue de la gerbe', 1, NULL, 'test', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pizAioli_enseigne`
--

CREATE TABLE `pizAioli_enseigne` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `horaires` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pizAioli_enseigne`
--

INSERT INTO `pizAioli_enseigne` (`id`, `nom`, `horaires`, `telephone`) VALUES
(1, 'pizAioli', '6h-19h', '04 12 34 56 78');

-- --------------------------------------------------------

--
-- Structure de la table `pizAioli_fos_user`
--

CREATE TABLE `pizAioli_fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pizzasFavoritesListePizza` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pizAioli_fos_user`
--

INSERT INTO `pizAioli_fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `nom`, `prenom`, `adresse`, `telephone`, `avatar`, `pizzasFavoritesListePizza`) VALUES
(1, 'admin', 'admin', 'h@h.com', 'h@h.com', 1, 'SZB8up8t1hnoFpU5Z6UT4DgrMHkoWtUDrI8pBoTjoFU', 'admin{SZB8up8t1hnoFpU5Z6UT4DgrMHkoWtUDrI8pBoTjoFU}', '2017-02-05 15:34:57', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', '', '', '', '', '', ''),
(2, 'user', 'user', 'user@user.com', 'user@user.com', 1, 'O5Ux4iVJfvezATIz894TRPS1O8QdsDKEJWp5dTod9iw', 'user{O5Ux4iVJfvezATIz894TRPS1O8QdsDKEJWp5dTod9iw}', '2017-02-04 15:49:27', NULL, NULL, 'a:0:{}', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `pizAioli_ingredients`
--

CREATE TABLE `pizAioli_ingredients` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pizAioli_ingredients`
--

INSERT INTO `pizAioli_ingredients` (`id`, `nom`) VALUES
(1, 'champignon'),
(2, 'mozza'),
(3, 'roquefort'),
(4, 'viande');

-- --------------------------------------------------------

--
-- Structure de la table `pizAioli_mode_paiement`
--

CREATE TABLE `pizAioli_mode_paiement` (
  `id` int(11) NOT NULL,
  `mode` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pizAioli_mode_paiement`
--

INSERT INTO `pizAioli_mode_paiement` (`id`, `mode`) VALUES
(1, 'Carte Bancaire'),
(2, 'Espèce'),
(3, 'Chèque');

-- --------------------------------------------------------

--
-- Structure de la table `pizAioli_pizza`
--

CREATE TABLE `pizAioli_pizza` (
  `id` int(11) NOT NULL,
  `nom_pizza` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ingredients` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fk_taille` int(11) DEFAULT NULL,
  `fk_base` int(11) DEFAULT NULL,
  `fk_supp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pizAioli_pizza`
--

INSERT INTO `pizAioli_pizza` (`id`, `nom_pizza`, `ingredients`, `prix`, `image`, `fk_taille`, `fk_base`, `fk_supp`) VALUES
(1, 'Eruption Volcanique', 'lave,lave,lave,lave,lave', '10', 'f0dfca31ec97d11c05cd835ebc455fbb.jpg', 3, 2, 1),
(2, 'amere-indien', 'attaque,attaque,attaque,attaque', '8', 'b92a4c6048a061d6c3d9a663c17de406.jpg', 2, 2, 1),
(12, 'Fromage', 'fromage,fromage,fromage,fromage,fromage', '10', '2572ee17bc5fa142b5ae2925c732eb40.jpg', 2, 1, 2),
(13, 'cochon', 'porc fromage', '1', '0a85c86a61d4fe5fd006d6ef20ae645e.jpg', 2, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `pizAioli_statut`
--

CREATE TABLE `pizAioli_statut` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pizAioli_statut`
--

INSERT INTO `pizAioli_statut` (`id`, `nom`) VALUES
(1, 'Vu'),
(2, 'En cours'),
(3, 'Terminé');

-- --------------------------------------------------------

--
-- Structure de la table `pizAioli_taille`
--

CREATE TABLE `pizAioli_taille` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pizAioli_taille`
--

INSERT INTO `pizAioli_taille` (`id`, `nom`) VALUES
(1, 'petite'),
(2, 'moyenne'),
(3, 'grande');

-- --------------------------------------------------------

--
-- Structure de la table `pizAioli_user`
--

CREATE TABLE `pizAioli_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pizAioli_admin`
--
ALTER TABLE `pizAioli_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pizAioli_base`
--
ALTER TABLE `pizAioli_base`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pizAioli_client`
--
ALTER TABLE `pizAioli_client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pizAioli_commande`
--
ALTER TABLE `pizAioli_commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F63BF293E30A11A` (`fk_pizza`),
  ADD KEY `IDX_F63BF2931AD0877` (`fk_user`),
  ADD KEY `IDX_F63BF29335DF0EF8` (`fk_modepaiement`),
  ADD KEY `IDX_F63BF293C5CA982F` (`fk_statut`);

--
-- Index pour la table `pizAioli_enseigne`
--
ALTER TABLE `pizAioli_enseigne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pizAioli_fos_user`
--
ALTER TABLE `pizAioli_fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_DAB309792FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_DAB3097A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_DAB3097C05FB297` (`confirmation_token`);

--
-- Index pour la table `pizAioli_ingredients`
--
ALTER TABLE `pizAioli_ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pizAioli_mode_paiement`
--
ALTER TABLE `pizAioli_mode_paiement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pizAioli_pizza`
--
ALTER TABLE `pizAioli_pizza`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A86CA7D356FEE3A8` (`fk_taille`),
  ADD KEY `IDX_A86CA7D34C8A205F` (`fk_base`),
  ADD KEY `IDX_A86CA7D3F9F0AC21` (`fk_supp`);

--
-- Index pour la table `pizAioli_statut`
--
ALTER TABLE `pizAioli_statut`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pizAioli_taille`
--
ALTER TABLE `pizAioli_taille`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pizAioli_user`
--
ALTER TABLE `pizAioli_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E1FCA6D2F85E0677` (`username`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pizAioli_admin`
--
ALTER TABLE `pizAioli_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pizAioli_base`
--
ALTER TABLE `pizAioli_base`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `pizAioli_client`
--
ALTER TABLE `pizAioli_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `pizAioli_commande`
--
ALTER TABLE `pizAioli_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `pizAioli_enseigne`
--
ALTER TABLE `pizAioli_enseigne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `pizAioli_fos_user`
--
ALTER TABLE `pizAioli_fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `pizAioli_ingredients`
--
ALTER TABLE `pizAioli_ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `pizAioli_mode_paiement`
--
ALTER TABLE `pizAioli_mode_paiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `pizAioli_pizza`
--
ALTER TABLE `pizAioli_pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `pizAioli_statut`
--
ALTER TABLE `pizAioli_statut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `pizAioli_taille`
--
ALTER TABLE `pizAioli_taille`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `pizAioli_user`
--
ALTER TABLE `pizAioli_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `pizAioli_commande`
--
ALTER TABLE `pizAioli_commande`
  ADD CONSTRAINT `FK_F63BF2931AD0877` FOREIGN KEY (`fk_user`) REFERENCES `pizAioli_fos_user` (`id`),
  ADD CONSTRAINT `FK_F63BF29335DF0EF8` FOREIGN KEY (`fk_modepaiement`) REFERENCES `pizAioli_mode_paiement` (`id`),
  ADD CONSTRAINT `FK_F63BF293C5CA982F` FOREIGN KEY (`fk_statut`) REFERENCES `pizAioli_statut` (`id`),
  ADD CONSTRAINT `FK_F63BF293E30A11A` FOREIGN KEY (`fk_pizza`) REFERENCES `pizAioli_pizza` (`id`);

--
-- Contraintes pour la table `pizAioli_pizza`
--
ALTER TABLE `pizAioli_pizza`
  ADD CONSTRAINT `FK_CFDD826F4C8A205F` FOREIGN KEY (`fk_base`) REFERENCES `pizAioli_base` (`id`),
  ADD CONSTRAINT `FK_CFDD826F56FEE3A8` FOREIGN KEY (`fk_taille`) REFERENCES `pizAioli_taille` (`id`),
  ADD CONSTRAINT `FK_CFDD826FF9F0AC21` FOREIGN KEY (`fk_supp`) REFERENCES `pizAioli_ingredients` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
