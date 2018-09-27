@extends('layout')

<div class="container">
	<div class="block ">
		<div class="columns">
			@if(isset($candidate))
			<form method="POST" action="/submission/edit/{{$submission->id}}">
				{{ csrf_field()  }}
              		{{ method_field('POST') }}

					<div class="column is-half is-offset-one-quarter">
		<div class="block">
			<p class="subtitle">Agent info</p>
			<form action="/subs/create" method="POST">
				{{ csrf_field() }}
	<div class="column is-half is-offset-one-quarter">
		<div class="block">
			<p class="subtitle">Agent info</p>
			<form action="/subs/create" method="POST">
				{{ csrf_field() }}
				<div class="field">
					<label class="label" for="agent_name">
						Agent Name
					</label>
					<input name="agent_name" type="text" class="input" value="{{$submission->agent_name}}" id="agent_name">
				</div>

				<div class="field">
					<label class="label" for="agency_name">
						Agency name
					</label>
					<input name="agency_name" type="text" class="input" value="{{$submission->agency_name}}" id="agency_name">
				</div>

				<div class="field">
					<label class="label" for="agent_email_address">
						Agent email address
					</label>
					<input name="agent_email_address" type="email" class="input" value="{{$submission->agent_email_address}}" id="agent_email_address">
				</div>

				<div class="field">
					<label class="label" for="agent_phone_number">
						Agent phone number
					</label>
					<input name="agent_phone_number" type="text" class="input" value="{{$submission->agent_phone_number}}" id="agent_phone_number">
				</div>

				<div class="field">
					<label class="label" for="type_of_coverage">
						Type of Coverage
					</label>
					<input name="type_of_coverage" type="text" class="input" value="{{$submission->type_of_coverage}}" id="type_of_coverage">
				</div>

				<div class="field">
					<label class="label" for="lob">
						LOB
					</label>
					<input name="lob" type="text" class="input" value="{{$submission->lob}}" id="lob">
				</div>

				<div class="field">
					<label class="label" for="effective_date">
						Effective date
					</label>
					<input name="effective_date" type="date" class="input" value="{{$submission->effective_date}}"  id="effective_date">
				</div>

				<p class="subtitle">Insured info</p>
				<hr>
				<div class="field">
					<label class="label" for="named_insured">
						Named Insured
					</label>
					<input name="named_insured" type="text" class="input" value="{{$submission->named_insured}}" id="named_insured">
				</div>

				<div class="field">
					<label class="label" for="mailing_address">
						Mailing address
					</label>
					<input name="mailing_address" type="text" class="input" value="{{$submission->mailing_address}}" id="mailing_address">
				</div>

				<div class="field">
					<label class="label" for="street_name_and_number">
						Street name/number
					</label>
					<input name="street_name_and_number" type="text" class="input" value="{{$submission->street_name_and_number}}" id="street_name_and_number">
				</div>

				<div class="field">
					<label class="label" for="city">
						City
					</label>
					<input name="city" type="text" class="input" value="{{$submission->city}}" id="city">
				</div>

				<div class="field">
					<label class="label" for="county">
						County
					</label>
					<input name="county" type="text" class="input" value="{{$submission->county}}" id="county">
				</div>

				<div class="field">
					<label class="label" for="state">
						State
					</label>
					<input name="state" type="text" class="input" value="{{$submission->mailstateing_address}}" id="state">
				</div>

				<div class="field">
					<label class="label" for="phone_number">
						Phone number
					</label>
					<input name="phone_number" type="text" class="input" value="{{$submission->phone_number}}" id="phone_number">
				</div>

				<div class="field">
					<label class="label" for="email_address">
						Email Address
					</label>
					<input name="email_address" type="text" class="input" value="{{$submission->email_address}}" id="email_address">
				</div>

				<div class="field">
					<label class="label" for="cov_a">
						Coverage A
					</label>
					<input name="cov_a" type="text" class="input" value="{{$submission->cov_a}}" id="cov_a">
				</div>

				<div class="field">
					<label class="label" for="other_structures">
						Other Structures
					</label>
					<input name="other_structures" type="text" class="input" value="{{$submission->other_structures}}" id="other_structures">
				</div>

				<div class="field">
					<label class="label" for="loss_of_use">
						Loss Of Use
					</label>
					<input name="loss_of_use" type="text" class="input" value="{{$submission->loss_of_use}}" id="loss_of_use">
				</div>

				<div class="field">
					<label class="label" for="med_pay">
						Med Pay
					</label>
					<input name="med_pay" type="text" class="input" value="{{$submission->med_pay}}" id="med_pay">
				</div>

				<div class="field">
					<label class="label" for="aop_ded">
						AOP Deductible
					</label>
					<input name="aop_ded" type="text" class="input" value="{{$submission->aop_ded}}" id="aop_ded">
				</div>

			<hr>

				<div class="field">
					<label class="label" for="construction_type">
						Construction type
					</label>
					<input name="construction_type" type="text" class="input" value="{{$submission->construction_type}}" id="construction_type">
				</div>

				<div class="field">
					<label class="label" for="protection_class">
						Protection class
					</label>
					<input name="protection_class" type="text" class="input" value="{{$submission->protection_class}}" id="protection_class">
				</div>

				<div class="field">
					<label class="label" for="new_purchase">
						New purchase
					</label>
					<input name="new_purchase" type="text" class="input" value="{{$submission->new_purchase}}" id="new_purchase">
				</div>

				<div class="field">
					<label class="label" for="prior_carrier">
						Prior carrier
					</label>
					<input name="prior_carrier" type="text" class="input" value="{{$submission->prior_carrier}}" id="prior_carrier">
				</div>

				<div class="field">
					<label class="label" for="prior_carrier_name">
						Prior carrier's name
					</label>
					<input name="prior_carrier_name" type="text" class="input" value="{{$submission->prior_carrier_name}}" id="prior_carrier_name">
				</div>

				<div class="field">
					<label class="label" for="prior_carrier_effective_date">
						Prior carrier eff date
					</label>
					<input name="prior_carrier_effective_date" type="date" class="input" value="{{$submission->prior_carrier_effective_date}}" id="prior_carrier_effective_date">
				</div>
				<div class="block">
					<button class="button is-primary is-outlined">Submit</button>
				</div>
			
		</div>

		@endif

				  <button type="submit" class="btn btn-primary">Update candidate info</button>
			</form>
		</div>
	</div>
</div>