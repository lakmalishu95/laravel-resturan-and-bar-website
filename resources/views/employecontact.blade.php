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
                            <h6>Contact Us</h6>
                            <h2> Employee Registration and Contact email </h2>
                        </div>
                        <p>please obtain our phone number after short email correspondence </p>
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
                    <div class="contact-form" style="padding-left: 50px;">
                        <form id="contact" action="{{url('/employeereg')}}" method="post" enctype="multipart/form-data">

                            @csrf

                            <div class="row">

                                <div class="col-lg-12">
                                    <h4>Register here</h4>
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
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Enter your Valied Email Address :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="emp_j" type="text" id="emp_j" placeholder="Industry and Job position/title (RN, Backhoe operator) :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        
                                        <select class="form-select" id="emp_a" name="emp_a" aria-label="Default select example" required="">
                                            <option selected>Chose your Service</option>
                                            <option value="Residential">Residential</option>
                                            <option value="Commercial">Commercial</option>
                                            <option value="industrial">industrial</option>
                                    </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="emp_licen" type="text" id="fiald" placeholder="Relevant work licenses? :" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="emp_age" type="text" id="O21" placeholder="Age : ?" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="emp_d1" rows="6" id="message" placeholder="Tell us here or email us a bit about yourself and work history" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="emp_location" rows="6" type="text" class="form-control" id="validationDefault01"   placeholder="What is your City, State and zipcode where you need employment?" required ="">
                                    </fieldset>
                                </div>                                
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="emp_referances" type="text" id="O21" placeholder=" Can you provide one or more referances? That we can contact" required="">
                                    </fieldset>
                                </div><br><br>
                                <div class="col-lg-12 col-sm-12">
                                    <fieldset>
                                        <input name="image" type="file" id="O21" placeholder=" add image" required="">
                                    </fieldset>
                                </div><br><br>

                                
                                                
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


   @include('footer')
    <!-- ***** Reservation Area Ends ***** -->


</body>

</html>