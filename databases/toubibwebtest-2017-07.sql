-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 05 Juillet 2017 à 17:53
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `toubibwebtest`
--

-- --------------------------------------------------------

--
-- Structure de la table `cliniques`
--

CREATE TABLE `cliniques` (
  `id` int(11) NOT NULL,
  `code_clinique` varchar(15) CHARACTER SET utf8 NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'nom clinique',
  `adresse` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ville` text CHARACTER SET utf8 NOT NULL,
  `postal` varchar(6) CHARACTER SET utf8 NOT NULL,
  `province` text CHARACTER SET utf8 NOT NULL,
  `pays` text CHARACTER SET utf8 NOT NULL,
  `telephone` varchar(10) CHARACTER SET utf8 NOT NULL,
  `fax` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table des cliniques';

--
-- Contenu de la table `cliniques`
--

INSERT INTO `cliniques` (`id`, `code_clinique`, `nom`, `adresse`, `ville`, `postal`, `province`, `pays`, `telephone`, `fax`) VALUES
(1, 'MASCOUCHE', 'Clinique Médicale Mascouche', '1050, rue massé', 'Mascouche', 'j0k2z3', 'qc', 'canada', '4504743631', ''),
(2, 'STGABRIEL', 'Clinique médicale St-Gabriel', '85, rue St-Gabriel', 'St-Gabriel', 'J0K2N0', 'qc', '', '4508353431', '4508353433'),
(3, 'RAWDON', 'Clinique Médicale Rawdon', '125, rue golf', 'Rawdon', 'j0k1x2', 'qc', '', '4508343345', '');

-- --------------------------------------------------------

--
-- Structure de la table `medecins`
--

CREATE TABLE `medecins` (
  `id` int(11) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `prenom` text NOT NULL,
  `nom` text NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `province` text NOT NULL,
  `pays` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `medecins`
--

INSERT INTO `medecins` (`id`, `mot_de_passe`, `prenom`, `nom`, `adresse`, `ville`, `province`, `pays`) VALUES
(1, '12345', 'Maxime', 'Gazaille', '123, rue du parc', 'laval', 'qc', 'canada'),
(2, '54321', 'alex', 'racine', '555, rue des bouleaux', 'montreal', 'qc', 'canada'),
(3, '98765', 'eric', 'daponte', '666, devils street', 'vancouver', 'ab', 'canada');

-- --------------------------------------------------------

--
-- Structure de la table `migration`
--

CREATE TABLE `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `migration`
--

INSERT INTO `migration` (`type`, `name`, `migration`) VALUES
('package', 'auth', '001_auth_create_usertables'),
('package', 'auth', '002_auth_create_grouptables'),
('package', 'auth', '003_auth_create_roletables'),
('package', 'auth', '004_auth_create_permissiontables'),
('package', 'auth', '005_auth_create_authdefaults'),
('package', 'auth', '006_auth_add_authactions'),
('package', 'auth', '007_auth_add_permissionsfilter'),
('package', 'auth', '008_auth_create_providers'),
('package', 'auth', '009_auth_create_oauth2tables'),
('package', 'auth', '010_auth_fix_jointables'),
('package', 'auth', '011_auth_group_optional');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `usercode` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `login_hash` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nam` varchar(12) CHARACTER SET utf8 NOT NULL COMMENT 'ex: GAZM56781234',
  `prenom` text CHARACTER SET utf8 NOT NULL,
  `nom` text CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ville` varchar(255) CHARACTER SET utf8 NOT NULL,
  `postal` varchar(6) CHARACTER SET utf8 NOT NULL COMMENT 'ex: H7K2T4',
  `province` text CHARACTER SET utf8 NOT NULL COMMENT 'ex: QC',
  `pays` text CHARACTER SET utf8 NOT NULL COMMENT 'Canada',
  `telephone` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '(012) 345-6789',
  `cellulaire` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT 'optionel',
  `date_naissance` date NOT NULL COMMENT '(jj/mm/aaaa)',
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `num_clinique` int(11) NOT NULL,
  `group` int(11) NOT NULL,
  `last_login` varchar(25) CHARACTER SET utf8 NOT NULL,
  `profile_fields` text CHARACTER SET utf8 NOT NULL,
  `created_at` int(11) NOT NULL,
  `update_at` int(11) NOT NULL,
  `valide` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Test pour toubibwebfuel';

--
-- Contenu de la table `patients`
--

INSERT INTO `patients` (`id`, `username`, `usercode`, `password`, `login_hash`, `nam`, `prenom`, `nom`, `adresse`, `ville`, `postal`, `province`, `pays`, `telephone`, `cellulaire`, `date_naissance`, `email`, `num_clinique`, `group`, `last_login`, `profile_fields`, `created_at`, `update_at`, `valide`) VALUES
(1, 'alloa1', '', 'hkolNjgfWcPzMN1mkdvUfXVfcci8NCWzzL+uf0evKIM=', '7c3e91603ac4871e71fd8e4942b41fce8cda9bdf', 'BOUR00001111', 'Robert', 'Bourassa', '123, boul des sources', 'Laval', 'h7k2t5', 'qc', 'canada', '4509876543', '4509876543', '1956-05-16', 'get_a_life@exemple.com', 1, 0, '1499191378', '', 0, 0, 0),
(2, 'alloa2', '', 'hkolNjgfWcPzMN1mkdvUfXVfcci8NCWzzL+uf0evKIM=', '3bfc5a703b7d1ae2dc412a87636ffbc0e40d18cb', 'GRAS11112222', 'Sylvie', 'Granger', '987, boul du sapin', 'montreal', 'k095j5', 'qc', 'canada', '4509988787', '5146668877', '1966-05-23', '', 1, 0, '1498670535', '', 0, 0, 0),
(3, 'alloa3', '', 'hkolNjgfWcPzMN1mkdvUfXVfcci8NCWzzL+uf0evKIM=', '141744cc05d545a5a02cf95dc0ab6bc46c9e43c5', 'RACA66664444', 'Alexandre', 'Racine', '565, boul du jeu', 'Terrebonne', 't6y9p0', 'qc', 'canada', '8389634445', '5148529630', '1990-03-11', '', 2, 0, '1498670554', '', 0, 0, 0),
(4, 'alloa4', '', 'hkolNjgfWcPzMN1mkdvUfXVfcci8NCWzzL+uf0evKIM=', '', 'GENM33337777', 'Monique', 'Gendron', '789, boul des vielles', 'Saint-Eustache', 'k9l1q1', 'qc', 'canada', '5147539966', '5147539966', '1901-02-15', '', 2, 0, '', '', 0, 0, 0),
(5, 'alloa5', '', 'hkolNjgfWcPzMN1mkdvUfXVfcci8NCWzzL+uf0evKIM=', '0978d98094aad3407ce22450e45f6e1f14c726f4', 'GAUZ22227777', 'Zelda', 'Gauthier', '3636, rue de hyrule', 'boucherville', 'w3e4r5', 'qc', 'canada', '4506669993', '4506669993', '1989-11-16', '', 3, 0, '1498678707', '', 0, 0, 0),
(6, 'alloa666', '', 'hkolNjgfWcPzMN1mkdvUfXVfcci8NCWzzL+uf0evKIM=', '1beb484df609f23737ab0e6c0ef307de0a2991b5', 'GAZG85208520', 'Gilles', 'Gazaille', '6969, Boul. du Sexe', 'Montréal', 'h3g2a8', 'qc', 'Canada', '5143336969', '', '1962-02-21', 'lediable@satan.net', 2, 0, '1498144176', '', 0, 0, 0),
(7, 'alloa7', '', 'hkolNjgfWcPzMN1mkdvUfXVfcci8NCWzzL+uf0evKIM=', '3c2444885fc0cb93c1efaa3dea699d7ed020e78f', 'skyl89893030', 'luc', 'skywalker', '2525, boul. deathstar', 'galaxie', 'h7k2t4', 'qc', 'canada', '4509980505', '', '1977-05-25', 'lucky_7@exemple.ca', 1, 1, '1498490347', 'a:0:{}', 1498489994, 0, 0),
(43, '', 'gaga', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0, 0, '', '', 0, 0, 0),
(52, '', 'mama', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0, 0, '', '', 0, 0, 0),
(53, '', 'lala', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0, 0, '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `last_login` varchar(25) NOT NULL,
  `login_hash` varchar(255) NOT NULL,
  `profile_fields` text NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`, `email`, `last_login`, `login_hash`, `profile_fields`, `created_at`, `updated_at`) VALUES
(1, 'alloa1', 'hkolNjgfWcPzMN1mkdvUfXVfcci8NCWzzL+uf0evKIM=', 1, 'alloa@exemple.com', '1498140777', '2677b57dda708ffd996d96efe6b40e8032965b5a', 'a:0:{}', 1497377363, 0),
(2, 'alloa2', 'hkolNjgfWcPzMN1mkdvUfXVfcci8NCWzzL+uf0evKIM=', 1, 'mgazaille@hotmail.com', '1498140712', '9e817a232b4f4fcae7676320dd4aa5c13d4ec63f', 'a:0:{}', 1497374811, 0),
(4, 'alloa3', 'hkolNjgfWcPzMN1mkdvUfXVfcci8NCWzzL+uf0evKIM=', 1, 'unautre@exemple.com', '1498140615', '17eff0f4edef698191ebc8d70a4058cd7863f3db', 'a:0:{}', 1497447735, 0),
(5, 'alloa4', 'hkolNjgfWcPzMN1mkdvUfXVfcci8NCWzzL+uf0evKIM=', 1, 'encore_un@exemple.ca', '1498140725', 'f90792e8e28c68e045b41fc2cababec104b9c32c', 'a:0:{}', 1497537184, 0),
(6, 'alloa5', 'hkolNjgfWcPzMN1mkdvUfXVfcci8NCWzzL+uf0evKIM=', 1, 'pas_imagination@exemple.com', '0', '', 'a:0:{}', 1497537330, 0),
(8, 'alloa6', 'hkolNjgfWcPzMN1mkdvUfXVfcci8NCWzzL+uf0evKIM=', 1, 'get_a_life@exemple.com', '0', '', 'a:0:{}', 1497633675, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users_clients`
--

CREATE TABLE `users_clients` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL DEFAULT '',
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `client_secret` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `auto_approve` tinyint(1) NOT NULL DEFAULT '0',
  `autonomous` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('development','pending','approved','rejected') NOT NULL DEFAULT 'development',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `notes` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users_providers`
--

CREATE TABLE `users_providers` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `provider` varchar(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `expires` int(12) DEFAULT '0',
  `refresh_token` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users_scopes`
--

CREATE TABLE `users_scopes` (
  `id` int(11) NOT NULL,
  `scope` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(64) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users_sessions`
--

CREATE TABLE `users_sessions` (
  `id` int(11) NOT NULL,
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `type_id` varchar(64) NOT NULL,
  `type` enum('user','auto') NOT NULL DEFAULT 'user',
  `code` text NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `stage` enum('request','granted') NOT NULL DEFAULT 'request',
  `first_requested` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL,
  `limited_access` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users_sessionscopes`
--

CREATE TABLE `users_sessionscopes` (
  `id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `scope` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cliniques`
--
ALTER TABLE `cliniques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medecins`
--
ALTER TABLE `medecins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_clinique` (`num_clinique`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Index pour la table `users_clients`
--
ALTER TABLE `users_clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_id` (`client_id`);

--
-- Index pour la table `users_providers`
--
ALTER TABLE `users_providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Index pour la table `users_scopes`
--
ALTER TABLE `users_scopes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `scope` (`scope`);

--
-- Index pour la table `users_sessions`
--
ALTER TABLE `users_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_sessions_ibfk_1` (`client_id`);

--
-- Index pour la table `users_sessionscopes`
--
ALTER TABLE `users_sessionscopes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_id` (`session_id`),
  ADD KEY `access_token` (`access_token`),
  ADD KEY `scope` (`scope`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `users_clients`
--
ALTER TABLE `users_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users_providers`
--
ALTER TABLE `users_providers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users_scopes`
--
ALTER TABLE `users_scopes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users_sessions`
--
ALTER TABLE `users_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users_sessionscopes`
--
ALTER TABLE `users_sessionscopes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `users_sessions`
--
ALTER TABLE `users_sessions`
  ADD CONSTRAINT `oauth_sessions_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `users_clients` (`client_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users_sessionscopes`
--
ALTER TABLE `users_sessionscopes`
  ADD CONSTRAINT `oauth_sessionscopes_ibfk_1` FOREIGN KEY (`scope`) REFERENCES `users_scopes` (`scope`),
  ADD CONSTRAINT `oauth_sessionscopes_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `users_sessions` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
