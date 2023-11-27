<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Adresa la care doriți să primiți emailul
  $to = 'didi112@mail.com';
  $subject = 'New Contact Form Submission';
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $message_body = "Name: $name\nEmail: $email\n\n$message";

  // Trimite emailul
  if (mail($to, $subject, $message_body, $headers)) {
    // Emailul a fost trimis cu succes
    http_response_code(200); // OK
  } else {
    // Eroare la trimiterea emailului
    http_response_code(500); // Internal Server Error
  }
}
?>
