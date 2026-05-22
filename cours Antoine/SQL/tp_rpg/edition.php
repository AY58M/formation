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

$query_classes = $connection->prepare("SELECT * FROM classe");
$query_classes->execute();
$classes = $query_classes->fetchAll();

$query_races = $connection->prepare("SELECT * FROM race");
$query_races->execute();
$races = $query_races->fetchAll();

$query_guildes = $connection->prepare("SELECT * FROM guilde");
$query_guildes->execute();
$guildes = $query_guildes->fetchAll();

$query_personnage = $connection->prepare("
    SELECT p.id, p.nom, p.pv, p.pv_max, p.pm, p.pm_max,
    p.id_race, p.id_classe, p.id_guilde,
    s.forc, s.dexterite, s.intel, s.sagesse, s.charisme
    FROM personnages p
    LEFT JOIN statistiques s ON s.id_personnage = p.id
    WHERE p.id = :id
");
$query_personnage->execute(['id' => $id]);
$p = $query_personnage->fetch();

// =================================================== //
if (isset($_POST['pv'])) {
    $personnage = [
        ':nom'       => $_POST['nom'],
        ':pv'        => $_POST['pv'],
        ':pm'        => $_POST['mana'],
        ':id_race'   => $_POST['id_race'],
        ':id_classe' => $_POST['id_classe'],
        ':id_guilde' => $_POST['id_guilde'],
        ':id'        => $id,
    ];
    $queryPersonnage = $connection->prepare(
        "UPDATE personnages SET nom = :nom, pv = :pv, pm = :pm, id_race = :id_race, id_classe = :id_classe, id_guilde = :id_guilde
         WHERE id = :id"
    );
    $queryPersonnage->execute($personnage);

    $statistiques = [
        ':id_personnage' => $id,
        ':forc'  => $_POST['force'],
        ':dext'  => $_POST['dexterite'],
        ':intel' => $_POST['intelligence'],
        ':sag'   => $_POST['sagesse'],
        ':chari' => $_POST['charisme'],
    ];
    $queryStatistiques = $connection->prepare(
        "UPDATE statistiques SET forc = :forc, dexterite = :dext, intel = :intel, sagesse = :sag, charisme = :chari
         WHERE id_personnage = :id_personnage"
    );
    $queryStatistiques->execute($statistiques);

    header("Location: profil.php?id=" . $id);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Editer un personnage</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php
                if (!$p) {
                    echo "Ce personnage n'existe pas.";
                } else {
                ?>
                    <form action="" method="POST">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Selectionner votre classe" name="id_classe">
                                <?php
                                foreach ($classes as $classe) {
                                    if ($classe['id'] === $p['id_classe']) {
                                        $selected = 'selected';
                                    } else {
                                        $selected = '';
                                    }
                                    echo "<option value='" . $classe['id'] . "'>" . $classe['nom'] .  "</option>";
                                }
                                ?>
                            </select>
                            <label for="floatingSelect">Selectionner votre classe</label>
                            <select class="form-select" id="floatingSelect" aria-label="Selectionner votre race" name="id_race">
                                <?php
                                foreach ($races as $race) {
                                    if ($race['id'] === $p['id_race']) {
                                        $selected = 'selected';
                                    } else {
                                        $selected = '';
                                    }
                                    echo "<option value='" . $race['id'] . "'>" . $race['nom'] .  "</option>";
                                }
                                ?>
                            </select>
                            <label for="floatingSelectGuilde">Selectionner votre race</label>
                            <select class="form-select" id="floatingSelectGuilde" aria-label="Selectionner votre guilde" name="id_guilde">
                                <?php
                                foreach ($guildes as $guilde) {
                                    if ($guilde['id'] === $p['id_guilde']) {
                                        $selected = 'selected';
                                    } else {
                                        $selected = '';
                                    }
                                    echo "<option value='" . $guilde['id'] . "'>" . $guilde['nom'] .  "</option>";
                                }
                                ?>
                            </select>
                            <label for="floatingSelectGuilde">Selectionner votre guilde</label>
                        </div>
                        Nom : <input type="text" name="nom" value="<?= $p['nom'] ?>"><br>
                        PV : <input type="number" name="pv" value="<?= $p['pv'] ?>"><br>
                        Mana : <input type="number" name="mana" value="<?= $p['pm'] ?>"><br>
                        Force : <input type="number" name="force" value="<?= $p['forc'] ?>"><br>
                        Dexterité : <input type="number" name="dexterite" value="<?= $p['dexterite'] ?>"><br>
                        Intelligence : <input type="number" name="intelligence" value="<?= $p['intel'] ?>"><br>
                        Sagesse : <input type="number" name="sagesse" value="<?= $p['sagesse'] ?>"><br>
                        Charisme : <input type="number" name="charisme" value="<?= $p['charisme'] ?>"><br>
                        <button type="submit">Modifier</button>
                    </form>
            </div>
        <?php } ?>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>