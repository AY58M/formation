CREATE TABLE personnages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    titre VARCHAR(100),
    img_url VARCHAR(255),
    pv_max INT NOT NULL,
    pv INT NOT NULL,
    mana INT NOT NULL,
    mana_max INT NOT NULL,
    dext INT DEFAULT 0,
    forc INT DEFAULT 0,
    sag INT DEFAULT 0,
    chari INT DEFAULT 0,
    intel INT DEFAULT 0,
    const INT DEFAULT 0,
    classe_id INT,
    race_id INT,
    guilde_id INT
);

CREATE TABLE classes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE races (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE guildes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
    description TEXT
);

INSERT INTO classes (nom) VALUES
('Guerrier'),
('Mage'),
('Voleur'),
('Prêtre'),
('Chasseur');

INSERT INTO races (nom) VALUES
('Humain'),
('Elfe'),
('Nain'),
('Orc');

