


-- 1) Lister les clefs primaires des tables fournies
pays : id_pays
aeroport : id_aeroport
modele_avion : id_modele
avion : id_avion
client : id_client
vol : id_vol
statut_reservation : id_statut
reservation : id_reservation

-- 2) Lister les clefs étrangères des tables fournies

aeroport : id_pays
avion : id_modele
vol : id_avion, aeroport_depart, aeroport_arrivee
reservation : id_client, id_vol, id_statut

-- 3) Il y a une table qui joue le rôle d’une table de liaison entre vol et client,
-- laquelle ?
reservation : id_client, id_vol

-- Exercice 4 : SELECT

-- 1) Afficher tous les champs disponibles de la table reservation
SELECT * FROM reservation

-- 2) Afficher le nom et prénom de tous les clients
SELECT nom, prenom FROM client

-- 3) Afficher la date de naissance et l’email des 10 premiers clients de la table
-- rangés par âge
SELECT date_naissance, email FROM client 
ORDER BY 'date_naissance'
LIMIT 10

-- 4) Afficher toutes les clientes qui s'appellent “Marie”
SELECT * FROM client
WHERE prenom = 'Marie'

-- 5) Afficher tous les vols programmés pour le 15 octobre 2025
SELECT * FROM vol
WHERE DATE(datetime_depart_prevu) = '2025-10-15';


-- Exercice 5 : INSERT
-- 1) Insérer un nouveau client de 50 ans “Maurice, Plantier,
INSERT INTO client (nom, prenom, email, date_naissance)
VALUES ('Plantier', 'Maurice', 'mauricebgdu13@yahoo.fr', '1976-03-27');

-- 2) Ajouter l’aéroport de Marseille (code -> MRS, nom ->Marignane) à la liste
-- des aéroports
INSERT INTO aeroport (code_iata, nom_aeroport, ville, id_pays)
VALUES ('MRS', 'Marignane', 'Marseille', 1);

-- 3) Ajouter un Avion F-G115 de modèle Airbus A320 mis en service aujourd’hui
INSERT INTO avion (immatriculation, id_modele, date_mise_en_service)
VALUES ('F-G115', 1, '2026-03-27');

-- 4) Insérer un vol, Numéro AC2101, départ prévu le 15 novembre 2025 à 17h30 et arrivée prévue à 19h30 entre Marseille et Barcelone
INSERT INTO vol (numero_vol, id_avion, aeroport_depart, aeroport_arrivee,datetime_depart_prevu, datetime_arrivee_prevue)
VALUES ('AC2101', 16,1,8, '2026-11-15 17:30:00', '2026-11-15 19:30:00');

-- 5) Ajouter une réservation “en Attente” pour Maurice à ce vol
INSERT INTO reservation (id_client, id_vol, id_statut)
VALUES (
(SELECT id_client FROM client WHERE nom = 'Plantier' AND prenom = 'Maurice' LIMIT 1),
(SELECT id_vol FROM vol WHERE numero_vol = 'AC2101' LIMIT 1),
(SELECT id_statut FROM statut_reservation WHERE libelle_statut = 'en Attente' LIMIT 1)
);


-- Exercice 6 : UPDATE
-- 1) Changer l’email de Maurice Plantier en mauriceplantier@gmail.com
UPDATE client SET email = 'mauriceplantier@gmail.com'
WHERE id_client = 154;

-- 2) Changer le statut de la réservation de Maurice Plantier en “Confirmée”
-- Pour récupérer l'id_statut pour le statut "Confirmée" :
UPDATE reservation AS r
JOIN client AS c 
ON r.id_client = c.id_client
JOIN vol AS v 
ON r.id_vol = v.id_vol
JOIN statut_reservation AS s 
ON s.libelle_statut = 'Confirmée'
SET r.id_statut = s.id_statut
WHERE c.nom = 'Plantier' AND c.prenom = 'Maurice' AND v.numero_vol = 'AC2101';

-- 3) Changer l´heure du vol de Maurice Plantier, celui-ci partira maintenant à 18h
-- et arrivera à 20h
UPDATE vol AS v
JOIN reservation AS r 
ON r.id_vol = v.id_vol
JOIN client AS c 
ON r.id_client = c.id_client
SET v.datetime_depart_prevu = '2025-11-15 18:00:00', v.datetime_arrivee_prevue = '2025-11-15 20:00:00'
WHERE c.nom = 'Plantier' AND c.prenom = 'Maurice'AND v.numero_vol = 'AC2101';

-- 4) Changer tous les vols à destination de la ville de Paris pour Marseille
UPDATE vol AS v
JOIN aeroport a1 
ON v.aeroport_arrivee = a1.id_aeroport
JOIN aeroport a2 
ON a2.ville = 'Marseille'
SET v.aeroport_arrivee = a2.id_aeroport
WHERE a1.ville = 'Paris';

-- 5) La compagnie ouvre une classe “debout dans le couloir”, ajouter 15% de
-- capacité à tous les modèles d’avion

UPDATE modele_avion
SET capacite = ROUND(capacite * 1.15)
WHERE id_modele >= 1;

-- Exercice 7: Requêtes complexes, Opérations, Jointures &
-- Agrégats

-- 1) Afficher le nombre total de clients







