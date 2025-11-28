<?php
session_start();
include 'config.php'; // Include your database configuration

// Assuming user_id is stored in session after login
$user_id = $_SESSION['user_id'];

// Prepare the SQL statement
$stmt = $conn->prepare("SELECT username FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    echo json_encode(['username' => $user['username']]);
} else {
    echo json_encode(['username' => 'Guest']);
}

$stmt->close();
$conn->close();
?>
