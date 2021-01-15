<?php
include("includes/db.php");
include("functions/functions.php");
?>
<?php 

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_product['p_cat_id'];
    
    $pro_title = $row_product['product_title'];
    
    $pro_price = $row_product['product_price'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img1 = $row_product['product_img1'];
    
    $pro_img2 = $row_product['product_img2'];
    
    $pro_img3 = $row_product['product_img3'];
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
}

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
      <title>Online Art Store</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="styles/style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      </head>
<body>
      <div id="top">   <!---top bar start--->
      
      <div class="container">
            <div class="col-md-6 offer">
                  <a href="#" class="btn btn-success btn-sm">

                        Welcome Guest
                  </a>

                  <a href="#">Buying Items Total Price: BDT  100, Total Items 2</a>
                  
            </div>
            <div class="col-md-6">
                  <ul class="menu">
                        <li>
                              <a href="customer_registration.php"> Register</a>
                        </li>

                        <li>
                              <a href="checkout.php"> My Account</a>
                        </li>
                        
                        <li>
                              <a href="cart.php"> Go to cart</a>
                        </li>
                        <li>
                              <a href="login.php"> Login</a>
                        </li>
                  </ul>
                  
            </div>
            
            </div>
      </div>     <!-----top bar end---->
      <div class="navbar navbar-default" id="navbar">
            <div class="container">
                  <div class="navbar-header">
                        <a class="navbar-brand home" href="index.php">
                              <img src="images/logo.png" alt ="Arts & Crafts" class="hidden-xs">
                              <img src="images/small.png" alt="Arts & Crafts" class="visible-xs">
                              
                        </a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                              <span class="sr-only"> Toggle Navigation</span>
                              <i class="fa fa-align-justify"> </i>
                              
                        </button>
                        <button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
                              <span class="sr-only"></span>
                              <i class="fa fa-search"></i>
                              
                        </button>
                  </div><div class="navbar-collapse collapse" id="navigation">
                        <div class="padding-nav">
                              <ul class="nav navbar-nav navbar-left">
                                    <li>
                                          <a href="index.php">Home</a>
                                          
                                    </li>
                                    <li>
                                          <a href="shop.php">Store</a>
                                    </li>
                                    <li>
                                          <a href="checkout.php">My Account</a>
                                    </li>
                                    <li class="active">
                                          <a href="cart.php">Buying Items</a>
                                    </li>
                                    <li>
                                          <a href="about.php">About Us</a>
                                    </li>
                                    <li>
                                          <a href="services.php">Services</a>
                                    </li>
                                    <li>
                                          <a href="contactus.php"> Contact Us </a>
                                    </li>
                                    
                                    
                              </ul>
                              
                  

                 
                        </div> <!-------Pdding-nav start------>
                        <a href="cart.php" class="btn btn-primary navbar-btn right">
                            <i class="fa fa-shopping-cart"></i>
                            <samp>4 items In Cart</samp>
                      </a>
                      <div class="navbar-collapse collapse-right">
                            <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                              <span class="sr-only"> Toggle Search</span>
                              <i class="fa fa-search"></i>
                        </button>
                  
            </div>

             <div class="collapse clearfix" id="search">

                        <form class="navbar-form" method="get" action="result.php">
                              <div class="input-group">

                                    <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
                                    <span class="input-group-btn">
                                    <button type="submit" value="Search" name="search" class="btn btn-primary">
                                          <i class="fa fa-search"></i>
                                           </button>
                              </span>
                                    
                              </div>
                              
                        </form>
                            
                      </div>

                  </div>
                  
            </div>
             
      </div>




<div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Store
                   </li>
                   
                   <li>
                       <a href="store.php?product_categories=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                   </li>
                   <li><?php echo $p_cat_title;?></li>
                   
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                   <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                                   <li data-target="#myCarousel" data-slide-to="2"></li>
                               </ol><!-- carousel-indicators Finish -->
                               
                               <div class="carousel-inner">
                                   <div class="item active">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product 3-a"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product 3-b"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product 3-c"></center>
                                   </div>
                               </div>
                               
                               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- left carousel-control Finish -->
                               
                               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- right carousel-control Finish -->
                               
                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->
                   </div><!-- col-sm-6 Finish -->
                   
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div class="box"><!-- box Begin -->
                           <h1 class="text-center"> <?php echo $p_cat_id; ?> </h1>
                           <?php

                            addCart();

                           ?>
                           
                           <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                               <div class="form-group"><!-- form-group Begin -->
                                   <label for="" class="col-md-5 control-label">Products Quantity</label>
                                   
                                   <div class="col-md-7"><!-- col-md-7 Begin -->
                                          <select name="product_qty" id="" class="form-control"><!-- select Begin -->
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           </select><!-- select Finish -->
                                   
                                    </div><!-- col-md-7 Finish -->
                                   
                               </div>
                               
                               <div class="form-group"><!-- form-group Begin -->
                                   <label class="col-md-5 control-label">Product Size</label>
                                   
                                   <div class="col-md-7">
                                       <select name="product_size" class="form-control"><!-- form-control Begin -->
                                          
                                           <option>Select a Size</option>
                                           <option>Small</option>
                                           <option>Medium</option>
                                           <option>Large</option>
                                           
                                       </select>
                                       
                                   </div>
                               </div>
                               
                               <p class="price">$500<?php echo $pro_price; ?></p>
                               
                               <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>
                               
                           </form>
                           
                       </div>
                       
                       <div class="row" id="thumbs">
                           
                           <div class="col-xs-4">
                               <a data-target="#myCarousel" data-slide-to="0"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->
                           
                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="1"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 2" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->
                           
                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="2"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 4" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->
                           
                       </div><!-- row Finish -->
                       
                   </div><!-- col-sm-6 Finish -->
                   
                   
               
               
               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Products You Maybe Like</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->
                   
                   <?php 
                   
                    $get_products = "select * from products order by 1  LIMIT 0,3";
                   
                    $run_products = mysqli_query($con,$get_products);
                   
                   while($row_products=mysqli_fetch_array($run_products)){
                       
                       $product_id = $row_products['product_id'];
                       
                       $product_title = $row_products['product_title'];
                       
                       $product_img1 = $row_products['product_img1'];
                       
                       $product_price = $row_products['product_price'];
                       
                       echo "
                       
                        <div class='col-md-3 col-sm-6 center-responsive'>
                        
                            <div class='product same-height'>
                            
                                <a href='details.php?pro_id=$product_id'>
                                
                                    <img class='img-responsive' src='admin_area/product_images/$product_img1'>
                                
                                </a>
                                
                                <div class='text'>
                                
                                    <h3> <a href='details.php?pro_id=$product_id'> $product_title </a> </h3>
                                    
                                    <p class='price'> $ $product_price </p>
                                
                                </div>
                            
                            </div>
                        
                        </div>
                       
                       ";
                       
                   }
                   
                   ?>
                   
               </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html