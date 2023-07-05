<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "elmarkessler06@gmail.com"; // Empfänger-E-Mail-Adresse
  $subject = "Neue Kontaktanfrage";
  $messageBody = "Name: " . $name . "\n";
  $messageBody .= "Email: " . $email . "\n";
  $messageBody .= "Message: " . $message . "\n";

  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  // E-Mail senden
  mail($to, $subject, $messageBody, $headers);

  // Weiterleitung auf eine Bestätigungsseite
  header("Location: confirmation.html");
  exit();
}
?>
