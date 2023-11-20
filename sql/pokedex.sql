-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 20 nov. 2023 à 13:59
-- Version du serveur : 8.0.34
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pokedex`
--

-- --------------------------------------------------------

--
-- Structure de la table `favorites_pokemon`
--

DROP TABLE IF EXISTS `favorites_pokemon`;
CREATE TABLE IF NOT EXISTS `favorites_pokemon` (
  `iduser` int NOT NULL,
  `idPokemon` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `favorites_pokemon`
--

INSERT INTO `favorites_pokemon` (`iduser`, `idPokemon`) VALUES
(1, 0),
(1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pokedexuser`
--

DROP TABLE IF EXISTS `pokedexuser`;
CREATE TABLE IF NOT EXISTS `pokedexuser` (
  `iduser` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `passeword` varchar(45) DEFAULT NULL,
  `admin` tinyint DEFAULT NULL,
  `description` text,
  `idphoto` int NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pokedexuser`
--

INSERT INTO `pokedexuser` (`iduser`, `pseudo`, `mail`, `passeword`, `admin`, `description`, `idphoto`) VALUES
(1, 'Boss', 'boss@gmail.com', 'rootroot', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pokemon`
--

DROP TABLE IF EXISTS `pokemon`;
CREATE TABLE IF NOT EXISTS `pokemon` (
  `idPokemon` int DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `type1` tinyint DEFAULT NULL,
  `type2` tinyint DEFAULT NULL,
  `hp` int DEFAULT NULL,
  `attack` int DEFAULT NULL,
  `defense` int DEFAULT NULL,
  `specific_attack` int DEFAULT NULL,
  `specific_defense` int DEFAULT NULL,
  `speed` int DEFAULT NULL,
  `evo1` int DEFAULT NULL,
  `evo2` int DEFAULT NULL,
  `evo3` int NOT NULL,
  `image` varchar(45) DEFAULT NULL,
  UNIQUE KEY `idPokemon` (`idPokemon`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pokemon`
--

INSERT INTO `pokemon` (`idPokemon`, `nom`, `type1`, `type2`, `hp`, `attack`, `defense`, `specific_attack`, `specific_defense`, `speed`, `evo1`, `evo2`, `evo3`, `image`) VALUES
(1, 'Bulbasaur', 11, 12, 45, 55, 75, 43, 72, 37, 1, 2, 3, './assets/img/pokemon/bulbasaur.png'),
(2, 'Ivysaur', 11, 12, 56, 60, 79, 67, 85, 21, 1, 2, 3, './assets/img/pokemon/ivysaur.png'),
(3, 'Venusaur', 11, 12, 70, 62, 65, 56, 80, 25, 1, 2, 3, './assets/img/pokemon/venusaur.png'),
(4, 'Charmander', 7, 0, 32, 56, 40, 32, 71, 30, 4, 5, 6, './assets/img/pokemon/charmander.png'),
(5, 'Charmeleon', 7, 0, 45, 72, 52, 45, 79, 50, 4, 5, 6, './assets/img/pokemon/charmeleon.png'),
(6, 'Charizard', 7, 18, 54, 86, 74, 62, 84, 70, 4, 5, 6, './assets/img/pokemon/charizard.png'),
(7, 'Squirtle', 4, 0, 32, 56, 40, 32, 71, 30, 7, 8, 9, './assets/img/pokemon/squirtle.png'),
(8, 'Wartortle', 4, 0, 45, 72, 52, 45, 79, 50, 7, 8, 9, './assets/img/pokemon/wartortle.png'),
(9, 'Blastoise', 4, 0, 54, 86, 74, 62, 84, 70, 7, 8, 9, './assets/img/pokemon/blastoise.png'),
(25, 'Pikachu', 5, 0, 32, 56, 40, 32, 71, 30, 25, 26, 0, './assets/img/pokemon/pikachu.png'),
(26, 'Raichu', 5, 0, 74, 86, 74, 62, 84, 70, 25, 26, 0, './assets/img/pokemon/raichu.png');

-- --------------------------------------------------------

--
-- Structure de la table `pokemontype`
--

DROP TABLE IF EXISTS `pokemontype`;
CREATE TABLE IF NOT EXISTS `pokemontype` (
  `idtype` int NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `icone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtype`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pokemontype`
--

INSERT INTO `pokemontype` (`idtype`, `type`, `color`, `icone`) VALUES
(1, 'ACIER', '#60a3b9', './assets/img/type/steel.svg'),
(2, 'COMBAT', '#ff8100', './assets/img/type/fighting.svg'),
(3, 'DRAGON', '#4f60e2', './assets/img/type/dragon.svg'),
(4, 'EAU', '#2481ef', './assets/img/type/water.svg'),
(5, 'ELECTRIK', '#fac100', './assets/img/type/electric.svg'),
(6, 'FEE', '#ef71ef', './assets/img/type/fairy.svg'),
(7, 'FEU', '#e72324', './assets/img/type/fire.svg'),
(8, 'GLACE', '#3dd9ff', './assets/img/type/ice.svg'),
(9, 'INSECT', '#92a312', './assets/img/type/bug.svg'),
(10, 'NORMAL', '#a0a3a0', './assets/img/type/normal.svg'),
(11, 'PLANTE', '#3da324', './assets/img/type/grass.svg'),
(12, 'POISON', '#923fcc', './assets/img/type/poison.svg'),
(13, 'PSY', '#ef3f7a', './assets/img/type/psychic.svg'),
(14, 'ROCHE', '#b1ab82', './assets/img/type/rock.svg'),
(15, 'SOL', '#92501b', './assets/img/type/ground.svg'),
(16, 'SPECTRE', '#713f71', './assets/img/type/ghost.svg'),
(17, 'TENEBRE', '#4d3f3b', './assets/img/type/dark.svg'),
(18, 'VOL', '#82baef', './assets/img/type/flying.svg');

-- --------------------------------------------------------

--
-- Structure de la table `strengthstype`
--

DROP TABLE IF EXISTS `strengthstype`;
CREATE TABLE IF NOT EXISTS `strengthstype` (
  `idtype` tinyint NOT NULL,
  `idstength` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `strengthstype`
--

INSERT INTO `strengthstype` (`idtype`, `idstength`) VALUES
(1, 6),
(1, 8),
(1, 14),
(2, 1),
(2, 8),
(2, 10),
(2, 14),
(2, 17),
(3, 3),
(3, 14),
(3, 15),
(4, 7),
(5, 4),
(5, 18),
(6, 2),
(6, 3),
(6, 17),
(7, 1),
(7, 8),
(7, 9),
(7, 11),
(8, 3),
(8, 11),
(8, 15),
(8, 18),
(9, 11),
(9, 13),
(9, 17),
(11, 4),
(11, 14),
(11, 15),
(12, 6),
(12, 11),
(13, 2),
(13, 12),
(14, 7),
(14, 8),
(14, 9),
(14, 18),
(15, 1),
(15, 5),
(15, 7),
(15, 12),
(15, 14),
(16, 13),
(16, 16),
(17, 13),
(17, 16),
(18, 2),
(18, 9),
(18, 11);

-- --------------------------------------------------------

--
-- Structure de la table `weaknessestype`
--

DROP TABLE IF EXISTS `weaknessestype`;
CREATE TABLE IF NOT EXISTS `weaknessestype` (
  `idtype` tinyint NOT NULL,
  `idweaknesses` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `weaknessestype`
--

INSERT INTO `weaknessestype` (`idtype`, `idweaknesses`) VALUES
(1, 2),
(1, 7),
(1, 15),
(2, 6),
(2, 18),
(2, 13),
(3, 3),
(3, 6),
(3, 8),
(4, 5),
(4, 11),
(5, 15),
(6, 1),
(6, 12),
(7, 4),
(7, 14),
(7, 15),
(8, 1),
(8, 2),
(8, 7),
(8, 14),
(9, 7),
(9, 14),
(9, 18),
(10, 2),
(11, 7),
(11, 8),
(11, 9),
(11, 12),
(11, 18),
(12, 13),
(12, 15),
(13, 9),
(13, 16),
(13, 17),
(14, 1),
(14, 2),
(14, 4),
(14, 11),
(14, 15),
(15, 4),
(15, 8),
(15, 11),
(16, 16),
(16, 17),
(17, 2),
(17, 6),
(17, 9),
(18, 5),
(18, 8),
(18, 14);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
