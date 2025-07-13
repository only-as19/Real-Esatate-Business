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
    if ($password !== $confirm_password) {
        $error_message = "Passwords do not match.";
        header("Location: signUp.html?error=" . urlencode($error_message));
        exit();
    }

    // Check if email already exists
    $email_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = $conn->query($email_check_query);

    if ($result->num_rows > 0) {
        // If email exists, show error message and redirect back to sign-up form
        $error_message = "This email is already taken.";
        header("Location: signUp.html?error=" . urlencode($error_message));
        exit();
    }

    // Insert into database
    $sql = "INSERT INTO users (full_name, email, phone, user_type, location, password) 
            VALUES ('$full_name', '$email', '$phone', '$user_type', '$location', '$password')";

    if ($conn->query($sql)) {
        // Redirect to login page after successful sign-up
        header("Location: signInForm.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
