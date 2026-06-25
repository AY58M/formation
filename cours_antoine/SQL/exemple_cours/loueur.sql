-- Table vidéoclub
CREATE TABLE videoclub (
    id_videoclub INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    ville VARCHAR(100) NOT NULL
);

-- Table client
CREATE TABLE client_videoclub (
    id_client INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    ville VARCHAR(100) NOT NULL,
    id_videoclub INT,
    FOREIGN KEY (id_videoclub) REFERENCES videoclub(id_videoclub)
);

-- Table vidéo
CREATE TABLE video (
    id_video INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(100) NOT NULL,
    type_video ENUM('DVD', 'Blu-ray', 'VHS') NOT NULL,
    id_videoclub INT,
    FOREIGN KEY (id_videoclub) REFERENCES videoclub(id_videoclub)
);

-- Données vidéoclub
INSERT INTO videoclub (nom, ville) VALUES
('CinéMax', 'Hyères'),
('FilmStore', 'Béziers'),
('VideoWorld', 'Valence'),
('StarVideo', 'Paris'),
('MegaVideo', 'Lyon'),
('Top Ciné', 'Hyères');

-- Données clients
INSERT INTO client_videoclub (nom, prenom, ville, id_videoclub) VALUES
('Durand', 'Pierre', 'Hyères', 1),
('Martin', 'Claire', 'Béziers', 2),
('Legrand', 'Pierre', 'Argenteuil', 2),
('Petit', 'Jean', 'Paris', 4),
('Bernard', 'Lucie', 'Valence', 3),
('Dupuis', 'Sophie', 'Valence', 3),
('Roux', 'Paul', 'Béziers', 2),
('Papont', 'Jean-Pierre', 'Hyères', 6);

-- Données vidéos
INSERT INTO video (titre, type_video, id_videoclub) VALUES
('Titanic', 'DVD', 1),
('Matrix', 'Blu-ray', 1),
('Le Seigneur des Anneaux', 'DVD', 1),
('Le Seigneur des Anneaux', 'DVD', 2),
('Star Wars', 'Blu-ray', 2),
('Terminator', 'VHS', 2),
('Le Seigneur des Anneaux', 'DVD', 3),
('Inception', 'DVD', 3),
('Avatar', 'Blu-ray', 3),
('Le Seigneur des Anneaux', 'DVD', 4),
('Jurassic Park', 'VHS', 4),
('Harry Potter', 'DVD', 4),
('Le Seigneur des Anneaux', 'DVD', 5),
('Gladiator', 'Blu-ray', 5),
('Shrek', 'DVD', 5),
('Toy Story', 'VHS', 5),
('Le Seigneur des Anneaux', 'DVD', 6),
('Inception', 'DVD', 6),
('Avatar', 'Blu-ray', 6);