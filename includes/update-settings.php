<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include the necessary files and establish a database connection
    include 'database.php';
    session_start();

    // Get the submitted values
    $password = $_POST['password'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];

    // Update the user's settings in the database
    $query = "UPDATE users SET password = '$password', email = '$email', bio = '$bio' WHERE username = '{$_SESSION['username']}'";
    mysqli_query($conn, $query);

    // Set a session variable to indicate successful update
    $_SESSION['update_success'] = true;

    header("Location: ../settings.php");
    exit();
}
?>