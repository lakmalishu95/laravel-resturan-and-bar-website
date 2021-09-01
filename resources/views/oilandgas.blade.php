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
                            <h2>OIL and GAS</h2>
                            <hr>
                            <p>Our cofounder Scot Blouin has over 25 years in the oil and gas industries
                                 building, maintaining, and watering relationships. Scot, also has those
                                  same number of years working various positions in these industries.
                                   We are all fans of necessary to use fossil fuels.  To view Scot's profile click here .
                                To view our past oil and gas work taken with permission of the individual companies please click <a href="#">here.</a></p>
                                    <h6><a href="#">​Engineers</a></h6>
                                    <h6><a href="#">Quality Control</a></h6>
                                    <h6><a href="#">Superintendent</a></h6>
                                    <h6><a href="#">Sureyors</a></h6>
                                    <h6><a href="#">Job Site Security</a></h6>
                                    <h6><a href="#">Pipeline/Utility locator</a></h6>
                                    <h6><a href="#">Trenching Demolition</a></h6>
                                    <h6><a href="#">Electicians</a></h6>
                                    <h6><a href="#">Safety man/ Crew</a></h6>
                                    <h6><a href="#">Equipment Operators</a></h6>
                                    <h6><a href="#">Traffic Flaggers</a></h6>  

                                    <h6><a href="#">laborer</a></h6>
                                    <h6><a href="#">Boiler maker</a></h6>
                                    <h6><a href="#">Tank/Vessel Cleaning</a></h6>                                                             
                                    <h6><a href="#">Pig Launcher Testing</a></h6>
                                    <h6><a href="#">Iron workers</a></h6>
                                    <h6><a href="#">Truck Drivers</a></h6>
                                    <h6><a href="#">HVAC</a></h6>
                                    <h6><a href="#">Plumbers</a></h6>
                                    <h6><a href="#">Pile Driver</a></h6>
                                    <h6><a href="#">Millwright</a></h6>
                                    <h6><a href="#">Chemical Plant Operators</a></h6>                 
                                    <h6><a href="#">Assistant Superintendnet</a></h6>
                                    <h6><a href="#">Project Management</a></h6>
                                    <h6><a href="#">Rod-Busters</a></h6>
                                    <h6><a href="#">Carpenterer Foreman</a></h6>
                                    <h6><a href="#">Security Installation</a></h6>
                                    <h6><a href="#">Carpenters</a></h6>
                                    <h6><a href="#">Environmental Services</a></h6>
                                    <h6><a href="#">Soil Testing</a></h6>
                                

                        </div><br><br><br>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                        <div class="thumb">
                            <img style="padding-left: 100px; padding-top:100px;" src="assets/images/oil.jpg " alt="">
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