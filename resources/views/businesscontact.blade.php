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

    @include('navbar')  

    <!-- ***** Reservation Us Area Starts ***** -->
    <div class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2> Business Contact </h2>
                        </div>
                        <p>For one time events or other inquiries please message  cajunstaffing@yahoo.com</p>
                        <p>We are headquartered in the great state of Louisiana, but we live to serve the world</p>
                        <p>For international staffing help and inquiries please email cajunstaffing.world@gmail.com </p>
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">cajunstaffing@yahoo.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact"  method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Business partner contact</h4>
                                </div>
                                @csrf
                                <div class="form-group">        
                                    @if(session()->has('message'))
                                        <div style="background-color:red;" class="alert alert-dark">
                                            
                                            {{session()->get('message')}}
                                        </div>
                                    @endif
                                </div>  
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="fname" type="text" id="fname" placeholder="first Name :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="lname" type="text" id="lname" placeholder="last Name :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Enter Your Email :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="bname" type="text" id="bname" placeholder="Enter Business name :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <select class="form-select" name="category" aria-label="Disabled select example" required="">
                                        <option selected> select category</option>
                                        <option value="bar">Bar</option>
                                        <option value="restaurant">Restaurant</option>
                                        
                                    </select>
                                </div>
                                
                                
                                <div class="col-lg-12 col-sm-12">
                                    <input name="eorc" type="text" id="eorc" placeholder="Event or business :" required="">
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <input name="seek" type="text" id="eorc" placeholder="What job description and title do you seek to hire ? : " required="">
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <input name="location" type="text" id="eorc" placeholder="What is the location zip code, City, and State of the business or event :" required="">
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <input name="operate" type="text" id="eorc" placeholder="Do you operate within the united states? yes/no :" required="">
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="image" type="file" id="O21" placeholder=" add image" required="">
                                    </fieldset>
                                </div><br><br>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="helpful" rows="6" id="helpful" placeholder="How can we be helpful today :" required=""></textarea>
                                    </fieldset>
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
   
    @include('footer')
</body>

</html>