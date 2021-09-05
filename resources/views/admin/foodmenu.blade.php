<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajun-staffing-Foods-details</title>
    <link rel="shortcut icon" href="assets/images/logo-new-removebg-preview (1).png" >
</head>

<body>
    <x-app-layout>
    </x-app-layout>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include("admin.admincss")
    </head>

<body>
        <div class="container-scroller">
        @include('admin.sidebar')
        @include("admin.navbar")
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add to food item</h4><hr style="background-color: gray;"><br>

                                    <form  action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                    
                                        <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
                                            <div class="col-sm-9">
                                            <input style="background-color:aqua; color:black;" type="text" name="title" class="form-control"  placeholder="write a title" required>
                                            </div>
                                        </div>                  
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Price</label>
                                            <div class="col-sm-9">
                                            <input style="background-color:aqua; color:black;" type="text" class="form-control" name="price" placeholder="write a Price" required>
                                            </div>
                                        </div>                   
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Image</label>
                                            <div class="col-sm-9">
                                            <input style="background-color:aqua; color:black;" type="file" class="form-control" name="image" placeholder="input image" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Discription</label>
                                            <div class="col-sm-9">
                                            <input style="background-color:aqua; color:black;" type="text" class="form-control" name="description" placeholder="write a Discription" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-secondary mr-2">Submit</button>
                                        <button  class="btn btn-warning" ><a href="{{url('/foodmenu')}}">Cancel</a></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <ul class="navbar-nav w-100">
                    <li class="nav-item w-50">
                        <form method="GET" action="{{url('/searchfood')}}"  class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                        @csrf
                        <input style="color: white;" type="text" name="search" class="form-control" placeholder="Search by food item name">
                        <button type="submit" class="btn btn-primary">search</button>
                        </form>
                
                    </li>
                    </ul>
                    <div class="row ">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Food Items</h3><hr style="background-color: gray;">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>                              
                                                        <th> Food Name </th>
                                                        <th> Price </th>
                                                        <th> Description </th>
                                                        <th> image </th>
                                                        <th> Action Delete </th>
                                                        <th> Action Edit </th>                              
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($data as $data)     
                                                    <tr>  
                                                                                
                                                        <td> {{$data ->title}} </td>
                                                        <td> {{$data ->price}}</td>
                                                        <td> {{$data ->description}} </td>
                                                        <td>
                                                            <img src="/foodimage/{{$data->image}}" alt="image" />   
                                                        </td>
                                                        <td>
                                                        <div  class="badge badge-outline-danger"><a href="{{url('/deletemenu',$data->id)}}"> Delete</a> </div>
                                                        </td>
                                                        <td>
                                                        <div class="badge badge-outline-success"><a href="{{url('/updateview',$data->id)}}">Update</a></div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include("admin.adminscript")

</body>

</html>