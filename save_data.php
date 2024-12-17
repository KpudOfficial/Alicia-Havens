<?php
// Retrieve the form data
$username = $_POST['username'];
$email = $_POST['Email'];
$password = $_POST['password'];

// Read the existing usernames from the file
$existingUsernames = file("form_data.txt", FILE_IGNORE_NEW_LINES);

// Check if username already exists
if (in_array($username, $existingUsernames)) {
    // Username exists, redirect to login page
    header("Location: login.html");
    exit;
}

// Save the form data to the file
$data = "Username: $username\nEmail: $email\nPassword: $password\n\n";
file_put_contents("form_data.txt", $data, FILE_APPEND | LOCK_EX);

// Redirect to signup success page or any other desired page
header("Location: signup.html");
exit;
?>