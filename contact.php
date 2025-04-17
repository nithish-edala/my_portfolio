<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name         = htmlspecialchars($_POST["name"]);
    $countryCode  = htmlspecialchars($_POST["country_code"]);
    $phone        = htmlspecialchars($_POST["number"]);
    $email        = htmlspecialchars($_POST["email"]);
    $gender       = htmlspecialchars($_POST["gender"]);
    $date         = htmlspecialchars($_POST["date"]);
    $country      = htmlspecialchars($_POST["country"]);
    $message      = htmlspecialchars($_POST["message"]);
    
    echo "<h2>Thank you for contacting us!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Phone:</strong> $countryCode $phone</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Date:</strong> $date</p>";
    echo "<p><strong>Country:</strong> $country</p>";
    echo "<p><strong>Message:</strong><br>$message</p>";
} else {
    echo "<p>Something went wrong. Please try again.</p>";
}
?>
