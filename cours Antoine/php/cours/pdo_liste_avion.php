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

// $connection = new PDO($dsn, $username, $password, $options);
// $statement = $connection->query("SELECT * FROM avion");
// $avions = $statement->fetchAll();

$query=$connection->prepare("SELECT*FROM client WHERE date_naissance<:birth_date");
$query->bindValue(':birth_date','1997-04-03');
$query->execute();
$result=$query->fetchAll();
print_r($results);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Avions</title>

    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            min-height: 100vh;
        }

        .card {
            border-radius: 15px;
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    
    <div class="container py-5">

        <h1 class="text-center text-white mb-5">Liste des avions</h1>

        <div class="row g-4">

            <?php foreach ($avions as $avion) : ?>
                <div class="col-md-4">

                    <div class="card shadow">
                        <div class="card-body">

                            <?php foreach ($avion as $colonne => $valeur) : ?>
                                <p>
                                    <strong><?= htmlspecialchars($colonne) ?> :</strong>
                                    <?= htmlspecialchars($valeur) ?>
                                </p>
                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
    </div>
    <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>