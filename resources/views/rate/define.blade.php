@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your rates:</div>

                <div class="card-body">
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

				<hr>

				<div class="field">
					<label class="label" for="med_pay_1000">
						Med Pay of 1k
					</label>
					<input name="med_pay" type="text" class="input" placeholder="Your name here" id="med_pay">
				</div>

				<div class="field">
					<label class="label" for="med_pay_1000">
						Med Pay of 2.5k
					</label>
					<input name="med_pay" type="text" class="input" placeholder="Your name here" id="med_pay">
				</div>

				<div class="field">
					<label class="label" for="med_pay_1000">
						Med Pay of 5k
					</label>
					<input name="med_pay" type="text" class="input" placeholder="Your name here" id="med_pay">
				</div>	

				<hr>

				<div class="field">
					<label class="label" for="aop_ded_1">
						AOP Deductible 1%
					</label>
					<input name="aop_ded" type="text" class="input" placeholder="Your name here" id="aop_ded">
				</div>

				<div class="field">
					<label class="label" for="aop_ded_2">
						AOP Deductible 2%
					</label>
					<input name="aop_ded" type="text" class="input" placeholder="Your name here" id="aop_ded">
				</div>

				<div class="field">
					<label class="label" for="aop_ded_3">
						AOP Deductible 3%
					</label>
					<input name="aop_ded" type="text" class="input" placeholder="Your name here" id="aop_ded">
				</div>

				<div class="field">
					<label class="label" for="aop_ded_4">
						AOP Deductible 4%
					</label>
					<input name="aop_ded" type="text" class="input" placeholder="Your name here" id="aop_ded">
				</div>

				<div class="field">
					<label class="label" for="aop_ded_5">
						AOP Deductible 5%
					</label>
					<input name="aop_ded" type="text" class="input" placeholder="Your name here" id="aop_ded">
				</div>				

			<hr>
				<h1>Construction type</h1>

				<div class="field">
					<label class="label" for="frame">
						Frame
					</label>
					<input name="construction_type" type="text" class="input" placeholder="Your name here" id="construction_type">
				</div>

				<div class="field">
					<label class="label" for="jm">
						JM
					</label>
					<input name="construction_type" type="text" class="input" placeholder="Your name here" id="construction_type">
				</div>

				<div class="field">
					<label class="label" for="bv">
						BV
					</label>
					<input name="construction_type" type="text" class="input" placeholder="Your name here" id="construction_type">
				</div>

				<div class="field">
					<label class="label" for="masonry">
						Masonry
					</label>
					<input name="construction_type" type="text" class="input" placeholder="Your name here" id="construction_type">
				</div>

				<hr>

				<p>Protection class</p>

				<div class="field">
					<label class="label" for="protection_class_1">
						Protection class 1
					</label>
					<input name="protection_class" type="text" class="input" placeholder="Your name here" id="protection_class">
				</div>

				<div class="field">
					<label class="label" for="protection_class_2">
						Protection class 2
					</label>
					<input name="protection_class" type="text" class="input" placeholder="Your name here" id="protection_class">
				</div>

				<div class="field">
					<label class="label" for="protection_class_3">
						Protection class 3
					</label>
					<input name="protection_class" type="text" class="input" placeholder="Your name here" id="protection_class">
				</div>

				<div class="field">
					<label class="label" for="protection_class_4">
						Protection class 4
					</label>
					<input name="protection_class" type="text" class="input" placeholder="Your name here" id="protection_class">
				</div>				

				<div class="field">
					<label class="label" for="protection_class_5">
						Protection class 5
					</label>
					<input name="protection_class" type="text" class="input" placeholder="Your name here" id="protection_class">
				</div>	

				<hr>

				<div class="field">
					<label class="label" for="new_purchase">
						New purchase
					</label>
					<input name="new_purchase" type="text" class="input" placeholder="Your name here" id="new_purchase">
				</div>

				<div class="field">
					<label class="label" for="prior_carrier">
						Prior carrier - no losses
					</label>
					<input name="prior_carrier" type="text" class="input" placeholder="Your name here" id="prior_carrier">
				</div>

				<div class="field">
					<label class="label" for="prior_carrier">
						0-2 losses in last 5 years
					</label>
					<input name="prior_carrier" type="text" class="input" placeholder="Your name here" id="prior_carrier">
				</div>

				<div class="field">
					<label class="label" for="prior_carrier">
						2+ losses in last 5 years
					</label>
					<input name="prior_carrier" type="text" class="input" placeholder="Your name here" id="prior_carrier">
				</div>


				<div class="field">
					<label class="label" for="prior_carrier_name">
						Prior carrier's name
					</label>
					<input name="prior_carrier_name" type="text" class="input" placeholder="Your name here" id="prior_carrier_name">
				</div>
		</form>	
                </div>
				<div class="block">
					<button class="button is-primary is-outlined">Submit</button>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
