@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @if(isset($file))
        <div class="card">
          <div class="card-header text-center">Please submit all info:</div>
            <div class="card-body">
              <form action="/file/rate/prepare/rw" method="POST">
                {{ csrf_field() }} 
              <div class="field">
                <div class="row">
                  <div class="col-5">         
                    <label class="label" for="type_of_coverage">
                      LOB
                    </label>
                  </div>
                  <div class="col-5">             
                    <label class="label" for="type_of_coverage">
                      {{$file[0]->lob}}
                    </label>
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->lob}}
                    </label>
                  </div>                  
                </div>
              </div>           
              <div class="field">
                <div class="row">
                  <div class="col-5">         
                    <label class="label" for="cov_a">
                    <p>Coverage A</p>
                    </label>
                  </div>
                  <div class="col-5">             
                    <label class="label" for="cov_a">
                      {{$file[0]->cov_a}}
                    </label>
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->cov_a}}
                    </label>
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
                    <label class="label" for="other_structures">
                      {{$file[0]->other_structures}}
                    </label>
                  </div>
                  <div class="col-2">             
                    <label class="label" for="type_of_coverage">
                      {{$rater->other_structures}}
                    </label>
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
                      <label class="label" for="loss_of_use">
                        {{$file[0]->loss_of_use}}
                      </label>                           
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->loss_of_use}}
                      </label>
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
                      <label class="label" for="type_of_coverage">
                        {{$file[0]->med_pay}}
                      </label>                    
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->med_pay}}
                      </label>
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
                      <label class="label" for="type_of_coverage">
                        {{$file[0]->aop_ded}}
                      </label>                     
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->aop_ded}}
                      </label>
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
                      <label class="label" for="type_of_coverage">
                        @if($rater->contruction_type = 'jm')
                          Joisted Masonry
                        @elseif($rater->contruction_type = 'bv')
                          Brick Veneer
                        @elseif($rater->contruction_type = 'masonry')
                          Masonry
                        @elseif($rater->contruction_type = 'frame')
                          Frame                        
                        @endif
                      </label>                    
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->construction_type}}
                      </label>
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
                      <label class="label" for="type_of_coverage">
                        {{$file[0]->protection_class}}
                      </label>                    
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                         {{$rater->protection_class}}
                      </label>
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
                      <label class="label" for="type_of_coverage">
                        @if($rater->new_purchase = '1')
                          Yes
                        @else
                          No                      
                        @endif
                      </label>                    
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->new_purchase}}
                      </label>
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
                      <label class="label" for="type_of_coverage">
                        @if($rater->prior_carrier = '1')
                          Yes
                        @else
                          No                      
                        @endif
                      </label>                    
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->prior_carrier}}
                      </label>
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
                      <label class="label" for="type_of_coverage">
                        {{$file[0]->prior_carrier_name}}
                      </label>                    
                    </div>
                    <div class="col-2">             
                      <label class="label" for="type_of_coverage">
                        {{$rater->prior_carrier_name}}
                      </label>
                    </div>                  
                  </div>
                </div>
                  @endif    
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
                            <label class="label" for="inspection_fee">
                              Inspection Fee
                            </label>                          
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
                            <label class="label" for="inspection_fee">
                              Inspection Fee
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="field">
                        <div class="row">
                          <div class="col">
                            <label class="label" for="agency_fee">
                              WIP
                            </label>
                          </div>
                          <div class="col">
                            <label class="label" for="inspection_fee">
                              Inspection Fee
                            </label>
                          </div>
                        </div>
                      </div>            
                  </div>
                  <hr>
                      <div class="field">
                        <div class="row">
                          <div class="col">
                            <label class="label" for="agency_fee">
                              Premium
                            </label>
                          </div>
                          <div class="col">
                            <label class="label" for="inspection_fee">
                              {{$premium->grand_premium}}
                            </label>
                          </div>
                        </div>
                      </div> 
                      <div class="field">
                        <div class="row">
                          <div class="col">
                            <label class="label" for="agency_fee">
                              SL Tax Fee
                            </label>
                          </div>
                          <div class="col">
                            <label class="label" for="inspection_fee">
                              {{$premium->surplus_lines_tax_fee}}
                            </label>
                          </div>
                        </div>
                      </div> 
                      <div class="field">
                        <div class="row">
                          <div class="col">
                            <label class="label" for="agency_fee">
                              EMPA
                            </label>
                          </div>
                          <div class="col">
                            <label class="label" for="inspection_fee">
                              {{$premium->empa}}
                            </label>
                          </div>
                        </div>
                      </div>                                         
                </div>
                <br>
                <hr>
                <br>
            <div class="columns">
             <div class="column is-half is-offset-one-quarter">
              <div class="field is-grouped is-grouped-centered">
                <p class="control">
                  <button type="button" href="/rater/rate/rw/{{$file[0]->id}}/{{$rater->id}}" class="btn btn-outline-secondary">Save as Word</button>&nbsp;
                  <button type="button" href="/rater/rate/rw/{{$file[0]->id}}/{{$rater->id}}" class="btn btn-outline-secondary">Add to file RWs</button>&nbsp;                  
                  <a class="btn btn-primary" href="/rater/rate/rw/{{$file[0]->id}}/{{$rater->id}}" role="button">Save & Quote</a>         
                  <button type="button" class="btn btn-outline-secondary">Email to Agent</button>
                  <a class="btn btn-primary" href="/rater/rate/rw/{{$file[0]->id}}/{{$rater->id}}" role="button">Decline</a>                 
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