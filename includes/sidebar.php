<style>
.sidebar {
    position: sticky;
    top: 0;
    bottom: 0;
    height: 100vh;
    left: 0;
    width: 80px;
    overflow: hidden;
    transition: 1s;
}

.sidebar:hover {
    width: 280px;
    transition: 1s;
}

.sidebar .logo {
    text-align: center;
    display: flex;
    margin: 10px 0 0 10px;
    padding-bottom: 3rem;
}

.logo img {
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

.logo span {
    font-weight: bold;
    padding-left: 15px;
    font-size: 18px;
    text-transform: uppercase;
}

.sidebar a {
    position: relative;
    width: 280px;
    font-size: 14px;
    color: rgb(85, 83, 83);
    display: table;
    padding: 10px;
}

.sidebar .fas {
    position: relative;
    width: 70px;
    height: 40px;
    top: 20px;
    font-size: 20px;
    text-align: center;
}

.sidebar-item {
    position: relative;
    top: 12px;
    margin-left: 10px;
}

.row {
    display: flex;
}

.col-2 {
    /* flex: 0 0 16.66667%; */
    max-width: 150px;
}

.col-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
    position: relative;
}
</style>

<nav class="sidebar  bg-primary">
    <ul class="list-unstyled mt-5">
        <li>
            <a href="homepage" class="d-flex align-items-center my-3">
                <i class="fas fa-home"></i>
                <span class="nav-item">Home</span>
            </a>
        </li>
        <li>
            <a href="dashboard" class="d-flex align-items-center my-3">
                <i class="fas fa-tachometer-alt"></i>
                <span class="nav-item">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="game" class="d-flex align-items-center my-3">
                <i class="fas fa-gamepad"></i>
                <span class="nav-item">Games</span>
            </a>
        </li>
        <li>
            <a href="chat" class="d-flex align-items-center my-3">
                <i class="fas fa-comment"></i>
                <span class="nav-item">Chat</span>
            </a>
        </li>
        <li>
            <a href="lobby" class="d-flex align-items-center my-3">
                <i class="fas fa-book"></i>
                <span class="nav-item">Lobby</span>
            </a>
        </li>
        <li>
            <a href="#" class="d-flex align-items-center my-3" data-bs-toggle="modal" data-bs-target="#profileModal">
                <i class="fas fa-user"></i>
                <span class="nav-item">Profile</span>
            </a>
        </li>
        <li>
            <a href="settings" class="d-flex align-items-center my-3">
                <i class="fas fa-cog"></i>
                <span class="nav-item">Setting</span>
            </a>
        </li>
        <li class="mt-auto">
            <a href="logout" class="logout d-flex align-items-center mt-5">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Log out</span>
            </a>
        </li>
    </ul>
</nav>


<!-- ========== Start Profile Modal ========== -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">Profile Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body card text-white bg-primary mb-3">
                <p><strong>Username:</strong>
                    <?php echo $_SESSION['username']; ?>
                </p>
                <p><strong>Email:</strong>
                    <?php
                    $query = "SELECT email, avatar, bio FROM users WHERE username = '{$_SESSION['username']}'";
                    $result = mysqli_query($conn, $query);
                    if ($result && mysqli_num_rows($result) > 0) {
                        $userData = mysqli_fetch_assoc($result);
                        // Assign the fetched data to variables
                        $userEmail = $userData['email'];
                        $userBio = $userData['bio'];
                    } else {
                        // Handle error if no data found
                        $userEmail = 'No email available';
                        $userBio = 'No bio available';
                    }
                    // Close the database connection
                    ?>
                    <?php echo $userEmail; ?>
                </p>
                <p><strong>Avatar:</strong>
                    <img src="https://i.pinimg.com/originals/37/6d/3b/376d3b1d193dc1a9f43fb52e217a1d28.png" alt=""
                        width="100px">
                </p>
                <p><strong>Bio:</strong>
                    <?php echo $userBio; ?>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- ========== End Profile Modal ========== -->