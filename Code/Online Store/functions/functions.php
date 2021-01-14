<?php
$db=mysqli_connect("localhost","root","","online store");
function getPro(){
	global $db;
	$get_product="select * from products order by 1 DESC LIMIT 0,6";
	$run_products=mysqli_query($db, $get_product);
	While($row_product=mysqli_fetch_array($run_products)){
		$pro_id=$row_product['product_id'];
		$product_title=$row_product['product_title'];
		$pro_price=$row_product['product_price'];
		$pro_img1=$row_product['product_img1'];

		echo"<div class='col-md-4 col-sm-6'>
		<div class='product'>
		<a href='details.php?pro_id=$pro_id'>
		<img src='admin_area/product_images/$pro_img1' class='img-responsive'>

		</a>
		<div class='text'>
		<h3><a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
		<p class='price'> BDT $pro_price</p>
		<p class='buttons'>
		<a href='details.php?pro_id' class='btn btn-default'>View Details</a>
		<a href='details.php?pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add to cart</a>


		</p>

		</div>
		</div>



		</div>";
	}
}


/*----------------- Catagory---------------*/

function getPCats(){
	global $db;
	$get_cat=" select * from categories";

    $run_cat=mysqli_query($db,$get_cat);
    while($row_cat=mysqli_fetch_array($run_cat)){
    	$cat_id=$row_cat['cat_id'];
    	$cat_title=$row_cat['cat_title'];
    	echo"<li><a href='store.php?cat=$cat_id'>$cat_title</a></li>";
    }

}

/*--------------Artists-----------------*/
function getCat(){
	global $db;
	$get_artists=" select * from artists";

    $run_artists=mysqli_query($db,$get_artists);
    while($row_artists=mysqli_fetch_array($run_artists)){
    	$artists_id=$row_artists['Artists_id'];
    	$artists_name=$row_artists['Artists_name'];
    	echo"<li><a href='store.php?artists=$artists_id'>$artists_name</a></li>";
    }

}

/// begin getCats functions ///

function getCats(){
    
    global $db;
    
    $get_cats = "select * from categories";
    
    $run_cats = mysqli_query($db,$get_cats);
    
    while($row_cats=mysqli_fetch_array($run_cats)){
        
        $cat_id = $row_cats['cat_id'];
        
        $cat_title = $row_cats['cat_title'];
        
        echo "
        
            <li>
            
                <a href='shop.php?cat=$cat_id'> $cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish getCats functions ///

/// begin getpcatpro functions ///

function getpcatpro(){
    
    global $db;
    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        
        $get_cat ="select * from categories where cat_id='$cat_id'";
        
        $run_cat = mysqli_query($db,$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        
        $cat_desc = $row_cat['cat_desc'];
        
        $get_products ="select * from products where product_id='$cat_id'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
                
                    <h1> $cat_title</h1>
                    
                    <p> $cat_desc</p>
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $product_id = $row_products['product_id'];
        
            $product_title = $row_products['product_title'];

            $product_price = $row_products['product_price'];

            $product_img1 = $row_products['product_img1'];
            
            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
        
            <div class='product'>
            
                <a href='details.php?pro_id=$product_id'>  
                
                    <img class='img-responsive' src='admin_area/product_images/$product_img1'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?product_id=$product_id'>

                            $product_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                        $ $product_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?product_id=$product_id'>

                            View Details

                        </a>
                    
                        <a class='btn btn-primary' href='details.php?product_id=$product_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
            
            ";
            
        }
        
    }
    
}

/// finish getpcatpro functions ///

function getcatpro(){
    
    global $db;
    
    if(isset($_GET['artists'])){
        
        $Artists_id = $_GET['artists'];
        
        $get_artists ="select * from artists where Artists_id='$Artists_id'";
        
        $run_artists = mysqli_query($db,$get_artists);
        
        $row_artists = mysqli_fetch_array($run_artists);
        
        $Artists_name = $row_artists['Artists_name'];
        
        $Artists_desc = $row_artists['Artists_desc'];
        
        $get_products ="select * from products where product_id='$Artists_id'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
                
                    <h1> $Artists_name </h1>
                    
                    <p> $Artists_desc </p>
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $product_id = $row_products['product_id'];
        
            $product_title = $row_products['product_title'];

            $product_price = $row_products['product_price'];

            $product_img1 = $row_products['product_img1'];
            
            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
        
            <div class='product'>
            
                <a href='details.php?pro_id=$product_id'>
                
                    <img class='img-responsive' src='admin_area/product_images/$product_img1'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?product_id=$product_id'>

                            $product_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                        $ $product_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?product_id=$product_id'>

                            View Details

                        </a>
                    
                        <a class='btn btn-primary' href='details.php?product_id=$product_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
            
            ";
            
        }
        
    }
    
}

/// finish getpcatpro functions ///





?>
