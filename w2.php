<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    if (empty($name) || empty($email) || empty($message)) {
        print "Пожалуйста, заполните все поля.";
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        print "Неправильный формат электронной почты.";
        exit;
    }
    if (strlen($message) < 10) {
        print "Сообщение должно содержать не менее 10 символов.";
        exit;
    }
    print "Спасибо за ваше сообщение!<br>";
    print "Имя: " . $name . "<br>";
    print "Электронная почта: " . $email . "<br>";
    print "Сообщение: " . nl2br($message) . "<br>";
}
