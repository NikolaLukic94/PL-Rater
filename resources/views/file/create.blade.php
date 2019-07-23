@extends('layouts.app')

<body>

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
                <div class="card-header text-center">Please verify current info:</div>
                <div class="card-body">
        <form action="/file/create/{{$submission->id}}" method="POST">
                {{ csrf_field() }}
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                Effective date:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->effective_date}}" name="effective_date" required><br>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                Expiration_date:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->expiration_date}}" name="expiration_date">
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="row">
                      <div class="col">         
                        <label class="label" for="lob">
                          LOB
                        </label>
                      </div>
                      <div class="form-group col-md-6">            
                        <select name="lob" class="form-group">
                              <option  value="">-- Select --</option>                                  
                              <option  value="HO3">-- HO3 --</option>       
                              <option  value="DP1">-- DP1 --</option>
                              <option  value="DP3">-- DP3 --</option>                      
                         </select>
                      </div>
                    </div>
                  </div>  
                <hr> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                Named Insured:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->named_insured}}" name="named_insured" required>
                        </div>
                    </div>
                </div>                
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                Additional Named Insured/DBA:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->additional_ni}}" name="additional_ni">
                        </div>
                    </div>
                </div>                       

              <div class="field">
                    <div class="row">
                      <div class="col">         
                        <label class="label" for="type_of_entity">
                          Type of entitiy:
                        </label>
                      </div>
                      <div class="form-group col-md-6">             
                        <select name="type_of_entity" class="form-group">
                              <option  value="">-- Select --</option>                                  
                              <option  value="individual">-- Individual --</option>       
                              <option  value="corporately_titled">-- Corporately Titled --</option>                      
                         </select>
                      </div>
                    </div>
                  </div>                 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                SSN:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->ssn}}" name="ssn"><br>
                        </div>
                    </div>
                </div>     
                <hr>
                <!-- Mailing address -->                
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                Street name/number:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->mailing_address_street_name_and_number}}" name="mailing_address_street_name_and_number" required>
                        </div>
                    </div>
                </div>                   
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                City:
                            </label>
                        </div>
                        <div class="col">
                             <input type="text" value="{{$submission->mailing_address_city}}" name="mailing_address_city" required>
                        </div>
                    </div>
                </div>  
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                               ZIP code:
                            </label>
                        </div>
                        <div class="col">
                             <input type="text" value="{{$submission->mailing_address_zip}}" name="mailing_address_zip" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                               County:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->mailing_address_county}}" name="mailing_address_county" required>
                        </div>
                    </div>
                </div> 
                  <div class="field">
                    <div class="row">
                      <div class="col">         
                        <label class="label" for="location_address_state">
                          State
                        </label>
                      </div>
                      <div class="form-group col-md-6">   
                      @if($submission->mailing_address_state)
                        <input type="text" value="{{$submission->mailing_address_state}}" name="mailing_address_state" required>
                      @else          
                        <select name="mailing_address_state" class="form-group">
                            <option  value="">Select State</option>
                            <option  value="LA">LA</option>
                            <option  value="CA">CA</option>
                            <option  value="FL">FL</option>                 
                         </select>
                         @endif
                      </div>
                    </div>
                  </div>                 
                <hr>
                <!-- Location address -->
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                Street name/number:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->location_address_street_name_and_number}}" name="location_address_street_name_and_number" required>
                        </div>
                    </div>
                </div>                   
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                                City:
                            </label>
                        </div>
                        <div class="col">
                             <input type="text" value="{{$submission->location_address_city}}" name="location_address_city" required>
                        </div>
                    </div>
                </div>  
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                               ZIP code:
                            </label>
                        </div>
                        <div class="col">
                             <input type="text" value="{{$submission->location_address_zip}}" name="location_address_zip" required>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <div class="row">
                        <div class="col">
                            <label class="label" for="agent_name">
                               County:
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{$submission->location_address_county}}" name="location_address_county" required>
                        </div>
                    </div>
                </div> 
              <div class="field">
                <div class="row">
                  <div class="col">         
                    <label class="label" for="location_address_state">
                      State
                    </label>
                  </div>
                    <div class="form-group col-md-6">
                      @if($submission->mailing_address_state)
                        <input type="text" value="{{$submission->mailing_address_state}}" name="mailing_address_county" required>
                      @else          
                        <select name="location_address_state" class="form-group">
                            <option  value="">Select State</option>
                            <option  value="LA">LA</option>
                            <option  value="CA">CA</option>
                            <option  value="FL">FL</option>                 
                         </select>
                         @endif                  
                  </div>
                </div>
              </div>                 
                <hr>
                <button type="submit" class="btn btn-outline-secondary">Submit</button>
                </form>
                </div>

            </div>
        </div>
    </div>
</div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->



