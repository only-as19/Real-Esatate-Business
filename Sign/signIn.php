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

    if ($result->num_rows > 0) {
        // Fetch the user record
        $user = $result->fetch_assoc();

        // Compare the password
        if ($user['password'] === $password) {
            // Start a session for the user
            session_start();
            $_SESSION['user_id'] = $user['id']; // Store user ID in session
            $_SESSION['user_email'] = $user['email']; // Store email in session

            // Redirect to home page after successful login
header("Location: /Project/index.php");
            exit();
        } else {
            // If password is incorrect
            $error_message = "Invalid email or password.";
            header("Location: signInForm.php?error=" . urlencode($error_message));
            exit();
        }
    } else {
        // If email doesn't exist
        $error_message = "Invalid email or password.";
        header("Location: signInForm.php?error=" . urlencode($error_message));
        exit();
    }

    $conn->close();
}
?>
