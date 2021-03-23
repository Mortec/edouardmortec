<?php
 $to      = 'jeremi.trocme@icloud.com';
 $subject = 'le sujet';
 $message = 'Bonjour !';
 $headers = 'From: contact@edouardmortec.com' . "\r\n" .
 'Reply-To: contact@edouardmortec.com' . "\r\n" .
 'X-Mailer: PHP/' . phpversion();

 mail($to, $subject, $message, $headers);
 ?>