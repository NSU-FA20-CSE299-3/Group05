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
                                          <a href="shop.php">Store</a>
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
            <div class="row" id="productmain">
                  <div class="col-sm-6">
                        <div id="mainimage">
                              <div id="mycarousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                          <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                                           <li data-target="#mycarousel" data-slide-to="1" class="active"></li>
                                            <li data-target="#mycarousel" data-slide-to="2" class="active"></li>
                                          
                                    </ol>
                                    <div class="carousel-inner"> <!--------------Carousel inner start----->
                                          <div class="item active">
                                                <center>
                                    <img src="admin_area/product_images/vangogh.jpg" class="img-responsive">
                                                </center>
                                                
                                          </div>
                                          <div class="item">
                                                <center>
                                    <img src="admin_area/product_images/vangogh.jpg" class="img-responsive">
                                                </center>
                                                
                                          </div>

                                          <div class="item">
                                                <center>
                                    <img src="admin_area/product_images/vangogh.jpg" class="img-responsive">
                                                </center>
                                                
                                          </div>

                                          

                                          
                                    </div> <!--------------Carousel inner close----->

                                    <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                                          <span class="glyphicon glyphicon-chevron-left">
                                                
                                          </span>
                                          <span class="sr-only">Previous</span>
                                    </a>
                                    <a href="#mycarousel" class="right carousel-control" data-slide="next">
                                          <span class="glyphicon glyphicon-chevron-left">
                                                
                                          </span>
                                          <span class="sr-only">Next</span>
                                    </a>

                                    
                              </div>
                              
                        </div>
                        
                  </div> <!------------------ col-sm-6 slider end------------------>
                  <div class="col-sm-6">
                        <div class="box">
                              <h1 class="text-center"> Almond Blossoms is from a group of several paintings made in 1888 and 1890 by Vincent van Gogh in Arles and Saint-Rémy, southern France of blossoming almond trees.</h1>
                              <form action="details.php" method="post" class="form-horizontal">
                                    <div class="form-group">
                                          <label class="col-md-5 control-label">Product Quantity</label>
                                          <div class="col-md-7">
                                                <select name="product_qty" class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                      
                                                </select>
                                                
                                          </div>
                                          
                                    </div>

                                    <div class="form-group">
                                          <label class="col-md-5 control-label">Choose A Size</label>
                                          <div class="col-md-7">
                                                <select name="product_size" class="form-control">
                                                      <option></option>
                                                      <option> 13.8 W x 15.7 H x 1.2 D</option>
                                                      <option>39.4 W x 31.5 H x 0.8 D</option>
                                                      
                                                      
                                                </select>
                                                
                                          </div>
                                          
                                    </div> 
                                    <p class="price">BDT 500</p>
                                    <p class="text-center-buttons">
                                          <button class="btn btn-primary" type="submit">
                                                <i class="fa fa-shopping-cart"></i>Add to cart
                                                
                                          </button>
                                    </p>

                                    
                              </form>
                              
                        </div>
                        <div class="col-xs-4">
                              <a href="#" class="thumb"></a>
                              <img src="admin_area/product_images/vangogh.jpg" class="img-responsive">
                              
                        </div>
                        <div class="col-xs-4">
                              <a href="#" class="thumb"></a>
                              <img src="admin_area/product_images/vangogh.jpg" class="img-responsive">
                              
                        </div>
                        <div class="col-xs-4">
                              <a href="#" class="thumb">
                              <img src="admin_area/product_images/vangogh.jpg" class="img-responsive">
                        </a>
                              
                        </div>


                           
                  </div>

                  
            </div>

            <div class="box" id="details">
                  <h4>Product Details</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>

                  <h4>Style</h4>
                  <ul>
                        

                       <li>Pop Art</li>
                       <li>Modern,Pop Art, Modern, Realism </li>
                       <li>Mediums:Acrylic</li>
                      <li>Materials:Canvas</li>
                       
                  </ul>
                  
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

