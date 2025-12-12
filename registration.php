<?php
require_once('db.php');

if (isset($_COOKIE['User'])) {
    header('Location: greet.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!$username || !$password) die("Input all parameters");

    // Сохраняем пароль в открытом виде (умышленно уязвимо)
    $sql = "INSERT INTO users (username, pass) VALUES ('$username', '$password')";
    mysqli_query($link, $sql);
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
<h2>Регистрация</h2>
<form method="POST">
    <input type="text" name="username" placeholder="Имя пользователя" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <button type="submit">Зарегистрироваться</button>
</form>
<p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
</body>
</html>
