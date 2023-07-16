<?php
// Include the database configuration file
include 'includes/database.php';

// Retrieve the chat messages from the database
$query = "SELECT * FROM messages ORDER BY timestamp DESC";
$result = $conn->query($query);

// Display the chat messages
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $message = $row['message'];
        echo '<div class="alert alert-primary">' . $message . '</div>';
    }
} else {
    echo '<div class="alert alert-info">No messages yet.</div>';
}

// Close the database connection
$conn->close();
?>