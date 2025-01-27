<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['admin_name']; ?>!</h1>
    <!-- Rest of your admin dashboard content -->
</body>
</html>

<?php
include('../includes/connect.php');
include('../functions/common_function.php');

// $user_ip = getUserIP();
// echo "User IP Address: " . $user_ip;
?>
<?php
// Include database connection
include("../includes/connect.php");

if (isset($_POST['insert_product'])) {
    // Fetch and sanitize form data
    $product_title = mysqli_real_escape_string($con, $_POST['product_title'] ?? '');
    $description = mysqli_real_escape_string($con, $_POST['description'] ?? '');
    $product_keywords = mysqli_real_escape_string($con, $_POST['product_keywords'] ?? '');
    $product_category = mysqli_real_escape_string($con, $_POST['product_category'] ?? '');
    $product_brand = mysqli_real_escape_string($con, $_POST['product_brand'] ?? '');
    $product_price = mysqli_real_escape_string($con, $_POST['product_price'] ?? '');
    $product_status = 'true';

    // Image names
    $product_image1 = $_FILES['product_image1']['name'] ?? '';
    $product_image2 = $_FILES['product_image2']['name'] ?? '';
    $product_image3 = $_FILES['product_image3']['name'] ?? '';

    // Temporary image names
    $temp_image1 = $_FILES['product_image1']['tmp_name'] ?? '';
    $temp_image2 = $_FILES['product_image2']['tmp_name'] ?? '';
    $temp_image3 = $_FILES['product_image3']['tmp_name'] ?? '';

    // Check for empty fields
    if (
        empty($product_title) || empty($description) || empty($product_keywords) ||
        empty($product_category) || empty($product_brand) || empty($product_price) ||
        empty($product_image1) || empty($product_image2) || empty($product_image3)
    ) {
        echo "<script>alert('Please fill all the fields')</script>";
        exit();
    }

    // Validate uploaded files
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
    $image1_ext = strtolower(pathinfo($product_image1, PATHINFO_EXTENSION));
    $image2_ext = strtolower(pathinfo($product_image2, PATHINFO_EXTENSION));
    $image3_ext = strtolower(pathinfo($product_image3, PATHINFO_EXTENSION));

    if (!in_array($image1_ext, $allowed_extensions) || !in_array($image2_ext, $allowed_extensions) || !in_array($image3_ext, $allowed_extensions)) {
        echo "<script>alert('Only image files (jpg, jpeg, png, gif) are allowed')</script>";
        exit();
    }

    // Move images to the folder
    $upload_dir = "./product_images/";
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    move_uploaded_file($temp_image1, $upload_dir . $product_image1);
    move_uploaded_file($temp_image2, $upload_dir . $product_image2);
    move_uploaded_file($temp_image3, $upload_dir . $product_image3);

    // Insert product into database
    $insert_products = "
        INSERT INTO `products` 
        (product_title, product_description, product_keywords, category_id, brand_id, product_image1, product_image2, product_image3, product_price, date, status) 
        VALUES 
        ('$product_title', '$description', '$product_keywords', '$product_category', '$product_brand', '$product_image1', '$product_image2', '$product_image3', '$product_price', NOW(), '$product_status')
    ";

    $run_product = mysqli_query($con, $insert_products);

    if ($run_product) {
        echo "<script>alert('Product inserted successfully')</script>";
    } else {
        echo "<script>alert('Error inserting product')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Product - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Product</h1>
        <!-- Form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" 
                placeholder="Enter Product Title" autocomplete="off" required>
            </div>
            <!-- Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product Description</label>
                <input type="text" name="description" id="description" class="form-control" 
                placeholder="Enter Product Description" autocomplete="off" required>
            </div>
            <!-- Keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" 
                placeholder="Enter Product Keywords" autocomplete="off" required>
            </div>
            <!-- Categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_category" class="form-label">Category</label>
                <select name="product_category" id="product_category" class="form-select" required>
                    <option value="">Select a Category</option>
                    <?php
                    $get_cats = "SELECT * FROM `categories`";
                    $run_cats = mysqli_query($con, $get_cats);
                    while ($row_cats = mysqli_fetch_assoc($run_cats)) {
                        echo "<option value='{$row_cats['category_id']}'>{$row_cats['category_title']}</option>";
                    }
                    ?>
                </select>
            </div>
            <!-- Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_brand" class="form-label">Brand</label>
                <select name="product_brand" id="product_brand" class="form-select" required>
                    <option value="">Select a Brand</option>
                    <?php
                    $get_brands = "SELECT * FROM `brands`";
                    $run_brands = mysqli_query($con, $get_brands);
                    while ($row_brands = mysqli_fetch_assoc($run_brands)) {
                        echo "<option value='{$row_brands['brand_id']}'>{$row_brands['brand_title']}</option>";
                    }
                    ?>
                </select>
            </div>
            <!-- Images -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product Image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required>
            </div>
            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" 
                placeholder="Enter Product Price" autocomplete="off" required>
            </div>
            <!-- Submit -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" value="Insert Product" class="btn btn-info mb-3 px-3">
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
