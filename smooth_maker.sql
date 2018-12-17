-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 17 Décembre 2018 à 13:46
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `smooth_maker`
--

-- --------------------------------------------------------

--
-- Structure de la table `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idRecipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productName` text NOT NULL,
  `imgSrc` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `idRecipe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `productName`, `imgSrc`, `price`, `idRecipe`) VALUES
(1, 'Green Oxydant', 'img/photos/smoothie-detox.jpg', 3, 3),
(2, 'Smoothie Detox', 'img/photos/batido-detox-de-espinacas-kiwi-y-naranja.jpg', 4, NULL),
(3, 'Yellow Banana Mango', 'img/photos/Recette_CANDIA_Smoothie_exotique.jpg', 3.5, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `recipeName` text NOT NULL,
  `imgSrcRecipe` varchar(100) DEFAULT NULL,
  `descriptionRecipe` varchar(5000) NOT NULL,
  `ingredientRecipe` varchar(1000) NOT NULL,
  `idProduct` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `recipe`
--

INSERT INTO `recipe` (`id`, `recipeName`, `imgSrcRecipe`, `descriptionRecipe`, `ingredientRecipe`, `idProduct`) VALUES
(1, 'Orange Gourmandise', 'img/photos/jus-ananas-orange.jpg', '<p>1Proin auctor efficitur sem quis pharetra. Sed massa nibh, condimentum imperdiet elit a, vestibulum accumsan nisi. Quisque quis magna sit amet neque eleifend porttitor. Vestibulum dignissim nisl nisl, volutpat hendrerit libero vulputate ut. Nullam metus est, gravida vel mauris at, laoreet feugiat metus.</p>\r\n<p><strong>Etapes :</strong></p>\r\n<ul>\r\n<li>Nettoyer les fruits</li>\r\n<li>Éplucher les fruits</li>\r\n<li>Couper les fruits</li>\r\n<li>S\'il y a des pépins, retirez-les</li>\r\n<li>Versez les ingrédients dans un grand récipient</li>\r\n<li>Servir frais</li>\r\n</ul>\r\n<p>Proin fringilla venenatis ligula. Nulla dictum elit turpis, in gravida ligula lacinia non. Phasellus auctor sollicitudin neque in tincidunt. Donec scelerisque augue sed facilisis suscipit. Sed maximus convallis leo quis accumsan. Duis at arcu quis purus aliquet ultrices. Fusce nisi eros, hendrerit quis lacinia et, lacinia eget libero. In vehicula, orci sed luctus cursus, eros nulla tempor lorem, a imperdiet dui ex non est. Etiam eu bibendum lectus. Cras sagittis bibendum nulla, vitae egestas dui dapibus sollicitudin. Donec gravida eleifend efficitur.</p>', '<p>Pour 2 personnes :</p>\r\n<ul>\r\n<li>2 bananes</li>\r\n<li>1 citron</li>\r\n<li>1 bobsleigh</li>\r\n<li>1 club de golf</li>\r\n<li>1 pincée de sel</li>\r\n</ul>', NULL),
(2, 'Pink Pleasure', 'img/photos/smoothie-detox-2.jpg', '<p>2Proin auctor efficitur sem quis pharetra. Sed massa nibh, condimentum imperdiet elit a, vestibulum accumsan nisi. Quisque quis magna sit amet neque eleifend porttitor. Vestibulum dignissim nisl nisl, volutpat hendrerit libero vulputate ut. Nullam metus est, gravida vel mauris at, laoreet feugiat metus.</p>\r\n<p><strong>Etapes :</strong></p>\r\n<ul>\r\n<li>Nettoyer les fruits</li>\r\n<li>Éplucher les fruits</li>\r\n<li>Couper les fruits</li>\r\n<li>S\'il y a des pépins, retirez-les</li>\r\n<li>Versez les ingrédients dans un grand récipient</li>\r\n<li>Servir frais</li>\r\n</ul>\r\n<p>Proin fringilla venenatis ligula. Nulla dictum elit turpis, in gravida ligula lacinia non. Phasellus auctor sollicitudin neque in tincidunt. Donec scelerisque augue sed facilisis suscipit. Sed maximus convallis leo quis accumsan. Duis at arcu quis purus aliquet ultrices. Fusce nisi eros, hendrerit quis lacinia et, lacinia eget libero. In vehicula, orci sed luctus cursus, eros nulla tempor lorem, a imperdiet dui ex non est. Etiam eu bibendum lectus. Cras sagittis bibendum nulla, vitae egestas dui dapibus sollicitudin. Donec gravida eleifend efficitur.</p>', '<p>Pour 4 personnes :</p>\r\n<ul>\r\n<li>2 fraises</li>\r\n<li>1 lama</li>\r\n<li>3 joueurs de curling</li>\r\n<li>1 grain de raisin</li>\r\n<li>1 pincée de sucre</li>\r\n</ul>', NULL),
(3, 'Green Oxydant', 'img/photos/smoothie-detox.jpg', '<p>3Proin auctor efficitur sem quis pharetra. Sed massa nibh, condimentum imperdiet elit a, vestibulum accumsan nisi. Quisque quis magna sit amet neque eleifend porttitor. Vestibulum dignissim nisl nisl, volutpat hendrerit libero vulputate ut. Nullam metus est, gravida vel mauris at, laoreet feugiat metus.</p>\r\n<p><strong>Etapes :</strong></p>\r\n<ul>\r\n<li>Nettoyer les fruits</li>\r\n<li>Éplucher les fruits</li>\r\n<li>Couper les fruits</li>\r\n<li>S\'il y a des pépins, retirez-les</li>\r\n<li>Versez les ingrédients dans un grand récipient</li>\r\n<li>Servir frais</li>\r\n</ul>\r\n<p>Proin fringilla venenatis ligula. Nulla dictum elit turpis, in gravida ligula lacinia non. Phasellus auctor sollicitudin neque in tincidunt. Donec scelerisque augue sed facilisis suscipit. Sed maximus convallis leo quis accumsan. Duis at arcu quis purus aliquet ultrices. Fusce nisi eros, hendrerit quis lacinia et, lacinia eget libero. In vehicula, orci sed luctus cursus, eros nulla tempor lorem, a imperdiet dui ex non est. Etiam eu bibendum lectus. Cras sagittis bibendum nulla, vitae egestas dui dapibus sollicitudin. Donec gravida eleifend efficitur.</p>', '<p>Pour 6 personnes :</p>\r\n<ul>\r\n<li>3 cookies</li>\r\n<li>1 jambe de bois</li>\r\n<li>Ce que tu veux</li>\r\n</ul>', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'Pierre', 'Guy', 'pierre.guy@gmail.com', '1234'),
(2, 'Jean-Michel', 'Delacompta', 'jmcompta@gmail.com', 'donald');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
