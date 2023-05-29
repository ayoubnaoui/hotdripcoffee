<?php
require_once('path/to/PHPMailerAutoload.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the email address from the request
  $email = $_POST['email'];

  // Perform any necessary validation or processing

  // Create a new PHPMailer instance
  $mail = new PHPMailer();
  
  // Configure SMTP settings
  $mail->isSMTP();
  $mail->Host = 'your_smtp_host'; // Replace with your SMTP host
  $mail->Port = 587; // Replace with your SMTP port
  $mail->SMTPAuth = true;
  $mail->Username = 'your_username'; // Replace with your SMTP username
  $mail->Password = 'your_password'; // Replace with your SMTP password
  $mail->SMTPSecure = 'tls'; // Replace with 'ssl' if applicable
  
  // Set the email details
  $mail->setFrom('sender_email@example.com', 'Sender Name'); // Replace with the sender's email address and name
  $mail->addAddress('ayoubnaoui786@gmail.com'); // Replace with your email address
  $mail->Subject = 'New Subscriber';
  $mail->Body = "You have a new subscriber: $email";
  
  if ($mail->send()) {
    // Email sent successfully
    echo 'Thank you for subscribing!';
  } else {
    // Failed to send email
    echo 'Sorry, an error occurred while processing your request. Please try again later.';
  }
}
?>





