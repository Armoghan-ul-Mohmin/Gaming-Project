<?php
session_start();

// Database connection
include 'database.php';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    // Redirect to the error page
    header('Location: db-error.php');
    exit; // Stop further execution
}

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Perform any necessary validation or sanitization on the form data here

// Check if the username or email already exists in the database
$query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Username or email already exists, redirect back to the register page with error alert
    $_SESSION['register_error'] = "Username or email already exists";
    header("Location: ../register");
    exit;
}

// Insert the new user into the database
$insertQuery = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $insertQuery)) {
    // Registration successful, set session variables
    $_SESSION['username'] = $username;
    // Redirect to a protected page with success alert
    $_SESSION['register_success'] = "Registration successful!";
    header("Location: ../login");
    exit;
} else {
    // Registration failed, redirect back to the register page with error alert
    $_SESSION['register_error'] = "Registration failed";
    header("Location: ../register");
    exit;
}

mysqli_close($conn);
?>