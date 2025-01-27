<?php
include('../includes/connect.php'); // Adjust the file path as needed

// Handle the form submission for editing categories
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_category_id'])) {
    $category_id = $_POST['edit_category_id'];
    $category_title = $_POST['edit_category_title'];

    // Update the category in the database
    $update_query = "UPDATE categories SET category_title = '$category_title' WHERE category_id = $category_id";
    if (mysqli_query($con, $update_query)) {
        echo "Category updated successfully!";
    } else {
        echo "Error updating category: " . mysqli_error($con);
    }
}

// Fetch categories from the database
$query = "SELECT * FROM categories";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Categories</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    <script>
        function enableEdit(categoryId) {
            var row = document.getElementById('category-' + categoryId);
            var title = row.querySelector('.category-title');
            var input = row.querySelector('.edit-title-input');
            var editButton = row.querySelector('.edit-btn');
            var saveButton = row.querySelector('.save-btn');

            title.style.display = 'none';
            input.style.display = 'inline-block';
            editButton.style.display = 'none';
            saveButton.style.display = 'inline-block';
        }

        function saveEdit(categoryId) {
            var row = document.getElementById('category-' + categoryId);
            var input = row.querySelector('.edit-title-input');
            var hiddenInput = row.querySelector('.hidden-edit-title-input');
            hiddenInput.value = input.value;
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="table-container">
            <h1 class="my-4">View Categories</h1>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Category ID</th>
                        <th>Category Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr id="category-' . $row['category_id'] . '">';
                            echo '<td>' . $row['category_id'] . '</td>';
                            echo '<td>
                                    <span class="category-title">' . $row['category_title'] . '</span>
                                    <input type="text" class="form-control edit-title-input" value="' . $row['category_title'] . '" style="display: none;">
                                  </td>';
                            echo '<td>
                                    <button class="btn btn-primary btn-sm edit-btn" onclick="enableEdit(' . $row['category_id'] . ')">
                                        <i class="fas fa-pen-to-square"></i> Edit
                                    </button>
                                    <form method="post" action="" style="display: inline;" onsubmit="saveEdit(' . $row['category_id'] . ')">
                                        <input type="hidden" name="edit_category_id" value="' . $row['category_id'] . '">
                                        <input type="hidden" class="hidden-edit-title-input" name="edit_category_title" value="' . $row['category_title'] . '">
                                        <button type="submit" class="btn btn-success btn-sm save-btn" style="display: none;">
                                            <i class="fas fa-save"></i> Save
                                        </button>
                                    </form>
                                    <a href="delete_category.php?id=' . $row['category_id'] . '" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                  </td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="3">No categories found.</td></tr>';
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
