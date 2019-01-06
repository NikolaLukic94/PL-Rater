@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	@if(isset($submission))
            <div class="card">
                <div class="card-header text-center">Please submit all info:</div>
                <div class="card-body">
				<form action="/subs/create" method="POST">
				{{ csrf_field() }}
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="agent_name">
								<p>{{  $submission->agent_name }}</p>
							</label>
						</div>
						<div class="col">
							<input name="agent_name" type="text" class="input" placeholder="Your name here" id="agent_name">
						</div>
				</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="agency_name">
								<p>{{  $submission->agency_name }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="agency_name" type="text" class="input" placeholder="Agency name" id="agency_name">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="agent_email_address">
								<p>{{  $submission->agent_email_address }}</p>
							</label>
						</div>
							<div class="col">	
								<input name="agent_email_address" type="email" class="input" placeholder="Your email address here" id="agent_email_address">
							</div>	
					</div>
				</div>	
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="agent_phone_number">
								<p>{{  $submission->agent_phone_number }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="agent_phone_number" type="text" class="input" placeholder="Your phone number here" id="agent_phone_number">
						</div>
					</div>
				</div>		
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="type_of_coverage">
									<p>{{  $submission->type_of_coverage }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="type_of_coverage" type="text" class="input"  id="type_of_coverage">
						</div>
					</div>
				</div>	
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="type_of_coverage">
									<p>{{  $submission->type_of_coverage }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="lob" type="text" class="input" id="lob">
						</div>
					</div>
				</div>	
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="effective_date">
									<p>{{  $submission->effective_date }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="effective_date" type="date" class="input" placeholder="Your name here" id="effective_date">
						</div>
					</div>
				</div>	
				<p class="subtitle">Insured info</p>
				<hr>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="named_insured">
									<p>{{  $submission->named_insured }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="named_insured" type="text" class="input" placeholder="Your name here" id="named_insured">
						</div>
					</div>
				</div>	
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="mailing_address">
									<p>{{  $submission->mailing_address }}</p>s
							</label>
						</div>
						<div class="col">							
							<input name="mailing_address" type="text" class="input" placeholder="Your name here" id="mailing_address">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="street_name_and_number">
									<p>{{  $submission->street_name_and_number }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="street_name_and_number" type="text" class="input" placeholder="Your name here" id="street_name_and_number">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="city">
									<p>{{  $submission->city }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="city" type="text" class="input" placeholder="Your name here" id="city">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="county">
									<p>{{  $submission->county }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="county" type="text" class="input" placeholder="Your name here" id="county">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="state">
									<p>{{  $submission->state }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="state" type="text" class="input"  id="state">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="phone_number">
									<p>{{  $submission->phone_number }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="phone_number" type="text" class="input" placeholder="Your name here" id="phone_number">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="email_address">
									<p>{{  $submission->email_address }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="email_address" type="text" class="input" placeholder="Your name here" id="email_address">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="cov_a">
									<p>{{  $submission->cov_a }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="cov_a" type="text" class="input" placeholder="Your name here" id="cov_a">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="other_structures">
									<p>{{  $submission->other_structures }}</p>s
							</label>
						</div>
						<div class="col">							
							<input name="other_structures" type="text" class="input" placeholder="Your name here" id="other_structures">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="loss_of_use">
									<p>{{  $submission->loss_of_use }}</p>
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
									<p>{{  $submission->med_pay }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="med_pay" type="text" class="input" id="med_pay">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="aop_ded">
									<p>{{  $submission->aop_ded }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="aop_ded" type="text" class="input" id="aop_ded">
						</div>
					</div>
				</div>
				<hr>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="construction_type">
									<p>{{  $submission->construction_type }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="construction_type" type="text" class="input" id="construction_type">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="protection_class">
									<p>{{  $submission->protection_class }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="protection_class" type="text" class="input" id="protection_class">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="new_purchase">
									<p>{{  $submission->new_purchase }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="new_purchase" type="text" class="input" id="new_purchase">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="prior_carrier">
									<p>{{  $submission->prior_carrier }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="prior_carrier" type="text" class="input" placeholder="Your name here" id="prior_carrier">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="prior_carrier_name">
									<p>{{  $submission->prior_carrier_name }}</p>
							</label>
						</div>
						<div class="col">							
							<input name="prior_carrier_name" type="text" class="input" placeholder="Your name here" id="prior_carrier_name">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
							<label class="label" for="prior_carrier_effective_date">
								<p>{{  $submission->prior_carrier_effective_date }}</p>e
							</label>
						</div>
						<div class="col">							
							<input name="prior_carrier_effective_date" type="date" class="input" placeholder="Your name here" id="prior_carrier_effective_date">
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
				 
                <button type="button" class="btn btn-outline-secondary">Add new</button>
				  
				  </p>
				  @include('errors')
	  </form>			
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
		</div>
	</div>
</div>