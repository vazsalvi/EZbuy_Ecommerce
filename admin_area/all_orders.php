<?php
include('../includes/connect.php'); // Adjust the file path as needed

// Handle the form submission for updating order status
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['order_id'])) {
    $order_id = $_POST['order_id'];
    $order_status = $_POST['order_status'];

    // Update the order status in the database
    $update_query = "UPDATE user_orders SET order_status = '$order_status' WHERE order_id = $order_id";
    if (mysqli_query($con, $update_query)) {
        echo "Order status updated successfully!";
    } else {
        echo "Error updating order status: " . mysqli_error($con);
    }
}

// Fetch orders from the database
$query = "SELECT * FROM user_orders";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Orders</title>
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
    </style>
</head>
<body>
    <div class="container">
        <div class="table-container">
            <h1 class="my-4">All Orders</h1>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>User ID</th>
                        <th>Amount Due</th>
                        <th>Invoice Number</th>
                        <th>Products Name</th>
                        <th>Order Status</th>
                        <th>Order Date</th>
                        <th>Payment Method</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr id="order-' . $row['order_id'] . '">';
                            echo '<td>' . $row['user_id'] . '</td>';
                            echo '<td>' . $row['amount_due'] . '</td>';
                            echo '<td>' . $row['invoice_number'] . '</td>';
                            echo '<td>' . $row['products_name'] . '</td>';
                            echo '<td>
                                    <form method="post" action="" style="display: inline;">
                                        <input type="hidden" name="order_id" value="' . $row['order_id'] . '">
                                        <select class="form-control" name="order_status" onchange="this.form.submit()">
                                            <option value="Pending"' . ($row['order_status'] == 'Pending' ? ' selected' : '') . '>Pending</option>
                                            <option value="Out for Delivery"' . ($row['order_status'] == 'Out for Delivery' ? ' selected' : '') . '>Out for Delivery</option>
                                            <option value="Delivered"' . ($row['order_status'] == 'Delivered' ? ' selected' : '') . '>Delivered</option>
                                            <option value="Failed"' . ($row['order_status'] == 'Failed' ? ' selected' : '') . '>Failed</option>
                                            <option value="Returned"' . ($row['order_status'] == 'Returned' ? ' selected' : '') . '>Returned</option>
                                            <option value="Cancelled"' . ($row['order_status'] == 'Cancelled' ? ' selected' : '') . '>Cancelled</option>
                                        </select>
                                    </form>
                                  </td>';
                            echo '<td>' . $row['order_date'] . '</td>';
                            echo '<td>' . $row['payment_method'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="8">No orders found.</td></tr>';
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
