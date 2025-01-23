<?php
include 'includes\connect.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $new_shipping_address = mysqli_real_escape_string($con, $_POST['shipping_address']);

    // Update query
    $updateQuery = "UPDATE user_table SET shipping_address = '$new_shipping_address' WHERE user_id = '$user_id'";
    
    if (mysqli_query($con, $updateQuery)) {
        header("Location: dashboard.php"); // Redirect back to the profile page
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}
?>
