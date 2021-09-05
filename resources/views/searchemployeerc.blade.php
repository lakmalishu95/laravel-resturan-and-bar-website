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


    <!-- ***** Header Area Start ***** -->

    @include('navbar')<br>

    <div class="section" id="chefs" >
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6></h6>
                        <h2>ALL EMPLOYEE</h2><hr>
                    </div>
                </div>
            </div> 
       
                <span><button style="margin-left: 15px;" class="btn btn-primary"><a style="color: white;" href="{{ url('/employecontact')}}">Register here -></a></button></span>
                <li class="nav-item w-50">
                    <form method="GET" action="{{url('/searchemployeerc')}}"  class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                        @csrf
                        <input style="color: black; margin-right:3px;" type="text" name="search" class="form-control" placeholder="Search Who Commercial or Residential or NA">
                        <button type="submit" class="btn btn-primary">search</button>
                    </form>              
                </li><br>
                
                      
            
            <div class="row" style="padding-bottom: 50px;">
            
                @foreach($data as $data)                
                <div class="col-lg-3">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <button class="btn btn-primary"><a style="color: white;" href="{{ url('employeeprofile',$data->id)}}">View Profile</a></button>
                            </ul>
                            <img src="/employeeimage/{{$data->image}}" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>{{$data->fname}} {{$data->lname}}</h4>
                            <span>{{$data->email}}</span>
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