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

INSERT INTO guildes (nom, description) VALUES
('La Lame d\'Argent', 'Une guilde de guerriers spécialisés dans le combat à l\'épée.'),
('Les Arcanistes', 'Une guilde de mages maîtrisant les arcanes les plus puissants.'),
('Les Ombres', 'Une guilde de voleurs experts en furtivité et en cambriolage.'),
('Les Soigneurs', 'Une guilde de prêtres dévoués à la guérison et à la protection.'),
('Les Chasseurs de l\'Ombre', 'Une guilde de chasseurs spécialisés dans la traque et la chasse de créatures dangereuses.');

INSERT INTO personnages (nom, titre, img_url, pv_max, pv, mana, mana_max, dext, forc, sag, chari, intel, const, classe_id, race_id, guilde_id) VALUES
('Arthas', 'Le Roi Liche', 'https://example.com/arthas.jpg', 1000, 1000, 500, 500, 20, 30, 15, 10, 25, 20, 1, 1, 1),
('Jaina', 'La Grande Sorcière', 'https://example.com/jaina.jpg', 800, 800, 1000, 1000, 15, 10, 30, 20, 25, 15, 2, 2, 2),
('Valeera', 'La Voleuse Rouge', 'https://example.com/valeera.jpg', 600, 600, 300, 300, 30, 15, 10, 25, 20, 10, 3, 3, 3),
('Anduin', 'Le Prêtre de la Lumière', 'https://example.com/anduin.jpg', 700, 700, 800, 800, 10, 20, 25, 30, 15, 20, 4, 1, 4),
('Rexxar', 'Le Chasseur de l\'Ombre', 'https://example.com/rexxar.jpg', 900, 900, 400, 400, 25, 30, 10, 15, 20, 25,5 ,4 ,5);