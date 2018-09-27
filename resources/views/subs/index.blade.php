@extends('layout')

<div class="container">
  <div class="block">
    <form class="search-form search-form-basic" action="/subs/index" method="post">
      {{ csrf_field() }}
      <div class="columns ">
        <div class="column">
          <label for="search_email">LOB:</label>
          <input type="text" name="search_lob" id="search_lob" class="form-control" @if(isset(Session::get('inputs')['search_lob'])) value="{{ Session::get('inputs')['search_lob'] }}" @endif>
        </div> 
        <div class="column">
          <label for="search_agency_name">Agency:</label>
          <input type="text" name="search_agency_name" id="search_agency_name" class="form-control" @if(isset(Session::get('inputs')['search_agency_name'])) value="{{ Session::get('inputs')['search_agency_name'] }}" @endif>
        </div> 
        <div class="column">
          <label for="search_type_of_coverage">Type of Coverage:</label>
          <input type="text" name="search_type_of_coverage" id="search_type_of_coverage" class="form-control" @if(isset(Session::get('inputs')['search_type_of_coverage'])) value="{{ Session::get('inputs')['search_type_of_coverage'] }}" @endif>
        </div>    
        <div class="column">
          <label for="search_location">Effective date:</label>
          <input type="date" name="search_effective_date" id="search_effective_date" class="form-control" 
           @if(isset(Session::get('inputs')['search_effective_date'])) value="{{ Session::get('inputs')['search_effective_date'] }}" @endif>
        </div>
        <div class="column">
          <label for="search_state">State:</label>
          <input type="text" name="search_state" id="search_state" class="form-control" @if(isset(Session::get('inputs')['search_state'])) value="{{ Session::get('inputs')['search_state'] }}" @endif>
        </div> 
      </div>
    </form>
  </div>
  <div class="block">
    <button class="button is-primary is-outlined">Submit</button>
  </div>
  <div class="columns">

<table class="table">
  <thead>
    <tr>
    <th>
    	<label class="checkbox">
  			<input type="checkbox">
		</label>
	  </th>	
      <th><abbr title="Named_insured">Named Insured</abbr></th>
      <th>Days Old</th>
      <th><abbr title="">Status</abbr></th>
      <th><abbr title="">W</abbr></th>
      <th><abbr title="">D</abbr></th>
      <th><abbr title="">L</abbr></th>
      <th><abbr title="">GF</abbr></th>
      <th><abbr title="">GA</abbr></th>
      <th><abbr title="">GD</abbr></th>
      <th><abbr title="">Pts</abbr></th>
    </tr>
  </thead>
  <tr>
      <th>1</th>
      <td><a href="">Random Text</a> <strong>(C)</strong>
      </td>
      <td>38</td>
      <td>23</td>
      <td>12</td>
      <td>3</td>
      <td>68</td>
      <td>36</td>
      <td>+32</td>
      <td>81</td>
    </tr>