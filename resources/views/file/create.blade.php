@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Dashboard</div>
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
                            <label class="label" for="agent_name">
                                Type of entitiy:
                            </label>
                        </div>
                        <div class="col">
                            <select name="type_of_entity" class="col-md-4 form-group">
                              <option  value="{{ $submission->type_of_entity }}">-- Select --</option>       
                                  @if($type_of_entity)
                                    @for($i = 1; $i <= count($type_of_entity); $i++)      
                                         <option value="{{$i}}">{{$type_of_entity[$i]}}</option>
                                    @endfor  
                                  @endif                             
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
                            <label class="label" for="agent_name">
                               State:
                            </label>
                        </div>
                        <div class="col">
                            <select name="mailing_address_state" class="col-md-4 form-group">
                              <option  value="{{$submission->mailing_address_state}}"></option>       
                                  @if($state)
                                    @for($i = 1; $i < count($state); $i++)      
                                         <option value="{{$i}}">{{$state[$i]}}</option>
                                    @endfor  
                                  @endif                             
                            </select>  
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
                            <label class="label" for="agent_name">
                               State:
                            </label>
                        </div>
                        <div class="col">
                            <select name="location_address_state" class="col-md-4 form-group">
                              <option  value="{{$submission->location_address_state}}"></option>       
                                  @if($state)
                                    @for($i = 1; $i < count($state); $i++)      
                                         <option value="{{$i}}">{{$state[$i]}}</option>
                                    @endfor  
                                  @endif                            
                            </select>   
                        </div>
                    </div>
                </div> 
                <hr>
                <button type="submit" class="btn btn-outline-secondary">Submit</button>
                </form>
                </div>
            </div>
        </div>    
    <div class="col-md-3">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <p>Info</p>
                    <p>Documents</p>
                <a href="/subs/show/{{$submission->id}}">Submission</a>      
        </div></div>
    </div>
</div>
@endsection
