<?php
include_once 'config/config.php';
if ($_POST) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if (empty($email)) {
        echo 'Введите email';
        exit();
    }
    if (empty($pass)) {
        echo 'Введите пароль';
        exit();
}
    $logIn = "SELECT * FROM users WHERE email = '$email'";
    $logIn = mysqli_query($db_con, $logIn);
    $logIn = mysqli_fetch_assoc($logIn);
    if ($pass == $logIn['password']) {
        $_SESSION = $logIn;
        header('location: /index.php');
        echo 'Вы успешно зашли';
    } else {
        echo 'Неверный логин или пароль';
        exit();
    }
}