<?php
$nomServeur = 'localhost';
$nomBase = 'evaluation_compagnie_aerienne';
$dsn = "mysql:host=$nomServeur;dbname=$nomBase";

$username = 'admin';
$password = 'resu_ass';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$connection = new PDO($dsn, $username, $password, $options);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Exercice_4-1</h3>
    <?php
    $query = $connection->prepare("SELECT * FROM reservation");
    $query->execute();
    $results = $query->fetchAll();
    foreach ($results as $result) {
        echo $result['id_reservation'];
        echo "<br>";
        echo $result['id_client'];
        echo "<br>";
        echo $result['id_vol'];
        echo "<br>";
        echo $result['date_reservation'];
        echo "<br>";
        echo $result['id_statut'];
        echo "<br>";
    }

    // foreach ($results as $result) {
    //     foreach ($result as $colonne => $valeur) {
    //         echo $colonne . " : " . $valeur . "<br>";
    //     }
    //     echo "<br>";
    // }

    ?>
   <h3>Exercice_4-2</h3>
    <?php
    $query = $connection->prepare("SELECT nom,prenom FROM client");
    $query->execute();
    $results = $query->fetchAll();

    echo "<table>";
    echo "<tr><th>Nom</th><th>Prenom</th></tr>";

    foreach ($results as $client){
        echo "<tr>";
        echo "<td>" .$client['nom']. "</td>";
        echo "<td>" .$client['prenom']. "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>


</body>

</html>