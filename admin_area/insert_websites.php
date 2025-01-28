<?php
include("../includes/connect.php");

if (isset($_POST['insert_website'])) {
    // Fetch the form data
    $website_title = $_POST['website_title'];

    // Prepared statement to check if Website already exists
    $select_query = "SELECT * FROM `websites` WHERE website_title = ?";
    if ($stmt_select = $con->prepare($select_query)) {
        $stmt_select->bind_param("s", $website_title);
        $stmt_select->execute();
        $result_select = $stmt_select->get_result();
        
        if ($result_select->num_rows > 0) {
            echo "<script>alert('Website already exists');</script>";
        } else {
            // Prepared statement to insert Website
            $insert_query = "INSERT INTO `websites` (website_title) VALUES (?)";
            if ($stmt_insert = $con->prepare($insert_query)) {
                $stmt_insert->bind_param("s", $website_title);
                if ($stmt_insert->execute()) {
                    echo "<script>alert('Website inserted successfully');</script>";
                } else {
                    echo "<script>alert('Error inserting Website');</script>";
                }
            } else {
                echo "<script>alert('Error preparing insert statement');</script>";
            }
        }
    } else {
        echo "<script>alert('Error preparing select statement');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .form-container {
            width: 50%;
            margin: auto;
            padding: 30px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .input-group {
            margin-bottom: 1.5rem;
        }
        .input-group-text {
            background-color: #17a2b8;
            color: white;
        }
        .btn-submit {
            background-color: #17a2b8;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
        }
        .btn-submit:hover {
            background-color: #138496;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">Insert Website</h2>
        <div class="form-container">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="website_title" placeholder="Insert Website" required>
                </div>
                <div class="input-group">
                    <input type="submit" class="btn-submit" name="insert_website" value="Insert Website">
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
