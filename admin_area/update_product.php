<?php
include('../includes/connect.php');
include('../functions/common_function.php');

// $user_ip = getUserIP();
// echo "User IP Address: " . $user_ip;
?><?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords'];
    $category_id = $_POST['category_id'];
    $brand_id = $_POST['brand_id'];
    $product_price = $_POST['product_price'];

    // Handle file uploads
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // Set upload directory
    $upload_dir = 'product_images/';

    // Move uploaded files to the upload directory if provided
    if ($product_image1) {
        move_uploaded_file($temp_image1, $upload_dir . $product_image1);
    } else {
        // If no new image is uploaded, keep the existing image
        $product_image1 = $_POST['existing_image1'];
    }

    if ($product_image2) {
        move_uploaded_file($temp_image2, $upload_dir . $product_image2);
    } else {
        $product_image2 = $_POST['existing_image2'];
    }

    if ($product_image3) {
        move_uploaded_file($temp_image3, $upload_dir . $product_image3);
    } else {
        $product_image3 = $_POST['existing_image3'];
    }

    // Update product details in the database
    $update_query = "UPDATE products SET 
                     product_title = '$product_title', 
                     product_description = '$product_description', 
                     product_keywords = '$product_keywords', 
                     category_id = '$category_id', 
                     brand_id = '$brand_id', 
                     product_image1 = '$product_image1', 
                     product_image2 = '$product_image2', 
                     product_image3 = '$product_image3', 
                     product_price = '$product_price' 
                     WHERE product_id = $product_id";

    if (mysqli_query($con, $update_query)) {
        echo "Product updated successfully!";
    } else {
        echo "Error updating product: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
    <a href="index.php">Go back to products list</a>
</body>
</html>

