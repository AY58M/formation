CREATE DATABASE IF NOT EXISTS donjons_et_dragons;
USE donjons_et_dragons;
-- --------------------------------------------
--  Table : Guilde
-- --------------------------------------------
CREATE TABLE guilde (
  id            INT           NOT NULL AUTO_INCREMENT,
  nom           VARCHAR(100)  NOT NULL,
  description   TEXT,
  date_creation DATETIME      NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

-- --------------------------------------------
--  Table : Race
-- --------------------------------------------
CREATE TABLE race (
  id          INT           NOT NULL AUTO_INCREMENT,
  nom         VARCHAR(100)  NOT NULL,
  description TEXT,
  PRIMARY KEY (id)
);


-- --------------------------------------------
--  Table : Classe
-- --------------------------------------------
CREATE TABLE classe (
  id          INT           NOT NULL AUTO_INCREMENT,
  nom         VARCHAR(100)  NOT NULL,
  description TEXT,
  PRIMARY KEY (id)
);

-- --------------------------------------------
--  Table : Titre
-- --------------------------------------------
CREATE TABLE titre (
id 			INT NOT NULL AUTO_INCREMENT,
titre 		VARCHAR(150),
PRIMARY KEY (id)
);

-- --------------------------------------------
--  Table : Personnages
-- --------------------------------------------
CREATE TABLE personnages (
  id                 INT           NOT NULL AUTO_INCREMENT,
  nom                VARCHAR(100)  NOT NULL,
  pv      			 INT           NOT NULL DEFAULT 100,
  pv_max      		 INT           NOT NULL DEFAULT 100,
  pm 	 			 INT           NOT NULL DEFAULT 50,
  pm_max 	 		 INT           NOT NULL DEFAULT 50,
  id_titre 			 INT,
  id_guilde          INT,
  id_race            INT           NOT NULL,
  id_classe          INT           NOT NULL,
  PRIMARY KEY (id),
  CONSTRAINT fk_perso_titre  FOREIGN KEY (id_titre) REFERENCES titre(id),
  CONSTRAINT fk_perso_guilde  FOREIGN KEY (id_guilde) REFERENCES guilde(id),
  CONSTRAINT fk_perso_race    FOREIGN KEY (id_race)   REFERENCES race(id),
  CONSTRAINT fk_perso_classe  FOREIGN KEY (id_classe) REFERENCES classe(id)
);


-- --------------------------------------------
--  Table : Statistiques
-- --------------------------------------------
CREATE TABLE statistiques (
  id             INT  NOT NULL AUTO_INCREMENT,
  id_personnage  INT  NOT NULL,
  forc           INT  NOT NULL DEFAULT 10,
  dexterite      INT  NOT NULL DEFAULT 10,
  intel   		 INT  NOT NULL DEFAULT 10,
  sagesse        INT  NOT NULL DEFAULT 10,
  charisme       INT  NOT NULL DEFAULT 10,
  PRIMARY KEY (id),
  CONSTRAINT fk_stats_perso FOREIGN KEY (id_personnage) REFERENCES personnages(id) ON DELETE CASCADE,
  CONSTRAINT uq_stats_perso  UNIQUE (id_personnage)
);