<?php
setcookie('person', $user['login'], time() - 10, "/");

header('Location: /');