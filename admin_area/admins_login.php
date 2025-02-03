<?php
include('../includes/connect.php'); // Adjust the file path as needed
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    // Check if the admin exists in the database
    $query = "SELECT * FROM admin_table WHERE admin_email = '$admin_email'";
    $result = mysqli_query($con, $query);
    $admin = mysqli_fetch_assoc($result);

    if ($admin && password_verify($admin_password, $admin['admin_password'])) {
        $_SESSION['admin_id'] = $admin['admin_id'];
        $_SESSION['admin_name'] = $admin['admin_name'];
        echo "Login successful! Welcome, " . $admin['admin_name'];
        // Redirect to the admin dashboard or any other page
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid email or password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://stackpath.bootstrap.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Admin Login</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="adminEmail">Email</label>
                <input type="email" class="form-control" id="adminEmail" name="admin_email" required>
            </div>
            <div class="form-group">
                <label for="adminPassword">Password</label>
                <input type="password" class="form-control" id="adminPassword" name="admin_password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <p>Don't have an account? <a href="/Ai_driven_ecommerce/admin_area/admins_registration.php">Register here</a></p>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrap.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
