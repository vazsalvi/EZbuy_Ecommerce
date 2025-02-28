<?php
function get_recommended_products() {
    global $con;
    $user_id = $_SESSION['user_id'];

    // Fetch recommended products for the user
    $query = "SELECT p.product_id, p.product_title, p.product_description, p.product_keywords, p.product_image1, p.category_id, p.brand_id, p.product_price FROM recommendations r
              JOIN products p ON r.product_id = p.product_id
              WHERE r.user_id = '$user_id' ORDER BY RAND()";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_keywords = $row['product_keywords'];
        $product_image1 = $row['product_image1'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        $product_price = $row['product_price'];

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
                    </div>
                    <div class="product-action">
                        <a href="index-4.php?add_to_cart=' . $product_id . '" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        <a href="users_area\product.php?product_id=' . $product_id . '" class="btn-product icon-eye" title="view more"><span>view more</span></a>
                    </div>
                </figure>
                <div class="product-body">
                    <div class="product-cat">
                        <a href="category.php?id=' . $category_id . '">Category</a>
                    </div>
                    <h3 class="product-title"><a href="users_area/product.php?product_id=' . $product_id . '">' . $product_title . '</a></h3>
                    <div class="product-price">
                        <span class="new-price">Rs ' . $product_price . '</span>
                    </div>
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 40%;"></div>
                        </div>
                        <span class="ratings-text">( 4 Reviews )</span>
                    </div>
                    <div class="product-nav product-nav-dots">
                        <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                        <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                        <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                        <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                    </div>
                </div>
            </div>
        </div>';
    }
}


function get_electronic_products(){
    //geting the product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch products
$select_query = "SELECT * FROM `products` WHERE website_id = '1' order by rand() ";
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



//geting unique category
function get_shoe_products(){
    //geting the shoe product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch shoe products
$select_query = "SELECT * FROM products WHERE website_id = 2 ORDER BY RAND()";

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

function get_furniture_products(){
    //geting the shoe product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch shoe products
$select_query = "SELECT * FROM products WHERE website_id = 3 ORDER BY RAND()";

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

function get_fashion_products(){
    //geting the shoe product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch shoe products
$select_query = "SELECT * FROM products WHERE website_id = 4 ORDER BY RAND()";

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

function get_game_products(){
    //geting the shoe product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch shoe products
$select_query = "SELECT * FROM products WHERE website_id = 5 ORDER BY RAND()";

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

function get_book_products(){
    //geting the shoe product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch shoe products
$select_query = "SELECT * FROM products WHERE website_id = 6 ORDER BY RAND()";

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

function get_extreme_sport_products(){
    //geting the shoe product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch shoe products
$select_query = "SELECT * FROM products WHERE website_id = 8 ORDER BY RAND()";

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

function get_sport_products(){
    //geting the shoe product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch shoe products
$select_query = "SELECT * FROM products WHERE website_id = 7 ORDER BY RAND()";

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

function get_women_shoe_products(){
    //geting the shoe product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch shoe products
$select_query = "SELECT * FROM products WHERE website_id = 2 AND product_keywords LIKE '%Women%' ORDER BY RAND()";


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

function get_men_shoe_products(){
    //geting the shoe product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch shoe products
$select_query = "SELECT * FROM products WHERE website_id = 2 AND product_keywords LIKE '%Men%' ORDER BY RAND()";



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

function get_cricket_sport_products(){
    //geting the shoe product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch shoe products
$select_query = "SELECT * FROM products 
                 WHERE website_id = 7 
                 AND (product_keywords LIKE '%Cricket%' 
                      OR product_keywords LIKE '%Bat%' 
                      OR product_keywords LIKE '%Sports%') 
                 ORDER BY RAND()";

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

function get_football_sport_products(){
    //geting the shoe product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch shoe products
$select_query = "SELECT * FROM products 
                 WHERE website_id = 7 
                 AND (product_keywords LIKE '%Football%' 
                      OR product_keywords LIKE '%Bat%' 
                      OR product_keywords LIKE '%Sports%') 
                 ORDER BY RAND()";

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

function get_electronic_brands(){
    global $con;

    $select_brands="select* from `brands` WHERE website_id = 1 ";
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

function get_electronic_category(){
    global $con;
   


    $select_categories="select* from `categories` WHERE website_id = 1";
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






?>