<?php

//including connect files
include('.\includes\connect.php');

//geting unique category
function getproducts(){
    //geting the product
global $con;
 //A condition isset or not
 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    
// SQL query to fetch products
$select_query = "SELECT * FROM `products` order by rand() limit 0,9";
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
                <a href="product.php?id=' . $product_id . '">
            <img src="./admin_area/product_images/' . $product_image1 . '" alt="' . $product_title . '" class="product-image">
        </a>

                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div><!-- End .product-action -->

                <div class="product-action">
                    <a href="add_to_cart.php?id=' . $product_id . '" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                    <a href="popup/quickView.php?id=' . $product_id . '" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                </div><!-- End .product-action -->
            </figure><!-- End .product-media -->

            <div class="product-body">
                <div class="product-cat">
                    <a href="category.php?id=' . $category_id . '">Category</a>
                </div><!-- End .product-cat -->
                <h3 class="product-title"><a href="product.php?id=' . $product_id . '">' . $product_title . '</a></h3><!-- End .product-title -->
                <div class="product-price">
                    <span class="new-price">$' . $product_price . '</span>';
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
                <a href="product.php?id=' . $product_id . '">
            <img src="./admin_area/product_images/' . $product_image1 . '" alt="' . $product_title . '" class="product-image">
        </a>

                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div><!-- End .product-action -->

                <div class="product-action">
                    <a href="add_to_cart.php?id=' . $product_id . '" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                    <a href="popup/quickView.php?id=' . $product_id . '" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                </div><!-- End .product-action -->
            </figure><!-- End .product-media -->

            <div class="product-body">
                <div class="product-cat">
                    <a href="category.php?id=' . $category_id . '">Category</a>
                </div><!-- End .product-cat -->
                <h3 class="product-title"><a href="product.php?id=' . $product_id . '">' . $product_title . '</a></h3><!-- End .product-title -->
                <div class="product-price">
                    <span class="new-price">$' . $product_price . '</span>';
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
                <a href="product.php?id=' . $product_id . '">
            <img src="./admin_area/product_images/' . $product_image1 . '" alt="' . $product_title . '" class="product-image">
        </a>

                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div><!-- End .product-action -->

                <div class="product-action">
                    <a href="add_to_cart.php?id=' . $product_id . '" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                    <a href="popup/quickView.php?id=' . $product_id . '" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                </div><!-- End .product-action -->
            </figure><!-- End .product-media -->

            <div class="product-body">
                <div class="product-cat">
                    <a href="category.php?id=' . $category_id . '">Category</a>
                </div><!-- End .product-cat -->
                <h3 class="product-title"><a href="product.php?id=' . $product_id . '">' . $product_title . '</a></h3><!-- End .product-title -->
                <div class="product-price">
                    <span class="new-price">$' . $product_price . '</span>';
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
?>