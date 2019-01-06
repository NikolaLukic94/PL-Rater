@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                @if(isset($submission))
                    <p>Named Insured:</p> 
                    <input type="text" value="{{$submission->named_insured}}" name="lname"><br>
                    <p>Additional Named Insured/DBA:</p>
                    <input type="text" value="{{$submission->additional_ni}}" name="lname"><br>
                    <p>Type of entitiy:</p>
                    <input type="text" value="{{$submission->entity_type}}" name="lname"><br>
                    <p>SSN:</p>
                    <input type="text" value="{{$submission->ssn}}" name="lname"><br>

                    <hr>
                    <!-- Mailing address -->
                    <p>Street name/number:</p>
                    <input type="text" value="{{$submission->street_name_and_number}}" name="lname"><br>
                    <p>City:</p>
                    <input type="text" value="{{$submission->city}}" name="lname"><br>
                    <p>ZIP code:</p>
                    <input type="text" value="{{$submission->zip}}" name="lname"><br>
                    <p>County:</p>
                    <input type="text" value="{{$submission->county}}" name="lname"><br>

                    <hr>
                    <!-- Location address -->
                    <p>Street name/number:</p>
                    <input type="text" value="{{$submission->street_name_and_number}}" name="lname"><br>
                    <p>City:</p>
                    <input type="text" value="{{$submission->city}}" name="lname"><br>
                    <p>ZIP code:</p>
                    <input type="text" value="{{$submission->zip}}" name="lname"><br>
                    <p>County:</p>
                    <input type="text" value="{{$submission->county}}" name="lname"><br>

                    <button type="button" class="btn btn-default">Change status</button>
                    <button type="button" class="btn btn-primary">Rate</button>
                    <button type="button" class="btn btn-success">Test</button>
                    <button type="button" class="btn btn-info">Test</button>
                @endif    
                    <!--- this should be separate tabs in column next to this one -->
                    <p>Info</p>
                    <p>Documents</p>
                    <p>Submission</p>
                    <p>Quote</p>
                    <p>Binder</p>
                    <p>Policy</p>
                    <p>Atachments</p>
                    <p>Finance</p>
                    <p>Support</p>
                    <!-- end -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
