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
        <div class="col-xl-14 mb-5 mb-xl-4">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="card-header">Email queue (not logged in system):</div>
          <div class="card-body">
            <form action="" method="">
            <table class="table">     
              <thead>
                <tr>
                  <th>
                  <label class="checkbox">
                    <input type="checkbox">
                  </label>
                  </th> 
                  <th><abbr title="Named_insured">Named Insured</abbr></th>s
                  <th><abbr title="">lob</abbr></th>
                  <th><abbr title="">Effective date</abbr></th>
                  <th><abbr title="">Aging date</abbr></th>                  
                  <th><abbr title="">State</abbr></th>
                  <th><abbr title="">Agency</abbr></th>
                  <th><abbr title="">Agent</abbr></th>
                  <th><abbr title="">Options</abbr></th>
                  <th><abbr title="">Created at</abbr></th>                  
                  <th><abbr title=""></abbr></th>                    
                  <th><abbr title=""></abbr></th>                  
                  <th><abbr title=""></abbr></th>
                </tr>
              </thead>
                @if($submission)
                  @foreach($submission as $sub)
                     @if($sub->status != 'not_logged')
                      <tr>
                        <td>
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
                          <p>1</p>
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
                          @if(isset($sub->created_at))
                            {{date('m/d/Y',strtotime($sub->created_at))}}
                          @endif  
                        </td>                        
                        <td>
                          <a class="btn btn-primary" href="/subs/search" role="button"><i class="fas fa-search-plus"></i></a> &nbsp;        
 
                        </td>   
                        <td>
                            <a class="btn btn-primary" href="/subs/show/{{$sub->id}}" role="button">Open</a> &nbsp;
                          </form>                            
                        </td>                                     
                        <td>
                            <a class="btn btn-primary" href="/file/create/{{$sub->id}}" role="button">Log</a> 
                        </td> 
                        <td>   
                            <form action="/subs/delete/{{ $sub->id }}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }} 
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash"></i></button>
                            </form>                                  
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



@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Email queue (not logged in system):</div>
          <div class="card-body">
            <form action="" method="">
            <table class="table">     
              <thead>
                <tr>
                  <th>
                  <label class="checkbox">
                    <input type="checkbox">
                  </label>
                  </th> 
                  <th><abbr title="Named_insured">Named Insured</abbr></th>s
                  <th><abbr title="">lob</abbr></th>
                  <th><abbr title="">Effective date</abbr></th>
                  <th><abbr title="">Aging date</abbr></th>                  
                  <th><abbr title="">State</abbr></th>
                  <th><abbr title="">Agency</abbr></th>
                  <th><abbr title="">Agent</abbr></th>
                  <th><abbr title="">Options</abbr></th>
                  <th><abbr title="">Created at</abbr></th>                  
                  <th><abbr title=""></abbr></th>                    
                  <th><abbr title=""></abbr></th>                  
                  <th><abbr title=""></abbr></th>
                </tr>
              </thead>
                @if($submission)
                  @foreach($submission as $sub)
                     @if($sub->status != 'not_logged')
                      <tr>
                        <td>
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
                          <p>1</p>
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
                          @if(isset($sub->created_at))
                            {{date('m/d/Y',strtotime($sub->created_at))}}
                          @endif  
                        </td>                        
                        <td>
                          <a class="btn btn-primary" href="/subs/search" role="button"><i class="fas fa-search-plus"></i></a> &nbsp;        
 
                        </td>   
                        <td>
                            <a class="btn btn-primary" href="/subs/show/{{$sub->id}}" role="button">Open</a> &nbsp;
                          </form>                            
                        </td>                                     
                        <td>
                            <a class="btn btn-primary" href="/file/create/{{$sub->id}}" role="button">Log</a> 
                        </td> 
                        <td>   
                            <form action="/subs/delete/{{ $sub->id }}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }} 
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash"></i></button>
                            </form>                                  
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
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">Effective date in next 7 days:</div>
          <div class="card-body">
            Total of {{$subsEffWithinNextWeek}}
          </div>
        </div>
      </div>  
    </div>  
    <hr>

@endsection
