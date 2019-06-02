<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>home page</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="home1.php"><img src="logo.png" alt="MOP LOGO"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="current-item"><a href="home1.php">Home</a></li>
                                <li><a href="#">Reader's Point</a>
                                    <ul class="dropdown">
                                        <li><a href="./blog.html"> Update Blog</a></li>
                                        <li><a href="./blog.html"> Update Videos</a></li>
                                        <li><a href="./blog.html"> Update Q&A</a></li>
                                    </ul>
                                </li>

                                <li><a href="./powercon.php">Update Schedule</a></li>
                            </ul>

                            <!-- Today's Weather -->
                            <div class="get-a-quote ml-4 mr-3">
                                <a href="farmer_data1.php" class="btn uza-btn">Meter Information</a>
                            </div>

                            <!-- Login / Register -->
                            <div class="login-register-btn mx-3">
                                <a href="logout.php">logout </a>
                            </div>

                            <!-- Search Icon -->
                            <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
 </header>

 <!--  HOME PAGE BACKGROUND IMAGE -->

  <section>   <!--Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="hs1.jpeg" alt="ravi image is loading...">
         </section>
   
 <section class="uza-services-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2> Services</h2>
                    </div>
                </div>
            </div>

            <div class="row">


                 <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_easel"></i>
                        </div>
                        <h5>Update Power Schedule</h5>
                        <p>Update the Power Schedule here as per your location.</p>
                        <a href="powercon.php" class="read-more-btn">Avail Now <i class="arrow_carrot-2right"></i></a>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_cone_alt"></i>
                        </div>
                        <h5> Check Meter info</h5>
                        <p>Check the the details of all the meters of a locality.</p>
                        <a href="farmer_data1.php" class="read-more-btn">Avail Now <i class="arrow_carrot-2right"></i></a>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_piechart"></i>
                        </div>
                        <h5>Check Meter Subsidy</h5>
                        <p>Explore and Avail each and every essential information of the farmers who are awarded with the power subsidy.</p>
                        <a href="farmer_data1.php" class="read-more-btn">Avail Now <i class="arrow_carrot-2right"></i></a>
                    </div>
                </div>

                <!-- Single Service Area -->
               

            </div>
        </div>
       

  </section>
   
      
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2> Latest Blogs</h2>
                        
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(hsimg4.jpeg);">
                        <!-- Post Content -->
                        <div class="post-content">
                            <span class="post-date"><span>07</span> March, 2019</span>
                            <a href="#" class="post-title">Tips to reduce power consumption</a>
                            <p>Clean ventilation fans. Avoid irrigating on hot sunny or windy days. Apply only the amount of irrigation water required for crop growth.</p>
                            <a href="blog.html" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(hsimg.jpeg);">
                        <!-- Post Content -->
                        <div class="post-content">
                            <span class="post-date"><span>08</span> March, 2019</span>
                            <a href="#" class="post-title"> Farming Methods</a>
                            <p>Find out about the potential of generating wind energy. Look into anaerobic digestion of manure for green energy and reduced odour on your farm.</p>
                            <a href="blog.html" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(hsimg1.jpeg);">
                        <!-- Post Content -->
                        <div class="post-content">
                            <span class="post-date"><span>09</span> March, 2019</span>
                            <a href="#" class="post-title">Using Natural Resources</a>
                            <p> Look into anaerobic digestion of manure for green energy and reduced odour on your farm. Explore opportunities for using solar energy around the farm.</p>
                            <a href="blog.html" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

 

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">
 <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Quick Links</h4>

                        <!-- Nav -->
                        <nav>
                            <ul class="our-link">
                                <li><a href="https://farmer.gov.in/WeatherReport/weatherreport.aspx">Weather Details</a></li>
                                <li><a href="https://farmer.gov.in/WeatherReport/NowCast.aspx">Extreme Weather Alerts</a></li>
                                <li><a href="https://www.msn.com/en-in/weather">Weather Forecast</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                
                                

                            </ul>
                        </nav>
                    </div>
                </div>

         
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>