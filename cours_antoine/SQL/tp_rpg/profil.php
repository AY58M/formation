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

$id = $_GET['id'];

$query_personnage = $connection->prepare("
    SELECT p.id,p.nom,p.pv, p.pv_max,p.pm, p.pm_max,r.nom AS race,c.nom AS classe,g.nom AS guilde, t.titre AS nom_titre,s.forc, s.dexterite, s.intel, s.sagesse, s.charisme
    FROM personnages p
    JOIN race r ON r.id = p.id_race
    JOIN classe c ON c.id = p.id_classe
    LEFT JOIN guilde g ON g.id = p.id_guilde
    LEFT JOIN titre t ON t.id = p.id_titre
    LEFT JOIN statistiques s ON s.id_personnage = p.id
    WHERE p.id = :id
");
$query_personnage->execute(['id' => $id]);
$personnage = $query_personnage->fetch();
$p = $personnage;
// print_r($id);
// =================================================== //
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-4">
        <?php
        if (!$p) {
            echo "Ce personnage n'existe pas.";
        } else {
            echo "<div class='card mb-3'>";
            echo "<div class='card-header'>";
            echo "<h4>" . $p['nom'] . ($p['nom_titre']) . "</h4>";
            echo "</div>";
            echo "<div class='card-body'>";
            echo "<ul class='list-group list-group-flush'>";
            echo "<li class='list-group-item'>Race : " . $p['race'] . "</li>";
            echo "<li class='list-group-item'>Classe : " . $p['classe'] . "</li>";
            echo "<li class='list-group-item'>Guilde : " . ($p['guilde']) . "</li>";
            echo "<li class='list-group-item'>PV : " . $p['pv'] . " / " . $p['pv_max'] . "</li>";
            echo "<li class='list-group-item'>PM : " . $p['pm'] . " / " . $p['pm_max'] . "</li>";
            echo "<li class='list-group-item'>Force : " . ($p['forc']) . "</li>";
            echo "<li class='list-group-item'>Dexterité : " . $p['dexterite'] . "</li>";
            echo "<li class='list-group-item'>Intelligence : " . $p['intel'] . "</li>";
            echo "<li class='list-group-item'>Sagesse : " . $p['sagesse'] . "</li>";
            echo "<li class='list-group-item'>Charisme : " . $p['charisme'] . "</li>";
            echo "</ul>";
            echo "<div class='mt-3'>";
            echo "<a href='" . $p['id'] . "' class='btn btn-primary'>Voir</a> ";
            echo "<a href='edition.php?id=" . $p['id'] . "' class='btn btn-warning'>Éditer</a> ";
            echo "<a href='" . $p['id'] . "'class='btn btn-danger'>Supprimer</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>