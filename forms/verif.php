<?php

$login = filter_var(trim($_POST['login']), FILTER_UNSAFE_RAW);
$pass = filter_var(trim($_POST['pass']), FILTER_UNSAFE_RAW);

$pass = md5($pass . "fyjt629");

require "../blocks/connect.php";

$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$pass'");
$user = $result->fetch_assoc();

if ($user == false) {
    echo "This user was not found or the password is incorrect";
    echo <<<HTML
    <br><br><a href="/exit.php">Click the to exit</a>
    HTML;
    exit();
}

setcookie('person', $user['login'], time() + 10, "/");

$mysql->close();
header('Location: /');
