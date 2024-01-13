<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $address = strip_tags(trim($_POST["address"]));
    $hasDogs = isset($_POST["hasDogs"]) ? 'Yes' : 'No';
    $hasGateCode = isset($_POST["hasGateCode"]) ? 'Yes' : 'No';
    $gateCode = isset($_POST["gateCode"]) ? strip_tags(trim($_POST["gateCode"])) : 'N/A';

    // Prepare the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Address: $address\n";
    $email_content .= "Has Dogs: $hasDogs\n";
    $email_content .= "Has Gate Code: $hasGateCode\n";
    $email_content .= "Gate Code: $gateCode\n";

    // Set email recipient and subject
    $recipient = "dsantos4148@gmail.com";
    $subject = "New Signup from $name";

    // Set email headers
    $headers = "From: $name <$email>";

    // Send the email
    if (mail($recipient, $subject, $email_content, $headers)) {
        echo "Thank you for your submission, $name. We will contact you shortly.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
