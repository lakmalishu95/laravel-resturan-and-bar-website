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
                                <li><a href="{{ url('/business-starter-packages') }}">Business Starter Packages</a></li>
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


    </header><br><br>

    <div class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h2>Commercial Workers </h2>
                            <button class="btn btn-primary" ><a style="color: white;" href="{{ url('/employecontact')}}">Contact us</a></button>
                            <hr>
                            <p>It is our greatest honor to honor your home building project with great employees and deliver a great experience
                                 for the company constructing the homes,
                                 and the homes residents. Our landscapers would love to make your yard a masterpiece compared to your neighbor</p>
                                    
                                    
                                    <div style="background-color: gray"><h5 >Trades</h5></div>                              
                                    <h6>Welders</h6>
                                    <h6>Pipefitters</h6>
                                    <h6>Drywall</h6>
                                    <h6>Floorer</h6>
                                    <h6>Carpenters</h6>
                                    <h6>Residential Plumbers</h6>
                                    <h6>Commercial plumbers</h6>
                                    <h6>Laborers Unskilled </h6><br>

                                    <div style="background-color: gray"><h5>Engineers</h5></div>
                                    <h6>Draftsman</h6>
                                    <h6>Pipefitter</h6>
                                    <h6>Ironworkers</h6>
                                    <h6>Carpenters</h6>
                                    <h6>Pool/landscape architecture</h6>
                                    <h6>Rod-Busters</h6>
                                    <h6>Concrete placement</h6>
                                    <h6>Concrete Finishers</h6>
                                    <h6>Truck Drivers</h6>
                                    <h6>Custodian</h6>
                                    <h6>Refuse Collector</h6>
                                    <h6>legal assistant</h6>
                                    <h6>bus driver</h6>
                                    <h6>brick mason</h6>
                                    <h6>construction equipment operator</h6>
                                    <h6>s -tractor trailer drivers -crane operator -carpenter</h6>
                                    <h6>s -hvac tech</h6>
                                    <h6>turbine(wind and pneumatic) technician</h6>
                                    <h6>license practical nurse</h6>
                                    <h6>diesel technician</h6>
                                    <h6>home inspector</h6>
                                    <h6>plumber</h6>
                                    <h6>aircraft mechanic</h6>
                                    <h6>construction management</h6>
                                    <h6>landscape designer</h6><br>


                                    <div style="background-color: gray"><h5>Industrial </h5></div>
                                    <h6>Equipment Operators</h6>
                                    <h6>Plumbing </h6>
                                    <h6>Electricians </h6>
                                    <h6>Oil and Gas</h6>



                        </div><br><br><br>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                        <div class="thumb">
                            <img style="padding-left: 100px; padding-top:100px;" src="assets/images/unnamed.jpg" alt="">
                        </div>
                        </div><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

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


</body>

</html>