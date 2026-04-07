CREATE DATABASE exemple_cours;
USE exemple_cours;
CREATE TABLE users (
id INT NOT NULL AUTO_INCREMENT,
email VARCHAR (100) NOT NULL,
firstname VARCHAR(50) NOT NULL,
name VARCHAR(50) NOT NULL,
birth_date DATE,
PRIMARY KEY(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8
INSERT INTO users (email,firstname,name,birth_date)
VALUES ('bob@bob.com','Bob',"Bill","1980-03-16");
INSERT INTO users (email,firstname,name,birth_date)
VALUES ('john@john.com','John',"Brel","1977-02-09");
UPDATE users
SET birth_date = "1977-09-02"
WHERE id=3;
DELETE FROM users
WHERE id=2;


-- Exercice 2:

-- 1) Listez le titre des vidéos de type VHS.
SELECT titre FROM video WHERE type_video = 'VHS';
'Terminator'
'Jurassic Park'
'Toy Story'
-- 2) Comptez le nombre de vidéo club à Hyères.
SELECT COUNT(*) AS nombre_videoclub FROM videoclub WHERE ville = 'Hyères';
nombre_videoclub
2
-- 3) Listez les clients (nom et prénom) qui habitent à Béziers.
SELECT nom,prenom FROM client_videoclub WHERE ville = 'Béziers';
'Martin', 'Claire'
'Roux', 'Paul'
-- 4) Listez les 10 premières vidéos (titre).
SELECT titre FROM video LIMIT 10;
'Titanic'
'Matrix'
'Le Seigneur des Anneaux'
'Le Seigneur des Anneaux'
'Star Wars'
'Terminator'
'Le Seigneur des Anneaux'
'Inception'
'Avatar'
'Le Seigneur des Anneaux'
-- 5) Listez les 4 premières vidéos (titre) de type Blu-ray.
SELECT titre FROM video WHERE type_video = 'Blu-ray' LIMIT 4 ;
'Matrix'
'Star Wars'
'Avatar'
'Gladiator'

-- 6) Compter le nombre de clients qui habitent à Valence.
SELECT COUNT(*) FROM client_videoclub WHERE ville = 'Valence' ;
2

-- 7) Écrivez la requête « Insérer un nouveau vidéo club qui s’appelle videofutur et qui se trouve dans la ville de votre choix » .
INSERT INTO videoclub (nom,ville)
VALUES ('Videofuture', 'Arles');

-- 8) Écrivez la requête « Insérer un client qui s’appelle Jean Dupont et qui habite Melun » .
INSERT INTO client_videoclub (nom,prenom,ville)
VALUES ('DUPONT','Jean','Melun')

-- 9) Écrivez la requête « Supprimer la vidéo pour titre « Terminator ».
DELETE FROM video WHERE id_video = 6

-- 10) Écrivez la requête « Supprimer le client Pierre Legrand qui habite à Argenteuil.
DELETE FROM client_videoclub WHERE id_client = 3

-- 11) Écrivez la requête « supprimer le vidéo club qui a pour id 15 ».


-- 12) Écrivez la requête « Insérer une vidéo de votre choix de type DVD ».
INSERT INTO video (titre, type_video)
VALUES ('Harry Potter', 'DVD')

-- 13) Écrivez la requête « Mettre à jour l’adresse du client Jean Petit qui habite maintenant à BANDOL ».
UPDATE client_videoclub
SET ville = 'BANDOL'
WHERE id_client = 4;

-- Exercice 3

-- 1) Écrivez la requête « Mettre à jour le prix du produit « smartphone Xiaomi MI9 » qui vient
-- de passer à 130€. »
SELECT id_produit FROM produit WHERE nom = 'Smartphone Xiaomi MI9'
UPDATE produit SET prix = 130.00 WHERE id_produit = 1;

-- 2) Écrivez la requête « Insérer le nouveau produit « Box TV Android » qui a pour prix
-- 110€. »
INSERT INTO (nom,prix)
VALUES ('Box TV Android','130.00')

-- 3) Écrivez la requête « Mettre à jour l’adresse de Torres Virginie qui habite maintenant
-- Montreuil dont le code postal est le 93100 et son adresse est le 12 rue croix de Chavaux»
SELECT id_client FROM client_commerce WHERE nom= 'TORRES' AND prenom = 'Virginie'
UPDATE client_commerce SET ville = 'Montreuil', code_postal = '93100', adresse = '12 rue croix de Chavaux' WHERE id_client = 1

