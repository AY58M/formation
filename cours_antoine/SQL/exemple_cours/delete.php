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
$id = $_GET['id_perso'];