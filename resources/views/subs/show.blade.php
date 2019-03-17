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
        	@if(isset($submission))
            <div class="card">
                <div class="card-header text-center">Please submit all info:</div>
                <div class="card-body">
				<form action="/subs/" method="POST">
				{{ csrf_field() }}
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="agent_name">
								<p>Agent's name</p>
							</label>
						</div>
						<div class="col">
							<input name="agent_name" value="{{$submission->agent_name}}" type="text" class="input" id="agent_name">
						</div>
				</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="agency_name">
								<p>Agency name</p>
							</label>
						</div>
						<div class="col">							
							<input name="agency_name" value="{{$submission->agency_name}}" type="text" class="input" id="agency_name">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="agent_email_address">
								<p>Agent's email address</p>
							</label>
						</div>
							<div class="col">	
								<input name="agent_email_address" value="{{$submission->agent_email_address}}"  type="email" class="input" id="agent_email_address">
							</div>	
					</div>
				</div>	
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="agent_phone_number"></label>
							<p>Agent's phone number</p>
						</div>
						<div class="col">							
							<input name="agent_phone_number" value="{{$submission->agent_phone_number}}" type="text" class="input"  id="agent_phone_number">
						</div>
					</div>
				</div>		
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="type_of_coverage">
							<p>Type of coverage</p>
							</label>
						</div>
						<div class="col">							
							<input name="type_of_coverage" value="{{$submission->type_of_coverage}}" type="text" class="input"  id="type_of_coverage">
						</div>
					</div>
				</div>	
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="type_of_coverage">
							<p>Type of coverage</p>
							</label>
						</div>
						<div class="col">							
							<input name="lob" type="text" value="{{$submission->type_of_coverage}}" class="input" id="lob">
						</div>
					</div>
				</div>	
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="effective_date">
							<p>Effective date</p>
							</label>
						</div>
						<div class="col">							
							<input name="effective_date" value="{{$submission->effective_date}}" type="date" class="input" id="effective_date">
						</div>
					</div>
				</div>	
				<p class="subtitle">Insured info</p>
				<hr>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="named_insured">
							<p>Named Insured</p>
							</label>
						</div>
						<div class="col">							
							<input name="named_insured" value="{{$submission->named_insured}}" type="text" class="input" id="named_insured">
						</div>
					</div>
				</div>	
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="mailing_address">
							<p>Mailing address</p>
							</label>
						</div>
						<div class="col">							
							<input name="mailing_address" value="{{$submission->mailing_address}}" type="text" class="input" id="mailing_address">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="street_name_and_number">
							<p>Street name and number</p>
							</label>
						</div>
						<div class="col">							
							<input name="street_name_and_number" value="{{$submission->street_name_and_number}}" type="text" class="input" id="street_name_and_number">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="city">
							<p>City</p>
							</label>
						</div>
						<div class="col">							
							<input name="city" type="text" value="{{$submission->city}}" class="input" id="city">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="county">
							<p>County</p>
							</label>
						</div>
						<div class="col">							
							<input name="county" type="text" value="{{$submission->county}}" class="input" id="county">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="state">
							<p>State</p>
							</label>
						</div>
						<div class="col">							
							<input name="state" type="text" value="{{$submission->state}}" class="input"  id="state">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="phone_number">
							<p>Named Insured's phone #</p>
							</label>
						</div>
						<div class="col">							
							<input name="phone_number" type="text" value="{{$submission->phone_number}}" class="input" id="phone_number">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="email_address">
							<p>Email address</p>
							</label>
						</div>
						<div class="col">							
							<input name="email_address" value="{{$submission->email_address}}" type="text" class="input" id="email_address">
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
							<input name="cov_a" type="text" value="{{$submission->cov_a}}" class="input" id="cov_a">
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
							<input name="other_structures" value="{{$submission->other_structures}}" type="text" class="input" id="other_structures">
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
							<input name="loss_of_use" type="text" value="{{$submission->loss_of_use}}" class="input" id="loss_of_use">
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
							<input name="med_pay" type="text" value="{{$submission->med_pay}}" class="input" id="med_pay">
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
							<input name="aop_ded" type="text" value="{{$submission->aop_ded}}" class="input" id="aop_ded">
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
							<input name="construction_type" value="{{$submission->construction_type}}" type="text" class="input" id="construction_type">
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
							<input name="protection_class" value="{{$submission->protection_class}}" type="text" class="input" id="protection_class">
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
							<input name="new_purchase" value="{{$submission->new_purchase}}" type="text" class="input" id="new_purchase">
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
							<input name="prior_carrier" value="{{$submission->prior_carrier}}" type="text" class="input" id="prior_carrier">
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
							<input name="prior_carrier_name" value="{{$submission->prior_carrier_name}}" type="text" class="input" id="prior_carrier_name">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="prior_carrier_effective_date">
							<p>Eff. date of prev. policy</p>
							</label>
						</div>
						<div class="col">							
							<input name="prior_carrier_effective_date" value="{{$submission->prior_carrier_effective_date}}" type="date" class="input" id="prior_carrier_effective_date">
						</div>
					</div>
				</div>
		</div>
@endif		
				<div class="block">
					<div class="notification">
						<hr>
						<div class="delete"></div>
							<p class="text-center">For more accurate pricing, please provide us with all information available!</p>
					</div>
					<hr>
				</div>
					<div class="columns">
					 <div class="column is-half is-offset-one-quarter">
				<div class="field is-grouped is-grouped-centered">
				  <p class="control">
				 
                <button type="button" class="btn btn-outline-secondary">Edit</button>
				  
				  </p>
				  @include('errors')
	  </form>			
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