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

    <div class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h2>Custome Request</h2>                           
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem perspiciatis voluptas quis. Ex, in, dolorum
                                 dolorem et nobis explicabo eos saepe doloremque tempore 
                                 exercitationem quae necessitatibus reprehenderit optio fugiat neque!</p><br>
                                    <h5>Supply the chain</h5><br>
                                    <h6>Logistics</h6>
                                    <h6>Quality control</h6>
                                    <h6>Design</h6>
                                    <h6>Eye for detail</h6>
                                    <h6>Staffing</h6>
                                    <h6>Solar</h6>
                        </div><br><br><br>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                        <div class="thumb">
                            <img style="padding-left: 100px; padding-top:100px;" src="assets/images/Image by Science in HD (1).png" alt="">
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