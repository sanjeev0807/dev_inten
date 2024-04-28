<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and bind the SQL statement
$stmt = $conn->prepare("SELECT id, username, password FROM login WHERE username = ?");
$stmt->bind_param("s", $username);

// Execute the statement
$stmt->execute();

// Bind the result variables
$stmt->bind_result($id, $username, $hashedPassword);

// Fetch the result
$stmt->fetch();

// Verify the password
if (password_verify($password, $hashedPassword)) {
    echo "Login successful";
} else {
    echo "Invalid username or password";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
