<?php
$host = 'localhost';
$base = 'jeu_de_role';
$dsn = "mysql:host=$host;dbname=$base";
$user = 'admin';
$password = 'resu_ass';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// Connexion à la base de données
$connection = new PDO($dsn, $user, $password, $options);

$query_classes = $connection->prepare("SELECT * FROM classes");
$query_classes->execute();
$classes = $query_classes->fetchAll();
$query_races = $connection->prepare("SELECT * FROM races");
$query_races->execute();
$races = $query_races->fetchAll();
$query_guildes = $connection->prepare("SELECT * FROM guildes");
$query_guildes->execute();
$guildes = $query_guildes->fetchAll();

// var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $personnage = [
        ":nom" => $_POST['nom'],
        ":titre" => $_POST['titre'],
        ":img_url" => $_POST['img_url'],
        ":pv_max" => $_POST['pv_max'],
        ":pv" => $_POST['pv'],
        ":mana" => $_POST['mana'],
        ":mana_max" => $_POST['mana_max'],
        ":dext" => $_POST['dext'],
        ":forc" => $_POST['forc'],
        ":sag" => $_POST['sag'],
        ":chari" => $_POST['chari'],
        ":intel" => $_POST['intel'],
        ":const" => $_POST['const'],
        ":classe" => $_POST['classe'],
        ":race" => $_POST['race'],
        ":guilde" => $_POST['guilde'],
    ];

    $query = $connection->prepare(
        "INSERT INTO personnages (nom,titre,img_url,pv_max,pv,mana,mana_max,dext,forc,sag,chari,intel,const,classe_id,race_id,guilde_id) 
        VALUES (:nom,:titre,:img_url,:pv_max,:pv,:mana,:mana_max,:dext,:forc,:sag,:chari,:intel,:const,:classe,:race,:guilde)"
    );

    $query->execute($personnage);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Bootstrap</title>
    <link rel="stylesheet" href="../jeu_de_role/css/style.css">
    <link rel="stylesheet" href="../jeu_de_role/css/bootstrap.css">
</head>

<body>
    <h2>Création d'un personnage</h2>
    <form action="" method="POST">
        <label>Nom:</label>
        <input type="text" name="nom" placeholder="Entrer le nom du personnage"><br><br>
        <label>Titre:</label>
        <input type="text" name="titre" placeholder="titre du personnage"><br><br>
        <label>URL de l'image:</label>
        <input type="text" name="img_url" placeholder="URL de l'image"><br><br>
        <label>Points de vie:</label>
        <input type="number" name="pv" placeholder="Points de vie maximum"><br><br>
        <label>Points de vie maximum:</label>
        <input type="number" name="pv_max" placeholder="Points de vie maximum"><br><br>
        <label>Mana:</label>
        <input type="number" name="mana" placeholder="Points de mana"><br><br>
        <label>Points de Mana maximum:</label>
        <input type="number" name="mana_max" placeholder="Points de mana_max"><br><br>
        <label>Dexterité:</label>
        <input type="number" name="dext" placeholder="Dexterité"><br><br>
        <label>Force:</label>
        <input type="number" name="forc" placeholder="Force"><br><br>
        <label>Sagesse:</label>
        <input type="number" name="sag" placeholder="Sagesse"><br><br>
        <label>Charisme:</label>
        <input type="number" name="chari" placeholder="Charisme"><br><br>
        <label>Intelligence:</label>
        <input type="number" name="intel" placeholder="Intelligence"><br><br>
        <label>Constitution:</label>
        <input type="number" name="const" placeholder="Constitution"><br><br>


        <label>classes:</label>
        <select name="classe">
            <?php foreach ($classes as $class) {
                echo "<option value='" . $class['id'] . "'>" . $class['nom'] . "</option>";
            }
            ?>
        </select><br><br>
        <label>races:</label>
        <select name="race">
            <?php foreach ($races as $race) {
                echo "<option value='" . $race['id'] . "'>" . $race['nom'] . "</option>";
            }
            ?>
        </select><br><br>
        <label>guildes:</label>
        <select name="guilde">
            <?php foreach ($guildes as $guild) {
                echo "<option value='" . $guild['id'] . "'>" . $guild['nom'] . "</option>";
            }
            ?>
        </select><br><br><br>
        <input type="submit" value="Créer le personnage"><br><br>
    </form>

    <script src="../jeu_de_role/js/bootstrap.js"></script>
</body>

</html>