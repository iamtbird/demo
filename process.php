<?php
include 'db.php';

// Get POST data
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO answers (name, email, age) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $name, $email, $age);

// Execute statement
$stmt->execute();

// Close the connection
$stmt->close();
$conn->close();

// Redirect to a thank you page or original form
header('Location: thank-you.html');
exit;
?>
