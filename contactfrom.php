<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["emailAddress"];
  $message = $_POST["message"];
  
  $to = "vraj.patel@students.jmcss.org";
  $subject = "New message from contact form";
  $body = "Name: $name\nEmail: $email\n\n$message";
  
  if (mail($to, $subject, $body)) {
    http_response_code(200);
    echo "Thank You! Your message has been sent.";
  } else {
    http_response_code(500);
    echo "Oops! Something went wrong and we couldn't send your message.";
  }
}
?>
