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
                  
  
@if(isset($file))
<form action="/file/rate/prepare/rw" method="POST">
                {{ csrf_field() }} 
              <div class="field">
                <div class="row">
                  <div class="col-5">         
                    <label class="label" for="type_of_coverage">
                      LOB
                    </label>
                  </div>
                  <div class="col-5">             
                    <label class="label" for="type_of_coverage">
                      {{$file->lob}}
                    </label>
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->lob}}
                    </label>
                  </div>                  
                </div>
              </div>           
              <div class="field">
                <div class="row">
                  <div class="col-5">         
                    <label class="label" for="cov_a">
                    <p>Coverage A</p>
                    </label>
                  </div>
                  <div class="col-5">             
                    <label class="label" for="cov_a">
                      {{$file->cov_a}}
                    </label>
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->cov_a}}
                    </label>
                  </div>                  
                </div>
              </div>
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="other_structures">
                    <p>Other Structures</p>
                    </label>
                  </div>
                  <div class="col">             
                    <label class="label" for="other_structures">
                      {{$file->other_structures}}
                    </label>
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->other_structures}}
                    </label>
                  </div>                  
                </div>
              </div>
                <div class="field">
                  <div class="row">
                    <div class="col">         
                      <label class="label" for="loss_of_use">
                      <p>Loss of Use</p>
                      </label>
                    </div>
                    <div class="col">      
                      <label class="label" for="loss_of_use">
                        {{$file->loss_of_use}}
                      </label>                           
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->loss_of_use}}
                      </label>
                    </div>                  
                  </div>
                </div>
                <div class="field">
                  <div class="row">
                    <div class="col">         
                      <label class="label" for="med_pay">
                      <p>Med Pay</p>
                      </label>
                    </div>
                    <div class="col">             
                      <label class="label" for="type_of_coverage">
                        {{$file->med_pay}}
                      </label>                    
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->med_pay}}
                      </label>
                    </div>                  
                  </div>
                </div>
                <div class="field">
                  <div class="row">
                    <div class="col">         
                      <label class="label" for="aop_ded">
                      <p>AOP Deductible</p>
                      </label>
                    </div>
                    <div class="col">             
                      <label class="label" for="type_of_coverage">
                        {{$file->aop_ded}}
                      </label>                     
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->aop_ded}}
                      </label>
                    </div>                  
                  </div>
                </div>
                <hr>
                <div class="field">
                  <div class="row">
                    <div class="col">         
                      <label class="label" for="construction_type">
                      <p>Construction type</p>
                      </label>
                    </div>
                    <div class="col">             
                      <label class="label" for="type_of_coverage">
                        @if($rater->contruction_type = 'jm')
                          Joisted Masonry
                        @elseif($rater->contruction_type = 'bv')
                          Brick Veneer
                        @elseif($rater->contruction_type = 'masonry')
                          Masonry
                        @elseif($rater->contruction_type = 'frame')
                          Frame                        
                        @endif
                      </label>                    
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->construction_type}}
                      </label>
                    </div>                  
                  </div>
                </div>
                <div class="field">
                  <div class="row">
                    <div class="col">         
                      <label class="label" for="protection_class">
                      <p>PC</p>
                      </label>
                    </div>
                    <div class="col">             
                      <label class="label" for="type_of_coverage">
                        {{$file->protection_class}}
                      </label>                    
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                         {{$rater->protection_class}}
                      </label>
                    </div>                  
                  </div>
                </div>
                <div class="field">
                  <div class="row">
                    <div class="col">         
                      <label class="label" for="new_purchase">
                      <p>New purchase?</p>
                      </label>
                    </div>
                    <div class="col">             
                      <label class="label" for="type_of_coverage">
                        @if($rater->new_purchase = '1')
                          Yes
                        @else
                          No                      
                        @endif
                      </label>                    
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->new_purchase}}
                      </label>
                    </div>                  
                  </div>
                </div>
                <div class="field">
                  <div class="row">
                    <div class="col">         
                      <label class="label" for="prior_carrier">
                      <p>Prior carrier?</p>
                      </label>
                    </div>
                    <div class="col">             
                      <label class="label" for="type_of_coverage">
                        @if($rater->prior_carrier = '1')
                          Yes
                        @else
                          No                      
                        @endif
                      </label>                    
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->prior_carrier}}
                      </label>
                    </div>                  
                  </div>
                </div>
                <div class="field">
                  <div class="row">
                    <div class="col">         
                      <label class="label" for="prior_carrier_name">
                      <p>Prior carrier - name</p>
                      </label>
                    </div>
                    <div class="col">             
                      <label class="label" for="type_of_coverage">
                        {{$file->prior_carrier_name}}
                      </label>                    
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->prior_carrier_name}}
                      </label>
                    </div>                  
                  </div>
                </div>
                  @endif    
                <div class="block">
                  <div class="notification">
                    <hr>
                      <div class="field">
                        <div class="row">
                          <div class="col">
                            <label class="label" for="inspection_fee">
                              Inspection Fee
                            </label>
                          </div>
                          <div class="col">
                            <label class="label" for="inspection_fee">
                              Inspection Fee
                            </label>                          
                          </div>
                        </div>
                      </div>
                      <div class="field">
                        <div class="row">
                          <div class="col">
                            <label class="label" for="brokerage_fee">
                              Brokerage Fee
                            </label>
                          </div>
                          <div class="col">
                            <label class="label" for="inspection_fee">
                              Inspection Fee
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="field">
                        <div class="row">
                          <div class="col">
                            <label class="label" for="agency_fee">
                              WIP
                            </label>
                          </div>
                          <div class="col">
                            <label class="label" for="inspection_fee">
                              Inspection Fee
                            </label>
                          </div>
                        </div>
                      </div>            
                  </div>
                  <hr>
                      <div class="field">
                        <div class="row">
                          <div class="col">
                            <label class="label" for="agency_fee">
                              Premium
                            </label>
                          </div>
                          <div class="col">
                            <label class="label" for="inspection_fee">
                              {{$premium->grand_premium}}
                            </label>
                          </div>
                        </div>
                      </div> 
                      <div class="field">
                        <div class="row">
                          <div class="col">
                            <label class="label" for="agency_fee">
                              SL Tax Fee
                            </label>
                          </div>
                          <div class="col">
                            <label class="label" for="inspection_fee">
                              {{$premium->surplus_lines_tax_fee}}
                            </label>
                          </div>
                        </div>
                      </div> 
                      <div class="field">
                        <div class="row">
                          <div class="col">
                            <label class="label" for="agency_fee">
                              EMPA
                            </label>
                          </div>
                          <div class="col">
                            <label class="label" for="inspection_fee">
                              {{$premium->empa}}
                            </label>
                          </div>
                        </div>
                      </div>                                         
                </div>
                <br>
                <hr>
                <br>
            <div class="columns">
             <div class="column is-half is-offset-one-quarter">
              <div class="field is-grouped is-grouped-centered">
                <p class="control">
                  <button type="button" href="/rater/rate/rw/{{$file->id}}/{{$rater->id}}" class="btn btn-outline-secondary">Save as Word</button>&nbsp;
                  <button type="button" href="/rating-worksheet/store/{{$file->id}}/{{$rater->id}}" class="btn btn-outline-secondary">Add to file RWs</button>&nbsp;                  
                  <a class="btn btn-primary" href="/rating-worksheet/store/{{$file->id}}/{{$rater->id}}" role="button">Save to File</a>         
                  <button type="button" class="btn btn-outline-secondary">Email to Agent</button>
                  <a class="btn btn-primary" href="/rater/rate/rw/{{$file->id}}/{{$rater->id}}" role="button">Decline</a>                 
                </p>
                @include('errors')
              </form>        
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

