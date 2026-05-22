<?php
$host = 'localhost';
$base = 'jeu_de_role';
$dsn = "mysql:host=$host;dbname=$base;charset=utf8";
$user = 'admin';
$password = 'resu_ass';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$connection = new PDO($dsn, $user, $password, $options);

if (!isset($_GET['id_perso'])) {
    die("Personnage introuvable");
}

$id = $_GET['id_perso'];

$query = $connection->prepare(
"
SELECT
    p.*,
    c.nom AS classe_nom,
    r.nom AS race_nom,
    g.nom AS guilde_nom
FROM personnages p
JOIN classes c ON p.classe_id = c.id
JOIN races r ON p.race_id = r.id
JOIN guildes g ON p.guilde_id = g.id
WHERE p.id = :id
"
);

$query->execute(['id' => $id]);
$personnage = $query->fetch();

if (!$personnage) {
    die("Personnage inexistant");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="container mt-5">

<a href="liste_personnage.php" class="btn btn-secondary mb-4">
    Retour
</a>

<div class="card p-4">

    <img
        src="<?= $personnage['img_url']; ?>"
        style="width:300px"
        class="mb-3"
    >

    <h1><?= htmlspecialchars($personnage['nom']); ?></h1>

    <h3><?= htmlspecialchars($personnage['titre']); ?></h3>

    <hr>

    <p><strong>Classe :</strong> <?= $personnage['classe_nom']; ?></p>
    <p><strong>Race :</strong> <?= $personnage['race_nom']; ?></p>
    <p><strong>Guilde :</strong> <?= $personnage['guilde_nom']; ?></p>

    <hr>

</html>