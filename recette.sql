----------------------------db='application'-----------------------------
DROP TABLE IF EXISTS `recette`;

CREATE TABLE `recette` (
  `idR` int ,
  `nomR` varchar(255) ,
  `nomi` timestamp NULL DEFAULT NULL,
  
  PRIMARY KEY (`idR`)
);
CREATE TABLE `instructions` (
    idIn INT  PRIMARY KEY,
    idR INT,
    instruction TEXT,
    FOREIGN KEY (idR) REFERENCES recette(idR)
);
CREATE TABLE `ingredient`(
    idI INT  PRIMARY KEY,
    nomI TEXT,
    unitemesure VARCHAR(30),
    nbrcalorie INT ,
    typeI VARCHAR(30),
    
);
CREATE TABLE `adminn`(
  `id` int ,
  `username` varchar(255) ,
  `password` varchar(255) ,

  `full_name` varchar(255) ,
  
  PRIMARY KEY (`id`)
);

CREATE TABLE `ing_recette` (
  `idR` int ,
  `idI` int,
  `quantite` int ,
  PRIMARY KEY (`idR`),
  PRIMARY KEY (`idI`),
  FOREIGN KEY (idR) REFERENCES recette(idR),
FOREIGN KEY (idI) REFERENCES ingredient(idI)
);

CREATE TABLE equipement (
    idI INT  PRIMARY KEY,
    nomI TEXT,
    unitemesure VARCHAR(30),
    nbrcalorie INT ,
    typeI VARCHAR(30),
    
);