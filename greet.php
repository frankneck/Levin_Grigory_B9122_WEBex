<?php
header("Content-Type: text/html; charset=utf-8");

if (!isset($_COOKIE["username"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Приветствие</title>
</head>
<body>
    <p>Привет, <?php echo htmlspecialchars($_COOKIE["username"]); ?>!</p>
    <a href="logout.php">Выйти</a>
</body>
</html>
