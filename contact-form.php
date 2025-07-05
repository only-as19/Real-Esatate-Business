<?php
// Database connection
$con = mysqli_connect("localhost", "root", "", "propertybase");  // Your DB connection

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data and sanitize it
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $phone_number = $_POST['number'];
    $email = $_POST['email'];
    $message =  $_POST['message'];

    // Prepare SQL statement to insert data into 'message' table
    $send_msg = "INSERT INTO message (first_name, last_name, phone_number, email, message) 
                 VALUES ('$first_name', '$last_name', '$phone_number', '$email', '$message')";

    // Execute the query and check if it's successful
    if (mysqli_query($con, $send_msg)) {
        // Redirect to contact page after successful submission
        header("Location: contact.html");
        exit();  // Stop further script execution
    } else {
        echo "Error: " . mysqli_error($con);  // Show error message if insertion fails
    }
}

// Close the connectio