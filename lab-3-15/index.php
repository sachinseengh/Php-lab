<?php
// Set the recipient email address
$to = "helloashishthapa@gmail.com";

// Set the email subject
$subject = "Test Email from PHP";

// Set the email message
$message = "This is a test email sent from a PHP script.";

// Set additional headers
$headers = "From: thapaashish1616@gmail.com\r\n";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>


<!-- 15. Write a program to send email from php page -->