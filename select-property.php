

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="icon" href="./Img/favi.png" type="image/x-icon">
    

</head>
<body>
    <header>
    <div class="logo">
        <a href="index.php"><img src="Img/Logo.png" alt="Estatein"></a>
    </div>

    <img src="Img/hamburger.png" alt="Hamburger" class="hamburger" id="hamburger-icon">

    <nav id="nav-menu">
        <ul>
            <li><a href="./index.php" class="active">Home</a></li>
            <li><a href="./about.html">About</a></li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>

    <a href="./Sign/signIn.html" class="btn-primary btn-purple">Login</a>
    </header>

    

    <footer class="footer">
       <div class="logo">
            <a href="index.php"><img src="Img/Logo.png" alt="Estatein"></a>
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
            <img src="Img/Facebook.png" alt="Facebook">
            <img src="Img/LinkdIn.png" alt="LinkdIn">
            <img src="Img/Twitter.png" alt="Twitter">
            <img src="Img/Youtube.png" alt="Youtube">
          </div>
        </div>
      </div>
    </footer>

    <script src="JS/index.js"></script>

    <!-- JavaScript to filter properties dynamically based on selected options -->
    <script>
        document.getElementById('filter-form').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission to reload page

            let selectedCity = document.getElementById('city-select').value;
            let selectedPrice = document.getElementById('price-select').value;

            // Loop through all property cards
            let propertyCards = document.querySelectorAll('.property-card');
            propertyCards.forEach(function (card) {
                let cardCity = card.getAttribute('data-city');
                let cardPrice = card.getAttribute('data-price');

                // Show or hide based on filters
                if ((selectedCity === '' || cardCity === selectedCity) && 
                    (selectedPrice === '' || cardPrice <= selectedPrice)) {
                    card.style.display = 'block'; // Show card
                } else {
                    card.style.display = 'none'; // Hide card
                }
            });
        });
    </script>
</body>
</html>

<?php
// Close the database connection
mysqli_close($con);
?>
