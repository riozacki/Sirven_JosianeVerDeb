
-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateurs` int NOT NULL,
  `nom` VARCHAR(30) DEFAULT  NOTNULL,
  `prenom` VARCHAR(30) DEFAULT NULL,
  `mail` VARCHAR(50) DEFAULT NULL,
  `tel` INT(10) DEFAULT NULL,
  `adresse` VARCHAR(50) DEFAULT NULL,
  `cp` INT(5) DEFAULT NULL,
  `ville` VARCHAR(50) DEFAULT NULL,
  `mdp` VARCHAR(150) DEFAULT NULL,
  

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;



-- --------------------------------------------------------
