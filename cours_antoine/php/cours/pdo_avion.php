<?php
// Pour notre Data Source Name on a besoin du nom du serveur, et de la base
$nomServeur = 'localhost';
$nomBase = 'evaluation_compagnie_aerienne';
// On crée notre DSN avec nos deux variables $nomServeur et $nomBase
$dsn = "mysql:host=$nomServeur;dbname=$nomBase";
$username = 'admin';
$password = 'resu_ass';
$options = array(
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // active la géstion des erreurs sous la forme d'exceptions 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // les données seront récupérés sous la forme de tableaux
);
// On établit la connexion => on instancie un nouvel objet de la classe PDO que l'on stocke dans la variable $connection
$connection = new PDO($dsn, $username, $password, $options);
$query = $connection->prepare("SELECT*FROM client WHERE date_naissance<:birth_date");
$query->bindValue(':birth_date', '1997-04-03');
$query->execute();
$results = $query->fetchAll();

echo "<pre>";
print_r($results);
echo "</pre>";

// echo "<pre>";
// print_r($avions);
// echo "</pre>";

// echo "<table border='1' cellpadding='10' cellspacing='5'>";

// // En-têtes (colonnes)
// echo "<tr>";
// foreach ($avions[0] as $colonne => $valeur) {
//     echo "<th>$colonne</th>";
// }
// echo "</tr>";

// // Données
// foreach ($avions as $avion) {
//     echo "<tr>";
//     foreach ($avion as $valeur) {
//         echo "<td>$valeur</td>";
//     }
//     echo "</tr>";
// }

// echo "</table>";
