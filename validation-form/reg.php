<?php

$login = filter_var(trim($_POST['login']), FILTER_UNSAFE_RAW);
$name = filter_var(trim($_POST['name']), FILTER_UNSAFE_RAW);
$pass = filter_var(trim($_POST['pass']), FILTER_UNSAFE_RAW);

if (mb_strlen($login) < 3 || mb_strlen($login) > 50) {
    echo "Invalid login length";
    echo <<<HTML
    <br><br><a href="/exit.php">Click the  to exit</a>
    HTML;
    exit();
};
if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "Invalid name length";
    echo <<<HTML
    <br><br><a href="/exit.php">Click the to exit</a>
    HTML;
    exit();
};
if (mb_strlen($pass) < 3 || mb_strlen($pass) > 6) {
    echo "Invalid password length (3 to 6 characters)";
    echo <<<HTML
    <br><br><a href="/exit.php">Click the to exit</a>
    HTML;
    exit();
};

$pass = md5($pass . "fyjt629");

require "../blocks/connect.php";

$mysql->query("INSERT INTO `users` (`login`, `name`, `password`) VALUES ('$login', '$name', '$pass')");

$mysql->close();
header('Location: /');
