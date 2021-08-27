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
</header><br><br>

    <div class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h2>SERVICES</h2>
                            <hr>
                            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or
                                double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.
                                I’m a great place for you to tell a story and let your users know a little more about you.
                                This is a great space to write long text about your company and your services. You can use
                                this space to go into a little more detail about your company. Talk about your team and what
                                services you provide. Tell your visitors the story of how you came up with the idea for your
                                business and what makes you different from your competitors. Make your company stand out and
                                show your visitors who you are.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card">
                                    <img src="assets/images/03.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="assets/images/03.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="assets/images/03.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('footer')


</body>

</html>