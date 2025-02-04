<?php



//geting unique category
function getproducts(){
    //geting the product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch products
$select_query = "SELECT * FROM `products` order by rand() ";
$result_query = mysqli_query($con, $select_query);

while ($row = mysqli_fetch_assoc($result_query)) {
    // Extract data from the database
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $product_image1 = $row['product_image1'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    $product_price = $row['product_price']; // Add product price if available
    $product_old_price = $row['product_old_price'] ?? ""; // Optional field

    // Output the product card HTML
    echo '
    <div class="col-6 col-md-4 col-lg-3">
        <div class="product product-2">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="users_area/product.php?product_id=' . $product_id . '">
            <img src="./admin_area/product_images/' . $product_image1 . '" alt="' . $product_title . '" class="product-image">
        </a>

                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div><!-- End .product-action -->

                <div class="product-action">
                    <a href="index-4.php?add_to_cart=' . $product_id . '" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                    <a href="users_area/product.php?product_id=' . $product_id . '" class="btn-product icon-eye" title="view more"><span>view more</span></a>
                </div><!-- End .product-action -->
            </figure><!-- End .product-media -->

            <div class="product-body">
                <div class="product-cat">
                    <a href="category.php?id=' . $category_id . '">Category</a>
                </div><!-- End .product-cat -->
                <h3 class="product-title"><a href="users_area/product.php?product_id=' . $product_id . '">' . $product_title . '</a></h3><!-- End .product-title -->
                <div class="product-price">
                    <span class="new-price">Rs ' . $product_price . '</span>';
                    if (!empty($product_old_price)) {
                        echo '<span class="old-price">Was $' . $product_old_price . '</span>';
                    }
                echo '
                </div><!-- End .product-price -->
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">( 4 Reviews )</span>
                </div><!-- End .rating-container -->

                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                </div><!-- End .product-nav -->
            </div><!-- End .product-body -->
        </div><!-- End .product -->
    </div><!-- End .col-6 col-md-4 col-lg-3 -->
    ';
}
}
}
}




//geting all product category
function getallproducts(){
    //geting the product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch products
$select_query = "SELECT * FROM `products` order by rand()";
$result_query = mysqli_query($con, $select_query);

while ($row = mysqli_fetch_assoc($result_query)) {
    // Extract data from the database
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $product_image1 = $row['product_image1'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    $product_price = $row['product_price']; // Add product price if available
    $product_old_price = $row['product_old_price'] ?? ""; // Optional field

    // Output the product card HTML
    echo '
    <div class="col-6 col-md-4 col-lg-3">
        <div class="product product-2">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="users_area/product.php?product_id=' . $product_id . '">
            <img src="./admin_area/product_images/' . $product_image1 . '" alt="' . $product_title . '" class="product-image">
        </a>

                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div><!-- End .product-action -->

                <div class="product-action">
                    <a href="index-4.php?add_to_cart=' . $product_id . '" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                    <a href="users_area/product.php?product_id=' . $product_id . '" class="btn-product icon-eye" title="view more"><span>view more</span></a>
                </div><!-- End .product-action -->
            </figure><!-- End .product-media -->

            <div class="product-body">
                <div class="product-cat">
                    <a href="category.php?id=' . $category_id . '">Category</a>
                </div><!-- End .product-cat -->
                <h3 class="product-title"><a href="users_area/product.php?product_id=' . $product_id . '">' . $product_title . '</a></h3><!-- End .product-title -->
                <div class="product-price">
                    <span class="new-price">Rs ' . $product_price . '</span>';
                    if (!empty($product_old_price)) {
                        echo '<span class="old-price">Was $' . $product_old_price . '</span>';
                    }
                echo '
                </div><!-- End .product-price -->
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">( 4 Reviews )</span>
                </div><!-- End .rating-container -->

                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                </div><!-- End .product-nav -->
            </div><!-- End .product-body -->
        </div><!-- End .product -->
    </div><!-- End .col-6 col-md-4 col-lg-3 -->
    ';
}
}
}
}

