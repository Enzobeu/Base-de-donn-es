--
-- Table structure for table `periode`
--
DROP TABLE IF EXISTS `periode`;
CREATE TABLE
  `periode` (
    `id_periode` int (11) NOT NULL AUTO_INCREMENT,
    `nom_periode` varchar(255) NOT NULL,
    PRIMARY KEY (`id_periode`)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Table structure for table `regime_alimentaire`
--
DROP TABLE IF EXISTS `regime_alimentaire`;
CREATE TABLE
  `regime_alimentaire` (
    `id_regime` int (11) NOT NULL AUTO_INCREMENT,
    `type_regime` varchar(255) NOT NULL,
    PRIMARY KEY (`id_regime`)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Table structure for table `espece`
--
DROP TABLE IF EXISTS `espece`;
CREATE TABLE
  `espece` (
    `id_espece` int (11) NOT NULL AUTO_INCREMENT,
    `nom_espece` varchar(255) NOT NULL,
    `type_espece` enum (
      'Dinosaure',
      'Reptile mammalien',
      'Reptile volant',
      'Reptile marin'
    ) NOT NULL,
    `poids_moyen` int (11) DEFAULT NULL,
    `longueur_moyenne` int (11) DEFAULT NULL,
    `description_espece` text,
    `img_espece` varchar(255) NOT NULL,
    `id_periode` int (11) DEFAULT NULL,
    `id_regime` int (11) DEFAULT NULL, -- Ajout de la clé étrangère pour id_regime
    PRIMARY KEY (`id_espece`),
    KEY `id_periode` (`id_periode`),
    KEY `id_regime` (`id_regime`), -- Ajout de l'index pour id_regime
    CONSTRAINT `espece_ibfk_1` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id_periode`),
    CONSTRAINT `espece_ibfk_2` FOREIGN KEY (`id_regime`) REFERENCES `regime_alimentaire` (`id_regime`)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Table structure for table `fossile`
--
DROP TABLE IF EXISTS `fossile`;
CREATE TABLE
  `fossile` (
    `id_fossile` int (11) NOT NULL AUTO_INCREMENT,
    `id_espece` int (11) NOT NULL,
    `date_decouverte` date DEFAULT NULL,
    `lieu_decouverte` varchar(255) DEFAULT NULL,
    `description_fossile` text,
    PRIMARY KEY (`id_fossile`),
    KEY `id_espece` (`id_espece`),
    CONSTRAINT `fossile_ibfk_1` FOREIGN KEY (`id_espece`) REFERENCES `espece` (`id_espece`) ON DELETE CASCADE
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;