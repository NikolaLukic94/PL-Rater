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
                  
<form action="/subs/create" method="POST">
        {{ csrf_field() }}
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="agent_name">
                Agent Name
              </label>
            </div>
            <div class="col">
              <input name="agent_name" type="text" class="input" id="agent_name" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="agency_name">
                Agency name
              </label>
            </div>
            <div class="col">             
              <input name="agency_name" type="text" class="input" id="agency_name" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="agent_email_address">
                Agent email address
              </label>
            </div>
            <div class="col"> 
              <input name="agent_email_address" type="email" class="input" id="agent_email_address" required>
            </div>  
          </div>
        </div>  
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="agent_phone_number">
                Agent phone number
              </label>
            </div>
            <div class="col">             
              <input name="agent_phone_number" type="text" class="input" id="agent_phone_number" required>
            </div>
          </div>
        </div>    
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="type_of_coverage">
                LOB
              </label>
            </div>
            <div class="col">             
              <select name="lob" class="col-md-4 form-group">
                  <option  value="">Select State</option>
                    @if($lob)
                      @for($i = 1; $i <= count($lob); $i++)   
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
              <label class="label" for="effective_date">
                Effective date
              </label>
            </div>
            <div class="col">             
              <input name="effective_date" type="date" class="input" id="effective_date">
            </div>
          </div>
        </div>  
        <p class="subtitle">Insured info</p>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="named_insured">
                Named Insured
              </label>
            </div>
            <div class="col">             
              <input name="named_insured" type="text" class="input" id="named_insured">
            </div>
          </div>
        </div>  
        <hr>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="mailing_address_street_name_and_number">
                Mailing address Street name/number
              </label>
            </div>
            <div class="col">             
              <input name="mailing_address_street_name_and_number" type="text" class="input" id="mailing_address_street_name_and_number" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="mailing_address_city">
                City
              </label>
            </div>
            <div class="col">             
              <input name="mailing_address_city" type="text" class="input" id="mailing_address_city" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="mailing_address_county">
                County
              </label>
            </div>
            <div class="col">             
              <input name="mailing_address_county" type="text" class="input" id="mailing_address_county">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="mailing_address_zip">
                Zip Code
              </label>
            </div>
            <div class="col">             
              <input name="mailing_address_zip" type="text" class="input" id="mailing_address_zip">
            </div>
          </div>
        </div>        
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="mailing_address_state">
                State
              </label>
            </div>
            <div class="col">             
              <div class="col">             
                <select name="mailing_address_state" class="col-md-4 form-group">
                    <option  value="">Select State</option>
                    @if($state)
                      @for($i = 1; $i <= count($state); $i++)   
                     <option value="{{$i}}">{{$state[$i]}}</option>
                  @endfor  
                  @endif                
                </select>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="street_name_and_number">
                Street name/number
              </label>
            </div>
            <div class="col">             
              <input name="street_name_and_number" type="text" class="input" id="street_name_and_number" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="city">
                City
              </label>
            </div>
            <div class="col">             
              <input name="city" type="text" class="input" id="city" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="county">
                County
              </label>
            </div>
            <div class="col">             
              <input name="county" type="text" class="input" id="county">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="location_address_zip">
                Zip Code
              </label>
            </div>
            <div class="col">             
              <input name="location_address_zip" type="text" class="input" id="location_address_zip">
            </div>
          </div>
        </div>          
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="state">
                State
              </label>
            </div>
            <div class="col">             
              <div class="col">             
                <select name="state" class="col-md-4 form-group"> 
                    <option  value="">Select State</option>
                    @if($state)
                      @for($i = 1; $i <= count($state); $i++)   
                     <option value="{{$i}}">{{$state[$i]}}</option>
                  @endfor  
                  @endif                            
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="phone_number">
                Phone number
              </label>
            </div>
            <div class="col">             
              <input name="phone_number" type="text" class="input" id="phone_number">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="email_address">
                Email Address
              </label>
            </div>
            <div class="col">             
              <input name="email_address" type="text" class="input" id="email_address">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="cov_a">
                Coverage A
              </label>
            </div>
            <div class="col">             
              <input name="cov_a" type="text" class="input" id="cov_a" required>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="other_structures">
                Other Structures
              </label>
            </div>
            <div class="col">             
              <input name="other_structures" type="text" class="input"bid="other_structures">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="loss_of_use">
                Loss Of Use
              </label>
            </div>
            <div class="col">             
              <input name="loss_of_use" type="text" class="input" id="loss_of_use">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="med_pay">
                Med Pay
              </label>
            </div>
            <div class="col">             
              <div class="col">             
                <select name="med_pay" class="col-md-4 form-group">
                    <option  value="">Select Med Pay</option>
                    @if($med_pay)
                      @for($i = 1; $i <= count($med_pay); $i++)   
                     <option value="{{$i}}">{{$med_pay[$i]}}</option>
                  @endfor  
                  @endif              
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="aop_ded">
                AOP Deductible
              </label>
            </div>
            <div class="col">             
              <div class="col">             
                <select name="aop_ded" class="col-md-4 form-group">
                    <option  value="">Select AOP</option>                 
                    @if($aop)
                      @for($i = 1; $i <= count($aop); $i++)   
                     <option value="{{$i}}">{{$aop[$i]}}</option>
                  @endfor  
                  @endif
                </select>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="construction_type">
                Construction type
              </label>
            </div>
            <div class="col">             
              <select name="construction_type" class="col-md-4 form-group">
                  <option  value="">Select Construction Type</option>
                  @if($constr_type)
                    @for($i = 1; $i <= count($constr_type); $i++)   
                   <option value="{{$i}}">{{$constr_type[$i]}}</option>
                @endfor  
                @endif
              </select>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="protection_class">
                Protection class
              </label>
            </div>
            <div class="col">             
              <select name="protection_class" class="col-md-4 form-group">
                  <option  value="">Select PC</option>
                  @if($pc)
                    @for($i = 1; $i <= count($pc); $i++)    
                   <option value="{{$i}}">{{$pc[$i]}}</option>
                @endfor  
                @endif
              </select>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="new_purchase">
                New purchase
              </label>
            </div>
            <div class="col">             
              <select name="new_purchase" class="col-md-4 form-group">
                <option  value="">Select answer</option>                
                    @if($yes_no)
                      @for($i = 1; $i <= count($yes_no); $i++)    
                     <option value="{{$i}}">{{$yes_no[$i]}}</option>
                  @endfor  
                  @endif
              </select>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="prior_carrier">
                Prior carrier
              </label>
            </div>
            <div class="col">             
              <select name="prior_carrier" class="col-md-4 form-group">
                <option  value="">Select answer</option>                  
                    @if($yes_no)
                      @for($i = 1; $i <= count($yes_no); $i++)    
                     <option value="{{$i}}">{{$yes_no[$i]}}</option>
                  @endfor  
                  @endif
              </select>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="prior_carrier_name">
                Prior carrier's name
              </label>
            </div>
            <div class="col">             
              <input name="prior_carrier_name" type="text" class="input" id="prior_carrier_name">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">         
              <label class="label" for="prior_carrier_effective_date">
                Prior carrier eff date
              </label>
            </div>
            <div class="col">             
              <input name="prior_carrier_effective_date" type="date" class="input" id="prior_carrier_effective_date">
            </div>
          </div>
        </div>
        <hr>
        <div class="block">
                    <button type="submit" class="btn btn-outline-secondary">Send</button>
        </div>
    </div>
        <div class="block">
          <div class="notification">
            <hfsr>
            <div class="delete"></div>
              <p class="text-center">For more accurate pricing, please provide us with all information available!</p>
          </div>
          <hr>
        </div>
          <div class="columns">
           <div class="column is-half is-offset-one-quarter">
        <div class="field is-grouped is-grouped-centered">

          @include('errors')
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