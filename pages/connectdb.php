<?php
// Параметры подключения к базе данных
$host = 'localhost';
$dbname = 'NFT';
$user = 'Dasha';
$password = '';

try {
    // Создаем объект PDO для подключения к базе данных
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    
    // Устанавливаем режим обработки ошибок для PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Подключение к базе данных успешно установлено";
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}
?>