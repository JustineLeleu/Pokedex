-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 20 nov. 2023 à 08:46
-- Version du serveur : 8.0.31
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
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pokedexuser`
--

INSERT INTO `pokedexuser` (`iduser`, `pseudo`, `mail`, `passeword`, `admin`) VALUES
(1, 'Boss', 'boss@gmail.com', 'rootroot', 1);

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
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pokemon`
--

INSERT INTO `pokemon` (`idPokemon`, `nom`, `type1`, `type2`, `hp`, `attack`, `defense`, `specific_attack`, `specific_defense`, `speed`, `evo1`, `evo2`, `image`) VALUES
(1, 'Bulbasaur', 11, 12, 45, 55, 75, 43, 72, 37, 2, 3, './assets/img/pokemon/bulbasaur.png'),
(2, 'Ivysaur', 11, 12, 56, 60, 79, 67, 85, 21, 0, 3, './assets/img/pokemon/ivysaur.png'),
(3, 'Venusaur', 11, 12, 70, 62, 65, 56, 80, 25, 0, 0, './assets/img/pokemon/venusaur.png'),
(4, 'Charmander', 7, 0, 32, 56, 40, 32, 71, 30, 5, 6, './assets/img/pokemon/charmander.png'),
(5, 'Charmeleon', 7, 0, 45, 72, 52, 45, 79, 50, 0, 6, './assets/img/pokemon/charmeleon.png'),
(6, 'Charizard', 7, 18, 54, 86, 74, 62, 84, 70, 0, 0, './assets/img/pokemon/charizard.png'),
(7, 'Squirtle', 4, 0, 32, 56, 40, 32, 71, 30, 8, 9, './assets/img/pokemon/squirtle.png'),
(8, 'Wartortle', 4, 0, 45, 72, 52, 45, 79, 50, 0, 9, './assets/img/pokemon/wartortle.png'),
(9, 'Blastoise', 4, 0, 54, 86, 74, 62, 84, 70, 0, 0, './assets/img/pokemon/blastoise.png'),
(10, 'Caterpie', 9, 0, 50, 21, 18, 15, 12, 10, 11, 12, './assets/img/pokemon/caterpie.png'),
(25, 'Pikachu', 5, 0, 32, 56, 40, 32, 71, 30, 26, 0, './assets/img/pokemon/pikachu.png'),
(26, 'Raichu', 5, 0, 74, 86, 74, 62, 84, 70, 0, 0, './assets/img/pokemon/raichu.png'),
(11, 'Metapod', 9, 0, 38, 17, 20, 22, 25, 12, 10, 12, './assets/img/pokemon/metapod.png'),
(12, 'Butterfree', 9, 18, 42, 30, 24, 32, 28, 31, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 9, 18, 42, 30, 24, 32, 28, 31, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 9, 18, 42, 30, 24, 32, 28, 31, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 9, 18, 42, 30, 24, 32, 28, 31, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 9, 18, 42, 30, 24, 32, 28, 31, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(12, 'Butterfree', 1, 0, 50, 30, 20, 62, 28, 14, 10, 11, './assets/img/pokemon/butterfree.png'),
(13, 'Weedle', 9, 12, 29, 14, 13, 17, 16, 20, 14, 15, NULL),
(13, 'Weedle', 9, 12, 29, 14, 13, 17, 16, 20, 14, 15, NULL),
(13, 'Weedle', 9, 12, 19, 14, 13, 16, 17, 20, 14, 15, NULL),
(13, 'Weedle', 9, 12, 19, 14, 15, 17, 19, 23, 14, 15, 'Array'),
(13, 'Weedle', 9, 12, 14, 13, 15, 16, 17, 19, 14, 15, 'Array'),
(13, 'Weedle', 9, 12, 14, 16, 17, 19, 21, 16, 14, 15, 'Array');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
