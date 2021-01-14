<?php
include("includes/db.php");
include("functions/functions.php");

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
                                    <li class="active">
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
                              <li>Contact Us</li>
                              
                        </ul>
                        
                  </div>
                  <div class="col-md-3">
                        <?php
                        include("includes/sidebar.php");
                        ?>
                        
                  </div><!-------------------col-md-3 end------------>

                  <div class="col-md-9"><!-------------------col-md-9 start------------>
                        <div class="box"><!-------------------Box start------------>
                              <div class="box-header">
                                    <center>
                                          <h2>
                                                Contact Us
                                          </h2>
                                          <p class="text-muted">If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.</p>
                                    </center>
                                    
                              </div>
                              <form action="contactus.php" method="post">
                                    <div class="form-group">
                                          <label>Name</label>
                                          <input type="text" name="name" required="" class="form-control">
                                          
                                    </div>
                                    <div class="form-group">
                                          <label>Eamil</label>
                                          <input type="text" name="email" class="form-control" required="">
                                          
                                    </div>
                                    <div class="form-group">
                                          <label>Subject</label>
                                          <input type="text" name="submit" class="form-control" required="">
                                          
                                    </div>
                                    <div class="form-group">
                                          <label>
                                                Massage
                                          </label>
                                          <textarea class="form-control" name="massage"></textarea>
                                          
                                    </div>
                                    <div class="text-center">
                                          <button type="submit" name="submit" class="btn btn-primary">
                                          <i class="fa fa-user-md"></i>Send Massage
                                    </button>  
                                          
                                    </div>
                                    
                              </form>
                               <?php 
                       
                       if(isset($_POST['submit'])){
                           
                           /// Admin receives message with this ///
                           
                           $sender_name = $_POST['name'];
                           
                           $sender_email = $_POST['email'];
                           
                           $sender_subject = $_POST['subject'];
                           
                           $sender_message = $_POST['message'];
                           
                           $receiver_email = "mahbubhasan2033@gmail.com";
                           
                           mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                           
                           /// Auto reply to sender with this ///
                           
                           $email = $_POST['email'];
                           
                           $subject = "Welcome to my website";
                           
                           $msg = "Thanks for sending us message. ASAP we will reply your message";
                           
                           $from = "mahbubhasan2033@gmail.com";
                           
                           mail($email,$subject,$msg,$from);
                           
                           echo "<h2 align='center'> Your message has sent sucessfully </h2>";
                           
                       }
                       
                       ?>
                              
                        </div><!-------------------Box end------------>
                        
                  </div><!-------------------col-md-9 end------------>






            




             </div>
       </div>


            
      
                    
           

          


                  <?php
                  include("includes/footer.php");
                  ?>

                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
             








</body>
</html>
      