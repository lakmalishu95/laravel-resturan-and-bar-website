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

    @include('navbar')<br><br>

    <div class="section" id="chefs" style="margin-bottom: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 text-center">
                        <div class="section-heading">
                            <h6></h6>
                            <h2>EMPLOYERS</h2><hr>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary"><a style="color: white;" href="{{ url('/businesscontact')}}">Register here -></a></button><br><br>


                <div class="row">

                @foreach($data as $data)

                    <div class="col-lg-4">
                        <div class="chef-item">
                            <div class="thumb">
                                <div class="overlay"></div>
                                <ul class="social-icons">
                                    <button class="btn btn-primary"><a style="color: white;" href="{{ url('employerprofile',$data->id)}}">View Profile</a></button>
                                </ul>
                                <img src="/bcimage/{{$data->image}}" alt="Chef #2">
                            </div>
                            <div class="down-content">
                                <h4>{{$data->fname}}</h4>
                                <span>{{$data->location}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
    </div >

    @include('footer')


</body>

</html>