<?php
// Retrieve the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Read the stored login data from the file
$loginData = file("form_data.txt", FILE_IGNORE_NEW_LINES);

// Check if the entered credentials match the stored data
foreach ($loginData as $line) {
    $line = explode(":", $line);
    $field = trim($line[0]);
    $value = trim($line[1]);

    if ($field === "Username" && $value === $username) {
        if (next($loginData) === "Password: " . $password) {
            // Redirect to the index.html page upon successful login
            header("Location: index.html");
            exit;
        }
    }
}

// If the credentials do not match, redirect to the sign-up.html page
header("Location: signup.html");
exit;
?>