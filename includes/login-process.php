<?php
session_start();

// Database connection
include 'database.php';

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check the credentials
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

// Check if the query returned a matching row
if (mysqli_num_rows($result) == 1) {
    // Login successful, set session variables
    $_SESSION['username'] = $username;
    // Redirect to a protected page with success alert
    $_SESSION['login_success'] = "Login successful!";
    header("Location: ../homepage");
} else {
    // Login failed, redirect back to the login page with error alert
    $_SESSION['login_error'] = "Invalid username or password";
    header("Location: ../login");
}

mysqli_close($conn);
?>