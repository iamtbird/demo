<?php
$servername = "Local instance MySQL81";
$username = "root";
$password = "august13";
$dbname = "questionDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