//geting all product category
function getallcategoryproducts(){
    //geting the product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch products
$select_query = "SELECT * FROM `products` order by rand()";
$result_query = mysqli_query($con, $select_query);

while ($row = mysqli_fetch_assoc($result_query)) {
    // Extract data from the database
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $product_image1 = $row['product_image1'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    $product_price = $row['product_price']; // Add product price if available
    $product_old_price = $row['product_old_price'] ?? ""; // Optional field

    // Output the product card HTML
    echo '
    <div class="col-6 col-md-4 col-lg-3">
        <div class="product product-2">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="users_area/product.php?product_id=' . $product_id . '">
            <img src="./admin_area/product_images/' . $product_image1 . '" alt="' . $product_title . '" class="product-image">
        </a>

                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div><!-- End .product-action -->

                <div class="product-action">
                    <a href="category.php?add_to_cart=' . $product_id . '" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                    <a href="users_area/product.php?product_id=' . $product_id . '" class="btn-product icon-eye" title="view more"><span>view more</span></a>
                </div><!-- End .product-action -->
            </figure><!-- End .product-media -->

            <div class="product-body">
                <div class="product-cat">
                    <a href="category.php?id=' . $category_id . '">Category</a>
                </div><!-- End .product-cat -->
                <h3 class="product-title"><a href="users_area/product.php?product_id=' . $product_id . '">' . $product_title . '</a></h3><!-- End .product-title -->
                <div class="product-price">
                    <span class="new-price">Rs ' . $product_price . '</span>';
                    if (!empty($product_old_price)) {
                        echo '<span class="old-price">Was $' . $product_old_price . '</span>';
                    }
                echo '
                </div><!-- End .product-price -->
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">( 4 Reviews )</span>
                </div><!-- End .rating-container -->

                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                </div><!-- End .product-nav -->
            </div><!-- End .product-body -->
        </div><!-- End .product -->
    </div><!-- End .col-6 col-md-4 col-lg-3 -->
    ';
}
}
}
}

//geting search product category
function search_products() {
    global $con;

    if (isset($_GET['q'])) { // Remove `search_action` check if unnecessary
        $q = mysqli_real_escape_string($con, $_GET['q']);

        // SQL query to fetch products, case-insensitive search
        $select_query = "SELECT * FROM `products` WHERE LOWER(product_keywords) LIKE LOWER('%$q%')";
        $result_query = mysqli_query($con, $select_query);

        // Check if products exist
        if (mysqli_num_rows($result_query) == 0) {
            echo "<p>No products found for '<strong>" . htmlspecialchars($q) . "</strong>'.</p>";
            return;
        }

        while ($row = mysqli_fetch_assoc($result_query)) {
            // Extract product data
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_image1 = $row['product_image1'];
            $category_id = $row['category_id'];
            $product_price = $row['product_price'];
            $product_old_price = $row['product_old_price'] ?? "";

            // Output product card
            echo '
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="users_area/product.php?product_id=' . $product_id . '">
                            <img src="./admin_area/product_images/' . $product_image1 . '" alt="' . $product_title . '" class="product-image">
                        </a>
                        <div class="product-action">
                            <a href="category.php?add_to_cart=' . $product_id . '" class="btn-product btn-cart"><span>add to cart</span></a>
                            <a href="users_area/product.php?product_id=' . $product_id . '" class="btn-product icon-eye"><span>view more</span></a>
                        </div>
                    </figure>
                    <div class="product-body">
                        <div class="product-cat">
                            <a href="category.php?id=' . $category_id . '">Category</a>
                        </div>
                        <h3 class="product-title"><a href="users_area/product.php?product_id=' . $product_id . '">' . $product_title . '</a></h3>
                        <div class="product-price">
                            <span class="new-price">$' . $product_price . '</span>';
                            if (!empty($product_old_price)) {
                                echo '<span class="old-price">Was $' . $product_old_price . '</span>';
                            }
            echo '
                        </div>
                    </div>
                </div>
            </div>';
        }
    }
}



