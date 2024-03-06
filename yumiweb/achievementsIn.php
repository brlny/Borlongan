<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements</title>
    <link rel="stylesheet" href="style_achievement2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
</head>
<body>
    <div class="background">
        <div class="nav">
            <ul>
                <li><a href="indexIn.php">Home</a></li>
                <li><a href="aboutmeIn.php">About</a></li>
                <li class="achievements-link">
                    <a href="achievementsIn.php">Achievements</a>
                </li>
                <li><a href="profileIn.php">Profile</a></li>
                <li><a href="contactmeIn.php">Contact</a></li> <!-- Added Contact Section -->

                <div class="user-buttons">
                    <a href="logout.php" class="register-btn">LogOut</a>
                </div>
            </ul>
            <img src="Images/profile.png" alt="Profile Photo" class="profile-photo" onclick="redirectToProfileIn()">
        </div>
    </div>

    <!-- Achievements Section -->
    <div class="content-container">
        <div class="content">
            <div class="achievements-section" id="achievements">

                <div class="deanslister">
                    <h3>Dean's Lister</h3>
                    <img src="Images/dl1st.jpg" alt="Deans Lister Image">
                    <img src="Images/dl2nd.jpg" alt="Deans Lister Image(1)">
                </div>

                <div class="workwithcomputer">
                    <h3>Working With Computer Certificates</h3>
                    <img src="Images/8.png" alt="Working with Computer and Devices">
                </div>

                <div class="word">
                    <h3>Word Certificates</h3>
                    <img src="Images/7.png" alt="Word Tips and Tricks">
                    <img src="Images/6.png" alt="Word Essential Training">
                </div>
                
                <div class="python">
                    <h3>Python Certificates</h3>
                    <img src="Images/5.png" alt="Python certificate">
                </div>
                
                <div class="powerpoint">
                    <h3>Powerpoint Certificates</h3>
                    <img src="Images/4.png" alt="Powerpoint Tips and Tricks">
                    <img src="Images/3.png" alt="Powerpoint Essential Training">
                </div>
                
                <div class="achievement">
                    <h3>Excel Certificates</h3>
                    <img src="Images/2.png" alt="Excel Tips and Tricks">
                    <img src="Images/1.png" alt="Excel Essential Training">
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="functionality.js"></script>
</body>
</html>
