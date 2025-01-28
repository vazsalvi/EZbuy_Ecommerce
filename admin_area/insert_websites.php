<?php
include("../includes/connect.php");

if (isset($_POST['insert_website'])) {
    // Fetch the form data and sanitize it
    $website_title = mysqli_real_escape_string($con, $_POST['website_title']);

    // Check if Website already exists in the database
    $select_query = "SELECT * FROM `websites` WHERE website_title = '$website_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
        echo "<script>alert('Website already exists');</script>";
    } else {
        // Insert the Website into the database
        $insert_query = "INSERT INTO `websites` (website_title) VALUES ('$website_title')";
        $result = mysqli_query($con, $insert_query);

        if ($result) {
            echo "<script>alert('Website inserted successfully');</script>";
        } else {
            echo "<script>alert('Error inserting Website');</script>";
        }
    }
}
?>
<h2 class="text-center">Insert websites</h2>
<!-- HTML Form -->
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"></span>
        <input type="text" class="form-control" name="website_title" placeholder="Insert Website" aria-label="websites"
            aria-describedby="basic-addon1" required>
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_website" value="Insert Website">
    </div>
</form>
