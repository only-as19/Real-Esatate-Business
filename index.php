<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real State Business</title>
    <link rel="stylesheet" href="Css/style.css"> <!-- Link to external CSS file -->
    <link rel="icon" href="./Img/favi.png" type="image/x-icon"> <!-- Favicon for the page -->
</head>
<body>

   <!-- Header Section -->
   <header>
    <!-- Logo Section -->
    <div class="logo">
        <a href="index.php"><img src="Img/Logo.png" alt="Estatein"></a>
    </div>

    <!-- Hamburger Menu Icon for Mobile -->
    <img src="Img/hamburger.png" alt="Hamburger" class="hamburger" id="hamburger-icon">

    <!-- Navigation Menu -->
    <nav id="nav-menu">
        <ul>
            <!-- Navigation Links -->
            <li><a href="./index.php" class="active">Home</a></li>
            <li><a href="./about.html">About</a></li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>

    <!-- Login Button -->
    <a href="./Sign/signInForm.php" class="btn-primary btn-purple">Login</a>
</header>

<!-- Hero Section with Title and Buttons -->
<section class="hero-sectin">
    <div class="hero-section-content">
        <div class="hero-section1">
            <h1 class="hero-title">Discover Your Dream Property with Estatein</h1>
            <p class="hero-text">Your Journey to finding the perfect property begins here. Explore our listings to find a home that matches your dreams.</p>

            <!-- Hero Buttons for Call to Action -->
            <div class="hero-btn"> 
                <a href="#" class="btn-primary btn-black">Learn More</a>
                <a href="./select-property.php" class="btn-primary btn-purple">Browse Properties</a>
            </div>

            <!-- Hero Stats: Happy Customers, Properties, and Experience -->
            <div class="hero-reviews">
                <div class="hero-review-block">
                    <h3>200+</h3>
                    <p>Happy Customers</p>
                </div>
                <div class="hero-review-block">
                    <h3>10k+</h3>
                    <p>Properties For Clients</p>
                </div>
                <div class="hero-review-block">
                    <h3>16+</h3>
                    <p>Years of Experience</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Image -->
    <div class="hero-img">
        <img class="hero" src="Img/hero.webp" alt="Building">
    </div>
    <!-- Animation Image -->
    <div class="hero-animation"><img src="Img/animate.png" alt=""></div>
</section>

<main>

    <!-- Services Section with List of Services -->
    <section class="services body-bold">
        <div class="service-wrap">
            <div class="service-box">
                <img src="Img/Home.png" alt="Dream Home">
                <p>Find Your Dream Home</p>
            </div>
            <div class="service-box">
                <img src="Img/Icon Container (4).png" alt="Dream Home">
                <p>Unlock Property Value
</p>
            </div>
            <div class="service-box">
                <img src="Img/Management.png" alt="Dream Home">
                <p>Effortless Property Management
</p>
            </div>
            <div class="service-box">
                <img src="Img/Smart.png" alt="Dream Home">
                <p>Smart Investments, Informed Decisions
