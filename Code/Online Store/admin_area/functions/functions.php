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
	$get_p_cats=" select * from categories";

    $run_p_cats=mysqli_query($db,$get_p_cats);
    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
    	$p_cat_id=row_p_cats['cat_id'];
    	$p_cat_id=row_p_cats['cat_title'];
    	echo"<li><a href='store.php?p_cat=$cat_id'>$cat_title</a></li>";
    }

}

?>