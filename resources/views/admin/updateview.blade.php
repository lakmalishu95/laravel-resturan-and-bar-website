<x-app-layout>
</x-app-layout>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajun-staffing-Users</title>
    <link rel="shortcut icon" href="assets/images/logo-new-removebg-preview (1).png" />
    <base href="/public">
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
                                    <h4 class="card-title">Update to food item</h4>
                                    <hr style="background-color: gray;">
                                    <form  action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                
                                        <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
                                            <div class="col-sm-9">
                                                <input style="color: red;" type="text" name="title" class="form-control"  value="{{$data->title}}" required>
                                            </div>
                                        </div>                  
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input style="color: red;" type="text" class="form-control" name="price" value="{{$data->price}}" required>
                                            </div>
                                        </div>                   
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">old Image</label>
                                            <div class="col-sm-9">
                                                <img  style="height: 200 width=300" src="/foodimage/{{$data->image}}" alt="">                                                       
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">new Image</label>
                                            <div class="col-sm-9">
                                                <input style="color: white;" type="file" class="form-control" name="image" value="{{$data->image}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Discription</label>
                                            <div class="col-sm-9">
                                                <input style="color: red;" type="text" class="form-control" name="description" value="{{$data->description}}" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-secondary mr-2">Submit</button>
                                        <button  class="btn btn-warning" ><a href="{{url('/foodmenu')}}">Cancel</a></button>
                                    </form>
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