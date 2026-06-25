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
