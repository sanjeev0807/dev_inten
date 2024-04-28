<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Hash the password before storing it in the database
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO login (username, password, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $hashedPassword, $email);

// Execute the statement
if ($stmt->execute()) {
    echo "Registration successful";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