-- 4) Écrivez la requête « Insérer le nouveau Client Philippe Jean qui habite à Rouen ».
INSERT INTO client_commerce (nom,prenom,ville)
VALUES ('Philippe','Jean','Rouen')

-- 5) Lister les 4 derniers clients.
SELECT * FROM client_commerce ORDER BY id_client DESC LIMIT 4

-- 6) Lister les 4 premiers clients dont leur nom de leur ville commence par un T.
SELECT * FROM client_commerce WHERE ville LIKE 'T%' LIMIT 4

-- 7) Lister les clients dont leur nom commence par un A.
SELECT * FROM client_commerce WHERE nom LIKE 'A%'

-- 8) Lister les clients dont leur prénom contient un O.
SELECT * FROM client_commerce WHERE prenom LIKE '%o%'

-- 9) Dans la table client sélectionnez les prénoms sans doublon.
SELECT DISTINCT prenom FROM client_commerce

-- 10) Sélectionner les produits dont le prix est compris entre 50€ et 250€.
SELECT * FROM produit WHERE prix BETWEEN 50 AND 250;
-- ou bien :
SELECT * FROM produit WHERE prix >= 50 AND prix <=250:



-- Exercice supplémentaire (Activité 2 _ exercice 7)

-- On considère la base de données voyage

-- Insertion : Ajoute une nouvelle destination : "Maroc", ville "Marrakech", prix 55€/nuit, climat "Tropical".
INSERT INTO destination (pays,ville,prix_nuit,type_climat)
VALUES ('Maroc','Marrakech','55','Tropical')

-- Mise à jour : Le prix de la nuit à "Reykjavik" augmente de 15€.
SELECT id_destination FROM destination WHERE ville = 'Reykjavik';
UPDATE destination SET prix_nuit = prix_nuit + 15 WHERE id_destination = 3;

-- Sélection simple : Liste toutes les destinations de type "Tropical".
SELECT * FROM destination WHERE type_climat = 'Tropical'

-- Tri : Liste les destinations de la moins chère à la plus chère.
SELECT * FROM destination ORDER BY prix_nuit ASC

-- Recherche textuelle : Liste les voyageurs dont l'email finit par "@email.com".
SELECT * FROM voyageur WHERE email LIKE '%@email.com'

-- Calcul (Simple) : Affiche le nom de chaque destination et le prix total pour un séjour de 10 nuits (nommer la colonne prix_total_10_jours).
SELECT ville, prix_nuit*10 AS prix_total_10_jours FROM destination

-- Filtre sur Date : Liste les réservations qui commencent après le 1er juin 2024.
SELECT * FROM reservation WHERE date_debut > '2024-06-01';

-- Doublons: Liste les noms des voyageurs sans doublon (au cas où ils apparaissent plusieurs fois)
SELECT DISTINCT nom FROM voyageur


-- LES JOINTURES

-- Activité 7 : Jointure

-- Exercice 1

SELECT * FROM operation AS op
JOIN compte as cpt
ON op.id_compte = cpt.id_compte


SELECT * FROM client AS cl
JOIN client_has_compte AS chc
ON chc.client_id_client = cl.id_client
JOIN compte AS cpt
ON chc.compte_id_compte = cpt.id_compte


-- 5) Listez le nom, prénom, adresse des clients avec leur solde en
-- banque.

SELECT cl.nom_client,cl.prenom_client,cl.adresse_client,cpt.solde FROM client AS cl
LEFT JOIN client_has_compte AS chc
ON chc.client_id_client = cl.id_client
LEFT JOIN compte AS cpt
ON chc.compte_id_compte = cpt.id_compte

-- 6) Listez le nom, prénom, adresse des clients qui habitent à Noel et
-- qui ont un solde compris entre 1000€ et 4000€.

SELECT cl.nom_client,cl.prenom_client,cl.adresse_client,cpt.solde,cl.ville_client FROM client AS cl
LEFT JOIN client_has_compte AS chc
ON chc.client_id_client = cl.id_client
LEFT JOIN compte AS cpt
ON chc.compte_id_compte = cpt.id_compte
WHERE cpt.solde BETWEEN 1000 AND 4000
AND cl.ville_client = "Noel"




-- Exercice 2