//brands displaying
function getbrands(){
    global $con;

    $select_brands="select* from `brands`";
    $result_brands=mysqli_query($con,$select_brands);  
    // $raw_data=mysqli_fetch_assoc($result_brands);
    // echo $raw_data['brand_title'];
    // echo $raw_data['brand_title'];
    while($raw_data=mysqli_fetch_assoc($result_brands)){
        $brand_title=$raw_data['brand_title'];
        $brand_id=$raw_data['brand_id'];
        echo "<li class='nav-item'>
        <a href='index-4.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
        </li>";
        }
}

//category displaying
function getcategory(){
    global $con;
   


    $select_categories="select* from `categories`";
    $result_categories=mysqli_query($con,$select_categories);  
    // $raw_data=mysqli_fetch_assoc($result_brands);
    // echo $raw_data['brand_title'];
    // echo $raw_data['brand_title'];
    while($raw_data=mysqli_fetch_assoc($result_categories)){
        $category_title=$raw_data['category_title'];
        $category_id=$raw_data['category_id'];
        echo "<li class='nav-item'>
        <a href='index-4.php?category=$category_id' class='nav-link text-light'>$category_title</a>
        </li>";
    }
}



//geting unique category
function get_unique_categories(){
    //geting the product
global $con;



 //A condition isset or not
 if(isset($_GET['category'])){
    $category_id=$_GET['category'];
    
// SQL query to fetch products
$select_query = "SELECT * FROM `products` where category_id=$category_id";
$result_query = mysqli_query($con, $select_query);

//no result message
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h2 class='text-danger'>no stock for this category</h2>";
}

while ($row = mysqli_fetch_assoc($result_query)) {
    // Extract data from the database
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $product_image1 = $row['product_image1'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    $product_price = $row['product_price']; // Add product price if available
    $product_old_price = $row['product_old_price'] ?? ""; // Optional field

    // Output the product card HTML
    echo '
    <div class="col-6 col-md-4 col-lg-3">
        <div class="product product-2">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="users_area/product.php?product_id=' . $product_id . '">
            <img src="./admin_area/product_images/' . $product_image1 . '" alt="' . $product_title . '" class="product-image">
        </a>

                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div><!-- End .product-action -->

                <div class="product-action">
                    <a href="index-4.php?add_to_cart=' . $product_id . '" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                    <a href="users_area/product.php?product_id=' . $product_id . '" class="btn-product icon-eye" title="view more"><span>view more</span></a>
                </div><!-- End .product-action -->
            </figure><!-- End .product-media -->

            <div class="product-body">
                <div class="product-cat">
                    <a href="category.php?id=' . $category_id . '">Category</a>
                </div><!-- End .product-cat -->
                <h3 class="product-title"><a href="users_area/product.php?product_id=' . $product_id . '">' . $product_title . '</a></h3><!-- End .product-title -->
                <div class="product-price">
                    <span class="new-price">Rs ' . $product_price . '</span>';
                    if (!empty($product_old_price)) {
                        echo '<span class="old-price">Was $' . $product_old_price . '</span>';
                    }
                echo '
                </div><!-- End .product-price -->
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">( 4 Reviews )</span>
                </div><!-- End .rating-container -->

                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                </div><!-- End .product-nav -->
            </div><!-- End .product-body -->
        </div><!-- End .product -->
    </div><!-- End .col-6 col-md-4 col-lg-3 -->
    ';
}
}
}


