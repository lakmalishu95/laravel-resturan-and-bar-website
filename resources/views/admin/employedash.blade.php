<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajun-staffing-Employees-details</title>
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
                    <ul class="navbar-nav w-100">

              <li class="nav-item w-50">
                <form method="GET" action="{{url('/searchemployee')}}"  class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                   @csrf
                  <input style="color: white;" type="text" name="search" class="form-control" placeholder="Search Employee by first name">
                  <button type="submit" class="btn btn-primary">search</button>
                </form>
                
              </li>
             
            </ul>
                      <div class="row ">
                        <div class="col-12 grid-margin">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Employee have Registered </h4><hr>
                              <div class="table-responsive">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th> First Name </th>
                                      <th>Last Name </th>
                                      <th> Email </th>
                                      <th> Industry and Job </th>
                                      <th>Accommodation </th>
                                      <th> Licenses </th>
                                      <th> Age </th>
                                      <th>work history </th>
                                      <th> Location </th>
                                      <th> Referances </th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($data as $data)
                                    <tr>
                                   
                                      <td>  {{$data->fname}} </td>
                                      <td>  {{$data->lname}}</td>
                                      <td>  {{$data->email}} </td>
                                      <td>  {{$data->emp_j}}</td>
                                      <td>  {{$data->emp_a}} </td>
                                      <td>  {{$data->emp_licen}} </td>
                                      <td>  {{$data->emp_age}}</td>                                      
                                      <td>  {{$data->emp_d1}} </td>
                                      <td>  {{$data->emp_location}} </td>
                                      <td>  {{$data->emp_referances}}</td>
                                      
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
                      <div class="row">
                        <div class="col-md-12 col-xl-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex flex-row justify-content-between">
                                <h4 class="card-title">Reviews</h4>
                                <p class="text-muted mb-1 small">View all</p>
                              </div>
                              <div class="preview-list">
                                <div class="preview-item border-bottom">
                                  <div class="preview-thumbnail">
                                    <img src="admin/assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                                  </div>
                                  <div class="preview-item-content d-flex flex-grow">
                                    <div class="flex-grow">
                                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                        <h6 class="preview-subject">Leonard</h6>
                                        <p class="text-muted text-small">5 minutes ago</p>
                                      </div>
                                      <p class="text-muted">Well, it seems to be working now.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="preview-item border-bottom">
                                  <div class="preview-thumbnail">
                                    <img src="admin/assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                                  </div>
                                  <div class="preview-item-content d-flex flex-grow">
                                    <div class="flex-grow">
                                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                        <h6 class="preview-subject">Luella Mills</h6>
                                        <p class="text-muted text-small">10 Minutes Ago</p>
                                      </div>
                                      <p class="text-muted">Well, it seems to be working now.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="preview-item border-bottom">
                                  <div class="preview-thumbnail">
                                    <img src="admin/assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                                  </div>
                                  <div class="preview-item-content d-flex flex-grow">
                                    <div class="flex-grow">
                                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                        <h6 class="preview-subject">Ethel Kelly</h6>
                                        <p class="text-muted text-small">2 Hours Ago</p>
                                      </div>
                                      <p class="text-muted">Please review the tickets</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="preview-item border-bottom">
                                  <div class="preview-thumbnail">
                                    <img src="admin/assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                                  </div>
                                  <div class="preview-item-content d-flex flex-grow">
                                    <div class="flex-grow">
                                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                        <h6 class="preview-subject">Herman May</h6>
                                        <p class="text-muted text-small">4 Hours Ago</p>
                                      </div>
                                      <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                                    </div>
                                  </div>
                                </div>
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