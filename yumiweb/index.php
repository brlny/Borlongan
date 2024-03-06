<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style_index1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
</head>
<body>
    <div class="background">
        <div class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutme.php">About</a></li>
                <li class="achievements-link">
                    <a href="achievements.php">Achievements</a>
                </li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="contactme.php">Contact</a></li> <!-- Added Contact Section -->

                <div class="user-buttons">
                    <a href="login.php" class="login-btn">Login</a>
                    <a href="register.php" class="register-btn">Register</a>
                </div>
            </ul>
            <img src="Images/profile.png" alt="Profile Photo" class="profile-photo" onclick="redirectToProfile()">
        </div>
    </div>

    <div class="content-container">
        <div class="content" id="home"> 
            <h1 class="fadingText">YUMI BORLONGAN</h1>
            <p class="subtitle">IT student from National University - Fairview</p>
        </div>
    </div>

    <script src="functionality.js"></script>
</body>
</html>