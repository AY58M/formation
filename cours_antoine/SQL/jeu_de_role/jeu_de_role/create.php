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

// Retrieve lists for menus 
$query_classes = $connection->prepare("SELECT * FROM classes");
$query_classes->execute();
$classes = $query_classes->fetchAll();

$query_races = $connection->prepare("SELECT * FROM races");
$query_races->execute();
$races = $query_races->fetchAll();

$query_guildes = $connection->prepare("SELECT * FROM guildes");
$query_guildes->execute();
$guildes = $query_guildes->fetchAll();

// Form processing
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Default value for the image URL
    $img_url = null;

    // Profile image handling
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {

        $extensionsAutorisees = ['jpg', 'jpeg', 'png', 'webp'];

        $nomFichier = $_FILES['image']['name'];

        $extension = strtolower(pathinfo($nomFichier, PATHINFO_EXTENSION));

        if (!in_array($extension, $extensionsAutorisees)) {
            die("Format d'image non autorisé. Formats acceptés : jpg, jpeg, png, webp.");
        }

        $nomUnique  = uniqid('profil_', true) . '.' . $extension;
        $destination = 'image_profil/' . $nomUnique;

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
            die("Erreur lors de l'upload de l'image.");
        }

        $img_url = $destination;
    }

   // Insert the character into the database
    $personnage = [
        ':nom'    => $_POST['nom'],
        ':titre'  => $_POST['titre'],
        ':img_url'=> $img_url,
        ':pv_max' => $_POST['pv_max'],
        ':pv'     => $_POST['pv'],
        ':mana'   => $_POST['mana'],
        ':mana_max'=> $_POST['mana_max'],
        ':dext'   => $_POST['dext'],
        ':forc'   => $_POST['forc'],
        ':sag'    => $_POST['sag'],
        ':chari'  => $_POST['chari'],
        ':intel'  => $_POST['intel'],
        ':const'  => $_POST['const'],
        ':classe' => $_POST['classe'],
        ':race'   => $_POST['race'],
        ':guilde' => $_POST['guilde'],
    ];

    $query = $connection->prepare(
        "INSERT INTO personnages
            (nom, titre, img_url, pv_max, pv, mana, mana_max, dext, forc, sag, chari, intel, const, classe_id, race_id, guilde_id)
         VALUES
            (:nom, :titre, :img_url, :pv_max, :pv, :mana, :mana_max, :dext, :forc, :sag, :chari, :intel, :const, :classe, :race, :guilde)"
    );

    $query->execute($personnage);

    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un personnage</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="container mt-4">

    <h2>Création d'un personnage</h2>

    <!-- Link back to the list -->
    <a href="index.php" class="btn btn-secondary mb-4">Retour à la liste</a>

    <form action="" method="POST" enctype="multipart/form-data">

        <label>Nom :</label>
        <input type="text" name="nom" placeholder="Nom du personnage"><br><br>

        <label>Titre :</label>
        <input type="text" name="titre" placeholder="Titre du personnage"><br><br>

        <label>Points de vie :</label>
        <input type="number" name="pv" placeholder="Points de vie actuels"><br><br>

        <label>Points de vie maximum :</label>
        <input type="number" name="pv_max" placeholder="Points de vie maximum"><br><br>

        <label>Mana :</label>
        <input type="number" name="mana" placeholder="Points de mana actuels"><br><br>

        <label>Mana maximum :</label>
        <input type="number" name="mana_max" placeholder="Points de mana maximum"><br><br>

        <label>Dextérité :</label>
        <input type="number" name="dext" placeholder="Dextérité"><br><br>

        <label>Force :</label>
        <input type="number" name="forc" placeholder="Force"><br><br>

        <label>Sagesse :</label>
        <input type="number" name="sag" placeholder="Sagesse"><br><br>

        <label>Charisme :</label>
        <input type="number" name="chari" placeholder="Charisme"><br><br>

        <label>Intelligence :</label>
        <input type="number" name="intel" placeholder="Intelligence"><br><br>

        <label>Constitution :</label>
        <input type="number" name="const" placeholder="Constitution"><br><br>

        <label class="form-label">Image de profil :</label>
        <input type="file" name="image" class="form-control"><br>

        <label>Classe :</label>
        <select name="classe">
            <?php foreach ($classes as $class) : ?>
                <option value="<?= $class['id']; ?>">
                    <?= htmlspecialchars($class['nom']); ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label>Race :</label>
        <select name="race">
            <?php foreach ($races as $race) : ?>
                <option value="<?= $race['id']; ?>">
                    <?= htmlspecialchars($race['nom']); ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label>Guilde :</label>
        <select name="guilde">
            <?php foreach ($guildes as $guild) : ?>
                <option value="<?= $guild['id']; ?>">
                    <?= htmlspecialchars($guild['nom']); ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <input type="submit" value="Créer le personnage" class="btn btn-success"><br><br>

    </form>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
