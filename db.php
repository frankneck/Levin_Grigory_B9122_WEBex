<?php
$server = "localhost";
$user = "root";
$password = "12345";
$dbName = "first";

// Подключение к MySQL
$link = mysqli_connect($server, $user, $password);
if (!$link) die("Error connect: " . mysqli_connect_error());

// Создаем базу, если нет
$sql = "CREATE DATABASE IF NOT EXISTS `$dbName` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
mysqli_query($link, $sql);

// Подключение к базе
$link = mysqli_connect($server, $user, $password, $dbName);
if (!$link) die("Error connect DB: " . mysqli_connect_error());

// Создание таблицы пользователей
$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    pass VARCHAR(255) NOT NULL
)";
mysqli_query($link, $sql);
?>
