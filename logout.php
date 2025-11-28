<?php
session_start(); // Start the session

// Destroy the session to log the user out
if (session_destroy()) {
    // Redirect to the login page or homepage after logout
    header("Location: register.html"); // Adjust to your login page
    exit();
}
?>
