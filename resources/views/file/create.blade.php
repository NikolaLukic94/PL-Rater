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
                    <p>Effective date:</p> 
                    <input type="text" value="{{$submission->effective_date}}" name="effective_date" required><br>
                    <p>Expiration_date:</p>
                    <input type="text" value="{{$submission->expiration_date}}" name="expiration_date"><br>
                    <hr>   
                    <p>Named Insured:</p> 
                    <input type="text" value="{{$submission->named_insured}}" name="named_insured" required><br>
                    <p>Additional Named Insured/DBA:</p>
                    <input type="text" value="{{$submission->additional_ni}}" name="additional_ni"><br>
                    <p>Type of entitiy:</p>
                    <input type="text" value="{{$submission->entity_type}}" name="entity_type" required><br>
                    <p>SSN:</p>
                    <input type="text" value="{{$submission->ssn}}" name="ssn"><br>
                    <hr>
                    <!-- Mailing address -->
                    <p>Street name/number:</p>
                    <input type="text" value="{{$submission->street_name_and_number}}" name="mailing_address_street_name_and_number" required><br>
                    <p>City:</p>
                    <input type="text" value="{{$submission->city}}" name="mailing_address_city" required><br>
                    <p>ZIP code:</p>
                    <input type="text" value="{{$submission->zip}}" name="mailing_address_zip" required><br>
                    <p>County:</p>
                    <input type="text" value="{{$submission->county}}" name="mailing_address_county" required><br>
                    <p>State:</p>
                    <select name="mailing_address_state" class="col-md-4 form-group">
                      <option  value="{{$submission->mailing_address_state}}"></option>       
                          @if($state)
                            @for($i = 1; $i < count($state); $i++)      
                                 <option value="{{$i}}">{{$state[$i]}}</option>
                            @endfor  
                          @endif                             
                    </select>                       
                    <hr>
                    <!-- Location address -->
                    <p>Street name/number:</p>
                    <input type="text" value="{{$submission->street_name_and_number}}" name="location_address_street_name_and_number" required><br>
                    <p>City:</p>
                    <input type="text" value="{{$submission->city}}" name="location_address_city" required><br>
                    <p>ZIP code:</p>
                    <input type="text" value="{{$submission->zip}}" name="location_address_zip" required><br>
                    <p>County:</p>
                    <input type="text" value="{{$submission->county}}" name="location_address_county" required><br>
                    <p>State:</p>
                    <select name="location_address_state" class="col-md-4 form-group">
                      <option  value="{{$submission->location_address_state}}"></option>       
                          @if($state)
                            @for($i = 1; $i < count($state); $i++)      
                                 <option value="{{$i}}">{{$state[$i]}}</option>
                            @endfor  
                          @endif                            
                    </select>         
                    <br>
                    <button type="button" href="/file/create" class="btn btn-default">Log</button> &nbsp;
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button class="button is-primary is-outlined" href="/file/create/{{$submission->id}}">Submit</button>
                </form>
                    <!--- this should be separate tabs in column next to this one 
                    <p>Info</p>
                    <p>Documents</p>
                    <p>Submission</p>
                    <p>Quote</p>
                    <p>Binder</p>
                    <p>Policy</p>
                    <p>Atachments</p>
                    <p>Finance</p>
                    <p>Support</p>
                    <button type="button" class="btn btn-success">Test</button>
                    <button type="button" class="btn btn-info">Test</button>
                   end -->
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
