<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_email = $_POST["user_email"];
    $to = "gamingbirseyler@gmail.com"; // Replace with the email address where you want to send the emails.

    $subject = "----GAME PAYMENTS NEW USER----";
    $message = "User email: $user_email";

    if (mail($to, $subject, $message)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send the email.";
    }
}
?>