-- 3) Jointure entre client et commande
SELECT * FROM commande AS com
JOIN client AS cl
ON com.id_client = cl.id_client

-- 4) Jointure entre client et livraison
SELECT * FROM client AS cl
JOIN client_has_livraison AS chl
ON chl.id_client = cl.id_client
JOIN livraison AS l
ON l.id = chl.id_livraison

-- 5) Lister les clients qui ont commandé le lecteur blu-Ray 4k Samsung.
SELECT DISTINCT cl.id_client,cl.nom,cl.prenom FROM produit AS p
JOIN commande_has_produit AS chp
ON chp.produit_id_produit=p.id_produit
JOIN commande AS cmd
ON cmd.id_commande = chp.commande_id_commande
JOIN client AS cl
ON cl.id_client = cmd.id_client
WHERE nom_produit = 'Lecteur blu-Ray 4k Samsung'

-- 6) Lister les clients qui ont commandé un Iphone

-- 7) Lister les clients qui ont choisi la livraison par Chronopost.
SELECT * FROM client AS cl
JOIN client_has_livraison AS chl
ON cl.id_client = chl.id_client
JOIN livraison AS l
ON l.id=chl.id_livraison
WHERE l.nomlivraison = "Chronopost"

-- 8) Lister les clients qui ont commandé entre le 25 décembre 2016 et le 25 décembre
-- 2018.
SELECT * FROM client AS cl
JOIN commande AS cmd
ON cl.id_client = cmd.id_client
WHERE cmd.date BETWEEN "2016-12-25" AND "2018-12-25"

-- 9) Compter le nombre de clients qui ont acheté 100 DVD vierges.
SELECT COUNT(cl.id_client) FROM commande AS cmd
JOIN commande_has_produit AS chp
ON cmd.id_commande = chp.commande_id_commande
JOIN produit AS p
ON chp.produit_id_produit = p.id_produit
JOIN client AS cl
ON cl.id_client = cmd.id_client
WHERE nom_produit LIKE "%100 DVD vierge%"

-- 10) Lister les clients qui ont commandé des articles dont le prix est compris entre 50
-- € et 250€.
SELECT DISTINCT cl.id_client,cl.nom,cl.prenom FROM commande AS cmd
JOIN commande_has_produit AS chp
ON cmd.id_commande = chp.commande_id_commande
JOIN produit AS p
ON chp.produit_id_produit = p.id_produit
JOIN client AS cl
ON cl.id_client = cmd.id_client
WHERE p.prix>50 AND p.prix<250

-- 11) Récuperer le chiffre d'affaire des ventes de Lecteur blu-Ray 4k Samsung




-- GROUP BY / HAVING

-- 12) Récuperer le monant moyen des commandes
SELECT AVG(total_commande)
FROM(SELECT chp.commande_id_commande, SUM(p.prix) as total_commande FROM commande_has_produit as chp
JOIN produit as p
ON p.id_produit = chp.produit_id_produit
GROUP BY chp.commande_id_commande) AS sous_requete


-- EXERCICE 6

-- 1) Donnez les clés primaires des tables de la base

hotel : numhotel
chambre : numchambre
client : numclient
occupation : numoccup
reservation : numresa

-- 2) Quelles sont les tables qui ont une ou plusieurs clés étrangères ? 
-- Donnez la (ou les) clés étrangères de ces tables.

Table chambre : numhotel
Table occupation : numclient, numhotel, numchambre
Table reservation : numclient, numhotel, numchambre

-- 3) Jointure entre hôtel et chambre.
SELECT * FROM hotel as h
JOIN chambre as c 
ON h.numhotel = c.numhotel;

-- 4) Jointure entre client et occupation.
SELECT * FROM client as c
JOIN occupation as o 
ON c.numclient = o.numclient;

-- 5) Jointure entre client et réservation.
SELECT * FROM client as c
JOIN reservation as r 
ON c.numclient = r.numclient;

-- 6) Compter le nombre total de chambres groupées par le nom de l'hôtel.
SELECT h.nom, COUNT(c.numchambre) AS nombre_chambres FROM hotel AS h
JOIN chambre AS c 
ON h.numhotel = c.numhotel
GROUP BY h.nom;

-- 7) Quels sont les clients(nom,prénom) qui occupent des chambre dont le prix
-- est supérieur à 100 euros.
SELECT DISTINCT c.nom, c.prenom
FROM client AS c
JOIN occupation AS o 
ON c.numclient = o.numclient
JOIN chambre AS ch 
ON ch.numchambre = o.numchambre 
AND ch.numhotel = o.numhotels
WHERE ch.prixnuitht > 100;

