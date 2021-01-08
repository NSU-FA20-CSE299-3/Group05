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
                                    <li class="active">
                                          <a href="index.php">Home</a>
                                          
                                    </li>
                                    <li>
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
      <div class ="container" id="slider">
            <div class="col-md-12">
                  <div class="carousel slide" id="myCarousel" data-ride="carousel">    <!-----carousel slider stert------>
                           
                           <ol class="carousel-indicators">   

                              <li data-target="myCarousel" data-slide-to="0" class="action"></li>
                               <li data-target="myCarousel" data-slide-to="1"></li>
                               <li data-target="myCarousel" data-slide-to="2"></li>
                                <li data-target="myCarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                              <div class="item active">
                                    <img src="admin_area/slider_images/sl1.png">
                                    
                              </div>
                               <div class="item">
                                    <img src="admin_area/slider_images/sl2.jpg">
                                    
                              </div>
                               <div class="item">
                                    <img src="admin_area/slider_images/sl3.jpg">
                                    
                              </div>
                              <div class="item">
                                    <img src="admin_area/slider_images/sl4.jpg">
                                    
                              </div>
                              
                        </div>
                        
                        <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                              <span class="sr-only">Previous</span>
                        </a>
                        <a href="#myCarousel" class="right carousel-control" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                              <span class="sr-only">Next</span>
                        </a>

                        
                  </div>
                  
            </div>
            
      </div>
                                          
                                   
       <div id="advantage">
            <div class="container"> <!---------container start------>
                  <div class="same-height-row">
                        <div class="col-sm-4">
                              <div class="box same-height">
                                    <div  class="icon">
                                          <i class="fa fa-heart"></i>
                                                
                                          
                                          
                                    </div>
                                    <h3><a href="#">BEST PRICES</a></h3>
                                    <p>You can check on all others sites about the prices and than compare with us.</p>
                                    
                              </div>
                              
                        </div>
                        <div class="col-sm-4">
                              <div class="box same-height">
                                    <div  class="icon">
                                          <i class="fa fa-heart"></i>
                                                
                                          
                                          
                                    </div>
                                    <h3><a href="#">100% SATISFACTION GUARANTED FROM US</a></h3>
                                    <p>Free returns on everything for 3 months.</p>
                                    
                              </div>
                              
                        </div>
                        <div class="col-sm-4">
                              <div class="box same-height">
                                    <div  class="icon">
                                          <i class="fa fa-heart"></i>
                                                
                                          
                                          
                                    </div>
                                    <h3><a href="#">CUSTOMERS ARE OUR FIRST PRIORITY</a></h3>
                                    <p>We are known to provide our best possible service.</p>
                                    
                              </div>
                              
                        </div>
                        
                  </div>
                  

            </div> <!-------container end------->
            
      </div>

      <div id="hot">
            <div class="box">
                  <div class="container">
                        <div class="col-md-12">
                              <h2>Latest of the week</h2>
                              
                        </div>
                        
                  </div>
                  
            </div>
            
      </div>

      <div id="content" class="container">
            <div class="row">
                  <div class="col-sm-4 col-sm-6 single">
                        <div class=""product>
                              <a href="details.php">
                                    <img src="admin_area/product_images/Oil01.jpg" class="img_responsive">
                              </a>
                              <div class="text">
                                    <h3><a href="details.php">Oil Painting</a></h3>
                                    <p class="price">BDT 500</p>
                                    <p class="buttons">
                                          <a href="details.php" class="btn btn-default">View Details</a>
                                          <a href="details.php" class="btn btn-primary">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                          </a>
                                          
                                    </p>
                                    
                              </div>
                              
                        </div>
                  </div>

                  <div class="col-sm-4 col-sm-6 single">
                        <div class=""product>
                              <a href="details.php">
                                    <img src="admin_area/product_images/water1.jpg" class="img_responsive">
                              </a>
                              <div class="text">
                                    <h3><a href="details.php">Water Color</a></h3>
                                    <p class="price">BDT 500</p>
                                    <p class="buttons">
                                          <a href="details.php" class="btn btn-default">View Details</a>
                                          <a href="details.php" class="btn btn-primary">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                          </a>
                                          
                                    </p>
                                    
                              </div>
                              
                        </div>
                  </div>
                  <div class="col-sm-4 col-sm-6 single">
                        <div class=""product>
                              <a href="details.php">
                                    <img src="admin_area/product_images/digital1.jpg" class="img_responsive">
                              </a>
                              <div class="text">
                                    <h3><a href="details.php">Digital Painting</a></h3>
                                    <p class="price">BDT 500</p>
                                    <p class="buttons">
                                          <a href="details.php" class="btn btn-default">View Details</a>
                                          <a href="details.php" class="btn btn-primary">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                          </a>
                                          
                                    </p>
                                    
                              </div>
                              
                        </div>
                  </div>
                  <div class="col-sm-4 col-sm-6 single">
                        <div class=""product>
                              <a href="details.php">
                                    <img src="admin_area/product_images/Craft1.jpg" class="img_responsive">
                              </a>
                              <div class="text">
                                    <h3><a href="details.php">Flower Basket</a></h3>
                                    <p class="price">BDT 500</p>
                                    <p class="buttons">
                                          <a href="details.php" class="btn btn-default">View Details</a>
                                          <a href="details.php" class="btn btn-primary">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                          </a>
                                          
                                    </p>
                                    
                              </div>
                              
                        </div>
                  </div>

                  <div class="col-sm-4 col-sm-6 single">
                        <div class=""product>
                              <a href="details.php">
                                    <img src="admin_area/product_images/Craft1.jpg" class="img_responsive">
                              </a>
                              <div class="text">
                                    <h3><a href="details.php">Flower Basket</a></h3>
                                    <p class="price">BDT 500</p>
                                    <p class="buttons">
                                          <a href="details.php" class="btn btn-default">View Details</a>
                                          <a href="details.php" class="btn btn-primary">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                          </a>
                                          
                                    </p>
                                    
                              </div>
                              
                        </div>
                  </div>

                  <div class="col-sm-4 col-sm-6 single">
                        <div class=""product>
                              <a href="details.php">
                                    <img src="admin_area/product_images/Craft1.jpg" class="img_responsive">
                              </a>
                              <div class="text">
                                    <h3><a href="details.php">Flower Basket</a></h3>
                                    <p class="price">BDT 500</p>
                                    <p class="buttons">
                                          <a href="details.php" class="btn btn-default">View Details</a>
                                          <a href="details.php" class="btn btn-primary">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                          </a>
                                          
                                    </p>
                                    
                              </div>
                              
                        </div>
                  </div>

                  <div class="col-sm-4 col-sm-6 single">
                        <div class=""product>
                              <a href="details.php">
                                    <img src="admin_area/product_images/Craft1.jpg" class="img_responsive">
                              </a>
                              <div class="text">
                                    <h3><a href="details.php">Flower Basket</a></h3>
                                    <p class="price">BDT 500</p>
                                    <p class="buttons">
                                          <a href="details.php" class="btn btn-default">View Details</a>
                                          <a href="details.php" class="btn btn-primary">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                          </a>
                                          
                                    </p>
                                    
                              </div>
                              
                        </div>
                  </div>

                  <div class="col-sm-4 col-sm-6 single">
                        <div class=""product>
                              <a href="details.php">
                                    <img src="admin_area/product_images/Craft1.jpg" class="img_responsive">
                              </a>
                              <div class="text">
                                    <h3><a href="details.php">Flower Basket</a></h3>
                                    <p class="price">BDT 500</p>
                                    <p class="buttons">
                                          <a href="details.php" class="btn btn-default">View Details</a>
                                          <a href="details.php" class="btn btn-primary">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                          </a>
                                          
                                    </p> 
                                    
                              </div>
                              
                        </div>
                  </div>
                  
            </div>
            
      </div>
      
      <!----------------Footer start---------->

       <div id="footer">
      <div class="container">
      <div class="row">
            <div class="col-md-3 col-sm-6">
                  <h4>Pages</h4>
                  <ul>
                        <li><a href="cart.php">Shopping Cart</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="shop.php">Shop</a></li>
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
                        <strong>North South University</strong>
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
                        Tamplate By: <a href="mahbubhasan2033@gmail.com">mahbubhasan2033@gmail.com</a></p>
                  
            </div>
            
      </div>
</div>

            
      </div>
      </div>
      
</div>
</div>


     


      <!---------------Footer End------------->
      

      
      
      
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
             








</body>
</html>
      