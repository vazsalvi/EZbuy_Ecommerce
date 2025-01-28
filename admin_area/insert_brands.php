<?php
include("../includes/connect.php");

if (isset($_POST['insert_brand'])) {
    // Fetch the form data and sanitize it
    $brand_title = mysqli_real_escape_string($con, $_POST['brand_title']);

    // Check if brand already exists in the database
    $select_query = "SELECT * FROM `brands` WHERE brand_title = '$brand_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
        echo "<script>alert('Brand already exists');</script>";
    } else {
        // Insert the brand into the database
        $insert_query = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')";
        $result = mysqli_query($con, $insert_query);

        if ($result) {
            echo "<script>alert('Brand inserted successfully');</script>";
        } else {
            echo "<script>alert('Error inserting brand');</script>";
        }
    }
}
?>
<h2 class="text-center">Insert brands</h2>
<!-- HTML Form -->
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brand" aria-label="brands"
            aria-describedby="basic-addon1" required>
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand" value="Insert Brand">
    </div>
</form>
