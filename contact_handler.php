<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Простая валидация
    if (empty($name) || empty($email) || empty($message)) {
        header("Location: contact.php?error=empty");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?error=invalid_email");
        exit;
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $message]);

        // Успешная отправка — возвращаемся на contact.php с параметром success
        header("Location: contact.php?success=1");
        exit;

    } catch (PDOException $e) {
        // Если ошибка — выводим сообщение
        echo "Ошибка при сохранении сообщения: " . $e->getMessage();
    }
} else {
    header("Location: contact.php");
    exit;
}
?>