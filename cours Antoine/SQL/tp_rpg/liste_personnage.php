<?php
// =================================================== //
$nomServeur = 'localhost';
$nomBase = 'donjons_et_dragons';
$dsn = "mysql:host=$nomServeur;dbname=$nomBase";

$user = 'admin';
$pwd = 'resu_ass';
$options = array(
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
);

$connection = new PDO($dsn, $user, $pwd, $options);
$query_personnages = $connection->prepare("
    SELECT p.id,p.nom,p.pv, p.pv_max,p.pm, p.pm_max,r.nom AS race,c.nom AS classe,g.nom AS guilde, t.titre AS nom_titre,s.forc, s.dexterite, s.intel, s.sagesse, s.charisme
    FROM personnages p
    JOIN race r ON r.id = p.id_race
    JOIN classe c ON c.id = p.id_classe
    LEFT JOIN guilde g ON g.id = p.id_guilde
    LEFT JOIN titre t ON t.id = p.id_titre
    LEFT JOIN statistiques s ON s.id_personnage = p.id
    ORDER BY p.nom ASC
");
$query_personnages->execute();
$personnages = $query_personnages->fetchALl();
// print_r($personnages);
// =================================================== //
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Creation de personnage</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-4 d-flex justify-content-start">
                <a href='game_master.php' class='btn btn-primary'>Maitre du Jeu</a>
            </div>
            <div class="col-4"></div>
            <div class="col-4 d-flex justify-content-end">
                <a href='index.php' class='btn btn-success'>Créer un personnage</a>
            </div>
        </div>
        <h1 class="mb-4">Liste des personnages</h1>
        <?php

        foreach ($personnages as $p) {
            echo "<div class='card mb-3'>";
            echo "<div class='card-header'>";
            echo "<h4>" . $p['nom'] . ($p['nom_titre']) . "</h4>";
            echo "</div>";
            echo "<div class='card-body'>";
            echo "<div class='mt-3'>";
            echo "<a href='profil.php?id=" . $p['id'] . "' class='btn btn-primary'>Voir</a> ";
            echo "<a href='edition.php?id=" . $p['id'] . "' class='btn btn-warning'>Éditer</a> ";
            echo "<a href='delete.php?id=" . $p['id'] . "'class='btn btn-danger'>Supprimer</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        } ?>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>