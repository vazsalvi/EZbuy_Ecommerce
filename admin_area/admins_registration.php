<?php
session_start();


?>
<?php
include('../includes/connect.php'); // Adjust the file path as needed

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_password = password_hash($_POST['admin_password'], PASSWORD_DEFAULT);
    $admin_number = $_POST['admin_number'];

    // Insert admin details into the database
    $query = "INSERT INTO admin_table (admin_name, admin_email, admin_password, admin_number)
              VALUES ('$admin_name', '$admin_email', '$admin_password', '$admin_number')";
    
    if (mysqli_query($con, $query)) {
        echo "Admin registered successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Admin Registration</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="adminName">Name</label>
                <input type="text" class="form-control" id="adminName" name="admin_name" required>
            </div>
            <div class="form-group">
                <label for="adminEmail">Email</label>
                <input type="email" class="form-control" id="adminEmail" name="admin_email" required>
            </div>
            <div class="form-group">
                <label for="adminPassword">Password</label>
                <input type="password" class="form-control" id="adminPassword" name="admin_password" required>
            </div>
            <div class="form-group">
                <label for="adminNumber">Contact Number</label>
                <input type="text" class="form-control" id="adminNumber" name="admin_number" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <p>Don't have an account? <a href="/EZbuy_Ecommerce/admin_area/admins_login.php">Register here</a></p>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrap.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
