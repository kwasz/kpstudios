<?php
require_once 'config.php';

function getAllGames($limit = 8) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM games ORDER BY created_at DESC LIMIT ?");
    $stmt->bindValue(1, (int)$limit, PDO::PARAM_INT); 
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllNews($limit = 6) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM news ORDER BY publish_date DESC LIMIT ?");
    $stmt->bindValue(1, (int)$limit, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>