<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = 'didi112@mail.com'; // Enter your email address here
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $message_body = "Name: $name\nEmail: $email\n\n$message";

  if (mail($to, $subject, $message_body, $headers)) {
    print echo "Email sent successfully!";
  } else {
    print echo "Failed to send email.";
  }
}
?>
