-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 01 jan. 2020 à 15:51
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `app`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etud` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `groupe` int(11) DEFAULT NULL,
  `promo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etud`, `id_user`, `groupe`, `promo`, `option`) VALUES
(1, 1, 2, '1CS', NULL),
(2, 2, 2, '1CS', NULL),
(3, 5, 2, '1CS', NULL),
(4, 7, 1, '2CS', 'SIQ'),
(5, 8, 4, '2CP', NULL),
(6, 11, 1, '3CS', 'SIT');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_16_172302_create_note_table', 1),
(5, '2019_11_16_174140_create_module_table', 1),
(6, '2019_11_16_174252_create_etudiant_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id_module` bigint(20) UNSIGNED NOT NULL,
  `nom_module` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semestre` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id_module`, `nom_module`, `annee`, `option`, `semestre`) VALUES
(1, 'igl', '2019', NULL, 1),
(2, 'Syc1', '2019', NULL, 1),
(3, 'RO', '2019', NULL, 1),
(4, 'RES1', '2019', NULL, 1),
(5, 'THP', '2019', NULL, 1),
(6, 'ORG', '2019', NULL, 1),
(7, 'Anum', '2019', NULL, 1),
(8, 'Anglais', '2019', NULL, 1),
(9, 'RES2', '2020', NULL, 2),
(10, 'Syc2', '2020', NULL, 2),
(11, 'Archi3', '2020', NULL, 2),
(12, 'BDD', '2020', NULL, 2),
(13, 'CPRJ', '2020', NULL, 2),
(14, 'MCSI', '2020', NULL, 2),
(15, 'SEC', '2020', NULL, 2),
(16, 'Projet 1cs', '2020', NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id_note` bigint(20) UNSIGNED NOT NULL,
  `id_module` bigint(20) NOT NULL,
  `id_etud` bigint(20) NOT NULL,
  `cc` double(8,2) NOT NULL DEFAULT '0.00',
  `ci` double(8,2) NOT NULL DEFAULT '0.00',
  `cf` double(8,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_note`, `id_module`, `id_etud`, `cc`, `ci`, `cf`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 15.00, 12.00, 10.00, NULL, NULL),
(2, 2, 1, 15.00, 10.00, 9.00, NULL, NULL),
(3, 3, 1, 16.00, 15.00, 14.50, NULL, NULL),
(4, 4, 1, 17.00, 15.50, 13.75, NULL, NULL),
(5, 5, 1, 13.00, 7.00, 8.50, NULL, NULL),
(6, 6, 1, 14.00, 8.00, 10.00, NULL, NULL),
(7, 7, 1, 16.00, 15.00, 13.00, NULL, NULL),
(8, 8, 1, 17.00, 16.00, 15.50, NULL, NULL),
(9, 9, 1, 14.00, 13.50, 12.00, NULL, NULL),
(10, 10, 1, 10.00, 9.25, 11.00, NULL, NULL),
(11, 11, 1, 13.00, 12.75, 11.00, NULL, NULL),
(12, 12, 1, 14.00, 13.00, 14.00, NULL, NULL),
(13, 13, 1, 15.00, 10.50, 14.00, NULL, NULL),
(14, 14, 1, 14.00, 15.00, 12.00, NULL, NULL),
(15, 15, 1, 16.00, 11.50, 12.25, NULL, NULL),
(16, 16, 1, 14.00, 15.00, 15.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `email`, `mdp`, `nom`, `prenom`, `fonction`, `id`) VALUES
(1, 'khadidjaH', 'hk_hab_el_hames@esi.dz', 'khadidja123', 'Habelhames', 'Khadidja', 'Etudiant', 1),
(2, 'RomaissaK', 'hr_kessi@esi.dz', 'Romaissa987', 'Kessi', 'Romaissa', 'Etudiant', 2),
(3, 'HADDADOU', 'h_haddadou@esi.dz', 'HADDADOU2019', 'HADDADOU', 'Hamid ', 'Enseignant', NULL),
(4, 'BESSEDIK ', 'm_bessedik@esi.dz', 'BESSEDIK657', 'BESSEDIK ', 'Malika ', 'Enseignant', NULL),
(5, 'SirineH', 'hs_Hamani@€si.dz', 'hamaniS99', 'Hamani', 'Sirine', 'Etudiant', 3),
(6, 'BOUGUERRA ', 'a_bouguerra@esi.dz', 'AchourBouguerra', 'BOUGUERRA ', 'Achour', 'Administrateur', NULL),
(7, 'AsmaA', 'ga_arab@esi.dz', 'ArabAsma20', 'Arab', 'Asma', 'Etudiant', 4),
(8, 'DouaaL', 'hd_laib@esi.dz', 'douaa12345', 'Laib', 'Douaa', 'Etudiant', 5),
(9, 'AMROUCHE ', 'h_amrouche@esi.dz', 'AMROUCHE754', 'AMROUCHE', 'Hakim ', 'Enseignant', NULL),
(10, 'AIT AMRANE', 'r_ait_amrane@esi.dz', 'AIT_AMRANE1745', 'AIT AMRANE', 'Rachid', 'Administrateur', NULL),
(11, 'ROUMAISSAR', 'fr_rebati@esi.dz', 'rebati@2020@', 'ROUMAISSA', 'Rebati', 'Etudiant', 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etud`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_module`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etud` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id_module` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
