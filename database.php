<?php
// database.php
$host = 'localhost'; // Database host
$user = 'root'; // Database username
$password = ''; // Database password
$database = 'weather_forecast_system'; // Database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
