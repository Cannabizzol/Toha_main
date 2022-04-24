<?php
include_once "config/config.php";

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
    $userChek = "SELECT * FROM users WHERE email = '$email'";
    $sql = mysqli_query($db_con, $userChek);
    if (mysqli_num_rows($sql)>0) {
        echo 'Такой email уже зарегистрирован';
        exit();
    }
else {
    $ins = "INSERT INTO users (email, password) VALUES ('$email', '$pass')";
    mysqli_query($db_con, $ins);
    echo "Вы успешно зарегистрированы";
}
}






?>
