<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload and Search</title>
</head>
<body>
    <h2>Upload Image</h2>
    <form action="" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image" id="image"><br><br>
        <input type="submit" value="Upload Image" name="submit">
        <input type="submit" value="Check Image" name="check">
    </form>

    <?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mystore";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // IMAGE UPLOAD FUNCTIONALITY
    if (isset($_POST['submit']) && isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $target_dir = "C:/xampp/htdocs/EZbuy_Ecommerce/admin_area/product_images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is an actual image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "File is not an image.<br>";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.<br>";
            $uploadOk = 0;
        }

        // Check file size (limit: 500KB)
        if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.<br>";
            $uploadOk = 0;
        }

        // Allow only JPG, JPEG, PNG & GIF formats
        if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
            $uploadOk = 0;
        }

        // Upload file if validation passes
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.<br>";
            } else {
                echo "Sorry, there was an error uploading your file.<br>";
            }
        } else {
            echo "Sorry, your file was not uploaded.<br>";
        }
    }

    // IMAGE SEARCH FUNCTIONALITY
    if (isset($_POST['check']) && isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $temp_image = "temp_image.png"; // Save temporarily for comparison
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $temp_image)) {
            // Call Python script for similarity check
            $output = shell_exec("python compare_images.py $temp_image 2>&1");

            echo "<h3>Similarity Results:</h3>";
            echo "<table border='1'>";
            echo "<tr><th>Product ID</th><th>Product Title</th><th>Image</th><th>Similarity Score</th></tr>";

            // Process the output from Python script
            $lines = explode("\n", trim($output));
            foreach ($lines as $line) {
                $data = explode(",", $line);
                if (count($data) == 4) {
                    list($product_id, $product_title, $image_name, $score) = $data;
                    echo "<tr><td>{$product_id}</td><td>{$product_title}</td><td><img src='admin_area/product_images/{$image_name}' width='100'></td><td>{$score}</td></tr>";
                }
            }
            echo "</table>";
        } else {
            echo "Error saving temporary image.<br>";
        }
    } elseif (isset($_POST['check'])) {
        echo "No image selected for checking.<br>";
    }

    // Close database connection
    mysqli_close($conn);
    ?>
</body>
</html>
