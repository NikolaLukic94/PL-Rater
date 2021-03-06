@extends('layouts.app')

@section('content')
<div class="row">
  <div class="container">
  <div class="col-lg-12 col-md-12">
    <form class="search-form search-form-basic" action="/subs/search/results" method="post">
    {{ csrf_field() }}
      <div class="form-row">        
        <div class="col-md-4 form-group">
          <label for="search_named_insured">Named Insured:</label>
          <input type="text"  name="search_named_insured" id="search_named_insured" class="form-control input-sm" @if(isset(Session::get('inputs')['search_named_insured'])) value="{{ Session::get('inputs')['search_named_insured'] }}" @endif>
        </div> 
        <div class="col-md-4 form-group">
          <label for="search_type_of_coverage">Type of Coverage:</label>
          <input type="text" name="search_type_of_coverage" id="search_type_of_coverage" class="form-control input-sm" @if(isset(Session::get('inputs')['search_type_of_coverage'])) value="{{ Session::get('inputs')['search_type_of_coverage'] }}" @endif>
        </div> 
        <div class="col-md-4 form-group">
          <label for="search_lob">LOB:</label>
          <input type="text" name="search_lob" id="search_lob" class="form-control input-sm" placeholder="" @if(isset(Session::get('inputs')['search_lob'])) value="{{ Session::get('inputs')['search_lob'] }}" @endif>
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
          <label for="search_eff_from_date">From:</label>
          <input type="date" name="search_eff_from_date" id="search_eff_from_date" class="form-control input-sm" 
           @if(isset(Session::get('inputs')['search_eff_from_date'])) value="{{ Session::get('inputs')['search_from_date'] }}" @endif>
        </div> 
        <div class="col-md-4 form-group">
          <label for="search_eff_to_date">To:</label>
          <input type="date" name="search_eff_to_date" id="search_eff_to_date" class="form-control input-sm" 
           @if(isset(Session::get('inputs')['search_to_date'])) value="{{ Session::get('inputs')['search_eff_to_date'] }}" @endif>
        </div>  
      </div>
      <div class="form-row">
        <div class="col-md-12 col-lg-12">
          <button type="submit" href="/subs/search/results" class="btn btn-custom"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
          <a href="/users" class="btn btn-custom"><i class="fa fa-times-circle" aria-hidden="true"></i>Clear</a>
        </div>
      </div>
    </form>
  </div>
  <br>
@endsection