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
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT uf.pseudo FROM users AS u 
LEFT JOIN user_info as uf ON u.user_id=uf.user_id
WHERE u.user_id=?");
$stmt->execute([$id]);
$user = $stmt->fetch();
if ($user === false) {
    $response = [
        'status' => 'erreur',
        'message' => "Cet utilisateur n'existe pas"
    ];
    echo json_encode($response);
    die;
} else {
    $response = [
        'status' => 'success',
        'nom' => $user['pseudo'],
        'message' => "Bonjour"
    ];
    echo json_encode($response);
    die;
}
