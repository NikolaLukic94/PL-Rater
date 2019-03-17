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
							<input name="agent_name" type="text" class="input" placeholder="Your name here" id="agent_name">
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
							<input name="agency_name" type="text" class="input" placeholder="Your name here" id="agency_name">
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
								<input name="agent_email_address" type="email" class="input" placeholder="Your name here" id="agent_email_address">
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
							<input name="agent_phone_number" type="text" class="input" placeholder="Your name here" id="agent_phone_number">
						</div>
					</div>
				</div>		
				<div class="field">
					<div class="row">
						<div class="col">					
					<label class="label" for="type_of_coverage">
						Type of Coverage
					</label>
						</div>
						<div class="col">							
							<input name="type_of_coverage" type="text" class="input" placeholder="Your name here" id="type_of_coverage">
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
							<input name="lob" type="text" class="input" placeholder="Your name here" id="lob">
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
						Named Insured
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
						Mailing address
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
						Street name/number
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
						City
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
						County
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
						State
					</label>
						</div>
						<div class="col">							
							<input name="state" type="text" class="input" placeholder="Your name here" id="state">
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
							<input name="phone_number" type="text" class="input" placeholder="Your name here" id="phone_number">
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
							<input name="email_address" type="text" class="input" placeholder="Your name here" id="email_address">
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
							<input name="cov_a" type="text" class="input" placeholder="Your name here" id="cov_a">
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
							<input name="other_structures" type="text" class="input" placeholder="Your name here" id="other_structures">
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
							<input name="loss_of_use" type="text" class="input" placeholder="Your name here" id="loss_of_use">
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
							<input name="med_pay" type="text" class="input" placeholder="Your name here" id="med_pay">
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
							<input name="aop_ded" type="text" class="input" placeholder="Your name here" id="aop_ded">
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
							<input name="construction_type" type="text" class="input" placeholder="Your name here" id="construction_type">
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
							<input name="protection_class" type="text" class="input" placeholder="Your name here" id="protection_class">
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
							<input name="new_purchase" type="text" class="input" placeholder="Your name here" id="new_purchase">
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
							<input name="prior_carrier_name" type="text" class="input" placeholder="Your name here" id="prior_carrier_name">
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
							<input name="prior_carrier_effective_date" type="date" class="input" placeholder="Your name here" id="prior_carrier_effective_date">
						</div>
					</div>
				</div>
				<div class="block">
					<button class="button is-primary is-outlined">Submit</button>
				</div>
		</div>
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
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->



</body>

</html>
