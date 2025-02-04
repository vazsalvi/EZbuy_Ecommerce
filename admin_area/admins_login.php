<?php
include('../includes/connect.php'); // Adjust the file path as needed
session_start(); // Start the session

$login_message = ""; // Initialize a message variable

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
        header("Location: index.php");
        exit();
    } else {
        $login_message = "❌ Invalid credentials. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f7fc;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
        }
        .card {
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="card">
            <h2 class="text-center mb-4">Admin Login</h2>

            <?php if ($login_message): ?>
                <div class="alert alert-danger text-center"><?php echo $login_message; ?></div>
            <?php endif; ?>

            <form method="post" action="">
                <div class="form-group">
                    <label for="adminEmail">Email</label>
                    <input type="email" class="form-control" id="adminEmail" name="admin_email" required>
                </div>
                <div class="form-group">
                    <label for="adminPassword">Password</label>
                    <input type="password" class="form-control" id="adminPassword" name="admin_password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <p class="mt-3 text-center">Don't have an account? <a href="/Ai_driven_ecommerce/admin_area/admins_registration.php">Register here</a></p>
            </form>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
