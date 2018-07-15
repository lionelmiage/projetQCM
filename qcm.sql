-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Dim 15 Juillet 2018 à 02:32
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `qcmprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `qcm`
--

CREATE TABLE `qcm` (
  `idqcm` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choix1` varchar(255) NOT NULL,
  `choix2` varchar(255) NOT NULL,
  `choix3` varchar(255) NOT NULL,
  `reponse` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `qcm`
--

INSERT INTO `qcm` (`idqcm`, `question`, `choix1`, `choix2`, `choix3`, `reponse`) VALUES
(1, 'Java est un langage :', 'Compilé', 'Interprété', 'Virtuel', 'Compilé et interprété'),
(2, 'Java est un langage développé par:', 'Hewlett-Packard', 'Apple', 'Oracle', 'Sun Microsystems'),
(3, 'Après l''éxécution du début de programme suivant :\r\n\r\npublic static void main(String [] args) {\r\n    int x = 5;\r\n    x = 2 * x - 1;\r\n\r\n', 'la variable vaut : 5', 'la variable vaut : 6', 'la variable vaut : 7', 'la variable vaut : 9'),
(4, 'Un fichier d''extension .java contient : ', 'un fichier texte', 'du code exécutable par la machine virtuelle java.', 'des données manipulables par un programme.', 'le code source d''une classe java'),
(5, ' Voici un petit programme :\r\n\r\npublic static void main() {\r\n    i = 3;\r\n    while (i < 10) {\r\n        System.out.println(i);\r\n    }\r\n    return;\r\n}\r\n\r\n', 'Ce programme affiche les nombres de 3 à 9', 'Charger le plugin', 'Ne compile pas', 'Boucle infinie'),
(6, ' Le code suivant :\r\n\r\nint age = 12;\r\nif (age < 18) {\r\n    System.out.print("Mineur");\r\n}\r\nSystem.out.println("Majeur");\r\n\r\naffichera : ', 'Mineur', 'Majeur', 'MineurMineur', 'MineurMajeur'),
(7, ' Pour l''extrait de programme suivant\r\n\r\nint somme = 0;\r\nfor (i = 1 ; i <= 4 ; i = i + 1) {\r\n    somme = somme + i;\r\n}\r\nSystem.out.println("somme = " + somme);    \r\n\r\nLa valeur affichée de somme est : ', '2', '6', '8', '10'),
(8, ' Le code suivant :\r\n\r\nfor (int i = 4 ; i > 0 ; i = i - 1) {\r\n    System.out.print(i + " ");\r\n}\r\nSystem.out.println("");\r\n\r\naffichera : ', '1 4 3 2', '0 1 2 3 4', '0 8 9 7 4', '4 3 2 1'),
(9, 'Un fichier source est : ', 'un fichier virtuel que l''on peut compresser', 'un document de référence', 'un fichier illisible pour l''humain', 'un fichier texte qui sera traduit en instructions exécutables par le processeur'),
(10, ' Après exécution du code suivant :\r\n\r\nint x = 5;\r\nint y = 3;\r\n\r\nx = y;\r\n\r\n', 'Le programme affiche faux', 'la variable x vaut 5', '﻿﻿﻿﻿﻿﻿la variable x vaut 4', '﻿﻿﻿﻿﻿﻿la variable x vaut 3');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `qcm`
--
ALTER TABLE `qcm`
  ADD PRIMARY KEY (`idqcm`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `qcm`
--
ALTER TABLE `qcm`
  MODIFY `idqcm` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
