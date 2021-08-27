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
                            <h2>Residential Workers</h2>
                            <hr>
                            <p>It is our greatest honor to honor your home building project with great employees and deliver a great experience
                                 for the company constructing the homes,
                                 and the homes residents. Our landscapers would love to make your yard a masterpiece compared to your neighbor</p>
                                    <h6><a href="#">Heavy equipment operators</a></h6>
                                    <h6><a href="#">Carpenters</a></h6>
                                    <h6><a href="#">Carpenters Helper</a></h6>
                                    <h6><a href="#">Laborers -Concrete truck drivers</a></h6>
                                    <h6><a href="#">Concrete Placement -Concrete Finishers -Engineers</a></h6>                            
                                    <h6><a href="#">Architecture</a></h6>
                                    <h6><a href="#">Landscape Architecture(this includes fountains and ponds)</a></h6>
                                    <h6><a href="#">Landscaping(irrigation solutions)</a></h6>
                                    <h6><a href="#">Appliance Repair</a></h6>
                                    <h6><a href="#">Hvac technician</a></h6>
                                    <h6><a href="#">Mold Remediation</a></h6>
                                    <h6><a href="#">Flood/Fire Damage remediation</a></h6>
                                    <h6><a href="#">Roofing -Metal studs/Rod-Busters for homes with pile caps/grade beams with reinforced concrete</a></h6>
                                    <h6><a href="#">Pool Installers</a></h6>
                                    <h6><a href="#">Pool Maintenance</a></h6>
                                    <h6><a href="#">Elevator Repairs/Installation</a></h6>
                                    <h6><a href="#">Insulators -Waterproofer</a></h6>
                                    <h6><a href="#">Flooring(floor sanding, concrete staining, tile work) -Bathroom remodel</a></h6>
                                    <h6><a href="#">Shower installation</a></h6>
                                    <h6><a href="#">Appliance Repairs</a></h6>
                                    <h6><a href="#">Painting -Interior Designer</a></h6>
                                

                        </div><br><br><br>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                        <div class="thumb">
                            <img style="padding-left: 100px; padding-top:100px;" src="assets/images/abf9c4c116586835e0f87bbe4ddef878.jpg" alt="">
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