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
                                    <li class="active">
                                          <a href="store.php">Store</a>
                                    </li>
                                    <li>
                                          <a href="checkout.php">My Account</a>
                                    </li>
                                    <li>
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
                              <li>Store</li>
                              
                        </ul>
                        
                  </div>
                  <div class="col-md-3">
                        <?php
                        include("includes/sidebar.php");
                        ?>
                        
                  </div>
                  <div class="col-md-9">
                        <div class="box">
                              <h1>Store</h1>
                              <p>this theme is created by Mahbub Hasan Prantik, who is a student of NSU</p>
                              
                        </div>
                        <div class="row">
                              
                        <div class="col-md-4 col-sm-6 center responsive">
                                    <div class="product">
                                          <a href="details.php">
                                          <img src="admin_area/product_images/vangogh.jpg" class="img-responsive">
                                          </a>
                                          <div class="text">
                                                <h3>
                                                      <a href="details.php">Almond Blossoms(1888)</a>
                                                </h3>
                                                <p class="price">BDT 500</p>
                                                <p class="buttons">
                                                      <a href="details.php" class="btn btn-default"> View Details</a>
                                                      <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                </p>
                                                
                                          </div>
                                    </div>
                                    
                              </div>

                              <div class="col-md-4 col-sm-6 center responsive">
                                    <div class="product">
                                          <a href="details.php">
                                          <img src="admin_area/product_images/vangogh2.jpg" class="img-responsive">
                                          </a>
                                          <div class="text">
                                                <h3>
                                                      <a href="details.php">The Yellow House(1888)</a>
                                                </h3>
                                                <p class="price">BDT 500</p>
                                                <p class="buttons">
                                                      <a href="details.php" class="btn btn-default"> View Details</a>
                                                      <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                </p>
                                                
                                          </div>
                                    </div>
                                    
                              </div>

                              <div class="col-md-4 col-sm-6 center responsive">
                                    <div class="product">
                                          <a href="details.php">
                                          <img src="admin_area/product_images/Zainul1.jpg" class="img-responsive">
                                          </a>
                                          <div class="text">
                                                <h3>
                                                      <a href="details.php">The Famine Sketches, 1943 </a>
                                                </h3>
                                                <p class="price">BDT 500</p>
                                                <p class="buttons">
                                                      <a href="details.php" class="btn btn-default"> View Details</a>
                                                      <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                </p>
                                                
                                          </div>
                                    </div>
                                    
                              </div>

                              <div class="col-md-4 col-sm-6 center responsive">
                                    <div class="product">
                                          <a href="details.php">
                                          <img src="admin_area/product_images/zainul2.jpg" class="img-responsive">
                                          </a>
                                          <div class="text">
                                                <h3>
                                                      <a href="details.php">Liberation War, 1971</a>
                                                </h3>
                                                <p class="price">BDT 500</p>
                                                <p class="buttons">
                                                      <a href="details.php" class="btn btn-default"> View Details</a>
                                                      <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                </p>
                                                
                                          </div>
                                    </div>
                                    
                              </div>

                              <div class="col-md-4 col-sm-6 center responsive">
                                    <div class="product">
                                          <a href="details.php">
                                          <img src="admin_area/product_images/Sultan1.jpg" class="img-responsive">
                                          </a>
                                          <div class="text">
                                                <h3>
                                                      <a href="details.php">Husking Rice</a>
                                                </h3>
                                                <p class="price">BDT 500</p>
                                                <p class="buttons">
                                                      <a href="details.php" class="btn btn-default"> View Details</a>
                                                      <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                </p>
                                                
                                          </div>
                                    </div>
                                    
                              </div>

                              <div class="col-md-4 col-sm-6 center responsive">
                                    <div class="product">
                                          <a href="details.php">
                                          <img src="admin_area/product_images/Craft.jpg" class="img-responsive">
                                          </a>
                                          <div class="text">
                                                <h3>
                                                      <a href="details.php">Van Gogh</a>
                                                </h3>
                                                <p class="price">BDT 500</p>
                                                <p class="buttons">
                                                      <a href="details.php" class="btn btn-default"> View Details</a>
                                                      <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                </p>
                                                
                                          </div>
                                    </div>
                                    
                              </div>

                        </div> <!------------- row end------------->
                        <center>
                              <ul class="pagination">
                                    <li><a href="store.php">First Page</a></li>
                                     <li><a href="store.php">2</a></li>
                                     <li><a href="store.php">3</a></li>
                                     <li><a href="store.php">4</a></li>
                                     <li><a href="store.php">5</a></li>
                                     <li><a href="store.php">Last Page</a></li>
                                     
                                     
                                     
                                    
                              </ul>
                        </center>

                  </div>
            </div>
      </div><!----------------------------Content end--------------------->



                  
             <!-----------------Container End---------------->
            
      



      <!-----------------------------Footer------------------->
      <div id="footer">
      <div class="container">
      <div class="row">
            <div class="col-md-3 col-sm-6">
                  <h4>Pages</h4>
                  <ul>
                        <li><a href="cart.php">Shopping Cart</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="store.php">Shop</a></li>
                        <li><a href="checkout.php">My Account</a></li>
                  </ul>
                  <hr>
                  <h4>User section</h4>

                  <ul>
                        <li><a href="checkout.php">Login</a></li>
                        <li><a href="customer_registration.php">Register</a></li>
                  </ul>
                      <hr class="hidden-md hidden-lg hidden-sm">
                      
            </div>
            <div class="col-md-3 col-sm-6">
                  <h4>Top Product Categories</h4>
                  <ul>
                        <li><a href="#">Bengali Arts & Crafts</a></li>
                        <li><a href="#">Ancient Europe</a></li>
                        <li><a href="#">Modern</a></li>
                        <li><a href="#">Post Modern</a></li>
                        <li><a href="#">Digital Arts</a></li>
                  </ul>
                  <hr class="hidden-md hidden-lg">
                  
            </div>
            <div class="col-md-3 col-sm-6">
                  <h4>Where to find us</h4>
                  <p>
                        <strong>North South University </strong>
                        <br>Bashundhara
                        <br> Dhaka
                        <br>Bangladesh
                        <br> mahbubhasam@gmail.com
                        <br> 0171******
                  </p>
                  <a href="contact.php">Go to contact us page</a>
                  <hr class="hidden-md hidden-lg">
            </div>
            <div class="col-md-3 col-sm-6">
                  <h4>Get the news</h4>
                  <p class="text-muted">
                        Subscribe here for getting news of Arts & Crafts
                        
                  </p>
                  <form action="" method="post">
                        <div class="input-group">
                              <input type="text" name="email" class="form-control">
                              <span class="input-group-btn">
                                    <input type="submit" class="btn btn-default" value="subscribe">
                                    
                              </span>
                              
                        </div>
                        
                  </form>
                  <hr>
                  <h4>Stay In Touch</h4>
                  <p class="social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                  </p>
                  
            </div>
            
      </div>
      </div>
      
</div>
<div id="copyright">
<div class="copyright"> <!---------- copyright section start------->

      <div class="container">
            <div class="col-md-6">
                  <p class="pull-left">
                        &copy; 2021 Mahbub Hasan Prantik
                        </p>
                  
            </div>
            <div class="col-md-6">
                  <p class="pull-right">
                        Tamplate By: <a href="mahbubhasan2033@gmail0.com">"mahbubhasan2033@gmail.com"</a></p>
                  
            </div>
            
      </div>
</div>
</div>




 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
             








</body>
</html>






      