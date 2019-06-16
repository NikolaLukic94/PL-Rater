@extends('layouts.app')

<div class="d-flex" id="wrapper">

@include('partials.sidebar')

<div id="page-content-wrapper">

@include('partials.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <br>
            <div class="card">
                <div class="card-header text-center">Please verify current info:</div>
                <div class="card-body">
                   @if(isset($file))
            <form action="/file/rating-characteristics/update/{{$file->id}}" method="POST">
              {{ csrf_field() }}        
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="cov_a">
                    <p>Coverage A</p>
                    </label>
                  </div>
                  <div class="col">             
                    <input name="cov_a" type="text" value="{{$file->cov_a}}" class="input" id="cov_a">
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

                    <input name="other_structures" value="{{$file->other_structures}}" type="text" class="input" id="other_structures">

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

                    <input name="loss_of_use" type="text" value="{{$file->loss_of_use}}" class="input" id="loss_of_use">

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

                    <input name="med_pay" type="text" value="{{$file->med_pay}}" class="input" id="med_pay">

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

                    <input name="aop_ded" type="text" value="{{$file->aop_ded}}" class="input" id="aop_ded">

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

                    <input name="construction_type" value="{{$file->construction_type}}" type="text" class="input" id="construction_type">

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

                    <input name="protection_class" value="{{$file->protection_class}}" type="text" class="input" id="protection_class">

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

                    <input name="new_purchase" value="{{$file->new_purchase}}" type="text" class="input" id="new_purchase">

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

                    <input name="prior_carrier" value="{{$file->prior_carrier}}" type="text" class="input" id="prior_carrier">

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

                    <input name="prior_carrier_name" value="{{$file->prior_carrier_name}}" type="text" class="input" id="prior_carrier_name">

                  </div>

                </div>

              </div>

                    

              <div class="block">

                <div class="notification">

                  <hr>

                    <div class="field">

                      <div class="row">

                        <div class="col">

                          <label class="label" for="inspection_fee">

                            Inspection Fee

                          </label>

                        </div>

                        <div class="col">

                          <input name="inspection_fee" type="text" class="input" id="inspection_fee">

                        </div>

                      </div>

                    </div>

                    <div class="field">

                      <div class="row">

                        <div class="col">

                          <label class="label" for="brokerage_fee">

                            Brokerage Fee

                          </label>

                        </div>

                        <div class="col">

                          <input name="brokerage_fee" type="text" class="input" id="brokerage_fee">

                        </div>

                      </div>

                    </div>

                    <div class="field">

                      <div class="row">

                        <div class="col">

                          <label class="label" for="agency_fee">

                            Agency Fee

                          </label>

                        </div>

                        <div class="col">

                          <input name="agency_fee" type="text" class="input" id="agency_fee">

                        </div>

                      </div>

                    </div>            

                </div>

                <hr>

              </div>

          <div class="columns">

           <div class="column is-half is-offset-one-quarter">

            <div class="field is-grouped is-grouped-centered">

              <p class="control">

                <button type="submit" class="btn btn-outline-secondary" style="width: 100%">Update</button>
                  </form>  

                <a class="btn btn-primary" href="/rater/create/{{$file->id}}" role="button">Open</a>

              </p>

                @endif 

              @include('errors')

  
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

