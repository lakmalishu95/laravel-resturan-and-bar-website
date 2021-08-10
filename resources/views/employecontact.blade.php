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


    </header><br>

    <!-- ***** Reservation Us Area Starts ***** -->
    <div class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2> Employee Contact </h2>
                        </div>
                        <p>please obtain our phone number after short email correspondence </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span>><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">cajunemployees@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">

                            @csrf

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Register here</h4>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input lname="fname" type="text" id="fname" placeholder="first Name :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="lname" type="text" id="lname" placeholder="last Name :" required="">
                                    </fieldset>
                                </div>


                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" placholder="cose">
                                        <option selected>Choose licenses ?</option>
                                        <option value="1">Food handlers</option>
                                        <option value="2">bartenders licenses</option>
                                        <option value="3">Relevant licenses</option>
                                    </select>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="fiald" type="text" id="fiald" placeholder="Are you over 21 ?" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Tell us here or email us a bit about yourself and work history" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="fiald" rows="6" type="text" id="fiald" placeholder="Can you provide one or more referances? That we can contact" placeholder="Can you provide one or more referances? That we can contact" required="">
                                    </fieldset>
                                </div>


                                <br><br>
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