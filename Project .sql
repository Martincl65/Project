-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 24 Mai 2016 à 17:08
-- Version du serveur: 5.5.49-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `Project`
--

-- --------------------------------------------------------

--
-- Structure de la table `Asso_Test_Exercise`
--

CREATE TABLE IF NOT EXISTS `Asso_Test_Exercise` (
  `id_test` int(10) NOT NULL,
  `id_exercise` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Asso_Test_Exercise`
--

INSERT INTO `Asso_Test_Exercise` (`id_test`, `id_exercise`) VALUES
(1, 1),
(1, 2),
(1, 5),
(2, 2),
(2, 3),
(2, 4),
(3, 2),
(3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `Developer`
--

CREATE TABLE IF NOT EXISTS `Developer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lastName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `firstName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_test` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `Developer`
--

INSERT INTO `Developer` (`id`, `lastName`, `firstName`, `username`, `password`, `id_test`) VALUES
(1, 'MARTIN', 'Clément', 'cmartin', '812ebb340d121c492c5f7fa0d808d3a569638b4d', 1),
(2, 'SABAA', 'Zakarie', 'zsabaa', '812ebb340d121c492c5f7fa0d808d3a569638b4d', 2),
(3, 'MARTINEZ', 'Gilles', 'gmartinez', '812ebb340d121c492c5f7fa0d808d3a569638b4d', 3);

-- --------------------------------------------------------

--
-- Structure de la table `Exercise`
--

CREATE TABLE IF NOT EXISTS `Exercise` (
  `id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `time` time NOT NULL,
  `id_language` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `detail` longtext CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `Exercise`
--

INSERT INTO `Exercise` (`id`, `time`, `id_language`, `title`, `detail`) VALUES
(1, '00:30:00', 1, 'Exercice 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed justo nulla. Nunc diam tellus, molestie quis consectetur ac, molestie nec ligula. Pellentesque eu ipsum ligula. Fusce id dapibus ex, a consequat ex. Phasellus molestie velit non arcu elementum, eget consectetur velit mollis. Fusce sagittis a libero et rhoncus. Integer commodo, justo ac tristique tempor, lectus turpis aliquam odio, nec cursus ante nibh vitae mi. Nam nunc felis, efficitur sit amet urna quis, convallis ornare dolor. Mauris tristique ultricies nulla vitae lobortis. In velit risus, ullamcorper id purus non, porttitor euismod lectus. Nullam eu rhoncus sapien, in hendrerit risus. In imperdiet, est ut gravida consequat, leo ipsum sodales libero, in pellentesque ligula libero a velit. Cras mauris magna, porttitor eu mattis et, convallis fermentum erat.'),
(2, '00:45:00', 2, 'Exercice 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed justo nulla. Nunc diam tellus, molestie quis consectetur ac, molestie nec ligula. Pellentesque eu ipsum ligula. Fusce id dapibus ex, a consequat ex. Phasellus molestie velit non arcu elementum, eget consectetur velit mollis. Fusce sagittis a libero et rhoncus. Integer commodo, justo ac tristique tempor, lectus turpis aliquam odio, nec cursus ante nibh vitae mi. Nam nunc felis, efficitur sit amet urna quis, convallis ornare dolor. Mauris tristique ultricies nulla vitae lobortis. In velit risus, ullamcorper id purus non, porttitor euismod lectus. Nullam eu rhoncus sapien, in hendrerit risus. In imperdiet, est ut gravida consequat, leo ipsum sodales libero, in pellentesque ligula libero a velit. Cras mauris magna, porttitor eu mattis et, convallis fermentum erat.'),
(3, '00:45:00', 2, 'Exercice 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed justo nulla. Nunc diam tellus, molestie quis consectetur ac, molestie nec ligula. Pellentesque eu ipsum ligula. Fusce id dapibus ex, a consequat ex. Phasellus molestie velit non arcu elementum, eget consectetur velit mollis. Fusce sagittis a libero et rhoncus. Integer commodo, justo ac tristique tempor, lectus turpis aliquam odio, nec cursus ante nibh vitae mi. Nam nunc felis, efficitur sit amet urna quis, convallis ornare dolor. Mauris tristique ultricies nulla vitae lobortis. In velit risus, ullamcorper id purus non, porttitor euismod lectus. Nullam eu rhoncus sapien, in hendrerit risus. In imperdiet, est ut gravida consequat, leo ipsum sodales libero, in pellentesque ligula libero a velit. Cras mauris magna, porttitor eu mattis et, convallis fermentum erat.'),
(4, '00:45:00', 1, 'Exercice 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed justo nulla. Nunc diam tellus, molestie quis consectetur ac, molestie nec ligula. Pellentesque eu ipsum ligula. Fusce id dapibus ex, a consequat ex. Phasellus molestie velit non arcu elementum, eget consectetur velit mollis. Fusce sagittis a libero et rhoncus. Integer commodo, justo ac tristique tempor, lectus turpis aliquam odio, nec cursus ante nibh vitae mi. Nam nunc felis, efficitur sit amet urna quis, convallis ornare dolor. Mauris tristique ultricies nulla vitae lobortis. In velit risus, ullamcorper id purus non, porttitor euismod lectus. Nullam eu rhoncus sapien, in hendrerit risus. In imperdiet, est ut gravida consequat, leo ipsum sodales libero, in pellentesque ligula libero a velit. Cras mauris magna, porttitor eu mattis et, convallis fermentum erat.'),
(5, '00:45:00', 3, 'Exercice 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed justo nulla. Nunc diam tellus, molestie quis consectetur ac, molestie nec ligula. Pellentesque eu ipsum ligula. Fusce id dapibus ex, a consequat ex. Phasellus molestie velit non arcu elementum, eget consectetur velit mollis. Fusce sagittis a libero et rhoncus. Integer commodo, justo ac tristique tempor, lectus turpis aliquam odio, nec cursus ante nibh vitae mi. Nam nunc felis, efficitur sit amet urna quis, convallis ornare dolor. Mauris tristique ultricies nulla vitae lobortis. In velit risus, ullamcorper id purus non, porttitor euismod lectus. Nullam eu rhoncus sapien, in hendrerit risus. In imperdiet, est ut gravida consequat, leo ipsum sodales libero, in pellentesque ligula libero a velit. Cras mauris magna, porttitor eu mattis et, convallis fermentum erat.');

-- --------------------------------------------------------

--
-- Structure de la table `Language`
--

CREATE TABLE IF NOT EXISTS `Language` (
  `id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `Language`
--

INSERT INTO `Language` (`id`, `label`) VALUES
(1, 'php'),
(2, 'javascript'),
(3, 'sql');

-- --------------------------------------------------------

--
-- Structure de la table `Level`
--

CREATE TABLE IF NOT EXISTS `Level` (
  `id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `Level`
--

INSERT INTO `Level` (`id`, `label`) VALUES
(1, 'Niveau 1'),
(2, 'Niveau 2');

-- --------------------------------------------------------

--
-- Structure de la table `Response`
--

CREATE TABLE IF NOT EXISTS `Response` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_exercise` int(11) NOT NULL,
  `id_developer` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `exercise` (`id_exercise`),
  KEY `developer` (`id_developer`),
  KEY `exercise_2` (`id_exercise`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `Response`
--

INSERT INTO `Response` (`id`, `content`, `id_exercise`, `id_developer`) VALUES
(1, '<?php\r\n    public function textArea($name, $attr = array()){\r\n        $html = '''';\r\n        if(sizeof($attr)){\r\n            foreach ($attr as $key => $value) {\r\n                $html .= $key.''="''.$value.''"'';\r\n            }\r\n        }\r\n        return $this->surround(''<textarea rows=25 name="''.$this->name.''[''.$name.'']" ''.$html.''>''.$this->getValue($name).''</textarea>'');\r\n    }\r\n\r\n?>', 1, 1),
(2, 'test du louuuurd', 2, 1),
(4, '', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Test`
--

CREATE TABLE IF NOT EXISTS `Test` (
  `id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `id_level` int(10) NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `Test`
--

INSERT INTO `Test` (`id`, `id_level`, `detail`) VALUES
(1, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed justo nulla. Nunc diam tellus, molestie quis consectetur ac, molestie nec ligula. Pellentesque eu ipsum ligula. Fusce id dapibus ex, a consequat ex. Phasellus molestie velit non arcu elementum, eget consectetur velit mollis. Fusce sagittis a libero et rhoncus. Integer commodo, justo ac tristique tempor, lectus turpis aliquam odio, nec cursus ante nibh vitae mi. Nam nunc felis, efficitur sit amet urna quis, convallis ornare dolor. Mauris tristique ultricies nulla vitae lobortis. In velit risus, ullamcorper id purus non, porttitor euismod lectus. Nullam eu rhoncus sapien, in hendrerit risus. In imperdiet, est ut gravida consequat, leo ipsum sodales libero, in pellentesque ligula libero a velit. Cras mauris magna, porttitor eu mattis et, convallis fermentum erat.'),
(2, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed justo nulla. Nunc diam tellus, molestie quis consectetur ac, molestie nec ligula. Pellentesque eu ipsum ligula. Fusce id dapibus ex, a consequat ex. Phasellus molestie velit non arcu elementum, eget consectetur velit mollis. Fusce sagittis a libero et rhoncus. Integer commodo, justo ac tristique tempor, lectus turpis aliquam odio, nec cursus ante nibh vitae mi. Nam nunc felis, efficitur sit amet urna quis, convallis ornare dolor. Mauris tristique ultricies nulla vitae lobortis. In velit risus, ullamcorper id purus non, porttitor euismod lectus. Nullam eu rhoncus sapien, in hendrerit risus. In imperdiet, est ut gravida consequat, leo ipsum sodales libero, in pellentesque ligula libero a velit. Cras mauris magna, porttitor eu mattis et, convallis fermentum erat.'),
(3, 2, 'okkkkkkkkkkkkkkkkkkkkkkk');

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`id`, `username`, `password`) VALUES
(1, 'clem', '812ebb340d121c492c5f7fa0d808d3a569638b4d');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
