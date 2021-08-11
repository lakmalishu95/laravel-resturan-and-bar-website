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
                                <li><a href="{{ url('/employecontact') }}">BAR</a></li>
                                <li><a href="{{ url('/employecontact') }}">RESTARAUNTS</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="{{ url('/employecontact') }}">contact </a>
                            <ul>
                                <li><a href="{{ url('/employecontact') }}">Employee contact</a></li>
                                <li><a href="{{ url('/businesscontact') }}">Business contact</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="{{ url('/businessmanagement') }}">Business Management </a>
                            <ul>
                                <li><a href="{{ url('/employecontact') }}">Business Starter Packages</a></li>
                                <li><a href="{{ url('/employecontact') }}">Consultation</a></li>
                                <li><a href="{{ url('/employecontact') }}">Merchandise</a></li>
                                <li><a href="{{ url('/employecontact') }}">Contracts</a></li>
                                <li><a href="{{ url('/employecontact') }}">Custom Request</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="{{ url('/employees')}}">EMPLOYEES </a>
                            <ul>
                                <li><a href="{{ url('/employecontact') }}">bartenders</a></li>
                                <li><a href="{{ url('/employecontact') }}">waiters</a></li>
                                <li><a href="{{ url('/employecontact') }}">Waitresses </a></li>
                                <li><a href="{{ url('/employecontact') }}">Food Industry</a></li>
                                <li><a href="{{ url('/employecontact') }}">OIL an GAS </a></li>
                                <li><a href="{{ url('/employecontact') }}">Nat Disaster</a></li>
                                <li><a href="{{ url('/employecontact') }}">New Page</a></li>
                                <li><a href="{{ url('/employecontact') }}">New Page </a></li>
                                <li><a href="{{ url('/employecontact') }}">New Page</a></li>
                                <li><a href="{{ url('/employecontact') }}">New Page </a></li>
                                <li><a href="{{ url('/employecontact') }}">New Page</a></li>
                                <li><a href="{{ url('/employecontact') }}">New Page </a></li>

                            </ul>
                        </li>
                        <li class="submenu"><a href="{{ url('/ourmenu') }}">Our Memu </a></li>
                        <li class="submenu"><a href="{{ url('/services') }}">Services</a></li>
                        <li class="submenu"><a href="{{ url('/ourmission  ') }}">Our Mission</a></li>
                        <li class="submenu"><a href="{{ url('/partners') }}">3 Partners </a></li>
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
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-xs-12">
                                    <h2>Natural Disaster Relief</h2>
                            <button class="btn btn-primary">Search and Rescue</button>
                            <hr>
                            <p>We have put together a group of experienced tradesman, rescuers, and unskilled laborers who have experience helping in natural disasters.  
                                Our cofounders have ties with local natural disaster assistance groups so please reach out if you have the need for a large group of experienced search and rescuers: staffing.cajun.disasters@gmail.com 
                                for all help or questions regarding our natural disaster assistance please email: staffing.cajun.disasters@gmail.com 
                                Please allow us to best assist your community in these difficult trying times we would appreciate the quickest help with quality we could get in such a situation so we strive to do unto others as we
                                </p>
                                    <h6>Residential Construction and Services</h6>
                                    <h6>Flood Repair Specialiss</h6>
                                    <h6>Commercial Construction and Services</h6><br>
                                </div>
                                <div class="col-lg-6 col-md-12 col-xs-12">
                                <div class="thumb">
                            <img style="padding-left: 100px; padding-top:100px;" src="assets/images/nd.jpg" alt="">
                        </div>
                                </div>
                            </div>
                            
                                    
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-xs-12">
                                        <h5>trades</h5><br>
                                        <li>
                                            <ol>Electricians (nat disaster)</ol>
                                            <ol>Roofers (nat disastaer)</ol>
                                            <ol>Flood Experienced laborer</ol>
                                            <ol>Electricians Commercial</ol>
                                            <ol>Painters (nat disaster)</ol>
                                            <ol>Resdiential Construction</ol>
                                            <ol>Scaffolders</ol>
                                            <ol>Electrcians Residential</ol>
                                            <ol>Commercial Construction</ol>
                                            <ol>Plumbers(residential)</ol>
                                            <ol>Resdiential Construction</ol>
                                            <ol>Construction(commercial)</ol>
                                            <ol>Equipment Operators (nat disaster)</ol>
                                            <ol></ol>

                                        </li>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12">
                                        <h5>Natural Disaster relief</h5><br>
                                        <li>
                                            <ol>Relief Specialists</ol>
                                            <ol> Dry Wall</ol>
                                            <ol>Electricians</ol>
                                            <ol>Equipment Operators The Trades</ol>
                                            <ol>welders</ol>
                                            <ol>painters</ol>
                                            <ol>roofers</ol>
                                            <ol>floorers</ol>
                                            <ol>electricians Residential Construction</ol>
                                            <ol>Industrial</ol>
                                            <ol>Electricians</ol>
                                            <ol>Plumbing</ol>
                                            <ol>Equipment Operators</ol>
                                            <ol>Scaffolders</ol>
                                            <ol>Oil and Gas Commercial Constructions</ol>
                                            <ol>Industrial</ol>
                                            <ol> Equipment Operators</ol>
                                            <ol>Dry Wall (nat distaster)</ol>
                                            <ol>Welders (nat disaster)</ol>

                                       </li>
                                        
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>



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