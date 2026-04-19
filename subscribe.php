<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO subscribers (email) VALUES (?)");
            $stmt->execute([$email]);
            echo "✅ Спасибо! Вы успешно подписались на новости KPStudios.";
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                echo "⚠️ Этот email уже подписан.";
            } else {
                echo "Ошибка при подписке.";
            }
        }
    } else {
        echo "❌ Введите корректный email.";
    }
}
?>