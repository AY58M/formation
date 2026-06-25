<?php
// =================================================== //
$nomServeur = 'localhost';
$nomBase = 'donjons_et_dragons';
$dsn = "mysql:host=$nomServeur;dbname=$nomBase";
$user = 'admin';
$pwd = 'resu_ass';
$options = array(
    PDO::ATTR_EMULATE_PREPARES   => false,
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
);
$connection = new PDO($dsn, $user, $pwd, $options);

$query_classes = $connection->prepare("SELECT * FROM classe");
$query_classes->execute();
$classes = $query_classes->fetchAll();

$query_races = $connection->prepare("SELECT * FROM race");
$query_races->execute();
$races = $query_races->fetchAll();

$query_guildes = $connection->prepare("SELECT * FROM guilde");
$query_guildes->execute();
$guildes = $query_guildes->fetchAll();
// =================================================== //
$addclasses = [
    ':classe' => '',
    ':descr'  => ''
];

if (isset($_POST['classe'])) {
    $addclasses = [
        ':classe' => $_POST['classe'],
        ':descr'  => $_POST['descr']
    ];

    $queryaddclasse = $connection->prepare(
        "INSERT INTO classe (nom, description) VALUES (:classe, :descr)"
    );
    $queryaddclasse->execute($addclasses);
}
$class = $addclasses;
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Maitre du jeu</title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center align-items-start">
            <img class="img-fluid" src="img/ddlogo.png" width="240" alt="">
        </div>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 d-flex justify-content-center align-items-start">
                <form action="" method="POST">
                    <h2 class="text-center">Nom de la classe</h2>
                    <input class="form-control" type="text" name=":classe" placeholder="Nom de la classe" value="<?= $class[':classe'] ?>"><br>
                    <h2 class="text-center">Description</h2>
                    <input class="form-control" type="text" name=":descr" placeholder="Description" value="<?= $class[':descr'] ?>"><br>
                    <div class="d-flex justify-content-center"><button class="btn btn-danger" type="submit">Créer la classe</button></div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>