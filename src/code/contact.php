<?php

// define variables and set to empty values
$email = $Subject = $Message = "";
$emailErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if ( empty($_POST["email"]) || empty($_POST["Message"]) ) {
    $emailErr = "Email and message are required ";
  }
  else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
    else{

      $emailErr = "Message as been sent.";
      $to = "contact@edouardmortec.com";
      $Subject = "FROM WEBSITE : ".test_input($_POST["Subject"]);
      $Message = test_input($_POST["Message"]);
      $Message = wordwrap($Message, 70, "\r\n");
      $Header = "From: ".$email."\r\n";

      mail($to, $Subject, $Message, $Header);
    }
  }

}

echo '<p style="color : silver; font-size:  0.9em; font-family: "D-DIN", Helevetica,  Arial, sans-serif;">'.$emailErr.'</p>';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>