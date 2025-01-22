<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
include("includes/connect.php");

// Sign-In Handling
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signin'])) {
    // Collect form data
    $username_or_email = mysqli_real_escape_string($con, $_POST['signin-email']);
    $password = mysqli_real_escape_string($con, $_POST['signin-password']);

    // Check if username or email exists in the database
    $query = "SELECT * FROM user_table WHERE username='$username_or_email' OR user_email='$username_or_email'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify password
        if (password_verify($password, $user['user_password'])) {
            // Successful login, start session and store session variables
            session_start();
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];  // Store username in session

            // Redirect to checkout.php
            echo "<script>window.location.href = 'checkout.php';</script>";
            exit();
        } else {
            echo "<script>alert('Incorrect Password!');</script>";
        }
    } else {
        echo "<script>alert('No account found with that username or email!');</script>";
    }
}

// Registration Handling
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $fields = [
        'username' => 'Username',
        'user_email' => 'Email Address',
        'user_password' => 'Password',
        'confirm_password' => 'Confirm Password',
        'user_full_name' => 'Full Name',
        'user_country_name' => 'Country',
        'user_street_name' => 'Street Address',
        'user_town_city' => 'City/Town',
        'user_state_country' => 'State',
        'user_post_zip' => 'Postal/ZIP Code'
    ];

    foreach ($fields as $field => $label) {
        if (empty($_POST[$field])) {
            echo "<script>alert('$label is required!');</script>";
            exit();
        }
    }

    $password = $_POST['user_password'];
    $confirm_password = $_POST['confirm_password'];
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!');</script>";
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $username = $_POST['username'];
    $email = $_POST['user_email'];
    $user_ip = getUserIP();
    $mobile = $_POST['user_mobile'];

    $check_query = "SELECT * FROM user_table WHERE username = ? OR user_email = ?";
    $stmt = mysqli_prepare($con, $check_query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        echo "<script>alert('Username or Email already exists!');</script>";
        exit();
    }
    mysqli_stmt_close($stmt);

    $image_name = "";
    if (!empty($_FILES["user_image"]["name"])) {
        $image_name = basename($_FILES["user_image"]["name"]);
        $image_tmp = $_FILES["user_image"]["tmp_name"];
        $image_folder = "includes/user_images/";
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
        $file_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_types)) {
            echo "<script>alert('Invalid image format! Only JPG, JPEG, PNG, and GIF are allowed.');</script>";
            exit();
        }

        if ($_FILES["user_image"]["size"] > 2 * 1024 * 1024) {
            echo "<script>alert('Image size exceeds 2MB!');</script>";
            exit();
        }

        $new_image_name = uniqid("user_") . "." . $file_ext;
        if (!move_uploaded_file($image_tmp, $image_folder . $new_image_name)) {
            echo "<script>alert('Failed to upload image!');</script>";
            exit();
        }
    }

    $insert_query = "INSERT INTO user_table (username, user_email, user_password, user_image, user_ip, user_mobile, user_full_name, user_country_name, user_street_name, user_town_city, user_state_country, user_post_zip) 
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($con, $insert_query);
    mysqli_stmt_bind_param($stmt, "ssssssssssss", $username, $email, $hashed_password, $new_image_name, $user_ip, $mobile, $_POST['user_full_name'], $_POST['user_country_name'], $_POST['user_street_name'], $_POST['user_town_city'], $_POST['user_state_country'], $_POST['user_post_zip']);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Registration Successful!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
    }

    mysqli_stmt_close($stmt);
}


?>


<!-- Sign In / Register Modal -->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>

                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab"
                                    aria-controls="signin" aria-selected="true">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                    aria-controls="register" aria-selected="false">Register</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="tab-content-5">
                           <!-- Sign In Tab -->
<div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
    <form action="" method="POST">
        <div class="form-group">
            <label for="signin-email">Username or Email Address *</label>
            <input type="text" class="form-control" id="signin-email" name="signin-email" required>
        </div>

        <div class="form-group">
            <label for="signin-password">Password *</label>
            <input type="password" class="form-control" id="signin-password" name="signin-password" required>
        </div>

        <div class="form-footer">
            <button type="submit" name="signin" class="btn btn-outline-primary-2">
                <span>LOG IN</span>
                <i class="icon-long-arrow-right"></i>
            </button>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="signin-remember">
                <label class="custom-control-label" for="signin-remember">Remember Me</label>
            </div>

            <a href="#" class="forgot-link">Forgot Your Password?</a>
        </div>
    </form>

    <div class="form-choice">
        <p class="text-center">or sign in with</p>
        <div class="row">
            <div class="col-sm-6">
                <a href="#" class="btn btn-login btn-g">
                    <i class="icon-google"></i> Login With Google
                </a>
            </div>
            <div class="col-sm-6">
                <a href="#" class="btn btn-login btn-f">
                    <i class="icon-facebook-f"></i> Login With Facebook
                </a>
            </div>
        </div>
    </div>
</div>


                            <!-- Register Tab -->
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="user_full_name">Full Name *</label>
        <input type="text" class="form-control" id="user_full_name" name="user_full_name" required>
    </div>

    <div class="form-group">
        <label for="username">Username *</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>

    <div class="form-group">
        <label for="register-email">Email Address *</label>
        <input type="email" class="form-control" id="register-email" name="user_email" required>
    </div>

    <div class="form-group">
        <label for="register-password">Password *</label>
        <input type="password" class="form-control" id="register-password" name="user_password" required>
    </div>

    <div class="form-group">
        <label for="confirm-password">Confirm Password *</label>
        <input type="password" class="form-control" id="confirm-password" name="confirm_password" required>
    </div>

    <div class="form-group">
        <label for="user_country_name">Country *</label>
        <input type="text" class="form-control" id="user_country_name" name="user_country_name" required>
    </div>

    <div class="form-group">
        <label for="user_street_name">Street Address *</label>
        <input type="text" class="form-control" id="user_street_name" name="user_street_name" required>
    </div>

    <div class="form-group">
        <label for="user_town_city">City/Town *</label>
        <input type="text" class="form-control" id="user_town_city" name="user_town_city" required>
    </div>

    <div class="form-group">
        <label for="user_state_country">State *</label>
        <input type="text" class="form-control" id="user_state_country" name="user_state_country" required>
    </div>

    <div class="form-group">
        <label for="user_post_zip">Postal/ZIP Code *</label>
        <input type="text" class="form-control" id="user_post_zip" name="user_post_zip" required>
    </div>

    <div class="form-group">
        <label for="contact">Mobile Number (Optional)</label>
        <input type="tel" class="form-control" id="contact" name="user_mobile">
    </div>

    <div class="form-group">
        <label for="user_image">Profile Picture</label>
        <input type="file" class="form-control" id="user_image" name="user_image" accept="image/*">
    </div>

    <input type="hidden" name="user_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">

    <div class="form-footer">
        <button type="submit" name="register" class="btn btn-outline-primary-2">
            <span>SIGN UP</span>
            <i class="icon-long-arrow-right"></i>
        </button>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="register-policy" required>
            <label class="custom-control-label" for="register-policy">
                I agree to the <a href="#">privacy policy</a> *
            </label>
        </div>
    </div>
</form>


                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i> Login With Google
                                            </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-f">
                                                <i class="icon-facebook-f"></i> Login With Facebook
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End Register Tab -->
                        </div> <!-- End Tab Content -->
                    </div> <!-- End Form Tab -->
                </div> <!-- End Form Box -->
            </div> <!-- End Modal Body -->
        </div> <!-- End Modal Content -->
    </div> <!-- End Modal Dialog -->
</div> <!-- End Modal -->
