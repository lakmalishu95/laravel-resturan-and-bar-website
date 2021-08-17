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
                        <li class="scroll-to-section"><a href="{{ url('/home')}}" >Home</a></li>
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
    </header><br>

    <!-- ***** Reservation Us Area Starts ***** -->
    <div class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Here Employees can Register and Join with us.</h6>
                            
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum cum facilis quia cupiditate dolorem praesentium illo accusantium eius voluptatum ea totam vero ipsa, voluptatem nesciunt, nemo quae non odit a!</p>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span>><a href="#">080-090-0880</a></span>
                                </div><br><br>
                            </div>
                            <div class="col-lg-12">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">cajunstaffingfood@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form style="background-color: none;" id="contact"  method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>EMPLOYEE  &nbsp;REGISTATION</h4>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="fname" type="text" id="fname" placeholder="First Name :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="lname" type="text" id="lname" placeholder="Last Name :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Enter Your Email :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="licen" type="text" id="licen" placeholder="Licenses :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="phone" type="number" id="lname" placeholder="Phone Number :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="location" type="text" id="bname" placeholder="Location :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="ex" type="text" id="ex" placeholder="Experience :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="ex" type="text" id="ex" placeholder="$ Amount for hour :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="bname" type="text" id="bname" placeholder="Enter Business name :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                <label for="img">Select image:</label>
                                <input type="file" id="img" name="img" accept="image/*">
  

                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <input type="text" name="category" placeholder="Career Field/Job Field  :">

                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <input type="text" name="category" placeholder="Industrial/Commercial/Residential ?  :">

                                </div>

                                <div class="col-lg-12 col-sm-12">

                                    <input name="eorc" type="text" id="eorc" placeholder="Are you over 21 ? " required="">

                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button-icon">Send</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
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
    <!-- ***** Reservation Area Ends ***** -->


</body>

</html>