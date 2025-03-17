<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (empty($username) || empty($password)) {
        print "Пожалуйста, заполните все поля.";
        exit;
    }

    if (strlen($username) < 4) {
        print "Имя пользователя должно содержать не менее 4 символов.";
        exit;
    }

    $stored_username = "Соня"; 
    $stored_password = "1234"; 

    if ($username === $stored_username && $password === $stored_password) {
        print "Вход выполнен успешно!";
    } else {
        print "Неверное имя пользователя или пароль.";
    }
}
