<?php
include("../includes/connect.php");

// Fetch websites
$websites_query = "SELECT * FROM `websites`";
$websites_result = mysqli_query($con, $websites_query);

if(isset($_POST['insert_cat'])){
    $category_title = $_POST['cat_title'];
    $website_id = $_POST['website_id'];

    // Selecting DATA from the DATABASE
    $select_query = "SELECT * FROM `categories` WHERE category_title = '$category_title' AND website_id = '$website_id'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if($number > 0){
        echo "<script>alert('Category already exists for this website')</script>";
    } else {
        $insert_query = "INSERT INTO `categories` (category_title, website_id) VALUES ('$category_title', '$website_id')";
        $result = mysqli_query($con, $insert_query);
        if($result){
            echo "<script>alert('Category inserted successfully')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Categories</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .actions-column {
            width: 80px;
            text-align: center;
        }
        .actions-column .btn {
            padding: 0.25rem 0.5rem;
        }
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
        <h2 class="text-center my-4">Insert Categories</h2>
        <div class="form-container">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" required>
                </div>
                <div class="input-group">
                    <select class="form-control" name="website_id" required>
                        <option value="">Select Website</option>
                        <?php
                        while($website = mysqli_fetch_assoc($websites_result)) {
                            echo "<option value='{$website['website_id']}'>{$website['website_title']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group">
                    <input type="submit" class="btn-submit" name="insert_cat" value="Insert Categories">
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
