<?php
$host = 'localhost';
$base = 'ajax_tasks';
$dsn = "mysql:host=$host;dbname=$base;charset=utf8";
$user = 'admin';
$password = 'resu_ass';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$connection = new PDO($dsn, $user, $password, $options);
$name = $_POST['task_name'];
$description = $_POST['task_description'];
$priority = $_POST['task_priority'];

$query = "INSERT INTO tasks (task_name,task_description,task_priority) VALUES (:task_name, :task_description, :task_priority)";
$stmt = $connection->prepare($query);
$result = $stmt->execute([
    ':task_name' => $name,
    ':task_description' => $description,
    ':task_priority' => $priority
]);
if ($result) {
    $task_id = $connection->lastInsertId();
    echo json_encode([
        'success' => true,
        'message' => "la tâche a bien été insérée",
        'task_id' => $task_id
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => "la tache n'a pas été insérée"
    ]);
}
