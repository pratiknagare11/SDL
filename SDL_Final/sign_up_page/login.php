<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are provided
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Simple validation: check if username and password are not empty
        if (!empty($username) && !empty($password)) {
            // Username and password are valid
            echo "Welcome, " . $username . "!";
        } else {
            // Username or password is empty
            echo "Please provide both username and password.";
        }
    } else {
        // Username or password is not provided
        echo "Please provide both username and password.";
    }
} else {
    // Form is not submitted
    echo "Invalid request.";
}
?>
