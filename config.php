<?php
$host = 'sql100.infinityfree.com';
$db   = 'if0_41695259_kpstudios';
$user = 'if0_41695259';
$pass = 'polenayoungept';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}
?>