<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Doc 990</title>

    <link rel="stylesheet" href="styles.css">

    <link rel="icon" href="Doc990thankyouScreenLogo.png">
</head>
<body>
    <!-- Header -->
    <header>

        <img src="Doc990thankyouScreenLogo.png" alt="Doc990 Logo"  style="margin-left: 10px;">

        <div class="button-container"><br><br><br><br><br><br>
    <button>My Bookings</button>
    <button>Refund Request</button>
    <button>Sign In</button>
</div>

    

    <!-- Navigation Header -->
<div class="navbar">
    <div class="menu-toggle" id="menu-toggle" onclick="toggleMenu()">&#9776;</div>
</div>

<!-- Sidebar Navigation -->
<nav class="menu" id="menu">
    <div class="menu-toggle" id="close-btn">&times;</div>
    <span>MENU</span>
    <ul class="menu-list">
        <li><a href="#">Sign In</a></li>
        <li><a href="#">Sign Up</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Ongoing Number</a></li>
        <li><a href="#">My Bookings</a></li>
        <li><a href="#">Refund Request</a></li>
        <li><a href="#">Partners</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Privacy Notice</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Corporate Solutions</a></li>
    </ul>
</nav>


</header>

    <!-- Main Login Container -->
    <div class="container">
        <h1>Sign In & SAVE</h1>
        <p class="discount">15% OFF on Service Fee</p>
        <p>Doc990 is now bigger and better with MyDoctor.<br>
           If you already have a MyDoctor account, please sign in with your existing credentials to experience enhanced services.</p>

        <!-- Login Form -->
        <form action="login.php" method="post">
    <label for="email">Email or Phone Number</label>
    <input type="text" id="email" name="email" placeholder="Login with AD credentials" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Password" required>

    <div class="keep-signed-in">
        <input type="checkbox" id="keep-signed-in">
        <label for="keep-signed-in">Keep me signed in</label>
    </div>
    <button>Back</button>
    <button type="submit">Sign In</button>
</form>


        <!-- Links -->
        <div class="links">
            <a href="#">Forgot password?</a><br>
            Not yet registered? <a href="#">Sign Up</a>
        </div>


    </div>

    <footer class="footer">
        <div class="footer-container">

        <!-- Awards -->
        <div class="awards" style="text-align: center; margin-top: 20px;">
            <img src="silver_badge.png" alt="Award 1">
            <img src="gold_badge.png" alt="Award 2">
        </div>

            <!-- Services -->
            <div class="footer-column">
                <h3>SERVICES</h3>
                <ul>
                    <li><a href="#">Channel Your Doctor</a></li>
                    <li><a href="#">Ongoing Number</a></li>
                    <li><a href="#">Audio/Video Consultation</a></li>
                    <li><a href="#">Medicine to Your Doorstep</a></li>
                    <li><a href="#">Healthcare to Your Doorstep</a></li>
                    <li><a href="#">Lab Reports at Your Fingertips</a></li>
                    <li><a href="#">Health Mart</a></li>
                    <li><a href="#">Vet Care by SLVA</a></li>
                </ul>
            </div>

            <!-- About Doc990 -->
            <div class="footer-column">
                <h3>Doc990</h3>
                <ul>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Notice</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>

            <!-- Follow Us -->
            <div class="footer-column">
                <h3>FOLLOW Doc990</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Google Plus</a></li>
                </ul>
                <div class="contact-number">
                    ☎ 0117990990 for Agent Assistance
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            © DIGITAL HEALTH PVT LTD. ALL RIGHTS RESERVED. <br>
            Technology Partner <img src="mediwave_small_logo.png">
        </div>
    </footer>   

    <script>
// Select elements
const menu = document.getElementById('menu'); // Sidebar menu
const toggleButton = document.getElementById('menu-toggle'); // Open button
const closeButton = document.getElementById('close-btn'); // Close button

// Open the sidebar when the toggle button is clicked
toggleButton.addEventListener('click', () => {
    menu.classList.add('active'); // Add 'active' class to show the menu
});

// Close the sidebar when the close button is clicked
closeButton.addEventListener('click', () => {
    menu.classList.remove('active'); // Remove 'active' class to hide the menu
});

    </script>

</body>
</html>
