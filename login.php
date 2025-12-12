<?php
require_once('db.php');

if (isset($_COOKIE['User'])) {
    header('Location: greet.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$password'";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) === 1) {
        setcookie("User", $username, time()+3600); // Cookie 1 час
        header("Location: greet.php");
        exit;
    } else {
        $error = "Неверный логин или пароль";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h2>Авторизация</h2>
<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST">
    <input type="text" name="username" placeholder="Имя пользователя" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <button type="submit">Войти</button>
</form>
<p>Нет аккаунта? <a href="registration.php">Зарегистрироваться</a></p>
</body>
</html>
