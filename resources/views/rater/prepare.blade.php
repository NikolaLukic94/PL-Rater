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

                  <div class="col">         

                    <label class="label" for="type_of_coverage">

                      LOB

                    </label>

                  </div>

                  <div class="col">             

                      <select name="lob" class="col-md-4 form-group">

                        <option  value="{{$file->lob}}">{{$file->lob}}</option>               

                          @if($lob)

                            @for($i = 1; $i < count($lob); $i++)    

                           <option value="{{$i}}">{{$lob[$i]}}</option>

                          @endfor  

                        @endif              

                      </select>

                  </div>

                </div>

              </div>           

              <div class="field">

                <div class="row">

                  <div class="col">         

                    <label class="label" for="cov_a">

                    <p>Coverage A</p>

                    </label>

                  </div>

                  <div class="col">             

                    <input name="cov_a" type="text" value="{{$file->cov_a}}" class="input" id="cov_a">

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

                    <input name="other_structures" value="{{$file->other_structures}}" type="text" class="input" id="other_structures">

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

                    <input name="loss_of_use" type="text" value="{{$file->loss_of_use}}" class="input" id="loss_of_use">

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

                    <input name="med_pay" type="text" value="{{$file->med_pay}}" class="input" id="med_pay">

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

                    <input name="aop_ded" type="text" value="{{$file->aop_ded}}" class="input" id="aop_ded">

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

                    <input name="construction_type" value="{{$file->construction_type}}" type="text" class="input" id="construction_type">

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

                    <input name="protection_class" value="{{$file->protection_class}}" type="text" class="input" id="protection_class">

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

                    <input name="new_purchase" value="{{$file->new_purchase}}" type="text" class="input" id="new_purchase">

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

                    <input name="prior_carrier" value="{{$file->prior_carrier}}" type="text" class="input" id="prior_carrier">

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

                    <input name="prior_carrier_name" value="{{$file->prior_carrier_name}}" type="text" class="input" id="prior_carrier_name">

                  </div>

                </div>

              </div>

                    

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

                          <input name="inspection_fee" type="text" class="input" id="inspection_fee" required>

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

                          <input name="brokerage_fee" type="text" class="input" id="brokerage_fee" required>

                        </div>

                      </div>

                    </div>

                    <div class="field">

                      <div class="row">

                        <div class="col">

                          <label class="label" for="agency_fee">

                            Agency Fee

                          </label>

                        </div>

                        <div class="col">

                          <input name="agency_fee" type="text" class="input" id="agency_fee" required>

                        </div>

                      </div>

                    </div>            

                </div>

                <hr>

              </div>

          <div class="columns">

           <div class="column is-half is-offset-one-quarter">

            <div class="field is-grouped is-grouped-centered">

              <p class="control">

                <button type="button" href="/rater/update/rating-characteristics/{{$file->id}}" class="btn btn-outline-secondary">Update</button>

                <button type="button" href="/rater/rate/{{$file->id}}" class="btn btn-outline-secondary">Preview</button>

                <a class="btn btn-primary" href="/rater/rate/{{$file->id}}" role="button">Open</a>

              </p>

                @endif 

              @include('errors')

              </form>  
                </div>

              </div>
            </div>
          </div>
        </div>
        
        
    </div>

  </div>
  @include('/partials/footer')
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