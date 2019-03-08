@extends('layouts.app')

@section('content')



<!-- Side navigation -->
<div class="col">
 <div class="card-header text-center">General Info</div>
                    <div class="card-body">
                        <form method="POST" action="/file/update/general-info/{{$file->id}}">
                            {{ csrf_field()  }}
                            {{ method_field('POST') }}                        
                                <p>Named Insured:</p> 
                                <input type="text" value="{{$file->named_insured}}" name="named_insured" required><br>
                                <p>Additional Named Insured/DBA:</p>
                                <input type="text" value="{{$file->additional_ni}}" name="additional_ni"><br>
                                <p>Type of entitiy:</p>
                                <input type="text" value="{{$file->entity_type}}" name="entity_type" required><br>
                                <p>SSN:</p>
                                <input type="text" value="{{$file->ssn}}" name="ssn"><br>
                                <hr>
                                <!-- Mailing address -->
                                <p>Street name/number:</p>
                                <input type="text" value="{{$file->mailing_address_street_name_and_number}}" name="mailing_address_street_name_and_number" required><br>
                                <p>City:</p>
                                <input type="text" value="{{$file->mailing_address_city}}" name="mailing_address_city" required><br>
                                <p>ZIP code:</p>
                                <input type="text" value="{{$file->mailing_address_zip}}" name="mailing_address_zip" required><br>
                                <p>County:</p>
                                <input type="text" value="{{$file->mailing_address_county}}" name="mailing_address_county" required><br>
                                <p>State:</p>
                                <input type="text" value="{{$file->mailing_address_state}}" name="mailing_address_state" required><br>
                                <hr>
                                <!-- Location address -->
                                <p>Street name/number:</p>
                                <input type="text" value="{{$file->location_address_street_name_and_number}}" name="location_address_street_name_and_number" required><br>
                                <p>City:</p>
                                <input type="text" value="{{$file->location_address_city}}" name="location_address_city" required><br>
                                <p>ZIP code:</p>
                                <input type="text" value="{{$file->location_address_zip}}" name="location_address_zip" required><br>
                                <p>County:</p>
                                <input type="text" value="{{$file->location_address_county}}" name="location_address_county" required><br>
                                <p>State:</p>
                                <input type="text" value="{{$file->mailing_address_state}}" name="location_address_state" required><br>          
                                <br>
                            <button type="submit" class="btn btn-outline-secondary">Update</button>
                        </form>
                    </div>
                </div>
</div>

<!-- Page content -->
<div class="main">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">London</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<div id="test" class="tabcontent">
  <h3>Correspondence</h3>
  <p>London is the capital city of England.</p>
</div>
<div id="London" class="tabcontent">
  <h3>Submission</h3>
  <p>London is the capital city of England.</p>
</div>
<div id="Paris" class="tabcontent">
  <h3>Quote</h3>
  <p>Paris is the capital of France.</p> 
</div>
<div id="Tokyo" class="tabcontent">
  <h3>Binder</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
<div id="" class="tabcontent">
  <h3>Policy</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
<div id="test" class="tabcontent">
  <h3>Finance</h3>
  <p>London is the capital city of England.</p>
</div>
<div id="test" class="tabcontent">
  <h3>Support</h3>
  <p>London is the capital city of England.</p>
</div>
<div id="test" class="tabcontent">
  <h3>Log</h3>
  <p>London is the capital city of England.</p>
</div>
</div> 
      
            <div class="card">
                <div class="card-header text-center"><b>--  {{$file->named_insured}}  --</b></div>
                    <div class="card-body">
                        <div class="col-md-6">
                            <h5>Status: {{$file->status}}</h5>
                        </div>    
                            <hr>
                        <div class="col-md-6">                            
                            <h5>Underwriter:</h5>
                        </div>    
                            <hr>
                        <div class="col-md-6"> 
                            <h5>Agency: {{$file->agency_name}}</h5>
                        </div>
                            <hr>
                        <div class="col-md-6">
                            <h5>Agency status:</h5>
                        </div>                        
                            <hr>
                        <div class="col-md-6">                            
                            <h5>Effective date: {{$file->effective_date}}</h5>
                        </div>    
                        </div>
                    </div>     
</div>s
                    <br>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <form method="POST" action="/uploadImg" enctype="multipart/form-data">
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        @if (session('status'))
                            <div class="alert alert-success">
                        {{ session('status') }}
                            </div>
                        @endif
                         {!! csrf_field() !!}
                         <div class="form-group">
                         <label for="image">Choose an image</label>
                         <input type="file" id="image" name="image">
                         </div>
                         <button type="submit" class="btn btn-default">Upload</button>
                    </form>
                </div></div></div>
                </div>    
            <div class="card">
                <div class="card-header"></div>
                    <div class="card-body">                       
                        <p><a href="/notes/create/{{$file->id}}">Info/Notes</a></p>
                        <p>RW</p>
                        <p><a href="/rater/prepare/{{$file->id}}">Rate It</a></p>
                        <p><a href="/rating_worksheet/index/{{$file->id}}">View RWs</a></p>
                        <p><a href="/subs/show/{{$file->submission_id}}">Submission</a></p>                       
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




@extends('layouts.app')

<html>

<head>
  <meta charset="utf-8">

  <title>Home</title>
  <!-- Favicon -->
</head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./index.html">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/file/search">
              <i class="ni ni-planet text-blue"></i> Accounts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/subs/index">
              <i class="ni ni-pin-3 text-orange"></i> Submissions
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/prepemail">
              <i class="ni ni-single-02 text-yellow"></i> Email
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/tables.html">
              <i class="ni ni-bullet-list-67 text-red"></i> Follow Ups
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/stats/subs">
              <i class="ni ni-key-25 text-info"></i> Statistics
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/register.html">
              <i class="ni ni-circle-08 text-pink"></i> Profile
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Documentation</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
              <i class="ni ni-spaceship"></i> Getting started
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
              <i class="ni ni-palette"></i> Foundation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
              <i class="ni ni-ui-04"></i> Components
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Dashboard</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="./assets/img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h1 class="mb-0">Welcome, Master!</h1>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2019  <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>

</body>

</html>