<?php
// Configuration
$db_host = 'localhost'; // Your database host
$db_username = 'root'; // Your database username
$db_password = ''; // Your database password
$db_name = 'users'; // Your database name

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Hash password
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Query to insert user data
$query = "INSERT INTO users (email, password) VALUES ('$email', '$password_hash')";

if ($conn->query($query) === TRUE) {
    echo "New user created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>