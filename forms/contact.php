<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Replace this email address with your own
    $to = 'sahasounak97@gmail.com';

    // Create email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html\r\n";

    // Compose the email message
    $email_message = "
        <html>
        <body>
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        </body>
        </html>
    ";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        // If the email is sent successfully
        echo "success";
    } else {
        // If there's an error sending the email
        echo "error";
    }
} else {
    // If the form is not submitted using POST method
    echo "Method not allowed";
}

?>
