<?php
include 'includes/header.php';
include 'includes/database.php';

// Start a new session
session_start();
// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: login.php");
    exit();
}
?>


<title> GameRealm | Chat </title>

</head>

<body>

    <!-- ========== Start Navbar ========== -->
    <?php
    include_once 'includes/navbar.php';
    ?>
    <!-- ========== End Navbar ========== -->

    <div class="row">
        <div class="col-2">
            <!-- ========== Start Sidebar ========== -->
            <?php
            include_once 'includes/sidebar.php';
            ?>
            <!-- ========== End Sidebar ========== -->
        </div>

        <div class="col-10">
            <div class="container my-4">
                <div class="card">
                    <div class="card-header">
                        <?php
                        $receiverUsername = $_GET['receiver_username'];
                        echo '<h1>' . $receiverUsername . '</h1>';
                        ?>

                    </div>
                    <div class="card-body" id="chatMessages">
                        <!-- Display chat messages here -->
                        <?php
                        include 'chats/get-messages.php';
                        ?>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <?php
                        include 'chats/script.js';
                        ?>
                    </div>
                    <div class="card-footer">
                        <div class="input-group">
                            <textarea class="form-control" placeholder="Type your message..."
                                id="messageInput"></textarea>
                            <div class="input-group-append">
                                <button class="btn btn-primary" id="sendMessageBtn">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once 'includes/scripts.php';
    ?>
</body>

</html>