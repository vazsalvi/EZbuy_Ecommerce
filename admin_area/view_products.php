<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .actions-column {
            width: 80px; /* Adjust the width as needed */
            text-align: center;
        }
        .actions-column .btn {
            padding: 0.25rem 0.5rem; /* Adjust button padding as needed */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">View Products</h1>
        <?php
        // Assuming you have connected to your database and stored the connection in $con
        // Fetch products along with their category and brand titles and total sold quantity
        $query = "SELECT p.product_id, p.product_title, c.category_title, b.brand_title, p.product_image1, p.product_price, p.status, 
                         COALESCE(SUM(op.quantity), 0) AS total_sold
                  FROM products p
                  JOIN categories c ON p.category_id = c.category_id
                  JOIN brands b ON p.brand_id = b.brand_id
                  LEFT JOIN orders_placed op ON p.product_id = op.product_id
                  GROUP BY p.product_id, p.product_title, c.category_title, b.brand_title, p.product_image1, p.product_price, p.status";
        $result = mysqli_query($con, $query);
        
        if ($result && mysqli_num_rows($result) > 0) {
            echo '<table class="table table-bordered">';
            echo '<thead class="thead-dark">';
            echo '<tr>';
            echo '<th>Product ID</th>';
            echo '<th>Title</th>';
            echo '<th>Category</th>';
            echo '<th>Brand</th>';
            echo '<th>Image</th>';
            echo '<th>Price</th>';
            echo '<th>Status</th>';
            echo '<th>Total Sold</th>';
            echo '<th class="actions-column">Edit</th>';
            echo '<th class="actions-column">Delete</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['product_id'] . '</td>';
                echo '<td>' . $row['product_title'] . '</td>';
                echo '<td>' . $row['category_title'] . '</td>';
                echo '<td>' . $row['brand_title'] . '</td>';
                echo '<td><img src="/EZbuy_Ecommerce/admin_area/product_images/' . $row['product_image1'] . '" alt="' . $row['product_title'] . '" width="50" height="50"></td>';
                echo '<td>' . $row['product_price'] . '</td>';
                echo '<td>' . $row['status'] . '</td>';
                echo '<td>' . $row['total_sold'] . '</td>';
                echo '<td class="actions-column">
                        <a href="index.php?edit_products=' . $row['product_id'] . '" class="btn btn-primary btn-sm">
                            <i class="fas fa-pen-to-square"></i>
                        </a>
                      </td>';
                echo '<td class="actions-column">
                        <a href="delete_product.php?id=' . $row['product_id'] . '" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i>
                        </a>
                      </td>';
                echo '</tr>';
            }
            
            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<p>No products found.</p>';
        }
        ?>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
