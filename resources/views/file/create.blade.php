@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <p>Named Insured:</p> 
                    <input type="text" name="lname"><br>
                    <p>Additional Named Insured/DBA:</p>
                    <input type="text" name="lname"><br>
                    <p>Type of entitiy:</p>
                    <input type="text" name="lname"><br>
                    <p>SSN:</p>
                    <input type="text" name="lname"><br>

                    <hr>
                    <!-- Mailing address -->
                    <p>Street name/number:</p>
                    <input type="text" name="lname"><br>
                    <p>Line 2:</p>
                    <input type="text" name="lname"><br>
                    <p>City:</p>
                    <input type="text" name="lname"><br>
                    <p>ZIP code:</p>
                    <input type="text" name="lname"><br>
                    <p>County:</p>
                    <input type="text" name="lname"><br>

                    <hr>
                    <!-- Location address -->
                    <p>Street name/number:</p>
                    <input type="text" name="lname"><br>
                    <p>Line 2:</p>
                    <input type="text" name="lname"><br>
                    <p>City:</p>
                    <input type="text" name="lname"><br>
                    <p>ZIP code:</p>
                    <input type="text" name="lname"><br>
                    <p>County:</p>
                    <input type="text" name="lname"><br>

                    <button type="button" class="btn btn-default">Change status</button>
                    <button type="button" class="btn btn-primary">Rate</button>
                    <button type="button" class="btn btn-success">Test</button>
                    <button type="button" class="btn btn-info">Test</button>

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
