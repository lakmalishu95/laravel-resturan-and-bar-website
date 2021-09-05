<!DOCTYPE html>
<html lang="en">

@include('head')

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    
    </div>

    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->

   @include('navbar')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    
        \
    
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** seekers Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <img style="padding-right: 100px;" src="assets/images/Job-Seeker.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h2>For Job Seekers</h2><hr>
                        </div>
                        <h5>Create your account and see how our <br>technology makes the process <br>simple so the
                            focus is always<br> on you, the individual.
                        </h5><br>
                        <div class=" scroll-to-section">
                            <button type="button" class="btn btn-primary">Let's do this</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** seekers Area Ends ***** -->

    <!-- ***** Employers Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h2>For Employers.</h2>
                        </div>
                        <h5>See how we harness the power of<br> technology to focus on your business<br> needs.</h5><br>
                        <button type="button" class="btn btn-primary"> <a style="color:aliceblue" href="{{ url("/employecontact") }}">Learn more</a></button>
                        <div class="row">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <img src="assets/images/emp.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** business managment Area Starts ***** -->
    <section class="section" id="about" style="background-image: url('assets/images/33.jpg'); color:aliceblue">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <img style="padding-right: 100px;" src="assets/images/Business-Management-Consultancy-Services-in-Sri-lanka.png" alt=""><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h2>BUSINESS MANAGEMENT</h2>
                        </div>
                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae numquam hic amet molestias accusamus reiciendis minus recusandae consequuntur animi optio natus
                            consequatur debitis magnam, exercitationem dignissimos iure dolore, quidem quis?</h5><br>
                        <button type="button" class="btn btn-primary"><a style="color: white;" href="{{ url("/businessmanagement") }}">Learn more</a></button><br><br>
                        <div class="row">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><br><br>
    <!-- ***** business managment Area Ends ***** -->

    <div class="container">
        <!-- Gallery -->
        <div class="row">
            
           
           
        </div>
    </div>
    <!-- Gallery -->



    <!-- ***** Footer Start ***** -->
    @include('footer')
</body>

</html>