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
    <title>Home Page</title>

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
                    <a class="nav-brand" href="https://powermin.gov.in/en"><img src="logo.png" alt="MOP LOGO"></a>

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
                                <li class="current-item"><a href="index.php">Home</a></li>
                                <li><a href="#">Reader's Point</a>
                                    <ul class="dropdown">
                                        <li><a href="./blog.html"> Blog</a></li>
                                        <li><a href="./video.html"> Videos</a></li>
                                        <li><a href="./blog.html"> Q&A</a></li>
                                      </ul>
                                </li>
                                <li><a href="./services.html">Services</a></li>
                                <li><a href="./contact.html">Contact</a></li>

                              </ul>
                            <div class="get-a-quote ml-4 mr-3">
                                <a href="farmer_form.php" class="btn uza-btn">Meter Details</a>
                            </div>
                            <!-- Today's Weather -->
                            
                            <div class="login-register-btn mx-3">
                                <a href="login.php">Login </a><!<span><!a href="register.php"><!/Register</a></span>
                            </div>

                            <div class="login-register-btn mx-3">
                                <a href="index2.php">हिंदी</a>
                             </div>   

                            <!-- Search Icon -->
                             
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
                    <img src="hs.jpg" alt="ravi image is loading...">
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

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_cone_alt"></i>
                        </div>
                        <h5>Power Calculator</h5>
                        <p>Calculate your power consumption on daily, weekly and monthly basis.</p>
                        <a href="calculator.html" class="read-more-btn">Avail Now <i class="arrow_carrot-2right"></i></a>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_piechart"></i>
                        </div>
                        <h5>Farmer's Portal</h5>
                        <p>Explore and Avail each and every essential information and service required by you for sustainable farming.</p>
                        <a href="https://farmer.gov.in/" class="read-more-btn">Avail Now <i class="arrow_carrot-2right"></i></a>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_easel"></i>
                        </div>
                        <h5>Today's Power Schedule</h5>
                        <p>Check the Power Schedule here as per your location.</p>
                        <a href="schedulefarmer.php" class="read-more-btn">Avail Now <i class="arrow_carrot-2right"></i></a>
                    </div>
                </div>

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
                            <span class="post-date"><span>02</span> March, 2019</span>
                            <a href="https://www.efficiencyvermont.com/tips-tools/guides/the-best-ways-to-save-energy-on-your-farm">Tips to reduce power consumption</a>
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
                            <span class="post-date"><span>02</span> March, 2019</span>
                            <a href="http://www.farmingsolutions.org/different-farming-methods-you-should-know/" class="post-title"> Farming Methods</a>
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
                            <span class="post-date"><span>02</span> March, 2019</span>
                            <a href="https://www.conserve-energy-future.com/list-10-natural-resources.php" class="post-title">Using Natural Resources</a>
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
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><!a href="register.php"><!Registration</a></li>
                                

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

