<?php
header("Content-Type: text/html; charset=utf-8");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $users = json_decode(file_get_contents("users.json"), true);
    $users[$username] = $password;

    file_put_contents("users.json", json_encode($users, JSON_UNESCAPED_UNICODE));
    echo "Регистрация успешно завершена! <a href='login.php'>Войти</a>";
    exit;
}
?>
<form method="POST">
    <h2>Регистрация</h2>
    <input name="username" placeholder="Логин" required><br>
    <input name="password" placeholder="Пароль" required><br>
    <button type="submit">Зарегистрироваться</button>
</form>
