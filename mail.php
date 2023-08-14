<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Here, you can add validation and sanitation for the form fields if needed.

    // Send the email
    $to = "kamesh18rathore@gmail.com"; // Replace with the recipient's email address
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $message_body = "Name: " . $name . "\n";
    $message_body .= "Email: " . $email . "\n";
    $message_body .= "Subject: " . $subject . "\n";
    $message_body .= "Message: " . $message . "\n";

    if (mail($to, $subject, $message_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message. Please try again later.";
    }
}
?>
