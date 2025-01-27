<?php
include('../includes/connect.php'); // Adjust the file path as needed

// Fetch users from the database
$query = "SELECT * FROM user_table";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Users</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrap.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .table-container {
            margin-top: 20px;
        }
        .table-container h1 {
            margin-bottom: 20px;
        }
        .user-image {
            max-width: 50px;
            height: auto;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-container">
            <h1 class="my-4">List of Users</h1>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Mobile</th>
                        <th>Full Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['user_id'] . '</td>';
                            echo '<td>' . $row['username'] . '</td>';
                            echo '<td>' . $row['user_email'] . '</td>';
                            echo '<td><img src="../includes/user_images/' . $row['user_image'] . '" alt="User Image" class="user-image"></td>';
                            echo '<td>' . $row['user_mobile'] . '</td>';
                            echo '<td>' . $row['user_full_name'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="6">No users found.</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrap.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
