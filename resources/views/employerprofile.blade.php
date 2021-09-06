<!DOCTYPE html>
<html lang="en">

    <head>
        <base href="/public">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

        <title>Employee Profile</title>

        <!-- Additional CSS Files -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
        <link rel="stylesheet" href="assets/css/owl-carousel.css">
        <link rel="stylesheet" href="assets/css/lightbox.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    </head>

    <body >

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

        <div class="section" id="chefs"  >
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 text-center">
                        <div class="section-heading">
                            <h6></h6>
                            <h2 style="background-color: red;">{{$data->fname}}&nbsp; -> DETAILS</h2><hr>
                        </div>
                    </div>
                </div>
        
                <button class="btn btn-primary"><a style="color: white;" href="{{ url('/employers')}}"> <-Employees</a></button><br><br>
                
                <div class="row" style="padding-bottom: 50px;"> 
                    <div class="col-lg-6">
                        <div class="chef-item">
                            <div class="thumb">                      
                                <img src= "/bcimage/{{$data->image}}"  alt="employee profile image">
                            </div>
                            <div class="down-content">
                                <h4>Reviews ></h4><br>
                                @foreach($data1 as $data1)
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-primary" > {{$data1->review}}</li> 
                                </ul><br>
                                @endforeach                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 style="color: blue;">Name : {{$data->fname}} {{$data->lname}}  </h5><br>                                              
                        <h5>Business name : {{$data->bname}}  </h5><br>
                        <h5 style="color: blue;">Location : {{$data->location}} </h5><br>  
                        <h5>Email : {{$data->email}}  </h5><br>
                        
                        @csrf
                        <div class="form-group">        
                            @if(session()->has('message1'))
                                <div style="background-color:#f84e4e;" class="alert alert-dark">
                                    <button type="button" class="close" data-dismiss="alert"></button>
                                    {{session()->get('message1')}}
                                </div>
                            @endif
                        </div>
                        @csrf
                        <div class="form-group">        
                            @if(session()->has('message2'))
                                <div style="background-color: greenyellow;"" class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert"></button>
                                    {{session()->get('message2')}}
                                </div>
                            @endif
                        </div>
                        <form style="margin-left: 0px;"  action="{{url('/employerrev',$data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf    
                                    <label for="">Add review -></label>                       
                                    <div class="form-outline">
                                        <textarea name="review" class="form-control"  id="textAreaExample3" rows="2"></textarea>                                   
                                    </div>
                                    <button style="margin-top: 5px; width:150px; float:right;" type="submit" id="form-submit" class="btn btn-secondary">Add</button>
                        </form>  
                    </div>                     
                </div>
            </div>
        </div >

    

        @include('footer')

    </body>

</html>
