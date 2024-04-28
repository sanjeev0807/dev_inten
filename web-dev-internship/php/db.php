<?php
// Database configuration
$servername = "localhost"; // Change this to your MySQL server hostname if different
$username = "root"; // Change this to your MySQL username if different
$password = ""; // Change this to your MySQL password if set
$database = "login"; // Change this to your MySQL database name if different

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
