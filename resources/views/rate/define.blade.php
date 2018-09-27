@extends('layout')

<div class="column is-half is-offset-one-quarter">
	<div class="block">
		<form action="/rate/create" method="POST">
				{{ csrf_field() }}

				<div class="field">
					<label class="label" for="lob">
						LOB
					</label>
					<input name="lob" type="text" class="input" placeholder="Your name here" id="lob">
				</div>

				<div class="field">
					<label class="label" for="county">
						County
					</label>
					<input name="county" type="text" class="input" placeholder="Your name here" id="county">
				</div>

				<div class="field">
					<label class="label" for="state">
						State
					</label>
					<input name="state" type="text" class="input" placeholder="Your name here" id="state">
				</div>

				<div class="field">
					<label class="label" for="cov_a">
						Coverage A
					</label>
					<input name="cov_a" type="text" class="input" placeholder="Your name here" id="cov_a">
				</div>

				<div class="field">
					<label class="label" for="other_structures">
						Other Structures
					</label>
					<input name="other_structures" type="text" class="input" placeholder="Your name here" id="other_structures">
				</div>

				<div class="field">
					<label class="label" for="loss_of_use">
						Loss Of Use
					</label>
					<input name="loss_of_use" type="text" class="input" placeholder="Your name here" id="loss_of_use">
				</div>

				<div class="field">
					<label class="label" for="med_pay">
						Med Pay
					</label>
					<input name="med_pay" type="text" class="input" placeholder="Your name here" id="med_pay">
				</div>

				<div class="field">
					<label class="label" for="aop_ded">
						AOP Deductible
					</label>
					<input name="aop_ded" type="text" class="input" placeholder="Your name here" id="aop_ded">
				</div>

			<hr>

				<div class="field">
					<label class="label" for="construction_type">
						Construction type
					</label>
					<input name="construction_type" type="text" class="input" placeholder="Your name here" id="construction_type">
				</div>

				<div class="field">
					<label class="label" for="protection_class">
						Protection class
					</label>
					<input name="protection_class" type="text" class="input" placeholder="Your name here" id="protection_class">
				</div>

				<div class="field">
					<label class="label" for="new_purchase">
						New purchase
					</label>
					<input name="new_purchase" type="text" class="input" placeholder="Your name here" id="new_purchase">
				</div>

				<div class="field">
					<label class="label" for="prior_carrier">
						Prior carrier
					</label>
					<input name="prior_carrier" type="text" class="input" placeholder="Your name here" id="prior_carrier">
				</div>

				<div class="field">
					<label class="label" for="prior_carrier_name">
						Prior carrier's name
					</label>
					<input name="prior_carrier_name" type="text" class="input" placeholder="Your name here" id="prior_carrier_name">
				</div>

				<div class="block">
					<button class="button is-primary is-outlined">Submit</button>
				</div>
		</form>
	</div>		
</div>
