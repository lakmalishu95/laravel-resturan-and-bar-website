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

    

    <!-- ***** Menu Area Starts ***** -->

    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h3>Our Menu</h3><hr>
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
              
                @foreach($data as $data)

                   <div class="item">
                        <div style="background-image: url('/foodimage/{{$data->image}}');" class='card '>
                         
                            <div class="price"><h6>{{$data->price}}</h6></div>
                            <div class='info'>
                                <h1 class='title'>{{$data->title}}</h1>
                                <p class='description'>{{$data->description}}</p>
                                <div class="main-text-button">
                                    
                                </div>
                            </div>
                        </div>
                    </div> 

                @endforeach 

                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->


    <!-- ***** Footer Start ***** -->
    @include('footer')
</body>

</html>