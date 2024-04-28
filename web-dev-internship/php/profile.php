<?php
// PHP code for user profile management
include 'db.php';

// Fetch user profile data from database
$username = "user123"; // Assuming user is logged in
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $userData = array(
        'username' => $row['username'],
        'email' => $row['email'],
        'age' => $row['age'],
        'dob' => $row['dob'],
        'contact' => $row['contact']
    );
    echo json_encode($userData);
} else {
    echo "User not found";
}

$conn->close();
?>
