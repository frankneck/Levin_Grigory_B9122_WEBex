<?php
if (!isset($_COOKIE['User'])) {
    header("Location: login.php");
    exit;
}

$username = $_COOKIE['User'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Приветствие</title>
</head>
<body>
<h2>Привет, <?php echo htmlspecialchars($username); ?>!</h2>
<p><a href="logout.php">Выйти</a></p>
</body>
</html>
