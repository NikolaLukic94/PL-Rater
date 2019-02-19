@extends('layouts.app')

@section('content')
<div class="row">
  <div class="container">
  <div class="col-lg-12 col-md-12">
    <form class="search-form search-form-basic" action="/file/search/results" method="post">
    {{ csrf_field() }}
      <div class="form-row">        
        <div class="col-md-4 form-group">
          <label for="search_named_insured">Named Insured:</label>
          <input type="text"  name="search_named_insured" id="search_named_insured" class="form-control input-sm" @if(isset(Session::get('inputs')['search_named_insured'])) value="{{ Session::get('inputs')['search_named_insured'] }}" @endif>
        </div> 
        <div class="col-md-4 form-group">
          <label for="search_type_of_coverage">//:</label>
          <input type="text" name="search_type_of_coverage" id="search_type_of_coverage" class="form-control input-sm" @if(isset(Session::get('inputs')['search_type_of_coverage'])) value="{{ Session::get('inputs')['search_type_of_coverage'] }}" @endif>
        </div> 
        <div class="col-md-4 form-group">
          <label for="search_lob">LOB:</label>
          <input type="text" name="search_lob" id="search_lob" class="form-control input-sm" placeholder="" @if(isset(Session::get('inputs')['search_lob'])) value="{{ Session::get('inputs')['search_lob'] }}" @endif>
        </div>  
        <div class="col-md-4 form-group">
          <label for="search_effective_date">Effective_date:</label>
          <input type="date" name="search_effective_date" id="search_effective_date" class="form-control input-sm" 
           @if(isset(Session::get('inputs')['search_effective_date'])) value="{{ Session::get('inputs')['search_effective_date'] }}" @endif>
        </div> 
        <div class="col-md-4 form-group">
          <label for="search_agency_name">Agency:</label>
          <input type="text" name="search_agency_name" id="search_agency_name" class="form-control input-sm" 
           @if(isset(Session::get('inputs')['search_agency_name'])) value="{{ Session::get('inputs')['search_agency_name'] }}" @endif>
        </div> 
        <div class="col-md-4 form-group">
          <label for="search_agent_name">Agency:</label>
          <input type="text" name="search_agent_name" id="search_agent_name" class="form-control input-sm" 
           @if(isset(Session::get('inputs')['search_agent_name'])) value="{{ Session::get('inputs')['search_agent_name'] }}" @endif>
        </div>                 
        <select name="options" class="col-md-4 form-group">
         <option value="">--- State ---</option>
          <option  value="LA">LA</option>
          <option  value="FL">FL</option>
          <option  value="CA">CA</option>
          <option  value="TX">TX</option>          
          <option  value="MS">MS</option>
        </select>
        <div class="col-md-4 form-group">
          <label for="search_from_date">From:</label>
          <input type="date" name="search_from_date" id="search_from_date" class="form-control input-sm" 
           @if(isset(Session::get('inputs')['search_from_date'])) value="{{ Session::get('inputs')['search_from_date'] }}" @endif>
        </div> 
        <div class="col-md-4 form-group">
          <label for="search_to_date">To:</label>
          <input type="date" name="search_to_date" id="search_to_date" class="form-control input-sm" 
           @if(isset(Session::get('inputs')['search_to_date'])) value="{{ Session::get('inputs')['search_to_date'] }}" @endif>
        </div>  
      </div>
      <div class="form-row">
        <div class="col-md-12 col-lg-12">
          <button type="submit" class="btn btn-custom"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
          <a href="/subs/search" class="btn btn-custom"><i class="fa fa-times-circle" aria-hidden="true"></i>Clear</a>
        </div>
      </div>
    </form>
  </div>
  <br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><b>Submissions (existing in system):</b></div>
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
                      <th><abbr title="">lob</abbr></th>
                      <th><abbr title="">Effective date</abbr></th>
                      <th><abbr title="">State</abbr></th>
                      <th><abbr title="">Agency</abbr></th>
                      <th><abbr title="">Agent</abbr></th>
                      <th><abbr title=""></abbr></th>
                      <th><abbr title=""></abbr></th>  
                      <th><abbr title=""></abbr></th>                                          
                    </tr>
                  </thead>
                    @if($files)
                      @foreach($files as $file)
                          <tr>
                            <td>
                              <label class="checkbox">
                                <input type="checkbox">
                              </label>
                            </td>
                            <td>
                              @if(isset($file->named_insured))
                              {{ $file->named_insured }}
                              @endif
                            </td>
                            <td>
                              {{ $file->lob }}
                            </td>
                            <td>
                              {{ $file->effective_date }}
                            </td>
                            <td>
                              {{ $file->location_address_state }}
                            </td>
                            <td>
                              {{ $file->agency_name }}
                            </td>
                            <td>
                              {{ $file->agent_name }}
                            </td>
                            <td>
                              <a class="btn btn-primary" href="/file/show/{{$file->id}}" role="button">Open</a> &nbsp;         
                            </td> 
                            <td>
                              <a class="btn btn-primary" href="/subs/search" role="button">Add new</a> &nbsp;
                            </td>   
                            <td>
                              <a class="btn btn-primary" href="" role="button">Rate</a> &nbsp;
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
@endsection