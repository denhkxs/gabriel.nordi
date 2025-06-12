<?php
// db_counter.php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получаем текущее значение счетчика
$sql = "SELECT views FROM page_views WHERE page_id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $views = $row["views"] + 1;
    $update = "UPDATE page_views SET views=$views WHERE page_id=1";
} else {
    $views = 1;
    $update = "INSERT INTO page_views (page_id, views) VALUES (1, $views)";
}

// Обновляем счетчик
$conn->query($update);

echo "Количество просмотров: " . $views;

$conn->close();
?>