-- 8) Lister les hôtels(nom,ville) qui ont des chambres de type suite.
SELECT h.nom, h.ville FROM hotel AS h
JOIN chambre As ch
ON h.numhotel = ch.numhotel
WHERE ch.type = 'suite';

-- 9) Compter le nombre de clients qui sont dans des hôtels 3 étoiles.
SELECT COUNT(DISTINCT c.numclient) AS nombre_clients FROM client c
JOIN occupation AS o 
ON c.numclient = o.numclient
JOIN hotel h ON o.numhotel = h.numhotel
WHERE h.etoiles = 3;

-- autre solution :
SELECT COUNT(DISTINCT o.numclient) FROM occupation as O
JOIN hotel as h on o.numhotel = h.numhotel
WHERE h.etoiles = 3 

-- 10) Compter le nombre de clients qui sont dans des hôtels 3 étoiles à Nice.
SELECT COUNT(DISTINCT c.numclient) AS nombre_clients FROM client c
JOIN occupation AS o
ON c.numclient = o.numclient
JOIN hotel h ON o.numhotel = h.numhotel
WHERE h.etoiles = 3 AND h.ville = 'Nice';

-- autre solution :
SELECT COUNT(DISTINCT o.numclient) FROM occupation AS o
JOIN hotel AS h ON o.numhotel = h.numhotel
WHERE h.etoiles = 3 AND h.ville = 'Nice';

-- 11) Combien y'a t'il d'hôtel à Bordeaux qui ont des chambres de type
-- double.
SELECT COUNT(DISTINCT h.numhotel) AS nombre_hotel FROM hotel AS h
JOIN chambre AS ch
ON h.numhotel = ch.numhotel
WHERE h.ville = 'Bordeaux' AND ch.type = 'double';

-- 12) Quels sont les clients qui occupent une chambre entre le 1er janvier 2014 et le 1er avril 2014 .

SELECT DISTINCT c.numclient, c.nom, c.prenom
FROM client c
JOIN occupation o ON c.numclient = o.numclient
WHERE o.datearrivee <= '2014-04-01'
AND (o.datedepart IS NULL OR o.datedepart >= '2014-01-01');

-- 13)Quels sont les clients qui ont réservé une chambre pour le 1er avril
-- 2014 et le 1er mai 2014.

SELECT DISTINCT h.nom, h.ville
FROM hotel h
JOIN occupation o ON h.numhotel = o.numhotel
WHERE o.datearrivee <= '2014-05-01'
  AND (o.datedepart IS NULL OR o.datedepart >= '2014-02-01');

--   14) Quels sont les hôtels(nom,ville) qui ont des clients qui ont réservé
-- entre le 1er février 2014 et le 1er mai 2014.

SELECT DISTINCT h.numhotel, h.nom, h.ville
FROM hotel AS h
JOIN reservation AS r 
ON h.numhotel = r.numhotel
WHERE r.datearrivee <= '2014-05-01' AND r.datedepart >= '2014-02-01';

-- 13) Quel est l'hôtel (nom, ville) ou le prix de la chambre est le moins cher.
SELECT h.nom, h.ville
FROM hotel h
JOIN chambre c ON h.numhotel = c.numhotel
WHERE c.prixnuitht = (
    SELECT MIN(prixnuitht)
    FROM chambre);

-- SELECT h.nom, AVG(c.prixnuitht) AS prix_moyen
SELECT h.nom, AVG(c.prixnuitht) AS prix_moyen
FROM hotel h
JOIN chambre c ON h.numhotel = c.numhotel
GROUP BY h.nom;

-- 15) Quelle est la ville où le prix de la chambre est le plus cher.
SELECT DISTINCT h.ville
FROM hotel h
JOIN chambre c ON h.numhotel = c.numhotel
WHERE c.prixnuitht = (
    SELECT MAX(prixnuitht)
    FROM chambre);

-- 16) Trouver les hôtels qui ont des clients portant le nom « dupont »SELECT DISTINCT h.nom, h.ville
FROM hotel h
JOIN occupation o ON h.numhotel = o.numhotel
JOIN client c ON o.numclient = c.numclient
WHERE c.nom = 'Dupont';








































