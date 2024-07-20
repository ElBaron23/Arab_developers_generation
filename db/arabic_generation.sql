-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 20 juil. 2024 à 02:07
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
-- Base de données : `arabic_generation`
--
DROP DATABASE arabic_generation;
-- إنشاء قاعدة بيانات جديدة باسم arabic_generation
CREATE DATABASE arabic_generation;

-- استخدام قاعدة البيانات التي تم إنشاؤها حديثًا
USE arabic_generation;
-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `password`) VALUES
(1, 'touzouz', '10203040');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(55) NOT NULL,
  `gender` varchar(55) NOT NULL DEFAULT 'غير متوفر',
  `datebirdth` date DEFAULT NULL,
  `country` varchar(100) NOT NULL DEFAULT 'غير متوفر',
  `description` varchar(255) NOT NULL DEFAULT 'غير متوفر',
  `instagram` varchar(255) NOT NULL DEFAULT 'غير متوفر',
  `facebook` varchar(255) NOT NULL DEFAULT 'غير متوفر',
  `twitter` varchar(255) NOT NULL DEFAULT 'غير متوفر',
  `linkedin` varchar(255) NOT NULL DEFAULT 'غير متوفر',
  `photo_profile` varchar(255) NOT NULL DEFAULT 'client.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `email`, `password`, `phone`, `gender`, `datebirdth`, `country`, `description`, `instagram`, `facebook`, `twitter`, `linkedin`, `photo_profile`) VALUES
(6, 'عماد', 'تزوز', 'imad333@gmail.com', '12345678', 606701885, 'male', '2000-01-15', 'المغرب ', 'مصمم ومبرمج مواقع انترنيت', 'غير متوفر', 'غير متوفر', 'غير متوفر', 'غير متوفر', '22992_'),
(7, 'imad', 'touzouz', 'imad3@gmail.com', '12345678', 0, '', '0000-00-00', 'غير متوفر', 'غير متوفر', 'غير متوفر', 'غير متوفر', 'غير متوفر', 'غير متوفر', '31679_Profile data-bro.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
