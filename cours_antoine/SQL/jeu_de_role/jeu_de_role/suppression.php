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

// Delete the character
$query = $connection->prepare("DELETE FROM personnages WHERE id = :id");
$query->execute(['id' => $id]);

header('Location: index.php');
exit;
