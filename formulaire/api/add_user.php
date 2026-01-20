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
$email = $_GET['email'];
$psw = $_GET['password'];
$psw_confirmation = $_GET['password_confirm'];

$stmt = $pdo->prepare('INSERT INTO users (email, pwd)
VALUES ( ?, ?);'
        );
$success = $stmt->execute([$email, $psw]);

$pseudo = $_GET['pseudo'];
$lastID = $pdo->lastInsertId();

$stmt = $pdo->prepare('INSERT INTO user_info (pseudo, user_id)
VALUES (?, ?);'
        );
$success = $stmt->execute([$pseudo, $lastID]);

if ($success === false) {
    $response = [
        'status' => 'erreur',
        'message' => "Cet utilisateur n'existe pas"
    ];
    echo json_encode($response);
    die;
} else {
    $response = [
        'status' => 'success',        
        'message' => "Bonjour"
    ];
    echo json_encode($response);
    die;
}
