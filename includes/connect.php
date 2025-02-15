<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mystore";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

echo "Connected successfully"; // Debugging message (remove later)
?>
