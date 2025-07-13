<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "propertyBase");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get data from form
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_type = $_POST['user_type'];
    $location = $_POST['location'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password']; // Added confirm password field

    // Check if the passwords match
    

    // Check if email already exists
    

    

    // Insert into database
    

    
    $conn->close();
}
?>
