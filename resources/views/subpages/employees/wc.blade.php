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

    @include('navbar')<br><br><br><br><br>

    <div class="section" id="about">
        <div class="container">
        <h2>Welders Commercial</h2><hr>
        <!-- Gallery -->
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="assets/images/image-new/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/image-new/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/images/image-new/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/image-new/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/images/image-new/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                <img src="assets/images/image-new/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
            </div>
            
           
           
        </div>
    </div>
    </div>

    @include('footer')


</body>

</html>