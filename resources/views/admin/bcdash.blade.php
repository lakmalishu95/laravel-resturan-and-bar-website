<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <div class="row ">
                  <div class="col-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Business Contact Details</h4>
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                            
                              <tr>
                                
                                <th> First Name </th>
                                <th> Last Name</th>
                                <th> Email </th>
                                <th> Business name </th>
                                <th> Business Category </th>
                                <th> Event or business </th>
                                <th> helpful today </th>
                                <th> Action </th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $data)
                              <tr>
                                <td>{{$data ->fname}}</td>
                                <td> {{$data ->lname}}</td>
                                <td> {{$data ->email}} </td>
                                <td> {{$data ->bname}} </td>
                                <td> {{$data ->category}}</td>
                                <td> {{$data ->eorc}}</td>
                                <td> {{$data ->helpful}}</td>
                                <td>
                                  <div class="badge badge-outline-success">Approved</div>
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

