@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"></div>
                <div class="card-body">
                  <h3>Rates not found!</h3> 
                  <br>
                  <p>Maybe to try to define them before trying to rate?</p>
                  <br>
                  <p>You can do that <a href="/rate/define">here</a>.</p> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
