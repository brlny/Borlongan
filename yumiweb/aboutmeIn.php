<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="style_abouts1.css">
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

    <div class="content-container">
        <!-- Table with Text -->
        <table class="content">
            <tbody>
                <tr>
                    <td>
                        <h1 class="highlighted-text" id="changingText">About Me</h1>
                        <p class="about-info"> - Hi there! I'm 19 years old and am enrolled at National University's Fairview Bachelor of Science in
                            Information Technology (BSIT) degree for my second year. My name is Yumi Borlongan. Despite my
                            initial doubts, I ultimately chose to pursue an IT degree because I think that technology improvements
                            would play a significant role in shaping the future. I'm excited to learn and grow in this dynamic industry
                            so that I can be prepared for the rapidly changing technological landscape.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Three Tables with Words -->
        <div class="table-container">
            <table class="education">
                <tbody>
                    <tr>
                        <td>
                            <h2 class="highlighted-text">Education Background</h2>
                            <p>- I graduated, </p>
                            <ul>
                                <li>High School (2020)</li>
                                <li>Elementary School (2016)</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="hobbies">
                <tbody>
                    <tr>
                        <td>
                            <h2 class="highlighted-text">Hobbies</h2>
                            <ul>
                                <li>I enjoy listening to music.</li>
                                <li>I enjoy spending time with my family because, for whatever reason, I've come to realize that life
                                    is fleeting and we can never know what the future holds.</li>
                                <li>Play with my dogs in addition.</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="facts">
                <tbody>
                    <tr>
                        <td>
                            <h2 class="highlighted-text">Facts About Me</h2>
                            <ul>
                                <li>I cherish the freedom and self-discovery that come with being alone myself, and I find great delight
                                and fulfillment in it.</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br>

        <!-- Quote section -->
        <div class="quote">
            <blockquote>&quot;Life is short and it's fragile, and we don't know how many birthdays we have...<br>If you haven't
                told someone you love them, do it now. Tell people you love them.&quot;<br>- Ellen Degeneres</blockquote>
        </div>
    </div>
</div>
<script src="functionality.js"></script>

</html>
