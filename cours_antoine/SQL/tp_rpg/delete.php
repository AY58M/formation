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
// =================================================== //
$id = $_GET['id'];

$queryDelete = $connection->prepare("DELETE FROM personnages WHERE id = :id");
$queryDelete->execute([':id' => $id]);

header("Location: liste_personnage.php");
exit;
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
        <script src="js/bootstrap.bundle.js"></script>
</body>

</html>