<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Restaurant</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->

    <header class="header-area header-sticky">

        <div class="container-fluid">

            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li lass="scroll-to-section">
                        
                        <a href="home" class="logo">
                            <img src="assets/images/logo-new.jpg" class="mx-auto d-block" style="width: 150px;  padding-top: 20px; padding-left: 20px;">
                        </a>
                        </li>
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="submenu">
                            <a href="javascript:;">EMPLOYERS</a>
                            <ul>
                                <li><a href="#">BAR</a></li>
                                <li><a href="#">RESTARAUNTS</a></li>
                            </ul>
                        </li>

                        <li class="scroll-to-section"><a href="#menu">Employee contact</a></li>
                        <li class="scroll-to-section"><a href="#menu">Business contact</a></li>

                        <li class="submenu">
                            <a href="javascript:;">EMPLOYEES </a>
                            <ul>
                                <li><a href="#">bartenders</a></li>
                                <li><a href="#">waiters</a></li>
                                <li><a href="#">Waitresses </a></li>

                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#menu">Our Memu </a></li>
                        <li class="scroll-to-section"><a href="#chefs">Services</a></li>
                        <li class="scroll-to-section"><a href="#reservation">3 Partners </a></li>
                        <li>
                            @if (Route::has('login'))

                            @auth
                        <li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">dashboard</a></li>

                        @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                        @endif
                        @endauth

                        @endif
                        </li>

                    </ul>
                    <a class='menu-trigger'>
                        <span></span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        
        
    </header><br>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4 class="display-4">CajunFoodStaffing</h4>
                            <h6>We would love to send staff your way. Get things done</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">CONTACT US</a>
                            </div>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">OUR FOOD MENU</a>
                            </div>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">OUR 3 PARTNERS </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets/images/coffee_mug_chair_124443_1024x768.jpg" height=800px alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets/images/cocktail_ice_drink_212508_1024x768.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets/images/pizza_pastry_appetizing_104513_1440x900.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** seekers Area Starts ***** -->
    <section class="section" id="about" >
        <div class="container">
            <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <img style="padding-right: 100px;" src="assets/images/Job-Seeker.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">                          
                            <h2>for job seekers</h2>
                        </div>
                        <h5>Create your account and see how our <br>technology makes the process <br>simple so the 
                            focus is always<br> on you, the individual.
                        </h5><br>                     
                        <div class=" scroll-to-section">
                            <button type="button" class="btn btn-primary">Let's do this</button>
                        </div>                        
                    </div>
                </div>       
            </div>
        </div>
    </section>
    <!-- ***** seekers Area Ends ***** -->

    <!-- ***** Employers Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading" >                         
                            <h2>For Employers.</h2>
                        </div>
                        <h5>See how we harness the power of<br> technology to focus on your business<br> needs.</h5><br>
                        <button type="button" class="btn btn-primary">Learn more</button>
                        <div class="row">                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <img src="assets/images/emp.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** business managment Area Starts ***** -->
    <section class="section" id="about" style="background-image: url('assets/images/novabell_plytka_podlogowa_drewnopodobna_rektyfikowana_29_8x119_8cm_eco_dream_quercia.jpg'); color:aliceblue">
        <div class="container">
            <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <img style="padding-right: 100px;" src="assets/images/Business-Management-Consultancy-Services-in-Sri-lanka.png" alt=""><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading" >                         
                            <h2>BUSINESS MANAGEMENT</h2>
                        </div>
                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae numquam hic amet molestias accusamus reiciendis minus recusandae consequuntur animi optio natus
                             consequatur debitis magnam, exercitationem dignissimos iure dolore, quidem quis?</h5><br>
                        <button type="button" class="btn btn-primary">Learn more</button><br><br>
                        <div class="row">                          
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ***** business managment Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->

    @include("food")

    <!-- ***** Menu Area Ends ***** -->

    @include("reservation")
    

    

    

    

    

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img style="width: 100px;" src="assets/images/logo/Attachment_1627657541.jpeg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>designed by

                            <br><a href="https://www.fiverr.com/kevinkrish95?public_mode=true" >kevinkrish</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>