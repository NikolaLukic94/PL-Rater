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
				<head>LOB</head>
				<hr>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="lob">
							 HO3
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
							<label class="label" for="lob">
							 DP1
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
							<label class="label" for="lob">
							 DP3
							</label>
						</div>
						<div class="col">							
							<input name="lob" type="text" class="input" placeholder="Your name here" id="lob">
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
				<hr>
				<div class="field">
					<div class="row">
						<div class="col">
							<label class="label" for="med_pay_1000">
								Med Pay of 1k
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
							<label class="label" for="med_pay_1000">
								Med Pay of 2.5k
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
							<label class="label" for="med_pay_1000">
								Med Pay of 5k
							</label>
						</div>
						<div class="col">							
							<input name="med_pay" type="text" class="input" placeholder="Your name here" id="med_pay">
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
							<input name="aop_ded" type="text" class="input" placeholder="Your name here" id="aop_ded">
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
							<input name="aop_ded" type="text" class="input" placeholder="Your name here" id="aop_ded">
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
							<input name="aop_ded" type="text" class="input" placeholder="Your name here" id="aop_ded">
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
							<input name="aop_ded" type="text" class="input" placeholder="Your name here" id="aop_ded">
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
							<input name="aop_ded" type="text" class="input" placeholder="Your name here" id="aop_ded">
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
							<input name="construction_type" type="text" class="input" placeholder="Your name here" id="construction_type">
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
							<input name="construction_type" type="text" class="input" placeholder="Your name here" id="construction_type">
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
							<input name="construction_type" type="text" class="input" placeholder="Your name here" id="construction_type">
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
							<input name="construction_type" type="text" class="input" placeholder="Your name here" id="construction_type">
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
							<input name="protection_class" type="text" class="input" placeholder="Your name here" id="protection_class">
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
							<input name="protection_class" type="text" class="input" placeholder="Your name here" id="protection_class">
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
							<input name="protection_class" type="text" class="input" placeholder="Your name here" id="protection_class">
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
							<input name="protection_class" type="text" class="input" placeholder="Your name here" id="protection_class">
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
							<input name="protection_class" type="text" class="input" placeholder="Your name here" id="protection_class">
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
							<input name="new_purchase" type="text" class="input" placeholder="Your name here" id="new_purchase">
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
							<input name="prior_carrier" type="text" class="input" placeholder="Your name here" id="prior_carrier">
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
							<input name="prior_carrier" type="text" class="input" placeholder="Your name here" id="prior_carrier">
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
