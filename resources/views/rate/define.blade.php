@extends('layouts.app')

  <div class="d-flex" id="wrapper">

    @include('partials.sidebar')

    <!-- Page Content -->
    <div id="page-content-wrapper">

    @include('partials.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<br>
            <div class="card">
                <div class="card-header text-center">Define new rate:</div>
                <div class="card-body">
				<form action="/rate/create" method="POST">
		        {{ csrf_field() }}
                  <div class="field">
                    <div class="row">
                      <div class="col">         
                        <label class="label" for="lob">
                          LOB
                        </label>
                      </div>
                      <div class="form-group col-md-6">             
                        <select name="lob" class="form-group">
                            <option  value="">--- Select ---</option>
                            <option  value="LA">HO3</option>
                            <option  value="CA">DP3</option>
                            <option  value="FL">DP1</option>                 
                         </select>
                      </div>
                    </div>
                  </div>
				<hr>
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="cov_a">
                      Cov A
                    </label>
                  </div>
                  <div class="form-group col-md-6">             
                    <select name="cov_a" class="form-group">
                        <option  value="">--- Select ---</option>
                        <option  value="0.7">0.7</option>
                        <option  value="0.8">0.8</option>
                        <option  value="0.85">0.85</option>         
                        <option  value="0.95">0.95</option>   
                        <option  value="1">1</option>   
                        <option  value="1.05">1.05</option>   
                        <option  value="1.15">1.15</option>                                                                                                   
                     </select>
                  </div>
                </div>
              </div>
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="other_structures">
                      OS
                    </label>
                  </div>
                  <div class="form-group col-md-6">             
                    <select name="other_structures" class="form-group">
                        <option  value="">--- Select ---</option>
                        <option  value="0.7">0.7</option>
                        <option  value="0.8">0.8</option>
                        <option  value="0.85">0.85</option>         
                        <option  value="0.95">0.95</option>   
                        <option  value="1">1</option>   
                        <option  value="1.05">1.05</option>   
                        <option  value="1.15">1.15</option>                                                                                                                
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
                  <div class="form-group col-md-6">             
                    <select name="loss_of_use" class="form-group">
                        <option  value="">--- Select ---</option>
                        <option  value="0.7">0.7</option>
                        <option  value="0.8">0.8</option>
                        <option  value="0.85">0.85</option>         
                        <option  value="0.95">0.95</option>   
                        <option  value="1">1</option>   
                        <option  value="1.05">1.05</option>   
                        <option  value="1.15">1.15</option>                                                                                                                
                     </select>
                  </div>
                </div>
              </div>                           
				<hr>
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="loss_of_use">
                      Med Pay of 1k
                    </label>
                  </div>
                  <div class="form-group col-md-6">             
                    <select name="med_pay_1000" class="form-group">
                        <option  value="">--- Select ---</option>
                        <option  value="0.7">0.7</option>
                        <option  value="0.8">0.8</option>
                        <option  value="0.85">0.85</option>         
                        <option  value="0.95">0.95</option>   
                        <option  value="1">1</option>   
                        <option  value="1.05">1.05</option>   
                        <option  value="1.15">1.15</option>                                                                                                             
                     </select>
                  </div>
                </div>
              </div> 				
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="med_pay_2_5k">
                      MMed Pay of 2.5k
                    </label>
                  </div>
                  <div class="form-group col-md-6">             
					<select name="med_pay_2_5k" class="form-group">
					  <option  value="">-- Select --</option>								
	                    <option  value="0.7">0.7</option>
	                    <option  value="0.8">0.8</option>
	                    <option  value="0.85">0.85</option>         
	                    <option  value="0.95">0.95</option>   
	                    <option  value="1">1</option>   
	                    <option  value="1.05">1.05</option>   
	                    <option  value="1.15">1.15</option>  					  
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
							<select name="med_pay_5000" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="aop_ded_1" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="aop_ded_2" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="aop_ded_3" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="aop_ded_4" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="aop_ded_5" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="frame" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="jm" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="bv" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="masonry" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="protection_class_1" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="protection_class_2" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="protection_class_3" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="protection_class_4" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="protection_class_5" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="new_purchase" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="prior_carrier" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="zero_two_losses" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="more_than_two_losses" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
							<select name="prior_carrier_name" class="form-group">
							  <option  value="">-- Select --</option>								
		                        <option  value="0.7">0.7</option>
		                        <option  value="0.8">0.8</option>
		                        <option  value="0.85">0.85</option>         
		                        <option  value="0.95">0.95</option>   
		                        <option  value="1">1</option>   
		                        <option  value="1.05">1.05</option>   
		                        <option  value="1.15">1.15</option>  						  
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
              <p class="text-center">Please double check to avoid giving people insurance at lower price!</p>
          </div>
          <hr>
        </div>
          <div class="columns">
           <div class="column is-half is-offset-one-quarter">
        <div class="field is-grouped is-grouped-centered">
		<div class="container">
          @include('errors')
        </div>
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



