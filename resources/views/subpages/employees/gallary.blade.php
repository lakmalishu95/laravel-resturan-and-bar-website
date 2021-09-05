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

    @include('navbar')<br><br><br>

    <div class="section" id="about">
        
    <div class="container">
        <!-- Gallery --><h2>Gallary</h2><hr>
        <div class="row">
            
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="assets/images/image-new/getty_487125438_406719.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/Image by Science in HD (1).png" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/images/nd.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/unnamed.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/images/image-new/request-worker-form_feature_675x675-675x675.png" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/unnamed.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>
            
      
        </div>
    </div>
    </div>

   @include('footer')


</body>

</html>