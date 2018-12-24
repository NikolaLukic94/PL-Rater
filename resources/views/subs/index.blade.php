@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Email queue (not logged in system):</div>
          <div class="card-body">
            <form action="/rate/create" method="POST">
              {{ csrf_field() }}
            <table class="table">     
              <thead>
                <tr>
                  <th>
                  <label class="checkbox">
                    <input type="checkbox">
                  </label>
                  </th> 
                  <th><abbr title="Named_insured">Named Insured</abbr></th>
                  <th>Type of coverage</th>
                  <th><abbr title="">lob</abbr></th>
                  <th><abbr title="">Effective date</abbr></th>
                  <th><abbr title="">State</abbr></th>
                  <th><abbr title="">Agency</abbr></th>
                  <th><abbr title="">Agent</abbr></th>
                  <th><abbr title="">Action</abbr></th>
                  <th><abbr title="">Action</abbr></th>                  
                  <th><abbr title="">Action</abbr></th>
                </tr>
              </thead>
                @if($submission)
                  @foreach($submission as $sub)
              <tr>
              <td>
              </td>

              <td>
                {{ $sub->named_insured }}
              </td>

              <td>
                {{ $sub->type_of_coverage }}
              </td>

              <td>
                {{ $sub->lob }}
              </td>

              <td>
                {{ $sub->effective_date }}
              </td>

              <td>
                {{ $sub->state }}
              </td>

              <td>
                {{ $sub->agency_name }}
              </td>

              <td>
                {{ $sub->agent_name }}
              </td>

              <td>
                <a class="btn btn-primary" href="/subs/search" role="button">Search</a> &nbsp;         
              </td>               
              <td>
                <button type="button" class="btn btn-success">Log</button>                
              </td> 
              <td>             
                <button type="button" class="btn btn-success">Delete</button> 
              </td>                                              
            </tr>
                  @endforeach
                  @else
                    <p>There are no new emails!</p>
                @endif
              </div>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div>
</div>



























  <!--
  <div class="card-body">
<table class="table">     
  <thead>
    <tr>
    <th>
      <label class="checkbox">
        <input type="checkbox">
    </label>
    </th> 
      <th><abbr title="Named_insured">Named Insured</abbr></th>
      <th>Type of coverage</th>
      <th><abbr title="">lob</abbr></th>
      <th><abbr title="">Effective date</abbr></th>
      <th><abbr title="">State</abbr></th>
      <th><abbr title="">Agency</abbr></th>
      <th><abbr title="">Agent</abbr></th>
      <th><abbr title="">Action</abbr></th>
    </tr>
  </thead>
@if($submission)
  @foreach($submission as $sub)
  <tr>
              <td>
                
              </td>
              <td>
                {{ $sub->named_insured }}
              </td>

              <td>
                {{ $sub->type_of_coverage }}
              </td>

              <td>
                {{ $sub->lob }}
              </td>

              <td>
                {{ $sub->effective_date }}
              </td>

              <td>
                {{ $sub->state }}
              </td>

              <td>
                {{ $sub->agency_name }}
              </td>

              <td>
                {{ $sub->agent_name }}
              </td>       
              <td>
                <button>Search</button>
                <button>Index</button>
                <button>Create new file</button>
                <button>Delete</button>
              </td>                   
    </tr>
    @endforeach
    
    @else
    <p>There are no pending subs!</p>
@endif
                <button>Pdf</button>
</div>
</div>
</div>
@endsection('content')
-->





