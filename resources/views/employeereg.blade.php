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

    @include('navbar')<br>

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
   

    @include('footer')
    <!-- ***** Reservation Area Ends ***** -->


</body>

</html>