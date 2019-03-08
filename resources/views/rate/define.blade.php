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
                  
		<form action="/rate/define" method="POST">
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
							  <option  value="">Select LOB</option>								
							  	  @if($lob)
							  	  	@for($i = 1; $i < count($lob); $i++)		
								 		 <option value="{{$i}}">{{$lob[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>
						</div>
					</div>
				</div>
				<hr>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="cov_a">
								Coverage A rate
							</label>
						</div>
						<div class="col">							
							<select name="cov_a" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>
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
							<select name="other_structures" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>							
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
							<select name="loss_of_use" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>							
						</div>
					</div>
				</div>
				<hr>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="med_pay_1000">
								Med Pay of 1k
							</label>
						</div>
						<div class="col">							
							<select name="med_pay" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>						
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="med_pay_1000">
								Med Pay of 2.5k
							</label>
						</div>
						<div class="col">							
							<select name="med_pay_1000" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>							
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="med_pay_5000">
								Med Pay of 5k
							</label>
						</div>
						<div class="col">							
							<select name="med_pay_5000" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>	
						</div>
					</div>
				</div>
				<hr>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="aop_ded_1">
								AOP Deductible 1%
							</label>
						</div>
						<div class="col">							
							<select name="aop_ded_1" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>	
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="aop_ded_2">
								AOP Deductible 2%
							</label>
						</div>
						<div class="col">							
							<select name="aop_ded_2" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>	
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="aop_ded_3">
								AOP Deductible 3%
							</label>
						</div>
						<div class="col">							
							<select name="aop_ded_3" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>	
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="aop_ded_4">
								AOP Deductible 4%
							</label>
						</div>
						<div class="col">							
							<select name="aop_ded_4" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>	
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="aop_ded_5">
								AOP Deductible 5%
							</label>
						</div>
						<div class="col">							
							<select name="aop_ded_5" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>
						</div>
					</div>
				</div>			
				<hr>
				<h>Construction type</h>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="frame">
								Frame
							</label>
						</div>
						<div class="col">							
							<select name="frame" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>							
						</div>
					</div>
				</div>	
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="jm">
								JM
							</label>
						</div>
						<div class="col">							
							<select name="jm" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>
						</div>
					</div>
				</div>	
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="bv">
								BV
							</label>
						</div>
						<div class="col">							
							<select name="bv" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>
						</div>
					</div>
				</div>	
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="masonry">
								Masonry
							</label>
						</div>
						<div class="col">							
							<select name="masonry" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>
						</div>
					</div>
				</div>
				<hr>
				<p>Protection class</p>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="protection_class_1">
								Protection class 1
							</label>
						</div>
						<div class="col">							
							<select name="protection_class_1" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>							
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="protection_class_2">
								Protection class 2
							</label>
						</div>
						<div class="col">							
							<select name="protection_class_2" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>	
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="protection_class_3">
								Protection class 3
							</label>
						</div>
						<div class="col">							
							<select name="protection_class_3" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>	
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="protection_class_4">
								Protection class 4
							</label>
						</div>
						<div class="col">							
							<select name="protection_class_4" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>	
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="protection_class_5">
								Protection class 5
							</label>
						</div>
						<div class="col">							
							<select name="protection_class_5" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>	
						</div>
					</div>
				</div>			

				<hr>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="new_purchase">
								New purchase
							</label>
						</div>
						<div class="col">							
							<select name="new_purchase" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
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
								Prior carrier - no losses
							</label>
						</div>
						<div class="col">							
							<select name="prior_carrier" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
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
								0-2 losses in last 5 years
							</label>
						</div>
						<div class="col">							
							<select name="zero_two_losses" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
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
								2+ losses in last 5 years
							</label>
						</div>
						<div class="col">							
							<select name="more_than_two_losses" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
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
							<select name="prior_carrier_name" class="col-md-4 form-group">
							  <option  value="">-- Select --</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif						  
							</select>
						</div>
					</div>
				</div>
				<hr>
        <div class="block">
                    <button type="submit" class="btn btn-outline-secondary">Submit</button>
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