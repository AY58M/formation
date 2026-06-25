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
$query_classes = $connection->prepare("SELECT * FROM classe");
$query_classes->execute();
$classes = $query_classes->fetchALl();
$query_races = $connection->prepare("SELECT * FROM race");
$query_races->execute();
$races = $query_races->fetchALl();
$query_guildes = $connection->prepare("SELECT * FROM guilde");
$query_guildes->execute();
$guildes = $query_guildes->fetchALl();

// =================================================== //
if (isset($_POST['pv'])) {
    $personnage = [
        ':nom'       => $_POST['nom'],
        ':pv'        => $_POST['pv'],
        ':pm'        => $_POST['mana'],
        ':id_race'   => $_POST['id_race'],
        ':id_classe' => $_POST['id_classe'],
        ':id_guilde' => $_POST['id_guilde'],
    ];
    $queryPersonnage = $connection->prepare(
        "INSERT INTO personnages (nom, pv, pm, id_race, id_classe, id_guilde) 
         VALUES (:nom, :pv, :pm, :id_race, :id_classe, :id_guilde)"
    );
    $queryPersonnage->execute($personnage);
    $id_personnage = $connection->lastInsertId();
    $statistiques = [
        ':id_personnage' => $id_personnage,
        ':forc'  => $_POST['force'],
        ':dext'  => $_POST['dexterite'],
        ':intel' => $_POST['intelligence'],
        ':sag'   => $_POST['sagesse'],
        ':chari' => $_POST['charisme'],
    ];
    $queryStatistiques = $connection->prepare(
        "INSERT INTO statistiques (id_personnage, forc, dexterite, intel, sagesse, charisme)
         VALUES (:id_personnage, :forc, :dext, :intel, :sag, :chari)"
    );
    $queryStatistiques->execute($statistiques);
}
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
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-start">
            <img class="img-fluid" src="img/ddlogo.png" width="100" alt="">
            <h1 class="text-center">CREATION DE PERSONNAGE</h1>
        </div>
        <hr>
        <form action="" method="POST">
            <div class="row">
                <div class="col-6">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelectClasse" aria-label="Selectionner votre classe" name="id_classe">
                            <?php
                            foreach ($classes as $classe) {
                                echo "<option value='" . $classe['id'] . "'>" . $classe['nom'] . "</option>";
                            }
                            ?>
                        </select>
                        <label for="floatingSelectClasse">Selectionner votre classe</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelectRace" aria-label="Selectionner votre race" name="id_race">
                            <?php
                            foreach ($races as $race) {
                                echo "<option value='" . $race['id'] . "'>" . $race['nom'] . "</option>";
                            }
                            ?>
                        </select>
                        <label for="floatingSelectRace">Selectionner votre race</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelectGuilde" aria-label="Selectionner votre guilde" name="id_guilde">
                            <?php
                            foreach ($guildes as $guilde) {
                                echo "<option value='" . $guilde['id'] . "'>" . $guilde['nom'] . "</option>";
                            }
                            ?>
                        </select>
                        <label for="floatingSelectGuilde">Selectionner votre guilde</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control" type="text" name="nom" placeholder="Nom">
                    </div><br>
                    <input class="form-control" type="number" name="pv" placeholder="PV"><br>
                    <input class="form-control" type="number" name="mana" placeholder="Mana"><br>
                    <input class="form-control" type="number" name="force" placeholder="Force"><br>
                    <input class="form-control" type="number" name="dexterite" placeholder="Dexterité"><br>
                    <input class="form-control" type="number" name="intelligence" placeholder="Intelligence"><br>
                    <input class="form-control" type="number" name="sagesse" placeholder="Sagesse"><br>
                    <input class="form-control" type="number" name="charisme" placeholder="Charisme"><br>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-success" type="submit">Ajouter</button>
            </div>
        </form>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>