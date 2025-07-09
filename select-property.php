<?php
// Database connection
$con = mysqli_connect("localhost", "root", "", "propertybase");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Fetch all cities and prices for the dropdowns
$city_query = "SELECT DISTINCT city FROM property";
$price_query = "SELECT DISTINCT price FROM property ORDER BY price ASC";

$city_result = mysqli_query($con, $city_query);
$price_result = mysqli_query($con, $price_query);

// Check if city and price are selected
$city_filter = isset($_POST['city']) ? $_POST['city'] : '';
$price_filter = isset($_POST['price']) ? $_POST['price'] : '';

// Prepare the query to fetch properties based on the filters
$query = "SELECT * FROM property WHERE 1=1";

// Add filters to the query
if ($city_filter != '') {
    $query .= " AND city = '$city_filter'";
}

if ($price_filter != '') {
    $query .= " AND price <= '$price_filter'";
}

$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="icon" href="./Img/favi.png" type="image/x-icon">
    
    <style>
    /* General Styles for Property Cards */
    .property-card-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-between;
    }

    .filter-select {
        padding: 10px;
        margin-bottom: 10px;
    }

    .property-card {
        width: 32%;  /* Default: 3 cards per row */
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: none; /* Hide all cards initially */
    }

    .property-card img {
        width: 100%; /* Ensure images take full width of the card */
        border-radius: 10px;
    }

    .property-card .property-title {
        font-size: 18px;
        margin-top: 15px;
    }

    .property-card .property-price {
        margin-top: 10px;
    }

    /* Mobile/Tablet Responsive Styles */
    @media (max-width: 750px) {
        .property-card-list {
            flex-direction: column;
            align-items: center;
        }

        .property-card {
            width: 90%;  /* Make cards take up most of the width */
            margin-bottom: 20px;  /* Space between the cards */
        }

        .property-title {
            font-size: 16px;
        }

        .property-price {
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .property-card {
            padding: 10px;
        }

        .property-title {
            font-size: 14px;
        }

        .property-price {
            font-size: 12px;
        }
    }
    </style>
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

    <!-- Search Filters -->
    <div class="filter-section">
        <form method="POST" id="filter-form">
            <!-- Select for City -->
            <select name="city" id="city-select" class="filter-select">
                <option value="">All Locations</option>
                <?php while ($city = mysqli_fetch_assoc($city_result)) { ?>
                    <option value="<?= $city['city']; ?>" <?= ($city['city'] == $city_filter) ? 'selected' : ''; ?>><?= $city['city']; ?></option>
                <?php } ?>
            </select>

            <!-- Select for Price -->
            <select name="price" id="price-select" class="filter-select">
                <option value="">All Price Ranges</option>
                <?php while ($price = mysqli_fetch_assoc($price_result)) { ?>
                    <option value="<?= $price['price']; ?>" <?= ($price['price'] == $price_filter) ? 'selected' : ''; ?>>$<?= number_format($price['price']); ?></option>
                <?php } ?>
            </select>

            <!-- Submit Button -->
            <button type="submit" class="btn-primary btn-purple">Search</button>
        </form>
    </div>

    <!-- Property Cards -->
    

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
