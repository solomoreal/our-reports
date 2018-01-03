

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ipaint home</title>
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
                         Customer services
                        </a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="newsletter.php">get update</a>
                            </li>
                            <li>
                                <a href="get.php">order products</a>
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
                        <h1 class="title-modern">About AJAH Grains</h1>
                        </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section">
        
        <div class="container">
            
            <div class="row"   >
                <div class="title-area">
                    
                    
                    <h1>WHAT WE DO</h1>
                    <div class="separator separator-danger">*</div>
                        <p class="description">
                            Here at Ajah grains we do everything grains, we source for our grains locally(Nigeria) and internationally, our grains are of utmost quality and we buy from the best vendors. we deal in rice, corn, millet, maize, beans and so on. 
                        </p>
                    </div>
                    <div class="title-area">
                    <h2>HOW WE DO IT</h2>
                    <div class="separator separator-danger">*</div>
                        <p class="description">
                            ajahgrains.ng provides the plateform for you to do the following.
                            <br>
                            <ul>
                                <li>See the products that are instock.</li>
                                <li>Place order by sending us an order <a href="get.php">message</a></li> 
                                <li>Get products delivered to you.</li>
                                <li>You pay on delivery.</li>   
                            </ul> 
                        </p>
                    
                </div>
        </div>
    </div>
</div>

    
    <footer class="footer footer-big footer-color-black" data-color="black">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="info">
                        <h5 class="title" style="text-align: center;">Navigate</h5>
                        <nav>
                            <ul style="text-align: center;">
                                <li>
                                    <a href="index.php">Home</a></li>
                                <li>
                                    <a href="aboutus.php">About Us</a>
                                </li>
                                <li>
                                    <a href="get.php">customer services</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-5">
                    <div class="info">
                        <h5 class="title" style="text-align: center;">Follow us on</h5>
                        <nav>
                            <ul style="text-align: center;">
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
                 © <script> document.write(new Date().getFullYear()) </script> Ajah grains Team .
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
