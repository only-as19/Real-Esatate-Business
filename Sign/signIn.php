<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="signUP.css">
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
    <header>
    <div class="logo">
        <a href="../index.php"><img src="../Img/Logo.png" alt="Estatein"></a>
    </div>

    <img src="Img/hamburger.png" alt="Hamburger" class="hamburger" id="hamburger-icon">

    <nav id="nav-menu">
        <ul>
            <li><a href="../index.php" class="active">Home</a></li>
            <li><a href="../about.html">About</a></li>
            <li><a href="../contact.html">Contact</a></li>
        </ul>
    </nav>

    <a href="./Sign/signInForm.php" class="btn-primary btn-purple">Login</a>
</header>
   <!-- Display Error Message if Login Fails -->
    <?php if (isset($_GET['error'])): ?>
        <div style="color: red; text-align: center;">
            <?php echo htmlspecialchars($_GET['error']); ?>
        </div>
    <?php endif; ?>

    <main>
        <form class="login-form" action="signIn.php" method="POST">
            <div class="form-container">
                <h2>Login to Your Account</h2>
                <p>Enter your credentials to log in</p>
                <input type="email" name="email" placeholder="Enter Email" required>
                <div class="div">
                    <input id="password" type="password" name="password" placeholder="Enter Your Password" required>
                    <div id="eye-icon" class="eye-icon">
                        <img id="eye-img" src="../Img/eye_close.png" alt="">
                    </div>
                </div>
                <button type="submit">Log In</button>
                <div class="form-bottom">
                    <p>Need Help?</p>
                    <p><a href="signUp.html" class="log">Create an account</a></p>
                </div>
            </div>
        </form>
    </main>
<footer class="footer">
   <div class="logo">
            <a href="../index.php"><img src="../Img/Logo.png" alt="Estatein"></a>
        </div>

  <div class="footer-links">
    <div>
      <h4>Home</h4>
      <ul>
        <li>Hero Section</li>
        <li>Features</li>
        <li>Properties</li>
        <li>Testimonials</li>
        <li>FAQs</li>
      </ul>
    </div>
    <div>
      <h4>About Us</h4>
      <ul>
        <li>Our Story</li>
        <li>Our Works</li>
        <li>How It Works</li>
        <li>Our Team</li>
        <li>Our Clients</li>
      </ul>
    </div>
    <div>
      <h4>Services</h4>
      <ul>
        <li>Valuation Mastery</li>
        <li>Strategic Marketing</li>
        <li>Negotiation Wizardry</li>
        <li>Closing Success</li>
        <li>Property Management</li>
      </ul>
    </div>
    <div>
      <h4>Contact Us</h4>
      <ul>
        <li>Contact Form</li>
        <li>Our Offices</li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <p>©2023 Estatein. All Rights Reserved</p>
    <a href="#">Terms & Conditions</a>
    <div class="social-icons">
      <div class="social-icon-box">
        <img src="../Img/Facebook.png" alt="Facebook">
        <img src="../Img/LinkdIn.png" alt="LinkdIn">
        <img src="../Img/Twitter.png" alt="Twitter">
        <img src="../Img/Youtube.png" alt="Youtube">
      </div>
    </div>
  </div>
</footer>
   <script src="sign.js"></script>
   <script src="../JS/index.js"></script>
</body>
</html>