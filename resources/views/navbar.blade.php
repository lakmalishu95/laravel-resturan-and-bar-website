<header class="header-area header-sticky">
    <div class="container-fluid">
        <div class="col-12">
            <nav class="main-nav">
                <!-- ***** Logo Start ***** -->
                <span>
                <a href="home" class="logo">
                    <img src="assets/images/logo-new-removebg-preview (1).png" class="mx-auto d-block" >
                </a></span>    
                <!-- ***** Logo End ***** -->

                <!-- ***** Menu Start ***** -->
                <ul class="nav">
                    <li ><a href="{{ url('/home')}}">Home</a></li>
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
                    <li class=""><a href="{{ url('/oilandgas')}}" >OIL and GAS</a></li>
                    
                    <li class="submenu"><a href="#">More</a>
                        <ul>
                            <li><a href="{{ url('/ourmenu') }}">Our Memu </a></li>
                            <li><a href="{{ url('/service') }}">Services</a></li>
                            <li><a href="{{ url('/ourmission') }}">Our Mission</a></li>
                            <li><a href="{{ url('/partners') }}">3 Partners </a></li>
                        </ul>
                    </li>
                    
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
</header>