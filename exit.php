<?php
setcookie('person', $user['name'], time() - 3600, "/");

header('Location: /');