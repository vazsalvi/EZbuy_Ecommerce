<?php
// Start the session
session_start();

// Include the database connection
include('includes\connect.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get user data from the form
    $user_id = $_SESSION['user_id']; // User ID from session
    $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $street_name = mysqli_real_escape_string($con, $_POST['street_name']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $postal_code = mysqli_real_escape_string($con, $_POST['postal_code']);
    $current_password = mysqli_real_escape_string($con, $_POST['current_password']);
    $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
    $confirm_new_password = mysqli_real_escape_string($con, $_POST['confirm_new_password']);
    
    // Handle the password change if needed
    if (!empty($new_password) && !empty($confirm_new_password)) {
        if ($new_password == $confirm_new_password) {
            // Hash the new password
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            // Update password in the database
            $query = "UPDATE user_table SET user_password = '$hashed_password' WHERE user_id = '$user_id' AND user_password = '$current_password'";
            $result = mysqli_query($con, $query);

            if (!$result) {
                echo "Error updating password: " . mysqli_error($con);
                exit();
            }
        } else {
            echo "New passwords do not match!";
            exit();
        }
    }

    // Update other information in the database
    $query = "UPDATE user_table 
              SET user_full_name = '$full_name', 
                  user_email = '$email', 
                  username = '$username', 
                  user_mobile = '$mobile', 
                  user_country_name = '$country', 
                  user_street_name = '$street_name', 
                  user_town_city = '$city', 
                  user_state_country = '$state', 
                  user_post_zip = '$postal_code'
              WHERE user_id = '$user_id'";

    $result = mysqli_query($con, $query);

    if ($result) {
        // Success message
        echo "Your account information has been updated successfully.";
        // Success message and redirect
        header("Location: dashboard.php"); // Redirect to the dashboard
        exit(); // Ensure no further code is executed
    } else {
        echo "Error updating account information: " . mysqli_error($con);
    }
}
?>
