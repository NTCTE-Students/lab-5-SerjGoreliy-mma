<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));
    if (empty($username) || empty($password) || empty($confirm_password)) {
        print "Пожалуйста, заполните все поля.";
        exit;
    }
    if ($password !== $confirm_password) {
        print "Пароли не совпадают.";
        exit;
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    print "Регистрация прошла успешно!<br>";
    print "Имя пользователя: " . $username . "<br>";
    print "Хеш пароля: " . $hashed_password . "<br>";
}
