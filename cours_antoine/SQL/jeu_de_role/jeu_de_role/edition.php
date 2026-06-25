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
    die('Personnage introuvable');
}

$id = $_GET['id_perso'];

// Retrieve the character to edit
$query = $connection->prepare("SELECT * FROM personnages WHERE id = :id");
$query->execute(['id' => $id]);
$personnage = $query->fetch();

if (!$personnage) {
    die('Personnage inexistant');
}

// Form processing
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $update = $connection->prepare("
        UPDATE personnages
        SET
            nom      = :nom,
            titre    = :titre,
            pv       = :pv,
            pv_max   = :pv_max,
            mana     = :mana,
            mana_max = :mana_max
        WHERE id = :id
    ");

    $update->execute([
        'nom'     => $_POST['nom'],
        'titre'   => $_POST['titre'],
        'pv'      => $_POST['pv'],
        'pv_max'  => $_POST['pv_max'],
        'mana'    => $_POST['mana'],
        'mana_max'=> $_POST['mana_max'],
        'id'      => $id,
    ]);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Édition – <?= htmlspecialchars($personnage['nom']); ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="container mt-5">

<h1>Modifier le personnage</h1>

<form method="POST">

    <div class="mb-3">
        <label>Nom</label>
        <input type="text" name="nom" class="form-control"
               value="<?= htmlspecialchars($personnage['nom']); ?>">
    </div>

    <div class="mb-3">
        <label>Titre</label>
        <input type="text" name="titre" class="form-control"
               value="<?= htmlspecialchars($personnage['titre']); ?>">
    </div>

    <div class="mb-3">
        <label>PV</label>
        <input type="number" name="pv" class="form-control"
               value="<?= $personnage['pv']; ?>">
    </div>

    <div class="mb-3">
        <label>PV Maximum</label>
        <input type="number" name="pv_max" class="form-control"
               value="<?= $personnage['pv_max']; ?>">
    </div>

    <div class="mb-3">
        <label>Mana</label>
        <input type="number" name="mana" class="form-control"
               value="<?= $personnage['mana']; ?>">
    </div>

    <div class="mb-3">
        <label>Mana Maximum</label>
        <input type="number" name="mana_max" class="form-control"
               value="<?= $personnage['mana_max']; ?>">
    </div>

    <button type="submit" class="btn btn-primary">
        Sauvegarder
    </button>

    <a href="index.php" class="btn btn-secondary">
        Retour
    </a>

</form>

</body>
</html>
