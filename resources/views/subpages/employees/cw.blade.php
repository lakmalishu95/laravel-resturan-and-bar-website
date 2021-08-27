<!DOCTYPE html>
<html lang="en">

@include('head')

<body>

    <!-- ***** Preloader End ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    
    </div>


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
                                    
                                    
                                    <div style="background-color: gray"><h5 >Trades</h5></div><br>                              
                                    <h6><a href="#">Welders</a></h6>
                                    <h6><a href="#">Pipefitters</a></h6>
                                    <h6><a href="#">Drywall</a></h6>
                                    <h6><a href="#">Floorer</a></h6>
                                    <h6><a href="#">Carpenters</a></h6>
                                    <h6><a href="#">Residential Plumber</a>s</h6>
                                    <h6><a href="#">Commercial plumbers</a></h6>
                                    <h6><a href="#">Laborers Unskilled </a></h6><br>

                                    <div style="background-color: gray"><h5>Engineers</h5></div><br>
                                    <h6><a href="#">Draftsman</a></h6>
                                    <h6><a href="#">Pipefitter</a></h6>
                                    <h6><a href="#">Ironworkers</a></h6>
                                    <h6><a href="#">Carpenters</a></h6>
                                    <h6><a href="#">Pool/landscape architecture</a></h6>
                                    <h6><a href="#">Rod-Busters</a></h6>
                                    <h6><a href="#">Concrete placement</a></h6>
                                    <h6><a href="#">Concrete Finishers</a></h6>
                                    <h6><a href="#">Truck Drivers</a></h6>
                                    <h6><a href="#">Custodian</a></h6>
                                    <h6><a href="#">Refuse Collector</a></h6>
                                    <h6><a href="#">legal assistant</a></h6>
                                    <h6><a href="#">bus driver</a></h6>
                                    <h6><a href="#">brick mason</a></h6>
                                    <h6><a href="#">construction equipment operator</a></h6>
                                    <h6><a href="#">s -tractor trailer drivers -crane operator -carpenter</a></h6>
                                    <h6><a href="#">s -hvac tech</a></h6>
                                    <h6><a href="#">turbine(wind and pneumatic) technician</a></h6>
                                    <h6><a href="#">license practical nurse</a></h6>
                                    <h6><a href="#">diesel technician</a></h6>
                                    <h6><a href="#">home inspector</a></h6>
                                    <h6><a href="#">plumber</a></h6>
                                    <h6><a href="#">aircraft mechanic</a></h6>
                                    <h6><a href="#">construction management</a></h6>
                                    <h6><a href="#">landscape designer</a></h6><br>


                                    <div style="background-color: gray"><h5>Industrial </h5></div><br>
                                    <h6><a href="#">Equipment Operators</a></h6>
                                    <h6><a href="#">Plumbing</a> </h6>
                                    <h6><a href="#">Electricians </a></h6>
                                    <h6><a href="#">Oil and Gas</a></h6>



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

    @include('footer')

</body>

</html>