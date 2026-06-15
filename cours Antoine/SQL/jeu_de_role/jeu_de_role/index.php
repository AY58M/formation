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

// Retrieve all characters
$query = $connection->prepare("
    SELECT
        p.id,
        p.nom,
        p.titre,
        p.img_url,
        p.pv,
        p.pv_max
    FROM personnages p
    ORDER BY p.nom ASC
");

$query->execute();
$personnages = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des personnages</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="container mt-4">

<h1 class="mb-4">Liste des personnages</h1>

<a href="create.php" class="btn btn-success mb-4">
    Ajouter un personnage
</a>

<div class="row">

<?php foreach ($personnages as $personnage) : ?>

    <div class="col-md-4 mb-4">
        <div class="card h-100">

            <img
                src="<?= htmlspecialchars($personnage['img_url']); ?>"
                class="card-img-top"
                alt="image de profil"
                style="height:300px; object-fit:cover;"
            >

            <div class="card-body">

                <h5 class="card-title">
                    <?= htmlspecialchars($personnage['nom']); ?>
                </h5>

                <p class="card-text">
                    <?= htmlspecialchars($personnage['titre']); ?>
                </p>

                <p>
                    PV : <?= $personnage['pv']; ?> / <?= $personnage['pv_max']; ?>
                </p>

                <div class="d-flex gap-2">

                    <!-- View button: displays the character's full profile -->
                    <a href="profil.php?id_perso=<?= $personnage['id']; ?>" class="btn btn-primary">
                        Voir
                    </a>

                    <!-- Edit button: opens the edit form -->
                    <a href="edition.php?id_perso=<?= $personnage['id']; ?>" class="btn btn-warning">
                        Éditer
                    </a>

                    <!-- Delete button: asks for confirmation before deletion -->
                    <a
                        href="suppression.php?id_perso=<?= $personnage['id']; ?>"
                        class="btn btn-danger"
                        onclick="return confirm('Supprimer ce personnage ?')"
                    >
                        Supprimer
                    </a>

                </div>
            </div>

        </div>
    </div>

<?php endforeach; ?>

</div>

<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
