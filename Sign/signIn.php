<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "propertyBase");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get data from form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email exists in the database
    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = $conn->query($sql);

    

    $conn->close();
}
?>
