<!--<?php /**


      include_once "include/partner.php";
      include_once ('include/session.php');
      include_once ('include/function.php'); 
      
      $msg = '';
      if(isset($_POST['OrganisationSubmit'])){
        $partner = Partner::instantiate($_POST);
        if($partner){

            $partner->attach_file($_FILES['passport']);
          if($partner->save_with_file()){
            $msg = "<div class='alert alert-success alert-dismissable'>
                <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h4 class='text-center'><strong>Thank You for Partnering with Us.</strong></h4>
                <p class='text-center'>You are almost there, go to your inbox and confirm the link sent to You.</p>
                </div>";
          }else{
            $msg = "<div class='alert alert-danger alert-dismissable'>
                <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h4 class='text-center'><strong>Registration Failed!</strong></h4>
                <p class='text-center'>Something went wrong, check your inputs and try again.</p>
                </div>";
          }
        }else{
          $msg = 'Failed to create Partner .';
        }
      } */




?>--> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>get ipainter</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/gaia.css" rel="stylesheet"/>
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="index.php" class="navbar-brand active" style="font-size: 1em; font-family: 'Lobster', cursive;" id="ipaint">
                    Ajah Grains
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li>
                        <a href="aboutus.php" id="menu" >About Us</a>
                    </li>
                    
                    <li>
                        <a href="contac.html" id="menu" >Contact Us</a>
                    </li>

                   <li class="dropdown">
                        <a href="get.php" class="dropdown-toggle" data-toggle="dropdown" id="menu">
                         Customer Services
                        </a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="newsletter.php"> Get Updates</a>
                            </li>
                            <li>
                                <a href="get.php">Place Order</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>


    <div class="section section-header">
        <div class="parallax filter filter-color-white">
            <div class="image"
                style="background-image: url('assets/img/bowl.jpg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <p style="margin-top: 4 0px;"></p>
                        <h1 class="title-modern">YOU WILL PLACE YOUR ORDER HERE</h1>
                        
                        <div class="separator line-separator">♦</div>
                    </div>

                        
                </div>

            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row"   >
                <div class="title-area">
                    <h2>We are always onground</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">we will contact you as soon as we get your Order</p>
                </div>
        </div>
    </div>

    <div class="section section-our-team-freebie">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('assets/img/maze.jpg')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">Please fill the form below so we can serve you better:</h2>
                </div>
                <div class="col-md-offset-2 col-md-8 col-sm-4 col-md-offset-2" style="text-align: center;">
                    <div class="separator line-separator">♦</div>
                    <form action="get_involved.php" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <h4>First Name:</h4>
                            <input type="text" class="form-control" name="first_name" required="">
                        </div>

                        <div class="form-group">
                            <h4>Last Name:</h4>
                            <input type="text" class="form-control" name="last_name" required="">
                        </div>

                        <div class="form-group">
                            <h4>phone number:</h4>
                            <input type="text" class="form-control" name="number" required="">
                        </div>



                        <div class="form-group">
                            <h4>Email *(optional)</h4>
                            <input type="email" class="form-control" name="email">
                        </div>
                        
                        <div class="form-group">
                            <h4>Location</h4>
                            <input type="text" class="form-control" name="location" required="">
                        </div>

                         <div class="form-group">
                            <h4>State Of residence</h4>
                            <input type="text" class="form-control" name="State" required="">
                        </div>

                         <div class="form-group">
                            <h4>product name</h4>
                            <input type="text" class="form-control" name="product" required="">
                        </div>

                       
                           
                    
                        <!-- make reason drop down -->
                         <div class="form-group">
                            <h4>Tell Us More About Yourself:</h4>
                            <!-- <input type="text" class="form-control" name="reason"> -->
                            <textarea class="form-control" name="aboutme" rows="5" required="" ></textarea>
                        </div>

                       

                        <div class='col'>
                            <button type='submit' name='OrganisationSubmit' class ='btn button-get-started'>Submit Form</button>
                        </div>

                    </form>
                </div>
                </div>
            </div>
        </div>

    <footer class="footer footer-big footer-color-black" data-color="black">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="info">
                        <h5 class="title">Navigate</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Home</a></li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="get.php">customer Service</a>
                                </li>
                               
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-5">
                    <div class="info">
                        <h5 class="title">Follow us on</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-reddit btn-simple">
                                        <i class="fa fa-google-plus-square"></i> Google+
                                    </a>
                                    
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-twitter btn-simple">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                    
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                        <i class="fa fa-facebook-square"></i> Facebook
                                    </a>
                                    
                                </li>
                                <li>
                                 <a href="#" class="btn btn-social btn-dribbble btn-simple">
                                        <i class="fa fa-instagram"></i> Instagram
                                 </a>   
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                 © <script> document.write(new Date().getFullYear()) </script> Slash-hack-2.0 Team .
            </div>
        </div>
    </footer>

</body>

<!--   core js files    -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>

</html>
