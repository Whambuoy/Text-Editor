<?php

$to = "ekirima@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: eric@eryxlabs.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);

echo "email sent";
