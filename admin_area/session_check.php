<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    // Redirect to the login page if the admin is not logged in
    header("Location: login.html"); // Adjust the file path as needed
    exit();
}
?>
