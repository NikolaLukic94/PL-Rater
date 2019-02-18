@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header text-center">General Info</div>
                    <div class="card-body">
                        <form method="POST" action="/file/update/general-info/{{$file->id}}">
                            {{ csrf_field()  }}
                            {{ method_field('POST') }}                        
                                <p>Named Insured:</p> 
                                <input type="text" value="{{$file->named_insured}}" name="named_insured" required><br>
                                <p>Additional Named Insured/DBA:</p>
                                <input type="text" value="{{$file->additional_ni}}" name="additional_ni"><br>
                                <p>Type of entitiy:</p>
                                <input type="text" value="{{$file->entity_type}}" name="entity_type" required><br>
                                <p>SSN:</p>
                                <input type="text" value="{{$file->ssn}}" name="ssn"><br>
                                <hr>
                                <!-- Mailing address -->
                                <p>Street name/number:</p>
                                <input type="text" value="{{$file->mailing_address_street_name_and_number}}" name="mailing_address_street_name_and_number" required><br>
                                <p>City:</p>
                                <input type="text" value="{{$file->mailing_address_city}}" name="mailing_address_city" required><br>
                                <p>ZIP code:</p>
                                <input type="text" value="{{$file->mailing_address_zip}}" name="mailing_address_zip" required><br>
                                <p>County:</p>
                                <input type="text" value="{{$file->mailing_address_county}}" name="mailing_address_county" required><br>
                                <p>State:</p>
                                <input type="text" value="{{$file->mailing_address_state}}" name="mailing_address_state" required><br>
                                <hr>
                                <!-- Location address -->
                                <p>Street name/number:</p>
                                <input type="text" value="{{$file->location_address_street_name_and_number}}" name="location_address_street_name_and_number" required><br>
                                <p>City:</p>
                                <input type="text" value="{{$file->location_address_city}}" name="location_address_city" required><br>
                                <p>ZIP code:</p>
                                <input type="text" value="{{$file->location_address_zip}}" name="location_address_zip" required><br>
                                <p>County:</p>
                                <input type="text" value="{{$file->location_address_county}}" name="location_address_county" required><br>
                                <p>State:</p>
                                <input type="text" value="{{$file->mailing_address_state}}" name="location_address_state" required><br>          
                                <br>
                            <button type="submit" class="btn btn-outline-secondary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center"><b>--  {{$file->named_insured}}  --</b></div>
                    <div class="card-body">
                        <div class="col-md-6">
                            <h5>Status: {{$file->status}}</h5>
                        </div>    
                            <hr>
                        <div class="col-md-6">                            
                            <h5>Underwriter:</h5>
                        </div>    
                            <hr>
                        <div class="col-md-6"> 
                            <h5>Agency: {{$file->agency_name}}</h5>
                        </div>
                            <hr>
                        <div class="col-md-6">
                            <h5>Agency status:</h5>
                        </div>                        
                            <hr>
                        <div class="col-md-6">                            
                            <h5>Effective date: {{$file->effective_date}}</h5>
                        </div>    
                        </div>
                    </div>     

                    <br>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <form method="POST" action="/uploadImg" enctype="multipart/form-data">
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        @if (session('status'))
                            <div class="alert alert-success">
                        {{ session('status') }}
                            </div>
                        @endif
                         {!! csrf_field() !!}
                         <div class="form-group">
                         <label for="image">Choose an image</label>
                         <input type="file" id="image" name="image">
                         </div>
                         <button type="submit" class="btn btn-default">Upload</button>
                    </form>
                </div></div></div>
                </div>    
            <div class="card">
                <div class="card-header"></div>
                    <div class="card-body">
                        <p>Info</p>
                        <hr>
                        <p>Documents</p>
                        <hr>
                        <p><a href="/rater/prepare/{{$file->id}}">Rate It</a></p>
                        <hr>
                        <p><a href="/subs/show/{{$file->submission_id}}">Submission</a></p>
                        <hr>
                        <p>Quote</p>
                        <hr>
                        <p>Binder</p>
                        <hr>
                        <p>Policy</p>
                        <hr>
                        <p>Atachments</p>
                        <hr>
                        <p>Finance</p>
                        <hr>
                        <p>Support</p>
                        <hr>
                        <p>Notes</p>
                        <hr>
                        <p>All</p>
                        <hr>
                        <p>Log</p>                        
                    </div>
                </div>
            </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
