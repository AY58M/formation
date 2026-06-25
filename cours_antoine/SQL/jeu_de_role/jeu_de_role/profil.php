<?php
// Database connection
$host     = 'localhost';
$base     = 'jeu_de_role';
$dsn      = "mysql:host=$host;dbname=$base;charset=utf8";
$user     = 'admin';
$password = 'resu_ass';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$connection = new PDO($dsn, $user, $password, $options);

if (!isset($_GET['id_perso'])) {
    die("Personnage introuvable");
}

$id = $_GET['id_perso'];

// Retrieve the character along with its class, race, and guild information
$query = $connection->prepare("
    SELECT
        p.*,
        c.nom AS classe_nom,
        r.nom AS race_nom,
        g.nom AS guilde_nom
    FROM personnages p
    JOIN classes c ON p.classe_id = c.id
    JOIN races   r ON p.race_id   = r.id
    JOIN guildes g ON p.guilde_id = g.id
    WHERE p.id = :id
");

$query->execute(['id' => $id]);
$personnage = $query->fetch();

// If no character is found, stop the script
if (!$personnage) {
    die("Personnage inexistant");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil – <?= htmlspecialchars($personnage['nom']); ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="container mt-5">

<a href="index.php" class="btn btn-secondary mb-4">
    Retour
</a>

<div class="card p-4">

    <img
        src="<?= htmlspecialchars($personnage['img_url']); ?>"
        style="width:300px"
        class="mb-3"
        alt="image de profil"
    >

    <h1><?= htmlspecialchars($personnage['nom']); ?></h1>
    <h3><?= htmlspecialchars($personnage['titre']); ?></h3>

    <hr>

    <p><strong>Classe :</strong> <?= htmlspecialchars($personnage['classe_nom']); ?></p>
    <p><strong>Race :</strong>   <?= htmlspecialchars($personnage['race_nom']); ?></p>
    <p><strong>Guilde :</strong> <?= htmlspecialchars($personnage['guilde_nom']); ?></p>

    <hr>

    <!-- Statistics -->
    <p><strong>PV :</strong>   <?= $personnage['pv']; ?> / <?= $personnage['pv_max']; ?></p>
    <p><strong>Mana :</strong> <?= $personnage['mana']; ?> / <?= $personnage['mana_max']; ?></p>

    <hr>

     <!-- Attributes -->
    <p><strong>Dextérité :</strong>    <?= $personnage['dext']; ?></p>
    <p><strong>Force :</strong>        <?= $personnage['forc']; ?></p>
    <p><strong>Sagesse :</strong>      <?= $personnage['sag']; ?></p>
    <p><strong>Charisme :</strong>     <?= $personnage['chari']; ?></p>
    <p><strong>Intelligence :</strong> <?= $personnage['intel']; ?></p>
    <p><strong>Constitution :</strong> <?= $personnage['const']; ?></p>

</div>

</body>
</html>
