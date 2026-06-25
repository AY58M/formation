<?php
$host = 'localhost';
$base = 'jeu_de_role';
$dsn = "mysql:host=$host;dbname=$base;charset=utf8";
$user = 'admin';
$password = 'resu_ass';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$connection = new PDO($dsn, $user, $password, $options);

$query = $connection->prepare(
"
SELECT
    p.id,
    p.nom,
    p.titre,
    p.img_url,
    p.pv,
    p.pv_max
FROM personnages p
ORDER BY p.nom ASC
"
);

$query->execute();
$personnages = $query->fetchAll();
echo json_encode($personnages);