<!--?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate input (you can add more validation logic here)

    // Send email
    $to = "info.gapmatrix@gmail.com";
    $subject = "New Portfolio msg from $name";
    $headers = "From: $email";
    $mailBody = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}