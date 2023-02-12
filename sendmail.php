<?php
  $to = $_POST['to'];
  $from = $_POST['from'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers = "From: $from";

  $result = mail($to, $subject, $message, $headers);

  if ($result) {
    echo "Email envoyé avec succès";
  } else {
    echo "l'envoie de l'email a échoué";
  }
?>