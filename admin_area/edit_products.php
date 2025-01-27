<?php
// Assuming you have connected to your database and stored the connection in $con

if (isset($_GET['edit_products'])) {
    $product_id = $_GET['edit_products'];

    // Fetch product details from the database
    $product_query = "SELECT * FROM products WHERE product_id = $product_id";
    $product_result = mysqli_query($con, $product_query);
    $product = mysqli_fetch_assoc($product_result);

    // Fetch categories from the database
    $categories_query = "SELECT category_id, category_title FROM categories";
    $categories_result = mysqli_query($con, $categories_query);

    // Fetch brands from the database
    $brands_query = "SELECT brand_id, brand_title FROM brands";
    $brands_result = mysqli_query($con, $brands_query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .form-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .form-container h1 {
            margin-bottom: 20px;
        }
        .form-group img {
            margin-top: 10px;
            max-width: 100px;
            height: auto;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="my-4">Edit Product</h1>
            <?php if (isset($product)) { ?>
                <form method="post" action="update_product.php" enctype="multipart/form-data">
                    <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                    <input type="hidden" name="existing_image1" value="<?php echo $product['product_image1']; ?>">
                    <input type="hidden" name="existing_image2" value="<?php echo $product['product_image2']; ?>">
                    <input type="hidden" name="existing_image3" value="<?php echo $product['product_image3']; ?>">
                    <div class="form-group">
                        <label for="productTitle">Product Title</label>
                        <input type="text" class="form-control" id="productTitle" name="product_title" value="<?php echo $product['product_title']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="productDescription">Product Description</label>
                        <textarea class="form-control" id="productDescription" name="product_description" rows="3" required><?php echo $product['product_description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="productKeywords">Product Keywords</label>
                        <input type="text" class="form-control" id="productKeywords" name="product_keywords" value="<?php echo $product['product_keywords']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="categoryTitle">Category</label>
                        <select class="form-control" id="categoryTitle" name="category_id" required>
                            <?php while ($category = mysqli_fetch_assoc($categories_result)) { ?>
                                <option value="<?php echo $category['category_id']; ?>" <?php echo $product['category_id'] == $category['category_id'] ? 'selected' : ''; ?>>
                                    <?php echo $category['category_title']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brandTitle">Brand</label>
                        <select class="form-control" id="brandTitle" name="brand_id" required>
                            <?php while ($brand = mysqli_fetch_assoc($brands_result)) { ?>
                                <option value="<?php echo $brand['brand_id']; ?>" <?php echo $product['brand_id'] == $brand['brand_id'] ? 'selected' : ''; ?>>
                                    <?php echo $brand['brand_title']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="productPrice">Price</label>
                        <input type="number" class="form-control" id="productPrice" name="product_price" value="<?php echo $product['product_price']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="productImage1">Product Image 1</label>
                        <input type="file" class="form-control-file" id="productImage1" name="product_image1">
                        <img src="/EZbuy_Ecommerce/admin_area/product_images/<?php echo $product['product_image1']; ?>" alt="Product Image 1">
                    </div>
                    <div class="form-group">
                        <label for="productImage2">Product Image 2</label>
                        <input type="file" class="form-control-file" id="productImage2" name="product_image2">
                        <img src="/EZbuy_Ecommerce/admin_area/product_images/<?php echo $product['product_image2']; ?>" alt="Product Image 2">
                    </div>
                    <div class="form-group">
                        <label for="productImage3">Product Image 3</label>
                        <input type="file" class="form-control-file" id="productImage3" name="product_image3">
                        <img src="/EZbuy_Ecommerce/admin_area/product_images/<?php echo $product['product_image3']; ?>" alt="Product Image 3">
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            <?php } else { ?>
                <p>No product found with the specified ID.</p>
            <?php } ?>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
