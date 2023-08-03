<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address where you want to receive the message
    $recipient_email = "recipient@example.com";

    // Subject of the email
    $subject = "Contact Form Submission from $name";

    // Compose the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message";

    // Send the email using the mail() function
    if (mail($recipient_email, $subject, $email_content)) {
        echo "Message sent successfully. Thank you for contacting us!";
    } else {
        echo "Failed to send the message. Please try again later.";
    }
}
?>
