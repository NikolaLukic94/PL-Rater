@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>

  <title>PLQR</title>

</head>

<body>

  <div class="d-flex" id="wrapper">

    @include('partials.sidebar')

    <!-- Page Content -->
    <div id="page-content-wrapper">

    @include('partials.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Please submit all info:</div>
                <div class="card-body">
@if(isset($rate))
			<form action="/rate/edit/{{$rate->id}}" method="POST">
				{{ csrf_field() }}
				{{ method_field('POST') }}
								<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="type_of_coverage">
								LOB
							</label>
						</div>
						<div class="col">							
							<select name="lob" class="col-md-4 form-group">
							  <option  value="">{{$rate->lob}}</option>								
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
							<label class="label" for="cov_a">
								Coverage A rate
							</label>
						</div>
						<div class="col">							
							<select name="cov_a" class="col-md-4 form-group">
							  <option  value="">{{$rate->cov_a}}</option>								
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
							  <option  value="">{{$rate->other_structures}}</option>								
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
							  <option  value="">{{$rate->loss_of_use}}</option>								
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
							<select name="med_pay_1k" class="col-md-4 form-group">							
							  <option  value="">{{$rate->med_pay_1k}}</option>								
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
							<select name="med_pay_2_5k" class="col-md-4 form-group">							
							  <option  value="">{{$rate->med_pay_2_5k}}</option>								
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
							<select name="med_pay_5k" class="col-md-4 form-group">							
							  <option  value="">{{$rate->med_pay_5k}}</option>								
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
							  <option  value="">{{$rate->aop_ded_1}}</option>								
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
							  <option  value="">{{$rate->aop_ded_2}}</option>								
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
							  <option  value="">{{$rate->aop_ded_3}}</option>								
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
							  <option  value="">{{$rate->aop_ded_4}}</option>								
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
							  <option  value="">{{$rate->aop_ded_5}}</option>								
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
							  <option  value="">{{$rate->frame}}</option>								
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
							  <option  value="">{{$rate->jm}}</option>								
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
							  <option  value="">{{$rate->bv}}</option>								
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
							  <option  value="">{{$rate->masonry}}</option>								
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
							  <option  value="">{{$rate->protection_class_1}}</option>								
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
							  <option  value="">{{$rate->protection_class_2}}</option>								
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
							  <option  value="">{{$rate->protection_class_3}}</option>								
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
							  <option  value="">{{$rate->protection_class_4}}</option>								
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
							  <option  value="">{{$rate->protection_class_5}}</option>								
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
							  <option  value="">{{$rate->new_purchase}}</option>								
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
							  <option  value="">{{$rate->prior_carrier}}</option>								
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
							  <option  value="">{{$rate->zero_two_losses}}</option>								
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
							  <option  value="">{{$rate->more_than_two_losses}}</option>								
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
							  <option  value="">{{$rate->prior_carrier_name}}</option>								
							  	  @if($credit)
							  	  	@for($i = 1; $i < count($credit); $i++)		
								 		 <option value="{{$i}}">{{$credit[$i]}}</option>
								 	@endfor	 
								  @endif							  
							</select>																	
						</div>
					</div>
				</div>
				
				<div class="block">
					<button class="btn btn-outline-secondary">Update</button>
				</div>
		</div>

				  @include('errors')
	  </form>				@endif			
                </div>

            </div>
        </div>
    </div>
</div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->



</body>

</html>











