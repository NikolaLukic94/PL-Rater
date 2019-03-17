@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PLQR</title>
</head>
<body>
  <div class="d-flex" id="wrapper">
    @include('partials.sidebar')
    <!-- Page Content -->
    <div id="page-content-wrapper">
    @include('partials.navbar')
<form class="search-form search-form-basic" action="/subs/search/results" method="post">
    {{ csrf_field() }}
      <div class="form-row">        
        <div class="col-md-4 form-group">
          <label for="search_named_insured">Named Insured:</label>
          <input type="text"  name="search_named_insured" id="search_named_insured" class="form-control input-sm" @if(isset(Session::get('inputs')['search_named_insured'])) value="{{ Session::get('inputs')['search_named_insured'] }}" @endif>
        </div> 
        <div class="col-md-4 form-group">
          <label for="test">Test:</label>
          <input type="text" name="test" id="test" class="form-control input-sm" @if(isset(Session::get('inputs')['test'])) value="{{ Session::get('inputs')['test'] }}" @endif>
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
          <button type="submit" href="/subs/search/results" class="btn btn-custom"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
          <a href="/users" class="btn btn-custom"><i class="fa fa-times-circle" aria-hidden="true"></i>Clear</a>
        </div>
      </div>
    </form>

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
                  <th><abbr title="">Aging date</abbr></th>                  
                  <th><abbr title="">State</abbr></th>
                  <th><abbr title="">Agency</abbr></th>
                  <th><abbr title="">Agent</abbr></th>
                  <th><abbr title="">Options</abbr></th>
                  <th><abbr title="">Created at</abbr></th>                  
                  <th><abbr title=""></abbr></th>                    
                  <th><abbr title=""></abbr></th>                  
                  <th><abbr title=""></abbr></th>
                </tr>
              </thead>
                @if($submission)
                  @foreach($submission as $sub)
                     @if($sub->status != 'not_logged')
                      <tr>
                        <td>
                        </td>
                        <td>
                          {{ $sub->named_insured }}
                        </td>
                        <td>
                          {{ $sub->lob }}
                        </td>
                        <td>
                          {{ $sub->effective_date }}
                        </td>
                        <td>
                          <p>1</p>
                        </td>                        
                        <td>
                          {{ $sub->location_address_state }}
                        </td>
                        <td>
                          {{ $sub->agency_name }}
                        </td>
                        <td>
                          {{ $sub->agent_name }}
                        </td>
                        <td>
                          @if(isset($sub->created_at))
                            {{date('m/d/Y',strtotime($sub->created_at))}}
                          @endif  
                        </td>                        
                        <td>
                          <a class="btn btn-primary" href="/subs/search" role="button"><i class="fas fa-search-plus"></i></a> &nbsp;        
 
                        </td>   
                        <td>
                            <a class="btn btn-primary" href="/subs/show/{{$sub->id}}" role="button">Open</a> &nbsp;
                          </form>                            
                        </td>                                     
                        <td>
                            <a class="btn btn-primary" href="/file/create/{{$sub->id}}" role="button">Log</a> 
                        </td> 
                        <td>   
                            <form action="/subs/delete/{{ $sub->id }}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }} 
                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash"></i></button>
                            </form>                                  
                        </td>                                              
                    </tr>
                    @endif
                  @endforeach
                @else
                    <p>There are no new emails!</p>
                @endif
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
</body>
</html>