<?php
include('../includes/connect.php'); // Adjust the file path as needed

// Handle form submission for editing brands
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_brand_id'])) {
    $brand_id = $_POST['edit_brand_id'];
    $brand_title = $_POST['edit_brand_title'];

    // Update the brand in the database
    $update_query = "UPDATE brands SET brand_title = '$brand_title' WHERE brand_id = $brand_id";
    if (mysqli_query($con, $update_query)) {
        echo "Brand updated successfully!";
    } else {
        echo "Error updating brand: " . mysqli_error($con);
    }
}

// Fetch brands from the database
$query = "SELECT * FROM brands";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Brands</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .table-container {
            margin-top: 20px;
        }
        .table-container h1 {
            margin-bottom: 20px;
        }
    </style>
    <script>
        function enableEdit(brandId) {
            var row = document.getElementById('brand-' + brandId);
            var title = row.querySelector('.brand-title');
            var input = row.querySelector('.edit-title-input');
            var editButton = row.querySelector('.edit-btn');
            var saveButton = row.querySelector('.save-btn');

            title.style.display = 'none';
            input.style.display = 'inline-block';
            editButton.style.display = 'none';
            saveButton.style.display = 'inline-block';
        }

        function saveEdit(brandId) {
            var row = document.getElementById('brand-' + brandId);
            var input = row.querySelector('.edit-title-input');
            var hiddenInput = row.querySelector('.hidden-edit-title-input');
            hiddenInput.value = input.value;
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="table-container">
            <h1 class="my-4">View Brands</h1>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Brand ID</th>
                        <th>Brand Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr id="brand-' . $row['brand_id'] . '">';
                            echo '<td>' . $row['brand_id'] . '</td>';
                            echo '<td>
                                    <span class="brand-title">' . $row['brand_title'] . '</span>
                                    <input type="text" class="form-control edit-title-input" value="' . $row['brand_title'] . '" style="display: none;">
                                  </td>';
                            echo '<td>
                                    <button class="btn btn-primary btn-sm edit-btn" onclick="enableEdit(' . $row['brand_id'] . ')">
                                        <i class="fas fa-pen-to-square"></i> Edit
                                    </button>
                                    <form method="post" action="" style="display: inline;" onsubmit="saveEdit(' . $row['brand_id'] . ')">
                                        <input type="hidden" name="edit_brand_id" value="' . $row['brand_id'] . '">
                                        <input type="hidden" class="hidden-edit-title-input" name="edit_brand_title" value="' . $row['brand_title'] . '">
                                        <button type="submit" class="btn btn-success btn-sm save-btn" style="display: none;">
                                            <i class="fas fa-save"></i> Save
                                        </button>
                                    </form>
                                    <a href="delete_brand.php?id=' . $row['brand_id'] . '" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                  </td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="3">No brands found.</td></tr>';
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
