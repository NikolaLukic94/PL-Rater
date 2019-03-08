@extends('layouts.app')

@section('content')
<!--
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><b>Submissions (existing in system):</b></div>
          <div class="card-body">
            <form action="/search/results" method="POST">
              {{ csrf_field() }}
                <table class="table">     
                  <thead>
                    <tr>
                      <th>
                        <label class="checkbox">
                          <input type="checkbox">
                        </label>
                      </th> 
                      <th><abbr title="Named_insured">Named Insured</abbr></th>
                      <th><abbr title="">lob</abbr></th>
                      <th><abbr title="">Effective date</abbr></th>
                      <th><abbr title="">State</abbr></th>
                      <th><abbr title="">Agency</abbr></th>
                      <th><abbr title="">Agent</abbr></th>
                      <th><abbr title=""></abbr></th>
                      <th><abbr title=""></abbr></th>  
                      <th><abbr title=""></abbr></th>                                          
                    </tr>
                  </thead>
                    @if($submissions)
                      @foreach($submissions as $sub)
                        @if($sub->status != 'not_logged')
                          <tr>
                            <td>
                              <label class="checkbox">
                                <input type="checkbox">
                              </label>
                            </td>
                            <td>
                              {{ $sub->named_insured }}
                            </td>
                            <td>
                              {{ $sub->lob }}
                            </td>
                            <td>
                              {{ $sub->effective_date }}
                            </td>
                            <td>
                              {{ $sub->location_address_state }}
                            </td>
                            <td>
                              {{ $sub->agency_name }}
                            </td>
                            <td>
                              {{ $sub->agent_name }}
                            </td>
                            <td>
                              <a class="btn btn-primary" href="/file/show/{{$sub->id}}" role="button">Open</a> &nbsp;         
                            </td> 
                            <td>
                              <a class="btn btn-primary" href="/subs/search" role="button">Add new</a> &nbsp;
                            </td>   
                            <td>
                              <a class="btn btn-primary" href="" role="button">Rate</a> &nbsp;
                            </td>                                                        
                          </tr>
                            @endif
                          @endforeach
                        @else
                      <p>There are no new emails!</p>
                    @endif
                  </div>
                </div>
          </form> 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection






