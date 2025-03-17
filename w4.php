<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['email']));
    if (empty($email)) {
        print "Пожалуйста, введите вашу электронную почту.";
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        print "Неправильный формат электронной почты.";
        exit;
    }
    print "Спасибо за подписку! Вы успешно добавлены в рассылку на: " . $email;
}
?>