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

                    <a href="home" class="logo">
                        <img src="assets/images/logo-new.jpg" class="mx-auto d-block" style="width: 150px;  padding-top: 20px; padding-left: 20px;">
                    </a>    

                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ url('/home')}}" class="active">Home</a></li>
                        <li class="submenu">
                            <a href="{{url('/employers')}}">EMPLOYERS</a>
                            <ul>
                                <li><a href="{{ url('/bar') }}">BAR</a></li>
                                <li><a href="{{ url('/restaraunts') }}">RESTARAUNTS</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#">contact </a>
                            <ul>
                                <li><a href="{{ url('/employecontact') }}">Employee contact</a></li>
                                <li><a href="{{ url('/businesscontact') }}">Business contact</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="{{ url('/businessmanagement') }}">Business Management </a>
                            <ul>
                                <li class="submenu"><a href="{{ url('/business-starter-packages') }}">Business Starter Packages</a></li>
                                <ul>
                                <li class="submenu"><a href="{{ url('/business-starter-packages') }}">A</a></li>
                                <li><a href="{{ url('/consultation') }}">B</a></li>
                                <li><a href="{{ url('/merchandise') }}">C</a></li>
                                <li><a href="{{ url('/contracts') }}">D</a></li>
                                <li><a href="{{ url('/customerequest') }}">E</a></li>

                            </ul>
                                <li><a href="{{ url('/consultation') }}">Consultation</a></li>
                                <li><a href="{{ url('/merchandise') }}">Merchandise</a></li>
                                <li><a href="{{ url('/contracts') }}">Contracts</a></li>
                                <li><a href="{{ url('/customerequest') }}">Custom Request</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="{{ url('/employees')}}">EMPLOYEES </a>
                            <ul>
                                <li><a href="{{ url('/foodindustry') }}">Food Industry</a></li>
                                <li><a href="{{ url('/residentialworkers') }}">Residential Workers</a></li>
                                <li><a href="{{ url('/commercialworkers') }}">Commercial Workers </a></li>
                                <li><a href="{{ url('/trades') }}">Trades </a></li>
                                <li><a href="{{ url('/natdisaster') }}">Nat Disaster</a></li>
                                <li><a href="{{ url('/welderscommercial') }}">Welders Commercial </a></li>
                                <li><a href="{{ url('/gallary') }}">Gallary</a></li>
                                <li><a href="{{ url('/bleudonahue') }}">Bleu Donahue</a></li>
                                <li><a href="{{ url('/newpage') }}">New Page </a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/ourmenu') }}">Our Memu </a></li>
                        <li><a href="{{ url('/service') }}">Services</a></li>
                        <li><a href="{{ url('/ourmission') }}">Our Mission</a></li>
                        <li><a href="{{ url('/partners') }}">3 Partners </a></li>
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
    <section class="section" id="about">
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
                        <div class="section-heading">
                            <h2>For Employers.</h2>
                        </div>
                        <h5>See how we harness the power of<br> technology to focus on your business<br> needs.</h5><br>
                        <button type="button" class="btn btn-primary"> <a href="{{ url("/employecontact") }}">Learn more</a></button>
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
                        <div class="section-heading">
                            <h2>BUSINESS MANAGEMENT</h2>
                        </div>
                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae numquam hic amet molestias accusamus reiciendis minus recusandae consequuntur animi optio natus
                            consequatur debitis magnam, exercitationem dignissimos iure dolore, quidem quis?</h5><br>
                        <button type="button" class="btn btn-primary"><a href="{{ url("/businesscontact") }}">Learn more</a></button><br><br>
                        <div class="row">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><br><br>
    <!-- ***** business managment Area Ends ***** -->

    <div class="container">
        <!-- Gallery -->
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="assets/images/image-new/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/image-new/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/images/image-new/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/image-new/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/images/image-new/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/image-new/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/images/image-new/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/image-new/8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/images/image-new/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/image-new/10.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/images/image-new/11.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/image-new/12.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/images/image-new/13.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/image-new/14.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/images/image-new/15.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/image-new/16.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/images/image-new/17.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/image-new/18.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>
        </div>
    </div>
    <!-- Gallery -->



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
                    <div class="logo">
                        <a style="color:black" href="cajunstaffing.com">cajunstaffing 2021 llc</a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>designed by

                            <br><a href="https://www.fiverr.com/kevinkrish95?public_mode=true">kevinkrish</a>
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