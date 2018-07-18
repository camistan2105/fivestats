-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 18 Juillet 2018 à 19:22
-- Version du serveur :  5.7.14
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fivestats`
--

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `team1_id` int(11) NOT NULL,
  `team2_id` int(11) NOT NULL,
  `team1_goals` int(11) DEFAULT NULL,
  `team2_goals` int(11) DEFAULT NULL,
  `is_played` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `games`
--

INSERT INTO `games` (`id`, `date`, `team1_id`, `team2_id`, `team1_goals`, `team2_goals`, `is_played`) VALUES
(5, '2018-07-11 00:00:00', 18, 19, 8, 14, b'1'),
(6, '2018-07-18 00:00:00', 20, 21, 11, 12, b'1');

-- --------------------------------------------------------

--
-- Structure de la table `goals_players_games`
--

CREATE TABLE `goals_players_games` (
  `game_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `assists` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `goals_players_games`
--

INSERT INTO `goals_players_games` (`game_id`, `player_id`, `goals`, `assists`) VALUES
(5, 16, 1, 3),
(5, 17, 6, 2),
(5, 18, 2, 3),
(5, 19, 2, 2),
(5, 20, 2, 0),
(5, 21, 4, 3),
(5, 22, 1, 1),
(5, 23, 0, 1),
(5, 24, 1, 0),
(5, 25, 3, 0),
(6, 17, 3, 1),
(6, 18, 1, 1),
(6, 19, 1, 1),
(6, 20, 2, 4),
(6, 21, 3, 4),
(6, 22, 0, 0),
(6, 24, 2, 1),
(6, 26, 3, 2),
(6, 27, 2, 1),
(6, 28, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `players`
--

INSERT INTO `players` (`id`, `name`) VALUES
(16, 'Jude'),
(17, 'Phil'),
(18, 'Semmey'),
(19, 'Loic'),
(20, 'Bruno'),
(21, 'Sébastien'),
(22, 'Tony'),
(23, 'Patrick'),
(24, 'Baptiste'),
(25, 'Kery'),
(26, 'Moîse phil\'s poto'),
(27, 'Jean-nicolas'),
(28, 'Camille');

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `teams`
--

INSERT INTO `teams` (`id`, `name`) VALUES
(18, 'Team BBPTS'),
(19, 'Team KLSPJ'),
(20, 'Team CJTBS'),
(21, 'Team PLSBM');

-- --------------------------------------------------------

--
-- Structure de la table `teams_players`
--

CREATE TABLE `teams_players` (
  `team_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `teams_players`
--

INSERT INTO `teams_players` (`team_id`, `player_id`) VALUES
(19, 16),
(19, 17),
(21, 17),
(19, 18),
(20, 18),
(19, 19),
(21, 19),
(18, 20),
(20, 20),
(18, 21),
(21, 21),
(18, 22),
(20, 22),
(18, 23),
(18, 24),
(21, 24),
(19, 25),
(21, 26),
(20, 27),
(20, 28);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team1_id` (`team1_id`),
  ADD KEY `team2_id` (`team2_id`);

--
-- Index pour la table `goals_players_games`
--
ALTER TABLE `goals_players_games`
  ADD PRIMARY KEY (`game_id`,`player_id`),
  ADD KEY `s_key_goals_players_games_players` (`player_id`);

--
-- Index pour la table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teams_players`
--
ALTER TABLE `teams_players`
  ADD PRIMARY KEY (`team_id`,`player_id`),
  ADD KEY `s_key_teams_players_players` (`player_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `s_key_games_team1` FOREIGN KEY (`team1_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `s_key_games_team2` FOREIGN KEY (`team2_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `goals_players_games`
--
ALTER TABLE `goals_players_games`
  ADD CONSTRAINT `s_key_goals_players_games_games` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `s_key_goals_players_games_players` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `teams_players`
--
ALTER TABLE `teams_players`
  ADD CONSTRAINT `s_key_teams_players_players` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `s_key_teams_players_teams` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
