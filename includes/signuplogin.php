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
    // Collect form data
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);
    $address = mysqli_real_escape_string($con, $_POST['user_address']);
    $mobile = mysqli_real_escape_string($con, $_POST['user_mobile']);
    $user_ip = getUserIP();

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!');</script>";
        exit();
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check for duplicate username or email
        $check_query = "SELECT * FROM user_table WHERE username='$username' OR user_email='$email'";
        $result = mysqli_query($con, $check_query);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Username or Email already exists!');</script>";
            exit();
        } else {
            // Image Upload Handling
            $image_name = "";
            if (!empty($_FILES["user_image"]["name"])) {
                $image_name = $_FILES["user_image"]["name"];
                $image_tmp = $_FILES["user_image"]["tmp_name"];
                $image_folder = "includes/user_images/";

                if (!move_uploaded_file($image_tmp, $image_folder . $image_name)) {
                    echo "<script>alert('Failed to upload image!');</script>";
                    exit();
                }
            }

            // Insert user into database
            $insert_query = "INSERT INTO user_table (username, user_email, user_password, user_image, user_ip, user_address, user_mobile) 
                             VALUES ('$username', '$email', '$hashed_password', '$image_name', '$user_ip', '$address', '$mobile')";

            if (mysqli_query($con, $insert_query)) {
                echo "<script>alert('Registration Successful!');</script>";
            } else {
                echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
            }
        }
    }
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
                                        <label for="username">Username *</label>
                                        <input type="text" class="form-control" id="username" name="username" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="register-email">Email Address *</label>
                                        <input type="email" class="form-control" id="register-email" name="email" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="register-password">Password *</label>
                                        <input type="password" class="form-control" id="register-password" name="password" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm-password">Confirm Password *</label>
                                        <input type="password" class="form-control" id="confirm-password" name="confirm_password" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="user_address">Address *</label>
                                        <input type="text" class="form-control" id="user_address" name="user_address" required>
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
                                            <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
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
