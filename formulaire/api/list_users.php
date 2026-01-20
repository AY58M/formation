<?php
$config = [
    "host" => '127.0.0.1',
    "port" => 3306,
    "dbname"   => 'exercice_api',
    "user" => 'admin',
    "pass" => 'resu_ass',
    "charset" => 'utf8mb4',
];
$dsn = "mysql:host={$config['host']};
                port={$config['port']};
                dbname={$config['dbname']};
                charset={$config['charset']}";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $config['user'], $config['pass'], $options);
$stmt = $pdo->prepare("
SELECT user_id,email FROM users
");
$stmt->execute();
$users = $stmt->fetchAll();
$response = [
    "status" => 'success',
    "users" => $users
];
echo json_encode($response);
