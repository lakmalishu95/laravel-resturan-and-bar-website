<!DOCTYPE html>
<html lang="en">
    
@include('head')

<body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    
    </div>

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
</header><br><br><br><br><br>

<div class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h2>Business Management</h2>
                    </div>
                    <p>Welcome to our page for building, managing, and consulting with your business. It is our greatest joy in life to help others grow into, and realize their full potential when they have a solid backing. 
                            Your business is one pillar of the plan, you are the other pillar, and we would love to be the third pillar.
                            We would love to gain an intimate knowledge of your business if required to best consult you.
                            We will listen to and listen carefully to what you request in terms of design, logos, websites, contracts, and any other items you would like.
                            In the “start a business” page please enter your required, and desired help and we will would be happy to put together a custom fair quote for you
                            All work comes with revisions of up to 5 and at that point we can either cancel or it’s $6 a revision.
                            All business packages are tailored for you, by our experienced business leaders with a combined hundreds of years of experience
                            We would be very happy to help you in any way that you would like for us, no inappropriate messages, no illegal drugs, no alcohol or tobacco.
                            
                            </p>
                            <h5>For other custom items such as gear and merchandise please scroll further down </h5><br>
                            <div class="section-heading">
                                <h6>Get a quote for what you need </h6>
                                <h6>How can we help today? </h6><br>
                            <p>For a better view of merchandise design pricing please scroll down</p>
                            <h5>  Our individual services </h5><br>
                            <h6>Consulting ( $800 - $1,000 ) 12 hours of one on talking over one month</h6>
                            <h6>Logos ( $200 -$220 ) depends on complexity and style and files needed</h6>
                            <h6>Websites, SEO,Custom Coded website and features $1,000 - $2,000 </h6>
                            <p>Professionally designed wix site very basic site but it’s good enough: $400

                            Shirt design and quality shirt sourcing: $100 for your company with our own print shop and our software one hundred percent legit check out our print shop photos here. We specialize in tagless options please inquire for more information here

                            Custom merchandise design legit legal to sell these products as your own 100% with our own printing equipment click here </p>
                            <h5>Business Starter packages</h5><br>

                            <h6>Food Business package $1,700 - $2,000</h6>
                            <h6>Sauce Business package  $1,500- $1,800</h6>
                            <h6>Car wash business $1,900 -$2,200</h6>
                            <h6>Logistics business $1,800-$2,200</h6>
                            <h6>Other business package $2,700</h6><br>
                            <h5>SEO: 10% of sales minimum $1,000 or $10,000 business profit per month, 8 hours of SEO for four weeks</h5>
                            <p>•Contract assistance $3,000 ( 8 hours of zoom meetings over three weeks )

                            

                            Clothing 

                            "We can source quality cheap merchandise that it is 100% to resell by doing this🦍 

                            If you would like to inquire about other items click here 

                            If you would like to describe the item listed below that you require please click here so we can make your vision a reality

                            All design work comes with 5 free redesigns and reviews after which we will discuss the viability of the project and take only a $20 fee because we do try our best and at that point you would know 

                            Small edits such as errors like scale that are sent first as an example then changed are not counted towards the 5 of course they are just examples rough drafts so don’t worry about that

                            An edit is if you tell us specific words to add and have us edit it, if you ask us to change the color from your initial request, if you

                            The provided services are only for business or companies or LLCs or any business, not indiviuals </p>
                            <p>Combo Package: $300                                      -Cargo Shorts/ professional shorts/ let’s  talk about which shorts/ 

                            Shirt designs $150-$250 this takes a very creative process you are paying not for my time but for my expertise and resources and creative mind please keep in mind the artistic process and love and care we put into your product

                            Industrial clothing design $300 for 2 designs this is very much more complex and requires more resources to source the correct and needed materials 

                            Commercial Business clothing t shirts, hats, bikinis $360 for 2 designs

                            Hire us as your monthly designer with 5 designs per month for only $290 

                            All other clothing please inquire here       

                            Sunglasses design: $65

                            Sock designs </p>

                            
                </div>
                <div class="row">
                    <div class="col-4">
                        <img src="assets/images/about-thumb-01.jpg" alt="">
                    </div>
                    <div class="col-4">
                       <img src="assets/images/about-thumb-02.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img src="assets/images/about-thumb-03.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')



</body>
</html>