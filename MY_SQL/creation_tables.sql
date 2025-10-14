-- Creation de la base
CREATE DATABASE IF NOT EXISTS exercice_sql_arles;
-- switch sur la base
USE exercice_sql_arles;
-- creation table utilisateur
CREATE TABLE IF NOT EXISTS user (
user_id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(75) NOT NULL UNIQUE,
pass VARCHAR (255) NOT NULL,
date_creation DATETIME
);