@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Please submit all info:</div>
                <div class="card-body">
				<form method="POST" action="/subs/edit/{{$submission->id}}">
					{{ csrf_field()  }}
	              		{{ method_field('POST') }}
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="agent_name">
								Agent Name
							</label>
						</div>
						<div class="col">
							<input name="agent_name" type="text" class="input" value="{{$submission->agent_name}}" placeholder="Your name here" id="agent_name">
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
							<input name="agency_name" type="text" class="input" value="{{$submission->agency_name}}" id="agency_name">
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
								<input name="agent_email_address" type="email" class="input" value="{{$submission->agent_email_address}}" id="agent_email_address">
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
							<input name="agent_phone_number" type="text" class="input" value="{{$submission->agent_name}}" id="agent_phone_number">
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
						<select>	
						<option value="">{{$submission->lob}}</option>				
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
					<label class="label" for="effective_date">
						Effective date
					</label>
						</div>
						<div class="col">							
							<input name="effective_date" type="date" class="input" value="{{$submission->effective_date}}" id="effective_date">
						</div>
					</div>
				</div>	
				<p class="subtitle">Insured info</p>
				<hr>
				<div class="field">
					<div class="row">
						<div class="col">					
					<label class="label" for="named_insured">
						Named Insured
					</label>
						</div>
						<div class="col">							
							<input name="named_insured" type="text" class="input" value="{{$submission->named_insured}}" id="named_insured">
						</div>
					</div>
				</div>	
				<div class="field">
					<div class="row">
						<div class="col">					
					<label class="label" for="mailing_address">
						Mailing address
					</label>
						</div>
						<div class="col">							
							<input name="mailing_address" type="text" class="input" value="{{$submission->mailing_address}}" id="mailing_address">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="col">					
					<label class="label" for="street_name_and_number">
						Street name/number
					</label>
						</div>
						<div class="col">							
							<input name="street_name_and_number" type="text" class="input" value="{{$submission->location_address_street_name_and_number}}" id="street_name_and_number">
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
							<input name="city" type="text" class="input" value="{{$submission->location_address_city}}" id="city">
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
							<input name="county" type="text" class="input" value="{{$submission->location_address_county}}" id="county">
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
							<input name="state" type="text" class="input" value="{{$submission->location_address_state}}" id="state">
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
							<input name="phone_number" type="text" class="input" value="{{$submission->phone_number}}" id="phone_number">
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
							<input name="email_address" type="text" class="input" value="{{$submission->email_address}}" id="email_address">
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
							<input name="cov_a" type="text" class="input" value="{{$submission->cov_a}}" id="cov_a">
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
							<input name="other_structures" type="text" class="input" value="{{$submission->other_structures}}" id="other_structures">
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
							<input name="loss_of_use" type="text" class="input" value="{{$submission->loss_of_use}}" id="loss_of_use">
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
							<select name="med_pay" class="col-md-4 form-group">
						  	  <option  value="">{{$submission->med_pay}}</option>
						  	  @if($med_pay)
						  	  	@for($i = 1; $i < count($med_pay); $i++)		
							 		 <option value="{{$i}}">{{$med_pay[$i]}}</option>
							 	@endfor	 
							  @endif						  
							</select>
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
							<select name="aop_ded" class="col-md-4 form-group">
						  	  <option  value="">{{$submission->aop}}</option>									
						  	  @if($aop)
						  	  	@for($i = 1; $i < count($aop); $i++)		
							 		 <option value="{{$i}}">{{$aop[$i]}}</option>
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
					<label class="label" for="construction_type">
						Construction type
					</label>
						</div>
						<div class="col">							
							<select name="construction_type" class="col-md-4 form-group">
						  	  <option  value="">{{$submission->construction_type}}</option>
						  	  @if($constr_type)
						  	  	@for($i = 1; $i < count($constr_type); $i++)		
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
							<select name="construction_type" class="col-md-4 form-group">
							  	 <option  value="">{{$submission->protection_class}}</option>
							  	  @if($pc)
							  	  	@for($i = 1; $i < count($pc); $i++)		
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
							<select>					
							  <option  value="">-- {{$submission->new_purchase}} --</option>								
							  	  @if($yes_no)
							  	  	@for($i = 1; $i < count($yes_no); $i++)		
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
							<input name="prior_carrier" type="text" class="input" placeholder="Your name here" id="prior_carrier">
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
							<input name="prior_carrier_name" type="text" class="input" value="{{$submission->prior_carrier_name}}" id="prior_carrier_name">
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
							<input name="prior_carrier_effective_date" type="date" class="input" value="{{$submission->prior_carrier_effective_date}}" id="prior_carrier_effective_date">
						</div>
					</div>
				</div>
				<div class="block">
					<button class="btn btn-outline-secondary">Update</button>
				</div>
		</div>

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