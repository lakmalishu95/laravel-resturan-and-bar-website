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
          @include("admin.navbar")
          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Users Status</h4><hr style="background-color: gray;">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>                        
                          <th>  Name </th>
                          <th> Email </th>
                          <th>Password</th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $data)
                        <tr>
                          <td> {{$data->name}} </td>
                          <td>{{$data->email}}</td>
                          <td>{{$data->password}}</td>
                          @if($data->usertype=="0")
                          <td><a href="{{url('/deleteuser',$data->id)}}">
                            <div class="badge badge-outline-success">Delete</div></a>
                          </td>
                          @endif
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

        @include("admin.adminscript")


    </body>

    </html>

</body>

</html>