//geting unique category
function get_unique_brands(){
    //geting the product
global $con;



 //A condition isset or not
 if(isset($_GET['brand'])){
    $brand_id=$_GET['brand'];
// SQL query to fetch products
$select_query = "SELECT * FROM `products` where brand_id=$brand_id";
$result_query = mysqli_query($con, $select_query);
//no result message
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h2 class='text-danger'>no stock for this category</h2>";
}
while ($row = mysqli_fetch_assoc($result_query)) {
    // Extract data from the database
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $product_image1 = $row['product_image1'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    $product_price = $row['product_price']; // Add product price if available
    $product_old_price = $row['product_old_price'] ?? ""; // Optional field

    // Output the product card HTML
    echo '
    <div class="col-6 col-md-4 col-lg-3">
        <div class="product product-2">
            <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <a href="users_area/product.php?product_id=' . $product_id . '">
            <img src="./admin_area/product_images/' . $product_image1 . '" alt="' . $product_title . '" class="product-image">
        </a>

                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div><!-- End .product-action -->

                <div class="product-action">
                    <a href="add_to_cart?id=' . $product_id . '" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                    <a href="popup/quickView.php?id=' . $product_id . '" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                </div><!-- End .product-action -->
            </figure><!-- End .product-media -->

            <div class="product-body">
                <div class="product-cat">
                    <a href="category.php?id=' . $category_id . '">Category</a>
                </div><!-- End .product-cat -->
                <h3 class="product-title"><a href="users_area/product.php?product_id=' . $product_id . '">' . $product_title . '</a></h3><!-- End .product-title -->
                <div class="product-price">
                    <span class="new-price">Rs ' . $product_price . '</span>';
                    if (!empty($product_old_price)) {
                        echo '<span class="old-price">Was $' . $product_old_price . '</span>';
                    }
                echo '
                </div><!-- End .product-price -->
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">( 4 Reviews )</span>
                </div><!-- End .rating-container -->

                <div class="product-nav product-nav-dots">
                    <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                    <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                </div><!-- End .product-nav -->
            </div><!-- End .product-body -->
        </div><!-- End .product -->
    </div><!-- End .col-6 col-md-4 col-lg-3 -->
    ';
}
}
}
// get ip adress function

function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}



// // Example usage
// $user_ip = getUserIP();
// echo "User IP Address: " . $user_ip;

//cart function
function cart(){
    
    if(isset($_GET['add_to_cart'])) {
        
    global $con;
    $get_ip_add = getUserIP();
        $get_product_id = $_GET['add_to_cart'];
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add' AND product_id='$get_product_id'";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        
        if($num_of_rows > 0){
            echo "<script>alert('This item is already present inside cart')</script>";
            echo "<script>window.open('index-4.php','_self')</script>";
        }
        else{
            $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES ('$get_product_id', '$get_ip_add', 1)";
            $result_query = mysqli_query($con, $insert_query);
            echo "<script>alert('This item inserted in cart')</script>";
            echo "<script>window.open('index-4.php','_self')</script>";
        }
    }
}

function cart_item(){
    global $con;
    $get_ip_add = getUserIP();
    
    // Correct SQL query with a space after 'ip_address'
    $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'";
    $result_query = mysqli_query($con, $select_query);
    $count_cart_items = mysqli_num_rows($result_query);
    
    // Output the number of cart items
    echo $count_cart_items;
} 

function total_cart_price(){
    global $con;
    $get_ip_add = getUserIP();  // Get the user's IP address
    $total_price = 0;

    // Query to get all items in the cart for the current user
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
    $result = mysqli_query($con, $cart_query);

    // Loop through each item in the cart
    while ($row = mysqli_fetch_array($result)) {
        $product_id = $row['product_id'];
        $quantity = $row['quantity'];  // Get the quantity from the cart details

        // Query to get product details
        $select_products = "SELECT * FROM `products` WHERE product_id='$product_id'";
        $result_products = mysqli_query($con, $select_products);

        // Loop through the product details to get the price
        while ($row_product_price = mysqli_fetch_array($result_products)) {
            $product_price = $row_product_price['product_price'];  // Correct field for product price

            // Multiply price by quantity and add to total
            $total_price += ($product_price * $quantity);  
        }
    }

    // Output the total price
    echo "$" . number_format($total_price, 2);  // Format the price with 2 decimal places
}




?>