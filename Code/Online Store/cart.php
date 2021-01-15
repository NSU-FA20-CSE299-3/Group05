<?php
include("includes/db.php");
include("functions/functions.php");
$active='Cart';

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


      <div id="content">
            <div class="container"> <!-------------------------------Container start-------------->
                  <div class="col-md-12">
                        <ul class="breadcrumb">
                              <li><a href="home.php">Home</a></li>
                              <li>Items</li>
                              
                        </ul>
                        
                  </div>

                  <div class="col-md-9" id="cart">
                        <div class="box">
                              <form action="cart.php" method="post" enctype="multipart-form-data">
                                    <h1>Buying Items</h1>

                                    <?php

                                    $ip_add=getUserIP();
                                    $select_cart="select * from cart where ip_add='$ip_add'";
                                    $run_cart=mysqli_query($con, $select_cart);
                                    $count=mysqli_num_rows($run_cart);


                                    ?>



                                    <p class="text-muted">Currently you have<?php echo $count   ?> item(s) in your cart</p>
                                    <div class="table-responsive">
                                          <table class="table">
                                                <thead>
                                                      <tr>
                                                            <th colspan="2">Product</th>
                                                            <th>Quantity</th>
                                                            <th>Unit Price</th>
                                                            <th>Size</th>
                                                            <th colspan="1">Delete</th>
                                                            <th colspan="1">Sub Total</th>

                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                    <td><img src="admin_area/product_images/FallenAngel720x563.jpg"></td>
                                    <td>Fallen Angel is an Academic oil on canvas painting created by Alexandre Cabanel in 1847.</td>
                                    <td>1</td>
                                    <td>BDT 500</td>
                                    <td>39.4 W x 31.5 H x 0.8 D</td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td>BDT 500</td>
                                                      </tr>
                                                      <tr>
                                    <td><img src="admin_area/product_images/FallenAngel720x563.jpg"></td>
                                    <td>Fallen Angel is an Academic oil on canvas painting created by Alexandre Cabanel in 1847.</td>
                                    <td>1</td>
                                    <td>BDT 500</td>
                                    <td>39.4 W x 31.5 H x 0.8 D</td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td>BDT 500</td>
                                                      </tr>
                                                </tbody>
                                                <tfoot>
                                                      <tr>
                                                            <th colspan="5">Total</th>
                                                            <th colspan="2">BDT 500</th>
                                                      </tr>
                                                </tfoot>
                                          </table>
                                    </div>
                                    <div class="box-footer">
                                          <div class="pull-left">
                                                <a href="index.php" class="btn btn-default">
                                                      <i class="fa fa-chevron-left"></i>Continue Shopping
                                                </a>
                                                
                                          </div>
                                          <div class="pull-right">
                                                <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                                      <i class="fa fa-refresh">Update Cart</i>
                                                      
                                                </button>
                                                <a href="checkout.php" class="btn btn-primary">
                                                Proceed to checkout<i class="fa fa-chevron-right"></i>
                                          </a>
                                                
                                          </div>
                                          
                                    </div>
                                    
                              </form>
                              
                        </div>
                                        
                         <div id="row same-height-row">
                  <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                              <h3 class="text-center">Related Art Items</h3>
                              
                        </div>
                        
                  </div>
                  <div class="center-responsive col-md-3">
                        <div class="product same-height">
                              <a href="">
                                    <img src="admin_area/product_images/starrynight.png" class="img-responsive">
                              </a>
                              <div class="text">
                                    <h3><a href="details.php">Van Gogh</a></h3>
                                    <p class="price">BDT 500</p>
                                    
                              </div>
                        </div>
                  </div>
                  
            </div>
             <div class="center-responsive col-md-3">
                        <div class="product same-height">
                              <a href="">
                                    <img src="admin_area/product_images/Prisoners-Exercising1.jpg" class="img-responsive">
                              </a>
                              <div class="text">
                                    <h3><a href="details.php">Prisoners Exercising</a></h3>
                                    <p class="price">BDT 500</p>
                                    
                              </div>
                        </div>
                  </div>
                   <div class="center-responsive col-md-3">
                        <div class="product same-height">
                              <a href="">
                                    <img src="admin_area/product_images/nightcafe1.jpg" class="img-responsive">
                              </a>
                              <div class="text">
                                    <h3><a href="details.php">night cafe</a></h3>
                                    <p class="price">BDT 500</p>
                                    
                              </div>
                        </div>
                  </div>
                  
            </div>
            <div class="col-md-3"> <!-----------col-md-3 start-------------->
                        <div class="box" id="order-summary">
                              <div class="box-header">
                                    <h3>Order Summary</h3>
                                    
                              </div>
                              <p class="text-muted">
                              Shipping and additional costs are calculated based on the values you have entered
                        </p>
                        <div class="table-responsive">
                              <table class="table">
                                    <tbody>
                                          <tr>
                                                <td>Order Subtotal</td>
                                                <th>BDT 500</th>
                                                
                                          </tr>
                                          <tr>
                                                <td>Shipping and handling</td>
                                                <td>BDT 0</td>
                                          </tr>
                                          <tr>
                                                <td>Tax</td>
                                                <td>BDT 0</td>
                                                      
                                                
                                          </tr>
                                          <tr class="total">
                                                <td>Total</td>
                                                <th>BDT 500</th>
                                                
                                          </tr>
                                    </tbody>
                                    
                              </table>
                              
                        </div>
                              
                        </div>
                        
                  </div> 
                  </div> 

                  


            </div>

            
      
                    
           

          


                  <?php
                  include("includes/footer.php");
                  ?>

                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
             








</body>
</html>
      