@extends('layouts.app')
@section('content')-->
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
        <div class="col-xl-10 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <form class="search-form search-form-basic" action="/subs/search/results" method="post">
                      {{ csrf_field() }}
                        <div class="form-row">        
                          <div class="col-md-4 form-group">
                            <label for="search_named_insured">Named Insured:</label>
                            <input type="text"  name="search_named_insured" id="search_named_insured" class="form-control input-sm" @if(isset(Session::get('inputs')['search_named_insured'])) value="{{ Session::get('inputs')['search_named_insured'] }}" @endif>
                          </div> 
                          <div class="col-md-4 form-group">
                            <label for="test">Test:</label>
                            <input type="text" name="test" id="test" class="form-control input-sm" @if(isset(Session::get('inputs')['test'])) value="{{ Session::get('inputs')['test'] }}" @endif>
                          </div> 
                          <div class="col-md-4 form-group">
                            <label for="search_lob">LOB:</label>
                            <input type="text" name="search_lob" id="search_lob" class="form-control input-sm" placeholder="" @if(isset(Session::get('inputs')['search_lob'])) value="{{ Session::get('inputs')['search_lob'] }}" @endif>
                          </div>  
                          <div class="col-md-4 form-group">
                            <label for="search_effective_date">Effective_date:</label>
                            <input type="date" name="search_effective_date" id="search_effective_date" class="form-control input-sm" 
                             @if(isset(Session::get('inputs')['search_effective_date'])) value="{{ Session::get('inputs')['search_effective_date'] }}" @endif>
                          </div> 
                          <div class="col-md-4 form-group">
                            <label for="search_agency_name">Agency:</label>
                            <input type="text" name="search_agency_name" id="search_agency_name" class="form-control input-sm" 
                             @if(isset(Session::get('inputs')['search_agency_name'])) value="{{ Session::get('inputs')['search_agency_name'] }}" @endif>
                          </div> 
                          <div class="col-md-4 form-group">
                            <label for="search_agent_name">Agency:</label>
                            <input type="text" name="search_agent_name" id="search_agent_name" class="form-control input-sm" 
                             @if(isset(Session::get('inputs')['search_agent_name'])) value="{{ Session::get('inputs')['search_agent_name'] }}" @endif>
                          </div>                 
                          <select name="options" class="col-md-4 form-group">
                           <option value="">--- State ---</option>
                            <option  value="LA">LA</option>
                            <option  value="FL">FL</option>
                            <option  value="CA">CA</option>
                            <option  value="TX">TX</option>          
                            <option  value="MS">MS</option>
                          </select>
                          <div class="col-md-4 form-group">
                            <label for="search_from_date">From:</label>
                            <input type="date" name="search_from_date" id="search_from_date" class="form-control input-sm" 
                             @if(isset(Session::get('inputs')['search_from_date'])) value="{{ Session::get('inputs')['search_from_date'] }}" @endif>
                          </div> 
                          <div class="col-md-4 form-group">
                            <label for="search_to_date">To:</label>
                            <input type="date" name="search_to_date" id="search_to_date" class="form-control input-sm" 
                             @if(isset(Session::get('inputs')['search_to_date'])) value="{{ Session::get('inputs')['search_to_date'] }}" @endif>
                          </div>  
                        </div>
                        <div class="form-row">
                          <div class="col-md-12 col-lg-12">
                            <button type="submit" href="/subs/search/results" class="btn btn-custom"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
                            <a href="/users" class="btn btn-custom"><i class="fa fa-times-circle" aria-hidden="true"></i>Clear</a>
                          </div>
                        </div>
                      </form>

                </div>
              </div>
            </div>
          </div>
        </div>
        
<form action="/search/results" method="POST">
              {{ csrf_field() }}
                <table class="table">     
                  <thead>
                    <tr>
                      <th>
                        <label class="checkbox">
                          <input type="checkbox">
                        </label>
                      </th> 
                      <th><abbr title="Named_insured">Named Insured</abbr></th>
                      <th><abbr title="">lob</abbr></th>
                      <th><abbr title="">Effective date</abbr></th>
                      <th><abbr title="">State</abbr></th>
                      <th><abbr title="">Agency</abbr></th>
                      <th><abbr title="">Agent</abbr></th>
                      <th><abbr title=""></abbr></th>
                      <th><abbr title=""></abbr></th>  
                      <th><abbr title=""></abbr></th>                                          
                    </tr>
                  </thead>
                    @if($submissions)
                      @foreach($submissions as $sub)
                        @if($sub->status != 'not_logged')
                          <tr>
                            <td>
                              <label class="checkbox">
                                <input type="checkbox">
                              </label>
                            </td>
                            <td>
                              {{ $sub->named_insured }}
                            </td>
                            <td>
                              {{ $sub->lob }}
                            </td>
                            <td>
                              {{ $sub->effective_date }}
                            </td>
                            <td>
                              {{ $sub->location_address_state }}
                            </td>
                            <td>
                              {{ $sub->agency_name }}
                            </td>
                            <td>
                              {{ $sub->agent_name }}
                            </td>
                            <td>
                              <a class="btn btn-primary" href="/file/show/{{$sub->id}}" role="button">Open</a> &nbsp;         
                            </td> 
                            <td>
                              <a class="btn btn-primary" href="/subs/search" role="button">Add new</a> &nbsp;
                            </td>   
                            <td>
                              <a class="btn btn-primary" href="" role="button">Rate</a> &nbsp;
                            </td>                                                        
                          </tr>
                            @endif
                          @endforeach
                        @else
                      <p>There are no new emails!</p>
                    @endif
                  </div>
                </div>
          </form> 


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