</p>
            </div>
        </div>
    </section>

    <!-- Featured Properties Section -->
    <section class="properties">
        <div class="property-description">
            <h2>Featured Property</h2>
            <div class="description-data">
                <div class="p-detail">
                    <p>Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein. Click "View Details" for more information.</p>
                </div>
                <!-- Button to View All Properties -->
                <a href="properties.php" class="btn-primary btn-black">View All Properties</a>
            </div>
        </div>

        <!-- Property Cards List -->
        <div class="property-card-list">
            <?php
            // Database connection
            $con = mysqli_connect("localhost", "root", "", "propertybase");

            // Check connection
            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }

            // Query to fetch only the first 3 properties from the database
            $query = "SELECT * FROM property LIMIT 3";  // Fetches only the first 3 rows
            $result = mysqli_query($con, $query);

            // Check if there are any properties
            if (mysqli_num_rows($result) > 0) {
                // Loop through each property and display it
                while ($property = mysqli_fetch_assoc($result)) {
                    $name = $property['name'];
                    $image =  $property['image'];  // Prepend 'images/' to the image path
                    $description = $property['description'];
                    $bedroom_img =  $property['bedroom_img'];  // Prepend 'images/' to the image path
                    $bathroom_img =  $property['bathroom_img'];  // Prepend 'images/' to the image path
                    $villa_img =  $property['villa_img'];  // Prepend 'images/' to the image path
                    $price = $property['price'];
                    $city = $property['city'];

                    // Output the HTML for each property card
                    echo "
                    <div class='property-card'>
                        <div class='property-card-content'>
                            <img src='./Img/$image' alt='$name'>
                            <h3 class='property-title'>$name</h3>
                            <p class='property-text'>$description</p>
                            <div class='property-item-detail body-bold'>
                                <div class='property-items'>
                                    <div class='property-item-img'>
                                        <img src='./Img/$bedroom_img' alt='Bedroom'>
                                    </div>
                                    4-bedroom
                                </div>
                                <div class='property-items'>
                                    <div class='property-item-img'>
                                        <img src='./Img/$bathroom_img' alt='Bathroom'>
                                    </div>
                                    3-bathroom
                                </div>
                                <div class='property-items'>
                                    <div class='property-item-img'>
                                        <img src='./Img/$villa_img' alt='Villa'>
                                    </div>
                                    Villa
                                </div>
                            </div>
                            <div class='property-price'>
                                <p>
                                    <span>Price</span><br><span class='body-bold'>$$price</span>
                                </p>
                                <a href='#' class='btn-primary btn-purple'>View Property Details</a>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<p>No properties found.</p>";
            }

            // Close the connection
            mysqli_close($con);
            ?>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section body-bold">
        <h2>What Our Clients Say</h2>
        <p class="testimonials-text">Read the success stories and heartfelt testimonials from our valued clients. Discover why they chose Estatein for their real estate needs.</p>
        <div class="testimonials-list">
            <div class="testimonials">
                <div class="rating">
                    <!-- Star Rating -->
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                </div>
                <h4>Excellent Service!</h4>
                <p class="testimonials-text">Our experience with Estatein was outstanding. Their team’s dedication and professionalism made finding our dream home a breeze. Highly recommended!</p>
            </div>
            <div class="testimonials">
                <div class="rating">
                    <!-- Star Rating -->
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                </div>
                <h4>Efficient and Reliable</h4>
                <p class="testimonials-text">Estatein provided us with top-notch service. They helped us sell our property quickly and at a great price. We couldn’t be happier with the results.</p>
            </div>
            <div class="testimonials">
                <div class="rating">
                    <!-- Star Rating -->
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                    <div class="rating-img">
                        <img src="Img/star.png" alt="">
                    </div>
                </div>
                <h4>Trusted Adviser</h4>
                <p class="testimonials-text">The Estatein team guided us through the entire buying process. Their knowledge and commitment to our needs were impressive. Thank you for your support!</p>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="cta-info">
            <div class="cta">
                <h2>Start Your Real Estate Journey Today</h2>
                <p class="cta-text">Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you every step of the way. Take the first step towards your real estate goals and explore our available properties or get in touch with our team for personalized assistance.</p>
            </div>
            <!-- Button to Explore Properties -->
            <a href="./select-property.php" class="btn-primary btn-purple">Explore Properties</a>
        </div>
    </section>
</main>

<!-- Footer Section -->
<footer class="footer">
    <div class="logo">
        <a href="index.php"><img src="Img/Logo.png" alt="Estatein"></a>
    </div>

    <!-- Footer Links -->
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

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <p>©2023 Estatein. All Rights Reserved</p>
        <a href="#">Terms & Conditions</a>
        <!-- Social Media Icons -->
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

<!-- JavaScript File -->
<script src="JS/index.js"></script>
</body>
</html>
