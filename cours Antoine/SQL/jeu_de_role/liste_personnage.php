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
$query = $connection->prepare("
SELECT p.nom,p.titre,p.img_url,p.pv_max,p.pv,p.mana,p.mana_max,p.dext,p.forc,p.sag,p.chari,p.intel,p.const,p.classe_id,p.race_id,p.guilde_id
FROM personnages p
JOIN classes c ON p.classe_id = c.id
JOIN races r ON p.race_id = r.id
JOIN guildes g ON p.guilde_id = g.id
ORDER BY p.nom ASC
");

$query->execute();
$personnages = $query->fetchAll();
print_r($personnages);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des personnages</title>
</head>

<body>

</body>

</html>

?>