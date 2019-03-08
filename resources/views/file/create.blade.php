@extends('layouts.app')
@section('content')
<html>

<head>

</head>

<body>
        @include('/partials/sidebar')
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
        @include('/partials/top_nav')
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
                  
<form action="/file/create/{{$submission->id}}" method="POST">
                {{ csrf_field() }}
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                Effective date:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->effective_date}}" name="effective_date" required><br>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                Expiration_date:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->expiration_date}}" name="expiration_date">
                        </div>
                    </div>
                </div>
                <hr> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                Named Insured:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->named_insured}}" name="named_insured" required>
                        </div>
                    </div>
                </div>                
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                Additional Named Insured/DBA:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->additional_ni}}" name="additional_ni">
                        </div>
                    </div>
                </div>                       
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                Type of entitiy:
                            </label>
                        </div>
                        <div class="col">
                            <select name="type_of_entity" class="col-md-4 form-group">
                              <option  value="{{ $submission->type_of_entity }}">-- Select --</option>       
                                  @if($type_of_entity)
                                    @for($i = 1; $i <= count($type_of_entity); $i++)      
                                         <option value="{{$i}}">{{$type_of_entity[$i]}}</option>
                                    @endfor  
                                  @endif                             
                            </select> 
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                SSN:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->ssn}}" name="ssn"><br>
                        </div>
                    </div>
                </div>     
                <hr>
                <!-- Mailing address -->                
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                Street name/number:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->mailing_address_street_name_and_number}}" name="mailing_address_street_name_and_number" required>
                        </div>
                    </div>
                </div>                   
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                City:
                            </label>
                        </div>
                        <div class="col">
                             <input type="text" value="{{$submission->mailing_address_city}}" name="mailing_address_city" required>
                        </div>
                    </div>
                </div>  
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                               ZIP code:
                            </label>
                        </div>
                        <div class="col">
                             <input type="text" value="{{$submission->mailing_address_zip}}" name="mailing_address_zip" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                               County:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->mailing_address_county}}" name="mailing_address_county" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                               State:
                            </label>
                        </div>
                        <div class="col">
                            <select name="mailing_address_state" class="col-md-4 form-group">
                              <option  value="{{$submission->mailing_address_state}}"></option>       
                                  @if($state)
                                    @for($i = 1; $i < count($state); $i++)      
                                         <option value="{{$i}}">{{$state[$i]}}</option>
                                    @endfor  
                                  @endif                             
                            </select>  
                        </div>
                    </div>
                </div> 
                <hr>
                <!-- Location address -->
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                Street name/number:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->location_address_street_name_and_number}}" name="location_address_street_name_and_number" required>
                        </div>
                    </div>
                </div>                   
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                City:
                            </label>
                        </div>
                        <div class="col">
                             <input type="text" value="{{$submission->location_address_city}}" name="location_address_city" required>
                        </div>
                    </div>
                </div>  
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                               ZIP code:
                            </label>
                        </div>
                        <div class="col">
                             <input type="text" value="{{$submission->location_address_zip}}" name="location_address_zip" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                               County:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->location_address_county}}" name="location_address_county" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                               State:
                            </label>
                        </div>
                        <div class="col">
                            <select name="location_address_state" class="col-md-4 form-group">
                              <option  value="{{$submission->location_address_state}}"></option>       
                                  @if($state)
                                    @for($i = 1; $i < count($state); $i++)      
                                         <option value="{{$i}}">{{$state[$i]}}</option>
                                    @endfor  
                                  @endif                            
                            </select>   
                        </div>
                    </div>
                </div> 
                <hr>
                <button type="submit" class="btn btn-outline-secondary">Submit</button>
                </form>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        @include('/partials/footer')
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="theme_assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="theme_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="theme_assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="theme_assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="theme_assets/js/argon.js?v=1.0.0"></script>
</body>

</html>